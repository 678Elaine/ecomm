<?php

include("../controllers/customer_controller.php");
require('../settings/core.php');

if(isset ($_POST['login'])){
    $email = $_POST['email'];
    $password = password_verify($_POST['password'], PASSWORD_DEFAULT);

    $final = login_controller($email);

    //$password_hash = $final["customer_pass"];

    //$result = password_verify($password, $final['customer_pass']);

    if($final == true){
        $_SESSION['customer_name']=$final["customer_name"];
        $_SESSION['customer_id']=$final["customer_id"];
        $_SESSION['user_role'] = $final["user_role"];
        $_SESSION['customer_email'] = $final["customer_email"];
        if($_SESSION['user_role'] == 2 )
        {
            header("Location:  ../view/admin.php ");
       
    }else{
        
        header("Location: ../view/all_product.php");
    }
} else {
    echo "Incorrect Username and Password";
}
}



?>