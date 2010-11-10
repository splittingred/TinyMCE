<?php
/**
 * Default TinyMCE language file
 *
 * @package tinymce
 * @language de
 */
$_lang['tiny.toggle_editor'] = 'Editor ein- und ausschalten: ';
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
$_lang['setting_tiny.template_list'] = 'Template-Liste';
$_lang['setting_tiny.template_list_desc'] = 'Geben Sie eine Liste von Templates für das Template-Plugin ein. Die Einträge müssen durch Kommata getrennt sein und das Format Name:URL:Beschreibung haben. Beispiel: MeinTemplate:assets/templates/mytemp.html:Mein eigenes Template';
$_lang['setting_tiny.path_options'] = 'Pfad-Optionen';
$_lang['setting_tiny.path_options_desc'] = 'Mögliche Werte: "rootrelative", "docrelative" oder "fullpathurl".';
$_lang['setting_tiny.use_uncompressed_library'] = 'Unkomprimierte Bibliothek verwenden';
$_lang['setting_tiny.use_uncompressed_library_desc'] = 'Wenn diese Einstellung aktiviert ist, verwendet MODx nicht die komprimierte TinyMCE-JavaScript-Bibliothek. Dies verursacht mehr Last und erhöht die Ausführungszeit. Aktivieren Sie diese Einstellung nur, wenn Sie Modifikationen vornehmen möchten.';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML-Blockelemente';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'Diese Einstellung sollte eine kommaseparierte Liste von HTML-Blockelementen enthalten, die in dem Drop-Down-Feld "Vorlage" angezeigt werden sollen. Diese Option ist nur verfügbar, wenn das Theme "advanced" verwendet wird. Mögliche Werte sind z. B.: p, h1, h2, h3, h4, h5, h6, div, blockquote, code, pre, address.';

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
