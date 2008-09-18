<script type="text/javascript" src="{$smarty.const.MODX_BASE_URL}assets/plugins/tinymce/jscripts/tiny_mce/{$scriptfile}"></script>
<script type="text/javascript" src="{$smarty.const.MODX_BASE_URL}assets/plugins/tinymce/xconfig.js"></script>
<script language="javascript" type="text/javascript">
// <[CDATA[
{literal}
tinyMCE.init({
    {/literal}
    // Build init options   
    theme: '{$config.tinyTheme}'
    ,mode: 'exact'
    
    {if $config.width},width: '{$config.width}'{/if}
    
    {if $config.height},height: '{$config.height}'{/if}
    
    ,relative_urls: {if $config.relative_urls}true{else}false{/if}
    
    ,document_base_url: '{$config.document_base_url}'
    
    ,remove_script_host: {if $config.remove_script_host}true{else}false{/if}
    
    ,language: '{$config.language}'
    
    {if NOT empty($config.element_list)},elements: '{$config.element_list}'{/if}
    
    ,valid_elements: tinymce_valid_elements
    ,extended_valid_elements: tinymce_extended_valid_elements
    ,invalid_elements: tinymce_invalid_elements
    
    {if NOT empty($config.css_path)},content_css: "{$config.css_path}"{/if}
    
    
    ,entity_encoding: "{$config.entity_encoding}"
    
    {if $config.entity_encoding EQ 'named' AND NOT empty($config.entities)},entities: "{$config.entities}"{/if}
    
    ,cleanup: {if $config.cleanup EQ 'enabled' OR empty($config.cleanup)}true{else}false{/if}
    
    ,apply_source_formatting: true
    ,remove_linebreaks: false
    ,convert_fonts_to_spans: true
    ,onchange_callback : 'tvOnTinyMCEChangeCallBack'
    ,button_tile_map: false

{if $config.theme EQ 'editor' OR $config.theme EQ 'custom'}
    {if NOT $config.frontend}
        ,external_link_list_url: '{$config.path}/tinymce.linklist.php'
        {if $config.use_browser}
            ,resource_browser_path: '{$smarty.const.MODX_BASE_URL}manager/controllers/browser/index.php?'
            ,file_browser_callback: 'fileBrowserCallBack'
        {/if}
    {/if}
    
    
    {if NOT empty($config.blockFormats)},theme_advanced_blockformats: '{$config.blockFormats}'{/if}
    {if NOT empty($config.css_selectors)},theme_advanced_styles: '{$config.css_selectors}'{/if}
    
    ,plugins: '{$config.plugins}'
    ,theme_advanced_buttons0: ''
    ,theme_advanced_buttons1: '{$config.buttons1}'
    ,theme_advanced_buttons2: '{$config.buttons2}'
    ,theme_advanced_buttons3: '{$config.buttons3}'
    ,theme_advanced_buttons4: '{$config.buttons4}'
    ,theme_advanced_toolbar_location: 'top'
    
    ,theme_advanced_toolbar_align: {if $config.toolbar_align EQ 'rtl'}'right'{else}'left'{/if}
    
    ,theme_advanced_path_location: 'bottom'
    ,theme_advanced_disable: '{$config.disabledButtons}'
    
    ,theme_advanced_resizing: {if NOT empty($config.resizing)}{$config.resizing}{else}false{/if}
    
    ,theme_advanced_resize_horizontal: false
    
    {if NOT empty($config.advimage_styles)},advimage_styles : "{$config.advimage_styles}"{/if}
    
    {if NOT empty($config.advlink_styles)},advlink_styles : "{$config.advlink_styles}"{/if}
    
    ,plugin_insertdate_dateFormat : "%Y-%m-%d"
    ,plugin_insertdate_timeFormat : "%H:%M:%S"
    
{/if}
{literal}
});

var loadRTE = function(id) {
    if (!tinyMCE.get(id)) {
        tinyMCE.execCommand('mceAddControl', false, id);
    } else {
        tinyMCE.execCommand('mceRemoveControl', false, id);
    }
}

{/literal}


{if NOT $config.frontend}
{literal}
function fileBrowserCallBack(field_name, url, type, win) {
    // This is where you insert your custom filebrowser logic
    var win=tinyMCE.getWindowArg("window");
    win.BrowseServer(field_name);
}
{/literal}
{/if}
{literal}
function tvOnTinyMCEChangeCallBack(i) {
    i.oldTargetElement.onchange();
}
{/literal}
// ]]>
</script>