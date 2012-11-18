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
	'db_browse' => 'Parcourir',
	'db_truncate' => 'Tronquer',
	'db_optimize' => 'Optimiser',
	'db_drop' => 'Retirer',
	'db_repair' => 'R&eacute;parer',
	'db_structure' => 'Structure',
	'db_explain' => 'Explications des actions',

	'db_table_name' => 'Nom de la Table',
	'db_action' => 'Action',
	'db_type' => 'Type',
	'db_row_format' => 'Format de la Colonne',
	'db_rows' => 'Colonnes',
	'db_avg_r_len' => 'Taille moyenne de la Colonne',
	'db_data_len' => 'Taille des Donn&eacute;es',
	'db_max_dat_len' => 'Taille maximum des Donn&eacute;es',
	'db_index_len' => 'Taille de l&#39;Index',
	'db_overhead' => 'Overhead',
	'db_auto_inc' => 'Incr&eacute;ment Automatique',
	'db_with_sel' => 'Avec les Tables s&eacute;lectionn&eacute;es :',
	'db_field' => 'Champ',
	'db_type' => 'Type',
	'db_null' => 'Null',
	'db_key' => 'Clef',
	'db_default' => 'D&eacute;faut',
	'db_extra' => 'Extra',

	'db_unauthed' => 'Acc&egrave;s non autoris&eacute;.',
	'db_tru_warning' => '&Ecirc;tes-vous sûr de vouloir tronquer %s?',
	'db_dro_warning' => '&Ecirc;tes-vous sûr de vouloir retirer %s?',
	'db_warning_y' => 'Oui',
	'db_warning_n' => 'Non',
	'db_opt_success' => 'L&#39;optimisation de la Table <b>%s</b> a &eacute;t&eacute; compl&eacute;t&eacute; avec succ&egrave;s.',
	'db_tru_success' => 'Le tronquage de la Table <b>%s</b> a &eacute;t&eacute; compl&eacute;t&eacute; avec succ&egrave;s.',
	'db_dro_success' => 'Le retrait de la Table <b>%s</b> a &eacute;t&eacute; compl&eacute;t&eacute; avec succ&egrave;s.',
	'db_rep_success' => 'La r&eacute;paration de la Table <b>%s</b> a &eacute;t&eacute; compl&eacute;t&eacute; avec succ&egrave;s.',
	'db_explained' => 'Optimiser la Table: Videra tout surplus de donn&eacute;e.<br />Tronquer la Table: Videra une table de tous ses composants.<br />Parcourir: Vous autorisera &agrave; regarder les donn&eacute;es d&#39;une table.<br />Retirer: Retirera ( supprimera ) une table de votre base de donn&eacute;e. ( irr&eacute;m&eacute;diable )',
	'db_back' => 'Cliquez %sIci%s pour revenir &agrave; la page principal.',
	'db_change_exp' => 'En utilisant cela, vous serez capable d&#39;utiliser du SQL tel que INSERT INTO, ALTER TABLE, UPDATE, DELETE FROM, DROP TABLE, DESCRIBE, et ca&euml;tera... Ajoutez-en autant que vous le voulez, s&eacute;parez chaque commande SQL avec un point-virgule.',
	'db_submit_q' => ' Soumettre une Requ&ecirc;te ',
	'db_sql_total' => 'Requ&ecirc;te SQL # %s',
	'db_aff_total' => 'Compl&eacute;t&eacute; avec succ&egrave;s. Colonne affect&eacute;e: %s',
	'db_no_query' => 'Vous n&#39;avez pas entr&eacute; de requ&ecirc;te !',
	'db_sql_field_changed' => 'Nom du champ chang&eacute;.',
	'db_sql_query_db' => 'Questionnez votre base de donn&eacute;e: ',
	'DB_Admin' => 'IP MyAdmin',
	)
);

?>