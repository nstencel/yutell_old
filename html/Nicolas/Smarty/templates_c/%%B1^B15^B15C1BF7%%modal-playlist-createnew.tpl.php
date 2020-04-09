<?php /* Smarty version 2.6.30, created on 2019-04-23 18:18:26
         compiled from modal-playlist-createnew.tpl */ ?>
<form name="new-playlist" class="form-horizontal" method="post" action="">
<div class="modal" id="modal-new-playlist" role="dialog" aria-labelledby="new-playlist-form-label">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->_tpl_vars['lang']['close']; ?>
</span></button>
			<h4 class="modal-title"><?php echo $this->_tpl_vars['lang']['playlist_create_new']; ?>
</h4>
		</div>
		<div class="modal-body">
			<div id="playlist-modal-ajax-response" class="hide-me"></div>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $this->_tpl_vars['lang']['playlist_name']; ?>
</label>
				<div class="col-md-8">
				<input type="text" class="form-control"name="playlist_name" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $this->_tpl_vars['lang']['playlist_privacy']; ?>
</label>
				<div class="col-md-8">
				<select name="visibility" class="form-control">
					<option value="<?php echo @PLAYLIST_PUBLIC; ?>
"><?php echo $this->_tpl_vars['lang']['public']; ?>
</option>
					<option value="<?php echo @PLAYLIST_PRIVATE; ?>
"><?php echo $this->_tpl_vars['lang']['private']; ?>
</option>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><?php echo $this->_tpl_vars['lang']['sort_by']; ?>
</label>
				<div class="col-md-8">
				<select name="sorting" class="form-control">
					<option value="default"><?php echo $this->_tpl_vars['lang']['_manual']; ?>
</option>
					<option value="popular"><?php echo $this->_tpl_vars['lang']['most_popular']; ?>
</option>
					<option value="date-added-desc"><?php echo $this->_tpl_vars['lang']['sort_added_new']; ?>
</option>
					<option value="date-added-asc"><?php echo $this->_tpl_vars['lang']['sort_added_old']; ?>
</option>
					<option value="date-published-desc"><?php echo $this->_tpl_vars['lang']['sort_published_new']; ?>
</option>
					<option value="date-published-asc"><?php echo $this->_tpl_vars['lang']['sort_published_old']; ?>
</option>
				</select>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-sm btn-link" data-dismiss="modal" ><?php echo $this->_tpl_vars['lang']['submit_cancel']; ?>
</a>
			<a href="#" class="btn btn-sm btn-success btn-with-loader" id="create_playlist_submit_btn" onclick="playlist_create(this, 'playlists-modal'); return false;" disabled><?php echo $this->_tpl_vars['lang']['playlist_create_new']; ?>
</a>
		</div>
		</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>