<?php /* Smarty version 2.6.30, created on 2020-01-01 14:20:47
         compiled from item-video-obj.tpl */ ?>
<div class="thumbnail<?php if ($this->_tpl_vars['thumbSize'] == 'large'): ?> thumbnail-large<?php elseif ($this->_tpl_vars['thumbSize'] == 'medium'): ?> thumbnail-medium<?php elseif ($this->_tpl_vars['thumbSize'] == 'small'): ?> thumbnail-small<?php endif; ?>">
	<div class="pm-video-thumb<?php if ($this->_tpl_vars['video_data']['pending_approval']): ?> pm-video-thumb-pending<?php endif; ?> ripple">
		<?php if ($this->_tpl_vars['video_data']['yt_length'] != 0): ?><span class="pm-label-duration"><?php echo $this->_tpl_vars['video_data']['duration']; ?>
</span><?php endif; ?>

		<?php if ($this->_tpl_vars['profile_data']['id'] == $this->_tpl_vars['s_user_id'] && $this->_tpl_vars['allow_user_edit_video']): ?>
			<?php if ($this->_tpl_vars['video_data']['pending_approval']): ?>
			<a href="<?php echo @_URL; ?>
/edit-video.php?vid=<?php echo $this->_tpl_vars['video_data']['id']; ?>
&type=pending" class="btn btn-mini btn-edit-video" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
"><i class="fa fa-pencil"></i></a>
			<?php else: ?>
			<a href="<?php echo @_URL; ?>
/edit-video.php?vid=<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
" class="btn btn-mini btn-edit-video" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
"><i class="fa fa-pencil"></i></a>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (! $this->_tpl_vars['video_data']['pending_approval']): ?>
			<?php if ($this->_tpl_vars['logged_in']): ?>
			<div class="watch-later">
				<button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-<?php echo $this->_tpl_vars['video_data']['id']; ?>
" onclick="watch_later_add(<?php echo $this->_tpl_vars['video_data']['id']; ?>
); return false;" rel="tooltip" data-placement="left" title="<?php echo $this->_tpl_vars['lang']['watch_later']; ?>
"><i class="fa fa-clock-o"></i></button>
				<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-<?php echo $this->_tpl_vars['video_data']['id']; ?>
" onclick="watch_later_remove(<?php echo $this->_tpl_vars['video_data']['id']; ?>
); return false;" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['playlist_remove_item']; ?>
"><i class="fa fa-check"></i></button>
			</div>
			<?php else: ?>
			<a class="pm-watch-later-add btn btn-xs btn-default hidden-xs" rel="tooltip" data-placement="left" title="<?php echo $this->_tpl_vars['lang']['watch_later']; ?>
" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-login-form"><i class="fa fa-clock-o"></i></a>
			<?php endif; ?>
		<?php endif; ?>
                
                 

                
               
		<a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
" title="<?php echo $this->_tpl_vars['video_data']['attr_alt']; ?>
">
			<?php if ($this->_tpl_vars['tpl_name'] == "video-top"): ?>
			<div class="pm-video-rank-no"><?php echo $this->_tpl_vars['video_data']['position']; ?>
</div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['hideLabels'] != '20'): ?>
			<div class="pm-video-labels">
				<?php if ($this->_tpl_vars['video_data']['pending_approval']): ?><span class="label label-pending"><?php echo $this->_tpl_vars['lang']['pending_approval']; ?>
</span><?php endif; ?>
				<?php if ($this->_tpl_vars['video_data']['mark_new']): ?><span class="label label-new">YuTell</span><?php endif; ?>
                                <?php if ($this->_tpl_vars['video_data']['mark_popular']): ?><span class="label label-pop">YuTell</span><?php endif; ?><br>
                                <span class="label label-featured"><font color="Yellow"> <?php echo $this->_tpl_vars['video_data']['yt_lang']; ?>
</font></span> <br>
                                <span class="label label-featured"><i class="fa fa-smile"></i><font color="Gold"> <?php echo $this->_tpl_vars['video_data']['yt_fun']; ?>
<i class="fa fa-star"></i></span><br>
                                <span class="label label-featured"><i class="fa fa-info"></i> <font color="Gold"> <?php echo $this->_tpl_vars['video_data']['yt_inte']; ?>
<i class="fa fa-star"></i></font></span><br>
                                <span class="label label-featured"><i class="fa fa-heart"></i><font color="Gold"> <?php echo $this->_tpl_vars['video_data']['yt_emot']; ?>
<i class="fa fa-star"></i></font></span><br><br>
                                <span class="label label-featured"><i class="fa fa-eye"></i> <font color="Gold"><?php echo $this->_tpl_vars['video_data']['views_compact']; ?>
</font></span><br>
                                <span class="label label-featured"><i class="fa fa-thumbs-up"></i> <font color="Gold"><?php echo $this->_tpl_vars['video_data']['likes_compact']; ?>
</font></span><br>
                                <span class="label label-featured"><i class="fa fa-hourglass"></i> <font color="Gold"><?php echo $this->_tpl_vars['video_data']['time']; ?>
</font></span><br>
				<?php if ($this->_tpl_vars['video_data']['featured']): ?><span class="label label-featured"><?php echo $this->_tpl_vars['lang']['_feat']; ?>
</span><?php endif; ?>
			</div>
			<?php endif; ?>
                        <div class="pm-video-ads">
                                
                                <span><font color="Red">Reserved</font></span><br>
                                <span><font color="Yellow">Ad Area</font></span>

			</div>
			<img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/melody-lzld.png" alt="<?php echo $this->_tpl_vars['video_data']['attr_alt']; ?>
" data-echo="<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
" class="img-responsive">
                        
		<span class="overlay"></span>
		</a>
	</div>

	<div class="caption">
		<h3><a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
" title="<?php echo $this->_tpl_vars['video_data']['attr_alt']; ?>
" class="ellipsis"><?php echo $this->_tpl_vars['video_data']['author_name']; ?>
 | <?php echo $this->_tpl_vars['video_data']['video_title']; ?>
</a></h3>
                
		<?php if ($this->_tpl_vars['hideMeta'] != '12'): ?>
		<div class="pm-video-meta">

			                                <div>
					<?php echo $this->_tpl_vars['video_data']['description']; ?>

                                                        </div>
			
		
		</div>
		<?php endif; ?>

 
	</div>
</div>