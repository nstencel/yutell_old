<?php /* Smarty version 2.6.30, created on 2019-12-12 14:53:00
         compiled from comment-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'echo_securimage_sid', 'comment-form.tpl', 47, false),)), $this); ?>
<div name="mycommentspan" id="mycommentspan" class="hide-me"></div>
<?php if ($this->_tpl_vars['logged_in'] == '1'): ?>
<div class="row" id="pm-post-form">
	<div class="col-xs-2 col-sm-1 col-md-1">
		<span class="pm-avatar"><img src="<?php echo $this->_tpl_vars['s_avatar_url']; ?>
" class="pm-round-avatar" height="40" width="40" alt=""></span>
	</div>
	<div class="col-xs-10 col-sm-11 col-md-11">
	<form action="" name="form-user-comment" method="post">
		<div class="form-group">
			<?php if ($this->_tpl_vars['allow_emojis'] && ( $this->_tpl_vars['tpl_name'] == 'article-read' || $this->_tpl_vars['tpl_name'] == 'video-watch' || $this->_tpl_vars['tpl_name'] == 'channel' )): ?>
			<a data-toggle="modal" data-remote="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/emoji-help.php" href="#" data-target="#modalEmojiList" class="emoji-shortcut"><i class="mico mico-tag_faces"></i></a>
			<?php endif; ?>
			<textarea name="comment_txt" id="c_comment_txt" rows="2" class="form-control" placeholder="<?php echo $this->_tpl_vars['lang']['your_comment']; ?>
"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" id="c_vid" name="vid" value="<?php echo $this->_tpl_vars['uniq_id']; ?>
">
			<input type="hidden" id="c_user_id" name="user_id" value="<?php echo $this->_tpl_vars['user_id']; ?>
">
			<button type="submit" id="c_submit" name="Submit" class="btn btn-sm btn-success btn-with-loader" data-loading-text="<?php echo $this->_tpl_vars['lang']['submit_comment']; ?>
"><?php echo $this->_tpl_vars['lang']['submit_comment']; ?>
</button>
		</div>
	</form>
	</div>
</div>

<?php elseif ($this->_tpl_vars['logged_in'] == 0 && $this->_tpl_vars['guests_can_comment'] == 1): ?>
<div class="row" id="pm-post-form">
	<div class="col-xs-2 col-sm-1 col-md-1">
		<span class="pm-avatar"><img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/pm-avatar.png" class="pm-round-avatar" width="40" height="40" alt="" border="0"></span>
	</div>
	<div class="col-xs-10 col-sm-11 col-md-11">
		<form action="" name="form-user-comment" method="post">
		<div class="form-group">
			<div class="row">
				<div class="col-md-11">
					<textarea name="comment_txt" id="c_comment_txt" rows="2" class="form-control" placeholder="<?php echo $this->_tpl_vars['lang']['your_comment']; ?>
"></textarea>
				</div>
			</div>
		</div>
		<div class="form-group hide-me" id="pm-comment-form">
			<div class="row">
				<div class="col-md-4">
					<input type="text" id="c_username" name="username" value="<?php echo $this->_tpl_vars['guestname']; ?>
" class="form-control" placeholder="<?php echo $this->_tpl_vars['lang']['your_name']; ?>
">
				</div>
				<div class="col-md-4">
					<input type="text" id="captcha" name="captcha" class="form-control" placeholder="<?php echo $this->_tpl_vars['lang']['confirm_code']; ?>
">
				</div>
				<div class="col-md-4">
					<img src="<?php echo @_URL; ?>
/include/securimage_show.php?sid=<?php echo smarty_echo_securimage_sid(array(), $this);?>
" id="captcha-image" alt="" width="100" height="35">
					<button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('captcha-image').src = '<?php echo @_URL; ?>
/include/securimage_show.php?sid=' + Math.random(); return false"><i class="fa fa-refresh"></i></button>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-11">
					<input type="hidden" id="c_vid" name="vid" value="<?php echo $this->_tpl_vars['uniq_id']; ?>
">
					<input type="hidden" id="c_user_id" name="user_id" value="0">
					<button type="submit" id="c_submit" name="Submit" class="btn btn-sm btn-success btn-with-loader" data-loading-text="<?php echo $this->_tpl_vars['lang']['submit_comment']; ?>
"><?php echo $this->_tpl_vars['lang']['submit_comment']; ?>
</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
<?php endif; ?>