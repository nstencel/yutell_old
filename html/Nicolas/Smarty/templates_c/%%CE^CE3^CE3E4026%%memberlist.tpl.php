<?php /* Smarty version 2.6.30, created on 2019-04-24 17:43:51
         compiled from memberlist.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile-header.tpl", 'smarty_include_vars' => array('p' => 'members')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content" class="content-detached content-video-handler">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-7 col-sm-7 col-md-10">
			<h1><?php echo $this->_tpl_vars['lang']['members']; ?>
</h1>
		</div>
		<div class="col-xs-5 col-sm-5 col-md-2">
			<div class="pull-right">
				<div>
					<small><div id="uploadProgressBar"></div></small>
					<div id="divStatus"></div>
					<ol id="uploadLog" class="list-unstyled"></ol>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-md-12">
			<div class="pm-section-head">
		    <div class="btn-group btn-group-sort">
		    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
            <?php if ($this->_tpl_vars['gv_sortby'] == ''): ?><?php echo $this->_tpl_vars['lang']['sorting']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['gv_sortby'] == 'name'): ?><?php echo $this->_tpl_vars['lang']['name']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['gv_sortby'] == 'lastseen'): ?><?php echo $this->_tpl_vars['lang']['last_seen']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['gv_sortby'] == 'online'): ?><?php echo $this->_tpl_vars['lang']['whois_online']; ?>
<?php endif; ?>
		    <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu pull-right">
		        <li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?page=<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
&sortby=name" rel="nofollow" class="<?php if ($this->_tpl_vars['gv_sortby'] == 'name'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['name']; ?>
</a></li>
		        <li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?page=<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
&sortby=lastseen" rel="nofollow" class="<?php if ($this->_tpl_vars['gv_sortby'] == 'lastseen'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['last_seen']; ?>
</a></li>
		        <li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?do=online&sortby=online" rel="nofollow" class="<?php if ($this->_tpl_vars['gv_sortby'] == 'online'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['whois_online']; ?>
</a></li>
		    </ul>
		    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				<ul class="pagination pagination-sm">
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
" rel="nofollow"><?php echo $this->_tpl_vars['lang']['memberlist_all']; ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=a" rel="nofollow">A</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=b" rel="nofollow">B</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=c" rel="nofollow">C</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=d" rel="nofollow">D</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=e" rel="nofollow">E</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=f" rel="nofollow">F</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=g" rel="nofollow">G</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=h" rel="nofollow">H</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=i" rel="nofollow">I</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=j" rel="nofollow">J</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=k" rel="nofollow">K</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=l" rel="nofollow">L</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=m" rel="nofollow">M</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=n" rel="nofollow">N</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=o" rel="nofollow">O</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=p" rel="nofollow">P</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=q" rel="nofollow">Q</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=r" rel="nofollow">R</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=s" rel="nofollow">S</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=t" rel="nofollow">T</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=u" rel="nofollow">U</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=v" rel="nofollow">V</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=w" rel="nofollow">W</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=x" rel="nofollow">X</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=y" rel="nofollow">Y</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=z" rel="nofollow">Z</a></li>
					<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?letter=other" rel="nofollow">#</a></li>
				</ul>
				</div>
			</div>

			<div class="clearfix"></div>
			<ul class="row pm-channels-list list-unstyled">
			<?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['user_data']):
?>
			<li class="col-sm-6 col-md-4">
				<div class="pm-channel">
					<div class="pm-channel-header">
						<div class="pm-channel-cover">
							<?php if ($this->_tpl_vars['user_data']['channel_cover']['max']): ?>
							<img src="<?php echo $this->_tpl_vars['user_data']['channel_cover']['450']; ?>
" alt="<?php echo $this->_tpl_vars['user_data']['username']; ?>
"  border="0" class="img-responsive">
							<?php endif; ?>
						</div>
						<div class="pm-channel-profile-pic">
							<a href="<?php echo $this->_tpl_vars['user_data']['profile_url']; ?>
"><img src="<?php echo $this->_tpl_vars['user_data']['avatar_url']; ?>
" alt="<?php echo $this->_tpl_vars['user_data']['username']; ?>
"  border="0" class="img-responsive"></a>
						</div>
					</div>
					<div class="pm-channel-body">
						<h3><a href="<?php echo $this->_tpl_vars['user_data']['profile_url']; ?>
" class="ellipsis <?php if ($this->_tpl_vars['user_data']['user_is_banned']): ?>pm-user-banned<?php endif; ?>"><?php echo $this->_tpl_vars['user_data']['name']; ?>
</a></h3>
						<p></p>
						<?php if ($this->_tpl_vars['logged_in']): ?>
						<div class="pm-channel-buttons">
							<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] == '1' && $this->_tpl_vars['user_data']['id'] != $this->_tpl_vars['s_user_id']): ?>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user-subscribe-button.tpl", 'smarty_include_vars' => array('current_user_data' => $this->_tpl_vars['user_data'],'profile_user_id' => $this->_tpl_vars['user_data']['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php else: ?>
								<a href="<?php echo $this->_tpl_vars['user_data']['profile_url']; ?>
" class="btn btn-sm btn-success"><?php echo $this->_tpl_vars['lang']['this_is_you']; ?>
</a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</li>
			<?php endforeach; else: ?>
				<?php if ($this->_tpl_vars['problem'] != ''): ?>
				<li class="col-xs-12 col-sm-12 col-md-12">
					<div class="text-center"><?php echo $this->_tpl_vars['problem']; ?>
</div>
				</li>
				<?php else: ?>
				<li class="col-xs-12 col-sm-12 col-md-12">
					<div class="text-center"><?php echo $this->_tpl_vars['lang']['memberlist_msg2']; ?>
</div>
				</li>
				<?php endif; ?>
			<?php endif; unset($_from); ?>
			</ul>
			<div class="clearfix"></div>
			<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-pagination-obj.tpl', 'smarty_include_vars' => array('custom_class' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
        </div><!-- #content -->
      </div><!-- .row -->
    </div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>