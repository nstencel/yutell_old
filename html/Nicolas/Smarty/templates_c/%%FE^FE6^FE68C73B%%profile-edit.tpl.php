<?php /* Smarty version 2.6.30, created on 2019-04-24 17:21:28
         compiled from profile-edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general','tpl_name' => "profile-edit")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile-header.tpl", 'smarty_include_vars' => array('p' => "profile-edit")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content" class="content-detached content-video-handler">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-7 col-sm-7 col-md-10">
			<h1><?php echo $this->_tpl_vars['lang']['edit_profile']; ?>
</h1>
		</div>
		<div class="col-xs-5 col-sm-5 col-md-2">
			<div class="pull-right">
				<div>
					<small><div id="uploadProgressBar"></div></small>
					<div id="divStatus"></div>
					<ol id="uploadLog" class="list-unstyled"></ol>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
		<?php if ($this->_tpl_vars['success'] == 1): ?>
		<div class="alert alert-success"><?php echo $this->_tpl_vars['lang']['ep_msg1']; ?>
</div>
			<?php if ($this->_tpl_vars['changed_pass'] == 1): ?>
			<div class="alert alert-success"><?php echo $this->_tpl_vars['lang']['ep_msg2']; ?>
</div>
			<meta http-equiv="refresh" content="5;URL=<?php echo @_URL; ?>
">
			<?php endif; ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'profile-edit-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php if ($this->_tpl_vars['errors']['failure'] != ''): ?>
				<?php echo $this->_tpl_vars['errors']['failure']; ?>

			<?php endif; ?>
		
		<?php if ($this->_tpl_vars['nr_errors'] > 0): ?>
		<div class="alert alert-danger">
			<ul class="list-unstyled">
			<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
				<li><?php echo $this->_tpl_vars['error']; ?>
</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<?php endif; ?> 
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'profile-edit-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</div><!-- #content -->
	</div><!-- .row -->
</div><!-- .container -->
		
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 