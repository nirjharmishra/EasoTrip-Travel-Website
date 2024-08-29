<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_auth";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Query to check if the email and password match
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful. Welcome, " . $email . "!";
    } else {
        echo "Invalid email or password.";
    }
}

// Close connection
mysqli_close($conn);
?>
