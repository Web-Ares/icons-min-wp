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
                <p>Download your free trial 100 icons by click on the download icon</p>
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


               <?php the_field('content')?>


            </div>
        </div>
        <!-- /thank-you__wrap -->

    </div>
    <!-- /thank-you -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
