<?php
$errorMessage = '';
include 'database/config.php';
include 'database/opendb.php';

// check not NULL
if (isset($_POST['submit'])) //if submit button is pressed)
{
	if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) {

		if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {

			//cheching email if already present
			$check_email = mysqli_query($conn, "SELECT Email FROM users where Email = '" . $_POST['email'] . "' ");
			$check_username = mysqli_query($conn, "SELECT Username FROM users where Email = '" . $_POST['username'] . "' ");
			if ($_POST['password'] != $_POST['cpassword']) {  //matching passwords
				echo '<script type="text/javascript">';
				echo 'alert("The password entered does not matched the confirmed password")';  //not showing an alert box.
				echo '</script>';
			} 
			elseif (mysqli_num_rows($check_username) > 0) //check email
			{
				echo '<script type="text/javascript">';
				echo 'alert("Someone else is using this username")';  //not showing an alert box.
				echo '</script>';
			} 			elseif (mysqli_num_rows($check_email) > 0) //check email
			{
				echo '<script type="text/javascript">';
				echo 'alert("Someone else is using this email")';  //not showing an alert box.
				echo '</script>';
			} else {
				$mql = "INSERT INTO users(Username, Email, Password) VALUES('" . $_POST['username'] . "','" . $_POST['email'] . "','" . md5($_POST['password']) . "')";
				$result = mysqli_query($conn, $mql);

				echo '<script type="text/javascript">';
				echo 'alert("Registration was successful")';  //not showing an alert box.
				echo '</script>';
			}
		}
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/restaurant_logoo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style_login_register.css">

	<title>Cherry Restaurant | Register</title>
</head>

<body>
	<?php include "header.php"; ?>

	<div class="container1">
		<form action="<?php print($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>

</body>

</html>