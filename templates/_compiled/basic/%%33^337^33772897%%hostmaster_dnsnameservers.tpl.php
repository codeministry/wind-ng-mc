<?php /* Smarty version 2.6.19, created on 2013-11-12 18:31:44
         compiled from includes/pages/hostmaster/hostmaster_dnsnameservers.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['hostmaster_panel'])." > ".($this->_tpl_vars['lang']['dns_nameservers']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['dns_nameservers_search']),'content' => $this->_tpl_vars['form_search_nameservers'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['dns_nameservers_found']),'content' => $this->_tpl_vars['table_nameservers'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>