<?php /*Template Name:gallery upper*/ ?>

<?php get_header(); ?>

HELLO
	
	<div class="gallery-container">
		<div class="row">
			<div class="twelve columns">
				<div class="nine columns">
					<div id="content">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(__('(more...)')); ?>
						
						<?php endwhile; else: ?>
						<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
						<?php endif; ?>	
					</div><!-- content -->
				</div>
				
				<div class="three-half columns">
					<div class="sidebarNav">
						<?php get_sidebar('gallery'); ?>
					</div>
				</div>
			</div><!-- ten columns -->
		</div><!-- row -->
	<div><!-- gallery container -->

<?php get_footer(); ?>