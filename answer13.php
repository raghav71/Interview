<?php

/*
Developer Comment:
1: Code for Add Delivery Date and Alternate Phone Number in checkout Page.
*/


/**

* Add a custom field to the checkout page
write this code in function.php

*/

add_action('woocommerce_after_order_notes', 'custom_checkout_field');

function custom_checkout_field($checkout)

{

echo '<div id="custom_checkout_field"><h3>' . __('Please Provide below Detail') . '</h3>';

woocommerce_form_field('delivery_date', array(
'type' => 'date',
	'required' => 'true',
'class' => array(
'my-field-class form-row-wide'
),
'label' => __('Delivary Date') ,
'placeholder' => __('Delivary Date') ,
), $checkout->get_value('delivery_date'));

woocommerce_form_field('alternate_number', array(
'type' => 'text',
	'required' => 'true',
'class' => array(
'my-field-class form-row-wide'
),
'label' => __('Alternate Phone Number') ,
'placeholder' => __('Alternate Phone Number') ,
), $checkout->get_value('alternate_number'));

echo '</div>';

}

/**

* Update the value given in delivery date and Alternate Phone Number

*/

add_action('woocommerce_checkout_update_order_meta', 'custom_checkout_field_update_order_meta');

function custom_checkout_field_update_order_meta($order_id)

{

if (!empty($_POST['delivery_date'])) {

update_post_meta($order_id, 'Delivery Date',sanitize_text_field($_POST['delivery_date']));

}

if (!empty($_POST['alternate_number'])) {

update_post_meta($order_id, 'Alternate Number',sanitize_text_field($_POST['alternate_number']));

}

}

?>

