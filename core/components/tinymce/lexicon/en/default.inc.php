<?php
/**
 * Default TinyMCE language file
 *
 * @package tinymce
 * @language en
 */
$_lang['tiny.toggle_editor'] = 'Toggle Editor: ';

$_lang['setting_tiny.base_url'] = 'TinyMCE Document Base URL';
$_lang['setting_tiny.base_url_desc'] = 'Allows the setting of a base URL property to override the document_base_url TinyMCE settings. Useful for rootrelative environments.';
$_lang['setting_tiny.convert_fonts_to_spans'] = 'Convert Fonts to Spans';
$_lang['setting_tiny.convert_fonts_to_spans_desc'] = 'If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated.';
$_lang['setting_tiny.convert_newlines_to_brs'] = 'Convert Newlines to BRs';
$_lang['setting_tiny.convert_newlines_to_brs_desc'] = 'If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.';
$_lang['setting_tiny.css_selectors'] = 'CSS Selectors';
$_lang['setting_tiny.css_selectors_desc'] = 'Here you can enter a list of selectors that should be available in the editor. Enter them as follows:<br />"displayName=selectorName;displayName2=selectorName2"<br />For instance, say you have <b>.mono</b> and <b>.smallText</b> selectors in your CSS file, you could add them here as:<br />"Monospaced text=mono;Small text=smallText"<br />Note that the last entry should not have a semi-colon after it.';
$_lang['setting_tiny.custom_buttons1'] = 'Custom Buttons Row 1';
$_lang['setting_tiny.custom_buttons1_desc'] = 'Enter the buttons to use as a comma separated list for the first row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons2'] = 'Custom Buttons Row 2';
$_lang['setting_tiny.custom_buttons2_desc'] = 'Enter the buttons to use as a comma separated list for the second row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons3'] = 'Custom Buttons Row 3';
$_lang['setting_tiny.custom_buttons3_desc'] = 'Enter the buttons to use as a comma separated list for the third row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons4'] = 'Custom Buttons Row 4';
$_lang['setting_tiny.custom_buttons4_desc'] = 'Enter the buttons to use as a comma separated list for the fourth row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons5'] = 'Custom Buttons Row 5';
$_lang['setting_tiny.custom_buttons5_desc'] = 'Enter the buttons to use as a comma separated list for the fifth row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_plugins'] = 'Custom Plugins';
$_lang['setting_tiny.custom_plugins_desc'] = 'A comma-separated list of TinyMCE plugins to use.';
$_lang['setting_tiny.editor_theme'] = 'Editor Theme';
$_lang['setting_tiny.element_format'] = 'Element Format';
$_lang['setting_tiny.element_format_desc'] = 'This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example &lt;br /&gt; will be &lt;br&gt; if you set this option to "html".';
$_lang['setting_tiny.entity_encoding'] = 'Entity Encoding';
$_lang['setting_tiny.entity_encoding_desc'] = 'This option controls how entities/characters get processed by TinyMCE. Available values are "named", "numeric" and "raw".';
$_lang['setting_tiny.fix_nesting'] = 'Auto-fix Nesting';
$_lang['setting_tiny.fix_nesting_desc'] = 'This option controls if invalid contents should be corrected before insertion in IE. IE has a bug that produced an invalid DOM tree if the input contents are not correct so this option tries to fix this using preprocessing of the HTML string. This option is disabled by default since it might be a bit slow.';
$_lang['setting_tiny.fix_table_elements'] = 'Auto-fix Table Elements';
$_lang['setting_tiny.fix_table_elements_desc'] = 'This option enables you to specify that table elements should be moved outside paragraphs or other block elements. If you enable this option block elements will be split into two chunks when a table is found within it. This option is disabled by default.';
$_lang['setting_tiny.font_size_classes'] = 'Font Size Classes';
$_lang['setting_tiny.font_size_classes_desc'] = 'This option allows specification of a comma separated list of class names that is to be used when the user selects font sizes. This option is only used when the convert_fonts_to_spans option is enabled. This list of classes should be 7 items. This option is not used by default, but can be useful if you want to have custom classes for each font size for browser compatibility.';
$_lang['setting_tiny.font_size_style_values'] = 'Font Size Style Values';
$_lang['setting_tiny.font_size_style_values_desc'] = 'This option allows specification of a comma separated list of style values that is to be used when the user selects font sizes. This option is only used when the convert_fonts_to_spans option is enabled. This list of style values should be 7 items. This option is not used by default, but can be useful if you want to have custom CSS values for each font size for browser compatibility. Defaults to: xx-small,x-small,small,medium,large,x-large,xx-large.';
$_lang['setting_tiny.forced_root_block'] = 'Forced Root Block';
$_lang['setting_tiny.forced_root_block_desc'] = 'This option enables you to make sure that any non block elements or text nodes are wrapped in block elements. For example &lt;strong&gt;something&lt;/strong&gt; will result in output like: &lt;p&gt;&lt;strong&gt;something&lt;/strong&gt;&lt;/p&gt;.';
$_lang['setting_tiny.indentation'] = 'Indentation';
$_lang['setting_tiny.indentation_desc'] = 'This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.';
$_lang['setting_tiny.invalid_elements'] = 'Invalid Elements';
$_lang['setting_tiny.invalid_elements_desc'] = 'This option should contain a comma separated list of element names to exclude from the content. Elements in this list will be removed when TinyMCE executes a cleanup.';
$_lang['setting_tiny.nowrap'] = 'Prevent Editor Wrap';
$_lang['setting_tiny.nowrap_desc'] = 'This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.';
$_lang['setting_tiny.object_resizing'] = 'Object Resizing';
$_lang['setting_tiny.object_resizing_desc'] = 'This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.';
$_lang['setting_tiny.remove_linebreaks'] = 'Remove Linebreaks';
$_lang['setting_tiny.remove_linebreaks_desc'] = 'This option controls whether line break characters should be removed from output HTML.';
$_lang['setting_tiny.remove_redundant_brs'] = 'Remove Redundant BRs';
$_lang['setting_tiny.remove_redundant_brs_desc'] = 'This option is enabled by default and will control the output of trailing BR elements at the end of block elements. Since IE cannot render these properly we need to remove them by default to ensure proper output across all browsers. So for some browsers this BR at the end of the LI at the example below is redundant.';
$_lang['setting_tiny.removeformat_selector'] = 'RemoveFormat Selector';
$_lang['setting_tiny.removeformat_selector_desc'] = 'This option allows specification of which elements should be removed when you press the removeformat button. This is a CSS selector pattern.';
$_lang['setting_tiny.path_options'] = 'Path Options';
$_lang['setting_tiny.path_options_desc'] = 'Either "rootrelative", "docrelative", or "fullpathurl".';
$_lang['setting_tiny.table_inline_editing'] = 'Table Inline Editing';
$_lang['setting_tiny.table_inline_editing_desc'] = 'This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.';
$_lang['setting_tiny.template_list'] = 'Template List';
$_lang['setting_tiny.template_list_desc'] = 'Specify a list of templates for the template plugin. They must be comma-separated, and then have the format name:URL:description. For example, MyTemp:assets/templates/mytemp.html:My very own template';
$_lang['setting_tiny.template_list_snippet'] = 'Template List Snippet';
$_lang['setting_tiny.template_list_snippet_desc'] = 'Enter the name of a snippet that will generate a list of templates compatible with the tiny.template_list format (name:URL:description). If a snippet is named, the results returned by the snippet call will be used rather than any value present in tiny.template_list';
$_lang['setting_tiny.template_selected_content_classes'] = 'Template Selected Content Classes';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML Block Elements';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'This option should contain a comma separated list of formats that will be available in the format drop down list. This option is only available if the advanced theme is used.';
$_lang['setting_tiny.theme_advanced_font_sizes'] = 'Advanced Theme Font Sizes';
$_lang['setting_tiny.theme_advanced_font_sizes_desc'] = 'This option should contain a comma separated list of font sizes to include. Each item in the list should be a valid value for the font-style CSS property (10px, 12pt, 1em, etc.). Example: Big text=30px,Small text=small,My Text Size=.mytextsize';

$_lang['setting_tiny.skin'] = 'TinyMCE Skin';
$_lang['setting_tiny.skin_desc'] = 'This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins, these are called "default" and "o2k7". We added another skin named "cirkuit" that is chosen by default.';
$_lang['setting_tiny.skin_variant'] = 'TinyMCE Skin Variant';
$_lang['setting_tiny.skin_variant_desc'] = 'This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. For the "cirkuit" skin there\'s one variant named "silver". When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.';
$_lang['setting_tiny.object_resizing'] = 'Object Resizing';
$_lang['setting_tiny.object_resizing_desc'] = 'This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.';
$_lang['setting_tiny.table_inline_editing'] = 'Table Inline Editing';
$_lang['setting_tiny.table_inline_editing_desc'] = 'This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.';
$_lang['setting_tiny.template_selected_content_classes'] = 'Template Selected Content Classes';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.';

$_lang['area_advanced-theme'] = 'Advanced Theme';
$_lang['area_cleanup-output'] = 'Cleanup/Output';
$_lang['area_custom-buttons'] = 'Custom Buttons';
$_lang['area_general'] = 'General';
$_lang['area_url'] = 'URL';
$_lang['area_callbacks'] = 'Callbacks';
$_lang['area_layout'] = 'Layout';