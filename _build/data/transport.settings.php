<?php
/**
 * @package tinymce
 * @subpackage build
 */
$settings = array();

$settings['tiny.base_url']= $modx->newObject('modSystemSetting');
$settings['tiny.base_url']->fromArray(array(
    'key' => 'tiny.base_url',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.convert_fonts_to_spans']= $modx->newObject('modSystemSetting');
$settings['tiny.convert_fonts_to_spans']->fromArray(array(
    'key' => 'tiny.convert_fonts_to_spans',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.convert_newlines_to_brs']= $modx->newObject('modSystemSetting');
$settings['tiny.convert_newlines_to_brs']->fromArray(array(
    'key' => 'tiny.convert_newlines_to_brs',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.css_selectors']= $modx->newObject('modSystemSetting');
$settings['tiny.css_selectors']->fromArray(array(
    'key' => 'tiny.css_selectors',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'advanced-theme',
),'',true,true);

$settings['tiny.custom_buttons1']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons1']->fromArray(array(
    'key' => 'tiny.custom_buttons1',
    'value' => 'undo,redo,selectall,separator,pastetext,pasteword,separator,search,replace,separator,nonbreaking,hr,charmap,separator,image,modxlink,unlink,anchor,media,separator,cleanup,removeformat,separator,fullscreen,print,code,help',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'custom-buttons',
),'',true,true);

$settings['tiny.custom_buttons2']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons2']->fromArray(array(
    'key' => 'tiny.custom_buttons2',
    'value' => 'bold,italic,underline,strikethrough,sub,sup,separator,bullist,numlist,outdent,indent,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,separator,styleprops',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'custom-buttons',
),'',true,true);

$settings['tiny.custom_buttons3']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons3']->fromArray(array(
    'key' => 'tiny.custom_buttons3',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'custom-buttons',
),'',true,true);

$settings['tiny.custom_buttons4']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons4']->fromArray(array(
    'key' => 'tiny.custom_buttons4',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'custom-buttons',
),'',true,true);

$settings['tiny.custom_buttons5']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_buttons5']->fromArray(array(
    'key' => 'tiny.custom_buttons5',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'custom-buttons',
),'',true,true);

$settings['tiny.custom_plugins']= $modx->newObject('modSystemSetting');
$settings['tiny.custom_plugins']->fromArray(array(
    'key' => 'tiny.custom_plugins',
    'value' => 'style,advimage,advlink,modxlink,searchreplace,print,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras,visualchars,media',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.editor_theme']= $modx->newObject('modSystemSetting');
$settings['tiny.editor_theme']->fromArray(array(
    'key' => 'tiny.editor_theme',
    'value' => 'advanced',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.element_format']= $modx->newObject('modSystemSetting');
$settings['tiny.element_format']->fromArray(array(
    'key' => 'tiny.element_format',
    'value' => 'xhtml',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.entity_encoding']= $modx->newObject('modSystemSetting');
$settings['tiny.entity_encoding']->fromArray(array(
    'key' => 'tiny.entity_encoding',
    'value' => 'named',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.fix_nesting']= $modx->newObject('modSystemSetting');
$settings['tiny.fix_nesting']->fromArray(array(
    'key' => 'tiny.fix_nesting',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.fix_table_elements']= $modx->newObject('modSystemSetting');
$settings['tiny.fix_table_elements']->fromArray(array(
    'key' => 'tiny.fix_table_elements',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.font_size_classes']= $modx->newObject('modSystemSetting');
$settings['tiny.font_size_classes']->fromArray(array(
    'key' => 'tiny.font_size_classes',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.font_size_style_values']= $modx->newObject('modSystemSetting');
$settings['tiny.font_size_style_values']->fromArray(array(
    'key' => 'tiny.font_size_style_values',
    'value' => 'xx-small,x-small,small,medium,large,x-large,xx-large',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.forced_root_block']= $modx->newObject('modSystemSetting');
$settings['tiny.forced_root_block']->fromArray(array(
    'key' => 'tiny.forced_root_block',
    'value' => 'p',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.indentation']= $modx->newObject('modSystemSetting');
$settings['tiny.indentation']->fromArray(array(
    'key' => 'tiny.indentation',
    'value' => '30px',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.invalid_elements']= $modx->newObject('modSystemSetting');
$settings['tiny.invalid_elements']->fromArray(array(
    'key' => 'tiny.invalid_elements',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.nowrap']= $modx->newObject('modSystemSetting');
$settings['tiny.nowrap']->fromArray(array(
    'key' => 'tiny.nowrap',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.object_resizing']= $modx->newObject('modSystemSetting');
$settings['tiny.object_resizing']->fromArray(array(
    'key' => 'tiny.object_resizing',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.path_options']= $modx->newObject('modSystemSetting');
$settings['tiny.path_options']->fromArray(array(
    'key' => 'tiny.path_options',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.remove_linebreaks']= $modx->newObject('modSystemSetting');
$settings['tiny.remove_linebreaks']->fromArray(array(
    'key' => 'tiny.remove_linebreaks',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.remove_redundant_brs']= $modx->newObject('modSystemSetting');
$settings['tiny.remove_redundant_brs']->fromArray(array(
    'key' => 'tiny.remove_redundant_brs',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.removeformat_selector']= $modx->newObject('modSystemSetting');
$settings['tiny.removeformat_selector']->fromArray(array(
    'key' => 'tiny.removeformat_selector',
    'value' => 'b,strong,em,i,span,ins',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'cleanup-output',
),'',true,true);

$settings['tiny.skin']= $modx->newObject('modSystemSetting');
$settings['tiny.skin']->fromArray(array(
    'key' => 'tiny.skin',
    'value' => 'cirkuit',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.skin_variant']= $modx->newObject('modSystemSetting');
$settings['tiny.skin_variant']->fromArray(array(
    'key' => 'tiny.skin_variant',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.table_inline_editing']= $modx->newObject('modSystemSetting');
$settings['tiny.table_inline_editing']->fromArray(array(
    'key' => 'tiny.table_inline_editing',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.template_list']= $modx->newObject('modSystemSetting');
$settings['tiny.template_list']->fromArray(array(
    'key' => 'tiny.template_list',
    'value' => '',
    'xtype' => 'textarea',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.template_selected_content_classes']= $modx->newObject('modSystemSetting');
$settings['tiny.template_selected_content_classes']->fromArray(array(
    'key' => 'tiny.template_selected_content_classes',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);

$settings['tiny.theme_advanced_blockformats']= $modx->newObject('modSystemSetting');
$settings['tiny.theme_advanced_blockformats']->fromArray(array(
    'key' => 'tiny.theme_advanced_blockformats',
    'value' => 'p,h1,h2,h3,h4,h5,h6,div,blockquote,code,pre,address',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'advanced-theme',
),'',true,true);

$settings['tiny.theme_advanced_font_sizes']= $modx->newObject('modSystemSetting');
$settings['tiny.theme_advanced_font_sizes']->fromArray(array(
    'key' => 'tiny.theme_advanced_font_sizes',
    'value' => '80%,90%,100%,120%,140%,160%,180%,220%,260%,320%,400%,500%,700%',
    'xtype' => 'textfield',
    'namespace' => 'tinymce',
    'area' => 'advanced-theme',
),'',true,true);

$settings['tiny.use_uncompressed_library']= $modx->newObject('modSystemSetting');
$settings['tiny.use_uncompressed_library']->fromArray(array(
    'key' => 'tiny.use_uncompressed_library',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'tinymce',
    'area' => 'general',
),'',true,true);


return $settings;