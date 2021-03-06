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
*
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
	'cms_block_ads' => 'Pubs',
	'cms_block_ads_tla' => 'Pubs',
	'cms_block_ads_tla_new' => 'Nouvelle pub',
	'cms_block_ajax_shoutbox' => 'Shoutbox',
	'cms_block_album' => 'Album',
	'cms_block_birthdays' => 'Anniversaires',
	'cms_block_calendar' => 'Calendrier',
	'cms_block_calendar_events' => '&Eacute;vènements',
	'cms_block_center_downloads' => 'Téléchargements',
	'cms_block_clock' => 'Horloge',
	'cms_block_donate' => 'Dons',
	'cms_block_dyn_menu' => 'Liens rapide',
	'cms_block_flash' => 'Flash',
	'cms_block_flash_news' => 'Flash News',
	'cms_block_forum' => 'News',
	'cms_block_forum_articles' => 'News',
	'cms_block_forum_attach' => 'News avancées',
	'cms_block_forum_list' => 'Liste des forums',
	'cms_block_global_header' => 'En-tête globale',
	'cms_block_global_header_simple' => 'En-tête globale simple',
	'cms_block_gsearch' => 'Recherche google',
	'cms_block_gsearch_hor' => 'Recherche google horizontale',
	'cms_block_kb' => 'Base de connaissances',
	'cms_block_links' => 'Liens',
	'cms_block_menu' => 'Navigation',
	'cms_block_nav_header' => 'En-tête',
	'cms_block_nav_links' => 'Carte du site',
	'cms_block_nav_logo' => 'Logo',
	'cms_block_new_downloads' => 'Derniers téléchargements',
	'cms_block_news' => 'News',
	'cms_block_news_archive' => 'Archives',
	'cms_block_news_posters' => 'Posteurs de news',
	'cms_block_online_users' => 'Qui est en ligne',
	'cms_block_online_users_chat' => 'Qui est sur la shoutbox',
	'cms_block_paypal' => 'PayPal',
	'cms_block_paypal_donate' => 'Dons',
	'cms_block_plugin_guestbook' => 'Livre d&#39;or',
	'cms_block_poll' => 'Sondage',
	'cms_block_random_attach' => 'Fichier joint aléatoire',
	'cms_block_random_topics' => 'Sujets aléatoires',
	'cms_block_random_topics_ver' => 'Sujets aléatoires',
	'cms_block_random_user' => 'Utilisateur aléatoire',
	'cms_block_recent_articles' => 'Articles récents',
	'cms_block_recent_topics' => 'Sujets récents',
	'cms_block_recent_topics_wide' => 'Sujets récents',
	'cms_block_referers' => 'Référants',
	'cms_block_rss' => 'RSS',
	'cms_block_search' => 'Recherche',
	'cms_block_sec_menu' => 'Menu avancé',
	'cms_block_sh_visit_counter' => 'Compteur de visites',
	'cms_block_shoutbox' => 'Shoutbox',
	'cms_block_staff' => '&Eacute;quipe',
	'cms_block_statistics' => 'Statistiques',
	'cms_block_style' => 'Style',
	'cms_block_top_downloads' => 'Téléchargements populaires',
	'cms_block_top_likes' => 'Sujets populaires',
	'cms_block_top_nav' => 'Navigation',
	'cms_block_top_posters' => 'Posteurs populaires',
	'cms_block_user_block' => 'Block utilisateur',
	'cms_block_users_visited' => 'Utilisateurs actifs',
	'cms_block_visit_counter' => 'Compteur de visites',
	'cms_block_welcome' => 'Bienvenue',
	'cms_block_wordgraph' => 'Mots-clefs',
	'cms_block_xs_news' => 'News',

	'Advanced_GSearch' => 'Recherche Google avancée',
	'Advanced_search' => 'Rercherche avancée',
	'Album' => 'Album',
	'All_News_Archives' => 'Toutes les archives de news',
	'All_News_Categories' => 'Toutes les archives de catégories',
	'Articles' => 'Articles',
	'Articles_time' => 'Posté le',
	'Articles_options' => 'Options',
	'Article_Reply' => 'Commenter',
	'Article_Print' => 'Imprimer cet article',
	'Article_Email' => 'Envoyer par e-mail à un ami',
	'Censor' => 'Censurer',
	'Click_to_join_chat' => 'Rejoindre le chat',
	'Comments' => 'Commentaires',
	'Credits' => 'Crédits',
	'Day_users' => '%d utilisateurs enregistrés durants les %d dernières heures:',
	'Disable_BBCode_post' => 'Désactiver les BBCode dans ce message',
	'Disable_HTML_post' => 'Désactiver le HTML dans ce message',
	'Dls' => 'Téléchargements',
	'Donate_Funds' => 'Faire un don',
	'GSearch' => 'Rerche',
	'GSearch2' => 'Recherche google:',
	'GSearch_At' => 'Rechercher dans',
	'Guest' => 'Invité',
	'Guest_user_total' => '%d invité',
	'Guest_users_total' => '%d invités',
	'Guest_users_zero_total' => '0 invités',
	'Hidden_user_total' => '%d utilisateur caché',
	'Hidden_users_total' => '%d utilisateurs cachés et ',
	'Hidden_users_zero_total' => 'aucun utilisateur caché et ',
	'How_Many_Chatters' => 'Il y a <b>%d</b> utilisateurs connectés au chat actuellement.',
	'Kb_name' => 'Base de connaissances',
	'IP_info' => 'Informations sur l&39;IP',
	'Login_to_join_chat' => 'Veuillez vous connecter au forum pour utiliser le chat',
	'Login_to_vote' => 'Vous devez vous connecter pour voter',
	'Lookup_IP' => 'Rechercher l&#39;adresse IP',
	'New_donations' => 'Nouveaux dons',
	'New_downloads' => 'Nouveaux téléchargements',
	'News_And' => 'et',
	'News_Archives' => 'Archives des news',
	'News_Categories' => 'Archives des catégories',
	'News_Cats' => 'Archives des catégories',
	'News_Comments' => 'Commentaires',
	'News_Email' => 'Envoyer ce sujet par e-mail',
	'News_Print' => 'Imprimer ce sujet',
	'News_Reply' => 'Répondre',
	'News_Summary' => 'Cette news a',
	'News_Views' => 'Vues',
	'No_News_Cats' => 'Désolé mais il n&#39;existe aucune catégorie !',
	'No_Pics' => 'Aucune image',
	'No_poll' => 'Pas de sujet en ce moment',
	'No_topics_found' => 'Aucun sujet trouvé.',
	'None' => 'Aucun',
	'Not_day_users' => '%d utilisateurs enregistrés <span style="color:red">NE SONT PAS</span> venu les dernières %d heures:',
	'Not_found' => 'Aucun de fichier attaché.',
	'Not_rated' => 'Non noté',
	'Online_user_total' => 'Il y a <b>%d</b> utilisateur connecté:',
	'Online_users_total' => 'Il y a au total <b>%d</b> utilisateurs connecté:',
	'Online_users_zero_total' => 'Il n&#39y a <b>aucun</b> utilisateur connecté',
	'Other_IP_this_user' => 'Autres adresses IP avec lesquelles cet utilisateur a posté',
	'PAYPAL_DONATE_AMOUNT' => 'Nous avons reçu %s depuis le début.',
	'PAYPAL_DONATE_DES' => 'Si vous trouvez ce forum utile, vous pouvez <a href="%s">faire un don</a> au projet.',
	'PAYPAL_DONATE_USERS' => '<b>%d</b> utilisateurs ont déjà fait un don pour le site.',
	'Pic_Title' => 'Titre de l&#39;image',
	'Poll' => 'Sondage',
	'Post_your_comment' => 'Envoyez votre commentaire',
	'Posted' => 'Posté',
	'POSTED_ON' => 'le',
	'Poster' => 'Auteur',
	'Posts' => 'Messages',
	'Rating' => ' notes',
	'Read_Full' => 'Lire la suite',
	'Record_online_users' => 'Le record d&#39;utilisateurs en ligne était de <b>%s</b> le %s',
	'Reg_user_total' => '%d utilisateur enregistré, ',
	'Reg_users_total' => '%d utilisateurs enregistrés, ',
	'Reg_users_zero_total' => 'aucun utilisateur enregistré, ',
	'Register_new_account' => 'Vous n&#39;avez pas encore de compte ?<br />Vous pouvez vous %senregistrer%s gratuitement',
	'Registered_users' => 'Utilisateurs connectés:',
	'Remember_me' => 'Connexion automatique',
	'Save_Topic' => 'Enregistrer le sujet dans un fichier',
	'Shout_refresh' => 'Recharger',
	'Shout_text' => 'Votre texte',
	'Shoutbox_date' => 'D G:i \\a é\c\r\i\t ',
	'SH_Visit_counter_statement' => 'Ce site a eu au total <b>%d</b> visiteurs depuis %s',
	'Tell_Friend' => 'Envoyer par e-mail à un ami',
	'This_posts_IP' => 'Adresse IP',
	'Top_downloads' => 'Téléchargements populaires',
	'TOP_LIKES_NO_TOPICS' => 'Aucun sujet n\'est devenu populaire dans les dernières %s heures',
	'TOP_LIKES_DESC' => 'Sujets populaires ces %s dernières heures',
	'Total_votes' => 'Total des votes',
	'Users_this_IP' => 'Utilisateurs utilisants cette adresse IP',
	'View' => 'Voir',
	'View_comments' => 'Voir les commentaires',
	'View_complete_list' => 'Voir la liste complète',
	'Visit_counter' => 'Compteur de visigtes',
	'Visit_counter_statement' => '<b>%d</b> pages de ce site ont été vues depuis %s',
	'Vote' => 'Vote',

	'donated_by' => 'donné par',
	'search' => 'Recherche',
	'search2' => 'Recherche:',
	'search_at' => 'Recherche dans',
	'total_topics' => ' dans <b>%s</b> sujets',
	)
);

?>