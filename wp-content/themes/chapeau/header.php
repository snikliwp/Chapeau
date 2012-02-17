<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?>Chapeau Agricultural Society</title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <script src="<?php sd(); ?>/js/modernizr.min.js"></script>
	<?php wp_head() ?>
</head>
<body>
<h2>Header</h2>
<header class="wrapper masthead">
  <h1 class="logo">
  </h1>
</header>

	<nav class="wrapper">
		<?php 
			wp_nav_menu(
				array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'nav',
				'depth' => 2
				)
			);
			?>
	</nav>
