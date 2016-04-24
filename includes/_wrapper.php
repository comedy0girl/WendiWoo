<!doctype html>
<html  <?php language_attributes(); ?>>
	<head>

   	<meta charset="<?php bloginfo( 'charset' ); ?>" />
   	<meta name="viewport" content="width-device-width, initial-scale=1">
   	
	<?php wp_head(); ?>

	  <!-- Basic Page Needs
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <meta charset="utf-8">
	  <title><?php if(is_home()) { echo bloginfo("name"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
	  <meta name="description" content="Fan site dedicated to actress Wendi McLendon-Covey">
	  <meta name="author" content="">

	  
	  <script src="<?php bloginfo('template_url') ?>/dist/all.min.js"></script>
	  
	  <!-- CSS
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.min.css" type="text/css" media="screen" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  
	  <!-- Favicon
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <body <?php body_class(); ?>>

	</head>
	<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->