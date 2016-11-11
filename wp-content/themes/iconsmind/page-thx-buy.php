<?php
/**
 * Template Name: Thanks for Buy Page
 */
get_header('default');


// First, let's check that this visit to the page contains the values we need.
if(!empty($_GET['checkout_id'])) {
    // Let's grab the values Paddle sent, and assign them to variables, with defaults.
    $checkout_id = (!empty($_GET['checkout_id'])) ? $_GET['checkout_id'] : '';
    $order_total = (!empty($_GET['order_total'])) ? $_GET['order_total'] : 0.00;
    $quantity = (!empty($_GET['quantity'])) ? $_GET['quantity'] : 1;
    $item_total = (!empty($_GET['item_total'])) ? $_GET['item_total'] : 0.00;
    $currency_code = (!empty($_GET['currency_code'])) ? $_GET['currency_code'] : 'USD';
    $product_name = (!empty($_GET['product_name'])) ? addslashes($_GET['product_name']) : 'Unknown Product';


    // If we have a checkout, let's track it!
    $track = true;
} else {
    // If we don't (ie. someones visited the success page, not via a checkout) we won't track it.
    $track = false;
}



 echo $item_total.' = $item_total';
 echo $quantity.' = $quantity';
 echo $currency_code.' = $currency_code';
 echo $checkout_id.' = $checkout_id';
 echo $order_total.' = $order_total';
 echo $product_name.' = $product_name';
?>

<script type="text/javascript">

    dataLayer.push({
        "event":    "Checkout.PaymentComplete",
        "price":    '<?php echo $item_total; ?>',
        "quantity": '<?php echo $quantity; ?>',
        "currency": '<?php echo $currency_code; ?>',
        "id":       '<?php echo $checkout_id; ?>',
        "revenue":  '<?php echo $order_total; ?>',
        "name" :    '<?php echo $product_name; ?>'
    });

//    adoric.trigger('Purchase', <?php //echo $item_total; ?>//);

</script>



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


<?php get_footer(); ?>
