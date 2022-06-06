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

	<link rel="stylesheet" href="style_options.css">

	<title>Cherry Restaurant | Settings</title>
</head>

<body>
	<?php include "header_user.php"; ?>


	<div class="container1">
		<div id="loginFormContainer">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Settings</p>
			<div>
				<br>
				<p style="font-weight:bold; text-align: center; ">What do you want to do?</p><br>
			</div>
			<h4 class="reservation" style="text-align: center;"><a id="logout" href="logout.php" style="padding-left: 90px !important; padding-right: 90px !important; color: white; margin-top: 5px;
    padding: 10px 10px; background-color: brown !important; text-decoration: none; border-radius: 50px" onmouseover="myfunctionover()" onmouseout="myfunctionout()">Log Out</a></h4><br><br>
			<h4 class="reservation" style="text-align: center;"><a id="deleteAcc" href="user_view_reservation.php" style="padding-left: 30px !important; padding-right: 30px !important; color: white; margin-top: 5px;
    padding: 10px 10px; background-color: brown !important; text-decoration: none; border-radius: 50px" onmouseover="myfunctionover1()" onmouseout="myfunctionout1()">Delete My Account</a></h4>
		</div>
	</div>

	<script>
		function myfunctionover() {
			document.getElementById("logout").style.backgroundColor = "#c2d59c";
		}

		function myfunctionout() {
			document.getElementById("logout").style.backgroundColor = "brown";
		}

		function myfunctionover1() {
			document.getElementById("deleteAcc").style.backgroundColor = "#c2d59c";
		}

		function myfunctionout1() {
			document.getElementById("deleteAcc").style.backgroundColor = "brown";
		}
	</script>


</body>

</html>