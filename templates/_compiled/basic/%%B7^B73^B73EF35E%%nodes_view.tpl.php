<?php /* Smarty version 2.6.19, created on 2012-02-09 22:56:54
         compiled from includes/pages/nodes/nodes_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/nodes/nodes_view.tpl', 22, false),array('modifier', 'nl2br', 'includes/pages/nodes/nodes_view.tpl', 62, false),array('modifier', 'wordwrap', 'includes/pages/nodes/nodes_view.tpl', 103, false),array('function', 'html_image', 'includes/pages/nodes/nodes_view.tpl', 109, false),)), $this); ?>
 <!-- start nodes_view_tpl -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp=($this->_tpl_vars['lang']['node'])." ".($this->_tpl_vars['node']['name'])." (#".($this->_tpl_vars['node']['id']).")")) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'right' => ($this->_tpl_vars['help']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="wavetabs" style="position:relative">
	<ul class="tabs">
		<li><a href="#tab_generic" class="selected"><?php echo $this->_tpl_vars['lang']['node']; ?>
</a></li>
		<li><a href="#tab_links"><?php echo $this->_tpl_vars['lang']['links']; ?>
</a></li>
		<li><a href="#tab_mynetwork"><?php echo $this->_tpl_vars['lang']['mynetwork']; ?>
</a></li>	
		<li><a href="#tab_service"><?php echo $this->_tpl_vars['lang']['services']; ?>
</a></li>	
		<li><a href="#tab_view"><?php echo $this->_tpl_vars['lang']['myview']; ?>
</a></li>
		<li><a href="#tab_Logs"><?php echo $this->_tpl_vars['lang']['logs']; ?>
Logs</a></li>	
		<?php if ($this->_tpl_vars['is_admin']): ?>
		<li><a href="/forum">Admin</a></li>	
		<?php endif; ?>
	</ul>
	<div class="container"></div>
	<div style="text-align: right; position: absolute; right: 10px; top: -9px;">
	<script type="text/javascript"><!--
	google_ad_client = "pub-7997884316793079";
	/* 468x60, ������������� 4/10/2010 */
	google_ad_slot = "9305113314";
	google_ad_width = 468;
	google_ad_height = 60;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	</div>	
</div>

<div id="tab_generic">
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
	<td class="table-page-split">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['node']),'content' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/pages/nodes/node_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('t1', ob_get_contents()); ob_end_clean();
 ?>

		<?php if ($this->_tpl_vars['edit_node']): ?><?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['edit_node']),'link' => $this->_tpl_vars['edit_node'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('ed', ob_get_contents()); ob_end_clean();
 ?><?php endif; ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title3.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['node_info'])." ".($this->_tpl_vars['ed']),'content' => ($this->_tpl_vars['t1']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title4.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['db']['nodes__info']),'content' => ((is_array($_tmp=((is_array($_tmp=($this->_tpl_vars['node']['info']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title5.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['ip_ranges']),'content' => ($this->_tpl_vars['table_ip_ranges']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title5.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['dns_zones']),'content' => ($this->_tpl_vars['table_dns']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title5.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['dns_nameservers']),'content' => ($this->_tpl_vars['table_nameservers']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
		<table width="100%"  border="0" cellpadding="0" cellspacing="2" class="table-node">
		<tr>
		<td class="table-node-subinfo-title">Περισσότερα</td>
		</tr>
		<tr>
		<td class="table-node-info"><table class="table-form">
		<tr>
												
			<td class="table-node-key2">
						Για περισσότερες πληροφορίες για τον κόμβο αυτό θα  πρέπει πρώτα να <br /> συνδεθείτε με το 
						όνομα χρήστη και τον κωδικό που έχετε στο wna.gr
					</td>
													
			
				</tr>
		</table></td>
		</tr>
		</table>		
		<?php endif; ?>
		<br />
		<div align="center"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['node_plot_link']),'onclick' => "javascript: t = window.open('".($this->_tpl_vars['link_plot_link'])."', 'popup_plot_link', 'width=600,height=420,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	</td>
	<td class="table-page-split" width="100%">
	<?php if ($this->_tpl_vars['gmap_key_ok'] !== 'nomap'): ?>
		<Br />
		<table bgcolor="#DBE0D7" cellpadding="0" cellspacing="2" width="100%">
			<tr>
				<td align="left" nowrap="nowrap"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_gearth'],'content' => 'Google earth')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				<td align="right" nowrap="nowrap"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_fullmap'],'content' => ($this->_tpl_vars['lang']['new_window']),'target' => '_blank')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
			</tr>
			<tr>
				<td style="font-size:12px; text-align:center; width: 100%; height: 500px" colspan="2">
					<?php if ($this->_tpl_vars['gmap_key_ok']): ?>
					<div id="map" style="width: 100%; height: 500px"></div>
					<?php else: ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['message']['error']['gmap_key_failed']['body'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 40) : smarty_modifier_wordwrap($_tmp, 40)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td style="font-size:12px;" colspan="2" nowrap="nowrap">
					<input type="checkbox" name="p2p" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_orange.png",'alt' => $this->_tpl_vars['lang']['backbone']), $this);?>
<?php echo $this->_tpl_vars['lang']['backbone']; ?>

					<input type="checkbox" name="aps" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_green.png",'alt' => $this->_tpl_vars['lang']['aps']), $this);?>
<?php echo $this->_tpl_vars['lang']['aps']; ?>

					<input type="checkbox" name="clients" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_blue.png",'alt' => $this->_tpl_vars['lang']['clients']), $this);?>
<?php echo $this->_tpl_vars['lang']['clients']; ?>

					<input type="checkbox" name="unlinked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_red.png",'alt' => $this->_tpl_vars['lang']['unlinked']), $this);?>
<?php echo $this->_tpl_vars['lang']['unlinked']; ?>

				</td>
			</tr>
		</table>
	
	<?php endif; ?>
	</td>
</tr>
</table>
</div>

	
<div id="tab_links">
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td colspan="2" class="table-page-pad">

<?php $_from = $this->_tpl_vars['table_links_ap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ap']):
?>
	<?php $this->assign('aps', ($this->_tpl_vars['aps']).($this->_tpl_vars['ap'])); ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['links']),'content' => ($this->_tpl_vars['table_links_p2p']).($this->_tpl_vars['aps']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['adpl']; ?>
<?php endif; ?>
</td>
</tr>
</table>
</div>


<div id="tab_mynetwork">
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td colspan="2" class="table-page-pad">
<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['mynetwork']),'content' => $this->_tpl_vars['table_ipaddr_subnets'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['adpl']; ?>
<?php endif; ?>
</td>
</tr>
</table>
</div>

<div id="tab_service">
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td colspan="2" class="table-page-pad">
<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['services']),'content' => $this->_tpl_vars['table_services'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['adpl']; ?>
<?php endif; ?>
</td>
</tr>
</table>
</div>

<div id="tab_view">
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td colspan="2" class="table-page-pad">
<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/pages/nodes/myview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('t', ob_get_contents()); ob_end_clean();
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['myview']),'content' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['adpl']; ?>
<?php endif; ?>
</td>
</tr>
</table>
</div>

<div id="tab_Logs">

<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-page">
<tr>
<td colspan="2" class="table-page-pad">
<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title2.tpl", 'smarty_include_vars' => array('title' => 'Logs','content' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['adpl']; ?>
<?php endif; ?>
</td>
</tr>
</table>
</div>
 <!-- end nodes_view_tpl -->