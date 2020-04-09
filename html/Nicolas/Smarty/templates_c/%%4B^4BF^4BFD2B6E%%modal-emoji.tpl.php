<?php /* Smarty version 2.6.30, created on 2019-04-23 12:30:51
         compiled from modal-emoji.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'modal-emoji.tpl', 8, false),)), $this); ?>
<!-- Modal -->
<div id="modalEmojiHelp"></div>
<div class="modal" id="modalEmojiList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['emoji_help'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Emoji Finder') : smarty_modifier_default($_tmp, 'Emoji Finder')); ?>
</h4>
			</div>
			<div class="modal-body modal-content">
			<span id="loading"><img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/ajax-loading.gif" alt="<?php echo $this->_tpl_vars['lang']['please_wait']; ?>
" align="absmiddle" border="0" width="16" height="16" /> <?php echo $this->_tpl_vars['lang']['please_wait']; ?>
</span>
			</div>
			<div class="modal-footer">
				<button class="btn btn-sm btn-default" data-dismiss="modal" aria-hidden="true"><?php echo $this->_tpl_vars['lang']['close']; ?>
</button>
			</div>
		</div>
	</div>
</div>