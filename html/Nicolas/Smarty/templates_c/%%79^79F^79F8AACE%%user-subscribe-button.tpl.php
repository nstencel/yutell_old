<?php /* Smarty version 2.6.30, created on 2019-04-23 12:30:51
         compiled from user-subscribe-button.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'user-subscribe-button.tpl', 2, false),)), $this); ?>
<?php if (! $this->_tpl_vars['profile_data']['am_following']): ?>
	<button id="btn_follow_<?php echo $this->_tpl_vars['profile_user_id']; ?>
" class="btn btn-sm btn-success btn-follow" data-user-id="<?php echo $this->_tpl_vars['profile_user_id']; ?>
"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribe'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribe') : smarty_modifier_default($_tmp, 'Subscribe')); ?>
</button>
<?php else: ?>
	<button id="btn_unfollow_<?php echo $this->_tpl_vars['profile_user_id']; ?>
" class="btn btn-sm btn-success btn-unfollow" data-user-id="<?php echo $this->_tpl_vars['profile_user_id']; ?>
"><i class="fa fa-check"></i> <?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribed'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribed') : smarty_modifier_default($_tmp, 'Subscribed')); ?>
</button>
<?php endif; ?>