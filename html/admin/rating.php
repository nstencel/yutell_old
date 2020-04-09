<?php
// +------------------------------------------------------------------------+
// | YuTell ( www.yutell.com )
// +------------------------------------------------------------------------+
// | The YuTell SYSTEM IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website or if you have received
// | this software from someone who is not a representative of
// | YuTell, you are involved in an illegal activity.
// | ---
// | In such case, please contact: softwaretheft@softwarecaribe.com
// +------------------------------------------------------------------------+
// | Developed by: CaribeSoft (www.softwarecaribe.com) / support@softwarecaribe.com
// | Copyright: (c) 2019 YuTell and CaribeSoft. All rights reserved.
// +------------------------------------------------------------------------+

$showm = '2';
$load_scrolltofixed = 1;
$load_chzn_drop = 1;
$_page_title = 'YuTell Ratings';
include('header.php');

include_once(ABSPATH . 'include/rating_functions.php');

$action	= (int) $_GET['action'];
$page	= (int) $_GET['page'];
$filter = 'added';
$filters = array('broken', 'restricted', 'unchecked', 'localhost', 'featured', 'category', 'source', 'mostviewed', 'access', 'views', 'added', 'addedactive', 'scheduled', 'trash');
$filter_value = 'desc';


// generate smart pagination
$filename = 'rating.php';
$pagination = '';

if(!isset($_POST['submit'])) 
	$pagination = a_generate_smart_pagination($page, $total_videos, $limit, 5, $filename, '&filter='. $filter .'&fv='. $filter_value);

?>
<div id="adminPrimary">
    <!-- /help-assist -->
    <div class="content">
	<a href="#" id="show-help-assist">Help</a>
    <div class="entry-count">
        <ul class="pageControls">
            <li>
                <div class="floatL"><strong class="blue"><?php echo pm_number_format($total_videos); ?></strong><span>videos</span></div>
                <div class="blueImg"><div class="pm-sprite ico-videos-small"></div></div>
            </li>
        </ul><!-- .pageControls -->
    </div>
	<?php if ( ! $in_trash) : ?>
	<h2>YuTell Ratings </h2>
	<?php else : ?>

	<?php endif; 





if (($_POST['Submit'] == 'Trash selected') && ! csrfguard_check_referer('_admin_videos_listcontrols'))
{
	echo pm_alert_error('Invalid token or session expired. Please refresh this page and try again.');
}
else if ($_POST['Submit'] == 'Trash selected')
{
	$video_ids = array();
	$video_ids = $_POST['video_ids'];
	$total_ids = count($video_ids);
	
	if($total_ids > 0)
	{
		$in_arr = '';
		for($i = 0; $i < $total_ids; $i++)
		{
			$in_arr .= "'" . $video_ids[ $i ] . "', ";
		}
		$in_arr = substr($in_arr, 0, -2);

		$video_list_data = get_video_list('', '', 0, $total_ids, 0, null, $video_ids);
		
		$sql = "SELECT uniq_id, mp4, direct FROM pm_videos_urls 
				WHERE uniq_id IN ($in_arr)";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_assoc($result))
		{
			foreach ($video_list_data as $k => $video)
			{
				if ($video['uniq_id'] == $row['uniq_id'])
				{
					$video_list_data[$k] = array_merge($video, $row);
					break;
				}
			}
		}
		
		foreach ($video_list_data as $k => $video)
		{
			$sql = "INSERT INTO pm_videos_trash (id, uniq_id, video_title, description, yt_id, yt_length, yt_thumb, category, submitted_user_id, submitted, added, url_flv, source_id, language, age_verification, yt_views, site_views, featured, restricted, allow_comments, allow_embedding, video_slug, mp4, direct)
					VALUES ('". $video['id'] ."',
							'". $video['uniq_id'] ."', 
							'". secure_sql($video['video_title']) ."', 
							'". secure_sql($video['description']) ."', 
							'". $video['yt_id'] ."', 
							'". $video['yt_length'] ."', 
							'". $video['yt_thumb'] ."', 
							'". $video['category'] ."', 
							'". $video['submitted_user_id'] ."',
							'". $video['submitted'] ."', 
							'". $video['added'] ."', 
							'". $video['url_flv'] ."', 
							'". $video['source_id'] ."', 
							'". $video['language'] ."', 
							'". $video['age_verification'] ."', 
							'". $video['yt_views'] ."', 
							'". $video['site_views'] ."', 
							'". $video['featured'] ."', 
							'". $video['restricted'] ."', 
							'". $video['allow_comments'] ."',
							'". $video['allow_embedding'] ."',
							'". secure_sql($video['video_slug']) ."',
							'". secure_sql($video['mp4']) ."',
							'". secure_sql($video['direct']) ."')";
			
			if ($result = mysql_query($sql))
			{
				$sql = "DELETE FROM pm_videos 
						WHERE id = ". $video['id'];
				$result = mysql_query($sql);
				
				if ($result)
				{
					$sql = "DELETE FROM pm_videos_urls 
							WHERE uniq_id = '". $video['uniq_id'] ."'";
					$result = mysql_query($sql);
				}
			}
		}

		// update video count for each category
		$total_published_ids = 0;
		$video_count = array();
		$video_published_count = array();
		$time_now = time();
		
		foreach ($video_list_data as $k => $row)
		{
			$buffer = explode(',', $row['category']);
			foreach ($buffer as $kk => $id)
			{
				$video_count[$id]++;
				if ($row['added'] <= $time_now)
				{
					$video_published_count[$id]++;
				}
			}
			
			if ($row['added'] <= $time_now)
			{
				$total_published_ids++;
			}
		}
							
		if (count($video_count) > 0)
		foreach ($video_count as $cid => $count)
		{
			if ('' != $cid && 0 != $cid)
			{
				$sql = "UPDATE pm_categories SET total_videos = total_videos - ". $count;
				if ($video_published_count[$cid] > 0)
				{
					$sql .= ", published_videos = published_videos - ". $video_published_count[$cid];
				}
				$sql .= " WHERE id = '". $cid ."'";
				mysql_query($sql);
			}
		}

		update_config('total_videos', $config['total_videos'] - $total_ids);
		update_config('trashed_videos', $config['trashed_videos'] + $total_ids);
		
		if ($total_published_ids)
		{
			update_config('published_videos', $config['published_videos'] - $total_published_ids);
		}
		
		$videos = a_list_videos('', '', $from, $limit, $page, $filter); 
		
		echo pm_alert_success('Videos removed successfully. You can restore them from the <a href="videos.php?filter=trash&page=1">Trash</a>.');
	}
	else
	{
		echo pm_alert_warning('Please select something first.');
	}
}

if ($_POST['Submit'] == 'Restore selected')
{
	$video_ids = array();
	$video_ids = $_POST['video_ids'];
	$total_ids = count($video_ids);
	$video_list_data = array();
	
	if($total_ids > 0)
	{
		$in_arr = '';
		for($i = 0; $i < $total_ids; $i++)
		{
			$in_arr .= "'" . $video_ids[ $i ] . "', ";
		}
		$in_arr = substr($in_arr, 0, -2);
		
		$sql = "SELECT * 
				FROM pm_videos_trash 
				WHERE uniq_id IN ($in_arr)";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_assoc($result))
		{
			$video_list_data[] = $row;
		}
		mysql_free_result($result);
		
		foreach ($video_list_data as $k => $video)
		{
			$video_id = (count_entries('pm_videos', 'id', $video['id']) > 0) ? 'NULL' : $video['id'];
			
			$sql = "INSERT INTO pm_videos (id, uniq_id, video_title, description, yt_id, yt_length, yt_thumb, category, submitted_user_id, submitted, added, url_flv, source_id, language, age_verification, yt_views, site_views, featured, restricted, allow_comments, allow_embedding, video_slug)
					VALUES ('". $video_id ."',
							'". $video['uniq_id'] ."', 
							'". secure_sql($video['video_title']) ."', 
							'". secure_sql($video['description']) ."', 
							'". $video['yt_id'] ."', 
							'". $video['yt_length'] ."', 
							'". $video['yt_thumb'] ."', 
							'". $video['category'] ."', 
							'". $video['submitted_user_id'] ."', 
							'". $video['submitted'] ."', 
							'". $video['added'] ."', 
							'". $video['url_flv'] ."', 
							'". $video['source_id'] ."', 
							'". $video['language'] ."', 
							'". $video['age_verification'] ."', 
							'". $video['yt_views'] ."', 
							'". $video['site_views'] ."', 
							'". $video['featured'] ."', 
							'". $video['restricted'] ."', 
							'". $video['allow_comments'] ."',
							'". $video['allow_embedding'] ."',
							'". secure_sql($video['video_slug']) ."')";
			
			if ($result = mysql_query($sql))
			{
				$sql = "INSERT INTO pm_videos_urls (uniq_id, mp4, direct) 
						VALUES ('". $video['uniq_id'] ."', 
								'". secure_sql($video['mp4']) ."',
								'". secure_sql($video['direct']) ."')";
				$result = mysql_query($sql);
				
				$sql = "DELETE FROM pm_videos_trash 
						WHERE id = ". $video['id'];
				$result = mysql_query($sql);
			}
		}

		// update video count for each category
		$total_published_ids = 0;
		$video_count = array();
		$video_published_count = array();
		$time_now = time();
		
		foreach ($video_list_data as $k => $row)
		{
			$buffer = explode(',', $row['category']);
			foreach ($buffer as $kk => $id)
			{
				$video_count[$id]++;
				if ($row['added'] <= $time_now)
				{
					$video_published_count[$id]++;
				}
			}
			
			if ($row['added'] <= $time_now)
			{
				$total_published_ids++;
			}
		}
							
		if (count($video_count) > 0)
		foreach ($video_count as $cid => $count)
		{
			if ('' != $cid && 0 != $cid)
			{
				$sql = "UPDATE pm_categories SET total_videos = total_videos + ". $count;
				if ($video_published_count[$cid] > 0)
				{
					$sql .= ", published_videos = published_videos + ". $video_published_count[$cid];
				}
				$sql .= " WHERE id = '". $cid ."'";
				mysql_query($sql);
			}
		}

		update_config('total_videos', $config['total_videos'] + $total_ids);
		update_config('trashed_videos', $config['trashed_videos'] - $total_ids);
		
		if ($total_published_ids)
		{
			update_config('published_videos', $config['published_videos'] + $total_published_ids);
		}
		
		$videos = a_list_videos('', '', $from, $limit, $page, $filter); 
		
		echo pm_alert_success('Videos successfully restored.');
	}
	else
	{
		echo pm_alert_warning('Please select something first.');
	}
}

//	Mark video(s) as featured/regular video
if ($_POST['Submit'] == 'Mark as featured' || $_POST['Submit'] == 'Mark as regular')
{
	$video_ids = array();
	$video_ids = $_POST['video_ids'];
	$total_ids = count($video_ids);
	if($total_ids > 0)
	{
		$in_arr = '';
		for($i = 0; $i < $total_ids; $i++)
		{
			$in_arr .= "'" . $video_ids[ $i ] . "', ";
		}
		$in_arr = substr($in_arr, 0, -2);
		if(strlen($in_arr) > 0)
		{
			$sql = "UPDATE pm_videos ";
			if ($_POST['Submit'] == 'Mark as featured')
			{
				$sql .= "SET featured = '1' ";
			}
			else
			{
				$sql .= "SET featured = '0' ";
			}
			$sql .=	" WHERE uniq_id IN (" . $in_arr . ")";
			$result = mysql_query($sql);
			
			if(!$result)
			{
				echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
			}
			else
			{
				echo pm_alert_success('The selected videos have been updated.');
			}
		}
		$videos = a_list_videos('', '', $from, $limit, $page, $filter); 
	}
	else
	{
		echo pm_alert_warning('Please select something first.');
	}
}

if (($_POST['Submit'] == 'Move') && ! csrfguard_check_referer('_admin_videos_listcontrols'))
{
	echo pm_alert_error('Invalid token or session expired. Please refresh this page and try again.');
}
else if ($_POST['Submit'] == 'Move')
{
	$video_ids = array();
	$video_ids = $_POST['video_ids'];
	$new_cid   = (int) $_POST['move_to_category'];
	
	$total_ids = count($video_ids);
	
	if ($new_cid == '' || !array_key_exists($new_cid, $categories))
	{
		echo pm_alert_info('Please select a category first.');
	}
	else
	{
		if($total_ids == 0)
		{
			echo pm_alert_warning('Please select something first.');	
		}
		else
		{
			$in_arr = '';
			for($i = 0; $i < $total_ids; $i++)
			{
				$in_arr .= "'" . $video_ids[ $i ] . "', ";
			}
			$in_arr = substr($in_arr, 0, -2);
			
			$sql = "SELECT category, added  
					FROM pm_videos 
					WHERE uniq_id IN (". $in_arr .")";
			$result = mysql_query($sql);
			if ( !$result)
			{
				echo pm_alert_error('There was an error while retrieving your data.<br />MySQL returned: '. mysql_error());
			}
			else
			{				
				$add = $total_ids;
				$add_published = 0;
				$deduct_total = array();
				$deduct_published = array();
				$time_now = time();
				
				while ($row = mysql_fetch_assoc($result))
				{
					if (strpos($row['category'], ','))
					{
						$buff = explode(',', $row['category']);
						foreach ($buff as $k => $v)
						{
							$deduct_total[ (int) $v ]++;
							if ($row['added'] <= $time_now)
							{
								$deduct_published[ (int) $v ]++;
							}
						}
					}
					else
					{
						$deduct_total[ (int) $row['category'] ]++;
						
						if ($row['added'] <= $time_now)
						{
							$deduct_published[ (int) $row['category'] ]++;
						}
					}
					
					if ($row['added'] <= $time_now)
					{
						$add_published++;
					}
				}

				mysql_free_result($result);
				
				// update pm_videos
				$sql = "UPDATE pm_videos 
						SET category = '". $new_cid ."' 
						WHERE uniq_id IN (". $in_arr .")";
				$result = mysql_query($sql);
				if ( !$result)
				{
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				}
				
				// update pm_categories (deduct video count)
				foreach ($deduct_total as $cid => $count)
				{
					$sql = "UPDATE pm_categories 
							SET total_videos = total_videos - ". $count ;
							
					if (count($deduct_published[$cid]) > 0)
					{
						$sql .= ", published_videos = published_videos - ". $count;
					}
					
					$sql .= " WHERE id = '". $cid ."'";
					
					mysql_query($sql);
				}
				
				// update pm_categories (add video count)
				$sql = "UPDATE pm_categories 
						SET total_videos=total_videos+". $add .",
							published_videos = published_videos + ". $add_published ." 
						WHERE id = '". $new_cid ."'";
				
				$result = mysql_query($sql);
				
				echo pm_alert_success('Videos successfully moved to <strong>'. $categories[$new_cid]['name'].'</strong>.');
				
				// update table
				$videos = a_list_videos('', '', $from, $limit, $page, $filter); 
			}
		}
	}
}
if ($_POST['Submit'] == 'Restrict access' || $_POST['Submit'] == 'Derestrict access')
{
	$video_ids = array();
	$video_ids = $_POST['video_ids'];
	$total_ids = count($video_ids);
	
	if ($total_ids > 0)
	{
		$access = ($_POST['Submit'] == 'Restrict access') ? '1' : '0';
		
		$in_arr = '';
		for($i = 0; $i < $total_ids; $i++)
		{
			$in_arr .= "'" . $video_ids[ $i ] . "', ";
		}
		$in_arr = substr($in_arr, 0, -2);
		
		$sql = "UPDATE pm_videos 
				SET restricted = '". $access ."'
				WHERE uniq_id IN (". $in_arr .")";
		$result = mysql_query($sql);
			
		if ( ! $result)
		{
			echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
		}
		else
		{
			echo pm_alert_success('Videos updated successfully.');
			$videos = a_list_videos('', '', $from, $limit, $page, $filter, $filter_value); 
		}
	}
	else
	{
		echo pm_alert_warning('Please select something first.');
	}
}

//	Delete all videos
if($action == 9 && is_admin())
{
	//	clear database of all videos
	if (isset($_POST['Submit']) && ! csrfguard_check_referer('_admin_videos_deleteall'))
	{
		echo pm_alert_error('Invalid token or session expired. Please refresh this page and try again.');
		echo '</div><!-- .content -->';
		echo '</div><!-- .primary -->';
		echo '</div>';
	}
	else if (isset($_POST['Submit']))
	{
		if($_POST['Submit'] == 'Yes')
		{
			$files = array();
			$sql = "SELECT url_flv FROM pm_videos WHERE source_id = '1'";
			$result = mysql_query($sql);
			
			if (mysql_num_rows($result) > 0)
			{
				while ($row = mysql_fetch_assoc($result))
				{
					$files[] = $row['url_flv'];
				}
				mysql_free_result($result);
				
				foreach ($files as $k => $filename)
				{
					if (file_exists(_VIDEOS_DIR_PATH . $filename) && strlen($filename) > 0)
					{
						unlink(_VIDEOS_DIR_PATH . $filename);
					}
				}
			}
			
			$sql = "TRUNCATE TABLE pm_videos";
			$result = @mysql_query($sql);
			if(!$result)
			{
				echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
			}
			else
			{
			
				update_config('total_videos', 0);
				update_config('published_videos', 0);
				update_config('trashed_videos', 0);
				
				$sql = " UPDATE pm_categories SET total_videos = 0, published_videos = 0 ";
				@mysql_query($sql);
				
				//	pm_videos extension table
				$sql = "TRUNCATE TABLE pm_videos_urls";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				//	comments table
				$sql = "TRUNCATE TABLE pm_comments";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				// handle playlists @since v2.2 
				$sql = "TRUNCATE TABLE pm_playlist_items";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				$sql = "DELETE FROM pm_playlists 
						WHERE type NOT IN (". PLAYLIST_TYPE_WATCH_LATER .", ". PLAYLIST_TYPE_FAVORITES .", ". PLAYLIST_TYPE_LIKED .", ". PLAYLIST_TYPE_HISTORY .")";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				$sql = "UPDATE pm_playlists 
						SET items_count = 0 
						WHERE type IN (". PLAYLIST_TYPE_WATCH_LATER .", ". PLAYLIST_TYPE_FAVORITES .", ". PLAYLIST_TYPE_LIKED .", ". PLAYLIST_TYPE_HISTORY .")";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
					
				//	tags table
				$sql = "TRUNCATE TABLE pm_tags";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				//	reports table
				$sql = "TRUNCATE TABLE pm_reports";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				//	chart table
				//	tags table
				$sql = "TRUNCATE TABLE pm_chart";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
				
				// empty trash
				$sql = "TRUNCATE TABLE pm_videos_trash";
				$result = @mysql_query($sql);
				if(!$result)
					echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
			}
			echo '<div class="addfirstvideo"><img src="img/img-addfirstvideo.png" width="238" height="49" /></div>';
			echo pm_alert_success('Nothing compares with a fresh start, ey? Enjoy!');
//			echo '</div><!-- .content -->';
//			echo '</div><!-- .primary -->';
//			echo '</div>';
//			exit();
		}
		else
		{
			echo '<meta http-equiv="refresh" content="0;URL=videos.php" />';
			exit();
		}
	}
	else
	{
		echo pm_alert_error('Are you sure you want to delete all your videos?<br /><br />This operation is <strong>not reversible</strong>. Clicking \'Yes\' will empty your video database.');
		?>

        </div><!-- .content -->
    </div><!-- .primary -->
	<?php
	include('footer.php');
	exit();
	}
}
else if ($action == 9)
{
	restricted_access(true);
}

// Empty Trash
if ($action == 10 && is_admin()) 
{
		$video_list_data = array();
		$in_arr = '';
		$sql = "SELECT id, uniq_id, category, url_flv, added, submitted, source_id 
				FROM pm_videos_trash";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_assoc($result))
		{
			$video_list_data[$row['uniq_id']] = $row;
			$in_arr .= "'" . $row['uniq_id'] . "', ";
		}
		$in_arr = substr($in_arr, 0, -2);
		mysql_free_result($result);
		
		mysql_query("DELETE FROM pm_comments WHERE uniq_id IN (" . $in_arr . ")");
		mysql_query("DELETE FROM pm_reports WHERE entry_id IN (" . $in_arr . ")");
		mysql_query("DELETE FROM pm_videos_urls WHERE uniq_id IN (" . $in_arr . ")");
		mysql_query("DELETE FROM pm_chart WHERE uniq_id IN (" . $in_arr . ")");
		mysql_query("DELETE FROM pm_tags WHERE uniq_id IN (" . $in_arr . ")");
		mysql_query("DELETE FROM pm_bin_rating_meta WHERE uniq_id IN (" . $in_arr . ")");
		mysql_query("DELETE FROM pm_bin_rating_votes WHERE uniq_id IN (" . $in_arr . ")");
		
		$ids = array();
		foreach ($video_list_data as $uniq_id => $video)
		{
			$ids[] = $video['id'];
			
			// handle playlists
			$playlist_ids = array();
			
			$sql = "SELECT list_id 
					FROM pm_playlist_items 
					WHERE video_id = ". $video['id'];
			
			if ($result = @mysql_query($sql))
			{
				$in_playlists = false;
				while ($row = mysql_fetch_assoc($result))
				{
					$playlist_ids[] = (int) $row['list_id'];
					$in_playlists = true;
				}
				mysql_free_result($result);
			
				if ($in_playlists)
				{
					$sql = "DELETE FROM pm_playlist_items
							WHERE video_id = ". $video['id'];
					@mysql_query($sql);
	
					$sql = "UPDATE pm_playlists 
							SET items_count = items_count - 1 
							WHERE list_id IN (". implode(',', $playlist_ids) .")";
					@mysql_query($sql);
				}
			}
		}
		
		mysql_query("DELETE FROM pm_meta WHERE item_id IN (". implode(',', $ids) .") AND item_type = ". IS_VIDEO);
		unset($ids);
		
		foreach ($video_list_data as $uniq_id => $row)
		{
			$subtitles = a_get_video_subtitles($uniq_id);

			// delete hosted files
			if ($row['source_id'] == 1)
			{
				if (file_exists(_VIDEOS_DIR_PATH . $row['url_flv']) && strlen($row['url_flv']) > 0)
				{
					unlink(_VIDEOS_DIR_PATH . $row['url_flv']);
				}
			}
			
			if (file_exists(_THUMBS_DIR_PATH . $row['uniq_id'] .'-1.jpg'))
			{
				unlink(_THUMBS_DIR_PATH . $row['uniq_id'] .'-1.jpg');
			}
			if (file_exists(_THUMBS_DIR_PATH . $row['uniq_id'] .'-social.jpg'))
			{
				unlink(_THUMBS_DIR_PATH . $row['uniq_id'] .'-social.jpg');
			}

			if (count($subtitles) > 0)
			{
				foreach ($subtitles as $k => $sub)
				{
					if (file_exists(_SUBTITLES_DIR_PATH . $sub['filename']) && strlen($sub['filename']) > 0)
					{
						unlink(_SUBTITLES_DIR_PATH . $sub['filename']);
					}
				}

				$sql = "DELETE FROM pm_video_subtitles
						WHERE uniq_id = '". secure_sql($uniq_id) ."'";
				@mysql_query($sql);
			}
		}

		update_config('trashed_videos', 0);

		if (_MOD_SOCIAL)
		{
			foreach ($video_list_data as $uniq_id => $video)
			{
				remove_all_related_activity($video['id'], ACT_OBJ_VIDEO);
			}
		}
		
		$sql = "TRUNCATE TABLE pm_videos_trash";
		$result = mysql_query($sql);
		
		if ( ! $result = mysql_query($sql))
		{
			echo pm_alert_error('There was an error while updating your database.<br />MySQL returned: '. mysql_error());
		}
		else
		{
			echo pm_alert_success('Videos removed successfully.');
		}
		
		$videos = a_list_videos('', '', $from, $limit, $page, $filter); 
}
else if ($action == 10)
{
	restricted_access(true);
}
?>
<?php if ($config['total_videos'] == 0) : ?>
<div class="addfirstvideo"><img src="img/img-addfirstvideo.png" width="238" height="49" /></div>
<?php endif; ?>

<div id="video_check_message" class="alert alert-info" style="display: none;"></div>

<div class="pull-left">

</div>
<div class="clearfix"></div>

<div class="row-fluid">
	<div class="span8">

	

	</div><!-- .span8 -->
	<div class="span4">
	    <div class="pull-right">
	    <form name="videos_per_page" action="videos.php" method="get" class="form-inline pull-right">
	    <!--<input type="text" name="results" value="<?php echo $limit; ?>" size="2" onChange="this.form.submit()" />-->


	    <?php
	    // filter persistency
	    if (strlen($_SERVER['QUERY_STRING']) > 0)
	    {
	        $pieces = explode('&', $_SERVER['QUERY_STRING']);
	        foreach ($pieces as $k => $val)
	        {
	            $p = explode('=', $val);
	            if ($p[0] != 'page' && $p[0] != 'results') :	
	            ?>
	            <input type="hidden" name="<?php echo $p[0];?>" value="<?php echo $p[1];?>" />
	            <?php 
	            endif;
	        }
	    }
	    ?>
	    </form>    
	    </div>
	</div>
</div><!-- .row-fluid-->
<div class="tablename">
    <div class="row-fluid">
        <div class="span8">
        	<div class="qsFilter pull-left">
        <div class="btn-group input-prepend">
<!-- .form-filter-inline -->
        </div><!-- .btn-group -->
        </div><!-- .qsFilter -->

		</div>
        <div class="span4">
        <div class="pull-right">
        	<?php if ( ! $in_trash) : ?>
            <form name="search" action="videos.php" method="post" class="form-search-listing form-inline">
            <div class="input-append">
            <input name="keywords" type="text" value="<?php echo $_POST['keywords']; ?>" size="30" class="search-query search-quez input-medium" placeholder="Enter keyword" id="form-search-input" />
            <select name="search_type" class="input-small">
                <option value="video_title" <?php echo ($_POST['search_type'] == 'video_title') ? 'selected="selected"' : '';?>>Title</option>
                <option value="uniq_id" <?php echo ($_POST['search_type'] == 'uniq_id') ? 'selected="selected"' : '';?>>Unique ID</option>
                <option value="submitted" <?php echo ($_POST['search_type'] == 'submitted') ? 'selected="selected"' : '';?>>Username</option>
            </select>
            <button type="submit" name="submit" class="btn" value="Search" id="submitFind"><i class="icon-search findIcon"></i><span class="findLoader"><img src="img/ico-loading.gif" width="16" height="16" /></span></button>
            </div>
            </form>
			<?php endif; ?>
        </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

  <tbody>

	<?php echo $videos; ?>

  </tbody>
 </table>

<div class="clearfix"></div>

<!-- #list-controls -->

<?php
echo csrfguard_form('_admin_videos_listcontrols');
?>
</form>
    </div><!-- .content -->
</div><!-- .primary -->
<?php
include('footer.php');