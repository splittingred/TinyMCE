<?php
/**
 * @package tinymce
 */
class TinyMCE {
    /**
     * @var array $config The configuration array for TinyMCE.
     * @access private
     */
    public $config = array();
    public $jsLoaded = false;

    /**
     * The TinyMCE constructor.
     *
     * @param modX $modx A reference to the modX constructor.
     */
    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;

        $assetsUrl = $this->modx->getOption('tiny.assets_url',$config,$this->modx->getOption('assets_url').'components/tinymce/');
        $assetsPath = $this->modx->getOption('tiny.assets_path',$config,$this->modx->getOption('assets_path').'components/tinymce/');
        $corePath = $this->modx->getOption('tiny.core_path',$config,$this->modx->getOption('core_path').'components/tinymce/');

        $browserAction = $this->_getBrowserAction();
        $this->config = array_merge(array(
            'apply_source_formatting' => true,
            'assets_path' => $assetsPath,
            'assets_url' => $assetsUrl,
            'browserUrl' => $browserAction ? $modx->getOption('manager_url').'?a='.$browserAction->get('id') : null,
            'button_tile_map' => false,
            'cleanup' => true,
            'compressor' => '',
            'content_css' => $this->modx->getOption('editor_css_path'),
            'convert_fonts_to_spans' => true,
            'convert_newlines_to_brs' => false,
            'core_path' => $corePath,
            'element_format' => 'xhtml',
            'element_list' => '',
            'entities' => '',
            'entity_encoding' => 'named',
            'file_browser_callback' => 'Tiny.loadBrowser',
            'formats' => 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address',
            'force_p_newlines' => true,
            'force_br_newlines' => false,
            'frontend' => false,
            'height' => '400px',
            'invalid_elements' => '',
            'language' => $this->modx->getOption('manager_language',null,'en'),
            'mode' => 'none',
            'nowrap' => false,
            'path' => $assetsPath,
            'path_options' => '',
            'plugin_insertdate_dateFormat' => '%Y-%m-%d',
            'plugin_insertdate_timeFormat' => '%H:%M:%S',
            'preformatted' => true,
            'resizable' => true,
            'relative_urls' => true,
            'remove_linebreaks' => false,
            'remove_script_host' => true,
            'resource_browser_path' => $this->modx->getOption('manager_url').'controllers/browser/index.php?',
            'skin' => 'o2k7',
            'skin_variant' => 'silver',
            'table_inline_editing' => true,
            'theme_advanced_blockformats' => 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address',
            'theme_advanced_disable' => '',
            'theme_advanced_resizing' => false,
            'theme_advanced_resize_horizontal' => false,
            'theme_advanced_statusbar_location' => 'bottom',
            'theme_advanced_styles' => $this->modx->getOption('tiny.css_selectors',null,''),
            'theme_advanced_toolbar_align' => 'left',
            'theme_advanced_toolbar_location' => 'top',
        ),$config);

        /* now do user/context/system setting overrides - these must override properties */
        $this->config = array_merge($this->config,array(
            'buttons1' => $this->modx->getOption('tiny.custom_buttons1',null,''),
            'buttons2' => $this->modx->getOption('tiny.custom_buttons2',null,''),
            'buttons3' => $this->modx->getOption('tiny.custom_buttons3',null,''),
            'buttons4' => $this->modx->getOption('tiny.custom_buttons4',null,''),
            'buttons5' => $this->modx->getOption('tiny.custom_buttons5',null,''),
            'css_path' => $this->modx->getOption('editor_css_path'),
            'plugins' => $this->modx->getOption('tiny.custom_plugins',null,''),
            'theme' => $this->modx->getOption('tiny.editor_theme',null,'simple'),
            'theme_advanced_styles' => $this->modx->getOption('tiny.css_selectors',null,''),
            'theme_advanced_buttons1' => $this->modx->getOption('tiny.custom_buttons1',null,''),
            'theme_advanced_buttons2' => $this->modx->getOption('tiny.custom_buttons2',null,''),
            'theme_advanced_buttons3' => $this->modx->getOption('tiny.custom_buttons3',null,''),
            'theme_advanced_buttons4' => $this->modx->getOption('tiny.custom_buttons4',null,''),
            'theme_advanced_buttons5' => $this->modx->getOption('tiny.custom_buttons5',null,''),
            'toolbar_align' => $this->modx->getOption('manager_direction',null,'ltr'),
            'use_browser' => $this->modx->getOption('use_browser',null,true),
        ));

        /* manual override */
        $this->config['elements'] = 'ta';
    }

    public function initialize() {
        $config = array_merge(array(
            'path' => dirname(__FILE__).'/',
            'language' => $this->modx->getOption('manager_language',null,'en'),
        ),$this->config);

        if (!$this->jsLoaded) {
            $scriptfile = ((!$this->config['frontend'] && $this->config['compressor'] == 'enabled') ? 'tiny_mce_gzip.php' : 'tiny_mce.js');
            $this->modx->regClientStartupScript($this->config['assets_url'].'jscripts/tiny_mce/'.$scriptfile);
            $this->modx->regClientStartupScript($this->config['assets_url'].'xconfig.js');
            $this->modx->regClientStartupScript($this->config['assets_url'].'tiny.js');
            $this->modx->regClientStartupScript($this->config['assets_url'].'tinymce.panel.js');
            $this->jsLoaded = true;
        }
        return $this->getScript();
    }

    /**
     * Renders the TinyMCE script code.
     * @access public
     * @param array $config An array of configuration parameters.
     */
    public function getScript() {
        $theme = $this->config['theme'];
        if ($theme == 'editor' || $theme == 'custom') {
            $tinyTheme = 'advanced';
            if($theme == 'editor' || ($theme == 'custom' && (empty($this->config['plugins']) || empty($this->config['buttons1'])))) {
                $this->config['plugins'] = 'style,advimage,modxlink,searchreplace,print,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras,visualchars,media';
                $this->config['theme_advanced_blockformats'] = 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address';
                $this->config['theme_advanced_buttons1'] = 'undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,modxlink,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help';
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
            default:
            case 'docrelative':
                $this->config['relative_urls'] = true;
                $this->config['remove_script_host'] = true;
                $this->config['document_base_url'] = $this->modx->getOption('base_url');
            break;

            case 'rootrelative':
                $this->config['relative_urls'] = false;
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
        unset($this->config['width'],$this->config['height']);
        ob_start();
        include_once dirname(__FILE__).'/templates/script.tpl';
        $script = ob_get_contents();
        ob_end_clean();

        $this->modx->regClientStartupHTMLBlock($script);
        return '';
    }

    private function _getBrowserAction() {
        return $this->modx->getObject('modAction',array('controller' => 'browser'));
    }
}
