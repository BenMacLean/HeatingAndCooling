<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Hale\'s
*/

get_header(); ?>
<div id="content" class="site-content">



  <!--
  <div class="north hackery"></div>
  <div class="south hackery"></div>
  <div class="east hackery"></div>
  <div class="west hackery"></div> -->








  <div class="weird-box horizontal-spacer"></div>
  <div class="middle-container">
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

        <div class="slideshow-wrapper-mid">
          <?php do_action('slideshow_deploy', '46'); ?>
        </div>

      </div>
    <div class="dib right-promo">
      <img id="promo" src="<?php echo(get_template_directory_uri()); ?>/images/right-promo-img.png" alt="" />
      <img id="promo-sub" src="<?php echo(get_template_directory_uri()); ?>/images/promo-sub.png" alt="" />
      <img id="promo-txt" src="<?php echo(get_template_directory_uri()); ?>/images/right-promo-txt.png" alt="" />



      <!-- <span class="arial-narrow">Done. Right.<br>&nbsp;<span class="guar">GUARANTEED.</span></span><br> -->
      <!-- <span class="arial">We are a Carrier® Factory-Authorized Dealer – a distinction we don’t take lightly. Carrier backs every install with a 100% satisfaction guarantee. If, for any reason, you are dissatisfied with your Carrier equipment within one year of the installation date, we will correct the problem or remove the equipment and refund your purchase price.</span> -->
    </div>
  </div>

  <div class="weird-box lower-container">
    <div class="weird-inner-box small-gallery">

      <div class="cst-left-gallery">
        <div class="absolute-container">
          <div class="slideshow-wrapper-low lower-gallery">
            <?php do_action('slideshow_deploy', '53'); ?>
          </div>
        </div>
      </div>

    </div>

    <div class="weird-inner-box small-gallery">
      <div class="cst-center-gallery">
        <div class="absolute-container">
          <div class="slideshow-wrapper-low lower-gallery">
            <?php do_action('slideshow_deploy', '54'); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="weird-inner-box small-gallery">
      <div class="cst-right-gallery">
        <div class="absolute-container">
          <div class="slideshow-wrapper-low lower-gallery">
            <?php do_action('slideshow_deploy', '55'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer"></div>














  <!-- <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main"> -->

  <!-- <img src="<?php echo(get_template_directory_uri()); ?>/images/red-bar.png" alt="" />
  <ul>
  <li><a href="www.haleshnc.com/about/">About<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com/blog/">Blog<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com/contact/">Contact<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com/gallery/">Gallery<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com">Home Page<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com/products/">Products<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com/services/">Services<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
  <li><a href="www.haleshnc.com/specials/">Specials<img src="<?php echo(get_template_directory_uri()); ?>/images/red-button.png" alt="" /></a></li>
</ul> -->


<!-- <img src="<?php echo(get_template_directory_uri()); ?>/images/red-bar-bottom.png" alt="" />


<img src="<?php echo(get_template_directory_uri()); ?>/images/red-bar-vertical.png" alt="" />
<img src="<?php echo(get_template_directory_uri()); ?>/images/red-bar-vertical2.png" alt="" />
<img src="<?php echo(get_template_directory_uri()); ?>/images/red-bar-vertical3.png" alt="" />

<img src="<?php echo(get_template_directory_uri()); ?>/images/red-bar-bottom-bottom.png" alt="" /> -->
<!-- <div class="hometealbox.png">
<img src="<?php echo(get_template_directory_uri()); ?>/images/hometealbox.png">
</div> -->
<!-- <nav role="navigation">
<h2>Main Navigation</h2>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->





<!-- </main><!-- #main -->
<!-- </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
