<?php
/**
 * Template Name: Thanks for Buy Page
 */
get_header('default'); ?>


<!-- site__content -->
<div class="site__content">

    <!-- thank-you -->
    <div class="thank-you">

        <!-- thank-you__wrap -->
        <div class="thank-you__wrap">
            <div>
                <?php the_field('content'); ?>
                <a href="<?= get_home_url(); ?>" class="btn btn_6"><span>Back to home page</span></a>
            </div>
        </div>
        <!-- /thank-you__wrap -->

    </div>
    <!-- /thank-you -->

</div>
<!-- /site__content -->


<?php get_footer('default'); ?>
