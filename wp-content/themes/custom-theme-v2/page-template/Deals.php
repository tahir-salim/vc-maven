<?php /** * Template Name: Deals Template */ ?>
<?php $first_section = get_field('first_section'); ?>
<?php $second_section = get_field('second_section'); ?>

<?php get_header(); ?>
<div class="mainBanner deal-page">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-12 wow zoomIn">
                    <h1 class="banner-heading"><?php echo $first_section['heading'];?> </h1>
                    <div class="best-resale">
                        <h3><?php echo $first_section['sub_heading'];?></h3>
                        <ul>
                            <?php $box_list = $first_section['box_list'];?>
                            <?php $x=1; foreach ($box_list as $boxlist) {?>

                            <li>
                                <a href="#">
                                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                                </a>
                            </li>
                            <?php $x++;}?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="all-brands-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h3><?php echo $first_section['heading_2'];?></h3>
                    <span>
                        <?php echo $first_section['heading_3'];?>
                        <div class="input-field">
                            <select name="">
                                <option selected="" disabled="">SHOW ALL LISTINGS</option>
                                <option value="">Services 1</option>
                                <option value="">Services 2</option>
                                <option value="">Services 3</option>
                                <option value="">Services 4</option>
                            </select>
                        </div>
                    </span>
                </div>
            </div>

            <div class="col-lg-12">
                <div>
                    <table class="customers">
                        <tr>
                            <?php $box_list = $first_section['box_list_2'];?>
                            <?php $x=1; foreach ($box_list as $boxlist) {?>
                            <th>
                                <i class="fas fa-caret-up"></i>
                                <i class="fas fa-caret-down"></i>
                                <?php echo $boxlist['heading']; ?>
                            </th>
                            <?php $x++;}?>
                        </tr>

                        <?php $box_list = $first_section['box_list_3'];?>
                        <?php $x=1; foreach ($box_list as $boxlist) {?>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3 color-purple">
                                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                                    <?php echo $boxlist['heading']; ?>
                                </div>
                            </td>
                            <?php echo $boxlist['list']; ?>
                        </tr>
                        <?php $x++;}?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" class="see-more-btn">See More</a>
                            </td>
                        </tr>
                    </table>

                    <div class="btn-wrap brands-btn">
                        <a href="<?php echo $first_section['button_link'];?>"
                            class="theme-btn bg-grey text-center"><?php echo $first_section['button_text'];?></a>
                        <a href="<?php echo $first_section['button_link_2'];?>"
                            class="theme-btn text-center"><?php echo $first_section['button_text_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInLeft">
                <div class="cta-img">
                    <img src="<?php echo $second_section['image'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-8 wow fadeInRight">
                <div class="sec-heading center">
                    <h2 class="text-white"><?php echo $second_section['heading'];?></h2>

                    <div class="newsletter-field">
                        <input type="email" placeholder="Enter Your Email....">
                        <input type="sumbit" value="Sign Up">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-sec" style="background-image:url(<?php echo $second_section['image_2'];?>)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 wow zoomIn">
                <div class="sec-heading center">
                    <p class="text-white"><?php echo $second_section['content'];?>
                    </p>
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
                    <h2><?php echo $second_section['heading_2'];?></h2>
                </div>
            </div>
        </div>

        <div class="buyer-slider">
            <?php $box_list = $second_section['box_list'];?>
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
<?php get_footer(); ?>