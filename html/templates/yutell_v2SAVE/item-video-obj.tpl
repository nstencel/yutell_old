<div class="thumbnail{if $thumbSize == 'large'} thumbnail-large{elseif $thumbSize == 'medium'} thumbnail-medium{elseif $thumbSize == 'small'} thumbnail-small{/if}">
	<div class="pm-video-thumb{if $video_data.pending_approval} pm-video-thumb-pending{/if} ripple">
		{if $video_data.yt_length != 0}<span class="pm-label-duration">{$video_data.duration}</span>{/if}

		{if $profile_data.id == $s_user_id && $allow_user_edit_video}
			{if $video_data.pending_approval}
			<a href="{$smarty.const._URL}/edit-video.php?vid={$video_data.id}&type=pending" class="btn btn-mini btn-edit-video" rel="tooltip" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
			{else}
			<a href="{$smarty.const._URL}/edit-video.php?vid={$video_data.uniq_id}" class="btn btn-mini btn-edit-video" rel="tooltip" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
			{/if}
		{/if}

		{if !$video_data.pending_approval}
			{if $logged_in}
			<div class="watch-later">
				<button class="pm-watch-later-add btn btn-xs btn-default hidden-xs watch-later-add-btn-{$video_data.id}" onclick="watch_later_add({$video_data.id}); return false;" rel="tooltip" data-placement="left" title="{$lang.watch_later}"><i class="fa fa-clock-o"></i></button>
				<button class="pm-watch-later-remove btn btn-xs btn-success hidden-xs watch-later-remove-btn-{$video_data.id}" onclick="watch_later_remove({$video_data.id}); return false;" rel="tooltip" title="{$lang.playlist_remove_item}"><i class="fa fa-check"></i></button>
			</div>
			{else}
			<a class="pm-watch-later-add btn btn-xs btn-default hidden-xs" rel="tooltip" data-placement="left" title="{$lang.watch_later}" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-login-form"><i class="fa fa-clock-o"></i></a>
			{/if}
		{/if}
                
                 

                
               
		<a href="{$video_data.video_href}" title="{$video_data.attr_alt}">
			{if $tpl_name == "video-top"}
			<div class="pm-video-rank-no">{$video_data.position}</div>
			{/if}
			{if $hideLabels != "20"}
			<div class="pm-video-labels">
				{if $video_data.pending_approval}<span class="label label-pending">{$lang.pending_approval}</span>{/if}
				{if $video_data.mark_new}<span class="label label-new">YuTell</span>{/if}
                                {if $video_data.mark_popular}<span class="label label-pop">YuTell</span>{/if}<br>
                                <span class="label label-featured"><i class="fa fa-child"></i><font color="Yellow"> {$video_data.yt_lang}</font></span> <br>
                                <span class="label label-featured"><i class="fa fa-comment"></i><font color="white"> {$video_data.yt_fun}<i class="fa fa-star"></i></span><br>
                                <span class="label label-featured"><i class="fa fa-desktop"></i> <font color="white"> {$video_data.yt_inte}<i class="fa fa-star"></i></font></span><br>
                                <span class="label label-featured"><i class="fa fa-heart"></i><font color="white"> {$video_data.yt_emot}<i class="fa fa-star"></i></font></span><br><br>
                                <span class="label label-featured"><i class="fa fa-eye"></i> {$video_data.views_compact}</span><br>
                                <span class="label label-featured"><i class="fa fa-thumbs-up"></i> {$video_data.likes_compact}</span><br>
                                
				{if $video_data.featured}<span class="label label-featured">{$lang._feat}</span>{/if}
			</div>
			{/if}
                        <div class="pm-video-ads">
                                
                                <span><font color="Red">Reserved</font></span><br>
                                <span><font color="Yellow">Ad Area</font></span>

			</div>
			<img src="{$smarty.const._URL}/templates/{$template_dir}/img/melody-lzld.png" alt="{$video_data.attr_alt}" data-echo="{$video_data.thumb_img_url}" class="img-responsive">
                        
		<span class="overlay"></span>
		</a>
	</div>

	<div class="caption">
		<h3><a href="{$video_data.video_href}" title="{$video_data.attr_alt}" class="ellipsis">{$video_data.author_name} | {$video_data.video_title}</a></h3>
                
		{if $hideMeta != "12"}
		<div class="pm-video-meta">

			                                <div>
					{$video_data.description}
                                                        </div>
			
		
		</div>
		{/if}

 
	</div>
</div>