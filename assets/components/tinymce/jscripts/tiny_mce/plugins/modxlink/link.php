<?php
/**
 * Launch the modx-customized link dialog
 */
require_once dirname(dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$tinyCorePath = $modx->getOption('tiny.core_path',null,$modx->getOption('core_path').'components/tinymce/');
require_once $tinyCorePath.'tinymce.class.php';


$o = file_get_contents(dirname(__FILE__).'/link.htm');

$managerUrl = $modx->getOption('manager_url',null,MODX_MANAGER_URL);
$placeholders = array(
    'manager_url' => $managerUrl,
    'ext_url' => $managerUrl.'assets/ext3/',
    'modext_url' => $managerUrl.'assets/modext/',
    'connectors_url' => $modx->getOption('connectors_url',null,MODX_CONNECTORS_URL),
    'css_url' => $managerUrl.'templates/'.$modx->getOption('manager_theme',null,'default').'/css/',
);

$chunk = $modx->newObject('modChunk');
$chunk->setContent($o);
$o = $chunk->process($placeholders);


echo $o;
die();