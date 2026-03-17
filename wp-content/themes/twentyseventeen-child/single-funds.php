<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// echo $is_fund_page_hidden = get_field( 'hide_funds_page', get_the_ID());;
// if($is_fund_page_hidden==1){
//     echo "here";
//     exit;
//     header("Location: ".get_home_url());
//     exit;
// }
get_header();
?>
<style>
.main-wrap{
    margin-top: 20%;
}
.main-wrap div#primary{
    margin-top: 0;
    width: 70% !important;
    max-width: 100% !important;

}
.inner-banner-text .head1{
    margin-top: 0;
}
.entry-header{
    display: none;
}
a.general-btn{
    width: auto;
    position: absolute;
    top: 1px;
    right: 0;
    padding: 5px 10px;
}
.donation-form{
    position: relative;
}
h1, h2{
    padding-top: 5px;
    margin-bottom: 10px;
}
#secondary h1{
    font-weight: bold;
    color: #2f8992;
    font-size: 20px;
}
#secondary .textwidget, #secondary .textwidget p{
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
}
.entry-footer{
    display: none;
}
.inner-banner-text {
    margin-top: 0;
}
.inner-banner-text .head1{
    margin-bottom: 0;
}
.inner-banner-text {
    margin-top: 0;
    margin-bottom: 0;
    position: absolute;
    bottom: 41px;
    width: 100%;
}
.main-wrap {
    margin-top: 2%;
}
@media screen and (max-width:1024px){
    aside#secondary {
        width: 80% !important;
        /* margin: 0 auto; */
        float: none !important;
    }
    .main-wrap div#primary {
        width: 100% !important;
    }
}
@media screen and (max-width:880px){
    .main-wrap {
        margin-top: 20%;
    }
   
}
@media screen and (max-width:768px){
    .main-wrap {
        margin-top: 190px;
    }
    
}
</style>
<div class="banner">
    <?php $img= get_the_post_thumbnail();
    if(!empty($img)){
        echo $img;
    }else{
        echo "<img src='".home_url()."/wp-content/uploads/2019/01/How-We-Can-Help.jpeg'/>";
    }
    ?>
  <div class='container'>
  <a href="#" onclick="goBack()" class="back_fund">Back</a>
  </div>

     <script>
function goBack() {
  window.history.back();
}
</script>

    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1 rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span><?php echo get_the_title();?></span></div>
                <div class="clearfix"></div>
            </div> 
            <div class="head2 rvl-right" >
                <div class="clearfix"></div>
            </div> 
            <div class="clearfix"></div>
        </div>
           
    </div> 
</div>

<div class="container main-wrap">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();
            $view_fund_button = get_post_meta( get_the_ID(), 'hide_funds_page', true );
           if($view_fund_button==1) {
               wp_redirect( home_url() ); exit; 
           }
            

                get_template_part('template-parts/post/content', get_post_format());
                ?>
           
                <?php

                // the_post_navigation(array(
                //     'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'twentyseventeen') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '</span>%title</span>',
                //     'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'twentyseventeen') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-right')) . '</span></span>',
                // ));

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <aside id='secondary'>
        <?php $cffield=get_field('extended_description', get_the_ID());
            if(!empty($cffield)){
                echo $cffield;
            }else{
                dynamic_sidebar('donation-sidebar-content');
            }
        ;?>
        <div class='donation-form'>
            <?php 
             $redirect=get_field('redirect_to', get_the_ID());
             if(empty($redirect)){?>
            <label class='dollabr-label'>
                <input type='number' id='donation-amount' name='donation-amount'/>
            </label>
            <?php }else{?>
                <style>
            .donate-btn{
                left: 0;
                right: auto !important;
            }
            </style>
            <?php }
            ?>
        
        <a style='width: auto;' href="#" class="general-btn donate-btn">Donate</a>
        </div>
    </aside>
</div><!-- .wrap -->
<script>
jQuery(document).ready(function($){
    $('.general-btn').click(function(e){
        e.preventDefault();
        var amt=$('#donation-amount').val();
        <?php  if(empty($redirect)){?>
        if(amt>0){
            window.location.href="<?php echo home_url()?>/donate?fund=<?php echo get_the_ID()?>&amount="+amt;
        }else{
            alert('Please enter amount greater than 0');
        }
    <?php }else{?>
        window.open('<?php echo $redirect?>');
       // window.location.href="<?php echo home_url()?>/test?fund=<?php echo get_the_ID()?>&amount="+amt;
   <?php }?>
    });
});
</script>
<?php
get_footer();
