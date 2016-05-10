<?php /* Smarty version 2.6.19, created on 2012-01-15 04:56:44
         compiled from includes/pages/gmap/gmap_fullmap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wordwrap', 'includes/pages/gmap/gmap_fullmap.tpl', 25, false),array('modifier', 'nl2br', 'includes/pages/gmap/gmap_fullmap.tpl', 25, false),array('function', 'html_image', 'includes/pages/gmap/gmap_fullmap.tpl', 28, false),)), $this); ?>
<table class="table-main" cellpadding="0" cellspacing="0"><tr><td style="font-size:12px; text-align:center; width: 100%; height: 100%">
<?php if ($this->_tpl_vars['gmap_key_ok']): ?>
<div id="map" style="width: 100%; height: 100%"></div>
<?php else: ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['message']['error']['gmap_key_failed']['body'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 40) : smarty_modifier_wordwrap($_tmp, 40)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<?php endif; ?>
</td></tr><tr><td style="font-size:12px;" align="center">
<input type="checkbox" name="p2p" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_orange.png",'alt' => $this->_tpl_vars['lang']['backbone']), $this);?>
<?php echo $this->_tpl_vars['lang']['backbone']; ?>

<input type="checkbox" name="aps" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_green.png",'alt' => $this->_tpl_vars['lang']['aps']), $this);?>
<?php echo $this->_tpl_vars['lang']['aps']; ?>

<input type="checkbox" name="hs" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_green.png",'alt' => $this->_tpl_vars['lang']['hs']), $this);?>
<?php echo $this->_tpl_vars['lang']['hs']; ?>

<input type="checkbox" name="clients" checked="checked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_blue.png",'alt' => $this->_tpl_vars['lang']['clients']), $this);?>
<?php echo $this->_tpl_vars['lang']['clients']; ?>

<input type="checkbox" name="unlinked" onclick="gmap_refresh();" /><?php echo smarty_function_html_image(array('file' => ($this->_tpl_vars['img_dir'])."/gmap/mm_20_red.png",'alt' => $this->_tpl_vars['lang']['unlinked']), $this);?>
<?php echo $this->_tpl_vars['lang']['unlinked']; ?>

</td></tr>
</table>