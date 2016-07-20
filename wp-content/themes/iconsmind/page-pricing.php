<?php
/**
 * Template Name: Pricing Page
 */
get_header('default'); ?>


<!-- site__content -->
<div class="site__content">

    <!-- head-title -->
    <div class="head-title head-title_2">

        <!-- head-title__inner -->
        <div class="head-title__inner">

            <h1 class="site__title site__title_4"><?php the_title(); ?></h1>
            <?php the_field('header_content'); ?>

        </div>
        <!-- /head-title__inner -->

    </div>
    <!-- /head-title -->

    <!-- packages -->
    <div class="packages">

        <!-- site__center -->
        <div class="site__center">


            <?php

            $flag = 0;
            if( have_rows('icon_packs') ): ?>
            <!-- packages__items -->
            <div class="packages__items">
                <?php // loop through the rows of data
                while ( have_rows('icon_packs') ) : the_row(); ?>

                    <!-- packages__item -->
                    <div class="packages__item <?if($flag>0){echo 'packages__item_premium';} ?>">

                        <h2 class="packages__title"><?php the_sub_field( 'title_of_the_pack' ); ?> <?if($flag>0){echo '<span class="packages__title-popular">popular</span> ';} ?></h2>

                        <!-- packages__price -->
                        <div class="packages__price"><span>$</span><?php the_sub_field( 'cost' ); ?></div>
                        <!-- /packages__price -->

                        <!-- packages__text -->
                        <div class="packages__text">
                            <?php the_sub_field( 'description' ); ?>
                        </div>
                        <!-- /packages__text -->


                        <a href="#" class="btn btn_4"><span>Buy now</span></a>

                    </div>
                    <!-- /packages__item -->

                <?php $flag++;
                endwhile;

?>

            </div>
                <!-- /packages__item -->
            <?php endif;

            the_field( 'content' ); ?>

        </div>
        <!-- /site__center -->

    </div>
    <!-- /packages -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
