<?php
include('../controllers/product_controller.php');

function showproducts(){
    $searched_products = select_allproduct();

    if($searched_products > 0)
    {

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
    }
}


?>