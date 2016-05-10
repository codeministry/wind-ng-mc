<?php /* Smarty version 2.6.19, created on 2012-01-15 15:34:13
         compiled from includes/pages/nodes/nodes_plot_link.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/nodes/nodes_plot_link.tpl', 38, false),array('modifier', 'round', 'includes/pages/nodes/nodes_plot_link.tpl', 53, false),array('modifier', 'wordwrap', 'includes/pages/nodes/nodes_plot_link.tpl', 83, false),)), $this); ?>
<table cellpadding="0" cellspacing="0" class="table-main">
	<tr>
		<td>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['nodes_plot_link']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
	<tr>
		<td height="100%">
			<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
pickup.js"></script>
			<form style="height:100%;" name="form_nodes_plot_link" method="post" action="?">
			<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
			<table cellpadding="4" cellspacing="0" class="plot-link-table">
				<tr>
					<td width="25%" align="left">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['change']),'onclick' => "javascript: t = window.open('?page=pickup&subpage=nodes&object=form_nodes_plot_link.a_node', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<br />
						<input type="hidden" name="a_node" value="<?php echo $this->_tpl_vars['a_node']; ?>
" />
						<input class="fld-form-input-pickup" type="text" disabled="disabled" name="a_node_output" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['a_node_output'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					</td>
					<td width="50%" align="center">
						<input class="fld-form-submit" type="submit" name="submitbutton" value="<?php echo $this->_tpl_vars['lang']['submit']; ?>
" />
					</td>
					<td width="25%" align="right">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['change']),'onclick' => "javascript: t = window.open('?page=pickup&subpage=nodes&object=form_nodes_plot_link.b_node', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<br />
						<input type="hidden" name="b_node" value="<?php echo $this->_tpl_vars['b_node']; ?>
" />
						<input style="text-align:right;" class="fld-form-input-pickup" type="text" disabled="disabled" name="b_node_output" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['b_node_output'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					</td>
				</tr>
				<?php if ($this->_tpl_vars['a_node'] != '' && $this->_tpl_vars['b_node'] != ''): ?>
				<tr>
					<td align="left">
						<?php echo $this->_tpl_vars['lang']['azimuth']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['a_node_azimuth'])) ? $this->_run_mod_handler('round', true, $_tmp, 2) : round($_tmp, 2)); ?>
&#176;<br />
						<?php echo $this->_tpl_vars['lang']['elevation']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['a_node_geo_elevation'])) ? $this->_run_mod_handler('round', true, $_tmp, 0) : round($_tmp, 0)); ?>
 (+<?php echo ((is_array($_tmp=$this->_tpl_vars['a_node_elevation'])) ? $this->_run_mod_handler('round', true, $_tmp, 0) : round($_tmp, 0)); ?>
) m<br />
						<?php echo $this->_tpl_vars['lang']['tilt']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['a_node_tilt'])) ? $this->_run_mod_handler('round', true, $_tmp, 2) : round($_tmp, 2)); ?>
&#176;
					</td>
					<td align="center">
						<--- <?php echo $this->_tpl_vars['lang']['distance']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['distance'])) ? $this->_run_mod_handler('round', true, $_tmp, 3) : round($_tmp, 3)); ?>
 km ---><br />
						<span style="color: brown;">
							<?php echo $this->_tpl_vars['lang']['fsl']; ?>
:<br />
							<?php echo ((is_array($_tmp=$this->_tpl_vars['fsl'])) ? $this->_run_mod_handler('round', true, $_tmp, 2) : round($_tmp, 2)); ?>
 dBm @ 
							<select name="frequency" onchange="this.form.submit();" style="font-size: 10px;">
								<option value="2450"<?php if ($this->_tpl_vars['frequency'] == 2450): ?> selected="selected"<?php endif; ?>>2450</option>
								<option value="5500"<?php if ($this->_tpl_vars['frequency'] == 5500): ?> selected="selected"<?php endif; ?>>5500</option>
							</select>
	 						MHz
						</span>
					</td>
					<td align="right">
						<?php echo $this->_tpl_vars['lang']['azimuth']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['b_node_azimuth'])) ? $this->_run_mod_handler('round', true, $_tmp, 2) : round($_tmp, 2)); ?>
&#176;<br />
						<?php echo $this->_tpl_vars['lang']['elevation']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['b_node_geo_elevation'])) ? $this->_run_mod_handler('round', true, $_tmp, 0) : round($_tmp, 0)); ?>
 (+<?php echo ((is_array($_tmp=$this->_tpl_vars['b_node_elevation'])) ? $this->_run_mod_handler('round', true, $_tmp, 0) : round($_tmp, 0)); ?>
) m<br />
						<?php echo $this->_tpl_vars['lang']['tilt']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['b_node_tilt'])) ? $this->_run_mod_handler('round', true, $_tmp, 2) : round($_tmp, 2)); ?>
&#176;
					</td>
				</tr>
				<tr>
					<td height="100%" colspan="3" align="center"><img src="<?php echo $this->_tpl_vars['plot_image']; ?>
&amp;width=570&amp;height=250" width="570" height="250" /></td>
				</tr>
				<tr>
					<td colspan="3" align="right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['google_earth']),'link' => ($this->_tpl_vars['gearth']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				</tr>
				<?php else: ?>
				<tr>
					<td height="100%" colspan="3" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['nodes_plot_link_info'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 40, "<br />") : smarty_modifier_wordwrap($_tmp, 40, "<br />")); ?>
</td>
				</tr>
				<?php endif; ?>
			</table>
			</form>
		</td>
	</tr>
</table>