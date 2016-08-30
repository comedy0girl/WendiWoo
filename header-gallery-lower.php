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

	<div class="row twelve columns bannerImageMain" style="
		<?php
			$galPage = $post->post_parent;
				switch ($galPage) {
    				case 971: ?> <!-- tv shows -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/tvShows.jpg');
    				<?php break;
    				case 2702: ?><!-- films -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/films.jpg'); 
    				<?php break; 
    				case 14031: ?><!-- premieres -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/premieres.jpg'); 
    				<?php break;
    				case 31432: ?><!-- awards -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/awards.jpg'); 
    				<?php break; 
    				case 31991: ?><!-- magazines -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/magazines.jpg'); 
    				<?php break;  
    				case 31413: ?><!-- commercials -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/commercials.jpg'); 
    				<?php break; 
    				case 14274: ?><!-- Groundlings -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/groundlings.jpg'); 
    				<?php break; 
    				case 42283: ?><!-- Public Appearances -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/publicAppearances.jpg'); 
    				<?php break; 
    				case 31987: ?><!-- Talk Shows -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/talkshows.jpg'); 
    				<?php break; 
    				case 2477: ?><!-- Guest Appearances -->
    				background-image: url('<?php bloginfo('template_url') ?>/images/guestAppearances.jpg'); 
    				<?php break; 
    				default: ?>
    				background-image: url('<?php bloginfo('template_url') ?>/images/wendiStar.jpg');
    	<?php	} ?>
    		background-position:top center; height: 400px; -webkit-background-size: cover;
  			-moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		</div>