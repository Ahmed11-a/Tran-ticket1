<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Train ticket booking</a>
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
            </li>
            <li><a class="dropdown-item" href="login.php?logout">Logout</a></li>
        </ul>
        </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="userDash.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="booking.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Booking
                        </a>
                        <a class="nav-link" href="payment.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Payment
                        </a>
                        <a class="nav-link" href="contact.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Contact
                        </a>
                        <a class="nav-link" href="bill.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Bill
                        </a>
                        </a>

                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Booking</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">booked ticket</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            Book tickets and select the reservation detailing </div>
                    </div>
                    <button class="btn btn-primary my-2"><a href="add_station.php" class="text-light">Payment</a></button>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> DataTable
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Station(From)</th>
                                        <th>Station(to)</th>
                                        <th>First class-price</th>
                                        <th>Second class-price</th>
                                        <th>Trip date </th>
                                        <th>Trip time</th>
                                        <th>Track Selection</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "Select * from stationdb ";
                                    $result = mysqli_query($conn, $sql);
                                    if (!empty($result)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['id']; ?> </th>
                                                <td><?php echo $row['station']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['firstC']; ?></td>
                                                <td><?php echo $row['secondC']; ?></td>
                                                <td><?php echo $row['Date']; ?></td>
                                                <td><?php echo $row['Time']; ?></td>
                                                <td>
                                                    <a href="select_b.php?id= <?php echo $row['id']; ?> " class="btn btn-primary text-light">One way or Round trip</a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>