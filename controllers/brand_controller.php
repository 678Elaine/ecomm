<?php

require('../classes/brand_class.php');

function insert_brand($brandname)
{
    $addbrand = new Brand();
    return $addbrand->insert_brand_class($brandname);
}

function select_allbrand()
{
    $selectallbrand = new Brand();
    return $selectallbrand->select_allbrand_class();
}

function selectone_brand($id)
{
    $selectonebrand = new Brand();
    return $selectonebrand->select_one_brand_class($id);
}

function select_brand_name($name)
{
    $selectbrandname = new Brand();
    return $selectbrandname->select_brand_name($name);
}

function update_onebrand($id, $name)
{
    $updateonebrand = new Brand();
    return $updateonebrand->update_onebrand_class($id, $name);
}
