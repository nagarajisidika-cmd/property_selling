<?php
session_start();
include "connection.php";

$username=$_SESSION['username'];

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $sql="update reg set
    name='$name',
    mobile='$mobile',
    email='$email'
    WHERE username='$username'";

    mysqli_query($conn,$sql);

    header("Location: profile.php");
}
?>