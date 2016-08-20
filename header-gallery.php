<?php include (TEMPLATEPATH . '/includes/_wrapper.php'); ?>

<div class="row twelve columns container">

	<div id="menuWrapper">
			<?php include (TEMPLATEPATH . '/includes/_gallery-nav.php'); ?>
	</div><!-- menuWrapper -->

  	<header>
  		<div class="topBar">
  			<div class="row twelve columns logoWrapper">
		  		<div class="socialWrapper">
		  			<ul>
			  			<li><a href="https://twitter.com/wendifansite"><i class="fa fa-twitter "></i></a></li>
						<li><a href="http://instagram.com/wendimc_fansite/"><i class="fa fa-instagram "></i></a></li>
						<li><a href="https://www.facebook.com/wendimclendoncoveyfan"><i class="fa fa-facebook"></i></a></li>
					</ul>
		  		</div>
		
		        <div class="logo header-center">
				   <h1>Wendi MC Fansite</h1>
				   <h2>Your fansite source for Wendi McLendon-Covey</h2>
				</div>

				<div class="shareWrapper">
					<ul>
						<!-- <a href="#overlay" id="open-overlay"><li id="shareMe"><i class="fa fa-share-alt" aria-hidden="true"></i></li></a> -->
						<li id="clickme"><i class="fa fa-search" aria-hidden="true"></i></li>
						<li id="clickme" ><i class="fa fa-bars" aria-hidden="true"></i></li>
					</ul>
				</div>

			</div><!-- logowrapper -->


			<!-- overlay that needs to be added in later -->
			<!-- <div id="overlay">
				<p>Share us on Facebook and Twitter</p>
				<li>Facebook</li>
				<li>Twitter</li>
			</div> -->
			<div id="mask" class="mask" onclick="document.location=' ';"></div>
			

			<div class="smallScreenNav">
				<ul>
					<li><a href="https://twitter.com/wendifansite"><i class="fa fa-twitter "></i></a></li>
					<li><a href="http://instagram.com/wendimc_fansite/"><i class="fa fa-instagram "></i></a></li>
					<li><a href="https://www.facebook.com/wendimclendoncoveyfan"><i class="fa fa-facebook"></i></a></li>
					<li id="clickme"><i class="fa fa-search" aria-hidden="true"></i></li>
						<li id="clickme" ><i class="fa fa-bars" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div><!-- topbar -->
	</header>

	<?php global $post; ?>
	<?php
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
	?>
	<div class="row twelve columns gallery bannerImage" style="background: url(<?php echo $src[0]; ?> ); background-position:center center; height: 400px;"></div>