<?php

/*
Developer Comment:
1: a potential security vulnerability fixed
*/

$user_id = $_POST['user_id'];
$order_id = $_POST['order_id'];

$user_data = get_userdata($user_id);
$order = wc_get_order($order_id);

if ($order->get_user_id() == $user_data->ID && $order->get_id()==$order_id) {
   // Process the order
}

?>