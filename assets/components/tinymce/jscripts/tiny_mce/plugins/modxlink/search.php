<?php
/**
 * Handles dynamic search
 *
 * @package tinymce
 */
require_once dirname(dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$searchMode = $modx->getOption('search-mode',$_REQUEST,'pagetitle');
$query = $modx->getOption('q',$_REQUEST,'');

$c = $modx->newQuery('modResource');
$c->where(array(
    $searchMode.':LIKE' => '%'.$query.'%',
));

$count = $modx->getCount('modResource',$c);

$c->select(array('id','pagetitle','alias'));
$c->limit(10);

$resources = $modx->getCollection('modResource',$c);

foreach ($resources as $resource) {
    echo $resource->get('pagetitle').' ('.$resource->get('id').')|'.$resource->get('id')."\n";
}
die();
