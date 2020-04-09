<?php /* Smarty version 2.6.30, created on 2019-04-24 18:03:11
         compiled from user-follow-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'user-follow-list.tpl', 17, false),array('modifier', 'truncate', 'user-follow-list.tpl', 20, false),)), $this); ?>
<ul class="row pm-channels-list list-unstyled">
<?php $_from = $this->_tpl_vars['profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profile_user_id'] => $this->_tpl_vars['profile']):
?>
<li class="col-sm-6 col-md-4">
	<div class="pm-channel">
		<div class="pm-channel-header">
			<div class="pm-channel-cover">
				<?php if ($this->_tpl_vars['profile']['channel_cover']['max']): ?>
				<img src="<?php echo $this->_tpl_vars['profile']['channel_cover']['450']; ?>
" alt="<?php echo $this->_tpl_vars['profile']['username']; ?>
"  border="0" class="img-responsive">
				<?php endif; ?>
			</div>
			<div class="pm-channel-profile-pic">
				<a href="<?php echo $this->_tpl_vars['profile']['profile_url']; ?>
"><img src="<?php echo $this->_tpl_vars['profile']['avatar_url']; ?>
" alt="<?php echo $this->_tpl_vars['profile']['username']; ?>
"  border="0" class="img-responsive"></a>
			</div>
		</div>
		<div class="pm-channel-body">
			<h3><a href="<?php echo $this->_tpl_vars['profile']['profile_url']; ?>
" class="ellipsis <?php if ($this->_tpl_vars['profile']['user_is_banned']): ?>pm-user-banned<?php endif; ?>"><?php echo $this->_tpl_vars['profile']['name']; ?>
</a> 
			<?php if ($this->_tpl_vars['profile']['channel_verified'] == 1): ?><a href="#" rel="tooltip" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['verified_channel'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Verified Channel') : smarty_modifier_default($_tmp, 'Verified Channel')); ?>
"><img src="<?php echo @_URL; ?>
/templates/<?php echo @_TPLFOLDER; ?>
/img/ico-verified.png" width="12" height="12" alt="" /></a><?php endif; ?> 
			<?php if ($this->_tpl_vars['profile']['is_following_me']): ?><span class="label label-success label-follow-status pull-right"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscriber'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscriber') : smarty_modifier_default($_tmp, 'Subscriber')); ?>
</span><?php endif; ?></h3>
			<div class="pm-channel-stats"><?php echo $this->_tpl_vars['profile']['followers_count']; ?>
 <?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribers'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribers') : smarty_modifier_default($_tmp, 'Subscribers')); ?>
</div>
			<!-- <div class="pm-channel-desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</div> -->

			<div class="pm-channel-buttons">
				<?php if ($this->_tpl_vars['profile_user_id'] != $this->_tpl_vars['s_user_id']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user-subscribe-button.tpl", 'smarty_include_vars' => array('profile_data' => $this->_tpl_vars['profile'],'profile_user_id' => $this->_tpl_vars['profile_user_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?>
					<button class="btn btn-regular btn-success btn-follow" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['this_is_you']; ?>
" disabled="disabled"><?php echo $this->_tpl_vars['lang']['follow']; ?>
</button>
				<?php endif; ?>
			</div>
		</div>
	</div>
</li>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['follow_count'] == 0): ?>
	<?php echo $this->_tpl_vars['lang']['memberlist_msg3']; ?>

<?php endif; ?>
</ul>

<?php if ($this->_tpl_vars['total_profiles'] == @FOLLOW_PROFILES_PER_PAGE): ?>
	<div class="clearfix"></div>
	<span id="btn_follow_load_more"></span>
<?php endif; ?>