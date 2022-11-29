<?php
//This is the processing page

//making action aware of controller
include("../controllers/customer_controller.php");


//collecting form data
if (isset($_POST['save'])){

    $username= $_POST['fullname'];
   
    $usermail= $_POST['email'];
   
    $userpassword= password_hash($_POST['password'], PASSWORD_DEFAULT);
   
    $usercountry= $_POST['country'];
    
    $usercity= $_POST['city'];

    $usernum=$_POST['number'];

    $role = "1";

  

   //save_ctr($username,$usernum);
   //)

   $Save = insert_customer($username,$usermail,$userpassword,$usercountry,$usercity, $usernum, $role);

//    var_dump($Save);
}

?>


