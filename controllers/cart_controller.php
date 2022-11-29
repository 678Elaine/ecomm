<?php

require("../classes/Cart_class.php");

function select_single_cart_item_controller($id){
    $cart_instance = new Cart();

    return $cart_instance->select_single_cart_item($id);
}

function add_to_cart($id,$ip_address, $customerid, $qty){
    $cart_instance = new Cart();

    return $cart_instance->add($id,$ip_address, $customerid, $qty);
}

function list_all_cart_controller(){
    $cart_instance = new Cart();

    return $cart_instance->select_all();
}

function checkitem_cart($id, $customerid)
{
    $cart_instance= new Cart();

    return $cart_instance -> Itemincart($id, $customerid);
}

function select_one_product_controller($id){
    $product_instance = new Cart();
    return $product_instance->select_one_product($id);
}
?>