<script type="text/javascript">
// <[CDATA[
Ext.onReady(function() {
    var p = <?php echo $this->modx->toJSON($this->config); ?>;
    p.setup = function(ed) { ed.onInit.add(MODx.onTinyLoad); };
	tinyMCE.init(p);
});

MODx.loadRTE = function(id) {
    var oid = Ext.get(id);
    if (!oid) return;
          
    if (!tinyMCE.get(id)) {
        tinyMCE.execCommand('mceAddControl', false, id);
    } else {
        tinyMCE.execCommand('mceRemoveControl', false, id);
    }
};
MODx.onTinyLoad = function(ed) {
    var el = Ext.get(ed.id+'_ifr');
    new MODx.load({
        xtype: 'modx-treedrop'
        ,target: el
        ,targetEl: el.dom
        ,iframe: true
        ,iframeEl: 'tinymce'
        ,onInsert: function(v) {
            tinyMCE.execInstanceCommand(ed.id,"mceInsertContent",false,v);
        }
    });
};
function tvOnTinyMCEChangeCallBack(i) {
    MODx.triggerRTEOnChange('TinyMCE');
    
    if (typeof(tinyMCE) != 'undefined') {
        tinyMCE.triggerSave(true,true);
        var ta = Ext.get('ta');
        if (ta) {
            ta.dom.value = tinyMCE.activeEditor.getContent();
        }
    }
}

function myFileBrowser (field_name, url, type, win) {       
    var cmsURL = '<?php echo $this->modx->config['base_url']; ?>manager/controllers/browser/index.php';
    
    tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        width : screen.width * 0.7,
        height : screen.height * 0.7,
        resizable : "yes",
        inline : "yes",
        close_previous : "no"
    }, {
        window : win,
        input : field_name
    });
    return false;
}
// ]]>
</script>