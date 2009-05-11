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
 * @modified 2009/05/11
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
            if (isset($forfrontend) || $modx->isFrontend()) {
                $TinyMCE->config['language'] = $modx->getOption('fe_editor_lang',array(),$modx->getOption('manager_language'));
                $TinyMCE->config['frontend'] = true;

            }
            $html = $TinyMCE->load($e->name);
            $e->output($html);
        }
        break;
   default:
      return; /* stop here - this is very important. */
      break;
}
