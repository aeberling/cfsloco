<?php
/**
 * The template for displaying the blog posts page
 *
 * Used when a static front page is set and a separate "Posts page" is assigned.
 * Mirrors the layout of archive-news_and_events.php for visual consistency.
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
</style>
<div class="banner">
    <?php dynamic_sidebar('News & Events featured Image')?>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1 rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span>Blog</span></div>
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

            <?php
            // Exclude news-events category from blog page
            global $wp_query;
            $news_events_cat = get_category_by_slug('news-events');
            if ($news_events_cat) {
                $wp_query->set('cat', '-' . $news_events_cat->term_id);
                $wp_query->get_posts();
            }
            ?>
            <?php $count = 0; if (have_posts()) : ?>
                <?php
                while (have_posts()) : the_post();

                    if($count > 0) {
                    	get_template_part('template-parts/post/content-news', get_post_format());
                    } else {
                   	 	get_template_part('template-parts/post/content', get_post_format());
                    }
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
get_footer();
