<?php

/* this is for you may also like on single posts */

$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 3, // Number of related posts that will be shown.
	'ignore_sticky_posts '=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
	echo '<div id="related_posts"><h2>In Related News...</h2><ul>';
	while( $my_query->have_posts() ) {
		$my_query->the_post(); ?>

		<div class="relatedPost"><!-- three up container -->
			<li>
				<div class="relatedthumb">
					<?php 
						if (!$featured = get_the_post_thumbnail()) {
							$featured = get_the_content();
						} 
						// extract post thumbnail URL
						preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
						$thumb = $matches[2]; 
					?>

					<?php if (!empty($thumb)) : ?>
						<img class="randPostImg" src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>	
					
				</div>
				<div class="relatedcontent">
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php the_time('M j, Y'); ?>
				</div>
			</li>
		</div><!-- related post ends -->
	<?php } echo '</ul></div>'; }
}

$post = $orig_post;
wp_reset_query(); 
?>