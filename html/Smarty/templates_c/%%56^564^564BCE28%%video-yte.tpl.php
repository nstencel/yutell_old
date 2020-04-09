<?php /* Smarty version 2.6.30, created on 2019-12-13 16:08:03
         compiled from video-yte.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'general','tpl_name' => "video-new")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div id="category-header" class="container-fluid pm-new-videos-page">
					<div class="pm-category-highlight">
						<h1>YuTell Emotional</h1>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="pm-section-head">
					<div class="btn-group btn-group-sort">
						<button class="btn btn-default" id="show-grid" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['_grid']; ?>
"><i class="fa fa-th"></i></button>
						
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo $this->_tpl_vars['lang']['sorting']; ?>
 <span class="caret"></span>
						</button>
						<ul class="dropdown-menu scrollable-menu" role="menu">
							<li><a href="<?php echo @_URL; ?>
/YTEvideos.<?php echo @_FEXT; ?>
">ALL</a></li>
							<li><a href="<?php echo @_URL; ?>
/YTEvideos.<?php echo @_FEXT; ?>
?d=YT1">Rating 0-1</a></li>
							<li><a href="<?php echo @_URL; ?>
/YTEvideos.<?php echo @_FEXT; ?>
?d=YT2">Rating 1-2</a></li>
							<li><a href="<?php echo @_URL; ?>
/YTEvideos.<?php echo @_FEXT; ?>
?d=YT3">Rating 2-3</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

		<ul class="row pm-ul-browse-videos list-unstyled" id="pm-grid">
		<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
		<li class="col-xs-12 col-sm-8 col-md-4">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</li>
		<?php endforeach; else: ?>
		<li class="col-xs-12 col-sm-12 col-md-12">
			<?php echo $this->_tpl_vars['lang']['top_videos_msg2']; ?>

		</li>
		<?php endif; unset($_from); ?>
		</ul>
		<div class="clearfix"></div>

		
		<?php if ($this->_tpl_vars['empty_results']): ?>
			<p class="alert"><?php echo $this->_tpl_vars['lang']['nv_page_sorry_msg']; ?>
</p>
		<?php endif; ?>

		<div class="clearfix"></div>
		<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-pagination-obj.tpl', 'smarty_include_vars' => array('custom_class' => 'pagination-arrows')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "video-new")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>