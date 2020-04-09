<?php /* Smarty version 2.6.30, created on 2019-12-12 14:53:00
         compiled from widget-socialite.tpl */ ?>
<div id="pm-socialite">
	<ul class="social-buttons cf">
		<li>
			<a href="https://www.facebook.com/sharer.php?u=<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['link']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_href']; ?>
<?php endif; ?>&t=<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_title']; ?>
<?php endif; ?>" class="socialite facebook-like" data-href="<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['link']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_href']; ?>
<?php endif; ?>" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">Share on Facebook</span></a>
		</li>
		<li>
			<a href="https://twitter.com/share" class="socialite twitter-share" data-text="<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_title']; ?>
<?php endif; ?>" data-url="<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['link']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_href']; ?>
<?php endif; ?>" data-count="vertical" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a>
		</li>
		<li>
			<a href="https://pinterest.com/pin/create/button/?url=<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['link']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_href']; ?>
<?php endif; ?>/" class="socialite pinterest-pinit"><span class="vhidden">Pinterest</span></a>
		</li>
	</ul>
</div>