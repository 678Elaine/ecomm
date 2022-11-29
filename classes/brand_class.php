<?php

require("../settings/db_class.php");

class Brand extends db_connection{
    function insert_brand_class($brandname){
    $sql = "INSERT INTO brands(brand_name)
            VALUES ('$brandname')";
    return $this->db_query($sql);
    
    var_dump($sql);
    }

    function select_allbrand_class(){
    $sql1 = "SELECT * from brands";
                return $this->db_fetch_all($sql1);
    
    var_dump($sql1);
    }

    function select_one_brand_class($id){
    $sql2 = "SELECT * from brands where brand_id=$id";
                return $this->db_fetch_one($sql2);
    
    var_dump($sql2);
    }

    function select_brand_name($name){
    $sql3 = "SELECT * from brands where brand_name='$name'";
                return $this->db_fetch_one($sql3);
    
    var_dump($sql3);
    }

    function update_onebrand_class($id, $name){
    $sql4 = "UPDATE brands set brand_name='$name' where brand_id='$id'";
                return $this->db_query($sql4);
    
    var_dump($sql4);
    }
}

    

?>   