<?php /* Smarty version 2.6.19, created on 2012-01-08 15:46:03
         compiled from generic/photosview_image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'generic/photosview_image.tpl', 23, false),)), $this); ?>
<div align="center">
<?php if ($this->_tpl_vars['image']['image'] != ''): ?>
<a  href="<?php echo $this->_tpl_vars['image']['image']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['image']['image_s']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['image']['info'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a>
<?php else: ?>
<img src="" alt="" width="200" height="200" />
<?php endif; ?>
</div>