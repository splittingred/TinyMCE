<?php
/**
 * French TinyMCE language file
 *
 * @package tinymce
 * @language fr
 */

include_once(dirname(dirname(__FILE__)).'/en/default.inc.php'); // fallback for missing defaults or new additions

$_lang['tiny.toggle_editor'] = 'Basculer l\'affichage de l\'éditeur : ';
$_lang['setting_tiny.css_selectors'] = 'Sélecteurs CSS';
$_lang['setting_tiny.css_selectors_desc'] = 'Indiquez ici une liste de sélecteurs qui doivent être disponibles dans l\'éditeur. Entrez les comme suit :<br />"NomAffiché=NomSélecteur;NomAffiché2=NomSélecteur2"<br /> Admettons par exemple que vous ayez les classes <b>.mono</b> et <b>.smallText</b> dans votre CSS, vous pouvez les ajouter comme suit : <br />"Monospaced text=mono;Small text=smallText"<br />Veuillez noter que la dernière entrée ne doit pas se terminier par un point-virgule.';
$_lang['setting_tiny.custom_buttons1'] = 'Rangée de boutons personnalisés 1';
$_lang['setting_tiny.custom_buttons1_desc'] = 'Indiquez les boutons à utiliser dans la première rangée, sous forme de liste séparée par une virgule. Assurez-vous que chaque bouton à son plugin requis d\'activé dans les options de « Plugins personnalisés ».';
$_lang['setting_tiny.custom_buttons2'] = 'Rangée de boutons personnalisés 2';
$_lang['setting_tiny.custom_buttons2_desc'] = 'Indiquez les boutons à utiliser dans la seconde rangée, sous forme de liste séparée par une virgule. Assurez-vous que chaque bouton à son plugin requis d\'activé dans les options de « Plugins personnalisés ».';
$_lang['setting_tiny.custom_buttons3'] = 'Rangée de boutons personnalisés 3';
$_lang['setting_tiny.custom_buttons3_desc'] = 'Indiquez les boutons à utiliser dans la troisième rangée, sous forme de liste séparée par une virgule. Assurez-vous que chaque bouton à son plugin requis d\'activé dans les options de « Plugins personnalisés ».';
$_lang['setting_tiny.custom_buttons4'] = 'Rangée de boutons personnalisés 4';
$_lang['setting_tiny.custom_buttons4_desc'] = 'Indiquez les boutons à utiliser dans la quatrième rangée, sous forme de liste séparée par une virgule. Assurez-vous que chaque bouton à son plugin requis d\'activé dans les options de « Plugins personnalisés ».';
$_lang['setting_tiny.custom_buttons5'] = 'Rangée de boutons personnalisés 5';
$_lang['setting_tiny.custom_buttons5_desc'] = 'Indiquez les boutons à utiliser dans la cinquième rangée, sous forme de liste séparée par une virgule. Assurez-vous que chaque bouton à son plugin requis d\'activé dans les options de « Plugins personnalisés ».';
$_lang['setting_tiny.custom_plugins'] = 'Plugins personnalisés';
$_lang['setting_tiny.custom_plugins_desc'] = 'Liste des plugins de TinyMCE à utiliser, séparés par une virgule.';
$_lang['setting_tiny.editor_theme'] = 'Thème « éditeur »';
$_lang['setting_tiny.template_list'] = 'Liste de modèles';
$_lang['setting_tiny.template_list_desc'] = 'Indiquez une liste de modèles pour le plugin de modèle. Ils doivent être séparés par une virgule et leur format doit être nom:URL:description. Par exemple, MonModèle:assets/templates/modele.tpl:Mon modèle à moi (si si, le mien)';
$_lang['setting_tiny.path_options'] = 'Options de chemin';
$_lang['setting_tiny.path_options_desc'] = 'Soit "rootrelative", "docrelative", ou "fullpathurl".';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'Éléments bloques HTML';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'Cette option doit contenir une liste de formats, séparés par une virgule, qui seront disponibles dans le menu déroulant de formats. Cette option n\'est disponible que si le thème « avancé » est utilisé.';

$_lang['setting_tiny.skin'] = 'Skins TinyMCE';
$_lang['setting_tiny.skin_desc'] = 'Cette option vous permet d\'indiquer quel skin vous souhaitez utiliser dans votre thème. Un skin est un fichier CSS qui est chargé depuis le répertoire skin de votre thème. Le thème « avancé » inclus avec TinyMCE a deux skins, appelés "default" et "o2k7". Nous avons ajouté un autre skin, sélectionné par défaut, appelé "cirkuit".';
$_lang['setting_tiny.skin_variant'] = 'Variante de skin TinyMCE';
$_lang['setting_tiny.skin_variant_desc'] = 'Cette option permet d\'indiquer une vartiante de skin, par exemple « argent » ou « noir ». Le skin par défaut n\'offre aucune variante alors que « o2k7 » propose les variantes "silver" ou "black". Pour le skin "cirkuit" il y a une variante nommée "silver". Lors de la création d\'un skin, plusieurs variantes peuvent être créées, en ajoutant le fichier CSS ui_[nom_de_la_variante].css aux côtés du fichier par défaut ui.css.';
$_lang['setting_tiny.object_resizing'] = 'Redimensionnement des objets';
$_lang['setting_tiny.object_resizing_desc'] = 'Cette option vous permet d\'activer/désactiver la possibilité de redimensionner à la volée les tableaux et les images dans Mozilla Firefox. Activé par défaut.';
$_lang['setting_tiny.table_inline_editing'] = 'Éditeur de tableau';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Cette option vous permet d\'activer/désactiver la possibilité de redimensionner à la volée les tableaux dans Mozilla Firefox. D\'après la documentation de TinyMCE, cette option est bogguée et non « redesignable », donc désactivée par défaut.';
$_lang['setting_tiny.template_selected_content_classes'] = 'Template Selected Content Classes';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Indiquez une liste de classes CSS pour le plugin de modèle. La liste doit être séparée par un espace. Chaque modèle « with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted ».';
?>