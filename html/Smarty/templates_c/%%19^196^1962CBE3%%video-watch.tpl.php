<?php /* Smarty version 2.6.30, created on 2020-01-01 14:25:14
         compiled from video-watch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'video-watch.tpl', 9, false),array('modifier', 'sprintf', 'video-watch.tpl', 12, false),array('modifier', 'date_format', 'video-watch.tpl', 89, false),array('modifier', 'truncate', 'video-watch.tpl', 182, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'detail','tpl_name' => "video-watch")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="pm-section-highlighted">
	<div class="container-fluid">
		<div class="row">
			<div class="container" align="center">
				<div class="row pm-video-heading" align="center">
					<div class="col-xs-8 col-sm-8 col-md-8" align="center">
						<?php if ($this->_tpl_vars['video_data']['featured'] == 1): ?>
						<span class="label label-featured"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['featured'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Featured') : smarty_modifier_default($_tmp, 'Featured')); ?>
</span>
						<?php endif; ?>
						
						<?php if ($this->_tpl_vars['playlist']): ?><h6><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['lang']['from_playlist'])) ? $this->_run_mod_handler('default', true, $_tmp, 'This video is part of the %s playlist.') : smarty_modifier_default($_tmp, 'This video is part of the %s playlist.')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['playlist']['title']) : sprintf($_tmp, $this->_tpl_vars['playlist']['title'])); ?>
</h6><?php endif; ?>
						<meta itemprop="duration" content="<?php echo $this->_tpl_vars['video_data']['iso8601_duration']; ?>
" />
						<meta itemprop="thumbnailUrl" content="<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
" />
						<meta itemprop="contentURL" content="<?php echo @_URL2; ?>
/videos.php?vid=<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
" />
						<?php if ($this->_tpl_vars['video_data']['allow_embedding'] == 1): ?>
						<meta itemprop="embedURL" content="<?php echo $this->_tpl_vars['video_data']['embed_href']; ?>
" />
						<?php endif; ?>
						<meta itemprop="uploadDate" content="<?php echo $this->_tpl_vars['video_data']['html5_datetime']; ?>
" />
					</div>
					<div class="hidden-xs hidden-sm col-md-2" align="center">
						<div class="pm-video-adjust btn-group" align="center">
							<?php if ($this->_tpl_vars['logged_in'] && $this->_tpl_vars['is_admin'] == 'yes' && ! $this->_tpl_vars['video_data']['in_trash']): ?>
							<a href="<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/modify.php?vid=<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
" class="btn btn-sm btn-default" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
 (<?php echo $this->_tpl_vars['lang']['_admin_only']; ?>
)" target="_blank"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> <a href="#" onclick="return confirm_action(pm_lang.delete_video_confirmation, '<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/modify.php?vid=<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
&a=3'); return false;" class="btn btn-sm btn-danger" rel="tooltip" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['trash'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Trash') : smarty_modifier_default($_tmp, 'Trash')); ?>
 (<?php echo $this->_tpl_vars['lang']['_admin_only']; ?>
)" target="_blank"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['trash'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Trash') : smarty_modifier_default($_tmp, 'Trash')); ?>
</a>
							<?php endif; ?>
						</div>
					</div>
				</div><!-- /.pm-video-watch-heading -->

				<div class="col-md-6" align="center">
					<div id="player" class="<?php if ($this->_tpl_vars['ad_5']): ?>col-xs-3 col-sm-3 col-md-3 narrow-player<?php else: ?>col-xs-3 col-sm-3 col-md-3 wide-player<?php endif; ?>" align="center">
						<div id="video-wrapper" align="center">
						<?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
						<div id="preroll_placeholder" align="center">
							<div class="preroll_countdown" align="center">
							<?php echo $this->_tpl_vars['lang']['preroll_ads_timeleft']; ?>
 <span class="preroll_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['timeleft_start']; ?>
</span>

								<?php if ($this->_tpl_vars['preroll_ad_data']['skip']): ?>
								<div class="preroll_skip_button">
									<div class="btn btn-sm btn-success preroll_skip_countdown"  disabled="disabled" id="">
										<?php echo $this->_tpl_vars['lang']['preroll_ads_skip']; ?>
 (<span class="preroll_skip_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['skip_delay_seconds']; ?>
</span>)
									</div>
									<button class="btn btn-sm btn-success hide-me" id="preroll_skip_btn"><?php echo $this->_tpl_vars['lang']['preroll_ads_skip']; ?>
</button>
								</div>
								<?php endif; ?>

							</div>
							<?php echo $this->_tpl_vars['preroll_ad_data']['code']; ?>

							<?php if ($this->_tpl_vars['preroll_ad_data']['disable_stats'] == 0): ?>
								<img src="<?php echo @_URL; ?>
/ajax.php?p=stats&do=show&aid=<?php echo $this->_tpl_vars['preroll_ad_data']['id']; ?>
&at=<?php echo @_AD_TYPE_PREROLL; ?>
" width="1" height="1" border="0" />
							<?php endif; ?>
						</div>
						<?php else: ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'detail')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endif; ?>
						</div><!--video-wrapper-->
					</div><!--/#player-->

					<?php if ($this->_tpl_vars['ad_5']): ?>
					<div class="col-xs-3 col-sm-3 col-md-3" align="center">
						<div class="pm-ads-banner" align="center"><?php echo $this->_tpl_vars['ad_5']; ?>
</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="content">
<?php if ($this->_tpl_vars['show_addthis_widget'] == '1'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'widget-socialite.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div>
	<div class="row pm-video-control" align="center">
		<div class="col-xs-12 col-sm-12 col-md-6 " align="center">
			
				
                                <h2><?php echo $this->_tpl_vars['video_data']['author_name']; ?>
 | <?php echo $this->_tpl_vars['video_data']['video_title']; ?>
</h2> 
                                <div>
					<?php echo $this->_tpl_vars['video_data']['description']; ?>

				</div>
                                
                                                        <ul>
                      	<button class="btn btn-video <?php if ($this->_tpl_vars['bin_rating_vote_value'] == 1): ?>active<?php endif; ?>" id="bin-rating-like" type="button" rel="tooltip" data-title="<?php echo $this->_tpl_vars['video_data']['up_vote_count_formatted']; ?>
 <?php echo $this->_tpl_vars['lang']['_likes']; ?>
"><i class="mico mico-thumb_up"></i> <span class="hidden-xs"><?php echo $this->_tpl_vars['video_data']['up_vote_count_formatted']; ?>
</span></button>
			<button class="btn btn-video <?php if ($this->_tpl_vars['bin_rating_vote_value'] == 0 && $this->_tpl_vars['bin_rating_vote_value'] !== false): ?>active<?php endif; ?>" id="bin-rating-dislike" type="button" rel="tooltip" data-title="<?php echo $this->_tpl_vars['video_data']['down_vote_count_formatted']; ?>
 <?php echo $this->_tpl_vars['lang']['_dislikes']; ?>
"><i class="mico mico-thumb_down"></i> <span class="hidden-xs"><?php echo $this->_tpl_vars['video_data']['down_vote_count_formatted']; ?>
</span></button>
                        <?php echo $this->_tpl_vars['video_data']['site_views_formatted']; ?>
  <?php echo $this->_tpl_vars['lang']['views']; ?>

                        <div class="publish-date"><?php echo $this->_tpl_vars['lang']['_published']; ?>
 <time datetime="<?php echo $this->_tpl_vars['video_data']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['video_data']['full_datetime']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['video_data']['html5_datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e, %Y") : smarty_modifier_date_format($_tmp, "%b %e, %Y")); ?>
</time></div>
                        
                        <dl class="dl-vertical">
                        <dt><br><font color="red">Yu</font>Language <font color="blue"><?php echo $this->_tpl_vars['video_data']['yt_lang']; ?>
</font> <br /></dt>
                        <dt><font color="red">Yu</font>Funny <input type="text" class="rating" value="<?php echo $this->_tpl_vars['video_data']['yt_fun']; ?>
" data-min=0 data-max=3 data-step=0.5 data-size="xs" ></dt>
                        <dt><font color="red">Yu</font>Interesting <font color="blue"><input type="text" class="rating" value="<?php echo $this->_tpl_vars['video_data']['yt_inte']; ?>
" data-size="xs" ></font></dt>
                        <dt><font color="red">Yu</font>Emotional <font color="blue"><input type="text" class="rating" value="<?php echo $this->_tpl_vars['video_data']['yt_emot']; ?>
" data-size="xs" ></font></dt>
                        </dl>
                        
			<input type="hidden" name="bin-rating-uniq_id" value="<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
">

			<div id="bin-rating-response" class="hide-me alert"></div>
			<div id="bin-rating-like-confirmation" class="hide-me alert animated fadeInDown">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p><?php echo $this->_tpl_vars['lang']['confirm_like']; ?>
</p>
				<p>
				<a href="https://www.facebook.com/sharer.php?u=<?php echo $this->_tpl_vars['facebook_like_href']; ?>
&amp;t=<?php echo $this->_tpl_vars['facebook_like_title']; ?>
" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Facebook"><i class="pm-vc-sprite facebook-icon"></i></a>
				<a href="https://twitter.com/home?status=Watching%20<?php echo $this->_tpl_vars['facebook_like_title']; ?>
%20on%20<?php echo $this->_tpl_vars['facebook_like_href']; ?>
" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Twitter"><i class="pm-vc-sprite twitter-icon"></i></a>
				</p>
			</div>

			<div id="bin-rating-dislike-confirmation" class="hide-me alert animated fadeInDown">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p><?php echo $this->_tpl_vars['lang']['confirm_dislike']; ?>
</p>
			</div>
				</li>

			</ul>
                                

                       

 			
		</div>

	</div><!--.pm-video-control-->
</div>

<div id="content-main" class="container-fluid">
	<div class="row">

		<div col-xs-6 col-sm-6 col-md-6 itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
			<?php if ($this->_tpl_vars['ad_3'] != ''): ?>
			<div class="pm-ads-banner"><?php echo $this->_tpl_vars['ad_3']; ?>
</div>
			<?php endif; ?>
	
			<div>
				<div class="col-xs-8 col-sm-8 col-md-8">
                                    <a href="<?php echo $this->_tpl_vars['video_data']['author_profile_href']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['video_data']['author_avatar_url']; ?>
" class="pm-round-avatar" height="40" width="40" alt="" ></a>
				</div>

				<div class="col-xs-8 col-sm-8 col-md-8">

					<div class="pm-video-posting-info">
                                            <div class="author"><a href="<?php echo $this->_tpl_vars['video_data']['author_profile_href']; ?>
" target="_blank"><?php echo $this->_tpl_vars['video_data']['author_name']; ?>
 <p>(Profile)</p></a> <?php if ($this->_tpl_vars['video_data']['author_data']['channel_verified'] == 1 && @_MOD_SOCIAL): ?><a href="#" rel="tooltip" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['verified_channel'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Verified Channel') : smarty_modifier_default($_tmp, 'Verified Channel')); ?>
" class="pm-verified-user"><img src="<?php echo @_URL; ?>
/templates/<?php echo @_TPLFOLDER; ?>
/img/ico-verified.png" /></a><?php endif; ?></div>
					</div>


				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] == '1' && $this->_tpl_vars['video_data']['author_user_id'] != $this->_tpl_vars['s_user_id']): ?>
						<div ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user-subscribe-button.tpl", 'smarty_include_vars' => array('profile_data' => $this->_tpl_vars['video_data'],'profile_user_id' => $this->_tpl_vars['video_data']['author_user_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
					<?php endif; ?>
				</div>
			</div><!--/.pm-user-header-->

			
			
			<div>


				<dl class="dl-vertical">

					<?php if (! empty ( $this->_tpl_vars['category_name'] )): ?>
					<dt><?php echo $this->_tpl_vars['lang']['category']; ?>
</dt>
					<dd><?php echo $this->_tpl_vars['category_name']; ?>
</dd>
					<?php endif; ?>
					<?php if (! empty ( $this->_tpl_vars['tags'] )): ?>
					<dt><?php echo $this->_tpl_vars['lang']['tags']; ?>
</dt>
					<dd><?php echo $this->_tpl_vars['tags']; ?>
</dd>
					<?php endif; ?>
				</dl>
			
			</div>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "comments.tpl", 'smarty_include_vars' => array('tpl_name' => "video-watch",'allow_comments' => $this->_tpl_vars['video_data']['allow_comments'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div><!-- /pm-video-watch-main -->

		<div class="col-xs-12 col-sm-12 col-md-4">
			<?php if ($this->_tpl_vars['playlist']): ?>
			<div class="pm-sidebar-playlist">
				<div class="pm-playlist-header">
					<div class="pm-playlist-name">
						<a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlist']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</a>
					</div>
					<div class="pm-playlist-data">
						<span class="pm-playlist-creator">
							<?php echo $this->_tpl_vars['lang']['_by']; ?>
 <a href="<?php echo $this->_tpl_vars['playlist']['user_profile_href']; ?>
"><?php echo $this->_tpl_vars['playlist']['name']; ?>
</a>
						</span> 
						&ndash; 
						<span class="pm-playlist-video-count">
							<?php if ($this->_tpl_vars['playlist']['items_count'] == 1): ?>
								1 <?php echo $this->_tpl_vars['lang']['_video']; ?>

							<?php else: ?>
								<?php echo $this->_tpl_vars['playlist']['items_count']; ?>
 <?php echo $this->_tpl_vars['lang']['videos']; ?>

							<?php endif; ?>
						</span>
					</div>
					<div class="pm-playlist-controls">
						<a href="<?php echo $this->_tpl_vars['playlist_prev_url']; ?>
" rel="nofollow"><i class="mico mico-skip_previous" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_prev_video']; ?>
"></i></a> 
						<a href="<?php echo $this->_tpl_vars['playlist_next_url']; ?>
" rel="nofollow"><i class="mico mico-skip_next" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_next_video']; ?>
"></i></a>
						<?php if ($this->_tpl_vars['playlist']['user_id'] == $this->_tpl_vars['s_user_id']): ?> 
						<a href="<?php echo $this->_tpl_vars['playlist']['playlist_href']; ?>
" rel="nofollow"><i class="mico mico-settings" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_settings']; ?>
"></i></a>
						<?php endif; ?>
					</div>
				</div>

				<div class="pm-video-playlist">
					<ul class="list-unstyled">
						<?php $_from = $this->_tpl_vars['playlist_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['list_video']):
?>
						<li <?php if ($this->_tpl_vars['video_data']['id'] == $this->_tpl_vars['list_video']['id']): ?>class="pm-video-playlist-playing"<?php endif; ?>>
						<a href="<?php echo $this->_tpl_vars['list_video']['playlist_video_href']; ?>
" class="pm-video-playlist-href" rel="nofollow"></a>

							<span class="pm-video-index">
							<?php if ($this->_tpl_vars['video_data']['id'] == $this->_tpl_vars['list_video']['id']): ?>
								&#9658;
							<?php else: ?>
								<?php echo $this->_tpl_vars['index']+1; ?>

							<?php endif; ?>
							</span>
							<span class="pm-video-thumb pm-thumb-80">
								<span class="pm-video-li-thumb-info">
									<span class="pm-video-li-thumb-info">
										<?php if ($this->_tpl_vars['list_video']['yt_length'] > 0): ?><span class="pm-label-duration border-radius3"><?php echo $this->_tpl_vars['list_video']['duration']; ?>
</span><?php endif; ?>
									</span>
									<?php if ($this->_tpl_vars['logged_in']): ?>
									<div class="watch-later">
										<button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-<?php echo $this->_tpl_vars['list_video']['id']; ?>
" onclick="watch_later_add(<?php echo $this->_tpl_vars['list_video']['id']; ?>
); return false;" rel="tooltip" data-placement="left" title="<?php echo $this->_tpl_vars['lang']['watch_later']; ?>
"><i class="fa fa-clock-o"></i></button>
										<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-<?php echo $this->_tpl_vars['list_video']['id']; ?>
" onclick="watch_later_remove(<?php echo $this->_tpl_vars['list_video']['id']; ?>
); return false;" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_remove_item']; ?>
"><i class="fa fa-check"></i></button>
									</div>
									<?php else: ?>
									<a class="pm-watch-later-add btn btn-xs btn-default hidden-xs" rel="tooltip" data-placement="left" title="<?php echo $this->_tpl_vars['lang']['watch_later']; ?>
" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-login-form"><i class="fa fa-clock-o"></i></a>
									<?php endif; ?>
									<a href="<?php echo $this->_tpl_vars['list_video']['playlist_video_href']; ?>
" class="pm-thumb-fix pm-thumb-80" rel="nofollow">
										<span class="pm-thumb-fix-clip">
											<img src="<?php echo $this->_tpl_vars['list_video']['thumb_img_url']; ?>
" alt="<?php echo $this->_tpl_vars['list_video']['video_title']; ?>
" width="80">
											<span class="vertical-align"></span>
										</span>
									</a>
								</span>
							</span>
							<h3><a href="<?php echo $this->_tpl_vars['list_video']['playlist_video_href']; ?>
" class="pm-title-link"  rel="nofollow"><?php echo $this->_tpl_vars['list_video']['video_title']; ?>
</a></h3>
													</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php endif; ?>
			
			<div class="<?php if (! $this->_tpl_vars['playlist'] && $this->_tpl_vars['video_data']['video_player_autoplay_next_support']): ?>pm-related-with-autoplay<?php endif; ?> <?php if ($_COOKIE['pm_autoplay_next'] == 'on'): ?>with-highlight<?php else: ?>without-highlight<?php endif; ?>" id="pm-related">
				<h4><?php if ($this->_tpl_vars['playlist']): ?><?php echo $this->_tpl_vars['lang']['tab_related']; ?>
<?php else: ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['up_next'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Up Next') : smarty_modifier_default($_tmp, 'Up Next')); ?>
<?php endif; ?></h4>
				<?php if (! $this->_tpl_vars['playlist'] && $this->_tpl_vars['video_data']['video_player_autoplay_next_support']): ?>
				<div class="pm-autoplay-select">
					<div class="pm-autoplay-info">
					<?php echo $this->_tpl_vars['lang']['_autoplay']; ?>
 <i class="mico mico-info" rel="tooltip" data-original-title="<?php echo $this->_tpl_vars['lang']['autoplay_description']; ?>
"></i>
					</div>
					<div class="pm-autoplay-switch">
						<input type="checkbox" name="pm-autoplay-switch" class="autoplayonoff-checkbox" id="autoplayonoff" <?php if ($_COOKIE['pm_autoplay_next'] == 'on'): ?>checked="checked"<?php endif; ?>>
						<label class="autoplayonoff-label" for="autoplayonoff">
							<span class="autoplayonoff-inner"></span>
							<span class="autoplayonoff-switch"></span>
						</label>
					</div>
				</div>
				<?php endif; ?>

				<ul class="row pm-ul-browse-videos list-unstyled">
				<?php $_from = $this->_tpl_vars['related_video_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['related_video_data']):
?>
				<li  class="col-xs-12 col-sm-8 col-md-12">
					<div class="pm-video-thumb">
						<?php if ($this->_tpl_vars['related_video_data']['yt_length'] > 0): ?><span class="pm-label-duration"><?php echo $this->_tpl_vars['related_video_data']['duration']; ?>
</span><?php endif; ?>
						<div class="pm-video-labels">
                                                     
				<?php if ($this->_tpl_vars['video_data']['mark_new']): ?><span class="label label-new">YuTell</span><?php endif; ?>
                                <?php if ($this->_tpl_vars['video_data']['mark_popular']): ?><span class="label label-pop">YuTell</span><?php endif; ?><br>
                                <span class="label label-featured"><i class="icon-myspace-alt"></i><font color="Yellow"> <?php echo $this->_tpl_vars['related_video_data']['yt_lang']; ?>
</font></span> <br>
                                <span class="label label-featured"><i class="fa fa-smile-o"></i><font color="Gold"> <?php echo $this->_tpl_vars['related_video_data']['yt_fun']; ?>
<i class="fa fa-star"></i></span><br>
                                <span class="label label-featured"><i class="fa fa-info"></i> <font color="Gold"> <?php echo $this->_tpl_vars['related_video_data']['yt_inte']; ?>
<i class="fa fa-star"></i></font></span><br>
                                <span class="label label-featured"><i class="fa fa-heart"></i><font color="Gold"> <?php echo $this->_tpl_vars['related_video_data']['yt_emot']; ?>
<i class="fa fa-star"></i></font></span><br><br>
                                <span class="label label-featured"><i class="fa fa-eye"></i> <font color="Gold"><?php echo $this->_tpl_vars['related_video_data']['views_compact']; ?>
</font></span><br>
                                <span class="label label-featured"><i class="fa fa-thumbs-up"></i> <font color="Gold"><?php echo $this->_tpl_vars['related_video_data']['likes_compact']; ?>
</font></span><br>
                                <span class="label label-featured"><i class="fa fa-hourglass"></i> <font color="Gold"><?php echo $this->_tpl_vars['related_video_data']['time']; ?>
</font></span><br>                    
                                                    <button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-<?php echo $this->_tpl_vars['related_video_data']['id']; ?>
" onclick="watch_later_add(<?php echo $this->_tpl_vars['related_video_data']['id']; ?>
); return false;" rel="tooltip" data-placement="left" title="<?php echo $this->_tpl_vars['lang']['watch_later']; ?>
"><i class="fa fa-clock-o"></i></button>
							<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-<?php echo $this->_tpl_vars['related_video_data']['id']; ?>
" onclick="watch_later_remove(<?php echo $this->_tpl_vars['related_video_data']['id']; ?>
); return false;" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_remove_item']; ?>
"><i class="fa fa-check"></i></button>
						</div>
						<a href="<?php echo $this->_tpl_vars['related_video_data']['video_href']; ?>
" title="<?php echo $this->_tpl_vars['related_video_data']['attr_alt']; ?>
">
						<div class="pm-video-labels hidden-xs">
							<?php if ($this->_tpl_vars['related_video_data']['mark_new']): ?><span class="label label-new"><?php echo $this->_tpl_vars['lang']['_new']; ?>
</span><?php endif; ?>
						</div>
						<img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/melody-lzld.png" alt="<?php echo $this->_tpl_vars['related_video_data']['attr_alt']; ?>
" data-echo="<?php echo $this->_tpl_vars['related_video_data']['thumb_img_url']; ?>
" class="img-responsive">
						</a>
					</div>
					<h3><a href="<?php echo $this->_tpl_vars['related_video_data']['video_href']; ?>
" title="<?php echo $this->_tpl_vars['related_video_data']['attr_alt']; ?>
" class="ellipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['related_video_data']['video_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</a></h3>
					<div class="pm-video-meta">
						<span class="pm-video-author"><?php echo $this->_tpl_vars['lang']['_by']; ?>
 <a href="<?php echo $this->_tpl_vars['related_video_data']['author_profile_href']; ?>
"><?php echo $this->_tpl_vars['related_video_data']['author_username']; ?>
</a></span>
						<span class="pm-video-since"><time datetime="<?php echo $this->_tpl_vars['related_video_data']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['related_video_data']['full_datetime']; ?>
"><?php echo $this->_tpl_vars['related_video_data']['time_since_added']; ?>
 <?php echo $this->_tpl_vars['lang']['ago']; ?>
</time></span>
						<span class="pm-video-views"><?php echo $this->_tpl_vars['related_video_data']['views_compact']; ?>
 <?php echo $this->_tpl_vars['lang']['views']; ?>
</span>
					</div>
				</li>
				<?php endforeach; endif; unset($_from); ?>

				

				<?php if (! $this->_tpl_vars['related_video_list'] && ! $this->_tpl_vars['popular_video_list']): ?>
				<li>
				  <?php echo $this->_tpl_vars['lang']['top_videos_msg2']; ?>

				</li>
				<?php endif; ?>
				</ul>
			</div>
		</div><!-- /pm-video-watch-sidebar -->

		<div class="clearfix"></div>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-video-report.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-video-addtoplaylist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modal-video-share.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('p' => 'detail','tpl_name' => "video-watch")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>