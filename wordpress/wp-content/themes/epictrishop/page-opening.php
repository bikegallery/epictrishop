<?php
/**
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
				<img src="/wordpress/wp-content/themes/epictrishop/images/epictrishop_logo.png" alt="Epic Tri Shop" />
			</section><!-- .threecol -->
			<section class="ninecol opening last">
				<h1>
					Grand Opening on January 8th!
				</h1>
				<p><?php bloginfo( 'description' ); ?></p>

			</section><!-- .twelvecol -->
		</header><!-- .row -->

		<section class="row">

			<section class="threecol content">

				<h3>Store Hours</h3>
				<ul>
					<li>Mon&ndash;Sat: 10am to 6pm</li>
					<li>Sun: Noon to 5pm</li>
				</ul>

			</section><!-- .threecol .content -->

			<section class="ninecol content last">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>


				<?php endwhile; ?>


			</section><!-- .ninecol .content -->
		</section><!-- .row .last -->
		
		<footer class="row">
			Part of the <a href="http://bikegallery.com" title="Bike Gallery">Bike Gallery</a> family
		</footer><!-- .row -->
	</section><!-- .container -->

<?php wp_footer(); ?>

</body>
</html>
