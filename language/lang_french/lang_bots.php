<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'BOTS' => 'G&eacute;rer les Robots',
	'BOTS_EXPLAIN' => '"Robots", "bots", "Spiders" ou "Crawlers" sont des robots informatiques utilis&eacute;s la plupart du temps par les moteurs de recherche pour mettre &agrave; jour leur base de donn&eacute;es. Comme ils utilisent souvent mal les sessions, cela peut d&eacute;former le compteur de visites, ralentir votre site ou emp&ecirc;cher votre site d&#39;&ecirc;tre vu correctement. Ici vous pouvez leur assigner un type sp&eacute;cial d&#39;utilisateur pour r&eacute;soudre ces probl&egrave;mes.',
	'BOT_ACTIVATE' => 'Activer',
	'BOT_ACTIVE' => 'Robot actif',
	'BOT_ACTIVE_EXPLAIN' => 'Vous pouvez choisir quel robot est autoris&eacute; &agrave; visiter votre site ou non. Si vous choississez non, le robot sera expuls&eacute; de votre site.',
	'BOT_ADD' => 'Ajouter un robot',
	'BOT_ADDED' => 'Robot correctement ajout&eacute;.',
	'BOT_AGENT' => 'Agent',
	'BOT_AGENT_EXPLAIN' => 'Une cha&icirc;ne de caract&egrave;re pour l&#39;agent utilisateur du robot, les recherches partielles sont autoris&eacute;es.',
	'BOT_COLOR' => 'Couleur du robot',
	'BOT_COLOR_EXPLAIN' => 'Code HTML utilis&eacute; pour montrer le robot. Si vous laissez ce champ vide la couleur par d&eacute;faut sera utilis&eacute;e.',
	'BOT_DEACTIVATE' => 'D&eacute;sactiver',
	'BOT_DELETED' => 'Bot supprim&eacute; correctement.',
	'BOT_EDIT' => '&Eacute;diter le robot',
	'BOT_EDIT_EXPLAIN' => 'Ici vous pouvez ajouter ou &eacute;diter un robot existant. Vous pouvez entrer une cha&icirc; pour l&#39;agent utilisateur et/ou une ou plusieurs adresses (plages d&#39;adresses). Vous pouvez aussi leur assigner une langue et un th&egrave;me que le robot aura sur le forum. Cela vous permettra de r&eacute;duire la bande passante utilis&eacute;e par un simple robot en utilisant un th&egrave;me tr&egrave;s simple. N&#39;oubliez pas de changer les permissions dans le groupe sp&eacute;cial des robots..',
	'BOT_LANG' => 'Langue',
	'BOT_LANG_EXPLAIN' => 'Le language que le robot aura sur votre forum.',
	'BOT_LAST_VISIT' => 'Derni&egrave;re visite',
	'BOT_IP' => 'Adresse IP du bot',
	'BOT_IP_EXPLAIN' => 'Les recherches partielles sont autoris&eacute;es, s&eacute;parez les adresses avec une virgule.',
	'BOT_NAME' => 'Nom du bot',
	'BOT_NAME_EXPLAIN' => 'Utilis&eacute; uniquement pour vous.',
	'BOT_NAME_TAKEN' => 'Ce nom est d&eacute;j&agrave; inscrit sur votre forum et ne peux &ecirc;tre utilis&eacute; pour le robot.',
	'BOT_NEVER' => 'Jamais',
	'BOT_STYLE' => 'Th&egrave;me',
	'BOT_STYLE_EXPLAIN' => 'Le th&egrave;me que le robot aura sur votre forum..',
	'BOTS_UPDATE' => 'Mettre &agrave; jour',
	'BOT_UPDATED' => 'Le robot a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s.',

	'BOT_COL_NAME' => 'Nom',
	'BOT_COL_COLOR' => 'Couleur',
	'BOT_COL_AGENT' => 'Agent',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Actif',
	'BOT_COL_LAST_VISIT' => 'Derni&egrave; visite',
	'BOT_COL_COUNTER' => 'Compteur',

	'CLICK_RETURN_BOTS' => 'Cliquez %sici%s pour revenir &agrave; l&#39;administration des bots',

	'ERR_BOT_ADD' => 'Vous n&#39;avez pas remplis les champs obligatoires, veuillez revenir en arri&egrave;re et essayer &agrave; nouveau.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'L&#39;agent du bot que vous avez rentr&eacute; est similaire &agrave; celui que vous utilisez actuellement. Veuillez le modifier.',
	'ERR_BOT_NO_IP' => 'L&#39;adresse IP n&#39;est pas valide.',
	'ERR_BOT_NO_MATCHES' => 'Vous devez entrer au moins une IP ou l&#39;agent de ce robot.',

	'NO_BOTS' => 'Aucun robot.',
	'NO_BOT' => 'Aucun robot avec cet identifiant.',
	'NO_BOT_GROUP' => 'Impossible de trouver le groupe sp&eacute;cial des robots.',
	)
);

?>