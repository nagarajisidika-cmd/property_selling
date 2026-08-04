<?php
include "connection.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "UPDATE reg
            SET status='Rejected'
            WHERE id='$id'";

    if(mysqli_query($conn,$sql))
    {
        header("Location: admin_dashboard.php");
        exit();
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>