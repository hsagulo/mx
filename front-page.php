<?php
//do not add in opening php tag
 
/**
 * @package MX
 * @author Harold Lupogan
 * @link http://onlinecrew.info
 */
 
cgp_genesis_no_content();
function cgp_genesis_no_content() {
 cgp_genesis_header();
 custom_front_page_loop();
 cgp_genesis_footer();
}
//Customised Genesis Header
function cgp_genesis_header() {
 do_action( 'genesis_doctype' );
 do_action( 'genesis_title' );
 do_action( 'genesis_meta' );
 
 wp_head(); //* we need this for plugins
 ?>
 </head>
 <?php
 genesis_markup( array(
 'html5' => '<body %s>',
 'xhtml' => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
 'context' => 'body',
 ) );
 do_action( 'genesis_before' );

 genesis_markup( array(
 'html5' => '<div %s>',
 'xhtml' => '<div id="wrap">',
 'context' => 'site-container',
 ) );

 echo '<div class="header-section text-center row">';

 do_action( 'genesis_before_header' );
 do_action( 'genesis_header' );
 do_action( 'genesis_after_header' );

 echo '<a href="#section-about"><i class="fa fa-2x fa-chevron-down"></i></a>';

 echo '</div>';
 
 genesis_markup( array(
 'html5' => '<div %s>',
 'xhtml' => '<div id="inner">',
 'context' => 'content-wrapper',
 ) );
 genesis_structural_wrap( 'content-wrapper' );
}


add_action( 'genesis_after_header', 'custom_front_page_loop');
function custom_front_page_loop() {

    ?>

      <section class="row about" id="section-about">
        <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="mb1em">About Us</h2>
            <div class="photo mb2em">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/erika.jpg" alt="" class="circle">
            </div>
            <div class="entry-content">
              <p class="mb2em">Zen is a way of being. In sports, its “the flow” or “in the zone”. If your living in the world of motocross, you can relate to this because in motocross, its not a hobby, its a way of life. In the “flow”, the extraordinary capacities that lie within each individual manifest. The grasp this hidden dimension is to transform the very meaning of racing. “What separates the gold medalists from the silver medalists is simply the mental game.” </p>
              <p class="mb2em"><a href="/about" class="btn btn-danger btn-lg">Read More</a></p>
            </div>
          </div>
        </div>
      </section>

      <section class="row projects text-center" id="section-projects">
        <div class="container">
          <header class="entry-header">
            <h2 class="entry-title">Projects</h2>
          </header>
          <div class="col-md-4 col-sm-6 item">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/resume_caseycochrans.jpg" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/resume_caseycochran.jpg" alt=""></a>
          </div>
          <div class="col-md-4 col-sm-6 item">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/resume_kyle_v1.jpg" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/KyleBorn_v1.jpg" alt=""></a>
          </div>
          <div class="col-md-4 col-sm-6 item">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/resume_kyle_v2.jpg" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/KyleBorn_v2.jpg" alt=""></a>
          </div>
          <div class="col-md-4 col-sm-6 item">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/mockup_kylebitterman.jpg" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio_item.jpg" alt=""></a>
          </div>
          <div class="col-md-4 col-sm-6 item">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/kylebitterman_v1_full.jpg" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb_mockup.jpg" alt=""></a>
          </div>
          <div class="col-md-4 col-sm-6 item">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/kylebitterman_mockup_tab_mobile.jpg" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mockup_kylebitterman_thumb_mob.jpg" alt=""></a>
          </div>

          <!-- <p class="mb2em"><a href="#" class="btn btn-danger btn-lg">Order Now</a></p>-->
        </div>
      </section>

      <section class="row newsletter text-center" id="section-newsletter">
        <div class="container">
          <div class="col-md-10 col-md-offset-1">
            <header class="entry-header">
              <h2 class="entry-title">Newsletter</h2>
              <p><em>Stay updated with our latest events and promos! </em></p>
            </header>
            <div class="entry-content">
            <?php echo do_shortcode('[contact-form-7 id="12" title="Newsletter"]') ?>
            </div>
          </div>
        </div>
      </section>

      <section class="row shop" id="section-shopcta">
        <div class="container">
          <div class="col-md-12 entry-content">
            <div class="col-md-6 col-md-offset-6">
              <h2>Motocross Safety Gear and Accessories </h2>
              <a href="http://www.bornracingmx.com" title="" class="btn btn-warning btn-lg" target="_blank">GO TO MX SHOP!</a>
            </div>
          </div>
        </div> 
      </section>

      <section class="row contacts text-center" id="section-footer-widgets">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <header class="entry-header mb2em">
                <h2 class="entry-title">CONTACT</h2>
                <h3><a href="tel:7178171286" target="_blank">717-817-1286</a> / <a href="mailto:erika@mxzen.com" target="_blank">erika@mxzen.com</a></h3>
                <p class="name">ERIKA BORN</p>
              </header>
              <div class="entry-content">
                <?php echo do_shortcode('[contact-form-7 id="13" title="Contact"]'); ?>
              </div>
            </div>
          </div>

          <div class="row socials" id="section-social">
            <h2>SOCIALS</h2>
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/bornracingmx" title="" target="_blank"><span class="fb"><i class="fa fa-lg fa-facebook-f"></i></span></a></li>
              <li><a href="https://twitter.com/borngroup" title="" target="_blank"><span class="tw"><i class="fa fa-lg fa-twitter"></i></span></a></li>
              <li><a href="https://www.instagram.com/bornracingmx/" title="" target="_blank"><span class="ig"><i class="fa fa-lg fa-instagram"></span></i></a></li>
              <li><a href="https://plus.google.com/+ErikaBorn464" title="" target="_blank"><span class="lin"><i class="fa fa-lg fa-google-plus"></span></i></a></li>
              <li><a href="#" title="" target="_blank"><span class="ho"><i class="fa fa-lg fa-hype"></i></span></a></li>
            </ul>
          </div>
        </div>
      </section>


    <?php

}



//Customised Genesis Footer
function cgp_genesis_footer() {
 genesis_structural_wrap( 'content-wrapper', 'close' );
 echo '</div>'; //* end .site-inner or #inner
 
 do_action( 'genesis_before_footer' );
 do_action( 'genesis_footer' );
 do_action( 'genesis_after_footer' );
 
 echo '</div>'; //* end .site-container or #wrap
 
 do_action( 'genesis_after' );
 wp_footer(); //* we need this for plugins
 ?>
 </body>
 </html>
<?php
 }