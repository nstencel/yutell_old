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
// | Copyright: (c) 2004-2015 PhpSugar.com. All rights reserved.
// +-------------------------------------------------------------------------+
session_start();
$page_type = 'video';
include('settings.php');
include('header.php');

$searchstring = trim($_GET['t']);
$searchstring = urldecode($searchstring);
$searchstring = str_replace( array("%", "<", ">", '"', "'", '&'), '', $searchstring);
$searchstring = substr($searchstring, 0, 80); // limit search phrase
$searchstring = htmlspecialchars($searchstring, ENT_NOQUOTES);
$searchstring = secure_sql($searchstring);
?>
<div id="content">
	<div id="navigation"><?php echo $lang['search_results']; ?> - &ldquo;<em><?php echo $searchstring; ?></em>&rdquo;</div>
	<ul id="video_listing">
<?php
$page = $_GET['page'];

if(empty($page) || !is_numeric($page) || $page == '')
	$page = 1;

$limit = _SEARCH_RESULTS_LIMIT;
$from = $page * $limit - ($limit);
$total_results = 0;
$search_types = array('default');
$num_res = 0;

if((isset($_GET['btn']) && trim($_GET['btn']) != '') || (empty($_GET['btn']) && trim($searchstring) != ''))
{
	if (isset($_GET['t']) && in_array($_GET['t'], $search_types))
	{
		$search_type = $_GET['t'];
	}
	
	// break search phrase into terms
	$terms = explode(' ', $searchstring);
	$sources_sql = '';
	for($i = 0; $i < count($_mobile_supported_sources); $i++)
	{
		if($i != count($_mobile_supported_sources)-1)
			$sources_sql .= " source_id = '" . $_mobile_supported_sources[$i] . "' OR ";
		else
			$sources_sql .= " source_id = '" . $_mobile_supported_sources[$i] . "'";
	}
	
	switch ($search_type)
	{
		default:
		case 'default':
			
			if($searchstring != '' && strlen($searchstring) > 1)
			{


				$searchstring = safe_tag($searchstring);
				$searchstring = secure_sql($searchstring);
				
				$sql = "SELECT SQL_CALC_FOUND_ROWS uniq_id 
						  FROM pm_tags 
						 WHERE safe_tag LIKE '".$searchstring."'
						 LIMIT $from, $limit";


				$result = mysql_query($sql);
				$row = mysql_fetch_assoc($result);
				$total_results = $row['total'];
				mysql_free_result($result);
				$result = false;
				
				if ($total_results > 0)
				{
					$sql = "SELECT uniq_id, added, yt_length, yt_thumb, category, video_title, site_views, featured  
							FROM pm_videos
							WHERE added <= '". time() ."' AND submitted = '". $searchstring ."' 
							AND (" . $sources_sql . ") 
							ORDER BY id DESC  
							LIMIT ".$from.", ".$limit; 
					$result = mysql_query($sql); 
				}
			}
			else 
			{
				$result = false;
			}
			
		break;
		
	} // end switch
	
	$j = 0; 
	$item = '';

	if ($total_results > 0)
	{
		while ($row = mysql_fetch_array($result)) 
		{ 
		echo videoLI($row);
		}
		mysql_free_result($result);
	}
	else
	{
		$item = '<div class="noresults">'.$lang['search_results_msg1'].'</div>';
	}
}
else
{
	$item = '<div class="noresults">'.$lang['search_results_msg2'].'</div>';
}

// generate pagination
$uri = $_SERVER['REQUEST_URI'];
$uri = explode('?', $uri);
if (strlen($uri[1]) == 0)
{
	$uri[1] ='keywords='. magicSlashes($_GET['keywords']) .'&btn=Search';
}


$filename = ('' != $_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'search.php';

$pagination = generate_smart_pagination_mobi($page, $total_results, $limit, 1, $filename, $uri[1], 0);	

?>
<?php echo $item; ?>
	</ul>

	<?php if($total_results > $limit) { ?>
	<div id="pagination" class="border4">
	<?php echo $pagination; ?>
	</div>
	<?php } ?>
</div>

<?php
include('footer.php');
?>