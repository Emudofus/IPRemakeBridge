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
* OOHOO < webdev@phpbb-tw.net >
* Stefan2k1 and ddonker from www.portedmods.com
* CRLin from http://mail.dhjh.tcc.edu.tw/~gzqbyr/
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
	'Site_links' => 'Liens',
	'Link_lock_submit_site' => 'La validation est d&eacute;sactiv&eacute;e',
	'Link_title' => 'Nom du site',
	'Link_desc' => 'Description du Site',
	'Link_url' => 'Adresse du Site',
	'Link_logo_src' => 'Logo du site (88x31 pixels, la taille ne doit pas exc&eacute;der 10K), ou laissez blanc:',
	'Link_logo_src1' => 'Logo du site (88x31 pixels, la taille ne doit pas exc&eacute;der 10K):',
	'Links_Preview' => 'Pr&eacute;visualisation',
	'Link_category' => 'Cat&eacute;gorie du site',
	'link_hits' => 'Clics',
	'Link_us' => 'Lier &agrave; ',
	'Link_us_explain' => 'Liez-vous &agrave; <b>%s</b>, en utilisant le code HTML suivant:',
	'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" alt="%s" /></a>',
	'Link_register' => 'Proposer un site',
	'Link_register_guest_rule' => 'Connectez-vous pour proposez un site.',
	'Link_register_rule' => 'Vous devez remplir le formulaire ci-dessous, et votre site sera ajout&eacute; dans notre base de donn&eacute;es apr&egrave;s validation.',
	'Link_pm_notify_subject' => 'Lien ajout&eacute;',
	'Link_pm_notify_message' => "\nLien %s ajout&eacute;,\n Veuillez aller dans l'administration des liens et le valider.",
	'Link_update_success' => 'Vos informations ont &eacute;t&eacute; enregistr&eacute;s',
	'Link_update_fail' => 'D&eacute;sol&eacute; ! Vos informations n&#39;ont pas pu &ecirc;tre envoyée, veuillez revenir en arri&egrave;re et essayer à nouveau',
	'Link_incomplete' => 'D&eacute;sol&eacute; ! Vous n&#39;avez pas remplis le formulaire, veuillez revenir en arri&egrave;re et remplir les champs',
	'Link_intval_warning' => 'D&eacute;sol&eacute; ! Vous ne pouvez envoyer plusieurs sites successivement, veuillez r&eacute;-essayer plus tard',
	'Click_return_links' => 'Cliquez %sici%s pour retourner &agrave; l&#39;index des liens',
	'Please_enter_your' => 'Veuillez entrer votre ',
	'No_Logo_img' => '<span class="text_blue">&#8226;</span>', // You can edit color
	'No_Display_Links_Logo' => '<span class="text_red">&#8226;</span>', // Don't display Links logo
	'Links_home' => 'Index des liens',
	'Search_site' => 'Recherche de site',
	'Search_site_title' => 'Rechercher le nom / la description du site:',
	'Descend_by_hits' => 'Ordonner par clics',
	'Descend_by_joindate' => 'Ordonner par date',
	'Logo' => 'Logo',
	'Site' => 'Site',
	'Link_ME' => 'Se lier &agrave; nous',
	'Remember_Me' => 'Connexion automatique',
	)
);

?>