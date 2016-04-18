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
<div class="middle-container page-middle-container <?php echo get_query_var("pagename") ?>">
  <div class="dib button-list">
    <div class="about-extended">
     <a href="http://www.haleshnc.com/about"><div class="about weird-box cst-button">About</a></div>
     <a href="http://www.haleshnc.com/contact"><div class="contact-hidden weird-box cst-button">Contact</a></div>
     <a href="http://www.haleshnc.com/haleisms"><div class="hales-hidden weird-box cst-button">Hales'isms</a></div>
     <a href="http://www.haleshnc.com/service-areas"><div class="service-areas-hidden weird-box cst-button nav-smaller-text">Service Areas</a></div>
     <a href="http://www.haleshnc.com/payment-options"><div class="payment-options-hidden weird-box cst-button nav-smaller-text">Payment Options</a></div>
    </div>
   <div class="services-extended">
     <a href="http://www.haleshnc.com/services"><div class="services weird-box cst-button">Services</a></div>
     <a href="http://www.haleshnc.com/installation"><div class="installation-hidden weird-box cst-button">Installation</a></div>
     <a href="http://www.haleshnc.com/maintenance"><div class="maintenance-hidden weird-box cst-button">Maintenance</a></div>
     <a href="http://www.haleshnc.com/commercial"><div class="commercial-hidden weird-box cst-button">Commercial</a></div>
   </div>
   <div class="products-extended">
     <a href="http://www.haleshnc.com/products"><div class="products weird-box cst-button">Products</a></div>
     <a href="http://www.haleshnc.com/carrier"><div class="carrier-hidden weird-box cst-button">Carrier</a></div>
     <a href="http://www.haleshnc.com/aprilaire"><div class="aprilaire-hidden weird-box cst-button">Aprilaire</a></div>
   </div>
     <a href="http://www.haleshnc.com/specials"><div class="specials weird-box cst-button">Specials</a></div>
     <a href="http://www.haleshnc.com/gallery"><div class="gallery-class weird-box cst-button">Gallery</a></div>
     <a href="http://www.haleshnc.com/reviews"><div class="reviews weird-box cst-button">Reviews</a></div>
     <a href="http://www.haleshnc.com/blog"><div class="blog-class weird-box cst-button">Blog</a></div>
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

		<!-- CONTENTS OF THE CONTACT PAGE ONLY!!! -->
	<?php if(get_query_var("pagename") == "contact"): ?>
		<!-- <div>
			<div class="form-label">
			Name
			</div>
			<input type="text" name="Name" value="">
		</div>
		<div>
			<div class="form-label">
 			Email
			</div>
			<input type="text" name="Email" value="">
		</div>
		<div>
			<div class="form-label">
 			Phone
			</div>
			<input type="text" name="Phone" value="">
		</div>
		<div>
			<div class="form-label">
 			Street Address
			</div>
			<input type="text" name="Street Address" value="">
		</div>
		<div>
			<div class="form-label">
 			City, State ZIP
			</div>
			<input type="text" name="City, State ZIP" value="">
		</div>


		<div>
			<div class="form-message">
			Message
			</div>
			<input type="text" name="Form Message" value="">
		</div>
 			<input type="button" name="Submit" value=""> -->


    <!-- <img id="drop-us" src="<?php echo(get_template_directory_uri()); ?>/images/dropusaline.png" alt="" /> -->

    <!-- <div id="love-to"><span class="love-to">We’d love to hear from you!</span> <span class="fill-out">Fill out this form and we will get back to you.</span></div> -->

<!-- <div id="address-container">
    <div id="contact-info-lawson"><span class="places-numbers">LAWSON | 816-630-0200</span> </br>
      <span class="street-address">500 Cates Dr. - Lawson, MO 64062</span></div>
    <div id="contact-info-liberty"><span class="places-numbers">LIBERTY | 816-792-3300</span> </br>
      <span class="street-address">1919 Industrial Dr., Ste. 100 - Liberty, MO 64068</span></div>
</div>
			<?php wd_contact_form_builder(2); ?> -->


      <div class="dib right-promo-contact">
        <img id="full-promo" src="<?php echo(get_template_directory_uri()); ?>/images/fullpromo.png" alt="" />
      </div>


				<?php endif; ?>
  </div>
</div>






  <!-- <span class="arial-narrow">Done. Right.<br>&nbsp;<span class="guar">GUARANTEED.</span></span><br> -->
  <!-- <span class="arial">We are a Carrier® Factory-Authorized Dealer – a distinction we don’t take lightly. Carrier backs every install with a 100% satisfaction guarantee. If, for any reason, you are dissatisfied with your Carrier equipment within one year of the installation date, we will correct the problem or remove the equipment and refund your purchase price.</span> -->
</div>






<div class="weird-box horizontal-spacer"></div>


<?php



get_footer();
