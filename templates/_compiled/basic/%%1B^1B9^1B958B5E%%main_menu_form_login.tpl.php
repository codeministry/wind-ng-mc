<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:16
         compiled from includes/main_menu_form_login.tpl */ ?>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post" action="?">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-quick-login">
<tr>
<td nowrap="nowrap" class="quick-login-title"><?php echo $this->_tpl_vars['lang']['login']; ?>
 |</td>
<?php $this->assign('fullField', $this->_tpl_vars['data'][0]['fullField']); ?>
<td nowrap="nowrap" class="quick-login-field"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
:
<input name="<?php echo $this->_tpl_vars['fullField']; ?>
" type="text" class="fld-quick-login" /></td>
<?php $this->assign('fullField', $this->_tpl_vars['data'][1]['fullField']); ?>
<td nowrap="nowrap" class="quick-login-field"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
:
<input name="<?php echo $this->_tpl_vars['fullField']; ?>
" type="password" class="fld-quick-login" />
</td>
<td nowrap="nowrap" class="quick-login-field"><input type="checkbox" name="save_login" value="Y" /></td>
<td width="373" class="quick-login-submit">
<input type="image" src="templates/basic/images/submit1.png" /></td>
</tr>
</table>
</form>