<?php
require('../controllers/product_controller.php');
include('../settings/core.php');
$product = list_products_controller()
?>

<html>
    <body>
        <form action="../actions/productprocess.php" method="POST">
            Search <input type = "text" name="search_term"><br>

            <input type = "submit" name="search">
        </form>

        <?php

        function display_all_product_fxn(){
         $searched_products = select_allproduct();

         echo
   "
<h3> Database Information </h3>
<table class='table table-dark table-striped table-bordered'>

<thead>
    <tr>
        <th> Product ID  </th>
        <th> Product Category</th>
        <th> Product Brand</th>
        <th> Product Title</th>
        <th> Product Price</th>
        <th> Product Description</th>
        <th> Product Image</th>
        <th> Product Keywords</th>
        <th> Actions </th>

    </tr>
<thead>";


foreach($searched_products as $row)
{
    echo 
    "
    <tbody>
    <tr>
    <td>".$row['product_id']."</td>
    <td>".$row['product_cat']."</td>
    <td>".$row['product_brand']."</td>
    <td>".$row['product_title']."</td>
    <td>".$row['product_price']."</td>
    <td>".$row['product_desc']."</td>
    <td>".$row['product_image']."</td>
    <td> ".$row['product_keywords']."  </td>
    <td>

    <a href = '../view/single_product.php?id=".$row['product_id']."'>Add to Cart</a>
    </td>
    
    ";
}

//}

// foreach($run_item as $row)
// {
//     echo 
//     "
//     <tbody>
//     <tr>
//     <td>".$row['brand_id']."</td>
//     <td> ".$row['brand_name']."  </td>
//     <td>
//     <a href = '../actions/Updatebrand.php?id=".$row['brand_id']."'>Update</a>
//     </td>
//     ";


// }

echo 
" </tbody> </table>";

}

display_all_product_fxn();

         ?>

<button><a href="../view/cart.php"> Cart </a></button>
    </body>
</html>