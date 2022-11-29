<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>

<body>
<?php
require('../controllers/product_controller.php');
$products = select_one_product_controller($_GET['id']);
$Brand = list_brands_controller();
$category = list_category_controller();
?>

<form method="POST" action="../actions/productprocess.php" >
<label > Product Category </label>
<select name="category" id="FormControlSelect1">
    <option value=""> Please Select Category </option>
    <?php
    foreach($category as $cat){
        echo "
        <option value={$cat['cat_id']}>{$cat['cat_name']}</option>;";
    }

    ?>
</select>

<label > Product Brand </label>
<select name="brand" id="FormControlSelect">
    <option value=""> Please Select Brand </option>
    <?php
    foreach($Brand as $bran){
        echo "
        <option value={$bran['brand_id']}>{$bran['brand_name']}</option>;";
    }

    ?>
</select>
<div>

<label > Product Title</label>
<input name="title" type="text" id="title" placeholder="Product Title" required>
<div id='name_error'></div>
</div>

<div>
<label > Price </label>
<input name="price" type="text" id="price" placeholder="0" required>
<div id='price_error'></div>
</div>

<label> Description </label>
<input name="description" type="text" id="description" placeholder="Product Description" required>

<!-- <label for="InputControlFile"> Image </label>
<input name="image" type="file" > -->

<label> Keyword </label>
<input name="keyword" type="text" id="keyword" placeholder="keyword" required>

<label> ID </label>
<input name="text" id="product_id" name= "product_id" placeholder="Quantity" > 

<input type="submit" name ="updateproduct"> 


</form>
<script src = "../js/work.js"></script>

</body>

</html>