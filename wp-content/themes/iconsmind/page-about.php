<?php
/**
 * Template Name: About Page
 */
get_header('default'); ?>


<!-- site__content -->
<div class="site__content">

    <!-- head-title -->
    <div class="head-title">

        <!-- head-title__inner -->
        <div class="head-title__inner">

            <h1 class="site__title site__title_4"><?php the_title(); ?></h1>

        </div>
        <!-- /head-title__inner -->

    </div>
    <!-- /head-title -->

    <!-- about-us -->
    <div class="about-us">

        <!-- site__center -->
        <div class="site__center">

            <div class="content content_2">

                <?php the_content(); ?>

            </div>

        </div>
        <!-- /site__center -->

    </div>
    <!-- /about-us -->

</div>
<!-- /site__content -->


<?php get_footer('default'); ?>
