<?php
// Start a session
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "next view";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signup"])) {
        // Process signup data
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Insert data into the database (for signup)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $sql = "INSERT INTO users (name, email, username, password) VALUES ('$fullname', '$email', '$username', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to login.html after successful signup
            header("Location: login.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["login"])) {
        // Process login data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate login credentials
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                // Set session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;

                // Redirect to NextView.html after successful login
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid password";
            }
        } else {
            echo "Invalid username";
        }
    } else {
        echo "Invalid request";
    }
}

// Close the database connection
$conn->close();
?>