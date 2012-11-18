<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 22:15:28 +0000 (time = 1353276928)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php  $this->set_filename('xs_include_c0c9ab1ad7ae9b38e502522fc5618bb0', 'overall_header.tpl', true);  $this->pparse('xs_include_c0c9ab1ad7ae9b38e502522fc5618bb0');  ?>

<?php
$catrow_count = (isset($this->_tpldata['catrow.'])) ? count($this->_tpldata['catrow.']) : 0;
for($catrow_i = 0; $catrow_i < $catrow_count; $catrow_i++)
{
	$catrow_item = &$this->_tpldata['catrow.'][$catrow_i];
	// check for new messages
	$new_msg = false;
	$forumrow_count = (isset($catrow_item['forumrow.'])) ? count($catrow_item['forumrow.']) : 0;
	for ($forumrow_i = 0; $forumrow_i < $forumrow_count; $forumrow_i++)
	{
		$forumrow_item = &$catrow_item['forumrow.'][$forumrow_i];
		$new_item = strpos($forumrow_item['FORUM_FOLDER_IMG'], '_unread') > 0 ? true : false;
		if($new_item)
		{
			$new_msg = true;
			$forumrow_item['LINK_CLASS'] = '-new';
		}
	}
	// add xs switch
	$catrow_item['LINK_CLASS'] = $new_msg ? '-new' : '';
}

?>
<?php  $this->set_filename('xs_include_00dfbf842b9248ec578694f85f4a0690', 'index_body.tpl', true);  $this->pparse('xs_include_00dfbf842b9248ec578694f85f4a0690');  ?>

<?php  $this->set_filename('xs_include_ec0e354deed60829978e210131ea4c73', 'overall_footer.tpl', true);  $this->pparse('xs_include_ec0e354deed60829978e210131ea4c73');  ?>