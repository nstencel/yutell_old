<?php /* Smarty version 2.6.30, created on 2019-04-23 18:03:39
         compiled from comment-pagination.tpl */ ?>
<div class="row">
    <div class="col-md-12 text-center">
	<ul class="pagination pagination-sm pagination-arrows">
		<?php $_from = $this->_tpl_vars['comment_pagination_obj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['comment_pagination_data']):
?>
		<li<?php $_from = $this->_tpl_vars['comment_pagination_data']['li']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr'] => $this->_tpl_vars['attr_val']):
?> <?php echo $this->_tpl_vars['attr']; ?>
="<?php echo $this->_tpl_vars['attr_val']; ?>
"<?php endforeach; endif; unset($_from); ?>>
			<a<?php $_from = $this->_tpl_vars['comment_pagination_data']['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr'] => $this->_tpl_vars['attr_val']):
?> <?php echo $this->_tpl_vars['attr']; ?>
="<?php echo $this->_tpl_vars['attr_val']; ?>
"<?php endforeach; endif; unset($_from); ?>><?php echo $this->_tpl_vars['comment_pagination_data']['text']; ?>
</a>
		</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
</div>