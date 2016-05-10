<?php /* Smarty version 2.6.19, created on 2012-01-08 12:41:14
         compiled from constructors/message.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'constructors/message.tpl', 21, false),array('modifier', 'nl2br', 'constructors/message.tpl', 24, false),)), $this); ?>
<?php if ($this->_tpl_vars['image'] != ''): ?><?php echo smarty_function_html_image(array('file' => $this->_tpl_vars['image']), $this);?>
<?php endif; ?>
<?php if ($this->_tpl_vars['forward'] != ''): ?><?php $this->assign('f', "<br /><br /><div align=\"center\"><a href=\"".($this->_tpl_vars['forward'])."\">".($this->_tpl_vars['forward_text'])."</a></div>"); ?><?php endif; ?>
<table width="400" align="center">
<tr><td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['title'],'content' => ((is_array($_tmp=($this->_tpl_vars['message'])." ".($this->_tpl_vars['f']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
</table>