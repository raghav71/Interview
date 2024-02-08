<?php

/*
Developer Comment:
1: fixed the issue in this simple AJAX code.
*/

add_action('wp_ajax_my_ajax_function', 'my_ajax_function');
add_action('wp_ajax_nopriv_my_ajax_function', 'my_ajax_function');

function my_ajax_function() {
   $product_id = $_POST['product_id'];
   if( $product_id > 0 && function_exists( 'wc_get_product' ) ){
   $product = wc_get_product($product_id);
   echo "Product Price: " . $product->get_price();
   } else {
	echo "Product does not exist";   
   }
   wp_die();
}



?>