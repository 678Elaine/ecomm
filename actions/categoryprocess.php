<?php
//This is the processing page

//making action aware of controller
include("../controllers/category_controller.php");


//collecting form data
if (isset($_POST['submit'])){

    $catname= $_POST['catname'];
 

   //save_ctr($username,$usernum);
   //)

   $Submit = insert_category($catname);

//    var_dump($Submit);
}
if(isset($_POST["updateCategoryID"])){
    $id=$_POST['id'];
    $name = $_POST['name'];

    $results = update_onecategory($id,$name);
    if($results == true) header ("Location: ../view/admin.php");
}
?>