<?php get_header(); ?>

	<div class="news-container twelve columns">

		<div class="row twelve columns bannerImageMain" style="background-image: url('<?php bloginfo('template_url') ?>/wendiStar.jpg'); background-position: top center !important;">
			</div>
			
		<div class="row nine columns content-post">
			<?php query_posts( array( 'paged' => get_query_var('paged') ) ); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post-wrapper">
					<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="postInfo">
						<div class="postDate">
							<span><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?></span>
						</div>
						<span><?php	$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo esc_html( $categories[0]->name );   
							} 
						?></span>
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
			
		</div><!-- content post -->

		<div class="row three columns sidebar">
			<?php get_sidebar('general'); ?>
		</div> 


	</div><!--news container end -->

	<div class="row mainGallery twelve columns">
	
		<!-- <div class="gallerySection">
			<h1>Gallery</h1>
			<?php
				$my_id = 428;
				$post_id_428 = get_post($my_id);
				$content = $post_id_428->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			?>
		</div> -->
	</div>
<?php get_footer(); ?>