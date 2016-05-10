<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:27
         compiled from includes/pages/nodes/nodes_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wordwrap', 'includes/pages/nodes/nodes_search.tpl', 36, false),array('modifier', 'nl2br', 'includes/pages/nodes/nodes_search.tpl', 36, false),array('function', 'html_image', 'includes/pages/nodes/nodes_search.tpl', 42, false),)), $this); ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/help.tpl", 'smarty_include_vars' => array('help' => 'nodes_search')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('help', ob_get_contents()); ob_end_clean();
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['all_nodes']),'right' => ($this->_tpl_vars['help']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
	<tr>
		<td class="table-page-split" width="100%">
		<?php if ($this->_tpl_vars['gmap_key_ok'] !== 'nomap'): ?>
			<table align="center" bgcolor="#DBE0D7" cellpadding="0" cellspacing="2" width="100%">
				<tr>
					<td align="left"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_gearth'],'content' => ($this->_tpl_vars['lang']['google_earth']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td><td align="right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_fullmap'],'content' => ($this->_tpl_vars['lang']['new_window']),'target' => '_blank')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				</tr>
				<tr>
					<td style="font-size:12px; text-align:center;" colspan="2">
					<?php if ($this->_tpl_vars['gmap_key_ok']): ?>
						<div id="map" style="width: 100%; height: 500px;"></div>
					<?php else: ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['message']['error']['gmap_key_failed']['body'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 40) : smarty_modifier_wordwrap($_tmp, 40)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

					<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td style="font-size:12px;">
						<input type="checkbox" name="p2p" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_orange.png",'alt' => $this->_tpl_vars['lang']['backbone']), $this);?>
<?php echo $this->_tpl_vars['lang']['backbone']; ?>

						<input type="checkbox" name="aps" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_green.png",'alt' => $this->_tpl_vars['lang']['aps']), $this);?>
<?php echo $this->_tpl_vars['lang']['aps']; ?>

						<input type="checkbox" name="clients" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_blue.png",'alt' => $this->_tpl_vars['lang']['clients']), $this);?>
<?php echo $this->_tpl_vars['lang']['clients']; ?>

						<input type="checkbox" name="unlinked" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_red.png",'alt' => $this->_tpl_vars['lang']['unlinked']), $this);?>
<?php echo $this->_tpl_vars['lang']['unlinked']; ?>

					</td>
				</tr>
			</table>
		<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td class="table-page-split">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title1.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['nodes_search']),'content' => $this->_tpl_vars['form_search_nodes'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
	<tr>
		<td class="table-page-pad">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['nodes_found']),'content' => $this->_tpl_vars['table_nodes'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
</table>