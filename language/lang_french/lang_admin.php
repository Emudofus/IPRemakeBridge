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
	'General' => 'Administration G&eacute;n&eacute;rale',
	'Users' => 'Administration des Utilisateurs',
	'Groups' => 'Administration des Groupes',
	'Forums' => 'Administration des Forums',
	'Styles' => 'Administration des Th&egrave;mes',

	'Configuration' => 'Options',
	'Various_Configuration' => 'Options vari&eacute;e',
	'Permissions' => 'Permissions',
	'Manage' => 'Gestion',
	'manage' => 'Gestion',
	'Disallow' => 'Interdire des Pseudos',
	'Prune' => 'Délestage',
	'Mass_Email' => 'Mail de masse',
	'Ranks' => 'Rangs',
	'Smilies' => 'Smileys',
	'Ban_Management' => 'Gestion du Bannissement',
	'Word_Censor' => 'Censure',
	'Export' => 'Exporter',
	'Create_new' => 'Cr&eacute;e',
	'Add_new' => 'Ajouter',
	'Backup_DB' => 'Sauvegarder la Base de Donn&eacute;e',
	'Restore_DB' => 'Restaurer la Base de Donn&eacute;e',
	'DB_Maintenance' => 'Outils de la Base de Donn&eacute;e',
	'News_Admin' => 'Nouvelles',
	'News_Cats' => 'Cat&eacute;gories des Nouvelles',
	'News_Config' => 'Configuration des Nouvelles',
	'Security' => 'Securit&eacute;',
	'Member_Tries' => 'Tri des membres',
	'Quick_Search' => 'Recherche Rapide',
	'Special' => 'Sp&eacute;cial',
	'Styles_Management' => 'Gestion des Th&egrave;mes',
	'Manage_Bots' => 'Gestion des Bots',
	'Admin_Notepad' => 'Carnet de note',

// Index
	'Admin' => 'Administration',
	'Not_admin' => 'Vous ne pouvez pas administrer ce forum',
	'Welcome_IP' => 'Bienvenue sur IcyPhoenix',
	'Admin_intro' => 'Merci d\'avoir choisi IcyPhoenix comme forum. Cet &eacute;cran vous donnera un aper&ccedil;u rapide de toutes les statistiques de votre site. Vous pouvez revenir &agrave; cette page en cliquant sur le lien <u>Index de l\'Administration</u> ci-dessus. Pour retourner &agrave; votre forum, cliquez sur le lien <u>Forum</u>. Le menu &agrave; gauche de la page vous permettra de contr&ocirc;ler tous les aspects de votre forum.',
	'PayPalInfo' => 'IcyPhoenix est un projet Open Source, vous pouvez montrer votre appr&eacute;ciation et supporter le d&eacute;veloppement futur en faisant un don au projet.',
	'Forum_stats' => 'Statistiques du Site',
	'Admin_Index' => 'Index de l\'Administration',
	'Preview_forum' => 'Aper&ccedil;u du Forum',
	'Click_return_admin_index' => 'Cliquez %sici%s pour retournez &agrave; l\'Index de l\'Administration',
	'Portal' => 'Page d\'Acceuil',
	'Preview_Portal' => 'Aper&ccedil; de la page d\'Acceuil',
	'Main_index' => 'Forum',

	'Statistic' => 'Statistiques',
	'Value' => 'Valeur',
	'Number_posts' => 'Nombre de messages',
	'Posts_per_day' => 'Messages par jour',
	'Number_topics' => 'Nombre de sujets',
	'Topics_per_day' => 'Sujets par jour',
	'Number_users' => 'Nombre d\'utilisateurs',
	'Users_per_day' => 'Utilisateurs par jours',
	'Board_started' => 'Forum lancé le',
	'Avatar_dir_size' => 'Taille du r&eacute;pertoire des avatars',
	'Database_size' => 'Taille de la Base de Donn&eacute;e',
	'Gzip_compression' => 'Compression Gzip',
	'Not_available' => 'Non disponible',

	'ON' => 'Activer', // This is for GZip compression
	'OFF' => 'D&eacute;sactiver',

// DB Utils
	'Database_Utilities' => 'Utilitaires pour la Base de Donn&eacute;',

	'Restore' => 'Restaurer',
	'Backup' => 'Sauvegarde',
	'Restore_explain' => 'Ceci restaurera toutes les tables d\'IcyPhoenix depuis un fichier de sauvegarde. Si votre serveur le supporte, vous pouvez envoyer un fichier compress&eacute; au format GZip et il sera automatiquement d&eacute;compress&eacute;. <b>Attention</b>: cela remplacera les donn&eacute; existantes. La restauration peut prendre du temps, mais veuillez ne pas quitter cette page avant la fin par mesure de sécurité. Vous pouvez, bien entendu, ouvrir une nouvelle page afin de continuer votre travail.',
	'Backup_explain' => 'Cr&eacute;er une sauvegarde de toutes les donn&eacute;es de votre site. Si vous avez des tables supplémentaires dans la même Base de Donn&eacute;es que celle d\'IcyPhoenix et que vous voudriez sauvegarder en même temps, veuillez entrer leurs nom, s&eacute;par&eacute; par une virgule, dans le champ "Tables Additionnelles" ci-dessous. Si votre serveur le supporte, vous pouvez aussi compresser le fichier au format GZip pour r&eacute;duire sa taille avant de le télécharger.',

	'Backup_options' => 'Options de Sauvegarde',
	'Start_backup' => 'Commencer la Sauvegarde',
	'Full_backup' => 'Sauvegarde complète',
	'Structure_backup' => 'Sauvegarder uniquement la structure',
	'Data_backup' => 'Sauvegarder uniquement les donn&eacute;es',
	'Additional_tables' => 'Tables Additionelles',
	'phpBB_only' => 'Seulement les tables relatives &agrave; IcyPhoenix',
	'Gzip_compress' => 'Fichier compress&eacute; au format GZip',
	'Select_file' => 'S&eacute;lectionnez un fichier',
	'Start_Restore' => 'Commencer la restauration',

	'Restore_success' => 'La base de donn&eacute;es &agrave; &eacute;t&eacute; correctement restaur&eacute;e.<br /><br />Votre forum est revenu dans l\'&eacute;tat où il &eacute;tait au moment où la sauvegarde &agrave; &eacute;t&eacute; faite.',
	'Backup_download' => 'Votre t&eacute;l&eacute;chargement commencera bient&ocirc;t, veuillez patienter jusque là.',
	'Backups_not_supported' => 'D&eacute;sol&eacute;, mais la sauvegarde n\'est actuellement pas compatible avec votre type de base de donn&eacute;es.',

	'Restore_Error_uploading' => 'Erreur dans le t&eacute;l&eacute;chargement de votre fichier de sauvegarde',
	'Restore_Error_filename' => 'Le nom du fichier est incorrect, veuillez essayer un autre fichier',
	'Restore_Error_decompress' => 'Impossible de d&eacute;compresser le fichier GZip, essayez avec un simple fichier de texte',
	'Restore_Error_no_file' => 'Aucun fichier n\'a &eacute;t&eacute; envoy&eacute;',

// Auth pages
	'Select_a_User' => 'S&eacute;lectionnez un Utilisateur',
	'Select_a_Group' => 'S&eacute;lectionnez un Groupe',
	'Select_a_Forum' => 'S&eacute;lectionnez un Forum',
	'Auth_Control_User' => 'Contr&ocirc; des Permissions des Utilisateurs',
	'Auth_Control_Group' => 'Contr&ocirc;le des Permissions des Groupes',
	'Auth_Control_Forum' => 'Contr&ocirc;le des Permissions des Forums',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Contr&ocirc;l des Permissions de tous les Forums',
// End add Permission List
	'Look_up_User' => 'Regarder un Utilisateur',
	'Look_up_Group' => 'Regarder un Groupe',
	'Look_up_Forum' => 'Regarder un Forum',

	'Group_auth_explain' => 'Modifie les permissions et le statut de mod&eacute;rateurs assign&eacute; &agrave; chaque groupe. N\'oubliez pas en changeant les permissions du groupe que les permissions personnelles pourront encore permettre à l\'utilisateur d\'accéder aux forums, etc. Vous serez averti si c\'est le cas.',
	'User_auth_explain' => 'Modifie les permissions et le statut de mod&eacute;rateurs assign&eacute; &agrave; chaque utilisateur. N\'oubliez pas en changeant les permissions de l\'utilisateur que les permissions de son/ses groupe(s) pourront encore lui permettre d\'accéder aux forums, etc. Vous serez averti si c\'est le cas.',
	'Forum_auth_explain' => 'Modifie les niveaux d\'accès de chaque forum. Vous avez deux m&eacute;thodes pour cela: simple ou avanc&eacute, cette dernière offrant un meilleur contr&ocirc;le sur les opérations de chaque forum. Souvenez-vous que changer les permissions des forums affectera tous les utilisateurs qui peuvent effectuer des opérations sur ledit forum.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Modifie le niveau d\'accès de chaque forum. Souvenez-vous que changer les permissions des forums affectera tous les utilisateurs qui peuvent effectuer des opérations sur ledit forum.',
// End add Permission List

	'Simple_mode' => 'Mode Simple',
	'Advanced_mode' => 'Mode Avanc&eacute;',
	'Moderator_status' => 'Statut Mod&eacute;rateur',

	'Allowed_Access' => 'Acc&egrave;s Autoris&eacute;',
	'Disallowed_Access' => 'Acc&egrave;s Non utoris&eacute;',
	'Is_Moderator' => 'est mod&eacute;rateur',
	'Not_Moderator' => 'n\'est pas mod&eacute;rateur',

	'Conflict_warning' => 'Attention: conflit des autorisations',
	'Conflict_access_userauth' => 'Cet utilisateur a toujours accès à ce forum via son groupe. Vous voudrez peut-être modifier les permissions du groupe ou retirer cet utilisateur du groupe pour l\'emp&ecirc;cher complètement d\'y avoir accès. Le groupe lui donnant ses droits est not&eacute; ci-dessous avec les forums concernés.',
	'Conflict_mod_userauth' => 'Cet utilisateur a toujours son droit de mod&eacute;ration sur ce forum via son groupe. Vous voudrez peut-être modifier les permissions du groupe ou retirer cet utilisateur du groupe pour l\'emp&ecirc;cher complètement de pouvoir le mod&eacute;rer. Le groupe lui donnant ses droits est not&eacute; ci-dessous avec les forums concernés.',

	'Conflict_access_groupauth' => 'Le ou les utilisateur(s) suivant(s) ont toujours acc&egrave; au forum via leurs permissions personnelles. Vous voudrez peut-être les modifier afin qu&\'il(s) n\'y ai(ent) plus acc&egrave;s. Les utilisateurs ayant des droits d\'acc&egrave; sont not&eacute;s ci-dessous avec les forums concernés.',
	'Conflict_mod_groupauth' => 'Le ou les utilisateur(s) suivant(s) sont toujours moderateur du forum via leurs permissions personnelles. Vous voudrez peut-être les modifier afin qu&\'il(s) ne soi(ent) plus mod&eacute;rateur(s) du forum. Les utilisateurs ayant des droits de mod&eacute;ration sont not&eacute;s ci-dessous avec les forums concernés.',

	'Public' => 'Public',
	'Private' => 'Priv&eacute;',
	'Registered' => 'Enregistr&eacute;',
	'Self' => 'Soi-m&ecirc;me',
	'Administrators' => 'Administrateurs',
	'Hidden' => 'Invisible',

// These are displayed in the drop down boxes for advanced mode forum auth, try and keep them short!
	'Forum_NONE' => 'AUCUN',
	'Forum_ALL' => 'TOUS',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'SELF',
	'Forum_PRIVATE' => 'PRIVATE',
	'Forum_MOD' => 'MOD',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Voir',
	'Read' => 'Regarder',
	'Post' => 'Poster',
	'Reply' => 'R&eacute;pondre',
	'Edit' => '&Eacute;diter',
	'Delete' => 'Supprimer',
	'Sticky' => 'Mettre en Post-It',
	'Announce' => 'Mettre en Annonce',
	'Vote' => 'Voter',
	'Pollcreate' => 'Cr&eacute;er un sondage',

	'Simple_Permission' => 'Permissions Simples',

	'User_Level' => 'Niveau de l\'Utilisateur',
	'Auth_User' => 'Utilisateur',
	'Auth_Junior_Admin' => 'Administrateur Junior',
	'Auth_Admin' => 'Administrateur',
	'Group_memberships' => 'Adhérants au groupes (%d au total):',
	'Usergroup_members' => 'Ce groupe contient les membres suivants (%d au total):',

	'Forum_auth_updated' => 'Permissions du Forum mises &agrave; jour',
	'User_auth_updated' => 'Permissions de l\'Utilisateur mises &agrave; jour',
	'Group_auth_updated' => 'Permissions du Groupe mises &agrave; jour',

	'Auth_updated' => 'Les permissions ont &eacute;t&eacute; mises &agrave; jour',
	'Click_return_userauth' => 'Cliquer %sici%s pour retourner aux permissions de l\'Utilisateur',
	'Click_return_groupauth' => 'Cliquer %sici%s pour retourner aux permissions du Groupe',
	'Click_return_forumauth' => 'Cliquer %sici%s pour retourner aux permissions du Forum',

// Banning
	'Ban_control' => 'Contr&ocirc;le du Bannissement',
	'Ban_explain' => 'Gère le bannissement des utilisateurs. Vous pouvez bannir soit des utilisateurs, soit des IP ou même plages d\'IP ou encore des fournisseurs ou le tout à la fois. Ces m&eacute;thodes permettent d\'emp&ecirc;cher un utilisateur d\'acc&egrave;der &agrave; votre site. Pour emp&ecirc;cher un utilisateur de se r&eacute;inscrire sous un autre pseudo, vous pouvez aussi bannir une adresse mail. Veuillez noter que bannir uniquement l\'adresse mail n\'emp&ecirc;chera pas un utilisateur de se connecter ou de poster sur votre forum puisqu\'il est très simple de s\'en recréer une. Vous devriez utiliser l\'une des premières m&eacute;thodes pour cela.',
	'Ban_explain_warn' => 'Veuillez noter qu\'entrer une plage d\'adresse IP r&eacute;sultera dans le bannissement de toutes les adresses IP comprises dans la plage. Le système essaira de minimiser le nombre d\'adresses ajout&eacute;es &agrave; la base de donn&eacute;es en pla&ccedil;ant des jokers automatiquement aux endroits appropriés. Si vous devez réellement entrer une plage entière, essayer de la réduire au maximum voir entrez simplement un adresse IP spécifique.',

	'Select_username' => 'Selectionner un Nom d\'Utilisateur',
	'Select_ip' => 'Selectectionner une IP',
	'Select_email' => 'Selectionner une adresse Mail',

	'Ban_username' => 'Bannir un ou plusieurs utilisateur(s) sp&eacute;cifique(s)',
	'Ban_username_explain' => 'Vous pouvez bannir plusieurs utilisateurs en une seule fois en utilisant la combinaison appropriée du clavier et de la souris pour votre ordinateur et votre navigateur (CTRL+Clic Gauche sous Windows)',

	'Ban_IP' => 'Bannir une ou plusieurs adresse(s) IP ou fournisseurs',
	'IP_hostname' => 'Adresses IP ou fournisseurs',
	'Ban_IP_explain' => 'Pour sp&eacute;cifier différentes adresses IP ou fournisseurs, s&eacute;parez-les par une virgule. Pour sp&eacute;cifier une plage d\'adresses IP, s&eacute;parez le début et la fin par un trait d\'union (-). Pour sp&eacute;cifier un joker, utilisez une astérique (*).',

	'Ban_email' => 'Bannir une ou plusieurs adresses Mail',
	'Ban_email_explain' => 'Pour sp&eacute;cifier plusieurs adresses mail, s&eacute;parez-les par une virgule. Vous pouvez utiliser des astérisques (*) comme jokers, par exemple: *@hotmail.* pour bannir toutes les adresses mails chez hotmail.',

	'Unban_username' => 'D&eacute;bannir un ou plusieurs utilisateurs',
	'Unban_username_explain' => 'Vous pouvez d&eacute;bannir plusieurs utilisateurs en une seule fois en utilisant la combinaison appropriée du clavier et de la souris pour votre ordinateur et votre navigateur (CTRL+Clic Gauche sous Windows)',

	'Unban_IP' => 'D&eacute;bannir une ou plusieurs adresses IP',
	'Unban_IP_explain' => 'Vous pouvez d&eacute;bannir plusieurs adresses IP en une seule fois en utilisant la combinaison appropriée du clavier et de la souris pour votre ordinateur et votre navigateur (CTRL+Clic Gauche sous Windows)',

	'Unban_email' => 'D&eacute;bannir une ou plusieurs adresses mail',
	'Unban_email_explain' => 'Vous pouvez d&eacute;bannir plusieurs adresses mail en une seule fois en utilisant la combinaison appropriée du clavier et de la souris pour votre ordinateur et votre navigateur (CTRL+Clic Gauche sous Windows)',

	'No_banned_users' => 'Aucun utilisateur banni',
	'No_banned_ip' => 'Aucune adresse IP bannie',
	'No_banned_email' => 'Aucune adresse mail bannie',

	'Ban_update_sucessful' => 'La liste des bannis &agrave; &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s',
	'Click_return_banadmin' => 'Cliquez %sici%s pour retourner au contr&ocirc;le du bannissement',

// Configuration
	'General_Config' => 'Configuration G&eacute;n&eacute;rale',
	'Config_explain' => '<b>Personnalisez toutes les options g&eacute;n&eacute;ral du forum. Pour la configuration des utilisateurs et forums, utilisez les liens sur votre gauche.</b>',

	'Click_return_config' => 'Cliquez %sici%s pour retourner &agrave; la Configuration G&eacute;n&eacute;rale',

	'General_settings' => 'Options G&eacute;n&eacute;rales du Site',
	'Server_name' => 'Nom de Domaine',
	'Server_name_explain' => 'Le nom de domaine à partir duquel tourne le forum',
	'Script_path' => 'R&eacute;pertoire du Forum',
	'Script_path_explain' => 'Le r&eacute;pertoire où IcyPhoenix est situ&eacute; par rapport au nom de domaine',
	'Server_port' => 'Port du Serveur',
	'Server_port_explain' => 'Le port que le serveur utilise, habituellement 80. Ne changez cette valeur que si votre port est différent',
	'Site_name' => 'Nom du Forum',
	'Site_desc' => 'Description du Forum',
	'Board_disable' => 'D&eacute;sactiver le forum',
	'Board_disable_explain' => 'Cela rendra le forum inaccessible pour les utilisateurs. Les administrateurs pourront encore acc&egrave;der au panneau d\'Administration.',
	'Acct_activation' => 'Activer l\'activation des comptes',
	'Acc_None' => 'Aucune', // These three entries are the type of activation
	'Acc_User' => 'Utilisateur',
	'Acc_Admin' => 'Administrateur',

	'Abilities_settings' => 'Options basiques des Utilisateurs et des Forums',
	'Max_poll_options' => 'Nombre maximum des options pour un sondage',
	'Flood_Interval' => 'Intervalle de flood',
	'Flood_Interval_explain' => 'Nombre de secondes entre chaque message',
	'Board_email_form' => 'Mailing des utilisateurs via le forum',
	'Board_email_form_explain' => 'Les utilisateurs peuvent s\'envoyer des mails via le forum',
	'Topics_per_page' => 'Sujets par page',
	'Posts_per_page' => 'Messages par page',
	'Hot_threshold' => 'Nombre de messages pour le seuil de popularit&eacute;',
	'Default_style' => 'Th&egrave;me par D&eacute;faut',
	'Override_style' => 'Remplacer le th&egrave;me de l\'utilisateur',
	'Override_style_explain' => 'Remplace le th&egrave;me de l\'utilisateur avec le th&egrave;me par d&eacute;faut',
	'Default_language' => 'Langue par D&eacute;faut',
	'Date_format' => 'Format de la Date',
	'System_timezone' => 'Fuseau Horaire',
	'Enable_gzip' => 'Activer la compression GZip',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Niveau de compression GZip',
	'Gzip_level_explain' => 'Change le niveau de compression (un nombre entre 0 et 9). 0 signifie aucune compression, 1 est une compression vraiment faible, et 9 est le maximum (recommandé).',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Autoriser le D&eacute;lestage du Forum',
	'Allow_HTML' => 'Autoriser le HTML',
	'Allow_BBCode' => 'Autoriser les BBCodes',
	'Allowed_tags' => 'Balises HTML autorisées',
	'Allowed_tags_explain' => 'S&eacute;parez les balises par une virgule',
	'Allow_smilies' => 'Autoriser les Smileys',
	'Smilies_path' => 'R&eacute;pertoire de stockage des smileys',
	'Smilies_path_explain' => 'R&eacute;pertoire relatif au dossier ou IcyPhoenix est install&eacute;, par exemple: images/smiles par défaut.',
	'Allow_sig' => 'Autoriser les Signatures',
	'Max_sig_length' => 'Longueur maximum des signatures',
	'Max_sig_length_explain' => 'Nombre de caract&egrave;s maximum dans une signature',
	'Allow_name_change' => 'Autoriser les changement de nom d\'utilisateur',

	'Avatar_settings' => 'Options des Avatars',
	'Allow_local' => 'Activer la Galerie d\'Avatars',
	'Allow_remote' => 'Activer les Avatars &agrave; distance',
	'Allow_remote_explain' => 'Les Avatars sont liés à partir d\'un autre site où ils sont hébergé.',
	'Allow_upload' => 'Autoriser les envois d\'Avatars',
	'Max_avatar_filesize' => 'Poids maximum d\'un Avatar',
	'Max_avatar_filesize_explain' => 'Pour les fichiers envoy&eacute;s uniquement (en bytes)',
	'Max_avatar_size' => 'Dimensions maximum d\'un Avatar',
	'Max_avatar_size_width' => 'Largeur',
	'Max_avatar_size_height' => 'Hauteur',
	'Max_avatar_size_explain' => 'Dimensions en pixels',
	'Avatar_storage_path' => 'R&eacute;pertoire de stockage des Avatars',
	'Avatar_storage_path_explain' => 'R&eacute;pertoire dans lequel sont stock&eacute; les avatars, images/avatars par défaut.',
	'Avatar_gallery_path' => 'R&eacute;pertoire de la galerie des avatars',
	'Avatar_gallery_path_explain' => 'R&eacute;pertoire où sont stock&eacute;s les avatars de la galerie, images/avatars/gallery par défaut.',

	'COPPA_settings' => 'Options de la COPPA',
	'COPPA_fax' => 'Num&eacute;ro de fax de la COPPA',
	'COPPA_mail' => 'Adresse Mail de la COPPA',
	'COPPA_mail_explain' => 'Cette adresse mail est l\'adresse auquel les parents devront envoyer le formulaire de COPPA.',

	'Email_settings' => 'Options des Mails',
	'Admin_email' => 'Adresse Mail de l\'Administrateur',
	'Email_sig' => 'Signature des Mails',
	'Email_sig_explain' => 'Ce texte sera attach&eacute; telle une signature &agrave; chaque mail envoy&eacute; depuis le forum',
	'Use_SMTP' => 'Utiliser un serveur SMTP pour envoyer les mails',
	'Use_SMTP_explain' => 'Activez cette option si vous voulez ou devez envoyez vos mails à partir d\'un serveur nommé &agrave; la place d\'utiliser la fonction locale PHP mail().',
	'SMTP_server' => 'Adresse du serveur SMTP',
	'SMTP_port' => 'Port SMTP',
	'SMTP_username' => 'Utilisateur SMTP',
	'SMTP_username_explain' => 'Entrez un nom d\'utilisateur seulement si votre serveur SMTP en demande un',
	'SMTP_password' => 'Mot de passe SMTP',
	'SMTP_password_explain' => 'Entrez un mot de passe seulement si votre serveur SMTP en demande un',

	'Disable_privmsg' => 'Messages Priv&eacute;s',
	'Inbox_limits' => 'Messages maximum dans la Bo&icirc;te de R&eacute;ception',
	'Sentbox_limits' => 'Messages maximum dans la Bo&icirc;te d\'Envoie',
	'Savebox_limits' => 'Messages maximum dans la Bo&icirc;te de Sauvegarde',

	'Cookie_settings' => 'Options des Cookies',
	'Cookie_settings_explain' => 'Ces options d&eacute;finissent la façon dont les cookies sont envoy&eacute;s aux navigateurs des utilisateurs. Dans la plupart des cas, les valeurs par d&eacute;faut sont suffisantes; mais si vous devez les changer, faites tr&egrave;s attention: un mauvais param&egrave;trage peut emp&ecirc;cher les utilisateurs de se connecter.',
	'Cookie_domain' => 'Domaine du Cookie',
	'Cookie_name' => 'Nom du Cookie',
	'Cookie_path' => 'R&eacute;pertoire du Cookie',
	'Cookie_secure' => 'S&eacute;risation du Cookie',
	'Cookie_secure_explain' => 'Si votre serveur marche via un SSL, activez cette option.',
	'Session_length' => 'Dur&eacute;e de la Session [ en secondes ]',
	'SESSION_LAST_VISIT_RESET' => 'Last Visit Refresh If Session Expired',
	'SESSION_LAST_VISIT_RESET_EXPLAIN' => 'If you enable this option, Last Visit time for use will be updated even after if session expires. Otherwise Last Visit time will be updated only if autologin is enabled and the maximum login time has been reached.',

// Visual Confirmation
	'Visual_confirm' => 'Activer la confirmation visuelle',
	'Visual_confirm_explain' => 'Oblige les utilisateurs d\'entrer un code sous forme d\'image au moment de l\'enregistrement.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Autoriser la connexion automatique',
	'Allow_autologin_explain' => 'Cela d&eacute;termine si les utilisateurs sont autoris&eacute;s &agrave; se connecter automatiquement quand ils visitent le forum',
	'Autologin_time' => 'Temps d\'expiration de la clef',
	'Autologin_time_explain' => 'Combien de temps, en jours, la clef de connexion automatique reste valide si l\'utilisateur ne visite pas le forum. Mettez 0 pour qu\'elle n\'expire jamais.',

// Forum Management
	'Forum_admin' => 'Administration du Forum',
	'Forum_admin_explain' => 'Ajouter, supprimer, modifier, r&eacute;organiser et resynchroniser les categories et forums',
	'Edit_forum' => '&Eacute;diter le forum',
	'Create_forum' => 'Cr&eacute;er un nouveau forum',
	'Create_category' => 'Cr&eacute;er une nouvelle cat&eacute;gorie',
	'Remove' => 'Retirer',
	'Action' => 'Action',
	'Update_order' => 'Mettre &agrave; jour l\'ordre',
	'Config_updated' => 'Configuration mise &agrave; jour avec succès',
	'MOVE_UP' => 'D&eacute;placer vers le haut',
	'MOVE_DOWN' => 'D&eacute;placer vers le bas',
	'RESYNC' => 'Resynchroniser',
	'No_mode' => 'Aucun mode n\'a &eacute;t&eacute; d&eacute;fini',
	'Forum_edit_delete_explain' => 'Personnalisez toutes les options g&eacute;n&eacute;rale du forum. Pour la configuration des forums et des utilisateurs, utilisez les liens sur votre gauche',
	'Forum_Expand' => 'Déplier',
	'Forum_Collapse' => 'Replier',
	'Forum_Expand_all' => 'Tout Déplier',
	'Forum_Collapse_all' => 'Tout Replier',

	'Move_contents' => 'D&eacute;placer tout le contenu',
	'Forum_delete' => 'Supprimer le Forum',
	'Forum_delete_explain' => 'Supprime un forum (ou une cat&eacute;gorie) et d&eacute;cide où vous souhaitez replacer tous les sujets (ou forums) qu\'il contenait.',

	'Status_locked' => 'V&eacute;rouill&eacute;',
	'Status_unlocked' => 'D&eacute;verouill&eacute;',
	'Forum_settings' => 'Options G&eacute;n&eacute;rale du Forum',
	'Forum_name' => 'Nom du Forum',
	'Forum_desc' => 'Description',
	'Forum_status' => 'Statut du Forum',
	'Forum_pruning' => 'Auto-d&eacute;lestage',

	'prune_freq' => 'V&eacute;rifier l\'âge des sujets tout les',
	'prune_days' => 'Retirer les sujets qui n\'ont pas eu de réponse depuis',
	'Set_prune_data' => 'Vous avez activé l\'auto-d&eacute;lestage sur ce forum sans avoir configuré une fr&eacute;quence ou nombre de jours à délester. Veuillez revenir en arri&egrave;re pour le faire.',

	'FORUM_SIMILAR_TOPICS' => 'Sujets Similaires',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Si vous activez cette option, un cadre contenant une liste de sujets similaires appara&icirc;tra au bas de chaque sujet de ce forum. Veuillez noter que vous devez aussi activer la variable globale pour cette fonctionnalit&eacute; dans la configuration générale, onglet "SEO".',
	'FORUM_TOPIC_VIEWS' => 'Visiteurs du Sujet',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Si vous activez cette option, tous les utilisateurs qui regarderont les sujets de ce forum seront enregistr&eacute;s dans la Base de Donn&eacute;e. Veuillez noter que vous devez aussi activer la variable globale pour cette fonctionnalit&eacute; dans la configuration générale, onglet "Optimisations SQL".',
	'FORUM_TAGS' => 'Mots-Clefs du Forum',
	'FORUM_TAGS_EXPLAIN' => 'Si vous activez cette option, vous verrez un cadre avec les mots les plus utilis&eacute; du forum. Veuillez noter que vous devez activer la variable global pour cette fonctionnalit&eacute; dans la configuration générale, onglet "SEO".',
	'FORUM_SORT_BOX' => 'Cadre du classement des sujets',
	'FORUM_SORT_BOX_EXPLAIN' => 'Si vous activez cette option, vous verrez un cadre vous permettant de classer alphabétiquement les sujets dans ce forum. Veuillez noter que vous devez activer la variable globale pour cette fonctionnalité dans les options générales.',
	'FORUM_KB_MODE' => 'Mode "Base de connaissances"',
	'FORUM_KB_MODE_EXPLAIN' => 'Si vous activez cette option, ce forum sera affich&eacute; en mode "Base de connaissances": les sujets sont class&eacute;s comme la base de connaissances.',
	'FORUM_INDEX_ICONS' => 'Index des ic&ocirc;nes',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Si vous activez cette option, vous verrez les ic&ocirc;nes pour les fluxs RSS et "Nouveau Sujet" sur l\'index du forum. Veuillez noter que vous devez activer la variable globale dans les options générales.',

	'Move_and_Delete' => 'D&eacute;placer et Supprimer',

	'Delete_all_posts' => 'Supprimer tous les messages',
	'Nowhere_to_move' => 'Aucun endroit pour d&eacute;placer',

	'Edit_Category' => '&Eacute;diter la Cat&eacute;gorie',
	'Edit_Category_explain' => 'Utilisez ce formulaire pour modifier le nom d\'une cat&eacute;gorie.',

	'Forums_updated' => 'Les informations ont &eacute;t&eacute; correctement mises &agrave; jour',

	'Must_delete_forums' => 'Vous devez supprimer tous les forums que cette cat&eacute;gorie contient avant de pouvoir la supprimer',

	'Click_return_forumadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'Administration des Forums',

// Smiley Management
	'smiley_title' => 'Utilitaire d\'&eacute;dition des Smileys',
	'smile_desc' => 'Ajoute, supprime et &eacute;dite les &eacute;motic&ocirc;nes ou smileys que les utilisateurs peuvent utiliser dans leurs posts et messages privés. <b>Note:</b> si votre navigateur le supporte, vous pouvez faire un cliquez-déplacer (Drag & Drop) pour réarranger les smileys rapidement.',

	'smiley_config' => 'Configuration des Smileys',
	'smiley_code' => 'Code du Smiley',
	'smiley_url' => 'Image du Smiley',
	'smiley_emot' => '&Eacute;motion du Smiley',
	'smile_add' => 'Ajouter un nouveau Smiley',
	'Smile' => 'Smiley',
	'Emotion' => '&Eacute;motion',

	'Select_pak' => 'S&eacute;lectionner un pack (.pak)',
	'replace_existing' => 'Remplacer les Smileys existants',
	'keep_existing' => 'Garder les Smileys existants',
	'smiley_import_inst' => 'Vous devriez d&eacute;zipper le pack de smileys et les uploader dans le r&eacute;pertoire approprié de votre forum. S&eacute;lectionnez ensuite les informations correctes à partir de ce formulaire pour importer le pack de smileys.',
	'smiley_import' => 'Importer un pack de Smileys',
	'choose_smile_pak' => 'Choisir un pack de Smileys (.pak)',
	'import' => 'Importer les Smileys',
	'smile_conflicts' => 'Que faire en cas de conflits ?',
	'del_existing_smileys' => 'Supprimer les smileys existants avant d\'importer',
	'import_smile_pack' => 'Importer le pack de Smileys',
	'export_smile_pack' => 'Cr&eacute;er un pack de Smileys',
	'export_smiles' => 'Pour cr&eacute;er un pack de Smileys à partir de ceux installés actuellement, cliquez %sici%s pour t&eacute;l&eacute;charger le fichier smiles.pak. Libre à vous de renommer ce fichier tant que vous conservez l\'extension .pak. Cr&eacute;ez ensuite un fichier zip contenant tous vos smileys ainsi que ce fichier .pak et votre pack de smiley sera prêt.',

	'smiley_add_success' => 'Le Smiley a bien &eacute;t&eacute; ajout&eacute;',
	'smiley_edit_success' => 'Le Smiley a bien &eacute;t&eacute; mis &agrave; jour',
	'smiley_import_success' => 'Le pack de smileys a &eacute;t&eacute; import&eacute; avec succès !',
	'smiley_del_success' => 'Le smiley &agrave; bien &eacute;t&eacute; retir&eacute;',
	'Click_return_smileadmin' => 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Smileys',

// User Management
	'User_admin' => 'Administration des Utilisateurs',
	'User_admin_explain' => 'Changez les informations des utilisateurs et certaines options. Pour modifier les permissions des utilisateurs, utilisez la partie consacrée à cet effet.',

	'Look_up_user' => 'Examiner un utilisateur',

	'Admin_user_fail' => 'Impossible de mettre &agrave; jour le profil de l\'utilisateur.',
	'Admin_user_updated' => 'Le profil de l\'utilisateur a &eacute;t&eacute; correctement mis &agrave; jour.',
	'Click_return_useradmin' => 'Cliquez %sici%s pour retourner &agrave; l\'Administration des Utilisateurs',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Cliquez %sici%s pour retourner au profil de l\'utilisateur',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Supprimer cet utilisateur',
	'User_delete_explain' => 'Cliquez ici pour supprimer cet utilisateur. <u><em>Cette action est irréversible.</em></u>',
	'User_deleted' => 'L\'utilisateur &agrave; &eacute;t&eacute; correctement supprim&eacute;.',

	'User_status' => 'L\'utilisateur est actif',
	'User_allowpm' => 'Peut envoyer des messages priv&eacute;s',
	'User_allowavatar' => 'Peut mettre un avatar',

	'Admin_avatar_explain' => 'Voir et supprimer l\'avatar actuel de l\'utilisateur.',

	'User_special' => 'Champs réservés aux Administrateurs',
	'User_special_explain' => 'Ces champs ne peuvent &ecirc;tre modifi&eacute; par les utilisateurs. Vous pouvez définir leur statut et d\'autres options auxquelles les utilisateurs n\'ont pas accès.',

// Group Management
	'Group_administration' => 'Administration des Groupes',
	'Group_admin_explain' => 'Administrer tous les groupes d\'utilisateurs. Vous pouvez ajouter, modifier, supprimer les groupes existants. Vous pouvez choisir les mod&eacute;rateurs, rendre le groupe ouvert ou ferm&eacute; et mettre &agrave; jour le nom du groupe ou sa description',
	'Error_updating_groups' => 'Il y a eu une erreur en mettant &agrave; jour les groupes',
	'Updated_group' => 'Le groupe a &eacute;t&eacute; correctement mis &agrave; jour',
	'Added_new_group' => 'Le nouveau groupe a &eacute;t&eacute; créé avec succès.',
	'Deleted_group' => 'Le groupe a bien &eacute;t&eacute; supprim&eacute;',
	'New_group' => 'Cr&eacute;er un nouveau groupe',
	'Edit_group' => '&Eacute;diter un groupe',
	'group_name' => 'Nom du groupe',
	'group_description' => 'Description du groupe',
	'group_moderator' => 'Mod&eacute;rateur du groupe',
	'group_status' => 'Statut du groupe',
	'group_open' => 'Groupe ouvert',
	'group_closed' => 'Groupe ferm&eacute;',
	'group_hidden' => 'Groupe invisible',
	'group_delete' => 'Supprimer le groupe',
	'group_delete_check' => 'Supprimer ce groupe',
	'submit_group_changes' => 'Envoyer les changements',
	'reset_group_changes' => 'Remettre &agrave; z&eacute;ro',
	'No_group_name' => 'Vous devez sp&eacute;cifier un nom pour ce groupe',
	'No_group_moderator' => 'Vous devez sp&eacute;cifier un mod&eacute;rateur pour ce groupe',
	'No_group_mode' => 'Vous devez sp&eacute;cifier un mode: ouvert ou fermé',
	'No_group_action' => 'Aucune action n\'a &eacute;t&eacute; sp&eacute;cifi&eacute;',
	'delete_group_moderator' => 'Supprimer l\'ancien mod&eacute;rateur du groupe ?',
	'delete_moderator_explain' => 'Si vous voulez changer le mod&eacute;rateur du groupe, cochez cette case pour enlever le mod&eacute;rateur du groupe. Si vous ne cochez pas cette case, cet utilisateur deviendra un membre r&eacute;gulier du groupe.',
	'Click_return_groupsadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'Administration des Groupes.',
	'Select_group' => 'S&eacute;lectionner un groupe',
	'Look_up_group' => 'Examiner un groupe',

// Prune Administration
	'Forum_Prune' => 'D&eacute;lestage du Forum',
	'Forum_Prune_explain' => 'Le délestage supprimera tous les sujets sans réponse depuis le nombre de jours s&eacute;lectionn&eacute;. Si vous n\'entrez aucun nombre, tous les topics seront supprimés. Les sujets avec des sondages encore en cours et/ou les annonces ne seront pas supprimés. Vous devrez les supprimer manuellement.',
	'Do_Prune' => 'Effectuer le D&eacute;lestage',
	'All_Forums' => 'Tous les forums',
	'Prune_topics_not_posted' => 'D&eacute;lester les sujets sans réponse ces derniers jours',
	'Topics_pruned' => 'Sujets d&eacute;lest&eacute;s',
	'Posts_pruned' => 'Messages d&eacute;lest&eacute;s',
	'Prune_success' => 'Le d&eacute;lestage des forums a &eacute;t&eacute; un succès.',

// Word censor
	'Words_title' => 'Censure',
	'Words_explain' => 'Ajouter, &eacute;diter, et retirer des mots qui seront automatiquement censurés sur votre forum. De plus, les utilisateurs ne pourront pas s\'enregistrer en choississant des noms d\'utilisateurs qui contiennent les mots censur&eacute;. Les jokers (*) sont accept&eacute;s. Par exemple, *test* censurera d&eacute;testable, teste* censurera testeur, *test censurera contester.',
	'Word' => 'Mot',
	'Edit_word_censor' => '&Eacute;diter un mot censur&eacute;',
	'Replacement' => 'Remplacé par',
	'Add_new_word' => 'Ajouter un nouveau mot',
	'Update_word' => 'Mettre à jour la censure d\'un mot',

	'Must_enter_word' => 'Vous devez entrer un mot et son remplaçant',
	'No_word_selected' => 'Aucun mot s&eacute;lectionner pour l\'&eacute;dition',

	'Word_updated' => 'La cenure de ce mot a bien été mise à jour',
	'Word_added' => 'La censure de ce mot a bien été ajoutée',
	'Word_removed' => 'La censure du mot sélectionné a bien été retirée.',

	'Click_return_wordadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'Administration de la Censure',

// Mass Email
	'Mass_email_explain' => 'Envoie un mail &agrave; tous les utilisateurs de votre forum ou &agrave; tous les utilisateurs d\'un groupe. Pour cela, un mail sera envoy&eacute; &agrave; l\'administrateur avec une copie envoyée &agrave; tous les destinataires. Si vous envoyez un mail &agrave; beaucoup de personnes, soyez patient apr&egrave; avoir valid&eacute; l\'envoie et n\'arr&ecirc;tez ni ne quittez pas la page pendant son chargement. Il est normal qu\'un mail de masse prenne du temps et vous serez inform&eacute; lorsque l\'opération sera complétée.',
	'Compose' => 'Composer',

	'Recipients' => 'Destinataires',
	'All_users' => 'Tous les utilisateurs',

	'Email_successfull' => 'Votre message &agrave; &eacute;t&eacute; envoy&eacute;',
	'Click_return_massemail' => 'Cliquez %sici%s pour revenir au formulaire de Mail de Masse',

// Ranks admin
	'Ranks_title' => 'Administration des Rangs',
	'Ranks_explain' => 'Ajouter, &eacute;diter, voir et supprimer les rangs. Vous pouvez aussi cr&eacute;er des rangs personnalis&eacute;s qui pourront &ecirc;tre appliqu&eacute; aux utilisateurs via l\'administration des utilisateurs',

	'Add_new_rank' => 'Ajouter un nouveau rang',

	'Rank_title' => 'Titre du Rang',
	'Rank_special' => 'Rang Sp&eacute;cial',
	'Rank_minimum' => 'Nombre minimum de messages',
	'Rank_maximum' => 'Nombre maximum de messages',
	'Rank_image' => 'Image du rang (Relatif à la racine d\'IcyPhoenix)',
	'Rank_image_explain' => 'Utilisez cette option pour d&eacute;finir une image associ&eacute; au rang',

	'Must_select_rank' => 'Vous devez s&eacute;lectionnez un rang',
	'No_assigned_rank' => 'Aucun rang sp&eacute;cial assign&eacute;',

	'Rank_updated' => 'Le rang a bien &eacute;t&eacute; mis &agrave; jour',
	'Rank_added' => 'Le rang a bien &eacute;t&eacute; ajout&eacute;',
	'Rank_removed' => 'Le rang a bien &eacute;t&eacute; supprim&eacute;',
	'No_update_ranks' => 'Le rang a bien &eacute;t&eacute; supprimé. Néanmoins, les utilisateurs qui avaient ce rang n\'ont pas &eacute;t&eacute; mis &agrave; jour. Vous devrez manuellement enlever le rang de ces comptes',

	'Click_return_rankadmin' => 'Cliquez %sici%s pou retourner &agrave; l\'Administration des Rangs',

// Disallow Username Admin
	'Disallow_control' => 'Contr&ocirc;le des noms d\'utilisateurs interdits',
	'Disallow_explain' => 'Gérez les noms d\'utilisateurs qui ne seront pas autorisés. Vous pouvez mettre un joker (*) dans les noms. Veuillez noter que vous ne pouvez pas interdire un nom d\'utilisateur qui est d&eacute;j&agrave; utilis&eacute;. Vous devez d\'abord supprimer le nom d\'utilisateur en question pour ensuite l\'interdire.',

	'Delete_disallow' => 'Supprimer',
	'Delete_disallow_title' => 'Retirer un nom d\'utilisateur interdit',
	'Delete_disallow_explain' => 'Vous pouvez retirer un nom d\'utilisateur interdit en s&eacute;lectionnant le nom d\'utilisateur depuis la liste et en cliquant sur "Supprimer"',

	'Add_disallow' => 'Ajouter',
	'Add_disallow_title' => 'Interdire un nouveau nom d\'utilisateur',
	'Add_disallow_explain' => 'Vous pouvez interdire un nom d\'utilisateur en utilisant un joker (*) pour remplacer n\'importe quel caractère.',

	'No_disallowed' => 'Aucun nom d\'utilisateur interdit',

	'Disallowed_deleted' => 'Le nom d\'utilisateur interdit a bien &eacute;t&eacute; supprim&eacute;',
	'Disallow_successful' => 'Le nom d\'utilisateur a bien &eacute;t&eacute; interdit',
	'Disallowed_already' => 'Le nom d\'utilisateur que vous avez entr&eacute; ne peut &ecirc;tre interdit. Soit le nom d\'utilisateur est d&eacute;j&agrave; listé, soit il est déjà censur&eacute;s, soit un utilisateur l\'utilise actuellement.',

	'Click_return_disallowadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'administration des noms d\'utilisateurs interdits',

// Styles Admin
	'Styles_admin' => 'Administration des Th&egrave;mes',
	'Styles_explain' => 'Ajouter, enlever et g&eacute;rer les th&egrave;mes disponible pour vos utilisateurs',
	'Styles_addnew_explain' => 'La liste suivante contient tous les th&egrave;mes disponibles. Les entr&eacute;es de la liste n\'ont pas encore &eacute;t&eacute; install&eacute;s dans la base de donn&eacute;. Pour installer un th&egrave;me cliquez simplement sur le lien "Installer" &agrave; c&ocirc;t&eacute; de chaque thème.',

	'Select_template' => 'S&eacute;lectionnez un th&egrave;me',

	'Style' => 'Style',
	'Template' => 'Th&egrave;me',
	'Download' => 'T&eacute;l&eacute;chargement',

	'Edit_theme' => '&Eacute;diter un th&egrave;me',
	'Edit_theme_explain' => '&Eacute;diter les options pour le th&egrave;me s&eacute;lectionn&eacute;',

	'Create_theme' => 'Cr&eacute;er un th&egrave;me',
	'Create_theme_explain' => 'Cr&eacute;er un nouveau th&egrave;me depuis une base. Quand vous entrez les couleurs (si vous les &eacute;crivez en h&eacute;xad&eacute;cimale), n\'&eacute;crivez pas le "#". Par exemple, "cccccc" est valide, alors que "#cccccc" ne l\'est pas',

	'Export_themes' => 'Exporter les th&egrave;mes',
	'Export_explain' => 'Exporter les donn&eacute;e d\'un th&egrave;me. S&eacute;lectionnez le th&egrave; depuis la liste et le script cr&eacute;era un nouveau fichier de configuration de th&egrave;, et essayera de la sauvegarder dans le r&eacute;pertoire des th&egrave;mes. Si le script ne peut pas sauvegarder le th&egrave;me lui-m&ecirc;me, vous pourrez le t&eacute;l&eacute;charger puis l\'envoyer manuellement. Pour plus d\'information, lisez le guide de l\'utilisateur IcyPhoenix.',

	'Theme_installed' => 'Le th&egrave;me s&eacute;lectionn&eacute; &agrave; &eacute;t&eacute; correctement install&eacute;',
	'Style_removed' => 'Le th&egrave;me s&eacute;lectionn&eacute; &agrave; &eacute;t&eacute; correctement retir&eacute; depuis la base de donn&eacute;. Pour totalement supprimer le script, vous devez supprimer le r&eacute;pertoire.',
	'Theme_info_saved' => 'Les informations pour le th&egrave;me s&eacute;lectionn&eacute; ont &eacute;t&eacute; sauvegard&eacute;. Vous devez maintenant remettre les permissions du fichier theme_info.cfg (et si possible au dossier du th&egrave;me) en lecture seule',
	'Theme_updated' => 'Le th&egrave;me s&eacute;lectionn&eacute; &agrave; &eacute;t&eacute; mis &agrave; jour. Vous pouvez maitenant exporter les options du nouveau th&egrave;me',
	'Theme_created' => 'Le th&egrave;me &agrave; &eacute;t&eacute; cr&eacute;e. Vous pouvez maintenant exporter le fichier de configuration du th&egrave;me pour le conserver ou pour l\'utilisateur autre part.',

	'Confirm_delete_style' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce th&egrave;me ?',

	'Download_theme_cfg' => 'L\'exportateur ne peut pas &eacute;crire le fichier de configuration du th&egrave;me. Cliquez sur le bouton ci-dessous pour t&eacute;l&eacute;charger le fichier avec votre navigateur. Une fois t&eacute;l&eacute;charg&eacute;, transf&eacute;rez-le manuellement dans le r&eacute;pertoire des th&egrave;mes. Vous pouvez aussi paqueter les fichiers pour le distribuer si vous le d&eacute;sirez',
	'No_themes' => 'Le th&egrave;me s&eacute;lectionn&eacute; n\'existe pas. Pour cr&eacute;er un nouveau th&eagrave;me cliquez sur le lien "Nouveau" dans le panneau de gauche',
	'No_template_dir' => 'Impossible d\'ouvrir le r&eacute;pertoire des th&egrave;mes. Il est peut-&ecirc;tre limit&eacute; en acc&egraves, ou peut-&ecirc;tre n\'existe-t-il pas',
	'Cannot_remove_style' => 'Vous ne pouvez pas supprimer ce th&egrave;me tant que c\'est le th&eagrave;me par d&eacute;faut du forum. Veuillez changer le th&eagrave;me par d&eacute;faut et essayer &agrave; nouveau.',
	'Style_exists' => 'Le nom choisi pour le th&eagrave;me est d&eacute;j&agrave; pris, veuillez revenir en arri&egrave;re et choisir un nom diff&eacute;rent.',

	'Click_return_styleadmin' => 'Cliquez %sici%s pour revenir &agrave; l\'administration des th&egrave;mes',

	'Theme_settings' => 'Options du th&egrave;me',
	'Theme_element' => '&Eacute;l&eacute;ments du th&egrave;me',
	'Simple_name' => 'Nom simple',
	'Save_Settings' => 'Sauvegarder',

	'Stylesheet' => 'Feuille de style',
	'Stylesheet_explain' => 'Nom du fichier pour la feuille de style (.css) &agrave; utiliser pour ce th&egrave;me.',
	'Background_image' => 'Image d\'arri&egrave;re-plan',
	'Background_color' => 'Couleur d\'arri&egrave;re-plan',
	'Theme_name' => 'Nom du th&egrave;me',
	'Link_color' => 'Couleur des liens',
	'Text_color' => 'Couleur du texte',
	'VLink_color' => 'Couleur des liens visit&eacute;s',
	'ALink_color' => 'Couleur des liens actifs',
	'HLink_color' => 'Couleur des liens survol&eacute;',
	'Tr_color1' => 'Couleur de la premi&egrave;re cellule des tableaux',
	'Tr_color2' => 'Couleur de la deuxi&egrave;me cellule des tableaux',
	'Tr_color3' => 'Couleur de troisi&egrave;me cellule des tableaux',
	'Tr_class1' => 'Classe de la premi&egrave;re cellule des tableaux',
	'Tr_class2' => 'Classe de la deuxi&egrave;me cellule des tableaux',
	'Tr_class3' => 'Classe de la troisi&egrave;me cellule des tableaux',
	'Th_color1' => 'Premi&egrave;re couleur des tableaux de l\'en-t&ecirc;te',
	'Th_color2' => 'Deuxi&egrave;me couleur des tableaux de l\'en-t&ecirc;te',
	'Th_color3' => 'Table Header Colour 3',
	'Th_class1' => 'Table Header Class 1',
	'Th_class2' => 'Table Header Class 2',
	'Th_class3' => 'Table Header Class 3',
	'Td_color1' => 'Table Cell Colour 1',
	'Td_color2' => 'Table Cell Colour 2',
	'Td_color3' => 'Table Cell Colour 3',
	'Td_class1' => 'Table Cell Class 1',
	'Td_class2' => 'Table Cell Class 2',
	'Td_class3' => 'Table Cell Class 3',

// Admin Userlist Start
	'Userlist' => 'Liste des Utilisateurs',
	'Userlist_description' => 'Voyez la liste complète de vos utilisateurs et effectuez des actions dessus',

	'Add_group' => 'Ajouter à un Groupe',
	'Add_group_explain' => 'Sélectionnez le groupe auquel ajouter l\'utilisateur',

	'Open_close' => 'Ouvrir/Fermer',
	'Active' => 'Actif',
	'Group' => 'Groupe(s)',
	'Rank' => 'Rang',
	'Last_activity' => 'Dernière Activité',
	'Never' => 'Jamais',
	'User_manage' => 'Gérer',
	'Find_all_posts' => 'Trouver tous les Messages',

	'Select_one' => 'Selectionner un',
	'Ban' => 'Bannir',
	'Activate_deactivate' => 'Activer/Désactiver',

	'User_id' => 'ID de l\'Utilisateur',
	'User_level' => 'Niveau de l\'Utilisateur',
	'Ascending' => 'Croissant',
	'Descending' => 'Décroissant',
	'Show' => 'Montrer',
	'All' => 'Tous',

	'Member' => 'Membre',
	'Pending' => 'En Attente',

	'Confirm_user_ban' => 'Êtes-vous sûr de vouloir bannir l\'(es) utilisateur(s) sélectionné(s) ?',
	'Confirm_user_deleted' => 'Êtes-vous sûr de vouloir supprimer l\'(es) utilisateur(s) sélectionné(s) ?',

	'User_status_updated' => 'Statut de(s) l\'utilisateur(s) mis à jour avec succès !',
	'User_banned_successfully' => 'Utilisateur(s) banni avec succès !',
	'User_deleted_successfully' => 'Utilisateur(s) supprimé avec succès !',
	'User_add_group_successfully' => 'Utilisateur(s) ajouté(s) au groupe avec succès!',

	'Click_return_userlist' => 'Cliquez %sici%s pour revenir à la Liste des Utilisateurs.',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Votre installation est &agrave; jour. Aucune mise &agrave; jour n\'est disponibles pour votre version de phpBB.',
	'Version_up_to_date_ip' => 'Aucune mise &agrave; jour disponible pour votre version d\'IcyPhoenix',
	'Version_not_up_to_date' => 'Votre installation ne semble <b>pas</b> &ecirc;tre &agrave; jour. Des mises &agrave; jour sont disponibles pour votre version de phpBB, veuillez visiter <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> pour obtenir la derni&egrave;re version.',
	'Version_not_up_to_date_ip' => 'Des mises &agrave; jour sont disponibles pour votre version d\'IcyPhoenix, veuillez visiter <a href="http://www.icyphoenix.fr/" target="_new">la communaut&eacute; fran&ccedil;aise d\'IcyPhoenix</a> pour obtenir la derni&egrave;re version.',
	'Latest_version_info' => 'La derni&egrave; version disponible est <b>phpBB %s</b>.',
	'Current_version_info' => 'Vous utilisez <b>phpBB %s</b>.',
	'Connect_socket_error' => 'Impossible de se connecter au serveur phpBB, l\'erreur est: <br /><b>%s</b>%s',
	'Connect_socket_error_ip' => 'Impossible de se connecter au serveur IcyPhoenix',
	'Socket_functions_disabled' => 'Impossible d\'utiliser les fonctions de sockets.',
	'Mailing_list_subscribe_reminder' => 'Pour les informations sur les mises &agrave; jour de phpBB, pourquoi ne pas <a href="http://www.phpbb.com/support/" target="_new">s\'inscrire &agrave; notre liste d\'adresse mail</a>.',
	'Version_information' => 'Information sur la version',
	'Version_not_checked' => 'Le contr&ocirc;le de la version est actuellement d&eacute;sactiv&eacute;, veuillez visiter <a href="http://icyphoenix.fr" target="_new">le site fran&ccedil;ais d\'IcyPhoenix</a> pour plus d\'informations sur les versions d\'IcyPhoenix.',

// Advanced Signature Divider Control
	'sig_title' => 'Contr&ocirc;le avanc&eacute; de la séparation des signatures',
	'sig_divider' => 'Séparation actuelle des signatures',
	'sig_explain' => 'Gère la séparation entre le messages d\'un utilisateur et sa signature.',

// BIRTHDAY - BEGIN
	'Birthday_required' => 'Forcer les utilisateurs &agrave; donner une date de naissance',
	'Enable_birthday_greeting' => 'Activer les félicitations d\'anniversaires',
	'Birthday_greeting_explain' => 'Active les félicitations pour les anniversaires des membres ayant donné leur date de naissance via un MP lorsqu\'ils visitent le forum. Pour activer/désactiver les Mails d\'Anniversaires, vous devez regarder dans la section <b>Cron</b> de la <b>Configuration Générale<b>.',
	'Next_birthday_greeting' => 'Prochain anniversaire &agrave; f&ecirc;ter',
	'Next_birthday_greeting_explain' => 'Ce champ garde une trace de l\'anniversaire suivant &agrave; souhaiter',
	'Wrong_next_birthday_greeting' => 'L\'ann&eacute;e s&eacute;lectionn&eacute; pour les prochaines félicitations d\'anniversaire n\'est pas correcte. Veuillez essayer &agrave; nouveau',
	'Max_user_age' => '&Acirc;ge maximum de l\'utilisateur',
	'Min_user_age' => '&Acirc;ge minimum de l\'utilisateur',
	'Birthday_lookforward' => 'Anniversaires jusqu\'à dans ... jours',
	'Birthday_lookforward_explain' => 'Nombre de jours où le script cherchera les utilisateurs qui ont un anniversaire',
// BIRTHDAY - END

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Nombre maximum d\'avertissements',
	'Max_user_bancard_explain' => 'Si un utilisateur &agrave; plus de cartons jaunes que ce nombre, il sera banni',
	'ban_card' => 'Carton jaune',
	'ban_card_explain' => 'L\'utilisateur sera banni quand il/elle excèdera %d cartons jaunes',
	'Greencard' => 'D&eacute;bannir l\'Utilisateur',
	'Bluecard' => 'Reporter le Message',
	'Bluecard_limit' => 'Intervalle des cartons bleus',
	'Bluecard_limit_explain' => 'Notifie les mod&eacute;rateurs pour chaque X cartons bleus donn&eacute;e &agrave; un message',
	'Bluecard_limit_2' => 'Limite de cartons bleus',
	'Bluecard_limit_2_explain' => 'Premi&egrave;re notification envoy&eacute; aux mod&eacute;rateurs quand un message atteint ce nombre de carton(s) bleu(s)',
	'Report_forum' => 'Forum de report',
	'Report_forum_explain' => 'S&eacute;lectionnez le forum o&ugrave; les utilisateurs enverront le message accompagnant le report. Les utilisateurs <b>DOIVENT</b> au moins avoir les accès suffisant pour créer des sujets et y répondre.',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Cacher la durée de la dernière connexion',
	'Hidde_last_logon_explain' => 'Si vous définissez cette option sur \'oui\', la durée de la dernière connexion sera visible uniquement aux administrateurs',
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Gestion du statut En Ligne',
	'Online_time_explain' => 'Nombre de secondes qu\'un utilisateur doit &ecirc;tre affiché en "en ligne" (n\'utilisez pas de nombre inf&eacute;rieur &agrave; 60).',
	'Online_setting' => 'Options du statut "en ligne"',
	'Online_color' => 'Couleur du texte - En Ligne',
	'Offline_color' => 'Couleur du texte - Hors Ligne',
	'Hidden_color' => 'Couleur du texte - Invisible',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Accès bloqués au compte du Fondateur',
	'L_LISTOFADMINEDITEXP' => 'Ceci est une liste de tentative(s) d\'acc&egrave;s au compte du Fondateur. D\'autres administrateurs ont essay&eacute; de changer, supprimer ou faire devenir un utilisateur normal. Aucune modification des donn&eacute;es du profile ou des permissions du Fondateur n\'a eut lieu: toutes les tentatives ont &eacute;t&eacutge; bloqu&eacute;es. Cette liste peut uniquement &ecirc;tre remise &agrave; z&eacute;ro par le Fondateur.',
	'L_LISTOFADMINEDITUSERS' => 'Liste des tentatives bloquées pour le Fondateur',
	'L_LISTOFADMINTEXT' => 'Accès bloqué avec succès',
	'L_DELETEMSG' => 'Vider les entrées',
	'L_DELETESUCMSG' => 'Les entrées ont bien &eacute;t&eacute; vid&eacute;es !',
	'L_ADMINEDITMSG' => 'Vous n\'avez pas les permissions pour &eacute;diter les donn&eacute; personnelles et/ou les permissions du Fondateur.<br /><br />Cette tentative d\'acc&ergave;s non autoris&eacute; a &eacute;t&eacute; correctement bloquée et enregistr&eacute; !',
	'use_thank' => 'Autoriser les remerciements',
	'Default_avatar' => 'Définir un Avatar par d&eacute;faut',
	'Default_avatar_explain' => 'Ceci donnera un avatar aux utilisateurs qui n\'en ont pas encore sel&eacute;ctionn&eacute; un. Vous pouvez choisir un avatar par d&eacute;faut pour les invit&eacute;s et les utilisateur, et choisir si vous voulez que l\'avatar soit affich&eacute; pour les invit&eacute;s, les utilisateurs, les deux ou aucun.',
	'Default_avatar_guests' => 'Invit&eacute;s',
	'Default_avatar_users' => 'Utilisateurs',
	'Default_avatar_both' => 'Les deux',
	'Default_avatar_none' => 'Aucun',
	'Default_avatar_guests_url' => 'Adresse de l\'avatar par défaut pour les invités.',
	'Default_avatar_users_url' => 'Adresse de l\'avatar par défaut pour les membres.',

// Start Optimize Database
	'Optimize' => 'Optimiser',
	'Optimize_explain' => 'Optimise et retire les espaces vides de la base de donn&eacute;es.<br />Cette op&eacute;ration doit &ecirc;tre effectuée r&eacute;guli&egrave;rement pour être réellement efficace.',
	'Optimize_DB' => 'Optimiser la Base de Donn&eacute;e',
	'Optimize_Enable_cron' => 'Activer CRON',
	'Optimize_Cron_every' => 'CRON tout(es) les ',
	'Optimize_Cron_every_explain' => 'Veuillez noter que vous devez aussi activer CRON dans la configuration générale.',
	'Optimize_month' => 'Mois',
	'Optimize_2weeks' => 'Deux semaines',
	'Optimize_week' => 'Semaines',
	'Optimize_3days' => 'Trois jours',
	'Optimize_day' => 'Jours',
	'Optimize_6hours' => 'Six heures',
	'Optimize_hour' => 'Heures',
	'Optimize_30minutes' => 'Trente minutes',
	'Optimize_20seconds' => 'Vingt secondes (uniquement pour tester !)',
	'Optimize_Current_time' => 'Heure Actuelle',
	'Optimize_Next_cron_action' => 'Prochain lancement du CRON',
	'Optimize_Performed_Cron' => 'CRON précédent',
	'Optimize_Show_not_optimized' => 'Montrer uniquement les tables non-optimis&eacute;es',
	'Optimize_Show_begin_for' => 'Montrer uniquement les tables qui commencent par',
	'Optimize_Configure' => 'Configurer',
	'Optimize_Table' => 'Table',
	'Optimize_Record' => 'Enregistrement',
	'Optimize_Type' => 'Type',
	'Optimize_Size' => 'Taille',
	'Optimize_Status' => 'Statut',
	'Optimize_CheckAll' => 'Tout Cocher',
	'Optimize_UncheckAll' => 'Tout D&eacute;cocher',
	'Optimize_InvertChecked' => 'Inverser la S&eacute;lection',
	'Optimize_return' => 'Cliquez %sici%s pour retourner &agrave; l\'Optimisation de la Base de Donn&eacute;e',
	'Optimize_success' => 'La base de donn&eacute;e a &eacute;t&eacute; optimis&eacute;e avec succ-s',
	'Optimize_NoTableChecked' => '<b>Aucune</b> Tables s&eacute;lectionn&eacute;',

// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Annonce Globale',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'D&eacute;tecteur du Robot Google',
	'Detector_Explain' => '',
	'Detector_ID' => '#',
	'Detector_Time' => 'Heure',
	'Detector_Url' => 'URL',
	'Detector_Clear' => 'Tout Vider',
	'Detector_No_Bot' => 'Aucun Robot D&eacute;tect&eacute;',
	'Detector_Cleared' => 'Les informations d&eacute;tect&eacute;s ont &eacute;t&eacute; correctement vid&eacute;es',
	'Click_Return_Detector' => 'Cliquez %sici%s pour revenir au d&eacute;tecteur',

// added to Auto group mod
	'group_count' => 'Nombre de messages n&eacute;cessaires',
	'group_count_max' => 'Nombre de messages maximum',
	'group_count_updated' => '%d membres ont &eacute;t&eacute; retir&eacute;, %d membres ont &eacute;t&eacute; ajout&eacute;s &agrave; ce groupe',
	'Group_count_enable' => 'Les utilisateurs sont ajout&eacute;s automatiquement quand ils postent',
	'Group_count_update' => 'Ajouter/Mettre à jour des nouveaux utilisateurs',
	'Group_count_delete' => 'Supprimer/Mettre &agrave; jour les utilisateurs',
	'User_allow_ag' => 'Activer l\'adhésion automatique au groupe',
	'group_count_explain' => 'Quand les utilisateurs ont post&eacute;s plus de messages que cette valeur (<i>dans n\'importe quel forum</i>), ils seront ajout&eacute;s &agrave; ce groupe.<br />Ceci sera uniquement appliqu&eacute; si l\'adhésion automatique au groupe est activ&eacute;e',

// Start add - Bin Mod
	'Bin_forum' => 'Corbeille',
	'Bin_forum_explain' => 'Entrez l\'ID du forum qui servira de corbeille. Si vous entrez 0, cette fonctionnalit&eacute;e sera d&eacute;sactiv&eacute;e. Vous devriez &eacute;diter les permissions du forum pour interdire l\'acc&egrave;s et les r&eacute;ponses pour les utilisateurs.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Gestion de l\'&eacute;dition des Étiquettes',
	'Must_select_title' => 'Vous devez s&eacute;lectionner une Étiquette &agrave; &eacute;diter',
	'Title_updated' => 'L\'Étiquette a &eacute;t&eacute; mise &agrave; jour',
	'Title_added' => 'L\'Étiquette a &eacute;t&eacute; ajout&eacute;e',
	'Click_return_titleadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'&eacute;dition des Étiquettes',
	'Title_removed' => 'L\'Étiquette a &eacute;t&eacute; supprimée',
	'Quick_title_explain' => 'Vous pouvez cr&eacute;er de petits bouts de textes qui seront ajoutés au d&eacute;but du titre d\'un sujet en cliquant sur un seul bouton.<br />Si vous voulez afficher le nom de la personne qui a mis l\'Étiquette, utilisez %mod% &agrave; l\'endroit o&ugrave; le nom doit &ecirc;tre plac&eacute;. Par exemple [Lien OK | V&eacute;rifi&eacute; par %mod%] sera affich&eacute; ainsi: [Lien OK | V&eacute;rifi&eacute; par NomDuMod&eacute;rateur]. Dans la m&ecirc;me optique, vous pouvez aussi placer la date, avec %date%.',
	'Title_head' => 'Étiquette',
	'Title_auth' => 'Permissions',
	'Administrator' => 'Administrateur',
	'Topic_poster' => 'Auteur du sujet',
	'Add_new_title_info' => 'Ajouter une Étiquette',
	'Title_perm_info' => 'Permissions',
	'Title_perm_info_explain' => 'Les membres avec ce niveau pourront utiliser les Étiquettes',
	'Title_info' => 'Étiquette',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Disponible',
	'Unavailable' => 'Indisponible',
	'LIW_title' => 'Limiter la taille des Images',
	'LIW_admin_explain' => 'Activez ou d&eacute;sactivez la limitation de la taille des images et définissez la taille maximale de celles-ci sur votre forum. Si vous sentez que le cache SQL des images devient trop large, vous pouvez le vider en cliquant sur le bouton "Vider le Cache".<br /><br />La vérification de la compatibilité ci-dessous indique si cette fonction marchera ou non sur votre serveur.',
	'LIW_compatibility_checks' => 'V&eacute;rification de la compatibilit&eacute;',
	'LIW_mod_config' => 'Configuration',

	'LIW_config_updated' => 'La configuration de la limitation de la taille des images a bien &eacute;t&eacute; mise &agrave; jour',
	'LIW_cache_emptied' => 'Le cache a bien &eacute;t&eacute; vid&eacute;e',
	'LIW_click_return_config' => 'Cliquez %sici%s pour retourner &agrave; la page de configuration de la limitation de la taille des images',

	'LIW_getimagesize' => 'Adresse de support de la fonction getimagesize()',
	'LIW_getimagesize_explain' => 'Disponible depuis PHP 4.0.5',
	'LIW_getimagesize_available' => 'Il est possible de retrouver la taille des images',
	'LIW_getimagesize_unavailable' => 'Il n\'est pas possible de v&eacute;rifier si une image est trop large ou non, c\'est donc la taille de <i>toutes</i> les images qui sera modifiée',

	'LIW_urlaware' => 'Adresse de l\'ouverture de fopen()',
	'LIW_urlaware_explain' => 'Activez allow_url_fopen dans votre php.ini',
	'LIW_urlaware_available' => 'La taille des images peut &ecirc;tre mise en cache',
	'LIW_urlaware_unavailable' => 'La taille des images ne peut pas &ecirc;tre mise en cache',

	'LIW_openssl' => 'L\'extension openSSL est charg&eacute;e',
	'LIW_openssl_explain' => 'Chargez l\'extension openssl.dll dans votre php.ini',
	'LIW_openssl_available' => 'La taille des images (https://)peut &ecirc;tre retrouvée et sera donc mise en cache',
	'LIW_openssl_unavailable' => 'La taille des images (https://) ne peut &ecirc;tre retrouvée, il est donc impossible de la mettre en cache',

	'LIW_enable' => 'Redimensionner les images dans les messages',
	'LIW_enable_explain' => 'Activez cette option pour autoriser le redimensionnement des images dans les messages', // Utiliser %s pour mettre une variable de langue pour " oui " (eg: Mettez %s = Mettez oui).
	'LIW_sig_enable' => 'Redimensionner les images dans les signatures',
	'LIW_sig_enable_explain' => 'Activez cette option pour autoriser le redimensionnement des images dans les signatures',
	'LIW_attach_enable' => 'Redimensionner les images attach&eacute;es',
	'LIW_attach_enable_explain' => 'Activez cette option pour autoriser le redimensionnement des images attachées aux messages',
	'LIW_max_width' => 'Taille maximum d\'une image',
	'LIW_max_width_explain' => 'Sp&eacute;cifiez la taille maximum (en pixels) pour n\'importe quelle image post&eacute;e avec la balise [img][/img]',
	'LIW_empty_cache' => 'Vider le cache des dimensions des images',
	'LIW_empty_cache_explain' => 'Votre cache contient actuellement <b>%s</b> enregistrements', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => '<b>Note:</b> si vous videz le cache des dimensions, toutes les tailles des images devront &ecirc;tre remises en cache, ce qui peut temporairement ralentir le temps de chargement d\'un sujet',
	'LIW_empty_cache_button' => 'Vider le cache',

// News
	'xs_news_settings' => 'Configuration des Nouvelles',
	'xs_news_show' => 'Afficher la banni&egrave; des Nouvelles ?',
	'xs_news_show_ticker' => 'Afficher le défileur de Nouvelles ?',
	'xs_news_show_ticker_explain' => 'Ceci est un interrupteur global. En le d&eacute;sactivant, aucun défileur ne sera affich&eacute;; en l\'activant, l\'&eacute;tat de chaque défileur pourra &ecirc;tre controll&eacute; individuellement à partir de leurs options.',
	'xs_news_show_ticker_subtitle' => 'Afficher les sous-titres du défileur de Nouvelles ?',
	'xs_news_show_ticker_subtitle_explain' => 'Activer cette option affichera le titre "Défileur de Nouvelles" au-dessus du cadre de défilement.',
	'xs_news_show_news_subtitle' => 'Afficher les sous-titres des Nouvelles ?',
	'xs_news_show_news_subtitle_explain' => 'Activer cette option affichera le titre " Nouvelles " au-dessus du cadre des nouvelles.',
	'xs_news_dateformat' => 'Format de la Date',
	'xs_news_dateformat_helper' => 'Format actuel: %s',

// Bantron Mod : Begin
	'Bantron' => 'Gestionnaire de bannissements',
	'BM_Title' => 'Gestionnaire de bannissements',
	'BM_Explain' => 'Ajouter, &eacute;diter, voir et enlever les bannissements sur ce forum.',

	'BM_Show_bans_by' => 'Montrer qui a banni',
	'BM_All' => 'Tout',
	'BM_Show' => 'Montrer',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Derni&egrave;re Visite',
	'BM_Banned' => 'Bannis',
	'BM_Expires' => 'Expire',
	'BM_By' => 'Par',
	'BM_Reasons' => 'Raisons',

	'BM_Add_a_new_ban' => 'Ajouter un nouveau bannissement',
	'BM_Delete_selected_bans' => 'Supprimer le(s) bannissement(s) sel&eacute;ctionn&eacute;(s)',

	'BM_Private_reason' => 'Raison Priv&eacute;e',
	'BM_Private_reason_explain' => 'Cette raison sera visible uniquement par les administrateurs.',

	'BM_Public_reason' => 'Raison Publique',
	'BM_Public_reason_explain' => 'Cette raison sera visible par les utilisateur(s) banni(s) quand ils essayeront d\'acc&egrave;der au forum.',
	'BM_Generic_reason' => 'Raison G&eacute;n&eacute;rique (message par défaut)',
	'BM_Mirror_private_reason' => 'Copier la raison priv&eacute;e',
	'BM_Other' => 'Autre (remplir le cadre ci-dessous)',

	'BM_Expire_time' => 'Temps d\'expiration',
	'BM_Expire_time_explain' => 'En sp&eacute;cifiant une date, soit en relation &agrave; la date acutelle ou une date absolue, le bannissement sera retiré &agrave; le temps imparti.',
	'BM_Never' => 'Jamais',
	'BM_After_specified_length_of_time' => 'Sp&eacute;cifier une dur&eacute;e',
	'BM_Minutes' => 'Minute(s)',
	'BM_Hours' => 'Heure(s)',
	'BM_Days' => 'Jour(s)',
	'BM_Weeks' => 'Semaine(s)',
	'BM_Months' => 'Mois(s)',
	'BM_Years' => 'Ann&eacute;e(s)',
	'BM_After_specified_date' => 'Sp&eacute;cifier une date',
	'BM_AM' => ' du matin',
	'BM_PM' => ' du soir',
	'BM_24_hour' => ' format "24-Heures"',

	'BM_Ban_reasons' => 'Raisons du bannissement',
// Bantron Mod : End

	'board_disable_message' => 'Mettre un message pour la d&eacute;sactivation du forum.',
	'board_disable_message_texte' => 'Message qui sera affich&eacute; quand le site sera d&eacute;sactiv&eacute;',

// Start Edit Notes MOD
	'Edit_notes_settings' => '&Eacute;diter les options des Notes',
	'Edit_notes_enable' => 'Activer les Notes d\'&eacute;dition',
	'Edit_notes_enable_explain' => 'Activer/D&eacute;sactiver l\'&eacute;dition des Notes sur le forum',
	'Max_edit_notes' => 'Nombre maximum des Notes d\'&eacute;dition',
	'Max_edit_notes_explain' => 'Choisissez le nombre maximum de notes d\'&eacute;dition par message.',
	'Edit_notes_permissions' => 'Permissions des notes d\'&eacute;dition',
	'Edit_notes_permissions_explain' => 'Définissez le type de membres qui pourront utiliser les notes d\'édition.',
	'Edit_notes_admin' => 'Administrateurs uniquement',
	'Edit_notes_staff' => '&Eacute;quipe (Admins et Modos)',
	'Edit_notes_reg' => 'Utilisateurs Enregistr&eacute; (incluant l\'&eacute;quipe)',
	'Edit_notes_all' => 'Tous les utilisateurs (Invit&eacute;s, membres, l\&eacute;quipe)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'D&eacute;sactiver les inscriptions',
	'registration_status_explain' => 'Cette option d&eacute;sactivera toutes les nouvelles inscriptions sur votre forum.',
	'registration_closed' => 'Raison pour la clôture des inscriptions',
	'registration_closed_explain' => 'Un message qui explique pourquoi les inscriptions sont ferm&eacute;es, et qui apparaitra quand quelqu\'un essaye de s\'inscrire. Laissez vide pour garder le message par d&eacute;faut.',
// END Disable Registration MOD

	'Gender_required' => 'Forcer les utilisateurs &agrave; sp&eacute;cifier leur genre',

//admin user list mail
	'Usersname' => 'Nom des Utilisateurs',
	'Admin_Users_List_Mail_Title' => 'Liste des Mails des Utilisateurs',
	'Admin_Users_List_Mail_Explain' => 'Ceci est une liste de toutes les adresses mail de vos utilisateurs',

// Start add - Forum notification MOD
	'Forum_notify' => 'Autoriser les notifications dans les forums',
	'Forum_notify_enabled' => 'Autoriser',
	'Forum_notify_disabled' => 'Ne pas autoriser',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Colonnes de Smileys',
	'Smilie_table_rows' => 'Lignes de Smileys',
	'Smilie_window_columns' => 'Colonnes de la fen&ecirc;tre des Smileys',
	'Smilie_window_rows' => 'Lignes de la fen&ecirc;tre des Smileys',
	'Smilie_single_row' => 'Nombre de Smileys par ligne',
	'Smilie_single_row_explain' => 'Exemple : nombre de smileys dans la réponse rapide',

	'Auth_Rating' => 'Notations',

// Gravatars
	'Enable_gravatars' => 'Autoriser les gravatars',
	'Gravatar_rating' => 'Note maximum d\'un gravatar',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Lisez le guide</a> pour plus d\'informations. Choisissez Non pour aucune restriction.',
	'Gravatar_default_image' => 'Image par d&eacute;faut du gravatar',
	'Gravatar_default_image_explain' => 'Si le gravatar n\'est pas trouv&eacute;, le serveur retournera cette image. Le r&eacute;pertoire de l\'image est relatif au r&eacute;pertoire de l\'installation d\'IcyPhoenix. Laissez blanc pour aucune image.',

// Admin Account Actions
	'Account_actions' => 'Actions sur les comptes',
	'Account_inactive_explain' => 'Les utilisateurs qui sont inactifs, en attente d\'activation or de suppression, chacun avec un lien pour &eacute;diter leurs permissions et/ou leur profil.',
	'Account_active_explain' => 'Les utilisateurs qui sont actifs, chacun avec un lien pour les d&eacute;sactiver, les supprimer ou &eacute;diter leurs permissions et/ou leur profile.',
	'Account_active' => 'Utilisateurs Actifs',
	'Account_inactive' => 'Utilisateurs Inactifs',
	'Account_activate' => 'Activer la s&eacute;lection',
	'Account_deactivate' => 'D&eacute;sactiver la s&eacute;lection',
	'Account_none' => 'Il n\'y a pas de membre en attente d\'activation.',
	'Account_total_user' => 'Utilisateur: <b>%d</b>',
	'Account_total_users' => 'Nombres d\'utilisateurs: <b>%d</b> utilisateurs',
	'Account_activation' => 'M&eacute;thode d\'activation',
	'Account_awaits' => 'En attente d\'activation depuis',
	'Account_registered' => 'Enregistr&eacute; depuis',
	'Account_delete_users' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ces utilisateurs ?',
	'Account_delete_user' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cet utilisauteur ?',
	'Account_sort_letter' => 'Montrer uniquement les comptes qui commencent par',
	'Account_others' => 'Autres',
	'Account_all' => 'Tous',
	'Account_year' => 'Ann&eacute;e',
	'Account_years' => 'Ann&eacute;es',
	'Account_week' => 'Semaine',
	'Account_weeks' => 'Semaines',
	'Account_day' => 'Jour',
	'Account_days' => 'Jours',
	'Account_hour' => 'Heure',
	'Account_hours' => 'Heures',
	'Account_user_activated' => 'L\'utilisateur est activ&eacute;.',
	'Account_users_activated' => 'Les utilisateurs sont activ&eacute;s.',
	'Account_user_deactivated' => 'L\'utilisateur est d&eacute;sactiver.',
	'Account_users_deactivated' => 'Les utilisateurs sont d&eacute;sactiv&eacute;s.',
	'Account_user_deleted' => 'L\'utilisateur est supprim&eacute;.',
	'Account_users_deleted' => 'Les utilisateurs sont supprim&eacute;s.',
	'Account_activated' => 'Activation des comptes',
	'Account_activated_text' => 'Votre compte a été activ&eacute;',
	'Account_deactivated' => 'D&eacute;sactivation du compte',
	'Account_deactivated_text' => 'Votre compte a été d&eacute;sactiv&eacute;',
	'Account_deleted' => 'Suppression des comptes',
	'Account_deleted_text' => 'Votre compte a été supprim&eacute;',
	'Account_notification' => 'Une notification par mail a &eacute;t&eacute; envoy&eacute;e.',

// Acronyms
	'Acronyms_title' => 'Administration des Acronymes',
	'Acronyms_explain' => 'Ajouter, &eacute;diter et enlever les acronymes qui seront automatiquement ajout&eacute;s aux messages sur le forum.',
	'Acronym' => 'Acronyme',
	'Acronyms' => 'Acronymes',
	'Edit_acronym' => '&Eacute;diter un Acronyme',
	'Description' => 'Description',
	'Add_new_acronym' => 'Ajouter un nouvel acronyme',
	'Update_acronym' => 'Mettre &agrave; jour l\'acronyme',

	'Must_enter_acronym' => 'Vous devez entrer un acronyme et sa description',
	'No_acronym_selected' => 'Aucun acronyme s&eacute;lectionn&eacute; pour l\'&eacute;dition',

	'Acronym_updated' => 'L\'acronyme s&eacute;lectionn&eacute; a &eacute;t&eacute; mis &agrave; jour avec succès',
	'Acronym_added' => 'L\'acronyme s&eacute;lectionn&eacute; a &eacute;t&eacute; ajout&eacute; avec succès',
	'Acronym_removed' => 'L\'acronyme s&eacute;lectionn&eacute; a &eacute;t&eacute; supprim&eacute; avec succès',

	'Click_return_acronymadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'Administrations des Acronymes',
	'Prune_shouts' => 'D&eacute;lestage automatique des messages du chat',
	'Prune_shouts_explain' => 'Nombres de jours avant que les messages du chat ne soient supprim&eacute;s. Si vous mettez 0, le d&eacute;lestage automatique sera d&eacteu;sactiv&eacute;',

	'MOD_OS_ForumRules' => 'R&egrave;gles du Forum',
	'Forum_rules' => 'R&egrave;gles du Forum',
	'Rules_display_title' => 'Afficher le titre dans le cadre des R&egrave;gles du Forum ?',
	'Rules_custom_title' => 'Titre Personnalis&eacute;',
	'Rules_appear_in' => 'Les r&egrave;gles apparaitront &agrave; ces endroits:',
	'Rules_in_viewforum' => 'L\'affichage du forum',
	'Rules_in_viewtopic' => 'La lecture d\'un sujet de ce forum',
	'Rules_in_posting' => 'L\'écriture d\'un message dans ce forum',

	'Php_Info_Explain' => 'Cette page liste les informations sur la version de PHP install&eacute;e sur ce serveur. Elle inclue des d&eacute;tails sur les modules charg&eacute;s, les variables disponible et les options par d&eacute;faut. Ces informations peuvent servir lors du diagnostic de probl&egrave;mes. Veuiller noter que certains h&eacute;bergeurs limiteront certaines informations affich&eacute;es ici pour des raisons de s&eacute;curit&eacute;es. Nous vous conseillons de ne pas communiquer les d&eacute;tails de cette page sauf lorsque demandé par un membre de l\'Équipe du forum de support d\'Icy Phoenix.',

	'IcyPhoenix_Main' => 'Page d\'acceuil d\'IcyPhoenix',
	'IcyPhoenix_Download' => 'T&eacute;lechargement d\'IcyPhoenix',
	'IcyPhoenix_Code_Changes' => 'Modifications du code',
	'IcyPhoenix_Updates' => 'Mises &agrave; jour d\'IcyPhoenix',
	'PhpBB_Upgrade' => 'Mise &agrave; jour de phpBB',
	'Header_Welcome' => 'Bienvenue sur le panneau d\'administration d\'IcyPhoenix',

	'Prune_users' => 'D&eacute;lester les utilisateurs',
	'Prune_Overview' => 'Visualisation du d&eacute;lestage',
	'Prune_title_explain' => 'G&eacute;rer le d&eacute;lestage de chaque forum.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'D&eacute;lestage actif',
	'Prune_freq' => 'Tout Retirer',
	'Prune_check' => 'Tout Cocher',
	'Prune_days' => 'Jours',
	'Prune_days_explain' => '* Retirer les sujets sans réponse.',
	'Click_return_admin_po' => 'Cliquez %sici%s pour retourner &agrave; la visualisation du d&eacute;lestage',
	'Prune_update' => 'Les options du d&eacute;lestage ont bien &eacute;t&eacute; mises &agrave; jour',

	'Admin_notepad_title' => 'Bloc-notes',
	'Admin_notepad_explain' => 'Laisser les notes globales pour les autres administrateurs.',
	'Allow_generator' => 'Activer le g&eacute;n&eacute;rateur d\'avatar',
	'Avatar_generator_template_path' => 'R&eacute;pertoire du g&eacute;n&eacute;rateur d\'avatar',
	'Avatar_generator_template_path_explain' => 'Le dossier de stockage des images du g&eacute;n&eacute;rateur relatif &agrave; votre dossier racine, par défaut: images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'N\'appliquer les liens automatiques qu\'une fois par message',

	'Autolinks_title' => 'Liens Automatiques',
	'Autolinks_explain' => 'Ajouter, &eacute;diter et retirer les mots-clefs qui seront automatiquement remplac&eacute; par des liens dans le message. Si le lien est relatif au forum (ex: ./viewtopic.php?f=3&t=1), cochez la case \'Interne\' et cela ajoutera l\'ID de la Session.<br /><br />Par exemple: le <b>Mot-Clef</b> dans le message sera remplac&eacute; par ceci:<br />&lt;a href="<b>Adresse</b>" title="<b>Commentaire</b>" style="<b>Style</b>"&gt;<b>Texte</b>&lt;/a&gt;',
	'links_keyword' => 'Mot-Clef',
	'links_title' => 'Texte',
	'links_url' => 'Adresse URL',
	'links_comment' => 'Commentaire',
	'links_style' => 'Style',
	'links_forum' => 'Forums pour les liens automatiques',
	'links_forum2' => 'Forum',
	'links_internal' => 'Le lien est-il interne ?',
	'Autolinks_add' => 'Ajouter un lien automatique', // Titre du cadre d'ajout
	'Add_keyword' => 'Ajouter le Lien Automatique', // Message du bouton de confirmation
	'Autolinks_edit' => '&Eacute;diter un lien automatique',
	'Edit_keyword' => '&Eacute;dition d\'un lien automatique',
//	'Delete_link' => 'Cochez cette case pour supprimer ce lien automatique.',

	'Select_all_forums' => 'Tous les Forums',
	'Autolink_added' => 'Lien automatique ajout&eacute; avec succès.',
	'Autolink_updated' => 'Lien automatique mis &agave; jour avec succès.',
	'Autolink_removed' => 'Lien automatique supprim&eacute; avec succès.',
	'No_autolink_selected' => 'Aucun lien automatique n\'est selectionn&eacute; pour la suppression.',
	'No_autolinks' => 'Il n\'y a aucun Lien Automatique dans la Base de Donn&eacute;e pour l\'instant. Remplissez le cadre ci-dessous pour en ajouter un.',
	'Must_enter_autolink' => 'Vous devez entrer un mot clef, une adresse URL et le texte du lien.',
	'Click_return_autolinkadmin' => 'Cliquez %sici%s pour retourner &agrave; l\'Administration des liens Automatiques',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Nombre maximum de tentatives de connection',
	'Max_login_attempts_explain' => 'Le nombre de fois maximum que quelqu\'un peut essayer de se connecter au forum.',
	'Login_reset_time' => 'Temps de verouillage de la connection',
	'Login_reset_time_explain' => 'Le temps, en minutes, que l\'utilisateur doit attendre dans le cas où il aurait dépassé le nombre maximum de tentatives de connexion avant de pouvoir réessayer.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'Les nouveaux smileys doivent-ils &ecirc;tre ajout&eacute;s avant ou apr&egrave;s les smileys déjà existant ?',
	'smiley_change_position' => 'Changer l\'Ordre d\'Insertion',
	'before' => 'Avant',
	'after' => 'Apr&egrave;s',
	'Move_top' => 'Envoyer au d&eacute;but',
	'Move_end' => 'Envoyer &agrave; la fin',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Permissions des Pages',
	'auth_view_portal' => 'Page d\'Acceuil',
	'auth_view_forum' => 'Forum',
	'auth_view_viewforum' => 'Voir un Forum',
	'auth_view_viewtopic' => 'Voir un Sujet',
	'auth_view_faq' => '<acronym title="Foire Aux Questions">FAQ</acronym>',
	'auth_view_memberlist' => 'Liste des Membres',
	'auth_view_groupcp' => 'Groupes d\'Utilisateurs',
	'auth_view_profile' => 'Profil',
	'auth_view_search' => 'Recherche',
	'auth_view_album' => 'Album',
	'auth_view_links' => 'Liens',
	'auth_view_calendar' => 'Calendrier',
	'auth_view_attachments' => 'Attachements',
	'auth_view_download' => 'T&eacute;l&eacute;chargements',
	'auth_view_pic_upload' => 'Envois d\'images',
	'auth_view_kb' => 'Base de Connaissances',
	'auth_view_ranks' => 'Rangs',
	'auth_view_statistics' => 'Statistiques',
	'auth_view_recent' => 'Sujets R&eacute;cents',
	'auth_view_referers' => 'R&eacute;f&eacute;rences',
	'auth_view_rules' => 'R&egrave;gles',
	'auth_view_site_hist' => 'Historique du site',
	'auth_view_shoutbox' => 'ShoutBox',
	'auth_view_viewonline' => 'Voir Qui est En Ligne',
	'auth_view_contact_us' => 'Nous Contacter',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Archives du Chat',
	'auth_view_custom_pages' => 'Pages Personnalis&eacute;es',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Recherche Yahoo',
	'Yahoo_search_settings' => 'Options de la recherche Yahoo',
	'Yahoo_search_settings_explain' => 'Configurez les options pour la recherche Yahoo. Pour plus d\'informations, visitez le <a href="http://submit.search.yahoo.com/free/request" target="_blank">Site Officiel</a> de Yahoo à ce sujet.',
	'Yahoo_search_select_forums' => 'S&eacute;lectionner les Forums',
	'Yahoo_search_select_forums_explain' => 'S&eacute;lectionnez les forums &agrave; inclure dans cette liste. Vous pouvez s&eacute;lectionner autant de forum que vous voulez en appuyant sur la touche CTRL (Windows) ou CMD (Mac) et en cliquant sur le nom du forum. Par d&eacute;faut, tous les forums visibles sont s&eacute;lectionn&eacute;.',
	'Yahoo_search_savepath' => 'R&eacute;pertoire de sauvegarde pour la liste des URLs',
	'Yahoo_search_savepath_explain' => 'Entrez le chemin du dossier où enregistrer la liste des URLs à sauvegarder. Cela doit être un chemin relatif à la racine du répertoire d\'installation d\'Icy Phoenix. Par exemple, si vous souhaitez l\'enregistrer dans le dossier \'cache\' se situant à l\'adresse <b>http://votresite.com/cache/</b>, entrez simplement \'<b>cache</b>\'. N\'oubliez pas que le dossier de sauvegarde doit avoir un CHMOD défini sur 775 ou 777 (droits d\'accès en lecture et écriture).',
	'Yahoo_search_additional_urls' => 'Entrez les adresses URL additionnelles',
	'Yahoo_search_additional_urls_explain' => 'Entrez les adresses URL additionnelles que Yahoo doit parcourir (une par ligne). Vous devez entrer l\'adresse compl&egrave;te (par exemple: <b>http://votresite.com/votrepage.html</b>.',
	'Yahoo_search_compress_file' => 'Compresser la liste des adresses URL',
	'Yahoo_search_compress_file_explain' => 'Si vous choisissez "Oui" et si votre serveur le supporte, la liste des adresses sera compress&eacute;e en GZip, ce qui r&eacute;duira sensiblement la taille du fichier et donc réduira la bande passante utilisée par le bot Yahoo.',
	'Yahoo_search_compression_level' => 'Niveau de compression pour le fichier',
	'Yahoo_search_compression_level_explain' => 'Choisissez le niveau de compression pour le fichier. 9 est recommand&eacute; sauf si vous rencontrez des probl&egrave;mes. Dans ce cas, choisissez une valeur moins élevée.',
	'Yahoo_search_generate_file' => 'G&eacute;n&eacute;rer le fichier',
	'Yahoo_search_error_no_forums' => 'Erreur: aucun forum s&eacute;lectionn&eacute;. Revenez en arri&egrave;re et choisissez au moins un forum.',
	'Yahoo_search_error_no_gzip' => 'Erreur: soit vous utilisez une ancienne version de PHP soit votre h&eacute;bergeur ne supporte pas GZip. Veuillez revenir en arri&egrave;re et désactivez la compression de la liste des adresses URLs.',
	'Yahoo_search_error_unopenable_file' => 'Erreur: impossible d\'ouvrir le fichier %s.',
	'Yahoo_search_error_unwritable_file' => 'Erreur: impossible d\'&eacute;crire dans le fichier %s.',
	'Yahoo_search_error_unclosable_file' => 'Erreur: impossible de fermer le fichier %s.',
	'Yahoo_search_error_update_sql' => 'Erreur: impossible de mettre &agrave; jour le champ %s',
	'Yahoo_search_error_unknown_file_error' => 'Erreur: le fichier n\'a pas &eacute;t&eacute; sauvegard&eacute; &agrave; cause d\'une erreure inconnue.',
	'Yahoo_search_file_done' => 'La g&eacute;n&eacute;ration est termin&eacute;. Veuillez copier le lien ci-dessous dans le champ appropri&eacute; de Yahoo: <br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'Nombre maximum de marques-pages envoy&eacute;s dans une balise lien',
	'Max_bookmarks_links_explain' => 'Nombre maximum de marques-pages &agrave; envoy&eacute; dans une balise lien au d&eacute;but d\'un document. Cete information est, par exemple, utilis&eacute; par Mozilla. Entrez 0 pour d&eacute;sactiver cette fonction.',

	'Faq_manager' => 'G&eacute;rer la FAQ',
	'Faq_Rules_manager' => 'FAQ &amp; R&egrave;gles',
	'board_rules' => 'R&egrave;gles du forum',
	'board_faq' => 'FAQ du forum',
	'bbcode_faq' => 'FAQ des BBCodes',
	'attachment_faq' => 'FAQ des pi&egrave;ces jointes',
	'prillian_faq' => 'FAQ de Prillian',
	'bid_faq' => 'FAQ des listes d\'amis',


	'Account_active2' => 'Utilisateurs actifs',
	'Account_inactive2' => 'Utilisateurs inactifs',

// Search Flood Control - added 2.0.20
	'Search_Flood_Interval' => 'Contr&ocirc;tre de l\'intervalle du flood de la recherche',
	'Search_Flood_Interval_explain' => 'Nombre de secomdes qu\'un utilisateur doit attendre avant de pouvoir faire une nouvelle recherche',
	'Confirm_delete_smiley' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce smiley ?',
	'Confirm_delete_word' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce mot &agrave; censurer ?',
	'Confirm_delete_rank' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce rang ?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Ces champs ont &eacute;t&eacute; cr&eacute;es par vous ou un autre administrateur. Pour plus d\'informations, v&eacute;rifiez les champs du profil dans la barre de navigation. Les champs qui ont une astérisque (*) sont n&eacute;cessaire. Les champs qui ont un "&dagger;" seront visibles uniquement par les administrateurs.',

	'field_deleted' => 'Les champs sp&eacute;cifi&eacute; ont &eacute;t&eacute; supprim&eacute;',
	'double_check_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer le champ du profil "%s" depuis la base de donn&eacute;e de mani&egrave;re permanente ?',

	'here' => 'Ici',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Ce champ existe d&eacute;j&agrave;.<br /><br />Vous pouvez essayer d\'en cr&eacute;er un nouveau <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">ici</a>,<br /><br />ou essayer de l\'<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">&eacute;diter</a> celui qui existe d&eacute;j&agrave;.',
	'click_here_here' => 'Cliquez <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">ici</a> pour ajouter un nouveau champ,<br /><br />ou cliquez <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">ici</a> pour retoruner &agrave; l\'index de l\'administration.',
	'field_success' => 'Le champ a &eacute;t&eacute; correctement cr&eacute;e !<br /><br />Cliquez <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">ici</a> pour ajouter un champ,<br /><br />ou cliquez <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">ici</a> pour retourner &agrave; l\'index de l\'administration.',
	'Custom_Profile' => 'Champs du profil',
	'profile_field_created' => 'Le champ du profil a &eacute;t&eacute; cr&eacute;e',
	'profile_field_updated' => 'Le champ du profil a &eacute;t&eacute; mis &agrave; jour',

	'add_field_title' => 'Ajouter un champ personnalis&eacute; au profil',
	'edit_field_title' => '&Eacute;diter un champ personnalis&eacute; du profil',
	'add_field_explain' => 'Cr&eacute;er un nouveau champ pour le profil que les utilisateurs pourront modifier dans leur profil.',
	'edit_field_explain' => '&Eacute;diter les champs que vous avez d&eacute;j&agrave; cr&eacute;e pour vos utilisateurs.',

	'add_field_general' => 'Options g&eacute;n&eacute;rales',
	'add_field_admin' => 'Options des administrateurs',
	'add_field_view' => 'Voir les options',
	'add_field_text_field' => 'Voir les options des champs textes',
	'add_field_text_area' => 'Voir les options des aires de texte',
	'add_field_radio_button' => 'Voir les options des boutons radio',
	'add_field_checkbox' => 'Voir les options des cases &agrave; chocher',

	'default_value' => 'Valeur par d&eacute;faut',
	'default_value_explain' => 'C\'est la valeur pas d&eacute;faut pour ce champ. Si un utilisateur ne choisis pas de valeur pour ce champ, la valeur par d&eacute;faut sera mise &agrave; la place. Si ce champ est n&eacute;cessaire, cette valeur sera celle que les utilisateurs auront.',
	'default_value_radio_explain' => 'Entrez un nom d\'une des valeurs de champs disponibles.',
	'default_value_checkbox_explain' => 'Entrez une valeur qui sera automatiquement s&eacute;lectionn&eacute;. Cette valeur doit &ecirc;tre dans les valeurs possible',
	'max_length' => 'Taille maximum',
	'max_length_explain' => 'Le nombre maximum de caract&egrave;res dans ce champ.',
	'max_length_value' => ' Le nombre doit &ecirc;tre entre %d et %d.',
	'available_values' => 'Valeurs disponibles',
	'available_values_explain' => 'Une seule valeur par ligne',

	'add_field_view_disclaimer' => 'Toutes ces options seront mis &agrave; "non" si les utilisateurs ne peuvent voir ces champs',

	'add_field_name' => 'Nom du champ',
	'add_field_name_explain' => 'Entrez le nom associ&eacute; &agrave; ce champ. Vous pouvez traduire ce champ dans le fichier <b>language/lang_XXX/lang_profile_fields.php</b>.',
	'add_field_description' => 'Description du champ',
	'add_field_description_explain' => 'Entrez une description associ&eacute; &agrave; ce champ. Cette information sera montr&eacute;e en dessous du nom du champ, en plus petit (exactement comme ce texte). Vous pouvez traduire ce champ dans le fichier <b>language/lang_XXX/lang_profile_fields.php</b>.',
	'add_field_type' => 'Type de champ',
	'add_field_type_explain' => 'S&eacute;lectionnez le type de champ du profil que vous voulez ajouter. Des exemples pour chaque types de champs sont disponibles sur la droite.',
	'edit_field_type_explain' => 'S&eacute;lectionnez le type de champ du profil &agrave; utiliser pour ce champ. Des exemples pour chaque types de champs sont disponibles sur la droite.',
	'add_field_required' => 'Rendre ce champ n&eacute;cessaire',
	'add_field_required_explain' => 'Si ce champ devient "n&eacute;cessaire", tous les utilisateurs qui s\'enregistreront plus tard <strong>devront</strong> le remplir, et tous les utilisateurs enregistr&eacute;s auront la valeur par d&eacute;faut.',
	'add_field_user_can_view' => 'Autoriser les utilisateurs &agrave; voir ce champ',
	'add_field_user_can_view_explain' => 'Si vous choisissez "oui", les utilisateurs pourront voir et modifier ce champ. Si vous choisissez "non", les administrateurs seront les seuls &agrave; pouvoir le voir et le modifier, ce champ ne pourra pas &ecirc;tre n&eacute;cessaire.',
	'view_in_profile' => 'Visible dans le profil',
	'profile_locations_explain' => 'Si vous voulez que ce champ soit visible dans le profil de l\'utilisauter.',
	'contacts_column' => 'Colonne de contact',
	'about_column' => '&Agrave; propos de la colonne',
	'view_in_memberlist' => 'Visible dans la liste des membres',
	'view_in_topic' => 'Visible dans un sujet',
	'topic_locations_explain' => 'Si vous voulez que ce champ soit visible dans un sujet.',
	'author_column' => 'Section auteur',
	'above' => 'ci-dessus ',
	'below' => 'en dessous de ',

	'textarea' => 'Aire de texte',
	'textarea_example' => 'Exemple d\'une aire de texte' . "\n" . 'd&eacute;filante.',
	'text_field' => 'Champ texte',
	'text_field_example' => 'Exemple d\'un champ texte',
	'radio' => 'Bouton radio',
	'radio_example' => 'Exemple de deux boutons radios',
	'checkbox' => 'Case &agrave; cocher',
	'checkbox_example' => 'Exemple de deux cases &agrave; cocher',

	'profile_field_list' => 'Vos champs customis&eacute;s pour le profil',
	'profile_field_list_explain' => 'Ici sont r&eacute;pertori&eacute;s tous les champs du profil que vous avez cr&eacute; sur votre forum, avec les liens pour les &eacute;diter ou les supprimer.',
	'profile_field_id' => 'Identifiant #',
	'profile_field_name' => 'Nom du champ',
	'profile_field_action' => 'Action',
	'no_profile_fields_exist' => 'Aucun champ champ personnalis&eacute; pour le profil n\'a &eacute;t&eacute; cr&eacute;e.',

	'enter_a_name' => 'Vous <strong>devez</strong> entrez un nom de champ<br /><br />Veuillez revenir en arri&egrave;re et r&eacute;essayer',
// END Custom Profile Fields MOD

	'Add' => 'Ajouter',
	'split_global_announce' => 'S&eacute;parer les annonces globales',
	'split_announce' => 'S&eacute;parer les annonces',
	'split_sticky' => 'S&eacute;parer les notes/post-it',
	'split_topic_split' => 'S&eacute;parer les sujets',
	'Announce_settings' => 'Options des annonces',
	'Split_settings' => 'Options des s&eacute;paration',
	'Server_Cookies' => 'Options du serveur',
	'ENABLE_CHECK_DNSBL' => 'Enable public Blacklist IP check upon register',
	'ENABLE_CHECK_DNSBL_EXPLAIN' => 'If you enable IP check upon register, user IP address will be checked against the public blacklist. Please note that sometimes this check may result in unintentional blocking of regular users who have an IP listed by mistake in the public Blacklist.',
	'ENABLE_CHECK_DNSBL_POSTING' => 'Enable public Blacklist IP check upon posting',
	'ENABLE_CHECK_DNSBL_POSTING_EXPLAIN' => 'If you enable IP check upon posting, user IP address will be checked against the public blacklist.',
	'Config_explain2' => 'Customiser les options du calendrier et des sous-forums, modifier l\'apparence et les options.',
	'Forum_postcount' => 'Compteurs des messages des utilisateurs',
	'Use_Captcha' => 'Utiliser le CAPTCHA',
	'Use_Captcha_Explain' => 'Si vous choisissez "oui", un code de confirmation avanc&eacute; sera g&eacute;ner&eacute;. Si non, un code de confirmation standart sera g&eacute;ner&eacute;.',
	'Sync_Pics_Count' => 'En cliquand sur "<b>Oui</b>", les compteurs d\'images des utilisateurs seront synchronis&eacute;s.',
	'Pics_Count_Synchronized' => 'Les compteurs d\'images des utilisateurs ont &eacute;t&eacute; correctement synchronis&eacute;',
	'Pics_Count_Not_Synchronized' => 'Les compteurs d\'images des utilisateurs n\'ont pas &eacute;t&eacute; correctement synchronis&eacute;',

// IP - BUILD 001
// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'Configuration de la shoutbox AJaX',
	'Shout_read_only' => 'Vue seule',
	'Displayed_shouts' => 'Messages montr&eacute;s',
	'Displayed_shouts_explain' => 'Nombre de messages qui seront montr&eacute;s au chargement de la shoutbox.<br /><i>Entrez z&eacute;ro pour montrer tous les messages.</i>',
	'Stored_shouts' => 'Messages enregistr&eacute;s',
	'Stored_shouts_explain' => 'Nombre de messages qui seront enregistr&eacute;s dans la base de donn&eacute;e.<br />Cette valeur doit &ecirc;tre &eacute;gale ou sup&eacute;rieure au nombre de messages &agrave; montrer.<br />Entrez z&eacute;ro pour sauvegarder tous les messages',
	'Shout_guest_allowed' => 'Autoriser les invit&eacute;s',
	'Shoutbox_flood' => 'Intervalle de flood',
	'Shoutbox_flood_explain' => 'Nombre de secondes qu\'un utilisateur doit attendre entre chaque messages.',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'G&eacute;rer les compteurs de messages',
	'Post_count_explain' => '<b>&Eacute;diter le compteur de messages d\'un utilisateur.</b>',
	'Modify_post_counts' => 'Modifier le compteur de messages',
	'Post_count_changed' => 'Vous avez modifi&eacute; correctement le compteur de message de l\'utilisateur !',
	'Click_return_posts_config' => 'Cliquez %sici%s pour retourner &agrave; l\'administration de l\'&eacute;diteur des compteurs des messages',
	'Modify_post_count' => 'Modifier le compteur de messages',
	'Edit_post_count' => '&Eacute;diter le compteur de messages pour <b>%s</b>',
	'Post_count' => 'Nombre de messages',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Cette fonctionnalit&eacute; vous permet d\'envoyer des messages priv&eacute;s ou des mails pour tous vos utilisateurs, ou les utilisateurs d\'un groupe. Pour ceci, un mail sera envoy&eacute; &agrave; l\'adresse de l\'administrateur, avec une copie carbone aux utilisateurs.<br />Les mails seront envoy&eacute;s en groupe: cela r&eacute;duire les probl&egrave;mes &acause; cause du serveur. Le statut de l\'envoie sera enregistr&eacute; dans la base de donn&eacute;. Vous pouvez fermer la fen&ecirc;tre quand vous voulez pour stopper l\'envoie de l\'mail de messsage, vous pourrez continuer plus tard.<br /><b>Si le HTML est activ&eacute;, vous pourrez &eacute;crire des mails en HTML, en utilisant &lt;br /&gt; pour un saut de ligne.</b><br /><b>Si vous choisissez d\'envoyer un mail totalement en HTML, souvenez-vous qu\'aucun fichier th&egrave;me ou CSS ne sera utilis&eacute;, en incluant les balises HEAD et BODY.</b><br />Souvenez-vous que les messages priv&eacute;s de masse ne supportent que les BBCode, donc si vous &eacute;crivez le message priv&eacute; de masse en HTML, le message ne sera pas affich&eacute; correctement.',
	'megamail_inactive_users' => 'Les utilisateurs qui n\'ont pas visit&eacute; le forum depuis les X derni&egrave;s jours',
	'megamail_header' => 'Votre session mail',
	'megamail_id' => 'Identifiant de l\'mail',
	'megamail_batchstart' => 'Proc&eacute;d&eacute;',
	'megamail_batchsize' => 'Processus',
	'megamail_batchwait' => 'Pause',
	'megamail_created_message' => 'L\mail de message &agrave; &eacute;t&eacute; sauvegard&eacute; dans la base de donn&eacute;.<br /><br />Pour commencer, %scliquez ici%s ou attendez le rafraichissement automatique.',
	'megamail_send_message' => 'Le processus actuel (%s - %s) &agrave; &eacute;t&eacute; envoy&eacute;.<br /><br />Pour continuer l\'envoie, %scliquez ici%s ou attendez le rafraichissement automatique.',
	'megamail_status' => 'Statut',
	'megamail_proceed' => '%sProc&eacute;der maintenant%s',
	'megamail_done' => 'Effectu&eacute;',
	'megamail_none' => 'Aucun enregistrement trouv&eacute;.',
	'megamail_delete_confirm' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cet mail ?',
	'megamail_deleted' => 'L\'mail a &eacute;t&eacute; correctement supprim&eacute;',
	'megamail_click_return' => 'Cliquez %sici%s pour retourner aux mails et aux messages priv&eacute;s de massage',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'R&eacute;sultats des sondages (Qui a vot&eacute; et comment).',
	'Admin_Vote_Title' => 'Administration du sondage',
	'Vote_id' => '#',
	'Poll_topic' => 'Sujet du sondage',
	'Vote_username' => 'Voteur(s)',
	'Vote_end_date' => 'Dur&eacute;e du vote',
	'Sort_vote_id' => 'Num&eacute;ro du sondage',
	'Sort_poll_topic' => 'Sujet du sondage',
	'Sort_poll_title' => 'Titre du sondage',
	'Sort_poll_start' => 'Date de d&eacute;part',
	'Sort_poll_end' => 'Date de fin',
	'Submit' => 'Envoyer',
	'Select_sort_field' => 'S&eacute;lectionner le type de classement',
	'Sort_ascending' => 'Ascendent',
	'Sort_descending' => 'Descendant',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'Informations de GD',
	'NO_GD' => 'Pas GD',
	'GD_Description' => 'Informations r&eacute;cup&eacute;r&eacute;es depuis la librairie GD',
	'GD_Freetype_Support' => 'Support des polices "Freetype":',
	'GD_Freetype_Linkage' => 'Support des liens types "Freetype":',
	'GD_T1lib_Support' => 'Support de T1lib:',
	'GD_Gif_Read_Support' => 'Support du lecteur de Gif:',
	'GD_Gif_Create_Support' => 'Support du cr&eacute;ateur de Gif:',
	'GD_Jpg_Support' => 'Support du Jpg et du Jpeg:',
	'GD_Png_Support' => 'Support du Png:',
	'GD_Wbmp_Support' => 'Support du WBMP:',
	'GD_XBM_Support' => 'Support de XDM:',
	'GD_Jis_Mapped_Support' => 'Support de l\'&eacute;criture japonaise:',
	'GD_True' => 'Oui',
	'GD_False' => 'Non',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA',
	'captcha_config_explain' => '<b>D&eacute;termine l\'apparance des images utilis&eacute;es par le code de confirmation avanc&eacute; s\'il est activ&eacute;.</b>',
	'VC_active' => 'Le code de confirmation avanc&eacute; est activ&eacute; !',
	'VC_inactive' => 'Le code de confirmation avanc&eacute; est activ&eacute; !',
	'background_configs' => 'Arri&egrave;re-plan',
	'Click_return_captcha_config' => 'Cliquez %sici%s pour retournez &agrave; la configuration du CAPTCHA',

	'CAPTCHA_width' => 'Largeur du CAPTCHA',
	'CAPTCHA_height' => 'Hauteur du CAPTCHA',
	'background_color' => 'Couleur d\'arri&egrave;re-plan',
	'background_color_explain' => 'En hexadecimal (par exemple #0000FF pour le bleu).',
	'pre_letters' => 'Nombre de lettres ombr&eacute;es',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Augmentation du nombre de lettres ombr&eacute;es',
	'great_pre_letters_explain' => '',
	'Random' => 'Au Hasard',
	'random_font_per_letter' => '&Eacute;criture au hasard pour chaque lettre',
	'random_font_per_letter_explain' => 'Chaque lettre aura une &eacute;criture prise au hasard.',

	'back_chess' => 'Echantillon',
	'back_chess_explain' => 'Remplir l\'arri&egrave;re-plan avec seize rectangles.',
	'back_ellipses' => 'Ellipses',
	'back_arcs' => 'Lignes courbes',
	'back_lines' => 'Lignes',
	'back_image' => 'Image d\'arri&egrave;re-plan',
	'back_image_explain' => '(Cette fonction n\'est pas encore integr&eacute;)',

	'foreground_lattice' => 'Premier plan en treillis',
	'foreground_lattice_explain' => '(largeur x hauteur)<br />G&eacute;nerer un treillis au-dessus du CAPTCHA',
	'foreground_lattice_color' => 'Couleur du treillis',
	'foreground_lattice_color_explain' => 'En hexadecimal (par exemple #0000FF pour le bleu).',
	'gammacorrect' => 'Correctement de la contraste',
	'gammacorrect_explain' => '(0 = d&eacute;sactiv&eacute;)<br />NOTEZ BIEN: Changer la valeur aura un effet direct sur la lisibilit&eacute; du CAPTCHA!',
	'generate_jpeg' => 'Type de l\'image',
	'generate_jpeg_explain' => 'le format JPEG a une plus grosse compression que PNG, et la lisibilit&eacute; est meilleure pour le CAPTCHA.',
	'generate_jpeg_quality' => 'Qualit&eacute;',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Supprimer tous les sujets traceur depuis %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Supprimer le sujet nomm&eacute; %s<br />', // %s = topic name
	'Affected_Rows' => '%d entr&eacute;es seront affect&eacute;es<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Tous les sujets traceur cr&eacute;e avant la date entr&eacute;e seront supprim&eacute;s.',
	'Delete_Before_Date_Button' => 'Tous supprimer avant la date',
	'No_Shadow_Topics' => 'Aucun sujet traceur n\'a &eacute;t&eacute; trouv&eacute;.',
	'Topic_Shadow' => 'Sujet traceur',
	'TS_Desc' => '<b>Supprimez les sujets traceur sans supprimer le sujet initial.</b><br />Les sujets traceur sont cr&eacute;s quand vous d&eacute;placez un sujet et que vous choisissez de garder un sujet traceur vers le message.',
	'Month' => 'Mois',
	'Day' => 'Jour',
	'Year' => 'Ann&eacute;e',
	'Clear' => 'Vider',
	'Resync_Ran_On' => 'Resynchroniser ran le %s<br />', // %s = insertion of forum name
	'Version' => 'Version',

	'Title' => 'Titre',
	'Moved_To' => 'D&eacute;plac&eacute; vers',
	'Moved_From' => 'D&eacute;plac&eacute; depuis',

/* Modes */
	'topic_time' => 'Date du sujet',
	'topic_title' => 'Titre du sujet',

/* Errors */
	'Error_Month' => 'Le mois doit &ecirc;tre en un et douze',
	'Error_Day' => 'Le jour doit &ecirc;tre entre un et trente et un',
	'Error_Year' => 'L\'ann&eacute;e doit &ecirc;tre entre 1970 et 2038',
	'Error_Topics_Table' => 'Erreur en acc&egrave;dant &agrave; la table des sujets',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Reconstruire la recherche',
	'Rebuild_search_desc' => 'Cela indexera tous les messages dans la base de connaissance et reconstruira la table des recherches. Cela peut prendre beaucoup de temps, veuillez ne pas changer de page pendant la reconstruction.',
	'Post_limit' => 'Limite de message',
	'Time_limit' => 'Limite de temps',
	'Refresh_rate' => 'Temps de rafraichissement',

	'Next' => 'Suivant',
	'Finished' => 'Fini',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => '&Eacute;diter les clefs de langues',
	'faq_editor_explain' => '<b>&Eacute;ditez et r&eacute;arrangez votre FAQ (foire aux questions), la FAQ des BBCodes ou les r&egrave;gles du forum.</b><br /><br />Vous <u>ne devez pas</u> supprimer ou modifier la section appel&eacute;e <b>Probl&egrave;mes phpBB 2</b> ou <b>&Agrave; propos d\'IcyPhoenix</b>.',

	'faq_select_language' => 'Choisissez le fichier de langue que vous voulez &eacute;diter',
	'faq_retrieve' => 'R&eacute;perer le fichier',

	'faq_block_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce bloc ?',
	'faq_quest_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette question (et sa r&eacute;ponse) ?',

	'faq_quest_edit' => '&Eacute;diter la question &amp; la r&eacute;ponse',
	'faq_quest_create' => 'Cr&eacute;er une nouvelle question &amp; une nouvelle r&eacute;ponse',

	'faq_quest_edit_explain' => '&Eacute;diter la question et sa r&eacute;ponse. Changez le bloc si vous voulez.',
	'faq_quest_create_explain' => '&Eacute;crivez la question, sa r&eacute;ponse et cliquez sur "envoyer".',

	'faq_block' => 'Bloc',
	'faq_quest' => 'Question',
	'faq_answer' => 'R&eacute;ponse',

	'faq_block_name' => 'Nom du bloc',
	'faq_block_rename' => 'Renommer un bloc',
	'faq_block_rename_explain' => 'Changer le nom d\'un bloc dans le fichier',

	'faq_block_add' => 'Ajouter un bloc',
	'faq_quest_add' => 'Ajouter une question',

	'faq_no_quests' => 'Aucune question dans ce bloc. Ni ce bloc ni les blocs suivants ne seront affich&eacute;s. Supprimez ce bloc ou ajouter une question ou plus.',
	'faq_no_blocks' => 'Aucun bloc d&eacute;fini. Ajoutez un nouveau bloc en tapant le nom ci-dessous.',

	'faq_write_file' => 'Impossible d\'&eacute;crire dans le fichier de langue !',
	'faq_write_file_explain' => 'Vous devez rendre le fichier &agrave; &eacute;diter (dans language/lang_french/) <i>inscriptible</i> pour utiliser ce panneau de contr&ocirc;le. Sous UNIX, veuillez faire un <code>chmod 666 sur le fichier</code>. La plupart des clients FTP peuvent le faire, sinon vous pouvez utiliser telnet ou SSH.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => '&Eacute;diter le language',
	'rules_editor_explain' => '&Eacute;diter et r&eacute;arranger les r&egrave;gles de votre forum.',

	'rules_select_language' => 'Choisissez le fichier de langue &agrave; &eacute;diter',
	'rules_retrieve' => 'R&eacute;perer un fichier',

	'rules_block_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce bloc ?',
	'rules_quest_delete' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette question (et sa r&eacute;ponse) ?',

	'rules_quest_edit' => '&Eacute;diter la question &amp; sa r&eacute;ponse',
	'rules_quest_create' => 'Cr&eacute;eer une nouvelle question &amp; une nouvelle r&eacute;ponse',

	'rules_quest_edit_explain' => '&Eacute;diter la question et sa r&eacute;ponse. Changez le bloc si vous le voulez.',
	'rules_quest_create_explain' => '&Eacute;crivez la question, sa r&eacute;ponse et cliquez sur "envoyer".',

	'rules_block' => 'Bloc',
	'rules_quest' => 'Question',
	'rules_answer' => 'R&eacute;ponse',

	'rules_block_name' => 'Nom du bloc',
	'rules_block_rename' => 'Renommer un bloc',
	'rules_block_rename_explain' => 'Changer le nom d\'un bloc dans le fichier',

	'rules_block_add' => 'Ajouter un bloc',
	'rules_quest_add' => 'Ajouter une question',

	'rules_no_quests' => 'Aucune question dans ce bloc. Ni ce bloc ni les blocs suivants ne seront affich&eacute;s. Supprimez ce bloc ou ajouter une question ou plus.',
	'rules_no_blocks' => 'Aucun bloc d&eacute;fini. Ajoutez un nouveau bloc en tapant le nom ci-dessous.',

	'rules_write_file' => 'Impossible d\'&eacute;crire dans le fichier de langue !',
	'rules_write_file_explain' => 'Vous devez rendre le fichier &agrave; &eacute;diter (dans language/lang_french/) <i>inscriptible</i> pour utiliser ce panneau de contr&ocirc;le. Sous UNIX, veuillez faire un <code>chmod 666 sur le fichier</code>. La plupart des clients FTP peuvent le faire, sinon vous pouvez utiliser telnet ou SSH.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'Voir le type de message priv&eacute;',
	'Show_IP' => 'Voir l\'adresse IP',
	'Rows_Per_Page' => 'lignes par pages',
	'Archive_Feature' => 'Archives',
	'Inline' => 'integr&eacute;',
	'Pop_up' => 'Pop-up',
	'Current' => 'Courant',
	'Rows_Plus_5' => 'Ajouter 5 lignes',
	'Rows_Minus_5' => 'Retirer 5 lignes',
	'Enable' => 'Activer',
	'Disable' => 'D&eacute;sactiver',
	'Inserted_Default_Value' => 'Vous n\'avez pas configur&eacute; %s, la valeur par d&eacute;faut a &eacute;t&eacute; choisie<br />', // %s = config name
	'Updated_Config' => '%s a &eacute;t&eacute;correctement mis &agrave; jour<br />', // %s = config item
	'Archive_Table_Inserted' => 'La table d\'archives n\'existe pas, cr&eacute;ation est en cours<br />',
	'Switch_Normal' => 'Passez en mode normal',
	'Switch_Archive' => 'Passez en mode "archives"',

/* General */
	'Deleted_Message' => 'Supprimer le message priv&eacute; "%s"<br />', // %s = PM title
	'Archived_Message' => 'Archiver le message priv&eacute; "%s"<br />', // %s = PM title
	'Archived_Message_No_Delete' => 'Impossible de supprimer "%s", il &eacute;tait marqu&eacute; comme archive<br />', // %s = PM title
	'Private_Messages' => 'Messages priv&eacute;s',
	'Private_Messages_Archive' => 'Archives des messages priv&eacute;s',
	'Archive' => 'Archives',
	'To' => '&Agrave;',
	'Subject' => 'Suject',
	'Sent_Date' => 'Date d\'envois',
	'From' => 'Depuis',
	'Sort' => 'Classement',
	'Filter_By' => 'Filtr&eacute; par',
	'PM_Type' => 'Type de message priv&eacute;',
	'Status' => 'Statut',
	'No_PMS' => 'Aucune message priv&eacute; n\'a &eacute;t&eacute; trouv&eacute; pour vos crit&egrave;res',
	'Archive_Desc' => 'Les messages priv&eacute;s que vous avez choisis pour archiver sont list&eacute;s ici. Les utilisateurs ne pourront plus y acc&egrave;der (l\'envoyeur et le receveur), mais vous pouvez y acc&egrave;der et les supprimer quand vous voulez.',
	'Normal_Desc' => 'Tous les messages priv&eacute;s sur votre forum peuvent &ecirc;tre g&eacute;r&eacute; ici. Vous pouvez les lires, les supprimer ou les archiver (suppression du c&ocirc;t&eacute; de l\'utilisateur uniquement).',
	'Remove_Old' => 'Messages priv&eacute;s orphelins</a> <span class="gensmall">Supprime les messages priv&eacute;s des utilisateurs supprim&eacute;s</span>.',
	'Remove_Sent' => 'Bo&icirc;te des messages priv&eacute;s envoy&eacute;s</a> <span class="gensmall">Les messages dans la bo&icirc;te d\'envois sont exactement les m&ecirc;mes que ceux qui ont &eacute;t&eacute; envoy&eacute;, sauf pour le r&eacute;cepteur</span>',
	'Removed_Old' => 'Supprimer tous les messages priv&eacute; orphelin<br />',
	'Removed_Sent' => 'Supprimer tous les messages priv&eacute;s envoy&eacute;s<br />',
	'Utilities' => 'Utilitaires de suppression de masse',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Toutes les types', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'Messages priv&eacute;s lus', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'Nouveaux messages priv&eacute;s', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'Messages priv&eacute;s envoy&eacute;s', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'Messages priv&eacute;s sauvegard&eacute;s (Int&eacute;rieur)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'Messages priv&eacute;s sauvegard&eacute;s (Ext&eacute;rieur)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'Messages priv&eacute;s non lus', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Erreur pendant une requ&ecirc;te sur une table n&eacute;cesaire.',
	'Error_PM_Text_Table' => 'Erreur pendant une requ&ecirc;te sur la table du contenu des messages priv&eacute;s.',
	'Error_PM_Table' => 'Erreur pendant une requ&ecirc;te sur la table des messages priv&eacute;s.',
	'Error_PM_Archive_Table' => 'Erreur pendant une requ&ecirc;te sur la table des archives des messages priv&eacute;s.',
	'No_Message_ID' => 'Aucun identifiant pour le message n\'a &eacute;t&eacute; sp&eacute;cifi&eacute;.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'Administration des cat&eacute;gories de lien',
	'Link_Categories_Explain' => '<b>G&eacute;rez vos cat&eacute;gories:</b><br /><br />Cr&eacute;ez, modifiez, supprimez ou classez, et ca&euml;tera.',
	'Category_Permissions' => 'Permissions des cat&eacute;gories',
	'Category_Title' => 'Titre de la cat&eacute;gorie',
	'Category_Desc' => 'Description de la cat&eacute;gorie',
	'View_level' => 'Voir le niveau',
	'Upload_level' => 'Niveau pour les envois',
	'Rate_level' => 'Niveau pour les notations',
	'Comment_level' => 'Niveau pour les commentaires',
	'Edit_level' => 'Niveau pour les &eacute;ditions',
	'Delete_level' => 'Niveau pour les suppressions',
	'New_category_created' => 'La nouvelle cat&eacute;gorie a &eacute;t&eacute; correctement cr&eacute;e',
	'Click_return_link_category' => 'Cliquez %sici%s pour retourner &agrave; l\'administration des liens de categories',
	'Category_updated' => 'This category has been updated successfully',
	'Delete_Category' => 'Delete Category',
	'Delete_Category_Explain' => 'Delete this category?',
	'Category_deleted' => 'The category has been deleted successfully',
	'Category_changed_order' => 'The category order has been changed successfully',

// Config
	'Link_Config' => 'Configuration de l\'adminitration des liens',
	'Link_config_explain' => 'Changez les options g&eacute;nerales de vos liens ici',
	'lock_submit_site' => 'Verrouillez la proposition de sites des utilisateurs',
	'allow_guest_submit_site' => 'Autoriser les invit&eacute;(s) &agrave; proposer leur site',
	'allow_no_logo' => 'Autoriser les propositions de sites qui n\'ont pas de banni&egrave;re',
	'site_logo' => 'L\'adresse du logo (adresse absolue)',
	'site_url' => 'L\'adresse du site',
	'width' => 'Taille maximum de la banni&egrave;re',
	'height' => 'Hauteur maximum de la banni&egrave;ret',
	'linkspp' => 'Nombre maximum de liens par pages',
	'interval' => 'Rapidit&eacute; de l\'affichage des banni&egrave;res',
	'display_logo' => 'Nombre de banni&egrave;re &agrave; afficher en une fois',
	'Link_display_links_logo' => 'Montrer les banni&egrave;res des sites',
	'Link_email_notify' => 'Envoyer un mail aux administrateurs du site lors de l\'ajout d\'un lien',
	'Link_pm_notify' => 'Envoyer un message priv&eacute; aux administrateurs du site lors de l\'ajout d\'un lien',
	'Link_config_updated' => 'La configuration des liens &agrave; &eacute;t&eacute; correctement mise &agrave; jour',
	'Click_return_link_config' => 'Cliquez %sici%s pour retourner &agrave; la configuration des liens',

// Link_MOD
	'Links' => 'Gestion des liens',
	'Links_explain' => 'Previsualiser les statuts des liens et &eacute;ditez ou supprimez les liens s&eacute;lectionn&eacute;s.',
	'Add_link' => 'Ajouter un lien',
	'Add_link_explain' => 'Ajouter un nouveau lien.',
	'Edit_link' => '&Eacute;diter un lien',
	'Edit_link_explain' => '&Eacute;diter les d&eacute;tails d\'un lien. Vous pouvez aussi choisir de ',
	'Delete_link' => 'Supprimer un lien',
	'Delete_link_explain' => 'Supprimer ce lien. Vous pouvez aussi choisir de ',
	'Link_update' => 'Mettre &agrave; jour les d&eacute;tails d\'un lien',
	'Link_delete' => 'Supprimer ce lien',
	'Link_title' => 'Nom du site',
	'Link_url' => 'Adresse du site',
	'Link_logo_src' => 'Logo du site (88x31 pixels, la taille du fichier ne doit pas d&eacute;passer 10K)',
	'Link_category' => 'Cat&eacute;gorie du site',
	'Link_desc' => 'Description du site',
	'link_hits' => 'Clics',
	'Link_basic_setting' => 'D&eacute;tails basiques du lien',
	'Link_adv_setting' => 'Options avanc&eacute;es',
	'Link_active' => 'Statut actif',

	'Link_admin_add_success' => 'Le lien a &eacute;t&eacute; correctement ajout&eacute;',
	'Link_admin_add_fail' => 'Impossible d\'ajouter un nouveau lien, veuillez essayer plus tard',
	'Link_admin_update_success' => 'Le lien a &eacute;t&eacute; correctement mis &agrave; jour',
	'Link_admin_update_fail' => 'Impossible de mettre &agrave; jour le lien, veuillez essayer plus tard',
	'Link_admin_delete_success' => 'Le lien a &eacute;t&eacute; correctement supprim&eacute;',
	'Link_admin_delete_fail' => 'Impossible de supprimer le lien, veuillez essayer plus tard',
	'Click_return_lastpage' => 'Cliquez %sici%s pour retourner &agrave; la page pr&eacute;cendete',
	'Click_return_admin_links' => 'Cliquez %sici%s pour retourner &agrave; la gestion des liens',
	'Preview' => 'Pr&eacute;visualiser',
	'Search_site' => 'Rechercher un site',
	'Search_site_title' => 'Rechercher un site par son nom/sa description:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Remplacements dans les messages',
	'Replace_text' => 'Remplacez des mots ou des lignes par ce que vous voulez.<br /><b>Notez bien:</b> Cette action ne peut &ecirc;tre annul&eacute;e.',
	'Link' => 'Lien',
	'Str_old' => 'Texte &agrave; chercher',
	'Str_new' => 'Remplacer par',
	'No_results' => 'Aucuns r&eacute;sultats trouv&eacute;s',
	'Replaced_count' => 'Nombre de messages mis &agrave; jour: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rang',
	'group_color' => 'Couleur',
	'group_legend' => 'Montrer dans la l&eacute;gende',
	'group_legend_short' => 'L&eacute;gende',
	'group_main' => 'Groupe principal',
	'group_members' => 'Membres',
	'group_update' => 'Appliquer les changements',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Colorer les groupes',
	'Manage_Color_Groups' => 'Gestion des groupes color&eacute;',
	'Add_New_Group' => 'Ajouter un nouveau groupe',
	'Color' => 'Couleur',
	'User_Count' => 'Compteur d\'utilisateur',
	'Color_List' => 'Liste des noms:',
	'Group_Name' => 'Nom du groupe',
	'Define_Users' => 'D&eacute;finir les utilisateurs',
	'Color_Group_User_List' => 'Liste des membres des groupes color&eacute;s',
	'Options' => 'Options',
	'Example' => 'Exemple',
	'User_List' => 'Liste totale des utilisateurs',
	'Unassigned_User_List' => 'Utilisateurs sans groupe',
	'Assigned_User_List' => 'Utilisateurs avec un groupe',
	'Add_Arrow' => 'Ajouter &agrave; la liste',
	'Update' => 'Mise &agrave; jour',
	'Updated_Group' => 'Met &agrave; jour la liste des utilisateurs des groupes color&eacute;s<br />',
	'Deleted_Group' => 'Supprime un groupe sp&eacute;cifi&eacute;. Tous les utilisateurs dans ce groupe se retrouveront sans groupe<br />',
	'Hide' => 'Masquer',
	'Un-hide' => 'Montrer',
	'Group_Hidden' => 'Groupe cach&eacute;<br />',
	'Group_Unhidden' => 'Groupe visible<br />',
	'Groups_Updated' => 'Les changements sur les groupes color&eacute;s ont &eacute;t&eacute; correctement mis &agrave; jour<br />',
	'Moved_Group' => 'L\'ordre des groupes &agrave; &eacute;t&eacute; modifi&eacute;<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Ajoutez et mettez &agrave; jour un groupe, ou modifiez les utilisateurs assign&eacute;s aux groupes de couleur.<br />Les groupes "cach&eacute;s" ne seront pas visibles sur l\'index.',
	'Color_Group_User_List_Desc' => 'Ajouter ou supprimer les utilisateurs des groupes color&eacute;s.',

//Errors
	'Error_Group_Table' => 'Erreur pendant une requ&ecirc;te sur la table des groupes.',
	'Error_Font_Color' => '<b><u>Attention:</b></u> La couleur de fond apparait comme invalide !',
	'Color_Ok' => 'La couleur sp&eacute;cifi&eacute; semble &ecirc;tre invalide.',
	'No_Groups_Exist' => 'Aucun groupes n\'existe.',
	'Error_Users_Table' => 'Erreur pendant une requ&ecirc;te sur la table des utilisateurs.',
	'Invalid_Group_Add' => '%s est un nom de groupe invalide ou qui est d&eacute;j&agrave; pris.<br />',

//Dynamic
	'Group_Updated' => 'Mettre &agrave; jour la couleur du groupe %s<br />',
	'Editing_Group' => 'Vous &ecirc;tes actuellement en train d\'&eacute;diter la liste des membres du groupe %s.',
	'Invalid_User' => '%s est un nom invalide<br />',
	'Invalid_Order_Num' => '%s est invalide, mais cela a &eacute;t&eacute; fix&eacute;. Veuillez essayez de d&eacute;placer le groupe vers le haut/vers le bas &agrave; nouveau.',

//New for 1.2.0
	'Users_List' => 'Liste des utiisateurs',
	'Groups_List' => 'Liste des groupes d\'utilisateurs',
	'List_Info' => '<b>Notes</b>: <ul><li>Gardez enfonc&eacute; "ctrl" en s&eacute;lecionnant plus noms.</li><li>Si un utilisateur est dans un groupe, et qu\'il est ajout&eacute; &agrave; un groupe color&eacute; sp&eacute;cifique, le groupe de couleur surpassera le groupe basiquee</li><li>Si un utilisateur est membre de deux groupes ou plus, la couleur du groupe le plus haut sera assign&eacute;.</li></ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Si vous cliquez sur "oui", tous les fichiers dans le dossier principal de cache seront supprim&eacute;s de mani&egrave;re d&eacute;finitive.<br /><br /><em>&Ecirc;tes-vous sur de vouloir le faire ?</em>',
	'Empty_Cache_Posts_Question' => 'Si vous cliquez sur "oui", tous les fichiers dans le dossier de cache des messages seront supprim&eacute;s de mani&egrave;re d&eacute;finitive.<br /><br /><em>&Ecirc;tes-vous sur de vouloir le faire ?</em>',
	'Empty_Cache_Thumbs_Question' => 'Si vous cliquez sur "oui", tous les fichiers dans le dossier de cache des miniatures seront supprim&eacute;s de mani&egrave;re d&eacute;finitive.<br /><br /><em>&Ecirc;tes-vous sur de vouloir le faire ?</em>',
	'Empty_Cache_Success' => 'Le dossier a &eacute;t&eacute; correctement vid&eacute;.',

	'Copy_Auth' => 'Copier les permissions depuis',
	'Copy_Auth_Explain' => 'Veuillez noter que vous ne pouvez copier les permissions que depuis les forums !',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Tout s&eacute;lectionner',
	'SELECT_FILE' => 'S&eacute;lectionner un fichier',
	'START_BACKUP' => 'Commencer la sauvegarde',
	'START_RESTORE' => 'Commencer la restauration',
	'STORE_AND_DOWNLOAD' => 'Enregistrer et t&eacute;l&eacute;chargerStore and download',
	'STORE_LOCAL' => 'Engestrer le fichier localement',
	'STRUCTURE_ONLY' => 'Structure seulement',

// Backup
	'ACP_BACKUP' => 'Sauvegarder la base de donn&eacute;e',
	'ACP_BACKUP_EXPLAIN' => 'Sauvegarde toutes les donn&eacute;es relatives &agrave; votre site. Le fichier de sauvegarde sera enregistr&eacute; dans le dossier <b>backup/</b> (v&eacute;rifiez que le fichier est <b>inscriptible</b>), vous pourrez donc le t&eacute;l&eacute;charger ou faire une restauration depuis la page "Restauration". La configuration de votre serveur peut aussi vous permettre dans sauvegarder le fichier compress&eacute; en gzip.<br /><span class="text_red">La sauvegarde sera effectu&eacute;e en plusieurs &eacute;tapes pour r&eacute;duire les erreurs de latences: Le script peut faire la sauvegarde automatiquement, vous n\'avez donc qu\'a attendre la fin du processus automatique.</span><br /><br />',

	'BACKUP_OPTIONS' => 'Options de la sauvegarde',
	'BACKUP_TYPE' => 'Type de sauvegarde',

	'DATABASE' => 'Utilitaires pour la base de donn&eacute;e',
	'DATA_ONLY' => 'Donn&eacute;es uniquement',
	'DELETE_BACKUP' => 'Supprimer la sauvegarde',
	'DELETE_SELECTED_BACKUP' => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer la sauvegarde s&eacute;lectionn&eacute;e ?',
	'DESELECT_ALL' => 'Tout d&eacute;s&eacute;lectionner',
	'DOWNLOAD_BACKUP' => 'T&eacute;l&eacute;charger la sauvegarde',

	'FILE_TYPE' => 'Type de fichier',
	'FULL_BACKUP' => 'Complet',

	'BACKUP_TYPE_COMPLETE' => 'Complet',
	'BACKUP_TYPE_EXTENDED' => '&Eacute;tendu',
	'BACKUP_TYPE_COMPACT' => 'Saut de lignes compacts',

	'BACKUP_SUCCESS' => 'Le fichier de sauvegarde a &eacute;t&eacute; correctement cr&eacute;e.',
	'BACKUP_DELETED' => 'Le fichier de sauvegarde a &eacute;t&eacute; correctement supprim&eacute;.',

	'TABLE_SELECT' => 'S&eacute;lection de la table',

	'BACKUP_IN_PROGRESS' => 'Sauvegarde en cours ...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Sauvegarde de la table: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Vous serez automatiquement redirig&eacute; vers la prochaine &eacute;tape dans quelques secondes',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Si vous n\'&ecirc;tes pas redirig&eacute; automatiquement, cliquez %sici%s',
	'BACKUP_OPTIONS_RETURN' => 'Cliquez %sici%s pour retourner &agrave; la gestion des sauvegardes',

// Errors
	'Table_Select_Error' => 'Vous devez s&eacute;lectionner au moins une table.',

// Restore
	'ACP_RESTORE' => 'Restaurer la base donn&eacute;e',
	'ACP_RESTORE_EXPLAIN' => 'Restaure toutes vos tables depuis un fichier de sauvegarde. Si votre serveur le supporte, vous pouvez utiliser un fichier de sauvegarde de type gzip ou bzip2 et il sera automatiquement d&eacute;compress&eacute;. <b>Attention</b>: Cela &eacute;crasera les donn&eacute;es existante. Ce processus peut &ecirc;tre tr&egrave;s long, veuillez <b>ne pas</b> changer de page avant la fin. Les sauvegardes sont dans le dossier <b>backup/</b>, et sont suppos&eacute;s &ecirc;tre cr&eacute;e par la fonctionnalit&eacute; de sauvegarde de ce forum. Restaurer des sauvegardes venant d\'un forum non-IcyPhoenix (ou d\'une ancienne version) peut ne pas marcher correctement.<br /><strong class="text_red">Veuillez noter que si la base de donn&eacute;e &agrave; restaurer est trop grosse, le processus peut prendre trop de temps et ne pas s\'effectur correctement. Si cela arrivait, veuillez utiliser un outil comme phpMyAdmin ou MySQLDumper.</strong><br /><br />',
	'RESTORE_OPTIONS' => 'Options des restaurations',

	'Restore_Success' => 'La base de donn&eacute;e a &eacute;t&eacute; correctement restaur&eacute;.<br />Votre forum est revenu dans le m&ecirc;me &eacute;tat que quand la sauvegarde a &eacute;t&eacute; faite.',

// Errors
	'No_Backup_Selected' => 'Vous devez s&eacute;lectionner une sauvegarde pour effectuer une restauration.',
	'Backup_Invalid' => 'Le fichier s&eacute;lectionn&eacute; pour la restauration est invalide.',
	'RESTORE_FAILURE' => 'Le fichier de sauvegarde est peut-&ecirc;tre corrompu.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Filtreurs d\'actions',
	'LOGS_TITLE' => 'Journal des actions',
	'LOGS_EXPLAIN' => 'Relev&eacute; de toutes les actions enregistr&eacute;es dans la base de donn&eacute;es',
	'LOGS_TARGET' => 'Cible',
	'LOGS_DELETE' => 'Supprimer la s&eacute;lection',
	'LOGS_DELETE_ALL' => 'Vider la table du journal des actions',
	'LOGS_DENY' => 'Non autoris&eacute; !',
	'LOGS_POST_EDIT' => '&eacute;dition d\'un message envou&eacute; par',
	'LOGS_POST_DELETE' => 'suppression d\'un message envoy&eacute; par',
	'LOGS_GROUP_JOIN' => 'demande pour joindre le groupe',
	'LOGS_GROUP_EDIT' => '&eacute;dition des options du groupe %s',
	'LOGS_GROUP_ADD' => 'ajout de %s au groupee',
	'LOGS_GROUP_TYPE' => '&eacute;dition du statut du groups %s, maintenant le groupe est %s',
	'LOGS_GROUP_TYPE_0' => 'ouvert',
	'LOGS_GROUP_TYPE_1' => 'ferm&eacute;',
	'LOGS_GROUP_TYPE_2' => 'cach&eacute;',
	'LOGS_MESSAGE' => 'message pour les utilisateurs, code <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'suppression de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_MODCP_RECYCLE' => 'd&eacute;placement de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_MODCP_LOCK' => 'verrouillage de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_MODCP_UNLOCK' => 'd&eacute;verrouillage de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_MODCP_MOVE' => 'd&eacute;placement de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_MODCP_MERGE' => 'fusion de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_MODCP_SPLIT' => 'd&eacute;coupage de certains messages dans %s via le panneau de contr&ocirc;le des mod&eacute;rateurs',
	'LOGS_TOPIC_BIN' => 'envois d\'un message &agrave; la corbeille dans',
	'LOGS_TOPIC_ATTACK' => 'hacking attempt pour un message',
	'LOGS_CARD_BAN' => 'banni',
	'LOGS_CARD_WARN' => 'averti',
	'LOGS_CARD_UNBAN' => 'd&eacute;banni',
	'LOGS_ADMIN_CAT_ADD' => 'ajout d\'une cat&eacute;gorie',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'Sauvegarde de la base de donn&eacute;e %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'compl&egrave;te',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 'structure uniquement',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'donn&eacute;es',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', t&eacute;l&eacute;charg&eacute;e et enregistr&eacute;',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', enregistr&eacute;',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', t&eacute;&eacute;charg&eacute;',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'Base de donn&eacute;e restaur&eacute;e depuis',
	'LOGS_ADMIN_BOARD_CONFIG' => '&eacute;dition de la configuration',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => '&eacute;dition de la configuration d\'IcyPhoenix',
	'LOGS_ADMIN_GROUP_NEW' => 'cr&eacute;action d\'un groupe',
	'LOGS_ADMIN_GROUP_DELETE' => 'suppression d\'un groupe',
	'LOGS_ADMIN_GROUP_EDIT' => '&eacute;dition d\'un groupe',
	'LOGS_ADMIN_USER_AUTH' => '&eacute;dition des permissions de',
	'LOGS_ADMIN_GROUP_AUTH' => '&eacute;dition des permissions du groupe',
	'LOGS_ADMIN_USER_BAN' => 'banissement de quelqu\'un depuis le panneau de contr&ocirc;le de l\'administrateur',
	'LOGS_ADMIN_USER_UNBAN' => 'd&eacute;bannissement de quelqu\'un depuis le panneau de contr&ocirc;le de l\'administrateur',
	'LOGS_ADMIN_USER_DELETE' => 'suppression d\'un utilisauter',
	'LOGS_ADMIN_USER_EDIT' => '&eacute;dition du profil de',
	'LOGS_CMS_LAYOUT_EDIT' => '&eacute;dition de %scette%s page',
	'LOGS_CMS_LAYOUT_DELETE' => 'suppression d\'une page (identifiant: %s)',
	'LOGS_CMS_BLOCK_EDIT' => '&eacute;dition d\'un bloc (identifiant: %s) sur %scette%s page',
	'LOGS_CMS_BLOCK_EDIT_LS' => '&eacute;dition d\'un bloc (identifiant: %s) sur une page standart (%s)',
	'LOGS_CMS_BLOCK_DELETE' => 'suppression d\'un bloc (identifiant: %s) sur %scette%s page',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'suppression d\'un bloc (identifiant: %s) sur une page standart (%s)',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Mise &agrave; jour des smileys',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Publicit&eacute;es &amp; Sponsors',
	'ADS_TITLE_EXPLAIN' => 'Cette section vous permets de configurer vos banni&egrave;res, publicit&eacute;es et sponsors pour mettre sur votre site. Vous pouvez ajouter diff&eacute;rent types de banni&egrave;res et d&eacute;cider quels utilisateurs ne les verront pas. Si vous sp&eacute;cifiez plus d\'une banni&egrave;re pour une position, alors la banni&egrave;re sera choisie au hasard parmis toutes celles disponibles pour cette position.',
	'AD_DES' => 'Description',
	'AD_TEXT' => 'Contenu',
	'AD_ENABLED' => 'Activ&eacute;',
	'AD_STATUS' => 'Statut',
	'AD_STATUS_EXPLAIN' => 'S&eacute;lectionnez "oui" si vous voulez autoriser cette publicit&eacute;, et "non" si vous ne voulez pas l\'autoriser',
	'AD_POSITION' => 'Position',
	'AD_AUTH' => 'Permission',
	'AD_AUTH_EXPLAIN' => 'Utilisateurs qui verront cette publicit&eacute;',
	'AD_AUTH_GUESTS' => 'Invit&eacute;s uniquement',
	'AD_AUTH_REG' => 'Invit&eacute;s et utilisateurs enregistr&eacute;s (sauf les administrateurs et les mod&eacute;rateurs)',
	'AD_AUTH_MOD' => 'Tout le monde sauf les administrateurs',
	'AD_AUTH_ADMIN' => 'Tout le monde',
	'AD_FORMAT' => 'Format',
	'AD_POS_GLT' => 'Au-dessus de tout',
	'AD_POS_GLB' => 'En-dessous de tout',
	'AD_POS_GLH' => 'En-t&ecirc;te global',
	'AD_POS_GLF' => 'Pied-de-page global',
	'AD_POS_FIX' => '&Eacute;l&eacute;ment global de l\'index du forum',
	'AD_POS_FIT' => 'Haut du forum',
	'AD_POS_FIB' => 'Bas du forum',
	'AD_POS_VFX' => 'Voir l\'&eacute;l&eacute;ment du forum',
	'AD_POS_VFT' => 'Voir le haut du forum',
	'AD_POS_VFB' => 'Voir le bas du forum',
	'AD_POS_VTX' => 'Voir les &eacute;l&eacute;ment du sujet',
	'AD_POS_VTT' => 'Voir le haut du sujet',
	'AD_POS_VTB' => 'Voir le bas du sujet',
	'AD_POS_NMT' => 'Haut du menu de navigation',
	'AD_POS_NMB' => 'Bas du menu de navigation',
	'AD_ADD' => 'Ajouter une publicit&eacute;',
	'AD_EDIT' => '&Eacute;diter une publicit&eacute;',
	'AD_ADDED' => 'La publicit&eacute; a &eacute;t&eacute; correctement ajout&eacute;e',
	'ADS_UPDATE' => 'Mettre &agrave; jour la publicit&eacute;',
	'AD_UPDATED' => 'La publicit&eacute; a &eacute;t&eacute; correctement mise &agrave; jour',
	'AD_DELETED' => 'La publicit&eacute; a &eacute;t&eacute; correctement supprim&eacute;e',
	'CLICK_RETURN_ADS' => 'Cliquez %sici%s pour retourner &agrave; l\'administration des publicit&eacute;s',
	'AD_NO_ADS' => 'Aucune publicit&eacute;',
	'ERR_AD_ADD' => 'Veuillez remplir tous les champs n&eacute;cessaire',
/* ADS - END */

	'FULL_HTML' => 'HTML total',
	'ACTIONS' => 'Actions',
	'EDIT' => '&Ecute;diter',
	'DELETE' => 'Supprimer',

	// Tickets Submission - BEGIN
	'TICKETS_EMAILS' => 'mails tickets',
	'TICKETS_EMAILS_EXPLAIN' => 'Cette page vous permet de contrÃ´ler les catÃ©gories de la page "Contactez-nous". Pour chaque catÃ©gorie, vous devez entrer une ou plusieurs adresses mail (l\'utilisateur aura alors le choix de l\'adresse).',
	'TICKET_CAT' => 'CatÃ©gorie',
	'TICKET_CAT_TITLE' => 'Titre',
	'TICKET_CAT_DES' => 'Description',
	'TICKET_CAT_EMAILS' => 'Adresses mail',
	'TICKET_CAT_EMAILS_EXPLAIN' => 'InsÃ©rez ici les adresses mails pour cette catÃ©gorie.<br />SÃ©parez les diffÃ©rentes adresses par un point-virgule (support@mydomain.com;abuse@mydomain.com).',
	'TICKETS_NO_TICKETS' => 'Aucun ticket.',
	'TICKETS_NO_TICKET_SEL' => 'Aucun ticket sÃ©lectionnÃ©.',
	'TICKETS_NO_TICKET_TITLE' => 'Vous devez au moins remplir le champ titre.',
	'TICKETS_DB_ADD' => 'Ajouter une catÃ©gorie',
	'TICKETS_DB_ADDED' => 'CatÃ©gorie ajoutÃ©e avec succÃ¨s.',
	'TICKETS_DB_UPDATED' => 'CatÃ©gorie mise Ã  jour avec succÃ¨s.',
	'TICKETS_DB_DELETED' => 'CatÃ©gorie supprimÃ©e avec succÃ¨s.',
	'TICKETS_DB_CLICK' => 'Cliquez %sici%s pour retourner aux mails tickets.',
	// Tickets Submission - END

	'FORUM_LIMIT_EDIT_TIME' => 'Limiter le temps entre chaque &eacute;dition d\'un message d\'un m&ecirc;me utilisateur',
	'FORUM_LIMIT_EDIT_TIME_EXPLAIN' => 'En activant cette option, les utilisateurs ne pourront &eacute;diter leurs messages que pendant le temps donn&eacute; dans la configuration des images d\'IcyPhoenix (Panneau de contr&ocirc;e des administrateurs &raquo; Configuration &raquo; IcyPhoenix &raquo; Messages)',

	// Custom BBCodes - BEGIN
	'BBCODES_CUSTOM_BBCODES' => 'BBCodes personnalis&eacute;s',
	'BBCODES_CUSTOM_BBCODES_EXPLAIN' => 'Le BBCode est un pseudo-langage qui permet d\'avoir un r&eacute;sultat HTML tout en ayant plus de contr&ocirc;le. Depuis cette page vous pouvez ajouter, &eacute;diter et supprimer vos BBCodes personnalis&eacute;s. Pour pouvoir Ãªtre en mesure d\'utiliser ces BBCodes, vous devez activer les BBCodes personnalisÃ©s dans la configuration des messages.',
	'BBCODES_NO_BBCODES' => 'Pas de BBCodes',
	'BBCODES_NO_BBCODES_SEL' => 'Aucun BBCode s&eacute;lectionn&eacute;',
	'BBCODES_NO_BBCODES_INPUT' => 'Vous devez remplir le nom du BBCode',
	'BBCODES_DB_ADD' => 'Ajouter un BBCode',
	'BBCODES_DB_ADDED' => 'BBCode correctement ajout&eacute;',
	'BBCODES_DB_UPDATED' => 'BBCode correctement mis &agrave; jour',
	'BBCODES_DB_DELETED' => 'BBCode correctement supprim&eacute;',
	'BBCODES_DB_CLICK' => 'Cliquez %sici%s pour retourner &agrave; l\'administration des BBCodes personnalis&eacute;s',

	'BBCODE_ADDED' => 'BBCode ajouté avec succès.',
	'BBCODE_EDITED' => 'BBCode édité avec succès.',
	'BBCODE_NOT_EXIST' => 'Ce BBCode n\'existe pas.',
	'BBCODE_HELPLINE' => 'Ligne d\'aide',
	'BBCODE_HELPLINE_EXPLAIN' => 'Ce champ contient l\'aide affich&eacute;e au passage de la souris sur le BBCode.',
	'BBCODE_HELPLINE_TEXT' => 'Texte de la ligne d\'aide',
	'BBCODE_HELPLINE_TOO_LONG' => 'La ligne d\'aide est trop longue.',

	'BBCODE_INVALID_TAG_NAME' => 'Ce BBCode existe d&eacute;j&agrave;.',
	'BBCODE_INVALID' => 'Le BBCode a une forme invalide.',
	'BBCODE_OPEN_ENDED_TAG' => 'Votre BBCode personnalis&eacute; doit avoir une balise d\'ouverture et de fermeture.',
	'BBCODE_TAG' => 'Balise',
	'BBCODE_TAG_TOO_LONG' => 'Le nom de la balise est trop long.',
	'BBCODE_TAG_DEF_TOO_LONG' => 'Le nom de la balise que vous avez entr&eacute; est trop long, veuillez le raccourcir.',
	'BBCODE_USAGE' => 'Usage du BBCode',
	'BBCODE_USAGE_EXAMPLE' => '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN' => 'Ici vous pouvez d&eacute;finir comment utiliser le BBCode. Remplace toutes les variables par les Tokens correspondants (%svoir ci-dessous%s).',

	'EXAMPLE' => 'Exemple:',
	'EXAMPLES' => 'Exemples:',

	'HTML_REPLACEMENT' => 'code HTML de remplacement',
	'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style=&quot;background-color: {COLOR};&quot;&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style=&quot;font-family: {SIMPLETEXT1};&quot;&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN' => 'Ici vous pouvez d&eacute;finir le code HTML qui va remplacer le BBCode. N\'oubliez pas d\'utiliser le m&ecirc;me nombre de Tokens ({...}) !',

	'TOKEN' => 'Jeton',
	'TOKENS' => 'Jetons',
	'TOKENS_EXPLAIN' => 'Les jetons (tokens en anglais) permettent au utilisateur de rentrer du texte (sous un certain format). La saisie utilisateur sera valid&eacute;e uniquement si le type correspond bien a la d&eacute;finition ({COLOR} => l\'utilisateur devra rentrer une couleur). Vous pouvez en utiliser plusieurs en les num&eacute;rotants, par exemple {TEXT1}, {TEXT2}, ...<br /><br />Dans le remplacement HTML vous pouvez aussi utilisez des clefs de langues pr&eacute;sentes dans le dossier language/, comme ceci: {L_<em>&lt;STRINGNAME&gt;</em>} où <em>&lt;STRINGNAME&gt;</em> est le nom de la clef que vous voulez. Par exemple {L_WROTE} sera affiché &quot;wrote&quot; ou sa traduction, selon la langue de l\'utilisateur.<br /><br /><strong>Veuillez noter que seuls les Tokens list&eacute;s ci-dessous marcheront</strong>',
	'TOKEN_DEFINITION' => '&Agrave; quoi sert ce BBCode ?',
	'TOO_MANY_BBCODES' => 'Vous ne pouvez plus cr&eacute;er de BBCodes. Veuillez retirer un ou plusieurs BBCode(s) et essayer &agrave; nouveau.',

	'BBCODES_TOKENS_DESCRIPTION' => '
<b>TEXT</b> &raquo; Du text, avec les caract&egrave;res sp&eacute;ciaux, des nombres, et&ccedil; ... Vous ne devez pas utiliser ce Token dans les balises HMTL. &Agrave; la place, utilisez IDENTIFIER ou SIMPLETEXT.<br />
<b>SIMPLETEXT</b> &raquo; Caract&egrave;res de l\'alphabet latin (A-Z), nombres, espaces ( ), virgules (,), point (.), moins (-), plus (+), tiret (-) et underscore (_)<br />
<b>IDENTIFIER</b> &raquo; Caract&egrave;res de l\'alphabet latin (A-Z), nombres, tiret (-) et underscore (_)<br />
<b>NUMBER</b> &raquo; S&eacute;rie de chiffres<br />
<b>EMAIL</b> &raquo; Une adresse mail valide<br />
<b>URL</b> &raquo; Une adresse valide utilisant n\'importe quel protocole (http, ftp, et&ccedil; ... Ne peut &ecirc;tre utilis&eacute; pour cr&eacute;er des failles JavaScript). Si aucun protocole n\'est donn&eacute;, &quot;http://&quot; sera rajout&eacute; au texte.<br />
<b>LOCAL_URL</b> &raquo; Une adresse locale, relative &agrave; la page du sujet et ne pouvant contenir le nom d\'un serveur ou un protocole.<br />
<b>COLOR</b> &raquo; Une couleur HTML, aussi bien au format num&eacute;rique <samp>#ff1234</samp>, au format <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">mots-clefs pour les couleurs CSS</a> (par exemple <samp>fuchsia</samp> ou <samp>InactiveBorder</samp>)',
	// Custom BBCodes - END

	// PLUGINS - BEGIN
	'PLUGINS' => 'Greffons',
	'PLUGINS_EXPLAIN' => 'Dans cette section vous pouvez activer et dÃ©sactiver des greffons (plugins).',
	'PLUGINS_FOLDER' => 'Dossier',
	'PLUGINS_NAME' => 'Nom',
	'PLUGINS_DESCRIPTION' => 'Description',
	'PLUGINS_VERSION' => 'Version',
	'PLUGINS_CURRENT_VERSION' => 'Version installée',
	'PLUGINS_LAST_VERSION' => 'Dernière version',
	'PLUGINS_INSTALL' => 'Installer',
	'PLUGINS_UPGRADE' => 'Mettre à jour',
	'PLUGINS_UNINSTALL' => 'Désinstaller',
	'PLUGINS_UP_TO_DATE' => 'À jour',
	'PLUGINS_NOT_INSTALLED' => 'Non installé',
	'PLUGINS_OUTDATED' => 'Périmé',
	'PLUGINS_UPDATE_CONFIG' => 'Configuration',
	'PLUGINS_CONFIG_UPDATED' => 'Configuration mise Ã  jour avec succÃ¨s. Veuillez noter que vous devez recharger le panneau d\'administration (touche F5) pour voir les changements liÃ©s au menu.',
	'PLUGINS_RETURN_CLICK' => 'Cliquez %sici%s pour retourner aux greffons.',
	'PLUGINS_NO_PLUGINS' => 'Pas de greffon Ã  installer.',
	// PLUGINS - END

	'BBCODE_SETTINGS' => 'Options BBCodes, HTML et smileys',
	'POSTING_SETTINGS' => 'Options de post',

	'POLL_INFINITE' => 'Infini...',
	'POLL_ONGOING' => ' (en cours)',
	'POLL_COMPLETED' => ' (terminÃ©))',

	'FORUM_LIKES' => 'Aimer les messages',
	'FORUM_LIKES_EXPLAIN' => 'Autorise les utilisateur Ã  aimer chaque message d\'un sujet',

	'POSTS_PICS' => 'Messages / Photos',

	'INACTIVE_USER_FEATURE' => 'Masquer cet utilisateur',
	'INACTIVE_USER_FEATURE_EXPLAIN' => 'En activant cet interrupteur, l\'utilisateur sera masquÃ© dans les forums et les sujets. Les dÃ©tails seront "anonymÃ©s". L\'utilisateur sera masquÃ© uniquement si son compte est inactif.',

	'RANK_SHOW_TITLE' => 'Montrer le titre du rang',
	'RANK_SHOW_TITLE_EXPLAIN' => 'En dÃ©sactivant cette option, seule l&#39image du rang sera affichÃ©e.',

	// Ajax chat
	'AJAX_CHAT_MSGS_REFRESH' => 'Temps de rafraichissement',
	'AJAX_CHAT_MSGS_REFRESH_EXPLAIN' => 'Temps (en secondes) entre chaque rafraichissement du chat.<br />Cette valeur ne devrait pas Ãªtre infÃ©rieure Ã  2 (elle sera forcÃ©e Ã  1 si un nombre infÃ©rieur est entrÃ©).',
	'AJAX_CHAT_SESSION_REFRESH' => 'Temps d\'une session',
	'AJAX_CHAT_SESSION_REFRESH_EXPLAIN' => 'Temps (en seconde) d\'une session sur le chat. Cette valeur est utilisÃ©e pour dÃ©terminer si un utilisateur a quittÃ© la conversation. Cette valeur ne devrait pas Ãªtre infÃ©rieure Ã  10 (cette valeur sera forcÃ©e Ã  5 si un nombre infÃ©rieur est entrÃ©).',
	'AJAX_CHAT_LINK_TYPE' => 'Format de la fenÃªtre',
	'AJAX_CHAT_LINK_TYPE_EXPLAIN' => 'SpÃ©cifiez si vous voulez une fenÃªtre de chat simplifiÃ©e, ou une fenÃªtre de chat complÃ¨te (une fenÃªtre de chat simplifiÃ©e est plus propre et plus rapide).',
	'AJAX_CHAT_LINK_TYPE_SIMPLE' => 'SimplifiÃ©e',
	'AJAX_CHAT_LINK_TYPE_FULL' => 'ComplÃ¨te',
	'AJAX_CHAT_NOTIFICATION' => 'Notifications pour les discussions privÃ©es',
	'AJAX_CHAT_NOTIFICATION_EXPLAIN' => 'Si vous activez cette option, une notification sera envoyÃ©e lors d\'une demande de discussion privÃ©e.',
	'AJAX_CHAT_CHECK_ONLINE' => 'Discussions privÃ©es uniquement pour les utilisateurs en ligne',
	'AJAX_CHAT_CHECK_ONLINE_EXPLAIN' => 'Si vous activez cette option, le bouton pour commencer une discussion privÃ©e sera visible uniquement pour les utilisateurs dÃ©jÃ  dans le chat, sinon pour tous les utilisateurs connectÃ©s sur le site.',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'IP_CONFIGURATION' => 'Options d\'IcyPhoenix',
	'IP_CONFIGURATION_EXPLAIN' => '<em><b>Options avanc&eacute;es d\'IcyPhoenix</b></em>',

	'MG_SW_Precompiled_Posts_Title' => 'Messages pr&eacute;-compil&eacute;s',
	'MG_SW_Logins_Title' => 'Enregistrements des tentatives de connection',
	'MG_SW_Edit_Notes_Title' => 'Notes d\'&eacute;ditions',

	'MG_SW_Header_Footer' => 'Message du tableau d\'en-t&ecirc;te',
	'MG_SW_Header_Table' => 'tableau d\'en-t&ecirc;te',
	'MG_SW_Header_Table_Explain' => 'En activant cette option, un message personnalis&eacute; sera montr&eacute; dans le tableau d\'en-t&ecirc;te de chaques pages.',
	'MG_SW_Header_Table_Text' => 'Ins&eacute;rez votre texte ici.',

	'MG_SW_Empty_Precompiled_Posts' => 'Vider les messages pr&eacute;-compil&eacute;s',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Vide tous les messages pr&eacute;-compil&eacute;s.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'Les messages pr&eacute;-compil&eacute;s ont &eacute;t&eacute; supprim&eacute;s correctement.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Erreures pendant la suppression des messages pr&eacute;-compil&eacute;s.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Vidage du dossier de cache en cours ...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Vous allez &ecirc;tre automatiquement redirig&eacute; vers la prochaine &eacute;tape dans trois secondes',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Si vous n\'&ecirc;tes pas redirig&eacute; automatiquement au bout de trois secondes, cliquez %sici%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Cliquez %sici%s pou retourner &agrave; l\'administration du cache',

	'MG_FNF_Header' => 'Configuration rapides',
	'MG_FNF_Header_Explain' => '<b>Configuration rapide pour votre forum</b><br />Ces paquetages de configuration ont &eacute;t&eacute; cr&eacute;e dans le but d\'acc&egrave;lerer le param&egrave;trage des forums.<br /><br /><span class="text_red"><b>Notez bien:</b> une fois la configuration rapide effectu&eacute;e, vous ne pourrez pas revenir vers votre ancienne configuration de mani&egrave;re automarique, et vous devrez les remettre manuellement.</span>',
	'MG_FNF_Options_Set' => 'Paquetages d\'options',
	'MG_FNF_FNF' => '"Fast And Furious" (rapide et furieux)',
	'MG_FNF_FNF_Explain' => 'Cette configuration permettra d\'acc&egrave;lerer la vitesse de votre forum, parce que la plupart des fonctionnalit&eacute;s qui n&eacute;cessitent une charge CPU haute ou un acc&egrave;s couteux &agrave; la base de donn&eacute;e seront d&eacute;sactiv&eacute;. Id&eacute;al si vous voulez un site rapide.',
	'MG_FNF_MGS' => 'Ce que Mighty Gorgon propose',
	'MG_FNF_MGS_Explain' => 'Cette configuration est un m&eacute;lange et une bonne base pour beaucoup de sites. Certaines options seront activ&eacute;es, mais la plupart de celle qui prennent beaucoup de ressources CPU seront d&eacute;sactiv&eacute;s.',
	'MG_FNF_Full_Features' => 'Toutes les fonctionnalit&eacute;es',
	'MG_FNF_Full_Features_Explain' => 'Utilisez cette configuration si vous n\'avez pas de limite de bande passante ou si vous voulez avoir IcyPhoenix avec toutes les fonctionnalit&eacute;es activ&eacute;es. Notez bien: certaines fonctionnalit&eacute;es peuvent ne pas &ecirc;tre compatibles avec votre servuer.',

	'MG_SW_ACRONYMS' => 'D&eacute;sactiver les acronymes',
	'MG_SW_ACRONYMS_Explain' => 'D&eacute;sactiver l\'analyse des acronymes ?',
	'MG_SW_AUTOLINKS' => 'D&eacute;sactiver les liens automatiques',
	'MG_SW_AUTOLINKS_Explain' => 'D&eacute;sactiver l\'analyse des liens automatiques ?',
	'MG_SW_CENSOR' => 'D&eacute;sactiver la censure',
	'MG_SW_CENSOR_Explain' => 'D&eacute;sactiver l\'analyse de la censure ?',

	'MG_SW_No_Right_Click' => 'Clic droit sur le bloc',

	'Click_return_config_mg' => 'Cliquez %sici%s pour retourner &agrave; la configuration d\'IcyPhoenix',
// ####################### [ Icy Phoenix Options END ] #######################
	)
);

/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Configuration'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Main_Settings'] = 'Configuration Générale'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Configuration Secondaire'; // admin_board.php
$lang['125_Language'] = 'Clefs de langues personnalis&eacute;es'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Vider le cache'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Messages non lus'; // admin_upi2db.php
$lang['140_CAPTCHA'] = 'CAPTCHA;'; // admin_captcha.php
$lang['145_Captcha_Config'] = 'Confirmation visuelle'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Sujets similaires'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Configuration des &eacute;tiquettes pour les titres'; // admin_quick_title.php
$lang['170_LIW'] = 'Limitation de la taille des images'; // admin_liw.php
$lang['190_Spider_Bots'] = 'Robots'; // admin_bots.php
$lang['192_Google_BOT'] = 'D&eacute;tecteur du bot Google'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Recherche Yahoo'; // admin_yahoo_search.php
$lang['200_Language'] = 'Langage'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Param&eacute;trage rapide'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'G&eacute;n&eacute;ral'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Acronymes'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Liens automatiques'; // admin_autolinks.php
$lang['120_Ads'] = 'Publicit&eacute; &amp; sponsors'; // admin_ads.php
$lang['130_Mass_Email'] = 'mail de masse'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'mail / MP de masse'; // admin_megamail.php
$lang['150_FTR_Config'] = 'Forcer &agrave; lire un sujet'; // admin_force_read.php
$lang['160_FTR_Users'] = 'Forcer un utilisateur &agrave; lire un sujet'; // admin_force_read.php
$lang['170_Smilies'] = 'Smileys'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Censure'; // admin_words.php
$lang['200_Notepad'] = 'Bloc-notes'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Bureau d\'Aide'; // admin_helpdesk.php
$lang['220_Tickets_Emails'] = 'Cat&eacute;gories des mails'; // admin_tickets.php
$lang['230_Custom_BBCodes'] = 'BBCodes personnalis&eacute;s'; // admin_bbcodes.php
$lang['240_Replace_title'] = 'Remplacer dans les messages'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Configuration'; // admin_forums.php
$lang['110_Manage_extend'] = 'Configuration avanc&eacute;e'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Liste des permissions'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Permissions avanc&eacute;es'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Permissions'; // admin_forumauth.php
$lang['130_Prune'] = 'D&eacute;lestage'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Vue globale du d&eacute;lestage'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Sujets traceurs'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Th&egrave;mes'; // xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'Base de donn&eacute;e et s&eacute;curit&eacute;'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php, admin_logs.php
$lang['100_Actions_LOG'] = 'Journal des actions'; // admin_logs.php
$lang['110_DB_Admin'] = 'Administration de MySQL'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'Sauvegarde de la base de donn&eacute;e'; // admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'Restauration de la base de donn&eacute;e'; // admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'Restauration de la base de donn&eacute;e depuis un fichier'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Optimiser la base de donn&eacute;e'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Maintenance de la base de donn&eacute;e'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'G&eacute;n&eacute;rateur de fichier de mise &agrave; jour de la base de donn&eacute;e'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// News
$lang['1600_News_Admin'] = 'Nouvelles'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Configuration des nouvelles'; // admin_news.php
$lang['110_News_Cats'] = 'Cat&eacute;gories des nouvelles'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'Lecteur de nouvelles'; // admin_xs_news.php
$lang['130_XS_News'] = 'Articles du lecteur de nouvelles'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'Gestion des lecteurs de nouvelles'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Utilisateurs'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Administrateurs juniors'; // admin_jr_admin.php
$lang['110_Manage'] = 'G&eacute;rer'; // admin_users.php
$lang['113_Permissions_Users'] = 'Permissions'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'Permissions du CMS (gestionnaire de contenu)'; // admin_cms_auth.php
$lang['120_Ranks'] = 'Rangs'; // admin_ranks.php
$lang['130_Userlist'] = 'Liste des utilisateurs'; // admin_userlist.php
$lang['140_Email_List'] = 'Liste des mails'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Messages priv&eacute;s'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Activer les comptes'; // admin_account.php
$lang['170_Account_inactive'] = 'Comptes inactifs'; // admin_account.php
$lang['180_Add_New_User'] = 'Ajouter un utilisateur'; // admin_user_register.php
$lang['190_Prune_users'] = 'D&eacute;lester les utilisateurs'; // admin_prune_users.php
$lang['200_Disallow'] = 'Interdire des noms d\'utilisateurs'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Bannir des utilisateurs'; // admin_user_ban.php
$lang['220_Bantron'] = 'Gestionnaire du bannissement'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = '&Eacute;diteur des compteurs de messages'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Ajouter un champ personnalis&eacute; au profil'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = '&Eacute;diter un champ personnalis&eacute; du profil'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Recherche &eacute;tendue des utilisateurs'; // admin_user_search.php
$lang['290_Poll_Results'] = 'R&eacute;sultats des votes'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Synchroniser les compteurs d\'images'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Groupes'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'G&eacute;rer les groupes'; // admin_groups.php
$lang['120_Color_Groups'] = 'Groupes de couleurs'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Permissions'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = '&Eacute;valuation des sujets'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Base de connaissances'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Configuration'; // admin_kb_config.php
$lang['110_Art_man'] = 'Gestion des articles'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Gestion des cat&eacute;gories'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Types d\'articles'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Champs personnalis&eacute;s'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Permissions'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimiser les tables'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Attachements'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Panneau de contr&ocirc;le'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Gestion'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Limitations des quotas'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Attachements inutiles'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Synchroniser les attachements'; // admin_attachments.php
$lang['150_Extension_control'] = 'Contr&ocirc;le des extensions'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'G&eacute;rer les groupes d\'extensions'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Extensions interdites'; // admin_extensions.php
$lang['180_Special_categories'] = 'Cat&eacute;gories sp&eacute;ciales'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'T&eacute;l&eacute;chargements'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Configuration'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Gestion des cat&eacute;gories'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Gestion des fichiers'; // admin_pa_file.php
$lang['130_Fchecker'] = 'V&eacute;rificateur de fichiers'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Champs personnalis&eacute;s'; // admin_pa_custom.php
$lang['150_License_title'] = 'Gestion des licenses'; // admin_pa_license.php
$lang['160_Permissions'] = 'Permissions'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'T&eacute;l&eacute;chargements avanc&eacute;s'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Configuration'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Liens'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Configuration'; // admin_links_config.php
$lang['110_Category'] = 'Gestion des cat&eacute;gories'; // admin_links_cat.php
$lang['120_Add_new'] = 'Ajouter un lien'; // admin_links.php
$lang['130_Link_Manage'] = 'Gestion des liens'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Album photo'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Configuration'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Gestion des cat&eacute;gories'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Permissions'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Galeries personelles'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ &amp; R&egrave;gles'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'FAQ des BBCode'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'FAQ du site'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'R&egrave;gles du site'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Informations'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Journal des actions'; // admin_logs.php
$lang['120_PHP_INFO'] = 'Informations sur PHP'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'Informations sur GD'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referrers'; // admin_referrers.php
$lang['150_Google_BOT'] = 'D&eacute;tecteur du robot google'; // admin_google_bot_detector.php

// STATS
$lang['2500_STATS'] = 'Statistics'; // admin_statistics.php

// CRACKER/TRACKER
$lang['2600_CRACKERTRACKER'] = 'Cracker Tracker'; // admin_cracker_tracker.php

// Plugins
$lang['3000_Plugins'] = 'Plugins'; // admin_plugins.php
$lang['100_Plugins_Modules'] = 'Plugins Modules'; // admin_plugins.php

// Cash
$lang['3100_CASH'] = 'Argent / Points'; // admin_cash.php
$lang['110_Cash_Admin'] = 'Gestion de l\'argent'; // admin_cash.php
$lang['120_Cash_Help'] = 'Aide'; // admin_cash.php

// Activity
$lang['3200_ACTIVITY'] = 'Arcade Activity / Jeux'; // admin_activity.php, admin_ina_ban.php, admin_ina_bulk_add.php, admin_ina_category.php, admin_ina_disable.php, admin_ina_in_un.php, admin_ina_mass.php, admin_ina_xtras.php
$lang['110_Configuration'] = 'Configuration'; // admin_activity.php
$lang['120_Add_Game'] = 'Ajouter un jeu'; // admin_activity.php
$lang['130_Edit_Games'] = '&Eacute;diter un jeu'; // admin_activity.php
$lang['140_User_Ban'] = 'Bannir un/des utilisateur(s)'; // admin_ina_ban.php
$lang['150_Bulk_Add_Games'] = 'Bulk Add Games'; // admin_ina_bulk_add.php
$lang['160_Category'] = 'Gestion des cat&eacute;gories'; // admin_ina_category.php
$lang['170_Char_Settings'] = 'Chars Settings'; // admin_ina_char.php
$lang['180_Hide_Show_Games'] = 'Montrer/Cacher les jeux'; // admin_ina_disable.php
$lang['105_DB_Adjustments'] = 'Ajustement sur la base de donn&eacute;e'; // admin_ina_in_un.php
$lang['200_Mass_Change'] = 'Configuration de masse'; // admin_ina_mass.php
$lang['210_Scores_Editor'] = '&Eacute;diter les meilleurs scores'; // admin_ina_scores.php
$lang['220_Xtras'] = 'Autres options'; // admin_ina_xtras.php
$lang['230_Check_Games'] = 'Liste des jeux'; // admin_ina_xtras.php

// ####################### [ ACP Navigation END ] #######################

?>