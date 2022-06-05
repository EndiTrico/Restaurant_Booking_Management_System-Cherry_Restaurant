<?php


//delete reservation

if(isset($_POST['delete-submit'])) {
 
 require 'config.php';
 require 'opendb.php';
 require 'closedb.php';

 
$reservation_id = $_POST['Reservation_ID'];
    
$sql = "DELETE FROM reservation WHERE Reservation_ID =$reservation_id";

if (mysqli_query($conn, $sql)) {
    header("Location: user_view_reservations.php");
} else {
    header("Location: user_view_reservations.php");
}
}
?>