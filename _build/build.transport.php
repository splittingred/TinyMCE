<?php
/**
 * TinyMCE build script
 *
 * @package tinymce
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
/* get rid of time limit */
set_time_limit(0);

$root = dirname(dirname(__FILE__)).'/';
$sources= array (
    'root' => $root,
    'build' => $root .'_build/',
    'lexicon' => $root . '_build/lexicon/',
    'resolvers' => $root . '_build/scripts/',
    'data' => $root . '_build/data/',
    'docs' => $root . 'core/components/tinymce/docs/',
    'source_assets' => $root . 'assets/components/tinymce',
    'source_core' => $root . 'core/components/tinymce',
);

/* override with your own defines here (see build.config.sample.php) */
require_once dirname(__FILE__) . '/build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(MODX_LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage('tinymce','3.2.0.1','alpha2');
$builder->registerNamespace('tinymce',false,true,'{core_path}components/tinymce/');

/* create the plugin object */
$plugin= $modx->newObject('modPlugin');
$plugin->set('id',1);
$plugin->set('name', 'TinyMCE');
$plugin->set('description', 'TinyMCE 3.2.0.1-alpha1 plugin for MODx Revolution');
$plugin->set('plugincode', file_get_contents($sources['source_core'] . '/tinymce.plugin.php'));
$plugin->set('category', 0);

/* load plugin properties */
$properties = include $sources['data'].'properties.inc.php';
$plugin->setProperties($properties);

$attributes= array(
    XPDO_TRANSPORT_UNIQUE_KEY => 'name',
    XPDO_TRANSPORT_PRESERVE_KEYS => false,
    XPDO_TRANSPORT_UPDATE_OBJECT => true,
);
$vehicle = $builder->createVehicle($plugin, $attributes);
$vehicle->resolve('php',array(
	'source' => $sources['resolvers'] . 'add_plugin_events.php',
));
$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH . 'components/';",
));
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$builder->putVehicle($vehicle);

/* load lexicon strings */
$builder->buildLexicon($sources['lexicon']);

/* load system settings */
$settings = include $sources['data'].'transport.settings.php';
$attributes= array(
    XPDO_TRANSPORT_UNIQUE_KEY => 'key',
    XPDO_TRANSPORT_PRESERVE_KEYS => true,
    XPDO_TRANSPORT_UPDATE_OBJECT => false,
);
foreach ($settings as $setting) {
    $vehicle = $builder->createVehicle($setting,$attributes);
    $builder->putVehicle($vehicle);
}

/* now pack in the license file, readme and setup options */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
));

$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(MODX_LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();