<?php
/**
 * Resolver to handle plugin events
 *
 * @package tinymce
 * @subpackage build
 */
$success= false;
if ($pluginid= $object->get('id')) {
    switch ($options[XPDO_TRANSPORT_PACKAGE_ACTION]) {
        case XPDO_TRANSPORT_ACTION_INSTALL:
        case XPDO_TRANSPORT_ACTION_UPGRADE:
            $pluginEvent= $object->xpdo->newObject('modPluginEvent');
            $pluginEvent->set('pluginid', $pluginid);
            $pluginEvent->set('evtid', 87); /* OnRichTextEditorRegister */
            $pluginEvent->set('priority', 0);
            $success= $pluginEvent->save();
            unset($pluginEvent);

            $pluginEvent= $object->xpdo->newObject('modPluginEvent');
            $pluginEvent->set('pluginid', $pluginid);
            $pluginEvent->set('evtid', 88); /* OnRichTextEditorInit */
            $pluginEvent->set('priority', 0);
            $success= $pluginEvent->save();
            unset($pluginEvent);
            break;
        case XPDO_TRANSPORT_ACTION_UNINSTALL:
            $success= true;
            break;
    }
}

return $success;