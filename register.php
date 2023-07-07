<?php
// Database configuration
$host = "127.0.0.1:";
$username = "donugob";
$password = "6550";
$database = "student_registration";

// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$faculty = $_POST["faculty"];
$department = $_POST["department"];
$phoneNumber = $_POST["phone_number"];

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO students (name, email, faculty, department, phone_number) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $faculty, $department, $phoneNumber);

// Execute the statement
if ($stmt->execute()) {
  echo "Registration successful";
} else {
  echo "Error: " . $stmt->error;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
