<?php

require_once "connect.php";

$name = $_POST['Name'];
$Phone = $_POST['Phone'];

$address = $_POST['Address'];

$email = $_POST['Email'];


$sql = "INSERT INTO `customer`(`Phone` ,`Name` , `Address` , `Email`) 
		VALUES ('$Phone','$name' , '$address' , '$email')";

if (mysqli_query($link, $sql)) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
