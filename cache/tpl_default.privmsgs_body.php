<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 20:33:08 +0000 (time = 1353270788)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_8221bac19ec662af5e02d288809e4721', 'overall_header.tpl', true);  $this->pparse('xs_include_8221bac19ec662af5e02d288809e4721');  ?>

<?php echo isset($this->vars['CPL_MENU_OUTPUT']) ? $this->vars['CPL_MENU_OUTPUT'] : $this->lang('CPL_MENU_OUTPUT'); ?>
<form method="post" name="privmsg_list" action="<?php echo isset($this->vars['S_PRIVMSGS_ACTION']) ? $this->vars['S_PRIVMSGS_ACTION'] : $this->lang('S_PRIVMSGS_ACTION'); ?>">

<script type="text/javascript">
// <![CDATA[
//
// Should really check the browser to stop this whining ...
//
function select_switch(status)
{
	for (i = 0; i < document.privmsg_list.length; i++)
	{
		document.privmsg_list.elements[i].checked = status;
	}
}
// ]]>
</script>

<div class="forumline" style="padding-left:3px;padding-right:3px;margin-top:5px;margin-bottom:5px;">
<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td style="vertical-align:top;width:190px;" width="190">
		<?php

$switch_box_size_notice_count = ( isset($this->_tpldata['switch_box_size_notice.']) ) ? sizeof($this->_tpldata['switch_box_size_notice.']) : 0;
for ($switch_box_size_notice_i = 0; $switch_box_size_notice_i < $switch_box_size_notice_count; $switch_box_size_notice_i++)
{
 $switch_box_size_notice_item = &$this->_tpldata['switch_box_size_notice.'][$switch_box_size_notice_i];
 $switch_box_size_notice_item['S_ROW_COUNT'] = $switch_box_size_notice_i;
 $switch_box_size_notice_item['S_NUM_ROWS'] = $switch_box_size_notice_count;

?>
		<table class="forumline" width="100%" cellspacing="0">
		<tr><th colspan="3"><span class="gensmall"><?php echo isset($this->vars['BOX_SIZE_STATUS']) ? $this->vars['BOX_SIZE_STATUS'] : $this->lang('BOX_SIZE_STATUS'); ?></span></th></tr>
		<tr>
			<td colspan="3" class="row1" nowrap="nowrap"><img src="<?php echo isset($this->vars['BAR_GRAPHIC_LEFT']) ? $this->vars['BAR_GRAPHIC_LEFT'] : $this->lang('BAR_GRAPHIC_LEFT'); ?>" width="4" height="12" alt="" /><img src="<?php echo isset($this->vars['BAR_GRAPHIC_BODY']) ? $this->vars['BAR_GRAPHIC_BODY'] : $this->lang('BAR_GRAPHIC_BODY'); ?>" width="<?php echo isset($this->vars['INBOX_LIMIT_IMG_WIDTH']) ? $this->vars['INBOX_LIMIT_IMG_WIDTH'] : $this->lang('INBOX_LIMIT_IMG_WIDTH'); ?>" height="12" alt="<?php echo isset($this->vars['INBOX_LIMIT_PERCENT']) ? $this->vars['INBOX_LIMIT_PERCENT'] : $this->lang('INBOX_LIMIT_PERCENT'); ?>%" title="<?php echo isset($this->vars['INBOX_LIMIT_PERCENT']) ? $this->vars['INBOX_LIMIT_PERCENT'] : $this->lang('INBOX_LIMIT_PERCENT'); ?>%" /><img src="<?php echo isset($this->vars['BAR_GRAPHIC_RIGHT']) ? $this->vars['BAR_GRAPHIC_RIGHT'] : $this->lang('BAR_GRAPHIC_RIGHT'); ?>" width="4" height="12" alt="" /></td>
		</tr>
		<tr>
			<td width="33%" class="row3"><span class="gensmall"><span class="text_green">0%</span></span></td>
			<td width="34%" class="row3 row-center"><span class="gensmall"><span class="text_blue">50%</span></span></td>
			<td width="33%" class="row3 row-right"><span class="gensmall"><span class="text_red">100%</span></span></td>
		</tr>
		</table>
		<?php

} // END switch_box_size_notice

if(isset($switch_box_size_notice_item)) { unset($switch_box_size_notice_item); } 

?>
	</td>
	<td align="center" style="vertical-align:top;">
		<div class="forumline" style="margin-left:10px;margin-right:10px">
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td width="25%" align="center"><?php echo isset($this->vars['INBOX_IMG']) ? $this->vars['INBOX_IMG'] : $this->lang('INBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['INBOX']) ? $this->vars['INBOX'] : $this->lang('INBOX'); ?></span></b></td>
			<td width="25%" align="center"><?php echo isset($this->vars['SENTBOX_IMG']) ? $this->vars['SENTBOX_IMG'] : $this->lang('SENTBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['SENTBOX']) ? $this->vars['SENTBOX'] : $this->lang('SENTBOX'); ?></span></b></td>
			<td width="25%" align="center"><?php echo isset($this->vars['OUTBOX_IMG']) ? $this->vars['OUTBOX_IMG'] : $this->lang('OUTBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['OUTBOX']) ? $this->vars['OUTBOX'] : $this->lang('OUTBOX'); ?></span></b></td>
			<td width="25%" align="center"><?php echo isset($this->vars['SAVEBOX_IMG']) ? $this->vars['SAVEBOX_IMG'] : $this->lang('SAVEBOX_IMG'); ?><br /><b><span class="topiclink"><?php echo isset($this->vars['SAVEBOX']) ? $this->vars['SAVEBOX'] : $this->lang('SAVEBOX'); ?></span></b></td>
		</tr>
		</table>
		</div>
	</td>
	<td style="vertical-align:top;width:190px;" width="190">
		<?php

$switch_box_size_notice_count = ( isset($this->_tpldata['switch_box_size_notice.']) ) ? sizeof($this->_tpldata['switch_box_size_notice.']) : 0;
for ($switch_box_size_notice_i = 0; $switch_box_size_notice_i < $switch_box_size_notice_count; $switch_box_size_notice_i++)
{
 $switch_box_size_notice_item = &$this->_tpldata['switch_box_size_notice.'][$switch_box_size_notice_i];
 $switch_box_size_notice_item['S_ROW_COUNT'] = $switch_box_size_notice_i;
 $switch_box_size_notice_item['S_NUM_ROWS'] = $switch_box_size_notice_count;

?>
		<table class="forumline" width="100%" cellspacing="0">
		<tr><th colspan="3"><span class="gensmall"><?php echo isset($this->vars['ATTACH_BOX_SIZE_STATUS']) ? $this->vars['ATTACH_BOX_SIZE_STATUS'] : $this->lang('ATTACH_BOX_SIZE_STATUS'); ?></span></th></tr>
		<tr>
			<td colspan="3" width="190" class="row1" nowrap="nowrap"><img src="<?php echo isset($this->vars['BAR_GRAPHIC_LEFT']) ? $this->vars['BAR_GRAPHIC_LEFT'] : $this->lang('BAR_GRAPHIC_LEFT'); ?>" width="4" height="12" alt="" /><img src="<?php echo isset($this->vars['BAR_GRAPHIC_BODY']) ? $this->vars['BAR_GRAPHIC_BODY'] : $this->lang('BAR_GRAPHIC_BODY'); ?>" width="<?php echo isset($this->vars['ATTACHBOX_LIMIT_IMG_WIDTH']) ? $this->vars['ATTACHBOX_LIMIT_IMG_WIDTH'] : $this->lang('ATTACHBOX_LIMIT_IMG_WIDTH'); ?>" height="12" alt="<?php echo isset($this->vars['INBOX_LIMIT_PERCENT']) ? $this->vars['INBOX_LIMIT_PERCENT'] : $this->lang('INBOX_LIMIT_PERCENT'); ?>" /><img src="<?php echo isset($this->vars['BAR_GRAPHIC_RIGHT']) ? $this->vars['BAR_GRAPHIC_RIGHT'] : $this->lang('BAR_GRAPHIC_RIGHT'); ?>" width="4" height="12" alt="" /></td>
		</tr>
		<tr>
			<td width="33%" class="row3"><span class="gensmall"><span class="text_green">0%</span></span></td>
			<td width="34%" class="row3 row-center"><span class="gensmall"><span class="text_blue">50%</span></span></td>
			<td width="33%" class="row3 row-right"><span class="gensmall"><span class="text_red">100%</span></span></td>
		</tr>
		</table>
		<?php

} // END switch_box_size_notice

if(isset($switch_box_size_notice_item)) { unset($switch_box_size_notice_item); } 

?>
	</td>
</tr>
</table>
</div>

<div style="text-align: left;"><span class="img-btn"><?php echo isset($this->vars['POST_PM_IMG']) ? $this->vars['POST_PM_IMG'] : $this->lang('POST_PM_IMG'); ?></span></div>

<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['BOX_NAME']) ? $this->vars['BOX_NAME'] : $this->lang('BOX_NAME'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr>
	<th width="25">&nbsp;</th>
	<th width="60%"><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?></th>
	<th width="20%"><?php echo isset($this->vars['L_FROM_OR_TO']) ? $this->vars['L_FROM_OR_TO'] : $this->lang('L_FROM_OR_TO'); ?></th>
	<th width="15%"><?php echo isset($this->vars['L_DATE']) ? $this->vars['L_DATE'] : $this->lang('L_DATE'); ?></th>
	<th width="5%"><?php echo isset($this->vars['L_MARK']) ? $this->vars['L_MARK'] : $this->lang('L_MARK'); ?></th>
</tr>
<?php

$listrow_count = ( isset($this->_tpldata['listrow.']) ) ? sizeof($this->_tpldata['listrow.']) : 0;
for ($listrow_i = 0; $listrow_i < $listrow_count; $listrow_i++)
{
 $listrow_item = &$this->_tpldata['listrow.'][$listrow_i];
 $listrow_item['S_ROW_COUNT'] = $listrow_i;
 $listrow_item['S_NUM_ROWS'] = $listrow_count;

?>
<tr>
	<td class="row1 row-center" style="padding-right:3px;"><img src="<?php echo isset($listrow_item['PRIVMSG_FOLDER_IMG']) ? $listrow_item['PRIVMSG_FOLDER_IMG'] : ''; ?>" alt="<?php echo isset($listrow_item['L_PRIVMSG_FOLDER_ALT']) ? $listrow_item['L_PRIVMSG_FOLDER_ALT'] : ''; ?>" title="<?php echo isset($listrow_item['L_PRIVMSG_FOLDER_ALT']) ? $listrow_item['L_PRIVMSG_FOLDER_ALT'] : ''; ?>" /></td>
	<td class="row1h row-forum" onclick="window.location.href='<?php echo isset($listrow_item['U_READ']) ? $listrow_item['U_READ'] : ''; ?>'" valign="middle"><?php echo isset($listrow_item['PRIVMSG_ATTACHMENTS_IMG']) ? $listrow_item['PRIVMSG_ATTACHMENTS_IMG'] : ''; ?><span class="topiclink"><a href="<?php echo isset($listrow_item['U_READ']) ? $listrow_item['U_READ'] : ''; ?>" class="topiclink"><?php echo isset($listrow_item['SUBJECT']) ? $listrow_item['SUBJECT'] : ''; ?></a></span></td>
	<td class="row2 row-center"><?php echo isset($listrow_item['FROM']) ? $listrow_item['FROM'] : ''; ?></td>
	<td class="row2 row-center-small"><?php echo isset($listrow_item['DATE']) ? $listrow_item['DATE'] : ''; ?></td>
	<td class="row3 row-center"><input type="checkbox" name="mark[]2" value="<?php echo isset($listrow_item['S_MARK_ID']) ? $listrow_item['S_MARK_ID'] : ''; ?>" /></td>
</tr>
<?php

} // END listrow

if(isset($listrow_item)) { unset($listrow_item); } 

?>
<?php

$switch_no_messages_count = ( isset($this->_tpldata['switch_no_messages.']) ) ? sizeof($this->_tpldata['switch_no_messages.']) : 0;
for ($switch_no_messages_i = 0; $switch_no_messages_i < $switch_no_messages_count; $switch_no_messages_i++)
{
 $switch_no_messages_item = &$this->_tpldata['switch_no_messages.'][$switch_no_messages_i];
 $switch_no_messages_item['S_ROW_COUNT'] = $switch_no_messages_i;
 $switch_no_messages_item['S_NUM_ROWS'] = $switch_no_messages_count;

?>
<tr><td class="row1 row-center" colspan="5"><?php echo isset($this->vars['L_NO_MESSAGES']) ? $this->vars['L_NO_MESSAGES'] : $this->lang('L_NO_MESSAGES'); ?></td></tr>
<?php

} // END switch_no_messages

if(isset($switch_no_messages_item)) { unset($switch_no_messages_item); } 

?>
<tr>
	<td class="cat" colspan="5">
		<table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
		<!--
			<td nowrap="nowrap" align="left" valign="middle"><span class="gensmall">&nbsp;<?php echo isset($this->vars['L_DISPLAY_MESSAGES']) ? $this->vars['L_DISPLAY_MESSAGES'] : $this->lang('L_DISPLAY_MESSAGES'); ?>:&nbsp;</span></td>
			<td nowrap="nowrap"><select name="msgdays"><?php echo isset($this->vars['S_SELECT_MSG_DAYS']) ? $this->vars['S_SELECT_MSG_DAYS'] : $this->lang('S_SELECT_MSG_DAYS'); ?></select> <input type="submit" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" name="submit_msgdays" class="liteoption jumpbox" /></td>
		-->
			<td width="100%" align="center" nowrap="nowrap">
				<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
				<input type="submit" name="save" value="<?php echo isset($this->vars['L_SAVE_MARKED']) ? $this->vars['L_SAVE_MARKED'] : $this->lang('L_SAVE_MARKED'); ?>" class="mainoption" style="padding-left: 2px; padding-right: 2px;" />
				&nbsp;
				<input type="submit" name="download" value="<?php echo isset($this->vars['L_DOWNLOAD_MARKED']) ? $this->vars['L_DOWNLOAD_MARKED'] : $this->lang('L_DOWNLOAD_MARKED'); ?>" class="altoption" />
				&nbsp;
				<input type="submit" name="delete" value="<?php echo isset($this->vars['L_DELETE_MARKED']) ? $this->vars['L_DELETE_MARKED'] : $this->lang('L_DELETE_MARKED'); ?>" class="liteoption" style="padding-left: 2px; padding-right: 2px;" />
				&nbsp;
				<input type="submit" name="deleteall" value="<?php echo isset($this->vars['L_DELETE_ALL']) ? $this->vars['L_DELETE_ALL'] : $this->lang('L_DELETE_ALL'); ?>" class="liteoption" style="padding-left: 2px; padding-right: 2px;" />
			</td>
		</tr>
		</table>
	</td>
</tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
<br />

<table width="100%" cellspacing="0" border="0" align="center" cellpadding="0">
<tr>
	<td align="left" valign="top"><span class="img-btn"><?php echo isset($this->vars['POST_PM_IMG']) ? $this->vars['POST_PM_IMG'] : $this->lang('POST_PM_IMG'); ?></span></td>
	<td align="right" valign="top" width="70%" nowrap="nowrap"><span class="gensmall"><?php if ($this->vars['PAGE_NUMBER']) {  ?><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?><?php } else { ?>&nbsp;<?php } ?></span><br /><div class="pagination"><?php if ($this->vars['PAGINATION']) {  ?><?php echo isset($this->vars['PAGINATION']) ? $this->vars['PAGINATION'] : $this->lang('PAGINATION'); ?><?php } else { ?>&nbsp;<?php } ?></div></td>
</tr>
</table>
</form>

<div align="right"><?php echo isset($this->vars['JUMPBOX']) ? $this->vars['JUMPBOX'] : $this->lang('JUMPBOX'); ?></div>
	</td>
	</tr>
</table>

<?php  $this->set_filename('xs_include_3dd63a4745f97ad09d73a401384614a7', 'overall_footer.tpl', true);  $this->pparse('xs_include_3dd63a4745f97ad09d73a401384614a7');  ?>