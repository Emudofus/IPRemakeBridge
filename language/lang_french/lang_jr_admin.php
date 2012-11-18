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
* Nivisec.com (support@nivisec.com)
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
	'None' => 'Aucun',
	'Allow_Access' => 'Autoriser l&#39;acc&egrave;',

	'Jr_Admin' => 'Administrateur junior',
	'Options' => 'Options',
	'Example' => 'Exemple',
	'Version' => 'Version',
	'Add_Arrow' => 'Ajouter ->',
	'Super_Mod' => 'Super Mod&eacute;rateur',
	'Update' => 'Mettre &agrave; jour',
	'Modules' => 'Modules',
	'Module_Info' => 'Information sur le module',
	'Module_Count' => 'Compteur du module',
	'Modules_Owned' => '(%d Modules)',
	'Updated_Permissions' => 'Permissions mises &agrave; jour<br />',
	'Color_Group' => 'Couleur du groupe',
	'Users_with_Access' => 'Utilisateurs ayant un acc&egrave;s',
	'Users_without_Access' => 'Utilisateur n&#39;ayant pas d&#39;acc&egrave;s',
	'Check_All' => 'S&eacute;lectionner / D&eacute;s&eacute;lectionner Tout',
	'Cat_Check_All' => 'Cat&eacute;gorie: S&eacuute;lectionner / D&eacute;s&eacute;lectionner Tout',
	'Edit_Permissions' => '&Eacute;diter les permissions utilisateurs',
	'View_Profile' => 'Voir le profil de l&#39;utilisateur',
	'Edit_User_Details' => 'Voir les d&eacute;tails sur l&#39;utilisateur',
	'Notes' => 'Notes',
	'Allow_View' => 'Autoriser l&#39;utilisateur a voir',
	'Start_Date' => 'Premi&egrave;re permission donn&eacute;e le',
	'Update_Date' => 'Derni&egrave;re mise &agrave; jour des permissions le',
	'Edit_Modules' => '&Eacute;diter les modules',
	'Rank' => 'Rang',
	'Allow_PM' => 'Autoriser les MPs',
	'Allow_Avatar' => 'Autoriser les Avatars',
	'User_Active' => 'Utilisateur actif',
	'User_Info' => 'Informations sur &#39;utilisateur',
	'User_Stats' => 'Statistiques de l&#39;utilisateur',
	'Junior_Admin_Info' => 'Vos informations d&#39;Administrateur junior',
	'Admin_Notes' => 'Notes administratrices',

//Descriptions
	'Levels_Page_Desc' => 'Cette page vous permet de d&eacute;finir les niveaux d&#39;utilisateur. Choissisez un utilisateur dans la liste ou ajoutez-le manuellement. Les noms d&#39;utilisateurs DOIVENT &ecirc;tre s&eacute;par&eacute;s par une virgule dans chaque liste !',
	'Permissions_Page_Desc' => 'Modifier les options utilisateur de certains administrateurs et modifier leur liste de modules.<br />Vous pouvez cliquer sur chaque 1er champ de chaque colonne pour ordonner la liste par cette colonne.',

//Errors
	'Error_Users_Table' => 'Erreur lors de la requ&ecirc;te sur la table des utilisateurs.',
	'Error_Module_Table' => 'Erreur lors de la requ&ecirc;te sur la table des permissions.',
	'Error_Module_ID' => 'Le module demand&eacute;The requested module does not exist or you are not an authorized user.',
	'Disabled_Color_Groups' => 'Module de colorisation des utilisateurs non trouv&eacute;.',
	'Admin_Note' => 'Note: cette utilisateur a un niveau administrator. Les restrictions plac&eacute;es ici ne marcheront pas tant que vous ne changez pas son acc&egrave;.',
	'No_Special_Ranks' => 'Pas de rang sp&eacute;cial d&eacute;fini.',

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Separate entry areas by a ,
//
	'ASCII_Search_Codes' => '48&57, 65-90',

//Images
// Don't change these unless you need to
	'ASC_Image' => 'images/sort_asc.png',
	'DESC_Image' => 'images/sort_desc.png',
	)
);

?>