<?php
/**
 * TinyMCE RichText Editor Plugin
 *
 * Events: OnRichTextEditorInit, OnRichTextEditorRegister,
 * OnBeforeManagerPageInit, OnRichTextBrowserInit
 *
 * @author Jeff Whitfield <jeff@collabpad.com>
 * @author Shaun McCormick <shaun@collabpad.com>
 *
 * @package tinymce
 * @subpackage build
 */
require_once $modx->getOption('tiny.core_path',$config,$modx->getOption('core_path').'components/tinymce/').'tinymce.class.php';
$tiny = new TinyMCE($modx,$scriptProperties);

/* Handle event */
switch ($modx->event->name) {
    case 'OnRichTextEditorRegister': /* register only for backend */
        $modx->event->output('TinyMCE');
        break;

    case 'OnRichTextEditorInit':
        if ($editor == 'TinyMCE') {
            $elementList = implode(',',$elements);
            if (isset($forfrontend) || $modx->isFrontend()) {
                $def = $modx->getOption('manager_language',null,'en');
                $tiny->config['language'] = $modx->getOption('fe_editor_lang',array(),$def);
                $tiny->config['frontend'] = true;
                unset($def);
            }
            $html = $tiny->initialize();
            $modx->event->output($html);
            unset($html);
        }
        break;
    case 'OnBeforeManagerPageInit':
        if ($modx->getOption('use_editor',null,false)) {
            $html = $tiny->initialize();
            $modx->event->output($html);
        }
        break;
    case 'OnRichTextBrowserInit':
        if ($modx->getOption('use_editor',null,false)) {
            $modx->regClientStartupScript($tiny->config['assets_url'].'jscripts/tiny_mce/tiny_mce_popup.js');
            $modx->regClientStartupScript($tiny->config['assets_url'].'jscripts/tiny_mce/langs/en.js');
            $modx->regClientStartupScript($tiny->config['assets_url'].'tiny.browser.js');
            $modx->event->output('Tiny.browserCallback');
        }
        return '';
        break;

   default: break;
}
return;