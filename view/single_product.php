<?php
require('../controllers/product_controller.php');
include('../settings/core.php');



$id = $_GET['id'];
$customerid = $_SESSION['customer_id'];

$selectedproduct = select_one_product_controller($id);

$product_title= $selectedproduct['product_title'];
$product_price = $selectedproduct['product_price'];
$product_desc= $selectedproduct['product_desc'];
$product_image= $selectedproduct['product_image'];
$product_keywords= $selectedproduct['product_keywords'];

echo '<a href="../view/cartdisplay.php"> Back </a>';
?>

<html>
    <body>
        <form action="../actions/add_to_cart.php" method="POST">
        <input type = "hidden" name = "customerid" value ="<?php echo $customerid; ?>">
        <input type = "hidden" name = "product_id" value ="<?php echo $id; ?>">
        <img src = '../images/product/<?php echo $product_image;?>'>
        <h4><p><strong>Title: </strong></p><?php echo $product_title;?></h4>
        <h4><p><strong>Product Price: </strong></p><?php echo $product_price;?></h4>
        <h4><p><strong>Product Description: </strong></p><?php echo $product_desc;?></h4>
        <h4><p><strong>Product Keywords: </strong></p><?php echo $product_keywords;?></h4>
        <input type = "hidden" name = "ip_address" value ="<?php echo getenv("REMOTE_ADDR");?>">

            <button type = "submit" name ="addtocart"> Add to Cart </button>
        </form>
    </body>
</html>


<?php

echo $customerid;

?>