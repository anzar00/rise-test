<?php


// Declaring variables to prevent errors

$f_name = ""; // For storing father's / guardian's name
$name = ""; // For storing student's name
$mobile = ""; // For storing mobile number
$email = ""; // For storing email
$address = ""; // For storing address
$district = ""; // For storing district
$DOB = ""; // For storing date of birth
$class = ""; // For storing class
$stream = ""; // For storing stream
$school = ""; // For storing school

$error_array = array(); // Variable that holds error messages


if(isset($_POST['register'])){

	// Registration form values

	// name
	$name = strip_tags($_POST['name']); // For removing html tags from input

    //father's / guardian's name
    $f_name = strip_tags($_POST['f-name']); // For removing html tags from input

    // mobile
    $mobile = strip_tags($_POST['mobile']); // For removing html tags from input

    // email
	$email = strip_tags($_POST['email']); // For removing html tags from input
	$email = str_replace(' ', '', $email); // To replace the spaces in the input

    // Email Validation
    // Check if email is in valid format 
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        // Check if email already exists 
        $e_check = mysqli_query($con, "SELECT email FROM applicant WHERE email='$email'");
        //Count the number of rows returned
        $num_rows = mysqli_num_rows($e_check);
        if ($num_rows > 0) {
            array_push($error_array,
                "Already registered with this mail, try using another email id.</br>"
            );
        }
    } else {
        array_push($error_array, "Invalid email format</br>");
    }

    // address
    $address = strip_tags($_POST['address']); // For removing html tags from input

    // district
    $district = strip_tags($_POST['district']); // For removing html tags from input

    // DOB
    $DOB = strip_tags($_POST['DOB']); // For removing html tags from input
    
    // class
    $class = strip_tags($_POST['class']); // For removing html tags from input

    // stream
    $stream = strip_tags($_POST['stream']); // For removing html tags from input

    // school
    $school = strip_tags($_POST['school']); // For removing html tags from input


	// Inserting values into the database after all succesfull validations

    if (empty($error_array)) {
        $query = mysqli_query($con, "INSERT INTO applicant VALUES ('', '$name', '$f_name', '$mobile', '$email', '$address', '$district', '$DOB', '$class', '$stream', '$school')");
		array_push($error_array, "<span style='color: #14C800;'>Registered Successfully!</span><br>");
    }

	}
