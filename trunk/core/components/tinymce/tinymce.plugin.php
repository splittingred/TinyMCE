<?php
/**
 * TinyMCE RichText Editor Plugin
 *
 * Events:  OnRichTextEditorInit, OnRichTextEditorRegister
 *
 * @author Jeff Whitfield <jeff@collabpad.com>
 * @author Shaun McCormick <shaun@collabpad.com>
 * @created 2005/09/09
 * @modified 2007/10/22
 * @modified 2009/03/13
 * @version 2.1.1-beta
 */
require_once $modx->config['core_path'].'components/tinymce/tinymce.class.php';

$TinyMCE = new TinyMCE($modx,$scriptProperties);

/* Handle event */
$e = &$modx->event;
switch ($e->name) {
    case 'OnRichTextEditorRegister': /* register only for backend */
        $e->output('TinyMCE');
        break;

    case 'OnRichTextEditorInit':
        if ($editor == 'TinyMCE') {
            $elementList = implode(',',$elements);
            if(isset($forfrontend)||$modx->isFrontend()){
                $TinyMCE->config['language'] = isset($modx->config['fe_editor_lang']) ? $modx->config['fe_editor_lang']: $modx->config['manager_language'];
                $TinyMCE->config['frontend'] = true;

                $html = $TinyMCE->load($e->name);

            } else {
                $html = $TinyMCE->load($e->name);
                /* TODO: provide compatability checks for old vars */
                /*
                 * $html = $TinyMCE->load('OnRichTextEditorInit',array(
                 *
                    'path' => $tinyPath,
                    'element_list' => $elementList,
                    'theme' => $modx->config['tinymce_editor_theme'],
                    'width' => '100%',
                    'height' => '400px',
                    'language' => $modx->config['manager_language'],
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
                **/
            }
            $e->output($html);
        }
        break;
   default:
      return; /* stop here - this is very important. */
      break;
}
