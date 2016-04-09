<?php get_header(); ?>
	<div class="row twelve columns welcome">
		<p class="six columns wendiBio">After graduating from California State University Long Beach with a B.A. in Liberal Studies/Creative Writing she started taking classes at the renowned Improv Theatre, The Groundlings. There she appeared in various mainstage shows including The Groundlings: City Of The Future and Groundlings Enchanted Forest, and remained apart of the troupe from 2002-2009.<br>

		It was during her time at The Groundlings that Wendi appeared in two unscripted shows, Lovespring International and Reno 911!, which culminated in her being christened the “Queen of Improv” by TV Guide. Her character Deputy Clementine Johnson from Reno 911! was a character Wendi developed at the Groundlings Theater, but she wasn’t originally a cop.<br>

		In 2011 Wendi starred alongside Kristen Wiig in the hit film Bridesmaids, and continued to make appearanceson the television show Rules of Engagement.<br>
		Currently she can be see as ‘smother’ Beverly Goldberg on the hiy ABC comedy The Goldbergs.<br>

		Wendi had been married to her husband Greg since August 1996 and they live in Long Beach with their cats Darla, Maxine, Crash and Hunter.</p>
	</div>

	<div class="news-container twelve columns">
		<div class="content-post">
				<?php query_posts( array( 'paged' => get_query_var('paged') ) ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post-wrapper">
						<h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
						<div class="cal-date">
							<span class="cal-month"><?php the_time('F') ?></span>
							<span class="cal-day"><?php the_time('j') ?></span>
							<span class="cal-year"><?php the_time('Y')?></span>
						</div><!-- date -->

						<?php
							if (! $featured = get_the_post_thumbnail()) {
								$featured = get_the_content();
							}
							
							// extract post thumbnail URI
							preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
							$thumb = $matches[2]; ?>
						
							<a href="<?php echo get_permalink(); ?>" class="img-wrapper">
								<img src="<?php echo $thumb; ?>" alt="">
							</a>
							
						<?php the_content(); ?>

					</div><!-- post wrapper ends -->
				
				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
			</div><!-- content post -->
	</div><!--news container end -->

	<div class="row mainGallery twelve columns">

		<?php
			$my_id = 101;
			$post_id_101 = get_post($my_id);
			$content = $post_id_101->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
		?>

	</div>

	<div class="row pressMain twelve columns">

		<?php
			$my_id = 109;
			$post_id_109 = get_post($my_id);
			$content = $post_id_109->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
		?>

	</div>


			

				<!-- <div class="wendi-social">
					<div class="follow-wendi">
						<li><h5>Follow Wendi</h5></li>
						<li><i class="fa fa-long-arrow-right fa-3x"></i></li>
					</div>
					<a href="https://twitter.com/wendimclendonco"><i class="fa fa-twitter "></a>²</i> 
					<a href="http://instagram.com/wendi_mclendon_covey/"><i class="fa fa-instagram "></a></i> 
					<a href="http://wendimc.tumblr.com/"><i class="fa fa-tumblr"></a></i> 
					<a href="https://www.facebook.com/wendi.mclendoncovey"><i class="fa fa-facebook"></a></i>
				</div> --><!-- wendi social -->

				<!-- <div class="upcomingEvents">
				<h5>Reminders</h5>
					<?php dynamic_sidebar('appearances_sidebar'); ?>
				</div> -->

				<!-- <div class="wendi-instagram">
					<script src="//instansive.com/widget/js/instansive.js"></script>
					<iframe src="//instansive.com/widgets/563d55c770f93796b8e5bfd7e3cafe885ef0d3c7.html" id="instansive_563d55c770" name="instansive_563d55c770"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
				</div> -->
				

				
			<!-- <div class="post-nav">
				<?php wp_pagenavi(); ?>
			</div -->><!--post nav-->

	
<?php get_footer(); ?>