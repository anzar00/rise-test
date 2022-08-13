<?php

// Triggers when login button is pressed

if (isset($_POST['login'])) {

    $username = $_POST['username']; 
    $_SESSION['username'] = $username; // Store username into session variable 

    $password = md5($_POST['password']); // Get password

    // Query to check username and password to log in

    $check_database_query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if ($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $email = $row['email'];
        $role = $row['role'];
        $_SESSION['username'] = $username; // Storing username into session variable
        $_SESSION['role'] = $role; // Storing username into session variable
        header("location: index.php"); // Redirect to index page
        // switch ($role) {
        //     case 'Yaavar':
        //         header('location: yaavar/index.php');
        //         break;
        //     case 'Chaaragar':
        //         header('location: chaaragar/index.php');
        //         break;
        // }
        exit();
    } else {
        array_push($error_array, "Wrong Credentials..!!<br>");
    }
}
