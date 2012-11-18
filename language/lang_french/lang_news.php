<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Lopalong
*** French Translation InformPro and Yros ***
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
// Main Stuff.
	'Regular_Post' => 'Message normal (non affich&eacute; comme nouvelle)',
	'Current_Selection' => 'S&eacute;leciton actuelle',
	'Select_News_Category' => 'S&eacute;lectionner la cat&eacute;gorie de la nouvelle',
	'News' => 'Nouvelle',
	'News_Cmx' => '<b>Nouvelle:</b>&nbsp;',
	'Auth_News' => 'Nouvelle',
	'View_Comments' => 'Voir les commentaires',
	'Read_More' => 'Lire le reste',
	'News_Categories' => 'Cat&eacute;gories des nouvelles',

// Admin Stuff

// News Config
	'Add_news_categories' => 'Ajouter une cat&eacute;gorie de nouvelles',
	'News_Configuration' => 'Configuration des nouvelles',
	'News_Add_Description' => 'Cr&eacute;er une nouvelle cat&eacute;gorie de nouvelles',
	'Icon' => 'Ic&ocirc;ne de la nouvelle',
	'Add_new_category' => 'Cr&eacute;er une nouvelle cat&eacute;gorie de nouvelles',

	'Click_return_newsadmin' => 'Cliquez %sici%s pour revenir &agrave; l&#39;administration des nouvelles',
	'Category_Deleted' => 'Cat&eacute;gorie de nouvelles correctement supprim&eacute;e',
	'Category_Updated' => 'Cat&eacute;gorie de nouvelles correctement mise &agrave; jour',
	'Category_Added' => 'Cat&eacute;gorie de nouvelles correctement ajout&eacute;e',

	'News_Editing_Utility' => '&Eacute;dition d&#39;une cat&eacute;gorie de nouvelles',
	'News_Config' => 'Configuration des cat&eacute;gories de nouvelles',
	'News_Explain' => 'Ajouter, &eacute;diter ou supprimer la cat&eacute;gorie de nouvelles.',

	'Enable_News' => '<strong>Autoriser de poster des nouvelles</strong>',
	'News_Path' => '<strong>Dossier des ic&ocirc;nes</strong>',
	'News_Path_Explain' => 'Dossier content les images, relatif &agrave; l&#39;installation d&#39;IcyPhoenix, par exemple images/news',

	'News_explain' => 'Configurer le module de nouvelles de CMX.',
	'News_settings' => 'Configuration des nouvelles',

	'News_trim' => '<strong>Taille maximum des news</strong>',
	'News_trim_explain' => 'D&eacute;finissez la taille maximum pour les nouvelles. (0 = pas de limite).',

	'News_topic_trim' => '<strong>Taille maximum du titre du sujet</strong>',
	'News_topic_trim_explain' => 'D&eacute;finissez la taille maximum du titre du sujet content la nouvelle. (0 = pas de limite).',

	'News_item_num' => '<strong>Nombre de nouvelles &agrave; afficher</strong>',
	'News_item_num_explain' => 'Le nombre par d&eacute;faut de nouvelles &agrave; afficher dans news_viewnews.php.',

	'RSS_Configuration' => 'Configuration du flux RSS',
	'Enable_RSS' => '<strong>Activer le flux RSS</strong>',
	'Enable_RSS_explain' => 'Le flux RSS permettra aux autres sites d&#39;acc&eacute;der et d&#39;afficher vos nouvelles',

	'Feed_Description' => '<strong>Description du flux</strong>',
	'Feed_Description_Explain' => 'Phrase pour d&eacute;crire le flux.',

	'Feed_Language' => '<strong>Language du flux</strong>',
	'Feed_Language_Explain' => 'La langue dans laquelle les nouvelles sont &eacute;crites (valeurs W3C).',

	'Feed_TTL' => '<strong>Temps de vie du flux</strong>',
	'Feed_TTL_Explain' => 'Le temps de vie est le temps qu&#39;un flux doit &ecirc;tre en cache.',

	'Feed_Category' => '<strong>Cat&eacute;gorie de flux</strong>',

	'Feed_Image' => '<strong>Image du flux</strong>',
	'Feed_Image_Explain' => 'Une image pour votre flux. (Peut &ecirc;tre juste un bouton)',

	'Feed_Image_Desc' => '<strong>Image de description du flux</strong>',

// New
	'Articles' => 'Articles',
	'Archives' => 'Archives',
	'Categories' => 'Cat&eacute;gories',

	'News_base_url' => '<strong>Adresse de base</strong>',
	'News_base_url_explain' => 'L&#39;adresse de base des nouvelles.<br /> par exemple http://www.mondomaine.fr/, votre fichier de nouvelles est plac&eacute; ici.',
	'Show_RSS_abstract' => '<strong>Montrer les abstractions dans le flux.</strong>',

	'News_index_file' => '<strong>Fichier index</strong>',
	'News_index_file_explain' => 'Nom du fichier index, par exemple news_index.php.',
	)
);

?>