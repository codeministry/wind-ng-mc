<?php /* Smarty version 2.6.19, created on 2012-01-08 15:48:54
         compiled from includes/pages/mynodes/mynodes_link.tpl */ ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/help.tpl", 'smarty_include_vars' => array('help' => "mynodes_link_".($this->_tpl_vars['link_method']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('help', ob_get_contents()); ob_end_clean();
 ?>
<?php $this->assign('t', "link_".($this->_tpl_vars['link_method'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang'][$this->_tpl_vars['t']]),'right' => ($this->_tpl_vars['help']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td class="table-page-pad">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang'][$this->_tpl_vars['t']]),'content' => $this->_tpl_vars['form_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>