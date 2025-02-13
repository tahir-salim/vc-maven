<?php /** * Template Name: Advice Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>
<div class="mainBanner advice-page" style="background-image:url(<?php echo $banner_section['image'];?>)">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-8 wow zoomIn">
                    <h1 class="banner-heading text-white">
                        <?php echo $banner_section['heading'];?>
                    </h1>
                    <p class="text-white"><?php echo $banner_section['content'];?>
                    </p>
                    <div class="btn-wrap">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="theme-btn bg-dark"><?php echo $banner_section['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="featured-article">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2><?php echo $first_section['heading'];?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-md-5">
            <div class="col-lg-10">
                <div class="article-slider">

                    <?php $box_list = $first_section['box_list'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>

                    <div>
                        <div class="article-card">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <div class="pad-warpper">
                                <h4><?php echo $boxlist['heading']; ?></h4>
                                <p><?php echo $boxlist['content']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $x++;}?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seller-resources">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2><?php echo $first_section['heading_2'];?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-md-5">
            <div class="col-lg-12">
                <div class="seller-resources-slider">
                    <?php $box_list = $first_section['box_list_2'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>
                    <div>
                        <div class="seller-card">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <div class="pad-warpper">
                                <h4><?php echo $boxlist['heading']; ?></h4>
                                <p><?php echo $boxlist['content']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php $x++;}?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="buyer-resources">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2><?php echo $first_section['heading_3'];?></h2>
                </div>
            </div>
        </div>

        <div class="buyer-slider">
            <?php $box_list = $first_section['box_list_3'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>
            <div>
                <div class="bg-wrap" style="background-image:url(<?php echo $boxlist['image']; ?>)">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-heading center">
                                <h2 class="text-white"><?php echo $boxlist['heading']; ?></h2>
                                <p class="text-white"><?php echo $boxlist['content']; ?></p>
                            </div>
                            <div class="read-btn">
                                <a
                                    href="<?php echo $boxlist['button_link']; ?>"><?php echo $boxlist['button_text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $x++;}?>
        </div>
    </div>
</section>

<section class="logos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="btn-wrap brands-btn justify-content-center">
                    <a href="<?php echo $first_section['button_link']; ?>"
                        class="theme-btn bg-grey text-center"><?php echo $first_section['button_text']; ?></a>
                    <a href="<?php echo $first_section['button_link_2']; ?>"
                        class="theme-btn text-center"><?php echo $first_section['button_text_2']; ?></a>
                </div>
                <div class="logos-image">
                    <ul>
                        <?php $box_list = $first_section['box_list_4'];?>
                        <?php $x=1; foreach ($box_list as $boxlist) {?>
                        <li>
                            <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                        </li>
                        <?php $x++;}?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>