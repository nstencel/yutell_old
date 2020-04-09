{include file='header.tpl' p="index" tpl_name="index"} 
<div class="container-fluid" align="left">
	<div class="row">
		<div class="pm-section-highlighted" align="center">
			<div class="col-md-6" align="center">
				<div id="video-wrapper" align="center">
					<div class="pm-video-watch-featured" align="center">
					{if $featured_videos_total == 1}
						<h2><a href="{$featured_videos.0.video_href}">{$featured_videos.0.video_title}</a></h2>
						{if $display_preroll_ad == true}
							<div id="preroll_placeholder" align="center">
								<div class="preroll_countdown" align="center">
									{$lang.preroll_ads_timeleft} <span class="preroll_timeleft">{$preroll_ad_data.timeleft_start}</span>
								</div>
								{$preroll_ad_data.code}
								
								{if $preroll_ad_data.skip}
								<div class="preroll_skip_countdown">
									{$lang.preroll_ads_skip_msg} <span class="preroll_skip_timeleft">{$preroll_ad_data.skip_delay_seconds}</span>
								</div>
								<div class="preroll_skip_button">
								<button class="btn btn-default hide-me" id="preroll_skip_btn">{$lang.preroll_ads_skip}</button>
								</div>
								{/if}
								{if $preroll_ad_data.disable_stats == 0}
									<img src="{$smarty.const._URL}/ajax.php?p=stats&do=show&aid={$preroll_ad_data.id}&at={$smarty.const._AD_TYPE_PREROLL}" width="1" height="1" border="0" />
								{/if}
							</div>
						{else}
							{include file="player.tpl" page="index" video_data=$featured_videos.0}
						{/if}

					{elseif $featured_videos_total > 1}
						<h2><a href="{$featured_videos.0.video_href}">{$featured_videos.0.video_title}</a></h2>
							{include file="player.tpl" page="index" video_data=$featured_videos.0}
						<div class="clearfix"></div>
					{/if}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="content" >




	  <div class="row">
		<div class="col-md-12">
			<div class="pm-section-head">
				<h2><a href="{$smarty.const._URL}/newvideos.{$smarty.const._FEXT}">{$lang.new_videos}</a></h2>
			</div>
			<ul class="pm-ul-browse-videos list-unstyled">
				{foreac h from=$new_videos key=k item=video_data}
				<li class="col-xs-8 col-sm-6 col-md-4">
					{include file='item-video-obj.tpl'}
				</li>
				{foreachelse}
				<li class="col-xs-12 col-sm-12 col-md-12">
					{$lang.top_videos_msg2}
				</li>
				{/foreach}
			</ul>
			<div class="clearfix"></div>
		</div>
                        <!-- .col-md-8 -->




	{if count($featured_categories_data) > 0}
		{foreach from=$featured_categories_data key=category_id item=video_data_array}
		<div >
			<div class="col-xs-8 col-sm-8 col-md-8">
				{if $categories.$category_id.published_videos > 0}
				<div class="col-xs-8 col-sm-8 col-md-8">
					<h2><a href="{$categories.$category_id.url}">{$categories.$category_id.name}</a></h2>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_{$category_id}"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_{$category_id}"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="{$category_id}" data-slides="5" id="pm-carousel_{$category_id}">
						{foreach from=$video_data_array key=k item=video_data}
						<li class="">
						{include file='item-video-obj.tpl'}
						</li>
						{/foreach}
					</ul>
				</div><!-- #pm-slider -->
				{/if}
			</div>
		</div>
		{/foreach}
	{/if}

	<div class="clearfix"></div>

	</div><!-- .container -->
          </div>
        </div> 
</div>

{include file='footer.tpl' p="index"} 