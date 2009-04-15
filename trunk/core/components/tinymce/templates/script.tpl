<script type="text/javascript">
// <[CDATA[
Ext.onReady(function() {
	tinyMCE.init(<?php echo $this->modx->toJSON($this->config); ?>);
});

MODx.loadRTE = function(id) {
    var oid = Ext.get(id);
    if (!oid) return;
      
    if (!tinyMCE.get(id)) {
        tinyMCE.execCommand('mceAddControl', false, id);
    } else {
        tinyMCE.execCommand('mceRemoveControl', false, id);
    }
}

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