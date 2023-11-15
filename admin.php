<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "next view";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query to select all users from the "users" table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Admin Page</title>';
    echo '<style>';
    echo 'table {';
    echo '  border-collapse: collapse;';
    echo '  width: 100%;';
    echo '  margin-top: 20px;';
    echo '}';
    echo 'th, td {';
    echo '  border: 1px solid #ddd;';
    echo '  padding: 8px;';
    echo '  text-align: left;';
    echo '}';
    echo 'th {';
    echo '  background-color: #f2f2f2;';
    echo '}';
    echo '</style>';
    echo '</head>';
    echo '<body>';
    echo '<h2>User Data</h2>';
    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Username</th><th>Password</th></tr>';

    // Fetch data and output it in the table
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["username"] . '</td>';
        echo '<td>' . $row["password"] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</body>';
    echo '</html>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
