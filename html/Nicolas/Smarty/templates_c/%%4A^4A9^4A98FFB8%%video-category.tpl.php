<?php /* Smarty version 2.6.30, created on 2019-04-23 13:39:55
         compiled from video-category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'video-category.tpl', 36, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general','tpl_name' => "video-category")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">

<div id="category-header" class="container-fluid">
	<div class="pm-category-highlight">
		<h1><?php echo $this->_tpl_vars['gv_category_name']; ?>
</h1>

		<div class="clearfix"></div>

		<?php if ($this->_tpl_vars['gv_category_description']): ?>
			<div class="pm-category-description">
			<?php echo $this->_tpl_vars['gv_category_description']; ?>

			</div>
		<?php endif; ?>

	</div>
	<?php if (! empty ( $this->_tpl_vars['list_subcats'] )): ?>
	<div class="row pm-category-header-subcats">
		<div class="col-md-12">
			<div class="pm-section-head">
				<h2><?php echo $this->_tpl_vars['lang']['related_cats']; ?>
</h2>
				<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_subcategories"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_subcategories"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<ul class="pm-ul-carousel-videos list-inline pm-ul-browse-subcategories thumbnails" data-slider-id="subcategories" data-slides="5" id="pm-carousel_subcategories">
			<?php $_from = $this->_tpl_vars['categories_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['category_data']):
?>
				<?php if ($this->_tpl_vars['category_data']['parent_id'] == $this->_tpl_vars['cat_id']): ?>
				<li>
					<div class="pm-li-category">
					<a href="<?php echo $this->_tpl_vars['category_data']['url']; ?>
">
						<span class="pm-video-thumb pm-thumb">
							<div class="pm-thumb-fix"><span class="pm-thumb-fix-clip"><img src="<?php echo $this->_tpl_vars['category_data']['image_url']; ?>
" alt="<?php echo $this->_tpl_vars['category_data']['attr_alt']; ?>
"><span class="vertical-align"></span></span></div>
						</span>
						<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['category_data']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 32) : smarty_modifier_truncate($_tmp, 32)); ?>
</h3>
					</a>
					</div>
				</li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
</div>

	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">

		<?php if (! empty ( $this->_tpl_vars['results'] )): ?>
			<div class="pm-section-head">
				<div class="btn-group btn-group-sort">
					<a class="btn btn-default" id="show-grid" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['_grid']; ?>
"><i class="fa fa-th"></i></a>
					<a class="btn btn-default" id="show-list" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['_list']; ?>
"><i class="fa fa-list"></i></a>
					<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-target="#">
					<?php if ($this->_tpl_vars['gv_sortby'] == ''): ?><?php echo $this->_tpl_vars['lang']['sorting']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['gv_sortby'] == 'date'): ?><?php echo $this->_tpl_vars['lang']['date']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['gv_sortby'] == 'views'): ?><?php echo $this->_tpl_vars['lang']['views']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['gv_sortby'] == 'rating'): ?><?php echo $this->_tpl_vars['lang']['rating']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['gv_sortby'] == 'title'): ?><?php echo $this->_tpl_vars['lang']['title']; ?>
<?php endif; ?>
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php if (@_SEOMOD == '1'): ?>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'date'): ?>class="selected"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/browse-<?php echo $this->_tpl_vars['gv_cat']; ?>
-videos-<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
-date.html" rel="nofollow"><?php echo $this->_tpl_vars['lang']['date']; ?>
</a></li>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'views'): ?>class="selected"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/browse-<?php echo $this->_tpl_vars['gv_cat']; ?>
-videos-<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
-views.html" rel="nofollow"><?php echo $this->_tpl_vars['lang']['views']; ?>
</a></li>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'rating'): ?>class="active"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/browse-<?php echo $this->_tpl_vars['gv_cat']; ?>
-videos-<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
-rating.html" rel="nofollow"><?php echo $this->_tpl_vars['lang']['rating']; ?>
</a></li>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'title'): ?>class="active"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/browse-<?php echo $this->_tpl_vars['gv_cat']; ?>
-videos-<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
-title.html" rel="nofollow"><?php echo $this->_tpl_vars['lang']['title']; ?>
</a></li>
						<?php else: ?>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'date'): ?>class="selected"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/category.php?cat=<?php echo $this->_tpl_vars['gv_cat']; ?>
&page=<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
&sortby=date" rel="nofollow"><?php echo $this->_tpl_vars['lang']['date']; ?>
</a></li>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'views'): ?>class="selected"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/category.php?cat=<?php echo $this->_tpl_vars['gv_cat']; ?>
&page=<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
&sortby=views" rel="nofollow"><?php echo $this->_tpl_vars['lang']['views']; ?>
</a></li>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'rating'): ?>class="selected"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/category.php?cat=<?php echo $this->_tpl_vars['gv_cat']; ?>
&page=<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
&sortby=rating" rel="nofollow"><?php echo $this->_tpl_vars['lang']['rating']; ?>
</a></li>
						<li <?php if ($this->_tpl_vars['gv_sortby'] == 'title'): ?>class="selected"<?php endif; ?>>
						<a href="<?php echo @_URL; ?>
/category.php?cat=<?php echo $this->_tpl_vars['gv_cat']; ?>
&page=<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
&sortby=title" rel="nofollow"><?php echo $this->_tpl_vars['lang']['title']; ?>
</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>

			<ul class="row pm-ul-browse-videos list-unstyled" id="pm-grid">
			<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
				<li class="col-xs-6 col-sm-4 col-md-3">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
			<div class="clearfix"></div>

			<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-pagination-obj.tpl', 'smarty_include_vars' => array('custom_class' => 'pagination-arrows')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>

		<?php else: ?>
			<div class="row">
				<div class="col-md-12 text-center">
					<p></p>
					<p><?php echo $this->_tpl_vars['lang']['browse_msg2']; ?>
</p>
				</div>
			</div>
		<?php endif; ?>


		</div><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "video-category")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>