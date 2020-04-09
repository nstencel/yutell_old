<?php /* Smarty version 2.6.30, created on 2019-12-12 15:31:45
         compiled from page.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'page')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div id="content" class="pm-text-pages">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h1><?php echo $this->_tpl_vars['page']['title']; ?>
</h1>
					<?php echo $this->_tpl_vars['page']['content']; ?>

			</div><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>