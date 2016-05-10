<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:26
         compiled from constructors/form_enum.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'constructors/form_enum.tpl', 21, false),array('modifier', 'escape', 'constructors/form_enum.tpl', 22, false),)), $this); ?>
<?php $this->assign('temp', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fullField'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-") : smarty_modifier_cat($_tmp, "-")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['value']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['value']))); ?>
<?php if ($this->_tpl_vars['lang']['db'][$this->_tpl_vars['temp']] != ''): ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['temp']]; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>