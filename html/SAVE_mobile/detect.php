<?php
// +-------------------------------------------------------------------------+
// | Mobile Melody Plug-in for PHP Melody ( www.phpsugar.com )
// +-------------------------------------------------------------------------+
// | MOBILE MELODY IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than www.phpsugar.com or if you have received
// | this software from someone who is not a representative of
// | phpSugar, you are involved in an illegal activity.
// | ---
// | In such case, please contact: support@phpsugar.com.
// +-------------------------------------------------------------------------+
// | Developed by: phpSugar (www.phpsugar.com) / support@phpsugar.com
// | Copyright: (c) 2004-2016 PhpSugar.com. All rights reserved.
// +-------------------------------------------------------------------------+

/**
 * Use this function to delete a GET $varname in $url.   
 * 
 * Example: url = http://www.example.com/index.php?a=1&b=2    
 * removeqsvar(url, 'a') => http://www.example.com/index.php?b=2
 * 
 * @param string $url
 * @param string $varname
 * @return string 
 */
function removeqsvar($url, $varname)
{
	list($urlpart, $qspart) = array_pad(explode('?', $url), 2, '');
	parse_str($qspart, $qsvars);
	unset($qsvars[$varname]);
	foreach ($qsvars as $k => $v)
	{
		$newqs .= $k.'='.$v.'&';
	}
	$newqs = rtrim($newqs, '&');
	return ($newqs != '') ? $urlpart.'?'.$newqs : $urlpart;
}

$current_URL = removeqsvar(get_current_url(), 'ui');
$current_base_URL = rtrim(get_current_base_url(), '/');
$device_url = (strpos($current_URL, _URL_MOBI) === false) ? 'desktop' : 'mobile';
$tmp_parts = explode('/', $_SERVER['SCRIPT_NAME']);
$_script = array_pop($tmp_parts);
$compatible_scripts = array('article.php', 'article_read.php', 'category.php', 'index.php', 'login.php',
							'page.php', 'register.php', 'search.php', 'upload.php', 'watch.php');

// Set proper switch UI links
$ui_switch_url = $current_URL;

if ( ! is_object($mobile_detector))
{
	$mobile_detector = new Mobile_Detect;
}

if ($mobile_detector->isMobile())
{
	if (strpos($current_URL, '/mobile/') === false) // Device = Mobile; UI = desktop
	{
		$ui_switch_url = _URL_MOBI .'/'. $_script;
		$ui_switch_url .= ($_SERVER['QUERY_STRING'] != '') ? '?'. $_SERVER['QUERY_STRING'] : '';
		$ui_switch_url = removeqsvar($ui_switch_url, 'ui');
		
		if ( ! in_array($_script, $compatible_scripts) || ($_script == 'category.php' && empty($_GET['cat'])))
		{
			$pieces = explode('/', $ui_switch_url);
			unset($pieces[count($pieces) - 1]);
			$ui_switch_url = implode('/', $pieces);
		}
		
		$smarty->assign('_footer_switch_ui_link', $ui_switch_url); // overwrite existing tpl var
	}
	else
	{
		$ui_switch_url = str_replace('/mobile/', '/', $current_URL);
		$smarty->assign('_footer_switch_ui_link', $ui_switch_url); 
	}
}
