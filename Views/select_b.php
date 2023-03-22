<?php

include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $StationForm = $_GET['stationF'];
    $StationTo = $_GET['stationT'];
    $direction = $_GET['direction'];
    $TripNumber = $_GET['number'];
    $degree = $_GET['degree'];
    $Date = $_GET['date'];
    $Time = $_GET['time'];


    if (empty($name)) {
        echo '<script> alert("Full  name is required ") </script>';
        exit;
    } elseif (empty($StationForm)) {
        echo '<script> alert("the name of start station is required ") </script>';
        exit;
    } elseif (empty($StationTo)) {
        echo '<script> alert("the name of end station is required ") </script>';
        exit;
    } elseif (empty($direction)) {
        echo '<script> alert("The direction is required ") </script>';
        exit;
    } elseif (empty($TripNumber)) {
        echo '<script> alert(" Number of trip is required ") </script>';
        exit;
    } elseif (empty($degree)) {
        echo '<script> alert("The degree is required ") </script>';
        exit;
    } elseif (empty($Date)) {
        echo '<script> alert("The Date is required ") </script>';
        exit;
    } elseif (empty($Time)) {
        echo '<script> alert("The Time is required ") </script>';
        exit;
    } else {
        $sql = "insert into booked(name,StartStation,endStation,direction,TripNumber,degree,Date,Time) 
        values('$name','$StationForm','$StationTo','$direction','$TripNumber','$degree','$Date','$Time')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script> alert("Success ") </script>';
            header("location:bill.php");
        }
    }
    print_r($result);


    //header('location:user.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Select the booking</title>
</head>

<body>

    <div class="container my-5">
        <form method="Get" action="bill.php" class="form-control my-5 ">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "Select * from stationdb where id='$id' ";
                $result = mysqli_query($conn, $sql);
                if (!empty($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>


                        <div class="mb-3">
                            <label class="form-label">Name </label>
                            <input type="text" class="form-control" placeholder="Enter the name"" " name="name" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Station name(from) </label>
                            <input type="text" class="form-control" placeholder="Enter the name " value="<?php echo $row['station']; ?>" name="stationF" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Station name(to) </label>
                            <input type="text" class="form-control" placeholder="Enter the name " value="<?php echo $row['address']; ?>" name="stationT" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Direction</label>
                            <input type="text" class="form-control" placeholder="one way//round trip" name="direction" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trip Number</label>
                            <input type="text" class="form-control" placeholder="Enter trip number" value="<?php echo $row['id']; ?>" name="number" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">price trip</label>
                            <input type="text" class="form-control" placeholder="Enter  price Frist or Second class" name="degree" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="text" class="form-control" placeholder="Enter the Date" value="<?php echo $row['Date']; ?>" name="date" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Time</label>
                            <input type="text" class="form-control" placeholder="Enter the Time" value="<?php echo $row['Time']; ?>" name="time" autocomplete="off">
                        </div>

                    <?php
                    }
                    ?>
                    <button type="submit" class="btn btn-primary" name="submit"><a class="text-light">Ticket booking</a></button>

            <?php
                }
            }
            ?>
        </form>
    </div>
</body>

</html>