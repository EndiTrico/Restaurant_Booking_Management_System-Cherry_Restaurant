<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style_admin_show_all_reservation.css">
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
    <?php include "header_admin.php"; ?>



    <?php
    session_start();



    require 'database/config.php';
    require 'database/opendb.php';

    ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3_text">All Reservations</h2>
                </div>
            </div>
        </div>
    </div>

    <?php


    $sql = "SELECT * FROM reservation";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {


        echo
        '
            <table class="table table-hover table-responsive-sm text-center showreservation">
                <thead>
                    <tr>
                    <th scope="col" class="header_style">First Name</th>
                    <th scope="col" class="header_style">Last Name</th>
                        <th scope="col" class="header_style">Date</th>
                        <th scope="col" class="header_style">Time</th>
                        <th scope="col" class="header_style">Guests</th>
                        <th scope="col" class="header_style">Location</th>
                        <th scope="col" class="header_style">Telephone Number</th>
                        <th scope="col" class="header_style">Comments</th>
                    </tr>
                </thead> <tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                    <tr>
                    <input name='reserv_id' type='hidden' value=" . $row['Reservation_ID'] . ">
                    <td>" . $row['First_Name'] . "</td>
                    <td>" . $row['Last_Name'] . "</td>
                    <td>" . $row['Date'] . "</td>
                    <td>" . $row['Time'] . "</td>
                    <td>" . $row['Number_of_Guests'] . "</td>
                    <td>" . $row['Location'] . "</td>
                    <td>" . $row['Telephone_Number'] . "</td>
                    <td><textarea readonly>" . $row['Comments'] . "</textarea></td>
                    </tr>
              ";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='text-white text-center bg-danger'>The reservation list is empty!<p>";
    }
    ?>
</body>

</html>