<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "valentine_db";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$answer = $_POST['answer'];
$comments = $_POST['comments'];

// Prepare SQL statement (prevents SQL injection)
$stmt = $conn->prepare("INSERT INTO submissions (fname, lname, answer, comments) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fname, $lname, $answer, $comments);

// Execute
if ($stmt->execute()) {
    echo "<h2>💖 Contract Signed Successfully! 💖</h2>";
    echo "<p>Thank you, $fname! You are officially my Valentine.</p>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
