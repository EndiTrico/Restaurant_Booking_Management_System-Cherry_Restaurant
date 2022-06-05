<?php
session_start();
include 'database/config.php';
include 'database/opendb.php';
$errorMessage = '';
$successfulMessage = '';

// check not NULL
if (
    isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['date']) &&
    isset($_POST['time'])  && isset($_POST['num_guests']) && isset($_POST['location']) && isset($_POST['telephone'])
) {
    // check that values are not empty string, 0, or false
    if (
        !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['date']) &&
        !empty($_POST['time'])  && !empty($_POST['num_guests'])  && isset($_POST['location']) && !empty($_POST['telephone'])  && !empty($_POST['comments'])
    ) {

        $userid = "SELECT User_ID FROM users where Email = '" . $_SESSION['email'] . "' ";
        $result1 = mysqli_query($conn, $userid);
        $row = mysqli_fetch_array($result1);

        $mql = "INSERT INTO reservation(First_Name, Last_Name, Date, Time, Number_of_Guests, Location, Telephone_Number, Comments, User_ID) VALUES('" . $_POST['first_name'] . "','" . $_POST['last_name'] . "','" . $_POST['date'] .  "','" . $_POST['time'] . "','" . $_POST['num_guests'] . "','" . $_POST['location'] ."','". $_POST['telephone'] . "','" . $_POST['comments'] . "','" . $row[0] . "')";
        $result = mysqli_query($conn, $mql);

        $successfulMessage = "You reservation request is completed";
    } else if (
        !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['date']) &&
        !empty($_POST['time'])  && !empty($_POST['num_guests']) && !empty($_POST['location']) && !empty($_POST['telephone'])  && empty($_POST['comments'])
    ) {
        $userid = "SELECT User_ID FROM users where Email = '" . $_SESSION['email'] . "' ";
        $result1 = mysqli_query($conn, $userid);
        $row = mysqli_fetch_array($result1);

        $mql = "INSERT INTO reservation(First_Name, Last_Name, Date, Time, Number_of_Guests, Location, Telephone_Number, User_ID) VALUES('" . $_POST['first_name'] . "','" . $_POST['last_name'] . "','" . $_POST['date'] .  "','" . $_POST['time'] . "','" . $_POST['num_guests'] . "','" . $_POST['location'] . "','". $_POST['telephone'] . "','"  . $row[0] . "')";
        $result = mysqli_query($conn, $mql);
        $successfulMessage = "Y";
    } else {
        $errorMessage = 'N';
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style_user_reservation.css">
    <link rel="icon" type="image/png" href="./images/restaurant_logoo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Cherry Restaurant | Reservation</title>
</head>

<body>
    <?php include "header_user.php"; ?>

    <div class="reservation_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page_title">Fill out the form <br>to book your table now!</h1>
                    <form action="<?php print($_SERVER['PHP_SELF']); ?>" method="POST">
                        <?php
                        if ($errorMessage != '') {
                        ?>

                            <div class="errorMessage">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 style="color: white; text-align: center; margin-top: 20px; background-color:brown; border-style: outset; border-color: white;">You reservation request cannot be completed! </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                        <?php
                        if ($successfulMessage != '') {
                        ?>
                            <div class="successfulMessage">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 style="color: white; text-align: center; margin-top: 20px; background-color:brown; border-style: outset; border-color: white;">You reservation request is completed!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                        <div class="form-group">
                            <label class="fname_style">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
                        </div>
                        <div class="form-group">
                            <label class="info_style">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
                        </div>
                        <div class="form-group">
                            <label class="info_style">Enter Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <label class="info_style">Enter Time </label>
                            <select class="form-control" name="time">
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:00 PM</option>
                                <option>01:00 PM</option>
                                <option>02:00 PM</option>
                                <option>03:00 PM</option>
                                <option>04:00 PM</option>
                                <option>05:00 PM</option>
                                <option>06:00 PM</option>
                                <option>07:00 PM</option>
                                <option>08:00 PM</option>
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="info_style">Enter number of Guests</label>
                            <input type="number" class="form-control" min="1" name="num_guests" placeholder="Guests" required="required">
                            <small class="form-text text-muted">*Minimum value is 1</small>
                        </div>
                        <div class="form-group">
                            <label class="info_style">Enter Location</label>
                            <select class="form-control" name="location">
                                <option>Cherry Restaurant Villa</option>
                                <option>Cherry Restaurant Bllok</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="guests" class="info_style">Enter your Telephone Number</label>
                            <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required="required">
                        </div>
                        <div class="form-group">
                            <label class="info_style">Enter extra Comments</label>
                            <textarea class="form-control" name="comments" placeholder="Comments" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block button_style">Submit Reservation</button>
                        </div>
                    </form>
                    <script>
                        var today = new Date();
                        var dd = today.getDate() + 1;
                        var mm = today.getMonth() + 1; //January is 0!
                        var yyyy = today.getFullYear();

                        if (dd < 10) {
                            dd = '0' + dd;
                        }

                        if (mm < 10) {
                            mm = '0' + mm;
                        }

                        today = yyyy + '-' + mm + '-' + dd;
                        document.getElementById("date").setAttribute("min", today);
                    </script>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>

</body>

</html>