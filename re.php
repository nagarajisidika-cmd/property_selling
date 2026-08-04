<?php
include "connection.php";

$id = $_GET['id'];

mysqli_query($conn,
"UPDATE property
SET status='Rejected'
WHERE id='$id'");

header("Location: admin.php");
exit();
?>