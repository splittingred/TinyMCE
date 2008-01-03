<?php

$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;

// get rid of time limit
set_time_limit(0);

// override with your own defines here (see build.config.sample.php)
require_once dirname(__FILE__) . '/build.config.php';

require_once (MODX_CORE_PATH . 'model/modx/modx.class.php');
$modx= new modX();
$modx->initialize('mgr');
//$modx->setDebug(true);


$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->create('tinymce','2.0.9','rc2');

$sources= array (
    'assets' => dirname(dirname(__FILE__)) . '/assets/'
);

// get the source from the actual snippet in your database
// [alternative] you could also manually create the object, grabbing the source from a file
$c= $modx->getObject('modPlugin', array ('name' => 'TinyMCE'));
$c->set('category', 0);
$vehicle = $builder->createVehicle($c);
$vehicle->resolve('php',array(
	'source' => dirname(__FILE__) . '/scripts/add_plugin_events.php',
));
$vehicle->resolve('file',array(
    'source' => $sources['assets'] . 'plugins/tinymce',
    'target' => "return MODX_ASSETS_PATH . 'plugins/';",
));
$vehicle->setUniqueKey('name');
$builder->putVehicle($vehicle);
$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

echo "\nExecution time: {$totalTime}\n";

exit ();