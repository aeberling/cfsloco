<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css?ver=' . time());

    /* Custom CSS — all new styles go here, loaded after theme CSS with time() cache-bust */
    wp_enqueue_style('cfsloco-custom', get_stylesheet_directory_uri() . '/css/custom.css', array('twentyseventeen-style'), time());
}

add_theme_support('post-thumbnails');

function custom_widgets_init() {
    register_sidebar(array(
        'name' => __('Header Logo', 'cfsloco'),
        'id' => 'header-logo1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Header Social-Icons', 'cfsloco'),
        'id' => 'header-social-icons',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Header Top buttons', 'cfsloco'),
        'id' => 'header-top-buttons',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Logo', 'cfsloco'),
        'id' => 'footer-logo',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer About us', 'cfsloco'),
        'id' => 'footer-aboutus',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Donors', 'cfsloco'),
        'id' => 'footer-donors',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Donation sidebar Content', 'cfsloco'),
        'id' => 'donation-sidebar-content',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Advisors', 'cfsloco'),
        'id' => 'footer-advisors',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Non Profits', 'cfsloco'),
        'id' => 'footer-nonprofits',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Students', 'cfsloco'),
        'id' => 'footer-students',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Impact', 'cfsloco'),
        'id' => 'footer-impact',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Quick Links', 'cfsloco'),
        'id' => 'footer-quicklinks',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Copyrights', 'cfsloco'),
        'id' => 'footer-copyrights',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Address', 'cfsloco'),
        'id' => 'footer-address',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    // register_sidebar(array(
    //     'name' => __('Footer Address', 'cfsloco'),
    //     'id' => 'footer-address',
    //     'before_widget' => '<div>',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h1>',
    //     'after_title' => '</h1>',
    // ));
    register_sidebar(array(
        'name' => __('Footer Contact Info', 'cfsloco'),
        'id' => 'footer-contactinfo',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Socialicons', 'cfsloco'),
        'id' => 'footer-socialicons',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer newsletter signup', 'cfsloco'),
        'id' => 'footer-newsletter-signup',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Footer Bottom Links', 'cfsloco'),
        'id' => 'footer-bottomlinks',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('footer Accredited Logo', 'cfsloco'),
        'id' => 'Accredited-Logo',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Connect with us sticky heidi', 'cfsloco'),
        'id' => 'sidebar1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Connect with us sticky annie', 'cfsloco'),
        'id' => 'connect-alt',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => __('connect with us sticky 2', 'cfsloco'), //trish
        'id' => 'connect with us sticky 2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => __('connect with us sticky 3', 'cfsloco'), //len
        'id' => 'connect with us sticky 3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('connect with us sticky 4', 'cfsloco'), // angela
        'id' => 'connect with us sticky 4',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('News & Events featured Image', 'cfsloco'),
        'id' => 'newsevents',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('popup newsletter signup header', 'cfsloco'),
        'id' => 'popup-newsletter-signup-header',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Ways to Give', 'cfsloco'),
        'id' => 'ways-to-give',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<div class="funds-subttile col-md-12 give_now_title">
        <h3>',
        'after_title' => '</h3></div>',
    ));
}

add_action('widgets_init', 'custom_widgets_init');

function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('top-menu', __('Top Menu Links'));
}

add_action('init', 'register_my_menu');

/**
 * Footer Sitemap Walker
 * Renders the Header Menu in a footer column layout.
 * Top-level items = column headers, children = sub-links.
 */
class Footer_Sitemap_Walker extends Walker_Nav_Menu {

    /* Track when we're starting a new top-level item */
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if ($depth === 0) {
            /* Open column div + ul, then output heading li */
            $output .= '<div class="footer-sitemap-col">';
            $output .= '<ul>';
            $output .= '<li class="footer-sitemap-heading">';
            $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
            $output .= '</li>';
        } else {
            /* Child items — regular list items */
            $output .= '<li>';
            $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
            $output .= '</li>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0) {
            /* Close ul + column div after all children are rendered */
            $output .= '</ul>';
            $output .= '</div>';
        }
    }

    /* Suppress default <ul class="sub-menu"> wrapping for children */
    public function start_lvl(&$output, $depth = 0, $args = null) {
        /* Children go into the same <ul> opened in start_el, so no extra wrapper */
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        /* Nothing needed */
    }
}

//Shortcode Image Left And right text with bullets and button
function section_image_bullets($atts = '') {
    $attributes = shortcode_atts(array(
        'section' => 0,
            ), $atts);
    ob_start();
    ?>
    </div></div>
    </div>
    <?php
    if ($attributes['section'] === 'large') {
        echo '<div class="section-large">';
    }
    ?>
    <div class="overflow">
        <div class="full-with-image image-text-align">
            <div class="rvl-left col-md-5 full-with-image-left rvl-left padding0">
                <img src="<?php echo get_field("client_image"); ?>"/>
                <div class="clearfix"></div>

                <div class="col-md-offset-2 col-md-10 img-caption">
                    <a href="#"><?php echo get_field("help_client_image_caption"); ?></a>
                </div>
            </div>
            <div class="rvl-right col-md-7 full-with-image-right rvl-right">
                <div class="col-md-10 custom-padding">
                    <h3><?php echo get_field("help_client_title"); ?></h3>
                    <div class="right-side-img-ul">
                        <ul>
                            <?php
// check if the repeater field has rows of data
                            if (have_rows('reasons_list')):

                                // loop through the rows of data
                                while (have_rows('reasons_list')) : the_row();
                                    ?>

                                    <li><strong><?php
                                            $bullet_title = the_sub_field('client_list_title');

                                            if (!empty($bullet_title)) {
                                                echo the_sub_field('client_list_title') . ':';
                                            }
                                            ?></strong>  <?php echo the_sub_field('client_list_description'); ?> </li>
                                    <?php
                                endwhile;

                            else :

                            // no rows found

                            endif;
                            ?>
                        </ul>
                    </div>
                    <a class="learn-more-link bottom-left-link" href="<?php echo get_field("clients_button_link"); ?>"><?php echo get_field("clients_button_name"); ?></a>
                </div>
            </div>
            <div class="clearfix"></div>    
        </div>
        <div class="clearfix"></div>
    </div>
    <?php
    if ($attributes['section'] === 'large') {
        echo '</div>';
    }
    ?>
    <div class="row">
        <div class="container">
            <div id="content" class="site-content">



                <?php
                $content = ob_get_contents();
                ob_end_clean();
                return $content;
            }

            add_shortcode('section-image-bullets', 'section_image_bullets');

            function custom_excerpt_length($length) {
                return 25;
            }

//            add_filter('excerpt_length', 'custom_excerpt_length', 999);
            add_filter('gform_pre_render', 'my_gform_pre_render', 10, 1);
            add_filter('gform_pre_validation', 'my_gform_pre_render', 10, 1);
            add_filter('gform_admin_pre_render', 'my_gform_pre_render', 10, 1);
            add_filter('gform_pre_submission_filter', 'my_gform_pre_render', 10, 1);

            function my_gform_pre_render($form) {
                if (GFCommon::is_form_editor() || 1 != $form['id']) {
                    return $form;
                }
                $choices = array();
                if (is_array($form) || is_object($form)) {
                    $query = new WP_Query(array('post_type' => 'funds'));
//                    foreach ($query->posts as $p) {
//                        $choices .= $p->post_title . ", ";
//                    }
                    foreach ($form['fields'] as &$field) {  // for all form fields
                        $field_id = $field['id'];
                        if ('select' == $field->get_input_type()) {
                            foreach ($query->posts as $post) {
                                $choices[] = array('text' => $post->post_title, 'value' => $post->post_title);
                            }
//                            $has_columns = is_array($field->choices);
////                            print_r($field->choices);
////                            if ($has_columns) {
//                            foreach ($field->choices as $key => &$choice) { // for each column
//                                print_r($choice['isDropDownChoices']);
////                                    $isDropDown = rgar($choice, 'isDropDown');
////                                    $column = rgars($field->choices, "{$key}/text");
////                                    if ($isDropDown && 'Select a Fund' == $column) {
////                                        
////                                        $choice['isDropDownChoices'] = $choices;
////                                    }
//                            }
//                            }
                        }
                    }
                }
                return $form;
            }

            add_filter('gform_pre_render_1', 'color_posts');
            add_filter('gform_pre_validation_1', 'color_posts');
            add_filter('gform_pre_submission_filter_1', 'color_posts');
            add_filter('gform_admin_pre_render_1', 'color_posts');
            add_filter('gform_pre_render_6', 'color_posts');
            add_filter('gform_pre_validation_6', 'color_posts');
            add_filter('gform_pre_submission_filter_6', 'color_posts');
            add_filter('gform_admin_pre_render_6', 'color_posts');
            add_filter('gform_pre_render_11', 'color_posts');
            add_filter('gform_pre_validation_11', 'color_posts');
            add_filter('gform_pre_submission_filter_11', 'color_posts');
            add_filter('gform_admin_pre_render_11', 'color_posts');

            function color_posts($form) {
                foreach ($form['fields'] as &$field) {
                    if ($field->type != 'select' || strpos($field->cssClass, 'gf_left_third funds') === false) {
                        continue;
                    }
                    $choices = array();
                    $terms = get_terms(array(
                        'taxonomy' => 'funds_category',
                        'hide_empty' => false,
                    ));
                    $args = array('post_type' => 'funds', 'posts_per_page' => -1, 'numberposts' => -1, 'order' => 'ASC', 'orderby' => 'title');
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        $choices[] = array('text' => $post->post_title, 'value' => $post->ID);
                    }
                    $field->placeholder = 'Select a Fund';
                    $field->choices = $choices;
                }
                return $form;
            }

            add_action('gform_pre_submission', 'pre_submission_handler');

            function pre_submission_handler($form) {
                unset($_POST['input_80']);
                unset($_POST['input_83']);
                unset($_POST['input_88']);
                unset($_POST['input_92']);
                unset($_POST['input_96']);
                unset($_POST['input_100']);
                unset($_POST['input_103']);
                unset($_POST['input_108']);
                $funds = [];
                foreach ($form['fields'] as &$field) {
                    if (!empty($_POST['input_73'])) {
                        if ($field->id == 69) {
                            $field->label = $_POST['input_73'];
                        }
                    }
                    if (!empty($_POST['input_75'])) {
                        if ($field->id == 74) {
                            $field->label = $_POST['input_75'];
                        }
                    }
                    if (!empty($_POST['input_81'])) {
                        if ($field->id == 82) {
                            $field->label = $_POST['input_81'];
                        }
                    }
                    if (!empty($_POST['input_85'])) {
                        if ($field->id == 86) {
                            $field->label = $_POST['input_85'];
                        }
                    }
                    if (!empty($_POST['input_89'])) {
                        if ($field->id == 74) {
                            $field->label = $_POST['input_90'];
                        }
                    }
                    if (!empty($_POST['input_93'])) {
                        if ($field->id == 74) {
                            $field->label = $_POST['input_94'];
                        }
                    }
                    if (!empty($_POST['input_97'])) {
                        if ($field->id == 98) {
                            $field->label = $_POST['input_97'];
                        }
                    }
                    if (!empty($_POST['input_101'])) {
                        if ($field->id == 102) {
                            $field->label = $_POST['input_101'];
                        }
                    }
                    if (!empty($_POST['input_105'])) {
                        if ($field->id == 106) {
                            $field->label = $_POST['input_105'];
                        }
                    }
                    if (!empty($_POST['input_109'])) {
                        if ($field->id == 110) {
                            $field->label = $_POST['input_109'];
                        }
                    }
                }
            }

            add_filter('gform_entry_field_value', 'category_names', 10, 4);

            function category_names($value, $field, $lead, $form) {
                foreach ($form['fields'] as &$field) {
                    if (!empty($_POST['input_73'])) {
                        if ($field->id == 73) {
                            $field->label = 'test';
                        }
                    }
                    if (!empty($_POST['input_75'])) {
                        if ($field->id == 74) {
                            $field->label = $_POST['input_75'];
                        }
                    }
                    if (!empty($_POST['input_81'])) {
                        if ($field->id == 82) {
                            $field->label = $_POST['input_81'];
                        }
                    }
                    if (!empty($_POST['input_85'])) {
                        if ($field->id == 86) {
                            $field->label = $_POST['input_85'];
                        }
                    }
                    if (!empty($_POST['input_89'])) {
                        if ($field->id == 74) {
                            $field->label = $_POST['input_90'];
                        }
                    }
                    if (!empty($_POST['input_93'])) {
                        if ($field->id == 74) {
                            $field->label = $_POST['input_94'];
                        }
                    }
                    if (!empty($_POST['input_97'])) {
                        if ($field->id == 98) {
                            $field->label = $_POST['input_97'];
                        }
                    }
                    if (!empty($_POST['input_101'])) {
                        if ($field->id == 102) {
                            $field->label = $_POST['input_101'];
                        }
                    }
                    if (!empty($_POST['input_105'])) {
                        if ($field->id == 106) {
                            $field->label = $_POST['input_105'];
                        }
                    }
                    if (!empty($_POST['input_109'])) {
                        if ($field->id == 110) {
                            $field->label = $_POST['input_109'];
                        }
                    }
                }
                return $value;
            }

            function my_custom_admin_head() {
                echo '<script type="text/javascript">
    
            jQuery(document).ready(function($){
            var funds=[];
            $(".entry-detail-view >tbody tr").each(function(){
                if($(this).html().indexOf("Select a Fund") >-1){
                    funds.push($(this).next("tr").children("td").html());
                }
                    });
                    console.log(funds);
                    var i=0;
                    $(".entry-products tbody tr").each(function(){
                    $(this).children("td").children(".product_name").html(funds[i]);
                    i++;
                    });
            });
            </script>';
            }

            add_action('admin_footer', 'my_custom_admin_head');


            add_filter('gform_form_post_get_meta_6', 'add_my_field');

            function add_my_field($form) {
                $fund_type_field_1 = GFAPI::get_field($form, 73);
                $fund_type_field_2 = GFAPI::get_field($form, 145);
                $fund_amount_field_1 = GFAPI::get_field($form, 69);

                $legacy_checkbox_field = GFAPI::get_field($form, 148); // CFSLOCO: Womens Legacy Fund donation page updates
                $renew_legacy_checkbox_field = GFAPI::get_field($form, 149); // CFSLOCO: Womens Legacy Fund donation page updates
                $fund_fields = GF_Fields::create(array(
                            'type' => 'repeater',
                            'description' => 'Maximum of 5 funds',
                            'id' => 1000,
                            'formId' => $form['id'],
                            'class' => 'select2',
                            'label' => 'Fund & Gift Amounts',
                            'addButtonText' => 'Add Another Fund', // Optional	
                            'removeButtonText' => 'Remove Fund', // Optional	
                            'maxItems' => 5, // Optional	
                            'isRequired' => true, // Optional	
                            'pageNumber' => 1, // Ensure this is correct	
                            'fields' => array($fund_type_field_1,$legacy_checkbox_field,$renew_legacy_checkbox_field, $fund_type_field_2, $fund_amount_field_1), // CFSLOCO: Womens Legacy Fund donation page updates
                ));
                array_splice($form['fields'], 6, 0, array($fund_fields));  // CFSLOCO: Womens Legacy Fund donation page updates
                return $form;
            }

            if (empty($_GET['womenslegacyfund'])) {
                add_filter('gform_form_post_get_meta_11', 'add_my_repeater_field');
//                add_filter('gform_form_post_get_meta_6', 'add_my_repeater_field');
            }

            function add_my_repeater_field($form) {
                $fund_type_field_1 = GFAPI::get_field($form, 73);
                $fund_type_field_2 = GFAPI::get_field($form, 145);
                $fund_amount_field_1 = GFAPI::get_field($form, 69);
                $legacy_checkbox_field = GFAPI::get_field($form, 148); // CFSLOCO: Womens Legacy Fund donation page updates
            $renew_legacy_checkbox_field = GFAPI::get_field($form, 149); // CFSLOCO: Womens Legacy Fund donation page updates
                $fund_fields = GF_Fields::create(array(
                            'type' => 'repeater',
                            'description' => 'Maximum of 5 funds',
                            'id' => 1000,
                            'formId' => $form['id'],
                            'class' => 'select2',
                            'label' => 'Fund & Gift Amounts',
                            'addButtonText' => 'Add Another Fund', // Optional	
                            'removeButtonText' => 'Remove Fund', // Optional	
                            'maxItems' => 5, // Optional	
                            'isRequired' => true, // Optional	
                            'pageNumber' => 1, // Ensure this is correct	
                            'fields' => array($fund_type_field_1,$legacy_checkbox_field,$renew_legacy_checkbox_field, $fund_type_field_2, $fund_amount_field_1),  // CFSLOCO: Womens Legacy Fund donation page updates
                ));
                array_splice($form['fields'], 8, 0, array($fund_fields));  // CFSLOCO: Womens Legacy Fund donation page updates
                return $form;
            }

            add_filter('gform_form_update_meta_11', 'remove_my_field', 10, 3);
            add_filter('gform_form_update_meta_6', 'remove_my_field', 10, 3);

            function remove_my_field($form_meta, $form_id, $meta_name) {
                if ($meta_name == 'display_meta') {
                    $form_meta['fields'] = wp_list_filter($form_meta['fields'], array('id' => 1000), 'NOT');
                }
                return $form_meta;
            }

            add_filter('gform_entry_list_columns', 'set_columns', 10, 6);

            function set_columns($table_columns, $form_id) {
                $table_columns['field_id-73'] = 'Fund';
                $table_columns['field_id-145'] = 'Fund Name';
                $table_columns['field_id-69'] = 'Amount';
                return $table_columns;
            }

            add_filter('gform_entries_column_filter', 'change_column_data', 10, 5);

            function change_column_data($value, $form_id, $field_id, $entry, $query_string) {
                //only change the data when form id is 1 and field id is 2
                $list = [];
                if ($form_id == 6 && ($field_id == 73 || $field_id == 69 || $field_id == 145)) {
                    if (!empty($entry[1000])) {
                        foreach ($entry[1000] as $fundrow) {
                            if (!empty($fundrow[73]) && $field_id == 73) {
                                $f = get_posts(array('post_type' => 'funds', 'include' => [$fundrow[73]]));
                                if (!empty($f)) {
                                    array_push($list, $f[0]->post_title);
                                }
                            }
                            if (!empty($fundrow[69]) && $field_id == 69 && $fundrow[69] != '$0.00') {
                                array_push($list, $fundrow[69]);
                            }

                            if (!empty($fundrow[145]) && $field_id == 145) {
                                array_push($list, $fundrow[145]);
                            }
                        }
                        if (!empty($list)) {
                            return implode(',', $list);
                        }
                    }
                }

                if ($form_id == 8 && ($field_id == 73 || $field_id == 69 || $field_id == 145)) {
                    if (!empty($entry[1000])) {
                        foreach ($entry[1000] as $fundrow) {
                            if (!empty($fundrow[73]) && $field_id == 73) {
                                $f = get_posts(array('post_type' => 'funds', 'include' => [$fundrow[73]]));
                                if (!empty($f)) {
                                    array_push($list, $f[0]->post_title);
                                }
                            }
                            if (!empty($fundrow[69]) && $field_id == 69 && $fundrow[69] != '$0.00') {
                                array_push($list, $fundrow[69]);
                            }

                            if (!empty($fundrow[145]) && $field_id == 145) {
                                array_push($list, $fundrow[145]);
                            }
                        }
                        if (!empty($list)) {
                            return implode(',', $list);
                        }
                    }
                }
                if ($form_id == 11 && ($field_id == 73 || $field_id == 69 || $field_id == 145)) {
                    if (!empty($entry[1000])) {
                        foreach ($entry[1000] as $fundrow) {

                            if (!empty($fundrow[73]) && $field_id == 73) {
//                                $f = get_posts(array('post_type' => 'funds', 'include' => [$fundrow[73]]));
                                $f = get_the_title($fundrow[73]);
                                if (!empty($f)) {
                                    array_push($list, $f);
                                }
                            }
                            if (!empty($fundrow[69]) && $field_id == 69 && $fundrow[69] != '$0.00') {
                                array_push($list, $fundrow[69]);
                            }

                            if (!empty($fundrow[145]) && $field_id == 145) {
                                array_push($list, $fundrow[145]);
                            }
                        }
                        if (!empty($list)) {
                            return implode(',', $list);
                        }
                    }
                }
                return $value;
            }

//add_filter( 'gform_entry_field_value', 'fund_names', 10, 4 );
            function fund_names($value, $field, $lead, $form) {
                if ($form['id'] == 6 && $field->id == 1000) {
                    return;
                } else if ($form['id'] == 6 && $field->id == 73) {
                    $html = "";
                    if (!empty($lead[1000])) {
                        foreach ($lead[1000] as $fundrow) {
                            $html .= '<div class="gfield_repeater_items">
                <div class="gfield_repeater_item"><div class="gfield_repeater_cell"><div class="gfield_repeater_label">Fund</div><div class="gfield_repeater_value" style="color:rgba(117, 117, 117, 1);font-size: 14px">';
                            if (!empty($fundrow[73])) {
                                $f = get_posts(array('post_type' => 'funds', 'include' => [$fundrow[73]]));
                                if (!empty($f)) {
                                    $html .= $f[0]->post_title;
                                }
                            }
                            $html .= '</div></div><div class="gfield_repeater_cell"><div class="gfield_repeater_label">Amount:</div><div class="gfield_repeater_value" style="color:rgba(117, 117, 117, 1);font-size: 14px">' . $fundrow[69] . '</div></div></div>
                </div>';
                        }
                    }
                    return $html;
                }


                if ($form['id'] == 8 && $field->id == 1000) {
                    return;
                } else if ($form['id'] == 8 && $field->id == 73) {
                    $html = "";
                    if (!empty($lead[1000])) {
                        foreach ($lead[1000] as $fundrow) {
                            $html .= '<div class="gfield_repeater_items">
                <div class="gfield_repeater_item"><div class="gfield_repeater_cell"><div class="gfield_repeater_label">Fund</div><div class="gfield_repeater_value" style="color:rgba(117, 117, 117, 1);font-size: 14px">';
                            if (!empty($fundrow[73])) {
                                $f = get_posts(array('post_type' => 'funds', 'include' => [$fundrow[73]]));
                                if (!empty($f)) {
                                    $html .= $f[0]->post_title;
                                }
                            }
                            $html .= '</div></div><div class="gfield_repeater_cell"><div class="gfield_repeater_label">Amount:</div><div class="gfield_repeater_value" style="color:rgba(117, 117, 117, 1);font-size: 14px">' . $fundrow[69] . '</div></div></div>
                </div>';
                        }
                    }
                    return $html;
                }

                if ($form['id'] == 11 && $field->id == 1000) {
                    return;
                } else if ($form['id'] == 11 && $field->id == 73) {
                    $html = "";
                    if (!empty($lead[1000])) {
                        foreach ($lead[1000] as $fundrow) {
                            $html .= '<div class="gfield_repeater_items">
                <div class="gfield_repeater_item"><div class="gfield_repeater_cell"><div class="gfield_repeater_label">Fund</div><div class="gfield_repeater_value" style="color:rgba(117, 117, 117, 1);font-size: 14px">';
                            if (!empty($fundrow[73])) {
                                $f = get_posts(array('post_type' => 'funds', 'include' => [$fundrow[73]]));
                                if (!empty($f)) {
                                    $html .= $f[0]->post_title;
                                }
                            }
                            $html .= '</div></div><div class="gfield_repeater_cell"><div class="gfield_repeater_label">Amount:</div><div class="gfield_repeater_value" style="color:rgba(117, 117, 117, 1);font-size: 14px">' . $fundrow[69] . '</div></div></div>
                </div>';
                        }
                    }
                    return $html;
                }

                return $value;
            }

            add_filter('gform_register_init_scripts', 'gform_my_function');

            function gform_my_function($form) {

                $fund_id = $_GET['fund'];
                $amount = $_GET['amount'];
                $script = '(function($){' .
                        'console.log("from theme function file"); 
                setTimeout(function() {
                    var fundTotal = 0;
                    ';
                if (!empty($fund_id)) {
                    $script .= 'if($("#input_6_73-0").length>0){
                        $("#input_6_73-0").val(' . $fund_id . ').trigger("change");
                    }
                    if($("#input_11_73-0").length>0){
                        $("#input_11_73-0").val(' . $fund_id . ').trigger("change");
                    }';
                }
                $script .= 'if($("#input_6_69-0").length>0){	
                        $("#input_6_69-0").val(' . $amount . '); 
                        $("#input_6_69-0").trigger("keyup"); 
                        $("#input_6_69-0").trigger("change"); 
                    }
                    if($("#input_11_69-0").length>0){	
                        $("#input_11_69-0").val(' . $amount . '); 
                        $("#input_11_69-0").trigger("keyup"); 
                        $("#input_11_69-0").trigger("change"); 
                    }
                    $(".gfield_repeater_items .ginput_amount").each(function() {
                        var num = parseFloat($(this).val().replace("$", "").replace( /,/g, \'\'));
                        fundTotal += (num || 0);
                    });
                    if($("#input_6_128").length>0){
                        $("#input_6_128").val(fundTotal.toFixed(2));
                        $("#input_6_128").change();
                    }
                    if($("#input_11_128").length>0){
                        console.log(fundTotal.toFixed(2));
                        $("#input_11_128").val(fundTotal.toFixed(2));
                        $("#input_11_128").change();
                    }
                }, 1200);' .
                        '})(jQuery);';
                GFFormDisplay::add_init_script($form['id'], 'gform_my_function', GFFormDisplay::ON_PAGE_RENDER, $script);
                return $form;
            }

            add_filter('gform_addon_pre_process_feeds_6', function ( $feeds, $entry ) {
                $intervalStr = strtolower($entry['17']);
                $startDate = $entry['55'];
                $endDate = $entry['56'];
                if ($intervalStr == 'monthly') {
                    $intervalVal = '1';
                }
                if ($intervalStr == 'quarterly') {
                    $intervalVal = '3';
                }
                if ($intervalStr == 'Annually') {
                    $intervalVal = '12';
                }
                $ts1 = strtotime($startDate);
                $ts2 = strtotime($endDate);
                $year1 = date('Y', $ts1);
                $year2 = date('Y', $ts2);
                $month1 = date('m', $ts1);
                $month2 = date('m', $ts2);
                $totalOccurrences = (($year2 - $year1) * 12) + ($month2 - $month1);
                foreach ($feeds as &$feed) {
                    $feed['meta']['billingCycle_unit'] = 'month';
                    $feed['meta']['billingCycle_length'] = $intervalVal;
                }
                return $feeds;
            }, 10, 5);


            add_filter('gform_addon_pre_process_feeds_11', function ( $feeds, $entry ) {
                $intervalStr = strtolower($entry['17']);
                $startDate = $entry['55'];
                $endDate = $entry['56'];
                if ($intervalStr == 'monthly') {
                    $intervalVal = '1';
                }
                if ($intervalStr == 'quarterly') {
                    $intervalVal = '3';
                }
                if ($intervalStr == 'Annually') {
                    $intervalVal = '12';
                }
                $ts1 = strtotime($startDate);
                $ts2 = strtotime($endDate);
                $year1 = date('Y', $ts1);
                $year2 = date('Y', $ts2);
                $month1 = date('m', $ts1);
                $month2 = date('m', $ts2);
                $totalOccurrences = (($year2 - $year1) * 12) + ($month2 - $month1);
                
                foreach ($feeds as &$feed) {
                    $feed['meta']['billingCycle_unit'] = 'month';
                    $feed['meta']['billingCycle_length'] = $intervalVal;
                    $feed['meta']['recurringTimes'] = $totalOccurrences;
                }
                return $feeds;
            }, 10, 5);

            function getFundsSearch() {
                $args = array(
                    'post_type' => 'funds',
                    'order' => 'ASC',
                    'orderby' => 'title',
                    'posts_per_page' => -1
                );
                $fundposts = get_posts($args);
                ?>
                </main>
                <div class='search-dropdown'>
                    <select class="form-control select2" name='funds-s' id='funds-s'>
                        <option>Search Funds</option> 
                        <?php
                        foreach ($fundposts as $fundpost) {
                            $hide_funds_page = get_field('hide_funds_page', $fundpost->ID);
                            $link = get_permalink($fundpost->ID);
                            if (!empty($hide_funds_page)) {
                                $link = home_url() . "/donate/?fund=" . $fundpost->ID;
                            }
                            if ($fundpost->ID == 5147) {
                                $link = home_url() . "/donate/?womenslegacyfund=young100&fund=" . $fundpost->ID;
                            }
                            ?>
                            <option value="<?php echo $link ?>"><?php echo $fundpost->post_title ?></option> 
                        <?php }
                        ?>
                    </select>
                </div>
                <script>
                    jQuery(document).ready(function ($) {
                        $('#funds-s').change(function () {
                            var href = $(this).val();
                            window.location.href = href;
                        });
                    });
                </script><?php
            }

            function cptui_register_my_taxes() {

                /**
                 * Taxonomy: Categories.
                 */
                $labels = [
                    "name" => __("Categories", "custom-post-type-ui"),
                    "singular_name" => __("Category", "custom-post-type-ui"),
                ];

                $args = [
                    "label" => __("Categories", "custom-post-type-ui"),
                    "labels" => $labels,
                    "public" => true,
                    "publicly_queryable" => true,
                    "hierarchical" => true,
                    "show_ui" => true,
                    "show_in_menu" => true,
                    "show_in_nav_menus" => true,
                    "query_var" => true,
                    "rewrite" => ['slug' => 'funds_category', 'with_front' => true,],
                    "show_admin_column" => true,
                    "show_in_rest" => true,
                    "rest_base" => "funds_category",
                    "rest_controller_class" => "WP_REST_Terms_Controller",
                    "show_in_quick_edit" => true,
                ];
                register_taxonomy("funds_category", ["funds"], $args);
            }

            add_action('init', 'cptui_register_my_taxes');

            function cptui_register_my_taxes_funds_category() {

                /**
                 * Taxonomy: Categories.
                 */
                $labels = [
                    "name" => __("Categories", "custom-post-type-ui"),
                    "singular_name" => __("Category", "custom-post-type-ui"),
                ];

                $args = [
                    "label" => __("Categories", "custom-post-type-ui"),
                    "labels" => $labels,
                    "public" => true,
                    "publicly_queryable" => true,
                    "hierarchical" => true,
                    "show_ui" => true,
                    "show_in_menu" => true,
                    "show_in_nav_menus" => true,
                    "query_var" => true,
                    "rewrite" => ['slug' => 'funds_category', 'with_front' => true,],
                    "show_admin_column" => true,
                    "show_in_rest" => true,
                    "rest_base" => "funds_category",
                    "rest_controller_class" => "WP_REST_Terms_Controller",
                    "show_in_quick_edit" => true,
                ];
                register_taxonomy("funds_category", ["funds"], $args);
            }

            add_action('init', 'cptui_register_my_taxes_funds_category');
            add_action('init', 'exclude_custom_type_from_earch', 99);

            function exclude_custom_type_from_earch() {
                global $wp_post_types;

                if (post_type_exists('toolkit')) {

// exclude from search results
                    $wp_post_types['toolkit']->exclude_from_search = true;
                }
            }

            add_action('pre_get_posts', 'my_pre_get_research');

            function my_pre_get_research($query) {
                if (!empty($_POST['selectResearchCat'])) {

                    //limit the filter to frontend, main query and archive pages
                    if ($query->is_main_query() && !is_admin() && $query->is_archive && in_array($query->get('post_type'), array('research'))) {

                        $tax_query = array(
                            array(
                                'taxonomy' => 'research_category',
                                'field' => 'slug',
                                'terms' => $_POST['selectResearchCat'],
                            ),
                        );
                        $query->set('tax_query', $tax_query);
                    }
                }
            }

            add_action('acf/init', 'my_acf_op_init');

            function my_acf_op_init() {

                // Check function exists.
                if (function_exists('acf_add_options_page')) {

                    // Register options page.
                    $option_page = acf_add_options_page(array(
                        'page_title' => __('Research Page Settings'),
                        'menu_title' => __('Research Page Settings'),
                        'menu_slug' => 'research-page-settings',
                        'capability' => 'edit_posts',
                        'redirect' => false
                    ));

                    // Impact Bar Settings options page
                    acf_add_options_page(array(
                        'page_title' => __('Impact Bar Settings'),
                        'menu_title' => __('Impact Bar Settings'),
                        'menu_slug' => 'impact-bar-settings',
                        'capability' => 'edit_posts',
                        'icon_url'   => 'dashicons-chart-bar',
                        'position'   => 30,
                        'redirect'   => false
                    ));
                }
            }

            /* Register Impact Bar ACF fields in code (version-controlled, no DB export needed) */
            add_action('acf/include_fields', 'cfsloco_register_impact_bar_fields');

            function cfsloco_register_impact_bar_fields() {
                if (!function_exists('acf_add_local_field_group')) {
                    return;
                }

                acf_add_local_field_group(array(
                    'key' => 'group_impact_bar',
                    'title' => 'Impact Bar Settings',
                    'fields' => array(
                        /* Section Title */
                        array(
                            'key' => 'field_impact_bar_title',
                            'label' => 'Section Title',
                            'name' => 'impact_bar_title',
                            'type' => 'text',
                            'default_value' => 'Our Impact',
                            'placeholder' => 'Our Impact',
                            'instructions' => 'The heading displayed above the metrics.',
                        ),
                        /* Metrics Repeater */
                        array(
                            'key' => 'field_impact_bar_metrics',
                            'label' => 'Impact Metrics',
                            'name' => 'impact_bar_metrics',
                            'type' => 'repeater',
                            'min' => 1,
                            'max' => 6,
                            'layout' => 'block',
                            'button_label' => 'Add Metric',
                            'instructions' => 'Add up to 6 impact metrics. Each will display inside a dotted circle.',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_metric_number',
                                    'label' => 'Number',
                                    'name' => 'metric_number',
                                    'type' => 'text',
                                    'placeholder' => 'e.g. 10,000 or $120M',
                                    'instructions' => 'The large number shown inside the circle.',
                                ),
                                array(
                                    'key' => 'field_metric_label',
                                    'label' => 'Label',
                                    'name' => 'metric_label',
                                    'type' => 'text',
                                    'placeholder' => 'e.g. GRANTS GIVEN',
                                    'instructions' => 'Bold label shown below the circle.',
                                ),
                                array(
                                    'key' => 'field_metric_description',
                                    'label' => 'Description',
                                    'name' => 'metric_description',
                                    'type' => 'textarea',
                                    'rows' => 2,
                                    'placeholder' => 'e.g. To organizations, initiatives and projects through Dec. 11, 2025',
                                    'instructions' => 'Short description text below the label.',
                                ),
                            ),
                        ),
                        /* Button Text */
                        array(
                            'key' => 'field_impact_bar_button_text',
                            'label' => 'Button Text',
                            'name' => 'impact_bar_button_text',
                            'type' => 'text',
                            'default_value' => 'SEE OUR IMPACT',
                            'placeholder' => 'SEE OUR IMPACT',
                            'instructions' => 'Text displayed on the CTA button.',
                        ),
                        /* Button Link */
                        array(
                            'key' => 'field_impact_bar_button_link',
                            'label' => 'Button Link',
                            'name' => 'impact_bar_button_link',
                            'type' => 'url',
                            'default_value' => '/impact',
                            'placeholder' => '/impact',
                            'instructions' => 'URL the button links to. Use relative path (e.g. /impact) or full URL.',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'options_page',
                                'operator' => '==',
                                'value' => 'impact-bar-settings',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                ));
            }

            // add_filter( 'gform_entry_field_value', function ( $value, $field, $entry, $form ) {
            //     $classes = array(
            //         'GF_Field_Checkbox',
            //         'GF_Field_MultiSelect',
            //         'GF_Field_Radio',
            //         'GF_Field_Select',
            //     );
            //     foreach ( $classes as $class ) {
            //         if ( $field instanceof $class ) {
            //             $value = $field->get_value_entry_detail( RGFormsModel::get_lead_field_value( $entry, $field ), $currency = '', $use_text = true, $format = 'html' );
            //             break;
            //         }
            //     }
            //     return $value;
            // }, 10, 4 );

            add_action('gform_pre_submission_11', 'update_fund_name_based_onID');
            add_action('gform_pre_submission_6', 'update_fund_name_based_onID');

            function update_fund_name_based_onID($form) {
                // Get the date field.
                //print_r($_POST);
                //exit;
                $fund_rep_id = '1000';
                $fund_rep_field = GFAPI::get_field($form, $fund_rep_id);
                if (!empty($fund_rep_field)) {
                    $fund_rep_values = $fund_rep_field->get_value_submission(array());
                    $i = 0;
                    foreach ($fund_rep_values as $fund_val) {
                        $fund_title = get_the_title($fund_val[73]);
                        $_POST['input_145'][$i] = $fund_title;
                        $i++;
                    }
                }
            }

            add_action('gform_pre_submission_11', 'update_support_fund_hidden_field');

            function update_support_fund_hidden_field($form) {

                $support_fund_source_field = 141;
                $support_fund_field = GFAPI::get_field($form, $support_fund_source_field);
                if (!empty($support_fund_field)) {
                    $support_fund_field_val = $support_fund_field->get_value_submission(array());
//                                    $support_fund_destination_hidden_field = 147;

                    $_POST['input_147'] = $support_fund_field_val;
                }
            }
            add_action('save_post', 'purge_fb_url');

            function purge_fb_url($post_id) {
                $url = get_post_permalink($post_id);
                deal_update_purge_sharing_url($url);
                //if you get here then it's your post type so do your thing....
            }

            function deal_update_purge_sharing_url($url) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://graph.facebook.com",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "id=" . urlencode($url) . "&scrape=true&access_token=203701031031916%7Cbc95e7e71414218d3f1e8ce4179571c4",
                    CURLOPT_HTTPHEADER => array(
                        "cache-control: no-cache",
                        "content-type: application/x-www-form-urlencoded",
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
            //      echo "cURL Error #:" . $err;
                } else {
            //      echo $response;
                }
            }
            

function blog_load_more() {
  $ajaxposts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $_POST['paged'],
  ]);

  $response = '';

  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part('template-parts/page/content', 'blog');
    endwhile;
  } else {
    $response = '';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_blog_load_more', 'blog_load_more');
add_action('wp_ajax_nopriv_blog_load_more', 'blog_load_more');

add_filter( 'gform_merge_tag_filter', 'filter_all_fields', 10, 6 );
function filter_all_fields( $value, $merge_tag, $modifier, $field, $raw_value, $format ) {
 
    if ( $merge_tag == 'all_fields' && $field->type == 'total' ) {
        return false;
    } else {
        return $value;
    }
}

add_filter('gform_entry_post_save', function ($entry, $form) {

    // Only apply to form ID 20
    if ($form['id'] != 20) {
        return $entry;
    }

    // Loop through the repeater fields — adjust field ID if needed
    $repeater_index = 0;
    while (isset($entry["input_73"][$repeater_index])) {
        $value_73 = $entry["input_73"][$repeater_index];

        // If 73 is not '3966', clear related checkbox values
        if ($value_73 != '3966') {
            if (isset($entry["input_148.1"][$repeater_index])) {
                $entry["input_148.1"][$repeater_index] = '';
            }
            if (isset($entry["input_149.1"][$repeater_index])) {
                $entry["input_149.1"][$repeater_index] = '';
            }
        }

        $repeater_index++;
    }
/*echo "<pre>zaq";
print_r($entry);
exit;*/
    // Update the entry in the database
    GFAPI::update_entry($entry);

    return $entry;
}, 10, 2);

/*
add_action('gform_pre_submission', 'repeater_fields_customized_before_send', 10, 1);
function repeater_fields_customized_before_send($form)
{
if ($form['id'] == 20) {
  
         echo '<pre>';
     echo "-------before-----<br>";
     print_r($_POST);
     echo '</pre>';
      exit;
    
}

}


add_action('gform_pre_submission', 'repeater_fields_customized_before_send', 10, 1);
function repeater_fields_customized_before_send($form)
{
if ($form['id'] == 20) {
 
//         echo '<pre>';
//     echo "-------before-----<br>";
//     print_r($_POST);
//     echo '</pre>';
//      exit;
        return $_POST;  
}

}

add_filter('gform_pre_send_email', 'exclude_fields_from_all_fields_tag', 10, 4);
function exclude_fields_from_all_fields_tag($email, $message_format, $notification, $entry) {
    $form_id = 20; // Replace with your form ID
    $field_1_id = 73;
    $field_to_hide_id = 148;
    if ((int)$entry['form_id'] !== $form_id) {
        return $email;
    }
    if (rgar($entry, (string) $field_1_id) === '3966') {
        add_filter('gform_merge_tag_filter', function($value, $merge_tag, $modifier, $field) use ($field_to_hide_id) {
            if ((int)$field->id === $field_to_hide_id) {
                return ''; // Hide this field's output
            }
            return $value;
        }, 10, 4);
    }
    return $email;
}*/

// add_filter('gform_pre_send_email', 'filter_gf_email_checkbox_fields_simple', 10, 4);
function filter_gf_email_checkbox_fields_simple($email, $message_format, $notification, $entry) {
    $form_id = $entry['form_id'];
    if ($form_id != 20 || empty($entry[1000])) {
        return $email;
    }

    // Define the text patterns to remove
    $patterns = [
        '/Become a Legacy Leader \(Donations of \$1000 or more secure a membership in the Legacy Leader program\)/'
    ];

    // Split the message into blocks per repeater row
    $blocks = preg_split('/(<br ?\/?>\s*){2,}/i', $email['message']);
    $filtered_blocks = [];
    $repeater_rows = $entry[1000];

    foreach ($blocks as $index => $block) {
        $dropdown_val = isset($repeater_rows[$index]['73']) ? $repeater_rows[$index]['73'] : '';

        // If dropdown is not 3966, remove the legacy labels
        if ($dropdown_val !== '3966') {
            $block = preg_replace($patterns, '', $block);
        }

        $filtered_blocks[] = $block;
    }

    $email['message'] = implode("<br><br>", $filtered_blocks);
    return $email;
}

add_filter('gform_pre_send_email', 'clean_duplicate_legacy_labels', 10, 4);
function clean_duplicate_legacy_labels($email, $message_format, $notification, $entry) {
    if ($entry['form_id'] != 11) {
        return $email;
    }

    // Remove non-bolded text duplicates, but keep <strong> versions
    $patterns = [
        '/(?<!<strong>)Renew your Legacy Leader Membership(?!<\/strong>)/i',
        '/(?<!<strong>)Become a Legacy Leader \(Donations of \$1000 or more secure a membership in the Legacy Leader program\)(?!<\/strong>)/i',
    ];

    $email['message'] = preg_replace($patterns, '', $email['message']);
    return $email;
}
add_action('wp_head', 'add_custom_js_to_footer');
function add_custom_js_to_footer() {
    ?>
    <script>
 jQuery(document).ready(function($) {
     //var hash = window.location.hash.replace(/^#/, '');

    if (window.location.hash == '#newsletter-form') {
           setTimeout(function() {
            console.log("INNNN");   
           jQuery('#myModal').modal('show');
           }, 200);
        
    }
    console.log('Hash:', window.location.hash);
    console.log("KK1K");
 });
</script>
<style>
    #myModal {
    z-index: 999999;
</style>
<?php 
}
add_filter('post_link', 'custom_news_events_post_link', 10, 3);
function custom_news_events_post_link($permalink, $post, $leavename) {

    if ($post->post_type !== 'post') {
        return $permalink;
    }

    $categories = get_the_category($post->ID);

    if (!empty($categories)) {
        foreach ($categories as $category) {
            if ($category->slug === 'news-events') {
                return home_url('/news-events/' . $post->post_name . '/');
            }
        }
    }

    return $permalink;
}
add_action('init', function () {
    add_rewrite_rule(
        '^news-events/([^/]+)/?$',
        'index.php?post_type=post&name=$matches[1]',
        'top'
    );
});
add_action('template_redirect', function () {
    if (get_query_var('name') && strpos($_SERVER['REQUEST_URI'], '/news-events/') !== false) {
        global $wp_query;
        $wp_query->is_single = true;
        $wp_query->is_singular = true;
        $wp_query->is_404 = false;
    }
});
/* ================================================================= */
/* >>>>>> START: OUR TEAM PAGE (CPT + ACF + Import Tools) <<<<<<     */
/* Copy everything between START and END to migrate to live site.    */
/* Also copy: page-our-team.php (template) and CSS in custom.css     */
/* ================================================================= */

/* ============================================= */
/* OUR TEAM — Custom Post Type + Taxonomy        */
/* ============================================= */
add_action('init', 'cfsloco_register_team_cpt');
function cfsloco_register_team_cpt() {
    register_post_type('team_member', array(
        'labels' => array(
            'name'               => 'Our Team',
            'singular_name'      => 'Team Member',
            'add_new'            => 'Add New Member',
            'add_new_item'       => 'Add New Team Member',
            'edit_item'          => 'Edit Team Member',
            'new_item'           => 'New Team Member',
            'view_item'          => 'View Team Member',
            'search_items'       => 'Search Team Members',
            'not_found'          => 'No team members found',
            'not_found_in_trash' => 'No team members found in trash',
            'all_items'          => 'All Team Members',
            'menu_name'          => 'Our Team',
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-groups',
        'menu_position'=> 7,
        'supports'     => array('title', 'thumbnail'),
        'rewrite'      => array('slug' => 'team-member'),
        'show_in_rest' => true,
    ));

    register_taxonomy('team_type', 'team_member', array(
        'labels' => array(
            'name'          => 'Team Type',
            'singular_name' => 'Team Type',
            'search_items'  => 'Search Team Types',
            'all_items'     => 'All Team Types',
            'edit_item'     => 'Edit Team Type',
            'add_new_item'  => 'Add New Team Type',
            'menu_name'     => 'Team Type',
        ),
        'hierarchical' => true,
        'public'       => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'team-type'),
    ));
}

/* Register ACF fields for Team Member CPT */
add_action('acf/include_fields', 'cfsloco_register_team_member_fields');
function cfsloco_register_team_member_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_team_member',
        'title' => 'Team Member Details',
        'fields' => array(
            array(
                'key' => 'field_team_job_title',
                'label' => 'Job Title / Position',
                'name' => 'team_job_title',
                'type' => 'text',
                'placeholder' => 'e.g. Executive Director, President',
                'instructions' => 'The person\'s job title or board position.',
                'required' => 1,
            ),
            array(
                'key' => 'field_team_pronouns',
                'label' => 'Pronouns',
                'name' => 'team_pronouns',
                'type' => 'text',
                'placeholder' => 'e.g. she/her, he/him, they/them',
                'instructions' => 'Optional. Displayed in the bio popup only (not on the card grid).',
            ),
            array(
                'key' => 'field_team_email',
                'label' => 'Email',
                'name' => 'team_email',
                'type' => 'email',
                'placeholder' => 'name@cfsloco.org',
                'instructions' => 'Contact email (shown as EMAIL button in popup). Leave blank to hide.',
            ),
            array(
                'key' => 'field_team_phone',
                'label' => 'Phone',
                'name' => 'team_phone',
                'type' => 'text',
                'placeholder' => 'e.g. (805) 543-2323',
                'instructions' => 'Phone number (shown in popup). Leave blank to hide.',
            ),
            array(
                'key' => 'field_team_bio',
                'label' => 'Bio',
                'name' => 'team_bio',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'tabs' => 'all',
                'toolbar' => 'basic',
                'instructions' => 'Full biography displayed in the popup.',
            ),
            array(
                'key' => 'field_team_location',
                'label' => 'Location',
                'name' => 'team_location',
                'type' => 'text',
                'placeholder' => 'e.g. San Luis Obispo, CA',
                'instructions' => 'Location (displayed for Board members only).',
            ),
            array(
                'key' => 'field_team_industry',
                'label' => 'Industry',
                'name' => 'team_industry',
                'type' => 'text',
                'placeholder' => 'e.g. Finance, Education, Healthcare',
                'instructions' => 'Industry (displayed for Board members only).',
            ),
            array(
                'key' => 'field_team_order',
                'label' => 'Display Order',
                'name' => 'team_order',
                'type' => 'number',
                'default_value' => 0,
                'instructions' => 'Lower numbers appear first. Use to control sort order.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'team_member',
                ),
            ),
        ),
        'position' => 'normal',
        'style'    => 'default',
        'label_placement' => 'top',
    ));
}

/* ============================================= */
/* IMPORT STAFF — Tools > Import Staff            */
/* Reads page 6191, parses HTML, creates CPT posts*/
/* ============================================= */
add_action('admin_menu', 'cfsloco_import_staff_menu');
function cfsloco_import_staff_menu() {
    add_management_page(
        'Import Staff',
        'Import Staff',
        'manage_options',
        'import-staff',
        'cfsloco_import_staff_page'
    );
}

/**
 * Parse staff page HTML content into structured array of members.
 * All content is in a single WYSIWYG editor — flat HTML with images
 * marking the start of each staff member section.
 */
function cfsloco_parse_staff_page($post_id = 6191) {
    $post = get_post($post_id);
    if (!$post) {
        return array();
    }

    $content = $post->post_content;

    // Split content into chunks by <img> tags.
    // Each image starts a new staff member section.
    // Pattern: grab the img tag and everything after it until the next img.
    $parts = preg_split('/(<img[^>]*>)/i', $content, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    $members = array();
    $current_img = '';

    for ($i = 0; $i < count($parts); $i++) {
        $part = $parts[$i];

        // Check if this part is an img tag
        if (preg_match('/<img[^>]*>/i', $part)) {
            // Extract src from this img
            if (preg_match('/src=["\']([^"\']+)["\']/i', $part, $src_match)) {
                $current_img = $src_match[1];
            }
            continue;
        }

        // If we have an image, this part is the text content for that member
        if (!empty($current_img)) {
            $text_html = trim($part);
            if (empty(strip_tags($text_html))) {
                // Empty text block — skip but keep the image for next block
                continue;
            }

            // Remove <hr> tags from the text block
            $text_html = preg_replace('/<hr\s*\/?>/i', '', $text_html);
            $text_html = trim($text_html);

            if (empty(strip_tags($text_html))) {
                $current_img = '';
                continue;
            }

            // Parse the text block to extract name, title, and bio
            $member = cfsloco_parse_member_block($text_html, $current_img);
            if ($member) {
                $members[] = $member;
            }
            $current_img = ''; // Reset for next member
        }
    }

    return $members;
}

/**
 * Parse a single member's text block to extract name, title, and bio.
 * Splits all content by <br> and block elements into flat lines first.
 */
function cfsloco_parse_member_block($html, $img_src) {
    $html = trim($html);
    if (empty($html)) return null;

    // Extract email before flattening
    $email = '';
    $plain_text_full = strip_tags($html);
    if (preg_match('/mailto:([a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,})/i', $html, $email_match)) {
        $email = $email_match[1];
    } elseif (preg_match('/[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}/', $plain_text_full, $email_match)) {
        $email = $email_match[0];
    }

    // Extract phone before flattening
    $phone = '';
    if (preg_match('/(?:tel:)?(\+?1?\s*[-.]?\s*\(?\d{3}\)?\s*[-.]?\s*\d{3}\s*[-.]?\s*\d{4})/', $plain_text_full, $phone_match)) {
        $phone = trim($phone_match[1]);
    }

    // Flatten HTML into lines: replace <br>, </p>, </div>, </li>, </h*> with newlines
    $flat = $html;
    $flat = preg_replace('/<br\s*\/?>/i', "\n", $flat);
    $flat = preg_replace('/<\/(p|div|li|h[1-6])>/i', "\n", $flat);
    $flat = preg_replace('/<(p|div|li|h[1-6])[^>]*>/i', "\n", $flat);
    // Remove all remaining HTML tags
    $flat = strip_tags($flat);
    // Split into lines
    $lines = preg_split('/\n+/', $flat);
    $lines = array_map('trim', $lines);
    $lines = array_filter($lines, function($l) { return !empty($l); });
    $lines = array_values($lines);

    if (empty($lines)) return null;

    // Clean lines: remove email, phone, and their labels from each line
    $cleaned_lines = array();
    foreach ($lines as $line) {
        $cl = $line;
        // Remove email addresses
        $cl = preg_replace('/[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}/', '', $cl);
        // Remove phone numbers
        $cl = preg_replace('/\+?1?\s*[-.]?\s*\(?\d{3}\)?\s*[-.]?\s*\d{3}\s*[-.]?\s*\d{4}/', '', $cl);
        // Remove labels
        $cl = preg_replace('/\b(e-?mail|phone|tel|direct|office)\s*:\s*/i', '', $cl);
        $cl = trim($cl, " \t\n\r\0\x0B|·•–—:,");
        if (!empty($cl)) {
            $cleaned_lines[] = $cl;
        }
    }

    if (empty($cleaned_lines)) return null;

    // Line 1 = name, Line 2 = title, rest = bio
    $name = $cleaned_lines[0];
    $title = isset($cleaned_lines[1]) ? $cleaned_lines[1] : '';
    $bio_parts = array();
    for ($i = 2; $i < count($cleaned_lines); $i++) {
        $bio_parts[] = '<p>' . esc_html($cleaned_lines[$i]) . '</p>';
    }

    if (empty($name)) return null;

    return array(
        'name'  => trim($name),
        'title' => trim($title),
        'bio'   => implode("\n", $bio_parts),
        'img'   => $img_src,
        'email' => trim($email),
        'phone' => trim($phone),
    );
}

/**
 * Render the Import Staff admin page.
 */
function cfsloco_import_staff_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    echo '<div class="wrap">';
    echo '<h1>Import Staff from Page</h1>';
    echo '<p>This tool reads the Staff page (ID 6191) and creates <strong>team_member</strong> posts with ACF fields.</p>';

    // Handle import action
    if (isset($_POST['cfsloco_do_import']) && check_admin_referer('cfsloco_import_staff_nonce')) {
        cfsloco_run_staff_import();
        echo '</div>';
        return;
    }

    // Preview
    $members = cfsloco_parse_staff_page(6191);

    // Always show raw content for debugging
    $post_obj = get_post(6191);
    $raw_content = $post_obj ? $post_obj->post_content : '';
    $rendered_content = $post_obj ? apply_filters('the_content', $raw_content) : '';

    if (!empty($members)) {
        echo '<h2>Preview — ' . count($members) . ' staff members found</h2>';
        echo '<table class="widefat striped" style="max-width:1200px;">';
        echo '<thead><tr><th style="width:60px;">Photo</th><th>Name</th><th>Title</th><th>Email</th><th>Phone</th><th>Bio (snippet)</th></tr></thead>';
        echo '<tbody>';

        foreach ($members as $i => $m) {
            $bio_snippet = wp_trim_words(strip_tags($m['bio']), 20, '...');
            echo '<tr>';
            echo '<td><img src="' . esc_url($m['img']) . '" style="width:50px;height:50px;object-fit:cover;border-radius:3px;"></td>';
            echo '<td><strong>' . esc_html($m['name']) . '</strong></td>';
            echo '<td>' . esc_html($m['title']) . '</td>';
            echo '<td>' . esc_html(!empty($m['email']) ? $m['email'] : '—') . '</td>';
            echo '<td>' . esc_html(!empty($m['phone']) ? $m['phone'] : '—') . '</td>';
            echo '<td>' . esc_html($bio_snippet) . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';

        // Import button
        echo '<form method="post" style="margin-top:20px;">';
        wp_nonce_field('cfsloco_import_staff_nonce');
        echo '<input type="hidden" name="cfsloco_do_import" value="1">';
        echo '<p><button type="submit" class="button button-primary button-hero">Import ' . count($members) . ' Staff Members</button></p>';
        echo '<p class="description">This will create team_member posts, set ACF fields, sideload photos, and assign the "Staff" taxonomy term. Existing members with the same name will be skipped.</p>';
        echo '</form>';
    } else {
        echo '<div class="notice notice-error"><p>No staff members found. Check the raw content below to debug the parsing.</p></div>';
    }

    // Debug section — raw content
    echo '<hr style="margin:30px 0;">';
    echo '<h3>Debug: Raw Page Content (post_content)</h3>';
    echo '<textarea readonly style="width:100%;height:300px;font-family:monospace;font-size:11px;">' . esc_textarea($raw_content) . '</textarea>';

    echo '<h3 style="margin-top:20px;">Debug: Rendered HTML</h3>';
    echo '<textarea readonly style="width:100%;height:300px;font-family:monospace;font-size:11px;">' . esc_textarea($rendered_content) . '</textarea>';

    echo '</div>';
}

/**
 * Find a media library attachment ID from an image URL.
 * Tries multiple strategies to be as robust as possible.
 */
function cfsloco_find_attachment_by_url($img_url) {
    global $wpdb;

    if (empty($img_url)) return 0;

    // Extract filename parts
    $filename = basename($img_url);
    $clean_filename = preg_replace('/-\d+x\d+(?=\.\w+$)/', '', $filename);
    $name_only = pathinfo($clean_filename, PATHINFO_FILENAME);

    // Also extract the uploads-relative path if present (e.g. 2024/03/photo.jpg)
    $uploads_path = '';
    if (preg_match('#/wp-content/uploads/(.+)$#i', $img_url, $path_match)) {
        $uploads_path = $path_match[1];
        $clean_uploads_path = preg_replace('/-\d+x\d+(?=\.\w+$)/', '', $uploads_path);
    }

    // 1. Direct URL match
    $attachment_id = attachment_url_to_postid($img_url);
    if ($attachment_id) return $attachment_id;

    // 2. URL without size suffix
    $clean_url = preg_replace('/-\d+x\d+(?=\.\w+$)/', '', $img_url);
    if ($clean_url !== $img_url) {
        $attachment_id = attachment_url_to_postid($clean_url);
        if ($attachment_id) return $attachment_id;
    }

    // 3. Search _wp_attached_file by clean uploads path
    if (!empty($clean_uploads_path)) {
        $attachment_id = $wpdb->get_var($wpdb->prepare(
            "SELECT post_id FROM {$wpdb->postmeta}
             WHERE meta_key = '_wp_attached_file'
             AND meta_value = %s
             LIMIT 1",
            $clean_uploads_path
        ));
        if ($attachment_id) return (int) $attachment_id;
    }

    // 4. Search _wp_attached_file by clean filename (LIKE)
    $attachment_id = $wpdb->get_var($wpdb->prepare(
        "SELECT post_id FROM {$wpdb->postmeta}
         WHERE meta_key = '_wp_attached_file'
         AND meta_value LIKE %s
         LIMIT 1",
        '%' . $wpdb->esc_like($clean_filename)
    ));
    if ($attachment_id) return (int) $attachment_id;

    // 5. Search _wp_attachment_metadata for resized filenames
    $attachment_id = $wpdb->get_var($wpdb->prepare(
        "SELECT post_id FROM {$wpdb->postmeta}
         WHERE meta_key = '_wp_attachment_metadata'
         AND meta_value LIKE %s
         LIMIT 1",
        '%' . $wpdb->esc_like($filename) . '%'
    ));
    if ($attachment_id) return (int) $attachment_id;

    // 6. Search by guid
    $attachment_id = $wpdb->get_var($wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts}
         WHERE post_type = 'attachment'
         AND guid LIKE %s
         LIMIT 1",
        '%' . $wpdb->esc_like($clean_filename)
    ));
    if ($attachment_id) return (int) $attachment_id;

    // 7. Fuzzy search by name only (without extension) in post_title
    $attachment_id = $wpdb->get_var($wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts}
         WHERE post_type = 'attachment'
         AND post_title LIKE %s
         LIMIT 1",
        '%' . $wpdb->esc_like($name_only) . '%'
    ));
    if ($attachment_id) return (int) $attachment_id;

    return 0;
}

/**
 * Run the actual import — create team_member posts from parsed data.
 */
function cfsloco_run_staff_import() {
    $members = cfsloco_parse_staff_page(6191);

    if (empty($members)) {
        echo '<div class="notice notice-error"><p>No members found to import.</p></div>';
        return;
    }

    // Ensure "Staff" term exists in team_type taxonomy
    $staff_term = term_exists('Staff', 'team_type');
    if (!$staff_term) {
        $staff_term = wp_insert_term('Staff', 'team_type', array('slug' => 'staff'));
    }
    $staff_term_id = is_array($staff_term) ? $staff_term['term_id'] : $staff_term;

    // Need media functions for sideloading
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');

    $imported = 0;
    $skipped = 0;
    $errors = array();

    foreach ($members as $i => $m) {
        $name = sanitize_text_field($m['name']);

        // Check for duplicate
        $existing = get_posts(array(
            'post_type'   => 'team_member',
            'title'       => $name,
            'post_status' => 'any',
            'numberposts' => 1,
        ));
        if (!empty($existing)) {
            $skipped++;
            continue;
        }

        // Create the post
        $post_id = wp_insert_post(array(
            'post_type'   => 'team_member',
            'post_title'  => $name,
            'post_status' => 'publish',
        ));

        if (is_wp_error($post_id)) {
            $errors[] = $name . ': ' . $post_id->get_error_message();
            continue;
        }

        // Set taxonomy
        wp_set_object_terms($post_id, intval($staff_term_id), 'team_type');

        // Set ACF fields
        update_field('team_job_title', sanitize_text_field($m['title']), $post_id);
        update_field('team_bio', wp_kses_post($m['bio']), $post_id);
        update_field('team_email', sanitize_email($m['email']), $post_id);
        update_field('team_phone', sanitize_text_field($m['phone']), $post_id);
        update_field('team_order', $i + 1, $post_id);

        // Set featured image from existing media library
        if (!empty($m['img'])) {
            $attachment_id = cfsloco_find_attachment_by_url($m['img']);

            if ($attachment_id) {
                set_post_thumbnail($post_id, $attachment_id);
            }
        }

        $imported++;
    }

    // Results
    echo '<div class="notice notice-success"><p><strong>Import complete!</strong></p></div>';
    echo '<ul style="font-size:14px;">';
    echo '<li>Imported: <strong>' . $imported . '</strong> staff members</li>';
    if ($skipped > 0) {
        echo '<li>Skipped (already exist): <strong>' . $skipped . '</strong></li>';
    }
    if (!empty($errors)) {
        echo '<li style="color:red;">Errors: <strong>' . count($errors) . '</strong>';
        echo '<ul>';
        foreach ($errors as $err) {
            echo '<li>' . esc_html($err) . '</li>';
        }
        echo '</ul></li>';
    }
    echo '</ul>';
    echo '<p><a href="' . admin_url('edit.php?post_type=team_member') . '" class="button">View All Team Members</a></p>';
}

/* ============================================= */
/* IMPORT BOARD — Tools > Import Board            */
/* Reads page 873, parses HTML, creates CPT posts */
/* ============================================= */
add_action('admin_menu', 'cfsloco_import_board_menu');
function cfsloco_import_board_menu() {
    add_management_page(
        'Import Board',
        'Import Board',
        'manage_options',
        'import-board',
        'cfsloco_import_board_page'
    );
}

/**
 * Parse Board of Directors page (ID 873) into structured array.
 * Each table cell contains name on line 1, and optional position on line 2 (bold/italic),
 * separated by <br> within the same cell.
 */
function cfsloco_parse_board_page($post_id = 873) {
    $post = get_post($post_id);
    if (!$post) return array();

    $content = $post->post_content;
    $rendered = apply_filters('the_content', $content);

    // Use DOMDocument to parse
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML('<?xml encoding="UTF-8"><div id="wrap">' . $rendered . '</div>');
    libxml_clear_errors();

    $members = array();

    // Strategy 1: Check if content has a table
    $tables = $doc->getElementsByTagName('table');
    if ($tables->length > 0) {
        foreach ($tables as $table) {
            $rows = $table->getElementsByTagName('tr');
            foreach ($rows as $row) {
                $cells = $row->getElementsByTagName('td');
                foreach ($cells as $cell) {
                    $full_text = trim($cell->textContent);
                    if (empty($full_text)) continue;

                    // Skip headings
                    if (preg_match('/board\s*of\s*directors/i', $full_text)) continue;
                    if (preg_match('/^\d{4}\s/', $full_text)) continue;

                    // Position = text inside <em> tag (that's where positions are)
                    $position = '';
                    $em_els = $cell->getElementsByTagName('em');
                    if ($em_els->length > 0) {
                        $position = trim($em_els->item(0)->textContent);
                    }

                    // Name = full cell text minus the position
                    $name = $full_text;
                    if (!empty($position)) {
                        $name = trim(str_replace($position, '', $full_text));
                    }
                    $name = trim($name);

                    if (empty($name)) continue;

                    $members[] = array('name' => $name, 'title' => $position);
                }
            }
        }
    }

    // Strategy 2: If no table, try flat text parsing
    if (empty($members)) {
        $wrap = $doc->getElementById('wrap');
        if (!$wrap) return array();

        // Get all block-level elements
        $block_tags = array('p', 'div', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6');
        $all_elements = array();
        foreach ($wrap->getElementsByTagName('*') as $el) {
            if (in_array(strtolower($el->nodeName), $block_tags)) {
                $all_elements[] = $el;
            }
        }

        foreach ($all_elements as $el) {
            $full_text = trim($el->textContent);
            if (empty($full_text)) continue;
            if (preg_match('/board\s*of\s*directors/i', $full_text)) continue;
            if (preg_match('/^\d{4}\s/', $full_text)) continue;

            // Position = text inside <em> tag
            $position = '';
            $em_els = $el->getElementsByTagName('em');
            if ($em_els->length > 0) {
                $position = trim($em_els->item(0)->textContent);
            }

            $name = $full_text;
            if (!empty($position)) {
                $name = trim(str_replace($position, '', $full_text));
            }
            $name = trim($name);
            if (empty($name)) continue;

            $members[] = array('name' => $name, 'title' => $position);
        }
    }

    return $members;
}

/**
 * Recursively extract text nodes with bold/italic info.
 */
function cfsloco_extract_text_nodes($node, &$results) {
    foreach ($node->childNodes as $child) {
        if ($child->nodeType === XML_TEXT_NODE) {
            $text = trim($child->textContent);
            if (!empty($text)) {
                // Check parent chain for bold/italic
                $is_bold = cfsloco_node_has_ancestor($child, array('strong', 'b', 'em', 'i'));
                $results[] = array('text' => $text, 'is_bold' => $is_bold);
            }
        } elseif ($child->nodeType === XML_ELEMENT_NODE) {
            $tag = strtolower($child->nodeName);
            // For block elements, treat their text content as a unit
            if (in_array($tag, array('p', 'div', 'li', 'td', 'th', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'))) {
                $text = trim($child->textContent);
                if (!empty($text)) {
                    $has_bold = $child->getElementsByTagName('strong')->length > 0
                             || $child->getElementsByTagName('b')->length > 0
                             || $child->getElementsByTagName('em')->length > 0
                             || $child->getElementsByTagName('i')->length > 0;
                    $results[] = array('text' => $text, 'is_bold' => $has_bold);
                }
            } else {
                cfsloco_extract_text_nodes($child, $results);
            }
        }
    }
}

/**
 * Check if a DOM node has an ancestor with given tag names.
 */
function cfsloco_node_has_ancestor($node, $tags) {
    $parent = $node->parentNode;
    while ($parent) {
        if ($parent->nodeType === XML_ELEMENT_NODE && in_array(strtolower($parent->nodeName), $tags)) {
            return true;
        }
        $parent = $parent->parentNode;
    }
    return false;
}

/**
 * Render the Import Board admin page.
 */
function cfsloco_import_board_page() {
    if (!current_user_can('manage_options')) return;

    echo '<div class="wrap">';
    echo '<h1>Import Board of Directors from Page</h1>';
    echo '<p>This tool reads the Board of Directors page (ID 873) and creates <strong>team_member</strong> posts with the "Board of Directors" taxonomy term.</p>';

    // Handle import action
    if (isset($_POST['cfsloco_do_board_import']) && check_admin_referer('cfsloco_import_board_nonce')) {
        cfsloco_run_board_import();
        echo '</div>';
        return;
    }

    // Preview
    $members = cfsloco_parse_board_page(873);

    // Raw content for debugging
    $post_obj = get_post(873);
    $raw_content = $post_obj ? $post_obj->post_content : '';
    $rendered_content = $post_obj ? apply_filters('the_content', $raw_content) : '';

    if (!empty($members)) {
        echo '<h2>Preview — ' . count($members) . ' board members found</h2>';
        echo '<table class="widefat striped" style="max-width:800px;">';
        echo '<thead><tr><th>#</th><th>Name</th><th>Position</th></tr></thead>';
        echo '<tbody>';

        foreach ($members as $i => $m) {
            echo '<tr>';
            echo '<td>' . ($i + 1) . '</td>';
            echo '<td><strong>' . esc_html($m['name']) . '</strong></td>';
            echo '<td>' . esc_html(!empty($m['title']) ? $m['title'] : '—') . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';

        echo '<form method="post" style="margin-top:20px;">';
        wp_nonce_field('cfsloco_import_board_nonce');
        echo '<input type="hidden" name="cfsloco_do_board_import" value="1">';
        echo '<p><button type="submit" class="button button-primary button-hero">Import ' . count($members) . ' Board Members</button></p>';
        echo '<p class="description">Creates team_member posts with "Board of Directors" taxonomy. Existing members with the same name will be skipped.</p>';
        echo '</form>';
    } else {
        echo '<div class="notice notice-error"><p>No board members found. Check the raw content below.</p></div>';
    }

    // Debug
    echo '<hr style="margin:30px 0;">';
    echo '<h3>Debug: Raw Page Content (post_content)</h3>';
    echo '<textarea readonly style="width:100%;height:300px;font-family:monospace;font-size:11px;">' . esc_textarea($raw_content) . '</textarea>';
    echo '<h3 style="margin-top:20px;">Debug: Rendered HTML</h3>';
    echo '<textarea readonly style="width:100%;height:300px;font-family:monospace;font-size:11px;">' . esc_textarea($rendered_content) . '</textarea>';

    echo '</div>';
}

/**
 * Run the board import — create team_member posts.
 */
function cfsloco_run_board_import() {
    $members = cfsloco_parse_board_page(873);

    if (empty($members)) {
        echo '<div class="notice notice-error"><p>No board members found to import.</p></div>';
        return;
    }

    // Ensure "Board of Directors" term exists
    $board_term = term_exists('Board of Directors', 'team_type');
    if (!$board_term) {
        $board_term = wp_insert_term('Board of Directors', 'team_type', array('slug' => 'board-of-directors'));
    }
    $board_term_id = is_array($board_term) ? $board_term['term_id'] : $board_term;

    $imported = 0;
    $skipped = 0;
    $errors = array();

    foreach ($members as $i => $m) {
        $name = sanitize_text_field($m['name']);

        // Check for duplicate
        $existing = get_posts(array(
            'post_type'   => 'team_member',
            'title'       => $name,
            'post_status' => 'any',
            'numberposts' => 1,
        ));
        if (!empty($existing)) {
            $skipped++;
            continue;
        }

        $post_id = wp_insert_post(array(
            'post_type'   => 'team_member',
            'post_title'  => $name,
            'post_status' => 'publish',
        ));

        if (is_wp_error($post_id)) {
            $errors[] = $name . ': ' . $post_id->get_error_message();
            continue;
        }

        // Set taxonomy
        wp_set_object_terms($post_id, intval($board_term_id), 'team_type');

        // Set ACF fields — only title/position and order, no bio/email/phone
        if (!empty($m['title'])) {
            update_field('team_job_title', sanitize_text_field($m['title']), $post_id);
        }
        update_field('team_order', $i + 1, $post_id);

        $imported++;
    }

    // Results
    echo '<div class="notice notice-success"><p><strong>Import complete!</strong></p></div>';
    echo '<ul style="font-size:14px;">';
    echo '<li>Imported: <strong>' . $imported . '</strong> board members</li>';
    if ($skipped > 0) {
        echo '<li>Skipped (already exist): <strong>' . $skipped . '</strong></li>';
    }
    if (!empty($errors)) {
        echo '<li style="color:red;">Errors: <strong>' . count($errors) . '</strong>';
        echo '<ul>';
        foreach ($errors as $err) {
            echo '<li>' . esc_html($err) . '</li>';
        }
        echo '</ul></li>';
    }
    echo '</ul>';
    echo '<p><a href="' . admin_url('edit.php?post_type=team_member') . '" class="button">View All Team Members</a></p>';
}

/* ================================================================= */
/* >>>>>> END: OUR TEAM PAGE (CPT + ACF + Import Tools) <<<<<<       */
/* ================================================================= */

//ini_set('display_errors', '0');
//ini_set('display_startup_errors', '0');
//error_reporting(E_ALL);