<?php /* Smarty version 2.6.30, created on 2019-12-12 16:33:44
         compiled from comment-list.tpl */ ?>
<ul class="pm-ul-comments list-unstyled<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?> article-comments<?php elseif ($this->_tpl_vars['tpl_name'] == 'video-watch'): ?> video-comments<?php endif; ?>">
    
	<?php if (is_array ( $this->_tpl_vars['most_liked_comment'] )): ?>
            
	<li id="comment-999" class="media pm-top-comment">
            
		<div class="label-top-comment"><?php echo $this->_tpl_vars['lang']['top_comment']; ?>
</div>
                
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'comment-list-li-body.tpl', 'smarty_include_vars' => array('comment_data' => $this->_tpl_vars['most_liked_comment'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                
	</li>
        
	<?php endif; ?>
        
	<li id="preview_comment" class="media"></li>
        
	<?php $_from = $this->_tpl_vars['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['comment_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comment_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['comment_data']):
        $this->_foreach['comment_foreach']['iteration']++;
?>
        
	<li id="comment-<?php echo $this->_foreach['comment_foreach']['iteration']; ?>
" class="media <?php if ($this->_tpl_vars['comment_data']['downvoted']): ?>pm-downvoted-comment<?php endif; ?>">
            
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'comment-list-li-body.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                
	</li>
        
	<?php endforeach; endif; unset($_from); ?>
        
</ul>