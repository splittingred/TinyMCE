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
 * @var modX $modx
 * @var array $scriptProperties
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

$useEditor = $tiny->context->getOption('use_editor',false);
$whichEditor = $tiny->context->getOption('which_editor','');

/* Handle event */
switch ($modx->event->name) {
    case 'OnRichTextEditorInit':
        if ($useEditor && $whichEditor == 'TinyMCE') {
            unset($scriptProperties['chunk']);
            if (isset($forfrontend) || $modx->context->get('key') != 'mgr') {
                $def = $tiny->context->getOption('cultureKey',$tiny->context->getOption('manager_language','en'));
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
            $inRevo20 = (boolean)version_compare($modx->version['full_version'],'2.1.0-rc1','<');
            $modx->getVersionData();
            $source = $tiny->context->getOption('default_media_source',null,1);
            
            $modx->controller->addHtml('<script type="text/javascript">var inRevo20 = '.($inRevo20 ? 1 : 0).';MODx.source = "'.$source.'";</script>');
            
            $modx->controller->addJavascript($tiny->config['assetsUrl'].'jscripts/tiny_mce/tiny_mce_popup.js');
            if (file_exists($tiny->config['assetsPath'].'jscripts/tiny_mce/langs/'.$tiny->properties['language'].'.js')) {
                $modx->controller->addJavascript($tiny->config['assetsUrl'].'jscripts/tiny_mce/langs/'.$tiny->properties['language'].'.js');
            } else {
                $modx->controller->addJavascript($tiny->config['assetsUrl'].'jscripts/tiny_mce/langs/en.js');
            }
            $modx->controller->addJavascript($tiny->config['assetsUrl'].'tiny.browser.js');
            $modx->event->output('Tiny.browserCallback');
        }
        return '';
        break;

   default: break;
}
return;