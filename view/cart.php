<?php

require('../controllers/cart_controller.php');
require('../settings/core.php');

$cart = list_all_cart_controller();


?>

<h2> Cart </h2>
<?php

if($cart>0)
{
echo
   "
<h3> Cart </h3>
<table class='table table-dark table-striped table-bordered'>

<thead>
    <tr>
        <th> Product Title  </th>
        <th> Product Image</th>
        <th> Total Quantity </th>
        <th> Unit Price </th>
        <th> Total price </th>
        <th> Manage Quantity </th>
        <th> Remove Item</th>
        

    </tr>
<thead>";
    foreach($cart as $x){

        $totalprice = $x['product_price'] * $x['qty'];
        echo "
        <tbody>
        <tr>
        <td>".$x['product_title']."</td>
        <td><img src='../images/product/".$x['product_image']."'></td>
        <td>".$x['qty']."</td>
        <td>".$x['product_price']."</td>
        <td>".$totalprice."</td>
        <td> <a href = '../actions/managecartquantity.php?update_id=".$x['product_id']."'>Change Quantity </a></td>
        <td> <a href = '../functions/delete_fromcart.php?delete_id=".$x['product_id']."'> Remove from Cart </a></td>
        </td>
        
        ";
    }

}
 ?>

 <button><a href = "paymentpage.php">Make Payment</a> </button>
