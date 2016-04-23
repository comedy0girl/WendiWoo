<?php 



function randomImages_shortcode( $atts ) {
 $query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);

$query_images = new WP_Query($query_images_args . '&random=true' );

$images = array();
foreach ( $query_images->posts as $image ) {
    $images[] = wp_get_attachment_url( $image->ID );

}

class RandomImage {
	function orderby($orderby) {
		if (get_query_var('random') == 'true')
			return "RAND()";
		else
			return $orderby;
		}
		function register_query_var($vars) {
			$vars[] = 'random';
			return $vars;
		}
}

}

add_shortcode('randomImages', 'randomImages_shortcode');


add_filter('posts_orderby', array('RandomImages', 'orderby'));
add_filter('query_vars', array('RandomImages', 'register_query_var'));



?>