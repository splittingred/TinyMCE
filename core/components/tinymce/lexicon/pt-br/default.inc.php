<?php
/*
 * Filename:       core/components/tinymce/lexicon/pt-br/default.inc.php
 * Function:       Brazilian Portuguese language file for TinyMCE
 * Encoding:       UTF-8
 * Author:         Daniel de Melo
 * Date:           2013/09/19
 * Version:        1.0
 * MODx version:   2.2.10
*/
include_once(dirname(dirname(__FILE__)).'/en/default.inc.php'); // fallback for missing defaults or new additions
$_lang['tinymce_editor_theme_title'] = "Tema:";
$_lang['tinymce_editor_theme_message'] = "Aqui você pode escolher qual tema ou pele para usar com o editor.";
$_lang['tinymce_editor_custom_plugins_title'] = "Plugins personalizados:";
$_lang['tinymce_editor_custom_plugins_message'] = "Digite os plugins para usar o tema 'custom' como uma lista separada por vírgula.";
$_lang['tinymce_editor_custom_buttons_title'] = "Botões personalizados:";
$_lang['tinymce_editor_custom_buttons_message'] = "Digite os botões para usar o tema 'custom' como uma lista separada por vírgula para cada linha Certifique-se de que cada botão tem o plugin necessário habilitado configuração dos plugins personalizados '..";
$_lang['tinymce_editor_css_selectors_title'] = "seletores CSS:";
$_lang['tinymce_editor_css_selectors_message'] = "Aqui você pode entrar em uma lista de seletores que devem estar disponíveis no editor de Inseri-los da seguinte forma:<br />'displayName=selectorName;displayName2=selectorName2'<br />Por exemplo, digamos que você tenha <b>.mono</b> e <b>.smallText</b> seletores no seu arquivo CSS, você pode adicioná-los aqui como: <br />'Monospaced text=mono;Small text=smallText'<br /> Note-se que a última entrada não deve ter um ponto e vírgula após isso. ";
$_lang['tinymce_settings'] = "Configurações TinyMCE";
$_lang['tinymce_theme_simple'] = "Simples";
$_lang['tinymce_theme_advanced'] = "Avançado";
$_lang['tinymce_theme_editor'] = "Editor de Conteúdo";
$_lang['tinymce_theme_custom'] = "Customizado";
?>