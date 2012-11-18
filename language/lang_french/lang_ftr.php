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
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
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
// Commonly Used
	'Ftr_msg_error' => 'Erreur',
	'Ftr_msg_success' => 'Succ&egrave;s',

// Buttons
	'Ftr_select_button' => ' S&eacute;lectionner ',
	'Ftr_change_button' => ' Changer ',
	'Ftr_delete_button' => ' Supprimer ',
	'Ftr_save_button' => ' Sauvegarder ',

// Admin Panel
	'Ftr_admin_users' => 'FTR: Utilisateurs ayant vu ce sujet',
	'Ftr_total_user_error' => 'Erreur en obtenant le total des utilisateurs.',
	'Ftr_username' => '<strong>Nom d&#39;Utilisateur</strong>',
	'Ftr_post_date_time' => '<strong>Date &amp; heure de vue du message</strong>',
	'Ftr_admin_user_delete' => 'FTR: Supression de l&#39;utilisateur',
	'Ftr_user_del_success' => 'Tous les utilisateurs ont &eacute;t&eacute; supprim&eacute;s avec succ&egrave;s.',
	'Ftr_save_config' => 'FTR: Sauvegarder la configuration',
	'Ftr_save_config_success' => 'Les nouveaux param&ecirc;tres de configuration ont &eacute;t&eacute; sauvegard&eacute;s.',
	'Ftr_select_forum' => 'FTR: Choisir un Forum',
	'Ftr_forum_choose' => '<strong>Choisir un Forum:</strong>',
	'Ftr_set_config' => 'FTR: R&eacute;gler la Configuration',
	'Ftr_topic_choose' => 'S&eacute;lectionnez le sujet &agrave; les forcer &agrave; lire:',
	'Ftr_message' => 'Entrez un message que les Utilisateurs recerons, leur disant de voir ce sujet.',
	'Ftr_config' => 'FTR: Configuration',
	'Ftr_post_changed' => '<strong>Supprimer les drapeaux FTR :</strong><br /> Cela forcera &#39;tous&#39; les membres &agrave; relire le sujet.',
	'Ftr_current_topic' => '<strong>Sujet actuel du FTR :</strong>',
	'Ftr_current_message' => '<strong>Message actuel :</strong>',
	'Ftr_default' => 'Choisissez un Forum',
	'Ftr_default2' => 'Choisissez un Sujet',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Utilisateur supprim&eacute;!',
	'Ftr_deactivate' => '<strong>D&eacute;sactiver le FTR?</strong><br /><span class="gensmall"> Un <b>Oui</b> d&eacute;sactivera le FTR.</span>',
	'Ftr_whos_effected' => '<strong>Qui est forc&eacute; de lire cela ?</strong><br /><span class="gensmall">&#39;Nouveaux Utilisateurs&#39; affectera seulement les nouvelles inscriptions.</span>',
	'Ftr_whos_effected_a' => 'Tous les Membres',
	'Ftr_whos_effected_n' => 'Nouveaux Membres',
	'Ftr_deactivate_y' => 'Oui',
	'Ftr_deactivate_n' => 'Non',
	'Ftr_effected_1' => 'Seuls les nouveaux utilisateurs seront forc&eacute;s de lire cela.',
	'Ftr_effected_2' => 'Tous les membres seront forc&eacute;s de lire cela.',
	'Ftr_active_1' => 'Vous avez d&eacute;sactiv&eacute; le FTR. Personne ne sera forc&eacute; de lire cela.',
	'Ftr_active_2' => 'Vous avez activ&eacute; le FTR!',
	)
);

?>