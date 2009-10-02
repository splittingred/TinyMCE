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
 * @modified 2009/05/21
 */
require_once $modx->getOption('core_path').'components/tinymce/tinymce.class.php';
$TinyMCE = new TinyMCE($modx,$scriptProperties);

/* Handle event */
$e = &$modx->event;
switch ($e->name) {
    case 'OnRichTextEditorRegister': /* register only for backend */
        $e->output('TinyMCE');
        break;

    case 'OnRichTextEditorInit':
        if ($editor == 'TinyMCE') {
            if (!$TinyMCE->jsLoaded) {
                $modx->regClientStartupScript($TinyMCE->config['assets_url'].'tiny.js');
                $TinyMCE->jsLoaded = true;
            }

            $elementList = implode(',',$elements);
            if (isset($forfrontend) || $modx->isFrontend()) {
                $def = $modx->getOption('manager_language',null,'en');
                $TinyMCE->config['language'] = $modx->getOption('fe_editor_lang',array(),$def);
                $TinyMCE->config['frontend'] = true;
                unset($def);
            }
            $html = $TinyMCE->load($e->name);
            $e->output($html);
            unset($html);
        }
        break;
   default: break;
}
return;