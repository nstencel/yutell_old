<div class="row">
    <div class="col-md-12 text-center">
	<ul class="pagination pagination-sm pagination-arrows">
		{foreach from=$comment_pagination_obj key=k item=comment_pagination_data}
		<li{foreach from=$comment_pagination_data.li key=attr item=attr_val} {$attr}="{$attr_val}"{/foreach}>
			<a{foreach from=$comment_pagination_data.a key=attr item=attr_val} {$attr}="{$attr_val}"{/foreach}>{$comment_pagination_data.text}</a>
		</li>
		{/foreach}
	</ul>
	</div>
</div>