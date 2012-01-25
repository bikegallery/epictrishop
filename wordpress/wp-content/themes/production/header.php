<?php
/**
 *
 * The Header for our theme.
 *
 *
 * @package WordPress
 * @subpackage epictrishop
 * @since epictrishop 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<section class="container_12">

		<header class="header">
			<div class="top_header">

				<div class="grid_9 store_info">
					<ul>
						<li>Mon&nbsp;&ndash;&nbsp;Sat: 10 to 6</li>
						<li>Sun: Noon to 5</li>

						<li>|</li>

						<li><address>12345 SW Canyon Blvd Beaverton, OR 97005</address></li>
						<li><a href="http://g.co/maps/a9xxq" title="Google Map" target="_blank">Map</a></li>
						<li>(503)828-3027</li>
					</ul>
					
				</div><!-- .grid_9 .store_info -->

				<div class="grid_3 header_widget">
					<?php if (is_active_sidebar('header-widget-area') ) : ?>
						<?php dynamic_sidebar('header-widget-area'); ?>
					<?php endif; ?>

				</div><!-- .grid_3 .header_widget -->
			<div class="clear">&nbsp;</div>
			</div><!-- .top_header -->

			<div class="grid_3 epic_logo">
				<a href="/"><img src="/wordpress/wp-content/themes/production/images/epictrishop_logo.png" alt="Epic Tri Shop logo" /></a>
			</div><!-- .grid_3 .epic_logo -->
			
			<div class="grid_9 banner_image">
				<!--<h1>
					Grand Opening January 25th 7&mdash;9pm
				</h1> -->
<!--				<p><?php bloginfo( 'description' ); ?></p> -->

			</div><!-- .grid_9 .banner_image -->
		<div class="clear">&nbsp;</div>
		</header><!-- .header -->
		

		<nav class="nav">
			<?php wp_nav_menu(); ?>
		</nav><!-- .grid_12 .nav -->
		<div class="clear">&nbsp;</div>

		<section class="viewer">
			<div class="grid_3 featured_brands">
				<a href="http://trekbikes.com/us/en/" title="Trek Bikes" target="_blank"><img src="/wordpress/wp-content/themes/epictrishop/images/trek_logo.png" alt="Trek Logo" /></a>
				<a href="http://feltbicycles.com" title="Felt Bicycles" target="_blank"><img src="/wordpress/wp-content/themes/epictrishop/images/felt_logo.png" alt="Felt Logo" /></a>
				<a href="http://bontrager.com" title="Bontrager" target="_blank"><img src="/wordpress/wp-content/themes/epictrishop/images/bontrager_logo.png" alt="Bontrager Logo" /></a>
				<a href="http://specialized.com/us/en/bc/home.jsp" title="Specialized" target="_blank"><img src="/wordpress/wp-content/themes/epictrishop/images/specialized_logo.png" alt="Specialized Logo" /></a>
			</div><!-- .grid_3 .featured_brands -->

