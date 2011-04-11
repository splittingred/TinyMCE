Ext.ns('Tiny');
Tiny.browserCallback = function(data) {
    var FileBrowserDialogue = {
        init : function () {}
        ,selectURL : function (url) {
            var win = tinyMCEPopup.getWindowArg('window');
        
            /* insert information now */
            win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value = url;
        
            if (typeof(win.ImageDialog) != 'undefined') {
                /* for image browsers: update image dimensions */
                if (win.ImageDialog.getImageData) {
                    win.ImageDialog.getImageData();
                }
                win.ImageDialog.showPreviewImage(url);
            }
        
            /* close popup window */
            tinyMCEPopup.close();
            win.focus(); win.document.focus();
        }
    };
    var fileUrl;
    if (inRevo20) {
        fileUrl = unescape(data.relativeUrl);
    } else {
        fileUrl = data.fullRelativeUrl;
    }
    tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);

    function OpenFile(fileUrl){
        FileBrowserDialogue.selectURL(fileUrl);
    }

    OpenFile(fileUrl);
};