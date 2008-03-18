<?php
/**
 * TinyMCE RichText Editor Plugin 
 *
 * Events:  OnRichTextEditorInit, OnRichTextEditorRegister,
 * OnInterfaceSettingsRender
 * 
 * @author Jeff Whitfield 
 * @author Shaun McCormick <splittingred@gmail.com>
 * @created 2005/09/09
 * @modified 2007/10/22
 * @version 2.2.0
 */

include_once $modx->config['base_path'].'assets/plugins/tinymce/tinymce.class.php';

// Set path and base setting variables
if(!isset($tinyPath)) { 
	global $tinyPath;
	$tinyPath = $modx->config['base_path'].'assets/plugins/tinymce'; 
}
$base_url = $modx->config['base_url'];
$displayStyle = ( ($_SESSION['browser']=='mz') || ($_SESSION['browser']=='op') ) ? "table-row" : "block" ;

$TinyMCE = new TinyMCE($modx);
include_once $modx->config['base_path'].'assets/plugins/tinymce/tinymce.lang.php';

// Handle event
$e = &$modx->Event; 
switch ($e->name) { 
	case 'OnRichTextEditorRegister': // register only for backend
		$output = $TinyMCE->load('OnRichTextEditorRegister');
        $e->output($output);
		break;

	case 'OnRichTextEditorInit': 
		if ($editor == 'TinyMCE') {
			$elementList = implode(',',$elements);
			if(isset($forfrontend)||$modx->isFrontend()){
				$frontend_language = isset($modx->config['fe_editor_lang']) ? $modx->config['fe_editor_lang']:'';
				
				$html = $TinyMCE->load('OnRichTextEditorInit',array(
					'path' => $tinyPath,
					'element_list' => $elementList,
					'theme' => $modx->config['tinymce_editor_theme'],
					'width' => $width,
					'height' => $height,
					'language' => $TinyMCE->getLang($frontend_language),
					'frontend' => true,
					'base_url' => $base_url,
					'plugins' => $modx->config['tinymce_custom_plugins'],
					'buttons1' => $modx->config['tinymce_custom_buttons1'],
					'buttons2' => $modx->config['tinymce_custom_buttons2'],
					'buttons3' => $modx->config['tinymce_custom_buttons3'],
					'buttons4' => $modx->config['tinymce_custom_buttons4'],
					'disabled_buttons' => $disabledButtons,
					'formats' => $tinyFormats,
					'entity_encoding' => $entity_encoding,
					'entities' => $entities,
					'compressor' => $tinyCompressor,
					'path_options' => $tinyPathOptions,
					'cleanup' => $tinyCleanup,
					'resizing' => $tinyResizing,
					'advimage_styles' => $advimage_styles,
					'advlink_styles' => $advlink_styles,
					'css_path' => $modx->config['editor_css_path'],
					'css_selectors' => $modx->config['tinymce_css_selectors'],
					'use_browser' => $modx->config['use_browser'],
					'toolbar_align' => $webAlign,
					'advimage_styles' => NULL,
					'advlink_styles' => NULL,
				));
				
			} else {
				$html = $TinyMCE->load('OnRichTextEditorInit',array(
					'path' => $tinyPath,
					'element_list' => $elementList,
					'theme' => $modx->config['tinymce_editor_theme'],
					'width' => '100%',
					'height' => '400px',
					'language' => $TinyMCE->getLang($modx->config['manager_language']),
					'frontend' => false,
					'plugins' => $modx->config['tinymce_custom_plugins'],
					'buttons1' => $modx->config['tinymce_custom_buttons1'],
					'buttons2' => $modx->config['tinymce_custom_buttons2'],
					'buttons3' => $modx->config['tinymce_custom_buttons3'],
					'buttons4' => $modx->config['tinymce_custom_buttons4'],
					'disabled_buttons' => $disabledButtons,
					'formats' => $tinyFormats,
					'entity_encoding' => $entity_encoding,
					'entities' => $entities,
					'compressor' => $tinyCompressor,
					'path_options' => $tinyPathOptions,
					'cleanup' => $tinyCleanup,
					'resizing' => $tinyResizing,
					'advimage_styles' => $advimage_styles,
					'advlink_styles' => $advlink_styles,
					'css_path' => $modx->config['editor_css_path'],
					'css_selectors' => $modx->config['tinymce_css_selectors'],
					'use_browser' => $modx->config['use_browser'],
					'toolbar_align' => $modx->config['manager_direction'],
					'advimage_styles' => $advimage_styles,
					'advlink_styles' => $advlink_styles,
				));
			}
			$e->output($html);
		}
		break;

	case 'OnInterfaceSettingsRender':		
		$html = $TinyMCE->load('OnInterfaceSettingsRender',array(
			'path' => $tinyPath,
			'displayStyle' => $displayStyle,
		));
		$e->output($html);
		break;
   default:
      return; // stop here - this is very important. 
      break; 
}
