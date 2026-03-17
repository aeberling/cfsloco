<?php
/**
 * Template Name: Give Now

 * @version 1.0
 */
get_header();

function get_term_layout($term, $index) {
    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link($term);

    $taxonomy_img = get_taxonomy_image($term->term_id);
    if ($taxonomy_img == 'Please Upload Image First!') {
        $taxonomy_img = get_stylesheet_directory_uri() . '/img/give_now.png';
    }
    $link = get_category_link($term->term_id);
    $ishidetitle=get_field('hide_title_on_give_now_page', 'funds_category_'.$term->term_id);
    $give_now_content=get_field('give_now_content', 'funds_category_'.$term->term_id);
     if($term->slug == 'womens-legacy'){
        $link = get_home_url().'/donate/?fund=3966'; 
    }
    ?>
    
    <div class="donation_cat col-md-4 tt">
    <a href="<?php echo $link; ?>" class='self_link'>
        <!-- <div class="fund-overlay"></div> -->
            <img src="<?php echo $taxonomy_img; ?>">
            <?php if(empty($ishidetitle[0])){?>
            <h3><?php echo $term->name; ?> </h3>
            <?php }?>
    </a>
    <!-- <div class="donation-content">
                <h4 class="panel-title">Ways to Give</h4>
                <div style="margin-top: 6px;">
                    <?php echo $give_now_content;?>
                </div>
    </div> -->
    </div>
 
    <?php
    if($index%3==0){?>
<div class="clearfix"></div>
    <?php }
}
?>
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
    <div class="inner-banner-text" style='<?php
//        print_r(get_the_post_thumbnail_url());
    if (empty(get_the_post_thumbnail_url())) {
        echo ";margin-top:0px;margin-bottom:30px;";
    }
    ?>'>
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
        <main id="main" class="site-main" role="main">
<?php 
       while (have_posts()) : the_post();

           get_template_part('template-parts/page/content', 'page');

       endwhile; // End of the loop.
      getFundsSearch();


        $args = array(
            'hide_empty' => true, // also retrieve terms which are not used yet
            'meta_query' => array(
                array(
                    'key' => 'featured',
                    'value' => '1',
                    'compare' => 'LIKE'
                )
            ),
            'taxonomy' => 'funds_category',
        );
        $featured_terms = get_terms($args);
       $featured_terms_list = count($featured_terms);

//        echo "<pre>";
//        print_r($featured_terms);
//        exit;
       if($featured_terms_list > 0){
       ?>
       
<div class='funds-subttile col-md-12 give_now_title'>
<h3>Featured Funds</h3>
</div>
       <?php } ?>       
<!-- <div> -->
        <!-- <br>Featured<br> -->
        <?php
        $i=1;
        foreach ($featured_terms as $term) {
            // echo get_term_meta($term->term_id, 'featured',true);
            get_term_layout($term, $i);
            $i++;
        }


        $featured_ids = array_column($featured_terms, 'term_id');
        $terms = get_terms(array(
            'taxonomy' => 'funds_category',
            'exclude' => array($featured_ids),
            'include' => array(69,56, 66, 58, 62, 65, 67, 68)
        ));
        ?>
<!-- </div> -->
<div class='clearfix'></div>
<?php 
$terms_list = count($terms);
if($terms_list > 0){
?>
<div class='funds-subttile col-md-12 give_now_title'>
<h3>Our Funds</h3>
</div>
<?php } ?>
<!-- <br>Normal<br> -->
        <?php
        $i=1;
        foreach ($terms as $term) {
            get_term_layout($term, $i);
            $i++;
        }
        ?>
        <?php
            $terms_ids = array_column($terms, 'term_id');
            $sub_terms = get_terms(array(
                'taxonomy' => 'funds_category',
                'exclude' => array($featured_ids, $terms_ids),
                'include' => array($featured_ids, $terms_ids, 64, 70, 71)
            ))
    ?>
    <?php
    $sub_terms_list = count($sub_terms);
    if($sub_terms_list > 0){
        ?>
    <div class='funds-subttile col-md-12 give_now_title'>
    <h3>Our Programs</h3>
    </div>
    <?php
        $i=1;
        foreach ($sub_terms as $sub_term) {
            get_term_layout($sub_term, $i);
            $i++;
        }
    }
        ?>
        <!---->		</main><!-- #main -->
            <!-- <h3>Ways to Give</h3> -->
            <?php dynamic_sidebar('ways-to-give')?>
    </div><!-- #primary -->
</div><!-- .wrap -->

<div class="row funds">
    <div class="container" id="funds-scroll">
        <h2 class="pull-left">
<?php echo get_field("hws_title"); ?>
        </h2>
        <div class="funds-search pull-right">
            <form role="search" method="get" class="search-form" action="/funds-list">
                <label for="search-form-5c5b41634c7bc">
                    <span class="screen-reader-text">Search for:</span>
                </label>
                <input type="search"  class="search-field" placeholder="Search Our Funds" value="" >
                <button type="submit" class="search-submit fa fa-search"><svg class="icon icon-search" aria-hidden="true" role="img"> <use href="#icon-search" xlink:href="#icon-search"></use> </svg><span class="screen-reader-text">Search</span></button>
            </form>
<?php //echo get_search_form();     ?>
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
        $(".funds-search .search-field").attr("placeholder", "Search Our Funds");
    });
</script>

<?php
get_footer();