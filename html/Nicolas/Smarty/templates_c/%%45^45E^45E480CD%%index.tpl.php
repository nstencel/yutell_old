<?php /* Smarty version 2.6.30, created on 2019-04-23 12:30:44
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 130, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'index','tpl_name' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="container-fluid" align="center">
	<div class="row">
		<div class="pm-section-highlighted" align="center">
			<div class="col-md-6" align="center">
				<div id="video-wrapper" align="center">
					<div class="pm-video-watch-featured" align="center">
					<?php if ($this->_tpl_vars['featured_videos_total'] == 1): ?>
						<h2><a href="<?php echo $this->_tpl_vars['featured_videos']['0']['video_href']; ?>
"><?php echo $this->_tpl_vars['featured_videos']['0']['video_title']; ?>
</a></h2>
						<?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
							<div id="preroll_placeholder" align="center">
								<div class="preroll_countdown" align="center">
									<?php echo $this->_tpl_vars['lang']['preroll_ads_timeleft']; ?>
 <span class="preroll_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['timeleft_start']; ?>
</span>
								</div>
								<?php echo $this->_tpl_vars['preroll_ad_data']['code']; ?>

								
								<?php if ($this->_tpl_vars['preroll_ad_data']['skip']): ?>
								<div class="preroll_skip_countdown">
									<?php echo $this->_tpl_vars['lang']['preroll_ads_skip_msg']; ?>
 <span class="preroll_skip_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['skip_delay_seconds']; ?>
</span>
								</div>
								<div class="preroll_skip_button">
								<button class="btn btn-default hide-me" id="preroll_skip_btn"><?php echo $this->_tpl_vars['lang']['preroll_ads_skip']; ?>
</button>
								</div>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['preroll_ad_data']['disable_stats'] == 0): ?>
									<img src="<?php echo @_URL; ?>
/ajax.php?p=stats&do=show&aid=<?php echo $this->_tpl_vars['preroll_ad_data']['id']; ?>
&at=<?php echo @_AD_TYPE_PREROLL; ?>
" width="1" height="1" border="0" />
								<?php endif; ?>
							</div>
						<?php else: ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'index','video_data' => $this->_tpl_vars['featured_videos']['0'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endif; ?>

					<?php elseif ($this->_tpl_vars['featured_videos_total'] > 1): ?>
						<h2><a href="<?php echo $this->_tpl_vars['featured_videos']['0']['video_href']; ?>
"><?php echo $this->_tpl_vars['featured_videos']['0']['video_title']; ?>
</a></h2>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'index','video_data' => $this->_tpl_vars['featured_videos']['0'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<div class="clearfix"></div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="content" >
	<div class="container">

	<?php if ($this->_tpl_vars['featured_videos_total'] > 2): ?>
	<div class="row pm-featured-list-row" align="center">
		<div class="col-md-12">
			<div class="pm-section-head" align="center">
				<h2><?php echo $this->_tpl_vars['lang']['_feat']; ?>
</h2>
				<div class="btn-group btn-group-sort">
				<button class="btn btn-xs" id="pm-slide-prev_featured"><i class="fa fa-chevron-left"></i></button>
				<button class="btn btn-xs" id="pm-slide-next_featured"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<div id="">
			<!-- Carousel items -->
				<ul class="pm-ul-carousel-videos list-inline" data-slider-id="featured" data-slides="5" id="pm-carousel_featured">
					<?php $_from = $this->_tpl_vars['featured_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['featured_videos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['featured_videos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
        $this->_foreach['featured_videos']['iteration']++;
?>
						<?php if (($this->_foreach['featured_videos']['iteration']-1) < 4): ?>
							<li class="col-xs-2 col-sm-2 col-md-6">
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array('hideLabels' => '1','hideMeta' => '1','thumbSize' => 'medium')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        						</li>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					
				</ul>
			</div><!-- #pm-slider -->
		</div>
	</div>
	<?php endif; ?>

	<div class="row pm-vbwrn-list-row">
            <div class="col-md-12" >
                    <h2><?php echo $this->_tpl_vars['featured_videos']['0']['author_name']; ?>
 | <?php echo $this->_tpl_vars['featured_videos']['0']['video_title']; ?>
</h2> 
                    <div><?php echo $this->_tpl_vars['featured_videos']['0']['description']; ?>
</div>
                    <dl class="dl-vertical"><font color="red">Yu</font>Language <font color="blue"><?php echo $this->_tpl_vars['featured_videos']['0']['yt_lang']; ?>
</font> <br />
                        <font color="red">Yu</font>Funny <font color="blue"><input type="text" class="rating" value="<?php echo $this->_tpl_vars['featured_videos']['0']['yt_funny']; ?>
" data-min=0 data-max=3 data-step=0.5 data-size="xs" ></font>   
                        <font color="red">Yu</font>Interesting <font color="blue"><input type="text" class="rating" value="<?php echo $this->_tpl_vars['featured_videos']['0']['yt_inte']; ?>
" data-min=0 data-max=3 data-step=0.5 data-size="xs" ></font>
                        <font color="red">Yu</font>Emotional <font color="blue"><input type="text" class="rating" value="<?php echo $this->_tpl_vars['featured_videos']['0']['yt_emot']; ?>
" data-min=0 data-max=3 data-step=0.5 data-size="xs" ></font></dl> 
    
                        <?php if ($this->_tpl_vars['total_playingnow'] > 0): ?>
			<div class="pm-section-head">
				<h2><?php echo $this->_tpl_vars['lang']['vbwrn']; ?>
</h2>
				<div class="btn-group btn-group-sort">
				<button class="btn btn-xs" id="pm-slide-prev_vbwrn"><i class="fa fa-chevron-left"></i></button>
				<button class="btn btn-xs" id="pm-slide-next_vbwrn"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<div id="">
			<!-- Carousel items -->
				<ul class="" data-slider-id="vbwrn" data-slides="5" id="pm-carousel_vbwrn" align="center">
					<?php $_from = $this->_tpl_vars['playingnow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
						<li class="col-xs-3 col-sm-3 col-md-3">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div><!-- #pm-slider -->
			<?php endif; ?>
		</div>
	</div>
                    <form>
        <div class="page-header">
	  <div class="row">
		<div class="col-md-12">
			<div class="pm-section-head">
				<h2><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['new_videos']; ?>
</a></h2>
			</div>
			<ul class="pm-ul-browse-videos list-unstyled">
				<?php $_from = $this->_tpl_vars['new_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
				<li class="col-xs-12 col-sm-6 col-md-4">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
				<?php endforeach; else: ?>
				<li class="col-xs-12 col-sm-12 col-md-12">
					<?php echo $this->_tpl_vars['lang']['top_videos_msg2']; ?>

				</li>
				<?php endif; unset($_from); ?>
			</ul>
			<div class="clearfix"></div>
		</div><!-- .col-md-8 -->

		<div class="col-md-4 col-md-sidebar">
			<?php if ($this->_tpl_vars['ad_5'] != ''): ?>
			<div class="widget">
				<div class="pm-section-head">
					<h2><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['_advertisment'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Advertisment') : smarty_modifier_default($_tmp, 'Advertisment')); ?>
</h2>
				</div>
				<div class="pm-ads-banner" align="center"><?php echo $this->_tpl_vars['ad_5']; ?>
</div>
			</div><!-- .widget -->
			<?php endif; ?>




	<?php if (count ( $this->_tpl_vars['featured_categories_data'] ) > 0): ?>
		<?php $_from = $this->_tpl_vars['featured_categories_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category_id'] => $this->_tpl_vars['video_data_array']):
?>
		<div >
			<div class="col-xs-8 col-sm-8 col-md-8">
				<?php if ($this->_tpl_vars['categories'][$this->_tpl_vars['category_id']]['published_videos'] > 0): ?>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<h2><a href="<?php echo $this->_tpl_vars['categories'][$this->_tpl_vars['category_id']]['url']; ?>
"><?php echo $this->_tpl_vars['categories'][$this->_tpl_vars['category_id']]['name']; ?>
</a></h2>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_<?php echo $this->_tpl_vars['category_id']; ?>
"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_<?php echo $this->_tpl_vars['category_id']; ?>
"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="<?php echo $this->_tpl_vars['category_id']; ?>
" data-slides="5" id="pm-carousel_<?php echo $this->_tpl_vars['category_id']; ?>
">
						<?php $_from = $this->_tpl_vars['video_data_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
						<li class="">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div><!-- #pm-slider -->
				<?php endif; ?>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

	<div class="clearfix"></div>

	</div><!-- .container -->
          </div>
        </div> 
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('p' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 