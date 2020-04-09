<?php /* Smarty version 2.6.30, created on 2019-04-23 17:37:20
         compiled from profile-header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'profile-header.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['logged_in'] && $this->_tpl_vars['current_user_data']['id'] == $this->_tpl_vars['s_user_id']): ?>
<div id="profile-header" class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-xs-12 col-md-12">
			<div class="pm-user-brief">
				<div class="pm-avatar">
					<a href="<?php echo $this->_tpl_vars['current_user_data']['profile_url']; ?>
"><img src="<?php echo $this->_tpl_vars['current_user_data']['avatar_url']; ?>
" alt="<?php echo $this->_tpl_vars['current_user_data']['username']; ?>
"  border="0" class="img-responsive"></a>
				</div>
				<div class="pm-username"><?php echo $this->_tpl_vars['current_user_data']['username']; ?>
</div>

				<div class="nav-responsive">
					<ul class="nav nav-tabs nav-underlined">
						<li<?php if ($this->_tpl_vars['p'] == "profile-edit"): ?> class="active"<?php endif; ?>><a href="<?php echo @_URL; ?>
/edit_profile.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['edit_profile']; ?>
</a>
						<li<?php if ($this->_tpl_vars['p'] == 'playlists'): ?> class="active"<?php endif; ?>><a href="<?php echo @_URL; ?>
/playlists.<?php echo @_FEXT; ?>
"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['manage_playlists'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Manage Playlists') : smarty_modifier_default($_tmp, 'Manage Playlists')); ?>
</a></li> 
						<li<?php if ($this->_tpl_vars['p'] == 'members'): ?> class="active"<?php endif; ?>><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['members']; ?>
</a></li>
						<?php if (@_ALLOW_USER_SUGGESTVIDEO == '1'): ?>
						<li<?php if ($this->_tpl_vars['p'] == 'suggest'): ?> class="active"<?php endif; ?>><a href="<?php echo @_URL; ?>
/suggest.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['suggest']; ?>
</a></li>
						<?php endif; ?>
						<?php if (@_ALLOW_USER_UPLOADVIDEO == '1'): ?>
						<li<?php if ($this->_tpl_vars['p'] == 'upload'): ?> class="active"<?php endif; ?>><a href="<?php echo @_URL; ?>
/upload.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['upload_video']; ?>
</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>