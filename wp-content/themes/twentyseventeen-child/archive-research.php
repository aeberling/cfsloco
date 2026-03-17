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
    .data-center-page-comtainer {
        margin-top: 180px;
    }

    .head1 {
        font-size: 60px !important;
    }

    .banner img {
        max-height: 450px;
        width: 100%;
        object-fit: cover;
    }

    .reasearch_cat_outer {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .research_cat {
        position: relative;
        display: inline-block;
        margin: 10px 10px 30px 10px;
        text-align: center;
        border: 1px solid #313816;
        background: #586724;
        max-width: 48%;
        padding: 25px;
        min-height: 164px;
    }

    .research_cat:hover {
        background: #313816;
    }

    .research_cat h3 {
        text-align: center;
        font-weight: 600;
        padding: 20px;
        font-size: 24px;
        color: #fff;
        margin: auto !important;
        display: block;
    }

    .research_cat img {
        object-fit: cover;
        object-position: center;
    }

    .research_cat a {
        width: 100%;
        text-decoration: none !important;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    i {
        text-align: center;
        color: #333333;
        display: block;
    }

    .give-now-btn-div {
        width: 100%
    }

    .give-now-btn-div a.give-now-btn {
        display: block !important;
        color: #ffffff !important;
        margin: 0 auto !important;
        text-decoration: none !important;
    }

    .give-now-btn-div .green-links:focus,
    .give-now-btn-div .green-links:hover {
        border-bottom: 12px solid;
        box-shadow: 0px 0px 15px #133d43 !important;
    }

    @media only screen and (max-width: 1200px) {
        .inner-banner-text .banner-title .head1 {
            font-size: 28px !important;
        }

        .research_cat {
            position: relative;
            display: inline-block;
            margin: 5px 6px 5px 6px;
            max-width: 48%;
            width: 100%;
            padding: 25px;
            min-height: 164px;
        }

        .give-now-btn-div a.give-now-btn {
            display: block !important;
            color: #ffffff !important;
            margin: 0 auto !important;
            text-decoration: none !important;

        }
    }

    @media only screen and (max-width: 768px) {
        .data-center-page-comtainer {
            margin-top: -20px;
        }
        div#primary {
            margin-top: 35px;
        }
        .funds-subttile.col-md-12.give_now_title {
            margin-bottom: 20px !important;
        }
        .give_now_title h3 {
            color: white;
            letter-spacing: 1px;
            font-size: 21px;
            padding: 15px 15px 15px 15px;
            text-align: center;
         }

        .inner-banner-text .head1 span {
            background-color: #2f8992;
            display: inline-block;
            padding-right: 35px;
            padding-left: 30px;
        }

        .inner-banner-text .banner-title .head1 {
            font-size: 20px !important;
        }

        .research_cat {
            position: relative;
            display: inline-block;
            margin: 5px 0px 5px 0px;
            max-width: 100%;
            width: 100%;
            padding: 25px;
            min-height: 164px;
        }
    }
</style>
<div class="banner">
    <?php dynamic_sidebar('News & Events featured Image') ?>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1">
                <div class="container" style="position: relative;z-index: 3;"><span>Community Reports & Data
                        Center</span></div>
                <div class="clearfix"></div>
            </div>
            <div class="head2">
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="container data-center-page-comtainer">

    <?php if (have_posts()): ?>
        <!--header class="page-header">
            <?php
            //the_archive_title('<h1 class="page-title">', '</h1>');
            //the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header--><!-- .page-header -->
    <?php endif; ?>

    <div class="page_content">
        <!-- <div class="give-now-btn-div">
            <a href="/give-now/" class="green-links give-now-btn">Give Now</a>
        </div> -->
        <p><?php echo get_field('research_page_content', 'options'); ?></p>
    </div>

    <div id="primary" class="content-area" style="position: relative;overflow: hidden;float: none; width: 100%;">

        <div class="funds-subttile col-md-12 give_now_title">
            <h3>Categories</h3>
        </div>

        <?php
        $parent_terms = get_terms('research_category', array('parent' => 0, 'orderby' => 'term_order', 'order' => 'ASC', 'hide_empty' => false));
        if ($parent_terms) { ?>
            <div class="research_cat_outer">
                <?php
                foreach ($parent_terms as $pterm) { ?>
                    <div class="research_cat col-md-6 col-sm-12">
                        <a href="<?php echo get_term_link($pterm); ?>" class="self_link">
                            <?php
                            $picon = '';
                            $picon = get_field('category_icon', $pterm);
                            if ($picon) { ?>
                                <img style="max-width: 60px;" src="<?php echo $picon; ?>" />
                            <?php } ?>
                            <h3><?php echo esc_html($pterm->name) ?></h3>
                        </a>
                    </div>
                <?php }
                ?>
            </div><?php
        }
        ?>

    </div><!-- #primary -->
    <div class="page_content">
        <p><?php echo get_field('research_page_content_bottom', 'options'); ?></p>
    </div>


</div><!-- .wrap -->

<?php
get_footer();