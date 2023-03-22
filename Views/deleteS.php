<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from stationdb where id='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script> alert("Success to delete the data ") </script>';
        header('location:station.php');
    } else {
        die(mysqli_error($conn));
    }
}
