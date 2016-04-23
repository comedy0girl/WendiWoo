  <?php include (TEMPLATEPATH . '/includes/_wrapper.php'); ?>

  <div class="row twelve columns container">
  	<header>
  		<div class="topBar">
  			<div class="logoWrapper">
		  		<div class="socialWrapper">
		  			<ul>
			  			<li><a href="https://twitter.com/wendifansite"><i class="fa fa-twitter "></a></i></li>
						<li><a href="http://instagram.com/wendimc_fansite/"><i class="fa fa-instagram "></a></i></li>
						<li><a href="https://www.facebook.com/wendimclendoncoveyfan"><i class="fa fa-facebook"></a></i></li>
					</ul>
		  		</div>
		
		        <div class="logo header-center">
				   <h1>Wendi MC Fansite</h1>
				   <h2>Your fansite source for Wendi McLendon-Covey</h2>
				</div>
			</div><!-- logowrapper -->
			<div class="clear"></div>
			<div id="menuWrapper">
				<?php include (TEMPLATEPATH . '/includes/_gallery-nav.php'); ?>
			</div><!-- menuWrapper -->
		</div><!-- topbar -->
	</header>

	<?php global $post; ?>
	<?php
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
	?>
	<div class="row twelve columns bannerImage" style="background: url(<?php echo $src[0]; ?> ); background-position:center center; height: 400px;"></div>
