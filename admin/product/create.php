<?php
require_once "../../core/function.php";

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$img = $_POST['img'];
$category_id = $_POST['category_id'];


$rs = create_products($name,$description,$price,$img,$category_id);
var_dump($rs);
die();
$response = array(
    'status' => $rs
);
echo json_encode($response);