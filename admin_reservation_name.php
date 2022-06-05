<?php

session_start();
include 'database/config.php';
include 'database/opendb.php';


// check not NULL
if (
    isset($_POST['date'])
) {
    // check that values are not empty string, 0, or false
    if (
        !empty($_POST['date'])
    ) {
        $date1 = "SELECT * FROM reservation where Date = '" . $_POST['date'] . "' ";
        $result1 = mysqli_query($conn, $date1);

        if (mysqli_num_rows($result1) > 0) {


            echo
            '
            <div>
            <div class="container">
            <div class="row">
            <div class="col-md-12">
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
            while ($row = mysqli_fetch_assoc($result1)) {
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
            echo '</tbody></table>            </div>
            </div>
            </div>';
        } else {
            echo "<p class='text-white text-center bg-danger'>The reservation list is empty!<p>";
        }
    } else {
        echo "<p class='text-white text-center bg-danger'>The reservation list is empty!<p>";
    }
}

?>

<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Show the Reservation by Date</h2>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php print($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="form-group">
                            <label class="info_style">Enter Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block button_style">Submit Reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>