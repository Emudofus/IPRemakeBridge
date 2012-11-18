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
* netclectic - Adrian Cockburn - phpbb@netclectic.com
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

$lang['Mini_Cal_calendar'] = 'Calendrier';
$lang['Mini_Cal_add_event'] = 'Ajouter un &eacute;v&egrave;nement';
$lang['Mini_Cal_events'] = 'Ev&egrave;nements &agrave; venir';
$lang['Mini_Cal_no_events'] = 'Aucun';

// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%b %e';
$lang['Mini_Cal_date_format_Time'] = '%H:%i';

// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa';
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su';
$lang['mini_cal']['day'][1] = 'Lun';
$lang['mini_cal']['day'][2] = 'Mar';
$lang['mini_cal']['day'][3] = 'Mer';
$lang['mini_cal']['day'][4] = 'Jeu';
$lang['mini_cal']['day'][5] = 'Ven';
$lang['mini_cal']['day'][6] = 'Sam';
$lang['mini_cal']['day'][7] = 'Dim';

$lang['mini_cal']['month'][1] = 'Jan';
$lang['mini_cal']['month'][2] = 'Fev';
$lang['mini_cal']['month'][3] = 'Mar';
$lang['mini_cal']['month'][4] = 'Avr';
$lang['mini_cal']['month'][5] = 'Mai';
$lang['mini_cal']['month'][6] = 'Juin';
$lang['mini_cal']['month'][7] = 'Juil';
$lang['mini_cal']['month'][8] = 'Aou';
$lang['mini_cal']['month'][9] = 'Sep';
$lang['mini_cal']['month'][10] = 'Oct';
$lang['mini_cal']['month'][11] = 'Nov';
$lang['mini_cal']['month'][12] = 'Dec';

$lang['mini_cal']['long_month'][1] = 'Janvier';
$lang['mini_cal']['long_month'][2] = 'F&eacute;vrier';
$lang['mini_cal']['long_month'][3] = 'Mars';
$lang['mini_cal']['long_month'][4] = 'Aril';
$lang['mini_cal']['long_month'][5] = 'Mai';
$lang['mini_cal']['long_month'][6] = 'Juin';
$lang['mini_cal']['long_month'][7] = 'Juillet';
$lang['mini_cal']['long_month'][8] = 'Ao&ucirc;t';
$lang['mini_cal']['long_month'][9] = 'Septembre';
$lang['mini_cal']['long_month'][10] = 'Octobre';
$lang['mini_cal']['long_month'][11] = 'Novembre';
$lang['mini_cal']['long_month'][12] = 'D&eacute;cembre';

?>