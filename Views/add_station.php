<?php
session_start();
if (!isset($_SESSION["userEmail"]) && !isset($_SESSION["userpass"])) {
    header("location:login.php");
} else {
    if ($_SESSION["userEmail"] != "admin@admin.com") {
        header("location:login.php");
    }
}
require_once '../Controllers/StationController.php';
require_once '../Models/station.php';
$stationController = new StationtController;
$St = $stationController->getStation();
$errMsg = "";
if (isset($_POST['submit'])) {

    if (!empty($_POST['station']) && !empty($_POST['address']) && !empty($_POST['firstC']) && !empty($_POST['secondC']) && !empty($_POST['date']) && !empty($_POST['time'])) {

        $STION = new station;
        $STION->stationF = $_POST['station'];
        $STION->stationT = $_POST['address'];
        $STION->FirstCp = $_POST['firstC'];
        $STION->SecondCp = $_POST['secondC'];
        $STION->Date = $_POST['date'];
        $STION->Time = $_POST['time'];


        if (!empty($STION)) {
            if ($stationController->addStation($STION)) {
                header("location: station.php");
            } else {
                $errMsg = "Something went wrong... try again";
            }
        }
    } else {
        $errMsg = "Please fill all fields";
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
    <title>Add station</title>
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Train ticket booking </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.php">Login</a>
                                        <a class="nav-link" href="register.php">Register</a>
                                        <a class="nav-link" href="password.php">Forgot Password</a>
                                    </nav>
                                </div>

                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Booking</div>
                        <a class="nav-link" href="tickting.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Tickting
                        </a>
                        <div class="sb-sidenav-menu-heading">Master list</div>

                        <a class="nav-link" href="station.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Station

                        </a>
                        <a class="nav-link" href="Rates.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Rates
                        </a>
                        </a>
                        <div class="sb-sidenav-menu-heading">Report</div>
                        <a class="nav-link" href="Daliy_Report.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Daliy Report
                        </a>
                        <a class="nav-link" href="user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Users
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Add Station</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Good day!</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-0">
                                This page is an example of Add staion, display details and timings of the station. 
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                if ($errMsg != "") {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo  $errMsg; ?>
                    </div>

                <?php } ?>
                <div class="container my-5">
                    <form method="POST">
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
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>