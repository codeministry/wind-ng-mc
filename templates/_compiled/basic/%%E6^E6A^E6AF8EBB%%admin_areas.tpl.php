<?php /* Smarty version 2.6.19, created on 2012-01-08 16:26:17
         compiled from includes/pages/admin/admin_areas.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['admin_panel'])." > ".($this->_tpl_vars['lang']['areas']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_area_add'],'content' => ($this->_tpl_vars['lang']['area_add']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('t1', ob_get_contents()); ob_end_clean();
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['areas'])." ".($this->_tpl_vars['t1']),'content' => $this->_tpl_vars['table_areas'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>