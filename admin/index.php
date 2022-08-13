<?php
require '../config/db-con.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RiSE Admin</title>
    <?php include './include/header.php'; ?>
</head>

<body>
    <div class="container-scroller">
        <!-- component:components/navbar -->
        <?php include './components/navbar.php'; ?>
        <!-- component -->
        <div class="container-fluid page-body-wrapper">
            <!-- component:components/settings -->
            <!-- component -->
            <!-- component:components/settings -->
            <?php include './components/sidebar.php'; ?>
            <!-- component -->
            <!-- component:components/sidemenu -->
            <?php include './components/sidemenu.php'; ?>
            <!-- component -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome <?php echo $_SESSION['username'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Total Registrations</p>
                                            <?php $total = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) AS `count` FROM applicant;"));?>
                                            <p class="fs-30 mb-2"><?php echo $total['count'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Entrance</p>
                                            <?php $total = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) AS `count-e` FROM applicant WHERE class LIKE '%entrance%';"));?>
                                            <p class="fs-30 mb-2"><?php echo $total['count-e'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Class 12</p>
                                            <?php $total = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) AS `count-12` FROM applicant WHERE class LIKE '%12%';"));?>
                                            <p class="fs-30 mb-2"><?php echo $total['count-12'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <p class="mb-4">Class 11</p>
                                            <?php $total = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) AS `count-11` FROM applicant WHERE class LIKE '%11%';"));?>
                                            <p class="fs-30 mb-2"><?php echo $total['count-11'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Details</h4>
                                <p class="card-description">
                                    Update status by using<code>edit</code>option.
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Father's / Guardain's name
                                                </th>
                                                <th>
                                                    Mobile
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Address
                                                </th>
                                                <th>
                                                    District
                                                </th>
                                                <th>
                                                    DOB
                                                </th>
                                                <th>
                                                    Class
                                                </th>
                                                <th>
                                                    Stream
                                                </th>
                                                <th>
                                                    School
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $query = mysqli_query($con, "SELECT * FROM applicant");
                                                while($row = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['father_name']; ?></td>
                                                <td><?php echo $row['mobile']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['district']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['stream']; ?></td>
                                                <td><?php echo $row['school']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- component:components/_footer.html -->
                <?php include './include/footer.php'; ?>
                <!-- component -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <?php include './include/plugins.php'; ?>
</body>

</html>