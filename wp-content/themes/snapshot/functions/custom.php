<?php 

// Custom fields for WP write panel
// This code is protected under Creative Commons License: http://creativecommons.org/licenses/by-nc-nd/3.0/

$wt_metaboxes = array(
		"image" => array (
			"name"		=> "image",
			"default" 	=> "",
			"label" 	=> "Screenshot (330x190)",
			"type" 		=> "text",
		),
		"large-image" => array (
			"name"		=> "large-image",
			"default" 	=> "",
			"label" 	=> "Large Image (Max Width: 690px)",
			"type" 		=> "text",
		),		
		"url" => array (
			"name"		=> "url",
			"default" 	=> "",
			"label" 	=> "Website URL",
			"type" 		=> "text",
		),									
	);
	
function woothemes_meta_box_content() {
	global $post, $wt_metaboxes;
	echo '<table>'."\n";
	foreach ($wt_metaboxes as $wt_metabox) {
		$wt_metaboxvalue = get_post_meta($post->ID,$wt_metabox["name"],true);
		if ($wt_metaboxvalue == "" || !isset($wt_metaboxvalue)) {
			$wt_metaboxvalue = $wt_metabox['default'];
		}
		echo "\t".'<tr>';
		echo "\t\t".'<th style="text-align: right;"><label for="'.$wt_metabox.'">'.$wt_metabox['label'].':</label></th>'."\n";
		echo "\t\t".'<td><input size="50" type="'.$wt_metabox['type'].'" value="'. stripslashes($wt_metaboxvalue).'" name="woothemes_'.$wt_metabox["name"].'" id="'.$wt_metabox.'"/></td>'."\n";
		echo "\t".'</tr>'."\n";
	}
	echo '</table>'."\n\n";
}

function woothemes_metabox_insert($pID) {
	global $wt_metaboxes;
	foreach ($wt_metaboxes as $wt_metabox) {
		$var = "woothemes_".$wt_metabox["name"];
		if (isset($_POST[$var])) {
			add_post_meta($pID,$wt_metabox["name"],$_POST[$var],true) or update_post_meta($pID,$wt_metabox["name"],$_POST[$var]);
		}
	}
}

function woothemes_meta_box() {
	if ( function_exists('add_meta_box') ) {
		add_meta_box('woothemes-settings','Additional Fields (Optional)','woothemes_meta_box_content','post','normal');
		add_meta_box('woothemes-settings','Additional Fields (Optional)','woothemes_meta_box_content','page','normal');
	}
}

add_action('admin_menu', 'woothemes_meta_box');
add_action('wp_insert_post', 'woothemes_metabox_insert');
?>