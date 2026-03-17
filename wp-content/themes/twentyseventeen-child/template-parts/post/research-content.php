<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<?php
    $esxtUrl = '';
    $newTab = '';
    $esxtUrl = get_field('external_url');
    $postUrl = get_the_permalink();
    if($esxtUrl) {
        $postUrl = $esxtUrl;
        $newTab = 'target=_blank';
    }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('two_column'); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail research-thumb">
			<a <?php echo $newTab; ?> href="<?php echo $postUrl; ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>
	
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			}
			echo '</div><!-- .entry-meta -->';
		}

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a '.$newTab.' href="' . esc_url( $postUrl ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h3 class="entry-title"><a '.$newTab.' href="' . esc_url( $postUrl ) . '" rel="bookmark">', '</a></h3>' );
		}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
        
        echo '<p>'.wp_trim_words( get_the_excerpt(), 35, '...' ).'</p>';

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->
	
	<div class="read_more"><a  <?php echo $newTab; ?> class="more-link" href="<?php echo $postUrl; ?>">Read More</a></div>
	
	<div class="entry-categories">
	    <span></span>
	    <?php the_terms( $post->ID, 'research_category', '', '<comma>,</comma> ', '' ); ?>
	</div>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
