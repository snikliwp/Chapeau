<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?>Chapeau Agricultural Society</title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie6.css" media="screen" type="text/css" />
    <![endif]-->
    
  <script src="<?php sd(); ?>/js/modernizr.min.js"></script>
	<?php wp_head() ?>
    

</head>
<body class="clearfix">

<header class="top">
	<h1 class="topLinks"><a href="#">Français</a><a href="#">English</a></h1>
</header>


<div class="all">

    <div class="left">
        <nav class="wrapper">
            <?php 
                wp_nav_menu(
                    array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav',
    //				'depth' => 2
                    )
                );
                ?>
        </nav>
    </div>

