<?php /** * Template Name: Franchisors Template */ ?>
<?php $banner_section = get_field('banner_section'); ?>
<?php get_header(); ?>
<div class="mainBanner franchisors-page" style="background-image:url(<?php echo $banner_section['image'];?>)">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-6 wow zoomIn">
                    <h1 class="banner-heading text-white">
                        <?php echo $banner_section['heading'];?>
                    </h1>
                    <ul class="fran-list">
                        <?php $box_list = $banner_section['box_list'];?>
                        <?php $x=1; foreach ($box_list as $boxlist) {?>
                        <li>
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <?php echo $boxlist['heading']; ?>
                        </li>
                        <?php $x++;}?>
                    </ul>
                    <div class="btn-wrap">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="theme-btn"><?php echo $banner_section['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="solved-resale">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="sec-heading">
                    <h2>We’ve solved <br>
                        <strong> resales.</strong>
                    </h2>
                    <p>
                        Franchise Flippers provides a comprehensive resale solution so
                        you can save your team’s time and energy, sell more franchises,
                        and better serve your franchisees.
                    </p>
                    <div class="btn-wrap">
                        <a href="javascript:;" class="theme-btn bg-dark">Ready to learn more?</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="v-image">
                    <img src="assets/images/v-image.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2>HOW WE SOLVE
                        <strong> RESALES </strong>
                    </h2>
                </div>
            </div>
            <div class="col-lg-12 mt-md-5">
                <div class="steps-card">
                    <div class="step-one">
                        <b>01.</b>
                    </div>
                    <div class="step-des">
                        <h3>
                            <img src="assets/images/i-1.png" alt="">
                            You refer your franchisees to us
                        </h3>
                    </div>
                </div>
                <div class="steps-card">
                    <div class="step-one bg-dark">
                        <b>02.</b>
                    </div>
                    <div class="step-des">
                        <h3>
                            <img src="assets/images/i-2.png" alt="">
                            We guide them through a commission free resale process
                        </h3>
                    </div>
                </div>
                <div class="steps-card">
                    <div class="step-one">
                        <b>03.</b>
                    </div>
                    <div class="step-des">
                        <h3>
                            <img src="assets/images/i-3.png" alt="">
                            You stay in the loop with real time tracking of each
                            franchisee
                        </h3>
                    </div>
                </div>
                <div class="btn-wrap justify-content-center mt-md-5">
                    <a href="javascript:;" class="theme-btn bg-dark">Ready to get started?</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="commission-free-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2>COMMISSION FREE RESALE <br> PROCESS FOR Your
                        <strong> FRANCHISEES </strong>
                    </h2>
                    <b>Free Consultation</b>
                    <p>We listen to the franchisee to understand their situation and help them determine next steps.
                        When <br>
                        moving forward with us makes sense, we describe how we will help them value their franchise,
                        determine <br>
                        when to sell, and how to find a buyer.</p>
                </div>
            </div>
        </div>

        <div class="row mt-md-5">
            <div class="col-lg-4">
                <div class="pckg-card">
                    <img src="assets/images/icon-1.png" alt="">
                    <span class="price-name">Valuing the Franchise</span>
                    <div class="price-wrap">
                        <span>$699</span>
                        <h4>Value Assessment</h4>
                    </div>
                    <p>We provide your franchisee with an
                        independent in-depth understanding of
                        the value of their business and suggested
                        listing price so you don’t have to!
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pckg-card">
                    <img src="assets/images/icon-1.png" alt="">
                    <span class="price-name">How and When to Sell</span>
                    <div class="price-wrap">
                        <span>$499</span>
                        <h4>Exit Roadmap</h4>
                    </div>
                    <p>We deliver a customized Roadmap
                        outlining strategies and action steps for
                        when and how to sell the franchise.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pckg-card">
                    <img src="assets/images/icon-1.png" alt="">
                    <span class="price-name">Finding a <br> Buyer</span>
                    <div class="price-wrap">
                        <span>$2,750</span>
                        <h4>Marketing Assistance Program</h4>
                    </div>
                    <p>To get a deal done, we offer a commission
                        free marketing program. We list the
                        business for sale, qualify candidates, and
                        deliver the right buyer.
                    </p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="btn-wrap justify-content-center mt-md-5">
                    <a href="javascript:;" class="theme-btn">Book To Learn More</a>
                    <a href="javascript:;" class="theme-btn bg-dark">Other Franchisee Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-partners">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="sec-heading">
                    <h2>SOME OF OUR
                        <strong> PARTNERS... </strong>
                    </h2>
                </div>
                <div class="goto">
                    <ul class="counter-wrap" id="counter">
                        <li>
                            <div class="counter">
                                <div>
                                    <div>
                                        <span class="count">102</span>+
                                    </div>
                                    <span class="text">Franchisor Partners</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="partners-slider">
                    <div>
                        <div class="slide-image">
                            <img src="assets/images/trusted/1.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="slide-image">
                            <img src="assets/images/trusted/2.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="slide-image">
                            <img src="assets/images/trusted/3.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="slide-image">
                            <img src="assets/images/trusted/1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="client-reviews">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow zoomIn">
                <div class="sec-heading">
                    <h2 class="text-white">Here’s What <br>
                        <strong> Franchisees and <br> Franchisors</strong> <br> Think
                    </h2>
                </div>
                <ul class="fran-list">
                    <li>
                        <img src="assets/images/check-icon1.png" alt="">
                        No Commissions.
                    </li>
                    <li>
                        <img src="assets/images/check-icon1.png" alt="">
                        No Exclusives.
                    </li>
                    <li>
                        <img src="assets/images/check-icon1.png" alt="">
                        World Class Resale Support.
                    </li>
                </ul>
                <div class="btn-wrap">
                    <a href="javascript:;" class="theme-btn">BOOK TO LEARN MORE</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="slider-review">
                    <div>
                        <div class="testi-slide">
                            <p>
                                Selling a business for the first time is overwhelming.
                                Every business owner should have an exit strategy.
                                Franchise Flippers gave me direction, confidence and
                                helped me create the tools that I needed to sell. They
                                made the whole process more professional and more
                                efficient than trying to do this all myself.
                            </p>
                            <i class="fas fa-caret-down"></i>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/1.png" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Linda G</span>
                                        <span class="des">Liberty Tax Service (sold Dec 2021)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-slide">
                            <p>
                                Selling a business for the first time is overwhelming.
                                Every business owner should have an exit strategy.
                                Franchise Flippers gave me direction, confidence and
                                helped me create the tools that I needed to sell. They
                                made the whole process more professional and more
                                efficient than trying to do this all myself.
                            </p>
                            <i class="fas fa-caret-down"></i>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/1.png" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Linda G</span>
                                        <span class="des">Liberty Tax Service (sold Dec 2021)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>