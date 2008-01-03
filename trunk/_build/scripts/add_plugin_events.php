<?php
$success= false;
if ($pluginid= $object->get('id')) {
    $pluginEvent= $object->xpdo->newObject('modPluginEvent');
    $pluginEvent->set('pluginid', $pluginid);
    $pluginEvent->set('evtid', 85);
    $pluginEvent->set('priority', 0);
    $success= $pluginEvent->save();
    unset($pluginEvent);
    
    $pluginEvent= $object->xpdo->newObject('modPluginEvent');
    $pluginEvent->set('pluginid', $pluginid);
    $pluginEvent->set('evtid', 87);
    $pluginEvent->set('priority', 0);
    $success= $pluginEvent->save();
    unset($pluginEvent);
    
    $pluginEvent= $object->xpdo->newObject('modPluginEvent');
    $pluginEvent->set('pluginid', $pluginid);
    $pluginEvent->set('evtid', 88);
    $pluginEvent->set('priority', 0);
    $success= $pluginEvent->save();
    unset($pluginEvent);
}
return $success;