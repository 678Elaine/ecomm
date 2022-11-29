<?php

require('../classes/product_class.php');

function list_brands_controller(){
    $product_instance = new Product();
    return $product_instance->list_brands();
}

function list_category_controller(){
    $product_instance = new Product();
    return $product_instance->list_categories();
}

function add_product_controller($category, $brand, $title, $price, $description, $fileDestination, $keyword){
    $product_instance = new Product();
    return $product_instance->add_product($category, $brand, $title, $price, $description, $fileDestination, $keyword);
}



function list_products_controller(){
    $product_instance = new Product();
    return $product_instance->list_products();
}

function select_one_product_controller($id){
    $product_instance = new Product();
    return $product_instance->select_one_product($id);
}

function check_product_exists($title){
    $product_instance = new Product();
    return $product_instance->check_product($title);
}

function select_allproduct()
{
    $selectallproduct = new Product();
    return $selectallproduct->select_allproduct_class();
}

function update_product_controller( $id, $category, $brand, $title, $price, $description, $keyword)
{
    $updateproduct = new Product();
    return $updateproduct->update_product($id, $category, $brand, $title, $price, $description, $keyword);
}

function search_allproduct($keyword)
{
    $searchallproduct = new Product();
    return $searchallproduct->search_allproduct_class($keyword);
}



?>