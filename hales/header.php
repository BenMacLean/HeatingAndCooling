<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hale\'s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Hale's Heating and Cooling</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'hales' ); ?></a>





	<div class="header">
		<div class="wrapper">
			<h1 class="logo">Hale's Heating and Cooling</h1>
			<!-- <nav role="navigation">
				<h2>Main Navigation</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->


		</div><!-- .wrapper -->


	</div><!-- header -->
