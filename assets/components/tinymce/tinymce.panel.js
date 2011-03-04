Tiny.Editor = function(config) {
    config = config || {};
    config.tinyConfig = config.tinyConfig || Tiny.config;
    config.tinyConfig = config.tinyConfig || {};
    Ext.applyIf(config.tinyConfig,{
        setup: (function(ed) {
            ed.onInit.add(this.onLoad);
            ed.onKeyUp.add(this.onChange);
        }).createDelegate(this)
        ,apply_source_formatting: true
        ,browserUrl: MODx.config.manager_url+'?a='+MODx.action['browser']
        ,button_tile_map: false
        ,cleanup: true
        ,compressor: ''
        ,convert_fonts_to_spans: true
        ,convert_newlines_to_brs: false
        ,element_format: 'xhtml'
        ,element_list: ''
        ,entities: ''
        ,entity_encoding: 'named'
        ,file_browser_callback: 'Tiny.loadBrowser'
        ,formats: 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address'
        ,frontend: false
        ,height: '400px'
        ,invalid_elements: ''
        ,language: MODx.config['manager_language']
        ,mode: 'none'
        ,nowrap: false
        ,path: Tiny.config.assets_path
        ,path_options: ''
        ,plugin_insertdate_dateFormat: '%Y-%m-%d'
        ,plugin_insertdate_timeFormat: '%H:%M:%S'
        ,relative_urls: true
        ,remove_line_breaks: false
        ,resource_browser_path: Tiny.config.manager_url+'controllers/browser/index.php?'
        ,width: '90%'

        ,buttons1: MODx.config['tiny.custom_buttons1']
        ,buttons2: MODx.config['tiny.custom_buttons2']
        ,buttons3: MODx.config['tiny.custom_buttons3']
        ,buttons4: MODx.config['tiny.custom_buttons4']
        ,css_path: MODx.config['editor_css_path'] || ''
        ,css_selectors: MODx.config['tinymce.css_selectors']
        ,plugins: MODx.config['tiny.custom_plugins']

        ,theme: MODx.config['tiny.editor_theme'] || 'advanced'
        ,theme_advanced_buttons1: MODx.config['tiny.custom_buttons1']
        ,theme_advanced_buttons2: MODx.config['tiny.custom_buttons2']
        ,theme_advanced_buttons3: MODx.config['tiny.custom_buttons3']
        ,theme_advanced_buttons4: MODx.config['tiny.custom_buttons4']
        ,theme_advanced_blockformats: MODx.config['tiny.blockformats']
        ,theme_advanced_resizing: false
        ,theme_advanced_resize_horizontal: false
        ,theme_advanced_statusbar_location: 'bottom'
        ,theme_advanced_toolbar_align: 'left'
        ,theme_advanced_disable: ''
        ,theme_advanced_toolbar_location: 'top'

        ,toolbar_align: MODx.config['manager_direction'] || 'rtl'
        ,use_browser: MODx.config['use_browser'] || true

        ,skin: MODx.config['tiny.skin']
        ,skin_variant: MODx.config['tiny.skin_variant']
        ,object_resizing: MODx.config['tiny.object_resizing'] || true
        ,table_inline_editing: MODx.config['tiny.table_inline_editing'] || true
        ,template_selected_content_classes: MODx.config['tiny.template_selected_content_classes']
    });
    Ext.applyIf(config,{
        width: '90%'
    });
    Tiny.Editor.superclass.constructor.call(this,config);
    this.config = config;
    this.addEvents({
        'load': true
        ,'ajaxload': true
    });
    this.on('render',this.onTinyRender,this);
    this.on('ajaxload',this.onAjaxLoad,this);
};
Ext.extend(Tiny.Editor,Ext.form.TextArea,{
    editor: null

    ,getTinyId: function() {
        return this.getEl().dom.id;
    }

    ,setValue: function(v) {
        var c = tinyMCE.get(this.getTinyId());
        if (c) c.setContent(v);
    }

    ,onTinyRender: function() {
        var oid = Ext.get(this.getTinyId());
        if (!oid) return;

        var s = this.config.tinyConfig;
        s.mode = 'exact';
        tinyMCE.init(s);
        tinyMCE.execCommand('mceAddControl', false,this.getTinyId());
        this.fireEvent('load');
    }

    ,onChange: function() {}
    ,onLoad: function(ed) {
        return false;
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
    ,onAjaxLoad: function() {
        var els = Ext.query('.modx-richtext');
        Ext.each(els,function(el,i) {
            el = Ext.get(el);
            tinyMCE.execCommand('mceAddControl', false, el.dom.id);
        },this);

        this.fireEvent('ajaxload');
    }
    ,toggle: function(e,t) {
        t = t.id.replace(/-toggle/,'');
        ed = tinyMCE.get(t);
        if (ed) {
            ed.isHidden() ? ed.show() : ed.hide();
        }
    }

    ,loadBrowser: function(fld, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: this.config.browserUrl || Tiny.config.browserUrl
            ,width: screen.width * 0.7
            ,height: screen.height * 0.7
            ,resizable: 'yes'
            ,inline: 'yes'
            ,close_previous: 'no'
        },{
            window: win
            ,input: fld
        });
        return false;
    }
});
Ext.reg('tinymce',Tiny.Editor);
