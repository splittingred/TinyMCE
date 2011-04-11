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

/* define package */
define('PKG_NAME','TinyMCE');
define('PKG_NAMESPACE','tinymce');
define('PKG_VERSION','4.2.3');
define('PKG_RELEASE','pl');

/* define sources */
$root = dirname(dirname(__FILE__)).'/';
$sources= array (
    'root' => $root,
    'build' => $root .'_build/',
    'resolvers' => $root . '_build/resolvers/',
    'data' => $root . '_build/data/',
    'docs' => $root . 'core/components/'.PKG_NAMESPACE.'/docs/',
    'lexicon' => $root . 'core/components/'.PKG_NAMESPACE.'/lexicon/',
    'source_assets' => $root . 'assets/components/'.PKG_NAMESPACE,
    'source_core' => $root . 'core/components/'.PKG_NAMESPACE,
);

/* load modx */
require_once dirname(__FILE__) . '/build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once $sources['build'] . '/includes/functions.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
echo XPDO_CLI_MODE ? '' : '<pre>';
$modx->setLogTarget('ECHO');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAMESPACE,PKG_VERSION,PKG_RELEASE);
$builder->registerNamespace(PKG_NAMESPACE,false,true,'{core_path}components/'.PKG_NAMESPACE.'/');

/* create the plugin object */
$plugin= $modx->newObject('modPlugin');
$plugin->set('id',1);
$plugin->set('name', PKG_NAME);
$plugin->set('description', PKG_NAME.' '.PKG_VERSION.'-'.PKG_RELEASE.' plugin for MODx Revolution');
$plugin->set('plugincode', getSnippetContent($sources['source_core'] . '/tinymce.plugin.php'));
$plugin->set('category', 0);

/* add plugin events */
$events = include $sources['data'].'transport.plugin.events.php';
if (is_array($events) && !empty($events)) {
    $plugin->addMany($events);
    $modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events.'); flush();
} else {
    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find plugin events!');
}

/* load plugin properties */
$properties = include $sources['data'].'properties.inc.php';
if (is_array($properties)) {
    $modx->log(xPDO::LOG_LEVEL_INFO,'Set '.count($properties).' plugin properties.'); flush();
    $plugin->setProperties($properties);
} else {
    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not set plugin properties.');
}

$attributes= array(
    xPDOTransport::UNIQUE_KEY => 'name',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'PluginEvents' => array(
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => false,
            xPDOTransport::UNIQUE_KEY => array('pluginid','event'),
        ),
    ),
);
$vehicle = $builder->createVehicle($plugin, $attributes);
$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH . 'components/';",
));
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.whicheditor.php',
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.fix_setting.php',
));
$builder->putVehicle($vehicle);

/* load system settings */
$settings = include $sources['data'].'transport.settings.php';
if (is_array($settings) && !empty($settings)) {
    $attributes= array(
        xPDOTransport::UNIQUE_KEY => 'key',
        xPDOTransport::PRESERVE_KEYS => true,
        xPDOTransport::UPDATE_OBJECT => false,
    );
    foreach ($settings as $setting) {
        $vehicle = $builder->createVehicle($setting,$attributes);
        $builder->putVehicle($vehicle);
    }
    $modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($settings).' System Settings.'); flush();
} else {
    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not package System Settings.');
}
unset($settings,$setting);

/* now pack in the license file, readme and setup options */
$modx->log(xPDO::LOG_LEVEL_INFO,'Setting Package Attributes...'); flush();
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
));

$modx->log(xPDO::LOG_LEVEL_INFO,'Zipping up package...'); flush();
$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();