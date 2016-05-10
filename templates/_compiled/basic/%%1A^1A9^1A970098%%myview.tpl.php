<?php /* Smarty version 2.6.19, created on 2012-01-08 15:46:03
         compiled from includes/pages/nodes/myview.tpl */ ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['PANORAMIC'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('panoramic', ob_get_contents()); ob_end_clean();
 ?>
<table border="0" cellspacing="0" align="center">
	<tr>
	<td colspan="3"><br/></td>
	</tr>
	<tr>
	<td class="node-view-left-top" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['NW'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	<td class="node-view-left-top" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['N'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	<td class="node-view-right-top" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['NE'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	</tr>
	<tr>
	<td class="node-view-left-mid" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['W'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	<td class="node-view-left-mid" ><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
compass.png" /></td>
	<td class="node-view-right-mid" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['E'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	</tr>
	<tr>
	<td class="node-view-left-bottom" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['SW'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	<td class="node-view-left-bottom" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['S'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	<td class="node-view-right-bottom" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/photosview_image.tpl", 'smarty_include_vars' => array('image' => $this->_tpl_vars['photosview']['SE'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	</tr>
	<tr>
	<td colspan="3" align="center"><?php $this->assign('t', "photos__view_point-PANORAMIC"); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/title5.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['db'][$this->_tpl_vars['t']]),'content' => $this->_tpl_vars['panoramic'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
	</tr>
</table>