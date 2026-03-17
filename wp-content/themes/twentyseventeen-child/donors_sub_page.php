<?php
/* Template Name: donors_sub_page */ 

get_header(); ?>
<style>
    .banner{
        margin-bottom: 100px;
    }
    .entry-content{
        width: 100% !important;
    }
</style>
<div class="banner">
 <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>"/>
    <?php
    
    global $wp_query;
    $pageid = $wp_query->post->ID;
//   $slider_short_code = get_field( "doner_sub_page_slider", $pageid );
//    echo do_shortcode($slider_short_code); ?>
    <!--echo do_shortcode('[wonderplugin_slider id=1]'); ?>-->
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1  rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span><?php the_title() ?></span></div>
                <div class="clearfix"></div>
            </div> 
            <?php if (!empty(get_field("cs_subtitle"))) { ?>
                <div class="head2 rvl-right" >
                    <div class="container" style="position: relative;z-index: 3;"><span><?php echo get_field("cs_subtitle"); ?></span></div>
                    <div class="clearfix"></div>
                </div> 
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div> 
</div>
<div class="clearfix"></div>
<div class="container">
	<div id="primary" class="content-area">
		<!--<main id="main" class="site-main" role="main">-->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

<!---->		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="row funds">
        <div class="container" id="funds-scroll">
            <h2 class="pull-left">
                <?php echo get_field("hws_title"); ?>
            </h2>
            <div class="funds-search pull-right">
                <?php echo get_search_form(); ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <div class="container-fluid">
            <div class="row display-flex">
                <?php
                $numOfCols = 3;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols;

                $args = array(
                    'category_name' => 'how-we-serve',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="col-md-4 inline-flex">
                        <a href="<?php echo get_permalink(); ?>" class="blurb-link">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> "/>
                            <div class="blurb-content">
                                <h4><?php the_title(); ?></h4>
                                <div class="line-container">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    $rowCount++;
                    if ($rowCount % $numOfCols == 0)
                        echo '</div></div><div class="container-fluid"><div class="row display-flex">';
                    ?>
                <?php endwhile;
                ?> 
            </div>
        </div>
       
</div>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.funds .search-submit').addClass('fa fa-search');
        $(".funds-search .search-field").attr("placeholder", "Search Your Funds");
    });
        </script>
<?php get_footer();
