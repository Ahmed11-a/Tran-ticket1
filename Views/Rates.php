<?php
include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
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
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="Contact.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Contact
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">

                        </div>
                        <div class="sb-sidenav-menu-heading">Master list</div>

                        <a class="nav-link" href="station.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Station
                        </a>

                        </a>
                        <div class="sb-sidenav-menu-heading">Report</div>
                        <a class="nav-link" href="Rates.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Rates
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
                    <h1 class="mt-4">Report</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            This page is for Users who book tickets within the system </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Rates
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Station(Form)</th>
                                        <th>Station(To)</th>
                                        <th>Direction</th>
                                        <th>Number of Trip</th>
                                        <th>Price of trip</th>
                                        <th>Trip date</th>
                                        <th>Trip time</th>
                                        <th>operations</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "Select * from booked ";
                                    $result = mysqli_query($conn, $sql);
                                    if (!empty($result)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <!-- <th scope="row"><?php echo $row['id']; ?> </th>-->
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['StartStation']; ?></td>
                                                <td><?php echo $row['endStation']; ?></td>
                                                <td><?php echo $row['direction']; ?></td>
                                                <td><?php echo $row['TripNumber']; ?></td>
                                                <td><?php echo $row['degree']; ?></td>
                                                <td><?php echo $row['Date']; ?></td>
                                                <td><?php echo $row['Time']; ?></td>
                                                <td>
                                                    <a href="Update_Report.php?id= <?php echo $row['id']; ?> " class="btn btn-primary">Update</a>
                                                    <a href="delete_Report.php?id= <?php echo $row['id']; ?> " class="btn btn-danger">delete</a>
                                                </td>


                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <button onclick="window.print()" class="btn btn-primary">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>