<?php
require('../settings/core.php');
require('../controllers/product_controller.php');

$product= select_allproduct();

function display_all_product_fxn(){

    //run the controller
    $run_item =select_allproduct();


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


foreach($run_item as $row)
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
    <a href = '../view/updateproduct.php?id=".$row['product_id']."'>Update</a>
    </td>
    ";


}

echo 
" </tbody> </table>";

}


display_all_product_fxn();

?>
