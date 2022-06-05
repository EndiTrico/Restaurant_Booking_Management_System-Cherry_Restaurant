<?php


if(isset($_SESSION['email'])){
    
    require 'database/config.php';
    require 'database/opendb.php';
    require 'database/closedb.php';

    
    $email = $_SESSION['email'];
    
    //rolos pelati
    $userid = "SELECT User_ID FROM users where Email = '" . $_SESSION['email'] . "' ";
    $result1 = mysqli_query($conn, $userid);
    $row2 = mysqli_fetch_array($result1);

    $sql = "SELECT * FROM reservation WHERE User_ID = $row2[0]";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="table table-hover table-responsive-sm text-center">
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
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='delete.php' method='POST'>
                    <input name='reserv_id' type='hidden' value=".$row["Reservation_ID"].">
                    <td>".$row["First_Name"]."</td>
                    <td>".$row["Last_Name"]."</td>
                    <td>".$row["Date"]."</td>
                      <td>".$row["Time"]."</td>
                      <td>".$row["Number_of_Guests"]."</td>
                      <td>".$row["Location"]."</td>
                      <td>".$row["Telephone_Number"]."</td>
                      <td><textarea readonly>".$row["Comments"]."</textarea></td>
                      <td class='table-danger'><button type='submit' name='delete-submit' class='btn btn-danger btn-sm'>Cancel</button></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p class='text-white text-center bg-danger'>Your reservation list is empty!<p>"; }
    }
    
    
    //rolos upeuthinou 
    
    
    


