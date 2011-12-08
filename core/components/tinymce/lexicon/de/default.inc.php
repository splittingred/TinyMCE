<?php
/**
 * Default TinyMCE language file
 *
 * @package tinymce
 * @subpackage lexicon
 *
 * @language de
 * MODX Revolution TinyMCE package translated to German by Jan-Christoph Ihrens (enigmatic_user, enigma@lunamail.de)
 */
include_once(dirname(dirname(__FILE__)).'/en/default.inc.php'); // fallback for missing defaults or new additions

$_lang['tiny.toggle_editor'] = 'Editor ein- und ausschalten: ';

$_lang['setting_tiny.base_url'] = 'TinyMCE-Dokument-Basis-URL';
$_lang['setting_tiny.base_url_desc'] = 'Erlaubt das Einstellen einer Basis-URL, die Vorrang vor der document_base_url-Einstellung von TinyMCE hat. Dies ist nützlich für Root-relative Umgebungen.';
$_lang['setting_tiny.convert_fonts_to_spans'] = 'FONT-Tags in Spans konvertieren';
$_lang['setting_tiny.convert_fonts_to_spans_desc'] = 'Wenn Sie diese Einstellung auf "Ja" stellen, konvertiert TinyMCE all FONT-Tags in SPAN-Tags und generiert SPAN-Tags anstatt FONT-Tags. Diese Option sollte verwendet werden, um W3C-kompatibleren Code zu erhalten, da FONT-Tags als "deprecated" gelten, also in späteren HTML-Versionen voraussichtlich nicht mehr enthalten sein werden.';
$_lang['setting_tiny.convert_newlines_to_brs'] = 'Zeilenumbrüche in BRs konvertieren';
$_lang['setting_tiny.convert_newlines_to_brs_desc'] = 'Wenn Sie diese Einstellung auf "Ja" stellen, werden Zeilenumbruch-Zeichen in BR-Tags konvertiert. Diese Option ist standardmäßig auf "Nein" gesetzt.';
$_lang['setting_tiny.css_selectors'] = 'CSS-Selektoren';
$_lang['setting_tiny.css_selectors_desc'] = 'Hier können Sie eine Liste von Selektoren eingeben, die im Editor verfügbar sein sollen. Geben Sie sie folgendermaßen ein:<br />"angezeigterName=selektorName;angezeigterName2=selektorName2"<br />Wenn Sie zum Beispiel die Selektoren <b>.mono</b> und <b>.smallText</b> in Ihrer CSS-Datei haben, können Sie sie hier so hinzufügen:<br />"Monospace-Text=mono;Kleiner Text=smallText"<br />Beachten Sie, dass hinter dem letzten Eintrag kein Semikolon stehen sollte.';
$_lang['setting_tiny.custom_buttons1'] = 'Selbstdefinierte Button-Zeile 1';
$_lang['setting_tiny.custom_buttons1_desc'] = 'Geben Sie die für die erste Zeile zu verwendenden Buttons als kommaseparierte Liste ein. Stellen Sie sicher, dass für jeden Button das benötigte Plugin in der Einstellung "Zu verwendende Plugins" aktiviert ist.';
$_lang['setting_tiny.custom_buttons2'] = 'Selbstdefinierte Button-Zeile 2';
$_lang['setting_tiny.custom_buttons2_desc'] = 'Geben Sie die für die zweite Zeile zu verwendenden Buttons als kommaseparierte Liste ein. Stellen Sie sicher, dass für jeden Button das benötigte Plugin in der Einstellung "Zu verwendende Plugins" aktiviert ist.';
$_lang['setting_tiny.custom_buttons3'] = 'Selbstdefinierte Button-Zeile 3';
$_lang['setting_tiny.custom_buttons3_desc'] = 'Geben Sie die für die dritte Zeile zu verwendenden Buttons als kommaseparierte Liste ein. Stellen Sie sicher, dass für jeden Button das benötigte Plugin in der Einstellung "Zu verwendende Plugins" aktiviert ist.';
$_lang['setting_tiny.custom_buttons4'] = 'Selbstdefinierte Button-Zeile 4';
$_lang['setting_tiny.custom_buttons4_desc'] = 'Geben Sie die für die vierte Zeile zu verwendenden Buttons als kommaseparierte Liste ein. Stellen Sie sicher, dass für jeden Button das benötigte Plugin in der Einstellung "Zu verwendende Plugins" aktiviert ist.';
$_lang['setting_tiny.custom_buttons5'] = 'Selbstdefinierte Button-Zeile 5';
$_lang['setting_tiny.custom_buttons5_desc'] = 'Geben Sie die für die fünfte Zeile zu verwendenden Buttons als kommaseparierte Liste ein. Stellen Sie sicher, dass für jeden Button das benötigte Plugin in der Einstellung "Zu verwendende Plugins" aktiviert ist.';
$_lang['setting_tiny.custom_plugins'] = 'Zu verwendende Plugins';
$_lang['setting_tiny.custom_plugins_desc'] = 'Eine kommaseparierte Liste der zu verwendenden TinyMCE-Plugins.';
$_lang['setting_tiny.editor_theme'] = 'Editor-Theme';
$_lang['setting_tiny.element_format'] = 'Element-Format';
$_lang['setting_tiny.element_format_desc'] = 'Diese Option erlaubt die Kontrolle darüber, ob Elemente im HTML- oder im XHTML-Modus erstellt werden. "xhtml" ist die Standardeinstellung für diese Option. Es hat zur Folge, dass z.B. &lt;br /&gt; zu &lt;br&gt; wird, wenn Sie diese Einstellung in "html" ändern.';
$_lang['setting_tiny.entity_encoding'] = 'Entity-Codierung';
$_lang['setting_tiny.entity_encoding_desc'] = 'Diese Option kontrolliert, wie Entities/Zeichen von TinyMCE verarbeitet werden. Verfügbare Werte sind "named", "numeric" und "raw".';
$_lang['setting_tiny.fix_nesting'] = 'Verschachtelungen automatisch korrigieren';
$_lang['setting_tiny.fix_nesting_desc'] = 'Diese Option kontrolliert, ob ungültige Inhalte im IE vor dem Einfügen korrigiert werden sollen. Der IE hat einen Bug, der einen ungültigen DOM-Tree produziert, wenn die eingegebenen Inhalte nicht korrekt sind; daher wird mit dieser Funktion versucht, dieses Problem durch Vorverarbeitung des HTML-Strings zu beheben. Diese Option ist standardmäßig deaktiviert, da sie die Verarbeitung etwas langsamer machen könnte.';
$_lang['setting_tiny.fix_table_elements'] = 'Tabellen-Elemente automatisch korrigieren';
$_lang['setting_tiny.fix_table_elements_desc'] = 'Diese Option erlaubt Ihnen festzulegen, dass Tabellenelemente aus Absätzen oder anderen Blockelementen heraus verschoben werden sollen, da eine solche Schachtelung nicht zulässig ist. Wenn Sie diese Option aktivieren, werden Blockelemente in zwei Teile aufgeteilt, wenn eine Tabelle darin gefunden wird. Diese Option ist standardmäßig deaktiviert.';
$_lang['setting_tiny.font_size_classes'] = 'Klassen für Schriftgrößen';
$_lang['setting_tiny.font_size_classes_desc'] = 'Diese Einstellung erlaubt die Angabe einer kommaseparierten Liste von Klassennamen, die verwendet werden soll, wenn der Benutzer Schriftgrößen auswählt. Diese Einstellung wird nur verwendet, wenn die Option convert_fonts_to_spans aktiviert ist. Diese Liste von Klassen sollte 7 Einträge umfassen. Diese Option wird standardmäßig nicht verwendet, kann aber nützlich sein, wenn Sie aus Gründen der Browserkompatibilität eigene Klassen für die verschiedenen Schriftgrößen verwenden möchten.';
$_lang['setting_tiny.font_size_style_values'] = 'Schriftgrößen-CSS-Werte';
$_lang['setting_tiny.font_size_style_values_desc'] = 'Diese Einstellung erlaubt die Angabe einer kommaseparierten Liste von CSS-Werten, die verwendet werden soll, wenn der Benutzer Schriftgrößen auswählt. Diese Einstellung wird nur verwendet, wenn die Option convert_fonts_to_spans aktiviert ist. Diese Liste von CSS-Werten sollte 7 Einträge umfassen. Diese Option wird standardmäßig nicht verwendet, kann aber nützlich sein, wenn Sie aus Gründen der Browserkompatibilität eigene CSS-Werte für die verschiedenen Schriftgrößen verwenden möchten. Die Standardwerte sind: xx-small,x-small,small,medium,large,x-large,xx-large.';
$_lang['setting_tiny.forced_root_block'] = 'Erzwungener Root-Block';
$_lang['setting_tiny.forced_root_block_desc'] = 'Diese Option ermöglicht Ihnen sicherzustellen, dass alle Nicht-Blockelemente oder Textknoten (Text-Nodes im DOM) in Blockelemente eingebettet sind. Die Eingabe &lt;strong&gt;irgendwas&lt;/strong&gt; führt z.B. zu einer Ausgabe wie &lt;p&gt;&lt;strong&gt;irgendwas&lt;/strong&gt;&lt;/p&gt;.';
$_lang['setting_tiny.indentation'] = 'Einrückung';
$_lang['setting_tiny.indentation_desc'] = 'Diese Option erlaubt die Angabe der Weite der Einrückung für die Einrückungs- und Ausrückungs-Buttons in der Benutzeroberfläche. Der Standardwert ist 30px, aber es kann jeder beliebige Wert gewählt werden.';
$_lang['setting_tiny.invalid_elements'] = 'Ungültige Elemente';
$_lang['setting_tiny.invalid_elements_desc'] = 'Diese Einstellung sollte eine kommaseparierte Liste von Elementnamen (HTML-Tagnamen) enthalten, die im Inhalt nicht vorkommen sollen. Die in dieser Liste genannten Elemente werden entfernt, wenn TinyMCE die Aufräum-Funktion (cleanup) aufruft.';
$_lang['setting_tiny.nowrap'] = 'Zeilenumbrüche im Editor verhindern';
$_lang['setting_tiny.nowrap_desc'] = 'Diese Option ermöglicht es Ihnen, festzulegen, wie Whitespace (Leerzeichen, Tabulatorzeichen) im Editor umbrochen wird. Diese Option ist standardmäßig auf "Nein" gesetzt, aber wenn Sie sie aktivieren, werden die Editor-Inhalte nie umbrochen.';
$_lang['setting_tiny.object_resizing'] = 'Objekt-Größenänderung im Editor';
$_lang['setting_tiny.object_resizing_desc'] = 'Diese Option gibt Ihnen die Möglichkeit, die Größenänderungs-Kontrollelemente von Tabellen und Bildern in Firefox/Mozilla ein- und auszuschalten. Standardmäßig sind diese eingeschaltet.';
$_lang['setting_tiny.remove_linebreaks'] = 'Zeilenumbrüche entfernen';
$_lang['setting_tiny.remove_linebreaks_desc'] = 'Diese Option legt fest, ob Zeilenumbruchzeichen aus dem ausgegebenen HTML entfernt werden sollen.';
$_lang['setting_tiny.remove_redundant_brs'] = 'Überflüssige BRs entfernen';
$_lang['setting_tiny.remove_redundant_brs_desc'] = 'Diese Option ist standardmäßig aktiviert und kontrolliert die Ausgabe von nachgestellten BR-Tags am Ende von Blockelementen. Da der IE diese nicht korrekt darstellen kann, müssen sie standardmäßig entfernt werden, um eine korrekte Ausgabe in allen Browsern sicherzustellen. Für einige Browser ist das BR am Ende des LI-Tags im untenstehenden Beispiel also redundant.';
$_lang['setting_tiny.removeformat_selector'] = 'Auswahl zu entfernender Formatierungen';
$_lang['setting_tiny.removeformat_selector_desc'] = 'Diese Einstellung erlaubt die Angabe, welche Elemente entfernt werden sollten, wenn Sie den Formatierungen-zurücksetzen-Button anklicken. Dies ist eine CSS-Selektor-Liste, z.B. u,b,strong,em,i.';
$_lang['setting_tiny.path_options'] = 'Pfad-Optionen';
$_lang['setting_tiny.path_options_desc'] = 'Mögliche Werte: "rootrelative", "docrelative" oder "fullpathurl".';
$_lang['setting_tiny.table_inline_editing'] = 'Tabellen-Bearbeitung';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Diese Option gibt Ihnen die Möglichkeit, die Kontrollelemente für die Inline-Bearbeitung von Tabellen in Firefox/Mozilla ein- und auszuschalten. Laut der TinyMCE-Dokumentation sind diese Kontrollelemente nicht ganz fehlerfrei und nicht änderbar, daher sind sie standardmäßig deaktiviert.';
$_lang['setting_tiny.template_list'] = 'Template-Liste';
$_lang['setting_tiny.template_list_desc'] = 'Geben Sie eine Liste von Templates für das Template-Plugin ein. Die Einträge müssen durch Kommata getrennt sein und das Format Name:URL:Beschreibung haben. Beispiel: MeinTemplate:assets/templates/mytemp.html:Mein eigenes Template';
$_lang['setting_tiny.template_list_snippet'] = 'Template-Listen-Snippet';
$_lang['setting_tiny.template_list_snippet_desc'] = 'Geben Sie den Namen eines Snippets ein, das eine Liste von Templates generiert, die mit dem für die Einstellung tiny.template_list benötigten Format (Name:URL:Beschreibung) kompatibel ist. Wenn ein Snippet angegeben ist, wird das vom Snippet zurückgelieferte Ergebnis verwendet und nicht der in tiny.template_list vorhandene Wert';
$_lang['setting_tiny.template_selected_content_classes'] = 'Template-CSS-Klassen für markierte Inhalte';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Geben Sie eine Liste von CSS-Klassennamen für das Template-Plugin ein. Die Einträge müssen durch Leerzeichen getrennt sein. Der Inhalt jedes Vorlagen-Elements mit einer der angegebenen CSS-Klassen wird durch die im Editor markierten Inhalte ersetzt, wenn die Vorlage eingefügt wird.';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML-Blockelemente';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'Diese Einstellung sollte eine kommaseparierte Liste von HTML-Blockelementen enthalten, die in dem Drop-Down-Feld "Vorlage" angezeigt werden sollen. Diese Option ist nur verfügbar, wenn das Theme "advanced" verwendet wird. Mögliche Werte sind z. B.: p, h1, h2, h3, h4, h5, h6, div, blockquote, code, pre, address.';
$_lang['setting_tiny.theme_advanced_font_sizes'] = 'Advanced Theme: Schriftgrößen';
$_lang['setting_tiny.theme_advanced_font_sizes_desc'] = 'Diese Einstellung sollte eine kommaseparierte Liste von Schriftgrößen enthalten, die verwendet werden können. Jedes Element der Liste sollte ein gültiger Wert für die CSS-Eigenschaft font-style sein (10px, 12pt, 1em etc.). Beispiel: Großer Text=30px,Kleiner Text=small,Meine Textgröße=.meinetextgroesse';
// $_lang['setting_tiny.use_uncompressed_library'] = 'Unkomprimierte Bibliothek verwenden';
// $_lang['setting_tiny.use_uncompressed_library_desc'] = 'Wenn diese Einstellung aktiviert ist, verwendet MODx nicht die komprimierte TinyMCE-JavaScript-Bibliothek. Dies verursacht mehr Last und erhöht die Ausführungszeit. Aktivieren Sie diese Einstellung nur, wenn Sie Modifikationen vornehmen möchten.';

$_lang['setting_tiny.skin'] = 'TinyMCE-Skin';
$_lang['setting_tiny.skin_desc'] = 'Diese Einstellung ermöglicht es Ihnen, anzugeben, welchen Skin Sie mit Ihrem TinyMCE-Editor-Theme verwenden möchten. Ein Skin ist im Grunde eine CSS-Datei, die aus dem Skins-Verzeichnis in das Theme geladen wird. Das Theme "advanced", das mit TinyMCE ausgeliefert wird, hat zwei Skins; diese heißen "default" und "o2k7". Wir haben einen weiteren Skin namens "cirkuit" hinzugefügt, der standardmäßig vorausgewählt ist.';
$_lang['setting_tiny.skin_variant'] = 'TinyMCE-Skin-Variante';
$_lang['setting_tiny.skin_variant_desc'] = 'Einige Skins haben eine oder mehrere zusätzliche Varianten, die man auswählen kann. Der Skin "cirkuit" besitzt die zusätzliche Variante "silver", für den Skin "o2k7" stehen die zusätzlichen Varianten "black" und "silver" zur Verfügung. Standardmäßig ist diese Einstellung leer.';
$_lang['setting_tiny.object_resizing'] = 'Objekt-Größenänderung im Editor';
$_lang['setting_tiny.object_resizing_desc'] = 'Diese Option gibt Ihnen die Möglichkeit, die Größenänderungs-Kontrollelemente von Tabellen und Bildern in Firefox/Mozilla ein- und auszuschalten. Standardmäßig sind diese eingeschaltet.';
$_lang['setting_tiny.table_inline_editing'] = 'Tabellen-Bearbeitung';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Diese Option gibt Ihnen die Möglichkeit, die Kontrollelemente für die Inline-Bearbeitung von Tabellen in Firefox/Mozilla ein- und auszuschalten. Laut der TinyMCE-Dokumentation sind diese Kontrollelemente nicht ganz fehlerfrei und nicht änderbar, daher sind sie standardmäßig deaktiviert.';
$_lang['setting_tiny.template_selected_content_classes'] = 'Template-CSS-Klassen für markierte Inhalte';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Geben Sie eine Liste von CSS-Klassennamen für das Template-Plugin ein. Die Einträge müssen durch Leerzeichen getrennt sein. Der Inhalt jedes Vorlagen-Elements mit einer der angegebenen CSS-Klassen wird durch die im Editor markierten Inhalte ersetzt, wenn die Vorlage eingefügt wird.';

$_lang['area_advanced-theme'] = 'Advanced Theme';
$_lang['area_cleanup-output'] = 'Aufräumen/Ausgabe';
$_lang['area_custom-buttons'] = 'Selbstdefinierte Button-Zeilen';
$_lang['area_general'] = 'Allgemeines';
$_lang['area_url'] = 'URL';
$_lang['area_callbacks'] = 'Callback-Funktionen';
$_lang['area_layout'] = 'Layout';
