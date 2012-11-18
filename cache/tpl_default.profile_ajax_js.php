<?php

// eXtreme Styles mod cache. Generated on Sun, 18 Nov 2012 20:22:01 +0000 (time = 1353270121)

if (!defined('IN_ICYPHOENIX')) exit;

?><script type="text/javascript">
// <![CDATA[

function verifyUsername(username)
{
	if (username != '')
	{
		if (username.length < 2)
		{
			writediv('pseudobox', '<span class="gensmall" style="color: #dd3333;"><strong>' + username + ' :<\/strong><?php echo isset($this->vars['L_UN_SHORT']) ? $this->vars['L_UN_SHORT'] : $this->lang('L_UN_SHORT'); ?><\/span>');
		}
		else if (username.length > 36)
		{
			writediv('pseudobox', '<span class="gensmall" style="color: #dd3333;"><strong>' + username + ' :<\/strong><?php echo isset($this->vars['L_UN_LONG']) ? $this->vars['L_UN_LONG'] : $this->lang('L_UN_LONG'); ?><\/span>');
		}
		else if (dest_string = file_request('<?php echo isset($this->vars['U_AJAX_VERIFY']) ? $this->vars['U_AJAX_VERIFY'] : $this->lang('U_AJAX_VERIFY'); ?>?mode=username&verify=' + escape(username)))
		{
			if (dest_string == 1)
			{
				writediv('pseudobox', '<span class="gensmall" style="color: #dd3333;"><strong>' + username + ' :<\/strong><?php echo isset($this->vars['L_UN_TAKEN']) ? $this->vars['L_UN_TAKEN'] : $this->lang('L_UN_TAKEN'); ?><\/span>');
			}
			else if (dest_string == 2)
			{
				writediv('pseudobox', '<span class="gensmall" style="color: #228822;"><strong>' + username + ' :<\/strong><?php echo isset($this->vars['L_UN_FREE']) ? $this->vars['L_UN_FREE'] : $this->lang('L_UN_FREE'); ?><\/span>');
			}
			else
			{
				writediv('pseudobox', dest_string);
			}
		}
	}
}

function verifyPWD(password)
{
	if (password != '')
	{
		if (password.length < 2)
		{
			writediv('pwdbox', '<span class="gensmall" style="color: #dd3333;"><strong>' + password + ' :<\/strong><?php echo isset($this->vars['L_PWD_SHORT']) ? $this->vars['L_PWD_SHORT'] : $this->lang('L_PWD_SHORT'); ?><\/span>');
		}
		else if (dest_string = file_request('<?php echo isset($this->vars['U_AJAX_VERIFY']) ? $this->vars['U_AJAX_VERIFY'] : $this->lang('U_AJAX_VERIFY'); ?>?mode=password&verify=' + escape(password)))
		{
			if (dest_string == 1)
			{
				writediv('pwdbox', '<span class="gensmall" style="color: #dd3333;"><strong>' + password + ' :<\/strong><?php echo isset($this->vars['L_PWD_EASY']) ? $this->vars['L_PWD_EASY'] : $this->lang('L_PWD_EASY'); ?><\/span>');
			}
			else if (dest_string == 2)
			{
				writediv('pwdbox', '<span class="gensmall" style="color: #228822;"><strong>' + password + ' :<\/strong><?php echo isset($this->vars['L_PWD_OK']) ? $this->vars['L_PWD_OK'] : $this->lang('L_PWD_OK'); ?><\/span>');
			}
			else
			{
				writediv('pwdbox', dest_string);
			}
		}
	}
}

function verifyEmail(emailaddress)
{
	if (emailaddress != '')
	{
		if (emailaddress.length < 2)
		{
			writediv('emailbox', '<span class="gensmall" style="color: #dd3333;"><strong>' + emailaddress + ' :<\/strong><?php echo isset($this->vars['L_EMAIL_INVALID']) ? $this->vars['L_EMAIL_INVALID'] : $this->lang('L_EMAIL_INVALID'); ?><\/span>');
		}
		else if (dest_string = file_request('<?php echo isset($this->vars['U_AJAX_VERIFY']) ? $this->vars['U_AJAX_VERIFY'] : $this->lang('U_AJAX_VERIFY'); ?>?mode=email&verify=' + escape(emailaddress)))
		{
			if (dest_string == 1)
			{
				writediv('emailbox', '<span class="gensmall" style="color: #dd3333;"><strong>' + emailaddress + ' :<\/strong><?php echo isset($this->vars['L_EMAIL_INVALID']) ? $this->vars['L_EMAIL_INVALID'] : $this->lang('L_EMAIL_INVALID'); ?><\/span>');
			}
			else if (dest_string == 2)
			{
				writediv('emailbox', '<span class="gensmall" style="color: #228822;"><strong>' + emailaddress + ' :<\/strong><?php echo isset($this->vars['L_EMAIL_OK']) ? $this->vars['L_EMAIL_OK'] : $this->lang('L_EMAIL_OK'); ?><\/span>');
			}
			else
			{
				writediv('emailbox', dest_string);
			}
		}
	}
}

// ]]>
</script>
