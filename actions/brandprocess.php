<?php
//This is the processing page

//making action aware of controller
include("../controllers/brand_controller.php");


//collecting form data
if (isset($_POST['submit'])){

    $brandname= $_POST['brandname'];
 

   //save_ctr($username,$usernum);
   //)

   $Submit = insert_brand($brandname);

//    var_dump($Submit);
}

if(isset($_POST["updateProductID"])){
    $id=$_POST['id'];
    $name = $_POST['name'];

    $results = update_onebrand($id,$name);
    if($results == true){header("Location: ../view/admin.php")};
}

?>