<?php

require('../controllers/cart_controller.php');
require('../settings/core.php');




        $id =$_POST['product_id'];
        $ip_address = $_POST['ip_address'];
        $customerid = $_POST['customerid'];
        $qty = 1;

       
        


        

        $check = checkitem_cart($id, $customerid);

       

       if($check == NULL){
       $result = add_to_cart($id,$ip_address, $customerid, $qty);

            

          if ($result === true){
             header("Location: ../view/cart.php");
              }else{
                header("Location: ../view/all_product.php");
             }

         }else {
            header("Location: ../view/cart.php");

     }



?>