<?php
/**
 * @package tinymce
 */
require dirname(__FILE__).'/connector.php';

$templates = $modx->tinymce->getTemplateList();

echo 'var tinyMCETemplateList = '.$modx->toJSON($templates).';';
die();
