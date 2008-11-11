<?php
if (!class_exists('TinyMCE')) {

class TinyMCE {
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

		/* Set relative URL options */
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

        ob_start();
        include_once dirname(__FILE__).'/templates/script.tpl';
        $script = ob_get_contents();
        ob_end_clean();

		return $script;
	}
}

}