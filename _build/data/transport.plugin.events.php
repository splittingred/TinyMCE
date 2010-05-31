<?php
/**
 * @package tinymce
 * @subpackage build
 */
$events = array();

$events['OnRichTextBrowserInit']= $modx->newObject('modPluginEvent');
$events['OnRichTextBrowserInit']->fromArray(array(
    'event' => 'OnRichTextBrowserInit',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);
$events['OnRichTextEditorRegister']= $modx->newObject('modPluginEvent');
$events['OnRichTextEditorRegister']->fromArray(array(
    'event' => 'OnRichTextEditorRegister',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);
$events['OnRichTextEditorInit']= $modx->newObject('modPluginEvent');
$events['OnRichTextEditorInit']->fromArray(array(
    'event' => 'OnRichTextEditorInit',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);

return $events;