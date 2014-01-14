<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title>Le Jardin Francais | <?php wp_title("",true); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,600' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="thumbnail" content="http://emilyiswriting.com/wp-content/themes/emilyiswriting/images/thumbnail.png" />
	<meta name="viewport" content="width=958"> 
	<meta property="og:title" content="Emily Is Writing" />
	<meta property="og:image" content="http://emilyiswriting.com/wp-content/themes/emilyiswriting/images/screenshot.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="300" />
	<meta property="og:image:height" content="225" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header-main">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="/wp-content/themes/lejardinfrancais/images/le-jardin-francais-logo.png" alt="Le Jardin Francais" />
				</a>
			</h1>
		</div>

		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'main-navigation', 'menu_class' => 'primary' ) ); ?>
		</nav>
	</header>

	<div id="bar">	
		<div id="bar-content-wrap">
			<div id="social">
				<a href="http://www.pinterest.com/LJFBoutique/">
					<img src="/wp-content/themes/lejardinfrancais/images/icon-pinterest.png" />
				</a>
				<a href="https://www.facebook.com/lejardinfrancais">
					<img src="/wp-content/themes/lejardinfrancais/images/icon-facebook.png" />
				</a>
			</div>

			<?php if ( is_page_template('page-templates/gallery.php') || is_page_template('page-templates/seasonal.php') ) : ?>
				<ul id="seasonal-nav">
					<li>
						<a class="seasonal-item" href=""><img src="/wp-content/themes/lejardinfrancais/images/season-spring.png" />Spring</a>
					</li>
					<li>
						<a class="seasonal-item" href=""><img src="/wp-content/themes/lejardinfrancais/images/season-summer.png" />Summer</a>
					</li>
					<li>
						<a class="seasonal-item" href=""><img src="/wp-content/themes/lejardinfrancais/images/season-autumn.png" />Autumn</a>
					</li>
					<li>
						<a class="seasonal-item" href=""><img src="/wp-content/themes/lejardinfrancais/images/season-winter.png" />Winter</a>
					</li>
				</ul>
			<?php endif; ?>

		</div>
	</div>
