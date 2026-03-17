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
$queried_object = get_queried_object();
$cparent = $queried_object;
$pterm_id = $queried_object->term_id;
$queried_slug = $queried_object->slug;
$parent = ( isset( $queried_object->parent ) ) ? get_term_by( 'id', $queried_object->parent, 'research_category' ) : false;
if( $parent ) {
	$pterm_id = $parent->term_id;
	$cparent = $parent;
}
$pbanner = get_field('category_banner', $cparent);
?>
<style>
    .banner img {
    	max-height: 450px;
    	width: 100%;
    	object-fit: cover;
    }
    .selected > a, .viewAllCat.selected a {
        font-size: 13px;
        color: #FFF !important;
        text-transform: uppercase;
        text-decoration: none !important;
        background: #2f8992;
    }
    .cat_fbck {
        padding: 50px 0 20px 0px;
	}
    .cat_fbck a {
    	border: 1px solid #b2cd4a;
    }
    .cat_fbck a:hover {
    	border: 1px solid #627029;
    }
    div#primary {
		margin-top: 0px;
	}
</style>
<div class="banner">
	<?php if($pbanner) { ?>
    	<div><div class="textwidget custom-html-widget"><img class="" src="<?php echo $pbanner; ?>"></div></div>
	<?php } else {
    	dynamic_sidebar('News & Events featured Image');
	 } ?>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1" >
                <div class="container" style="position: relative;z-index: 3;"><span><?php echo $queried_object->name;?></span></div>
                <div class="clearfix"></div>
            </div> 
            <div class="head2" >
                <div class="clearfix"></div>
            </div> 
            <div class="clearfix"></div>
        </div>
    </div> 
</div>

<div class="wrap"  style="margin-top: 179px;">

    <?php if (have_posts()) : ?>
        <!--header class="page-header">
            <?php
            //the_archive_title('<h1 class="page-title">', '</h1>');
            //the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header--><!-- .page-header -->
    <?php endif; ?>
    
    <div class="page_content"><p><?php //echo get_field('research_page_content', 'options'); ?></p></div>
<div class="cat_fbck"><a href="/research/" class="back_fund ">Back</a></div>
    <div id="primary" class="content-area" style="float: none; width: 100%;">
    		
            <?php
                $terms = get_terms('research_category', array('parent' => $pterm_id, 'orderby' => 'slug', 'hide_empty' => false)); ?>
                <?php if($terms) { ?>
                <h4>Filter By:</h4>
            	<ul class="listCat">
                <li class="viewAllCat <?php if(!$parent){ echo 'selected';} ?>"><a class="viewAllCatBtn" href="<?php echo get_term_link( $cparent ); ?>">VIEW ALL</a></li>
                
                <?php foreach ($terms as $term) {
                    $liClass = "";
                    if($term->slug == $queried_slug) {
                        $liClass = "selected";
                    }
                ?>
                    <li class="<?php echo $liClass; ?>"><a href="<?php echo get_term_link( $term ); ?>"><?php echo esc_html( $term->name ) ?></a></li>
                <?php } ?>
                </ul>
                <?php } ?>
            
            <?php if (have_posts()) : ?>
            <main id="main" class="site-main post_research two_columns" role="main">
                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/post/research-content', get_post_format());

                endwhile;

        ?>
        </main><!-- #main -->
        <?php endif;
            ?>
                        <?php if (have_posts()) :

                the_posts_pagination(array(
                    'prev_text' => twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'twentyseventeen') . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __('Next page', 'twentyseventeen') . '</span>' . twentyseventeen_get_svg(array('icon' => 'arrow-right')),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyseventeen') . ' </span>',
                ));

            else :

                get_template_part('template-parts/post/content', 'none');

            endif;
            ?>
    </div><!-- #primary -->
    <?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();