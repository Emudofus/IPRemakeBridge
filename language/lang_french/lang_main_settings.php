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

$lang['Index'] = 'IcyPhoenix';
$lang['Default_META_Keywords'] = 'phpbb, forum, icy phoenix, icyphoenix, icy, phoenix, php, portal, cms, premodded, community, open source, mods, templates';
$lang['Default_META_Description'] = 'IcyPhoenix est un syst&egrave;me de gestion de contenu (CMS) bas&eacute; sur phpBB qui vous permet de cr&eacute;er un site dynamique avec beaucoup de fonctionnalit&eacute;es.';
$lang['Default_META_Title'] = 'IcyPhoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon, l&#39;&eacute;quipe d&#39;IcyPhoenix :: http://www.icyphoenix.com/ - L&#39;&Eacute;quipe de traducteurs d&#39;IcyPhoenix::FR http://icyphoenix.fr/';
$lang['Default_META_Copyright'] = '(c) 2001-' . gmdate('Y') . ' Mighty Gorgon';
$lang['Extra_Meta'] = '';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Bienvenue sur <span class="topic_glo">IcyPhoenix</span><br />';
$lang['register_pm_subject'] = 'Bienvenue sur %s';
$lang['register_pm'] = "Bonjour !\n\nBienvenue sur %s.\n\nNous &eacute;sperons que vous vous amuserez sur ce site !\n\nAmusez-vous et discutez avec les autres personnes !\n\n - [b]%s[/b] - l&#39;&Eacute;quipe";

$lang['Support_Us'] = 'Nous aider';
$lang['PayPal'] = '<img src="images/paypal.gif" alt="' . $lang['Support_Us'] . '" title="' . $lang['Support_Us'] . '" />';
/* Example of code you may add... replace with your own code.
$lang['PayPal'] = '
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="image" src="images/paypal.gif" name="submit" alt="' . $lang['Support_Us'] . '" style="border-width:0px;" />
<input type="hidden" name="encrypted" value="" />
</form>
';
*/

$lang['OwnerSiteOwner'] = 'Mighty Gorgon';
$lang['OwnerSite'] = 'Icy Phoenix';
$lang['OwnerCompany'] = 'Icy Phoenix';
$lang['OwnerDetails'] = 'Icy Phoenix';
$lang['OwnerAdrress'] = 'Italy';
$lang['OwnerServer'] = 'Icy Phoenix';

$lang['PrivacyDisclaimer'] = 'Vous acceptez express&eacute;ment que vos donn&eacute;es personnelles soient trait&eacute;es dans le respect de la l&eacute;gislation en vigueur dans le pays du propri&eacute;taire du site<br />';

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['USER_LANG'] = 'fr-fr';
$lang['HEADER_LANG'] = 'fr-fr';
$lang['HEADER_LANG_XML'] = 'fr-FR';
$lang['HEADER_LANG_JQUERY'] = 'fr-FR';
$lang['LEFT'] = 'gauche';
$lang['RIGHT'] = 'droite';
$lang['DATE_FORMAT'] = 'd F y H:i'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT_DATE'] = 'Y/m/d';
$lang['DATE_FORMAT_TIME'] = 'H.i';
$lang['DATE_FORMAT_MG'] = 'Y/m/d - H:i';
$lang['DATE_FORMAT_CHAT'] = 'Y/m/d - H.i.s';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_DATE_JQUI_JQ'] = 'yy/mm/dd'; // You can only use one of these three formats: dd/mm/yy, mm/dd/yy, yy/mm/dd
$lang['DATE_FORMAT_TIME_JQUI_JQ'] = 'hh:ss';
$lang['DATE_FORMAT_DATE_JQUI_PHP'] = 'Y/m/d'; // You can only use one of these three formats: d/m/Y, m/d/Y, Y/m/d
$lang['DATE_FORMAT_TIME_JQUI_PHP'] = 'H.i';
$lang['DATE_FORMAT_DATE_MYSQL_PHP'] = 'ymd'; // You can only use one of these three formats: dmy, mdy, ymd (this is used to convert dates from MySQL and PHP and vice versa, all dates are with leading zeroes)
$lang['DATE_FORMAT_BIRTHDAY'] = 'd F Y';
$lang['DATE_FORMAT_CALENDAR'] = 'd F Y'; // This should be changed to the default date format for your language, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Date format of Joined date, php date() format
$lang['NUMBER_FORMAT_DECIMALS'] = 0;
$lang['NUMBER_FORMAT_DECIMALS_SEP'] = '.';
$lang['NUMBER_FORMAT_THOUSANDS_SEP'] = ',';
$lang['NUMBER_FORMAT_DATE_SEP'] = '/';
$lang['NUMBER_FORMAT_TIME_SEP'] = ':';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.

$lang['TRANSLATION_INFO'] = $lang['TRANSLATION'] = 'Traduction française par Informpro et Yros';

?>