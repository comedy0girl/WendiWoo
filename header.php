<?php include (TEMPLATEPATH . '/includes/_wrapper.php'); ?>

<div class="row twelve columns container">

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
						<a href="#overlay" id="open-overlay"><li id="shareMe"><i class="fa fa-share-alt" aria-hidden="true"></i></li></a>
						<li id="clickme"><i class="fa fa-search" aria-hidden="true"></i></li>
						<li id="clickme" ><i class="fa fa-bars" aria-hidden="true"></i></li>
					</ul>
				</div>

			</div><!-- logowrapper -->

			<div id="overlay">
				<h2>Share us on Facebook and Twitter</h2>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=wendimcfansite.com">Share on Facebook</a></li>
				<li><a href="https://twitter.com/home?status=wendimcfansite.com%20%7C%20Wendi%20McLendon-Covey%20Fansite">Share on Twitter</a></li>
			</div>
			<div id="mask" class="mask" onclick="document.location=' ';"></div>
			
			
			<div id="menuWrapper">
				<?php include (TEMPLATEPATH . '/includes/_nav.php'); ?>
			</div><!-- menuWrapper -->
		</div><!-- topbar -->
	</header>
