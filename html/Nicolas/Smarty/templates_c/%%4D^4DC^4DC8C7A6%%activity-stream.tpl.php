<?php /* Smarty version 2.6.30, created on 2019-04-24 17:35:00
         compiled from activity-stream.tpl */ ?>
<span id="preview_status"></span>
<ul class="pm-activity-stream list-unstyled">
	<?php $_from = $this->_tpl_vars['activity_meta_bucket']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['activity_index'] => $this->_tpl_vars['activity_meta']):
?>
      	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'activity-stream-item.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; else: ?>
        <li><?php echo $this->_tpl_vars['lang']['my_activity_empty']; ?>
</li>
    <?php endif; unset($_from); ?>
</ul>
<?php if ($this->_tpl_vars['total_activities'] == @ACTIVITIES_PER_PAGE): ?>
	<div class="clearfix"></div>
    <span id="btn_activity_stream_load_more"></span>
<?php endif; ?>