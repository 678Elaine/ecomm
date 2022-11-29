<?php

require('../Controllers/product_controller.php');

if(isset($_POST['addproduct'])){

$category =$_POST['category'];
$brand = $_POST['brand'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$keyword = $_POST['keyword'];
$image = $_FILES['image']['name'];

$target_file = '../images/name';


$file = $_FILES["image"];
$filename = $_FILES['image']['name'];
 $filetmpname = $_FILES['image']['tmp_name'];
 $filesize = $_FILES['image']['size'];
 $fileError = $_FILES['image']['error'];
 $filetype = $_FILES['image']['type'];

 $fileext = explode(".", $filename);
 $filerealext = strtolower(end($fileext));

 $allowed = array("jpg", "jpeg", "png", "pdf");

 if(in_array($filerealext, $allowed)){
     if($fileError === 0){
         if($filesize < 5000000){
             $filenamenew = uniqid('',true).".".$filerealext;

             $fileDestination = '../Images/product/'.$filenamenew;

             $move= move_uploaded_file($filetmpname,$fileDestination);
         }else{
             echo "Your file is too big";
         }
     }else{
       echo "You cannot uplaod this file type";
     }
 }else{
   echo "You cannot upload this type of file";

 }
$check =  check_product_exists($title);
if($check['product_title'] != $title){
    $result = add_product_controller($category,$brand, $title, $price, $description, $fileDestination, $keyword);

    if($result === true){
        header("Location: ../view/admin.php");
    }else{
        header("Location: ../view/login.php");
    }

    }
}
    
?>        

        

        
    

