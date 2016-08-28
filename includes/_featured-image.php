<div class="row twelve columns bannerImageMain" style="background-image: url('<?php if(has_post_thumbnail()):
   
    echo the_post_thumbnail();
  
	else:
   
   echo get_bloginfo("template_url"); ?>/wendiStar.jpg
    
	<?php endif ?>'); background-position: top center !important;">
</div>