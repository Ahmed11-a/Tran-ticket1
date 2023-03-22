<?php
include 'connect.php';
require_once '../Controllers/connectDB.php';
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $station = $_POST['station'];
    $address = $_POST['address'];
    $firstC = $_POST['firstC'];
    $secondC = $_POST['secondC'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];

    if (empty($station)) {
        echo '<script> alert("Station name is required ") </script>';
        exit;
    } elseif (empty($address)) {
        echo '<script> alert("  Address name is required ") </script>';
        exit;
    } elseif (empty($firstC)) {
        echo '<script> alert("Enter the first class price ") </script>';
        exit;
    } elseif (empty($secondC)) {
        echo '<script> alert("Enter the second class price  ") </script>';
        exit;

    } elseif (empty($secondC)) {
        echo '<script> alert("Enter the second class price  ") </script>';
        exit;}
        elseif (empty($Date)) {
        echo '<script> alert("Enter the Date  ") </script>';
        exit;
    } elseif (empty($Time)) {
        echo '<script> alert("Enter the Time  ") </script>';
        exit;
    }


     else {
        $sql = "update stationdb set station='$station',address='$address',firstC='$firstC',secondC='$secondC',Date='$Date',Time='$Time' where id='$id' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script> alert("Success to Update the data ") </script>';
            header("location:station.php");
        } else {
            die(mysqli_error($conn));
        }
    }
    
}

?>