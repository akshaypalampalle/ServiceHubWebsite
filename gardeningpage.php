<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gardening Services</title>
    <style>
        /* Header */
        header {
            background-color: #003366;
            color: white;
            padding: 20px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        header nav ul {
            display: flex;
            gap: 25px;
            justify-content: flex-end;
        }

        header nav ul li a {
            padding: 10px 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        header nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffcc00;
            border-radius: 4px;
        }

        /* Gardening Services Banner */
        .banner img {
            width: 100%; /* Full width of the container */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Removes extra space below the image */
            margin: 0 auto; /* Center alignment */
        }  

        /* Basic Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .content {
            padding: 40px;
        }

        .section-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .service-item {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(33% - 20px);
            box-sizing: border-box;
        }

        .service-item h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .service-item p {
            color: #666;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .service-item .price {
            font-size: 1.2rem;
            color: #28a745;
            font-weight: bold;
        }

        .contact-section {
            background-color: #ffffff;
            color: #333;
            padding: 40px;
            margin-top: 40px;
            border-top: 2px solid #ddd;
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .contact-form input, 
        .contact-form select,
        .contact-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #28a745;
            color: white;
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #218838;
        }

        /* Footer */
        footer {
            background-color: #111;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 0.9rem;
        }

        footer p {
            margin: 0;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ffcc00;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">ServiceHub</div>
            <ul>
                <li><a href="web.html">Home</a></li>
            </ul>
        </nav>
    </header>

    <!-- Gardening Services Banner -->
    <div class="banner">
        <img src="images/gardeningservicesbanner.jpg" alt="Gardening Services Banner">
    </div>

    <!-- Service Section -->
    <div class="content">
        <h2 class="section-title">Our Gardening Services We Provide</h2>
        <div class="service-list">
            <div class="service-item">
                <h3>Lawn Care</h3>
                <p>Professional lawn care services to keep your garden healthy and green.</p>
                <p class="price">₹1000 - ₹3000</p>
            </div>
            <div class="service-item">
                <h3>Planting & Landscaping</h3>
                <p>Transform your outdoor space with our expert planting and landscaping services.</p>
                <p class="price">₹2000 - ₹6000</p>
            </div>
            <div class="service-item">
                <h3>Garden Maintenance</h3>
                <p>Regular garden maintenance to ensure a beautiful and well-kept garden.</p>
                <p class="price">₹1500 - ₹4000</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="contact-section">
        <h2>Contact Us Today!</h2>
        <div class="contact-form">
            <form action="process_form.php" method="POST">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
            
                <label for="service">Service</label>
                <select id="service" name="service" required>
                    <option value="">Select a service</option>
                    <option value="lawn-care">Lawn Care</option>
                    <option value="planting-landscaping">Planting & Landscaping</option>
                    <option value="garden-maintenance">Garden Maintenance</option>
                </select>
            
                <label for="address">Enter Street Address and Locality</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            
                <label for="pincode">Enter Pin Code</label>
                <input type="text" id="pincode" name="pincode" placeholder="Enter pin code" required>
            
                <label for="city">Enter City</label>
                <input type="text" id="city" name="city" placeholder="Enter your city" required>
            
                <label for="date">Select Preferred Date</label>
                <input type="date" id="date" name="date" required>
            
                <label for="time">Select Preferred Time</label>
                <input type="time" id="time" name="time" required>
            
                <button type="submit">Get Call Back</button>
            </form>
        </div>
    </div>

     <!-- Footer -->
     <footer>
        <p>&copy; 2024 ServiceHub. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

</body>
</html>


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
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>
