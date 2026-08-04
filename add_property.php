<?php
session_start();
include "connection.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit']))
{
    $type        = $_POST['property_type'];
    $location    = $_POST['location'];
    $price       = $_POST['price'];
    $contact     = $_POST['contact'];
    $description = $_POST['description'];

    $seller_username = $_SESSION['username'];

    $image = $_FILES['photo']['name'];
    $tmp   = $_FILES['photo']['tmp_name'];

    if(!file_exists("uploads"))
    {
        mkdir("uploads",0777,true);
    }

    move_uploaded_file($tmp,"uploads/".$image);

    $sql = "INSERT INTO property
    (
        property_type,
        location,
        price,
        contact,
        description,
        image,
        seller_username,
        status
    )
    VALUES
    (
        '$type',
        '$location',
        '$price',
        '$contact',
        '$description',
        '$image',
        '$seller_username',
        'Pending'
    )";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Property Request Sent To Admin Successfully');
        window.location='seller.php';
        </script>";
        exit();
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Property</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:#f4f6f9;
}

form{
    width:500px;
    margin:30px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

h2{
    text-align:center;
    margin-bottom:20px;
}

input,
select,
textarea{
    width:100%;
    padding:10px;
    margin-top:10px;
    border:1px solid #ccc;
    border-radius:5px;
}

textarea{
    height:100px;
}

input[type="submit"]{
    background:#0f766e;
    color:white;
    border:none;
    cursor:pointer;
    font-size:16px;
}

input[type="submit"]:hover{
    background:#0d5f59;
}

</style>

</head>
<body>

<form method="post" enctype="multipart/form-data">

<h2>Add Property</h2>
<input type="text"
name="seller_username"
placeholder="seller_username"
required>

<select name="property_type" required>
    <option value="">Select Property Type</option>
    <option value="House">House</option>
    <option value="Flat">Flat</option>
    <option value="Plot">Plot</option>
</select>

<input type="text"
name="location"
placeholder="Location"
required>

<input type="text"
name="price"
placeholder="Price"
required>

<input type="text"
name="contact"
placeholder="Contact Number"
required>

<textarea
name="description"
placeholder="Property Description"></textarea>

<input type="file"
name="photo"
required>

<input type="submit"
name="submit"
value="Add Property">

</form>

</body>
</html>

