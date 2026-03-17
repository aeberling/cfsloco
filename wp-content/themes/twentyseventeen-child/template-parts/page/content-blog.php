<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<li class="wp-block-post post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry">

    <h2 class="wp-block-post-title"><a href="<?php the_permalink(); ?>" target="blank"><?php the_title(); ?></a></h2>

    <figure class="alignwide wp-block-post-featured-image"><a href="<?php the_permalink(); ?>" target="blank"><img loading="lazy" width="600" height="300" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php the_title(); ?>" decoding="async" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?> 600w, <?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?> 300w" sizes="100vw"></a></figure>

    <div class="wp-block-post-excerpt">
        <p class="wp-block-post-excerpt__excerpt">
        	<?php the_excerpt(); ?>
        </p>
        <p class="link-more">
            <a href="<?php the_permalink(); ?>" class="more-link" target="blank">Continue reading<span class="screen-reader-text"> “<?php the_title(); ?>”</span></a>
        </p>
        <p></p>
    </div>

	<hr class="wp-block-separator">

    <div class="wp-block-post-date"><time datetime="2023-11-15T10:50:32-08:00"><?php the_date();?></time></div>
</li>