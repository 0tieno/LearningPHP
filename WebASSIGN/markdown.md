## MySQL codes to develop a “patients” table for the above form, in a database called “Hospital”. 


CREATE DATABASE Hospital;

USE Hospital;

CREATE TABLE patients (
    patient_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50),
    last_name VARCHAR(50) NOT NULL,
    course VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);



// if ($conn->query($sql) === TRUE) {
//     echo "Patient information added successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// if ($conn->query($sql) === TRUE) {
//     echo "<div style='text-align: center;'><p style='color: green;'>Patient information added successfully</p></div>";
// } else {
//     echo "<div style='text-align: center;'><p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
// }