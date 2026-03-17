<?php
/*
  Template Name: How We Can Help
 */

get_header();
?>
<style>
    .site-content{
        padding-top: 0;
    }
    .funds .icon-search{
        display: none;
    }
    .funds .search-submit{
        background-color: #fff;
        color: #133d42;
        font-size: 16px;
        padding: 0;
    }
    .top-text {
    margin-top: 150px;
}
</style>

<div class="banner">
    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>"/>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1  rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span><?php the_title() ?></span></div>
                <div class="clearfix"></div>
            </div> 
            <?php if (!empty(get_field("cfs_subtitle"))) { ?>
                <div class="head2 rvl-right" >
                    <div class="container" style="position: relative;z-index: 3;"><span><?php echo get_field("cs_subtitle"); ?></span></div>
                    <div class="clearfix"></div>
                </div> 
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div> 
</div>
<!--</div>-->
<div class="clearfix"></div>
<div class="top-text rvl-up">
    <div class="container">
        <h2><?php echo get_field("partnership_title"); ?></h2>
        <p><?php echo get_field("partnership_description"); ?></p>
    </div>
</div>
<div class="overflow">
    <div class="full-with-image image-text-align">
        <div class="rvl-left col-md-5 full-with-image-left rvl-left padding0">
            <img src="<?php echo get_field("client_image"); ?>"/>
            <div class="clearfix"></div>

            <div class="col-md-offset-2 col-md-10 img-caption">
                <a href="#"><?php echo get_field("help_client_image_caption"); ?></a>
            </div>
        </div>
        <div class="rvl-right col-md-7 full-with-image-right rvl-right">
            <div class="col-md-10 custom-padding">
                <h3><?php echo get_field("help_client_title"); ?></h3>
                <div class="right-side-img-ul">
                <ul>
                    <?php
// check if the repeater field has rows of data
                    if (have_rows('reasons_list')):

                        // loop through the rows of data
                        while (have_rows('reasons_list')) : the_row();
                            ?>

                            <li><strong><?php echo the_sub_field('client_list_title'); ?>:</strong>  <?php echo the_sub_field('client_list_description'); ?> </li>
                            <?php
                        endwhile;

                    else :

                    // no rows found

                    endif;
                    ?>
                </ul>
                </div>
                <a class="learn-more-link bottom-left-link" href="<?php echo get_field("clients_button_link"); ?>"><?php echo get_field("clients_button_name"); ?></a>
            </div>
        </div>
    </div>
    <div class="clearfix">

    </div>
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
</div>
<!--</div>-->


<!-- footer links End -->
<div class="clearfix"></div>

<?php
get_footer();
?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.funds .search-submit').addClass('fa fa-search');
        $(".funds-search .search-field").attr("placeholder", "Search Our Funds");
        $(".menu-item").removeClass("current-menu-item");
        $(".about-us").addClass("current-menu-item");

        $(function () {

            var a = function () {
                var b = $(window).scrollTop();
                var d = $("#scroller-anchor").offset().top;
                var f = $("#funds-scroll").offset().top;
                var c = $(".connect");
                var h = $(".connect").width() + 110; // margin

                if (b > d) {
                    var myTop = $(window).scrollTop() + 174;
                    if (myTop > f - h) {
                        myTop = f - h;

                    }
                    c.css({
                        position: "absolute",
                        top: myTop,
                        bottom: ""
                    });
                } else {
                    if (b <= d) {
                        c.css({
                            position: "absolute",
                            top: "",
                            bottom: ""
                        });
                    }
                }
            };
            $(window).scroll(a);
            a();
        });
        
        $(function () {

            var a = function () {
                var b = $(window).scrollTop();
                var d = $("#scroller-anchor").offset().top;
                var f = $("#funds-scroll").offset().top;
                var c = $(".connect-hidden");
                var h = $(".connect-hidden").width() + 200; // margin

                if (b > d) {
                    var myTop = $(window).scrollTop() + 174;
                    if (myTop > f - h) {
                        myTop = f - h;

                    }
                    c.css({
                        position: "absolute",
                        top: myTop,
                        bottom: ""
                    });
                } else {
                    if (b <= d) {
                        c.css({
                            position: "absolute",
                            top: "",
                            bottom: ""
                        });
                    }
                }
            };
            $(window).scroll(a);
            a();
        });
    });
</script>
