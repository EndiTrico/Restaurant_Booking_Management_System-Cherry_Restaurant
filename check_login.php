<?php
// start the session
session_start();

// check whether a user has logged in
if (!isset($_SESSION['email']) ) {

    // not logged in, move to login page
    header('Location: login.php');
    exit();
}

?>