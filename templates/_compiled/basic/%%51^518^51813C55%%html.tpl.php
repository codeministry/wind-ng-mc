<?php /* Smarty version 2.6.19, created on 2012-01-08 15:23:55
         compiled from includes/html.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['lang']['charset']; ?>
"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang']['iso639']; ?>
" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<?php echo $this->_tpl_vars['head']; ?>

<link href="<?php echo $this->_tpl_vars['css_dir']; ?>
styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
overlib/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>
<!-- tabs - wavesoft@wna.gr -->
<link href="<?php echo $this->_tpl_vars['css_dir']; ?>
wavetabs.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
mootools-compact-1.3.1.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
wavetabs.js"></script>
<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "/home/wnagr/public_html/globalhr/include.head.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

</head>
<body<?php $_from = $this->_tpl_vars['body_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?> <?php echo $this->_tpl_vars['key']; ?>
="<?php echo $this->_tpl_vars['item']; ?>
"<?php endforeach; endif; unset($_from); ?>>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<?php echo $this->_tpl_vars['body']; ?>

</body>
</html>