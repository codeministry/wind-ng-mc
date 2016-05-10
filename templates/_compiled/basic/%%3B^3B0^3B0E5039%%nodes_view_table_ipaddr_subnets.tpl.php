<?php /* Smarty version 2.6.19, created on 2012-01-08 15:46:02
         compiled from includes/pages/nodes/nodes_view_table_ipaddr_subnets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'includes/pages/nodes/nodes_view_table_ipaddr_subnets.tpl', 33, false),array('modifier', 'escape', 'includes/pages/nodes/nodes_view_table_ipaddr_subnets.tpl', 37, false),array('modifier', 'truncate', 'includes/pages/nodes/nodes_view_table_ipaddr_subnets.tpl', 75, false),array('modifier', 'date_format', 'includes/pages/nodes/nodes_view_table_ipaddr_subnets.tpl', 76, false),)), $this); ?>
<table class="table-form">
<?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row']['start'] = (int)1;
$this->_sections['row']['show'] = true;
$this->_sections['row']['max'] = $this->_sections['row']['loop'];
$this->_sections['row']['step'] = 1;
if ($this->_sections['row']['start'] < 0)
    $this->_sections['row']['start'] = max($this->_sections['row']['step'] > 0 ? 0 : -1, $this->_sections['row']['loop'] + $this->_sections['row']['start']);
else
    $this->_sections['row']['start'] = min($this->_sections['row']['start'], $this->_sections['row']['step'] > 0 ? $this->_sections['row']['loop'] : $this->_sections['row']['loop']-1);
if ($this->_sections['row']['show']) {
    $this->_sections['row']['total'] = min(ceil(($this->_sections['row']['step'] > 0 ? $this->_sections['row']['loop'] - $this->_sections['row']['start'] : $this->_sections['row']['start']+1)/abs($this->_sections['row']['step'])), $this->_sections['row']['max']);
    if ($this->_sections['row']['total'] == 0)
        $this->_sections['row']['show'] = false;
} else
    $this->_sections['row']['total'] = 0;
if ($this->_sections['row']['show']):

            for ($this->_sections['row']['index'] = $this->_sections['row']['start'], $this->_sections['row']['iteration'] = 1;
                 $this->_sections['row']['iteration'] <= $this->_sections['row']['total'];
                 $this->_sections['row']['index'] += $this->_sections['row']['step'], $this->_sections['row']['iteration']++):
$this->_sections['row']['rownum'] = $this->_sections['row']['iteration'];
$this->_sections['row']['index_prev'] = $this->_sections['row']['index'] - $this->_sections['row']['step'];
$this->_sections['row']['index_next'] = $this->_sections['row']['index'] + $this->_sections['row']['step'];
$this->_sections['row']['first']      = ($this->_sections['row']['iteration'] == 1);
$this->_sections['row']['last']       = ($this->_sections['row']['iteration'] == $this->_sections['row']['total']);
?>
<?php if ($this->_tpl_vars['data'][$this->_sections['row']['index']]['ip_start'] != $this->_tpl_vars['cur']): ?>
	<?php echo $this->_tpl_vars['close2']; ?>
<?php echo $this->_tpl_vars['close1']; ?>

	<?php $this->assign('close1', ""); ?>
	<?php $this->assign('close2', ""); ?>
	<?php $this->assign('close1', "</table>"); ?>
	<?php $this->assign('cur', $this->_tpl_vars['data'][$this->_sections['row']['index']]['ip_start']); ?>
	<tr><td>
	<table class="table-form">
	<tr><td class="table-search-menu-text">
		<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
admin.gif" alt="<?php echo $this->_tpl_vars['lang']['db']['subnet']; ?>
" />
		<?php $this->assign('t1', ((is_array($_tmp="subnets__type-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data'][$this->_sections['row']['index']]['type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data'][$this->_sections['row']['index']]['type']))); ?>
		<?php $this->assign('t2', ((is_array($_tmp="links__type-")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['data'][$this->_sections['row']['index']]['links__type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['data'][$this->_sections['row']['index']]['links__type']))); ?>
		<?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t1']]; ?>

		<?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['t2']]; ?>

		<?php if ($this->_tpl_vars['data'][$this->_sections['row']['index']]['nodes__name'] != ''): ?>[<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['row']['index']]['nodes__name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['nodes__id']; ?>
)] <?php endif; ?>
		(<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['ip_start']; ?>
 - <?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['ip_end']; ?>
)
	</td></tr>
	<?php if ($this->_tpl_vars['data'][$this->_sections['row']['index']]['date_in'] != ''): ?>
	<?php $this->assign('close2', "</table></td></tr>"); ?>
	<tr><td>
	<table class="table-form">
	<tr>
	<?php $_from = $this->_tpl_vars['data']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['itm']):
?>
	<?php $this->assign('fullkey', $this->_tpl_vars['data']['0'][$this->_tpl_vars['key']]); ?>
	<?php if ($this->_tpl_vars['extra_data']['HIDE'][$this->_tpl_vars['fullkey']] != 'YES'): ?>
	<?php if ($this->_tpl_vars['lang']['db'][$this->_tpl_vars['itm']] != ''): ?>
		<?php $this->assign('cell', ($this->_tpl_vars['lang']['db'][$this->_tpl_vars['itm']])); ?>
		<?php $this->assign('cellclass', "table-node-key2"); ?>
	<?php elseif ($this->_tpl_vars['extra_data']['TRANSLATE'][$this->_tpl_vars['fullkey']] == 'YES'): ?>
		<?php $this->assign('cellclass', "table-node-value2"); ?>
		<?php $this->assign('lang_cell', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fullkey'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-") : smarty_modifier_cat($_tmp, "-")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['itm']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['itm']))); ?>
		<?php $this->assign('cell', $this->_tpl_vars['lang']['db'][$this->_tpl_vars['lang_cell']]); ?>
		<?php $this->assign('cellclass', "table-node-value2"); ?>
	<?php else: ?>
		<?php $this->assign('cellclass', "table-node-value2"); ?>
		<?php $this->assign('cell', $this->_tpl_vars['itm']); ?>
	<?php endif; ?>
	
	<td class="<?php echo $this->_tpl_vars['cellclass']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cell'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr>
	<?php endif; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['data'][$this->_sections['row']['index']]['date_in'] != ''): ?>
	<tr>
		<?php $_from = $this->_tpl_vars['data'][$this->_sections['row']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['itm']):
?>
		<?php $this->assign('fullkey', $this->_tpl_vars['data']['0'][$this->_tpl_vars['key']]); ?>
		<?php if ($this->_tpl_vars['extra_data']['HIDE'][$this->_tpl_vars['fullkey']] != 'YES'): ?>
		<?php if ($this->_sections['row']['index'] == 0 && $this->_tpl_vars['lang']['db'][$this->_tpl_vars['itm']] != ''): ?>
			<?php $this->assign('cell', ($this->_tpl_vars['lang']['db'][$this->_tpl_vars['itm']])); ?>
			<?php $this->assign('cellclass', "table-node-key2"); ?>
		<?php elseif ($this->_sections['row']['index'] != 0 && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 5, "", true) : smarty_modifier_truncate($_tmp, 5, "", true)) == 'date_'): ?>
			<?php $this->assign('cell', ((is_array($_tmp=$this->_tpl_vars['itm'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%x") : smarty_modifier_date_format($_tmp, "%x"))); ?>
			<?php $this->assign('cellclass', "table-node-value2"); ?>
		<?php elseif ($this->_tpl_vars['extra_data']['TRANSLATE'][$this->_tpl_vars['fullkey']] == 'YES'): ?>
			<?php $this->assign('cellclass', "table-node-value2"); ?>
			<?php $this->assign('lang_cell', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fullkey'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-") : smarty_modifier_cat($_tmp, "-")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['itm']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['itm']))); ?>
			<?php $this->assign('cell', $this->_tpl_vars['lang']['db'][$this->_tpl_vars['lang_cell']]); ?>
			<?php $this->assign('cellclass', "table-node-value2"); ?>
		<?php else: ?>
			<?php $this->assign('cellclass', "table-node-value2"); ?>
			<?php $this->assign('cell', $this->_tpl_vars['itm']); ?>
		<?php endif; ?>
		
		<td class="<?php echo $this->_tpl_vars['cellclass']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cell'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	<?php endif; ?>
<?php endfor; endif; ?>
<?php echo $this->_tpl_vars['close2']; ?>
<?php echo $this->_tpl_vars['close1']; ?>

<?php $this->assign('close1', ""); ?>
<?php $this->assign('close2', ""); ?>
</table>