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
        Ext.each(els,function(el,i) {
            el = Ext.get(el);
            tinyMCE.execCommand('mceAddControl', false, el.dom.id);
        },this);
        var btns = Ext.query('.modx-richtext-toggle');
        Ext.each(btns,function(el,i) {
            el = Ext.get(el);
            el.on('click',Tiny.toggle);
        });
    }
    
    ,toggle: function(e,t) {
        t = t.id.replace(/-toggle/,'');
        ed = tinyMCE.get(t);
        if (ed) {
            ed.isHidden() ? ed.show() : ed.hide();
        }
    }
    
    ,onChange: function(i) {
        MODx.triggerRTEOnChange('TinyMCE');
        
        if (typeof(tinyMCE) != 'undefined') {
            tinyMCE.triggerSave(true,true);
            var ta = Ext.get('ta');
            if (ta) {
                ta.dom.value = tinyMCE.activeEditor.getContent();
            }
                
            var el = null;    
            for (n in tinyMCE.editors) {
                inst = tinyMCE.editors[n];
                el = inst.editorId;
                Ext.get(el).dom.value = inst.getContent();
            }
            
        }
    }
    
    ,loadBrowser: function(fld, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: Tiny.config.browserUrl
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
    var oid = Ext.get(id);
    if (!oid) return;
    
    var s = Tiny.config;
    s.mode = 'exact';
    s.elements = id;
    tinyMCE.init(s);
    
    Ext.getCmp('modx-panel-resource-tv').on('load',Tiny.onTVLoad);
    Ext.get('ta-toggle').on('click',Tiny.toggle);
};