<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a product</title>
</head>

<body>
<?php
require('../Controllers/product_controller.php');
$Brand = list_brands_controller();
$category = list_category_controller();
?>

<form method="POST" action="../actions/add_product.php" id="product_form">
<label for="FormControlSelect1"> Product Category </label>
<select name="category" id="FormControlSelect1">
    <option value=""> Please Select Category </option>
    <?php
    foreach($category as $cat){
        echo "
        <option value={$cat['cat_id']}>{$cat['cat_name']}</option>;";
    }

    ?>
</select>

<label for="FormControlSelect"> Product Brand </label>
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
<label for="InputTitle"> Product Title</label>
<input name="title" type="text" id="InputTitle" placeholder="Title">
<div id='name_error'></div>
</div>

<div>
<label for="InputPrice"> Price </label>
<input name="price" type="number" id="InputPrice" placeholder="100">
<div id='price_error'></div>
</div>

<label for="InputDescription"> Description </label>
<input name="description" type="text" id="InputDescription" placeholder="description">

<label for="InputControlFile"> Image </label>
<input name="image" type="file" >

<label for="InputKeyword"> Keyword </label>
<input name="keyword" type="text" id="InputKeyword" placeholder="keyword">

<input type="file" name="image" accept="image/png, image/jpg">

<button type="submit" name="addproduct"> Submit </button>


</form>
<script src = "../js/work.js"></script>

</body>

</html>