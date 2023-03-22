<?php
 include 'update.php';


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>update station</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST" class="form-control my-5 ">
            <div class="mb-3">
                <label class="form-label">First Name </label>
                <input type="text" class="form-control" placeholder="Enter your  First name" name="fname" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name </label>
                <input type="text" class="form-control" placeholder="Enter your  Last name" name="lname" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email </label>
                <input type="text" class="form-control" placeholder="Enter your Email" name="Email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Password </label>
                <input type="text" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>