<?php /* Smarty version 2.6.19, created on 2012-01-08 16:32:06
         compiled from includes/pages/hostmaster/hostmaster_range.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['ip_range_edit']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['delete']),'link' => $this->_tpl_vars['link_range_delete'],'confirm' => 'TRUE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('range_delete', ob_get_contents()); ob_end_clean();
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['ip_range_edit']),'right' => ($this->_tpl_vars['range_delete']),'content' => $this->_tpl_vars['form_range'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['node_info']),'content' => $this->_tpl_vars['table_node_info'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['users_info']),'content' => $this->_tpl_vars['table_user_info'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['links']),'content' => $this->_tpl_vars['table_links'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['ip_ranges']),'content' => $this->_tpl_vars['table_ip_ranges'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>