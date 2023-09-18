<?php

require_once "connect.php";

$id = $_GET['id'];


$sql = "INSERT INTO `orders`( `Order_id`) 
		VALUES ('$id')";

if (mysqli_query($link, $sql)) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
