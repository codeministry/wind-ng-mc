<?php /* Smarty version 2.6.19, created on 2012-01-08 12:37:54
         compiled from includes/body.tpl */ ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table-main">
  <?php if ($this->_tpl_vars['header'] != ''): ?>
  <tr>
    <td <?php if ($this->_tpl_vars['menu'] != ''): ?>colspan="2" <?php endif; ?>class="table-main-td-header"><?php echo $this->_tpl_vars['header']; ?>
</td>
  </tr>
  <?php endif; ?>
  
  <tr>
  <?php if ($this->_tpl_vars['menu'] != ''): ?>
    <td class="table-main-td-middle"><?php echo $this->_tpl_vars['menu']; ?>
</td>
  <?php endif; ?>
    
    
    <td class="table-middle-right-td">
	<table border="0" cellpadding="0" cellspacing="0" class="table-middle-right">
  	<?php if ($this->_tpl_vars['menu'] != ''): ?>
		<tr>
			<td class="quick-login" width="100%">
			<?php if ($this->_tpl_vars['logged']): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/main_menu_logged.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<?php echo $this->_tpl_vars['form_login']; ?>

			<?php endif; ?>
			</td>
			<td nowrap="nowrap" class="quick-login-field">
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<a href="<?php echo $this->_tpl_vars['item']['link']; ?>
"><img alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" src="<?php echo $this->_tpl_vars['img_dir']; ?>
flags/<?php echo $this->_tpl_vars['key']; ?>
.gif" /></a> 
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	  <?php endif; ?>
		<tr>
			<td class="main-page" colspan="2">
    			<?php if ($this->_tpl_vars['message'] == ''): ?>
					<?php echo $this->_tpl_vars['center']; ?>

    			<?php else: ?>
    				<table width="100%" border="0" cellpadding="50" cellspacing="0">
    					<tr>
    						<td align="center">
    							<?php echo $this->_tpl_vars['message']; ?>

    						</td>
    					</tr>
    				</table>
    			<?php endif; ?>
			</td>
		</tr>
	</table>
	
	</td>
</tr>
    
  <?php if ($this->_tpl_vars['footer'] != ''): ?>
  <tr>
    <td <?php if ($this->_tpl_vars['menu'] != ''): ?>colspan="2" <?php endif; ?>class="table-main-td-footer"><?php echo $this->_tpl_vars['footer']; ?>
</td>
  </tr>
  <?php endif; ?>
</table>