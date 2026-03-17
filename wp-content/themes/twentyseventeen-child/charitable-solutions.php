<?php
/*
  Template Name: Charitable Solutions
 */

get_header();
?>
<style>
    .site-content{
        padding-top: 0;
    }
</style>

<div class="banner">
    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>"/>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1 rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span><?php echo get_the_title() ?></span></div>
                <div class="clearfix"></div>
            </div> 
            <div class="head2 rvl-right" >
<!--                <div class="container" style="position: relative;z-index: 3;"><span><?php echo get_field("cs_subtitle"); ?></span></div>-->
                <div class="clearfix"></div>
            </div> 
            <div class="clearfix"></div>
        </div>
    </div> 
</div>
<!--</div>-->
<div class="clearfix"></div>

<!--</div>-->

<div class="wrap container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="top-heading rvl-up">
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile; // End of the loop. 
                ?>
            </div>
            <div class="panel-group" id="accordion">

                <?php
                $uniqueid = 1;
                $post_objects = get_field('accordion_lists');

                if ($post_objects):
                    $sub_accordian_id = 1;
                    ?>
                    <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post);
                        ?>            

                        <div class="panel panel-default">
                            <div class="panel-heading <?php
                            if ($uniqueid == 1) {
                                echo "active-panel";
                            }
                            ?>">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle toggle-upper" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $uniqueid; ?>">
                                        <span class="glyphicon <?php
                                        if ($uniqueid == 1) {
                                            echo "glyphicon-minus";
                                        } else {
                                            echo "glyphicon-plus";
                                        }
                                        ?>"></span>
                                              <?php the_title(); ?> 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-<?php echo $uniqueid; ?>" class="panel-collapse collapse <?php
                            if ($uniqueid == 1) {
                                echo "in";
                            }
                            ?>">
                                <div class="panel-body">
                                    <p><?php // the_excerpt();     ?></p>
                                    <p><?php the_content(); ?></p>
                                    <?php
                                    $f = get_the_post_thumbnail_url();
                                    ;
                                    if (!empty($f)) {
                                        ?>
                                        <div class="funds-featured"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                                        <?php
                                    }
                                    $af = get_field('featured_images');
                                    if (!empty($af)) {
                                        foreach ($af as $i) {
                                            ?>
                                            <div class="funds-featured add-featured"><img src="<?php echo $i['image']; ?>"></div>  
                                            <?php
                                        }
                                    }
                                    ?>
                                    <!-- #Sub Accordian Start -->
                                    <?php
                                    $args = array(
                                        'post_type' => 'toolkit',
                                        'posts_per_page' => -1,
                                        'post_parent' => $post->ID,
//                                        'order' => 'ASC',
//                                        'orderby' => 'menu_order'
                                    );
                                    $parent = new WP_Query($args);
//                                    print_r($parent);
                                    ?>
                                    <div class="panel-group accordion-sub" id="accordion-<?php echo $sub_accordian_id; ?>">
                                        <?php
                                        $k = 5;
                                        foreach ($parent->posts as $inner) {
                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading <?php
                                                if ($k == 1) {
                                                    echo ' active-panel';
                                                }
                                                ?>">
                                                    <h4 class="panel-title">
                                                        <a  class="accordion-toggle toggle-inner" data-toggle="collapse" data-parent="#accordion-<?php echo $sub_accordian_id; ?>" href="#collapseinner<?php echo $k ?>">
                                                            <span class="glyphicon <?php
                                                            if ($k == 1) {
                                                                echo "glyphicon-minus";
                                                            } else {
                                                                echo "glyphicon-plus";
                                                            }
                                                            ?>"></span> <?php echo $inner->post_title; ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseinner<?php echo $k ?>" class="panel-collapse collapse <?php if ($k == 1) { ?>in<?php } ?>">
                                                    <div class="panel-body">
                                                        <?php // echo $inner->post_excerpt; ?>
                                                        <?php echo $inner->post_content; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $k++;
                                        }
                                        ?>
                                    </div>   <!-- #Sub Accordian group End -->
                                </div>
                            </div>
                        </div>


                        <?php
                        $uniqueid++;
                        ?>


                        <?php
                        $sub_accordian_id++;
                    endforeach;
                    ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly       ?>
                <?php endif; ?>
            </div>
            <div class="clearfix"></div>

        </main><!-- #main -->
        <div class="clearfix"></div>
    </div><!-- #primary -->
    <div class="clearfix"></div>
</div><!-- .wrap -->
<div class="footer-links-container">

    <div class="bg-section">
        <div class="wrap container">
            <div class="Section-footer-links"> <!-- footer links End -->
                <div class="col-md-6  rvl-left">
                    <div class="footer-link_text" ><?php echo get_field("text"); ?></div>
                    <div class="footer-link_button">
                        <?php
                        $buttons = (get_field("buttons"));
                        $buttons_right = (get_field("buttons_right"));

                        foreach ($buttons as $bts) {
                            ?>
                            <a href="<?php echo $bts["button_link"]; ?>"><?php echo $bts["button_text"]; ?></a>
                        <?php }
                        ?>

                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 left-padding-footer  rvl-right">
                    <?php
                    $i = 0;
                    foreach ($buttons_right as $bts) {
                        ?>
                        <div class="footer-link_button <?php if ($i == 0) { ?>btn-left<?php } ?>">
                            <a href="<?php echo $bts["button_link"]; ?>"><?php echo $bts["button_text"]; ?></a>
                        </div>
                        <?php
                        $i++;
                    }
                    ?>

                    <!--                    <div class="footer-link_button">
                                            <a href="<?php echo get_field("investment_policy_link"); ?>"><?php echo get_field("investment_policy_name"); ?></a>
                                        </div>-->
                </div>
                <div class="clearfix"></div>
            </div> 
        </div>
    </div>
</div>
<!-- footer links End -->
<div class="clearfix"></div>
<div class="clearfix"></div>
<script>
    jQuery(document).ready(function ($) {
//        $('#accordion>.panel-default>.panel-heading>.collapse').on('shown.bs.collapse', function () {
//            $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
//        }).on('hidden.bs.collapse', function () {
//            $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
//        });

        $(".toggle-upper").click(function () {
            if (!$(this).parents('#accordion .panel-heading').hasClass('active-panel')) {
                $('#accordion .panel-heading').each(function () {
                    $(this).removeClass('active-panel');
                });
                $(this).parents('#accordion .panel-heading').addClass('active-panel');
                /////
                $('.toggle-upper .glyphicon').each(function () {
                    $(this).removeClass("glyphicon-minus").addClass("glyphicon-plus");
                });
                $(this).children('#accordion .glyphicon').addClass("glyphicon-minus").removeClass("glyphicon-plus");
            } else {
                $(this).children('#accordion .glyphicon').toggleClass("glyphicon-minus").toggleClass("glyphicon-plus");
                $(this).parents('#accordion .panel-heading').removeClass('active-panel');
            }
        });
        $(".toggle-inner").click(function () {
            if (!$(this).parents('.accordion-sub .panel-heading').hasClass('active-panel')) {
                $('.accordion-sub .panel-heading').each(function () {
                    $(this).removeClass('active-panel');
                });
                $(this).parents('.accordion-sub .panel-heading').addClass('active-panel');
                $('.toggle-inner .glyphicon').each(function () {
                    $(this).removeClass("glyphicon-minus").addClass("glyphicon-plus");
                });
                $(this).children('.accordion-sub .glyphicon').addClass("glyphicon-minus").removeClass("glyphicon-plus");
            } else {
                $(this).children('.accordion-sub .glyphicon').toggleClass("glyphicon-minus").toggleClass("glyphicon-plus");
                $(this).parents('.accordion-sub .panel-heading').removeClass('active-panel');
            }
        });
//        $(".toggle-inner").click(function () {
//            $(this).parents('.panel-heading').toggleClass('active-panel');
//            $('.accordion-inner .glyphicon').each(function(){
//                $(this).removeClass("glyphicon-minus").addClass("glyphicon-plus");
//            });
//            $(this).children('.glyphicon').addClass("glyphicon-minus").removeClass("glyphicon-plus");
//        });

    });
</script>  


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
<?php
get_footer();
