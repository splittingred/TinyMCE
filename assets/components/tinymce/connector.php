<?php
/**
 * TinyMCE Connector
 *
 * @package quip
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$tinyCorePath = $modx->getOption('tiny.core_path',null,$modx->getOption('core_path').'components/tinymce/');
require_once $tinyCorePath.'tinymce.class.php';
$modx->tinymce = new TinyMCE($modx);

$modx->lexicon->load('tinymce:default');
