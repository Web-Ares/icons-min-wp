<?php
/**
 * Template Name: Thanks for Download Page
 */
get_header('default'); ?>


<!-- site__content -->
<div class="site__content">

    <!-- thank-you -->
    <div class="thank-you thank-you_2">

        <!-- thank-you__wrap -->
        <div class="thank-you__wrap">
            <div>
                <h2 class="site__title site__title_6 site__title_6-1">Thank you</h2>
                <p>Your transaction has been completed successfully. We have emailed you details of your order.</p>
                <a href="<?= do_shortcode('[download id="1"]') ?>" class="btn btn_7"><span>Download</span></a>

            </div>

            <div>
                <a href="<?= get_permalink(93); ?>" class="btn btn_8"><span>Upgrade for full access</span></a>

                <div class="thank-you__video">

                    <!-- hero__play -->
                    <a href="#" class="hero__play popup__open" data-popup="video"></a>
                    <!-- hero__play -->

                    <!-- hero__icons -->
                    <div class="hero__icons">
                        <img src="<?= DIRECT; ?>pic/hero-icons.jpg" width="1342" height="318" alt="">
                    </div>
                    <!-- /hero__icons -->

                </div>


                <!-- sponsors -->
                <div class="sponsors">

                    <!-- sponsors__inner -->
                    <div class="sponsors__inner">
                        <div>
                            <?php if($var=get_field('wix',8)): ?>
                                <!-- sponsors__inner -->
                                <a href="<?= $var; ?>" class="sponsors__item">

                                    <img src="http://iconsmind.websters.com.ua/wp-content/themes/iconsmind/dist/pic/sponsor1.png" width="64" height="25" alt="">

                                </a>
                                <!-- /sponsors__inner -->
                            <?php endif;
                            if($var=get_field('bookingcom',8)):
                                ?>
                                <!-- sponsors__inner -->
                                <a href="<?= $var; ?>"  class="sponsors__item">

                                    <img src="http://iconsmind.websters.com.ua/wp-content/themes/iconsmind/dist/pic/sponsor2.png" width="165" height="27" alt="">

                                </a>
                                <!-- /sponsors__inner -->
                            <?php endif;
                            if($var=get_field('lyndacom',8)):
                                ?>
                                <!-- sponsors__inner -->
                                <a href="<?= $var; ?>"  class="sponsors__item">

                                    <img src="http://iconsmind.websters.com.ua/wp-content/themes/iconsmind/dist/pic/sponsor3.png" width="143" height="35" alt="">

                                </a>
                                <!-- /sponsors__inner -->
                            <?php endif;
                            if($var=get_field('heroku',8)):
                                ?>
                                <!-- sponsors__inner -->
                                <a href="<?= $var; ?>"  class="sponsors__item">

                                    <img src="http://iconsmind.websters.com.ua/wp-content/themes/iconsmind/dist/pic/sponsor4.png" width="116" height="34" alt="">

                                </a>
                                <!-- /sponsors__inner -->
                            <?php endif;
                            if($var=get_field('cisco',8)):
                                ?>
                                <!-- sponsors__inner -->
                                <a href="<?= $var; ?>"  class="sponsors__item">

                                    <img src="http://iconsmind.websters.com.ua/wp-content/themes/iconsmind/dist/pic/sponsor5.png" width="62" height="33" alt="">

                                </a>
                                <!-- /sponsors__inner -->
                            <?php endif;
                            if($var=get_field('frank_digital',8)):
                                ?>
                                <!-- sponsors__inner -->
                                <a href="<?= $var; ?>"  class="sponsors__item">

                                    <img src="http://iconsmind.websters.com.ua/wp-content/themes/iconsmind/dist/pic/sponsor6.png" width="122" height="34" alt="">

                                </a>
                                <!-- /sponsors__inner -->
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /sponsors__inner -->

                </div>
                <!-- /sponsors -->

            </div>
        </div>
        <!-- /thank-you__wrap -->

    </div>
    <!-- /thank-you -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
