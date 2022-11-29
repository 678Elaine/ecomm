<?php

require('../settings/db_class.php');

class Cart extends db_connection{
    function select_single_cart_item($id){
        return $this->db_fetch_one("SELECT * from cart where p_id='$id'");

    }

    function add($id,$ip_address, $customerid, $qty){
        return $this->db_query("INSERT into cart(p_id, ip_add, c_id, qty) values ('$id','$ip_address','$customerid','$qty'");

    }

    // function select_all(){
    //     return $this->db_fetch_all("SELECT products.product_title, products.product_price, cart.qty, products.products_id from cart INNER JOIN products ON products.product_id= cart.p_id");
    // }

    function select_all(){
        return $this->db_fetch_all("SELECT products.product_title, products.product_price, products.product_image, cart.qty, products.products_id from cart ON products.product_id= cart.p_id");
    }

    function Itemincart($id, $customerid){
        $sql="SELECT * FROM cart where p_id = $id AND c_id = $customerid";
        return $this->db_fetch_one($sql);
    }
    function select_one_product($id){
        return $this->db_fetch_one("SELECT product_id from products where product_id = $id");
    }
    


}

?>