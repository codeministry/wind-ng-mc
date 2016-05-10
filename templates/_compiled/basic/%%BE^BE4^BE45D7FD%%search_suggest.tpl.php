<?php /* Smarty version 2.6.19, created on 2012-01-31 15:25:36
         compiled from includes/pages/search/search_suggest.tpl */ ?>

<table cellpadding="0" cellspacing="0" width="100%">
<?php if ($this->_tpl_vars['ip_search']): ?>
	<?php unset($this->_sections['ip']);
$this->_sections['ip']['name'] = 'ip';
$this->_sections['ip']['loop'] = is_array($_loop=$this->_tpl_vars['ip_search']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ip']['show'] = true;
$this->_sections['ip']['max'] = $this->_sections['ip']['loop'];
$this->_sections['ip']['step'] = 1;
$this->_sections['ip']['start'] = $this->_sections['ip']['step'] > 0 ? 0 : $this->_sections['ip']['loop']-1;
if ($this->_sections['ip']['show']) {
    $this->_sections['ip']['total'] = $this->_sections['ip']['loop'];
    if ($this->_sections['ip']['total'] == 0)
        $this->_sections['ip']['show'] = false;
} else
    $this->_sections['ip']['total'] = 0;
if ($this->_sections['ip']['show']):

            for ($this->_sections['ip']['index'] = $this->_sections['ip']['start'], $this->_sections['ip']['iteration'] = 1;
                 $this->_sections['ip']['iteration'] <= $this->_sections['ip']['total'];
                 $this->_sections['ip']['index'] += $this->_sections['ip']['step'], $this->_sections['ip']['iteration']++):
$this->_sections['ip']['rownum'] = $this->_sections['ip']['iteration'];
$this->_sections['ip']['index_prev'] = $this->_sections['ip']['index'] - $this->_sections['ip']['step'];
$this->_sections['ip']['index_next'] = $this->_sections['ip']['index'] + $this->_sections['ip']['step'];
$this->_sections['ip']['first']      = ($this->_sections['ip']['iteration'] == 1);
$this->_sections['ip']['last']       = ($this->_sections['ip']['iteration'] == $this->_sections['ip']['total']);
?>
	<tr onclick="window.location.href='<?php echo $this->_tpl_vars['ip_search'][$this->_sections['ip']['index']]['href']; ?>
'" onmouseover="hover('mouse',this)" style="width: 100%">
		<td><?php echo $this->_tpl_vars['ip_search'][$this->_sections['ip']['index']]['ip_start']; ?>
</td>
		<td align="right">(#<?php echo $this->_tpl_vars['ip_search'][$this->_sections['ip']['index']]['id']; ?>
)</td>
	</tr>
	<?php endfor; else: ?>
		<tr style="width: 100%">
			<td><i><?php echo $this->_tpl_vars['lang']['not_found']; ?>
</i></td>
		</tr>
	<?php endif; ?>
<?php elseif ($this->_tpl_vars['dns_search']): ?>
	<?php unset($this->_sections['zone']);
$this->_sections['zone']['name'] = 'zone';
$this->_sections['zone']['loop'] = is_array($_loop=$this->_tpl_vars['dns_search']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['zone']['show'] = true;
$this->_sections['zone']['max'] = $this->_sections['zone']['loop'];
$this->_sections['zone']['step'] = 1;
$this->_sections['zone']['start'] = $this->_sections['zone']['step'] > 0 ? 0 : $this->_sections['zone']['loop']-1;
if ($this->_sections['zone']['show']) {
    $this->_sections['zone']['total'] = $this->_sections['zone']['loop'];
    if ($this->_sections['zone']['total'] == 0)
        $this->_sections['zone']['show'] = false;
} else
    $this->_sections['zone']['total'] = 0;
if ($this->_sections['zone']['show']):

            for ($this->_sections['zone']['index'] = $this->_sections['zone']['start'], $this->_sections['zone']['iteration'] = 1;
                 $this->_sections['zone']['iteration'] <= $this->_sections['zone']['total'];
                 $this->_sections['zone']['index'] += $this->_sections['zone']['step'], $this->_sections['zone']['iteration']++):
$this->_sections['zone']['rownum'] = $this->_sections['zone']['iteration'];
$this->_sections['zone']['index_prev'] = $this->_sections['zone']['index'] - $this->_sections['zone']['step'];
$this->_sections['zone']['index_next'] = $this->_sections['zone']['index'] + $this->_sections['zone']['step'];
$this->_sections['zone']['first']      = ($this->_sections['zone']['iteration'] == 1);
$this->_sections['zone']['last']       = ($this->_sections['zone']['iteration'] == $this->_sections['zone']['total']);
?>
	<tr onclick="window.location.href='<?php echo $this->_tpl_vars['dns_search'][$this->_sections['zone']['index']]['href']; ?>
'" onmouseover="hover('mouse',this)" style="width: 100%">
		<td><?php echo $this->_tpl_vars['dns_search'][$this->_sections['zone']['index']]['name']; ?>
</td>
		<td align="right">(#<?php echo $this->_tpl_vars['dns_search'][$this->_sections['zone']['index']]['id']; ?>
)</td>
	</tr>
	<?php endfor; else: ?>
		<tr style="width: 100%">
			<td><i><?php echo $this->_tpl_vars['lang']['not_found']; ?>
</i></td>
		</tr>
	<?php endif; ?>
<?php else: ?>
	<?php unset($this->_sections['node']);
$this->_sections['node']['name'] = 'node';
$this->_sections['node']['loop'] = is_array($_loop=$this->_tpl_vars['nodes_search']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['node']['show'] = true;
$this->_sections['node']['max'] = $this->_sections['node']['loop'];
$this->_sections['node']['step'] = 1;
$this->_sections['node']['start'] = $this->_sections['node']['step'] > 0 ? 0 : $this->_sections['node']['loop']-1;
if ($this->_sections['node']['show']) {
    $this->_sections['node']['total'] = $this->_sections['node']['loop'];
    if ($this->_sections['node']['total'] == 0)
        $this->_sections['node']['show'] = false;
} else
    $this->_sections['node']['total'] = 0;
if ($this->_sections['node']['show']):

            for ($this->_sections['node']['index'] = $this->_sections['node']['start'], $this->_sections['node']['iteration'] = 1;
                 $this->_sections['node']['iteration'] <= $this->_sections['node']['total'];
                 $this->_sections['node']['index'] += $this->_sections['node']['step'], $this->_sections['node']['iteration']++):
$this->_sections['node']['rownum'] = $this->_sections['node']['iteration'];
$this->_sections['node']['index_prev'] = $this->_sections['node']['index'] - $this->_sections['node']['step'];
$this->_sections['node']['index_next'] = $this->_sections['node']['index'] + $this->_sections['node']['step'];
$this->_sections['node']['first']      = ($this->_sections['node']['iteration'] == 1);
$this->_sections['node']['last']       = ($this->_sections['node']['iteration'] == $this->_sections['node']['total']);
?>
	<tr onclick="window.location.href='<?php echo $this->_tpl_vars['nodes_search'][$this->_sections['node']['index']]['href']; ?>
'" onmouseover="hover('mouse',this)" style="width: 100%">
		<td><?php echo $this->_tpl_vars['nodes_search'][$this->_sections['node']['index']]['name']; ?>
</td>
		<td align="right">(#<?php echo $this->_tpl_vars['nodes_search'][$this->_sections['node']['index']]['id']; ?>
)</td>
	</tr>
	<?php endfor; else: ?>
		<tr style="width: 100%">
			<td><i><?php echo $this->_tpl_vars['lang']['not_found']; ?>
</i></td>
		</tr>
	<?php endif; ?>
<?php endif; ?>
</table>