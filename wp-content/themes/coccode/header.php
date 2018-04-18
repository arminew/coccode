<!DOCTYPE html>

<html>
<head <?php language_attributes(); ?>>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php the_title(); ?></title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	
    <!-- Custom css  -->    
	<link href="<?php echo get_template_directory_uri(); ?>/src/css/owlCarousel/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/sass/style.css" type="text/css">

    
    <!--[if lt IE 9]>-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" type="text/javascript"></script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="navbar fixed-top">
  <a class="navbar-brand" href="<?php echo home_url(); ?>">
	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" width="100"/>
  </a>
  
    <div id="mySidenav" class="sidenav">
	    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	    <!-- navigation -->
	    <ul>
		    <li>
		    	<a href="#" class="current">Link</a>
		    </li>
			<li>
		    	<a href="#" class="current">Link</a>
		    </li>
	    </ul>	
	    <!-- / navigation -->
	</div>
	
	<div id="menuOverlay"></div>

    <div class="">
      <a href="javascript:void(0)" onclick="openNav()">open</a>
    </div>
  
</nav>





