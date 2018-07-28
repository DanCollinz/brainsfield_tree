<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head blah>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link rel='stylesheet' id='twentyseventeen-style-overide-css'  href='https://bransfieldtree/wp-content/themes/twentyseventeen/overides.css' type='text/css' media='all' />

</head>

<body <?php body_class(); ?>>
<div id="page" class="site bransfield">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<?php if ( has_nav_menu( 'top' ) ) : ?>
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
			<div class="navigation-top site-navigation-fixed">
				<div class="wrap">
						<div class="logo"><img src="https://bransfieldtree/wp-content/uploads/2018/07/cropped-cropped-Logo-100.jpg" height="50px" width="50px"></div>
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						<div class="social-nav-wrap">
							<nav class="social-nav">
								<ul>
									<li style="display:inline-block"><a href="https://www.facebook.com/blah" rel="nofollow"><i class="icons-facebook"></i>facebook</a></li>
										<li style="display:inline-block"><a href="https://www.twitter.com/blah" rel="nofollow"><i class="icons-twitter"></i>twitter</a></li>
										<li style="display:inline-block"><a href="https://plus.google.com/110112098290543938009/about" rel="nofollow"><i class="icons-google-plus">Google</i></a></li>
										<li style="display:inline-block"><a href="http://pinterest.com/blah" rel="nofollow"><i class="icons-pinterest"></i>Pinterest</a></li>
								</ul>
							</nav>
					</div>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
	</header><!-- #masthead -->
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
