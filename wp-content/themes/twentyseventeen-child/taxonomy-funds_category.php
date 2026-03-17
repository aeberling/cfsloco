<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
<style>
    .page-header .page-title{
        display: none;
    }
    .fund_cat_posts{
        height: auto !important;
        margin-bottom: 20px;
    }
    .banner img{
    max-height: 450px;
    width: 100%;
    object-fit: cover;
    }
</style>
<?php
$tax = get_queried_object();
$image = get_term_meta($tax->term_id, 'tax_image_url_universal', true);

$category_banner_image = get_field('category_banner_image', 'funds_category_'.$tax->term_id);
if(!empty($category_banner_image)){
    $image = $category_banner_image;
}

?>
<div class="banner">
    <?php if(!empty($image)){?>
        <img class="" src="<?php echo $image?>" style="">
   <?php }else{dynamic_sidebar('News & Events featured Image');} ?>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1" >
                <div class="container" style="position: relative;z-index: 3;"><span><?php echo $tax->name ?></span></div>
                <div class="clearfix"></div>
            </div> 
            <div class="head2 rvl-right" >
                <div class="clearfix"></div>
            </div> 
            <div class="clearfix"></div>
        </div>
    </div> 
</div>


<div class="container"  style="margin-top: 60px;">
        <div class='container'>
            <div class="cat_fbck"><a href="<?php the_permalink(3864);?>"class="back_fund ">Back</a></div>
        </div>
    <p>
        <?php
        echo $tax->description;
        ?>
    </p>
    <?php getFundsSearch();?>
    <div class="panel-group cfsloco-acordion" id="accordion">
        <?php
        $args = array(
            'tax_query' => array(
                array(
                    'taxonomy' => 'funds_category',
                    'terms' => array($tax->slug),
                    'field' => 'slug',
                    'operator' => 'IN'
                )
            ),
            'posts_per_page' => -1,
            'post_type' => 'funds',
            'order' => 'ASC'
        );
		// 'orderby' => 'title',
        $funds = new WP_Query($args);
        if ($funds->post_count > 0) {
            $i = 0;
            $j=1;
            foreach ($funds->posts as $fund) {
                ?>
                <?php
                //$view_fund_button = get_field('view_fund_button', $fund->ID);
                $is_fund_page_hidden = get_field( 'hide_funds_page',$fund->ID);
                $featured_img_url = get_the_post_thumbnail_url($fund->ID, 'full');
                if (empty($featured_img_url)) {
                    $featured_img_url = get_stylesheet_directory_uri() . '/img/give_now.png';
                }
                ?>
                <div class="col-md-4 fund_cat_posts">
                    <div class='fund_cat_posts-inner'>
                    <?php //if (!empty($featured_img_url)) { ?>
                        <!--<img src="<?php //echo $featured_img_url; ?>">-->
                    <?php // } ?>
                    <div class='fund_cat_posts-content'>
                    <h4 class="panel-title">
                        <?php echo $fund->post_title ?>
                    </h4>

                    <div class="content_ar_fund"><p style=""><?php
                            $content = $fund->post_content;
                			$contentHtml = $fund->post_content;
                            $content = wp_strip_all_tags($content);
                            $content2 = wp_strip_all_tags($content);
                            if (strlen($content) > 70) {
                                $content = substr($content, 0, 70);
                                $content2=substr($content2, 71, strlen($content2));
                                echo "<div class='fund-content'>".$content."</div>";
                                echo "<span class='fund-showmore showmore'>.. Show more</span>";
                                echo "<div class='showless-content'>".$content."</div>";
                                echo "<div class='showmore-content'>".$contentHtml."</div>";
                                echo "<span class='fund-showless showless'>  Show less</span>";
                            }else{
                                echo $content;
                            }
                            ?></p>
                        <div class='action-btns'>

                            <?php 
                                            // print_r($is_fund_page_hidden);

                            if (!$is_fund_page_hidden) { ?>
                                <a href='<?php echo get_the_permalink($fund->ID) ?>' class='general-btn'>View Fund</a>
                            <?php } ?>
                            <?php $url= home_url()."/donate?fund=". $fund->ID;
                            $redirect=get_field('redirect_to', $fund->ID);
                            $target="";
                            if(!empty($redirect)){
                                $url=$redirect;
                                $target="target='_blank'";
                            }
                            ?>
                            
                            <?php if(get_field('young_100_link', $fund->ID)) { ?>
                            	<a <?php echo $target;?> href="<?php echo get_field('young_100_link', $fund->ID); ?>" class='general-btn pull-right'>Donate</a>    
                            <?php } ?>
							<?php if($fund->ID != 5147) { ?>
                            	<a <?php echo $target;?> href='<?php echo $url;?>' class='general-btn pull-right'>Donate</a>
                            <?php } ?>
                            <div class='clearfix'></div>
                        </div>
                        <div class='clearfix'></div>
                    </div>
                    </div>
                    </div>
                </div>
                <?php if($j%3==0){?>
                <div class='clearfix'></div>
                <?php }?>
                <?php
                $i++;
                $j++;
            }
        }
        ?>
    </div>
</div><!-- .wrap -->

<?php
get_footer();