<?php /* Smarty version 2.6.19, created on 2012-02-12 13:14:07
         compiled from includes/pages/admin/admin_services_service.tpl */ ?>
<?php $this->assign('t', "services_categories_".($this->_tpl_vars['services_method'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang'][$this->_tpl_vars['t']]))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang'][$this->_tpl_vars['t']]),'content' => $this->_tpl_vars['form_services'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>