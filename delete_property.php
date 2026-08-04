<?php
include "connection.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    mysqli_query($conn,
    "DELETE FROM property WHERE id='$id'");

    header("Location: my_property.php");
    exit();
}
?>