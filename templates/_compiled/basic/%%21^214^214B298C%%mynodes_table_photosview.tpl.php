<?php /* Smarty version 2.6.19, created on 2012-01-08 15:45:07
         compiled from includes/pages/mynodes/mynodes_table_photosview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/mynodes/mynodes_table_photosview.tpl', 45, false),array('modifier', 'date_format', 'includes/pages/mynodes/mynodes_table_photosview.tpl', 49, false),)), $this); ?>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post" action="?" enctype="multipart/form-data">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
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
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cell']):
?>
	<?php if ($this->_sections['row']['index'] == 0): ?>
		<?php $this->assign('cellclass', "table-list-top-cell"); ?>
	<?php else: ?>
		<?php $this->assign('cellclass', "table-list-cell"); ?>
	<?php endif; ?>
	<td class="<?php echo $this->_tpl_vars['cellclass']; ?>
">
	<?php if ($this->_tpl_vars['key'] == 'photo' && $this->_sections['row']['index'] > 0): ?>
	<?php if ($this->_tpl_vars['cell'] != ''): ?><img src="<?php echo $this->_tpl_vars['cell']; ?>
" /><?php else: ?><input class="fld-form-file" type="file" name="<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['view_point']; ?>
" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" /><?php endif; ?>
	<?php elseif ($this->_tpl_vars['key'] == 'info' && $this->_sections['row']['index'] > 0): ?>
	<textarea name="info-<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['view_point']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cell'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
	<?php elseif ($this->_sections['row']['index'] == 0): ?>
	<?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['cell']]; ?>

	<?php elseif ($this->_tpl_vars['key'] == 'date_in' && $this->_sections['row']['index'] > 0): ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['cell'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%x") : smarty_modifier_date_format($_tmp, "%x")); ?>

	<?php elseif ($this->_tpl_vars['key'] == 'view_point' && $this->_sections['row']['index'] > 0): ?>
	<?php $this->assign('vp', "photos__view_point-".($this->_tpl_vars['cell'])); ?><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['vp']]; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['cell']; ?>
	
	<?php endif; ?></td>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_sections['row']['index'] > 0): ?>
	<td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['extra_data']['MULTICHOICE'][$this->_sections['row']['index']]; ?>
" <?php if ($this->_tpl_vars['extra_data']['MULTICHOICE_CHECKED'][$this->_sections['row']['index']] == 'YES'): ?>checked="checked" <?php endif; ?>/></td>
	<?php else: ?>
	<td class="table-list-top-cell"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['extra_data']['MULTICHOICE_LABEL']]; ?>
</td>
	<?php endif; ?>
</tr>
<?php endfor; endif; ?>
<tr>
	<?php $_from = $this->_tpl_vars['data'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cell']):
?>
	<td></td>
	<?php endforeach; endif; unset($_from); ?>
	<td><input class="fld-form-submit" type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['update']; ?>
" /></td>
</tr>
</table>
</form>