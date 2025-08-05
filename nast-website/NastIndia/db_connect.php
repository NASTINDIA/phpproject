<?php
$message = "";

// Database connection
$host = "localhost";
$dbname = "nast";
$username = "root";
$password = "Sharad@1234"; // default for XAMPP or WAMP

$conn = new mysqli($localhost, $root, $Sharad@1234, $nast);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $mobile_number = $_POST['mobile_number'] ?? '';
    $course = $_POST['course'] ?? '';
    $email = $_POST['email'] ?? '';
    $city = $_POST['city'] ?? '';

    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, mobile_number, course, email, city) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $mobile_number, $course, $email, $city);

    if ($stmt->execute()) {
        $message = "Thank you $first_name, your response has been submitted!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
