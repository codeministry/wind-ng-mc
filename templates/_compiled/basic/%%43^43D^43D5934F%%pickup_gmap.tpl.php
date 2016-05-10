<?php /* Smarty version 2.6.19, created on 2012-01-08 13:39:18
         compiled from includes/pages/pickup/pickup_gmap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wordwrap', 'includes/pages/pickup/pickup_gmap.tpl', 28, false),array('modifier', 'nl2br', 'includes/pages/pickup/pickup_gmap.tpl', 28, false),)), $this); ?>
<table class="table-main" cellpadding="0" cellspacing="0"><tr><td>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['find_coordinates']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td></tr><tr style="height: 100%"><td>
<table class="table-main" cellpadding="0" cellspacing="0"><tr><td style="font-size:12px; text-align:center; width: 100%; height: 100%">
<?php if ($this->_tpl_vars['gmap_key_ok']): ?>
<div id="map" style="width: 100%; height: 100%"></div>
<?php else: ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['message']['error']['gmap_key_failed']['body'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 40) : smarty_modifier_wordwrap($_tmp, 40)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<?php endif; ?>
</td></tr>
</table>
</td></tr>
</table>