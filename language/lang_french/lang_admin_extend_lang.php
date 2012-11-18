<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_extend_lang by Mighty Gordon$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* @Extra credits for this file
* Ptirhiik (admin@rpgnet-fr.com)
*
*/
/**
 * @Package	IcyPhoenix:: * @Copyright (c) 2010 Informpro:IcyPhoenix.fr
 * @Author Yros
**/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'Lang_extend_lang_extend' => 'Extension pour les Packs de Langues',
	'Lang_extend__custom' => 'Pack de Langue personnalis&eacute;',
	'Lang_extend__phpBB' => 'Pack de Langue Icy Phoenix',

	'Languages' => 'Langues',
	'Lang_management' => 'Gestion',
	'Lang_extend' => 'Gestion Avanc&eacute;e',
	'Lang_extend_explain' => 'Ici vous pouvez ajouter ou modifier les clefs de langues.',
	'Lang_extend_pack' => 'Pack de Langue',
//	'Lang_extend_pack_explain' => 'This is the name of the pack, usualy the name of the MOD refering to',
	'Lang_extend_pack_explain' => 'Nom du Pack de Langue',

	'Lang_extend_entry' => 'Clef de Langue',
	'Lang_extend_entries' => 'Clefs de Langue',
	'Lang_extend_level_edit' => 'Editer',
	'Lang_extend_level_admin' => 'Admin',
	'Lang_extend_level_normal' => 'Normal',

	'Lang_extend_add_entry' => 'Ajouter une nouvelle clef de langue',

	'Lang_extend_key_main' => 'Clef de Langue principale',
	'Lang_extend_key_main_explain' => 'C&#39;est la clef principale, g&eacute;n&eacute;ralement la seule',
	'Lang_extend_key_sub' => 'Clef secondaire',
	'Lang_extend_key_sub_explain' => 'Ce second niveau de clef n&#39;est g&eacute;n&eacute;ralement pas utilis&eacute;',
	'Lang_extend_level' => 'Niveau de la Clef de Langue',
	'Lang_extend_level_explain' => 'Le niveau Admin peut uniquement &ecirc;tre utilis&eacute; dans le panneau d&#39;administration. Le nieau Normal peut &ecirc;tre utilis&eacute; partout.',

	'Lang_extend_missing_value' => 'Vous devez au moins fournir la valeur Anglaise',
	'Lang_extend_key_missing' => 'La Clef principale est manquante',
	'Lang_extend_duplicate_entry' => 'Cette entr&eacute;e existe d&eacute;j&agrave; (voir pack %)',

	'Lang_extend_update_done' => 'L\entr&eacute;e a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s.<br /><br />Cliquez %sIci%s pour revenir &agrave; l&#39;entr&eacute;e.<br /><br />Cliquez %sIci%s pour revenir &agrave; la liste des entr&eacute;es',
	'Lang_extend_delete_done' => 'L&#39;entr&eacute;e a &eacute;t&eacute; supprim&eacute;e avec succ&egrave;s.<br />Notez que seul les clefs personnalis&eacute;es sont supprim&eacute;es, non les basiques si elles existent. Cliquez %sIci%s pour revenir &agrave; la liste des entr&eacute;es',

	'Lang_extend_search' => 'Chercher dans les Clefs de Langue',
	'Lang_extend_search_words' => 'Mot &agrave; Trouver',
	'Lang_extend_search_words_explain' => 'S&eacute;parer les mots par un espace',
	'Lang_extend_search_all' => 'Tous les Mots',
	'Lang_extend_search_one' => 'L&#39;un de ceux-l&agrave;',
	'Lang_extend_search_in' => 'Cherchez dans',
	'Lang_extend_search_in_explain' => 'Pr&eacute;ciser où chercher',
	'Lang_extend_search_in_key' => 'Clefs',
	'Lang_extend_search_in_value' => 'Valeurs',
	'Lang_extend_search_in_both' => 'Les Deux',
	'Lang_extend_search_all_lang' => 'Toutes les langues install&eacute;es',

	'Lang_extend_search_no_words' => 'Aucun mot fourni.<br /><br />Cliquez %sIci%s pour revenir &agrave; la liste des packs.',
	'Lang_extend_search_results' => 'R&eacute;sultats des Recherches',
	'Lang_extend_value' => 'Valeur',
	'Lang_extend_level_leg' => 'Niveau',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Modifi&eacute;',
	'Lang_extend_added' => 'Ajout&eacute;',
	)
);

?>