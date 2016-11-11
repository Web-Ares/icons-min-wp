<?php
/**
 * Template Name: Pricing Page
 */
get_header('default'); ?>

<script type="text/javascript">
    // Require Ecommerce Module of Analytics.js
    ga('require', 'ecommerce');

    // Define our Callback Function
    function checkoutCompleted(data) {

// Build the GA 'Transaction' Object
        var transaction = {
            id: data.checkout.id,
            affiliation: 'shinywhitebox',
            revenue: data.checkout.prices.vendor.total,
        };
// Build the GA 'Item' Object
        var item = {
            id: data.product.id,
            name: data.product.name,
            sku: data.product.id,
            price: data.checkout.prices.vendor.unit,
            quantity: data.product.quantity
        };
// Create a Transaction
        ga('ecommerce:addTransaction', transaction);
// Add the Product
        ga('ecommerce:addItem', item);
// Send the data!
        ga('ecommerce:send');

        // Redirect to Success Page (if one is set...)
        if(data.checkout.redirect_url) {
            window.location.href = data.checkout.redirect_url;
        } else {
            // No success page set, show a message.
            alert("Thank you for your purchase!");
        }
    } </script>

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


            <?php $flag = 0;
            if( have_rows('icon_packs') ):

                $links[0]=496050;
                $links[1]=496051;
                $name[0]="Standard";
                $name[1]="Ultimate";
                ?>

            <!-- packages__items -->
            <div class="packages__items">
                <?php // loop through the rows of data
                while ( have_rows('icon_packs') ) : the_row();

                    $cost = get_sub_field( 'cost' );
                    ?>

                    <!-- packages__item -->
                    <div class="packages__item <?php if ($flag>0){ echo 'packages__item_premium'; } ?>">

                        <h2 class="packages__title"><?php the_sub_field( 'title_of_the_pack' ); ?>
                            
                            <?php if($flag>0){ echo '<span class="packages__title-popular">popular</span> '; } ?>
                        </h2>

                        <!-- packages__price -->
                        <div class="packages__price"><span>$</span><?= $cost;  ?></div>
                        <!-- /packages__price -->

                        <!-- packages__text -->
                        <div class="packages__text">
                            <?php the_sub_field( 'description' ); ?>
                        </div>
                        <!-- /packages__text -->

                        <?php
                       echo  '<a href="#" class="btn btn_4 paddle_button" data-success-callback="checkoutCompleted" data-product="'.$links[$flag].'" data-theme="none" data-product_name="'.$name[$flag].'"
                            rel="nofollow" data-referrer="AwesomePodcast"
                            data-price="'.$cost.'"><span>Buy now</span></a>'; ?>

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
