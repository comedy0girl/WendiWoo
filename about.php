<?php /*Template Name: biography page*/ ?>

<?php get_header('general'); ?>

	<div class="bio-container twelve columns">
			
		<div class="row nine columns bio-post">
			<div class="bioContainer">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php the_content(); ?>
				
				<?php endwhile; else: ?>
				<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
			<?php endif; ?>
			</div>
		</div><!-- content post -->

		<div class="row three columns sidebar">
			<?php get_sidebar('biog'); ?>
		</div> 

	</div><!-- about container -->
	
<?php get_footer(); ?>