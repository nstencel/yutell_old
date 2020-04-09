<?php /* Smarty version 2.6.30, created on 2019-04-24 18:05:53
         compiled from profile-playlist-view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('no_index' => '1','p' => 'playlists')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile-header.tpl", 'smarty_include_vars' => array('p' => 'playlists')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content" class="content-detached">
	<div class="container-fluid">

	<div class="row row-page-heading">
		<div class="col-md-12">
			<!--<i class="mico mico-keyboard_arrow_left md-24"></i> -->
			<h1><?php if ($this->_tpl_vars['my_playlist']): ?><a href="<?php echo @_URL; ?>
/playlists.<?php echo @_FEXT; ?>
" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['my_playlists']; ?>
"><?php echo $this->_tpl_vars['lang']['manage_playlists']; ?>
</a><?php else: ?>"<?php echo $this->_tpl_vars['playlist']['title']; ?>
" <?php if (! $this->_tpl_vars['my_playlist']): ?><?php echo $this->_tpl_vars['lang']['_by']; ?>
 <a href="<?php echo $this->_tpl_vars['playlist']['user_profile_href']; ?>
"><?php echo $this->_tpl_vars['playlist']['user_name']; ?>
</a><?php endif; ?><?php endif; ?></h1>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
			<?php if (! is_array ( $this->_tpl_vars['playlist'] )): ?>
				<div class="alert alert-danger">
					<?php echo $this->_tpl_vars['lang']['playlist_not_found']; ?>

				</div>
			<?php elseif ($this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PRIVATE && ! $this->_tpl_vars['my_playlist']): ?>
				<div class="alert alert-info">
					<i class="fa fa-lock"></i> <?php echo $this->_tpl_vars['lang']['playlist_private']; ?>

				</div>
			<?php else: ?>
				<div class="pm-playlist-edit">
					<div class="row pm-pl-header">
						<div class="hidden-xs col-sm-3 col-md-2">
							<div class="pm-pl-thumb">
							<img src="<?php echo $this->_tpl_vars['playlist']['thumb_url']; ?>
" border="0" class="img-responsive">
							<a href="<?php echo $this->_tpl_vars['playlist']['playlist_watch_all_href']; ?>
" class="thumbnail-overlay" rel="nofollow">&#9658; <?php echo $this->_tpl_vars['lang']['play_all']; ?>
</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<div class="pm-pl-header-title">
								<?php if ($this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PRIVATE): ?>
									<a href="#playlist-settings" <?php if ($this->_tpl_vars['my_playlist']): ?>data-toggle="modal" data-backdrop="true" data-keyboard="true"<?php endif; ?> rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_private_desc']; ?>
" class="pm-pl-status-icon"><i class="fa fa-lock"></i></a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PUBLIC): ?>
									<a href="#playlist-settings" <?php if ($this->_tpl_vars['my_playlist']): ?>data-toggle="modal" data-backdrop="true" data-keyboard="true"<?php endif; ?> rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_public_desc']; ?>
" class="pm-pl-status-icon"><i class="fa fa-unlock"></i></a>
								<?php endif; ?>
								<h3 class="ellipsis"><?php echo $this->_tpl_vars['playlist']['title']; ?>
</h3>
							</div>

							<ul class="list-unstyled list-inline">
								<li><?php echo $this->_tpl_vars['lang']['_by']; ?>
 <a href="<?php echo $this->_tpl_vars['playlist']['user_profile_href']; ?>
"><?php echo $this->_tpl_vars['playlist']['user_name']; ?>
</a></li>
								<li><?php if ($this->_tpl_vars['playlist']['items_count'] == 1): ?>1 <?php echo $this->_tpl_vars['lang']['_video']; ?>
<?php else: ?><?php echo $this->_tpl_vars['playlist']['items_count']; ?>
 <?php echo $this->_tpl_vars['lang']['videos']; ?>
<?php endif; ?></li>
							</ul>
							
							<div class="pm-pl-actions">
								<?php if ($this->_tpl_vars['playlist']['items_count'] > 0): ?>
								<a href="<?php echo $this->_tpl_vars['playlist']['playlist_watch_all_href']; ?>
" class="btn btn-sm btn-default" rel="nofollow"><i class="fa fa-play"></i> <?php echo $this->_tpl_vars['lang']['play_all']; ?>
</a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['share_link'] != '' && $this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PUBLIC): ?>
								<a href="#playlist-share" class="btn btn-sm btn-default" data-toggle="modal" data-backdrop="true" data-keyboard="true"><i class="fa fa-share"></i> <?php echo $this->_tpl_vars['lang']['_share']; ?>
</a>
								<?php endif; ?>

								<?php if ($this->_tpl_vars['my_playlist'] && $this->_tpl_vars['playlist']['type'] != @PLAYLIST_TYPE_WATCH_LATER && $this->_tpl_vars['playlist']['type'] != @PLAYLIST_TYPE_HISTORY): ?>
								<a href="#playlist-settings" class="btn btn-sm btn-default" data-toggle="modal" data-backdrop="true" data-keyboard="true"><i class="fa fa-cog"></i> <?php echo $this->_tpl_vars['lang']['playlist_settings']; ?>
</a>
								<?php endif; ?>

								<?php if ($this->_tpl_vars['my_playlist'] && $this->_tpl_vars['playlist']['type'] == @PLAYLIST_TYPE_CUSTOM): ?>
								<a href="#" class="btn btn-sm btn-danger btn-with-loader hidden-xs" <?php if ($this->_tpl_vars['playlist']['type'] == @PLAYLIST_TYPE_CUSTOM): ?> onclick="playlist_delete(<?php echo $this->_tpl_vars['playlist']['list_id']; ?>
, this);" <?php endif; ?>><?php echo $this->_tpl_vars['lang']['submit_delete']; ?>
</a>
								<?php endif; ?>



							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<ul class="pm-pl-list list-unstyled">
						<?php if ($this->_tpl_vars['playlist']['items_count'] == 0): ?>
						<li>
							<p><?php echo $this->_tpl_vars['lang']['playlist_empty']; ?>
</p>
						</li>
						<?php else: ?>
						<?php $_from = $this->_tpl_vars['playlist_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['playlist_items_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['playlist_items_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['list_video']):
        $this->_foreach['playlist_items_foreach']['iteration']++;
?>
						<li id="playlist_item_<?php echo $this->_tpl_vars['list_video']['id']; ?>
">
							<div class="pm-pl-list-index visible-md visible-lg"><?php echo $this->_tpl_vars['index']+1; ?>
</div>
							<div class="pm-pl-list-thumb"><a href="<?php echo $this->_tpl_vars['list_video']['playlist_video_href']; ?>
" rel="nofollow"><img src="<?php echo $this->_tpl_vars['list_video']['thumb_img_url']; ?>
" height="40" border="0"></a></div>
							<div class="pm-pl-list-title">
								<h3><a href="<?php echo $this->_tpl_vars['list_video']['playlist_video_href']; ?>
" rel="nofollow"><?php echo $this->_tpl_vars['list_video']['video_title']; ?>
</a></h3>
								<div class="pm-pl-list-author hidden-xs"><?php echo $this->_tpl_vars['lang']['submittedby']; ?>
 <a href="<?php echo $this->_tpl_vars['list_video']['author_profile_href']; ?>
"><?php echo $this->_tpl_vars['list_video']['author_name']; ?>
</a></div>
							</div>
							
							<?php if ($this->_tpl_vars['my_playlist']): ?>
							<div class="pm-pl-list-action">
								<a href="#" class="btn btn-sm btn-link" onclick="playlist_delete_item(<?php echo $this->_tpl_vars['playlist']['list_id']; ?>
, <?php echo $this->_tpl_vars['list_video']['id']; ?>
, '#playlist_item_<?php echo $this->_tpl_vars['list_video']['id']; ?>
'); return false;" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_remove_item']; ?>
"><i class="fa fa-trash"></i></a>
							</div>
							<?php endif; ?>
						</li>
						<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</div>


		<!-- #playlist-share modal -->
		<?php if ($this->_tpl_vars['share_link'] != '' && $this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PUBLIC): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-playlist-share.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>

		<!-- #playlist-settings modal -->
		<?php if ($this->_tpl_vars['playlist']['type'] != @PLAYLIST_TYPE_WATCH_LATER && $this->_tpl_vars['playlist']['type'] != @PLAYLIST_TYPE_HISTORY): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-playlist-settings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</div><!-- #content -->
	</div><!-- .row -->
</div><!-- .container-fluid -->     
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 