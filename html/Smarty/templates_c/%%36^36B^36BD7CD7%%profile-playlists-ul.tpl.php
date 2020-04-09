<?php /* Smarty version 2.6.30, created on 2020-01-30 20:18:30
         compiled from profile-playlists-ul.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'profile-playlists-ul.tpl', 11, false),)), $this); ?>
<ul class="row pm-ul-browse-playlists list-unstyled">
	<?php $_from = $this->_tpl_vars['playlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['playlists_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['playlists_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['playlist_data']):
        $this->_foreach['playlists_foreach']['iteration']++;
?>
		<li class="col-xs-6 col-sm-4 col-md-3">
			<div class="thumbnail">
				<div class="pm-video-thumb">
					<img src="<?php echo $this->_tpl_vars['playlist_data']['thumb_url']; ?>
" alt="<?php echo $this->_tpl_vars['playlist_data']['title']; ?>
" class="img-responsive">
					<div class="pm-pl-count"><span class="pm-pl-items"><?php echo $this->_tpl_vars['playlist_data']['items_count']; ?>
</span> <?php if ($this->_tpl_vars['playlist_data']['items_count'] == 1): ?><?php echo $this->_tpl_vars['lang']['_video']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['videos']; ?>
<?php endif; ?></div> 
					<a href="<?php echo $this->_tpl_vars['playlist_data']['playlist_watch_all_href']; ?>
" class="thumbnail-overlay" rel="nofollow">&#9658; <?php echo $this->_tpl_vars['lang']['play_all']; ?>
</a>
				</div>
				<div class="caption">
				<h3 class="ellipsis-line"><?php if ($this->_tpl_vars['playlist_data']['visibility'] == @PLAYLIST_PRIVATE): ?><i class="fa fa-lock"></i> <?php endif; ?><a href="<?php if ($this->_tpl_vars['s_user_id'] == $this->_tpl_vars['playlist_data']['user_id']): ?><?php echo $this->_tpl_vars['playlist_data']['playlist_href']; ?>
<?php else: ?><?php echo $this->_tpl_vars['playlist_data']['playlist_watch_all_href']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['playlist_data']['title']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlist_data']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</a></h3>
				<div class="pm-video-meta hidden-xs">
					<span class="pm-video-since"><time datetime="<?php echo $this->_tpl_vars['playlist_data']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['playlist_data']['full_datetime']; ?>
"><?php echo $this->_tpl_vars['playlist_data']['time_since']; ?>
 <?php echo $this->_tpl_vars['lang']['ago']; ?>
</time></span>
				</div>
				</div>
			</div>
		</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>