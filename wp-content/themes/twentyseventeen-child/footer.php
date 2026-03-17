<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<link  href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<style>
    html{
        /*overflow-x: hidden;*/
    }
    .connect{
        /*position: fixed;*/
        /*top: 24%;*/
        position: absolute;
        top: 6%;
        background-color: #b2cd4a;
        transform: rotate(-90deg);
        right: 0;
        -moz-opacity: 1;
        -webkit-opacity: 1;
        -webkit-opacity: 1;
        opacity: 1;
        -webkit-transform-origin: 100% 100%;
        /*        -ms-transition: all 0.5s ease-in-out;
                -moz-transition: all 0.5s ease-in-out;
                -webkit-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;*/
    }
    .connect-link{
        color: #333333;
        font-size: 22px;
        padding: 5px 20px;
        display: block;
        z-index: 9999994;
    }
    .connect-hidden .connect-link{
        font-size: 14px;
        text-align: center;
    }
    .connect-hidden{
        /*        position: fixed;
                top: 30%;*/
        position:absolute;
        top: 7.8%;
        right: -210px;
        background-color: #b2cd4a;
        -webkit-transform-origin: 100% 100%;
        /*width: 195px;*/
        width: 170px;
        cursor: pointer;
        /*        -ms-transition: all 0.5s ease-in-out;
                -moz-transition: all 0.5s ease-in-out;
                -webkit-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;*/
        z-index: 99999999;
    }
    .connect-hidden img{
        width: 100%;
    }
    .connect-hidden span{
        font-size: 14px;
        color: #fff;
        display: block;
    }
    .c-name{
        color: #333333 !important;
    }
    .connect-details{
        padding: 10px;
    }
    .show-hidden-connect{
        right: 0;
    }
    .fadeout{
        opacity: 0;
    }
    @media screen and (max-width: 768px){
        .connect-link {
            font-size: 15px;
        }
    }
</style>
</div><!-- #content -->
</div>
<!--<div id="scroller-anchor"></div>-->
<?php
wp_reset_postdata();
global $post;

if (is_page_template('how-we-can-help.php') || is_page_template('charitable-solutions.php') || ($post->ID == 364) || ($post->ID == 348) || ($post->ID == 308) || ($post->ID == 504) || ($post->ID == 476) || ($post->ID == 306)) {
    dynamic_sidebar('Connect with us sticky annie'); //donors, giving options, donor storeis, advisor & its all secondary pages, 
} else {
    if ($post->ID == 426) {
        dynamic_sidebar('connect with us sticky 2');  //finance & investment 
    } else {
        if (($post->ID == 310) || ($post->ID == 393) || ($post->ID == 446) || ($post->ID == 450)) {
            dynamic_sidebar('connect with us sticky 3');  //nonprofit & its all secondary pages
        } else {

            if (($post->ID == 312) || ($post->ID == 401) || ($post->ID == 395) || ($post->ID == 561)) {
                dynamic_sidebar('connect with us sticky 4');  //scholarships,FAQs, scholarship stories , available scholarships
            } else {
                dynamic_sidebar('Connect with us sticky heidi'); //about us, bord of directors, staff, the community (homepage), impact pages
            }
        }
    }
}
?>
<footer id="colophon" class="site-footer" role="contentinfo">

    <?php get_template_part('template-parts/impact-bar'); ?>

    <?php get_template_part('template-parts/footer-sitemap'); ?>

    <!-- <div class="upper-footer">
        <div class="container-fluid text-center">
            <div class="footer-logo upper-footer-col">
                <?php dynamic_sidebar('footer-logo'); ?>
            </div>
            <div class="upper-footer-col">
                <?php dynamic_sidebar('footer-aboutus'); ?>
            </div>
            <div class="upper-footer-col">
                <?php dynamic_sidebar('footer-donors'); ?>
            </div><div class="upper-footer-col">
                <?php dynamic_sidebar('footer-advisors'); ?>
            </div><div class="upper-footer-col">
                <?php dynamic_sidebar('footer-nonprofits'); ?>
            </div>
            <div class="upper-footer-col">
                <?php dynamic_sidebar('footer-students'); ?>
            </div><div class="upper-footer-col">
                <?php dynamic_sidebar('footer-impact'); ?>
            </div>
            <div class="upper-footer-col">
                <?php dynamic_sidebar('footer-quicklinks'); ?>
            </div>

        </div>
    </div> -->

    <div class="lower-footer blue-footer">
        <div class="col-md-8">
            <div class="privacy-policy">
                <?php dynamic_sidebar('footer-copyrights'); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-6 address">
                <?php dynamic_sidebar('footer-address'); ?>
            </div>
            <div class="col-md-5 address">
                <?php dynamic_sidebar('footer-contactinfo'); ?>
            </div>
            <div class="col-md-1 text-center social-icon">
                <?php dynamic_sidebar('footer-socialicons'); ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 bottom_links_signup">
            <div class="lower-footer-links row col-md-6">

<!--                <a href="https://www.cfstandards.org" ><img class="footer-img" src="/wp-content/uploads/2019/01/AccreditedCF_Seal_KO.png"/> </a>-->
                <?php dynamic_sidebar('footer Accredited Logo'); ?>
                <?php dynamic_sidebar('footer-bottomlinks'); ?>
            </div>
            <div class="lower-footer-links row col-md-6">
                <?php dynamic_sidebar('footer-newsletter-signup'); ?>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    <!--    <div class="wrap">
        </div>-->
    <!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #row -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
         setTimeout(function() { 
            $('#field_11_1000').find('select').each(function(){
                console.log($(this).val(), 'herere ');
                if($(this).val()=='3966'){
                    console.log('yesssss');
                    $('.support-fund').removeClass('gfield_visibility_hidden').addClass('gfield_visibility_visible');
                }else{
console.log('no');
				$('li#field_11_148').hide();
				}
            });
            $('.support-fund').find('input').prop('disabled', '');
            <?php if($_GET['fund']==5147){?>
            $('#field_11_55').find('input').prop('disabled', '').prop('readonly', true).removeClass('datepicker');
            $('#field_11_56').find('input').prop('disabled', '').prop('readonly', true).removeClass('datepicker');
         <?php }?>
        }, 3000);
        <?php if($_GET['fund']==5147){?>
        $('#label_11_13_1').click(function(){
             setTimeout(function() { 
                $('#field_11_55').find('input').prop('disabled', '').prop('readonly', true).removeClass('datepicker');
                $('#field_11_56').find('input').prop('disabled', '').prop('readonly', true).removeClass('datepicker');
            }, 1000);
        });
        <?php }?>
        $( ".showmore" ).each(function(index) {
            $(this).on('click', function(){
                //$(this).parent('.content_ar_fund').find('.showmore-content').addClass('forceshow').removeClass('forcehide');
                $(this).parent('.content_ar_fund').find('.fund-content').html($(this).parent('.content_ar_fund').find('.showmore-content').html());
                $(this).addClass('forcehide').removeClass('forceshow');
                $(this).parent('.content_ar_fund').find('.showless').addClass('forceshow').removeClass('forcehide');
                $(this).parents('.fund_cat_posts-inner').addClass('removeHeight');
                $(this).parents('.fund_cat_posts-inner').find('.action-btns').addClass('removeAbsolute');
            });
        });
        
        $( ".showless" ).each(function(index) {
            $(this).on('click', function(){
                //$(this).parents('.content_ar_fund').find('.showmore-content').addClass('forcehide').removeClass('forceshow');
                $(this).parent('.content_ar_fund').find('.fund-content').html($(this).parent('.content_ar_fund').find('.showless-content').html());
                $(this).addClass('forcehide').removeClass('forceshow');
                $(this).parent('.content_ar_fund').find('.showmore').addClass('forceshow').removeClass('forcehide');
                $(this).parents('.fund_cat_posts-inner').removeClass('removeHeight');
                $(this).parents('.fund_cat_posts-inner').find('.action-btns').removeClass('removeAbsolute');
            });
		});
        
        
        $('.select2').select2();
        <?php if($_GET['fund']!=5147){?>
        if($('.datepicker').length>0){
            $('.datepicker').datepicker();
            $(document).on('keydown','.datepicker', function(){
                console.log('keydown');
                return false;
            });
            
        }
        <?php }?>
        /*var fix = function() {
  var $select = $('#input_8_73'),
      $options = $('#input_8_73 option');
  
  $options.not(':first').each(function(){
    var label = $(this).text();
    if (label.indexOf('--') !== 0) {
      $('<optGroup/>')
        .attr('label', label)
        .appendTo($select);
      $(this).remove();
    } else {
      $select.find('optGroup').last().append($(this));
      var cleaned = $(this).html().replace('--','');
      $(this).html(cleaned);
    }
  });  
}
var fix2 = function() {
  var $select = $('#input_8_73-0'),
      $options = $('#input_8_73-0 option');
  
  $options.not(':first').each(function(){
    var label = $(this).text();
    if (label.indexOf('--') !== 0) {
      $('<optGroup/>')
        .attr('label', label)
        .appendTo($select);
      $(this).remove();
    } else {
      $select.find('optGroup').last().append($(this));
      var cleaned = $(this).html().replace('--','');
      $(this).html(cleaned);
    }
  });  
}
var Now;
if (performance.now) {
  Now = function() {
    return performance.now();
  };
} else if (Date.now) {
  Now = function() {
    return Date.now();
  };
} else {
  Now = function() {
    return new Date().getTime();
  }
}

var Time = function(f) {
  var s = Now();
  f();
  return (Now() - s) | 0;
};

var elapsed = Time(function() {
      fix();
      fix2();
});
    
console.log(elapsed + 'ms');
*/
$('select.gfield_select').selectpicker({'liveSearch':true});
$(document).on('click', '.add_repeater_item', function(){
    setTimeout(function () {
        var target=$('.gfield_repeater_item:last-of-type').find('select.gfield_select');
        console.log(target);
        $('.gfield_repeater_item:last-of-type').find('.dropdown-toggle').remove();
        $('.gfield_repeater_item:last-of-type').find('.bootstrap-select').removeClass('dropdown bootstrap-select');
        $(target).selectpicker({'liveSearch':true});
}, 1000);
   
});
// jQuery("#field_8_1000 select").each(function(){
    
//   });
        $('.addmore-fund').click(function(e){
            var this_id=$(this).attr('id');
            e.preventDefault();
            $('.'+this_id+'-drop select').val(1).trigger('change');
        });
        $('.remove-fund').click(function(e){
            var this_id=$(this).attr('id');
            this_id=this_id.split('-');
//            alert('.'+this_id[1]+'-drop select');
            e.preventDefault();
            $('.'+this_id[1]+'-drop select').val(0).trigger('change');
        });
//        $(document).on('keyup', '.amounts_list td input[type="number"]', function () {
//            console.log($('.ginput_container_total input').val());
//            var total_final = 0;
//            var temp = $('.ginput_container_total input').val();
//            if (temp != '') {
//                total_final = parseInt($('.ginput_container_total input').val());
//            }
//            var total=0;
//            $('.amounts_list td input[type="number"]').each(function () {
//                var this_val = $(this).val();
//                if (this_val != '') {
//                    var output = parseInt((this_val).match(/\d+/));
//                    total = total + output;
//                    if (output != 'NaN') {
//                        $(this).val(output);
//                    } else {
//                        $(this).val('0');
//                    }
//                    console.log(total);
//                }
//            });
//            $('.ginput_total').html('$' + total);
//            $('.ginput_container_total input').val(total);
//        });
        $(".funds-search .search-form").submit(function (e) {
            e.preventDefault();
            var search_field = $('.funds-search form input').val();
            window.location.href = '<?php echo home_url() ?>/funds-list?f=' + search_field;
        });
        $('.ginput_container_radio li label').click(function () {
            $(this).parents('.ginput_container_radio').children('ul').children('li').children('label').removeClass('selected-button');
            $(this).addClass('selected-button');
        });
        setTimeout(function () {
            if ($('.gfield_list_group input').length > 0) {
                $('.gfield_list_group input').attr('type', 'number');
            }
<?php if (!empty($_GET['f'])) { ?>
                $('.search-funds input').val('<?php echo $_GET['f'] ?>');
                $('.search-funds input').trigger('keyup');
<?php } ?>
            var html = $('#myModal .mc4wp-response').html();
            ///
            if (html != '') {
                $('#popup-response').html(html).show();
            } else {
                $('#popup-response').hide();
            }
        }, 2000);
        $('.search-icon').click(function (e) {
            e.preventDefault();
            $('.hidden-search').addClass('showsearch');
        });
        $('.connect-link').click(function () {
            $('.connect').toggleClass('fadeout');
            $('.connect-hidden').toggleClass('show-hidden-connect');
        });
        $('.connect-hidden').click(function () {
            $('.connect').removeClass('fadeout');
            $('.connect-hidden').removeClass('show-hidden-connect');
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 20
                },
                1200: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        });
    });

</script>   
<?php if (!is_page_template('how-we-can-help.php')) { ?>


    <script>
        jQuery(document).ready(function ($) {

            //        my code start here
            $(function () {

                var a = function () {
                    var b = $(window).scrollTop();
                    var d = $("#scroller-anchor").offset().top;
                    var f = $("#colophon").offset().top;
                    var c = $(".connect");
                    var h = $(".connect").width() + 110; // margin

                    if (b > d) {
                        var myTop = $(window).scrollTop() + 174;
                        if (myTop > f - h) {
                            myTop = f - h;

                        }
                        c.css({
                            position: "absolute",
                            top: myTop,
                            bottom: ""
                        });
                    } else {
                        if (b <= d) {
                            c.css({
                                position: "absolute",
                                top: "",
                                bottom: ""
                            });
                        }
                    }
                };
                $(window).scroll(a);
                a();
            });


            $(function () {

                var a = function () {
                    var b = $(window).scrollTop();
                    var d = $("#scroller-anchor").offset().top;
                    var f = $("#colophon").offset().top;
                    var c = $(".connect-hidden");
                    var h = $(".connect-hidden").height() + 50; // margin
                    if (b > d) {
                        var myTop = $(window).scrollTop() + 174;
                        if (myTop > f - h) {
                            myTop = f - h;

                        }
                        c.css({
                            position: "absolute",
                            top: myTop,
                            bottom: ""
                        });
                    } else {
                        if (b <= d) {
                            c.css({
                                position: "absolute",
                                top: "",
                                bottom: ""
                            });
                        }
                    }
                };
                $(window).scroll(a);
                a();
            });
            
           setTimeout(function(){
//$('.gfield_select').select2();
}, 1000);
            
            
        });
    </script>
    <!--<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"7717c017ce85dbfbf55940790","lid":"278dd11bd7","uniqueMethods":true}) })</script>
    <script>
    function showMailingPopUp() {
    require(["mojo/signup-forms/Loader�], function(L) { L.start({�baseUrl�:��"","uuid":"�.",�lid�:��."}) })
    document.cookie = "MCPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
    };
    document.getElementById("open-popup").onclick = function() {showMailingPopUp()};

    </script>-->

<?php } ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scrollreveal.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js?ver=<?php echo time();?>"></script>
<script>
/**************CFSLOCO: Womens Legacy Fund donation page updates Start***************/
jQuery(document).ready(function($) {
    // Function to handle checkbox toggle
function handleCheckboxToggle(index) {
        var $checkbox = $('#choice_11_148_1-' + index); // Legacy checkbox
        var $Renew_lagacy_checkbox = $('#choice_11_149_1-' + index); // Renew Legacy checkbox
        var $donationInput = $('#input_11_69-' + index);

        if ($checkbox.is(':checked')) {
            // If the Legacy checkbox is checked, validate donation amount
           if (!$donationInput.val()) {
                $donationInput.val('1000');  // Set to 1000 if no value
            } // Keep the value unchanged
            removeErrorMessage(index);  // Remove error message if legacy checkbox is checked
            $donationInput.trigger('change');  // Trigger change to apply any other logic
        } else if ($Renew_lagacy_checkbox.is(':checked')) {
            // If the Renew Legacy checkbox is checked, hide the error message
           $donationInput.val($donationInput.val());
			 removeErrorMessage(index);
            $('.donation-error-cls').hide();  // Hide the error message
        } else {
            // If neither checkbox is checked, clear the donation input
            $donationInput.val('');
            removeErrorMessage(index);  // Remove error message if no checkbox is selected
        }
    }

    // Function to format the donation input value (add $ and commas)
    function formatDonationInput(value) {
        if (!value) return '';  // If there's no value, return an empty string
        var number = parseFloat(value.replace(/[^0-9.-]+/g, '')); // Remove any non-numeric characters
        if (isNaN(number)) return ''; // If it's not a valid number, return empty
        return '$' + number.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); // Add commas and format as currency
    }

    // Function to validate donation amount and ensure it's >= $1000
    function validateDonationAmount(index) {
        var $donationInput = $('#input_11_69-' + index);
        var currentValue = $donationInput.val().replace(/[^0-9.-]+/g, '');  // Remove formatting before validation
        currentValue = parseFloat(currentValue);
        var fund_type = jQuery("#input_11_73-" + index).val();
        var legacy_checkbox_checked = jQuery("#choice_11_148_1-0:checked").length;
    var renew_legacy_checkbox_checked = jQuery("#choice_11_149_1-" + index + ":checked").length;  // New Renew Legacy checkbox check
 if (renew_legacy_checkbox_checked == 1) {
        removeErrorMessage(index);  // Remove any previous error message if Renew Legacy is checked
        return;  // Exit the function early, no validation needed
    }
        // If the donation amount is less than $1000, show the error message
        if (currentValue < 1000 && currentValue !== "" && fund_type == 3966 && legacy_checkbox_checked == 1) { //3966 is the ID of the Women's Legacy Fund
            showErrorMessage(index); // Show error message
            $donationInput.addClass('invalid'); // Optionally, add a class to style the input field (e.g., red border)
        } else {
            removeErrorMessage(index); // Remove error message if valid input
            $donationInput.removeClass('invalid');
        }
    }

    // Function to show the error message dynamically (only once per input field)
    function showErrorMessage(index) {
        // Check if the error message already exists, to prevent duplication
        if ($('#donation-error-' + index).length === 0) {
            var $errorMessage = $('<div>', {
                id: 'donation-error-' + index,
				class:'donation-error-cls',
                text: 'Donation amount must be at least $1000.',
                css: { 'color': 'red', 'margin-top': '5px' }
            });

            // Append the error message below the donation input field
            $('#input_11_69-' + index).after($errorMessage);
        }
    }

    // Function to remove the error message
    function removeErrorMessage(index) {
        $('#donation-error-' + index).remove(); // Remove the error message if input is valid or checkbox unchecked
 $('#donation-error-' + index).hide();
    }

    // Handle checkbox change event for any checkbox in the repeater
    $(document).on('change', 'input[name^="input_148.1"],  input[name^="input_149.1"]', function() {
        var index = $(this).attr('id').split('-').pop(); // Get the index based on the ID
        handleCheckboxToggle(index);
    });

    // Handle user input in the donation field for any input in the repeater
    $(document).on('input', 'input[name^="input_69"]', function() {
        var index = $(this).attr('id').split('-').pop(); // Get the index based on the ID
        if ($('#choice_11_148_1-' + index).is(':checked')) {
            validateDonationAmount(index);
        }
    });

    // Format donation amount as currency when the user stops typing
    $(document).on('blur', 'input[name^="input_69"]', function() {
        var index = $(this).attr('id').split('-').pop(); // Get the index based on the ID
        var $donationInput = $(this);
        var formattedValue = formatDonationInput($donationInput.val());
        $donationInput.val(formattedValue);
        validateDonationAmount(index);
    });

    // Initially set the state of the checkbox and input fields for existing items
    $('input[name^="input_148.1"]').each(function() {
        var index = $(this).attr('id').split('-').pop();
        handleCheckboxToggle(index);
    });
});


jQuery('.add_repeater_item').click(function(){
    // Hide the checkbox button for the newly added item
    var newItem = jQuery(this).closest('.repeater-wrapper'); // Assuming the wrapper has a class like 'repeater-wrapper'
    
    // Find the checkbox within the newly added item and hide it
    newItem.find('input[type="checkbox"]').hide();

});
jQuery(document.body).click(function(event) {
    // Check if the clicked element is '.add_repeater_item'
    if (jQuery(event.target).hasClass('add_repeater_item')) {
        // Find the newly added gfield_repeater_item container after clicking the button
        var newItem = jQuery(event.target).closest('.gfield_repeater').find('.gfield_repeater_item:last');  // Target the last added item

        // Hide the checkbox inside the newly added item
        newItem.find('li#field_11_148').hide();
newItem.find('li#field_11_149').hide();
newItem.find('.donation-error-cls').remove();
    }
});
jQuery(document.body).on('change', '#field_11_1000 .bootstrap-select', function(){
    // Get the selected value from the <select> element
    var selectedValue = jQuery(this).val();
    // Get the text displayed in the dropdown
    var funds_text = jQuery(this).find('.filter-option-inner-inner').text(); 
    
    console.log('check ' + funds_text);

    // Find the closest repeater item for the current dropdown
    var repeaterItem = jQuery(this).closest('.gfield_repeater_item');

    if(funds_text === "Women's Legacy Fund") {
        // Show the checkbox inside the specific repeater item
        repeaterItem.find('li#field_11_148').show();
repeaterItem.find('li#field_11_149').show();
    } else {
        // Hide the checkbox inside the specific repeater item
        repeaterItem.find('li#field_11_148').hide();
repeaterItem.find('li#field_11_149').hide();
    }
});


/********** CFSLOCO: Womens Legacy Fund donation page updates End***************/
</script>












<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <?php dynamic_sidebar('popup-newsletter-signup-header'); ?> 
                <!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->

            </div>
            <div class="modal-body">
                <p> </p>
                <span> <?php dynamic_sidebar('footer-newsletter-signup'); ?> </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Video Modal start -->
<div id="video_01" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"aria-hidden="true">×</button>
                </div> -->
                <div class="modal-body">
                    <iframe id="video_02" width="800" height="400" src="" frameborder="0" allowfullscreen> </iframe>
                </div>
        </div>
    </div>
</div>
<!-- Video Modal end -->
</body>
</html>