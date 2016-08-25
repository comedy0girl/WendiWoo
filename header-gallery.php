<?php include (TEMPLATEPATH . '/includes/_wrapper.php'); ?>

<div class="row twelve columns container">

	<div id="menuWrapper">
		<?php include (TEMPLATEPATH . '/includes/_nav.php'); ?>
	</div><!-- menuWrapper -->
  	<header>
  		<div class="topBar">
  			<div class="row twelve columns logoWrapper">
		  		
	  			<div class="shareWrapper">
					<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
				</div>
		  		
		        <div class="logo header-center">
				   <h1><a href="/">Wendi MC Fansite</a></h1>
				   <h2>Your fansite source for Wendi McLendon-Covey</h2>
				</div>

				<div class="socialWrapper">
		  			<ul>
			  			<li><a href="https://twitter.com/wendifansite"><i class="fa fa-twitter "></i></a></li>
						<li><a href="http://instagram.com/wendimc_fansite/"><i class="fa fa-instagram "></i></a></li>
						<li><a href="https://www.facebook.com/wendimclendoncoveyfan"><i class="fa fa-facebook"></i></a></li>
						<li id="clickme" ><i class="fa fa-bars" aria-hidden="true"></i></li>
					</ul>
		  		</div>
			</div><!-- logowrapper -->
		
		
			<div class="smallScreenNav">
				<ul>
					<li><a href="https://twitter.com/wendifansite"><i class="fa fa-twitter "></i></a></li>
					<li><a href="http://instagram.com/wendimc_fansite/"><i class="fa fa-instagram "></i></a></li>
					<li><a href="https://www.facebook.com/wendimclendoncoveyfan"><i class="fa fa-facebook"></i></a></li>
					<li id="clickme" ><i class="fa fa-bars" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div><!-- topbar -->
	</header>

	<?php global $post; ?>
	<?php
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
	?>
	<div class="row twelve columns bannerImage" style="background: url(<?php echo $src[0]; ?> ); background-position:top center; height: 400px; -webkit-background-size: cover;
  -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
	

