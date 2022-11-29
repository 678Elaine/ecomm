<?php

require("../settings/db_class.php");

class Category extends db_connection{
    function insert_category_class($catname){
        $sql4 = "INSERT INTO categories(cat_name)
                VALUES ('$catname')";
                 return $this->db_query($sql4);
     
     var_dump($sql4);
     }
     

     function select_allcategory_class(){
       $sql1 = "SELECT * from categories";
                 return $this->db_fetch_all($sql1);
     
     var_dump($sql1);
     }

     function select_one_category_class($id){
        $sql2 = "SELECT * from categories where cat_id=$id";
                 return $this->db_fetch_one($sql2);
     
     var_dump($sql2);
     }

     function select_category_name($name){
        $sql3 = "SELECT * from categories where brand_name='$name'";
                 return $this->db_fetch_one($sql3);
     
     var_dump($sql3);
     }

     function update_onecategory_class($id, $name){
        $sql4 = "UPDATE categories set cat_name='$name' where cat_id='$id'";
                 return $this->db_query($sql4);
     
     var_dump($sql4);
     }
    }

    

  ?>   