<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style_user_view_reservation.css">
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



    <?php
    session_start();



    require 'database/config.php';
    require 'database/opendb.php';

    ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3_text">My Reservation</h2>
                </div>
            </div>
        </div>
    </div>

    <?php
    //rolos pelati
    $userid = "SELECT User_ID FROM users where Email = '" . $_SESSION['email'] . "' ";
    $result1 = mysqli_query($conn, $userid);
    $row2 = mysqli_fetch_array($result1);

    $sql = "SELECT * FROM reservation WHERE User_ID = $row2[0]";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {


        echo
        '
            <table class="table table-hover table-responsive-sm text-center showreservation">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Location</th>
                        <th scope="col">Telephone Number</th>
                        <th scope="col">Comments</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> <tbody>';
        while ($row = mysqli_fetch_array($result)) {
            echo "
                    <tr>
                    <input name='reserv_id' type='hidden' value=" . $row[0] . ">
                    <td>" . $row[1] . "</td>
                    <td>" . $row[2] . "</td>
                    <td>" . $row[3] . "</td>
                    <td>" . $row[4] . "</td>
                    <td>" . $row[5] . "</td>
                    <td>" . $row[6] . "</td>
                    <td>" . $row[7] . "</td>
                    <td><textarea readonly>" . $row[8] . "</textarea></td>
                    <td class='table-danger'><button type='submit' name='delete-submit' class='btn btn-danger btn-sm' id='cancel reservation'>Cancel</button></td>
                    </tr>
              ";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='text-white text-center bg-danger'>Your reservation list is empty!<p>";
    }
    
    
    
    //rolos upeuthinou 
