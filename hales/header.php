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
<title>Hale's Heating and Cooling</title>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<div class="absolute-container">
		</div>
			<div class="wrapper">
				<div class="header">
					<div class="header-info">
						<img id="phonenumber" src="<?php echo(get_template_directory_uri()); ?>/images/phonenumber.png" alt="" />
						<img id="facebook" src="<?php echo(get_template_directory_uri()); ?>/images/facebook.png" alt="" />
						<img id="twitter" src="<?php echo(get_template_directory_uri()); ?>/images/twitter.png" alt="" />
					</div>
				<h1 class="logo">Hale's Heating and Cooling</h1>
			</div>

			<div class="slideshow-wrapper">
				<?php do_action('slideshow_deploy', '29'); ?>
			</div>
		</div>


		<div id="content" class="site-content">
