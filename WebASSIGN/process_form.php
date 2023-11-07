<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>WEB ASSIGNMENT</title>
</head>
<body>
    
</body>
</html>
<?php
$servername = "localhost";  
$username = "sirronney"; 
$password = "T#9758@qlph";
$dbname = "Hospital";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Add more validation and error handling as needed

// Check if passwords match
if ($password !== $confirm_password) {
    echo "Passwords do not match.";
    exit;
}

// Hash the password (you should use a stronger hashing method in production)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the patients table
$sql = "INSERT INTO patients (first_name, middle_name, last_name, course, gender, phone, address, email, password)
        VALUES ('$first_name', '$middle_name', '$last_name', '$course', '$gender', '$phone', '$address', '$email', '$hashed_password')";



if ($conn->query($sql) === TRUE) {
    echo "
    <div class='centered-container success-message'>
        <span class='icon-checkmark'></span>
        <p>Patients' information added successfully</p>
    </div>";

    echo "<div class='centered-container'><a href='http://localhost/MyPHP/WebASSIGN/' class='back-button'>Go Back to Form</a></div>";
} else {
    echo "<div class='centered-container error-message'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
}

// Close the connection
$conn->close();
?>
