<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 20:33:05 +0000 (time = 1353270785)

if (!defined('IN_ICYPHOENIX')) exit;

?><table class="empty-table" width="100%" cellspacing="0" cellpadding="0" border="0"><?php if ($this->vars['S_POLL_EXISTS']) {  ?><?php echo isset($this->vars['POLL_DISPLAY']) ? $this->vars['POLL_DISPLAY'] : $this->lang('POLL_DISPLAY'); ?><?php } else { ?><tr><td class="row2 row-center"><br /><br /><?php echo isset($this->vars['L_NO_POLLS']) ? $this->vars['L_NO_POLLS'] : $this->lang('L_NO_POLLS'); ?><br /><br /></td></tr><?php } ?></table>
