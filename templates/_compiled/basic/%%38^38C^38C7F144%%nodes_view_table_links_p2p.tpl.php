<?php /* Smarty version 2.6.19, created on 2012-01-08 15:46:02
         compiled from includes/pages/nodes/nodes_view_table_links_p2p.tpl */ ?>
<table border="0" cellpadding="0" cellspacing="2" class="table-node">
<?php unset($this->_sections['rowl']);
$this->_sections['rowl']['name'] = 'rowl';
$this->_sections['rowl']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rowl']['show'] = true;
$this->_sections['rowl']['max'] = $this->_sections['rowl']['loop'];
$this->_sections['rowl']['step'] = 1;
$this->_sections['rowl']['start'] = $this->_sections['rowl']['step'] > 0 ? 0 : $this->_sections['rowl']['loop']-1;
if ($this->_sections['rowl']['show']) {
    $this->_sections['rowl']['total'] = $this->_sections['rowl']['loop'];
    if ($this->_sections['rowl']['total'] == 0)
        $this->_sections['rowl']['show'] = false;
} else
    $this->_sections['rowl']['total'] = 0;
if ($this->_sections['rowl']['show']):

            for ($this->_sections['rowl']['index'] = $this->_sections['rowl']['start'], $this->_sections['rowl']['iteration'] = 1;
                 $this->_sections['rowl']['iteration'] <= $this->_sections['rowl']['total'];
                 $this->_sections['rowl']['index'] += $this->_sections['rowl']['step'], $this->_sections['rowl']['iteration']++):
$this->_sections['rowl']['rownum'] = $this->_sections['rowl']['iteration'];
$this->_sections['rowl']['index_prev'] = $this->_sections['rowl']['index'] - $this->_sections['rowl']['step'];
$this->_sections['rowl']['index_next'] = $this->_sections['rowl']['index'] + $this->_sections['rowl']['step'];
$this->_sections['rowl']['first']      = ($this->_sections['rowl']['iteration'] == 1);
$this->_sections['rowl']['last']       = ($this->_sections['rowl']['iteration'] == $this->_sections['rowl']['total']);
?>
<?php if ($this->_sections['rowl']['index'] != 0): ?>
<tr>
<td class="table-node-link">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/pages/nodes/link_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<?php endif; ?>
<?php endfor; endif; ?>
</table>