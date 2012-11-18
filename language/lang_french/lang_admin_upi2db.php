<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 41 2009-07-14 08:11:27Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* @Extra credits for this file
* BigRib (bigrib@gmx.de)
* Lopalong
*
** French Translation InformPro and Yros **
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
	'setup_upi2db' => 'Configuration du module d&#39;Informations sur les messages non lus &agrave; la base de donn&eacute;es',
	'setup_upi2db_explain' => 'Modifier la configuration pour le module Informations sur les messages non lus &agrave; la base de donn&eacute;es.',
	'upi2db_on' => '<strong>module "Informations sur les messages non lus &agrave; la base de donn&eacute;es" actif ?</strong>',
	'upi2db_on_explain' => 'Activer/D&eacute;sactiver le module Informations sur les messages non lus &agrave; la base de donn&eacute;es ou laisser vos utilisateurs choisir.<br />Si vous d&eacute;sactivez le module, le syst&egrave;me par d&eacute;faut avec les cookies sera utilis&eacute;.',
	'user_select' => 'Options utilisateur',
	'up2db_days' => '<strong>Messages automatiquement marqu&eacute; comme lu apr&egrave;s&hellip;</strong>',
	'up2db_days_tagen' => 'Jours',
	'up2db_days_explain' => 'Nombre de jours qu&#39;un message est gard&eacute; comme non-lu dans la base de donn&eacute;es.<br />Attention ! Plus le nombre de jour est grand, plus la taille de la table sera grande ! <strong>D&eacute;faut = 30 Jours</strong>',

	'edit_as_new' => '<strong>Marquer les messages &eacute;dit&eacute;s comme nouveaux ?</strong>',
	'edit_as_new_explain' => 'Marquer les messages apr&egrave;s &eacute;dition comme nouveaux ?',
	'last_edit_as_new' => '<strong>Marquer les derniers messages dans un sujet apr&egrave;s &eacute;dition comme non-lus ?</strong>',
	'edit_topic_first' => '<strong>Montrer les messages &eacute;dit&eacute;s en haut de la vue du sujet ?</strong>',
	'edit_topic_first_explain' => 'Si vous choississez "non", tous les sujets marqu&eacute;s comme non-lus seront ordonn&eacute;s avec les autres sujets (par d&eacute;faut). Choissisez "oui" et les sujets &eacute;dit&eacute;s et marqu&eacute;s comme non-lus sera affich&eacute; en haut de la liste jusqu&#39;a ce qu&#39;ils soient lus.',

	'upi2db_condition_setup' => 'Conditions du module Informations sur les messages non lus &agrave; la base de donn&eacute;es',
	'upi2db_condition_min_posts' => 'Minimum de messages',
	'upi2db_condition_min_regdays' => 'Minimum de jours depuis l&#39;inscription',
	'upi2db_unread_color' => 'Code couleur pour le titre d&#39;un sujet (message non-lu)',
	'upi2db_edit_color' => 'Code couleur pour le titre d&#39;un sujet (message &eacute;dit&eacute;)',
	'upi2db_mark_color' => 'Code couleur pour le titre d&#39;un sujet (message marqu&eacute;)',
	'group_allow_upi2db' => 'Autoriser les groupes &agrave; utiliser le module Informations sur les messages non lus &agrave; la base de donn&eacute;es ?',
	'user_allow_upi2db' => 'Autoriser les utilisateurs &agrave; utiliser le module ?',
	'user_disable_upi2db' => 'D&eacute;sactiver le module Informations sur les messages non lus &agrave; la base de donn&eacute;es',
	'group_user' => 'Utilisateur',
	'user_without_group' => '<strong>Utilisateur n&#39;appartenant &agrave; aucun groupe</strong>',

	'max_new_posts' => '<strong>Nombre maximum de messages nouveaux/&eacute;dit&eacute;s</strong>',
	'max_new_posts_explain' => 'Entrez le nombre maximum de messsages &agrave; garder en non-lus pour chaque utilisateur',
	'max_permanent_topics' => '<strong>Nombre maximum de topics toujours marqu&eacute;s par utilisateur</strong>',
	'max_permanent_topics_explain' => 'Entrez le nombre maximum de sujets que chaque utilisateur peut avoir en "toujours lu". Entrez "0" pour d&eacute;sactiver cette limitation.',
	'up2db_del_perm' => '<strong>D&eacute;lester les forums/sujets marqu&eacute;s "toujours lus" apr&egrave;s ...</strong>',
	'up2db_del_perm_explain' => 'Choississez le nombre de jours que les forums/sujets en "toujours lus" doivent &ecirc;tre gard&eacute;s. Cette option r&eacute;duit la taille de la base de donn&eacute;es pour les utilisateurs inactifs',

	'up2db_del_mark' => '<strong>D&eacute;lester les messages marqu&eacute;s apr&egrave; ...</strong>',
	'up2db_del_mark_explain' => 'Choississez le nombre de jours que les "messages marqu&eacute;s" doivent &ecirc;tre enregistr&eacute;s avant d&#39;&ecirc;tre supprim&eacute;s',
	'max_mark_posts' => '<strong>Nomber maximum de "messages marqu&eacute;s" par utilisateur</strong>',
	'max_mark_posts_explain' => 'Le nombre maximum que chaque utilisateur peut marquer.',
	)
);

?>