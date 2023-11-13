<?php
// Start a session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect them to the login page
    header("Location: login.html");
    exit();
}
?>