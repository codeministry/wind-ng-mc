<?php /* Smarty version 2.6.19, created on 2012-01-08 16:34:12
         compiled from includes/pages/nodes/nodes_view_table_links_ap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'includes/pages/nodes/nodes_view_table_links_ap.tpl', 24, false),array('modifier', 'escape', 'includes/pages/nodes/nodes_view_table_links_ap.tpl', 24, false),array('modifier', 'date_format', 'includes/pages/nodes/nodes_view_table_links_ap.tpl', 45, false),array('modifier', 'nl2br', 'includes/pages/nodes/nodes_view_table_links_ap.tpl', 61, false),)), $this); ?>
<table border="0" cellspacing="0" cellpadding="0" class="table-d1">
<tr>
<td rowspan="2" class="table-d1-side">&nbsp;</td>
<td class="table-d1-title-text" ><?php $this->assign('t', ((is_array($_tmp="links__type-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data']['1']['links__type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data']['1']['links__type']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
 [ <?php echo ((is_array($_tmp=$this->_tpl_vars['data']['1']['links__ssid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 ]</td>
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
	<td class="table-node-value2"><?php $this->assign('t', ((is_array($_tmp="links__type-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data']['1']['links__type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data']['1']['links__type']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__status']; ?>
</td>
	<td class="<?php if ($this->_tpl_vars['data']['1']['links__status'] == 'active'): ?>link-up<?php else: ?>link-down<?php endif; ?>"><?php $this->assign('t', ((is_array($_tmp="links__status-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data']['1']['links__status']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data']['1']['links__status']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__date_in']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['1']['links__date_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%x") : smarty_modifier_date_format($_tmp, "%x")); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__protocol']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['1']['links__protocol'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__ssid']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['1']['links__ssid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__channel']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['1']['links__channel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
	<td class="table-node-key2"><?php echo $this->_tpl_vars['lang']['db']['links__equipment']; ?>
</td>
	<td class="table-node-value2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['1']['links__equipment'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr>
</table>
		</td>
		<td class="table-node-link-info" width="33%">
		<table class="table-form">
		<tr><td colspan="2" class="table-node-key2"><?php echo $this->_tpl_vars['lang']['clients']; ?>
</td></tr>
		<?php if ($this->_tpl_vars['data']['1']['c_node_id'] != ''): ?>
			<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['start'] = (int)1;
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
if ($this->_sections['c']['start'] < 0)
    $this->_sections['c']['start'] = max($this->_sections['c']['step'] > 0 ? 0 : -1, $this->_sections['c']['loop'] + $this->_sections['c']['start']);
else
    $this->_sections['c']['start'] = min($this->_sections['c']['start'], $this->_sections['c']['step'] > 0 ? $this->_sections['c']['loop'] : $this->_sections['c']['loop']-1);
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = min(ceil(($this->_sections['c']['step'] > 0 ? $this->_sections['c']['loop'] - $this->_sections['c']['start'] : $this->_sections['c']['start']+1)/abs($this->_sections['c']['step'])), $this->_sections['c']['max']);
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
				<tr><td class="table-node-value2"><a href="<?php echo $this->_tpl_vars['extra_data']['EDIT'][$this->_sections['c']['index']]; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['c']['index']]['c_node_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['data'][$this->_sections['c']['index']]['c_node_id']; ?>
)</a></td><td class="<?php if ($this->_tpl_vars['data'][$this->_sections['c']['index']]['c_status'] == 'active'): ?>link-up<?php else: ?>link-down<?php endif; ?>"><?php $this->assign('t', ((is_array($_tmp="links__status-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data'][$this->_sections['c']['index']]['c_status']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data'][$this->_sections['c']['index']]['c_status']))); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]; ?>
</td></tr>
			<?php endfor; endif; ?>
		<?php endif; ?>
		</table>
		</td>
		<td class="table-node-link-info" width="33%" height="100%">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title4.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['db']['links__info']),'content' => ((is_array($_tmp=((is_array($_tmp=($this->_tpl_vars['data']['1']['links__info']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
		</tr>
		</table>
</td>
</tr>
</table>