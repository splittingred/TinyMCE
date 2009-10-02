<?php
class TinyMCE {
    /**
     * @var array $config The configuration array for TinyMCE.
     * @access private
     */
    var $config = array();
    var $jsLoaded = false;

    /**#@+
     * The TinyMCE constructor.
     *
     * @param modX $modx A reference to the modX constructor.
     */
    function TinyMCE(&$modx,$config = array()) {
        $this->__construct($modx,$config);
    }
    /** @ignore */
    function __construct(&$modx,$config = array()) {
        $this->modx =& $modx;

        $this->config = array_merge(array(
            'apply_source_formatting' => true,
            'assets_path' => $this->modx->getOption('assets_path').'components/tinymce/',
            'assets_url' => $this->modx->getOption('assets_url').'components/tinymce/',
            'button_tile_map' => false,
            'cleanup' => false,
            'compressor' => '',
            'convert_fonts_to_spans' => true,
            'convert_newlines_to_brs' => false,
            'core_path' => $this->modx->getOption('core_path').'components/tinymce/',
            'element_format' => 'xhtml',
            'element_list' => '',
            'entities' => '',
            'entity_encoding' => '',
            'file_browser_callback' => 'Tiny.launchBrowser',
            'formats' => 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address',
            'frontend' => false,
            'height' => '400px',
            'invalid_elements' => '',
            'language' => $this->modx->getOption('manager_language',null,'en'),
            'mode' => 'none',
            'nowrap' => false,
            'path' => $this->modx->getOption('assets_path').'components/tinymce/',
            'path_options' => '',
            'plugin_insertdate_dateFormat' => '%Y-%m-%d',
            'plugin_insertdate_timeFormat' => '%H:%M:%S',
            'relative_urls' => true,
            'remove_line_breaks' => false,
            'resource_browser_path' => $this->modx->getOption('manager_url').'controllers/browser/index.php?',
            'theme_advanced_blockformats' => 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address',
            'theme_advanced_resizing' => false,
            'theme_advanced_resize_horizontal' => false,
            'theme_advanced_statusbar_location' => 'bottom',
            'theme_advanced_toolbar_align' => 'left',
            'theme_advanced_disable' => '',
            'theme_advanced_toolbar_location' => 'top',
            'width' => '100%',
        ),$config);

        /* now do user/context/system setting overrides - these must override properties */
        $this->config = array_merge($this->config,array(
            'buttons1' => $this->modx->getOption('tinymce.custom_buttons1'),
            'buttons2' => $this->modx->getOption('tinymce.custom_buttons2'),
            'buttons3' => $this->modx->getOption('tinymce.custom_buttons3',null,''),
            'buttons4' => $this->modx->getOption('tinymce.custom_buttons4',null,''),
            'css_path' => $this->modx->getOption('editor_css_path'),
            'css_selectors' => $this->modx->getOption('tinymce.css_selectors',null,''),
            'plugins' => $this->modx->getOption('tinymce.custom_plugins',null,''),
            'theme' => $this->modx->getOption('tinymce.editor_theme',null,'simple'),
            'theme_advanced_buttons1' => $this->modx->getOption('tinymce.custom_buttons1',null,''),
            'theme_advanced_buttons2' => $this->modx->getOption('tinymce.custom_buttons2',null,''),
            'theme_advanced_buttons3' => $this->modx->getOption('tinymce.custom_buttons3',null,''),
            'theme_advanced_buttons4' => $this->modx->getOption('tinymce.custom_buttons4',null,''),
            'toolbar_align' => $this->modx->getOption('manager_direction',null,'ltr'),
            'use_browser' => $this->modx->getOption('use_browser',null,true),
        ));

        /* manual override */
        $this->config['elements'] = 'ta';
    }
    /**#@-*/

    /**
     * Loads the correct event context
     * @param string $event The event to load by
     * @param array $config A configuration array.
     */
    function load($event = '',$config = array()) {
        $config = array_merge(array(
            'path' => dirname(__FILE__).'/',
            'language' => $this->modx->getOption('manager_language',null,'en'),
        ),$config);

        switch ($event) {
            case 'OnRichTextEditorRegister':
                return 'TinyMCE';
                break;
            case 'OnRichTextEditorInit':
                return $this->getScript();
                break;
        }
    }

    /**
     * Renders the TinyMCE script code.
     * @access public
     * @param array $config An array of configuration parameters.
     */
    function getScript() {

        $scriptfile = ((!$this->config['frontend'] && $this->config['compressor'] == 'enabled') ? 'tiny_mce_gzip.php' : 'tiny_mce_src.js');

        $this->modx->regClientStartupScript($this->config['assets_url'].'jscripts/tiny_mce/'.$scriptfile);
        $this->modx->regClientStartupScript($this->config['assets_url'].'xconfig.js');

        $theme = $this->config['theme'];
        if ($theme == 'editor' || $theme == 'custom') {
            $tinyTheme = 'advanced';
            if($theme == 'editor' || ($theme == 'custom' && (empty($this->config['plugins']) || empty($this->config['buttons1'])))) {
                $this->config['theme_advanced_blockformats'] = 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address';
                $this->config['plugins'] = 'style,advimage,advlink,searchreplace,print,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras,visualchars,media';
                $this->config['theme_advanced_buttons1'] = 'undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,link,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help';
                $this->config['theme_advanced_buttons2'] = 'bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops';
                $this->config['theme_advanced_buttons3'] = '';
                $this->config['theme_advanced_buttons4'] = '';
            }
            $theme = 'advanced';
        } else {
            $tinyTheme = $theme;
        }
        $this->config['tinyTheme'] = $tinyTheme;
        $this->config['theme'] = $theme;


        $this->config['document_base_url'] = $this->config['assets_url'];

        /* Set relative URL options */
        switch ($this->config['path_options']) {
            case 'rootrelative':
                $this->config['relative_urls'] = false;
                $this->config['remove_script_host'] = true;
            break;

            case 'docrelative':
                $this->config['relative_urls'] = true;
                $this->config['document_base_url'] = $this->config['assets_url'];
                $this->config['remove_script_host'] = true;
            break;

            case 'fullpathurl':
                $this->config['relative_urls'] = false;
                $this->config['remove_script_host'] = false;
            break;
        }

        if (!empty($this->config['resource'])) {
            $this->config['resource'] = $this->config['resource']->toArray();
        }

        ob_start();
        include_once dirname(__FILE__).'/templates/script.tpl';
        $script = ob_get_contents();
        ob_end_clean();

        $this->modx->regClientStartupHTMLBlock($script);
        return '';
    }
}
