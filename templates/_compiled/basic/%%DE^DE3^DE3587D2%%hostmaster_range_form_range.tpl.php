<?php /* Smarty version 2.6.19, created on 2012-01-08 16:32:04
         compiled from includes/pages/hostmaster/hostmaster_range_form_range.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'includes/pages/hostmaster/hostmaster_range_form_range.tpl', 28, false),array('modifier', 'escape', 'includes/pages/hostmaster/hostmaster_range_form_range.tpl', 28, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
function status_changed()
{'; ?>

	var arr_s = new Array()
	<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][3]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php $this->assign('lng', $this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['value']); ?>
		arr_s[<?php echo $this->_sections['e']['index']; ?>
] = '<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['email']['range'][$this->_tpl_vars['lng']]['subject'])) ? $this->_run_mod_handler('replace', true, $_tmp, "##range##", ($this->_tpl_vars['data']['0']['value'])." - ".($this->_tpl_vars['data']['1']['value'])) : smarty_modifier_replace($_tmp, "##range##", ($this->_tpl_vars['data']['0']['value'])." - ".($this->_tpl_vars['data']['1']['value']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "\r", "\\r") : smarty_modifier_replace($_tmp, "\r", "\\r")))) ? $this->_run_mod_handler('replace', true, $_tmp, "\n", "\\n") : smarty_modifier_replace($_tmp, "\n", "\\n")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'
	<?php endfor; endif; ?>
	var arr_b = new Array()
	<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][3]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php $this->assign('lng', $this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['value']); ?>
		arr_b[<?php echo $this->_sections['e']['index']; ?>
] = '<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['email']['range'][$this->_tpl_vars['lng']]['body'])) ? $this->_run_mod_handler('replace', true, $_tmp, "##range##", ($this->_tpl_vars['data']['0']['value'])." - ".($this->_tpl_vars['data']['1']['value'])) : smarty_modifier_replace($_tmp, "##range##", ($this->_tpl_vars['data']['0']['value'])." - ".($this->_tpl_vars['data']['1']['value']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "##node_name##", ($this->_tpl_vars['extra_data']['node_name'])) : smarty_modifier_replace($_tmp, "##node_name##", ($this->_tpl_vars['extra_data']['node_name']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "##node_id##", ($this->_tpl_vars['extra_data']['node_id'])) : smarty_modifier_replace($_tmp, "##node_id##", ($this->_tpl_vars['extra_data']['node_id']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "##hostmaster_username##", ($this->_tpl_vars['extra_data']['hostmaster_username'])) : smarty_modifier_replace($_tmp, "##hostmaster_username##", ($this->_tpl_vars['extra_data']['hostmaster_username']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "##hostmaster_name##", ($this->_tpl_vars['extra_data']['hostmaster_name'])) : smarty_modifier_replace($_tmp, "##hostmaster_name##", ($this->_tpl_vars['extra_data']['hostmaster_name']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "##hostmaster_surname##", ($this->_tpl_vars['extra_data']['hostmaster_surname'])) : smarty_modifier_replace($_tmp, "##hostmaster_surname##", ($this->_tpl_vars['extra_data']['hostmaster_surname']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "\r", "\\r") : smarty_modifier_replace($_tmp, "\r", "\\r")))) ? $this->_run_mod_handler('replace', true, $_tmp, "\n", "\\n") : smarty_modifier_replace($_tmp, "\n", "\\n")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'
	<?php endfor; endif; ?>
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_subject.value = arr_s[document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.<?php echo $this->_tpl_vars['data'][3]['fullField']; ?>
.selectedIndex]
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_body.value = arr_b[document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.<?php echo $this->_tpl_vars['data'][3]['fullField']; ?>
.selectedIndex]
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.sendmail.checked = true
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_to_type.disabled = false
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_to.disabled = false
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_subject.disabled = false
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_body.disabled = false
<?php echo '}

function email_to_type_changed()
{
var lst=document.'; ?>
<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
<?php echo '.email_to_type
var txt=document.'; ?>
<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
<?php echo '.email_to
switch (lst.options[lst.selectedIndex].value) {
	case \'all\':
		txt.value = \''; ?>
<?php echo $this->_tpl_vars['extra_data']['email_all']; ?>
<?php echo '\'
		break
	case \'owner\':
		txt.value = \''; ?>
<?php echo $this->_tpl_vars['extra_data']['email_owner']; ?>
<?php echo '\'
		break
	case \'custom\':
		txt.value = \'\'
		break
}
}

function sendmail_changed() {'; ?>

	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_to_type.disabled = !document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.sendmail.checked
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_to.disabled = !document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.sendmail.checked
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_subject.disabled = !document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.sendmail.checked
	document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.email_body.disabled = !document.<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
.sendmail.checked
<?php echo '}
</script>
'; ?>

<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<table class="table-form">
	<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['0']['fullField']]; ?>
<?php if ($this->_tpl_vars['data']['0']['Null'] != 'YES'): ?>*<?php endif; ?>:</td><td class="table-form-field"><input class="fld-form-input" name="<?php echo $this->_tpl_vars['data']['0']['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['0']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td></tr>

	<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['1']['fullField']]; ?>
<?php if ($this->_tpl_vars['data']['1']['Null'] != 'YES'): ?>*<?php endif; ?>:</td><td class="table-form-field"><input class="fld-form-input" name="<?php echo $this->_tpl_vars['data']['1']['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['1']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td></tr>

	<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['2']['fullField']]; ?>
<?php if ($this->_tpl_vars['data']['2']['Null'] != 'YES'): ?>*<?php endif; ?>:</td><td class="table-form-field"><textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data']['2']['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['2']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td></tr>

	<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['3']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][3]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
	<td class="table-form-field">
		<select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][3]['fullField']; ?>
" onchange="status_changed()">
			<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][3]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][3]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['3']['fullField'],'value' => $this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
			<?php endfor; endif; ?>
		</select>
	</td></tr>	
<tr class="table-form-row1"><td class="table-form-field" colspan="2"><input type="checkbox" name="sendmail" value="Y" onclick="sendmail_changed()" />&nbsp;<?php echo $this->_tpl_vars['lang']['send_mail']; ?>
</td></tr>
<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['to']; ?>
:</td><td class="table-form-field">
		<select class="fld-form-input" name="email_to_type" onchange="email_to_type_changed()" disabled="disabled">
			<option value="all"><?php echo $this->_tpl_vars['lang']['mailto_all']; ?>
</option>
			<option value="owner"><?php echo $this->_tpl_vars['lang']['mailto_owner']; ?>
</option>
			<option value="custom"><?php echo $this->_tpl_vars['lang']['mailto_custom']; ?>
</option>
		</select><br />
<input class="fld-form-input" type="text" name="email_to" value="<?php echo $this->_tpl_vars['extra_data']['email_all']; ?>
" disabled="disabled" /></td></tr>
<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['subject']; ?>
:</td><td class="table-form-field"><input class="fld-form-input" type="text" name="email_subject" disabled="disabled" /></td></tr>
<tr class="table-form-row2"><td class="table-form-title"s><?php echo $this->_tpl_vars['lang']['body']; ?>
:</td><td class="table-form-field"><textarea class="fld-form-input" name ="email_body" disabled="disabled"></textarea></td></tr>
<tr><td  class="table-form-submit" colspan="2"><input class="fld-form-submit" type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['submit']; ?>
" /></td></tr>
</table>
</form>