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
* Ptirhiik (admin@rpgnet-fr.com)
*
*/

/**
*
* LAST UPDATE 2012-11-18 20:22:01 (GMT) by Anonymous*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
	exit;
}

//--------------------------------------------------------------------------------------------------
//
// $tree : designed to get all the hierarchy
// ------
//
//	indexes :
//		- id : full designation : ie Root, f3, c20
//		- idx : rank order
//
//	$tree['keys'][id]				=> idx,
//	$tree['type'][idx]			=> type of the row, can be 'c' for categories or 'f' for forums,
//	$tree['id'][idx]				=> value of the row id : forum_id for cats, forum_id for forums,
//	$tree['data'][idx]			=> db table row,
//	$tree['main'][idx]			=> parent id,
//	$tree['sub'][id]				=> array of sub-level ids,
//--------------------------------------------------------------------------------------------------

$tree = array(
	'keys'	=> array(),
	'type'	=> array(),
	'id'		=> array(),
	'data'	=> array(
			),
	'main'	=> array(),
	'sub'		=> array(
			),
	'mods'	=> array(
			),
);
$cache_included = true;
return;
?>