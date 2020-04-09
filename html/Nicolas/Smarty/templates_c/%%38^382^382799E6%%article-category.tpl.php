<?php /* Smarty version 2.6.30, created on 2019-07-01 09:26:19
         compiled from article-category.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'article','tpl_name' => 'article-category')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">

				<div id="category-header" class="container-fluid">
					<div class="pm-category-highlight">
					<h1><?php echo $this->_tpl_vars['article_h2']; ?>
</h1>
					</div>
				</div>

				<?php if ($this->_tpl_vars['cat_id'] > 0 && $this->_tpl_vars['categories'][$this->_tpl_vars['cat_id']]['description']): ?>
				<div class="pm-category-description">
				<?php echo $this->_tpl_vars['categories'][$this->_tpl_vars['cat_id']]['description']; ?>

				</div>
				<div class="clearfix"></div>
				<?php endif; ?>

				<?php if (! is_array ( $this->_tpl_vars['articles'] )): ?>
				<article class="post">
					<h1><?php echo $this->_tpl_vars['articles']; ?>
</h1>
				</article>
				<?php else: ?>
				<ul class="pm-ul-browse-articles list-unstyled">
					<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['article']):
?>
					<li<?php if ($this->_tpl_vars['article']['featured'] == '1'): ?> class="sticky-article"<?php endif; ?>>
						<article class="post">
							<header>
								<?php if ($this->_tpl_vars['logged_in'] && $this->_tpl_vars['is_admin'] == 'yes'): ?>
								<span class="pull-right"><a href="<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/article_manager.php?do=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
 (<?php echo $this->_tpl_vars['lang']['_admin_only']; ?>
)" target="_blank" class="btn btn-sm btn-default"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a></span>
								<?php endif; ?>
								<h2><a href="<?php echo $this->_tpl_vars['article']['link']; ?>
" title="<?php echo $this->_tpl_vars['article']['title']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></h2>
								<div class="entry-meta">
									<span class="entry-date"><i class="fa fa-clock-o"></i> <a rel="bookmark" href="<?php echo $this->_tpl_vars['article']['link']; ?>
"><time datetime="<?php echo $this->_tpl_vars['article']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['article']['full_datetime']; ?>
" pubdate><?php echo $this->_tpl_vars['article']['date']; ?>
</time></a></span>
									<span class="entry-author"><i class="fa fa-user"></i> <a href="<?php echo $this->_tpl_vars['article']['author_profile_href']; ?>
"><?php echo $this->_tpl_vars['article']['name']; ?>
</a></span>
									<span class="entry-comments"><i class="fa fa-comment"></i> <a href="<?php echo $this->_tpl_vars['article']['link']; ?>
#jump-comments"><?php echo $this->_tpl_vars['article']['comment_count']; ?>
 <?php echo $this->_tpl_vars['lang']['comments']; ?>
</a></span>
								</div>
							</header><!-- /header -->

							<?php if ($this->_tpl_vars['article']['restricted'] == '1' && ! $this->_tpl_vars['logged_in']): ?>
								<?php echo $this->_tpl_vars['lang']['article_restricted_sorry']; ?>

							<?php else: ?>
							<div class="entry-summary">
									<?php echo $this->_tpl_vars['article']['content']; ?>

									<a href="<?php echo $this->_tpl_vars['article']['link']; ?>
" class="btn btn-default entry-read-more"><?php echo $this->_tpl_vars['lang']['read_more']; ?>
</a>
							</div>
							<?php endif; ?>
						</article>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<?php endif; ?>
				<div class="clearfix"></div>

				<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-pagination-obj.tpl', 'smarty_include_vars' => array('custom_class' => 'pagination-arrows')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			</div>

			<div class="col-md-4">
				
				<div class="widget">
					<h4><?php echo $this->_tpl_vars['lang']['_categories']; ?>
</h4>
					<ul class="pm-ul-list-categories list-unstyled">
						<?php echo $this->_tpl_vars['article_categories']; ?>

					</ul>
				</div>

			</div>
		</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('tpl_name' => 'article-category')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>