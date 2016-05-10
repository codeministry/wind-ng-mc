<?php /* Smarty version 2.6.19, created on 2012-01-08 15:46:02
         compiled from constructors/table2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'constructors/table2.tpl', 30, false),array('modifier', 'date_format', 'constructors/table2.tpl', 31, false),array('modifier', 'cat', 'constructors/table2.tpl', 35, false),array('modifier', 'escape', 'constructors/table2.tpl', 47, false),)), $this); ?>
<table class="table-form">
<?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row']['show'] = true;
$this->_sections['row']['max'] = $this->_sections['row']['loop'];
$this->_sections['row']['step'] = 1;
$this->_sections['row']['start'] = $this->_sections['row']['step'] > 0 ? 0 : $this->_sections['row']['loop']-1;
if ($this->_sections['row']['show']) {
    $this->_sections['row']['total'] = $this->_sections['row']['loop'];
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
">
		<?php if ($this->_tpl_vars['extra_data']['LINK'][$this->_tpl_vars['fullkey']][$this->_sections['row']['index']] != ''): ?>
		<a href="<?php echo $this->_tpl_vars['extra_data']['LINK'][$this->_tpl_vars['fullkey']][$this->_sections['row']['index']]; ?>
">
		<?php endif; ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['cell'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		<?php if ($this->_tpl_vars['extra_data']['LINK'][$this->_tpl_vars['fullkey']][$this->_sections['row']['index']] != ''): ?>
		</a>
		<?php endif; ?>
	</td>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</tr>
<?php endfor; endif; ?>
</table>