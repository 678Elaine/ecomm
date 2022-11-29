<?php
include('../controllers/product_controller.php');

function search()
{
    $pid=$_GET['product_id'];
    if(!search_allproduct($pid)==true){
        echo 're-enter';
    } else {
        header("Location:../index.php");
    }
}

search();
?>