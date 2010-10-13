var Tiny = {
    button: {}
    ,onLoad: function(ed) {
        var el = Ext.get(ed.id+'_ifr');
        new MODx.load({
            xtype: 'modx-treedrop'
            ,target: el
            ,targetEl: el.dom
            ,iframe: true
            ,iframeEl: 'tinymce'
            ,onInsert: function(v) {
                tinyMCE.execCommand('mceInsertContent',false,v);
            }
        });
    }

    ,loadedTVs: []
    ,onTVLoad: function() {
        var els = Ext.query('.modx-richtext');
        var ed;
        Ext.each(els,function(el,i) {
            el = Ext.get(el);
            if (!el) {return;}
            if (Ext.isEmpty(Tiny.loadedTVs)) {Tiny.loadedTVs = [];}
            if (Tiny.loadedTVs.indexOf(el) != -1) {return;}

            tinyMCE.execCommand('mceAddControl', false, el.dom.id);
            ed = tinyMCE.get(el.dom.id);
            if (ed) {
                ed.execCommand('mceResize',false,'60%');
                //ed.onChange.add(this.onChange);
            }
            Tiny.loadedTVs.push(el);
        },this);
    }
    ,onTVUnload: function() {
        var els = Ext.query('.modx-richtext');
        var ed;
        Ext.each(els,function(el,i) {
            el = Ext.get(el);
            Tiny.loadedTVs.remove(el);
            tinyMCE.execCommand('mceRemoveControl', false, el.dom.id);
        },this);
    }
    
    ,toggle: function(e,t) {
        t = t.id.replace(/-toggle/,'');
        ed = tinyMCE.get(t);
        if (ed) {
            ed.isHidden() ? ed.show() : ed.hide();
        }
    }
    
    ,onChange: function(ed,e) {        
        if (!Ext.isEmpty(tinyMCE)) {
            ed.save();
            try {
                var ta = Ext.get(ed.id);
                if (ta) {
                    ta.dom.value = ed.getContent();
                }
            } catch (e) {}
        }

        Ext.getCmp('modx-panel-resource').markDirty();
    }
    
    ,loadBrowser: function(fld, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: Tiny.config.browserUrl+'&ctx='+(MODx.ctx || 'web')
            ,width: screen.width * 0.7
            ,height: screen.height * 0.7
            ,resizable: 'yes'
            ,inline: 'yes'
            ,close_previous: 'no'
        }, {
            window: win
            ,input: fld
        });
        return false;
    }

    /**
     * Prevents MODx tags from becoming &amp;=`value`
     */
    ,onCleanup: function(type,value) {
	switch (type) {
            case "get_from_editor":
            case "insert_to_editor":
                var regexp = /(\[\[[^\]]*)&amp;([^\[]*\]\])/g;
                value = value.replace(regexp,'$1&$2');
            break;
            case "submit_content":
                //value.innerHTML = value.innerHTML.replace('&amp;','&');
            break;
            case "get_from_editor_dom":
            case "insert_to_editor_dom":
            case "setup_content_dom":
            case "submit_content_dom":
                //value.innerHTML = value.innerHTML.replace('&amp;','&');
            break;
	}
        return value;
    }
    ,addContentBelow: function() {
        var below = Ext.get('modx-content-below');
        below.createChild({
            tag: 'div'
            ,id: 'tiny-content-below'
            ,style: 'margin-top: 5px;'
        });
        var tb = Ext.get('tiny-content-below');
        tb.createChild({
            tag: 'label'
            ,id: 'tiny-toggle-label'
        });
        var tbl = Ext.get('tiny-toggle-label');
        tbl.createChild({
            html: Tiny.lang.toggle_editor
            ,style: 'float: left; margin-right: 5px;'
        });
        var z = Ext.state.Manager.get(MODx.siteId+'-tiny');
        var chk = z === false || z === 'false' ? false : true;
        tbl.createChild({
            tag: 'input'
            ,type: 'checkbox'
            ,id: 'tiny-toggle-rte'
            ,name: 'tiny_toggle'
            ,value: 1
            ,checked: chk
        });
        var cb = Ext.get('tiny-toggle-rte');
        cb.dom.checked = chk;
        cb.on('click',function(a,b) {
            var cb = Ext.get(b);
            var id = 'ta';
            if (cb.dom.checked) {
                tinyMCE.execCommand('mceAddControl',false,id);
                Ext.state.Manager.set(MODx.siteId+'-tiny',true);
            } else {
                tinyMCE.execCommand('mceRemoveControl',false,id);
                Ext.state.Manager.set(MODx.siteId+'-tiny',false);
            }
        },this);
    }

    ,addContentAbove: function() {
        var above = Ext.get('modx-content-above');
        above.createChild({
            tag: 'div'
            ,id: 'tiny-content-above'
            ,style: 'margin-bottom: 5px;'
        });
        MODx.load({
            xtype: 'tiny-btn-image'
            ,text: 'Insert Image'
            ,listeners: {
                'select': function(data) {
                    var img = '<img src="'+data.relativeUrl+'" alt="" />';
                    tinyMCE.execCommand('mceInsertContent',false,img);
                }
            }
            ,renderTo: 'tiny-content-above'
        });   
    }
    ,onExecCommand: function(ed,el,cmd,ui,v) {
        Ext.getCmp('modx-panel-resource').markDirty();
	return false;
    }
};

MODx.loadRTE = function(id) {
    var s = Tiny.config || {};
    delete s.assets_path;
    delete s.assets_url;
    delete s.core_path;
    delete s.css_path;
    delete s.editor;
    delete s.id;
    delete s.mode;
    delete s.path;
    s.cleanup_callback = "Tiny.onCleanup";
    var z = Ext.state.Manager.get(MODx.siteId+'-tiny');
    if (z !== false) {
        delete s.elements;
    }
    tinyMCE.init(s);

    /*Tiny.addContentAbove();*/
    Tiny.addContentBelow();

    var ptv = Ext.getCmp('modx-panel-resource-tv');
    if (ptv) {ptv.on('load',Tiny.onTVLoad);}

    if (z !== false) {
        var oid = Ext.get(id);
        if (!oid) return;
        tinyMCE.execCommand('mceAddControl',false,id);
    }
};
MODx.afterTVLoad = function() {
    Tiny.onTVLoad();
};
MODx.unloadTVRTE = function() {
    Tiny.onTVUnload();
};

/* for future versions */
/*
Tiny.button.Image = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        
    });
    Tiny.button.Image.superclass.constructor.call(this,config);
    this.config = config;
    this.addEvents({select: true});
};
Ext.extend(Tiny.button.Image,Ext.Button,{
    onClick : function(btn){
        if (this.disabled){
            return false;
        }
        if (Ext.isEmpty(this.browser)) {
            this.browser = MODx.load({
                xtype: 'modx-browser'
                ,id: Ext.id()
                ,multiple: true
                ,prependPath: this.config.prependPath || null
                ,prependUrl: this.config.prependUrl || null
                ,hideFiles: this.config.hideFiles || false
                ,rootVisible: this.config.rootVisible || false
                ,listeners: {
                    'select': {fn: function(data) {
                        this.fireEvent('select',data);
                    },scope:this}
                }
            });
        }
        this.browser.show(btn);
        return true;
    }

    ,onDestroy: function(){
        Tiny.button.Image.superclass.onDestroy.call(this);
    }
});
Ext.reg('tiny-btn-image',Tiny.button.Image);
*/