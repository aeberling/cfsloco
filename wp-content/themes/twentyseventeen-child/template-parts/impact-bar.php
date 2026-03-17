<?php
/**
 * Template Part: Impact Bar
 *
 * Displays the "Our Impact" metrics section.
 * Values are pulled from ACF options page (WP Admin > Impact Bar Settings).
 * Include on any page with: get_template_part('template-parts/impact-bar');
 */

/* Get ACF fields with fallback defaults */
$title       = get_field('impact_bar_title', 'option') ?: 'Our Impact';
$metrics     = get_field('impact_bar_metrics', 'option');
$button_text = get_field('impact_bar_button_text', 'option') ?: 'SEE OUR IMPACT';
$button_link = get_field('impact_bar_button_link', 'option') ?: '/impact';

/* Fallback metrics if ACF fields are empty (first deploy safety) */
if (empty($metrics)) {
    $metrics = array(
        array('metric_number' => '10,000', 'metric_label' => 'GRANTS GIVEN', 'metric_description' => 'To organizations, initiatives and projects through Dec. 11, 2025'),
        array('metric_number' => '$120M', 'metric_label' => 'GRANTED', 'metric_description' => 'To communities by CFSLOCO, our fundholders and partners through Dec. 11, 2025'),
        array('metric_number' => '3,300', 'metric_label' => 'ORGANIZATIONS', 'metric_description' => 'Receiving grants through Dec. 11, 2025'),
        array('metric_number' => '$1.9B', 'metric_label' => 'COMBINED CHARITABLE ASSETS', 'metric_description' => 'The largest community foundation in the state'),
    );
}
?>
<!-- IMPACT BAR SECTION - "Our Impact" metrics bar -->
<div id="impact-bar" class="impact-bar-section">
    <div class="impact-bar-inner">
        <h2 class="impact-bar-title"><?php echo esc_html($title); ?></h2>

        <div class="impact-bar-metrics">
            <?php foreach ($metrics as $metric) : ?>
                <div class="impact-metric-item">
                    <div class="impact-metric-circle">
                        <span class="impact-metric-number"><?php echo esc_html($metric['metric_number']); ?></span>
                    </div>
                    <h3 class="impact-metric-label"><?php echo esc_html($metric['metric_label']); ?></h3>
                    <p class="impact-metric-desc"><?php echo esc_html($metric['metric_description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div><!-- .impact-bar-metrics -->

        <div class="impact-bar-cta">
            <a href="<?php echo esc_url($button_link); ?>" class="impact-bar-btn"><?php echo esc_html($button_text); ?></a>
        </div>

    </div><!-- .impact-bar-inner -->
</div><!-- .impact-bar-section -->
<!-- END IMPACT BAR SECTION -->
