
Tiny.browserCallback = function(data) {
    var FileBrowserDialogue = {
        init : function () {}
        ,selectURL : function (url) {
            url = url.replace('//','/');
            var win = tinyMCEPopup.getWindowArg('window');
        
            // insert information now
            win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value = url;
        
            if (typeof(win.ImageDialog) != 'undefined') {
                // for image browsers: update image dimensions
                if (win.ImageDialog.getImageData) {
                    win.ImageDialog.getImageData();
                }
                win.ImageDialog.showPreviewImage(url);
            }
        
            // close popup window
            tinyMCEPopup.close();
            win.focus(); win.document.focus();
        }
    };
    tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);

    function OpenFile(fileUrl){
        FileBrowserDialogue.selectURL(fileUrl);
    }
    var fileUrl = unescape(data.url);
    OpenFile(fileUrl);
};