<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psych_support"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullName = $_POST['Full_Name'] ?? '';
$email = $_POST['Email'] ?? '';
$password = $_POST['Password'] ?? '';

if (empty($fullName) || empty($email) || empty($password)) {
    echo "Please fill in all fields before registering.";
    exit;
}


$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullName, $email, $password);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
