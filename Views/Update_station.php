<?php
include 'update_s.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>update user</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST" class="form-control my-5 ">
            <div class="mb-3">
                <label class="form-label">Station(From) </label>
                <input type="text" class="form-control" placeholder="Enter The name of the starting  Station" name="station" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Station(to)</label>
                <input type="text" class="form-control" placeholder="Enter The name of the ending  Station" name="address" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">First class-price </label>
                <input type="text" class="form-control" placeholder="Enter  the First class-price" name="firstC" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label"> Second class-price</label>
                <input type="text" class="form-control" placeholder="Enter your Password" name="secondC" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="text" class="form-control" placeholder="Enter the Date" name="date" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Time</label>
                <input type="text" class="form-control" placeholder="Enter the Time" name="time" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>