<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 20:22:01 +0000 (time = 1353270121)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_49d60306b58a907ab136690b8349c3e4', 'overall_header.tpl', true);  $this->pparse('xs_include_49d60306b58a907ab136690b8349c3e4');  ?>

<?php  $this->set_filename('xs_include_03eb02876985b9f9a7e56ae9e5951bc1', 'profile_ajax_js.tpl', true);  $this->pparse('xs_include_03eb02876985b9f9a7e56ae9e5951bc1');  ?>

<form action="<?php echo isset($this->vars['S_PROFILE_ACTION']) ? $this->vars['S_PROFILE_ACTION'] : $this->lang('S_PROFILE_ACTION'); ?>" <?php echo isset($this->vars['S_FORM_ENCTYPE']) ? $this->vars['S_FORM_ENCTYPE'] : $this->lang('S_FORM_ENCTYPE'); ?> method="post">

<?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>

<?php if ($this->vars['S_REGISTER_MESSAGE']) {  ?><?php echo isset($this->vars['IMG_TBL']) ? $this->vars['IMG_TBL'] : $this->lang('IMG_TBL'); ?><table class="forumline" width="100%" cellspacing="0" cellpadding="0"><tr><td class="row1"><div class="post-text"><?php echo isset($this->vars['L_REGISTER_MESSAGE']) ? $this->vars['L_REGISTER_MESSAGE'] : $this->lang('L_REGISTER_MESSAGE'); ?></div></td></tr></table><?php echo isset($this->vars['IMG_TBR']) ? $this->vars['IMG_TBR'] : $this->lang('IMG_TBR'); ?><?php } ?>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['L_REGISTRATION_INFO']) ? $this->vars['L_REGISTRATION_INFO'] : $this->lang('L_REGISTRATION_INFO'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<!-- <tr><th colspan="2" valign="middle"><?php echo isset($this->vars['L_REGISTRATION_INFO']) ? $this->vars['L_REGISTRATION_INFO'] : $this->lang('L_REGISTRATION_INFO'); ?></th></tr> -->
<tr><td class="row2" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_ITEMS_REQUIRED']) ? $this->vars['L_ITEMS_REQUIRED'] : $this->lang('L_ITEMS_REQUIRED'); ?></span></td></tr>
<tr>
	<td class="row1" width="38%"><span class="gen"><?php echo isset($this->vars['L_USERNAME']) ? $this->vars['L_USERNAME'] : $this->lang('L_USERNAME'); ?>:&nbsp;*</span></td>
	<td class="row2"><input type="text" class="post" style="width:200px" name="username" size="25" maxlength="40" value="<?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>" <?php echo isset($this->vars['VERIFY_UN_JS']) ? $this->vars['VERIFY_UN_JS'] : $this->lang('VERIFY_UN_JS'); ?> /><div id="pseudobox"></div></td>
</tr>
<tr>
	<td class="row1" width="38%"><span class="gen">Pseudo:&nbsp;*</span></td>
	<td class="row2"><input type="text" class="post" style="width: 200px;" name="pseudo" size="25" maxlength="40" value="<?php echo isset($this->vars['PSEUDO']) ? $this->vars['PSEUDO'] : $this->lang('PSEUDO'); ?>" />
</tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_EMAIL_ADDRESS']) ? $this->vars['L_EMAIL_ADDRESS'] : $this->lang('L_EMAIL_ADDRESS'); ?>:&nbsp;*</span></td>
	<td class="row2"><input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="<?php echo isset($this->vars['EMAIL']) ? $this->vars['EMAIL'] : $this->lang('EMAIL'); ?>" <?php echo isset($this->vars['VERIFY_EMAIL_JS']) ? $this->vars['VERIFY_EMAIL_JS'] : $this->lang('VERIFY_EMAIL_JS'); ?> /><div id="emailbox"></div></td>
</tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_CONFIRM_EMAIL']) ? $this->vars['L_CONFIRM_EMAIL'] : $this->lang('L_CONFIRM_EMAIL'); ?>:&nbsp;*</span></td>
	<td class="row2"><input type="text" class="post" style="width:200px" name="email_confirm" size="25" maxlength="255" value="<?php echo isset($this->vars['EMAIL_CONFIRM']) ? $this->vars['EMAIL_CONFIRM'] : $this->lang('EMAIL_CONFIRM'); ?>" /></td>
</tr>
<tr>
	<td class="row1">
		<span class="gen"><?php echo isset($this->vars['L_NEW_PASSWORD']) ? $this->vars['L_NEW_PASSWORD'] : $this->lang('L_NEW_PASSWORD'); ?>:&nbsp;*</span><br />
		<span class="gensmall"><?php echo isset($this->vars['L_PASSWORD_IF_CHANGED']) ? $this->vars['L_PASSWORD_IF_CHANGED'] : $this->lang('L_PASSWORD_IF_CHANGED'); ?>&nbsp;</span>
	</td>
	<td class="row2"><input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="100" value="<?php echo isset($this->vars['PASSWORD']) ? $this->vars['PASSWORD'] : $this->lang('PASSWORD'); ?>" /></td>
</tr>
<tr>
	<td class="row1">
		<span class="gen"><?php echo isset($this->vars['L_CONFIRM_PASSWORD']) ? $this->vars['L_CONFIRM_PASSWORD'] : $this->lang('L_CONFIRM_PASSWORD'); ?>:&nbsp;*</span><br />
		<span class="gensmall"><?php echo isset($this->vars['L_PASSWORD_CONFIRM_IF_CHANGED']) ? $this->vars['L_PASSWORD_CONFIRM_IF_CHANGED'] : $this->lang('L_PASSWORD_CONFIRM_IF_CHANGED'); ?>&nbsp;</span>
	</td>
	<td class="row2"><input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="100" value="<?php echo isset($this->vars['PASSWORD_CONFIRM']) ? $this->vars['PASSWORD_CONFIRM'] : $this->lang('PASSWORD_CONFIRM'); ?>" /></td>
</tr>
<tr>
	<td class="row1" width="38%"><span class="gen">Question secrète:&nbsp;*</span></td>
	<td class="row2"><input type="text" class="post" style="width: 200px;" name="secret_q" maxlength="40" value="<?php echo isset($this->vars['PSEUDO']) ? $this->vars['PSEUDO'] : $this->lang('PSEUDO'); ?>" />
</tr>
<tr>
	<td class="row1" width="38%"><span class="gen">Réponse secrète:&nbsp;*</span></td>
	<td class="row2"><input type="text" class="post" style="width: 200px;" name="secret_a" maxlength="40" value="<?php echo isset($this->vars['PSEUDO']) ? $this->vars['PSEUDO'] : $this->lang('PSEUDO'); ?>" />
</tr>
<?php

$switch_confirm_count = ( isset($this->_tpldata['switch_confirm.']) ) ? sizeof($this->_tpldata['switch_confirm.']) : 0;
for ($switch_confirm_i = 0; $switch_confirm_i < $switch_confirm_count; $switch_confirm_i++)
{
 $switch_confirm_item = &$this->_tpldata['switch_confirm.'][$switch_confirm_i];
 $switch_confirm_item['S_ROW_COUNT'] = $switch_confirm_i;
 $switch_confirm_item['S_NUM_ROWS'] = $switch_confirm_count;

?>
<tr><td class="row1 row-center" colspan="2"><span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_CODE_IMPAIRED']) ? $this->vars['L_CONFIRM_CODE_IMPAIRED'] : $this->lang('L_CONFIRM_CODE_IMPAIRED'); ?></span><br /><br /><?php echo isset($this->vars['CONFIRM_IMG']) ? $this->vars['CONFIRM_IMG'] : $this->lang('CONFIRM_IMG'); ?><br /><br /></td></tr>
<tr>
	<td class="row1">
		<span class="gen"><?php echo isset($this->vars['L_CONFIRM_CODE']) ? $this->vars['L_CONFIRM_CODE'] : $this->lang('L_CONFIRM_CODE'); ?>:&nbsp;*</span><br />
		<span class="gensmall"><?php echo isset($this->vars['L_CONFIRM_CODE_EXPLAIN']) ? $this->vars['L_CONFIRM_CODE_EXPLAIN'] : $this->lang('L_CONFIRM_CODE_EXPLAIN'); ?></span>
	</td>
	<td class="row2"><input type="text" class="post" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
</tr>
<?php

} // END switch_confirm

if(isset($switch_confirm_item)) { unset($switch_confirm_item); } 

?>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_BIRTHDAY']) ? $this->vars['L_BIRTHDAY'] : $this->lang('L_BIRTHDAY'); ?>:<?php echo isset($this->vars['BIRTHDAY_REQUIRED']) ? $this->vars['BIRTHDAY_REQUIRED'] : $this->lang('BIRTHDAY_REQUIRED'); ?></span></td>
	<td class="row2"><span class="gen"><?php echo isset($this->vars['S_BIRTHDAY']) ? $this->vars['S_BIRTHDAY'] : $this->lang('S_BIRTHDAY'); ?></span></td>
</tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_GENDER']) ? $this->vars['L_GENDER'] : $this->lang('L_GENDER'); ?>:<?php echo isset($this->vars['GENDER_REQUIRED']) ? $this->vars['GENDER_REQUIRED'] : $this->lang('GENDER_REQUIRED'); ?></span></td>
	<td class="row2">
		<input type="radio" <?php echo isset($this->vars['LOCK_GENDER']) ? $this->vars['LOCK_GENDER'] : $this->lang('LOCK_GENDER'); ?> name="gender" value="0" <?php echo isset($this->vars['GENDER_NO_SPECIFY_CHECKED']) ? $this->vars['GENDER_NO_SPECIFY_CHECKED'] : $this->lang('GENDER_NO_SPECIFY_CHECKED'); ?> />
		<span class="gen"><?php echo isset($this->vars['L_GENDER_NOT_SPECIFY']) ? $this->vars['L_GENDER_NOT_SPECIFY'] : $this->lang('L_GENDER_NOT_SPECIFY'); ?></span>
			&nbsp;&nbsp;<input type="radio" name="gender" value="1" <?php echo isset($this->vars['GENDER_MALE_CHECKED']) ? $this->vars['GENDER_MALE_CHECKED'] : $this->lang('GENDER_MALE_CHECKED'); ?> />
		<span class="gen"><?php echo isset($this->vars['L_GENDER_MALE']) ? $this->vars['L_GENDER_MALE'] : $this->lang('L_GENDER_MALE'); ?></span>
			&nbsp;&nbsp;<input type="radio" name="gender" value="2" <?php echo isset($this->vars['GENDER_FEMALE_CHECKED']) ? $this->vars['GENDER_FEMALE_CHECKED'] : $this->lang('GENDER_FEMALE_CHECKED'); ?> />
		<span class="gen"><?php echo isset($this->vars['L_GENDER_FEMALE']) ? $this->vars['L_GENDER_FEMALE'] : $this->lang('L_GENDER_FEMALE'); ?></span>
	</td>
</tr>

<?php

$switch_cpl_profile_info_count = ( isset($this->_tpldata['switch_cpl_profile_info.']) ) ? sizeof($this->_tpldata['switch_cpl_profile_info.']) : 0;
for ($switch_cpl_profile_info_i = 0; $switch_cpl_profile_info_i < $switch_cpl_profile_info_count; $switch_cpl_profile_info_i++)
{
 $switch_cpl_profile_info_item = &$this->_tpldata['switch_cpl_profile_info.'][$switch_cpl_profile_info_i];
 $switch_cpl_profile_info_item['S_ROW_COUNT'] = $switch_cpl_profile_info_i;
 $switch_cpl_profile_info_item['S_NUM_ROWS'] = $switch_cpl_profile_info_count;

?>
<?php

$switch_custom_fields_count = ( isset($switch_cpl_profile_info_item['switch_custom_fields.']) ) ? sizeof($switch_cpl_profile_info_item['switch_custom_fields.']) : 0;
for ($switch_custom_fields_i = 0; $switch_custom_fields_i < $switch_custom_fields_count; $switch_custom_fields_i++)
{
 $switch_custom_fields_item = &$switch_cpl_profile_info_item['switch_custom_fields.'][$switch_custom_fields_i];
 $switch_custom_fields_item['S_ROW_COUNT'] = $switch_custom_fields_i;
 $switch_custom_fields_item['S_NUM_ROWS'] = $switch_custom_fields_count;

?>
<tr><td class="row3" colspan="2"><span class="gensmall"><?php echo isset($switch_custom_fields_item['L_CUSTOM_FIELD_NOTICE']) ? $switch_custom_fields_item['L_CUSTOM_FIELD_NOTICE'] : ''; ?></span></td></tr>
<?php

} // END switch_custom_fields

if(isset($switch_custom_fields_item)) { unset($switch_custom_fields_item); } 

?>
<?php

$custom_fields_count = ( isset($switch_cpl_profile_info_item['custom_fields.']) ) ? sizeof($switch_cpl_profile_info_item['custom_fields.']) : 0;
for ($custom_fields_i = 0; $custom_fields_i < $custom_fields_count; $custom_fields_i++)
{
 $custom_fields_item = &$switch_cpl_profile_info_item['custom_fields.'][$custom_fields_i];
 $custom_fields_item['S_ROW_COUNT'] = $custom_fields_i;
 $custom_fields_item['S_NUM_ROWS'] = $custom_fields_count;

?>
<tr>
	<td class="row1" valign="top">
		<span class="gen"><?php echo isset($custom_fields_item['NAME']) ? $custom_fields_item['NAME'] : ''; ?>:<?php echo isset($custom_fields_item['REQUIRED']) ? $custom_fields_item['REQUIRED'] : ''; ?></span>
		<?php

$switch_description_count = ( isset($custom_fields_item['switch_description.']) ) ? sizeof($custom_fields_item['switch_description.']) : 0;
for ($switch_description_i = 0; $switch_description_i < $switch_description_count; $switch_description_i++)
{
 $switch_description_item = &$custom_fields_item['switch_description.'][$switch_description_i];
 $switch_description_item['S_ROW_COUNT'] = $switch_description_i;
 $switch_description_item['S_NUM_ROWS'] = $switch_description_count;

?>
		<br /><span class="gensmall"><?php echo isset($switch_description_item['DESCRIPTION']) ? $switch_description_item['DESCRIPTION'] : ''; ?></span>
		<?php

} // END switch_description

if(isset($switch_description_item)) { unset($switch_description_item); } 

?>
	</td>
	<td class="row2"><?php echo isset($custom_fields_item['FIELD']) ? $custom_fields_item['FIELD'] : ''; ?></td>
</tr>
<?php

} // END custom_fields

if(isset($custom_fields_item)) { unset($custom_fields_item); } 

?>
<?php

} // END switch_cpl_profile_info

if(isset($switch_cpl_profile_info_item)) { unset($switch_cpl_profile_info_item); } 

?>
<tr><th colspan="2" valign="middle"><?php echo isset($this->vars['L_PREFERENCES']) ? $this->vars['L_PREFERENCES'] : $this->lang('L_PREFERENCES'); ?></th></tr>
<tr>
	<td class="row1"><span class="gen"><?php echo isset($this->vars['L_BOARD_LANGUAGE']) ? $this->vars['L_BOARD_LANGUAGE'] : $this->lang('L_BOARD_LANGUAGE'); ?>:</span></td>
	<td class="row2"><span class="gensmall"><?php echo isset($this->vars['LANGUAGE_SELECT']) ? $this->vars['LANGUAGE_SELECT'] : $this->lang('LANGUAGE_SELECT'); ?></span></td>
</tr>
<tr>
	<td class="row1">
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE']) ? $this->vars['L_TIME_MODE'] : $this->lang('L_TIME_MODE'); ?>:</span><br />
		<span class="gensmall"><?php echo isset($this->vars['L_TIME_MODE_TEXT']) ? $this->vars['L_TIME_MODE_TEXT'] : $this->lang('L_TIME_MODE_TEXT'); ?></span>
	</td>
	<td class="row2">
		<!--
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_AUTO']) ? $this->vars['L_TIME_MODE_AUTO'] : $this->lang('L_TIME_MODE_AUTO'); ?></span><br />
		<input type="radio" name="time_mode" value="6" <?php echo isset($this->vars['TIME_MODE_FULL_PC_CHECKED']) ? $this->vars['TIME_MODE_FULL_PC_CHECKED'] : $this->lang('TIME_MODE_FULL_PC_CHECKED'); ?>/>
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_FULL_PC']) ? $this->vars['L_TIME_MODE_FULL_PC'] : $this->lang('L_TIME_MODE_FULL_PC'); ?></span>&nbsp;&nbsp;<br />
		<input type="radio" name="time_mode" value="4" <?php echo isset($this->vars['TIME_MODE_SERVER_PC_CHECKED']) ? $this->vars['TIME_MODE_SERVER_PC_CHECKED'] : $this->lang('TIME_MODE_SERVER_PC_CHECKED'); ?>/>
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_SERVER_PC']) ? $this->vars['L_TIME_MODE_SERVER_PC'] : $this->lang('L_TIME_MODE_SERVER_PC'); ?></span>&nbsp;&nbsp;<br />
		<input type="radio" name="time_mode" value="3" <?php echo isset($this->vars['TIME_MODE_FULL_SERVER_CHECKED']) ? $this->vars['TIME_MODE_FULL_SERVER_CHECKED'] : $this->lang('TIME_MODE_FULL_SERVER_CHECKED'); ?>/>
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_FULL_SERVER']) ? $this->vars['L_TIME_MODE_FULL_SERVER'] : $this->lang('L_TIME_MODE_FULL_SERVER'); ?></span>
		<br /><br />
		-->
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_MANUAL']) ? $this->vars['L_TIME_MODE_MANUAL'] : $this->lang('L_TIME_MODE_MANUAL'); ?></span><br />
		<span class="gen">&nbsp;&nbsp;<?php echo isset($this->vars['L_TIME_MODE_DST']) ? $this->vars['L_TIME_MODE_DST'] : $this->lang('L_TIME_MODE_DST'); ?>:</span>
		<input type="radio" name="time_mode" value="1" <?php echo isset($this->vars['TIME_MODE_MANUAL_DST_CHECKED']) ? $this->vars['TIME_MODE_MANUAL_DST_CHECKED'] : $this->lang('TIME_MODE_MANUAL_DST_CHECKED'); ?> />
		<span class="gen"><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?><?php echo isset($this->vars['L_TIME_MODE_DST_ON']) ? $this->vars['L_TIME_MODE_DST_ON'] : $this->lang('L_TIME_MODE_DST_ON'); ?></span>
		&nbsp;<input type="radio" name="time_mode" value="0" <?php echo isset($this->vars['TIME_MODE_MANUAL_CHECKED']) ? $this->vars['TIME_MODE_MANUAL_CHECKED'] : $this->lang('TIME_MODE_MANUAL_CHECKED'); ?> />
		<span class="gen"><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?><?php echo isset($this->vars['L_TIME_MODE_DST_OFF']) ? $this->vars['L_TIME_MODE_DST_OFF'] : $this->lang('L_TIME_MODE_DST_OFF'); ?></span>
		&nbsp;<input type="radio" name="time_mode" value="2" <?php echo isset($this->vars['TIME_MODE_SERVER_SWITCH_CHECKED']) ? $this->vars['TIME_MODE_SERVER_SWITCH_CHECKED'] : $this->lang('TIME_MODE_SERVER_SWITCH_CHECKED'); ?> />
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_DST_SERVER']) ? $this->vars['L_TIME_MODE_DST_SERVER'] : $this->lang('L_TIME_MODE_DST_SERVER'); ?></span><br />
		<span class="gen">&nbsp;&nbsp;<?php echo isset($this->vars['L_TIME_MODE_DST_TIME_LAG']) ? $this->vars['L_TIME_MODE_DST_TIME_LAG'] : $this->lang('L_TIME_MODE_DST_TIME_LAG'); ?>:</span>
		<input type="text" name="dst_time_lag" value="<?php echo isset($this->vars['DST_TIME_LAG']) ? $this->vars['DST_TIME_LAG'] : $this->lang('DST_TIME_LAG'); ?>" maxlength="3" size="3" class="post" />
		<span class="gen"><?php echo isset($this->vars['L_TIME_MODE_DST_MN']) ? $this->vars['L_TIME_MODE_DST_MN'] : $this->lang('L_TIME_MODE_DST_MN'); ?></span><br />
		<span class="gen">&nbsp;&nbsp;<?php echo isset($this->vars['L_TIME_MODE_TIMEZONE']) ? $this->vars['L_TIME_MODE_TIMEZONE'] : $this->lang('L_TIME_MODE_TIMEZONE'); ?>:</span>
		<span class="gensmall"><?php echo isset($this->vars['TIMEZONE_SELECT']) ? $this->vars['TIMEZONE_SELECT'] : $this->lang('TIMEZONE_SELECT'); ?></span>
	</td>
</tr>
<tr>
	<td class="catBottom" colspan="2"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
		<input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" name="reset" class="liteoption" />
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</form>

<?php  $this->set_filename('xs_include_ef1be4212ccb5fda085998fffa7bd96e', 'overall_footer.tpl', true);  $this->pparse('xs_include_ef1be4212ccb5fda085998fffa7bd96e');  ?>