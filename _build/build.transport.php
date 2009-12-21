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

define('PKG_NAME','TinyMCE');
define('PKG_NAMESPACE',strtolower(PKG_NAME));
define('PKG_VERSION','3.2.7.0');
define('PKG_RELEASE','beta4');

require_once dirname(__FILE__) . '/build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAMESPACE,PKG_VERSION,PKG_RELEASE);
$builder->registerNamespace(PKG_NAMESPACE,false,true,'{core_path}components/'.PKG_NAMESPACE.'/');

/* create the plugin object */
$plugin= $modx->newObject('modPlugin');
$plugin->set('id',1);
$plugin->set('name', PKG_NAME);
$plugin->set('description', PKG_NAME.' '.PKG_VERSION.'-'.PKG_RELEASE.' plugin for MODx Revolution');
$plugin->set('plugincode', file_get_contents($sources['source_core'] . '/tinymce.plugin.php'));
$plugin->set('category', 0);

/* load plugin properties */
$properties = include $sources['data'].'properties.inc.php';
$plugin->setProperties($properties);

$attributes= array(
    xPDOTransport::UNIQUE_KEY => 'name',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
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
    xPDOTransport::UNIQUE_KEY => 'key',
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => false,
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

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();