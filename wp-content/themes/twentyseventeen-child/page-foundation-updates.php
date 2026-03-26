<?php
/**
 * Template Name: Foundation Updates
 *
 * Displays all posts from all categories using the same layout
 * as the News & Events archive / Blog template.
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 */
get_header();

/* Override the main query so have_posts() and the_posts_pagination() work */
global $wp_query;
$paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

$original_query = $wp_query;
$wp_query = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => get_option('posts_per_page'),
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
));
?>
<style>
    .page-header .page-title{
        display: none;
    }
</style>
<div class="banner">
    <?php dynamic_sidebar('News & Events featured Image')?>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1 rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span>Foundation Updates</span></div>
                <div class="clearfix"></div>
            </div>
            <div class="head2 rvl-right" >
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="wrap"  style="margin-top: 179px;">

    <?php if (have_posts()) : ?>
        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->
    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php $count = 0; if (have_posts()) : ?>
                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/post/content-foundation-updates');
					$count++;
                endwhile;

                the_posts_pagination(array(
                    'prev_text' => twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'twentyseventeen') . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __('Next page', 'twentyseventeen') . '</span>' . twentyseventeen_get_svg(array('icon' => 'arrow-right')),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyseventeen') . ' </span>',
                ));

            else :

                get_template_part('template-parts/post/content-news', 'none');

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
$wp_query = $original_query;
wp_reset_postdata();
get_footer();
