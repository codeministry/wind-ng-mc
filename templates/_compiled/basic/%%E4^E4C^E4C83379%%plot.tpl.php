<?php /* Smarty version 2.6.19, created on 2012-01-08 15:49:53
         compiled from generic/plot.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'generic/plot.tpl', 23, false),array('modifier', 'round', 'generic/plot.tpl', 23, false),)), $this); ?>
<table class="plot-table" cellspacing="0">
<tr><td colspan="3" class="plot-title"><?php echo $this->_tpl_vars['lang']['plot']; ?>
</td></tr>
<tr><td width="33%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['node_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['node_id']; ?>
)</td><td width="33%" align="center">-- <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['distance'])) ? $this->_run_mod_handler('round', true, $_tmp, 3) : round($_tmp, 3)); ?>
km --</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['rowl']['index']]['peer_node_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__peer_node_id']; ?>
)</td></tr>
<tr><td colspan="3" align="center"><a href="" onclick="javascript: t = window.open('?page=nodes&subpage=plot_link&a_node=<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['node_id']; ?>
&b_node=<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__peer_node_id']; ?>
', 'popup_plot_link', 'width=600,height=450,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;"><img src="?page=nodes&subpage=plot&a_node=<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['node_id']; ?>
&b_node=<?php echo $this->_tpl_vars['data'][$this->_sections['rowl']['index']]['links__peer_node_id']; ?>
&width=300&height=150" width="300" height="150" alt="<?php echo $this->_tpl_vars['lang']['plot']; ?>
" /></a></td></tr>
</table>