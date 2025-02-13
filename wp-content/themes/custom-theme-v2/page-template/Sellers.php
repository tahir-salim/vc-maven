<?php /** * Template Name: Sellers Template */ ?>
<?php $banner_section = get_field('banner_section'); ?>
<?php $first_section = get_field('first_section'); ?>

<?php get_header(); ?>
<div class="mainBanner buyer-page" style="background-image:url(<?php echo $banner_section['image'];?>)">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-12 wow zoomIn">
                    <h1 class="banner-heading text-white">
                        <?php echo $banner_section['heading'];?>
                    </h1>
                    <p class="text-white">
                        <?php echo $banner_section['content'];?>
                    </p>
                    <div class="btn-wrap justify-content-center">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="theme-btn"><?php echo $banner_section['button_text'];?></a>
                        <a href="<?php echo $banner_section['button_link_2'];?>"
                            class="theme-btn"><?php echo $banner_section['button_text_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="looking-deal-sec" style="background-image:url(<?php echo $first_section['image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $first_section['heading'];?></h2>
                    <p class="text-white"><?php echo $first_section['content'];?>
                    </p>
                    <div class="btn-wrap">
                        <a href="<?php echo $first_section['button_link'];?>"
                            class="theme-btn btn-gray text-center"><?php echo $first_section['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="want-help-sec" style="background-image:url(<?php echo $first_section['image_2'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInRight">
                <div class="sec-heading text-end">
                    <h2><?php echo $first_section['heading_2'];?></h2>
                    <p><?php echo $first_section['content_2'];?></p>

                    <div class="btn-wrap justify-content-end">
                        <a href="<?php echo $first_section['button_link_2'];?>"
                            class="theme-btn text-center"><?php echo $first_section['button_text_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="free-buyer-service" style="background-image:url(<?php echo $first_section['image_3'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $first_section['heading_3'];?></h2>
                    <p class="text-white"><?php echo $first_section['content_3'];?></p>

                    <div class="btn-wrap">
                        <a href="<?php echo $first_section['button_link_3'];?>"
                            class="theme-btn text-center"><?php echo $first_section['button_text_3'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flipper-community">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h4><?php echo $first_section['heading_4'];?></h4>
                    <h5><?php echo $first_section['heading_5'];?></h5>
                    <p><?php echo $first_section['content_4'];?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="membership-free">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <?php $box_list = $first_section['box_list'];?>
                            <?php $x=1; foreach ($box_list as $boxlist) {?>
                            <th scope="col">
                                <div class="membership-card">
                                    <h3><?php echo $boxlist['p_1']; ?></h3>
                                    <div class="price">
                                        <span class="text-white"><?php echo $boxlist['p_2']; ?></span>
                                        <span class="usd-text"><?php echo $boxlist['p_3']; ?></span>
                                    </div>
                                    <h3><?php echo $boxlist['p_4']; ?></h3>
                                </div>
                            </th>
                            <?php $x++;}?>
                        </tr>
                    </thead>
                    <?php $box_list = $first_section['box_list_2'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>

                    <tr>
                        <?php echo $boxlist['list']; ?>
                    </tr>
                    <?php $x++;}?>

                </table>
                <div class="btn-wrap brands-btn">
                    <a href="<?php echo $first_section['button_link_4'];?>" class="theme-btn bg-grey text-center"><?php echo $first_section['button_text_4'];?></a>
                    <a href="<?php echo $first_section['button_link_5'];?>" class="theme-btn text-center"><?php echo $first_section['button_text_5'];?></a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="free-resource" style="background-image:url(<?php echo $first_section['image_4'];?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="cta-img">
                    <img src="<?php echo $first_section['image_5'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $first_section['heading_6'];?></h2>
                    <p class="text-white"><?php echo $first_section['content_5'];?></p>

                    <div class="email-field">
                        <input type="email" placeholder="Enter Your Email....">
                        <input type="sumbit" value="DOWNLOAD YOUR FREE PDF">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>