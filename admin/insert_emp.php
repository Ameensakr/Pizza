<?php

require_once "connect.php";

$name = $_POST['Name'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$Salary = $_POST['Salary'];
$Hire_date = $_POST['Hire_Date'];
$email = $_POST['Email'];


$sql = "INSERT INTO `employee`( `Age`,`Name`,`Gender` ,`Address`  , `Salary` , `Hire_Date` , `Email`) 
		VALUES ('$age','$name','$gender' , '$address' , '$Salary' , '$Hire_date' , '$email')";

if (mysqli_query($link, $sql)) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
