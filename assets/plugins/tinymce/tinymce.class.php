<?php
if (!class_exists('TinyMCE')) {

class TinyMCE {
    /**
     * @var array $_langs A collection of languages.
     * @access private
     */
	var $_langs;

    /**#@+
     * The TinyMCE constructor.
     *
     * @param modX $modx A reference to the modX constructor.
     * @param array $config A configuration array.
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
     * Renders the TinyMCE settings.
     * @access public
     * @param array $config An array of configuration parameters.
     */
	function getSettings($config) {
		// language settings
        $_lang = array();
		@include_once $config['path'].'/lang/'.$this->modx->config['manager_language'].'.inc.php';
        $this->modx->lexicon = array_merge($this->modx->lexicon,$_lang);

		$arrThemes = array(
			'simple' => $this->modx->lexicon['tinymce_theme_simple'],
			'advanced' => $this->modx->lexicon['tinymce_theme_advanced'],
			'editor' => $this->modx->lexicon['tinymce_theme_editor'],
			'custom' => $this->modx->lexicon['tinymce_theme_custom'],
		);
		$config = array_merge($this->modx->config,$config);
		$config['themes'] = $arrThemes;
		$config['display'] = $config['use_editor'] == 1 ? $config['displayStyle'] : 'none';
		$config['css'] = isset($config['tinymce_css_selectors']) ? htmlspecialchars($config['tinymce_css_selectors']) : '';

		$config['plugins'] = $config['tinymce_custom_plugins'];
		$this->modx->smarty->assign('config',$config);
		$this->modx->smarty->assign('_lang',$this->modx->lexicon);
		return $this->modx->smarty->fetch($config['path'].'/templates/settings.tpl');
	}

    /**
     * Renders the TinyMCE script code.
     * @access public
     * @param array $config An array of configuration parameters.
     */
	function getScript($config) {
		if (!is_array($config)) $config = array();

		$config = array_merge($this->modx->config,$config);
		$theme = $config['theme'] != '' ? $config['theme'] : 'simple';

		if ($theme == 'editor' || $theme == 'custom') {
			$tinyTheme = 'advanced';
			if($theme == 'editor' || ($theme == 'custom' && (empty($config['plugins']) || empty($config['buttons1'])))) {
				$config['formats'] = "p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address";
				$config['plugins'] = "text;style,advimage,advlink,searchreplace,print,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras,visualchars,media";
				$config['buttons1'] = "undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,link,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help";
				$config['buttons2'] = "bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops";
				$config['buttons3'] = '';
				$config['buttons4'] = '';
		    }
		} else {
			$tinyTheme = $theme;
		}

		$config['tinyTheme'] = $tinyTheme;
		$config['theme'] = $theme;

		// Set relative URL options
		switch($config['path_options']){
			case 'rootrelative':
				$config['relative_urls'] = false;
				$config['remove_script_host'] = true;
			break;

			case 'docrelative':
				$config['relative_urls'] = true;
				$config['document_base_url'] = $config['base_url'];
				$config['remove_script_host'] = true;
			break;

			case 'fullpathurl':
				$config['relative_urls'] = false;
				$config['remove_script_host'] = false;
			break;

			default:
				$config['relative_urls'] = true;
				$config['document_base_url'] = $config['base_url'];
				$config['remove_script_host'] = true;
		}

		$scriptfile = ((!$config['frontend'] && $config['compressor'] == 'enabled') ? 'tiny_mce_gzip.php' : 'tiny_mce.js');

		$this->modx->smarty->assign('scriptfile',$scriptfile);
		$this->modx->smarty->assign('config',$config);
		$script = $this->modx->smarty->fetch($config['path'].'/templates/script.tpl');

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