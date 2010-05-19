/**
 * @author MODx CMF
 */
(function() {
    tinymce.PluginManager.requireLangPack('modxlink');
    tinymce.create('tinymce.plugins.MODxLinkPlugin', {
        init : function(ed, url) {
            this.editor = ed;
            // Register commands
            ed.addCommand('mceMODxLink', function() {
                var se = ed.selection;

                // No selection and not in link
                if (se.isCollapsed() && !ed.dom.getParent(se.getNode(), 'A')) { return; }

                ed.windowManager.open({
                    file : url + '/link.php',
                    width : 480 + parseInt(ed.getLang('modxlink.delta_width', 0)),
                    height : 400 + parseInt(ed.getLang('modxlink.delta_height', 0)),
                    inline : 1
                }, {
                    plugin_url : url
                });
            });

            // Register buttons
            ed.addButton('modxlink', {
                title : 'modxlink.link_desc'
                ,cmd: 'mceMODxLink'
                ,image: url+'/img/link.png'
            });

            ed.addShortcut('ctrl+k', 'modxlink.modxlink_desc', 'mceMODxLink');

            ed.onNodeChange.add(function(ed, cm, n, co) {
                cm.setDisabled('modxlink', co && n.nodeName != 'A');
                cm.setActive('modxlink', n.nodeName == 'A' && !n.name);
            });
        }


        ,createControl: function(n,cm) {
            return null;
        }


        ,getInfo : function() {
            return {
                longname : 'MODx link'
                ,author : 'MODx CMF'
                ,authorurl : 'http://modxcms.com'
                ,infourl : 'http://modxcms.com'
                ,version : '1.0'
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('modxlink', tinymce.plugins.MODxLinkPlugin);
})();