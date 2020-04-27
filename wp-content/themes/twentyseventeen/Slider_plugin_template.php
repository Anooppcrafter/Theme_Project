<?php

/*


Template name: Slider-Plugin Template
*/

get_header();
$condition = array(
"post_type"=>array('slide'),
"post_status"=>"publish",
//'posts_per_page'=>28
//"author"=> '1,2,3',
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
//"category_name"=>"slider"
);

$the_query = new WP_QUERY($condition);
if($the_query->have_posts()){
	while($the_query->have_posts()){
		$the_query->the_post();
		echo '<p>'.get_the_title().'</p>';
		the_content();
		$image=wp_get_attachment_url(get_post_thumbnail_id($post->ID),'slider-image');
		?>
		<?php
	}
	wp_reset_postdata();
}else{

}
get_footer();
?>