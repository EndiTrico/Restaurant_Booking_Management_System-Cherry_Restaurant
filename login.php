<?php
// start the session
session_start();
include_once 'validate.php';

$errorMessage = '';

// check not NULL
if (isset($_POST['email']) && isset($_POST['password']) && ($_POST['role'])) {
	// check that values are not empty string, 0, or false
	if (!empty($_POST['email']) && !empty($_POST['password']) && ($_POST['role'])) {
		$role = $_POST['role'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if ($role == 'Admin') {
			if (validateLogin($role, $email, $password)) {
				//start the session and register a variable
				// the user id and password match,
				// set the session
				$_SESSION['email'] = $email;

				header('Location: admin_index.php');
				exit();
			} else {
				$errorMessage = 'Error: Wrong Username or password or role!';
			}
		}

		if ($role == 'User') {
			if (validateLogin($role, $email, $password)) {
				//start the session and register a variable
				// the user id and password match,
				// set the session
				$_SESSION['email'] = $email;

				header('Location: user_reservation.php');
				exit();
			} else {
				$errorMessage = 'Error: Wrong Username or password or role!';
			}
		}
	} else {
		$errorMessage = 'Required fields missing!';
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

	<title>Cherry Restaurant | Log In</title>
</head>

<body>
	<?php include "header.php"; ?>


	<div class="container1">
		<div id="loginFormContainer">

			<form action="<?php print($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Log In</p>
				<div class="form-group">
					<label style="font-weight:bold;">Select your role:</label>
					<select class="form-control" name="role">
						<option>Admin</option>
						<option>User</option>
					</select>
				</div>
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="" required>
				</div>
				<?php
				if ($errorMessage != '') {
				?>

					<div class="errorMessage">
						<?php echo $errorMessage; ?>
					</div>

				<?php
				}
				?>
				<div class="input-group">
					<button name="submit" class="btn">Login</button>
				</div>
				<p class="login-register-text">Don't have an account? <a href="registration.php">Register Here</a>.</p>
			</form>
		</div>
	</div>

</body>

</html>