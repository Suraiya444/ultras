<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <title>Ultras - Clothing Store eCommerce Store HTML Website Template</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <?php wp_head();?>
  </head>
  <body  <?php body_class(); ?>>

    <!-- <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div> -->

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
          <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
          <button type="submit" class="search-submit"><a href="#"><i class="<?= get_template_directory_uri() ?>icon icon-search"></i></a></button>
        </form>

       
      
      </div>
    </div>
    <header id="header">
      <div id="header-wrap">
         
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                <a class="navbar-brand" href="<?= esc_url( home_url() ); ?>">
                <img src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="" width="100px">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <!-- <ul class="menu-list">

                      <li class="menu-item has-sub">
                        <a href="<?= get_template_directory_uri() ?>/index.html" class="item-anchor active d-flex align-item-center" data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="<?= get_template_directory_uri() ?>/index.html" class="item-anchor active">Home</a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/home2.html" class="item-anchor">Home v2<span class="text-primary"> (PRO)</span></a></li>
                        </ul>
                      </li>

                      <li><a href="<?= get_template_directory_uri() ?>/about.html" class="item-anchor" data-effect="About">About</a></li>

                      <li class="menu-item has-sub">
                        <a href="<?= get_template_directory_uri() ?>/shop.html" class="item-anchor d-flex align-item-center" data-effect="Shop">Shop<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="<?= get_template_directory_uri() ?>/shop.html" class="item-anchor">Shop</a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/shop-slider.html" class="item-anchor">Shop slider<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/shop-grid.html" class="item-anchor">Shop grid<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/shop-list.html" class="item-anchor">Shop list<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/single-product.html" class="item-anchor">Single product<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/cart.html" class="item-anchor">Cart<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/wishlist.html" class="item-anchor">Wishlist<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/checkout.html" class="item-anchor">Checkout<span class="text-primary"> (PRO)</span></a></li>
                        </ul>
                      </li>

                      <li class="menu-item has-sub">
                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Pages">Pages<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="<?= get_template_directory_uri() ?>/coming-soon.html" class="item-anchor">Coming soon<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/login.html" class="item-anchor">Login<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/faqs.html" class="item-anchor">FAQs<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/styles.html" class="item-anchor">Styles</a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/thank-you.html" class="item-anchor">Thankyou</a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/error.html" class="item-anchor">Error page<span class="text-primary"> (PRO)</span></a></li>
                        </ul>
                      </li>

                      <li class="menu-item has-sub">
                        <a href="<?= get_template_directory_uri() ?>/blog.html" class="item-anchor d-flex align-item-center" data-effect="Blog">Blog<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="<?= get_template_directory_uri() ?>/blog.html" class="item-anchor">Blog</a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/blog-sidebar.html" class="item-anchor">Blog with sidebar<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="<?= get_template_directory_uri() ?>/blog-masonry.html" class="item-anchor">Blog masonry<span class="text-primary"> (PRO)</span></a></li>
                          <li><a href="single-post.html" class="item-anchor">Single post</a></li>
                        </ul>
                      </li>

                      <li><a href="<?= get_template_directory_uri() ?>/contact.html" class="item-anchor" data-effect="Contact">Contact</a></li>

                    </ul> -->
                    <?php wp_nav_menu( array( 
                      'theme_location' => 'primary', 
                      'menu_class' => 'navbar-nav ml-auto',
                      'add_li_class'  => 'nav-item',
                      'container'=>''
                    ) ); ?>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
