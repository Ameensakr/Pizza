<?php

require_once "connect.php";

$name = $_POST['Name'];
$price = $_POST['Price'];
$Photo = $_POST['Photo'];


$sql = "INSERT INTO `pizza`( `Name`,`Price`,`Photo`) 
		VALUES ('$name','$price','images/$Photo')";

if (mysqli_query($link, $sql)) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
