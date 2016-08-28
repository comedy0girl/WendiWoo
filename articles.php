<?php /* Template Name: articles main */ ?>

<?php get_header(); ?>

	<div class="row twelve columns bannerImageMain" style="background-image: url('<?php bloginfo('template_url') ?>/wendiStar.jpg'); background-position: top center !important;">
	</div>

	<div class="row twelve columns articles">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
		<?php endif; ?>
		
	</div>
<?php get_footer(); ?>