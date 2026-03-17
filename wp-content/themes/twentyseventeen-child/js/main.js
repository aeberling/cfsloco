// Changing the defaults
window.sr = ScrollReveal({
    reset: true,
    interval: 300});

// Reveals
sr.reveal('.rvl-up-custom', {
    duration: 1500,
    delay: 100,
    distance: '100px',
    origin: 'bottom',
    interval: 300
}, 500);
sr.reveal('.rvl-up', {
    duration: 1500,
    delay: 450,
    distance: '100px',
    origin: 'bottom',
    interval: 300
}, 1000);

sr.reveal('.rvl-left', {
    duration: 1500,
    delay: 250,
    distance: '80px',
    origin: 'left',
    interval: 300
}, 350);


sr.reveal('.rvl-right', {
    duration: 1500,
    delay: 450,
    distance: '80px',
    origin: 'right',
    interval: 300
}, 350);

sr.reveal('.rvl-right-rot', {
    duration: 1500,
    delay: 450,
    distance: '80px',
    origin: 'right',
    interval: 300,
    rotate: {
        z: -20
    }
}, 350);

sr.reveal('.rvl-sprout', {
    duration: 800,
    delay: 1000,
    scale: 0.25,
    distance: '100px',
    origin: 'bottom',
    interval: 300,
    easing: 'ease-out'
}, 1000);

fullscreen();
//$(window).resize(fullscreen);
//$(window).scroll(headerParallax);

function fullscreen() {
//    var masthead = $('.masthead');
//    var windowH = $(window).height();
//    var windowW = $(window).width();

//    masthead.width(windowW);
//    masthead.height(windowH);
}

function headerParallax() {
    var st = $(window).scrollTop();
    var headerScroll = $('.masthead h1');

    if (st < 500) {
        headerScroll.css('opacity', 1 - st / 1000);
        $('.masthead-arrow ').css('opacity', 0.5 - st / 250);
        headerScroll.css({
            '-webkit-transform': 'translateY(' + st / 7 + '%)',
            '-ms-transform': 'translateY(' + st / 7 + '%)',
            transform: 'translateY(' + st / 7 + '%)'
        });
    }

    var asp = $('.masthead-video .aspsilho');

    if (st < 500) {
        asp.css('opacity', 1 - st / 400);
        asp.css({
            '-webkit-transform': 'translateY(' + st / 7 + '%)',
            '-ms-transform': 'translateY(' + st / 7 + '%)',
            transform: 'translateY(' + st / 7 + '%)'
        });
    }
}

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
}


jQuery(document).ready(function ($) {
	
    $('#input_11_128').attr('readonly','true');


    let currentPage = 1;
    $('#load-more').on('click', function() {
      currentPage++;
		$('.load_loader').show();
        $('#load-more').hide();
      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'blog_load_more',
          paged: currentPage,
        },
        success: function (res) {
          $('#post-4153 ul.wp-block-post-template').append(res);
          $('.load_loader').hide();
        $('#load-more').show();
        }
      });
    });

    
    $('#field_11_141').removeClass("gfield_visibility_visible");
    $('#field_11_141').addClass("gfield_visibility_hidden");
    
    jQuery('li#field_11_55').append('<div class="disable_datepicker"></div>');
    jQuery('li#field_11_56').append('<div class="disable_datepicker"></div>');

    /* Donation form patch redirect when Women's Legacy Fund, Legacy Leader Young100 or Sustaining Legacy Leader Gift are selected  */
    jQuery('#field_11_1000 button').on('click', function(){
        jQuery('#field_11_1000 .bootstrap-select').on('change', function(){
            var funds_text= "";
            var funds_text = jQuery('#field_11_1000 .bootstrap-select .filter-option-inner-inner').text();
            console.log(funds_text);
            if(funds_text === "Women's Legacy Fund"){

                window.location.replace("https://www.cfsloco.org/donate?fund=3966");

            }else if(funds_text === "Become a Legacy Leader / Young 100"){

                window.location.replace("https://www.cfsloco.org/donate/?womenslegacyfund=young100&fund=5147");

            }else if(funds_text === "Sustaining Legacy Leader Gift"){

                window.location.replace("https://www.cfsloco.org/donate?fund=5148");

            }
        });
    });
    /* End of Donation Form patch */

    $("input[name='input_13']").click(function(){
        var donationType = $(this).val();
        if(donationType == 'Recurring') {
            $('#choice_11_133_1').val('Legacy Leader / Young 100|0');
            setTimeout(function() {
            if($('#label_11_133_1').hasClass('selected-button')) {
                $(".gfield_product_11_138").addClass('legacyRecurringOptions');
                $(".gfield_product_11_138").removeClass('otherRecurringOptions');
                $("#choice_11_138_0").click();
            } else {
	            $(".gfield_product_11_138").addClass('otherRecurringOptions');}
            }, 100);
            setTimeout(function() {
                if ($("#choice_11_133_1").is(':checked')) {
                    //jQuery('input[name="input_55"]').attr('disabled', true);
                    //jQuery('input[name="input_56"]').attr('disabled', true);
                    jQuery('div.disable_datepicker').show();
                    console.log('End');
                }
            }, 1500);
        } else {
            $('#choice_11_133_1').val('Legacy Leader / Young 100|1000');
            $(".gfield_product_11_138").removeClass('legacyRecurringOptions');
        }
    });
    
    
    if(jQuery('#choice_11_13_1').is(':checked')) {
        if ($("#choice_11_133_1").is(':checked')) {
            jQuery('#choice_11_133_1').val('Legacy Leader / Young 100|0');
            setTimeout(function() {
                jQuery(".gfield_product_11_138").addClass('legacyRecurringOptions');
                jQuery(".gfield_product_11_138").removeClass('otherRecurringOptions');
                jQuery("input[name='input_138']:checked").trigger('click');
            }, 1000);
            setTimeout(function() {
                //jQuery('input[name="input_55"]').attr('disabled', true);
                //jQuery('input[name="input_56"]').attr('disabled', true);
                jQuery('div.disable_datepicker').show();
                console.log('End');
            }, 4500);
        }
    }  
    
    
    $("input[name='input_133']").click(function(){
        var radioValue = $(this).val();
        if(radioValue == 'Legacy Leader / Young 100|1000') {
            $('#label_11_17_0').addClass('selected-button');
            $('.gchoice_11_17_1').hide();
            $('.gchoice_11_17_2').hide();
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            today = mm + '/' + dd + '/' + yyyy;
            $('#input_11_55').val(today);
            //$('#input_11_55').attr('disabled', true);
            
            var end_date = new Date();
            var end_dd = String(end_date.getDate()).padStart(2, '0');
            var end_mm = String(end_date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var end_yyyy = end_date.getFullYear() + 3;
            end_date = end_mm + '/' + end_dd + '/' + end_yyyy;
            $('#input_11_56').val(end_date);
           // $('#input_11_56').attr('disabled', true);
           jQuery('div.disable_datepicker').show();
        } else if(radioValue == 'Legacy Leader / Young 100|0') {
            $('#label_11_17_0').addClass('selected-button');
            $('.gchoice_11_17_1').hide();
            $('.gchoice_11_17_2').hide();
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            today = mm + '/' + dd + '/' + yyyy;
            $('#input_11_55').val(today);
            //$('#input_11_55').attr('disabled', true);
            
            var end_date = new Date();
            var end_dd = String(end_date.getDate()).padStart(2, '0');
            var end_mm = String(end_date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var end_yyyy = end_date.getFullYear() + 3;
            end_date = end_mm + '/' + end_dd + '/' + end_yyyy;
            $('#input_11_56').val(end_date);
            //$('#input_11_56').attr('disabled', true);
            jQuery('div.disable_datepicker').show();
        } else {
            $('#label_11_17_0').removeClass('selected-button');
            $('.gchoice_11_17_1').show();
            $('.gchoice_11_17_2').show();
            $('#input_11_55').val('');
            //$('#input_11_55').attr('disabled', false);
            $('#input_11_56').val('');
            //$('#input_11_56').attr('disabled', false);
            jQuery('div.disable_datepicker').hide();
        }
    });
    
    $("input[name='input_138']").click(function(){
        var radioValue = $(this).val();
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        
        if(radioValue == '$28.00/month|28') {
            $('#input_11_55').val(today);
            //$('#input_11_55').attr('disabled', true);
            
            var end_date = new Date();
            var end_dd = String(end_date.getDate()).padStart(2, '0');    
            var end_mm = String(end_date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var end_yyyy = end_date.getFullYear() + 3;
            end_date = end_mm + '/' + end_dd + '/' + end_yyyy;
            $('#input_11_56').val(end_date);
            //$('#input_11_56').attr('disabled', true);
            jQuery('div.disable_datepicker').show();
        }
        if(radioValue == '$50.00/month|50') {
            $('#input_11_55').val(today);
           // $('#input_11_55').attr('disabled', true);
            
            var end_date = new Date();
            end_date.setDate(end_date.getDate() + 609);
            var end_dd = String(end_date.getDate()).padStart(2, '0');
            var end_mm = String(end_date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var end_yyyy = end_date.getFullYear();
            end_date = end_mm + '/' + end_dd + '/' + end_yyyy;
            $('#input_11_56').val(end_date);
           // $('#input_11_56').attr('disabled', true);
           jQuery('div.disable_datepicker').show();
        }
        if(radioValue == '$100.00/month|100') {
            $('#input_11_55').val(today);
           // $('#input_11_55').attr('disabled', true);
            
            var end_date = new Date();
            end_date.setDate(end_date.getDate() + 304);
            var end_dd = String(end_date.getDate()).padStart(2, '0');
            var end_mm = String(end_date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var end_yyyy = end_date.getFullYear();
            end_date = end_mm + '/' + end_dd + '/' + end_yyyy;
            $('#input_11_56').val(end_date);
            //$('#input_11_56').attr('disabled', true);
            jQuery('div.disable_datepicker').show();
        }
    });
    

    
    var womenslegacyfund = getUrlParameter('womenslegacyfund');
    
    if(womenslegacyfund) {
        setTimeout(function() {
            $('.gchoice_11_133_0').hide();
            $('#label_11_133_1').addClass('selected-button');
            $('#choice_11_133_1').click();
        },500);
        $('#field_11_133').removeClass("gfield_visibility_hidden");
        $('#field_11_133 .admin-hidden-markup').hide();
        $('#field_11_133').addClass("gfield_visibility_visible");
        $('#field_11_1000').removeClass("gfield_visibility_visible");
        $('#field_11_1000').addClass("gfield_visibility_hidden");
        
        $('#field_11_134').addClass("gfield_visibility_visible");
        $('#field_11_134').removeClass("gfield_visibility_hidden");
        $('#field_11_135').addClass("gfield_visibility_visible");
        $('#field_11_135').removeClass("gfield_visibility_hidden");
    } else {
        $('#field_11_134').removeClass("gfield_visibility_visible");
        $('#field_11_134').addClass("gfield_visibility_hidden");
        $('#field_11_135').removeClass("gfield_visibility_visible");
        $('#field_11_135').addClass("gfield_visibility_hidden");
    }
	
	$("body.page #primary a[href^=http], body.page #primary a[href^=https], body.page #primary a[href^='/'], body.page #primary a[href^='./'], body.page #primary a[href^='../']").each(function(){
		if (this.href.indexOf(location.hostname) != -1) {
                   // var pathname = window.location.href;
                    //console.log(pathname);
                   // alert(pathname);
                   if(!$(this).hasClass('self_link')){
                        $(this).attr("target", "blank");
                   }
		}
	});


    $(".box-container-1").hover(function () {
        $(".box-description-1").slideDown("slow");
        $(".box-title-1").slideUp("slow");
    }).mouseleave(function () {
        $(".box-description-1").slideUp("slow");
        $(".box-title-1").slideDown("slow");
        
    });
    ;
    $(".box-container-2").hover(function () {
        $(".box-description-2").slideDown("slow");
        $(".box-title-2").slideUp("slow");
    }).mouseleave(function () {
        $(".box-description-2").slideUp("slow");
        $(".box-title-2").slideDown("slow");
        
    });
    ;
    $(".box-container-3").hover(function () {
        $(".box-description-3").slideDown("slow");
        $(".box-title-3").slideUp("slow");
    }).mouseleave(function () {
        $(".box-description-3").slideUp("slow");
        $(".box-title-3").slideDown("slow");
        
    });
    
    $(document).on('change', '#input_11_73-0', function() {
        if($(this).val() == 3966) {
            $('#field_11_141').addClass("gfield_visibility_visible");
            $('#field_11_141').removeClass("gfield_visibility_hidden");
        } else {
            $('#field_11_141').removeClass("gfield_visibility_visible");
            $('#field_11_141').addClass("gfield_visibility_hidden");
        }
        
        if($(this).val() == 5102) {
            $('#input_11_69-0').val('250');
            $('#input_11_69-0').change();
        } else {
            
        }
    });
    

    ////
    // donation form
    $(document).on('change', '.gfield_repeater_items .ginput_amount', function() {
        var fundTotal = 0;
        $(this).val(gformFormatMoney($(this).val()));
    
        
        $('.gfield_repeater_items .ginput_amount').each(function() {
          var num = parseFloat($(this).val().replace("$", "").replace( /,/g, ''));
          fundTotal += (num || 0);
        });
        console.log(fundTotal, 'fundTotal');
        
        if($("#input_6_128").length>0){
            $('#input_6_128').val(fundTotal.toFixed(2));
            $('#input_6_128').change();
        }
        
        if($("#input_11_128").length>0){
            $('#input_11_128').val(fundTotal.toFixed(2));
            $('#input_11_128').change();
        }
      });
    
      $(document).on('click', '.remove_repeater_item', function() {
        var fundTotal = 0;
        $('.gfield_repeater_items .ginput_amount').each(function() {
          var num = parseFloat($(this).val().replace("$", "").replace( /,/g, ''));
          fundTotal += (num || 0);
        });
        
        if($("#input_6_128").length>0){
            $('#input_6_128').val(fundTotal.toFixed(2));
            $('#input_6_128').change();
        }
        
        if($("#input_11_128").length>0){
            $('#input_11_128').val(fundTotal.toFixed(2));
            $('#input_11_128').change();
        }
        
    });
    
    function setStorage(myNum){
        localStorage.setItem('clicki', myNum);
    }
    
    function activeBook(i){
        var active = $('.listParentCatName.selected');
        var left = active.position().left;
        var currScroll= $(".catFilterPanel").scrollLeft(); 
        var contWidth = $('.catFilterPanel').width()/2; 
        var activeOuterWidth = active.outerWidth()/2; 
        left= left + currScroll - contWidth + activeOuterWidth;
    
    
        jQuery('.catFilterPanel').animate( { 
            scrollLeft: left
        },'slow');
    }
    
    if( $(".catFilterPanel").length > 0 ) {
        var clicki = localStorage.getItem('clicki');
        console.log(clicki);
        var i = clicki;
        if($('.listParentCatName.selected').length>0) {
            activeBook(i);
        }
    }

    
    //   $(document).on('click', '.add_repeater_item', function(e){
        
    //     $('.gfield_repeater_item').each(function(index, value) {
    //       if(index != 0) {
    //         if($(this).find('.bootstrap-select.gfield_select').length >= 2) {
    //           $(this).find('.bootstrap-select.gfield_select').last().remove();
    //         }
    //       }
    //       $("#field_3_1000 select").selectpicker('refresh');
    //     });
       
    //     if($('.gfield_repeater_item').length == 2) {
    //       //$('.gchoice_3_6_0 input#choice_3_6_0').prop('checked', true);
    //       //$('.gchoice_3_6_1 input#choice_3_6_1').prop('disabled', true);
    //       //$('#label_3_6_1').css('opacity', '0.5');
    //       if($('.gchoice_3_6_1 input#choice_3_6_1').is(":checked")) {
    //         alert('Recurring donation will apply to all funds selected');
    //       }
    //       /*if(!$('#gfield_description_3_6_1').length) {
    //         $('<div class="gfield_description" id="gfield_description_3_6_1">Recurring donations are not available for multiple funds.</div>').insertAfter( "#input_3_6" );
    //       }*/
    //     }
    //   });

    $('li.listCatName > a').click(function (e) {
        //ignore the click on the input element else the default behavior and manual toggle will negate each other
        if (e.target.tagName != 'INPUT') {
            $(this).find('input').prop('checked', function (i, checked) {
                return !checked
            });
        }
        //console.log($(this).parent().index());
        setStorage($(this).parent().index());
        $('form#formResearchCatFilter').submit();
        return false;
    });
    
    $('li.listParentCatName > a').click(function (e) {
        //ignore the click on the input element else the default behavior and manual toggle will negate each other
        if (e.target.tagName != 'INPUT') {
            $(this).find('input').prop('checked', function (i, checked) {
                return !checked
            });
        }
        //console.log($(this).parent().index());
        setStorage($(this).parent().index());
        $('form#formResearchCatFilter').submit();
        return false;
    });
    
    if( $(".catFilterPanel").length > 0 ) {
        const slider = document.querySelector('.catFilterPanel');
        let mouseDown = false;
        let startX, scrollLeft;
        
        let startDragging = function (e) {
          mouseDown = true;
          startX = e.pageX - slider.offsetLeft;
          scrollLeft = slider.scrollLeft;
        };
        let stopDragging = function (event) {
          mouseDown = false;
        };
        
        slider.addEventListener('mousemove', (e) => {
          e.preventDefault();
          if(!mouseDown) { return; }
          const x = e.pageX - slider.offsetLeft;
          const scroll = x - startX;
          slider.scrollLeft = scrollLeft - scroll;
        });
        
        // Add the event listeners
        slider.addEventListener('mousedown', startDragging, false);
        slider.addEventListener('mouseup', stopDragging, false);
        slider.addEventListener('mouseleave', stopDragging, false);
    }
    
    
    /*$('a.viewAllCatBtn').click(function (e) {
        window.location.href = window.location.href;
    });*/

    // Video Modal start //

        var vid_url = jQuery('#banner_video_below_hero').find('source').attr('src');
        // vid_url = vid_url+'?autoplay=1';
        jQuery("#video_01").on('hide.bs.modal', function() {
            jQuery("#video_02").attr('src', '');
        });
        jQuery("#video_01").on('show.bs.modal', function() {
            jQuery("#video_02").attr('src', vid_url);
        });

    // Video Modal end //
jQuery('li#field_11_148').first().hide();

jQuery('li#field_11_149').first().hide();

});