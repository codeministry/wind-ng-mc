<?php /* Smarty version 2.6.19, created on 2012-01-08 13:12:22
         compiled from includes/pages/ranges/ranges_allocation.tpl */ ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/help.tpl", 'smarty_include_vars' => array('help' => 'ranges_allocation')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('help', ob_get_contents()); ob_end_clean();
 ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_ranges_search'],'content' => ($this->_tpl_vars['lang']['ip_ranges_search']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('t1', ob_get_contents()); ob_end_clean();
 ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_ranges_allocation'],'content' => ($this->_tpl_vars['lang']['ip_ranges_allocation']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('t2', ob_get_contents()); ob_end_clean();
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['all_ranges'])." ".($this->_tpl_vars['t1'])." ".($this->_tpl_vars['t2']),'right' => ($this->_tpl_vars['help']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['ip_ranges_allocation']),'content' => $this->_tpl_vars['table_areas'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>