<?php
require_once '../Models/user.php';
require_once '../Controllers/AuthController.php';
$errMsg="";
if(isset($_GET["logout"])){
}
if (isset($_POST['submit'])) {
    if (!empty($_POST['Email']) && !empty($_POST['Password'])) {

        $user = new User;
        $auth = new AuthControllor;
        $user->email = $_POST['Email'];
        $user->password = $_POST['Password'];
       if(!$auth->login($user)){
           if(!isset($_SESSION["userId"])){
               //session_start();
           }
            $errMsg=$_SESSION["errMsg"];

       }
       else{
            if (!isset($_SESSION["userId"])) {
                session_start();
            }
            if ($_SESSION["userEmail"]== "admin@admin.com" && $_SESSION["userPass"]=="admin#123") {
                header("location:index.php");
            }
            else{
                header("location:userDash.php");


            }
           

       }

        
    }
    else{
        $errMsg="Please fill fields";
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
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <?php
                                    if($errMsg!="")
                                    {
                                        ?>
                                <div class="alert alert-danger" role="alert">
                                <?php echo  $errMsg; ?>
                                </div>

                                <?php }?>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" placeholder="name@example.com"
                                                name="Email" />
                                            <label>Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="password" placeholder="Password"
                                                name="Password" />
                                            <label>Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <button type="login" name="submit"
                                                class="btn btn-primary"><a>Login</a></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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