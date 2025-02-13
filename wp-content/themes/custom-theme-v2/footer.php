<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-sec">
                    <a href="<?php echo site_url();?>" class="logo">
                        <img src="<?php echo $options['logo'];?>" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-12">
                <!-- <ul class="f-menu">
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
                <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'f-menu' ) ); ?>
            </div>

            <div class="col-lg-12">
                <div class="contact">
                    <a href="#"><?php echo $options['phone_number'];?></a>
                </div>
                <div class="copyright">
                    <p><?php echo $options['copyright'];?></p>
                    <!-- <ul class="f-link">
                        <li>
                            <a href="javascript:;">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="javascript:;">Terms of Use</a>
                        </li>
                        <li>
                            <a href="javascript:;">Advertising Disclosure</a>
                        </li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu 1', 'menu_class'=> 'f-link' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
    <?php wp_footer(); ?>

</main>
  </body>
</html>
