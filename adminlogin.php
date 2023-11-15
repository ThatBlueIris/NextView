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
    // Retrieve user input
    $enteredUsername = $_POST["username"] ?? "";
    $enteredPassword = $_POST["password"] ?? "";

    // Perform simple authentication against the database
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $enteredUsername, $enteredPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $enteredUsername;

        // Redirect to admin.php after successful login
        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
        }
    </style>
</head>
<body>

    <form method="post">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Login</button>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    </form>

</body>
</html>
