<?php
/**
 * Czech TinyMCE language file
 *
 * @package tinymce
 * @language cs
 *
 * @author modxcms.cz
 * @updated 2011-12-09
 */
include_once(dirname(dirname(__FILE__)).'/en/default.inc.php'); // fallback for missing defaults or new additions

// $_lang['tiny.toggle_editor'] = 'Toggle Editor: ';
$_lang['tiny.toggle_editor'] = 'Použít WYSIWYG: ';

// $_lang['setting_tiny.base_url'] = 'TinyMCE Document Base URL';
$_lang['setting_tiny.base_url'] = 'Základní URL pro TinyMCE';

// $_lang['setting_tiny.base_url_desc'] = 'Allows the setting of a base URL property to override the document_base_url TinyMCE settings. Useful for rootrelative environments.';
$_lang['setting_tiny.base_url_desc'] = 'Umožňuje nastavit základní URL a potlačit tak nastavení document_base_url ve výchozím nastavení TinyMCE. Vhodné pro prostředí s relativním rootem (rootrelative environments).';

// $_lang['setting_tiny.convert_fonts_to_spans'] = 'Convert Fonts to Spans';
$_lang['setting_tiny.convert_fonts_to_spans'] = 'Převést Fonty na Spany';

// $_lang['setting_tiny.convert_fonts_to_spans_desc'] = 'If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated.';
$_lang['setting_tiny.convert_fonts_to_spans_desc'] = 'Pokud nastavíte tuto volbu na hodnotu Ano, bude TinyMCE převádět všechny elementy FONT na SPAN. Tato možnost by měla být použita pokud chcete mít možnost mít validní HTML kód dle W3C, protože element FONT je již zastaralý.';

// $_lang['setting_tiny.convert_newlines_to_brs'] = 'Convert Newlines to BRs';
$_lang['setting_tiny.convert_newlines_to_brs'] = 'Převádět nové řádky na elementy BR';

// $_lang['setting_tiny.convert_newlines_to_brs_desc'] = 'If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.';
$_lang['setting_tiny.convert_newlines_to_brs_desc'] = 'Pokud nastavíte tuto volbu na hodnotu Ano znaky nových řádků budou automaticky převáděny na elemnty BR. Tato možnost je výchozím stavu na stavena na Ne.';

// $_lang['setting_tiny.css_selectors'] = 'CSS Selectors';
$_lang['setting_tiny.css_selectors'] = 'CSS selektory';

// $_lang['setting_tiny.css_selectors_desc'] = 'Here you can enter a list of selectors that should be available in the editor. Enter them as follows:<br />"displayName=selectorName;displayName2=selectorName2"<br />For instance, say you have <b>.mono</b> and <b>.smallText</b> selectors in your CSS file, you could add them here as:<br />"Monospaced text=mono;Small text=smallText"<br />Note that the last entry should not have a semi-colon after it.';
$_lang['setting_tiny.css_selectors_desc'] = 'Seznam selektorů dostupný ve WYSIWYG editoru. Zadávejte je v následujícím tvaru:<br />"zobrazenýNázev=nazevSelektoru;zobrazenýNázev2=nazevSelektoru2"<br />Chceme-li mít např. selektory pro třídy <b>.mono</b> a <b>.malyText</b>, které máme v CSS souboru, zadáme je tedy takto:<br />"Neproporcionální text=mono;Malý text=malyText"<br />Pamatujte, že za posledním záznamem nesmí být středník.';

// $_lang['setting_tiny.custom_buttons1'] = 'Custom Buttons Row 1';
$_lang['setting_tiny.custom_buttons1'] = '1. řádek volitelných tlačítek';

// $_lang['setting_tiny.custom_buttons1_desc'] = 'Enter the buttons to use as a comma separated list for the first row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons1_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro první řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';

// $_lang['setting_tiny.custom_buttons2'] = 'Custom Buttons Row 2';
$_lang['setting_tiny.custom_buttons2'] = '2. řádek volitelných tlačítek';

// $_lang['setting_tiny.custom_buttons2_desc'] = 'Enter the buttons to use as a comma separated list for the second row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons2_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro druhou řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';

// $_lang['setting_tiny.custom_buttons3'] = 'Custom Buttons Row 3';
$_lang['setting_tiny.custom_buttons3'] = '3. řádek volitelných tlačítek';

// $_lang['setting_tiny.custom_buttons3_desc'] = 'Enter the buttons to use as a comma separated list for the third row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons3_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro třetí řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';

// $_lang['setting_tiny.custom_buttons4'] = 'Custom Buttons Row 4';
$_lang['setting_tiny.custom_buttons4'] = '4. řádek volitelných tlačítek';

// $_lang['setting_tiny.custom_buttons4_desc'] = 'Enter the buttons to use as a comma separated list for the fourth row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons4_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro čtvrtou řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';

// $_lang['setting_tiny.custom_buttons5'] = 'Custom Buttons Row 5';
$_lang['setting_tiny.custom_buttons5'] = '5. řádek volitelných tlačítek';

// $_lang['setting_tiny.custom_buttons5_desc'] = 'Enter the buttons to use as a comma separated list for the fifth row. Be sure that each button has the required plugin enabled in the "Custom Plugins" setting.';
$_lang['setting_tiny.custom_buttons5_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro pátou řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';

// $_lang['setting_tiny.custom_plugins'] = 'Custom Plugins';
$_lang['setting_tiny.custom_plugins'] = 'Volitelné pluginy';

// $_lang['setting_tiny.custom_plugins_desc'] = 'A comma-separated list of TinyMCE plugins to use.';
$_lang['setting_tiny.custom_plugins_desc'] = 'Čárkou oddělený seznam TinyMCE pluginů.';

// $_lang['setting_tiny.editor_theme'] = 'Editor Theme';
$_lang['setting_tiny.editor_theme'] = 'Téma editoru';

// $_lang['setting_tiny.element_format'] = 'Element Format';
$_lang['setting_tiny.element_format'] = 'Formát elementů';

// $_lang['setting_tiny.element_format_desc'] = 'This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example &lt;br /&gt; will be &lt;br&gt; if you set this option to "html".';
$_lang['setting_tiny.element_format_desc'] = 'Tato volba umožňuje kontrolovat, zda jsou elementy ukládány jako html nebo jako xhtml. Výchozím nastavením je xhtml. To znamená, že např. &lt;br /&gt; bude uloženo jako &lt;br&gt; pokud tuto volbu nastavíte na "html".';

// $_lang['setting_tiny.entity_encoding'] = 'Entity Encoding';
$_lang['setting_tiny.entity_encoding'] = 'Kódování entit';

// $_lang['setting_tiny.entity_encoding_desc'] = 'This option controls how entities/characters get processed by TinyMCE. Available values are "named", "numeric" and "raw".';
$_lang['setting_tiny.entity_encoding_desc'] = 'Tato volba určuje, jak budou entity/znaky uloženy. Možné hodnoty jsou "named", "numeric" nebo "raw".';

// $_lang['setting_tiny.fix_nesting'] = 'Auto-fix Nesting';
$_lang['setting_tiny.fix_nesting'] = 'Auto-oprava chybného zanoření';

// $_lang['setting_tiny.fix_nesting_desc'] = 'This option controls if invalid contents should be corrected before insertion in IE. IE has a bug that produced an invalid DOM tree if the input contents are not correct so this option tries to fix this using preprocessing of the HTML string. This option is disabled by default since it might be a bit slow.';
$_lang['setting_tiny.fix_nesting_desc'] = 'Tato volba určuje zda má být chybný obsah upraven před vložením do IE. IE obsahuje chybu, která způsobuje chybné vygenerování DOM stromu pokud není vstupní obsah správný, pak se TinyMCE pokouší opravit chyby v obsahu pomocí předzpracování HTML obsahu. Tato volba je ve výchozím stavu vypnuta, neb může způsobovat zpomalení.';

// $_lang['setting_tiny.fix_table_elements'] = 'Auto-fix Table Elements';
$_lang['setting_tiny.fix_table_elements'] = 'Auto-oprava tabulkových elementů';

// $_lang['setting_tiny.fix_table_elements_desc'] = 'This option enables you to specify that table elements should be moved outside paragraphs or other block elements. If you enable this option block elements will be split into two chunks when a table is found within it. This option is disabled by default.';
$_lang['setting_tiny.fix_table_elements_desc'] = 'Tato volba umožňuje nastavit, aby byly elementy tabulek umístěny mimo odstavce a jiné blokové elementy. Pokud je tato volba aktivní budou blokové elementy rozděleny do dvou kusů a tabulka bude umístěna mezi ně. Tato volba je ve výchozím stavu vypnuta. (Volba odstraněna v TinyMCE 3.4).';

// $_lang['setting_tiny.font_size_classes'] = 'Font Size Classes';
$_lang['setting_tiny.font_size_classes'] = 'Třídy pro velikosti fontů';

// $_lang['setting_tiny.font_size_classes_desc'] = 'This option allows specification of a comma separated list of class names that is to be used when the user selects font sizes. This option is only used when the convert_fonts_to_spans option is enabled. This list of classes should be 7 items. This option is not used by default, but can be useful if you want to have custom classes for each font size for browser compatibility.';
$_lang['setting_tiny.font_size_classes_desc'] = 'Tato volba umožňuje určit čárkou oddělený seznam názvů CSS tříd, které jsou použity pokud uživatel mění velikost fontu. Tato volba je aplikována pouze pokud je aktivní volba convert_fonts_to_spans. Seznam by měl obsahovat 7 položek. Ve výchozím stavu je tato volba neaktivní, může se však hodit pokud chcete nastavit vlastní třídy pro každou velikost fontu.';

// $_lang['setting_tiny.font_size_style_values'] = 'Font Size Style Values';
$_lang['setting_tiny.font_size_style_values'] = 'Hodnoty CSS style pro velikosti fontů';

// $_lang['setting_tiny.font_size_style_values_desc'] = 'This option allows specification of a comma separated list of style values that is to be used when the user selects font sizes. This option is only used when the convert_fonts_to_spans option is enabled. This list of style values should be 7 items. This option is not used by default, but can be useful if you want to have custom CSS values for each font size for browser compatibility. Defaults to: xx-small,x-small,small,medium,large,x-large,xx-large.';
$_lang['setting_tiny.font_size_style_values_desc'] = 'Tato volba umožňuje určit čárkou oddělený seznam hodnot, které jsou použity pokud uživatel mění velikost fontu. Tato volba je aplikována pouze pokud je aktivní volba convert_fonts_to_spans. Seznam by měl obsahovat 7 položek. Ve výchozím stavu je tato volba neaktivní, může se však hodit pokud chcete nastavit vlastní hodnoty pro každou velikost fontu. Výchozí hodnoty: xx-small,x-small,small,medium,large,x-large,xx-large.';

// $_lang['setting_tiny.forced_root_block'] = 'Forced Root Block';
$_lang['setting_tiny.forced_root_block'] = 'Vynutit blokový element';

// $_lang['setting_tiny.forced_root_block_desc'] = 'This option enables you to make sure that any non block elements or text nodes are wrapped in block elements. For example &lt;strong&gt;something&lt;/strong&gt; will result in output like: &lt;p&gt;&lt;strong&gt;something&lt;/strong&gt;&lt;/p&gt;.';
$_lang['setting_tiny.forced_root_block_desc'] = 'Tato volba umožňuje, aby řádkové elementy nemohli stát samostatně mimo blokové elementy. Např. &lt;strong&gt;cokoliv&lt;/strong&gt; bude přepsáno na: &lt;p&gt;&lt;strong&gt;cokoliv&lt;/strong&gt;&lt;/p&gt;.';

// $_lang['setting_tiny.indentation'] = 'Indentation';
$_lang['setting_tiny.indentation'] = 'Odsazování';

// $_lang['setting_tiny.indentation_desc'] = 'This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.';
$_lang['setting_tiny.indentation_desc'] = 'Tato volba slouží k určení úrovně odsazení pro tlačítka odsazení/přisazení z tlačítkové lišty. Výchozí hodnota je 30px, můžete ji ale změnit na libovolnou hodnotu.';

// $_lang['setting_tiny.invalid_elements'] = 'Invalid Elements';
$_lang['setting_tiny.invalid_elements'] = 'Zakázané elementy';

// $_lang['setting_tiny.invalid_elements_desc'] = 'This option should contain a comma separated list of element names to exclude from the content. Elements in this list will be removed when TinyMCE executes a cleanup.';
$_lang['setting_tiny.invalid_elements_desc'] = 'V této volbě lze nadefinovat čárkou oddělený seznam elementů, které budou vyloučeny z obsahu. Definované elementy budou z obsahu odstraněny při čištění obsahu, které provádí TinyMCE.';

// $_lang['setting_tiny.nowrap'] = 'Prevent Editor Wrap';
$_lang['setting_tiny.nowrap'] = 'Potlačit zalamování řádků';

// $_lang['setting_tiny.nowrap_desc'] = 'This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.';
$_lang['setting_tiny.nowrap_desc'] = 'Toto proti-zalamovací nastavení umožní určit se mají zalamovat mezery v editoru. Ve výchozím stavu je tato volba vypnuta, zapnete-li ji pak nebude docházet k zalamování textu.';

// $_lang['setting_tiny.object_resizing'] = 'Object Resizing';
$_lang['setting_tiny.object_resizing'] = 'Změna velikosti objektu';

// $_lang['setting_tiny.object_resizing_desc'] = 'This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.';
$_lang['setting_tiny.object_resizing_desc'] = 'Tato volba vám dává možnost zapnout/vypnout změnu velikosti tabulek a obrázků (Firefox/Mozilla) přímo v editoru. Ve výchozím stavu je tato volba aktivní.';

// $_lang['setting_tiny.remove_linebreaks'] = 'Remove Linebreaks';
$_lang['setting_tiny.remove_linebreaks'] = 'Odstraňovat konce řádků';

// $_lang['setting_tiny.remove_linebreaks_desc'] = 'This option controls whether line break characters should be removed from output HTML.';
$_lang['setting_tiny.remove_linebreaks_desc'] = 'Tato volba určuje zda mají být z výstupního HTML odstraněny znaky konců řádků.';

// $_lang['setting_tiny.remove_redundant_brs'] = 'Remove Redundant BRs';
$_lang['setting_tiny.remove_redundant_brs'] = 'Odstranit nadbytečné elementy BR';

// $_lang['setting_tiny.remove_redundant_brs_desc'] = 'This option is enabled by default and will control the output of trailing BR elements at the end of block elements. Since IE cannot render these properly we need to remove them by default to ensure proper output across all browsers. So for some browsers this BR at the end of the LI at the example below is redundant.';
$_lang['setting_tiny.remove_redundant_brs_desc'] = 'Tato volba je ve výchozím stavu aktivní a určuje zda mají být z výstupu odstraněny BR elementry, které se nacházejí na konci blokových elementů. IE tyto elementy nedokáže správně  zobrazit, a proto je třeba pro zachování stejného zobrazení v rámci všech prohlížečů, tyto elementy BR odstranit. Pro některé prohlížeče jsou tyto elementy BR na konci elementů LI v příkladu nadbytečné.';

// $_lang['setting_tiny.removeformat_selector'] = 'RemoveFormat Selector';
$_lang['setting_tiny.removeformat_selector'] = 'Selektory pro odstranění formátování';

// $_lang['setting_tiny.removeformat_selector_desc'] = 'This option allows specification of which elements should be removed when you press the removeformat button. This is a CSS selector pattern.';
$_lang['setting_tiny.removeformat_selector_desc'] = 'Tato volba umožňuje určit, které elementy mají být odstraněny, když je stisknuto tlačítko Odstranit formátování. Zadávejte ve formátu CSS selektoru.';

// $_lang['setting_tiny.path_options'] = 'Path Options';
$_lang['setting_tiny.path_options'] = 'Možnosti cest';

// $_lang['setting_tiny.path_options_desc'] = 'Either "rootrelative", "docrelative", or "fullpathurl".';
$_lang['setting_tiny.path_options_desc'] = 'Buď "rootrelative", "docrelative" nebo "fullpathurl".';

// $_lang['setting_tiny.table_inline_editing'] = 'Table Inline Editing';
$_lang['setting_tiny.table_inline_editing'] = 'Přímá úprava tabulek';

// $_lang['setting_tiny.table_inline_editing_desc'] = 'This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Tato volba Vám dává možnost zapnout/vypnout přímou úpravu tabulek v prohlížeči Firefox/Mozilla. Dle dokumentace TinyMCE je tato volba občas ne zcela správně fungující a proto je ve výchozím stavu neaktivní.';

// $_lang['setting_tiny.template_list'] = 'Template List';
$_lang['setting_tiny.template_list'] = 'Seznam šablon';

// $_lang['setting_tiny.template_list_desc'] = 'Specify a list of templates for the template plugin. They must be comma-separated, and then have the format name:URL:description. For example, MyTemp:assets/templates/mytemp.html:My very own template';
$_lang['setting_tiny.template_list_desc'] = 'Zadejte seznam šablon pro šablonovací plugin. Musejí být čárkou oddělené a dodržet následující formát názevŠablony:URL:popis. Např. Moje Šablona:assets/templates/mojesablona.html:Moje vlastní šablona.';

// $_lang['setting_tiny.template_list_snippet'] = 'Template List Snippet';
$_lang['setting_tiny.template_list_snippet'] = 'Snippet pro seznam šablon';

// $_lang['setting_tiny.template_list_snippet_desc'] = 'Enter the name of a snippet that will generate a list of templates compatible with the tiny.template_list format (name:URL:description). If a snippet is named, the results returned by the snippet call will be used rather than any value present in tiny.template_list';
$_lang['setting_tiny.template_list_snippet_desc'] = 'Zadejte název snippetu, který slouží ke generování seznamu šablon kompatibilních s formátem tiny.template_list (název:URL:popis). Je-li název zadán, bude jeho výstup upřednostněn před hodnotami určenými ve volbě tiny.template_list';

// $_lang['setting_tiny.template_selected_content_classes'] = 'Template Selected Content Classes';
$_lang['setting_tiny.template_selected_content_classes'] = 'Šablona vybraných tříd obsahu';

// $_lang['setting_tiny.template_selected_content_classes_desc'] = 'Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Zadejte seznam CSS tříd pro šablonovací plugin. Musí být odděleny mezerou. Každý element v šabloně s jednou z definovaných CSS tříd bude zaměněn za vybraný obsah editoru při prvním vložení';

// $_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML Block Elements';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML blokové elementy';

// $_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'This option should contain a comma separated list of formats that will be available in the format drop down list. This option is only available if the advanced theme is used.';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'Čárkou oddělený seznam HTML elementů, které jsou zobrazeny v rozbalovacím seznamu Formát. Tato volba je dostupná pouze pokud je použito téma "advanced".';

// $_lang['setting_tiny.theme_advanced_font_sizes'] = 'Advanced Theme Font Sizes';
$_lang['setting_tiny.theme_advanced_font_sizes'] = 'Velikosti fontu ve skinu Advanced';

// $_lang['setting_tiny.theme_advanced_font_sizes_desc'] = 'This option should contain a comma separated list of font sizes to include. Each item in the list should be a valid value for the font-style CSS property (10px, 12pt, 1em, etc.). Example: Big text=30px,Small text=small,My Text Size=.mytextsize';
$_lang['setting_tiny.theme_advanced_font_sizes_desc'] = 'Tato volba by měla obsahovat čárkou oddělený seznam velikostí fontů, které chcete zobrazit v editoru. Každá položka v seznamu by měla mít platnou hodnotu pro CSS (10px, 12pt, 1em, atd.). Například: Velký text=30px,Malý text=small,Moje velikost textu=.mytextsize';

// $_lang['setting_tiny.skin'] = 'TinyMCE Skin';
$_lang['setting_tiny.skin'] = 'TinyMCE Skin';

// $_lang['setting_tiny.skin_desc'] = 'This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins, these are called "default" and "o2k7". We added another skin named "cirkuit" that is chosen by default.';
$_lang['setting_tiny.skin_desc'] = 'Pomocí této volby si můžete zvolit skin použitý v daném tématu editoru. Skin je v podstatě CSS soubor, který se nahraje při načtení daného tématu z jeho adresáře. Téma "advanced", které ve výchozím stavu TinyMCE obsahuje dva skiny, "default" a "o2k7". Přidali jsme ještě skin "cirkuit", který se nyní nahrává ve výchozím stavu.';

// $_lang['setting_tiny.skin_variant'] = 'TinyMCE Skin Variant';
$_lang['setting_tiny.skin_variant'] = 'Varianta TinyMCE skinu';

// $_lang['setting_tiny.skin_variant_desc'] = 'This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. For the "cirkuit" skin there\'s one variant named "silver". When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.';
$_lang['setting_tiny.skin_variant_desc'] = 'Touto možností můžete zvolit variantu skinu, např. "silver" nebo "black". "default" skin neobsahuje žádnou volitelnou variantu, skin "o2k7" nabízí k výchozí variantě varianty "silver" nebo "black". Pro skin "cirkuit" máme také variantu "silver". Při vytváření skinu, lze vytvořit i jeho varianty, přidáním souboru ui_[nazev_varianty].css jako variatnu k ui.css.';

// $_lang['area_advanced-theme'] = 'Advanced Theme';
$_lang['area_advanced-theme'] = 'Téma Advanced';

// $_lang['area_cleanup-output'] = 'Cleanup/Output';
$_lang['area_cleanup-output'] = 'Filtrování/Výstup';

// $_lang['area_custom-buttons'] = 'Custom Buttons';
$_lang['area_custom-buttons'] = 'Volitelná tlačítka';

// $_lang['area_general'] = 'General';
$_lang['area_general'] = 'Obecné';

// $_lang['area_url'] = 'URL';
$_lang['area_url'] = 'URL';

// $_lang['area_callbacks'] = 'Callbacks';
$_lang['area_callbacks'] = 'Zpětná volání';

// $_lang['area_layout'] = 'Layout';
$_lang['area_layout'] = 'Rozložení';
