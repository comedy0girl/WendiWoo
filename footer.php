<footer>
	<div class="row twelve columns footerLink">
		<p class="copyright">I am not associated with Wendi McLendon-Covey.</p>
     <p class="copyright">I do not know her, work for her or know where she lives - I am just a fan.</p>
     <p class="copyright">If there is anything on this site you wish to have removed please feel free to get in touch.</p>
	</div>
</footer>

</div>
</div>

<?php wp_enqueue_script("jquery"); ?>

<script src="http://api.html5media.info/1.1.5/html5media.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33137770-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script> 


  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '944177398972720',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php wp_footer(); ?> 

</body>
</html>