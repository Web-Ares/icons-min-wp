<?php
/**
 * Template Name: Privacy Page
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

    <!-- site__center -->
    <div class="site__center">


        <!-- site__controls -->
        <div class="site__controls">

            <div>
                <a href="<?php the_permalink(91) ?>" class="site__controls-link <?php  if($post->ID==91) echo 'active"';?>">Terms of use</a>
                <a href="<?php the_permalink(87) ?>" class="site__controls-link <?php  if($post->ID==87) echo 'active"';?>">Privacy policy</a>
            </div>
        </div>
        <!-- /site__controls -->

        <div class="content content_2">

            <?php the_content(); ?>

        </div>

    </div>
    <!-- /site__center -->

</div>
<!-- /site__content -->


<?php get_footer('default'); ?>
