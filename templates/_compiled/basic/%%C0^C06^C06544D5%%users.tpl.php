<?php /* Smarty version 2.6.19, created on 2012-01-08 13:00:04
         compiled from includes/pages/users/users.tpl */ ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/help.tpl", 'smarty_include_vars' => array('help' => "users_".($this->_tpl_vars['user_method']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('help', ob_get_contents()); ob_end_clean();
 ?>
<?php $this->assign('t', "user_".($this->_tpl_vars['user_method'])); ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang'][$this->_tpl_vars['t']]),'right' => ($this->_tpl_vars['help']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php if ($this->_tpl_vars['link_user_delete']): ?><?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['delete']),'link' => $this->_tpl_vars['link_user_delete'],'confirm' => 'TRUE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('user_delete', ob_get_contents()); ob_end_clean();
 ?><?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['user_info']),'right' => ($this->_tpl_vars['user_delete']),'content' => $this->_tpl_vars['form_user'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>