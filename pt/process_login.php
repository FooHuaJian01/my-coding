<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

    // Use a prepared statement to avoid SQL injection
    $sql = "SELECT * FROM login WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $stored_password = $row["password"]; // Assuming the password column is named "password"

            // Verify the password using password_verify for secure password hashing
            if (password_verify($password, $stored_password)) {
                $_SESSION["user_type"] = $user_type;

                if ($user_type == "PartTime") {
                    header("Location: PartTime.php");
                    exit();
                } elseif ($user_type == "other") {
                    header("Location: admin.php");
                    exit();
                } else {
                    echo "<script>alert('Invalid user type.');</script>";
                    echo "<script>window.location.href = 'login.php';</script>";
                    exit();
                }
            } else {
                echo "<script>alert('Incorrect password.');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('User not found.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
            exit();
        }
    } else {
        echo "Query failed: " . $conn->error;
    }
}

$conn->close();
?>
