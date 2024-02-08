<?php

/*
Developer Comment:
1: Ajax Code for woocommerce with javascript.
*/


// Add this code in function.php

function ragh_woocommerce_ajax_add_to_cart_js() {
    if (function_exists('is_product') && is_product()) {  
       wp_enqueue_script('custom_script', get_bloginfo('stylesheet_directory') . '/js/ajax_add_to_cart.js', array('jquery'),'1.0' );
    }
}
add_action('wp_enqueue_scripts', 'ragh_woocommerce_ajax_add_to_cart_js');


add_action('wp_ajax_ragh_woocommerce_ajax_add_to_cart', 'ragh_woocommerce_ajax_add_to_cart'); 
add_action('wp_ajax_nopriv_ragh_woocommerce_ajax_add_to_cart', 'ragh_woocommerce_ajax_add_to_cart');          
function ragh_woocommerce_ajax_add_to_cart() {  
    $product_id = apply_filters('ragh_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
    $passed_validation = apply_filters('ragh_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id); 
    if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) { 
        do_action('ql_woocommerce_ajax_added_to_cart', $product_id);
            if ('yes' === get_option('ragh_woocommerce_cart_redirect_after_add')) { 
                wc_add_to_cart_message(array($product_id => $quantity), true); 
            } 
            WC_AJAX :: get_refreshed_fragments(); 
            } else { 
                $data = array( 
                    'error' => true,
                    'product_url' => apply_filters('ragh_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));
                echo wp_send_json($data);
            }
            wp_die();
        }
// Create the  ajax_add_to_cart.js under js folder in theme folder and write the below code.

?>
<script>
jQuery(document).ready(function($) {
    $('.single_add_to_cart_button').on('click', function(e){ 
    e.preventDefault();
    $thisbutton = $(this),
                $form = $thisbutton.closest('form.cart'),
                id = $thisbutton.val(),
                product_qty = $form.find('input[name=quantity]').val() || 1,
                product_id = $form.find('input[name=product_id]').val() || id,
                variation_id = $form.find('input[name=variation_id]').val() || 0;
    var data = {
            action: 'ragh_woocommerce_ajax_add_to_cart',
            product_id: product_id,
            product_sku: '',
            quantity: product_qty,
            variation_id: variation_id,
        };
    $.ajax({
            type: 'post',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            beforeSend: function (response) {
                $thisbutton.removeClass('added').addClass('loading');
            },
            complete: function (response) {
                $thisbutton.addClass('added').removeClass('loading');
            }, 
            success: function (response) { 
                if (response.error & response.product_url) {
                    window.location = response.product_url;
                    return;
                } else { 
                    $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
                } 
            }, 
        }); 
     }); 
});

</script>

