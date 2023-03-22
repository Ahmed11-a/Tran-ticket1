<?php
include 'connect.php';
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['Email'];
    $i = 0;
    $password = $_POST['password'];
    if (empty($fname)) {
        echo '<script> alert("Full  first name is required ") </script>';
        exit;
    } elseif (empty($lname)) {
        echo '<script> alert("Full  Last name is required ") </script>';
        exit;
    } elseif (empty($email)) {
        echo '<script> alert("Full  Email is required ") </script>';
        exit;
    } elseif (empty($password)) {
        echo '<script> alert("Full Password is required ") </script>';
        exit;
    } else {
        
        $sql="update userd set fname='$fname',lname='$lname',Email='$email',password='$password' where id='$id' ";
        $result=mysqli_query($conn,$sql);
        if($result){
            $i=1;
            echo '<script> alert("Success to Update the data ") </script>';
            }
        else{
             die(mysqli_error($conn));

        }
    }
    if($i==1){
        header('location:user.php');
    }
    
    }

    ?>
