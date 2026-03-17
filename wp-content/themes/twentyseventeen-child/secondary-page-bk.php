<?php
/*
  Template Name: Secondary Page Backup
 */

get_header();
?>
<style>
    .site-content{
        padding-top: 0;
    }
    .funds .icon-search{
        display: none;
    }
    .funds .search-submit{
        background-color: #fff;
        color: #133d42;
        font-size: 16px;
        padding: 0;
    }
</style>

<div class="banner">
    <img class="rvl-up" src="/wp-content/uploads/2018/10/banner-inner.jpg"/>
    <div class="inner-banner-text">
        <div class="banner-title">
            <div class="head1  rvl-left" >
                <div class="container" style="position: relative;z-index: 3;"><span>How We Can Help</span></div>
                <div class="clearfix"></div>
            </div> 
            <div class="head2 rvl-right" >
                <div class="container" style="position: relative;z-index: 3;"><span>Advisors</span></div>
                <div class="clearfix"></div>
            </div> 
            <div class="clearfix"></div>
        </div>
    </div> 
</div>
<!--</div>-->
<div class="clearfix"></div>
<div class="top-text rvl-up">
    <div class="container">
        <h2>A Trusted Partnership</h2>
        <p>We consider attorneys, estate planners, financial advisors, CPAs, trust officers, insurance agents and other professionals to be valued partners in charitable giving.</p>
        <p>As your partner, we offer flexible philanthropic services to your clients. We've worked with professional advisors throughout San Luis Obispo County for more than 20 years to help your clients make an impact.</p>
        <p>Ensuring your clients' legacy of philanthropy - for generations to come.</p>
    </div>
</div>
<div class="full-with-image image-text-align">
    <div class="rvl-left col-md-5 full-with-image-left rvl-left padding0">
        <img src="/wp-content/uploads/2018/10/img5.jpg"/>
        <div class="clearfix"></div>

        <div class="col-md-offset-2 col-md-10 img-caption">
            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
        </div>
    </div>
    <div class="rvl-right col-md-7 full-with-image-right rvl-right">
        <div class="col-md-10 custom-padding">
            <h3>How We Serve Your Clients</h3>
            <ul>
                <li><strong>Partnering with you:</strong>  We're here to help serve your client's charitable giving needs. </li>
                <li><strong>Helping you build stronger relationships:</strong>  Your clients will appreciate the charitable impact they can make. </li>
                <li><strong>Connecting you with the community:</strong>  When you serve charitable clients, you leave a legacy for future generations.</li>
            </ul>
            <a class="learn-more-link bottom-left-link" href="#">Giving Options</a>
        </div>
    </div>
</div>
<div class="clearfix">
    
</div>
<div class="row funds">
    <div class="container">
        <h2 class="pull-left rvl-left">
            How We Serve You
        </h2>
        <div class="funds-search pull-right  rvl-right">
            <?php echo get_search_form(); ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid rvl-up">
        <div class="row display-flex">
            <div class="col-md-4 inline-flex">
                <a href="#" class="blurb-link">
                    <img src="/wp-content/uploads/2018/10/img6.jpg"/>
                    <div class="blurb-content">
                        <h4>Charitable Funds</h4>
                        <div class="line-container">
                            <p>Learn more about how to open a fund. </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 inline-flex">
                <a href="#" class="blurb-link">
                    <img src="/wp-content/uploads/2018/10/img7.jpg"/>
                    <div class="blurb-content">
                        <h4>Estate Planing</h4>
                        <div class="line-container">
                            <p>Learn more about how to leave a philanthropic legacy</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 inline-flex">
                <a href="#" class="blurb-link">
                    <img src="/wp-content/uploads/2018/10/img8.jpg"/>
                    <div class="blurb-content">
                        <h4>How and What To Give</h4>
                        <div class="line-container">
                            <p>Click here for full range of gift options.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid rvl-up">
        <div class="row display-flex">
            <div class="col-md-4 inline-flex">
                <a href="#" class="blurb-link">
                    <img src="/wp-content/uploads/2018/10/img11.jpg"/>
                    <div class="blurb-content">
                        <h4>Philanthropic Services</h4>
                        <div class="line-container">
                            <p>Learn more about the full range of our philanthropic services</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 inline-flex">
                <a href="#" class="blurb-link">
                    <img src="/wp-content/uploads/2018/10/img10.jpg"/>
                    <div class="blurb-content">
                        <h4>In Our Backyard Education Session for Donors</h4>
                        <div class="line-container">
                            <p>Learn more about our popular In Our Backyard donor education series.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 inline-flex">
                <a href="#" class="blurb-link">
                    <img src="/wp-content/uploads/2018/10/img9.jpg"/>
                    <div class="blurb-content">
                        <h4>In Our Backyard Education Session for Donors</h4>
                        <div class="line-container">
                            <p>Learn more about our popular In Our Backyard donor education series.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>
<!--</div>-->


<!-- footer links End -->
<div class="clearfix"></div>

<?php
get_footer();
?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.funds .search-submit').addClass('fa fa-search');
        $(".funds-search .search-field").attr("placeholder", "Search Your Funds");
        $(".menu-item").removeClass("current-menu-item");
        $(".about-us").addClass("current-menu-item");
    });
</script>
