<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body> 

<?php
include("../classes/customer_class.php");



function insert_customer($username,$usermail,$userpassword,$usercountry,$usercity, $usernum, $role)
{
    $customer = new Customer();
    return $customer->insert_customer_class($username,$usermail,$userpassword,$usercountry,$usercity, $usernum, $role);
}

function login_controller($email){
    $customerlogin = new Customer();
    return $customerlogin->customer_login_class($email);
}

function insert_brand($brandname)
{
    $addbrand = new Customer();
    return $addbrand->insert_brand_class($brandname);
}



function insert_category($catname)
{
    $addcategory = new Customer();
    return $addcategory->insert_category_class($catname);
}

?>

</form>
</html>