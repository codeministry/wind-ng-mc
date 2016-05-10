<?php /* Smarty version 2.6.19, created on 2012-02-12 12:36:21
         compiled from includes/pages/nodes/link_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/nodes/link_info.tpl', 25, false),array('modifier', 'cat', 'includes/pages/nodes/link_info.tpl', 38, false),array('modifier', 'date_format', 'includes/pages/nodes/link_info.tpl', 46, false),array('modifier', 'nl2br', 'includes/pages/nodes/link_info.tpl', 66, false),)), $this); ?>
<!-- start link_info_tpl -->
<table border="0" cellspacing="0" cellpadding="0" class="table-d1">
<tr>
<td rowspan="2" class="table-d1-side">&nbsp;</td>
<td class="table-d1-title-text" ><a href="<?php echo $this->_tpl_vars['extra_data']['EDIT'][$this->_sections['rowl']['index']]; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['peer_node_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__peer_node_id']; ?>
)</a></td>
<td rowspan="2" class="table-d1-side2">&nbsp;</td>
</tr>
<tr>
<td class="table-d1-text1">
		<table border="0" cellpadding="0" cellspacing="6" class="table-form">
		<tr class="table-form-row1">
		<td class="table-node-link-info"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
node.gif" width="32" height="32" alt="<?php echo $this->_tpl_vars['lang']['db']['peer']; ?>
" /></td>
		<td class="table-node-link-info" width="33%">

<table class="table-form">
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__type']; ?>
</td>
	<td class="table-node-value2"><?php $this->assign('t', ((is_array($_tmp="links__type-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__type']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__status']; ?>
</td>
	<td class="<?php if ($this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__status'] == 'active'): ?>link-up<?php else: ?>link-down<?php endif; ?>"><?php $this->assign('t', ((is_array($_tmp="links__status-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__status']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__status']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__date_in']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__date_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%x") : smarty_modifier_date_format($_tmp, "%x")); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__protocol']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__protocol'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__security']; ?>
</td>
	<td class="<?php if ($this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__security'] == 'sec_active'): ?>link-up<?php else: ?>link-down<?php endif; ?>"><?php $this->assign('t', ((is_array($_tmp="links__security-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__security']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__security']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__ssid']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__ssid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__channel']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__channel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__equipment']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__equipment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__ip']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__ip'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
</table>
		</td>
		<td class="table-node-link-info" width="33%"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/plot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		<td class="table-node-link-info" width="33%" height="100%">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title4.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['db']['links__info']),'content' => ((is_array($_tmp=((is_array($_tmp=($this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__info']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
		</tr>
		</table>
</td>
</tr>
</table><!-- end link_info_tpl -->