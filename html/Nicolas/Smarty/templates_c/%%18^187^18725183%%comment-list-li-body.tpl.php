<?php /* Smarty version 2.6.30, created on 2019-04-23 12:30:51
         compiled from comment-list-li-body.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'comment-list-li-body.tpl', 15, false),)), $this); ?>
<div class="media-object">
<?php if ($this->_tpl_vars['comment_data']['user_id'] == 0): ?>
	<a href="#" class="pull-left"><img src="<?php echo $this->_tpl_vars['comment_data']['avatar_url']; ?>
" class="pm-round-avatar" height="40" width="40" alt=""></a>
<?php else: ?>
	<a href="<?php echo $this->_tpl_vars['comment_data']['user_profile_href']; ?>
" class="pull-left"><img src="<?php echo $this->_tpl_vars['comment_data']['avatar_url']; ?>
" class="pm-round-avatar" height="40" width="40" alt=""></a>
<?php endif; ?>
</div>

<div class="media-body<?php if ($this->_tpl_vars['comment_data']['user_is_banned']): ?> media-body-banned<?php endif; ?>">
	<div class="media-heading">
	<?php if ($this->_tpl_vars['comment_data']['user_id'] == 0): ?> 
		<?php echo $this->_tpl_vars['comment_data']['name']; ?>

	<?php else: ?> 
	<a href="<?php echo $this->_tpl_vars['comment_data']['user_profile_href']; ?>
" class="pm-comment-user"><?php echo $this->_tpl_vars['comment_data']['name']; ?>
</a>
	<?php if ($this->_tpl_vars['comment_data']['channel_verified'] == 1): ?><a href="#" rel="tooltip" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['verified_channel'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Verified Channel') : smarty_modifier_default($_tmp, 'Verified Channel')); ?>
"><img src="<?php echo @_URL; ?>
/templates/<?php echo @_TPLFOLDER; ?>
/img/ico-verified.png" width="12" height="12" /></a><?php endif; ?>

	<?php if ($this->_tpl_vars['comment_data']['user_id'] > 0 && $this->_tpl_vars['comment_data']['user_id'] != $this->_tpl_vars['s_user_id'] && $this->_tpl_vars['can_manage_comments'] && $this->_tpl_vars['comment_data']['power'] != @U_ADMIN): ?>
		<?php if ($this->_tpl_vars['comment_data']['user_is_banned']): ?>
		<button type="button" id="unban-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
" class="unban-<?php echo $this->_tpl_vars['comment_data']['user_id']; ?>
 btn btn-xs btn-link" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['user_account_remove_ban']; ?>
"><i class="fa fa-ban"></i></button>
		<?php else: ?>
		<button type="button" id="ban-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
" class="ban-<?php echo $this->_tpl_vars['comment_data']['user_id']; ?>
 btn btn-xs btn-link" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['user_account_add_ban']; ?>
"><i class="fa fa-ban"></i></button>
		<?php endif; ?>
	<?php endif; ?>

	<span class="label label-danger label-banned-<?php echo $this->_tpl_vars['comment_data']['user_id']; ?>
 <?php if (! $this->_tpl_vars['comment_data']['user_is_banned']): ?>hide-me<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['user_account_banned_label']; ?>
</span>
	<?php endif; ?>
	<div class="media-date"><time datetime="<?php echo $this->_tpl_vars['comment_data']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['comment_data']['full_datetime']; ?>
"><?php echo $this->_tpl_vars['comment_data']['time_since_added']; ?>
 <?php echo $this->_tpl_vars['lang']['ago']; ?>
</time></div>
	<?php if ($this->_tpl_vars['can_manage_comments']): ?><span class="pm-comment-user-ip">(<?php echo $this->_tpl_vars['comment_data']['user_ip']; ?>
)</span><?php endif; ?>
	</div>
    <p><?php echo $this->_tpl_vars['comment_data']['comment']; ?>
</p>

	<?php if ($this->_tpl_vars['logged_in']): ?>
	<div class="media-actions" id="users-<?php echo $this->_foreach['comment_foreach']['iteration']; ?>
">
		<div class="btn-group">
			<button type="button" class="btn btn-xs btn-link <?php if ($this->_tpl_vars['comment_data']['user_likes_this']): ?>active<?php endif; ?>" <?php if ($this->_tpl_vars['comment_data']['user_id'] != $this->_tpl_vars['s_user_id']): ?>id="comment-like-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
"<?php endif; ?> rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['_like']; ?>
"><span id="comment-like-count-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
">
			<?php if ($this->_tpl_vars['comment_data']['up_vote_count'] > 0): ?>
				<?php echo $this->_tpl_vars['comment_data']['up_vote_count']; ?>

			<?php endif; ?>
			</span> <i class="fa fa-thumbs-o-up"></i>
			</button>
			<button type="button" class="btn btn-xs btn-link <?php if ($this->_tpl_vars['comment_data']['user_dislikes_this']): ?>active<?php endif; ?>" <?php if ($this->_tpl_vars['comment_data']['user_id'] != $this->_tpl_vars['s_user_id']): ?>id="comment-dislike-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
"<?php endif; ?> rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['_dislike']; ?>
">
			<span id="comment-dislike-count-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
">
			<?php if ($this->_tpl_vars['comment_data']['down_vote_count'] > 0): ?>
				<?php echo $this->_tpl_vars['comment_data']['down_vote_count']; ?>

			<?php endif; ?>
			</span> <i class="fa fa-thumbs-o-down"></i>
			</button>
			<button type="button" id="comment-flag-<?php echo $this->_tpl_vars['comment_data']['id']; ?>
" class="btn btn-xs btn-link <?php if ($this->_tpl_vars['comment_data']['user_flagged_this']): ?>active<?php endif; ?>" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['report_comment']; ?>
"><i class="fa fa-flag-o"></i></button>
			<?php if ($this->_tpl_vars['can_manage_comments']): ?>
			<button onclick="onpage_delete_comment('<?php echo $this->_tpl_vars['comment_data']['id']; ?>
', '<?php echo $this->_tpl_vars['comment_data']['uniq_id']; ?>
', '#comment-<?php echo $this->_foreach['comment_foreach']['iteration']; ?>
'); return false;" class="btn btn-xs btn-link" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
"><i class="fa fa-trash-o"></i></button>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
</div>