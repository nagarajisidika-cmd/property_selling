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

    // Buyer Details
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

    // Check duplicate request
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

    // Get Seller Mobile
    $property = mysqli_query($conn,
    "SELECT * FROM property
     WHERE id='$property_id'");

    $property_data = mysqli_fetch_assoc($property);

    if(!$property_data)
    {
        die('Property Not Found');
    }

    $seller_mobile = $property_data['contact'];

    // Save Interest Request
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
        $message =
        "Hello ".$owner_name.",
        
Buyer Name : ".$buyer_name."

Property : ".$property_name."

Mobile : ".$buyer_mobile."

Email : ".$buyer_email."

I am interested in your property.";

        $whatsapp_url =
        "https://wa.me/".$seller_mobile.
        "?text=".urlencode($message);

        echo "<script>
        alert('Interest Request Sent Successfully');
        window.location='$whatsapp_url';
        </script>";
    }
    else
    {
        echo 'Error : '.mysqli_error($conn);
    }
}
else
{
    echo 'Invalid Request';
}
?>