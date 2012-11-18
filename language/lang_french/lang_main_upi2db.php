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
* BigRib (bigrib@gmx.de)
* Lopalong
*** French Translation InformPro and Yros **
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
	'Search_no_new' => 'Aucun nouveau message depuis votre derni&egrave;re visite',
	'Neue_Beitraege' => 'Messages non lus',
	'Editierte_Beitraege' => 'Messages &eacute;dit&eacute;s',
	'Ungelesen_Markiert' => 'Marquer comme non-lu',
	'Permanent_Gelesen' => 'Marquer comme toujours lu',
	'Posts' => 'Messages',
	'Unreaded_post' => 'Message non lu',
	'New_edited_post' => 'Message &eacute;dit&eacute;',
	'New_edited_posts' => 'Messages &eacute;dit&eacute;s',
	'Unreaded_posts' => 'Messages non lus',
	'upi2db_post_edit' => '&Eacute;dit&eacute;',
	'upi2db_post_new' => 'Nouveau',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Marquer le topic comme toujours lu',
	'upi2db_always_read_unset' => 'Enlever le marquage "toujours lu"',
	'upi2db_always_read_cant_set' => 'Ce sujet ne peut &ecirc;tre marqu&eacute; comme toujours lu',
	'upi2db_always_read_no_more' => 'Vous ne pouvez plus ajouter de sujets comme toujours lus.',
	'upi2db_always_read_is_set' => 'Le sujet a &eacute;t&eacute; marqu&eacute; comme toujours lu',
	'upi2db_always_read_is_unset' => 'Le sujet n&#39;est plus marqu&eacute; comme toujours lu',
	'no_always_read' => 'Aucun sujet marqu&eacute; comme toujours lu',
	'x_always_read' => 'Voir les sujets marqu&eacute;s "toujours lus" ',
	'upi2db_which_system' => 'Quel syst&egrave;me voulez-vous utiliser pour g&eacute;rer les nouveaux messages ?',
	'upi2db_which_system_explain' => 'Des informations d&eacute;taill&eacute;es &agrave; propos des diff&eacute;rents syst&egrave;mes peuvent &ecirc;tre trouv&eacute;es dans la <a href="faq.' . PHP_EXT . '">FAQ</a>.',
	'cookie_system' => 'Syst&egrave;me avec Cookies',
	'upi2db_system' => 'Syst&egrave; "Informations sur les messages non lus dans la base de donn&eacute;es"',
	'upi2db_mark_post' => 'Marquer ce message',
	'upi2db_unmark_post' => 'Enlever le marquage sur ce message',
	'upi2db_post_cant_mark' => 'Impossible de marquer ce message.',
	'upi2db_post_marked' => 'Le message a &eacute;t&eacute; marqu&eacute;.',
	'upi2db_post_unmarked' => 'Le message n&#39;est plus marqu&eacute;.',
	'upi2db_post_cant_mark' => 'Vous n&#39;&ecirc;tes pas autoris&eacute; &agrave; marquer plus de message.',
	'always_read_icon' => 'Toujours lu',
	'upi2db_always_read_forum_short' => 'Marquer comme toujours lu',
	'upi2db_always_read_forum' => 'Marquer ce forum comme toujours lu',
	'upi2db_always_read_forum_unset_short' => 'Enlever le marquage "toujours lu"',
	'upi2db_always_read_forum_unset' => 'Enlever le marquage "toujours lu" de ce forum',
	'upi2db_forum_is_always_read' => 'Ce forum est en "toujours lu"',
	'upi2db_forum_isnt_always_read' => 'Ce forum n&#39;est plus en "toujours lu"',
	'upi2db_cat_cant_mark_always_read' => 'Les cat&eacute;gories ne peuvent &ecirc;tre marqu&eacute;es comme toujours lues',
	'upi2db_new_word' => 'Marque sp&eacute;ciale pour les nouveaux messages ?',
	'upi2db_new_word_explain' => 'Est-ce qu&#39;un sujet avec des nouveaux messages doit-il porter la marque "Nouveau:" ?',
	'upi2db_edit_word' => 'Additional marking for edited posts?',
	'upi2db_edit_word_explain' => 'Should a topic with edited posts be marked with "Edited:"',
	'upi2db_unread_color' => 'Colour topic title if there are new posts',
	'upi2db_unread_disp_posts' => 'Show new and/or edited Posts',
	'Click_return_search' => '%sClick here%s to return to the last page',
	'Click_return_portal' => '%sCLick here%s to return to the portal',
	'mark_edit' => 'Mark post as edited (will be highlighted as unread to other users)',
	'upi2db_news_is_mark_unread' => 'News marked as unread',
	'upi2db_news_is_mark_read' => 'News marked as read',
	'upi2db_mark_news_read' => 'Mark news as read',
	'upi2db_mark_news_unread' => 'Mark News as unread',
	'upi2db_search_mark_read' => 'MAR',
	'upi2db_submit_mark_read' => 'Mark As Read(Marquer comme lu)',
	'upi2db_submit_topic_mark_read' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; marqu&eacute;s comme lus',

	'upi2db_mark_post_unread' => 'Marquer ce message comme non-lu',
	'upi2db_mark_post_unread_cant' => 'Ce message ne peut &ecirc;tre marqu&eacute; comme non-lu.',
	'upi2db_mark_post_is_unread' => 'Ce message a &eacute;t&eacute; marqu&eacute; comme non-lus.',

	'upi2db_first_use_txt' => 'Vous pouvez maintenant utiliser le syst&egrave; "Informations sur les messages non lus dans la base de donn&eacute;es" et toutes ses fonctionnalit&eacute;s ! Vous pourrez plus d&#39;informations dans la FAQ.',

	'upi2db_u' => 'N',
	'upi2db_m' => 'M',
	'upi2db_p' => 'T',
	'upi2db_unread' => 'Messages non lus',
	'upi2db_marked' => 'Messages marqu&eacute;s',
	'upi2db_perm_read' => 'Toujours lu',
	)
);

?>