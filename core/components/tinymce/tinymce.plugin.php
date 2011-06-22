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
require_once $modx->getOption('tiny.core_path',null,$modx->getOption('core_path').'components/tinymce/').'tinymce.class.php';
$tiny = new TinyMCE($modx,$scriptProperties);

$useEditor = $modx->getOption('use_editor',null,false);
$whichEditor = $modx->getOption('which_editor',null,'');

/* Handle event */
switch ($modx->event->name) {
    case 'OnRichTextEditorInit':
        if ($useEditor && $whichEditor == 'TinyMCE') {
            unset($scriptProperties['chunk']);
            if (isset($forfrontend) || $modx->context->get('key') != 'mgr') {
                $def = $modx->getOption('cultureKey',null,$modx->getOption('manager_language',null,'en'));
                $tiny->properties['language'] = $modx->getOption('fe_editor_lang',array(),$def);
                $tiny->properties['frontend'] = true;
                unset($def);
            }
            /* commenting these out as it causes problems with richtext tvs */
            //if (isset($scriptProperties['resource']) && !$resource->get('richtext')) return;
            //if (!isset($scriptProperties['resource']) && !$modx->getOption('richtext_default',null,false)) return;
            $tiny->setProperties($scriptProperties);
            $html = $tiny->initialize();
            $modx->event->output($html);
            unset($html);
        }
        break;
    case 'OnRichTextBrowserInit':
        if ($useEditor && $whichEditor == 'TinyMCE') {
            $modx->regClientStartupScript($tiny->config['assetsUrl'].'jscripts/tiny_mce/tiny_mce_popup.js');
            if (file_exists($tiny->config['assetsPath'].'jscripts/tiny_mce/langs/'.$tiny->properties['language'].'.js')) {
                $modx->regClientStartupScript($tiny->config['assetsUrl'].'jscripts/tiny_mce/langs/'.$tiny->properties['language'].'.js');
            } else {
                $modx->regClientStartupScript($tiny->config['assetsUrl'].'jscripts/tiny_mce/langs/en.js');
            }
            $modx->event->output('Tiny.browserCallback');
        }
        return '';
        break;

   default: break;
}
return;