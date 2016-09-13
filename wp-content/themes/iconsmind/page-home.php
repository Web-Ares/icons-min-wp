<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">

    <!-- hero -->
    <div class="hero">

        <!-- hero__inner -->
        <div class="hero__inner">

            <div>
                
                    <?php  the_field('preview_block_in_header'); ?>
            </div>


            <!-- hero__play -->
            <a href="#" class="hero__play popup__open" data-popup="video"></a>
            <!-- hero__play -->

            <!-- hero__icons -->
            <div class="hero__icons">
                
                <img src="<?= get_field('choose_the_image_in_header_of_the_page'); ?>" alt="Preview Icons">

            </div>
            <!-- /hero__icons -->

        </div>
        <!-- /hero__inner -->

        <!-- hero__video -->
        <div class="hero__video" style="background-image: url(<?= DIRECT; ?>img/home-cover.jpg)">



        </div>
        <!-- /hero__video -->

    </div>
    <!-- /hero -->



    <?php the_field( 'first_part_of_content' ); ?>


    <?php if( have_rows('preview_slider') ): ?>
    <!-- reviews -->
    <div class="reviews">

        <!-- reviews__inner -->
        <div class="reviews__inner">

            <h2 class="site__title site__title_3">Reviews</h2>

            <!-- Swiper -->
            <div class="reviews__slider swiper-container">
                <div class="swiper-wrapper">
        <?php // loop through the rows of data
        while ( have_rows('preview_slider') ) : the_row(); ?>

            <div class="swiper-slide">

                <!-- reviews__item -->
                <div class="reviews__item">

                    <!-- reviews__text -->
                    <div class="reviews__text">

                       <?php the_sub_field('add_quote'); ?>

                    </div>
                    <!-- /reviews__text -->

                    <!-- reviews__person -->
                    <div class="reviews__person">

                        <!-- reviews__avatar -->
                        <div class="reviews__avatar">

                            <div>
                                <img src=" <?php the_sub_field('choose_the_image'); ?>" width="60" height="60" alt="">
                            </div>
                            <?php if($avatar = get_sub_field('choose_the_logo')): ?>
                            <img class="reviews__avatar-company" src="<?= $avatar; ?>" width="35" height="35" alt="">
                            <?php endif; ?>
                        </div>
                        <!-- /reviews__avatar -->

                        <?php the_sub_field('add_name_and_position'); ?>

                    </div>
                    <!-- /reviews__person -->

                </div>
                <!-- /reviews__item -->

            </div>

        <?php endwhile; ?>
                </div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
        <!-- /reviews__inner -->

    </div>
        <!-- /reviews -->
   <?php  endif; ?>


    <?php the_field( 'second_part_of_content' ); ?>

</div>
<!-- /site__content -->


<?php get_footer(); ?>
