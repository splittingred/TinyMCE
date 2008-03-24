<?php
if (!class_exists('TinyMCE')) {

class TinyMCE {
    /**
     * @var array $_langs A collection of languages.
     * @access private
     */
	var $_langs = array();
    
    /**
     * @var array $config The configuration array for TinyMCE.
     * @access private
     */
    var $config = array();

    /**#@+
     * The TinyMCE constructor.
     *
     * @param modX $modx A reference to the modX constructor.
     */
	function TinyMCE(&$modx) {
		$this->__construct(&$modx);
	}
    /** @ignore */
	function __construct(&$modx) {
		$this->modx = $modx;
	}
    /**#@-*/

    /**
     * Loads language strings.
     * @return array The lexicon merged with the MODx core lexicon.
     */
    function _loadLang() {
        $_lang = array();
        $this->modx->lexicon->load('tinymce.default');
        return $this->modx->lexicon->fetch();
    }
    
    /**
     * Loads the correct event context
     * @param string $event The event to load by
     * @param array $config A configuration array.
     */
    function load($event = '',$config = array()) {
        $config = array_merge(array(
            'path' => dirname(__FILE__).'/',
            'language' => $this->modx->config['manager_language'],      
        ),$config);
        $config = array_merge($this->modx->config,$config);
        $this->config = $config;
        $this->_loadLang();
        
        switch ($event) {
            case 'OnRichTextEditorRegister':
                return 'TinyMCE';
                break;
            case 'OnInterfaceSettingsRender':
                return $this->getSettings();
                break;
            case 'OnRichTextEditorInit':
                return $this->getScript();
                break;
        }
    }

    /**
     * Renders the TinyMCE settings.
     * @access public
     * @param array $config An array of configuration parameters.
     */
	function getSettings() {
		$arrThemes = array(
			'simple' => $this->modx->lexicon('tinymce_theme_simple'),
			'advanced' => $this->modx->lexicon('tinymce_theme_advanced'),
			'editor' => $this->modx->lexicon('tinymce_theme_editor'),
			'custom' => $this->modx->lexicon('tinymce_theme_custom'),
		);
		$this->config['themes'] = $arrThemes;
		$this->config['display'] = $this->config['use_editor'] == 1 ? $this->config['displayStyle'] : 'none';
		$this->config['css'] = isset($this->config['tinymce_css_selectors']) ? htmlspecialchars($this->config['tinymce_css_selectors']) : '';

		$this->config['plugins'] = $this->config['tinymce_custom_plugins'];
		$this->modx->smarty->assign('config',$this->config);
		$this->modx->smarty->assign('_lang',$this->modx->lexicon->fetch());
		return $this->modx->smarty->fetch($this->config['path'].'/templates/settings.tpl');
	}

    /**
     * Renders the TinyMCE script code.
     * @access public
     * @param array $config An array of configuration parameters.
     */
	function getScript() {
		$theme = $this->config['theme'] != '' ? $this->config['theme'] : 'simple';

		if ($theme == 'editor' || $theme == 'custom') {
			$tinyTheme = 'advanced';
			if($theme == 'editor' || ($theme == 'custom' && (empty($this->config['plugins']) || empty($this->config['buttons1'])))) {
				$this->config['formats'] = "p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address";
				$this->config['plugins'] = "text;style,advimage,advlink,searchreplace,print,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras,visualchars,media";
				$this->config['buttons1'] = "undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,link,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help";
				$this->config['buttons2'] = "bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops";
				$this->config['buttons3'] = '';
				$this->config['buttons4'] = '';
		    }
		} else {
			$tinyTheme = $theme;
		}

		$this->config['tinyTheme'] = $tinyTheme;
		$this->config['theme'] = $theme;

		// Set relative URL options
		switch ($this->config['path_options']) {
			case 'rootrelative':
				$this->config['relative_urls'] = false;
				$this->config['remove_script_host'] = true;
			break;

			case 'docrelative':
				$this->config['relative_urls'] = true;
				$this->config['document_base_url'] = $this->config['base_url'];
				$this->config['remove_script_host'] = true;
			break;

			case 'fullpathurl':
				$this->config['relative_urls'] = false;
				$this->config['remove_script_host'] = false;
			break;

			default:
				$this->config['relative_urls'] = true;
				$this->config['document_base_url'] = $this->config['base_url'];
				$this->config['remove_script_host'] = true;
		}

		$scriptfile = ((!$this->config['frontend'] && $this->config['compressor'] == 'enabled') ? 'tiny_mce_gzip.php' : 'tiny_mce.js');

		$this->modx->smarty->assign('scriptfile',$scriptfile);
		$this->modx->smarty->assign('config',$this->config);
		$script = $this->modx->smarty->fetch($this->config['path'].'/templates/script.tpl');

		return $script;
	}

    /**
     * Gets a certain language.
     * @access public
     * @param string $spl The lnaguage abbr to get.
     */
	function getLang($spl) {
		$langSel = 'en';
		$c = count($this->_langs);
		for ($i=0;$i<$c;$i++) {
			if($this->_langs[i]['lang'] == $spl){
				$langSel = $this->_langs[i]['abbr'];
			}
		}
		return $langSel;
	}

    /**
     * Adds a language to the class.
     * @access public
     * @param string $lang The language name.
     * @param string $abbr The abbreviation of the language.
     */
	function addLang($lang,$abbr) {
		$this->_langs[] = array('lang' => $lang,'abbr' => $abbr);
	}
}

}