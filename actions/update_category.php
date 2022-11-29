<?php
require('../settings/core.php');
require('../controllers/category_controller.php');

$brand= select_allcategory();

function display_all_category_fxn(){

    //run the controller
    $run_item =select_allcategory();


   echo
   "
<h3> Database Information </h3>
<table class='table table-dark table-striped table-bordered'>

<thead>
    <tr>
        <th> Category id  </th>
        <th> Category name</th>
        
        <th> Actions  </th>

    </tr>
<thead>";


foreach($run_item as $row)
{
    echo 
    "
    <tbody>
    <tr>
    <td>".$row['cat_id']."</td>
    <td> ".$row['cat_name']."  </td>
    <td>
    <a href = '../actions/Updatecategory.php?id=".$row['cat_id']."'>Update</a>
    </td>
    ";


}

echo 
" </tbody> </table>";

}


display_all_category_fxn();

?>
