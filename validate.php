<?php

function validateLogin($email, $pw)
{
    // open database
    include 'database/config.php';
    include 'database/opendb.php';
    
    $md5Pw = md5($pw);

    $query = "SELECT * FROM users WHERE Email='$email' AND Password='$md5Pw'";
    $result = mysqli_query($conn, $query) or die ("Error executing the query");

    //check that at least one row was returned
    $numrows = mysqli_num_rows($result);
    
    include 'database/closedb.php';
    
    if($numrows > 0){
        return true;
    } else {
        return false;
    }
}

?>