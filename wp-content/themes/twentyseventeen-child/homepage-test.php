<?php
/**
 * Template Name: Homepage - Generic Test
 *
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
<style>
    .site-content-contain{
        /*        margin-top: -104px;*/
        /*z-index: -1;*/
    }
    .modal-content iframe {
        margin: 0 auto;
        display: block;
    }
    main.site-main {
        margin-top: -104px !important;
    }
	.gen-learn-more{
		text-align:right;
		height:0px;
	}
	.gen-learn-more a{
		display:inline-block;
		margin-top:25px;
	}
    
</style>
<div class="banner">
    <div class="container banner-desktop" style="position: relative;">
        <div class="banner-text rvl-left">
            <div class="empty-div">

            </div>
            <div class="banner-text-content">
                <h3><?php echo get_field("banner_title"); ?></h3>
                <p><?php echo get_field("banner_description"); ?></p>
                <a class="learn-more-link" href="<?php echo get_field("banner_link"); ?>"><?php echo get_field("button_name"); ?> <img class="arrow-right" src="/wp-content/uploads/2018/10/right0arrow.png"/></a>
            </div>
        </div>
    </div>
    <?php 
    $banner_video=get_field("video_url");
    /*if(!empty($banner_video)){?>
    <video  autoplay muted loop id="banner_video_top">
    <source src="<?php echo $banner_video;?>" type="video/mp4">
    <source src="<?php echo $banner_video;?>" type="video/ogg">
    Your browser does not support the video tag.
    </video>
    <?php }else{ */ ?>
    <img class="banner_image" src="<?php echo get_field("banner_image"); ?>"/>
    <?php // }
    ?>
    
    <div class="container banner-mobile" style="position: relative;">
        <div class="banner-text rvl-left">
            <div class="empty-div">

            </div>
            <div class="banner-text-content">
                <h3><?php echo get_field("banner_title"); ?></h3>
                <p><?php echo get_field("banner_description"); ?></p>
                <a class="learn-more-link" href="<?php echo get_field("banner_link"); ?>"><?php echo get_field("button_name"); ?> <img class="arrow-right" src="/wp-content/uploads/2018/10/right0arrow.png"/></a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container banner-thumbs">
        <div class="display-flex">
            <div class="col-md-4 banner-thumb rvl-up box-container-1">
                <div class="bg-brown" style="background-image: url('<?php echo get_field("box_1_image"); ?>');">
                    <a href="<?php echo get_field("box_1_link"); ?>">
                        <div class="box-title-1"><h4 class="box-main-title"><?php echo get_field("box_1_title"); ?></h4></div>
                        <div class="box-description-1 box-content"><h6><?php echo get_field("box_1_title"); ?></h6>
                            <?php echo get_field("box_1_description"); ?></div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 banner-thumb rvl-up box-container-2">
                <div class="bg-green" style="background-image: url('<?php echo get_field("box_2_image"); ?>');">
                    <!--<a href="<?php echo get_field("box_2_link"); ?>" class="abs">-->
                    <a href="<?php echo get_field("box_2_link"); ?>">
                        <div class="box-title-2"><h4 class="box-main-title"><?php echo get_field("box_2_title"); ?></h4></div>
                        <div class="box-description-2 box-content"> <h6><?php echo get_field("box_2_title"); ?></h6>
                            <?php echo get_field("box_2_description"); ?></div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 banner-thumb rvl-up box-container-3">
                <div class="bg-blue" style="background-image: url('<?php echo get_field("box_3_image"); ?>');">
                    <a href="<?php echo get_field("box_3_link"); ?>">
                        <div class="box-title-3"><h4 class="box-main-title"><?php echo get_field("box_3_title"); ?></h4></div>
                        <div class="box-description-3 box-content">
                            <h6><?php echo get_field("box_3_title"); ?></h6>
                            <?php echo get_field("box_3_description"); ?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="who-we-are">
            <div class="col-md-6 who-we-are-left rvl-left">
                <?php
                    $banner_video=get_field("video_url");
                    if(!empty($banner_video)){?>
                        <img class="video-thumbnail-img"src="https://www.cfsloco.org/wp-content/uploads/2023/03/video-.png"/>
                        <video id="banner_video_below_hero" style="display:none;">
                        <source src="<?php echo $banner_video;?>" type="video/mp4">
                        <source src="<?php echo $banner_video;?>" type="video/ogg">
                        Your browser does not support the video tag.
                        </video><?php }else{ ?>
                            <img src="<?php echo get_field("wwa_image"); ?>"/>
                     <?php   }
                ?>
                
                <div class="clearfix"></div>

                <?php if(!empty($banner_video)){?>
                    <a href="#video_01" class="lets-play" data-toggle="modal"><img src="https://www.cfsloco.org/wp-content/uploads/2023/03/375-1.png"/></a>
                <?php } ?>
                <div class="col-md-offset-2 col-md-10 img-caption">
                    <a href="#"><?php echo get_field("wwa_image_caption"); ?></a>
                </div>
				<div class="clearfix"></div>
				<div class="gen-learn-more" >
                    <a class="learn-more-link white-link" href="<?php echo get_field("wwe_learn_more_button_link"); ?>"><?php echo get_field("wwe_learn_more"); ?> <img class="arrow-right" src="/wp-content/uploads/2018/10/bluearrow_03.png"/></a>
				</div>	
            </div>

            <div class="col-md-6 who-we-are-right rvl-right">
                <div class="col-md-10 custom-padding">
                    <h2><?php echo get_field("wwa_title"); ?></h2>
                    <p><?php echo get_field("wwa_description"); ?></p>
                    <?php
                    $wwa_button_donate_name = get_field("wwa_button_donate_name");
                    $wwa_donate_button_link = get_field("wwa_donate_button_link");
                    if(!empty($wwa_donate_button_link) && !empty($wwa_donate_button_link)){
                    ?>
                    <div class="btn_sec_tw">
                    <a class="learn-more-link bottom-left-link" href="<?php echo $wwa_donate_button_link; ?>">
                        <?php echo $wwa_button_donate_name; ?>
                    </a>
                    <?php } ?>
                    <a class="learn-more-link white-link" href="<?php echo get_field("wwa_button_link"); ?>"><?php echo get_field("wwa_button_name"); ?> <img class="arrow-right" src="/wp-content/uploads/2018/10/bluearrow_03.png"/></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="join dark-brown-bg rvl-up">
            <div class="container">
                <h2><?php echo get_field("cf__title"); ?></h2>
                <div class="join-options">
                    <ul> 
                        <?php
// check if the repeater field has rows of data
                        if (have_rows('section_links')):

                            // loop through the rows of data
                            while (have_rows('section_links')) : the_row();
                                ?>

                                <li>
                                    <a href="<?php echo the_sub_field('cf_button_link'); ?>" class="learn-more-link transparent-link "> <?php echo the_sub_field('cf_button_name'); ?></a>
                                </li> 
                                <?php
                            endwhile;

                        else :

                        // no rows found

                        endif;
                        ?>



                        <!--                        <li>
                                                    <a href="#" class="learn-more-link transparent-link ">Create A <br/>Charitable Fund</a>
                                                </li> 
                                                <li>
                                                    <a href="#" class="learn-more-link transparent-link ">Apply For A <br/>Scholarship</a>
                                                </li> 
                                                <li>
                                                    <a href="#" class="learn-more-link transparent-link  ">Apply For A <br/>Grant</a>
                                                </li> 
                                                <li>
                                                    <a href="#" class="learn-more-link transparent-link  ">Opportunity For A <br/>Giving</a>
                                                </li> 
                                                <li>
                                                    <a href="#" class="learn-more-link transparent-link  ">Follow Us On <br/>Facebook</a>
                                                </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="options">
            <div class="display-flex">
                <div class="col-md-5 options-left rvl-left">
                    <div class="col-md-12 upside-photo" style="padding: 0">
                        <img src="<?php echo get_field("student_image"); ?>"/>
                        <div class="clearfix"></div>

                        <div class="col-md-offset-2 col-md-10 img-caption">
                            <a href="<?php echo get_field("student_button_link"); ?>"><?php echo get_field("student_image_caption"); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 inline-flex options-right rvl-right">
                    <div class="col-md-10 custom-padding">
                        <h3><?php echo get_field("student_title"); ?></h3>
                        <p><?php echo get_field("student_description"); ?></p>
                        <a style="background-color: transparent" class="learn-more-link white-link bottom-left-link" href="<?php echo get_field("student_button_link"); ?>"><?php echo get_field("student_button_name"); ?> <img class="arrow-right" src="/wp-content/uploads/2018/10/bluearrow_03.png"/></a>
                    </div>
                </div>

            </div>
            <div class="container rvl-up">
                <hr class="options-seperator"/>
            </div>
            <div class="display-flex sec-flex text-right rvl-left" style="padding-bottom: 38px;">
                <div class="col-md-7 inline-flex options-right" style="">
                    <div class="col-md-offset-2 col-md-10 custom-padding">
                        <h3><?php echo get_field("foi_title"); ?></h3>
                        <p><?php echo get_field("foi_description"); ?></p>
                        <a style="background-color: transparent" class="learn-more-link white-link bottom-right-link" href="<?php echo get_field("foi_button_link"); ?>#"><?php echo get_field("foi_button_name"); ?> <img class="arrow-right" src="/wp-content/uploads/2018/10/bluearrow_03.png"/></a>
                    </div>
                </div>
                <div class="col-md-5 options-left inline-flex rvl-right" style="padding-bottom: 50px;">
                    <div class="col-md-12 donwnside-photo" style="padding: 0">
                        <img src="<?php echo get_field("foi_image"); ?>" class="donwnside-photo"/>
                        <div class="clearfix"></div>

                        <div class="col-md-offset-2 col-md-10 img-caption" style="bottom: -72px;">
                            <a href="#"><?php echo get_field("foi_image_caption"); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="text-center">News & Events</h2>



                        <div class="owl-carousel owl-theme rvl-up">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 10,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field'    => 'slug',
                                        'terms'    => 'news-events',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()) : $query->the_post();
                                ?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="slide-date">
                                                <a href="<?php the_permalink() ?>" style="text-decoration: none">
                                                    <?php if (get_field("display_type") == 'Event') { ?>
                                                        <span class="date-day"> <?php echo get_field("event_month"); ?></span>
                                                        <h4 class="date-month">
                                                            <?php echo get_field("event_date"); ?>
                                                        </h4> <?php } else { ?>
                                                        <span class="event-icon">
                                                            <img class="news_date-icon" src="<?php echo get_field("event_icon"); ?>">
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 slide-content">
                                            <a href="<?php the_permalink() ?>" style="text-decoration: none">
                                                <span><?php the_title(); ?></span>
                                                <p><?php the_excerpt(); ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 
    //                            <div class="item">
    //                                <div class="row">
    //                                    <div class="col-md-4">
    //                                        <div class="slide-date">
    //                                            <span class="date-day">June</span>
    //                                            <h4 class="date-month">
    //                                                25
    //                                            </h4>
    //                                        </div>
    //                                    </div>
    //                                    <div class="col-md-7 slide-content">
    //                                        <span>Lorem Ipsum</span>
    //                                        <p>consectetuer adipiscing elit, consectetuer adipiscing elit, consectetuer adipiscing elit, </p>
    //                                    </div>
    //                                </div>
    //                            </div>
    //                            <div class="item">
    //                                <div class="row">
    //                                    <div class="col-md-4">
    //                                        <img src="/wp-content/uploads/2018/10/paper-icon.png" class="img-responsive">
    //                                    </div>
    //                                    <div class="col-md-7 slide-content">
    //                                        <span>Lorem Ipsum</span>
    //                                        <p>consectetuer adipiscing elit, consectetuer adipiscing elit, consectetuer adipiscing elit, </p>
    //                                    </div>
    //                                </div>
    //                            </div>
    //                            <div class="item">
    //                                <div class="row">
    //                                    <div class="col-md-4">
    //                                        <div class="slide-date">
    //                                            <span class="date-day">June</span>
    //                                            <h4 class="date-month">
    //                                                25
    //                                            </h4>
    //                                        </div>
    //                                    </div>
    //                                    <div class="col-md-7 slide-content">
    //                                        <span>Lorem Ipsum</span>
    //                                        <p>consectetuer adipiscing elit, consectetuer adipiscing elit, consectetuer adipiscing elit, </p>
    //                                    </div>
    //                                </div>
    //                            </div>
    //                            <div class="item">
    //                                <div class="row">
    //                                    <div class="col-md-4">
    //                                        <img src="/wp-content/uploads/2018/10/paper-icon.png" class="img-responsive">
    //                                    </div>
    //                                    <div class="col-md-7 slide-content">
    //                                        <span>Lorem Ipsum</span>
    //                                        <p>consectetuer adipiscing elit, consectetuer adipiscing elit, consectetuer adipiscing elit, </p>
    //                                    </div>
    //                                </div>
    //                            </div>
    //                            <div class="item"> 
    //                                <div class="row">
    //                                    <div class="col-md-4">
    //                                        <div class="slide-date">
    //                                            <span class="date-day">June</span>
    //                                            <h4 class="date-month">
    //                                                25
    //                                            </h4>
    //                                        </div>
    //                                    </div>
    //                                    <div class="col-md-7 slide-content">
    //                                        <span>Lorem Ipsum</span>
    //                                        <p>consectetuer adipiscing elit, consectetuer adipiscing elit, consectetuer adipiscing elit, </p>
    //                                    </div>
    //                                </div>
    //                            </div>-->

                            <?php endwhile;
                            ?>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
// Show the selected frontpage content.
//		if ( have_posts() ) :
//			while ( have_posts() ) : the_post();
//				get_template_part( 'template-parts/page/content', 'front-page' );
//			endwhile;
//		else :
//			get_template_part( 'template-parts/post/content', 'none' );
//		endif; 
        ?>

        <?php
        // Get each of our panels and show the post data.
//		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.
//
//			/**
//			 * Filter number of front page sections in Twenty Seventeen.
//			 *
//			 * @since Twenty Seventeen 1.0
//			 *
//			 * @param int $num_sections Number of front page sections.
//			 */
//			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
//			global $twentyseventeencounter;
//
//			// Create a setting and control for each of the sections available in the theme.
//			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
//				$twentyseventeencounter = $i;
//				twentyseventeen_front_page_section( null, $i );
//			}
//
//	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here
        //. 
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
