<?php
//include 'connect.php';
 require_once '../Models/user.php';
require_once '../Controllers/AuthController.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['finame'];
    $lname = $_POST['laname'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if (empty($fname)) {
        $em = "Full  first name is required";
        header("location: register.php?error=$em");
        exit;
    } elseif (empty($lname)) {
        $em = "Full last name is required";
        header("location: register.php?error=$em");
        exit;
    } elseif (empty($email)) {
        $em = "Email is required";
        header("location: register.php?error=$em");
        exit;
    } elseif (empty($password)) {
        $em = "Password is required";
        header("location: register.php?error=$em");
        exit;
    } else if (!empty($password) && !empty($cpassword)) {
        if ($password === $cpassword) {
            $sql = "insert into userd(fname,lname,Email,password) 
              values('$fname','$lname','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $ew = "Your account has been created successfully";
                header("location: register.php?Success=$ew");
                //echo '<script> alert("Success to Register the data ") </script>';
            }
        } else {
            $em = "Password not Matched ";
            header("location: register.php?error=$em");
        }
    } else {
        echo '<script> alert(" error to Register") </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="">
                                        <?php
                                        if (isset($_GET['error'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $_GET['error']; ?>
                                        </div>
                                        <?php } ?>

                                        <?php
                                        if (isset($_GET['Success'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo $_GET['Success']; ?>
                                        </div>
                                        <?php } ?>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter your first name" name="finame"
                                                        autocomplete="off" />
                                                    <label>First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text"
                                                        placeholder="Enter your last name" name="laname"
                                                        autocomplete="off" />
                                                    <label>Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" placeholder="name@example.com"
                                                name="Email" />
                                            <label>Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password"
                                                        placeholder="Create a password" name="password"
                                                        autocomplete="off" />
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm"
                                                        type="password" placeholder="Confirm password" name="cpassword"
                                                        autocomplete="off" />
                                                    <label>Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" text-center py-3">
                                            <button name="submit" class="btn btn-primary "> Create Account</button>
                                        </div>
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="login.php">Have an account? Go to login</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>