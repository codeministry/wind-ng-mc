<?php /* Smarty version 2.6.19, created on 2012-02-09 22:56:54
         compiled from includes/pages/nodes/node_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/nodes/node_info.tpl', 29, false),array('modifier', 'date_format', 'includes/pages/nodes/node_info.tpl', 57, false),)), $this); ?>
<!-- start node_info_tpl -->
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="table-node">
<tr>
<td class="table-node-key"> <?php echo $this->_tpl_vars['lang']['db']['nodes__id']; ?>
</td>
<td class="table-node-value"><?php echo $this->_tpl_vars['node']['id']; ?>
</td>
</tr>
<tr>
<td class="table-node-key"> <?php echo $this->_tpl_vars['lang']['db']['nodes__name']; ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
<td class="table-node-key"> <?php echo $this->_tpl_vars['lang']['db']['areas__name']; ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['area_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
<td class="table-node-key"> <?php echo $this->_tpl_vars['lang']['db']['regions__name']; ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['region_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
<td class="table-node-key"> <?php echo $this->_tpl_vars['lang']['community']; ?>
</td>
<td class="table-node-value">
<a style="border-bottom: 1px dotted rgb(51, 102, 187); text-decoration: none; cursor: help;" title="Πατήστε εδώ για να μάθετε περισσότερα για την κοινότητα αυτή " href="../wiki/<?php echo ((is_array($_tmp=$this->_tpl_vars['node']['community_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['community_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
</tr>

<?php if ($this->_tpl_vars['node']['community_name'] != 'WNA'): ?> 
<td class="table-node-key"> Local Community node page</td>
<td class="table-node-value">
<a style="border-bottom: 1px dotted rgb(51, 102, 187); text-decoration: none; cursor: help;" title="Πατήστε εδώ για να μεταβείτε στην σελίδα του κόμβου αυτού στην τοπική κοινότητα " target="_new" href="<?php echo $this->_tpl_vars['node']['community_windURL']; ?>
/?page=nodes&node=<?php echo $this->_tpl_vars['node']['com_wind_id']; ?>
"><?php echo $this->_tpl_vars['node']['com_wind_id']; ?>
</a></td>
</tr>
<?php endif; ?> 

<!--<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['com_wind_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['TOS'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>-->

<tr>
<td class="table-node-key"> <?php echo $this->_tpl_vars['lang']['db']['nodes__date_in']; ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['date_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%x") : smarty_modifier_date_format($_tmp, "%x")); ?>
</td>
</tr>
<tr>-</tr>
<tr>
<?php if ($this->_tpl_vars['is_admin']): ?> 
<td class="table-node-key"> Παροχή Internet<?php echo $this->_tpl_vars['lang']['db']['nodes__internetaccess']; ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['internetaccess'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<tr>
<td class="table-node-key"> Πάροχος Internet <?php echo $this->_tpl_vars['lang']['db']['nodes__internetprovider']; ?>
</td>
<td class="table-node-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['internetprovider'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
</tr>
<?php endif; ?>

<tr>
<td class="table-node-key"><?php echo $this->_tpl_vars['lang']['db']['user_id_owner']; ?>
</td>
<td class="table-node-value"><a href="/forum/userinfo.php?username=<?php echo $this->_tpl_vars['node']['owner_username']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['node']['owner_username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (contact)</a> 
 | <a href="/forum/searchnodes.php?username=<?php echo $this->_tpl_vars['node']['owner_username']; ?>
">Other nodes</a>
<!--  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('onclick' => "javascript: t = window.open('".($this->_tpl_vars['link_contact'])."', 'contact', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;",'content' => $this->_tpl_vars['lang']['contact'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>--></td>
</tr>
</table>

<!-- end node_info_tpl -->