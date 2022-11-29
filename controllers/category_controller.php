<?php

require('../classes/category_class.php');

function insert_category($catname)
{
    $addcategory = new Category();
    return $addcategory->insert_category_class($catname);
}

function select_allcategory()
{
    $selectallcategory = new Category();
    return $selectallcategory->select_allcategory_class();
}

function selectone_category($id)
{
    $selectonecategory = new Category();
    return $selectonecategory->select_one_category_class($id);
}

function select_category_name($name)
{
    $selectcategoryname = new Category();
    return $selectcategoryname->select_category_name($name);
}

function update_onecategory($id, $name)
{
    $updateonecategory = new Category();
    return $updateonecategory->update_onecategory_class($id, $name);
}
