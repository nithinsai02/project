<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost"; // Change if your server is different
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "hostelproblem"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
// Get form data
$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$applicationID = isset($_POST['Application_ID']) ? $_POST['Application_ID'] : '';
$mobileNumber = isset($_POST['Mobile_number']) ? $_POST['Mobile_number'] : '';
$hostelBlock = isset($_POST['hostel_block']) ? $_POST['hostel_block'] : ''; // Change this line
$roomNumber = isset($_POST['Room_number']) ? $_POST['Room_number'] : '';
$problemType = isset($_POST['Type_of_problem']) ? $_POST['Type_of_problem'] : '';
$reportProblem = isset($_POST['Report_your_problem']) ? $_POST['Report_your_problem'] : '';

// SQL query to insert data into the table
$sql = "INSERT INTO users (Name, Application_ID, Mobile_number, Hostel_block, Room_number, Type_of_problem, Report_your_problem)
        VALUES ('$name', '$applicationID', '$mobileNumber', '$hostelBlock', '$roomNumber', '$problemType', '$reportProblem')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>