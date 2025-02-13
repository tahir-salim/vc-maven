<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 text-left">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8 text-right">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                            <li>
                                <a href="deals.php">DEALS</a>
                            </li>
                            <li>
                                <a href="buyers.php">BUYERS</a>
                            </li>
                            <li>
                                <a href="sellers.php">SELLERS</a>
                            </li>
                            <li>
                                <a href="franchisors.php">FRANCHISORS</a>
                            </li>
                            <li>
                                <a href="advice.php">ADVICE</a>
                            </li>
                            <li>
                                <a href="#">SUPPORT</a>
                            </li>
                            <li>
                                <a href="faqs.php">FAQs</a>
                            </li>
                            <li>
                                <a href="#">Login</a>
                            </li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>