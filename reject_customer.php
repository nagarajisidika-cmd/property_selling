<?php
include "connection.php";

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    mysqli_query($conn,"
    UPDATE reg2
    SET status='Rejected'
    WHERE id='$id'");

    echo "<script>
    alert('Customer Rejected');
    window.location='admin_customer.php';
    </script>";
}
?>