<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:27
         compiled from constructors/table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'constructors/table.tpl', 45, false),array('modifier', 'date_format', 'constructors/table.tpl', 46, false),array('modifier', 'cat', 'constructors/table.tpl', 50, false),array('modifier', 'stripslashes', 'constructors/table.tpl', 71, false),array('modifier', 'escape', 'constructors/table.tpl', 80, false),)), $this); ?>
<?php if ($this->_tpl_vars['extra_data']['MULTICHOICE'][1] != ''): ?>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<?php endif; ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
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

	<?php if ($this->_sections['row']['index'] == 0): ?>
	<tr>
	<?php else: ?>
	<?php if (!(!(1 & $this->_sections['row']['index']))): ?>
	<tr class="table-list-list1">
	<?php else: ?>
	<tr class="table-list-list2">
	<?php endif; ?>
	<?php endif; ?>
		
	<?php $_from = $this->_tpl_vars['data'][$this->_sections['row']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['itm']):
?>
	<?php $this->assign('fullkey', $this->_tpl_vars['data']['0'][$this->_tpl_vars['key']]); ?>
	<?php if ($this->_tpl_vars['extra_data']['HIDE'][$this->_tpl_vars['fullkey']] != 'YES'): ?>
	<?php if ($this->_sections['row']['index'] == 0 && $this->_tpl_vars['lang']['db'][$this->_tpl_vars['itm']] != ''): ?>
		<?php $this->assign('cell', $this->_tpl_vars['lang']['db'][$this->_tpl_vars['itm']]); ?>
		<?php $this->assign('cellclass', "table-list-top-cell"); ?>
	<?php elseif ($this->_sections['row']['index'] != 0 && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 5, "", true) : smarty_modifier_truncate($_tmp, 5, "", true)) == 'date_'): ?>
		<?php $this->assign('cell', ((is_array($_tmp=$this->_tpl_vars['itm'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%x") : smarty_modifier_date_format($_tmp, "%x"))); ?>
		<?php $this->assign('cellclass', "table-list-cell"); ?>
	<?php elseif ($this->_tpl_vars['extra_data']['TRANSLATE'][$this->_tpl_vars['fullkey']] == 'YES'): ?>
		<?php $this->assign('cellclass', "table-list-cell"); ?>
		<?php $this->assign('lang_cell', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fullkey'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-") : smarty_modifier_cat($_tmp, "-")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['itm']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['itm']))); ?>
		<?php $this->assign('cell', $this->_tpl_vars['lang']['db'][$this->_tpl_vars['lang_cell']]); ?>
		<?php $this->assign('cellclass', "table-list-cell"); ?>
	<?php else: ?>
		<?php $this->assign('cellclass', "table-list-cell"); ?>
		<?php $this->assign('cell', $this->_tpl_vars['itm']); ?>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['rowclass'] != ""): ?>

	<?php endif; ?>
	<?php $this->assign('edit_column', ""); ?>
	<?php $this->assign('edit', ""); ?>
	<?php $this->assign('onclick', ""); ?>
	<?php if ($this->_tpl_vars['extra_data']['EDIT_COLUMN'] != ''): ?>
		<?php $this->assign('edit_column', ($this->_tpl_vars['extra_data']['EDIT_COLUMN'])); ?>
		<?php $this->assign('edit', ($this->_tpl_vars['extra_data']['EDIT'][$this->_sections['row']['index']])); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['extra_data']['PICKUP_COLUMN'] != ''): ?>
		<?php $this->assign('edit_column', ($this->_tpl_vars['extra_data']['PICKUP_COLUMN'])); ?>
		<?php $this->assign('edit', ""); ?>
		<?php $this->assign('onclick', ((is_array($_tmp="javascript: window.opener.pickup(window.opener.document.".($this->_tpl_vars['extra_data']['PICKUP_OBJECT']).",'".($this->_tpl_vars['extra_data']['PICKUP_OUTPUT'][$this->_sections['row']['index']])."','".($this->_tpl_vars['extra_data']['PICKUP_VALUE'][$this->_sections['row']['index']])."', window); return false;")) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp))); ?>
	<?php endif; ?>
	<td class="<?php echo $this->_tpl_vars['cellclass']; ?>
">
		<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['edit_column'] && $this->_sections['row']['index'] != 0): ?>
		<a href="<?php echo $this->_tpl_vars['edit']; ?>
"<?php if ($this->_tpl_vars['extra_data']['PICKUP_COLUMN'] != ''): ?> onclick="<?php echo $this->_tpl_vars['onclick']; ?>
"<?php endif; ?>>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['extra_data']['LINK'][$this->_tpl_vars['fullkey']][$this->_sections['row']['index']] != ''): ?>
		<a href="<?php echo $this->_tpl_vars['extra_data']['LINK'][$this->_tpl_vars['fullkey']][$this->_sections['row']['index']]; ?>
">
		<?php endif; ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['cell'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['edit_column'] && $this->_sections['row']['index'] != 0): ?></a><?php endif; ?>
		<?php if ($this->_tpl_vars['extra_data']['LINK'][$this->_tpl_vars['fullkey']][$this->_sections['row']['index']] != ''): ?>
		</a>
		<?php endif; ?>
	</td>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['extra_data']['MULTICHOICE'][$this->_sections['row']['index']] != ''): ?>
	<td class="table-list-cell-extra"><input class="fld-form-check" type="checkbox" name="id[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['extra_data']['MULTICHOICE'][$this->_sections['row']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['extra_data']['MULTICHOICE_CHECKED'][$this->_sections['row']['index']] == 'YES'): ?>checked="checked" <?php endif; ?>/></td>
	<?php elseif ($this->_tpl_vars['extra_data']['MULTICHOICE_LABEL'] != ''): ?>
	<td width="1%" class="table-list-top-cell"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['extra_data']['MULTICHOICE_LABEL']]; ?>
</td>
	<?php endif; ?>
</tr>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['extra_data']['MULTICHOICE'][1] != '' || $this->_tpl_vars['extra_data']['TOTAL_PAGES'] != ''): ?>
<tr class="table-list-footer">
	<?php if ($this->_tpl_vars['extra_data']['TOTAL_PAGES'] == ''): ?>
		<?php $_from = $this->_tpl_vars['data'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cell']):
?>
		<td></td>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php unset($this->_sections['cell']);
$this->_sections['cell']['name'] = 'cell';
$this->_sections['cell']['loop'] = is_array($_loop=$this->_tpl_vars['data'][0]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cell']['show'] = true;
$this->_sections['cell']['max'] = $this->_sections['cell']['loop'];
$this->_sections['cell']['step'] = 1;
$this->_sections['cell']['start'] = $this->_sections['cell']['step'] > 0 ? 0 : $this->_sections['cell']['loop']-1;
if ($this->_sections['cell']['show']) {
    $this->_sections['cell']['total'] = $this->_sections['cell']['loop'];
    if ($this->_sections['cell']['total'] == 0)
        $this->_sections['cell']['show'] = false;
} else
    $this->_sections['cell']['total'] = 0;
if ($this->_sections['cell']['show']):

            for ($this->_sections['cell']['index'] = $this->_sections['cell']['start'], $this->_sections['cell']['iteration'] = 1;
                 $this->_sections['cell']['iteration'] <= $this->_sections['cell']['total'];
                 $this->_sections['cell']['index'] += $this->_sections['cell']['step'], $this->_sections['cell']['iteration']++):
$this->_sections['cell']['rownum'] = $this->_sections['cell']['iteration'];
$this->_sections['cell']['index_prev'] = $this->_sections['cell']['index'] - $this->_sections['cell']['step'];
$this->_sections['cell']['index_next'] = $this->_sections['cell']['index'] + $this->_sections['cell']['step'];
$this->_sections['cell']['first']      = ($this->_sections['cell']['iteration'] == 1);
$this->_sections['cell']['last']       = ($this->_sections['cell']['iteration'] == $this->_sections['cell']['total']);
?>
		<?php endfor; endif; ?>
		<td class="table-list-footer" colspan="<?php echo $this->_sections['cell']['total']; ?>
">Pages: 
		<?php $_from = $this->_tpl_vars['extra_data']['PAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['page']):
?>
			<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['extra_data']['CURRENT_PAGE']): ?>
				<?php echo $this->_tpl_vars['key']; ?>

			<?php else: ?>
				<a href="<?php echo $this->_tpl_vars['page']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?></td>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['extra_data']['MULTICHOICE'][1] != ''): ?><td class="table-form-submit"><input class="fld-form-submit" type="submit" name="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang'][$this->_tpl_vars['extra_data']['MULTICHOICE_LABEL']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td><?php endif; ?>
</tr>
<?php endif; ?>
</table>
<?php if ($this->_tpl_vars['extra_data']['MULTICHOICE'][1] != ''): ?></form><?php endif; ?>