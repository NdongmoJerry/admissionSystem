<?php
include('config.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into the database
    $stmt = $con->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        // Registration successful
        header('Location: login.php');
        exit(); // Ensure that the script stops here to prevent further execution
    } else {
        // Error handling
        echo "Error: " . $con->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="signup-container" style="background-color: #e1ffff;">
<div style="font-size: 30px; color: black; font-weight: bold;">
                SIGN UP TO NATIONAL POLYTECHNIC UNIVERSITY INSTITUTE BAMENDA <b>ADMISSION SYSTEM</b>
            </div>
    <div class="container-signup">
        <div class="signup-form">
            <form method="post">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="myButton" name="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
    <?php include('includes/footer.php') ?>
</body>
</html>
