<script type="text/javascript">
// <[CDATA[
Ext.onReady(function() {
	tinyMCE.init(<?php echo $this->modx->toJSON($this->config); ?>);
});

MODx.loadRTE = function(id) {
    if (!tinyMCE.get(id)) {
        tinyMCE.execCommand('mceAddControl', false, id);
    } else {
        tinyMCE.execCommand('mceRemoveControl', false, id);
    }
}

function tvOnTinyMCEChangeCallBack(i) {
    triggerRTEOnChange();
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