<?php 
/*
Plugin Name: Slider_Plugin
Plugin URI:
Description:This is my Second Demo Plugin to just provide basic plugin setting.
Author:Anoop Chourasia
Author URI:
Version:5.4
*/
////SHORT CODE STARTED//
define("SLIDER_PLUGIN_PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
add_shortcode("Slider1","Slider_plugin_1");
function Slider_plugin_1(){
	

get_header();
$condition = array(
"post_type"=>'slide',
"post_status"=>"publish",
//'posts_per_page'=>28
"author"=>"1",
//"author_name"=>"admin, anoop1, anoop2",
//
//"author__in"=>array(1,2),
//"cat"=>"4,5"
//"category__in"=>array(4,5)
//"category__not_in"=>array(4,5),
//"category_name"=>"slider-1,slider-2"
//"p"=>116
//"s"=>"Images 2",
//"name"=>"images-3"
"category_name"=>"slider1"
);

$the_query = new WP_QUERY($condition);
if($the_query->have_posts()){
	while($the_query->have_posts()){
		$the_query->the_post();
		echo "<div>";
		echo '<p>'.get_the_title().'</p>';
		if(get_the_post_thumbnail_url($post->ID)){
			echo get_the_post_thumbnail_url($post->ID);
		}
		the_content();
		echo "</div>";
		//$image=wp_get_attachment_url(get_post_thumbnail_id($post->ID),'slider-image');
	
		
	}
	wp_reset_postdata();
}
get_footer();


}
add_shortcode("Slider2","Slider_plugin_2");
function Slider_plugin_2(){

get_header();
$condition = array(
"post_type"=>'slide',
"post_status"=>"publish",
//'posts_per_page'=>28
"author"=>"2",
//"author_name"=>"admin, anoop1, anoop2",
//
//"author__in"=>array(1,2),
//"cat"=>"4,5"
//"category__in"=>array(4,5)
//"category__not_in"=>array(4,5),
//"category_name"=>"slider-1,slider-2"
//"p"=>116
//"s"=>"Images 2",
//"name"=>"images-3"
"category_name"=>"slider2"
);

$the_query = new WP_QUERY($condition);
if($the_query->have_posts()){
	while($the_query->have_posts()){
		$the_query->the_post();
		echo "<div>";
		echo '<p>'.get_the_title().'</p>';
		if(get_the_post_thumbnail_url($post->ID)){
			echo get_the_post_thumbnail_url($post->ID);
		}
		the_content();
		echo "</div>";
		//$image=wp_get_attachment_url(get_post_thumbnail_id($post->ID),'slider-image');
	
		
	}
	wp_reset_postdata();
}
get_footer();
	
}
add_shortcode('Slider3','Slider_plugin_3');
function Slider_plugin_3($attributes){

get_header();
$condition = array(
"post_type"=>'slide',
"post_status"=>"publish",
//'posts_per_page'=>28
"author"=>"3",
//"author_name"=>"admin, anoop1, anoop2",
//
//"author__in"=>array(1,2),
//"cat"=>"4,5"
//"category__in"=>array(4,5)
//"category__not_in"=>array(4,5),
//"category_name"=>"slider-1,slider-2"
//"p"=>116
//"s"=>"Images 2",
//"name"=>"images-3"
"category_name"=>"slider3"
);

$the_query = new WP_QUERY($condition);
if($the_query->have_posts()){
	while($the_query->have_posts()){
		$the_query->the_post();
		echo "<div>";
		echo '<p>'.get_the_title().'</p>';
		if(get_the_post_thumbnail_url($post->ID)){
			echo get_the_post_thumbnail_url($post->ID);
		}
		the_content();
		echo "</div>";
		//$image=wp_get_attachment_url(get_post_thumbnail_id($post->ID),'slider-image');
	
		
	}
	wp_reset_postdata();
}
get_footer();
}

function slider_plugin_scripts(){
//stylesheets

wp_enqueue_style('slick.css',get_template_directory_uri().'Slider_Plugin/slick.css');
wp_enqueue_style('slick-theme.css',get_template_directory_uri().'Slider_Plugin/slick-theme.css');

//Script tag
wp_enqueue_script('slick.min.js',get_template_directory_uri().'Slider_Plugin/slick.min.js',array(),'1.1',true);
wp_enqueue_script('slick.min.js',get_template_directory_uri().'Slider_Plugin/code.jquery.com/jquery-migrate-1.2.1.min.js',array(),'1.1',true);
wp_enqueue_script('slick.min.js',get_template_directory_uri().'Slider_Plugin/code.jquery.com/jquery-1.11.0.min.js',array(),'1.1',true);
}
add_action("wp_enqueue_scripts","slider_plugin_scripts");


add_action('init','Slider_plugin_Task');

function Slider_plugin_Task(){
	$labels=array(

		'name'=>__('Slide'),
		'singular_name'=>__('Slide'),
		'menu_name'=>__('Slide'),
		'name_admin_bar'=>__('Slide'),
		'add_new'=>__('Add New'),
		'add_new_item'=>__('Add New Slide'),
		'new_item'=>__('New Slide'),
		'edit_item'=>__('Edit Slide'),
		'view_item'=>__('View Slide'),
		'all_items'=>__('All Slide'),
		'search_items'=>__('Search Slide'),
		'parent_item_colon'=>__('Parent Slide'),
		'not_found'=>__('No Slide Found'),
		'not_found_in_trash'=>__('No Slide Found in Trash')
);
	$args=array(
'labels'=>$labels,
'description'=>__('Description'),
'public'=>true,
'publicly_queryable'=>true,
'show_ui'=>true,
'show_in_menu'=>true,
'query_var'=>true,
'rewrite'=>array('slug'=>'slide'),
'capability_type'=>'post',
'has_archive'=>true,
'hierarchical'=>false,
'menu_position'=>null,
'supports'=>array('title','editor','author','thumbnail','excerpt','comments','revision'),
	//'taxonomies'=>array('category','post_tag'),
	'menu_position'=>5,
	'execlude_from_scratch'=>false
);
	register_post_type('slide',$args);
}
function Slider_plugin_category_taxonomy(){

	$labels=array(
		'name'=>__('Slider'),
		'singular_name'=>__('Slider'),
		'menu_name'=>__('Slider'),
		'all_items'=>__('All Slider','Slider'),
		'parent_item'=>__('Parent Slider','Slider'),
		'parent_item_colon'=>__('Parent Slider:','Slider'),
		'new_item_name'=>__('New Item Slider','Slider'),
		'add_new_item'=>__('Add New Slider','Slider'),
		'edit_item'=>__('Edit Slider','Slider'),
		'update_item'=>__('Update Slider','Slider'),
		'view_item'=>__('View Slider','Slider'),
		'separate_items_with_commas'=>__('Separate Slider with commas','Slider'),
		'add_or_remove_items'=>__('Add or Remove Slider','Slider'),
		'choose_from_most_used'=>__('Choose From the most','Slider'),
		'popular_items'=>__('Popular Slider','Slider'),
		'search_items'=>__('Search Slider','Slider'),
		'not_found'=>__('Not Found','Slider'),
		'no_terms'=>__('No Terms','Slider'),
		'items_list'=>__('Slider List','Slider'),
		'items_list_navigation'=>__('Slider List Navigation','Slider'),
		'menu_name'=>__('Slider','Slider'),
	);

	$args=array(
		'labels'=>$labels,
		'hierarchical'=>true,
		//'public'=>true,
		'show_ui'=>true,
		'show_admin_column'=>true,
		//'show_in_nav_menus'=>true,
		//'show_tagcloud'=>true,
		'query_var'=>true,
'rewrite'=>array('slug'=>'slider'),
);
	register_taxonomy('slider',array('slide'),$args);
}
add_action('init','Slider_plugin_category_taxonomy',0);
 

?>
<html>
  <head>
  <title>My Now Amazing Webpage</title>

  </head>
  <body>
  	
  <div class="your-class">
    <div>Your Content</div>
    <div>Your content</div>
    <div>Your contents</div>
  </div>

 <script type="text/javascript">
     $(document).ready(function(){
      $('.your-class').slick();
    });
  </script>
  </body>
</html>