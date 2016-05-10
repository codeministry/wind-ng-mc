<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:16
         compiled from generic/qs.tpl */ ?>
<?php $_from = $this->_tpl_vars['qs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['item']; ?>
" />
<?php endforeach; endif; unset($_from); ?>