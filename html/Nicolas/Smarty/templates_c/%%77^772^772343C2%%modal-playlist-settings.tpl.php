<?php /* Smarty version 2.6.30, created on 2019-04-24 18:05:53
         compiled from modal-playlist-settings.tpl */ ?>
<form name="playlist-settings" class="form-horizontal" method="post" action="">
<div class="modal" id="playlist-settings" role="dialog" aria-labelledby="playlist-settings-form-label">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->_tpl_vars['lang']['close']; ?>
</span></button>
			<h4 class="modal-title"><?php echo $this->_tpl_vars['lang']['playlist_settings']; ?>
</h4>
		</div>
		<div class="modal-body">
			<div id="playlist-modal-ajax-response" class="hide-me"></div>
			<?php if ($this->_tpl_vars['playlist']['type'] == @PLAYLIST_TYPE_CUSTOM): ?>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $this->_tpl_vars['lang']['playlist_name']; ?>
</label>
				<div class="col-md-8">
				<input type="text" class="form-control" name="playlist_name" value="<?php echo $this->_tpl_vars['playlist']['title']; ?>
" />
				</div>
			</div>
			<?php endif; ?> 
			
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $this->_tpl_vars['lang']['playlist_privacy']; ?>
</label>
				<div class="col-md-8">
				<select name="visibility" class="form-control">
					<option value="<?php echo @PLAYLIST_PUBLIC; ?>
" <?php if ($this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PUBLIC): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['public']; ?>
</option>
					<option value="<?php echo @PLAYLIST_PRIVATE; ?>
" <?php if ($this->_tpl_vars['playlist']['visibility'] == @PLAYLIST_PRIVATE): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['private']; ?>
</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $this->_tpl_vars['lang']['video_ordering']; ?>
</label>
				<div class="col-md-8">
				<select name="sorting" class="form-control">
					<option value="default" <?php if ($this->_tpl_vars['playlist']['sorting'] == 'default'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['_manual']; ?>
</option>
					<option value="popular" <?php if ($this->_tpl_vars['playlist']['sorting'] == 'popular'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['most_popular']; ?>
</option>
					<option value="date-added-desc" <?php if ($this->_tpl_vars['playlist']['sorting'] == 'date-added-desc'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['sort_added_new']; ?>
</option>
					<option value="date-added-asc" <?php if ($this->_tpl_vars['playlist']['sorting'] == 'date-added-asc'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['sort_added_old']; ?>
</option>
					<option value="date-published-desc" <?php if ($this->_tpl_vars['playlist']['sorting'] == 'date-published-desc'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['sort_published_new']; ?>
</option>
					<option value="date-published-asc" <?php if ($this->_tpl_vars['playlist']['sorting'] == 'date-published-asc'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['sort_published_old']; ?>
</option>
				</select>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<?php if ($this->_tpl_vars['my_playlist'] && $this->_tpl_vars['playlist']['type'] == @PLAYLIST_TYPE_CUSTOM): ?>
				<a href="#" class="btn btn-sm btn-danger pull-left" <?php if ($this->_tpl_vars['playlist']['type'] == @PLAYLIST_TYPE_CUSTOM): ?> onclick="playlist_delete(<?php echo $this->_tpl_vars['playlist']['list_id']; ?>
, this);" <?php endif; ?>><?php echo $this->_tpl_vars['lang']['submit_delete']; ?>
</a>
			<?php endif; ?>
			<a href="#" class="btn btn-sm btn-link" data-dismiss="modal" ><?php echo $this->_tpl_vars['lang']['submit_cancel']; ?>
</a>
			<a href="#" class="btn btn-sm btn-success btn-with-loader" onclick="playlist_save_settings(<?php echo $this->_tpl_vars['playlist']['list_id']; ?>
, this); return false;"><?php echo $this->_tpl_vars['lang']['submit_save']; ?>
</a>
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>