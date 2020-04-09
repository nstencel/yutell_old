<?php /* Smarty version 2.6.30, created on 2019-04-24 17:21:28
         compiled from profile-edit-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'profile-edit-form.tpl', 60, false),)), $this); ?>
<form class="form-horizontal" name="register-form" id="register-form" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
" role="form">
	<fieldset>
		<h4><?php echo $this->_tpl_vars['lang']['about_me']; ?>
</h4>
		<hr>
		<div class="form-group">
			<label for="name" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['your_name']; ?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="name" <?php if (isset ( $this->_tpl_vars['inputs']['name'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['name']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['name']; ?>
"<?php endif; ?>></div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['your_email']; ?>
 <a href="#" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['safe_email']; ?>
"><i class="fa fa-question-circle"></i> </a></label>
			<div class="col-md-4">
			<input type="text" class="form-control" name="email" <?php if (isset ( $this->_tpl_vars['inputs']['email'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['email']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['email']; ?>
"<?php endif; ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="gender" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['gender']; ?>
</label>
			<div class="col-md-2">
			<select name="gender" class="form-control">
			<option value="male" <?php if ($this->_tpl_vars['inputs']['gender'] == 'male'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['male']; ?>
</option>
			<option value="female"<?php if ($this->_tpl_vars['inputs']['gender'] == 'female'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['female']; ?>
</option>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['country']; ?>
</label>
			<div class="col-md-2">
			<?php if ($this->_tpl_vars['show_countries_list']): ?>
			<select name="country" size="1" class="form-control">
			<option value="-1"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
					<?php $_from = $this->_tpl_vars['countries_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
					<option value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['inputs']['country'] == $this->_tpl_vars['k']): ?>selected<?php elseif ($this->_tpl_vars['userdata']['country'] == $this->_tpl_vars['k']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
			</select>
			<?php endif; ?>
			</div>
		</div>
		
		<div class="form-group">
			<label for="aboutme" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['about_me']; ?>
</label>
			<div class="col-md-4"><textarea name="aboutme" class="form-control" rows="2"><?php if (isset ( $this->_tpl_vars['inputs']['aboutme'] )): ?><?php echo $this->_tpl_vars['inputs']['aboutme']; ?>
<?php elseif (isset ( $this->_tpl_vars['userdata']['about'] )): ?><?php echo $this->_tpl_vars['userdata']['about']; ?>
<?php endif; ?></textarea></div>
		</div>
	</fieldset>

	<fieldset>
		<h4><?php echo $this->_tpl_vars['lang']['_social']; ?>
</h4>
		<hr>
		<div class="form-group">
			<label for="website" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['profile_social_website']; ?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="website" <?php if (isset ( $this->_tpl_vars['inputs']['website'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['website']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['social_links']['website']; ?>
"<?php endif; ?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="facebook" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['profile_social_fb']; ?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="facebook" <?php if (isset ( $this->_tpl_vars['inputs']['facebook'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['facebook']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['social_links']['facebook']; ?>
"<?php endif; ?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="twitter" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['profile_social_twitter']; ?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="twitter" <?php if (isset ( $this->_tpl_vars['inputs']['twitter'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['twitter']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['social_links']['twitter']; ?>
"<?php endif; ?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="instagram" class="col-md-2 control-label"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['profile_social_instagram'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Instagram URL') : smarty_modifier_default($_tmp, 'Instagram URL')); ?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="instagram" <?php if (isset ( $this->_tpl_vars['inputs']['instagram'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['instagram']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['social_links']['instagram']; ?>
"<?php endif; ?> placeholder="https://"></div>
		</div>
		<div class="form-group">
			<label for="google_plus" class="col-md-2 control-label"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['profile_social_google_plus'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Google+ URL') : smarty_modifier_default($_tmp, 'Google+ URL')); ?>
</label>
			<div class="col-md-4"><input type="text" class="form-control" name="google_plus" <?php if (isset ( $this->_tpl_vars['inputs']['google_plus'] )): ?>value="<?php echo $this->_tpl_vars['inputs']['google_plus']; ?>
"<?php else: ?>value="<?php echo $this->_tpl_vars['userdata']['social_links']['google_plus']; ?>
"<?php endif; ?> placeholder="https://"></div>
		</div>
	</fieldset>

	<fieldset>
		<h4><?php echo $this->_tpl_vars['lang']['change_pass']; ?>
</h4>
		<hr>
		<div class="form-group has-error">
			<label for="current_pass" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['existing_pass']; ?>
</label>
			<div class="col-md-4">
			<input type="password" class="form-control" name="current_pass" maxlength="32">
			</div>
		</div>
		<div class="form-group">
			<label for="new_pass" class="col-md-2 control-label"><?php echo $this->_tpl_vars['lang']['new_pass']; ?>
</label>
			<div class="col-md-4">
			<input type="password" class="form-control" name="new_pass" maxlength="32">
			<p class="help-block"><small><?php echo $this->_tpl_vars['lang']['ep_msg5']; ?>
</small></p>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
			<button type="submit" name="save" value="<?php echo $this->_tpl_vars['lang']['submit_save']; ?>
" class="btn btn-success" data-loading-text="<?php echo $this->_tpl_vars['lang']['submit_save']; ?>
"><?php echo $this->_tpl_vars['lang']['submit_save']; ?>
</button>
			</div>
		</div>
	</fieldset>
</form>