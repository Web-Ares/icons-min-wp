<?php
/**
 * Template Name: All Icons Page
 */
get_header('default'); ?>


<!-- site__content -->
<div class="site__content">

    <!-- head-title -->
    <div class="head-title">

        <!-- head-title__inner -->
        <div class="head-title__inner">

            <h1 class="site__title site__title_4"><?php echo do_shortcode(get_the_title()); ?></h1>
                <span class="head-title__subtitle">
                    All icons come with two version line & solid
                    <span>Total more then 4,000 icons.</span>
                </span>

        </div>
        <!-- /head-title__inner -->

    </div>
    <!-- /head-title -->

    <!-- icons-set -->
    <div class="icons-set">

        <!-- site__center -->
        <div class="site__center">

           <?php
            $pricing_page = get_permalink(93);
           $count_group=1;
            $args = array(
            'posts_per_page' => -1,
            'post_type' => 'icons',
            'post_status' => 'publish'
            );

            $q = new WP_Query($args);

            while ($q->have_posts()) {
            $q->the_post();
            $icons_title = get_the_title(); ?>

                <!-- icons-set__title -->
                <div class="icons-set__title"><?= $icons_title; ?></div>
                <!-- /icons-set__title -->

                <!-- icons-set__pic -->
                <div class="icons-set__pic">
                    <img src="<?php the_field('add_preview_categories_image'); ?>" width="800" height="336" alt="images"/>
                </div>
                <!-- /icons-set__pic -->


            <?php
                $count_group++;
                if($count_group==6){
                    echo '   
                    </div>
                    <a href="'.$pricing_page.'" class="btn btn_2 btn_2-1"><span>Buy now</span></a>
                    <div class="site__center">';
                    $count_group=1;
                }
            }
            if($count_group!=1){
                echo '<a href="'.$pricing_page.'" class="btn btn_2 btn_2-1"><span>Buy now</span></a>';
            }
           wp_reset_query(); ?>


        </div>
        <!-- /site__center -->

    </div>
    <!-- /icons-set -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
