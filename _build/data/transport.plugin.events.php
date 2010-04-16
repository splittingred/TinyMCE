<?php
/**
 * @package tinymce
 * @subpackage build
 */
$eventNames = array(
    'OnRichTextBrowserInit',
    'OnRichTextEditorRegister',
    'OnRichTextEditorInit',
    /*'OnBeforeManagerPageInit',*/
);
$events = array();

foreach ($eventNames as $eventName) {
    $pluginEvent= $modx->newObject('modPluginEvent');
    $pluginEvent->fromArray(array(
        'pluginid' => 0,
        'event' => $eventName,
        'priority' => 0,
        'propertyset' => 0,
    ),'',true,true);
    $events[] = $pluginEvent;
}

return $events;