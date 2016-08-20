<?php /* Template Name: Contact Us */ ?>

<?php get_header('general'); ?>

	<div class="row">
		<div class="nine columns">
			<div class="contact-container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(__('(more...)')); ?>
				
				<?php endwhile; else: ?>
				<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
				<?php endif; ?>
			</div><!-- bio container -->
		</div><!-- nine columns -->

		<div class="three-half columns">
			<div class="sidebarNav">
				<?php get_sidebar('contact'); ?>
			</div>
		</div><!-- three half columns ends -->
	</div><!-- row -->
	
	<?php get_footer(); ?>