<?php
include('config.php');

if(!empty($_POST['submit'])){
    $stuID = $_POST['sid'];
    $sql = "DELETE FROM student where id='$stuID'";
    $success = mysqli_query($con,$sql);
    if(!$success) {
        die('Could not enter data:'.mysqli_error($con)); // Use mysqli_error instead of mysql_error
    }

    $message= "Student deleted successfully. ID: ".$stuID;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <?php include('includes/header.php') ?>
    <?php include('includes/left-sidebar.php') ?>
    <center>
        <h1>DELETE STUDENT</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="delete-container">
                Enter Student ID:
                <input type="text" name="sid">
                <input class="myButton" type="submit" name="submit">
                <?php
                    if(isset($message)) {
                        echo "<p>$message</p>";
                    }
                ?>
            </div>
        </form>
    </center>
</body>
</html>
