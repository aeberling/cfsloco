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
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/owl.carousel.css">
        <!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/docs.theme.min.css">-->
        <?php wp_head(); ?>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.js"></script>
            <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/7717c017ce85dbfbf55940790/06f9109a2a696bf4e154c9ee2.js");</script>
                <?php  if(is_post_type_archive('research')) { ?>
                    	    <meta property="og:image" content="<?php echo get_field('research_featured_image', 'options'); ?>" />
                <?php  } else if (is_tax('research_category')) { 
                            $current_term = get_queried_object(); // Get the current term object
                            $pbanner = get_field('category_banner', $current_term);
                ?>
                    	    <meta property="og:image" content="<?php echo $pbanner; ?>" />
                <?php  } else if (has_post_thumbnail()) { ?>
                    	    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" />
                <?php  } ?>
    
    </head>

    <body <?php body_class(); ?> id='here'>
        <div id="page" class="site container-fluid">
            <div class="row" id="hererere">
            <!--<a class="skip-link screen-reader-text" href="#content"><?php // _e('Skip to content', 'twentyseventeen');     ?></a>-->
                        	 <div id="scroller-anchor"></div>

                <header id="masthead" class="" role="banner">
                    <div class="header-bar-1">
                         <div class="container text-center" id="popup-response">
                            <p> Thank you, your sign-up request was successful! Please check your email inbox to confirm. </p>
                        </div> 
                        <div class="container">
                            <!--<div class="pull-left">-->
                            <div class="header-socials">
                                <?php dynamic_sidebar('header-social-icons'); ?>
                                <div class="google_trans_topbar"><?php echo do_shortcode('[gtranslate]'); ?></div>

                            </div>
                            <!--                            <label class="link-text pull-left follow-txt">Follow us on</label>
                                                        <div class="social-icon pull-left text-center">
                                                            <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
                                                            </a>
                                                        </div>-->
                            <div class="top-bar-right">
                                <div class="green-links-cont pull-right">
                                    <?php dynamic_sidebar('header-top-buttons'); ?>

                                    <!--                                <a href="#" class="green-links pull-right link-text">
                                                                        News Letter Sign-up
                                                                    </a>
                                    
                                                                    <a href="#" class="green-links pull-right link-text give-now-btn">
                                                                        Give Now
                                                                    </a>-->
                                    
                                    

                                </div>
                            </div>    
                            <div class="top-menu-links hide-on-mobile"  > 
                                
                                <div class="misc text-right pull-right">
                                    
                                    <div class="hidden-search showsearch">
                                        <?php echo get_search_form(); ?>
                                    </div>
                                    <?php //wp_nav_menu(array('theme_location' => 'top-menu')); ?>
<!--                                    <a href="#" class="search-icon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>-->
                                    <a href="/about-us/staff/" class="link-text">Contact us</a>
                                </div>
                            </div>
                           
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="menu-logo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php dynamic_sidebar('header-logo1'); ?>
                               <!-- <a href="<?php echo home_url() ?>" class="logo">
                                        <img src="/wp-content/uploads/2018/10/logo-1.png" class="logo-main"/>
                                    </a>
                                    <img src="/wp-content/uploads/2018/10/20years.png" class="ext-logo"/>-->
                                </div>
                                <div class="col-md-8">
                                    <div class="main-menu">
                                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

                                        <!--                                        <ul class="menu">
                                                                                    <li class="menu-item about-us">
                                                                                        <a href="/how-we-can-help">About Us</a>
                                                                                    </li>
                                                                                    <li class="menu-item current-menu-item">
                                                                                        <a href="#">Donors</a>
                                                                                    </li>
                                                                                    <li class="menu-item">
                                                                                        <a href="/charitable-solutions/">Advisors</a>
                                                                                    </li>
                                                                                    <li class="menu-item">
                                                                                        <a href="#">Non Profits</a>
                                                                                    </li>
                                                                                    <li class="menu-item">
                                                                                        <a href="#">Students</a>
                                                                                    </li>
                                                                                    <li class="menu-item">
                                                                                        <a href="#">Impact</a>
                                                                                    </li>
                                                                                </ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //get_template_part('template-parts/header/header', 'image'); ?>



                </header><!-- #masthead -->

                <?php
                /*
                 * If a regular post or page, and not the front page, show the featured image.
                 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
                 */
                if (( is_single() || ( is_page() && !twentyseventeen_is_frontpage() ) ) && has_post_thumbnail(get_queried_object_id())) :
//                    echo '<div class="single-featured-image-header">';
//                    echo get_the_post_thumbnail(get_queried_object_id(), 'twentyseventeen-featured-image');
//                    echo '</div><!-- .single-featured-image-header -->';
                endif;
                ?>                
                <div class="site-content-contain">
                    <div id="content" class="site-content">