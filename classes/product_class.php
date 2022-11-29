<?php
require("../settings/db_class.php");

class Product extends db_connection{
function list_brands(){
    return $this->db_fetch_all("SELECT * from brands");
}

function list_categories(){
    return $this->db_fetch_all("SELECT * from categories");
}

function add_product($category, $brand, $title, $price, $description, $fileDestination, $keyword){
    return $this->db_query("INSERT into products(product_cat, product_brand, product_title, product_price, product_desc,product_image, product_keywords) values ('$category','$brand','$title','$price','$description','$fileDestination','$keyword')");

}

function list_products(){
    return $this->db_fetch_all("SELECT * from products");
}
function select_one_product($id){
    return $this->db_fetch_one("SELECT * from products where product_id = $id");
}


// function select_one_brand_class($id){
//     $sql2 = "SELECT * from brands where brand_id=$id";
//                 return $this->db_fetch_one($sql2);
    
//     var_dump($sql2);
//     }


function check_product($title){
    return $this->db_fetch_one("SELECT * from products where product_title='$title'");
}

function select_allproduct_class(){
    $sql1 = "SELECT * from products";
                return $this->db_fetch_all($sql1);
    
    var_dump($sql1);
    }



function update_product($id, $category, $brand, $title, $price, $description, $keyword){
    return $this->db_query("UPDATE products set product_cat ='$category', product_brand='$brand', product_title='$title', product_price='$price', product_desc='$description', product_keywords = '$keyword' where product_id = '$id' ");
}

function search_allproduct_class($keyword){
    $sql1 = "SELECT * from products where product_keywords LIKE '%$keyword%'";
                return $this->db_fetch_all($sql1);
    
    var_dump($sql1);
    }

// SELECT
function view_product()
{
    $sql ="SELECT products.product_id, products.product_cat, products.product_brand, products.product_title, products.product_price, products.product_desc, products.product_keywords";
}


}



?>