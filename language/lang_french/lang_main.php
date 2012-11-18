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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
* Lopalong
*
*/

/** French Translation by Informpro & Yros **/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #dd2222;"><b>Mighty Gorgon</b></span>&nbsp;<i>(Luca Libralato)</i><br />
<b><i>Fondateur du projet</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>hpl</b></span><br />
<b><i>D&eacute;veloppeur Junior</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>KasLimon</b></span><br />
<b><i>D&eacute;veloppeur Junior</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>Informpro</b></span><br />
<b><i>D&eacute;veloppeur Junior</i></b><br />
<br />
<br />
<b><i>Contributeurs Estim&eacute;s</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #dd2222;"><b>Bicet</b></span>&nbsp;<i>(phpBB XS Developer)</i><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #aaff00;"><b>TuningBEB2008</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<br />
<br />
<b><i>Traduction Fran&ccedil;aise</i></b><br />
<span style="color: #ff5500;"><b>InformPro</b></span><br />
<span style="color: #0000bb;"><b>Yros</b></span><br />
<br />
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => 'Accueil',
	'Forum' => 'Forum',
	'Category' => 'Cat&eacute;gorie',
	'Topic' => 'Sujet',
	'Topics' => 'Sujets',
	'Replies' => 'R&eacute;ponses',
	'Views' => 'Vues',
	'Post' => 'Message',
	'Posts' => 'Messages',
	'Posted' => 'Post&eacute;',
	'Username' => 'Nom d\'utilisateur',
	'Password' => 'Mot de passe',
	'Email' => 'E-mail',
	'Poster' => 'Posteur',
	'Author' => 'Auteur',
	'Time' => 'Date',
	'Hours' => 'Heures',
	'Message' => 'Message',

	'1_DAY' => '1 Jour',
	'7_DAYS' => '7 Jours',
	'2_WEEKS' => '2 Semaines',
	'1_MONTH' => '1 Mois',
	'3_MONTHS' => '3 Mois',
	'6_MONTHS' => '6 Mois',
	'1_YEAR' => '1 An',

	'Go' => 'Aller',
	'Jump_to' => 'Aller &agrave;',
	'Submit' => 'Envoyer',
	'Reset' => 'R&eacute;initialiser',
	'Cancel' => 'Annuler',
	'Preview' => 'Pr&eacute;visualiser',
	'Confirm' => 'Confirmer',
	'Spellcheck' => 'V&eacute;rification orthographique',
	'Yes' => 'Oui',
	'No' => 'Non',
	'Enabled' => 'Activ&eacute;',
	'Disabled' => 'D&eacute;sactiv&eacute;',
	'Error' => 'Erreur',

	'GO' => 'Aller',
	'JUMP_TO' => 'Aller &agrave;',
	'SUBMIT' => 'Envoyer',
	'RESET' => 'R&eacute;initialiser',
	'CANCEL' => 'Annuler',
	'PREVIEW' => 'Pr&eacute;visualiser',
	'CONFIRM' => 'Confirmer',
	'YES' => 'Oui',
	'NO' => 'Non',
	'ENABLED' => 'Activ&eacute;',
	'DISABLED' => 'D&eacute;sactiv&eacute;',
	'ERROR' => 'Erreur',

	'Next' => 'Suivant',
	'Previous' => 'Pr&eacute;cedent',
	'Goto_page' => 'Aller &agrave; la page',
	'Joined' => 'Inscrit le',
	'IP_Address' => 'Adresse IP',

	'Select_forum' => 'S&eacute;lectionnez un forum',
	'View_latest_post' => 'Voir le dernier message',
	'View_newest_post' => 'Voir le message le plus r&eacute;cent',
	'Page_of' => 'Page <b>%d</b> sur <b>%d</b>', // Remplacez avec: Page 1 sur 2 par exemple.

	'AIM' => 'Adresse AIM',
	'ICQ' => 'Num&eacute;ro ICQ',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Live',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',

	'Forum_Index' => 'Forum',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Poster un nouveau sujet',
	'Reply_to_topic' => 'R&eacute;pondre au sujet',
	'Reply_with_quote' => 'R&eacute;pondre en citant',

	'Click_return_login' => 'Cliquez %sici%s pour r&eacute;essayer.',
	'Click_return_index' => 'Cliquez %sici%s pour revenir &agrave; l\'index.',
	'Click_return_forum' => 'Cliquez %sici%s pour revenir au forum.',
	'Click_return_topic' => 'Cliquez %sici%s pour revenir au sujet.', // Le " %sici%s " est l&agrave; pour le lien, ne l'enlevez pas !
	'Click_return_viewtopic' => 'Cliquez %sici%s pour revenir au sujet.',
	'Click_return_modcp' => 'Cliquez %sici%s pour revenir au Panneau de Mod&eacute;ration.',
	'Click_return_profile' => 'Cliquez %sici%s pour revenir au Profil de l\'Utilisateur.',
	'Click_return_preferences' => 'Cliquez %sici%s pour revenir aux pr&eacute;f&eacute;rences.',
	'Click_return_group' => 'Cliquez %sici%s pour revenir aux informations du groupe.',
	'Click_return_drafts' => 'Cliquez %sici%s pour revenir aux brouillons.',
	'Click_return_inbox' => 'Cliquez %sici%s pour revenir &agrave; votre Boite de R&eacute;ception.',
	'Click_view_message' => 'Cliquez %sici%s pour voir votre message.',
	'Click_view_privmsg' => 'Cliquez %sici%s pour visiter votre Boite de R&eacute;ception.',

	'Admin_panel' => 'Panneau de Contr&ocirc;le des Administrateurs',

	'Board_disabled' => 'D&eacute;sol&eacute;, mais ce site est actuellement indisponible. Veuillez r&eacute;essayer plus tard.',

// Variables globales de l'en-t&ecirc;te (Header)
	'Registered_users' => 'Utilisateurs enregistr&eacute;s:',
	'Browsing_forum' => 'Utilisateurs parcourant ce forum:',
	'Online_users_zero_total' => 'Il n\'y a aucun utilisateur en ligne: ',
	'Online_users_total' => 'Il y a au total <b>%d</b> utilisateurs en ligne: ',
	'Online_user_total' => 'Il y a au total <b>%d</b> utilisateur en ligne: ',// Cas o&ugrave; %d = 1
	'AC_Online_users_zero_total' => 'Il n\'y a aucun utilisateur dans le chat: ',
	'AC_Online_users_total' => 'Il y a au total <b>%d</b> utilisateurs dans le chat: ',
	'AC_Online_user_total' => 'Il y a au total <b>1</b> utilisateur dans le chat: ',
	'Reg_users_zero_total' => 'aucun enregistr&eacute;, ',
	'Reg_users_total' => '%d enregistr&eacute;s, ',
	'Reg_user_total' => '%d enregistr&eacute;, ',
	'Hidden_users_zero_total' => 'aucun invisible et ',
	'Hidden_user_total' => '%d invisible et ',
	'Hidden_users_total' => '%d invisibles et ',
	'Guest_users_zero_total' => 'aucun invit&eacute;',
	'Guest_users_total' => '%d invit&eacute;s',
	'Guest_user_total' => '%d invit&eacute;',
	'Record_online_users' => 'Le record du nombre d\'utilisateurs en ligne &eacute;tait de <b>%s</b>, le %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrateur%s',
	'Mod_online_color' => '%sMod&eacute;rateur%s',

	'You_last_visit' => 'Votre derni&egrave;re visite &eacute;tait le %s', // %s replaced by date/time
	'Current_time' => 'Nous sommes le %s', // %s replaced by time

	'Search_new' => 'Voir les messages depuis votre derni&egrave;re visite',
	'Search_your_posts' => 'Voir vos messages',
	'Search_unanswered' => 'Voir les messsages sans r&eacute;ponse',

	'Register' => 'S\'enregistrer',
	'Profile' => 'Profil',
	'Edit_profile' => '&Eacute;diter votre profil',
	'Search' => 'Recherche',
	'Memberlist' => 'Liste des Membres',
	'FAQ' => '<acronym title="Foire Aux Questions">FAQ</acronym>',
	'KB_title' => 'Base d\'Informations',
	'BBCode_guide' => 'Guide du BBCode',
	'Usergroups' => 'Groupes',
	'Last_Post' => 'Dernier Message',
	'Moderator' => 'Mod&eacute;rateur',
	'Moderators' => 'Mod&eacute;rateurs',

// Partie concernant les Statistiques
	'Posted_articles_zero_total' => 'Les utilisateurs n\'ont post&eacute;s <b>aucun</b> message pour l\'instant.', // Number of posts
	'Posted_articles_total' => 'Les utilisateurs ont post&eacute;s un total de <b>%d</b> messages', // Number of posts
	'Posted_article_total' => 'Les utilisateurs ont post&eacute;s un total de <b>%d</b> message', // Number of posts
	'Registered_users_zero_total' => 'Il n\'y a aucun utilisateur enregistr&eacute;.', // # registered users
	'Registered_users_total' => 'Nous avons <b>%d</b> utilisateurs enregistr&eacute;s.', // # registered users
	'Registered_user_total' => 'Nous avons <b>%d</b> utilisateur enregistr&eacute;.', // # registered users
	'Newest_user' => 'L\'utilisateur le plus r&eacute;cent est %s<b>%s</b>%s', // a href, username, /a

	'No_new_posts_last_visit' => 'Aucun nouveau message depuis votre derni&egrave;re visite',

	'No_new_posts_global_announcement' => 'Pas de nouveau message [ Global ]',
	'New_posts_global_announcement' => 'Nouveau message [ Global ]',
	'No_new_posts_announcement' => 'Pas de nouveau message [ Annonce ]',
	'New_posts_announcement' => 'Nouveau message [ Annonce ]',
	'No_new_posts_sticky' => 'Pas de nouveau message [ Note ]',
	'New_posts_sticky' => 'Nouveau message [ Note ]',
	'No_new_posts_locked' => 'Pas de nouveau message [ Verrouill&eacute; ]',
	'New_posts_locked' => 'Nouveau message [ Verrouill&eacute; ]',
	'No_new_posts' => 'Pas de nouveau message',
	'New_posts' => 'Nouveaux messages',
	'New_post' => 'Nouveau message',
	'No_new_posts_hot' => 'Pas de nouveau message [ Populaire ]',
	'New_posts_hot' => 'Nouveau message [ Populaire ]',

	'Forum_no_new_posts' => 'Aucun Nouveau Message<br />[ Forum ]',
	'Forum_new_posts' => 'Nouveaux Messages<br />[ Forum ]',
	'Cat_no_new_posts' => 'Aucun Nouveau Message<br />[ Cat&eacute;gorie ]',
	'Cat_new_posts' => 'Nouveaux Messages<br />[ Cat&eacute;gorie ]',
	'Forum_is_locked' => 'Forum Verrouill&eacute;',

// Partie concernant la Connexion (Login)
	'Enter_password' => 'Veuillez entrer votre nom d\'utilisateur et votre mot de passe pour vous connecter.',
	'Login' => 'Connexion',
	'Logout' => 'D&eacute;connexion',
	'Forgotten_password' => 'J\'ai oubli&eacute; mon mot de passe',
	'AUTOLOGIN' => 'Me connecter automatiquement &agrave; chaque visite',
	'Error_login' => 'Vous avez soit sp&eacute;cifi&eacute; un nom d\'utilisateur incorrect ou inactif soit votre mot de passe est incorrect.',

// Partie concernant l'Index
	'No_Posts' => 'Aucun message',
	'No_forums' => 'Ce site n\'a pas de forum',

	'Private_Message' => 'Message priv&eacute;',
	'Private_Messages' => 'Messages priv&eacute;s',
	'Who_is_Online' => 'Qui est en ligne ?',

	'Mark_all_forums' => 'Marquer tous les forums comme lu',
	'Forums_marked_read' => 'Tous les forums ont &eacute;t&eacute; marqu&eacute;s comme lus.',

// Partie concernant l'int&eacute;rieur des Forums (Viewforum)
	'View_forum' => 'Voir le forum',

	'Reached_on_error' => 'Vous avez atteint cette page par erreur.',

	'Display_topics' => 'Montrer les sujets depuis le',
	'ALL_TOPICS' => 'Tous les sujets',

	'Topic_News_nb' => 'Nouvelles',
	'Topic_global_announcement_nb' => 'Annonce globale',
	'Topic_Announcement_nb' => 'Annonce',
	'Topic_Sticky_nb' => 'Post-it',
	'Topic_Moved_nb' => 'D&eacute;plac&eacute;',
	'Topic_Poll_nb' => 'Sondage',
	'Topic_Event_nb' => '&Eacute;v&egrave;nement',
	'Topic_Announcement' => '<b>Annonce:</b>',
	'Topic_Sticky' => '<b>Post-it:</b>',
	'Topic_Moved' => '<b>D&eacute;plac&eacute;:</b>',
	'Topic_Poll' => '<b>Sondage:</b>',
	'Topic_Event' => '<b>&Eacute;v&egrave;nement:</b>',
	'Topic_global_announcement' => '<b>Annonce globale:</b>',
	'Post_global_announcement' => 'Annonce globale',


	'Mark_all_topics' => 'Marquer tous les sujets comme lu',
	'Topics_marked_read' => 'Tous les sujets de ce forum ont &eacute;t&eacute; marqu&eacute;s comme lu',

/*
	'Rules_post_can' => 'Vous <b>pouvez</b> cr&eacute;er des nouveaux sujets dans ce forum',
	'Rules_post_cannot' => 'Vous <b>ne pouvez pas</b> cr&eacute;er de nouveaux sujets dans ce forum',
	'Rules_reply_can' => 'Vous <b>pouvez</b> r&eacute;pondre aux sujets dans ce forum',
	'Rules_reply_can_own' => 'Vous <b>pouvez</b> r&eacute;pondre &agrave; vos sujets dans ce forum',
	'Rules_reply_cannot' => 'Vous <b>ne pouvez pas</b> r&eacute;pondre aux sujets dans ce forum',
	'Rules_edit_can' => 'Vous <b>pouvez</b> &eacute;diter vos messages dans ce forum',
	'Rules_edit_cannot' => 'Vous <b>ne pouvez pas</b> &eacute;diter vos messages dans ce forum',
	'Rules_delete_can' => 'Vous <b>pouvez</b> supprimer vos messages dans ce forum',
	'Rules_delete_cannot' => 'Vous <b>ne pouvez pas</b> supprimer vos messages dans ce forum',
	'Rules_vote_can' => 'Vous <b>pouvez</b> voter dans les sondages dans ce forum',
	'Rules_vote_cannot' => 'Vous <b>ne pouvez pas</b> voter dans les sondages dans ce forum',
*/
	'Rules_post_can' => 'Vous <b>pouvez</b> cr&eacute;er des nouveaux sujets',
	'Rules_post_cannot' => 'Vous <b>ne pouvez pas</b> cr&eacute;er de nouveau sujet',
	'Rules_reply_can' => 'Vous <b>pouvez</b> r&eacute;pondre aux sujets',
	'Rules_reply_can_own' => 'Vous <b>pouvez</b> r&eacute;pondre &agrave; vos sujets',
	'Rules_reply_cannot' => 'Vous <b>ne pouvez pas</b> r&eacute;pondre aux sujets',
	'Rules_edit_can' => 'Vous <b>pouvez</b> &eacute;diter vos messages',
	'Rules_edit_cannot' => 'Vous <b>ne pouvez pas</b> &eacute;diter vos messages',
	'Rules_delete_can' => 'Vous <b>pouvez</b> supprimer vos messages',
	'Rules_delete_cannot' => 'Vous <b>ne pouvez pas</b> supprimer vos messages',
	'Rules_vote_can' => 'Vous <b>pouvez</b> voter dans les sondages',
	'Rules_vote_cannot' => 'Vous <b>ne pouvez pas</b> voter dans les sondages',
	'Rules_moderate' => 'Vous <b>pouvez</b> %smod&eacute;rer ce forum%s', // %s replaced by a href links, do not remove!

    'No_topics_post_one' => 'Il n\'y a aucun sujet dans ce forum. <br />Cliquez sur le bouton <b>Nouveau Sujet</b> pour en commencer un.',
//	'No_topics_post_one' => 'Soit il n\'y a aucun sujet dans ce forum, soit il n\'y a aucune correspondance pour la lettre que vous avez s&eacute;lectionn&eacute.<br />Cliquez sur le bouton <b>Nouveau sujet</b> pour cr&eacute;er un nouveau sujet ou s&eacute;lectionnez une autre lettre.',

// Partie concernant les Sujets (Viewtopic)
	'View_topic' => 'Voir le sujet',

	'Guest' => 'Invit&eacute;',
	'Post_subject' => 'Poster un sujet',
	'View_next_topic' => 'Voir le sujet suivant',
	'View_previous_topic' => 'Voir le sujet pr&eacute;c&eacute;dant',
	'Submit_vote' => 'Voter',
	'View_results' => 'Voir les r&eacute;sultats',

	'No_newer_topics' => 'Il n\'y a aucun sujet plus r&eacute;cent dans ce forum.',
	'No_older_topics' => 'Il n\'y a aucun sujet plus ancient dans ce forum.',
	'No_posts_topic' => 'Aucun message n\'existe dans ce sujet',

	'Display_posts' => 'Montrer les messages depuis le ',
	'ALL_POSTS' => 'Tous les messages',
	'Newest_First' => 'R&eacute;cents d\'abord',
	'Oldest_First' => 'Anciens d\'abord',

	'Back_to_top' => 'Revenir en haut',
	'Back_to_bottom' => 'Pied de page',

	'Read_profile' => 'Voir le profil de l\'utilisateur',
	'Send_email' => 'Envoyer un mail &agrave; l\'utilisateur',
	'Visit_website' => 'Visiter le site du posteur',
	'ICQ_status' => 'Statut ICQ',
	'Edit_delete_post' => 'Editer/Supprimer ce message',
	'View_IP' => 'Voir l\'adresse IP du posteur',
	'Delete_post' => 'Supprimer ce message',

	'wrote' => 'a &eacute;crit', // suit le nom de l'utilisateur cit&eacute; et est suivit par le texte cit&eacute;.
	'Quote' => 'Citation', // se place avant le bbcode de citation.
	'Code' => 'Code', // se place avant le bbcode de code.

	'Edited_time_total' => 'Derni&egrave;re &eacute;dition par %s le %s. &Eacute;dit&eacute %d fois au total', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Derni&egrave;re &eacute;dition par %s le %s. &Eacute;dit&eacute %d fois au total', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Verrouiller ce sujet',
	'Unlock_topic' => 'D&eacute;verrouiller ce sujet',
	'Move_topic' => 'D&eacute;placer ce sujet',
	'Delete_topic' => 'Supprimer ce sujet',
	'Split_topic' => 'D&eacute;couper ce sujet',

	'Stop_watching_topic' => 'Arr&ecirc;ter de surveiller ce sujet',
	'Start_watching_topic' => 'Surveiller ce sujet',
	'No_longer_watching' => 'Vous ne surveillez plus ce sujet',
	'You_are_watching' => 'Vous surveillez maintenant ce sujet',

	'Total_votes' => 'Total des votes',

// Partie concernant la zone de poste/r&eacute;ponse (Pas les messages priv&eacute;s !)
	'Message_body' => 'Corps du message',
	'Topic_review' => 'Relire le sujet',

	'No_post_mode' => 'Le mode d\'&eacute;criture n\'est pas sp&eacute;cifi&eacute;.<br />Faites " Page Pr&eacute;c&eacute;dente " afin de revenir &agrave; votre zone de texte pour tenter de r&eacute;envoyer votre message et, si cela ne fonctionne pas, copiez-le et recommencez l\'op&eacute;ration du d&eacute;but.', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => 'Poster un nouveau sujet',
	'Post_a_reply' => 'Poster une r&eacute;ponse',
	'Post_topic_as' => 'Poster le sujet en mode:',
	'Edit_Post' => 'Editer le message',
	'Options' => 'Options',

	'PM_Read' => 'Message priv&eacute; lu',
	'PM_Unread' => 'Message priv&eacute; non lu',
	'PM_Replied' => 'Message priv&eacute; auquel vous avez r&eacute;pondu',

	'Post_Announcement' => 'Annonce',
	'New_post_Announcement' => 'Nouvelle annonce',
	'Post_Sticky' => 'Post-it',
	'New_post_Sticky' => 'Nouveau Post-it',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce sujet ?',
	'Confirm_delete_poll' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce sondage ?',

	'Flood_Error' => 'Vous ne pouvez pas poster un nouveau message si rapidement apr&egrave;s le dernier, veuillez essayer &agrave; nouveau dans peu de temps.',
	'Empty_subject' => 'Vous devez sp&eacute;cifier un intitul&eacute; avant de poster un nouveau sujet.',
	'Empty_message' => 'Vous devez entrer un message pour poster.',
	'Forum_locked' => 'Ce forum est verrouill&eacute;: vous ne pouvez ni poster, ni r&eacute;pondre, ni &eacute;diter vos messages.',
	'Topic_locked' => 'Ce sujet est verrouill&eacute;: vous ne pouvez ni r&eacute;pondre, ni &eacute;diter vos messages.',
	'No_post_id' => 'Vous devez s&eacute;lectionner un message &agrave; &eacute;diter',
	'No_topic_id' => 'Vous devez s&eacute;lectionner un sujet pour poster une r&eacute;ponse',
	'No_valid_mode' => 'Vous pouvez seulement poster, r&eacute;pondre, &eacute;diter ou citer des messages. Veuillez revenir en arri&egrave;re et r&eacute;essayer.',
	'No_such_post' => 'Le message que vous cherchez n\'existe pas. Veuillez revenir en arri&egrave;re et r&eacute;essayer.',
	'Edit_own_posts' => 'D&eacute;sol&eacute;, mais vous ne pouvez &eacute;diter que vos propres messages.',
	'Delete_own_posts' => 'D&eacute;sol&eacute;, mais vous ne pouvez supprimer que vos propres messages.',
	'Cannot_delete_replied' => 'D&eacute;sol&eacute;, mais vous ne pouvez supprimer les messages auquel on a d&eacute;j&agrave; r&eacute;pondu.',
	'Cannot_delete_poll' => 'D&eacute;sol&eacute;, mais vous ne pouvez pas supprimer un sondage actif.',
	'Empty_poll_title' => 'Vous devez entrer un titre pour votre sondage.',
	'To_few_poll_options' => 'Vous devez entrer au moins deux options pour le sondage.',
	'To_many_poll_options' => 'Vous ne pouvez pas entrer autant d\'options de sondage.',
	'Post_has_no_poll' => 'Ce sujet n\'a pas de sondage.',
	'Already_voted' => 'Vous avez d&eacute;j&agrave; vot&eacute; dans ce sondage.',
	'No_vote_option' => 'Vous devez choisir une option pour voter.',

	'Add_poll' => 'Ajouter un sondage',
	'Add_poll_explain' => 'Si vous ne voulez pas ajouter de sondage sur votre sujet, laissez ces champs vides.',
	'Poll_question' => 'Question du sondage',
	'Poll_option' => 'Option du sondage',
	'Add_option' => 'Ajouter une option',
	'Update' => 'Mettre &agrave; jour',
	'Delete' => 'Supprimer',
	'Poll_for' => 'Lancer un sondage pour',
	'Days' => 'jours', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Entrez 0 ou laissez ce champ blanc pour un sondage sans date limite ]',
	'Delete_poll' => 'Supprimer le sondage',

	'POST_ENABLE_BBCODE' => 'Activer les BBCodes dans ce message',
	'POST_ENABLE_SMILEYS' => 'Activer les Smileys dans ce message',
	'POST_ENABLE_HTML' => 'Activer le HTML dans ce message',
	'POST_ENABLE_ACRO_AUTO' => 'Activer les acronymes et les liens automatiques dans ce message',
	'Disable_HTML_post' => 'D&eacute;sactiver le HTML dans ce message',
	'Disable_ACRO_AUTO_post' => 'D&eacute;sactiver les acronymes et les liens automatiques dans ce message',
	'Disable_BBCode_post' => 'D&eacute;sactiver les BBCodes dans ce message',
	'Disable_Smilies_post' => 'D&eacute;sactiver les Smileys dans ce message',

	'HTML_is_ON' => 'Le <b>HTML</b> est <b><u>activ&eacute;</u></b>',
	'HTML_is_OFF' => 'Le <b>HTML</b> est <b><u>d&eacute;sctiv&eacute;</u></b>',
	'BBCode_is_ON' => 'Les %s<b>BBCode</b>%s sont <b><u>activ&eacute;s</u></b>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => 'Les %s<b>BBCode</b>%s sont <b><u>d&eacute;sctiv&eacute;s</u></b>',
	'Smilies_are_ON' => 'Les <b>Smileys</b> sont <b><u>activ&eacute;s</u></b>',
	'Smilies_are_OFF' => 'Les <b>Smileys</b> sont <b><u>d&eacute;sactiv&eacute;s</u></b>',

	'Attach_signature' => 'Attacher sa signature (les signatures peuvent &ecirc;tre modifi&eacute;es dans le profil)',
	'Notify' => 'M\'avertir lorsqu\'une nouvelle r&eacute;ponse est post&eacute;e',
	'Delete_post' => 'Supprimer ce message',

	'Stored' => 'Votre message a &eacute;t&eacute; correctement entr&eacute;.',
	'Deleted' => 'Votre message a &eacute;t&eacute; correctement supprim&eacute;.',
	'Poll_delete' => 'Votre sondage a &eacute;t&eacute; correctement supprim&eacute;.',
	'Vote_cast' => 'Votre vote a bien &eacute;t&eacute; pris en compte.',

	'Topic_reply_notification' => 'Notification d\'une r&eacute;ponse au sujet',

	'Emoticons' => 'Smileys',
	'More_emoticons' => 'Voir tous les smileys',

// Partie concernant la Messagerie Priv&eacute;e
	'Private_Messaging' => 'Messages priv&eacute;s',

	'Login_check_pm' => 'Connectez-vous pour voir vos messages priv&eacute;s',
	'New_pms' => 'Vous avez %d nouveaux messages priv&eacute;s', // You have 2 new messages
	'New_pm' => 'Vous avez %d nouveau message priv&eacute;', // You have 1 new message
	'No_new_pm' => 'Vous n\'avez aucun nouveau message priv&eacute;',
	'Unread_pms' => 'Vous avez %d messages priv&eacute;s non-lus',
	'Unread_pm' => 'Vous avez %d message priv&eacute; non-lu',
	'No_unread_pm' => 'Vous n\'avez aucun message priv&eacute; non-lu',
	'You_new_pm' => 'Un nouveau message priv&eacute; vous attend dans votre bo&icirc;te de r&eacute;ception',
	'You_new_pms' => 'De nouveaux messages priv&eacute;s vous attendent dans votre bo&icirc;te de r&eacute;ption',
	'You_no_new_pm' => 'Aucun message priv&eacute; ne vous attend',

	'Unread_message' => 'Message non lu',
	'Read_message' => 'Message lu',

	'Read_pm' => 'Lire un message',
	'Post_new_pm' => 'Poster un message',
	'Post_reply_pm' => 'R&eacute;pondre &agrave; au message',
	'Post_quote_pm' => 'Citer le message',
	'Edit_pm' => '&Eacute;diter le message',

	'Inbox' => 'Bo&icirc;te de R&eacute;ception',
	'Outbox' => 'Messages envoy&eacute;s',
	'Savebox' => 'Bo&icirc;te de Sauvegarde',
	'Sentbox' => 'Bo&icirc;te d\'envoi',
	'Flag' => 'Drapeau',
	'Subject' => 'Titre du Sujet:',
	'From' => 'De',
	'To' => '&Agrave;',
	'Date' => 'Date',
	'Mark' => 'Marquer',
	'Sent' => 'Envoy&eacute;',
	'Saved' => 'Sauvegard&eacute;',
	'Delete_marked' => 'Supprimer la s&eacute;lection',
	'Delete_all' => 'Tout supprimer',
	'Save_marked' => 'Sauvegarder la s&eacute;lection',
	'Download_marked' => 'T&eacute;l&eacute;charger la s&eacute;lection',
	'Mailbox' => 'Bo&icirc;te Mail',
	'Save_message' => 'Sauvegarder le message',
	'Delete_message' => 'Supprimer le message',
	'Next_privmsg' => 'Message priv&eacute; suivant',
	'Previous_privmsg' => 'Message priv&eacute; pr&eacute;cedant',
	'No_newer_pm' => 'Il n\'y a pas de message priv&eacute; plus r&eacute;cent.',
	'No_older_pm' => 'Il n\'y a pas de message priv&eacute, plus ancien.',
	'Display_messages' => 'Montrer les messages depuis le ', // Followed by number of days/weeks/months
	'All_Messages' => 'Tous les messages',

	'No_messages_folder' => 'Vous n\'avez aucun message dans ce dossier',

	'PM_disabled' => 'La messagerie priv&eacute;e a &eacute;t&eacute; d&eacute;sactiv&eacute;e sur ce forum.',
	'Cannot_send_privmsg' => 'D&eacute;sol&eacute;, mais l\'administration vous a interdit d\'envoyer des messages priv&eacute;s.<br />Pour toute r&eacute;clamation, contactez un administrateur.',
	'No_to_user' => 'Vous devez sp&eacute;cifier un nom d\'utilisateur &agrave; qui envoyer ce message.',

	'Disable_HTML_pm' => 'D&eacute;sactiver le HTML dans ce message priv&eacute;.',
	'Disable_ACRO_AUTO_pm' => 'D&eacute;sactiver les acronymes et les liens automatiques dans ce message priv&eacute;.',
	'Disable_BBCode_pm' => 'D&eacute;sactiver les BBCodes dans ce message priv&eacute;.',
	'Disable_Smilies_pm' => 'D&eacute;sactiver les Smileys dans ce message priv&eacute;.',

	'Message_sent' => 'Votre message a bien &eacute;t&eacute; envoy&eacute;.',

	'Send_a_new_message' => 'Envoyer un nouveau message priv&eacute;',
	'Send_a_reply' => 'R&eacute;plondre &agrave; un message priv&eacute;',
	'Edit_message' => '&Eacute;diter un message priv&eacute;',

	'Notification_subject' => 'Un nouveau message priv&eacute; est arriv&eacute; !',

	'FIND_USERNAME' => 'Trouver un nom d\'utilisateur',
	'Find' => 'Trouver',
	'No_match' => 'Aucun enregistrement trouv&eacute;.',

	'No_post_id' => 'L\'identifiant du message n\'est pas sp&eacute;cifi&eacute;',
	'No_such_folder' => 'Ce dossier n\'existe pas',
	'No_folder' => 'Le dossier n\'a pas &eacute;t&eacute; sp&eacute;cifi&eacute;e',

	'Mark_all' => 'Tout cocher',
	'Unmark_all' => 'Tout d&eacute;cocher',

	'Confirm_delete_pm' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce message ?',
	'Confirm_delete_pms' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ces messages ?',

	'Inbox_size' => 'Bo&icirc;te de R&eacute;ception [%d%% pleine]', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Bo&icirc;te d\'envoi [%d%% pleine]',
	'Savebox_size' => 'Bo&icirc;te de Sauvegarde [%d%% pleine]',

// Partie concernant les Profils et l'Inscription
	'Viewing_user_profile' => 'Vue du profil :: %s', // %s is username
	'About_user' => 'Tout &agrave; propos de %s', // %s is username
// Partie concernant l'administration rapide du Profil
	'Quick_admin_options' => 'Administration rapide de l\'utilisateur',
	'Admin_edit_profile' => '&Eacute;diter le profil',
	'Admin_edit_permissions' => '&Eacute;diter les permissions',
	'User_active' => 'Le membre <b>est</b> actif',
	'User_not_active' => 'Le membre <b>n\'est pas</b> actif',
	'Username_banned' => 'Le pseudonyme <b>est</b> banni',
	'Username_not_banned' => 'Le pseudonyme <b>n\'est pas</b> banni',
	'USER_BAN' => 'Bannir',
	'USER_UNBAN' => 'D&eacute;bannir',
	'User_email_banned' => 'L\'adresse mail de l\'utilisateur [ %s ] <b>est</b> bannie',
	'User_email_not_banned' => 'L\'adresse mail de l\'utilisateur <b>n\'est pas</b> bannie',
// Fin de la partie concernant l'administration rapide
	'Preferences' => 'Pr&eacute;f&eacute;rences',
	'Items_required' => 'Les articles marqu&eacute;s avec une ast&eacute;rique <b>(*)</b> sont n&eacute;cessaires.',
	'Registration_info' => 'Renseignements sur l\'inscription',
	'Profile_info' => 'Informations sur le profil',
	'Profile_info_warn' => 'Ces informations seront visibles par tous.',
	'Avatar_panel' => 'Avatar',
	'Avatar_gallery' => 'Galerie d\'avatar',

	'Website' => 'Site web',
	'Location' => 'Localisation',
	'Contact' => 'Contact',
	'Email_address' => 'Adresse Mail',
	'Email' => 'Mail',
	'Send_private_message' => 'Envoyer un Message Priv&eacute;',
	'Hidden_email' => '[ Cach&eacute; ]',
	'Search_user_posts' => 'Rechercher les messages post&eacute;s par cet utilisateur',
	'Interests' => 'Int&eacute;r&ecirc;ts',
	'Occupation' => 'Occupation',
	'Poster_rank' => 'Rang du posteur',

	'Total_posts' => 'Total des Messages',
	'User_post_pct_stats' => '%.2f%% au total', // 1.25% of total
	'User_post_day_stats' => '%.2f messages par jour', // 1.5 posts per day
	'Search_user_posts' => 'Trouver tous les messages de %s', // Find all posts by username
	'Search_user_topics_started' => 'Trouver tous les sujets commenc&eacute;s par %s', // Find all topics started by username

	'Wrong_Profile' => 'Vous ne pouvez modifier que votre propre profil.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Activit&eacute;',
	'Invision_Communicate' => 'Me Contacter',
	'Invision_Info' => 'Informations',
	'Invision_Member_Group' => 'Groupe(s) du membre',
	'Invision_Member_Title' => 'Rang du membre',
	'Invision_Most_Active' => 'Plus actif dans',
	'Invision_Most_Active_Posts' => '%s messages dans ce forum',
	'Invision_Details' => 'Statistiques des Messages',
	'Invision_PPD_Stats' => 'Messages par jour',
	'Invision_Signature' => 'Signature',
	'Invision_Website' => 'Site Personnel',
	'Invision_Total_Posts' => 'Total des messages',
	'Invision_User_post_pct_stats' => '(%.2f%% de vos messages)',
	'Invision_User_post_day_stats' => '%.2f messages par jour',
	'Invision_Search_user_posts' => 'Trouver tous les messages de ce membre',
	'Invision_Posting_details' => 'D&eacute;tails du message',
// Invision View Profile - END

	'Only_one_avatar' => 'Un seul type d\'avatar peut &ecirc;tre sp&eacute;cifi&eacute;',
	'File_no_data' => 'Le fichier &agrave; cette adresse ne contient pas de donn&eacute;e',
	'No_connection_URL' => 'La connection ne peut &ecirc;tre faite avec l\'adresse donn&eacute;e',
	'Incomplete_URL' => 'L\'adresse que vous avez entr&eacute; est incompl&egrave;te',
	'Wrong_remote_avatar_format' => 'L\'adresse de votre avatar n\'est pas valide',
	'No_send_account_inactive' => 'D&eacute;sol&eacute;, mais votre mot de passe ne peut vous &ecirc;tre rendu car votre compte est actuellement inactif. Veuillez contacter l\'administrateur du forum pour plus d\'informations.',

	'Always_smile' => 'Toujours autoriser les Smileys',
	'Always_html' => 'Toujours autoriser le HTML',
	'Always_bbcode' => 'Toujours autoriser les BBCodes',
	'Always_add_sig' => 'Toujours attacher ma signature',
	'Always_notify' => 'Toujours m\'avertir des r&eacute;ponses',
	'Always_notify_explain' => 'M\'envoyer un mail lorsque quelqu\'un r&eacute;pond dans un sujet o&ugrave; vous avez post&eacute;. Cette option peut &ecirc;tre modifi&eacute;e &agrave; chaque message..',

	'Board_style' => 'Style',
	'Board_lang' => 'Langue',
	'No_themes' => 'Aucun Thème dans la Base de Donn&eacute;e',
	'Timezone' => 'Fuseau horaire',
	'Date_format' => 'Format de la date',
	'Date_format_explain' => 'La syntaxe est identique &agrave; celle utilis&eacute;e par la fonction PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>.',
	'Signature' => 'Signature',
	'Signature_explain' => 'La signature est un bloc de texte qui peut &ecirc;tre ajout&eacute; &agrave; vos messages. Il y a une limite de %d caract&egrave;s',
	'Public_view_email' => 'Toujours montrer mon adresse mail',

	'Current_password' => 'Mot de passe actuel',
	'New_password' => 'Nouveau mot de passe',
	'Confirm_password' => 'Confirmation du mot de passe',
	'Confirm_password_explain' => 'Vous devez confirmer votre mot de passe actuel si vous voulez le changer ou changer votre adresse mail',
	'password_if_changed' => 'Vous devez uniquement donner un nouveau mot de passe si vous voulez le changer',
	'password_confirm_if_changed' => 'Vous devez uniquement confirmer votre mot de passe si vous voulez le changer',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Montre une petite image sous votre nom quand vous postez un message. Une seule image peut &ecirc;tre affich&eacute;e en m&ecirc;me temps. Les dimensions maximum sont de %d*%d pixels (largeur*hauteur). Le poids limite maximum d\'un avatar est de %d KB, et doit respecter les dimensions maximum. Les avatars h&eacute;berg&eacute;s &agrave; distance seront automatiquement redimensionn&eacute;es pour s\'adapter aux dimensions du forum.',
	'Upload_Avatar_file' => 'Envoyer un Avatar depuis votre ordinateur',
	'Upload_Avatar_URL' => 'Envoyer un Avatar depuis une adresse',
	'Upload_Avatar_URL_explain' => 'Entrez l\'adresse de l\'image, elle sera enregistr&eacute;e sur ce forum.',
	'Pick_local_Avatar' => 'S&eacute;lectionner un Avatar depuis la galerie',
	'Link_remote_Avatar' => 'Lier &agrave; un Avatar externe',
	'Link_remote_Avatar_explain' => 'Entrez l\'adresse de l\'Avatar &agrave; que vous souhaitez lier.',
	'Avatar_URL' => 'Adresse de l\'Avatar',
	'Select_from_gallery' => 'S&eacute;lectionner l\'Avatar dans la Galerie',
	'View_avatar_gallery' => 'Voir la galerie',

	'Select_avatar' => 'S&eacute;lectionnez un Avatar',
	'Return_profile' => 'Retourner au profil',
	'Select_category' => 'S&eacute;lectionner une cat&eacute;gorie',

	'Delete_Image' => 'Supprimer l\'image',
	'Current_Image' => 'Image actuelle',

	'Notify_on_privmsg' => 'M\'avertir lorsque je re&ccedil;ois un Message Priv&eacute;',
	'Popup_on_privmsg' => 'Ouvrir une fen&ecirc;tre pop-up lorsque je re&ccedil;ois un Message Priv&eacute;',
	'Popup_on_privmsg_explain' => 'Certains th&egrave;mes peuvent ouvrir une fen&ecirc;tre lorsque vous recevez un message priv&eacute;.',
	'Hide_user' => 'Cacher votre statut "en ligne"',

	'Profile_updated' => 'Votre profil a &eacute;t&eacute; mis &agrave; jour',
	'Profile_updated_inactive' => 'Votre profil a &eacute;t&eacute; mis &agrave; jour. Cependant, vous avez chang&eacute; des d&eacute;tails vitaux et votre compte est maintenant inactif. V&eacute;rifiez vos mails pour le r&eacute;activer ou attendez qu\'un administrateur le r&eacute;active.',

	'Password_mismatch' => 'Les mots de passe entr&eacute;s ne correspondent pas.',
	'Current_password_mismatch' => 'Le mot de passe actuel ne correspond avec celui donn&eacute;.',
	'Password_long' => 'Votre mot de passe est trop grand: il doit faire moins de trente-deux caract&egrave;res.',
	'Username_taken' => 'D&eacute;sol&eacute;, mais ce nom d\'utilisateur est d&eacute;j&agrave; pris.',
	'Username_invalid' => 'D&eacute;sol&eacute;, mais ce nom d\'utilisateur contient des caract&egrave;res interdits, comme \'.',
	'Username_disallowed' => 'D&eacute;sol&eacute, mais ce nom d\'utilisateur a &eacute;t&eacute; interdit.',
	'Email_taken' => 'D&eacute;sol&eacute;, mais cette adresse mail est d&eacute;j&agrave; utilis&eacute;e.',
	'Email_banned' => 'D&eacute;sol&eacute;, mais cette adresse mail a &eacute;t&eacute; bannie.',
	'Email_invalid' => 'D&eacute;sol&eacute;, mais cette adresse mail est invalide.',
	'Signature_too_long' => 'Votre signature est trop longue.',
	'Fields_empty' => 'Vous devez remplir <b>tous</b> les champs n&eacute;cessaires.',
	'Avatar_filetype' => 'L\'extension de l\'avatar doit &ecirc;tre .jpg, .gif ou .png',
	'Avatar_filesize' => 'La taille de l\'avatar doit &ecirc;tre inf&eacute;rieure &agrave; %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'La taille de l\'avatar doit &ecirc;tre inf&eacute;rieure ou &eacute;gale &agrave; %d pixels de largeur et %d pixels de hauteur',

	'Welcome_subject' => 'Bienvenue sur le forum de %s', // Welcome to my.com forums
	'New_account_subject' => 'Nouveau compte',
	'Account_activated_subject' => 'Compte Activ&eacute;',

	'Account_added' => 'Merci de vous &ecirc;tre enregistr&eacute;. Votre compte a &eacute;t&eacute; cr&eacute;e. Vous pouvez d&egrave;s maintenant vous connecter avec votre nom d\'utilisateur et votre mot de passe',
	'Account_inactive' => 'Votre compte a bien &eacute;t&eacute; cr&eacute;e, mais ce forum demande une activation. Une clef d\'activation a &eacute;t&eacute; envoy&eacute; &agrave; l\'adresse mail donn&eacute;e. Veuillez v&eacute;rifier vos mails pour plus d\'informations',
	'Account_inactive_admin' => 'Votre compte a bien &eacute;t&eacute; cr&eacute;e, mais ce forum demande une activation par l\'administration. Un mail leur a &eacute;t&eacute; envoy&eacute; et vous serez inform&eacute; lorsque votre compte sera activ&eacute;',
	'Account_active' => 'Votre compte a bien &eacute;t&eacute; activ&eacute;. Merci de votre inscription',
	'Account_active_admin' => 'Le compte a &eacute;t&eacute; activ&eacute;',
	'Reactivate' => 'R&eacute;activez votre compte !',
	'Already_activated' => 'Ce compte est d&eaucte;j&agrave; actif',
	'COPPA' => 'Votre compte a &eacute;t&eacute cr&eacute;e mais il doit &ecirc;tre approuv&eacute;. V&eacute;rifier vos mails pour plus d\'informations.',

	'Registration' => 'R&egrave;glement de l\'Inscription',
	'Reg_agreement' => 'Les administrateurs et mod&eacute;rateurs de ce forum s\'efforceront de supprimer ou d\'&eacute;diter tous les messages &agrave; caract&egrave;re r&eacute;pr&eacute;hensible aussi rapidement que possible. Toutefois, il leur est impossible de passer en revue tous les messages. Vous admettez donc que tous les messages post&eacute;s sur ces forums expriment la vue et l\'opinion de leurs auteurs respectifs, et non pas des administrateurs, ou mod&eacute;rateurs, ou webmestres (except&eacute; les messages post&eacute;s par eux-m&ecirc;me) et par cons&eacute;quent ils ne peuvent &ecirc;tre tenus pour responsables.<br /><br /><font color="red"><b>Contenu de vos messages</b></font><br />Vous consentez &agrave; ne pas poster de messages injurieux, obsc&egrave;nes, vulgaires, diffamatoires, mena&ccedil;ants, sexuels ou tout autre message qui violerait les lois applicables. Le faire peut vous conduire &agrave; &ecirc;tre banni imm&eacute;diatement et de fa&ccedil;on permanente (et votre fournisseur d\'acc&egrave;s &agrave; internet en sera inform&eacute;). L\'adresse IP de chaque message est enregistr&eacute;e afin d\'aider &agrave; faire respecter ces conditions. Vous &ecirc;tes d\'accord sur le fait que le webmestre, l\'administrateur et les mod&eacute;rateurs de ce forum ont le droit de supprimer, &eacute;diter, d&eacute;placer ou verrouiller n\'importe quel sujet de discussion &agrave; tout moment. En tant qu\'utilisateur, vous &ecirc;tes d\'accord sur le fait que toutes les informations que vous donnerez ci-apr&egrave;s seront stock&eacute;es dans une base de donn&eacute;es. Cependant, ces informations ne seront divulgu&eacute;es &agrave; aucune tierce personne ou soci&eacute;t&eacute; sans votre accord. Le webmestre, l\'administrateur, et les mod&eacute;rateurs ne peuvent pas &ecirc;tre tenus pour responsables si une tentative de piratage informatique conduit &agrave; l\'acc&egrave;s de ces donn&eacute;es.<br /><br /><font color="red"><b>Informations collect&eacute;es et Cookies</b></font><br />Ce forum utilise les cookies pour stocker des informations sur votre ordinateur. Ces cookies ne contiendront aucune information que vous aurez entr&eacute;e ci-apr&egrave;s, ils servent uniquement &agrave; am&eacute;liorer le confort d\'utilisation. L\'adresse mail est uniquement utilis&eacute;e afin de confirmer les d&eacute;tails de votre inscription ainsi que votre mot de passe (et aussi pour vous envoyer un nouveau mot de passe dans le cas o&ugrave; vous l\'oublieriez).<br /><br /><font color="red"><b>Vous acceptez...</b></font><br />En vous inscrivant, vous vous portez garant du fait d\'&ecirc;tre en accord avec le r&egrave;glement ci-dessus.',

	'Agreement' => 'Je l\'accepte',
	'Agree_under_13' => 'J\'accepte les r&egrave;gles et j\'ai <b>moins</b> de 13 ans',
	'Agree_over_13' => 'Continuer',
	'Agree_not' => 'Arr&ecirc;ter',
	'Agree_checkbox' => 'Je suis d\'accord avec ces r&egrave;gles.',
	'Agree_checkbox_Error' => 'Vous devez cocher la case d\'acceptation en bas de la page pour vous inscrire !',

	'Wrong_activation' => 'La clef d\'activation ne correspond pas avec celle sauvegard&eacute;e dans la base de donn&eacute;e.',
	'Send_password' => 'Envoyez-moi un nouveau mot de passe',
	'Password_updated' => 'Un nouveau mot de passe a &eacute;t&eacute; cr&eacute;; veuillez v&eacute;rifier vos mails pour plus de d&eacute;tails.',
	'No_email_match' => 'L\'adresse mail que vous avez entr&eacute;e ne correspond pas avec celle stock&eacute;e dans la base de donn&eacute;e pour cet utilisateur.',
	'New_password_activation' => 'Activation du nouveau mot de passe',
	'Password_activated' => 'Votre compte a &eacute;t&eacute; r&eacute;activ&eacute;. Pour vous connecter, veuillez utiliser le mot de passe donn&eacute; dans le mail que vous avez re&ccedil;u.',

	'Send_email_msg' => 'Envoyer un mail',
	'No_user_specified' => 'Aucun utilisateur sp&eacute;cifi&eacute;',
	'User_prevent_email' => 'Cet utilisateur ne veut pas recevoir de mail. Essayez de lui envoyer un message priv&eacute;.',
	'User_not_exist' => 'Cet utilisateur n\'existe pas.',
	'CC_email' => 'M\'envoyer une copie du message',
	'Email_message_desc' => 'Ce message sera envoy&eacute; en texte simple, sans HTML ni BBCode. L\'adresse de retour pour ce message sera votre adresse mail.',
	'Flood_email_limit' => 'Impossible d\'envoyer un mail actuellement. Veuillez r&eacute;essayer plus tard.',
	'Recipient' => 'R&eacute;cepteur',
	'Email_sent' => 'L\'mail a &eacute;t&eacute; envoy&eacute;.',
	'Send_Email' => 'Envoyer un mail',
	'Empty_sender_email' => 'Vous devez sp&eacute;cifier une adresse d\'exp&eacute;diteur.',
	'Empty_subject_email' => 'Vous devez sp&eacute;cifier un sujet.',
	'Empty_message_email' => 'Vous devez entrer un message !',

// Visual confirmation system strings
	'CONFIRM_CODE_WRONG' => 'Le code de confirmation que vous avez entr&eacute; est incorrect',
	'TOO_MANY_ATTEMPTS' => 'Vous avez d&eacute;pass&eacute; le nombre d\'essais pour cette session. Merci de r&eacute;essayer plus tard.',
	'CONFIRM_CODE_IMPAIRED' => 'Si vous &ecirc;tes visuellement d&eacute;ficient ou si vous ne pouvez pas lire correctement le code, essayez de %scontacter l\'administrateur%s.',
	'CONFIRM_CODE' => 'Code de confirmation',
	'CONFIRM_CODE_EXPLAIN' => 'Entrez le code exactement comme vous le voyez. Le code est sensible &agrave; la casse, et il n\'y a pas de Z&eacute;ro.',

// Memberlist
	'Select_sort_method' => 'S&eacute;lectionnez une m&eacute;thode de classement',
	'Sort' => 'Classement',
	'SORT_TOP_TEN' => 'Dix meilleurs posteurs',
	'SORT_JOINED' => 'Date d\'inscription',
	'SORT_USERNAME' => 'Nom d\'utilisateur',
	'SORT_LOCATION' => 'Localisation',
	'SORT_POSTS' => 'Total des Messages',
	'SORT_EMAIL' => 'Mail',
	'SORT_WEBSITE' => 'Site Web',
	'Sort_Ascending' => 'Croissant',
	'Sort_Descending' => 'D&eacute;croissant',
	'Order' => 'Ordre',

// Group control panel
	'Group_Control_Panel' => 'Panneau de contr&ocirc;le des Groupes',
	'Group_member_details' => 'D&eacute;tails d\'adh&eacute;sion au groupe',
	'Group_member_join' => 'Rejoindre un groupe',

	'Group_Information' => 'Informations',
	'Group_name' => 'Nom du groupe',
	'Group_description' => 'Description du groupe',
	'Group_membership' => 'Votre statut',
	'Group_Members' => 'Membres du groupe',
	'Group_Moderator' => 'Mod&eacute;rateur du groupe',
	'Pending_members' => 'Membres en attente',

	'Group_type' => 'Type de groupe',
	'Group_open' => 'Groupe Ouvert',
	'Group_closed' => 'Groupe Ferm&eacute;',
	'Group_hidden' => 'Groupe Invisible',

	'Current_memberships' => 'Membre du groupe',
	'Non_member_groups' => 'Non-membre du groupe',
	'Memberships_pending' => 'Adh&eacute;sion en attente',

	'No_groups_exist' => 'Aucun groupe n\'existe',
	'Group_not_exist' => 'Ce groupe n\'existe pas',

	'Join_group' => 'Rejoindre ce groupe',
	'No_group_members' => 'Ce groupe n\'a pas de membre',
	'Group_hidden_members' => 'Ce groupe est invisible, vous ne pouvez pas voir ses membres',
	'No_pending_group_members' => 'Ce groupe n\'a pas de membre en attente',
	'Group_joined' => 'Vous vous &ecirc;tes correctement inscrit &agrave; ce groupe.<br />Vous serez averti lorsque votre inscription sera approuv&eacute;e par le mod&eacute;rateur du groupe.',
	'Group_request' => 'Une requ&ecirc;te pour rejoindre votre groupe a &eacute;t&eacute; faite.',
	'Group_approved' => 'Votre requ&ecirc;te a &eacute;t&eacute; approuv&eacute;e.',
	'Group_added' => 'Vous avez &eacute;t&eacute; admis dans ce groupe.',
	'Already_member_group' => 'Vous &ecirc;tes d&eacute;j&agrave; membre de ce groupe',
	'User_is_member_group' => 'L\'utilisateur est d&eacute;j&agrave; membre de ce groupe',
	'Group_type_updated' => 'Le type du groupe a &eacute;t&eacute; correctement mis &agrave; jour.',
	'Could_not_add_user' => 'L\'utilisateur s&eacute;lectionn&eacute; n\'existe pas.',
	'Could_not_anon_user' => 'Les invit&eacute;s ne peuvent rejoindre de groupe.',
	'Confirm_unsub' => '&Ecirc;tes-vous s&ucirc;r de vouloir quitter de ce groupe ?',
	'Confirm_unsub_pending' => 'Votre inscription n\'est pas encore approuv&eacute;e, &ecirc;tes-vous s&ucirc;r de vouloir vous d&eacute;sinscrire de ce groupe ?',
	'Unsub_success' => 'Vous avez &eacute;t&eacute; d&eacute;sinscrit de ce groupe.',
	'Approve_selected' => 'Approuver la s&eacute;lection',
	'Deny_selected' => 'Refuser la s&eacute;lection',
	'Not_logged_in' => 'Vous devez &ecirc;tes connect&eacute; pour rejoindre un groupe.',
	'Remove_selected' => 'Retirer la s&eacute;lection',
	'Add_member' => 'Ajouter un membre',
	'Not_group_moderator' => 'Vous n\'&ecirc;tes pas mod&eacute;rateur du groupe, vous ne pouvez pas effectuer cette action.',
	'Login_to_join' => 'Connectez-vous pour rejoindre ou g&eacute;rer les adh&eacute;sions au groupe',
	'This_open_group' => 'Ce groupe est ouvert; cliquez pour faire une demande d\'adh&eacute;sion',
	'This_closed_group' => 'Ce groupe est ferm&eacute;: %s',
	'This_hidden_group' => 'Ce groupe est invisible: %s',
	'Member_this_group' => 'Vous &ecirc;tes membre de ce groupe',
	'Pending_this_group' => 'Votre adh&eacute;sion &agrave; ce groupe est en attente',
	'Are_group_moderator' => 'Vous &ecirc;tes le mod&eacute;rateur du groupe',
	'None' => 'Aucun',
	'Subscribe' => 'S\'inscrire',
	'Unsubscribe' => 'Se d&eacute;sinscrire',
	'View_Information' => 'Voir les informations',

// Search
	'Search_query' => 'Rechercher',
	'Search_options' => 'Options de la recherche',

	'Search_keywords' => 'Recherche par mots-clefs',
	'Search_keywords_explain' => 'Vous pouvez utiliser <u>AND</u> pour d&eacute;terminer les mots qui <i>doivent</i> &ecirc;tre visibles dans les r&eacute;sultats, <u>OR</u> pour d&eacute;terminer les mots qui <i>peuvent</i> &ecirc;tre visibles dans les r&eacute;sultats et <u>NOT</u> pour d&eacute;terminer les mots qui <i>ne doivent pas</i> &ecirc;tre visibles dans les r&eacute;sultats. Utilisez * comme un joker pour des recherches partielles.',
	'Search_author' => 'Rechercher par Auteur',
	'Search_author_explain' => 'Utilisez * comme un joker pour des recherches partielles.',
	'Search_author_topic_starter' => 'Rechercher uniquement les sujets commenc&eacute;s par cet auteur',

	'Search_for_any' => 'Rechercher n\'importe lequel de ces termes',
	'Search_for_all' => 'Rechercher tous les termes',
	'Search_title_msg' => 'Rechercher dans les titres et dans les messages',
	'Search_title_only' => 'Rechercher uniquement dans les titres',
	'Search_msg_only' => 'Rechercher uniquement dans les messages',

	'Return_first' => 'Retourner les ', // suivit par xxx caract&egrave;res dans le champs de s&eacute;lection
	'characters_posts' => 'premiers caract&egrave;res des messages.',

	'Search_previous' => 'Rechercher les messages ayant ', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Classer par ',
	'Sort_Time' => 'Date d\'envoi',
	'Sort_Post_Subject' => 'Sujet du message',
	'Sort_Topic_Title' => 'Titre du sujet',
	'Sort_Author' => 'Auteur',
	'Sort_Forum' => 'Forum',

	'Display_results' => 'Afficher sous forme de ',
	'All_available' => 'Tous disponibles',
	'No_searchable_forums' => 'Vous n\'avez pas la permission de chercher dans un forum de ce site.',

	'No_search_match' => 'Aucun messages ne correspond &agrave; vos crit&egrave;res de recherche.',
	'Found_search_match' => '%d r&eacute;sultat trouv&eacute;', // eg. Search found 1 match
	'Found_search_matches' => '%d r&eacute;sultats trouv&eacute;s', // eg. Search found 24 matches

	'Close_window' => 'Fermer la Fen&ecirc;tre',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'D&eacute;sol&eacute, mais seuls les %s peuvent poster des annonces dans ce forum.',
	'Sorry_auth_sticky' => 'D&eacute;sol&eacute, mais seuls les %s peuvent poster des notes dans ce forum.',
	'Sorry_auth_read' => 'D&eacute;sol&eacute, mais seuls les %s peuvent lire les sujets de ce forum.',
	'Sorry_auth_post' => 'D&eacute;sol&eacute, mais seuls les %s peuvent poster des sujets dans ce forum.',
	'Sorry_auth_reply' => 'D&eacute;sol&eacute, mais seuls les %s peuvent r&eacute;pondre aux sujets dans ce forum.',
	'Sorry_auth_edit' => 'D&eacute;sol&eacute, mais seuls les %s peuvent &eacute;diter les messages dans ce forum.',
	'Sorry_auth_delete' => 'D&eacute;sol&eacute, mais seuls les %s peuvent supprimer les messages dans ce forum.',
	'Sorry_auth_vote' => 'D&eacute;sol&eacute, mais seuls les %s peuvent voter dans ce forum.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>Invit&eacute;s</b>',
	'Auth_Registered_Users' => '<b>Membres</b>',
	'Auth_Self_Users' => '<b>Utilisateurs sp&eacute;cifique</b>',
	'Auth_Users_granted_access' => '<b>Utilisateurs avec un acc&egrave;s sp&eacute;cial</b>',
	'Auth_Moderators' => '<b>Mod&eacute;rateurs</b>',
	'Auth_Administrators' => '<b>Administrateurs</b>',

	'Not_Moderator' => 'Vous n\'&ecirc;tes pas mod&eacute;rateur de ce forum.',
	'Not_Authorized' => 'Non Autoris&eacute;',

	'You_been_banned' => 'Vous avez &eacute;t&eacute; banni de ce forum.<br />Veuillez contacter l\'administrateur du site ou du forum pour plus d\'informations.',

// Viewonline
	'Reg_users_zero_online' => 'Il n\'y a aucun utilisateur enregistr&eacute; et ', // There are 0 Registered and
	'Reg_users_online' => 'Il y a %d utilisateurs enregistr&eacute;s et ', // There are 2+ Registered and
	'Reg_user_online' => 'Il y a %d utilisateur enregistr&eacute; et ', // There is 1 Registered and
	'Hidden_users_zero_online' => 'Aucun utilisateur invisible en ligne', // 0 Hidden users online
	'Hidden_users_online' => '%d utilisateurs invisibles en ligne', // 2+ Hidden users online
	'Hidden_user_online' => '%d utilisateur invisible en ligne', // 1 Hidden users online
	'Guest_users_online' => 'Il y a %d invit&eacute;s en ligne', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Il n\'y a aucun invit&eacute; en ligne', // There are 0 Guest users online
	'Guest_user_online' => 'Il y a %d invit&eacute; en ligne', // There is 1 Guest user online
	'No_users_browsing' => 'Aucun utilisateur ne parcourt actuellement le forum.',

	'ONLINE_EXPLAIN' => 'Ces donn&eacute;es sont bas&eacute;es sur les utilisateurs actifs ces ' . intval(ONLINE_REFRESH / 60) . ' derni&egrave;res minutes',
	'ONLINE_TODAY' => 'Ces donn&eacute;es sont bas&eacute;es sur les utilisateurs actifs aujourd\'hui',

	'Forum_Location' => 'Position sur le forum',
	'Last_updated' => 'Derni&egrave;re mise &agrave; jour',

	'Forum_index' => 'Index du forum',
	'Portal' => 'Page d\'accueil',
	'Logging_on' => 'Se connecte',
	'Posting_message' => 'Poste un message',
	'Searching_forums' => 'Recherche sur le forum',
	'Viewing_profile' => 'Regarde un profil',
	'Viewing_HACKSLIST' => 'Regarde les cr&eacute;dits',
	'Viewing_online' => 'Regarde qui est en ligne',
	'Viewing_member_list' => 'Regarde la liste des membres',
	'Viewing_priv_msgs' => 'Regarde ses messages priv&eacute;s',
	'Viewing_FAQ' => 'Regarde la Foire aux Questions',
	'Viewing_KB' => 'Regarde la base de connaissances',
	'Viewing_RSS' => 'Flux RSS',


// Moderator Control Panel
	'Mod_CP' => 'Panneau de Contr&ocirc;le des Mod&eacute;rateurs',
	'Mod_CP_explain' => 'Vous pouvez accomplir des op&eacute;rations de mod&eacute;ration de masse. Vous pouvez verrouiller, d&eacute;verrouiller, d&eacute;placer ou supprimer n\'importe quel nombre de sujet.',

	'Select' => 'S&eacute;lectionner',
	'Delete' => 'Supprimer',
	'Move' => 'D&eacute;placer',
	'Copy' => 'Copier',
	'Lock' => 'Verrouiller',
	'Unlock' => 'D&eacute;verrouiller',

	'Topics_Removed' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; correctement supprim&eacute;s.',
	'Topics_Locked' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; correctement verrouill&eacute;s.',
	'Topics_Moved' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; correctement d&eacute;plac&eacute;s.',
	'Topics_Unlocked' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; correctement d&eacute;verrouill&eacute;s.',
	'No_Topics_Moved' => 'Aucun sujet n\'a &eacute;t&eacute; d&eacute;plac&eacute;s.',

	'Confirm_delete_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer le(s) sujet(s) s&eacute;lectionn&eacute;(s) ?',
	'Confirm_lock_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir verrouiller le(s) sujet(s) s&eacute;lectionn&eacute;(s) ?',
	'Confirm_unlock_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;verrouiller le(s) sujet(s) s&eacute;lectionn&eacute;(s) ?',
	'Confirm_move_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;placer le(s) sujet(s) s&eacute;lectionn&eacute;(s) ?',

	'Move_to_forum' => 'D&eacute;placer vers le forum',
	'Leave_shadow_topic' => 'Laisser un sujet traceur dans l\'ancien forum.',

	'Split_Topic' => 'Panneau de Contr&ocirc;le des Sujets &agrave; Diviser',
	'Split_Topic_explain' => 'En utilisant le formulaire ci-dessous, vous pouvez diviser un sujet en deux soit en s&eacute;lectionnant les messages individuellement, soit en divisant &agrave; partir d\'un message.',
	'Split_title' => 'Titre du nouveau sujet',
	'Split_forum' => 'Forum du nouveau sujet',
	'Split_posts' => 'Diviser les messages s&eacute;lectionn&eacute;s',
	'Split_after' => 'Diviser &agrave; partir du message s&eacute;lectionn&eacute;',
	'Topic_split' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; correctement divis&eacute;',

	'Too_many_error' => 'Vous avez s&eacute;lectionn&eacute; trop de messages. Vous ne pouvez s&eacute;lectionner qu\'un seul message &agrave; partir duquel diviser le sujet !',

	'None_selected' => 'Vous n\'avez pas s&eacute;lectionn&eacute; de sujet pour cette op&eacute;ration. Veuillez revenir en arri&egrave;re et en s&eacute;lectionner au moins un.',
	'New_forum' => 'Nouveau forum',

	'This_posts_IP' => 'Adresse IP de ce message',
	'Other_IP_this_user' => 'Autres adresses IP depuis lequel cet utilisateur a post&eacute;',
	'Users_this_IP' => 'Utilisateurs postant depuis cette adresse IP',
	'IP_info' => 'Information sur l\'IP',
	'Lookup_IP' => 'Chercher l\'adresse IP',

// Erreurs (not related to a specific failure on a page)
	'Information' => 'Information',
	'Critical_Information' => 'Information Critique',

	'General_Error' => 'Erreur G&eacute;n&eacute;rale',
	'Critical_Error' => 'Erreur Critique',
	'An_error_occured' => 'Une errreur est survenue.',
	'A_critical_error' => 'Une erreur critique est survenue.',
	'Admin_reauthenticate' => 'Pour administrer le site, vous devez vous reconnecter.',

	'Topic_description' => 'Description de votre sujet',
// 'Description' => 'Topic Description',

	'Guestbook' => 'Livre d\'Or',
	'Viewing_guestbook' => 'Lit le Livre d\'Or',

	'Warn_new_post' => 'Il y a eu au moins une r&eacute;ponse dans ce sujet. Veuillez regarder les nouvelles r&eacute;ponses avant de r&eacute;envoyer votre message.',

	'Today_at' => '<b class="date-today">Aujourd\'hui</b> &agrave; ',
	'Yesterday_at' => '<b class="date-yesterday">Hier</b> &agrave: ',
	'TODAY' => '<b class="date-today">Aujourd\'hui</b>',
	'YESTERDAY' => '<b class="date-yesterday">Hier</b>',

// Birthday - BEGIN
	'Birthday' => 'Anniversaire',
	'No_birthday_specify' => 'Non sp&eacute;cifi&eacute;',
	'Age' => '&Acirc;ge',
	'Wrong_birthday_format' => 'Le format de la date d\'anniversaire entr&eacute;e est incorrect.',
	'Birthday_to_high' => 'D&eacute;sol&eacute;, mais ce site n\'accepte que les personnes ayant moins de %d ans.',
	'Birthday_require' => 'Votre date de naissance est n&eacute;cessaire sur ce site.',
	'Birthday_to_low' => 'D&eacute;sol&eacute;, mais ce site n\'accepte que les personnes ayant plus de %d ans.',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
	'Birthday_greeting_today' => 'Nous voudrions vous souhaiter un joyeux anniversaire pour vos vos %s ans.',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Nous voudrions vous souhaiter un joyeux anniversaire pour vos vos %s le %s malgr&eacute; le retard.',//%s is substituted with the users age, and birthday
	'Greeting_Messaging' => 'F&eacute;licitations',
	'Birthday_today' => 'Utilisateurs f&ecirc;tant leur anniversaire aujourd\'hui:',
	'Birthday_week' => 'Utilisateurs f&ecirc;tant leur anniversaire dans les %d prochains jours:',
	'Nobirthday_week' => 'Aucun utilisateur ne f&ecute;te son anniversaire dans les %d prochains jours.', // %d is substituted with the number of days
	'Nobirthday_today' => 'Aucun utilisateur ne f&ecirc;te son anniversaire aujourd\'hui.',
	'Year' => 'Ann&eacute;e',
	'Month' => 'Mois',
	'Day' => 'Jour',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Genre',//used in users profile to display which gender he/she is
	'Male' => 'Homme',
	'Female' => 'Femme',
	'No_gender_specify' => 'Non Sp&eacute;cifi&eacute;',
	'Gender_require' => 'Votre genre est n&eacute;cessaire sur ce site.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Liste les utilisateurs ayant vu ce sujet',
	'Topic_time' => 'Derni&egrave;re vue',
	'Topic_count' => 'Compteur de vue',
	'Topic_view_count' => 'Compteur de vue de ce sujet',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Gracier l\'utilisateur',
	'Give_Y_card' => 'Donner l\'avertissement &agrave; #%d',
	'Give_R_card' => 'Bannir cet utilisateur',
	'Ban_update_sucessful' => 'La liste des bannissements a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s.',
	'Ban_update_green' => 'Cet utilisateur a &eacute;t&eacute; graci&eacute;.',
	'Ban_update_yellow' => 'Cet utilisateur a re&ccedil;u un avertissement, et en a maintenant %d sur un maximum de %d autoris&eacute;s.',
	'Ban_update_red' => 'Cet utilisateur a &eacute;t&eacute; banni.',
	'Ban_reactivate' => 'Votre compte a &eacute;t&eacute; graci&eacute;.',
	'Ban_warning' => 'Vous avez re&ccedil;u un avertissement.',
	'Ban_blocked' => 'Votre compte est maintenant bloqu&eacute;.',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
	'Rules_ban_can' => 'Vous <b>pouvez</b> bannir d\'autres utilisateurs',
	'Rules_greencard_can' => 'Vous <b>pouvez</b> d&eacute;bannir des utilisateurs',
	'Rules_bluecard_can' => 'Vous <b>pouvez</b> reporter les messages aux mod&eacute;rateurs',
	'user_no_email' => 'L\'utilisateur n\'a pas d\'adresse mail, le message n\'a donc pas pu &ecirc;tre envoy&eacute;. Vous devriez essayer de lui envoyer un message priv&eacute;.',
	'user_already_banned' => 'L\'utilisateur s&eacute;lectionn&eacute; est d&eacute;j&agrave; banni.',
	'Ban_no_admin' => 'Cet utilisateur est un administrateur et ne peut &ecirc;tre ni averti ni banni.',
	'Give_b_card' => 'Reporter ce message aux mod&eacute;rateurs de ce forum',
	'Clear_b_card' => 'Ce message a %d rapports. Si vous cliquez sur ce bouton vous les supprimerez.',
	'No_moderators' => 'Le forum n\'a pas de mod&eacute;rateur, impossible d\'envoyer un rapport.',
	'Post_reported' => 'Ce message a &eacute;t&eacute; report&eacute; &agrave; %d mod&eacute;rateurs',
	'Post_reported_1' => 'Ce message a &eacute;t&eacute; report&eacute; au(x) mod&eacute;rateur(s).',
	'Post_report' => 'Notification de R&eacute;ponse', //Subject in email notification
	'Post_reset' => 'Les rapports sur ce message ont &eacute;t&eacute; supprim&eacute;s.',
	'Search_only_bluecards' => 'Rechercher uniquement les messages avec rapport(s)',
	'Send_message' => 'Cliquez %sici%s pour &eacute;crire un message aux mod&eacute;rateurs ou <br />',
	'Send_PM_user' => 'Cliquez %sici%s pour &eacute;crire un message priv&eacute; &agrave; l\'utilisateur ou',
	'Link_to_post' => 'Cliquez %sici%s pour aller au message report&eacute;
--------------------------------

',
	'Post_a_report' => 'Envoyer un rapport',
	'Report_stored' => 'Votre rapport a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s',
	'Send_report' => 'Cliquez %sici%s pour revenir au message original',
	'Red_card_warning' => 'Vous &ecirc;tes sur le point de donner &agrave; l\'utilisateur: %s un carton rouge, ce qui le bannira, &ecirc;tes-vous s&ucirc;r ?',
	'Yellow_card_warning' => 'Vous &ecirc;tes sur le point de donner &agrave; l\'utilisateur: %s un carton jaune, cela lui donnera un avertissement, &ecirc;tes-vous s&ucirc;r ?',
	'Green_card_warning' => 'Vous &ecirc;tes sur le point de donner &agrave; l\'utilisateur: %s un carton vert, cela d&eacute;bannira l\'utilisateur, &ecirc;tes-vous s&ucirc;r ?',
	'Blue_card_warning' => 'Vous &ecirc;tes sur le point de reporter un message aux mod&eacute;rateurs, &ecirc;tes-vous s&ucirc;r de vouloir continuer ?',
	'Clear_blue_card_warning' => 'Vous &ecirc;tes sur le point de supprimer les rapports sur ce message, &ecirc;tes-vous s&ucirc;r de vouloir continuer ?',
	'Warnings' => 'Avertissements: %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Banni', //shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Derni&egrave;re visite',
	'Hidde_last_logon' => 'Cach&eacute;',
	'Never_last_logon' => 'jamais',
	'Users_today_zero_total' => 'Personne n\'a visit&eacute; ce site aujourd\'hui.', #hey, WTF? Si je vois ce message, c'est que je suis dessus non ._. ?
	'Users_today_total' => 'Au total, <b>%d</b> utilisateurs ont visit&eacute;s ce site aujourd\'hui: ',
	'User_today_total' => 'Au total, <b>Un</b> utilisateur a visit&eacute; ce site aujourd\'hui: ',
	'Users_lasthour_explain' => ', dont %d dans l\'heure.',
	'Users_lasthour_none_explain' => 'mais personne n\'est pass&eacute; depuis une heure.', //shown if no one has visited in the last hour, fill if you like

	'Years' => 'Ann&eacute;es',
	'Year' => 'Ann&eacute;e',
	'Weeks' => 'Semaines',
	'Week' => 'Semaine',
	'Day' => 'Jour',
	'Total_online_time' => 'Temps total en ligne',
	'Last_online_time' => 'Derni&egrave;re Connexion',
	'Number_of_visit' => 'Nombre de visites',
	'Number_of_pages' => 'Nombre de pages vues',
// Last visit - END

	'total_site_hits_key' => '%V% Pages vues depuis %D%.',

	'Message_too_short' => 'Message trop court',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'En ligne',
	'Offline' => 'Hors ligne',
	'Hidden' => 'Invisible',

	'Online_status' => 'Statut',
// End add - Online/Offline/Hidden Mod
	'Download' => 'T&eacute;l&eacute;charger',

//signature editor
	'sig_edit_link' => 'Signature',
	'sig_description' => '&Eacute;diter la Signature (<b>Pr&eacute;visualisation incluse</b>)',
	'sig_edit' => '&Eacute;diter sa Signature',
	'sig_current' => 'Signature actuelle',
	'sig_none' => 'Pas de signature',
	'sig_save' => 'Sauvegarder',
	'sig_save_message' => 'Signature correctement enregistr&eacute;e !',

	'Statistics' => 'Statistiques',

// Start add - Global announcement MOD
	'Globalannounce' => 'Annonce Globale',
	'Globalannounce' => 'Nouvelle Annonce Globale',
// End add - Global announcement MOD
	'Global_Announcements' => 'Annonces globales',
	'Announcements' => 'Annonces',
	'Sticky_Topics' => 'Post-it',
	'Announcements_and_Sticky' => 'Annonces et post-it',
// db_update generator
	'Db_update_generator' => 'G&eacute;n&eacute;rateur de mises &agrave; jour pour la base de donn&eacute;es',
	'Instructions' => 'Instructions',
	'SQL_instructions' => '<p>Ce programme va cr&eacute;er un fichier PHP qui mettra &agrave; jour votre base de donn&eacute;es en passant par votre navigateur. Il y a un certain nombre de choses auxquelles vous devez penser avant d\'ajoueter une requ&ecirc;te SQL dans le champs ci-dessous:<br />Premi&egrave;rement, v&eaciute;rifiez que chaque requ&ecirc;te SQL se termine avec un point-virgule (;). Sinon, le programme l\'ajoutera par d&eacute;faut. Ensuite, v&eacute;rifiez que les tables ont le pr&eacute;fixe "phpbb_". Il sera remplac&eacute; par une partie de code qui s\'adaptera &agrave; chaque pr&eacute;fixe.</p>',
	'Enter_SQL' => '<strong>Requ&ecirc;te SQL</strong>',
	'Enter_SQL_explain' => '<strong>MySQL</strong> est le syst&egrave;me de gestion de bases de donn&eacute;es open-source le plus utilis&eacute; au monde, reconnu pour sa rapidit&eacute; et ses fonctionnalit&eacute;s.',
	'Output_SQL' => '<strong>R&eacute;sultat</strong>',
	'Output_SQL_explain' => 'Copiez et coller le contenu du champ &agrave; droite dans un fichier blanc. Sauvegardez le fichier avec comme nom <u>db_update.php</u> et envoyez-le sur votre serveur. Lancez-le (<b>une fois uniquement !</b>) par votre navigateur.<br /><br />Alternativement, cliquez sur le bouton de t&eacute;l&eacute;chargment pour t&eacute;l&eacute;charger le fichier directement sur votre ordinateur <strong>(recommand&eacute;)</strong>.',
	'Download' => 'T&eacute;l&eacute;charger',

	'TOP_POSTERS' => 'Meilleurs Posteurs',

// TELL A FRIEND
	'TELL_FRIEND' => 'Envoyez un mail &agrave; un ami',
	'TELL_FRIEND_SENDER_USER' => 'Votre nom',
	'TELL_FRIEND_SENDER_EMAIL' => 'Votre adresse mail',
	'TELL_FRIEND_RECEIVER_USER' => 'Le nom de votre ami',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'L\'adresse mail de votre ami',
	'TELL_FRIEND_WRONG_EMAIL' => 'L\'adresse mail n\'est pas valide.',
	'TELL_FRIEND_MSG' => 'Votre message:',
	'TELL_FRIEND_TITLE' => 'Message &agrave; un ami',
	'TELL_FRIEND_BODY' => "Bonjour,\nJ'ai lu le sujet &raquo;{TOPIC}&laquo; sur {SITENAME} et je pensais que &ccedil;a pourrait t'int&eacute;teresser.\n\nVoici le lien: {LINK}\n\nLis-le et r&eacute;pond si tu veux ! Tu peux t\'inscrire si tu n'as pas encore de compte.",

// Begin Thanks Mod
	'thankful' => 'Personne remerciant',
	'thanks_to' => 'Merci pour ce sujet',
	'thanks_end' => ' de la part de:',
	'thanks_alt' => 'Remercier l\'auteur',
	'thanks_add_rate' => 'Remercier l\'auteur pour l\'utilit&eacute; de son sujet.',
	'thanked_before' => 'Vous avez d&eacute;j&agrave; remerci&eacute; ce sujet.',
	'thanks_add' => 'Votre remerciement a &eacute;t&eacute; donn&eacute;.',
	'thanks_not_logged' => 'Vous devez &ecirc;tre connect&eacute; pour remercier un auteur.',
	'thanks2' => 'Merci beaucoup !<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Version Lo-Fi',
// 'Full_Version' => 'Full Version',
	'Full_Version' => 'Voici la version "Lo-Fi" de notre site. Pour voir la version compl&egrave;te avec plus d\'informations, les images et le formatage, veuillez cliquer ici.',
	'quote_lofi' => 'Citer',
	'edit_lofi' => '&Eacute;diter',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Supprimer',
	'profile_lofi' => 'Profil',
	'pm_lofi' => 'MP',
	'email_lofi' => 'Mail',
	'website_lofi' => 'Site Web',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'R&eacute;ponse Rapide',
	'new_pm_lofi' => 'Envoyer un MP',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Attacher ma signature &agrave; mes messages pr&eacute;c&eacute;dents.',
	'Retro_sig_explain' => 'Si vous ajoutez/modifiez votre signature, IcyPhoenix l\'appliquera, par d&eacute;faut, uniquement aux nouveaux messages.',
	'Retro_sig_checkbox' => 'Cochez cette case si vous souhaitez attacher votre signature &agrave; vos messages pr&eacute;c&eacute;dents.',
// End Retro Sig MOD

	'legend' => 'L&eacute;gende',
	'users' => 'Utilisateurs',
//added to autogroup mod
	'No_more' => 'Les utilisateurs ne sont plus autoris&eacute;s',
	'No_add_allowed' => 'L\'ajout automatique d\'utilisateur n\'est pas autoris&eacute;',
	'Join_auto' => 'Vous pouvez rejoindre ce groupe, vos nombre de messages &eacute;tant suffisant',

// merge topics
	'Merge' => 'Fusionner',
	'Merge_topic' => 'Fusionner le sujet',
	'Topics_Merged' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; fusionn&eacute;s.',
	'No_Topics_Merged' => 'Aucun sujet fusionn&eacute;.',
	'Confirm_merge_topic' => '&Ecirc;tes-vous s&ucirc;r de vouloir fusionner les sujets s&eacute;lectionn&eacute;s ?',

	'Downloads' => 'T&eacute;l&eacute;chargements',

// Start add - Bin Mod
	'Move_bin' => 'Mettre ce sujet &agrave; la corbeille',
	'Topics_Moved_bin' => 'Le sujet a &eacute;t&eacute; d&eacute;plac&eacute; dans la corbeille.',
	'Bin_disabled' => 'La corbeille est d&eacute;sactiv&eacute;e',
	'Bin_recycle' => 'Recycler',
// End add - Bin Mod
	'Recent_topics' => 'Sujets R&eacute;cents', // Recent Topics

	'Topics_Title_Edited' => 'Le titre des sujets s&eacute;lectionn&eacute;s a &eacute;t&eacute; &eacute;dit&eacute;.',
	'Edit_title' => '&Eacute;dition du titre',
	'PM' => 'MP',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'Adresse IP pour les mod&eacute;rateurs uniquement',
	'Registered_ip_address' => 'Adresse IP enregistr&eacute;',
	'Registered_hostname' => 'Domaine enregistr&eacute;',
	'Other_registered_ips' => 'Autres utilisateurs enregistr&eacute;s depuis %s', //%s is the IP address
	'Other_posted_ips' => 'Adresses IP depuis lequel cet utilisateur a post&eacute;',
	'Search_ip' => 'Rechercher les messages depuis une adresse IP',
	'Search_ip_explain' => 'Entrez une adresse IP correcte comme par exemple <u>127.0.0.1</u> (vous pouvez utiliser * comme joker, par exemple <u>127.*.*.1</u>)',
	'IP' => 'IP',
	'Whois' => 'Informations',
	'Browser' => 'Navigateur',
	'No_other_registered_ips' => 'Aucun autre utilisateur n\'a cette adresse IP.',
	'No_other_posted_ips' => 'Cet utilisateur n\'a post&eacute; aucun message.',
	'Not_recorded' => 'Non enregistr&eacute;',
	'Logins' => 'Connexions',
	'No_logins' => 'Cet utilisateur ne s\'est pas encore connect&eacute;.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Cliquez pour voir l\'image dans sa taille r&eacute;elle',
	'LIW_click_image_explain' => 'Cliquez sur l\'image pour la voir en taille r&eacute;elle.',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Album',
	'Personal_Gallery' => 'Galerie Personnelle',
	'Personal_Gallery_Of_User' => 'Galerie Personnelle de %s',
	'Personal_Gallery_Of_User_Profile' => 'Galerie Personnelle de %s (%d images)',
	'Show_All_Pic_View_Mode_Profile' => 'Montrer toutes les images dans la galerie personnelle de %s (sans les sous-cat&eacute;gories)',
	'Not_allowed_to_view_album' => 'D&eacute;sol&eacute;, vous n\'&ecirc;tes pas autoris&eacute; &agrave; voir l\'album.',
	'Not_allowed_to_upload_album' => 'D&eacute;sol&eacute;, vous n\'&ecirc;tes pas autoris&eacute; &agrave; envoy&eacute; une image dans l\'album. Contactez l\'administrateur de l\'album pour plus d\'informations.',
	'Album_empty' => 'Il y n\'y a aucune image dans l\'album<br />Cliquez sur le lien <b>Envoyer une image</b> pour en ajouter une.',
	'Album_empty2' => 'Il y n\'y a aucune image dans l\'album.',
	'Upload_New_Pic' => 'Envoyer une image.',
	'Pic_Title' => 'Titre de l\'image',
	'Pic_Title_Explain' => 'Il est tr&egrave;s important de donner un bon nom &agrave; votre image. Cela peut &ecirc;tre le sujet, le nom du mod&egrave;le, etc. pour permettre aux autres d\'imaginer le contenu de l\'image sans la voir.',
	'Pic_Upload' => 'Envoi d\'images',
	'Pic_Upload_Explain' => 'Les types autoris&eacute;s sont JPG, GIF et PNG. La taille maximum des fichiers est de %s bytes. Les dimensions maximales pour l\'image sont de %sx%s pixels.',
	'Album_full' => 'D&eacute;sol&eacute;, l\'album a atteint le nombre maximum d\'images. Contactez un administrateur pour plus d\'information.',
	'Album_upload_successful' => 'Votre image a &eacute;t&eacute; correctement ins&eacute;r&eacute;e.',
	'Click_return_album' => 'Cliquez %sici%s pour revenir &agrave; l\'album.',
	'Invalid_upload' => 'Envoi invalide<br /><br />Votre image est trop grande ou n\'a pas une extension autoris&eacute;e',
	'Image_too_big' => 'D&eacute;sol&eacute;, mais votre image est trop large.',
	'Uploaded_by' => 'Envoy&eacute;e par',
	'Category_locked' => 'D&eacute;sol&eacute;, vous ne pouvez ajouter d\'image car cette cat&eacute;gorie a &eacute;t&eacute; verrouill&eacute;e par un administrateur. Veuillez contacter l\'administrateur pour plus d\'informations.',
	'View_Album_Index' => 'Index de l\'album',
	'View_Album_Personal' => 'Regarde l\'album personnel d\'un utilisateur',
	'View_Pictures' => 'Regarde une image ou poste/li les commentaires dans l\'album',
	'Album_Search' => 'Fait une recherche dans l\'album',
	'Pic_Name' => 'Nom de l\'image',
	'Description' => 'Description',
	'Search_Contents' => ' qui contient: ',
	'Search_Found' => 'R&eacute;sultats: ',
	'Search_Matches' => 'Trouv&eacute;:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Derni&egrave;res Nouvelles',
	'xs_no_news' => 'Il n\'y a aucune nouvelle.',
	'xs_news_version' => 'XS News Version: %s',
	'xs_news_ticker_feed' => 'Source du flux XML: %s',
	'xs_no_ticker' => 'Il n\'y a d&eacute;fileur de nouvelles de d&eacute;fini, merci d\'aller dans le panneau d\'administration pour en cr&eacute;er un.',
	'xs_news_ticker_title' => 'D&eacute;fileur de Nouvelles',
	'xs_news_tickers_title' => 'D&eacute;fileur de Nouvelles',
	'xs_news_item_title' => 'Nouvelle',
	'xs_news_items_title' => 'Nouvelles',
	'hide' => 'Cacher',
	'show' => 'Montrer',
	'Welcome' => 'Bienvenue',
	'birthdays' => 'Anniversaires',

//Battle of the Sexes
	'male_zero_total' => 'Aucun Membre Masculin', // # registered male users
	'male_total' => '<b>%d</b> Membres Masculin', // # registered male users
	'male_one_total' => '<b>Un</b> Membre Masculin', // # registered male user
	'female_zero_total' => 'Nous n\'avons pas de membre f&eacute;minin', // # registered female users
	'female_total' => 'Nous avons <b>%d</b> membres f&eacute;minins', // # registered female users
	'female_one_total' => 'Nous avons <b>un</b> membre f&eacute;minin', // # registered female users
	'unknown_total' => '& <b>%d</b> membres n\'ont pas pr&eacute;cis&eacute; leur sexe',
	'unknown_one_total' => '& <b>%d</b> membre n\'a pas pr&eacute;cis&eacute; leur sexe',
	'unknown_zero_total' => 'Tout le monde a pr&eacute;cis&eacute; son genre.',
	'battle_of_sexes' => 'Bataille des sexes: ',

	'who_viewed' => 'Vues du sujet',
	'BoardRules' => 'R&egrave;gles',

	'View_post' => 'Voir le message',
	'Post_review' => 'Poster un retour',
	'View_next_post' => 'Voir le message suivant',
	'View_previous_post' => 'Voir le message pr&eacute;c&eacute;dent',
	'No_newer_posts' => 'Il n\'y a pas de messages plus r&eacute;cent dans ce forum',
	'No_older_posts' => 'Il n\'y a pas de messages plus ancien dans ce forum',

	'StaffSite' => '&Eacute;quipe du Site',
	'Staff_level' => array('Administrateur', 'Mod&eacute;rateur'),
	'Staff_forums' => 'Forums',
	'Staff_stats' => 'Statistiques',
	'Staff_user_topic_day_stats' => '%.2f sujets par jour', // %.2f = topics per day
	'Staff_period' => 'depuis %d jours', // %d = days
	'Staff_contact' => 'Contacts',
	'Staff_messenger' => 'Messagerie',
// Start Edit Notes MOD
	'Edit_notes' => '&Eacute;diter la note',
	'Delete_note' => 'Supprimer la note',
	'Edited_by' => '&Eacute;dit&eacute; par',
	'Confirm_delete_edit_note' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette note ?',
	'Edit_note_deleted' => 'La note a bien &eacute;t&eacute; supprim&eacute;e.',
// End Edit Notes MOD

	'Recent_topics' => 'Sujets r&eacute;cents',
	'Recent_today' => 'Aujourd\'hui',
	'Recent_yesterday' => 'Hier',
	'Recent_last24' => 'Ces derni&egrave;res 24 heures',
	'Recent_lastweek' => 'La semaine pass&eacute;e',
	'Recent_lastXdays' => 'Ces %s derniers jours',
	'Recent_last' => 'Dernier',
	'Recent_days' => 'Jours',
	'Recent_first' => 'commenc&eacute; %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'S&eacute;lectionnez le mode :',
	'Recent_showing_posts' => 'Vue des messages:',
	'Recent_title_one' => '%s sujet %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s sujets %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' d\'aujourd\'hui',
	'Recent_title_yesterday' => ' d\'hier',
	'Recent_title_last24' => ' des 24 derni&egrave;res heures',
	'Recent_title_lastweek' => ' de cette semaine',
	'Recent_title_lastXdays' => ' de ces %s derniers jours', // %s = days
	'Recent_no_topics' => 'Aucun sujet trouv&eacute;.',
	'Recent_wrong_mode' => 'ce mode n\'existe pas.',
	'Recent_click_return' => 'Cliquez %sici%s pour retourner au site.',

	'Profile_view_option' => 'Ouvrir une fen&ecirc;tre lors de la vue du profil',
	'Profile_viewed' => 'Les visiteurs de mon profil',

// BEGIN Disable Registration MOD
	'registration_status' => 'D&eacute;sol&eacute;, mais les inscriptions sont actuellement d&eacute;sactiv&eacute;es. Veuillez r&eacute;essayer plus tard.',
// END Disable Registration MOD

	'PostHighlight' => 'Surligner',
	'QuickQuote' => 'Citation rapide',
	'Randomquote' => 'Citation al&eacute;atoire',

// Mod User CP Organize
	'Cpl_Navigation' => 'Panneau de Contr&ocirc;le',
//  'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Configuration',
	'Cpl_Board_Settings' => 'Configuration du Site',
	'Cpl_NewMSG' => 'Envoyer un Nouveau Message',
	'Cpl_Click_Return_Cpl' => 'Ou cliquez %sici%s pour revenir &agrave; votre %1$sPanneau de ContrÃ´le%2$s',
	'Cpl_Personal_Profile' => 'Profil Personnel',
	'Cpl_More_info' => 'Inscriptions',

	'Forbidden_characters' => 'Les caract&egrave;res autoris&eacute;s pour les pseudos sont a-z, 0-9, -, _ et les espaces.',

	'Topics_per_page' => 'Sujets par page',
	'Posts_per_page' => 'Messages par page',
	'Hot_threshold' => 'Seuil des messages populaires',

	'Mod_CP_first_post' => 'Premier message',
	'Mod_CP_topic_count' => '<b>Un</b> sujet trouv&eacute;.',
	'Mod_CP_topics_count' => '<b>%s</b> sujets trouv&eacute;s.',
	'Mod_CP_no_topics' => 'Aucun sujet correspondant &agrave; vos crit&egrave;res n\'a &eacute;t&eacute; trouv&eacute;.',
	'Mod_CP_sticky' => 'Mettre en Post-It',
	'Mod_CP_announce' => 'Mettre en Annonce',
	'Mod_CP_global' => 'Rendre Global',
	'Mod_CP_normal' => 'Rendre Normal',
	'Display_sticky' => 'Post-it',
	'Display_announce' => 'Annonce',
	'Display_global' => 'Annonce Globale',
	'Display_poll' => 'Sondage',
	'Display_shadow' => 'D&eacute;plac&eacute;',
	'Display_locked' => 'Verrouill&eacute;',
	'Display_unlocked' => 'D&eacute;verrouill&eacute;',
	'Display_unread' => 'Non lus',
	'Display_unanswered' => 'sans r&eacute;ponse',
	'Display_all' => 'Tout',
	'Mod_CP_confirm_delete_polls' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ces sondages ?',
	'Mod_CP_poll_removed' => 'Le sondage s&eacute;lectionn&eacute; a &eacute;t&eacute; correctement retir&eacute; du sujet.',
	'Mod_CP_polls_removed' => 'Les sondages s&eacute;lectionn&eacute;s ont &eacute;t&eacute; correctement retir&eacute;s des sujets.',
	'Mod_CP_topic_removed' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; correctement supprim&eacute;s.',
	'Mod_CP_topic_moved' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; d&eacute;plac&eacute; de <b>%s</b> vers <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; d&eacute;plac&eacute; de <b>%s</b> vers <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; verrouill&eacute;.',
	'Mod_CP_topic_unlocked' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; d&eacute;verrouill&eacute;.',
	'Mod_CP_topics_sticked' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; mis en Post-It.',
	'Mod_CP_topic_sticked' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; mis en Post-It.',
	'Mod_CP_topics_announced' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; mis en Annonces.',
	'Mod_CP_topic_announced' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; mis en Annonce.',
	'Mod_CP_topics_globalized' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; mis en Annonce Globale.',
	'Mod_CP_topic_globalized' => 'Le sujet s&eacute;lectionn&eacute; a &eacute;t&eacute; mis en Annonce Globale.',
	'Mod_CP_topics_normalized' => 'Les sujets s&eacute;lectionn&eacute;s ont &eacute;t&eacute; remis en sujets normaux.',
	'Mod_CP_topic_normalized' => 'Le sujet s&eacute;lectionn&eacute; ont &eacute;t&eacute; remis en sujet normal.',
	'Mod_CP_click_return_topic' => 'Cliquez %sici%s pour retourner &agrave; l\'ancien sujet ou %sici%s pour aller au nouveau.',

	't_starter' => 'Vous ne pouvez vous remercier vous-m&ecirc;me',
	'Watched_Topics' => 'Sujets Surveill&eacute;s',
	'No_Watched_Topics' => 'Vous ne surveillez aucun sujet',
	'Watched_Topics_Started' => 'Sujet Commenc&eacute;s',
	'Watched_Topics_Stop' => 'Arr&ecirc;ter de surveiller',

	'Stop_watching_forum' => 'Arr&ecirc;ter de surveiller ce forum',
	'Start_watching_forum' => 'Surveiller les messages de ce forum',
	'No_longer_watching_forum' => 'Vous ne surveillez plus ce forum.',
	'You_are_watching_forum' => 'Vous surveillez maintenant ce forum.',

	'UCP_SubscForums' => 'Liste des Forums Souscrits',
	'UCP_NoSubscForums' => 'Vous n\'avez souscrit a aucun forum',
	'UCP_SubscForums_Flag' => 'Drapeau',
	'UCP_SubscForums_Forum' => 'Forum',
	'UCP_SubscForums_Forum_subscribed' => 'Forum avec souscription',
	'UCP_SubscForums_Forum_already_subscribed' => 'Vous avez d&eacute;j&agrave; souscrit &agrave; ce forum.',
	'UCP_SubscForums_Click_return_forum' => 'Cliquez %sici%s pour retourner au forum',
	'UCP_SubscForums_Topics' => 'Sujets',
	'UCP_SubscForums_Posts' => 'Messages',
	'UCP_SubscForums_LastPost' => 'Dernier message',
	'UCP_SubscForums_UnSubscribe' => 'Se D&eacute;sinscrire',
	'UCP_SubscForums_NewTopic' => 'Nouveau Sujet',

	'profile_main' => 'Informations G&eacute;n&eacute;rales',
	'profile_explain' => 'Bienvenue dans le Panneau de Contr&ocirc;le des Utilisateurs. D\'ici, vous pouvez surveiller, voir et mettre &agrave; jour votre profil, vos pr&eacute;f&aecute;rences et la liste des forum(s)/sujet(s) au(x)quel(s) vous avez souscrit(s). Vous pouvez aussi envoyer des messages aux autres utilisateurs (si le syst&egrave;me est activ&eacute;).',
	'your_activity' => 'Votre Profil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Si vous avez un <a href="http://www.gravatar.com" target="_blank">gravatar</a>, entrez l\'adresse mail avec laquelle vous vous &ecirc;tes inscrit.',

	'private_msg_review_title' => 'Message auquel vous r&eacute;pondez',
	'private_msg_review_error' => 'Erreur dans la recherche du message priv&eacute; !',

	'BSH_Viewing_Topic' => 'Regarde un sujet: %t%',
	'BSH_Viewing_Post' => '%sRegarde un message%s',
	'BSH_Viewing_Profile' => 'Regarde le profil de %u%',
	'BSH_Viewing_Groups' => '%sRegarde les groupes%s',
	'BSH_Viewing_Forums' => 'Regarde le forum: %f%',
	'BSH_Index' => '%sRegarde l\'index%s',
	'BSH_Searching_Forums' => '%sFait une recherche dans les forums%s',
	'BSH_Viewing_Onlinelist' => '%sRegarde qui est en ligne%s',
	'BSH_Viewing_Messages' => '%sRegarde ses messages priv&eacute;s%s',
	'BSH_Viewing_Memberlist' => '%sRegarde la liste des membres%s',
	'BSH_Login' => '%sSe connecte%s',
	'BSH_Logout' => '%sSe d&eacute;connecte%s',
	'BSH_Editing_Profile' => '%s&Eacute;dite son profil%s',
	'BSH_Viewing_ACP' => '%sEst sur le Panneau de Contr&ocirc;le des Administrateurs%s',
	'BSH_Moderating_Forum' => '%sMod&egrave;re le forum%s',
	'BSH_Viewing_FAQ' => '%sRegarde la FAQ%s',
	'BSH_Viewing_Category' => 'Regarde la cat&eacute;gorie: %c%',

	'Board_statistic' => 'Stastiques du Forum',
	'Database_statistic' => 'Statistiques de la base de donn&eacute;es',
	'Version_info' => 'Informations sur la version',
	'Thereof_deactivated_users' => 'Nombre de membres non-actifs',
	'Thereof_Moderators' => 'Nombre de Mod&eacute;rateurs',
	'Thereof_Junior_Administrators' => 'Nombre d\'Administrateurs Junior',
	'Thereof_Administrators' => 'Nombre d\'Administrateurs',
	'Deactivated_Users' => 'Membres en attente d\'activation',
	'Users_with_Mod_Privileges' => 'Membre avec des droits de Mod&eacute;rateurs',
	'Users_with_Junior_Admin_Privileges' => 'Membre avec des droits d\'Administrateurs Junior',
	'Users_with_Admin_Privileges' => 'Membres avec des droits d\'Administrateur',
	'DB_size' => 'Taille de la base de donn&eacute;es',
	'Version_of_ip' => 'Version d\'<a href="http://www.icyphoenix.fr/">IcyPhoenix</a>',
	'Version_of_board' => 'Version de <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Version de <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Version de <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'T&eacute;l&eacute;charger le message',

	'Download_topic' => 'T&eacute;l&eacute;charger le sujet',
	'Always_swear' => 'Ne pas filtrer les jurons',

	'Shoutbox' => 'Shoutbox',
	'Shoutbox_date' => ' (d/m/Y) [H:i:s]',
	'Shout_censor' => '<b>Message Supprim&eacute; !</b>',
	'Shout_refresh' => 'Rafraichir',
	'Shout_text' => 'Votre texte',
	'Viewing_Shoutbox' => 'Regarde la shoutbox',
	'Censor' => 'Censurer',

	'Edit_post_time' => '&Eacute;diter la date/heure du message',
	'Edit_post_time_xs' => '&Eacute;diter',
	'Topic_time_xs' => 'Date du sujet',
	'Post_time' => 'Date du message',
	'Post_time_successfull_edited' => '<b>Date correctement mise &agrave; jour.</b></span><br /><span class="postdetails">Cette fen&ecirc;tre se fermera dans 3 secondes.',

	'staff_message' => 'Message de l\'&Eacute;quipe',

	'Board_Rules' => 'R&egrave;glement du Forum', // Forum = site g&eacute;n&eacute;ral
	'Forum_Rules' => 'R&egrave;gles des forums', // Forum = dans les cat&eacute;gories
	'Show_avatars' => 'Montrer les avatars dans le sujet',
	'Show_signatures' => 'Montrer les signatures dans le sujet',
	'Acronym' => 'Acronyme',
	'Acronyms' => 'Acronymes',
	'User_Number' => 'Utilisateur nÂ°',
	'Member_Count' => 'Membres',
	'Reply_message' => 'R&eacute;ponse',
	'Click_read_topic' => 'Cliquez %sici%s pour le lire', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Cr&eacute;er un avatar avec le G&eacute;n&eacute;rateur d\'Avatar',
	'View_avatar_generator' => 'G&eacute;n&eacute;rateur d\'Avatar',
	'Adv_Search' => 'Recherche Avanc&eacute;e',
	'Search_Explain' => 'Rechercher dans le Site',
	'Please_remove_install_contrib' => 'Veuillez v&eacute;rifier que les dossier install/ et contrib/ ont bien &eacute;t&eacute; supprim&eacute;s',
	'Search_Engines' => 'Robots des moteurs de recherche:',
	'Bots_browsing_forum' => 'Robots parcourant le forum:',
	'Debug_On' => 'Debug Actif',
	'Debug_Off' => 'Debug Inactif',
	'Page_Generation_Time' => 'Temps de g&eacute;n&eacute;ration',
	'Memory_Usage' => 'M&eacute;moire',
	'SQL_Queries' => 'Requ&ecirc;tes SQL',
	'Search_new2' => 'Nouveaux Messages',
	'Search_new_p' => 'Messages depuis votre derni&egrave;re visite',
	'Show_In_Portal' => 'Montrer sur la page d\'accueil',
	'Not_Auth_View' => 'Vous n\'&ecirc;tes pas autoris&eacute; &agrave; voir cette page.',
	'Site_Hist' => 'Historique du site',
	'Links' => 'Liens',
	'Print_View' => 'Version imprimable',
	'Browsing_topic' => 'Utilisateurs regardant ce sujet:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Marque-page',
	'Set_Bookmark' => 'Mettre un marque-page sur ce sujet',
	'Remove_Bookmark' => 'Retirer le marque-page de ce sujet',
	'No_Bookmarks' => 'Vous n\'avez aucun marque-page',
	'Always_set_bm' => 'Ajouter automatiquement un marque-page apr&egrave;s avoir post&eacute;',
	'Found_bookmark' => 'Vous avez %d marque-page.', // eg. Search found 1 match
	'Found_bookmarks' => 'Vous avez %d marque-pages.', // eg. Search found 24 matches
	'More_bookmarks' => 'Plus de marque-page ...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Qu\'est-ce que c\'est ?',
	'Rss_news_help_title' => 'Aide du Lecteur de Flux RSS',
	'Rss_news_help_header' => 'Que sont les Fluxs RSS et comment puis-je les utiliser ?',
	'Rss_news_help_explain' => 'Un Flux RSS est un r&eacute;sum&eacute; de certaines informations sur internet et qui est r&eacute;guli&egrave;rement mis &agrave; jour. Ces flux contiennent les principales informations ainsi que des liens pour voir les versions compl&egrave;tes. Si vous vous inscrivez &agrave; un Flux RSS, vous recevrez toutes les nouveaut&eacute;s et changements de ce site dans un sommaire.<br /><br /><b>Attention:</b> Pour s\'inscrire au Flux d\'un site, un <a href="http://www.rssowl.org/" target="new">Lecteur de Flux (en)</a> doit &ecirc;tre utilis&eacute;. Dans le cas contraire, si vous cliquez sur un lien RSS ou ATOM, le r&eacute;sultat apparaitra sous une forme non-format&eacute;e et vous pourrez avoir des probl&egrave;mes d\'affichage.',
	'Rss_news_help_header_2' => '<b>Qu\'est-ce que RSS et Atom ?</b>',
	'Rss_news_help_explain_2' => 'RSS et Atom sont deux formats pour les fluxs. La plupart des lecteurs supportent les deux. &Agrave; l\'heure actuelle, nous supportons Atom 0.3 et RSS 2.0.',
	'Rss_news_help_header_3' => '<b>Comment puis-je utiliser un flux ?</b>',
	'Rss_news_help_explain_3' => 'Pour commencer vous devez avoir un lecteur de flux, trouvable par exemple sur <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a> (en).<br /><br />Apr&egrave;s quoi vous pourrez, dans le programme:<br /><br /><b>1.</b> Rechercher des liens RSS de notre cÃ´t&eacute; <b>ou</b><br /><b>2.</b> ajouter un nouveau Flux &agrave; suivre:',
	'L_url_rss_explain' => 'Adresse pour tous les sujets du forum.',
	'L_url_rss_news_explain' => 'URL uniquement pour les Nouvelles du Forum.',
	'L_url_rss_atom_explain' => 'URL du Flux ATOM.',
	'Rss_news_help_rights' => 'Nous nous r&eacute;servons le droit de supprimer n\'importe quel flux &agrave; n\'importe quel moment sans avertissement. Les flux de notre forum ne doivent pas &ecirc;tre utilis&eacute;s en dehors de leur cadre d\'origine.',
	'Rss_news_feeds' => 'Fluxs RSS des Nouvelles',

	'Quick_Reply' => 'R&eacute;ponse',
	'Mod_CP_sticky2' => 'Post-It',
	'Mod_CP_announce2' => 'Annonce',
	'Mod_CP_global2' => 'Rendre Global',
	'Mod_CP_normal2' => 'Rendre Normal',

	'Search_Flood_Error' => 'Vous ne pouvez faire une recherche si vite apr&egrave;s la pr&eacute;c&eacute;dente. Veuillez r&eacute;essayer dans un court instant.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Ces champs ont &eacute;t&eacute; cr&eacute;es par les administrateurs. Ils peuvent &ecirc;tre, ou non, visibles publiquement. Les champs marqu&eacute;s d\'un ast&eacute;risque (*) sont obligatoires.',
	'and' => ' et ',
// END Custom Profile Fields MOD

	'dsbl' => 'Votre adresse mail est sur une <a href="%url%">Liste Noire bas&eacute;e sur le DNS</a>. <br />Votre tentative d\'inscription a &eacute;t&eacute; bloqu&eacute;e.',
	'Emails_Only_To_Admins_Error' => 'Vous ne pouvez envoyer des mails qu\'aux administrateurs.',
	'Wordgraph' => 'Mots-Clefs',
	'Viewing_wordgraph' => 'Regarde les Mots-Clefs',
	'Links_For_Guests' => '<b>Vous devez &ecirc;tre inscrit pour voir ce lien</b>',
	'New' => 'N',
	'New_Label' => 'Nouveau',
	'New_Messages_Label' => 'Nouveaux Messages',
	'Show_Personal_Gallery' => 'Voir sa galerie personnelle',
	'Login_Status' => 'Statut \'En ligne\'',
	'Login_Hidden' => 'Invisible',
	'Login_Visible' => 'Visible',
	'Login_Default' => 'Par d&eacute;faut',
	'ERRORS_NOT_FOUND' => 'L\'adresse demand&eacute;e n\'a pas pu &ecirc;tre trouv&eacute;e sur le serveur',
	'ERRORS_000' => 'Erreur inconnue',
	'ERRORS_000_FULL' => 'L\'adresse a retourn&eacute; un num&eacute;ro d\'erreur inconnu.<br /> L\'erreur a &eacute;t&eacute; enregistr&eacute; dans le fichier journal et nous allons tenter de corriger le probl&egrave;me.',
	'ERRORS_400' => 'Error 400',
	'ERRORS_400_FULL' => 'L\'adresse n\'est pas valide.',
	'ERRORS_401' => 'Error 401 - Erreur d\'autorisation',
	'ERRORS_401_FULL' => 'Vous n\'&ecirc;tes pas autoris&eacute; a voir cette adresse.',
	'ERRORS_403' => 'Error 403',
	'ERRORS_403_FULL' => 'L\'acc&egrave;s a cette page est interdit.',
	'ERRORS_404' => 'Error 404 - Fichier Introuvable',
	'ERRORS_404_FULL' => 'Le fichier demand&eacute; n\'a pas &eacute;t&eacute; trouv&eacute;. Vous avez peut-&ecirc;tre fait une erreur dans l\'adresse ou ce que vous cherchez a pu &ecirc;tre retir&eacute;.',
	'ERRORS_500' => 'Error 500 - Erreur de configuration',
	'ERRORS_500_FULL' => 'L\'adresse que vous avez entr&eacute; contient une erreur de configuration.<br />L\'erreur a &eacute;t&eacute; enregistr&eacute;e dans le fichier journal et nous allons tenter de corriger le probl&egrave;me le plus vite possible.',
	'ERRORS_EMAIL_SUBJECT' => 'Erreurs: ',
	'ERRORS_EMAIL_ADDRRESS_PREFIX' => 'Erreurs !',
	'ERRORS_EMAIL_BODY' => 'Une erreur est survenue sur votre site. Veuillez v&eacute;rifier les logs.',
	'Remote_avatar_no_image' => 'L\'image %s n\'existe pas',
	'Remote_avatar_error_filesize' => 'L\'image est trop lourde (maximum: %d Bytes)',
	'Remote_avatar_error_dimension' => 'L\'image est trop grande (maximum: %d x %d pixels)',
	'How_Many_Chatters' => 'Il y a actuellement <b>%d</b> utilisateurs sur le Chat.',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Cliquez pour rejoindre le chat',
	'ChatBox' => 'ChatBox',
	'log_out_chat' => 'Vous avez bien quitt&eacute; la Chatbox ',
	'Send' => 'Envoyer',
	'Login_to_join_chat' => 'Connectez-vous pour rejoindre le Chat',

// Hacks List
/* General */
	'Hacks_List' => 'Cr&eacute;dits',
	'Page_Desc' => 'Ce module vous permet d\'ajouter/&eacute;diter/supprimer la liste des cr&eacute;dits pour les hacks/modifications install&eacute;es sur votre forum. Ils sont affich&eacute;s aux utilisateurs lorsqu\'ils visitent la page credits.php',
	'Deleted_Hack' => 'Les cr&eacute;dits du module %s ont &eacute;t&eacute; supprim&eacute;s de la liste.<br />',
	'Updated_Hack' => 'Les cr&eacute;dits du module %s ont &eacute;t&eacute; mis &agrave; jour.<br />',
	'Added_Hack' => 'Informations sur le module %s ajout&eacute;es.<br />',
	'Status' => 'Statut',
	'No_Website' => 'Aucun site web disponible.',
	'No_Hacks' => 'Aucun cr&eacute;dit &agrave; afficher.',
	'Add_New_Hack' => 'Ajouter un Cr&eacute;dit',
	'User_Viewable' => 'Cacher de la Liste des Utilisateurs ?',
	'Hack_Name' => 'Nom du Module',
//	'Description' => 'Description',
	'Required' => 'N&eacute;c&eacute;ssaire',
	'Author_Email' => 'Mail de l\'Auteur',
	'Version' => 'Version',
	'Download_URL' => 'T&eacute;l&eacute;charger la Localisation',

/* Errors */
	'Error_Hacks_List_Table' => 'Erreur lors de la requ&ecirc;te sur la table des hacks.',
	'Required_Field_Missing' => 'Vous n\'avez pas entr&eacute; toutes les informations n&eacute;c&eacute;ssaires.',
	'Error_File_Opening' => 'Impossible d\'ouvrir le fichier %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Derni&egrave;re Image', // Album Addon
	'Random_pic' => 'Image Al&eacute;atoire', // Album Addon
	'Click_enlarge_pic' => 'Cliquez sur l\'image pour l\'agrandir',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Derni&egrave;re adresse IP utilis&eacute;e',
	'Last_Used_OS' => 'Syst&egrave;me d\'Exploitation',
	'Last_Used_Browser' => 'Navigateur',
	'Last_Used_Referer' => 'Page Lien',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administrateurs',
	'Users_Mods' => 'Mod&eacute;rateurs',
	'Users_Global_Mods' => 'Mod&eacute;rateurs Globaux',
	'Users_Regs' => 'Utilisateurs',
	'Users_Guests' => 'Invit&eacute;s',
	'Users_Hidden' => 'Masqu&eacute;s',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Style',
	'User_Contacts' => 'Contacts',
	'Memberlist_Users_Display' => 'Utilisateurs par page:',
	'SORT_FAST' => 'Rapide',
	'SORT_STANDARD' => 'Standard',
	'SORT_RANK' => 'Rang',
	'SORT_STAFF' => '&Eacute;quipe',
	'SORT_STYLE' => 'Style',
	'SORT_LASTLOGON' => 'Derni&egrave;re Connexion',
	'SORT_BIRTHDAY' => 'Anniversaire',
	'SORT_ONLINE' => 'En ligne',
	'ASCENDING' => 'Ascendant',
	'DESCENDING' => 'Descendant',
	'LESS_THAN' => 'Moins que',
	'EQUAL_TO' => '&Eacute;gal &agrave;',
	'MORE_THAN' => 'Plus que',
	'BEFORE' => 'Avant',
	'AFTER' => 'Apr&egrave;s',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => '&Eacute;quipe',
	'Rank' => 'Rang',
	'Rank_Header' => 'Rangs',
	'Rank_Image' => 'Image du Rang',
	'Rank_Posts_Count' => 'Rang par nombre de messages',
	'Rank_Days_Count' => 'Rang par anciennet&eacute; (jours)',
	'Rank_Min_Des' => 'Nombre minimum par messages/jours',
	'Rank_Min_M' => 'Messages minimum',
	'Rank_Max_M' => 'Messages maximum',
	'Rank_Min_D' => 'Ã‚ge minimum (jours)',
	'Rank_Max_D' => 'Ã‚ge maximum (jours)',
	'Rank_Special' => 'Rang Sp&eacute;cial',
	'Rank_Special_Guest' => 'Rang sp&eacute;cial pour les invit&eacute;s',
	'Rank_Special_Banned' => 'Rang sp&eacute;cial pour les utilisateurs bannis',
	'Current_Rank_Image' => 'Image actuelle du rang',
	'No_Rank' => 'Pas de rang',
	'No_Rank_Image' => 'Pas d\'image de rang',
	'No_Rank_Special' => 'Pas de rang sp&eacute;cial assign&eacute;',
	'Memberlist_Administrator' => 'Administrateur',
	'Memberlist_Moderator' => 'Mod&eacute;rateur',
	'Memberlist_User' => 'Utilisateur',
	'Guest_User' => 'Invit&eacute;',
	'Banned_User' => 'Bannis',
	'Rank1_title' => 'Titre du Rang 1',
	'Rank2_title' => 'Titre du Rang 2',
	'Rank3_title' => 'Titre du Rang 3',
	'Rank4_title' => 'Titre du Rang 4',
	'Rank5_title' => 'Titre du Rang 5',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Menu',
	'MAIN_LINKS' => 'Liens Principaux',
	'NEWS_LINKS' => 'Nouvelles',
	'INFO_LINKS' => 'Informations',
	'USERS_LINKS' => 'Groupes &amp; d\'Utilisateurs',
	'SELECT_STYLE' => 'Style',
	'SELECT_LANG' => 'Langue',
	'RSS_FEEDS' => 'Fluxs RSS',
	'SPONSORS_LINKS' => 'Sponsors',
	'TOOLS_LINKS' => 'Outils',
	'HelpDesk' => 'Bureau d\'Aide',
	'AvatarGenerator' => 'Generateur d\'Avatar',
	'DBGenerator' => 'Generateur SQL &agrave; PHP',

	'LINK_ACP' => 'PA',
	'LINK_CMS' => 'CMS', 
	'LINK_HOME' => 'Accueil', 
	'LINK_PROFILE' => 'Profil', 
	'LINK_FORUM' => 'Forum',
	'LINK_BOARDRULES' => 'R&egrave;gles',
	'LINK_FAQ' => 'FAQ',
	'LINK_SEARCH' => 'Recherche',
	'LINK_SITEMAP' => 'Plan du site',
	'LINK_ALBUM' => 'Album',
	'LINK_CALENDAR' => 'Calendrier',
	'LINK_DOWNLOADS' => 'T&eacute;l&eacute;chargements',
	'LINK_BOOKMARKS' => 'Marque-pages',
	'LINK_DRAFTS' => 'Brouillons',
	'LINK_UPLOADED_IMAGES' => 'Vos images',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Liens',
	'LINK_CONTACT_US' => 'Nous Contacter',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'Cat&eacute;gories de Nouvelles',
	'LINK_NEWS_ARC' => 'Archives des Nouvelles',
	'LINK_NEW_MESSAGES' => 'Nouveaux Nessages',
	'LINK_DISPLAY_UNREAD_S' => 'Non lus',
	'LINK_DISPLAY_MARKED_S' => 'Marqu&eacute;s',
	'LINK_DISPLAY_PERMANENT_S' => 'Toujours lus',
	'LINK_DIGESTS' => 'D&eacute;p&ecirc;ches',

	'LINK_CREDITS' => 'Cr&eacute;dits',
	'LINK_REFERERS' => 'Liens vers le Site',
	'LINK_VIEWONLINE' => 'Utilisateurs en ligne',
	'LINK_STATISTICS' => 'Statistiques',
	'LINK_DELETE_COOKIES' => 'Supprimer ses Cookies',

	'LINK_MEMBERLIST' => 'Liste des Membres',
	'LINK_USERGROUPS' => 'Groupes d\'Utilisateur',
	'LINK_RANKS' => 'Rangs',
	'LINK_STAFF' => '&Eacute;quipe',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Jeux',
	'Games' => 'Jeux',
	'Trohpy' => 'Troph&eacute;s',
	'quick_links_games' => 'Menu des Jeux',

	'By' => 'Par',
	'No_Icon_Image' => 'Pas d\'ic&ocirc;ne',
	'Change_Style' => 'Style',
	'Change_Lang' => 'Langue',
	'Permissions_List' => 'Liste des Permissions',
	'IP_TEAM' => 'L\'&eacute;quipe d\'IcyPhoenix',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Pr&eacute;vision M&eacute;t&eacute;o',
	'ErrorNotFound' => 'Fichier introuvable !',
	'MGC_Users_Online' => 'MGC Utilisateurs en Ligne',
	'MGC_User_Servertime' => 'Date',
	'MGC_User_Nickname' => 'Nom',
	'MGC_User_Server' => 'Serveur',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'Version MGC',

	'Country_Flag' => 'Drapeau du pays',
	'Select_Country' => 'S&eacute;lectionnez votre pays',
	'Extra_profile_info' => 'Informations Suppl&eacute;mentaires',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Vous pouvez ajouter plus d\'informations &agrave; propos de vous ou de vos occupations. Vous pouvez aussi ajouter des photos. Vous pouvez utilisez certains BBCodes comme lorsque vous postez, ou que vous modifiez votre signature.',
	'Extra_window' => 'Ouvrir dans une fen&ecirc;tre s&eacute;par&eacute;e',
	'Extra_too_long' => 'Votre champ suppl&eacute;mentaire est trop long (maximum: <b>%d</b> caract&egrave;res)',
	'UserLike' => 'L\'utilisateur aime',
	'UserDisLike' => 'L\'utilisateur n\'aime pas',
	'UserLikeIns' => 'Trois choses que vous aimez',
	'UserDisLikeIns' => 'Trois choses que vous n\'aimez pas',
	'UserPhone' => 'Num&eacute;ro de T&eacute;l&eacute;phone',
	'UserSport' => 'Sports',
	'UserMusic' => 'Groupes de Musiques',
	'UserNoInfo' => 'Aucune information disponible',
	'LAST_SEEN' => 'Derni&egrave;re Connexion',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'G&eacute;rer le CMS',
	'CMS_CONFIG' => 'Configuration',
	'CMS_SETTINGS' => 'Options',
	'CMS_ACP' => '&Eacute;diter cette page',
	'CUSTOM_PAGE' => 'Personnaliser la page',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Sujets Similaires',
	'Chat' => 'Chat',
	'DIGESTS' => 'D&eacute;p&ecirc;ches',

	'CPL_REG_INFO_EXPLAIN' => 'Nom d\'utilisateur, adresse mail et mot de passe',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Informations g&eacute;n&eacute;rales (messenger, anniversaire, int&eacute;r&ecirc;ts et autres informations)',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Utilisateurs ayant regard&eacute; votre profil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'Un avatar est une petite image que vous pouvez lier a votre pseudo',
	'CPL_SIG_EDIT_EXPLAIN' => 'Votre signature: vous pouvez d&eacute;finir un petit bloc de texte qui sera affich&eacute; en bas de vos messages',
	'CPL_PREFERENCES_EXPLAIN' => 'Pr&eacute;f&eacute;rences sur l\'envoi et la lecture de messages',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Pr&eacute;f&eacute;rences sur la date, le th&egrave;me et la langue',
	'Calendar_settings_EXPLAIN' => 'Options du Calendrier',
	'Hierarchy_setting_EXPLAIN' => 'Options des sous-forums et des s&eacute;parations de types de sujet',
	'LOGIN_SEC_EXPLAIN' => 'Si activ&eacute;e, cette section vous permet de surveiller toutes les connexions sur votre nom d\'utilisateur.',
	'CPL_OWN_POSTS_EXPLAIN' => 'Rechercher vos messages',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Visiter votre galerie personnelle',
	'CPL_INBOX_EXPLAIN' => 'Bo&icirc;te de r&eacute;ception: Contient les messages priv&eacute;s re&ccedil;us',
	'CPL_SAVEBOX_EXPLAIN' => 'Messages sauvegard&eacute;s: Contient les messages priv&eacute;s sauvegard&eacute;s',
	'CPL_OUTBOX_EXPLAIN' => 'Bo&icirc;te d\'envoi: Contient les messages priv&eacute;s envoy&eacute;s, mais qui n\'ont pas encore &eacute;t&eacute; lus',
	'CPL_SENTBOX_EXPLAIN' => 'Messages Envoy&eacute;s: Contient les messages priv&eacute;s que vous avez envoy&eacute; et qui ont &eacute;t&&eacute; lus',
	'CPL_BOOKMARKS_EXPLAIN' => 'Liste de tous les marque-pages que vous avez plac&eacute;s sur les sujets',
	'WATCHED_TOPICS_EXPLAIN' => 'Liste de tous les sujets que vous surveillez',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Les forums auxquels vous avez souscrits pour &ecirc;tre inform&eacute; lors de cr&eacute;ation de sujet',
	'DIGESTS_EXPLAIN' => 'Les d&eacute;p&ecirc;ches sont des mails envoy&eacute;s p&eacute;riodiquement et contenant la liste des nouveaux message post&eacute; dans le forum',
	'DRAFTS_EXPLAIN' => 'G&eacute;rer vos Brouillons',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Shoutbox',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archive du Chat',
	'Shoutbox_flooderror' => 'D&eacute;sol&eacute;, vous ne pouvez envoyer un nouveau message si rapidement apr&egrave;s le pr&eacute;c&eacute;dent. Veuillez re-essayer dans un court instant.',
	'Shoutbox_no_auth' => 'D&eacute;sol&eacute;, mais seuls les utilisateurs enregistr&eacute;s peuvent utiliser la Shoutbox',
	'Shoutbox_loading' => 'Chargement ...',
// Errors
	'Shoutbox_unable' => 'D&eacute;sol&eacute;, cette action n\'a pu &ecirc;tre effectu&eacute;e. Veuillez r&eacute;essayer.',
	'Shoutbox_empty' => 'Aucun Message',
	'Shoutbox_no_mode' => 'Aucun mode valide sp&eacute;cifi&eacute;',
// Archive
	'Shouts' => 'Messages',
	'Statistics' => 'Statistiques',
	'Total_shouts' => 'Tous les Messages',
	'Stored_shouts' => 'Messages Sauvegard&eacute;s',
	'My_shouts' => 'Mes Messages',
	'Today_shouts' => 'Messages des 24 derni&egrave;res heures',
	'Top_Ten_Shouters' => 'Top 10',
// Online list
	'Online_total' => 'Total',
	'Online_registered' => 'Utilisateurs',
	'Online_guests' => 'Invit&eacute;s',
	'Who_is_Chatting' => 'Qui est sur la chatbox ?',
	'Shoutbox_online_explain' => 'Les donn&eacute;es sont bas&eacute;s sur les utilisateurs actifs ces 30 derni&egrave;res secondes',
	'Start_Private_Chat' => 'Cliquez sur un nom pour commencer une discussion privée',
	// chat rooms
	'Shout_rooms' => 'Salons de chat',
	'Admin_rooms' => 'Tous les salons',
	'Public_room' => 'Salon public',
	'Private_room' => 'Salon privé',
	'My_id' => 'Moi-même',
// Ajax Shoutbox - END

	'Contact_us' => 'Nous Contacter',
	'Contact_us_explain' => 'En utilisant cette page vous pouvez nous envoyer un mail',
	'Session_invalid' => 'Session invalide. Veuillez r&eacute;envoyer le formulaire.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' Ce nom d\'utilisateur est trop court',
	'Reg_Username_Long' => ' Ce nom d\'utilisateur est trop long',
	'Reg_Username_Taken' => ' Ce nom d\'utilisateur n\'est pas disponible',
	'Reg_Username_Free' => ' Ce nom d\'utilisateur est disponible',
	'Reg_PWD_Short' => 'Ce mot de passe est trop court',
	'Reg_PWD_Easy' => 'Ce mot de passe est trop simple',
	'Reg_PWD_OK' => 'Ce mot de passe est bon',
	'Reg_Email_Invalid' => ' L\'adresse mail est invalide ou d&eacute;j&agrave; utilis&eacute;e',
	'Reg_Email_OK' => ' L\'adresse mail est bonne',

// Moved here from lang_adv_time.php
	'time_mode' => 'Gestion de l\'Heure',
	'time_mode_text' => 'Le d&eacute;calage horaire du &agrave; l\'heure d\'&eacute;t&eacute; (DST) est la diff&eacute;rence entre l\'heure o&ugrave; le soleil dans votre pays et l\'heure o&ugrave; il devrait se lever selon votre fuseau horaire. Cette diff&eacute;rence varie de 0 &agrave; 120 minutes, g&eacute;n&eacute;ralement 60 mins.',
	'time_mode_auto' => 'Modes automatiques ...',
	'time_mode_full_pc' => 'Heure de votre ordinateur',
	'time_mode_server_pc' => 'Heure universelle du serveur, Fuseau horaire/DST<br /><span style="margin-left: 25">de votre ordinateur</span>',
	'time_mode_full_server' => 'Heure locale du serveur',
	'time_mode_manual' => 'Mode manuel...',
	'time_mode_dst' => 'Activer l\'heure d\'&eacute;t&eacute;',
	'time_mode_dst_server' => 'par le serveur',
	'time_mode_dst_time_lag' => 'D&eacute;calage Horaire',
	'time_mode_dst_mn' => 'min',
	'time_mode_dst_mn_explain' => 'Temps exprim&eacute; en minutes',
	'time_mode_timezone' => 'Fuseau horaire',

	'dst_time_lag_error' => 'Erreur avec la valeur du d&eacute;calage horaire. Vous devez entrer un nombre entre 0 et 120.',

	'dst_enabled_mode' => ' [Heure d\'&eacute;t&eacute; activ&eacute;e]',
	'full_server_mode' => 'Heure synchronis&eacute;e avec l\'heure du serveur',
	'server_pc_mode' => 'Heure synchronis&eacute;e avec le serveur - Fuseau horaire/DST avec votre ordinateur',
	'full_pc_mode' => 'Heure synchronis&eacute;e avec celle de votre ordinateur',

	'Smileys_Per_Page' => 'Smileys par Page',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Historique du Site',
	'Month' => 'Mois',
	'Week_day' => 'Jour de la semaine',
	'Not_availble' => 'Non disponible',
	'Total_users' => 'Utilisateurs maximum',
	'Reg_users' => 'Utilisateurs enregistr&eacute;s',
	'Hidden_users' => 'Utilisateurs invisibles',
	'Guests_users' => 'Invit&eacute;s',
	'New_users' => 'Nouveaux utilisateurs',
	'New_topics' => 'Nouveaux sujets',
	'New_posts_reply' => 'Messages/r&eacute;ponses',
	'Most_online' => 'Record de connexions simultann&eacute;es %s',
	'Most_online_week' => 'Record de connexions simultann&eacute;es les 7 derniers jours',
	'Last_24' => 'Record de connexions simultann&eacute;es les %s derni&egrave;res heures',
	'Top_Posting_Users' => 'Utilisateurs postant le plus',
	'Top_Posting_Users_week' => 'Utilisateurs postant le plus cette semaine [%s]',
	'Rank' => 'Rang',
	'Percent' => 'Pourcentage',
	'Graph' => 'Graphique',
	'Top_Visiting_Users' => 'Utilisateurs le plus longtemps connect&eacute;s',
/* lang_site_hist.php - END */

/* lang_referers.php - BEGIN */
	'REFERERS' => 'R&eacute;f&eacute;rencement Web',
	'VIEWING_REFERERS' => 'Regarde le R&eacute;f&eacute;rencement',
	'REFERERS_TITLE' => 'Gestion des R&eacute;f&eacute;rencement Web',
	'REFERERS_CLEARED' => 'R&eacute;f&eacute;rencement Nettoy&eacute;',
	'REFERERS_CLEAR' => 'Tout Supprimer',
	'CLICK_RETURN_REFERERS' => 'Cliquez %sIci%s pour revenir aux R&eacute;f&eacute;rents',
	'REFERER_HOST' => 'Hôte',
	'REFERER_URL' => 'Lien',
	'REFERER_T_URL' => 'Lien Visité',
	'REFERER_IP' => 'IP',
	'REFERER_HITS' => 'Cliques',
	'REFERER_FIRST' => 'Premi&egrave;re Visite',
	'REFERER_LAST' => 'Derni&egrave;re Visite',
	'REFERER_DELETE' => 'Supprimer',
	'REFERER_KILL' => 'Retirer de la BDD (utilisez * comme joker)',
	'REFERER_GROUP_BY' => 'Grouper par',
/* lang_referers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_DAYS' => '%d Jours',
	'X_WEEKS' => '%d Semaines',
	'X_MONTHS' => '%d Mois',
	'X_YEARS' => '%d Ann&eacute;es',

	'Confirm_delete_user' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cet utilisateur ?',
	'Prune_no_users' => 'Aucun utilisateur supprim&eacute;',
	'Prune_users_number' => 'Les %d utilisateurs suivant ont &eacute;t&eacute; supprim&eacute;s:',

	'Prune_user_list' => 'Utilisateurs qui vont &ecirc;tre supprim&eacute;s',
	'Prune_on_click' => 'Vous &ecirc;tes sur le point de supprimer %d utilisateurs. &Ecirc;tes-vous s&ucirc;r ?',
	'Prune_Action' => 'Cliquez sur le lien ci-dessous pour &eacute;x&eacute;cuter l\'action',
	'Prune_users_explain' => 'D&eacute;lestage d\'utilisateurs!. Vous pouvez cliquer sur l\'un des trois liens: Supprimer les anciens utilisateurs qui n\'ont jamais post&eacute;, Supprimer les anciens utilisateurs qui ne se sont jamais connect&eacute;, Supprimer les anciens utilisateurs qui n\'ont jamais activ&eacute; leur compte.<br /><b>Note:</b> Il n\'est pas possible de revenir en arri&egrave;re.',
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'G&eacute;n&eacute;rateurs d\'Avatar',
	'Available' => 'Avatars disponibles',
	'Random' => 'Al&eacute;atoire',
	'Avatar_Text' => 'Veuillez entrer le texte que vous voulez avoir sur votre Avatar:',
	'Avatar_Preview' => 'Pr&eacute;visualiser l\'Avatar',
	'Your_Avatar' => 'Votre Avatar',
	'Submit_Avatar' => 'Enregistrer l\'avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'En cours d\'envoie...',
	'Upload_Image_Local' => 'Envoyer une image',
	'Uploaded_Images_Local' => 'Mes images',
	'Upload_Image_Local_Explain' => 'S&eacute;lectionnez le fichier a envoyer',
	'Uploaded_Image_Success' => 'L\'image a &eacute;t&eacute; correctement envoy&eacute;e.',
	'Uploaded_Image_BBC' => 'Vous pouvez utiliser ce BBCode pour poster cette image.',
	'Upload_Image_Empty' => 'Vous devez s&eacute;lectionner un fichier &agrave; envoyer vous savez !', //"vous ne pouvez envoyer de l'air" en anglais o/
	'Upload_File_Too_Big' => 'Le fichier que vous essayez d\'envoyer est trop grand ! La taille maximum autoris&eacute;e est de:',
	'Upload_File_Error' => 'Erreur Inconnue',
	'Upload_File_Error_Size' => 'Fichier trop lourd !',
	'Upload_File_Error_Type' => 'Extension non autoris&eacute;e !',
	'Upload_File_Type_Allowed' => 'Seuls ces types de fichier peuvent &ecirc;tre envoy&eacute;es',
	'Upload_File_Max_Size' => 'La taille maximum pour un fichier est',
	'Upload_Insert_Image' => 'Ins&eacute;rer le BBCode',
	'Upload_Close' => 'Fermer',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'Aucune nouveaut&eacute;',

	'Email_confirm' => 'Confirmez votre adresse mail',
	'Email_mismatch' => 'Les adresses mails entr&eacute;es ne correspondent pas.',

	'View_ballot' => 'Voir le Scrutin',
	'Full_edit' => 'Passer en &eacute;dition compl&egrave;te',
	'Save_changes' => 'Sauvegarder',
	'No_subject' => '(Aucun Titre)',
	'Edit_quick_post' => '&Eacute;diter rapidement ce message',
	'AJAX_search_results' => 'Une recherche rapide a trouv&eacute;e %s sujets contenant les mots-clefs de votre titre. Cliquez ici pour les voir.',
	'AJAX_search_result' => 'Une recherche rapide a trouv&eacute;e un sujet contenant les mots-clefs de votre titre. Cliquez ici pour le voir.',
	'More_matches_username' => 'Plus d\'un nom d\'utilisateur correspond avec votre requ&ecirc;te. Merci d\'en s&eacute;lectionner un dans la liste ci-dessus.',
	'No_username' => 'Vous devez entrer un nom d\'utilisateur.',
	'AJAX_quick_search_results' => 'Une recherche rapide a trouv&eacute;e %s sujets avec ces mots-clefs.<br />Vous pouvez voir le premier r&eacute;sultat sur votre droite.<br />Cliquez sur RECHERCHE pour afficher la liste compl&egrave;te.',
	'AJAX_quick_search_result' => 'Une recherche rapide a trouv&eacute;e un sujet avec ces mots-clefs.<br />Le r&eacute;sultat est sur votre droite.',

	'Icon_Description' => 'Description des Images',

	'Feature_Disabled' => 'Cette fonctionnalit&eacute; a &eacute;t&eacute; d&eacute;sactiv&eacute;e.',

// R&eacute;envoyer le mail d'activation - D&Eacute;BUT
	'Resend_activation_email' => 'R&eacute;envoyer le mail d\'activation',
	'Invalid_activation' => 'L\'activation de compte peut uniquement &ecirc;tre faite par les administrateurs.',
	'No_actkey' => 'Il n\'y a pas de clef d\'activation pour votre compte. Veuillez contacter l\'administrateur du forum pour plus d\'information.',
	'Send_actmail_flood_error' => 'Impossible de faire une requ&ecirc;tre si rapidement apr&egrave;s la derni&egrave;re, veuillez r&eacute;essayer un petit peu plus tard.',
	'Resend_activation_email_done' => 'Le mail d\'activation a bien &eacute;t&eacute; r&eacute;envoy&eacute;. V&eacute;rifiez vos mails pour plus d\'information.',
// R&eacute;envoyer le mail d'activation - FIN

	'Bots_Group' => 'Robots',
	'Bots_Color' => 'Couleur des robots',
	'Active_Users_Group' => 'Utilisateurs actifs',
	'Active_Users_Color' => 'Couleur des utilisateurs actifs',
	'Group_Default_Membership' => 'Groupe par d&eacute;faut',
	'Group_Default_Membership_Explain' => 'Choisissez le rang par d&eacute;faut des utilisateurs afin de leur assigner un rang et une couleur.',
	'User_Color' => 'Couleur de l\'Utilisateur',
	'User_Color_Explain' => 'Si vous sp&eacute;cifiez une couleur pour cet utilisateur, elle sera remplac&eacute;e par celle du groupe si vous en pr&eacute;cisez un dans le cadre ci-dessus. Utilisez le code hexad&eacute;cimal sans di&egrave;se (<b>#</b>). Par exemple: ff0000 est le code pour du rouge.',
	'No_Groups_Membership' => 'No Membership',
	'No_Default_Group' => 'Aucun Groupe par D&eacute;faut',
	'Group_members_updated' => 'Membres du groupes mis &agrave; jour avec succ&egrave;s.',
	'Colorize_All' => 'Attribuer la couleur &agrave; tous les membres',
	'Colorize_Selected' => 'Attribuer la couleur aux membres s&eacute;lectionn&eacute;s',

	'CompanyWho' => 'Qui sommes-nous',
	'CompanyWhere' => 'Comment nous Contacter',
	'CompanyServices' => 'Services',
	'CompanyProducts' => 'Produits',

	'ShareThisTopic' => 'Partager ce sujet',

	'Remove_cookies' => 'Supprimer les cookies de ce site',
	'Cookies_deleted' => 'Tous les cookies ont &eacute;t&eacute; supprim&eacute;s. Vous &ecirc;tes maintenant d&eacute;connect&eacute;. <br />Pour terminer la suppression, red&eacute;marrez votre navigateur.',
	'Delete_cookies' => 'Supprimer les cookies',
	'cookies_confirm' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer tous vos cookies sur ce site ?<br /><br />Cette action vous d&eacute;connectera.',

	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Brouillons',
	'Drafts_Action' => 'Action',
	'Drafts_Save' => 'Sauvegarder',
	'Drafts_Load' => 'Charger',
	'Drafts_Saved' => 'Ce brouillon &agrave; &eacute;t&eacute; sauvegard&eacute;',
	'Drafts_Loaded' => 'Ce brouillon &agrave; &eacute;t&eacute; charg&eacute;',
	'Drafts_No_Drafts' => 'Aucun brouillon sauvegard&eacute;',
	'Drafts_Delete_Sel' => 'Supprimer la s&eacute;lection',
	'Drafts_Save_Question' => '<br /><br />&Ecirc;tes-vous s&ucirc;r de vouloir sauvegarder ce message en tant que brouillon ?<br /><br />Notez bien que seul le contenu du message sera sauvegard&eacute;, les options ne le seront pas.',
	'Drafts_Delete_Question' => '<br /><br />&Ecirc;tes-vous s&ucirc;r de vouloir supprimer les brouillons s&eacute;lectionn&eacute;s ?',
	'Drafts_Type' => 'Type de Brouillon',
	'Drafts_Subject' => 'Sujet Brouillon',
	'Drafts_NT' => 'Nouveau sujet',
	'Drafts_NM' => 'R&eacute;pondre',
	'Drafts_NPM' => 'Message Priv&eacute;',

	'CannotEditAdminsPosts' => 'Vous ne pouvez &eacute;diter les messages d\'un administrateur',
	'Random_Number' => 'Nombre Al&eacute;atoire',

	'New_download' => 'Un nouveau t&eacute;l&eacute;chargement &agrave; &eacute;t&eacute; envoy&eacute; ou mis &agrave; jour<br />Cliquez %sici%s pour le voir.',
	'Dl_bug_tracker' => 'Traqueur d\'Erreurs',
	'Downloads_ADV' => 'T&eacute;l&eacute;chargements Avanc&eacute;s',

	'TopicUseful' => 'Avez-vous trouv&eacute; ce sujet utile ?',
	'Article' => 'Article',
	'Comments' => 'Commentaires',

	'Sitemap' => 'Plan du site',

	'Delete_My_Account' => 'Supprimer mon Compte',
	'Delete_My_Account_Explain' => 'Si vous voulez supprimer votre compte sur ce site, veuillez envoyer une requ&ecirc;te en utilisant ce formulaire et votre compte sera d&eacute;sactiv&eacute; aussi vite que possible.<br />Veuillez sp&eacute;cifier "Suppression de compte" si vous souhaitez le supprimer compl&egrave;tement (et non le d&eacute;sactiver) et donnez, si possible, une raison en quelques mots.<br /><b> Attention:</b> les suppressions compl&egrave;tes sont irr&eacute;versibles !',

	'KB_MODE_ON' => 'Activer le mode \'Base de Connaissances\'',
	'KB_MODE_OFF' => 'D&eacute;sactiver le mode \'Base de Connaissances\'',

	'Go_To_Page_Number' => 'Aller &agrave; la page',

	'Admin_Emails' => 'Les administrateurs peuvent m\'envoyer des informations par mail',
	'Allow_PM_IN' => 'Autoriser les utilisateurs &agrave; m\'envoyer des messages priv&eacute;s',
	'Allow_PM_IN_Explain' => 'Notez que les administrateurs, les mod&eacute;rateurs ainsi que vos amis pourront toujours vous envoyer des messsages.',
	'Allow_PM_IN_SEND_ERROR' => 'Le message priv&eacute; ne peut &ecirc;tre envoy&eacute; car le r&eacute;cepteur a ferm&eacute; sa boite de r&eacute;ception.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Amis & Ennemis',
	'UCP_ZEBRA_FOES' => 'Gestion des Ennemis',
	'UCP_ZEBRA_FRIENDS' => 'Gestion des Amis',

	'ADD_FOES' => 'Ajouter de nouveaux ennemis',
	'ADD_FOES_EXPLAIN' => 'Vous pouvez ajouter plusieurs personnes, une par ligne.',
	'YOUR_FOES' => 'Vos Ennemis',
	'YOUR_FOES_EXPLAIN' => 'Pour retirer des utilisateurs, s&eacute;lectionn&eacute; leurs noms et cliquez sur "envoyer".<br />Astuce: Utilisez "ctrl" pour s&eacute;lectionner/d&eacute;selectionner plusieurs personnes.',
	'FOE_MESSAGE' => 'Message d\'un Ennemi',
	'FOES_EXPLAIN' => 'Les ennemis sont les utilisateurs qui seront ignor&eacute;s par d&eacute;faut. Leurs messages ne seront pas totalement visibles. Ils ne pourront pas vous envoyer de messages priv&eacute;s. Vous ne pouvez ignorer les mod&eacute;rateurs et les administrateurs.',
	'FOES_UPDATED' => 'Votre liste d\'ennemis a &eacute;t&eacute; correctement mise &agrave; jour.',
	'FOES_UPDATE_ERROR' => 'Votre liste d\'ennemis n\'a PAS &eacute;t&eacute; mise &agrave; jour.',
	'NO_FOES' => 'Vous n\'avez pas d\'ennemis',

	'ADD_FRIENDS' => 'Ajouter de nouveaux amis',
	'ADD_FRIENDS_EXPLAIN' => 'Vous pouvez ajouter plusieurs personnes, une par ligne.',
	'YOUR_FRIENDS' => 'Vos amis',
	'YOUR_FRIENDS_EXPLAIN' => 'Pour retirer des utilisateurs, s&eacute;lectionn&eacute; leurs noms et cliquez sur "envoyer".<br />Astuce: Utilisez "ctrl" pour s&eacute;lectionner/d&eacute;selectionner plusieurs personnes.',
	'FRIEND_MESSAGE' => 'Message d\'un ami',
	'FRIENDS' => 'Amis',
	'FRIENDS_EXPLAIN' => 'Les amis sont les utilisateurs qui peuvent communiquer avec vous fr&eacute;quemment. Si le th&egrave;me le permet, leurs messages peuvent &ecirc;tre en surbrillance.',
	'FRIENDS_UPDATED' => 'Votre liste d\'amis a &eacute;t&eacute; correctement mise &agrave; jour',
	'FRIENDS_UPDATE_ERROR' => 'Votre liste d\'amis n\'a pas &eacute;t&eacute; mise &agrave; jour.',
	'FRIENDS_ONLINE' => 'Connect&eacute;',
	'FRIENDS_HIDDEN' => 'Invisible',
	'FRIENDS_OFFLINE' => 'D&eacute;connect&eacute;',
	'NO_FRIENDS' => 'Vous n\'avez pas d\'amis',
	'NO_FRIENDS_OFFLINE' => 'Aucun ami d&eacute;connect&eacute;',
	'NO_FRIENDS_ONLINE' => 'Aucun ami connect&eacute;',

	'Default' => 'D&eacute;faut',

	'Reserved_Author' => '[ INVISIBLE ]',
	'Reserved_Topic' => '[ SUJET R&Eacute;SERV&Eacute; ]',
	'Reserved_Post' => '[ MESSAGE R&Eacute;SERV&Eacute; ]',

	'THANKS_RECEIVED' => 'Remerciement re&ccedil;u',

	'RECENT_USER_ACTIVITY' => 'Activit&eacute;e r&eacute;cente de l\'utilisateur',
	'USER_TOPICS_STARTED' => 'Sujets commenc&eacute;s',
	'USER_POSTS' => 'Messages &eacute;crits',
	'USER_TOPICS_VIEWS' => 'Sujets vus',
	'RECENT_USER_STARTED_TITLE' => 'commenc&eacute; par %s',
	'RECENT_USER_STARTED_NAV' => 'Sujets commenc&eacute;s par %s',
	'RECENT_USER_POSTS_TITLE' => 'dont %s post&eacute;s dans',
	'RECENT_USER_POSTS_NAV' => 'Sujets que %s a post&eacute; dans',
	'RECENT_USER_VIEWS_TITLE' => 'vus par %s',
	'RECENT_USER_VIEWS_NAV' => 'Sujets vus par %s',

	'WARN_NO_BUMP' => 'Vous &ecirc;tes le dernier posteur de ce sujet: vous ne pouvez &eacute;crire un nouveau message que toutes les 24 heures &agrave; moins que quelqu\'un ne r&eacute;ponde avant.',

	'LINK_THIS_TOPIC' => 'Liez ce sujet',
	'LINK_URL' => 'Adresse',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Parcourir les Nouvelles post&eacute;es',
	'TOPICS_POSTED' => 'Chercher les sujets commenc&eacute;s',
	'POSTS_POSTED' => 'Cherche tous les messages de l\'utilisateur',

	'ACCOUNT_DELETION_REQUEST' => '%s a demand&eacute; la suppresion de son compte.',

	'SORT_TOPICS' => 'Classer les sujets',
	'SORT_TOPICS_NEWEST' => 'Plus r&eacute;cent',
	'SORT_TOPICS_OLDEST' => 'Plus ancien',

	'EDIT_POST_DETAILS' => '&Eacute;diter les d&eacute;tails du message',
	'CURRENT_POSTER' => 'Posteur actuel',
	'NEW_POSTER' => 'Nouveau posteur',
	'DETAILS_CHANGED' => '<b>Les d&eacute;tails du message ont &eacute;t&eacute; correctement &eacute;dit&eacute;.</b></span><br /><span class="postdetails">Cette fen&ecirc;tre se fermera d\'ici trois secondes.',

	'Redirect' => 'Redirection',
	'Redirect_to' => 'Si votre navigateur ne vous redirige pas automatiquement, cliquez %sici%s pour &ecirc;tre redirig&eacute;',

	'InProgress' => 'En cours',

	'HAPPY_BIRTHDAY' => 'Joyeux Anniversaire',

	'DOWNLOAD' => 'T&eacute;l&eacute;charger',
	'DOWNLOADED' => 'T&eacute;l&eacute;charg&eacute;',
	'FILESIZE' => 'Taille du fichier',
	'FILENAME' => 'Nom du fichier',
	'FILE_NOT_AUTH' => 'Vous n\'&ecirc;tes pas autoris&eacute; &agrave; t&eacute;l&eacute;charger ce fichier',
	'SHOW_POSTS_FROM' => 'Montrer les messages du',
	'SHOW_POSTS_TO' => 'au',

	'SEE_MORE_DETAILS' => 'Voir plus de d&eacute;tails',
	'UNKNOWN' => 'Inconnu',
	'MASS_PM' => 'MP de masse',
	'TEXT_FORMAT' => 'Format',
	'SENDER' => 'Envoyeur',
	'PM_NOTIFICATION' => 'Bonjour,<br /><br />Vous avez re&ccedil;u un nouveau message priv&eacute; sur "{SITENAME}".<br /><br />Vous pouvez le voir en cliquant sur le lien suivant:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'Recherche Google',
	'GSEARCH_ENGINE' => 'Utiliser le moteur de recherche Google',
	'SEARCH_WHAT' => 'Rechercher quoi ?',
	'SEARCH_WHERE' => 'Rechercher dans',
	'SEARCH_THIS_FORUM' => 'Chercher dans ce forum',
	'SEARCH_THIS_TOPIC' => 'Chercher dans ce sujet',
	'VF_ALL_TOPICS' => 'Tous les Sujets',

	'WHITE_LIST_MESSAGE' => 'Ce site demande une confirmation par mail pour activer votre compte. Veuillez v&eacute;rifier que ce domaine est dans la liste blanche de votre syst&egrave;me d\'anti-spam ou vous pourriez ne jamais recevoir le message d\'activation.',
	'CLICK_RETURN_HOME' => 'Cliquez %sici%s pour retourner &agrave; la page d\'accueil',

	'RATINGS' => 'Notations',

	'ERROR_TABLE' => 'Impossible de faire une requ&ecirc;te sur la table %s',

	'SMILEYS' => 'Smileys',
	'SMILEYS_NO_CATEGORIES' => 'Aucune cat&eacute;gorie d&eacute;finie',
	'SMILEYS_CATEGORY' => 'Cat&eacute;gorie',
	'SMILEYS_GALLERY' => 'Galerie des Smileys',
	'SMILEYS_STANDARD' => 'Smileys Standarts',

	'QUICK_LIST' => 'Liste compl&egrave;te',
	'NORMAL_LIST' => 'Liste normale',

	'RETURN_PAGE' => '%sRetourner &agrave; la page pr&eacute;cedente%s',
	'FILE_NOT_FOUND' => 'Fichier introuvable',
	'FSOCK_DISABLED' => 'Fonction "FSOCK" d&eacute;sactiv&eacute;e',

	'MANAGEMENT' => 'Gestion',
	'SORT_ORDER' => 'Classer par',
	'SORT_DIR' => 'Ordre de classement',

	'CONTACTS' => 'Contacts',

	// Event Registration - BEGIN
	'Reg_Title' => 'Rejoindre l\'&Eacute;v&eacute;nement',
	'Post_Registration' => 'Inscription &agrave; l\'&eacute;v&eacute;nement',
	'Add_registration' => 'Nouvel &eacute;v&eacute;nement',
	'Add_reg_explain' => '&nbsp;&bull; Cochez "<b>Activer</b>" pour afficher le formulaire d\'inscription avec ce message. D&eacute;cochez pour le cacher.<br />&nbsp;&bull; Cochez "<b>Remettre &agrave; z&eacute;ro</b>" pour supprimer tous les membres actuellement inscrits.<br />&nbsp;&bull; Entrez un nombre dans "<b>Places</b>" pour limiter le nombre d\'inscriptions. Si vous entrez "0", ou que vous ne remplissez pas le champ, il n\'y aura pas de limites.',
	'reg_activate' => 'Activer',
	'reg_reset' => 'Remettre &agrave; Z&eacute;ro',
	'Reg_Insert' => 'Vous avez rejoind l\'&eacute;v&eacute;nement.',
	'Reg_Change' => 'Inscription chang&eacute;e.',
	'Reg_Confirm' => 'Inscription confirm&eacute;e.',
	'Reg_Unregister' => 'Inscription annul&eacute;e.',
	'Reg_Max_Registrations' => 'La limite d\'utilisateurs pour cet &eacute;v&eacute;nement est atteinte. Les inscriptions ne sont plus possibles.',
	'Reg_No_Slots_Left' => 'Aucune place restante pour s\'inscrire.',
	'Reg_One_Slot_Left' => 'Une place restante pour s\'inscrire.',
	'Reg_Slots_Left' => '%s places restantes pour s\'inscrire.',
	'Reg_Self_Unregister' => 'Se d&eacute;sinscrire',
	'Reg_Own_Confirmation' => 'Confirmation',
	'Reg_Own_Confirmed' => 'confirm&eacute;',
	'Reg_Green_Option' => 'Option verte',
	'Reg_Blue_Option' => 'Option bleue',
	'Reg_Red_Option' => 'Option rouge',
	'Reg_Value_Max_Registrations' => 'Places',
	'Reg_Do' => 'S\'inscrire',
	'Reg_Maybe' => 'Pas certain',
	'Reg_Dont' => 'Pas cette fois-ci',
	'Reg_Head_Username' => 'Utilisateur:',
	'Reg_Head_Time' => 'Date:',
	'Reg_for' => 'Effectuer des inscriptions pendant',
	'Reg_for_explain' => '[ Entrez 0 ou laissez blanc pour que les inscriptions ne finissent jamais ]',
	'Reg_no_options_specified' => 'Vous devez sp&eacute;cifier au moins une option.',
	'Reg_event_date' => '<b>Date de l\'&Eacute;v&eacute;nement: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Nous sommes d&eacute;sol&eacute;, mais le forum est actuellement en mode <b>lecture seule</b> ce qui veut dire que vous ne pouvez poster que si vous avez les droits suffisants. Veuillez r&eacute;essayer plus tard.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Categorie',
	// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'D&eacute;sol&eacute;, mais vous ne pouvez &eacute;diter vos messages que durant les <b>%d</b> minutes suivant l\'envoie.',
	'CLEAN_NAME' => 'Nettoyer le Nom',
	'CLEAN_NAME_EXPLAIN' => 'Seuls les caract&egrave;res alpha-num&eacute;riques et les slashs autoris&eacute;s',
	'TOPIC_TAGS' => 'Tags et Mots-Clefs',
	'TOPIC_TAGS_EXPLAIN' => 'S&eacute;parer chaque tag d\'une virgule',
	'TOPIC_TAGS_CLOUDS' => 'Nuage de Mots-Clefs',
	'TOPIC_TAGS_LIST' => 'Liste des Tags et Mots-Clefs',
	'TAG_COUNT' => 'Compteur',
	'TAG_TEXT' => 'Tag',
	'TAGS_TEXT' => 'Tags',
	'TAG_RESULTS' => 'Tag s&eacute;lectionn&eacute; : <b>%s</b>',
	'TAGS_SEARCH' => 'Recherche le Tag...',
	'TAGS_SEARCH_NO_RESULTS' => 'Aucun Tag trouv&eacute;!',
	'TAGS_NO_TAGS' => 'Aucun Tag n\'a &eacute;t&eacute; d&eacute;fini.',
	'TAGS_NO_TAG' => 'Le Tag sp&eacute;cifi&eacute; n\'existe pas',

	'SQL_ERROR_OCCURRED' => 'Une erreur SQL est survenue durant le chargement de cette page. Merci de contacter l\'administrateur du site si ce probl&egrave;me persiste.',

	'PLUGIN_DISABLED' => 'This plugin is currently disabled.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Chat Priv&eacute;',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Chat direct avec cet utilisateur',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'Vous avez une requ&ecirc;te de chat',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Trier par',
	'ORDER' => 'M&eacute;thode de classification',
	'SUBMIT' => 'Envoyer',
	'DATE' => 'Date',
	'USERID' => 'Identifiant de l\'Utilisateur',
	'USERNAME' => 'Nom d\'Utilisateur',
	'EMAIL' => 'Mail',
	'WEBSITE' => 'Site Web',
	'EDIT' => '&Eacute;diter',
	'DELETE' => 'Supprimer',
	'YES' => 'Oui',
	'NO' => 'Non',

	'DB_ITEM_VIEW' => 'Voir',
	'DB_ITEM_UPDATED' => 'Mise &agrave; jour effectu&eacute;e avec succ&egrave;s.',
	'DB_ITEM_ADD' => 'Ajouter',
	'DB_ITEM_ADDED' => 'Ajout effectu&eacute; avec succ&egrave;s.',
	'DB_ITEM_REMOVED' => 'Suppression effectu&eacute;e avec succ&egrave;s.',
	'DB_ITEM_NO_ITEMS' => '(vide)',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Cliquez %sici%s pour voir les donn&eacute;es ajout&eacute;es.',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Cliquez %sici%s pour retourner &agrave; la liste.',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'Vous avez d&eacute;pass&eacute; le nombre maximum de tentatives de connexion (%s). Vous ne pouvez plus vous connecter durant les prochaines %s minutes.',
	'LOGIN_CONFIRM_EXPLAIN' => 'Pour &eacute;viter le bruteforcing des comptes, le forum vous demande un code de confirmation apr&egrave;s un certain nombre de tentatives de connexion. Vous devez recopier le code que vous voyez ci-dessous. Si vous &ecirc;tes handicap&eacute; visuellement ou que vous ne pouvez pas voir le code, %scontactez un Administrateur%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'Vous avez d&eacute;pass&eacute; le nombre maximum de tentatives de connexion. En plus du nom de compte et du mot de passe vous devez maintenant aussi entrer le code de l\'image que vous voyez ci-dessous.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'Vous n\'avez pas &eacute;t&eacute; autoris&eacute; par Apache.',
	'LOGIN_ERROR_PASSWORD' => 'Vous avez sp&eacute;cifi&eacute; un mot de passe incorrect. Veuillez le v&eacute;rifier et r&eacute;essayer. Si le probl&egrave;me persiste, contactez un %sAdministrateur%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'Il n\'a pas &eacute;t&eacute; possible de convertir votre mot de passe lors de la mise &agrave; jour du site. Veuillez %sd&eacute;finir un nouveau mot de passe%s. Si le probl&egrave;me persiste, %scontactez un Administrateur%s.',
	'LOGIN_ERROR_USERNAME' => 'Vous avez sp&eacute;cifi&eacute; un nom d\'utilisateur incorrect. Veuillez le v&eacute;rifier et r&eacute;essayer. Si le probl&egrave;me persiste, contactez un %sAdministrateur%s.',
	'NO_PASSWORD_SUPPLIED' => 'Vous ne pouvez pas connecter sans mot de passe.',
	'ACTIVE_ERROR' => 'Le nom d\'utilisateur est actuellement inactif. Si vous avez des probl&egrave;mes avec l\'activation, %scontactez un Administrateur%s.',

	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'Aucun &eacute;v&egrave;nement pr&eacute;vu',
	'EVENT_START_DATE' => 'Date de D&eacute;part',
	'EVENT_START_TIME' => 'Heure de D&eacute;part',
	'EVENT_END_DATE' => 'Date de Fin',
	'EVENT_END_TIME' => 'Heure de Fin',
	'EVENT_TITLE' => '&Eacute;v&egrave;nement',
	'EVENT_FORUM' => 'Cat&eacute;gorie',

	'MAX_OPTIONS_SELECT' => 'Vous pouvez s&eacute;lectionner jusqu\'&agrave; <strong>%d</strong> options',
	'MAX_OPTION_SELECT' => 'Vous pouvez s&eacute;lectionner <strong>une</strong> option',
	'NO_POLLS' => 'Aucun Sondage',
	'NO_VOTE_OPTION' => 'Vous devez choisir une option pour voter.',
	'NO_VOTES' => 'Aucun Vote',
	'POLL_ENDED_AT' => 'Sondage se terminant le %s',
	'POLL_MAX_OPTIONS' => 'Options max',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'Nombre maximum d\'options par utilisateur',
	'POLL_NO_GUESTS' => 'D&eacute;sol&eacute;, mais les invit&eacute;s ne peuvent voter',
	'POLL_RUN_TILL' => 'Sondage continuant jusqu\'au %s',
	'POLL_VOTE_CHANGE' => 'Autoriser le changement de choix',
	'POLL_VOTED_OPTION' => 'Vous avez vot&eacute; pour cette option',
	'TOO_MANY_VOTE_OPTIONS' => 'Vous ne pouvez pas choisir autant d\'options.',
	'VIEW_POLL' => 'Voir le sondage',
	'VOTE_SUBMITTED' => 'Votre vote &agrave; &eacute;t&eacute; pris en compte.',
	'VOTE_CONVERTED' => 'Impossible de changer votre vote pour les sondages convertis.',

	'FORM_INVALID' => 'Le formulaire envoy&eacute; est invalide. Essayez &agrave; nouveau.',	'NO_USERS_FOUND' => 'No users found',

	'NO_USERS_FOUND' => 'Aucun utilisateur trouv&eacute;',
	'POST_IP' => 'Adresse IP',
	'FIND_USERNAME' => 'Trouver un membre',
	'FIND_USERNAME_HIDE' => 'Cacher le formulaire &quot;trouver un membre&quot;',
	'FIND_USERNAME_EXPLAIN' => 'Utilisez ce formulaire pour chercher des membres sp&eacute;cifiques. Vous n\'avez pas besoin de remplir tous les champs. Pour faire des recherches partielles utilisez * comme joker. Utilisez le format <kbd>YYYY-MM-DD</kbd> pour les dates. Utilisez les cases &agrave; cocher pour s&eacute;lectionner plus d\'un utilisateur (plusieurs nom d\'utilisateurs peuvent &ecirc;tre accept&eacute;s selon le formulaire) et cliquez sur le bouton " Utiliser la S&eacute;lection " pour revenir au formulaire pr&eacute;c&eacute;dent.',

	'AUTH_NONE' => 'AUCUN',
	'AUTH_ALL' => 'TOUS',
	'AUTH_REG' => 'CONNECT&Eacute;',
	'AUTH_SELF' => 'SOIS-M&Ecirc;ME',
	'AUTH_PRIVATE' => 'PRIV&Eacute;',
	'AUTH_MOD' => 'MOD',
	'AUTH_JADMIN' => 'J ADMIN',
	'AUTH_ADMIN' => 'ADMIN',

	'SHARE' => 'Partager',
	'LIKE' => 'Aimer',
	'UNLIKE' => 'Ne pas aimer',
	'LIKE_POST' => 'Aimer ce message',
	'UNLIKE_POST' => 'Ne pas aimer ce message',
	'LIKE_TIME' => 'Date',
	'LIKE_RECAP' => 'Membres appr&eacute;ciant ce message',
	'LIKE_COUNTER_YOU' => 'Vous aimez ce message',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'Vous et %s aimez ce message',
	'LIKE_COUNTER_YOU_OTHERS' => 'Vous et %s autres personnes aimez ce message',
	'LIKE_COUNTER_OTHERS' => '%s personnes aiment ce message',
	'LIKE_COUNTER_OTHERS_SINGLE' => '%s aime ce message',

	'FRIENDSHIP_STATUS' => 'Relation',
	'FRIEND_ADD' => 'Ajouter dans les amis',
	'FRIEND_REMOVE' => 'Retirer des amis',
	'FOE_ADD' => 'Ajouter dans les ennemis',
	'FOE_REMOVE' => 'Retirer des ennemis',

	'SOCIAL_NETWORKS' => 'R&eacute;seaux Sociaux',
	'USER_FIRST_NAME' => 'Pr&eacute;nom',
	'USER_LAST_NAME' => 'Nom de famille',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

	'INACTIVE_USER' => 'Utilisateur inactif',
	'SEARCH_MIN_CHARS' => 'Vous devez au moins entrer %d caract&egrave;res pour faire une recherche.',

	'EXTRA_STATS_SHOW' => 'Montrer les statistiques avanc&eacute;es',
	'EXTRA_STATS_HIDE' => 'Cacher les statistiques avanc&eacute;es',
	'RESERVED' => 'Reserv&eacute;',

	'VIEW_TOPICS_DAYS' => 'Afficher les sujets du jour pr&eacute;c&eacute;dent',
	'VIEW_TOPICS_DIR' => 'Afficher l\'ordre d\'affichage du sujet',
	'VIEW_TOPICS_KEY' => 'Afficher les sujets en fonction',
	'VIEW_POSTS_DAYS' => 'Afficher les messages du jour pr&eacute;c&eacute;dent',
	'VIEW_POSTS_DIR' => 'Afficher l\'ordre d\'affichage du message',
	'VIEW_POSTS_KEY' => 'Afficher les messages en fonction',

	'AUTHOR' => 'de l\'Auteur',
	'POST_TIME' => 'de l\'Heure',
	'REPLIES' => 'des R&eacute;ponses',
	'SUBJECT' => 'du Sujet',
	'VIEWS' => 'des Vues',

	'INVALID' => 'Donn&eacute;e Invalide.',
	'TOO_LARGE' => 'La valeur entr&eacute;e est trop large.',
	'TOO_LONG' => 'La valeur entr&eacute;e est trop longue.',
	'TOO_SHORT' => 'La valeur entr&eacute;e est trop courte.',
	'TOO_SMALL' => 'La valeur entr&eacute;e est trop petite.',
	'WRONG_DATA' => 'Donn&eacute;e Incorrecte.',

	'ATTACHMENTS' => 'Fichiers attachés',
	'ERROR_NO_ATTACHMENT' => 'Le fichier que vous essayez de t&eacute;l&eacute;charger n\'existe pas.',
	'NO_FORUM' => 'Le forum s&eacute;lectionn&eacute; n\'existe pas.',
	'NO_TOPIC' => 'Le sujet ou message demand&eacute; n\'existe pas.',
	'NO_USER' => 'D&eacute;sol&eacute;, mais cet utilisateur n\'existe pas.',

	'AJAX_SEARCH' => 'Recherche...',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Activer le style Mobile',
	'MOBILE_STYLE_DISABLE' => 'D&eacute;sactiver le style Mobile',

	'INVALID_SESSION' => 'Session invalide. Si le probl&egrave;me persiste, contactez un administrateur.',

	'BACK_TO_TOP' => 'Haut',
	'BACK_TO_PREV' => 'Retourner &agrave; la page pr&eacute;c&eacute;dente',

	'CMS_EDIT_PARENT_BLOCK' => '&Eacute;diter le bloc parent',

	'UPI2DB_DISABLED' => 'UPI2DB Désactivé',
	'UPI2DB_LINK_U' => 'UPI2DB Non-lus',
	'UPI2DB_LINK_M' => 'UPI2DB Marqués',
	'UPI2DB_LINK_P' => 'UPI2DB Toujours lu',
	'UPI2DB_LINK_FULL' => 'UPI2DB Informations',
	'NEW_POSTS_LINK' => 'Nouveaux messages',
	'LOGIN_LOGOUT_LINK' => 'Connexion/Déconnexion',
	'MENU_EMPTY_LINK' => 'Lien vide',

	'IP_BLACKLISTED' => 'Votre IP (%s) a été bloquée. Pour plus de détails veuillez cliquer ici : <a href="%s">%s</a>.',

	'PRINTABLE_VERSION' => 'Version Imprimable',
	'CHANGE_FONT_SIZE' => 'Changer la taille de la police',
	'FULL_EDITOR' => 'Utiliser l\'éditeur complet',
	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();
// here you can make more entries if needed
$lang['Prune_commands'][0] = 'D&eacute;lester les utilisateurs sans messages';
$lang['Prune_explain'][0] = 'Les utilisateurs qui n\'ont pas post&eacute;, <b>except&eacute;</b> les utilisateurs s\'&eacute;tant inscrit depuis %d jours';
$lang['Prune_commands'][1] = 'D&eaucte;lester les utilisateurs inactifs';
$lang['Prune_explain'][1] = 'Les utilisateurs qui ne se sont jamais connect&eacute;s, <b>except&eacute;</b> les utilisateurs s\'&eacute;tant inscrit depuis %d jours';
$lang['Prune_commands'][2] = 'D&eacute;lester les utilisateurs non activ&eacute;s';
$lang['Prune_explain'][2] = 'Les utilisateurs qui n\'ont jamais &eacute;t&eacute; activ&eacute;, <b>except&eacute;</b> les utilisateurs s\'&eacute;tant inscrit depuis %d jours';
$lang['Prune_commands'][3] = 'D&eacute;lester les utilisateurs qui ne sont pas venus depuis soixante jours';
$lang['Prune_explain'][3] = 'Les utilisateurs qui ne se sont pas connect&eacute;s depuis soixante jours, <b>except&eacute;</b> les utilisateurs s\'&eacute;tant inscrit depuis %d jours';
$lang['Prune_commands'][4] = 'D&eacute;lester les utilisateurs qui ne postent presque jamais';
$lang['Prune_explain'][4] = 'Les utilisateurs qui ont post&eacute;s moins de un message pour dix jours, <b>except&eacute;</b> les utilisateurs s\'&eacute;tant inscrit depuis %d jours';
$lang['Prune_commands'][5] = 'D&eacute;lester les utilisateurs qui ne postent pas et qui ne viennent pas souvent';
$lang['Prune_explain'][5] = 'Les utilisateurs qui n\'ont jamais post&eacute;s et qui ne sont pas pass&eacute;s r&eacute;cemment, <b>except&eacute;</b> les utilisateurs s\'&eacute;tant inscrit depuis %d jours';

// Timezones - BEGIN
$lang['All_times'] = 'Toutes les dates sont au format %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'GTM - 12 Heures',
	'-11' => 'GTM - 11 Heures',
	'-10' => 'GTM - 10 Heures',
	'-9.5' => 'GTM - 9 Heures 30',
	'-9' => 'GTM - 9 Heures',
	'-8' => 'GTM - 8 Heures',
	'-7' => 'GTM - 7 Heures',
	'-6' => 'GTM - 6 Heures',
	'-5' => 'GTM - 5 Heures',
	'-4.5' => 'GTM - 4 Heures 30',
	'-4' => 'GTM - 4 Heures',
	'-3.5' => 'GTM - 3 Heures 30',
	'-3' => 'GTM - 3 Heures',
	'-2' => 'GTM - 2 Heures',
	'-1' => 'GTM - 1 Heure',
	'0' => 'GTM',
	'1' => 'GTM + 1 Heure',
	'2' => 'GTM + 2 Heures',
	'3' => 'GTM + 3 Heures',
	'3.5' => 'GTM + 3 Heures 30',
	'4' => 'GTM + 4 Heures',
	'4.5' => 'GTM + 4 Heures 30',
	'5' => 'GTM + 5 Heures',
	'5.5' => 'GTM + 5 Heures 30',
	'5.75' => 'GTM + 5 Heures 45',
	'6' => 'GTM + 6 Heures',
	'6.5' => 'GTM + 6 Heures 30',
	'7' => 'GTM + 7 Heures',
	'8' => 'GTM + 8 Heures',
	'8.75' => 'GTM + 8 Heures 45',
	'9' => 'GTM + 9 Heures',
	'9.5' => 'GTM + 9 Heures 30',
	'10' => 'GTM + 10 Heures',
	'10.5' => 'GTM + 10 Heures 30',
	'11' => 'GTM + 11 Heures',
	'11.5' => 'GTM + 11 Heures 30',
	'12' => 'GTM + 12 Heures',
	'12.75' => 'GTM + 12:45 Hours',
	'13' => 'GTM + 13 Hours',
	'14' => 'GTM + 14 Hours',
	'dst' => '[ <abbr title="Heure d\'&Eacute;t&eacute;">DST</abbr> ]',
);

// These are displayed in the timezone select box
$lang['tz_zones'] = array(
	'-12' => '[GTM - 12] Baker Island Time',
	'-11' => '[GTM - 11] Niue Time, Samoa Standard Time',
	'-10' => '[GTM - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
	'-9.5' => '[GTM - 9:30] Marquesas Islands Time',
	'-9' => '[GTM - 9] Alaska Standard Time, Gambier Island Time',
	'-8' => '[GTM - 8] Pacific Standard Time',
	'-7' => '[GTM - 7] Mountain Standard Time',
	'-6' => '[GTM - 6] Central Standard Time',
	'-5' => '[GTM - 5] Eastern Standard Time',
	'-4.5' => '[GTM - 4:30] Venezuelan Standard Time',
	'-4' => '[GTM - 4] Atlantic Standard Time',
	'-3.5' => '[GTM - 3:30] Newfoundland Standard Time',
	'-3' => '[GTM - 3] Amazon Standard Time, Central Greenland Time',
	'-2' => '[GTM - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
	'-1' => '[GTM - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
	'0' => '[GTM] Western European Time, Greenwich Mean Time',
	'1' => '[GTM + 1] Central European Time, West African Time',
	'2' => '[GTM + 2] Eastern European Time, Central African Time',
	'3' => '[GTM + 3] Moscow Standard Time, Eastern African Time',
	'3.5' => '[GTM + 3:30] Iran Standard Time',
	'4' => '[GTM + 4] Gulf Standard Time, Samara Standard Time',
	'4.5' => '[GTM + 4:30] Afghanistan Time',
	'5' => '[GTM + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
	'5.5' => '[GTM + 5:30] Indian Standard Time, Sri Lanka Time',
	'5.75' => '[GTM + 5:45] Nepal Time',
	'6' => '[GTM + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
	'6.5' => '[GTM + 6:30] Cocos Islands Time, Myanmar Time',
	'7' => '[GTM + 7] Indochina Time, Krasnoyarsk Standard Time',
	'8' => '[GTM + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
	'8.75' => '[GTM + 8:45] Southeastern Western Australia Standard Time',
	'9' => '[GTM + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
	'9.5' => '[GTM + 9:30] Australian Central Standard Time',
	'10' => '[GTM + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
	'10.5' => '[GTM + 10:30] Lord Howe Standard Time',
	'11' => '[GTM + 11] Solomon Island Time, Magadan Standard Time',
	'11.5' => '[GTM + 11:30] Norfolk Island Time',
	'12' => '[GTM + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
	'12.75' => '[GTM + 12:45] Chatham Islands Time',
	'13' => '[GTM + 13] Tonga Time, Phoenix Islands Time',
	'14' => '[GTM + 14] Line Island Time',
);
// Timezones - END

// Dates And Times - BEGIN
$lang = array_merge($lang, array(
	'WEEK_DAY_SUNDAY' => 'Dimanche',
	'WEEK_DAY_MONDAY' => 'Lundi',
	'WEEK_DAY_TUESDAY' => 'Mardi',
	'WEEK_DAY_WEDNESDAY' => 'Mercredi',
	'WEEK_DAY_THURSDAY' => 'Jeudi',
	'WEEK_DAY_FRIDAY' => 'Vendredi',
	'WEEK_DAY_SATURDAY' => 'Samedi',

	'TIME_YEAR' => 'An',
	'TIME_MONTH' => 'Mois',
	'TIME_DAY' => 'Jour',
	'TIME_HOUR' => 'Heure',
	'TIME_MINUTE' => 'Minute',
	'TIME_SECOND' => 'Seconde',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Jan 2007, 13:37',
		'd M Y H:i' => '01 Jan 2007 13:37',
		'M jS, \'y, H:i' => 'Jan 1er, \'07, 13:37',
		'D M d, Y g:i a' => 'Lun Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Janvier 1er, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Aujourd\'hui, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Aujourd\'hui, 1:37 pm / Janvier 1er, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D jS M Y, H:i', // Lun 1er Jan 2007, 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Aujourd\'hui',
	'TOMORROW' => 'Demain',
	'YESTERDAY' => 'Hier',
	'AGO' => array(
		0 => 'il y a moins d\'une minute',
		1 => '%d minute plus tÃ´t',
		2 => '%d mminutes plus tÃ´t',
		60=> '1 heure plus tÃ´t',
	),

	'Sunday' => 'Dimanche',
	'Monday' => 'Lundi',
	'Tuesday' => 'Mardi',
	'Wednesday' => 'Mercredi',
	'Thursday' => 'Jeudi',
	'Friday' => 'Vendredi',
	'Saturday' => 'Samedi',

	'Sun' => 'Dim',
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mer',
	'Thu' => 'Jeu',
	'Fri' => 'Ven',
	'Sat' => 'Sam',

	'SUN_S' => 'Di',
	'MON_S' => 'Lu',
	'TUE_S' => 'Ma',
	'WED_S' => 'Me',
	'THU_S' => 'Je',
	'FRI_S' => 'Ve',
	'SAT_S' => 'Sa',

	'January' => 'Janvier',
	'February' => 'F&eacute;vrier',
	'March' => 'Mars',
	'April' => 'Avril',
	'May' => 'Mai',
	'June' => 'Juin',
	'July' => 'Juillet',
	'August' => 'Ao&ucirc;t',
	'September' => 'Septembre',
	'October' => 'Octobre',
	'November' => 'Novembre',
	'December' => 'Decembre',

	'JAN' => 'Jan',
	'FEB' => 'F&eacute;v',
	'MAR' => 'Mar',
	'APR' => 'Avr',
	'MAY' => 'Mai',
	'JUN' => 'Juin',
	'JUL' => 'Juil',
	'AUG' => 'Ao&ucirc;',
	'SEP' => 'Sep',
	'OCT' => 'Oct',
	'NOV' => 'Nov',
	'DEC' => 'Dec',

	'Jan_short' => 'Jan',
	'Feb_short' => 'F&eacute;v',
	'Mar_short' => 'Mar',
	'Apr_short' => 'Avr',
	'May_short' => 'Mai',
	'Jun_short' => 'Juin',
	'Jul_short' => 'Juil',
	'Aug_short' => 'Ao&ucirc;',
	'Sep_short' => 'Sep',
	'Oct_short' => 'Oct',
	'Nov_short' => 'Nov',
	'Dec_short' => 'Dec',
);

$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);

$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);

$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);

$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// Dates And Times - END

//====================================================
// Do not insert anything below this line
//====================================================

?>