<?php /* Template Name: articles single */ ?>

<?php get_header(); ?>

	<div class="row twelve columns bannerImageMain" 
	style="background-image: url('<?php bloginfo('template_url') ?>/wendiStar.jpg'); background-position: top center !important;">
	</div> 

	

	<div class="news-container twelve columns">
		<div class="row twelve columns articles">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(__('(more...)')); ?>
			
			<?php endwhile; else: ?>
			<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
			<?php endif; ?>


			<div class="moreArticles">
				<h2>More Articles</h2>

				<?php include (TEMPLATEPATH . '/includes/_getSiblings.php'); ?>


			</div>

		</div><!-- nine columns -->
		
	</div>
<?php get_footer(); ?>