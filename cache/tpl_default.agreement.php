<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 20:30:07 +0000 (time = 1353270607)

if (!defined('IN_ICYPHOENIX')) exit;

?><?php echo isset($this->vars['ERROR_BOX']) ? $this->vars['ERROR_BOX'] : $this->lang('ERROR_BOX'); ?>
<form method="post" action="<?php echo isset($this->vars['S_LANG_CHANGE_ACTION']) ? $this->vars['S_LANG_CHANGE_ACTION'] : $this->lang('S_LANG_CHANGE_ACTION'); ?>"><div style="text-align: left;"><?php echo isset($this->vars['L_SELECT_LANG']) ? $this->vars['L_SELECT_LANG'] : $this->lang('L_SELECT_LANG'); ?>:&nbsp;<?php echo isset($this->vars['LANGUAGE_SELECT']) ? $this->vars['LANGUAGE_SELECT'] : $this->lang('LANGUAGE_SELECT'); ?>&nbsp;&nbsp;<input type="submit" name="lang_change" value="<?php echo isset($this->vars['L_GO']) ? $this->vars['L_GO'] : $this->lang('L_GO'); ?>" class="mainoption" /></div></form>

<form method="post" action="<?php echo isset($this->vars['S_AGREE_ACTION']) ? $this->vars['S_AGREE_ACTION'] : $this->lang('S_AGREE_ACTION'); ?>">
<?php echo isset($this->vars['IMG_THL']) ? $this->vars['IMG_THL'] : $this->lang('IMG_THL'); ?><?php echo isset($this->vars['IMG_THC']) ? $this->vars['IMG_THC'] : $this->lang('IMG_THC'); ?><span class="forumlink"><?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?> - <?php echo isset($this->vars['REGISTRATION']) ? $this->vars['REGISTRATION'] : $this->lang('REGISTRATION'); ?></span><?php echo isset($this->vars['IMG_THR']) ? $this->vars['IMG_THR'] : $this->lang('IMG_THR'); ?><table class="forumlinenb" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="row1"><div class="post-text"><?php echo isset($this->vars['AGREEMENT']) ? $this->vars['AGREEMENT'] : $this->lang('AGREEMENT'); ?></div><br clear="all" /><br /><br /></td></tr>
<tr><td class="row1"><div class="post-text"><b><?php echo isset($this->vars['L_PRIVACY_DISCLAIMER']) ? $this->vars['L_PRIVACY_DISCLAIMER'] : $this->lang('L_PRIVACY_DISCLAIMER'); ?></b></div><br clear="all" /><br /><label>&nbsp;<input type="checkbox" name="privacy" />&nbsp;<i><?php echo isset($this->vars['AGREE_CHECKBOX']) ? $this->vars['AGREE_CHECKBOX'] : $this->lang('AGREE_CHECKBOX'); ?></i></label><br clear="all" /><br /></td></tr>
<tr><td class="cat"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?><input type="submit" name="not_agreed" value="<?php echo isset($this->vars['DO_NOT_AGREE']) ? $this->vars['DO_NOT_AGREE'] : $this->lang('DO_NOT_AGREE'); ?>" class="liteoption" /><input type="submit" name="agreed" value="<?php echo isset($this->vars['AGREE_OVER_13']) ? $this->vars['AGREE_OVER_13'] : $this->lang('AGREE_OVER_13'); ?>" class="mainoption" /></td></tr>
</table><?php echo isset($this->vars['IMG_TFL']) ? $this->vars['IMG_TFL'] : $this->lang('IMG_TFL'); ?><?php echo isset($this->vars['IMG_TFC']) ? $this->vars['IMG_TFC'] : $this->lang('IMG_TFC'); ?><?php echo isset($this->vars['IMG_TFR']) ? $this->vars['IMG_TFR'] : $this->lang('IMG_TFR'); ?>
</form>
