<?php

include "connection.php";

$id = $_GET['id'];

$sql = "UPDATE interest_request
        SET status='Rejected'
        WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    header("Location: sellerre.php");
}
else
{
    echo mysqli_error($conn);
}
?>