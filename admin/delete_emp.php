<?php

require_once "connect.php";

$id = $_GET['id'];


if (mysqli_query($link, "DELETE FROM employee WHERE ID = $id")) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . "DELETE FROM employee WHERE ID = $id" . "<br>" . mysqli_error($link);
}
