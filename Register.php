<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullName = $_POST['full-name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $bloodType = $_POST['blood-type'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Validate and process the form data as needed
    // ...

    // Example: Display the submitted data
    echo "Full Name: " . $fullName . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Date of Birth: " . $dob . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Email Address: " . $email . "<br>";
    echo "Phone Number: " . $phone . "<br>";
    echo "Password: " . $password . "<br>";
}
?>
