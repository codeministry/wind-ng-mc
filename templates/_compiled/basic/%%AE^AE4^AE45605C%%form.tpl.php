<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:26
         compiled from constructors/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'constructors/form.tpl', 33, false),array('modifier', 'truncate', 'constructors/form.tpl', 88, false),array('function', 'html_select_date', 'constructors/form.tpl', 35, false),array('function', 'html_select_time', 'constructors/form.tpl', 35, false),)), $this); ?>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post" action="?">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<table class="table-form">
<?php unset($this->_sections['d']);
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?>
	<?php if (!(!(1 & $this->_sections['d']['index']))): ?>
	<tr class="table-form-row2">
	<?php else: ?>
	<tr class="table-form-row1">
	<?php endif; ?>
	<?php $this->assign('fullField', $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']); ?>
	<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'caption'): ?>
		<td class="table-form-title" colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'datetime'): ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td><td class="table-form-field" ><?php echo smarty_function_html_select_date(array('time' => ($this->_tpl_vars['data'][$this->_sections['d']['index']]['value']),'prefix' => "CONDATETIME_".($this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField'])."_"), $this);?>
 - <?php echo smarty_function_html_select_time(array('time' => ($this->_tpl_vars['data'][$this->_sections['d']['index']]['value']),'prefix' => "CONDATETIME_".($this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField'])."_"), $this);?>
</td>
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'text'): ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td><td class="table-form-field" ><textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'enum'): ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field" >
			<select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
">
				<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][$this->_sections['d']['index']]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['fullField'],'value' => $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td>	
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'enum_multi'): ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field" >
			<select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
[]" size="5" multiple="multiple">
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
				<?php $this->assign('value', $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['value']); ?>
				<option value="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['value']; ?>
"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['value'][$this->_tpl_vars['value']] == 'YES'): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['fullField'],'value' => $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td>	
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'enum_radio'): ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field" >
			<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] == 'YES'): ?><input type="radio" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
" value="" /><br /><?php endif; ?>
			<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
			<input type="radio" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][$this->_sections['d']['index']]['value']): ?> checked="checked"<?php endif; ?> /><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['fullField'],'value' => $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
			<?php endfor; endif; ?>
		</td>
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'pickup'): ?>
		<?php $this->assign('use_pickup', 'TRUE'); ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field" >
			<input type="hidden" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Pickup']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="text" disabled="disabled" class="fld-form-input-pickup" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
_output" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Pickup']['output'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['change']),'onclick' => "javascript: t = window.open('".($this->_tpl_vars['data'][$this->_sections['d']['index']]['Pickup_url'])."', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] == 'YES'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['delete']),'onclick' => "javascript: ".($this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']).".value = ''; ".($this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField'])."_output.innerText = ''; return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
		</td>	
	<?php elseif ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Type'] == 'pickup_multi'): ?>
		<?php $this->assign('use_pickup', 'TRUE'); ?>
		<td class="table-form-title" ><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field" >
			<select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
[]" size="5" multiple="multiple">
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Pickup']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
				<?php $this->assign('value', $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Pickup'][$this->_sections['e']['index']]['value']); ?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Pickup'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" selected="selected"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['fullField'],'value' => $this->_tpl_vars['data'][$this->_sections['d']['index']]['Type_Pickup'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['add']),'onclick' => "javascript: t = window.open('".($this->_tpl_vars['data'][$this->_sections['d']['index']]['Pickup_url'])."', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['remove']),'onclick' => "javascript: remove_selected(window.document.".($this->_tpl_vars['extra_data']['FORM_NAME']).".elements['".($this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField'])."[]']); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>	
	<?php elseif (((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['Field'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 8, "", true) : smarty_modifier_truncate($_tmp, 8, "", true)) == 'password'): ?>
		<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td><td class="table-form-field" ><input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
" type="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
	<?php else: ?>
		<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field" >
		<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare'] != ''): ?>
			<table class="table-main" cellpadding="0" cellspacing="0"><tr><td>
			<select name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
_compare">
				<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare'] == 'full' || $this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare'] == 'numeric'): ?>
				<option value="equal"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'equal'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_equal']; ?>
</option>
				<option value="greater_equal"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'greater_equal'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_greater_equal']; ?>
</option>
				<option value="less_equal"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'less_equal'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_less_equal']; ?>
</option>
				<option value="greater"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'greater'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_greater']; ?>
</option>
				<option value="less"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'less'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_less']; ?>
</option>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare'] == 'full' || $this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare'] == 'text'): ?>
				<option value="starts_with"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'starts_with'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_starts_with']; ?>
</option>
				<option value="ends_with"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'ends_with'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_ends_with']; ?>
</option>
				<option value="contains"<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare_value'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['compare_contains']; ?>
</option>
				<?php endif; ?>
			</select>
			</td><td width="100%">
		<?php endif; ?>
		<input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['Compare'] != ''): ?></td></tr></table><?php endif; ?>
		</td>
	<?php endif; ?>
	</tr>
<?php endfor; endif; ?>
<tr><td class="table-form-submit" colspan="2"><input class="fld-form-submit" type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['submit']; ?>
" /></td></tr>
</table>
</form>
<?php if ($this->_tpl_vars['use_pickup'] == TRUE): ?><script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
pickup.js"></script><?php endif; ?>