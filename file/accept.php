<?php
include "connection.php";
    $reqid=$_GET['reqid']; //  getting the id
	$status = "Accepted"; //  status 
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    // execute sql 
    if (mysqli_query($conn, $sql)) {
	$msg="You have accepted the request.";
	header("location:../bloodrequest.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    // close connection
    mysqli_close($conn);
?>