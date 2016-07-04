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
				   <h1><a href="/">Wendi MC Fansite</a></h1>
				    <h2>YOUR FANSITE SOURCE FOR WENDI McLENDON-COVEY</h2>
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
							<p>Share us on Facebook and Twitter</p>
							<li>Facebook</li>
							<li>Twitter</li>
						</div>
						<div id="mask" class="mask" onclick="document.location=' ';">
							
						</div>
			
			
			<div id="menuWrapper">
				<?php include (TEMPLATEPATH . '/includes/_nav.php'); ?>
			</div><!-- menuWrapper -->
		</div><!-- topbar -->
	</header>
