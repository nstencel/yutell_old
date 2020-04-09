<?php /* Smarty version 2.6.30, created on 2020-01-30 20:18:30
         compiled from profile-playlists.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'profile-playlists.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('no_index' => '1','p' => 'playlists','tpl_name' => "profile-playlists")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile-header.tpl", 'smarty_include_vars' => array('p' => 'playlists')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-8 col-sm-8 col-md-10"><h1><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['manage_playlists'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Manage Playlists') : smarty_modifier_default($_tmp, 'Manage Playlists')); ?>
</h1></div>
		<div class="col-xs-4 col-sm-4 col-md-2">
		<?php if ($this->_tpl_vars['allow_playlists']): ?>
		<a href="#modal-new-playlist" data-toggle="modal" data-backdrop="true" data-keyboard="true" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> <?php echo $this->_tpl_vars['lang']['new_playlist']; ?>
</a>
		<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'profile-playlists-ul.tpl', 'smarty_include_vars' => array('playlists' => $this->_tpl_vars['playlists'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>

			<?php if ($this->_tpl_vars['allow_playlists']): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-playlist-createnew.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
	</div><!-- .row -->
	</div><!-- .container-fluid -->
</div><!-- #content -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 