<?php
include "connection.php";

$id = $_GET['id'];

mysqli_query($conn,"
UPDATE reg2
SET status='Approved'
WHERE id='$id'");

header("Location: admin_customer.php");
?>