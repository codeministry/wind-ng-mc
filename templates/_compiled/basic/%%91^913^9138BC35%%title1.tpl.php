<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:27
         compiled from generic/title1.tpl */ ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="table-d1">
	<tr>
		<td width="6" class="table-d1-side">&nbsp;</td>
		<td nowrap="nowrap" class="table-d1-title-text" >
			<?php echo $this->_tpl_vars['title']; ?>

		</td>
		<?php if ($this->_tpl_vars['right'] != ''): ?><td nowrap="nowrap"><?php echo $this->_tpl_vars['right']; ?>
</td><?php endif; ?>
		<td width="10" class="table-d1-title-space"></td>
		<td width="299" class="table-d1-title-border">&nbsp;</td>
		<td width="6" class="table-d1-side2">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="2" class="table-d1-side">&nbsp;</td>
		<td colspan="<?php if ($this->_tpl_vars['right'] != ''): ?>4<?php else: ?>3<?php endif; ?>" class="table-d1-title-down"></td>
		<td rowspan="2" class="table-d1-side2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="<?php if ($this->_tpl_vars['right'] != ''): ?>4<?php else: ?>3<?php endif; ?>" class="table-d1-text1">
			<?php echo $this->_tpl_vars['content']; ?>

		</td>
	</tr>
</table>