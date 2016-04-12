<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hale\'s
 */

get_header(); ?>

<div class="weird-box horizontal-spacer"></div>
<div class="middle-container page-middle-container">
  <div class="dib button-list <?php echo get_query_var("pagename") ?>">
    <div class="about weird-box cst-button"><a href="http://www.haleshnc.com/about/">About</a></div>
    <div class="services weird-box cst-button"><a href="http://www.haleshnc.com/services">Services</a></div>
    <div class="products weird-box cst-button"><a href="http://www.haleshnc.com/products">Products</a></div>
    <div class="specials weird-box cst-button"><a href="http://www.haleshnc.com/specials">Specials</a></div>
    <div class="gallery-class weird-box cst-button"><a href="http://www.haleshnc.com/gallery">Gallery</a></div>
    <div class="blog-class weird-box cst-button"><a href="http://www.haleshnc.com/blog">Blog</a></div>
    <div class="contact weird-box cst-button"><a href="http://www.haleshnc.com/contact">Contact</a></div>
  </div>


  <div class="dib secondary-gallery absolute-container">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
  </div>
</div>
<div class="weird-box horizontal-spacer"></div>





<?php

get_footer();
