<?php
session_start();

// Check if the user is not logged in and the current page is not the login page
if (!isset($_SESSION['loggedin']) && basename($_SERVER['PHP_SELF']) != 'login.php') {
    header('Location: login.php');
    exit(); // Stop further execution
}
?>
