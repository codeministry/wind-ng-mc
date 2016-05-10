<?php /* Smarty version 2.6.19, created on 2012-03-10 16:25:07
         compiled from includes/main_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'includes/main_menu.tpl', 126, false),array('modifier', 'escape', 'includes/main_menu.tpl', 166, false),)), $this); ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-middle-left">
	<tr>
		<td class="small-menu">
			<table width="100%"  border="0" cellspacing="0" cellpadding="0">
				<tr bgcolor="#FFFFFF">
					<td class="table-small-menu-text"><a href="<?php echo $this->_tpl_vars['link_home']; ?>
" class="menu-link"><?php echo $this->_tpl_vars['lang']['home']; ?>
</a></td>
				</tr>
			  
		              <tr bgcolor="#FFFFFF">
					<td class="table-small-menu-text"><a href="../forum" class="menu-link">WNA forum</a></td>
				</tr>
			  
		<?php if ($this->_tpl_vars['logged'] == TRUE): ?>

				<!--<tr bgcolor="#FFFFFF">
					<td class="table-small-menu-text"><a href="<?php echo $this->_tpl_vars['link_edit_profile']; ?>
" class="menu-link"><?php echo $this->_tpl_vars['lang']['edit_profile']; ?>
</a></td>
				  </tr>-->
				<tr bgcolor="#FFFFFF">
					<td class="table-small-menu-text"><a href="<?php echo $this->_tpl_vars['link_logout']; ?>
" class="menu-link"><?php echo $this->_tpl_vars['lang']['log_out']; ?>
</a></td>
				</tr>
		
		<?php else: ?>
	
								<tr bgcolor="#FFFFFF">
					<td class="table-small-menu-text"><a href="http://www.wna.gr/forum/member.php?action=register" class="menu-link"><?php echo $this->_tpl_vars['lang']['register']; ?>
</a></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td class="table-small-menu-text"><a href="http://www.wna.gr/forum/member.php?action=lostpw" class="menu-link"><?php echo $this->_tpl_vars['lang']['password_recover']; ?>
</a></td>
				</tr>

		 <?php endif; ?>            

		 		<tr>
					<td class="table-middle-left-pad"></td>
			  	</tr>
			</table>
	  	</td>
	</tr>
	<tr>
		<td class="search-menu">
			<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-search-menu">
				<tr>
					<td class="table-search-menu-text"><img src="templates/basic/images/search_nodes.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['lang']['all_nodes']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_allnodes']; ?>
"><?php echo $this->_tpl_vars['lang']['all_nodes']; ?>
</a></td>
			  	</tr>
			  					<tr>
					<td class="table-search-menu-text"><img src="templates/basic/images/dns-small.png" width="16" height="16" alt="<?php echo $this->_tpl_vars['lang']['communities']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_communities']; ?>
"><?php echo $this->_tpl_vars['lang']['communities']; ?>
</a></td>
			  	</tr>
			  	<tr>
					<td class="table-search-menu-text"><img src="templates/basic/images/search_ip.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['lang']['all_ranges']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_allranges']; ?>
"><?php echo $this->_tpl_vars['lang']['all_ranges']; ?>
</a></td>
				</tr>
				<tr>
					<td class="table-search-menu-text"><img src="templates/basic/images/services.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['lang']['all_services']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_allservices']; ?>
"><?php echo $this->_tpl_vars['lang']['all_services']; ?>
</a></td>
		  		</tr>
			  	<tr>
					<td class="table-search-menu-text">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table-search-menu">
							<tr>
								<td><img src="templates/basic/images/search.gif" width="32" height="32" alt="<?php echo $this->_tpl_vars['lang']['quick_search']; ?>
" /></td>
								<td style="font-size: 12px;">
									<form name="search" method="get" action="?">
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/qs.tpl", 'smarty_include_vars' => array('qs' => $this->_tpl_vars['query_string'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-main">
										<tr>
											<td style="font-size: 12px;" width="100%">&nbsp;<?php echo $this->_tpl_vars['lang']['quick_search']; ?>
 <a href="javascript:document.search.submit()"><img src="templates/basic/images/submit1.png" alt="<?php echo $this->_tpl_vars['lang']['submit']; ?>
" /></a></td>
										</tr>
										<tr>
											<td>
												<div>
												<input type="text" id="q" name="q" autocomplete="off" onkeydown="" onfocus="hover('',this.value);" onkeyup="hover(event.keyCode,this.value);"  onblur="setTimeout('hideSearch()',500); hov=0;" />
												</div>
												<div align="left" id="searchResult" name="searchResult" style="font-family:Arial; font-size:12px; background-color: white; border:#000000 dashed 1px; padding:0px; display: none; position: absolute; width: 150px;"></div>
											</td>
										</tr>
									</table>
									</form>
								</td>
							</tr>
						</table>
					</td>
			  	</tr>
			  	<tr>
					<td class="table-middle-left-pad"></td>
			  	</tr>
			</table>
		</td>
	</tr>

	<tr>
    	<td class="search-menu">
			<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-search-menu">
				<tr>
					<td colspan="2" class="quick-login-title"><?php echo $this->_tpl_vars['lang']['statistics']; ?>
</td>
			  	</tr>
			  	<tr>
					<td rowspan="6" class="quick-login-text"><img src="templates/basic/images/stats.png" width="48" height="48" alt="<?php echo $this->_tpl_vars['lang']['statistics']; ?>
" /></td>
					<td class="quick-login-text"><?php echo $this->_tpl_vars['stats_communities']; ?>
 <span style="color: black;">Wireless Communities</span>
<br><?php echo $this->_tpl_vars['stats_nodes_active']; ?>
/<?php echo $this->_tpl_vars['stats_nodes_total']; ?>
 <span style="color: black;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['active_nodes'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></td>
					
			  	</tr>
							  	
			  	<tr>
					<td class="quick-login-text"><?php echo $this->_tpl_vars['stats_backbone']; ?>
 <span style="color: black;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['backbone_nodes'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></td>
			  	</tr>
			  	<tr>
					<td class="quick-login-text"><?php echo $this->_tpl_vars['stats_links']; ?>
 <span style="color: black;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['links'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></td>
			  	</tr>
				
			  	<tr>
					<td class="quick-login-text"><?php echo $this->_tpl_vars['stats_aps']; ?>
 <span style="color: black;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['aps'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span>
					<br><?php echo $this->_tpl_vars['stats_hotspots']; ?>
 <span style="color: black;">Hotspots</span></td>
			  	</tr>
				
			  	<tr>
					<td class="quick-login-text"><?php echo $this->_tpl_vars['stats_services_active']; ?>
/<?php echo $this->_tpl_vars['stats_services_total']; ?>
 <span style="color: black;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['active_services'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></td>
			  </tr>
			  	<tr>
					<td colspan="2" class="table-middle-left-pad"></td>
			  	</tr>
			</table>
        </td>
	</tr>

   <?php if ($this->_tpl_vars['logged'] == TRUE): ?>

   <tr>
		<td class="search-menu">
			<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-mynodes">
				<tr>
					<td rowspan="2" class="table-mynodes-image" ><img src="templates/basic/images/node.gif" alt="<?php echo $this->_tpl_vars['lang']['mynodes']; ?>
" /></td>
					<td class="table-mynodes-title"><?php echo $this->_tpl_vars['lang']['mynodes']; ?>
</td>
				</tr>
				<tr>
					<td class="table-mynodes-link">|<a href="<?php echo $this->_tpl_vars['link_addnode']; ?>
"><?php echo $this->_tpl_vars['lang']['node_add']; ?>
</a>|</td>
				</tr>
			</table>
			<table width="100%"  border="0" cellpadding="0" cellspacing="0"><tr class="table-form-row2">
			<td class="table-form-title"><img src="templates/basic/images/node-small.png" alt="<?php echo $this->_tpl_vars['lang']['mynodes']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['mynodes'][$this->_sections['row']['index']]['url_view']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['home_node'][$this->_sections['row']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['home_node'][$this->_sections['row']['index']]['id']; ?>
)</a>&nbsp;
					<br />
					<span style="font-weight:bold; font-size: 7px; color: orange;">|<a href="<?php echo $this->_tpl_vars['mynodes'][$this->_sections['row']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['lang']['edit_node']; ?>

					<img src="templates/basic/images/submit1.png" alt="<?php echo $this->_tpl_vars['lang']['node']; ?>
" /></a>|</span>	
										
					</td>
			</tr>
			<?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['mynodes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					
			<?php if (!(!(1 & $this->_sections['row']['index']))): ?>
				<tr class="table-form-row2">
			<?php else: ?>
				<tr class="table-form-row1">
			<?php endif; ?>
					<td class="table-form-title"><img src="templates/basic/images/node-small.png" alt="<?php echo $this->_tpl_vars['lang']['mynodes']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['mynodes'][$this->_sections['row']['index']]['url_view']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['mynodes'][$this->_sections['row']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (#<?php echo $this->_tpl_vars['mynodes'][$this->_sections['row']['index']]['id']; ?>
)</a>&nbsp;
					<br />
					<span style="font-weight:bold; font-size: 7px; color: orange;">|<a href="<?php echo $this->_tpl_vars['mynodes'][$this->_sections['row']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['lang']['edit_node']; ?>

					<img src="templates/basic/images/submit1.png" alt="<?php echo $this->_tpl_vars['lang']['node']; ?>
" /></a>|</span>
					<span style="font-weight:bold; font-size: 7px; color: orange;">|<a href="javascript:alert('Λυπούμαστε, αλλα αυτή η επιλογή δεν είναι έτοιμη ακόμα');">Αποστολή ενημέρωσης χρηστών</a></a>|</span>
					
					
					</td>
				</tr>
			<?php endfor; endif; ?>
				<tr>
					<td class="table-middle-left-pad"></td>
				</tr>
			</table>
		</td>
	</tr>
					
	<?php if ($this->_tpl_vars['is_admin'] === TRUE): ?>
					
	<tr>
		<td class="search-menu">
			<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-mynodes">
				<tr>
					<td class="table-mynodes-image" ><img src="templates/basic/images/admin.gif" alt="<?php echo $this->_tpl_vars['lang']['admin_panel']; ?>
" /></td><td class="table-mynodes-title" ><?php echo $this->_tpl_vars['lang']['admin_panel']; ?>
</td>
				</tr>
				<?php if ($this->_tpl_vars['link_admin_nodes'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/node-small.png" alt="<?php echo $this->_tpl_vars['lang']['nodes']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_nodes']; ?>
"><?php echo $this->_tpl_vars['lang']['nodes']; ?>
</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_users'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/user-small.png" alt="<?php echo $this->_tpl_vars['lang']['users']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_users']; ?>
"><?php echo $this->_tpl_vars['lang']['users']; ?>
</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_nodes_services'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/services-small.png" alt="<?php echo $this->_tpl_vars['lang']['services']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_nodes_services']; ?>
"><?php echo $this->_tpl_vars['lang']['services']; ?>
</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_services'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/services-small.png" alt="<?php echo $this->_tpl_vars['lang']['services_categories']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_services']; ?>
"><?php echo $this->_tpl_vars['lang']['services_categories']; ?>
</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_regions'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/regions-small.png" alt="<?php echo $this->_tpl_vars['lang']['regions']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_regions']; ?>
"><?php echo $this->_tpl_vars['lang']['regions']; ?>
</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_areas'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/areas-small.png" alt="<?php echo $this->_tpl_vars['lang']['areas']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_areas']; ?>
"><?php echo $this->_tpl_vars['lang']['areas']; ?>
</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_communities'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/areas-small.png" alt="<?php echo $this->_tpl_vars['lang']['areas']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_communities']; ?>
">wireless communities</a></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_admin_actionlog'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/areas-small.png" alt="<?php echo $this->_tpl_vars['lang']['areas']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_admin_actionlog']; ?>
">action log</a></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td colspan="2" class="table-middle-left-pad"></td>
				</tr>
			</table>
		</td>
	</tr>
	<?php endif; ?>
					
	<?php if ($this->_tpl_vars['is_admin'] === TRUE || $this->_tpl_vars['is_hostmaster'] === TRUE): ?>
					
	<tr>
		<td class="search-menu">
			<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-mynodes">
				<tr>
					<td class="table-mynodes-image" ><img src="templates/basic/images/admin.gif" alt="<?php echo $this->_tpl_vars['lang']['hostmaster_panel']; ?>
" /></td><td class="table-mynodes-title" ><?php echo $this->_tpl_vars['lang']['hostmaster_panel']; ?>
</td>
				</tr>
				<?php if ($this->_tpl_vars['link_ranges'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/node-small.png" alt="<?php echo $this->_tpl_vars['lang']['ip_ranges']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_ranges']; ?>
"><?php echo $this->_tpl_vars['lang']['ip_ranges']; ?>
</a></td>
				</tr>
				<tr>
					<td colspan="2" class="menu-small-links"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_ranges_waiting'],'content' => ($this->_tpl_vars['ranges_waiting'])." ".($this->_tpl_vars['lang']['waiting']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_ranges_req_del'],'content' => ($this->_tpl_vars['ranges_req_del'])." ".($this->_tpl_vars['lang']['for_deletion']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_dnszones'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/dns-small.png" alt="<?php echo $this->_tpl_vars['lang']['dns_zones']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_dnszones']; ?>
"><?php echo $this->_tpl_vars['lang']['dns_zones']; ?>
</a></td>
				</tr>
				<tr>
					<td colspan="2" class="menu-small-links"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_dnszones_waiting'],'content' => ($this->_tpl_vars['dnszones_waiting'])." ".($this->_tpl_vars['lang']['waiting']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_dnszones_req_del'],'content' => ($this->_tpl_vars['dnszones_req_del'])." ".($this->_tpl_vars['lang']['for_deletion']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['link_dnsnameservers'] != ''): ?>
				<tr class="table-form-row1">
					<td colspan="2" class="table-form-title"><img src="templates/basic/images/nameserver.gif" alt="<?php echo $this->_tpl_vars['lang']['dns_nameservers']; ?>
" />&nbsp;<a href="<?php echo $this->_tpl_vars['link_dnsnameservers']; ?>
"><?php echo $this->_tpl_vars['lang']['dns_nameservers']; ?>
</a></td>
				</tr>
				<tr>
					<td colspan="2" class="menu-small-links"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_dnsnameservers_waiting'],'content' => ($this->_tpl_vars['dnsnameservers_waiting'])." ".($this->_tpl_vars['lang']['waiting']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link_dnsnameservers_req_del'],'content' => ($this->_tpl_vars['dnsnameservers_req_del'])." ".($this->_tpl_vars['lang']['for_deletion']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td colspan="2" class="table-middle-left-pad"></td>
				</tr>
			</table>
		</td>
	</tr>
	<?php endif; ?>
					
  	<?php endif; ?>
</table>