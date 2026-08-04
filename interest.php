<?php
session_start();
include "connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $property_id   = $_POST['property_id'];
    $property_name = $_POST['property_name'];
    $owner_name    = $_POST['owner_name'];

    if(!isset($_SESSION['username']))
    {
        die("Please Login First");
    }

    $username = $_SESSION['username'];

    $user = mysqli_query($conn,
    "SELECT * FROM reg
     WHERE username='$username'");

    if(!$user)
    {
        die(mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($user);

    if(!$data)
    {
        die("User Not Found");
    }

    $buyer_name   = $data['username'];
    $buyer_mobile = $data['mobile'];
    $buyer_email  = $data['email'];

    $request_date = date("Y-m-d H:i:s");

    $check = mysqli_query($conn,
    "SELECT * FROM interest_request
     WHERE property_id='$property_id'
     AND buyer_name='$buyer_name'");

    if(mysqli_num_rows($check) > 0)
    {
        echo "<script>
        alert('You have already sent request for this property');
        window.location='view.php';
        </script>";
        exit();
    }

    $sql = "INSERT INTO interest_request
    (
        buyer_name,
        buyer_mobile,
        buyer_email,
        property_id,
        property_name,
        owner_name,
        request_date,
        status
    )
    VALUES
    (
        '$buyer_name',
        '$buyer_mobile',
        '$buyer_email',
        '$property_id',
        '$property_name',
        '$owner_name',
        '$request_date',
        'Pending'
    )";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Interest Request Sent Successfully');
        window.location='view.php';
        </script>";
    }
    else
    {
        echo 'Error : '.mysqli_error($conn);
    }
}
else
{
    echo "Invalid Request";
}
?>