<?php
	include('config.php');
	include('check-login.php');

	if(isset($_GET['student_id'])){
		$student_id =  $_GET['student_id'];
		$sql = "SELECT * FROM student WHERE student.id='$student_id'";
		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		$student = $query->fetch_assoc();
	}
	if(isset($_POST['update'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$pob = $_POST['pob'];
		$phone_number = $_POST['phone_number'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$sql_update_student = "UPDATE student SET first_name = '$first_name', last_name = '$last_name',
		date_of_birth = '$dob', place_of_birth = '$pob', gender = '$gender', phone_number = '$phone_number',
    	email = '$email', address = '$address' WHERE student.id = '$student_id'";

		mysqli_query($con, $sql_update_student) or die(mysqli_error($con));
	}
?>
<!doctype html>
<html>
	<head>
		<title>Update Student - <?php echo $student['first_name']." ".$student['last_name']; ?></title>
		<link rel="stylesheet" href="assets/css/style.css"/>
	</head>
	<body>
		<?php include('includes/header.php') ?>
		<div class="container">
			<div>
				<?php include('includes/left-sidebar.php') ?>
				<main class="student-info">
					<h1>Update Student-Info: <?php echo $student['first_name']." ".$student['last_name']; ?></h1>
					<form method="post" action="">
						<table>
							<tr>
								<td>ID:</td><td><?php echo $student['id']; ?></td>
							</tr>
							<tr>
								<td>First Name:</td><td><input type="text" name="first_name" value="<?php echo $student['first_name']; ?>"></td>
							</tr>
							<tr>
								<td>Last Name:</td><td><input type="text" name="last_name" value="<?php echo $student['last_name']; ?>"></td>
							</tr>
							<tr>
								<td>Date of Birth:</td><td><input type="date" name="dob" value="<?php echo $student['date_of_birth']; ?>"></td>
							</tr>
							<tr>
								<td>Gender:</td><td><input type="text" name="gender" value="<?php echo $student['gender']; ?>"></td>
							</tr>
							<tr>
								<td>Place of Birth:</td><td><input type="text" name="pob" value="<?php echo $student['place_of_birth']; ?>"></td>
							</tr>
							<tr>
								<td>Phone Number:</td><td><input type="text" name="phone_number" value="<?php echo $student['phone_number']; ?>"></td>
							</tr>
							<tr>
								<td>Email:</td><td><input type="email" name="email" value="<?php echo $student['email']; ?>"></td>
							</tr>
							<tr>
								<td>Address:</td><td><input type="text" name="address" value="<?php echo $student['address']; ?>"></td>
							</tr>
						</table>
						<input type="submit" name="update" value="Update">
					</form>
				</main>
			</div>
		</div>
		<?php include('includes/footer.php') ?>
	</body>
</html>
