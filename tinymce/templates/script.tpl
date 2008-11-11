<script type="text/javascript" src="<?php echo MODX_BASE_URL; ?>assets/components/tinymce/jscripts/tiny_mce/<?php echo $scriptfile; ?>"></script>
<script type="text/javascript" src="<?php echo MODX_BASE_URL; ?>assets/components/tinymce/xconfig.js"></script>
<script language="javascript" type="text/javascript">
// <[CDATA[
tinyMCE.init({
    /* Build init options */   
    theme: '<?php echo $this->config['tinyTheme']; ?>'
    ,mode: 'exact'
    
    <?php if (!empty($this->config['width'])) { echo ',width: "'.$this->config['width'].'"'; } ?>
    
    <?php if (!empty($this->config['height'])) { echo ',height: "'.$this->config['height'].'"'; } ?>
        
    ,relative_urls: <?php echo $config['relative_urls'] ? 'true' : 'false'; ?>
    
    ,document_base_url: '<?php echo $config['document_base_url']; ?>'
        
    ,remove_script_host: <?php echo $config['remove_script_host'] ? 'true' : 'false'; ?>
    
    ,language: '<?php echo $config['language']; ?>'
    
    <?php if (!empty($config['element_list'])) { ?>,elements: '<?php echo $config['element_list']; ?>'<?php } ?>
    
    ,valid_elements: tinymce_valid_elements
    ,extended_valid_elements: tinymce_extended_valid_elements
    ,invalid_elements: tinymce_invalid_elements
    
    <?php if (!empty($this->config['css_path'])) { ?>,content_css: '<?php echo $this->config['css_path']; ?>'<?php } ?>
        
    <?php if (!empty($this->config['entity_encoding'])) { ?>,entity_encoding: "<?php echo $this->config['entity_encoding']; ?>"<?php } ?>
    
    <?php if ($this->config['entity_encoding'] == 'named' && !empty($this->config['entities'])) { ?>
    ,entities: "<?php echo $this->config['entities']; ?>"
    <?php } ?>
    
    ,cleanup: <?php echo ($this->config['cleanup'] == 'enabled' || empty($config['cleanup'])) ? 'true' : 'false'; ?>
    
    ,apply_source_formatting: true
    ,remove_linebreaks: false
    ,convert_fonts_to_spans: true
    ,onchange_callback : 'tvOnTinyMCEChangeCallBack'
    ,button_tile_map: false

<?php if ($this->config['theme'] == 'editor' || $this->config['theme'] == 'custom') { 
    if (empty($this->config['frontend'])) { ?>
    ,external_link_list_url: '<?php echo MODX_BASE_URL; ?>assets/components/tinymce/tinymce.linklist.php'
        <?php if ($this->config['use_browser']) { ?>
    ,resource_browser_path: '<?php echo MODX_BASE_URL; ?>manager/controllers/browser/index.php?'
    ,file_browser_callback: 'fileBrowserCallBack'
        <?php } ?>
    <?php } ?>
    
    <?php if (!empty($this->config['blockFormats'])) { ?>,theme_advanced_blockformats: '<?php echo $this->config['blockFormats']; ?>'<?php } ?>
    <?php if (!empty($this->config['css_selectors'])) { ?>,theme_advanced_styles: '<?php echo $this->config['css_selectors']; ?>'<?php } ?>
    
    ,plugins: '<?php echo $this->config['plugins']; ?>'
    ,theme_advanced_buttons0: ''
    ,theme_advanced_buttons1: '<?php echo $this->config['buttons1']; ?>'
    ,theme_advanced_buttons2: '<?php echo $this->config['buttons2']; ?>'
    ,theme_advanced_buttons3: '<?php echo $this->config['buttons3']; ?>'
    ,theme_advanced_buttons4: '<?php echo $this->config['buttons4']; ?>'
    ,theme_advanced_toolbar_location: 'top'
    
    ,theme_advanced_toolbar_align: '<?php echo ($this->config['toolbar_align'] == 'rtl') ? 'right' : 'left'; ?>'
    ,theme_advanced_path_location: 'bottom'
    ,theme_advanced_resize_horizontal: false    
    ,theme_advanced_disable: '<?php echo $this->config['disabledButtons']; ?>'    
    ,theme_advanced_resizing: <?php if (!empty($this->config['resizing'])) { echo $this->config['resizing']; } else { echo 'false'; } ?>
    
    <?php if (!empty($this->config['advimage_styles'])) { ?>,advimage_styles: "<?php echo $this->config['advimage_styles']; ?>"<?php } ?>
    <?php if (!empty($this->config['advlink_styles'])) { ?>,advlink_styles : "<?php echo $this->config['advlink_styles']; ?>"<?php } ?>
    
    ,plugin_insertdate_dateFormat : "%Y-%m-%d"
    ,plugin_insertdate_timeFormat : "%H:%M:%S"
    
<?php } ?>
});

var loadRTE = function(id) {
    if (!tinyMCE.get(id)) {
        tinyMCE.execCommand('mceAddControl', false, id);
    } else {
        tinyMCE.execCommand('mceRemoveControl', false, id);
    }
}

<?php if (empty($this->config['frontend'])) { ?>
function fileBrowserCallBack(field_name, url, type, win) {
    // This is where you insert your custom filebrowser logic
    var win=tinyMCE.getWindowArg("window");
    win.BrowseServer(field_name);
}
<?php } ?>
function tvOnTinyMCEChangeCallBack(i) {
    triggerRTEOnChange();
}
// ]]>
</script>