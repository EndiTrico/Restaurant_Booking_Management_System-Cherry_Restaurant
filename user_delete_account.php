<?php
session_start();
include 'database/config.php';
include 'database/opendb.php';

if (isset($_SESSION['email'])) {
    
    $useracc = "Delete FROM users WHERE Email = '" . $_SESSION['email'] . "' ";
    $result = mysqli_query($conn, $useracc);
    unset($_SESSION['email']);
}

header('Location: login.php');
?>