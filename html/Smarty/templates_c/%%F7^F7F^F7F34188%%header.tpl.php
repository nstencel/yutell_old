<?php /* Smarty version 2.6.30, created on 2020-01-26 20:08:37
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'header.tpl', 117, false),array('modifier', 'escape', 'header.tpl', 134, false),array('function', 'dropdown_menu_video_categories', 'header.tpl', 359, false),array('function', 'dropdown_menu_article_categories', 'header.tpl', 388, false),)), $this); ?>
<?php $this->_cache_serials['/var/www/html/Smarty/templates_c/%%F7^F7F^F7F34188%%header.tpl.inc'] = '4402ae6dcfe4d9bab1bf357cccd121c2'; ?>﻿<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" dir="<?php if (@_IS_RTL == '1'): ?>rtl<?php else: ?>ltr<?php endif; ?>">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html dir="<?php if (@_IS_RTL == '1'): ?>rtl<?php else: ?>ltr<?php endif; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php echo $this->_tpl_vars['meta_title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge,chrome=1">
<?php if ($this->_tpl_vars['no_index'] == '1' || @_DISABLE_INDEXING == '1'): ?>
<meta name="robots" content="noindex,nofollow">
<meta name="googlebot" content="noindex,nofollow">
<?php endif; ?>
<meta name="title" content="<?php echo $this->_tpl_vars['meta_title']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" />
<!-- <link rel="shortcut icon" href="<?php echo @_URL; ?>
/templates/<?php echo @_TPLFOLDER; ?>
/img/favicon.ico"> -->
<?php if ($this->_tpl_vars['tpl_name'] == "video-category"): ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_tpl_vars['meta_title']; ?>
" href="<?php echo @_URL; ?>
/rss.php?c=<?php echo $this->_tpl_vars['cat_id']; ?>
" />
<?php elseif ($this->_tpl_vars['tpl_name'] == "video-top"): ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_tpl_vars['meta_title']; ?>
" href="<?php echo @_URL; ?>
/rss.php?feed=topvideos" />
<?php elseif ($this->_tpl_vars['tpl_name'] == "article-category"): ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_tpl_vars['meta_title']; ?>
" href="<?php echo @_URL; ?>
/rss.php?c=<?php echo $this->_tpl_vars['cat_id']; ?>
&feed=articles" />
<?php else: ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_tpl_vars['meta_title']; ?>
" href="<?php echo @_URL; ?>
/rss.php" />
<?php endif; ?>

<?php if ($this->_tpl_vars['comment_system_facebook'] && $this->_tpl_vars['fb_app_id'] != ''): ?>
<meta property="fb:app_id" content="<?php echo $this->_tpl_vars['fb_app_id']; ?>
" />
<?php endif; ?>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!--[if lt IE 9]>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/css/jasny-bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/css/melody.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/css/animate.min.css">
<?php if (@_IS_RTL == '1'): ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/css/bootstrap.min.rtl.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/css/melody.rtl.css">
<?php endif; ?>

    		
    <link rel="stylesheet" href="/templates/yutell_v2/yrate/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/templates/yutell_v2/yrate/css/croppie.css" />
    <link href="https://file.myfontastic.com/2mBJWXyFtHfnjDpjTpHG83/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/templates/yutell_v2/css/fontawesome.min.css">
    <link rel="stylesheet" href="/templates/yutell_v2/css/fontawesome.css">
    <link rel="stylesheet" href="/templates/yutell_v2/yrate/css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="/templates/yutell_v2/yrate/css/themes/krajee-fa/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="/templates/yutell_v2/yrate/css/themes/krajee-svg/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="/templates/yutell_v2/yrate/css/themes/krajee-uni/theme.css" media="all" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/templates/yutell_v2/yrate/js/star-rating.js" type="text/javascript"></script>
    <script src="/templates/yutell_v2/yrate/js/themes/krajee-fa/theme.js" type="text/javascript"></script>
    <script src="/templates/yutell_v2/yrate/js/themes/krajee-svg/theme.js" type="text/javascript"></script>
    <script src="/templates/yutell_v2/yrate/js/themes/krajee-uni/theme.js" type="text/javascript"></script>
    <script src="/templates/yutell_v2/yrate/js/jquery.min.js"></script>  
    <script src="/templates/yutell_v2/yrate/js/bootstrap.min.js"></script>
    <script src="/templates/yutell_v2/yrate/js/croppie.js"></script>    
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script type="text/javascript" src="https://foliotek.github.io/Croppie/croppie.js"></script>

<script type="text/javascript" src="https://leanmodal.finelysliced.com.au/js/jquery.leanModal.min.js"></script>

<script type="text/javascript" src="js/jquery-ui.js"></script>

<link href="https://foliotek.github.io/Croppie/croppie.css" rel="Stylesheet" />
    <!-- optionally if you need translation for your language then include locale file as mentioned below 
<style type="text/css">
-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		
		<!-- jQuery goes BEFORE croppie because croppie.js uses jQuery! -->
		<script src="croppie.js"></script>
		<link rel="stylesheet" href="croppie.css" />
		

<!--</style>-->


<?php if ($this->_tpl_vars['tpl_name'] == 'video-watch' && $this->_tpl_vars['playlist']): ?>
<link rel="canonical" href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
"/>
<?php endif; ?>

<script type="text/javascript">
var MELODYURL = "<?php echo @_URL; ?>
";
var MELODYURL2 = "<?php echo @_URL2; ?>
";
var TemplateP = "<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
";
var _LOGGEDIN_ = <?php if ($this->_tpl_vars['logged_in']): ?> true <?php else: ?> false <?php endif; ?>;
 
<?php if ($this->_tpl_vars['tpl_name'] == 'index' || $this->_tpl_vars['tpl_name'] == 'video-watch'): ?>
<?php echo '
var pm_video_data = {
'; ?>
	
	uniq_id: "<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
",
	url: "<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
",
	duration: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['yt_length'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	duration_str: "<?php echo $this->_tpl_vars['video_data']['duration']; ?>
",
	category: "<?php echo $this->_tpl_vars['video_data']['category']; ?>
".split(','),
	category_str: "<?php echo $this->_tpl_vars['video_data']['category']; ?>
",
	featured: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['featured'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	restricted: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['restricted'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	allow_comments: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['allow_comments'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	allow_embedding: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['allow_embedding'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	is_stream: <?php if ($this->_tpl_vars['video_data']['is_stream']): ?>true<?php else: ?>false<?php endif; ?>,
	views: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['site_views'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	likes: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['likes'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	dislikes: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['dislikes'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	publish_date_str: "<?php echo $this->_tpl_vars['video_data']['html5_datetime']; ?>
",
	publish_date_timestamp: <?php echo ((is_array($_tmp=@$this->_tpl_vars['video_data']['added_timestamp'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
,
	embed_url: "<?php echo $this->_tpl_vars['video_data']['embed_href']; ?>
",
	thumb_url: "<?php echo $this->_tpl_vars['video_data']['thumb_img_url']; ?>
",
	preview_image_url: "<?php echo $this->_tpl_vars['video_data']['preview_image']; ?>
",
	title: '<?php echo ((is_array($_tmp=$this->_tpl_vars['video_data']['video_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
',
	autoplay_next: <?php if ($this->_tpl_vars['video_data']['autoplay_next']): ?>true<?php else: ?>false<?php endif; ?>,
	autoplay_next_url: "<?php echo $this->_tpl_vars['video_data']['autoplay_next_url']; ?>
"
<?php echo '
}
'; ?>

<?php endif; ?>
</script>
<?php echo '
<script type="text/javascript">
 var pm_lang = {
	lights_off: "'; ?>
<?php echo $this->_tpl_vars['lang']['lights_off']; ?>
<?php echo '",
	lights_on: "'; ?>
<?php echo $this->_tpl_vars['lang']['lights_on']; ?>
<?php echo '",
	validate_name: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_name']; ?>
<?php echo '",
	validate_username: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_username']; ?>
<?php echo '",
	validate_pass: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_pass']; ?>
<?php echo '",
	validate_captcha: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_captcha']; ?>
<?php echo '",
	validate_email: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_email']; ?>
<?php echo '",
	validate_agree: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_agree']; ?>
<?php echo '",
	validate_name_long: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_name_long']; ?>
<?php echo '",
	validate_username_long: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_username_long']; ?>
<?php echo '",
	validate_pass_long: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_pass_long']; ?>
<?php echo '",
	validate_confirm_pass_long: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_confirm_pass_long']; ?>
<?php echo '",
	choose_category: "'; ?>
<?php echo $this->_tpl_vars['lang']['choose_category']; ?>
<?php echo '",
	validate_select_file: "'; ?>
<?php echo $this->_tpl_vars['lang']['upload_errmsg10']; ?>
<?php echo '",
	validate_video_title: "'; ?>
<?php echo $this->_tpl_vars['lang']['validate_video_title']; ?>
<?php echo '",
	please_wait: "'; ?>
<?php echo $this->_tpl_vars['lang']['please_wait']; ?>
<?php echo '",
	// upload video page
	swfupload_status_uploaded: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_status_uploaded']; ?>
<?php echo '",
	swfupload_status_pending: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_status_pending']; ?>
<?php echo '",
	swfupload_status_queued: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_status_queued']; ?>
<?php echo '",
	swfupload_status_uploading: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_status_uploading']; ?>
<?php echo '",
	swfupload_file: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_file']; ?>
<?php echo '",
	swfupload_btn_select: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_btn_select']; ?>
<?php echo '",
	swfupload_btn_cancel: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_btn_cancel']; ?>
<?php echo '",
	swfupload_status_error: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_status_error']; ?>
<?php echo '",
	swfupload_error_oversize: "'; ?>
<?php echo $this->_tpl_vars['lang']['swfupload_error_oversize']; ?>
<?php echo '",
	swfupload_friendly_maxsize: "'; ?>
<?php echo $this->_tpl_vars['upload_limit']; ?>
<?php echo '",
	upload_errmsg2: "'; ?>
<?php echo $this->_tpl_vars['lang']['upload_errmsg2']; ?>
<?php echo '",
	// playlist
	playlist_delete_confirm: "'; ?>
<?php echo $this->_tpl_vars['lang']['playlist_delete_confirm']; ?>
<?php echo '",
	playlist_delete_item_confirm: "'; ?>
<?php echo $this->_tpl_vars['lang']['playlist_delete_item_confirm']; ?>
<?php echo '",
	show_more: "'; ?>
<?php echo $this->_tpl_vars['lang']['show_more']; ?>
<?php echo '",
	show_less: "'; ?>
<?php echo $this->_tpl_vars['lang']['show_less']; ?>
<?php echo '",
	delete_video_confirmation: "'; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['delete_video_confirmation'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Are you sure you want to delete this video?') : smarty_modifier_default($_tmp, 'Are you sure you want to delete this video?')); ?>
<?php echo '",
	browse_all: "'; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['browse_all'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Browse All') : smarty_modifier_default($_tmp, 'Browse All')); ?>
<?php echo '"
 }
</script>
'; ?>


<?php if ($this->_tpl_vars['facebook_image_src'] != ''): ?>
		<link rel="image_src" href="<?php echo $this->_tpl_vars['facebook_image_src']; ?>
" />
		<meta property="og:url"  content="<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?><?php echo $this->_tpl_vars['article']['link']; ?>
<?php else: ?><?php echo $this->_tpl_vars['video_data']['video_href']; ?>
<?php endif; ?>" />
		<?php if ($this->_tpl_vars['tpl_name'] == 'article-read'): ?>
		<meta property="og:type" content="article" />
		<?php endif; ?>
		<meta property="og:title" content="<?php echo $this->_tpl_vars['meta_title']; ?>
" />
		<meta property="og:description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" />
		<meta property="og:image" content="<?php echo $this->_tpl_vars['facebook_image_src']; ?>
" />
		<meta property="og:image:width" content="480" />
		<meta property="og:image:height" content="360" />
		<?php if ($this->_tpl_vars['video_data']['source_id'] == $this->_tpl_vars['_sources']['localhost']['source_id']): ?>
		<link rel="video_src" href="<?php echo @_URL; ?>
/uploads/videos/<?php echo $this->_tpl_vars['video_data']['url_flv']; ?>
"/>
		<meta property="og:video:url" content="<?php echo @_URL; ?>
/uploads/videos/<?php echo $this->_tpl_vars['video_data']['url_flv']; ?>
" />
		<!-- /*EDITME*/; may be a bug with local videos - slartist.com issue "Download File" -->
		<meta property="og:video:type" content="video/mp4"/>
		<link rel="video_src" href="<?php echo @_URL2; ?>
/videos.php?vid=<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
"/>
		<meta property="og:video:url" content="<?php echo @_URL; ?>
/uploads/videos/<?php echo $this->_tpl_vars['video_data']['url_flv_raw']; ?>
" />
		<meta property="og:video" content="<?php echo @_URL; ?>
/uploads/videos/<?php echo $this->_tpl_vars['video_data']['url_flv_raw']; ?>
"> 
		<meta property="og:video:secure_url" content="<?php echo @_URL; ?>
/uploads/videos/<?php echo $this->_tpl_vars['video_data']['url_flv_raw']; ?>
">

		<?php endif; ?>
<?php endif; ?>
<style type="text/css"><?php echo $this->_tpl_vars['theme_customizations']; ?>
</style>
</head>
<?php if ($this->_tpl_vars['tpl_name'] == "video-category"): ?>
<body class="video-category catid-<?php echo $this->_tpl_vars['cat_id']; ?>
 page-<?php echo $this->_tpl_vars['gv_pagenumber']; ?>
">
<?php elseif ($this->_tpl_vars['tpl_name'] == "video-watch"): ?>
<body class="video-watch videoid-<?php echo $this->_tpl_vars['video_data']['id']; ?>
 author-<?php echo $this->_tpl_vars['video_data']['author_user_id']; ?>
 source-<?php echo $this->_tpl_vars['video_data']['source_id']; ?>
<?php if ($this->_tpl_vars['video_data']['featured'] == 1): ?> featured<?php endif; ?><?php if ($this->_tpl_vars['video_data']['restricted'] == 1): ?> restricted<?php endif; ?>">
<?php elseif ($this->_tpl_vars['tpl_name'] == "article-category"): ?>
<body class="article-category catid-<?php echo $this->_tpl_vars['cat_id']; ?>
">
<?php elseif ($this->_tpl_vars['tpl_name'] == "article-read"): ?>
<body class="article-read articleid-<?php echo $this->_tpl_vars['article']['id']; ?>
 author-<?php echo $this->_tpl_vars['article']['author']; ?>
 <?php if ($this->_tpl_vars['article']['featured'] == 1): ?> featured<?php endif; ?><?php if ($this->_tpl_vars['article']['restricted'] == 1): ?> restricted<?php endif; ?>">
<?php elseif ($this->_tpl_vars['tpl_name'] == 'page'): ?>
<body class="page pageid-<?php echo $this->_tpl_vars['page']['id']; ?>
 author-<?php echo $this->_tpl_vars['page']['author']; ?>
">
<?php else: ?>
<body>
<?php endif; ?>
<?php if (( $this->_tpl_vars['tpl_name'] == 'article-read' || $this->_tpl_vars['tpl_name'] == 'video-watch' ) && $this->_tpl_vars['comment_system_facebook']): ?>
<!-- Facebook Javascript SDK -->
<div id="fb-root"></div>
<?php echo '
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
	fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));
window.fbAsyncInit = function () {
FB.init({
xfbml:false  // Will stop the fb like button from rendering automatically
});
};
</script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['maintenance_mode']): ?>
	<div class="alert alert-danger" align="center"><strong>Currently running in maintenance mode.</strong></div>
<?php endif; ?>

<div class="container-fluid no-padding">
<header>
<div class="pm-top-head">
	<div class="row">
		<div class="col-xs-7 col-sm-4 col-md-4">
			<div class="header-logo">
			<?php if ($this->_tpl_vars['_custom_logo_url'] != ''): ?>
				<a href="<?php echo @_URL; ?>
/index.<?php echo @_FEXT; ?>
" rel="home"><img src="<?php echo $this->_tpl_vars['_custom_logo_url']; ?>
" alt="<?php echo ((is_array($_tmp=@_SITENAME)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=@_SITENAME)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" border="0" /></a>
			<?php else: ?>
				<h3><a href="<?php echo @_URL; ?>
/index.<?php echo @_FEXT; ?>
" rel="home"><?php echo @_SITENAME; ?>
</a></h3>
			<?php endif; ?>
			</div>
		</div>
		<div class="hidden-xs col-sm-4 col-md-4" id="pm-top-search">
			<?php if ($this->_tpl_vars['p'] == 'article'): ?>
			<form action="<?php echo @_URL; ?>
/article.php" method="get" id="search" name="search" onSubmit="return validateSearch('true');">
				<div class="input-group">
					<input class="form-control" id="pm-search" size="16" name="keywords" type="text" placeholder="<?php echo $this->_tpl_vars['lang']['submit_search']; ?>
..." x-webkit-speech speech onwebkitspeechchange="this.form.submit();">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div><!-- /input-group -->
			</form>
			<?php else: ?>
			<form action="<?php echo @_URL; ?>
/search.php" method="get" id="search" name="search" onSubmit="return validateSearch('true');">
				<div class="input-group">
					<input class="form-control" id="pm-search" size="16" name="keywords" type="text" placeholder="<?php echo $this->_tpl_vars['lang']['submit_search']; ?>
..." x-webkit-speech="x-webkit-speech" onwebkitspeechchange="this.form.submit();" <?php if (@_SEARCHSUGGEST == 1): ?>onblur="fill();" autocomplete="off"<?php endif; ?>>
					<input class="form-control" id="pm-video-id" size="16" name="video-id" type="hidden">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div><!-- /input-group -->
			</form>
			<div class="pm-search-suggestions hide-me">
				<ul class="pm-search-suggestions-list list-unstyled"></ul>
			</div>
			<?php endif; ?>
		</div>

		<?php if ($this->_tpl_vars['logged_in']): ?> 
		<div class="col-xs-5 col-sm-4 col-md-4">
			<ul class="list-inline navbar-pmuser">
				<li class="hidden-sm hidden-md hidden-lg">
					<a href="#" id="pm-top-mobile-search-show" class="" title="<?php echo $this->_tpl_vars['lang']['submit_search']; ?>
"><i class="mico mico-search"></i></a>
				</li>
				<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in']): ?>
				<li>
					<a href="#" id="pm-social-notifications-show" title="<?php echo $this->_tpl_vars['lang']['notifications']; ?>
">
						<i class="mico mico-notifications_none <?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] && $this->_tpl_vars['notification_count'] > 0): ?>mico-notifications_active<?php endif; ?>"></i></a>
						<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] && $this->_tpl_vars['notification_count'] > 0): ?>
							<span class="badge pm-social-notifications-count"><?php echo $this->_tpl_vars['notification_count']; ?>
</span>
						<?php endif; ?>
					</a>
					<div class="hide-me animated fast absoluteSlideInUp" id="pm-social-notifications-container">
						<div id="pm-social-notifications-response"></div>
					</div>
				</li>
				<?php endif; ?>
				<li class="nav-menu-item">
					<div class="dropdown">
						<a href="#" data-toggle="dropdown" role="button" ><img src="<?php echo $this->_tpl_vars['s_avatar_url']; ?>
" width="30" height="30" alt="" class="header-avatar"></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
							<li><a href="<?php echo $this->_tpl_vars['current_user_data']['profile_url']; ?>
"><?php echo $this->_tpl_vars['s_name']; ?>
</a> 
							<a href="<?php echo @_URL; ?>
/edit_profile.<?php echo @_FEXT; ?>
" rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['edit_profile']; ?>
" class="btn-nav-edit-profile"><i class="mico mico-settings md-16"></i></a></li>
							<?php if ($this->_tpl_vars['is_admin'] == 'yes' || $this->_tpl_vars['is_moderator'] == 'yes' || $this->_tpl_vars['is_editor'] == 'yes'): ?>
							<li><a href="<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/index.php"><?php echo $this->_tpl_vars['lang']['admin_area']; ?>
</a></li>
							<?php endif; ?>
							<li><a href="<?php echo $this->_tpl_vars['current_user_data']['profile_url']; ?>
"><?php if (@_MOD_SOCIAL): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['my_channel'])) ? $this->_run_mod_handler('default', true, $_tmp, 'My Channel') : smarty_modifier_default($_tmp, 'My Channel')); ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['my_profile']; ?>
<?php endif; ?></a></li>
							<li><a href="<?php echo @_URL; ?>
/playlists.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['my_playlists']; ?>
</a></li>
							<?php if (@_ALLOW_USER_SUGGESTVIDEO == '1'): ?>
							<li class="visible-sm visible-xs"><a href="<?php echo @_URL; ?>
/suggest.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['suggest']; ?>
</a></li>
							<?php endif; ?>
							<?php if (@_ALLOW_USER_UPLOADVIDEO == '1'): ?>
							<li class="visible-sm visible-xs"><a href="<?php echo @_URL; ?>
/upload.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['upload_video']; ?>
</a></li>
							<?php endif; ?>
							<li><a href="<?php echo @_URL; ?>
/login.<?php echo @_FEXT; ?>
?do=logout"><?php echo $this->_tpl_vars['lang']['logout']; ?>
</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<?php else: ?>
		<div class="col-xs-5 col-sm-4 col-md-4">
			<ul class="list-inline navbar-pmuser">
				<li class="hidden-sm hidden-md hidden-lg"><a href="#" id="pm-top-mobile-search-show" class="" title="<?php echo $this->_tpl_vars['lang']['submit_search']; ?>
"><i class="mico mico-search"></i></a></li>
				<li class="hidden-xs"><a class="btn btn-sm btn-default ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-login-form"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['sign_in'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Sign in') : smarty_modifier_default($_tmp, 'Sign in')); ?>
</a></li>
				<?php if ($this->_tpl_vars['logged_in'] != '1' && $this->_tpl_vars['allow_registration'] == '1'): ?>
					<?php if ($this->_tpl_vars['allow_facebook_login'] || $this->_tpl_vars['allow_twitter_login']): ?>
					<li class="hidden-xs"><a class="btn btn-sm btn-success ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-register-form"><?php echo $this->_tpl_vars['lang']['register']; ?>
</a></li>
					<?php else: ?>
					<li class="hidden-xs"><a href="<?php echo @_URL; ?>
/register.<?php echo @_FEXT; ?>
" class="btn btn-sm btn-success"><?php echo $this->_tpl_vars['lang']['register']; ?>
</a></li>
					<?php endif; ?>
				<?php endif; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div><!--.row-->
	</div><!--.pm-top-head-->

	<div class="pm-top-nav">
		<div class="row">
			<div class="col-sm-8 col-md-8">
				<ul class="nav nav-tabs">
					<li><a href="<?php echo @_URL; ?>
/index.<?php echo @_FEXT; ?>
" class="wide-nav-link"><?php echo $this->_tpl_vars['lang']['homepage']; ?>
</a></li>
					<li class="dropdown">
					<?php if (@_SEOMOD): ?>
						<a href="<?php if (@USER_DEVICE != 'mobile'): ?><?php echo @_URL; ?>
/browse.<?php echo @_FEXT; ?>
<?php else: ?>#<?php endif; ?>" class="dropdown-toggle wide-nav-link disabled" data-target="#" role="button" data-toggle="dropdown"><?php echo $this->_tpl_vars['lang']['category']; ?>
 <b class="caret"></b></a>
					<?php else: ?>
						<a href="<?php if (@USER_DEVICE != 'mobile'): ?><?php echo @_URL; ?>
/category.php<?php else: ?>#<?php endif; ?>" class="dropdown-toggle wide-nav-link disabled" data-target="#" role="button" data-toggle="dropdown"><?php echo $this->_tpl_vars['lang']['category']; ?>
 <b class="caret"></b></a>
					<?php endif; ?>
					<ul class="dropdown-menu animated fast absoluteSlideInUp">
						<li><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['new_videos']; ?>
</a></li>
						<li><a href="<?php echo @_URL; ?>
/topvideos.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['top_videos']; ?>
</a></li>
                                                
						<?php echo smarty_html_list_categories(array('max_levels' => 3), $this);?>

					</ul>
					</li>

                                                <li class="dropdown">
						<a href="#" class="dropdown-toggle wide-nav-link" data-toggle="dropdown">YuTell Rated <b class="caret"></b></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
						<li><a href="<?php echo @_URL; ?>
/YTFvideos.php">YuTell Funny</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/YTEvideos.php">YuTell Emotional</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/YTIvideos.php">YuTell Interesting</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/YTLvideos.php">YuTell Language</a></li>
						</ul>
                                                </li>                                        

                                                <li class="dropdown">
						<a href="#" class="dropdown-toggle wide-nav-link" data-toggle="dropdown">YuTell Information <b class="caret"></b></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
						<li><a href="<?php echo @_URL; ?>
/page.php?p=10">FAQ</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/page.php?p=3">About Us</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/page.php?p=13">Using YuTell</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/page.php?p=18">Making Money</a></li>
                                                <li><a href="<?php echo @_URL; ?>
/#">ANY Page Here Peter</a></li>
						</ul>
                                                </li>                                                

                                                <?php if (@_MOD_ARTICLE == 1): ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle wide-nav-link" data-toggle="dropdown"><?php echo $this->_tpl_vars['lang']['articles']; ?>
 <b class="caret"></b></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">
						<?php if ($this->caching && !$this->_cache_including): echo '{nocache:4402ae6dcfe4d9bab1bf357cccd121c2#0}'; endif;echo smarty_art_html_list_categories(array('max_levels' => 3), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:4402ae6dcfe4d9bab1bf357cccd121c2#0}'; endif;?>

						</ul>
					</li>
					<?php endif; ?>

                                        
					<?php if ($this->_tpl_vars['logged_in']): ?>
					<li class="dropdown">
						<a href="<?php if (@USER_DEVICE != 'mobile'): ?><?php echo @_URL; ?>
/playlists.<?php echo @_FEXT; ?>
<?php else: ?>#<?php endif; ?>" class="dropdown-toggle wide-nav-link disabled" data-target="#" role="button" data-toggle="dropdown"><?php echo $this->_tpl_vars['lang']['my_playlists']; ?>
 <b class="caret"></b></a>
						<ul class="dropdown-menu animated fast absoluteSlideInUp">

							<?php $_from = $this->_tpl_vars['s_user_playlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['playlist_data']):
?>
								<?php if ($this->_tpl_vars['playlist_data']['type'] == @PLAYLIST_TYPE_HISTORY): ?>
								<li><a href="<?php echo $this->_tpl_vars['playlist_data']['playlist_href']; ?>
"><i class="mico mico-hourglass_full"></i><?php echo $this->_tpl_vars['playlist_data']['title']; ?>
</a></li>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['playlist_data']['type'] == @PLAYLIST_TYPE_FAVORITES): ?>
								<li><a href="<?php echo $this->_tpl_vars['playlist_data']['playlist_href']; ?>
"><i class="mico mico-favorite"></i><?php echo $this->_tpl_vars['playlist_data']['title']; ?>
</a></li>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['playlist_data']['type'] == @PLAYLIST_TYPE_LIKED): ?>
								<li><a href="<?php echo $this->_tpl_vars['playlist_data']['playlist_href']; ?>
"><i class="mico mico-thumb_up"></i><?php echo $this->_tpl_vars['playlist_data']['title']; ?>
</a></li>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['playlist_data']['type'] == @PLAYLIST_TYPE_WATCH_LATER): ?>
								<li><a href="<?php echo $this->_tpl_vars['playlist_data']['playlist_href']; ?>
"><i class="mico mico-watch_later"></i><?php echo $this->_tpl_vars['playlist_data']['title']; ?>
</a></li>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>

							<?php if (count ( $this->_tpl_vars['s_user_playlists'] ) > 4): ?>
							<?php $_from = $this->_tpl_vars['s_user_playlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['playlist_data']):
?>
								<?php if ($this->_tpl_vars['playlist_data']['type'] == $this->_tpl_vars['smary']['const']['PLAYLIST_TYPE_CUSTOM']): ?>
								<li><a href="<?php echo $this->_tpl_vars['playlist_data']['playlist_href']; ?>
"><i class="mico mico-playlist_play"></i><?php echo $this->_tpl_vars['playlist_data']['title']; ?>
</a></li>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
						</ul>
					</li>
					<?php endif; ?>
				</ul>
			</div>

			<div class="col-sm-4 col-md-4">
				<?php if ($this->_tpl_vars['logged_in']): ?>
					<?php if (@_ALLOW_USER_SUGGESTVIDEO == '1' && @_ALLOW_USER_UPLOADVIDEO == '1'): ?>
					<a class="btn btn-sm btn-primary ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-addvideo"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['add_video'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Add Video') : smarty_modifier_default($_tmp, 'Add Video')); ?>
</a>
					<?php else: ?>
						<?php if (@_ALLOW_USER_SUGGESTVIDEO == '1'): ?>
						<a href="<?php echo @_URL; ?>
/suggest.<?php echo @_FEXT; ?>
" class="btn btn-sm btn-primary"><?php echo $this->_tpl_vars['lang']['suggest']; ?>
</a>
						<?php elseif (@_ALLOW_USER_UPLOADVIDEO == '1'): ?>
						<a href="<?php echo @_URL; ?>
/upload.<?php echo @_FEXT; ?>
" class="btn btn-sm btn-primary"><?php echo $this->_tpl_vars['lang']['upload_video']; ?>
</a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>


<?php if (! $this->_tpl_vars['logged_in']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-user-login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php if ($this->_tpl_vars['allow_registration'] == '1'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-user-register.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
<?php endif; ?>

<?php if (@_ALLOW_USER_SUGGESTVIDEO == '1' && @_ALLOW_USER_UPLOADVIDEO == '1'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-addvideo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<a id="top"></a>

<div class="mastcontent-wrap">
<?php if ($this->_tpl_vars['ad_1'] != ''): ?>
<div class="pm-ads-banner" align="center"><?php echo $this->_tpl_vars['ad_1']; ?>
</div>
<?php endif; ?>