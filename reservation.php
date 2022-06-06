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

	<link rel="stylesheet" href="style_reservation.css">

	<title>Cherry Restaurant | Reservation</title>
</head>

<body>
	<?php include "header_user.php"; ?>


	<div class="container1">
		<div id="loginFormContainer">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Reservation</p>
			<div>
				<p style="font-weight:bold; text-align: center; ">What do you want to do?</p>
			</div>
			<button type="submit" class="btn btn-dark btn-lg btn-block button_style"> <h3 class="reservation"><a href="user_reservation.php">Book a Table</a></h3></button>
			<button type="submit" class="btn btn-dark btn-lg btn-block button_style"> <h3 class="reservation"><a href="user_view_reservation.php">Show My Reservations</a></h3></button>

		</div>
	</div>

</body>

</html>