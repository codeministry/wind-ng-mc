<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:27
         compiled from generic/link.tpl */ ?>
<?php if ($this->_tpl_vars['confirm'] == TRUE): ?><?php $this->assign('link', "javascript: if (confirm('".($this->_tpl_vars['content'])."?') == true) window.open('".($this->_tpl_vars['link'])."','_parent');"); ?><?php endif; ?>
<span style="font-weight:bold; font-size: 9px; color: orange;">|<a href="<?php echo $this->_tpl_vars['link']; ?>
"<?php if ($this->_tpl_vars['onclick'] != ''): ?> onclick="<?php echo $this->_tpl_vars['onclick']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['target'] != ''): ?> target="<?php echo $this->_tpl_vars['target']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['content']; ?>
</a>|</span>