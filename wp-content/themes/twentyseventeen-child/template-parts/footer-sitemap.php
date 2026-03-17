<?php
/**
 * Template Part: Footer Sitemap (Dynamic)
 *
 * Pulls columns from the Header Menu automatically.
 * Top-level menu items = column headers, children = sub-links.
 * Include on any page with: get_template_part('template-parts/footer-sitemap');
 */
?>
<!-- DYNAMIC FOOTER SITEMAP — pulls from Header Menu -->
<div class="footer-sitemap">
    <div class="container-fluid text-center">

        <!-- Footer Logo — same as existing -->
        <div class="footer-logo footer-sitemap-col">
            <?php dynamic_sidebar('footer-logo'); ?>
        </div>

        <!-- Dynamic columns from Header Menu -->
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'walker'         => new Footer_Sitemap_Walker(),
            'container'      => false,
            'items_wrap'     => '%3$s',
            'depth'          => 2,
            'fallback_cb'    => false,
        ));
        ?>

        <!-- Quick Links — same as existing -->
        <div class="footer-sitemap-col">
            <?php dynamic_sidebar('footer-quicklinks'); ?>
        </div>

    </div>
</div>
<!-- END DYNAMIC FOOTER SITEMAP -->
