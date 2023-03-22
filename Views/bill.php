<?php
include 'connect.php';
if (isset($_GET['id']) && isset($_POST['name'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $StationForm = $_GET['stationF'];
    $StationTo = $_GET['stationT'];
    $direction = $_GET['direction'];
    $TripNumber = $_GET['number'];
    $degree = $_GET['degree'];
    $Date = $_GET['date'];
    $Time = $_GET['time'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <table class="table my-5 ">
        <thead>
            <tr>
                <th scope="col"> Name</th>
                <th scope="col">Station(Form)</th>
                <th scope="col">Station(To)</th>
                <th scope="col">Direction</th>
                <th scope="col">Trip Number</th>
                <th scope="col">Price trip</th>
                <th scope="col">Trip Date</th>
                <th scope="col">Trip time</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <th scope="row">1</th> -->
                <td><?php echo $_GET['name']; ?></td>
                <td><?php echo $_GET['stationF']; ?></td>
                <td><?php echo $_GET['stationT']; ?></td>
                <td><?php echo $_GET['direction']; ?></td>
                <td><?php echo $_GET['number']; ?></td>
                <td><?php echo $_GET['degree']; ?></td>
                <td><?php echo $_GET['date']; ?></td>
                <td><?php echo $_GET['time']; ?></td>

                <td>yes</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
        <button class="btn btn-primary w-60 mt-2"><a href="userDash.php" class="text-light">Home</a></button>
        <button onclick="window.print()" class="btn btn-primary">Print</button>

    </div>
</body>

</html>