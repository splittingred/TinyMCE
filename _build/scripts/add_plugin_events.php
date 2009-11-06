<?php
/**
 * Resolver to handle plugin events
 *
 * @package tinymce
 * @subpackage build
 */
$success= true;
if ($pluginid= $object->get('id')) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $events = array(
                'OnRichTextBrowserInit',
                'OnRichTextEditorRegister',
                'OnRichTextEditorInit',
                'OnBeforeManagerPageInit',
            );

            foreach ($events as $eventName) {
                $event = $object->xpdo->getObject('modEvent',array('name' => $eventName));
                if ($event) {
                    $pluginEvent = $object->xpdo->getObject('modPluginEvent',array(
                        'pluginid' => $pluginid,
                        'evtid' => $event->get('id'),
                    ));
                    if (!$pluginEvent) {
                        $pluginEvent= $object->xpdo->newObject('modPluginEvent');
                        $pluginEvent->set('pluginid', $pluginid);
                        $pluginEvent->set('evtid', $event->get('id'));
                        $pluginEvent->set('priority', 0);
                        $pluginEvent->set('propertyset', 0);
                        $success= $pluginEvent->save();
                    }
                }
                unset($event,$pluginEvent);
            }
            unset($events,$eventName);
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            $success= true;
            break;
    }
}

return $success;