<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Database connection
    $servername = "localhost"; // Replace with your database host (usually 'localhost')
    $username = "root";        // Replace with your database username
    $password = "";            // Replace with your database password
    $dbname = "services"; // Database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and validate input
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $mobile = mysqli_real_escape_string($conn, trim($_POST['mobile']));
    $service = mysqli_real_escape_string($conn, trim($_POST['service']));
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $pincode = mysqli_real_escape_string($conn, trim($_POST['pincode']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));
    $preferred_date = mysqli_real_escape_string($conn, trim($_POST['date']));
    $preferred_time = mysqli_real_escape_string($conn, trim($_POST['time']));

    // Check if any field is empty
    if (empty($name) || empty($mobile) || empty($service) || empty($address) || empty($pincode) || empty($city) || empty($preferred_date) || empty($preferred_time)) {
        die("All fields are required.");
    }

    // Insert data into the database
    $sql = "INSERT INTO contact_requests (name, mobile, service, address, pincode, city, preferred_date, preferred_time)
            VALUES ('$name', '$mobile', '$service', '$address', '$pincode', '$city', '$preferred_date', '$preferred_time')";

    if ($conn->query($sql) === TRUE) {
        echo "Your request has been submitted successfully. We'll get back to you shortly.";
        header('Location: web.html');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>
