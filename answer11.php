<?php

/*
Developer Comment:
1: code to display Free shipping message before 
Add to cart button on single product page,
 this message will display only if cart value is less than INR1199.
*/

add_action( 'woocommerce_single_product_summary', 'shipping_message', 20);
function shipping_message() {
   global $post;
   // create array of ids on which you want to show it
   global $woocommerce;
    $amount2 = floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );
   if ( is_single() && $amount2<1199) {
      echo '<p>Free Shipping Message</p>';
   }
}
?>
