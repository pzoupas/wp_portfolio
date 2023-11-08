<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Panagiotis Zoupas">  
    <!-- <link rel="shortcut icon" href="images/logo.png">  -->
    
   
</head> 

<?php
	wp_head(); //  Ενεργοποιεί την ενέργεια wp_head - Fires the wp_head action
?>

<?php
    get_header();
?>

<body>

	<header id="header" class="header">
	
		<div class="header-wrapper">

			<?php
				// Διημιουργια custom logo 
				if (function_exists('the_custom_logo')){ 

					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
			?>
			<a class="custom-logo-link" href="/"><img src="<?php echo $logo[0] ?>" alt="logo"> </a>

			<div class="nav-menu">
			<?php
    			wp_nav_menu(
					array(
						'menu' => 'primary',
						'container' => '',
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
					)
				);
			?>
			</div>
			<!-- <button class="burger" onclick="toggleMenu()"></button> -->
		</div>
	</header>