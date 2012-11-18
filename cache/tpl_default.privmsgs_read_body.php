<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 20:33:10 +0000 (time = 1353270790)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_d76a8285e4eb87fd6482e89034dc20cf', 'overall_header.tpl', true);  $this->pparse('xs_include_d76a8285e4eb87fd6482e89034dc20cf');  ?>

<?php
global $user, $config, $is_auth, $lang, $to_username, $privmsgs_id, $post_subject, $images, $privmsg;
$post_subject = (((strlen($post_subject) > 0) && ((substr($post_subject, 0, strlen($lang['REPLY_PREFIX'])) == $lang['REPLY_PREFIX']) || (substr($post_subject, 0, strlen($lang['REPLY_PREFIX'])) == $lang['REPLY_PREFIX_OLD']))) ? '' : $lang['REPLY_PREFIX']) . $post_subject;
$this->vars['qr_subject'] = $post_subject;
$this->vars['CA_QUICK_REPLY_BUTTON'] = '<a href="#" onclick="showQuickEditor(); return false;" title="' . $lang['Post_a_reply'] . '"><img src="' . $images['quick_reply'] . '" alt="' . $lang['Post_a_reply'] . '" /></a><a href="#quick"></a>';
$this->vars['privmsgs_id'] = $privmsgs_id;

ob_start();
?>
<div id="quick_reply" style="display: none; position: relative; ">
<a name="quick"></a>
<form method="post" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>&amp;<?php echo isset($this->vars['POST_POST_URL']) ? $this->vars['POST_POST_URL'] : $this->lang('POST_POST_URL'); ?>=<?php echo isset($this->vars['PM_ID']) ? $this->vars['PM_ID'] : $this->lang('PM_ID'); ?>" name="post">
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
<input type="hidden" name="post_time" value="<?php echo time(); ?>" />
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo $lang['Post_a_reply']; ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td class="row1" width="200"><span class="gen"><b><?php echo isset($this->vars['L_TO']) ? $this->vars['L_TO'] : $this->lang('L_TO'); ?></b></span></td>
	<td class="row2"  align="left" width="100%"><input type="text" class="post"  name="username" size="25" maxlength="25" tabindex="1" value="<?php echo isset($this->vars['RECIPIENT_QQ']) ? $this->vars['RECIPIENT_QQ'] : $this->lang('RECIPIENT_QQ'); ?>" /></td>
</tr>
<tr>
	<td class="row1" width="200" nowrap="nowrap"><span class="gen"><b><?php echo $lang['Subject']; ?>:</b></span></td>
	<td class="row2" width="100%"><input type="text" name="subject" size="45" maxlength="120" style="width: 98%;" tabindex="2" class="post" value="<?php echo isset($this->vars['qr_subject']) ? $this->vars['qr_subject'] : $this->lang('qr_subject'); ?>" /></td>
</tr>
<tr>
	<td class="row1" width="200" nowrap="nowrap"><span class="gen"><b><?php echo $lang['Message_body']; ?>:<br /><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="200" height="1" alt="" /></b></span></td>
	<td class="row2" width="100%"><div class="message-box"><textarea name="message" rows="15" cols="35" tabindex="3"></textarea></div></td>
</tr>
<tr>
	<td class="row1" valign="top" nowrap="nowrap"><span class="gen"><b><?php echo $lang['Options']; ?>:</b></span></td>
	<td class="row2">
	<span class="genmed">
	<?php
		$user_sig = ( $user->data['user_sig'] != '' && $config['allow_sig'] ) ? $user->data['user_sig'] : '';
		$html_on = $config['allow_html'] ? $user->data['user_allowhtml'] : 1;
		$bbcode_on = $config['allow_bbcode'] ? $user->data['user_allowbbcode'] : 0;
		$smilies_on = $config['allow_smilies'] ? $user->data['user_allowsmile'] : 0;
	?>
	<label><input type="checkbox" name="disable_acro_auto" /><span class="genmed">&nbsp;<?php echo $lang['Disable_ACRO_AUTO_post']; ?></span></label><br />
	<?php if($config['allow_html']) { ?>
	<label><input type="checkbox" name="disable_html" <?php echo ($html_on ? '' : 'checked="checked"'); ?> /><span class="genmed">&nbsp;<?php echo $lang['Disable_HTML_post']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="disable_html" value="checked" /><?php } ?>
	<?php if($config['allow_bbcode']) { ?>
	<label><input type="checkbox" name="disable_bbcode" <?php echo ($bbcode_on ? '' : 'checked="checked"'); ?> /><span class="genmed">&nbsp;<?php echo $lang['Disable_BBCode_post']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="disable_bbcode" value="checked" /><?php } ?>
	<?php if($config['allow_smilies']) { ?>
	<label><input type="checkbox" name="disable_smilies" <?php echo ($smilies_on ? '' : 'checked="checked"'); ?> /><span class="genmed">&nbsp;<?php echo $lang['Disable_Smilies_post']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="disable_smilies" value="checked" /><?php } ?>
	<?php if($user_sig) {  ?>
	<label><input type="checkbox" name="attach_sig" <?php echo ($user->data['user_attachsig'] ? 'checked="checked"' : ''); ?> /><span class="genmed">&nbsp;<?php echo $lang['Attach_signature']; ?></span></label><br />
	<?php } else { ?><input type="hidden" name="attach_sig" value="" /><?php } ?>
	</span>
	</td>
</tr>
<tr>
	<td class="cat" colspan="2">
		<input type="hidden" name="reply" value="<?php echo isset($this->vars['REPLY']) ? $this->vars['REPLY'] : $this->lang('REPLY'); ?>" />
		<input type="hidden" name="id" value="<?php echo isset($this->vars['REPLY_ID']) ? $this->vars['REPLY_ID'] : $this->lang('REPLY_ID'); ?>" />
		<input type="hidden" name="mode" value="reply" />
		<input type="hidden" name="t" value="<?php echo $privmsgs_id; ?>" />
		<input type="hidden" name="sid" value="<?php echo $user->data['session_id']; ?>" />
		<input type="submit" tabindex="5" name="preview" class="liteoption" value="<?php echo $lang['Preview']; ?>" />&nbsp;
		<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="<?php echo $lang['Submit']; ?>" />
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</form>
</div>
<?php
$str = ob_get_contents();
ob_end_clean();
$this->vars['CA_QUICK_REPLY_FORM'] = $str;
?>
<?php echo isset($this->vars['CPL_MENU_OUTPUT']) ? $this->vars['CPL_MENU_OUTPUT'] : $this->lang('CPL_MENU_OUTPUT'); ?>
<div class="forumline" style="margin-left: 5%; margin-right: 5%;">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td width="25%" align="center"><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['INBOX']) ? $this->vars['INBOX'] : $this->lang('INBOX'); ?></span></b></td>
	<td width="25%" align="center"><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['SENTBOX']) ? $this->vars['SENTBOX'] : $this->lang('SENTBOX'); ?></span></b></td>
	<td width="25%" align="center"><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['OUTBOX']) ? $this->vars['OUTBOX'] : $this->lang('OUTBOX'); ?></span></b></td>
	<td width="25%" align="center"><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['SAVEBOX']) ? $this->vars['SAVEBOX'] : $this->lang('SAVEBOX'); ?></span></b></td>
</tr>
</table>
</div>
<script type="text/javascript">
// <![CDATA[

message = new Array();
message[<?php echo isset($this->vars['privmsgs_id']) ? $this->vars['privmsgs_id'] : $this->lang('privmsgs_id'); ?>] = " user=\"<?php echo isset($this->vars['RECIPIENT_QQ']) ? $this->vars['RECIPIENT_QQ'] : $this->lang('RECIPIENT_QQ'); ?>\"]<?php echo isset($this->vars['PLAIN_MESSAGE']) ? $this->vars['PLAIN_MESSAGE'] : $this->lang('PLAIN_MESSAGE'); ?>[/";

// ]]>
</script>
<br />
<form method="post" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>">
<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>

<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr><td align="left" valign="middle"><span class="img-btn"><?php echo isset($this->vars['REPLY_PM_IMG']) ? $this->vars['REPLY_PM_IMG'] : $this->lang('REPLY_PM_IMG'); ?></span>&nbsp;<span class="img-btn"><?php echo isset($this->vars['CA_QUICK_REPLY_BUTTON']) ? $this->vars['CA_QUICK_REPLY_BUTTON'] : $this->lang('CA_QUICK_REPLY_BUTTON'); ?></span></td></tr>
</table>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['POST_SUBJECT']) ? $this->vars['POST_SUBJECT'] : $this->lang('POST_SUBJECT'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<th width="150"><?php echo isset($this->vars['L_AUTHOR']) ? $this->vars['L_AUTHOR'] : $this->lang('L_AUTHOR'); ?></th>
		<th><?php echo isset($this->vars['L_MESSAGE']) ? $this->vars['L_MESSAGE'] : $this->lang('L_MESSAGE'); ?></th>
	</tr>
	<tr>
		<td class="row-post-author">
			<span class="post-name"><?php echo isset($this->vars['MESSAGE_FROM']) ? $this->vars['MESSAGE_FROM'] : $this->lang('MESSAGE_FROM'); ?>&nbsp;<?php echo isset($this->vars['POSTER_GENDER']) ? $this->vars['POSTER_GENDER'] : $this->lang('POSTER_GENDER'); ?></span><br />
			<div class="post-rank"><b><?php echo isset($this->vars['POSTER_RANK']) ? $this->vars['POSTER_RANK'] : $this->lang('POSTER_RANK'); ?></b><?php echo isset($this->vars['RANK_IMAGE']) ? $this->vars['RANK_IMAGE'] : $this->lang('RANK_IMAGE'); ?></div>
			<span class="post-images"><?php echo isset($this->vars['POSTER_AVATAR']) ? $this->vars['POSTER_AVATAR'] : $this->lang('POSTER_AVATAR'); ?></span>
			<div class="post-details">
			<?php echo isset($this->vars['ONLINE_STATUS_IMG']) ? $this->vars['ONLINE_STATUS_IMG'] : $this->lang('ONLINE_STATUS_IMG'); ?><?php echo isset($this->vars['IP_IMG']) ? $this->vars['IP_IMG'] : $this->lang('IP_IMG'); ?><?php echo isset($this->vars['AIM_IMG']) ? $this->vars['AIM_IMG'] : $this->lang('AIM_IMG'); ?><?php echo isset($this->vars['ICQ_IMG']) ? $this->vars['ICQ_IMG'] : $this->lang('ICQ_IMG'); ?><?php echo isset($this->vars['MSN_IMG']) ? $this->vars['MSN_IMG'] : $this->lang('MSN_IMG'); ?><?php echo isset($this->vars['SKYPE_IMG']) ? $this->vars['SKYPE_IMG'] : $this->lang('SKYPE_IMG'); ?><?php echo isset($this->vars['YIM_IMG']) ? $this->vars['YIM_IMG'] : $this->lang('YIM_IMG'); ?><br />
			<?php echo isset($this->vars['POSTER_JOINED']) ? $this->vars['POSTER_JOINED'] : $this->lang('POSTER_JOINED'); ?><br />
			<?php echo isset($this->vars['POSTER_POSTS']) ? $this->vars['POSTER_POSTS'] : $this->lang('POSTER_POSTS'); ?><br />
			<?php echo isset($this->vars['POSTER_FROM']) ? $this->vars['POSTER_FROM'] : $this->lang('POSTER_FROM'); ?></div><br />
			<img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="150" height="1" alt="" />
		</td>
		<td class="row-post" width="100%">
			<div class="post-buttons-top post-buttons"><?php echo isset($this->vars['QUOTE_PM_IMG']) ? $this->vars['QUOTE_PM_IMG'] : $this->lang('QUOTE_PM_IMG'); ?>&nbsp;<?php echo isset($this->vars['EDIT_PM_IMG']) ? $this->vars['EDIT_PM_IMG'] : $this->lang('EDIT_PM_IMG'); ?></div>
			<div class="post-subject"><?php echo isset($this->vars['POST_SUBJECT']) ? $this->vars['POST_SUBJECT'] : $this->lang('POST_SUBJECT'); ?>&nbsp;</div>
			<div class="post-text post-text-hide-flow">
				<?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?>
				<?php

$postrow_count = ( isset($this->_tpldata['postrow.']) ) ? sizeof($this->_tpldata['postrow.']) : 0;
for ($postrow_i = 0; $postrow_i < $postrow_count; $postrow_i++)
{
 $postrow_item = &$this->_tpldata['postrow.'][$postrow_i];
 $postrow_item['S_ROW_COUNT'] = $postrow_i;
 $postrow_item['S_NUM_ROWS'] = $postrow_count;

?>
				<br />
				<?php echo isset($this->vars['ATTACHMENTS']) ? $this->vars['ATTACHMENTS'] : $this->lang('ATTACHMENTS'); ?>
				<?php

} // END postrow

if(isset($postrow_item)) { unset($postrow_item); } 

?>
			</div>
			<div class="post-text post-text-hide-flow"><br /><br /><br /><?php echo isset($this->vars['SIGNATURE']) ? $this->vars['SIGNATURE'] : $this->lang('SIGNATURE'); ?></div>
		</td>
	</tr>
	<tr>
		<td class="row-post-date"><?php echo isset($this->vars['POST_DATE']) ? $this->vars['POST_DATE'] : $this->lang('POST_DATE'); ?></td>
		<td class="row-post-buttons post-buttons">
			<div style="text-align: right">
				<div style="position: relative; float: left; text-align: left;">
					<?php echo isset($this->vars['PROFILE_IMG']) ? $this->vars['PROFILE_IMG'] : $this->lang('PROFILE_IMG'); ?><?php echo isset($this->vars['PM_IMG']) ? $this->vars['PM_IMG'] : $this->lang('PM_IMG'); ?>
					<?php echo isset($this->vars['EMAIL_IMG']) ? $this->vars['EMAIL_IMG'] : $this->lang('EMAIL_IMG'); ?>
					<?php echo isset($this->vars['WWW_IMG']) ? $this->vars['WWW_IMG'] : $this->lang('WWW_IMG'); ?>
				</div>
				<a href="javascript:addquote(%27<?php echo isset($this->vars['privmsgs_id']) ? $this->vars['privmsgs_id'] : $this->lang('privmsgs_id'); ?>%27,%27quote%27,true,false);"><img src="<?php echo isset($this->vars['IMG_QUICK_QUOTE']) ? $this->vars['IMG_QUICK_QUOTE'] : $this->lang('IMG_QUICK_QUOTE'); ?>" alt="<?php echo isset($this->vars['L_QUICK_QUOTE']) ? $this->vars['L_QUICK_QUOTE'] : $this->lang('L_QUICK_QUOTE'); ?>" title="<?php echo isset($this->vars['L_QUICK_QUOTE']) ? $this->vars['L_QUICK_QUOTE'] : $this->lang('L_QUICK_QUOTE'); ?>" /></a>
				<a href="javascript:addquote(%27<?php echo isset($this->vars['privmsgs_id']) ? $this->vars['privmsgs_id'] : $this->lang('privmsgs_id'); ?>%27,%27ot%27,true,false);"><img src="<?php echo isset($this->vars['IMG_OFFTOPIC']) ? $this->vars['IMG_OFFTOPIC'] : $this->lang('IMG_OFFTOPIC'); ?>" alt="<?php echo isset($this->vars['L_OFFTOPIC']) ? $this->vars['L_OFFTOPIC'] : $this->lang('L_OFFTOPIC'); ?>" title="<?php echo isset($this->vars['L_OFFTOPIC']) ? $this->vars['L_OFFTOPIC'] : $this->lang('L_OFFTOPIC'); ?>" /></a>
			</div>
		</td>
	</tr>
	<tr><td class="spaceRow" colspan="2"><img src="<?php echo isset($this->vars['SPACER']) ? $this->vars['SPACER'] : $this->lang('SPACER'); ?>" width="1" height="3" alt="" /></td></tr>
	<tr>
		<td class="cat" colspan="2">
			<input type="submit" name="save" value="<?php echo isset($this->vars['L_SAVE_MSG']) ? $this->vars['L_SAVE_MSG'] : $this->lang('L_SAVE_MSG'); ?>" class="liteoption" />&nbsp;&nbsp;
			<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MSG']) ? $this->vars['L_DELETE_MSG'] : $this->lang('L_DELETE_MSG'); ?>" class="liteoption" />&nbsp;
			<?php

$switch_attachments_count = ( isset($this->_tpldata['switch_attachments.']) ) ? sizeof($this->_tpldata['switch_attachments.']) : 0;
for ($switch_attachments_i = 0; $switch_attachments_i < $switch_attachments_count; $switch_attachments_i++)
{
 $switch_attachments_item = &$this->_tpldata['switch_attachments.'][$switch_attachments_i];
 $switch_attachments_item['S_ROW_COUNT'] = $switch_attachments_i;
 $switch_attachments_item['S_NUM_ROWS'] = $switch_attachments_count;

?>
			<input type="submit" name="pm_delete_attach" value="<?php echo isset($this->vars['L_DELETE_ATTACHMENTS']) ? $this->vars['L_DELETE_ATTACHMENTS'] : $this->lang('L_DELETE_ATTACHMENTS'); ?>" class="liteoption" />
			<?php

} // END switch_attachments

if(isset($switch_attachments_item)) { unset($switch_attachments_item); } 

?>
		</td>
	</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>

<br />
<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td align="left"><span class="img-btn"><?php echo isset($this->vars['REPLY_PM_IMG']) ? $this->vars['REPLY_PM_IMG'] : $this->lang('REPLY_PM_IMG'); ?></span>&nbsp;<span class="img-btn"><?php echo isset($this->vars['CA_QUICK_REPLY_BUTTON']) ? $this->vars['CA_QUICK_REPLY_BUTTON'] : $this->lang('CA_QUICK_REPLY_BUTTON'); ?></span></td>
	<td align="right" valign="top" nowrap="nowrap">
		<span class="gensmall"><?php echo isset($this->vars['S_TIMEZONE']) ? $this->vars['S_TIMEZONE'] : $this->lang('S_TIMEZONE'); ?></span>
	</td>
</tr>
</table>
</form>
<?php echo isset($this->vars['CA_QUICK_REPLY_FORM']) ? $this->vars['CA_QUICK_REPLY_FORM'] : $this->lang('CA_QUICK_REPLY_FORM'); ?>
</td>
</tr>
</table>
<table class="empty-table" width="100%" align="center" cellspacing="0">
<tr><td valign="top" align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></td></tr>
</table>

<?php  $this->set_filename('xs_include_960bb5c37a1e6c1f8a47a819fc888133', 'overall_footer.tpl', true);  $this->pparse('xs_include_960bb5c37a1e6c1f8a47a819fc888133');  ?>