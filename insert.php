<?php
$servername = "localhost";
$username = "root";  // Replace with your DB username
$password = "";      // Replace with your DB password
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address_line1 = $_POST['address_line1'];
$address_line2 = $_POST['address_line2'];
$city = $_POST['city'];
$region = $_POST['region'];
$postal_code = $_POST['postal_code'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$found_us = $_POST['found_us'];
$feedback = $_POST['feedback'];
$recommend_us = $_POST['recommend_us'];
$ref1_first_name = $_POST['ref1_first_name'];
$ref1_last_name = $_POST['ref1_last_name'];
$ref1_email = $_POST['ref1_email'];
$ref1_phone = $_POST['ref1_phone'];
$ref2_first_name = $_POST['ref2_first_name'];
$ref2_last_name = $_POST['ref2_last_name'];
$ref2_email = $_POST['ref2_email'];
$ref2_phone = $_POST['ref2_phone'];

// Insert data into the database
$sql = "INSERT INTO registration (first_name, last_name, address_line1, address_line2, city, region, postal_code, country, email, phone, found_us, feedback, recommend_us, ref1_first_name, ref1_last_name, ref1_email, ref1_phone, ref2_first_name, ref2_last_name, ref2_email, ref2_phone)
VALUES ('$first_name', '$last_name', '$address_line1', '$address_line2', '$city', '$region', '$postal_code', '$country', '$email', '$phone', '$found_us', '$feedback', '$recommend_us', '$ref1_first_name', '$ref1_last_name', '$ref1_email', '$ref1_phone', '$ref2_first_name', '$ref2_last_name', '$ref2_email', '$ref2_phone')";

if ($conn->query($sql) === TRUE) {

    echo "<script>alert('Registration successful');</script>"; 

    echo " <a href='show.php'>View All Users</a>"; 
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();