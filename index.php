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
					
				<?php
				if (! $featured = get_the_post_thumbnail()) {
					$featured = get_the_content();
				}
				
				// extract post thumbnail URL
				preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
				$thumb = $matches[2]; ?>

				<?php if (!empty($thumb)) : ?>

				<a href="<?php echo get_permalink(); ?>" class="img-wrapper">
					<img src="<?php echo $thumb; ?>" alt="">
				</a>
	
				<p><?php $words = str_word_count(get_the_excerpt(), 1);
			  	echo implode(' ', array_slice($words, 0, 25)); ?>...<a href="<?php the_permalink(); ?>">Read More</a></p>
	
			<?php else : ?>

				<?php the_content(); ?>

			<?php endif; ?>	
					

			<div class="postShare"><?php echo wpfai_social(); ?></div>
			</div><!-- post wrapper ends -->
			
			<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			<div class="row nine columns post-nav">
				<?php wp_pagenavi(); ?>
			</div><!--post nav-->
			
		</div><!-- content post -->

		<div class="row three columns sidebar">
			<?php get_sidebar('general'); ?>
		</div> 


	</div><!--news container end -->

	<div class="clear"></div>
	<div class="row twelve columns instagramDesktop">
  			<h2> <span><i class="fa fa-instagram black"></i>  @wendimc_fansite</span></h2>
	  		<div class="row twelve columns" id="instafeed">
	   		 <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe id="instagram" src="//lightwidget.com/widgets/7cb700b4ad1253dd8f7c7c9a98c07256.html" id="lightwidget_7cb700b4ad" name="lightwidget_7cb700b4ad"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
  			</div>
	</div>
<?php get_footer(); ?>