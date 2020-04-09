<?php /* Smarty version 2.6.30, created on 2019-04-23 17:37:20
         compiled from upload.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'upload.tpl', 53, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('no_index' => '1','p' => 'upload','tpl_name' => 'upload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile-header.tpl", 'smarty_include_vars' => array('p' => 'upload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content" class="content-detached content-video-handler">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-7 col-sm-7 col-md-10">
			<h1><?php echo $this->_tpl_vars['lang']['upload_video']; ?>
</h1>
		</div>
		<div class="col-xs-5 col-sm-5 col-md-2">
			<div class="pull-right">
				<div>
					<ol id="upload-video-selected-files-container"></ol>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
	   <div class="col-md-12">
		<?php if ($this->_tpl_vars['success'] == 1): ?>
			<div class="alert alert-success">
			<?php echo $this->_tpl_vars['lang']['suggest_msg4']; ?>

			<br />
			<a href="upload.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['add_another_one']; ?>
</a> or <a href="index.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['return_home']; ?>
</a>
			</div>
		<?php elseif ($this->_tpl_vars['success'] == 2): ?>
			<div class="alert alert-warning">
			<?php echo $this->_tpl_vars['lang']['upload_errmsg11']; ?>
 
			<a href="index.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['return_home']; ?>
</a>
			</div>
		<?php elseif ($this->_tpl_vars['success'] == 'custom'): ?>
			<div class="alert alert-success">
			<?php echo $this->_tpl_vars['success_custom_message']; ?>
 
			<a href="upload.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['add_another_one']; ?>
</a> or <a href="index.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['return_home']; ?>
</a>
			</div>
		<?php else: ?>

			<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
			<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<ul class="list-unstyled">
				<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
					<li><?php echo $this->_tpl_vars['v']; ?>
</li>                        
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			</div>
			<?php endif; ?>


			<div class="hide-me" id="manage-video-ajax-message"></div>
			<div class="form-horizontal">
			<div class="pm-upload-file-select" id="upload-video-dropzone">
				<i class="mico mico-cloud_upload"></i>
				<p><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['drop_files'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Drop file here') : smarty_modifier_default($_tmp, 'Drop file here')); ?>
</p>
				<div class="clearfix"></div>
				<span class="btn-upload fileinput-button">
					<span class="btn-upload-value"><?php echo $this->_tpl_vars['lang']['upload_video1']; ?>
</span>
					<input type="file" name="video" id="upload-video-file-btn" />
				</span>
			</div>
			<div class="clearfix"></div>


			<form class="form-horizontal" name="upload-video-form" id="upload-video-form" enctype="multipart/form-data" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
" role="form">
				<div class="alert alert-danger hide-me" id="error-placeholder"></div>

				<div class="pm-video-manage-form">
					<fieldset>
						<div id="upload-video-extra">
							<div class="form-group">
							  <label for="video_title" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['video']; ?>
</label>
							  <div class="col-md-10">
							  <input name="video_title" type="text" value="<?php echo $_POST['video_title']; ?>
" class="form-control">
							  </div>
							</div>
							<div class="form-group">
							  <label for="capture" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['upload_video2']; ?>
</label>
							  <div class="col-md-10">
								<div class="fileinput fileinput-new" data-provides="fileinput">
								  <div class="fileinput-new thumbnail"><img data-src="" alt=" " src="" width="480" height="480"></div>
								  <div class="fileinput-preview fileinput-exists thumbnail"></div>
								  <div class="fileinput-buttons">
									<span class="btn btn-sm btn-default btn-file"><span class="fileinput-new"><?php echo $this->_tpl_vars['lang']['upload_video1']; ?>
</span>
									<span class="fileinput-exists"><?php echo $this->_tpl_vars['lang']['_change']; ?>
</span>
									<input type="file" name="capture" value="">
									<!-- <a href="#" class="fileinput-exists" data-dismiss="fileinput"><i class="mico mico-delete"></i></a> -->
								  </div>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <label for="duration" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['_duration']; ?>
 <a href="#" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['duration_format']; ?>
"><i class="fa fa-question-circle"></i></a></label>
							  <div class="col-md-10">
							  <input name="duration" id="duration" type="text" value="<?php echo $_POST['duration']; ?>
" class="form-control text-center">
							  </div>
							</div>
							<div class="form-group">
							  <label for="category" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['category']; ?>
</label>
							  <div class="col-md-10">
								<?php echo $this->_tpl_vars['categories_dropdown']; ?>

							  </div>
							</div>
							<div class="form-group">
							  <label for="description" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['description']; ?>
</label>
							  <div class="col-md-10">
								<textarea name="description" class="form-control" rows="3"><?php if ($_POST['description']): ?><?php echo $_POST['description']; ?>
<?php endif; ?></textarea>
							  </div>
							</div>
							<div class="form-group">
							  <label for="tags" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['tags']; ?>
 <a href="#" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['suggest_ex']; ?>
"><i class="fa fa-question-circle"></i></a></label>
							  <div class="col-md-10">
								<span class="tagsinput">
								  <input id="tags_upload" name="tags" type="text" class="form-control tags" value="<?php echo $_POST['tags']; ?>
">
								</span>
							  </div>
							</div>
							<?php if (isset ( $this->_tpl_vars['mm_upload_fields_inject'] )): ?><?php echo $this->_tpl_vars['mm_upload_fields_inject']; ?>
<?php endif; ?>
							<div class="form-group">
							  <div class="col-md-offset-2 col-md-10">
								<button name="Submit" type="submit" id="upload-video-submit-btn" value="<?php echo $this->_tpl_vars['lang']['submit_upload']; ?>
" class="btn btn-success" data-loading-text="<?php echo $this->_tpl_vars['lang']['submit_send']; ?>
"><?php echo $this->_tpl_vars['lang']['submit_upload']; ?>
</button>
								<a href="<?php echo @_URL; ?>
/upload.<?php echo @_FEXT; ?>
" class="btn btn-link"><?php echo $this->_tpl_vars['lang']['submit_cancel']; ?>
</a>
							  </div>
							</div>
						</div><!-- #upload-video-extra -->
					</fieldset>

					<input type="hidden" name="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />
					<input type="hidden" name="_pmnonce_t" id="upload-video-form-nonce" value="<?php echo $this->_tpl_vars['form_csrfguard_token']; ?>
" />
					<input type="hidden" name="temp_id" id="temp_id" value="" />
					<input type="hidden" name="p" value="upload" />
					<input type="hidden" name="do" value="upload-media-file" />
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['max_file_size']; ?>
">
				</div>
			</form>
		<?php endif; ?>
		</div><!-- .col-md-12 -->
	</div><!-- .row --> 
  </div>
  </div>
  <!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => 'upload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>