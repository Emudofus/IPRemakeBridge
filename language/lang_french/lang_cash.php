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
* Xore (mods@xore.ca)
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

// Admin menu
$lang['Cmcat_main'] = 'Cash Mod - Principal';
$lang['Cmcat_addons'] = 'Add-ons';
$lang['Cmcat_other'] = 'Autres';
$lang['Cmcat_help'] = 'Aide';

$lang['Cash_Configuration'] = 'Argent&nbsp;-&nbsp;Configuration';
$lang['Cash_Currencies'] = 'Argent&nbsp;-&nbsp;Monnaies';
$lang['Cash_Exchange'] = 'Argent&nbsp;-&nbsp;Echanges';
$lang['Cash_Events'] = 'Argent&nbsp;-&nbsp;Ev&egrave;nements';
$lang['Cash_Forums'] = 'Argent&nbsp;-&nbsp;Forums';
$lang['Cash_Groups'] = 'Argent&nbsp;-&nbsp;Groupes';
$lang['Cash_Help'] = 'Argent&nbsp;-&nbsp;Aide';
$lang['Cash_Logs'] = 'Argent&nbsp;-&nbsp;Logs';
$lang['Cash_Settings'] = 'Argent&nbsp;-&nbsp;R&eacute;glages';

$lang['Cmenu_cash_config'] = 'R&eacute;glages g&eacute;n&eacute;raux du Cash Mod, modifiant toutes les monnaies';
$lang['Cmenu_cash_currencies'] = 'Ajouter, Enlever, ou d&eacute;placer des monnaies';
$lang['Cmenu_cash_settings'] = 'R&eacute;glages sp&eacute;cifiques pour chaque monnaie';
$lang['Cmenu_cash_events'] = 'Montants &agrave; donner lors d&#39;&eacute;v&egrave;nements';
$lang['Cmenu_cash_reset'] = 'Remettre &agrave; z&eacute;ro ou Recompter les montants';
$lang['Cmenu_cash_exchange'] = 'Activer/D&eacute;sactiver l&#39;&eacute;change de monnaies, taux d&#39;&eacute;change';
$lang['Cmenu_cash_forums'] = 'Activer ou d&eacute;sactiver les monnaies pour chaque forum';
$lang['Cmenu_cash_groups'] = 'R&eacute;glages sp&eacute;cifiques par groupe d&#39;utilisateur, rang et niveaux';
$lang['Cmenu_cash_log'] = 'Voir/Effacer les Logs Argent';
$lang['Cmenu_cash_help'] = 'Aide Cash Mod';

// Config
$lang['Cash_config'] = 'Cash Mod - Configuration';
$lang['Cash_config_explain'] = 'Le formulaire ci-dessous vous permettra de configurer le Cash Mod.';

$lang['Cash_admincp'] = 'Mode Admin pour Cash Mod';
$lang['Cash_adminnavbar'] = 'Barre de Navigation Cash Mod';
$lang['Sidebar'] = 'Classique';
$lang['Menu'] = 'Menu';

$lang['Messages'] = 'Messages';
$lang['Spam'] = 'Spam';
$lang['Click_return_cash_config'] = 'Cliquez %sici%s pour retourner &agrave; la Configuration du Cash Mod';
$lang['Cash_config_updated'] = 'Configuration du Cash Mod Mise A Jour';
$lang['Cash_disabled'] = 'D&eacute;sactiver le Cash Mod';
$lang['Cash_message'] = 'Montrer les gains dans l&#39;&eacute;cran de confirmation de Post/R&eacute;ponse';
$lang['Cash_display_message'] = 'Message indiquant les gains';
$lang['Cash_display_message_explain'] = 'Doit contenir exactement 1 "%s"';
$lang['Cash_spam_disable_num'] = 'Nombre de posts apr&egrave;s lesquels d&eacute;sactiver les gains (pr&eacute;vention de spam)';
$lang['Cash_spam_disable_time'] = 'P&eacute;riode durant laquelle ce nombre doit être d&eacute;pass&eacute; (heures)';
$lang['Cash_spam_disable_message'] = 'Message annonçant le spam et le gain z&eacute;ro';

// Currencies
$lang['Cash_currencies'] = 'Cash Mod - Monnaies';
$lang['Cash_currencies_explain'] = 'Le formulaire ci-dessous vous permet de g&eacute;rer vos monnaies.';

$lang['Click_return_cash_currencies'] = 'Cliquez %sici%s pour retourner aux monnaies du Cash Mod';
$lang['Cash_currencies_updated'] = 'Monnaies du Cash Mod Mises A Jour';
$lang['Cash_field'] = 'Champ';
$lang['Cash_currency'] = 'Monnaie';
$lang['Name_of_currency'] = 'Nom de la monnaie';
$lang['Default'] = 'D&eacute;faut';
$lang['Cash_order'] = 'Ordre';
$lang['Cash_set_all'] = 'Indiquer pour tous les utilisateurs';
$lang['Cash_delete'] = 'Effacer la monnaie';
$lang['Decimals'] = 'Centimes';

$lang['Cash_confirm_copy'] = 'Copier toutes les donn&eacute;es d&#39;utilisateur de %s vers %s ?<br />Ceci ne peut pas être annul&eacute; apr&egrave;s';
$lang['Cash_confirm_delete'] = 'Effacer %s ?<br />Ceci ne peut pas être annul&eacute; apr&egrave;s';

$lang['Cash_copy_currency'] = 'Copier les donn&eacute;es de la monnaie';

$lang['Cash_new_currency'] = 'Cr&eacute;er une nouvelle monnaie';
$lang['Cash_currency_dbfield'] = 'Champ de la base de donn&eacute;es pour la monnaie';
$lang['Cash_currency_decimals'] = 'Nombre de d&eacute;cimales pour la monnaie';
$lang['Cash_currency_default'] = 'Montant par d&eacute;faut pour la monnaie';

$lang['Bad_dbfield'] = 'Mauvais nom de champ, doit être de la forme &#39;user_mot&#39;<br /><br />%s<br /><br/>Exemples:<br />user_points<br />user_argent<br />user_cash<br />user_avertissements<br /><br />';

// 0 monnaies (la plupart des panneaux admin ne fonctionneront pas... )
$lang['Insufficient_currencies'] = 'Vous devez cr&eacute;er des monnaies avant de pouvoir modifier des r&egrave;glages';

// Add-ons ?

// Ev&egrave;nements
$lang['Cash_events'] = 'Ev&egrave;nements Cash Mod';
$lang['Cash_events_explain'] = 'Le formulaire ci-dessous vous permettra de d&eacute;terminer les gains d&#39;argent pour des &eacute;v&egrave;nements personnalis&eacute;s.';

$lang['No_events'] = 'Aucun &eacute;v&egrave;nement cr&eacute;&eacute;';
$lang['Existing_events'] = 'Ev&egrave;nements Cr&eacute;&eacute;s';
$lang['Add_an_event'] = 'Ajouter un &eacute;v&egrave;nement';
$lang['Cash_events_updated'] = 'Ev&egrave;nements Argent Mis A Jour';
$lang['Click_return_cash_events'] = 'Cliquez %sici%s pour retourner aux Ev&egrave;nements Argent';

//Remettre &agrave; z&eacute;ro
$lang['Cash_reset_title'] = 'Remettre le Cash Mod &agrave; Z&eacute;ro';
$lang['Cash_reset_explain'] = 'Le formulaire ci-dessous vous permettra de remettre les montants de tous les utilisateurs &agrave; z&eacute;ro.';

$lang['Cash_resetting'] = 'Remise &agrave; z&eacute;ro de l&#39;argent';
$lang['User_of'] = 'Utilisateur %s sur %s';

$lang['Set_checked'] = 'Modifier monnaies s&eacute;lectionn&eacute;es';
$lang['Recount_checked'] = 'Recompter monnaies s&eacute;lectionn&eacute;es';

$lang['Cash_confirm_reset'] = 'Confirmer la remise &agrave; z&eacute;ro des monnaies ?<br />Ceci ne peut pas être annul&eacute; apr&egrave;s';
$lang['Cash_confirm_recount'] = 'Confirmer le recomptage des monnaies ?<br />Ceci ne peut pas être annul&eacute; apr&egrave;s.<br /><br />Cette action n&#39;est pas conseill&eacute;e pour les forums avec beaucoup d&#39;utilisateurs et/ou topics.<br /><br />Il est conseill&eacute; de d&eacute;sactiver votre forum pendant que cette action est en cours. <br />Vous pouvez d&eacute;sactiver votre forum dans la %sConfiguration%s';

$lang['Update_successful'] = 'Mise &agrave; jour termin&eacute;e!';
$lang['Click_return_cash_reset'] = 'Cliquez %sici%s pour retourner &agrave; la Remise &agrave; Z&eacute;ro de l&#39;argent';
$lang['User_updated'] = '%s mis &agrave; jour<br />';

// Autres

// Echange
$lang['Cash_exchange'] = 'Cash Mod - Echange';
$lang['Cash_exchange_explain'] = 'Le formulaire ci-dessous vous permettra d&#39;indiquer la valeur relative de vos monnaies, et de permettre aux utilisateurs de faire des &eacute;changes.';

$lang['Exchange_insufficient_currencies'] = 'Vous n&#39;avez pas assez de monnaies pour cr&eacute;er des taux d&#39;&eacute;change.<br />Il vous en faut au moins deux';

// Forums
$lang['Forum_cm_settings'] = 'Cash Mod - R&eacute;glages Forum';
$lang['Forum_cm_settings_explain'] = 'A partir de ce panneau, vous pouvez indiquer quels forums utiliseront le Cash Mod';

// Groupes
$lang['Cash_groups'] = 'Cash Mod - Groupes';
$lang['Cash_groups_explain'] = 'A partir de ce panneau, vous pouvez indiquer des privil&egrave;ges sp&eacute;ciaux par rang, groupe, administrateur ou mod&eacute;rateur';

$lang['Click_return_cash_groups'] = 'Cliquez %sici%s pour retourner aux Groupes Argent';
$lang['Cash_groups_updated'] = 'Groupes Argent Mis A Jour';

$lang['Set'] = 'Modifier';
$lang['Up'] = 'Haut';
$lang['Down'] = 'Bas';

// Aide
$lang['Cmh_support'] = 'Support Cash Mod';
$lang['Cmh_troubleshooting'] = 'Erreurs Communes';
$lang['Cmh_upgrading'] = 'Mise A Jour';
$lang['Cmh_addons'] = 'Add-Ons';
$lang['Cmh_demo_boards'] = 'Forums de D&eacute;mo';
$lang['Cmh_translations'] = 'Traductions';
$lang['Cmh_features'] = 'Fonctions';

$lang['Cmhe_support'] = 'Information G&eacute;n&eacute;rale';
$lang['Cmhe_troubleshooting'] = 'Si vous avez des probl&egrave;mes avec le Cash Mod,regardez ici pour des corrections';
$lang['Cmhe_upgrading'] = 'Vous avez en ce moment la version %s, les mises &agrave; jour seront mises ici jusqu&#39;&agrave; la derni&egrave;re version';
$lang['Cmhe_addons'] = 'Une liste de Mods utilisant les fonctions du Cash Mod';
$lang['Cmhe_demo_boards'] = 'Une liste de forums d&eacute;mo utilisant le Cash Mod';
$lang['Cmhe_translations'] = 'Une liste de traductions pour le Cash Mod';
$lang['Cmhe_features'] = 'Une liste de fonctions du Cash Mod, et d&eacute;veloppement pour les versions futures';

// Logs
$lang['Logs'] = 'Logs Cash Mod';
$lang['Logs_explain'] = 'A partir de ce panneau vous pourrez voir les logs d&#39;&eacute;v&egrave;nements concernants le Cash Mods';

// R&eacute;glages
$lang['Cash_settings'] = 'R&eacute;glages Cash Mod';
$lang['Cash_settings_explain'] = 'Le formulaire ci-dessous vous permettra de personnaliser les r&eacute;glages monnaie.';


$lang['Display'] = 'Affichage';
$lang['Implementation'] = 'Implementation';
$lang['Allowances'] = 'Argent de Poche';
$lang['Allowances_explain'] = 'L&#39;argent de poche n&eacute;cessite le plug-in Cash Mod Allowances';
$lang['Click_return_cash_settings'] = 'Cliquez %sici%s pour retourner aux r&eacute;glages du Cash Mod';
$lang['Cash_settings_updated'] = 'R&eacute;glages du Cash Mod Mis A Jour';

$lang['Cash_enabled'] = 'Activer la monnaie';
$lang['Cash_custom_currency'] = 'Monnaie personnalis&eacute;e pour Cash Mod';
$lang['Cash_image'] = 'Afficher la monnaie en tant qu&#39;image';
$lang['Cash_imageurl'] = 'Image (Relative au dossier de base de phpBB2):';
$lang['Cash_imageurl_explain'] = 'Utiliser ceci pour d&eacute;finir une petite image, associ&eacute;e avec la monnaie';
$lang['Prefix'] = 'Pr&eacute;fixe';
$lang['Postfix'] = 'Suffixe';
$lang['Cash_currency_style'] = 'Style de monnaie pour le Cash Mod';
$lang['Cash_currency_style_explain'] = 'Symbole de monnaie ' . $lang['Prefix'] . ' ou ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Montrer les gains dans les profils';
$lang['Cash_display_userpost'] = 'Montrer les gains dans les topics';
$lang['Cash_display_memberlist'] = 'Montrer les gains dans la liste de membres';

$lang['Cash_amount_per_post'] = 'Argent gagn&eacute; par nouveau topic';
$lang['Cash_amount_post_bonus'] = 'Argent bonus gagn&eacute; par r&eacute;ponse sur le topic';
$lang['Cash_amount_per_reply'] = 'Argent gagn&eacute; par r&eacute;ponse';
$lang['Cash_amount_per_character'] = 'Argent gagn&eacute; par caract&egrave;re';
$lang['Cash_amount_per_thanks'] = 'Argent gagn&eacute; par remerciement';
$lang['Cash_maxearn'] = 'Montant maximum gagn&eacute; par r&eacute;ponse';
$lang['Cash_amount_per_pm'] = 'Argent gagn&eacute; par message priv&eacute;';
$lang['Cash_include_quotes'] = 'Inclure les citations en calculant l&#39;argent par caract&egrave;re';
$lang['Cash_exchangeable'] = 'Permettre aux utilisateurs d&#39;&eacute;changer cette monnaie';
$lang['Cash_allow_donate'] = 'Permettre aux utilisateurs de donner de l&#39;argent aux autres';
$lang['Cash_allow_mod_edit'] = 'Permettre aux mod&eacute;rateurs d&#39;&eacute;diter l&#39;argent des membres';
$lang['Cash_allow_negative'] = 'Autoriser les montants n&eacute;gatifs';

$lang['Cash_allowance_enabled'] = 'Activer l&#39;argent de poche';
$lang['Cash_allowance_amount'] = 'Montant gagn&eacute; en tant qu&#39;argent de poche';
$lang['Cash_allownace_frequency'] = 'Fr&eacute;quence de l&#39;argent de poche';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Jour';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Semaine';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'Mois';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'Ann&eacute;e';
$lang['Cash_allowance_next'] = 'Temps avant le prochain argent de poche';

// Groupes
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'D&eacute;faut';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Personnalis&eacute;';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Off';
$lang['Cash_status'] = 'Statut';

// Cash Mod Log Text
// Note: there isn't really a whole lot i can do about it, if languages use a
// grammar that requires these arguments (%s) to be in a different order, it's stuck in
// this order. The up side is that this is about 10x more comprehensive than the
// last way i did it.
//

/* argument order: [donater id][donater name][currency list][receiver id][receiver name]

eg.
Joe donated 14 gold, $10, 3 points to Peter
*/
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> donn&eacute; de <b>%s</b> &agrave: <a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> &agrave; edit&acute; l&#39;argent de <a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>:<br />Ajout&eacute; <b>%s</b><br />Retir&eacute; <b>%s</b><br />Mis &agrave; <b>%s</b>'; 

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> cr&eacute;e <b>%s</b>'; 

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> &agrave; supprim&eacute; <b>%s</b>'; 

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> renomm&eacute; <b>%s</b> &agrave; <b>%s</b>'; 

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> copi&eacute; vert l&#39;utilisateur <b>%s</b> to <b>%s</b>'; 

$lang['Log'] = 'Journal';
$lang['Action'] = 'Action';
$lang['Type'] = 'Type';
$lang['Cash_all'] = 'Tous';
$lang['Cash_admin'] = 'Administration';
$lang['Cash_user'] = 'Membre';
$lang['Delete_all_logs'] = 'Effacer le journal';
$lang['Delete_admin_logs'] = 'Effacer le journal administratif';
$lang['Delete_user_logs'] = 'Effacer le journal des utilisateurs';
$lang['All'] = 'Tous';
$lang['Day'] = 'Jour';
$lang['Week'] = 'Semaine';
$lang['Month'] = 'Mois';
$lang['Year'] = 'Ann&eacute;e';
$lang['Page'] = 'Page';
$lang['Per_page'] = 'par page';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Donner';
$lang['Mod_usercash'] = 'Modifier l&#39;argent de %s';
$lang['Exchange'] = 'Echange';

// Exchange
$lang['Convert'] = 'Convertir';
$lang['Select_one'] = 'En s&eacute;lectionner une';
$lang['Exchange_lack_of_currencies'] = 'Il n&#39;y a pas assez de monnaies pour vous permettre d&#39;&eacute;changer<br />Pour utiliser cette fonction, votre admin doit cr&eacute;&eacute;r au moins deux monnaies';
$lang['You_have'] = 'Vous avez';
$lang['One_worth'] = 'Un(e) %s vaut:';
$lang['Cannot_exchange'] = 'Vous ne pouvez &eacute;changer ceci : %s, actuellement';

// Donate
$lang['Amount'] = 'Montant';
$lang['Donate_to'] = 'Donner &agrave; %s';
$lang['Donation_recieved'] = 'Vous avez reçu une donation de %s';
$lang['Has_donated'] = '%s vous a donn&eacute; [b]%s[/b]. \n\n%s a &eacute;crit:\n';

// Mod Edit
$lang['Add'] = 'Ajouter';
$lang['Remove'] = 'Effacer';
$lang['Omit'] = 'Exclure';
$lang['Amount'] = 'Montant';
$lang['Donate_to'] = 'Donner &agrave; %s';
$lang['Has_moderated'] = '%s a mod&eacute;r&eacute; vos %s';
$lang['Has_added'] = '[*]Ajout&eacute;: [b]%s[/b]\n';
$lang['Has_removed'] = '[*]Enlev&eacute;: [b]%s[/b]\n';
$lang['Has_set'] = '[*]Mis &agrave; : [b]%s[/b]\n';

// That's all folks!

?>