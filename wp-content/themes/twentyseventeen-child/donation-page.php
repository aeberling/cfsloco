<?php
/**
 * Template Name: Donation Page
 */
get_header();
$donTitle = get_the_title();
$cStyle = '';
if(!empty($_GET['fund'])){
    $redirect=get_field('redirect_to', $_GET['fund']);
    if(!empty($redirect)){
        header('location: '.$redirect); exit;
    }
    if($_GET['fund'] == '5148') {
        $_GET['amount'] = '250';
    }
    $cTerms = get_the_terms( $_GET['fund'] , 'funds_category' );
    foreach ( $cTerms as $cTerm ) {
        if($cTerm->term_id == 71) {
			$donTitle = $cTerm->name;
        }
	}
   
    if($_GET['womenslegacyfund']) {
    	$cStyle = '<style>#field_8_24 { display: none; }</style>';
        echo $cStyle;
    }
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<style>
    .banner{
        margin-bottom: 100px;
    }
    .entry-content{
        width: 100% !important;
    }
    .ginput_container_select .bootstrap-select{
        width: 100% !important;
    }
    body .ginput_container_select > .bootstrap-select{
        width: 95% !important;
    }
    .bootstrap-select .bs-searchbox input{
        margin: 0 !important;
        width: 100% !important;
    }
    .bootstrap-select button{
        background-color: #fff !important;
        padding: 12.5px 12px;
        border: 1px solid #c5c6c5;
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
                <div class="container" style="position: relative;z-index: 3;"><span><?php echo $donTitle; ?></span></div>
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
        while (have_posts()) : the_post();

            get_template_part('template-parts/page/content', 'page');

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
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
            <form role="search" method="get" class="search-form" action="/funds-list">
                <label for="search-form-5c5b41634c7bc">
                    <span class="screen-reader-text">Search for:</span>
                </label>
                <input type="search"  class="search-field" placeholder="Search Our Funds" value="" >
                <button type="submit" class="search-submit fa fa-search"><svg class="icon icon-search" aria-hidden="true" role="img"> <use href="#icon-search" xlink:href="#icon-search"></use> </svg><span class="screen-reader-text">Search</span></button>
            </form>
<?php //echo get_search_form();  ?>
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