var Tiny = {    
    onLoad: function(ed) {
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
    
    ,onTVLoad: function() {
        var els = Ext.query('.modx-richtext');
        var ed;
        Ext.each(els,function(el,i) {
            el = Ext.get(el);        
            tinyMCE.execCommand('mceAddControl', false, el.dom.id);
            ed = tinyMCE.get(el.dom.id);
            if (ed) {
                ed.onChange.add(this.onChange);
            }
        },this);
    }
    ,onTVUnload: function() {
        var els = Ext.query('.modx-richtext');
        var ed;
        Ext.each(els,function(el,i) {
            el = Ext.get(el);        
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
        Ext.getCmp('modx-panel-resource').markDirty();
        
        if (typeof(tinyMCE) != 'undefined') {
            try {
                tinyMCE.triggerSave();
                var ta = Ext.getCmp(ed.id);
                if (ta && ed && ed.getContent) {
                    ta.setValue(ed.getContent());
                } else {
                    MODx.sleep(3);
                    ta = Ext.get(ed.id);
                    if (ta) {
                        ta.dom.value = ed.getContent();
                    }
                }
            } catch (e) {}
        }
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
    tinyMCE.init(s);

    var ptv = Ext.getCmp('modx-panel-resource-tv');
    if (ptv) { ptv.on('load',Tiny.onTVLoad); }

    var oid = Ext.get(id);
    if (!oid) return;
    tinyMCE.execCommand('mceAddControl',false,id);
};
MODx.afterTVLoad = function() {
    Tiny.onTVLoad();
};
MODx.unloadTVRTE = function() {
    Tiny.onTVUnload();
};