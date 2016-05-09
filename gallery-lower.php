<?php /*Template Name: lower-gallery*/ ?>

<?php get_header('gallery'); ?>
	<div class="row twelve columns gallery">
		<div class="row twelve columns navBySeason">
			<?php if (is_page( 'the-goldbergs', 'the-goldbergs-season-2', 'goldbergs-s3' )) {
					 include (TEMPLATEPATH . '/includes/_goldbergs.php'); 
				} elseif (is_page('season-1', 'reno2', 'renos3', 'renos4', 'renos5')){
					get_sidebar('reno');
				} elseif (is_page('talk-shows', 'talk-shows-2')) {
					get_sidebar('talkshows');
				} elseif (is_page('public-appearances')) {
					get_sidebar('publicappearances');
				} 
			?>
		</div>
		<div class="row twelve columns galleryContent">
			<div class="galleryContainer">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				
				<?php endwhile; else: ?>
				<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
				<?php endif; ?>	
			</div>	
		</div>
	</div><!-- gallery container -->

<?php get_footer(); ?>