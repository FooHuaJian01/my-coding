<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pt";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted and the "register" button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["register"])) {
    // Retrieve form data
    $name = $_POST["name"];
    $ic = $_POST["ic"];
    $birth = $_POST["birth"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $parent = $_POST["parent"];
    $mobileP = $_POST["mobileP"];
    $parentGu = $_POST["parentGu"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

    // Check if the email already exists in the database
    $checkEmailSql = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($checkEmailSql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists. Please sign in or use a different email.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO login (name, ic, birth, mobile, gender, address, parent, mobileP, parentGu, email, password, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $name, $ic, $birth, $mobile, $gender, $address, $parent, $mobileP, $parentGu, $email, $password, $user_type);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Sign-up successful!');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        // Close the statement
        $stmt->close();
    }
}
}

// Close the database connection
$conn->close();
?>
