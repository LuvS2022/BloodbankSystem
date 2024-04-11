<?php
// logout page does'nt need anything from data base so no need to stablich connection with database or use connection file
    session_start(); // step 1 start session
    session_unset(); // step 2 end and destroy of each session
    session_destroy();
    $msg="You have logged out."; //  variable of message
    header( "location:index.php?msg=".$msg ); //  back to index page with message
?>