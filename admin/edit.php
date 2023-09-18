<?php

require_once "connect.php";

$id = $_GET['id'];
$name = $_POST['Name'];
$price = $_POST['Price'];
$Photo = $_POST['Photo'];


$update = "UPDATE pizza SET Name = '$name' , Price = '$price' , Photo = '$Photo' where Order_id = $id";



if (mysqli_query($link, $update)) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . $update . "<br>" . mysqli_error($link);
}
