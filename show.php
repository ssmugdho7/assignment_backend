<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Users</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
                <!-- Add more columns as needed -->
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["city"] . "</td>
                <td>" . $row["country"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No registered users found.";
}

$conn->close();

