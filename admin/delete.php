<?php

require_once "connect.php";

$id = $_GET['id'];


if (mysqli_query($link, "DELETE FROM pizza WHERE Order_id = $id")) {
    echo json_encode(array("All Good"));
}
else {
    echo "Error: " . "DELETE FROM pizza WHERE Order_id = $id" . "<br>" . mysqli_error($link);
}
