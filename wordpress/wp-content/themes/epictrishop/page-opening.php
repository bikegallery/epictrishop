<?php
/**
 *
 * Template Name: Store Opening Page
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

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<section class="container">
		<header class="header row">
			<section class="threecol">
				<a href="/" class="header_logo"><img src="/wordpress/wp-content/themes/epictrishop/images/epictrishop_logo.png" alt="Epic Tri Shop" /></a>
			</section><!-- .threecol -->
			<section class="ninecol opening last">
				<h1>
					Opening January 17th, 2012!
				</h1>
<!--				<p><?php bloginfo( 'description' ); ?></p> -->

			</section><!-- .twelvecol -->
		</header><!-- .row -->

		<section class="row">

			<section class="threecol content">

				<ul>
					<li><h3>Hours</h3></li>
					<li>Mon&nbsp;&ndash;&nbsp;Sat: 10am to 6pm</li>
					<li>Sun: Noon to 5pm</li>
				</ul>

				<ul>
					<li><h3>Location</h3></li>
					<li><address>12345 SW Canyon Blvd Beaverton, OR 97005</address></li>
					<li><a href="http://g.co/maps/a9xxq" title="Google Map" target="_blank">Map</a></li>
				</ul>

			</section><!-- .threecol .content -->

			<section class="ninecol content last">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>


				<?php endwhile; ?>

<?php get_footer(); ?>
