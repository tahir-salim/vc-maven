<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>


<?php get_header(); ?>
<div class="mainBanner" style="background-image:url(<?php echo $banner_section['image'];?>)">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-12 wow zoomIn">
                    <h1 class="banner-heading text-white">
                    <?php echo $banner_section['heading'];?>
                    </h1>
                    <p class="banner-text text-white">
                    <?php echo $banner_section['content'];?>
                    </p>
                    <div class="btn-wrap justify-content-center">
                        <a href="<?php echo $banner_section['button_link'];?>" class="theme-btn"><?php echo $banner_section['button_text'];?></a>
                        <a href="<?php echo $banner_section['button_link_2'];?>" class="theme-btn"><?php echo $banner_section['button_text_2'];?></a>
                        <a href="<?php echo $banner_section['button_link_3'];?>" class="theme-btn"><?php echo $banner_section['button_text_3'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec-1" style="background-image:url(<?php echo $first_section['image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 wow fadeInLeft">
                <div class="sec-heading">
                    <h2><?php echo $first_section['heading'];?></h2>
                    <p><?php echo $first_section['content'];?>
                    </p>
                    <p><?php echo $first_section['content_2'];?>
                    </p>
                    <p><?php echo $first_section['content_3'];?>
                    </p>

                    <div class="btn-wrap">
                        <a href="<?php echo $first_section['button_link'];?>" class="theme-btn"><?php echo $first_section['button_text'];?></a>
                    </div>

                    <div class="click-here">
                        <span class="d-block">
                            <a href="<?php echo $first_section['button_link_2'];?>"><?php echo $first_section['button_text_2'];?></a>
                            <?php echo $first_section['para'];?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-2" style="background-image:url(<?php echo $second_section['image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInRight">
                <div class="sec-heading text-end">
                    <h2 class="text-white"><?php echo $second_section['heading'];?></h2>
                    <p class="text-white"><?php echo $second_section['content'];?>
                    </p>
                    <p class="text-white"><?php echo $second_section['content_2'];?>
                    </p>

                    <div class="btn-wrap justify-content-end">
                        <a href="<?php echo $second_section['button_link'];?>" class="theme-btn"><?php echo $second_section['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-3" style="background-image:url(<?php echo $second_section['image_2'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $second_section['heading_2'];?></h2>
                    <p class="text-white"><?php echo $second_section['content_3'];?>
                    </p>

                    <div class="btn-wrap">
                        <a href="<?php echo $second_section['button_link_2'];?>" class="theme-btn"><?php echo $second_section['button_text_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>