<?php
/*
  Template Name: Our Team
  Description: Staff & Board page with grid layout and click-to-reveal bio popups.
  Pulls dynamic content from the team_member CPT with team_type taxonomy.
*/

get_header();

// Placeholder image for members without a photo
$placeholder_img = 'https://placehold.co/400x400/e8e8e8/666?text=Photo';

/**
 * Single query for ALL team members (staff + board), sorted by menu_order.
 * menu_order is set via the drag-and-drop admin pages (Our Team > Sort Staff / Sort Board).
 * Results are split into sections in PHP to avoid duplicate WP_Query calls.
 */
$all_team_query = new WP_Query(array(
    'post_type'      => 'team_member',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'team_type',
            'field'    => 'slug',
            'terms'    => array('staff', 'board-of-directors'),
        ),
    ),
    'orderby'   => 'menu_order',
    'order'     => 'ASC',
));

// Prime the post meta + term caches in bulk instead of per-post lookups
if ($all_team_query->have_posts()) {
    $all_post_ids = wp_list_pluck($all_team_query->posts, 'ID');
    update_postmeta_cache($all_post_ids);
    update_object_term_cache($all_post_ids, 'team_member');
}

// Single pass: collect all member data and split by taxonomy term
$staff_members = array();
$board_members = array();
$team_js_data  = array();

if ($all_team_query->have_posts()) {
    while ($all_team_query->have_posts()) {
        $all_team_query->the_post();
        $post_id   = get_the_ID();
        $thumb     = get_the_post_thumbnail_url($post_id, 'medium_large');
        $has_photo = (bool) $thumb;
        $email     = get_field('team_email', $post_id);
        $phone     = get_field('team_phone', $post_id);
        $bio       = get_field('team_bio', $post_id);
        $job_title = get_field('team_job_title', $post_id);
        $pronouns  = get_field('team_pronouns', $post_id);
        $location  = get_field('team_location', $post_id);
        $industry  = get_field('team_industry', $post_id);
        $has_popup = (!empty($bio) || !empty($email) || $has_photo);

        $member = array(
            'post_id'   => $post_id,
            'name'      => get_the_title(),
            'title'     => $job_title,
            'img'       => $has_photo ? $thumb : $placeholder_img,
            'email'     => $email,
            'phone'     => $phone,
            'bio'       => $bio,
            'pronouns'  => $pronouns,
            'location'  => $location,
            'industry'  => $industry,
            'hasPopup'  => $has_popup,
        );

        // JS popup data
        $team_js_data['member-' . $post_id] = array(
            'name'     => $member['name'],
            'title'    => $job_title,
            'img'      => $member['img'],
            'email'    => $email,
            'phone'    => $phone,
            'bio'      => $bio,
            'pronouns' => $pronouns,
            'location' => $location,
            'industry' => $industry,
            'hasPopup' => $has_popup,
        );

        // Split into sections by taxonomy
        $terms = wp_get_post_terms($post_id, 'team_type', array('fields' => 'slugs'));
        if (in_array('staff', $terms, true)) {
            $staff_members[] = $member;
        }
        if (in_array('board-of-directors', $terms, true)) {
            $board_members[] = $member;
        }
    }
    wp_reset_postdata();
}
?>

<div class="banner">
    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>"/>
    <div class="inner-banner-text" style='<?php
        if (empty(get_the_post_thumbnail_url())) {
            echo ";margin-top:0px;margin-bottom:30px;";
        }
    ?>'>
        <div class="banner-title">
            <div class="head1 rvl-left">
                <div class="container" style="position: relative;z-index: 3;"><span><?php the_title(); ?></span></div>
                <div class="clearfix"></div>
            </div>
            <?php if (!empty(get_field("cs_subtitle"))) { ?>
                <div class="head2 rvl-right">
                    <div class="container" style="position: relative;z-index: 3;"><span><?php echo get_field("cs_subtitle"); ?></span></div>
                    <div class="clearfix"></div>
                </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- ========== OUR TEAM SECTION ========== -->
<div class="our-team-page">

    <!-- Staff Section -->
    <?php if (!empty($staff_members)) : ?>
    <div class="our-team-section">
        <div class="our-team-container">
            <h2 class="our-team-section-title">Meet our Staff</h2>
            <div class="our-team-grid">
                <?php foreach ($staff_members as $member) : ?>
                <div class="our-team-card" data-member="member-<?php echo $member['post_id']; ?>">
                    <div class="our-team-card-img">
                        <img src="<?php echo esc_url($member['img']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                    </div>
                    <h3 class="our-team-card-name"><?php echo esc_html($member['name']); ?></h3>
                    <?php if ($member['title']) : ?>
                        <p class="our-team-card-title"><?php echo esc_html($member['title']); ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Board of Directors Section -->
    <?php if (!empty($board_members)) : ?>
    <div class="our-team-section our-team-board-section">
        <div class="our-team-container">
            <h2 class="our-team-section-title">Board of Directors</h2>
            <div class="our-team-grid">
                <?php foreach ($board_members as $member) : ?>
                <div class="our-team-card" data-member="member-<?php echo $member['post_id']; ?>">
                    <div class="our-team-card-img">
                        <img src="<?php echo esc_url($member['img']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                    </div>
                    <h3 class="our-team-card-name"><?php echo esc_html($member['name']); ?></h3>
                    <?php if ($member['title']) : ?>
                        <p class="our-team-card-title"><?php echo esc_html($member['title']); ?></p>
                    <?php endif; ?>
                    <?php if ($member['location'] || $member['industry']) : ?>
                        <p class="our-team-card-location">
                            <?php
                            $loc_parts = array();
                            if ($member['industry']) $loc_parts[] = esc_html($member['industry']);
                            if ($member['location']) $loc_parts[] = esc_html($member['location']);
                            echo implode(' &middot; ', $loc_parts);
                            ?>
                        </p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>
<!-- End Our Team Page -->

<!-- ========== BIO POPUP ========== -->
<div class="our-team-popup-overlay" id="ourTeamOverlay"></div>
<div class="our-team-popup" id="ourTeamPopup">
    <button class="our-team-popup-close" id="ourTeamPopupClose" aria-label="Close">&times;</button>
    <div class="our-team-popup-inner">
        <div class="our-team-popup-left">
            <div class="our-team-popup-img">
                <img src="" alt="" id="popupImg">
            </div>
            <a href="#" class="our-team-popup-email" id="popupEmail">EMAIL</a>
        </div>
        <div class="our-team-popup-right">
            <h2 class="our-team-popup-name" id="popupName"></h2>
            <p class="our-team-popup-pronouns" id="popupPronouns"></p>
            <p class="our-team-popup-title" id="popupTitle"></p>
            <p class="our-team-popup-industry" id="popupIndustry"></p>
            <p class="our-team-popup-location" id="popupLocation"></p>
            <p class="our-team-popup-phone" id="popupPhone"></p>
            <div class="our-team-popup-bio" id="popupBio"></div>
        </div>
    </div>
</div>

<!-- ========== TEAM MEMBER DATA (Dynamic from CPT) ========== -->
<script type="text/javascript">
jQuery(document).ready(function($) {

    var teamData = <?php echo wp_json_encode($team_js_data); ?>;

    var $popup = $('#ourTeamPopup');
    var $overlay = $('#ourTeamOverlay');

    // Mark cards that have no popup content (no bio, no email, no real photo)
    $('.our-team-card').each(function() {
        var memberId = $(this).data('member');
        var member = teamData[memberId];
        if (member && !member.hasPopup) {
            $(this).addClass('our-team-card-no-popup');
        }
    });

    // Open popup on card click
    $('.our-team-card').on('click', function() {
        var memberId = $(this).data('member');
        var member = teamData[memberId];

        // Don't open popup if member has no content
        if (!member || !member.hasPopup) return;

        $('#popupImg').attr('src', member.img).attr('alt', member.name);
        $('#popupName').text(member.name);
        $('#popupTitle').text(member.title);
        $('#popupBio').html(member.bio);

        // Show/hide pronouns
        if (member.pronouns) {
            $('#popupPronouns').text(member.pronouns).show();
        } else {
            $('#popupPronouns').hide();
        }

        // Show/hide industry
        if (member.industry) {
            $('#popupIndustry').text(member.industry).show();
        } else {
            $('#popupIndustry').hide();
        }

        // Show/hide location
        if (member.location) {
            $('#popupLocation').text(member.location).show();
        } else {
            $('#popupLocation').hide();
        }

        // Show/hide email button
        if (member.email) {
            $('#popupEmail').attr('href', 'mailto:' + member.email).show();
        } else {
            $('#popupEmail').hide();
        }

        // Show/hide phone text
        if (member.phone) {
            $('#popupPhone').text(member.phone).show();
        } else {
            $('#popupPhone').hide();
        }

        // Show overlay and popup
        $overlay.addClass('active');
        $popup.addClass('active');
        $('body').css('overflow', 'hidden');
    });

    // Close popup
    function closePopup() {
        $popup.removeClass('active');
        $overlay.removeClass('active');
        $('body').css('overflow', '');
    }

    $('#ourTeamPopupClose').on('click', function(e) {
        e.stopPropagation();
        closePopup();
    });

    // Close on overlay click
    $overlay.on('click', function() {
        closePopup();
    });

    // Close on Escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            closePopup();
        }
    });

});
</script>

<?php
get_footer();
?>
