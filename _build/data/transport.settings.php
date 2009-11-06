<?php
/**
 * @package tinymce
 * @subpackage build
 */
$settings = array();

$settings['tiny.editor_theme']= $modx->newObject('modSystemSetting');
$settings['tiny.editor_theme']->fromArray(array(
    'key' => 'tiny.editor_theme',
    'value' => 'editor',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);

$settings['tiny.custom_plugins']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_plugins']->fromArray(array(
    'key' => 'tiny.custom_plugins',
    'value' => 'text;style,advimage,advlink,searchreplace,print,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras,visualchars,media',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);

$settings['tiny.custom_buttons1']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons1']->fromArray(array(
    'key' => 'tiny.custom_buttons1',
    'value' => 'undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,link,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);

$settings['tiny.custom_buttons2']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons2']->fromArray(array(
    'key' => 'tiny.custom_buttons2',
    'value' => 'bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);

$settings['tiny.custom_buttons3']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons3']->fromArray(array(
    'key' => 'tiny.custom_buttons3',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);


$settings['tiny.custom_buttons4']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons4']->fromArray(array(
    'key' => 'tiny.custom_buttons4',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);


$settings['tiny.css_selectors']= $modx->newObject('modSystemSetting');
$settings['tiny.css_selectors']->fromArray(array(
    'key' => 'tiny.css_selectors',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'tinymce',
),'',true,true);

return $settings;