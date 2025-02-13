<?php /** * Template Name: Buyers Template */ ?>
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
<section class="looking-deal-sec" style="background-image:url(<?php echo $first_section['image_3'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $first_section['heading_6'];?></h2>
                    <p class="text-white"><?php echo $first_section['content_4'];?>
                    </p>
                    <div class="btn-wrap">
                        <a href="button_link_7"
                            class="theme-btn btn-gray text-center"><?php echo $first_section['button_text_7'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="want-help-sec" style="background-image:url(<?php echo $first_section['image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInRight">
                <div class="sec-heading text-end">
                    <h2><?php echo $first_section['heading'];?></h2>
                    <p>
                        <?php echo $first_section['content'];?>
                    </p>

                    <div class="btn-wrap justify-content-end">
                        <a href="<?php echo $first_section['button_link'];?>"
                            class="theme-btn text-center"><?php echo $first_section['button_text'];?></a>
                        <a href="<?php echo $first_section['button_link_2'];?>"
                            class="theme-btn text-center"><?php echo $first_section['button_text_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="free-buyer-service" style="background-image:url(<?php echo $first_section['image_2'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $first_section['heading_2'];?></h2>
                    <p class="text-white"><?php echo $first_section['content_2'];?>
                    </p>

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
        <div class="row justify-content-center">
            <div class="col-lg-9 wow fadeInUp">
                <div class="sec-heading center">
                    <h4><?php echo $first_section['heading_3'];?></h4>
                    <p><?php echo $first_section['content_3'];?></p>
                </div>
                <div>

                    <table class="membership-free">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="membership-card">
                                        <h3 class="text-white"><?php echo $first_section['heading_4'];?></h3>
                                        <span class="text-white"><?php echo $first_section['heading_5'];?></span>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <?php $box_list = $first_section['box_list'];?>
                        <?php $x=1; foreach ($box_list as $boxlist) {?>
                        <tr>
                            <th><?php echo $boxlist['heading']; ?></th>
                            <th class="text-center"><i class="fas fa-check"></i></th>
                        </tr>
                        <?php $x++;}?>
                        <tr>
                            <th></th>
                            <th class="text-center"><a href="<?php echo $first_section['button_link_4'];?>"
                                    class="bg-blue"><?php echo $first_section['button_text_4'];?></a></th>
                        </tr>
                    </table>
                    <div class="btn-wrap brands-btn">
                        <a href="<?php echo $first_section['button_link_5'];?>"
                            class="theme-btn bg-grey text-center"><?php echo $first_section['button_text_5'];?>
                        </a>
                        <a href="<?php echo $first_section['button_link_6'];?>"
                            class="theme-btn text-center"><?php echo $first_section['button_text_6'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>