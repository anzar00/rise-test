<?php
    require '../config/db-con.php';
    require '../handlers/register.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RiSE Test</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/fav.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../images/Rise Logo.png" alt="logo">
                            </div>
                            <h4>RTSE - August 28, 2022</h4>
                            <h6 class="font-weight-light">Info about test</h6>
                            <form class="pt-3" action="index.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control form-control-lg" id="name" name = "name" placeholder="Student Name" required/>
                                </div>
                                <div class="form-group">
                                    <label for="FatherName">Father's / Guardian's aName</label>
                                    <input type="text" class="form-control form-control-lg" id="f-name" name="f-name" placeholder="Father's / Guardian's Name" required/>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control form-control-lg" id="mobile" name = "mobile" placeholder="Mobile Number" required/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name = "email" placeholder="Email" required/>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="textarea" class="form-control form-control-lg" id="address" name = "address" placeholder="Address" required/>
                                </div>
                                <div class="form-group">
                                    <label for="district">District</label>
                                    <select class="form-control form-control-lg" id="district" name="district" required>
                                        <option>District</option>
                                        <option>Anantnag</option>
                                        <option>Bandipore</option>
                                        <option>Baramulla</option>
                                        <option>Budgam</option>
                                        <option>Doda</option>
                                        <option>Ganderbal</option>
                                        <option>Jammu</option>
                                        <option>Kathua</option>
                                        <option>Kishtwar</option>
                                        <option>Kulgam</option>
                                        <option>Kupwara</option>
                                        <option>Poonch</option>
                                        <option>Pulwama</option>
                                        <option>Rajouri</option>
                                        <option>Ramban</option>
                                        <option>Reasi</option>
                                        <option>Samba</option>
                                        <option>Shopian</option>
                                        <option>Srinagar</option>
                                        <option>Udhampur</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="DOB">DOB</label>
                                    <input type="date" class="form-control form-control-lg" id="DOB" name = "DOB" placeholder="DOB" required/>
                                </div>
                                <div class="form-group">
                                    <label for="class">Class</label>
                                    <input type="text" class="form-control form-control-lg" id="class" name = "class" placeholder="e.g 11" required/>
                                </div>
                                <div class="form-group">
                                    <label for="stream">Stream</label>
                                    <input type="text" class="form-control form-control-lg" id="stream" name = "stream" placeholder="e.g Non-Medical" required/>
                                </div>
                                <div class="form-group">
                                    <label for="school">School Name</label>
                                    <input type="text" class="form-control form-control-lg" id="school" name = "school" placeholder="e.g Burn Hall School" required/>
                                </div>
                                <div class="mt-3">
                                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="register" value="Register Now">
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    <?php if(in_array("<span style='color: #14C800;'>Registered Successfully!</span><br>", $error_array)) echo "<span style='color: #14C800;'>Registered Successfully!!</span><br>"; ?>
                                    <?php if(in_array("Already registered with this mail, try using another email id.</br>",$error_array)) echo "<span style='color: red'>Already registered with this mail, try using another email id.</span></br>"; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>