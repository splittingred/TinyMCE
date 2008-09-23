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

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->create('tinymce','2.1.0','beta-2');
$builder->registerNamespace('tinymce',false,true);

$sources= array (
    'assets' => dirname(dirname(__FILE__)) . '/assets/',
    'root' => dirname(dirname(__FILE__)) . '/',
);

// get the source from the actual snippet in your database
// [alternative] you could also manually create the object, grabbing the source from a file
$c= $modx->newObject('modPlugin');
$c->set('name', 'TinyMCE');
$c->set('description', 'TinyMCE 2.1.0-beta plugin for MODx Revolution');
$c->set('plugincode', file_get_contents($sources['root'] . 'tinymce.plugin.php'));
$c->set('category', 0);

$attributes= array(
    XPDO_TRANSPORT_UNIQUE_KEY => 'name',
    XPDO_TRANSPORT_PRESERVE_KEYS => true,
    XPDO_TRANSPORT_UPDATE_OBJECT => true,
);
$vehicle = $builder->createVehicle($c, $attributes);
$vehicle->resolve('php',array(
	'source' => dirname(__FILE__) . '/scripts/add_plugin_events.php',
));
$vehicle->resolve('file',array(
    'source' => $sources['assets'] . 'plugins/tinymce',
    'target' => "return MODX_ASSETS_PATH . 'plugins/';",
));
$builder->putVehicle($vehicle);

// load lexicon strings
$builder->buildLexicon($sources['root'].'_build/lexicon/');

// load system settings
$settings = array();
include_once dirname(__FILE__).'/data/transport.settings.php';

$attributes= array(
    XPDO_TRANSPORT_UNIQUE_KEY => 'key',
    XPDO_TRANSPORT_PRESERVE_KEYS => true,
    XPDO_TRANSPORT_UPDATE_OBJECT => true,
);
foreach ($settings as $setting) {
    $vehicle = $builder->createVehicle($setting,$attributes);
    $builder->putVehicle($vehicle);
}

$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

echo "\nExecution time: {$totalTime}\n";

exit ();