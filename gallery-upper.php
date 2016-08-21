<?php /*Template Name:gallery upper*/ ?>

<?php get_header('gallery'); ?>

	<div id="menuWrapper">
			<?php include (TEMPLATEPATH . '/includes/_gallery-nav.php'); ?>
	</div><!-- menuWrapper -->

	<div class="row twelve columns gallery">
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