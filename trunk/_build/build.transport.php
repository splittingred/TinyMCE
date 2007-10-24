<?php
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;

// get rid of time limit
set_time_limit(0);

// override with your own defines here (see build.config.sample.php)
require_once ('build.config.php');

require_once (MODX_CORE_PATH . 'model/modx/modx.class.php');
$modx= new modX();
$modx->initialize('mgr');
//$modx->setDebug(true);
$modx->loadClass('transport.xPDOTransport', XPDO_CORE_PATH, true, true);
if (!$workspace= $modx->getObject('modWorkspace', array('active' => 1))) {
    echo "\nYou must have a valid core installation with an active workspace to run the build.\n";
    exit();
}
$packageDirectory= $workspace->get('path') . 'packages/';
$packageSignature= array (
    'name' => 'tinymce',
    'version' => '2.0.9',
    'release' => 'rc2',
);
$signature= implode('-', $packageSignature);
$packageFilename= $signature . '.transport.zip';
if (file_exists($packageDirectory . $packageFilename)) {
    unlink($packageDirectory . $packageFilename);
}
if (file_exists($packageDirectory . $signature) && is_dir($packageDirectory . $signature)) {
    $cacheManager= $modx->getCacheManager();
    $cacheManager->deleteTree($packageDirectory . $signature);
}
$package= new xPDOTransport($modx, $signature, $packageDirectory);
$sources= array (
    'assets' => dirname(dirname(__FILE__)) . '/assets/'
);

// get the source from the actual snippet in your database
// [alternative] you could also manually create the object, grabbing the source from a file
$c= $modx->getObject('modPlugin', array ('name' => 'TinyMCE'));
$c->set('category', 0);
$attributes['resolve'][]= array (
    'type' => 'php',
    'source' => dirname(__FILE__) . '/scripts/add_plugin_events.php',
);
$attributes['resolve'][]= array (
    'type' => 'file',
    'source' => $sources['assets'] . 'plugins/tinymce',
    'target' => "return MODX_ASSETS_PATH . 'plugins/';",
);
$attributes['unique_key']= 'name';

$package->put($c, $attributes);
$package->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

echo "\nExecution time: {$totalTime}\n";

exit ();
