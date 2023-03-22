<?php
include 'connect.php';
require_once'../Controllers/connectDB.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from booked where id='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script> alert("Success to delete the data ") </script>';
        header('location:Rates.php');
    } else {
        die(mysqli_error($conn));
    }
}
