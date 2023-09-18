<?php

require_once "connect.php";

$id = $_GET['id'];
$age = $_POST['Age'];
$name = $_POST['Name'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$Salary = $_POST['Salary'];
$Hire_Date = $_POST['Hire_Date'];
$Email = $_POST['Email'];



$update = "UPDATE employee SET  Name = '$name' , Age = '$age' ,Gender = '$gender' , Address = '$address' , Salary = '$Salary' , Hire_Date = $Hire_Date , Email = '$Email' where ID = $id";



if (mysqli_query($link, $update)) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . $update . "<br>" . mysqli_error($link);
}
