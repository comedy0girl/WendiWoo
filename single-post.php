<?php get_header(); ?>
	<div class="news-container twelve columns">
		<div class="row nine columns content-post">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="single-post-wrapper">
					<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="postInfo">
						<div class="cal-date">
							<span class="cal-month"><?php the_time('F') ?></span>
							<span class="cal-day"><?php the_time('j') ?></span>
							<span class="cal-year"><?php the_time('Y')?></span>
						</div><!-- date -->
						<?php	$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo esc_html( $categories[0]->name );   
							} 
						?>
					</div>

					<div class="postImage">
						<?php
						if (! $featured = get_the_post_thumbnail()) {
							$featured = get_the_content();
						}
						
						// extract post thumbnail URI
						preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
						$thumb = $matches[2]; ?>
					</div>
						
					<?php the_content(); ?>

					

				</div><!-- post wrapper ends -->
			
			<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			<div class="row relatedposts">
				<?php $orig_post = $post;
				global $post;
				$categories = get_the_category($post->ID);
				if ($categories) {
				$category_ids = array();
				foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=> 3, // Number of related posts that will be shown.
				'caller_get_posts'=>1
				);
				$my_query = new wp_query( $args );
				if( $my_query->have_posts() ) {
				echo '<div id="related_posts"><h2>More Wendi Fabulouness..</h2><ul>';
				while( $my_query->have_posts() ) {
				$my_query->the_post();?>

				<div class="relatedPost">
					<li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<div class="relatedcontent">
					<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php the_time('M j, Y') ?>
					</div>
					</li>
				</div><!-- related post ends -->
				<?php } echo '</ul></div>'; }
				}
				$post = $orig_post;

				wp_reset_query(); ?>
			</div>
			
		</div><!-- content post -->

		<div class="row three columns sidebar">
			<?php dynamic_sidebar('right_sidebar'); ?>
		</div> 
	</div><!--news container end -->
<?php get_footer(); ?>