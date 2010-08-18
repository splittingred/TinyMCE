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
if ($modx->event->name == 'OnRichTextEditorRegister') {
    $modx->event->output('TinyMCE');
    return;
}
require_once $modx->getOption('tiny.core_path',$config,$modx->getOption('core_path').'components/tinymce/').'tinymce.class.php';
$tiny = new TinyMCE($modx,$scriptProperties);

$useEditor = $modx->getOption('use_editor',null,false);
$whichEditor = $modx->getOption('which_editor',null,'');

/* Handle event */
switch ($modx->event->name) {
    case 'OnRichTextEditorInit':
        if ($useEditor && $whichEditor == 'TinyMCE') {
            if (isset($forfrontend) || $modx->isFrontend()) {
                $def = $modx->getOption('cultureKey',null,$modx->getOption('manager_language',null,'en'));
                $tiny->config['language'] = $modx->getOption('fe_editor_lang',array(),$def);
                $tiny->config['frontend'] = true;
                unset($def);
            }
            $html = $tiny->initialize();
            $modx->event->output($html);
            unset($html);
        }
        break;
    case 'OnRichTextBrowserInit':
        if ($useEditor && $whichEditor == 'TinyMCE') {
            $modx->regClientStartupScript($tiny->config['assets_url'].'jscripts/tiny_mce/tiny_mce_popup.js');
            $modx->regClientStartupScript($tiny->config['assets_url'].'jscripts/tiny_mce/langs/'.$tiny->config['language'].'.js');
            $modx->regClientStartupScript($tiny->config['assets_url'].'tiny.browser.js');
            $modx->event->output('Tiny.browserCallback');
        }
        return '';
        break;

   default: break;
}
return;