<?php /* Template Name: articles main */ ?>

<?php get_header('general'); ?>
	<div class="row twelve columns articles">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
		<?php endif; ?>
		
	</div>
<?php get_footer(); ?>