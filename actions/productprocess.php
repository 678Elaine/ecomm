<html>
    <body>
    <?php
//This is the processing page



//making action aware of controller
include("../controllers/product_controller.php");


//collecting form data
if(isset($_POST["updateproduct"])){
    
 $id=$_POST['product_id'];
  echo $id;


  
// $category =$_POST['category'];
// $brand = $_POST['brand'];
// $title = $_POST['title'];
// $price = $_POST['price'];
// here;
// $description = $_POST['description'];
// $keyword = $_POST['keyword'];

 
// $file = $_FILES["image"];
// $filename = $_FILES['image']['name'];
// $filetmpname = $_FILES['image']['tmp_name'];
// $filesize = $_FILES['image']['size'];
// $fileError = $_FILES['image']['error'];
// $filetype = $_FILES['image']['type'];

// $fileext = explode(".", $filename);
// $filerealext = strtolower(end($fileext));

// $allowed = array("jpg", "jpeg", "png", "pdf");

// if(in_array($filerealext, $allowed)){
//     if($fileError === 0){
//         if($filesize < 5000000){
//             $filenamenew = uniqid('',true).".".$filerealext;

//             $fileDestination = '../Images/product/'.$filenamenew;

//             $move= move_uploaded_file($filetmpname,$fileDestination);
//         }else{
//             echo "Your file is too big";
//         }
//     }else{
//         echo "You cannot uplaod this file type";
//     }
// }else{
//     echo "You cannot upload this type of file";

// }
 

// $results = update_product_controller( $id, $category, $brand, $title, $price, $description, $keyword,);
//     if($results == true){header("Location: ../view/admin.php");
// }
 }

 if (isset ($_POST["search"])){
     $keyword=$_POST['search_term'];

     $search_product = search_allproduct($keyword);
     if($search_product){

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


foreach($search_product as $row)
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
   </td>
   
   ";
       
     }
    }else{
         echo "Re-enter";
     }
     }
 



?>
    </body>

     <button type="submit" name ="admin"><a href= "../view/admin.php"> Return to Admin </a></button>

 </html>
