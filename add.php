<?php
include "connection.php";

if(isset($_POST['submit']))
{
    $type = $_POST['type'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];
    $description = $_POST['description'];

    $folder = "uploads/";

    if(!file_exists($folder))
    {
        mkdir($folder,0777,true);
    }

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    if(move_uploaded_file($temp,$folder.$image))
    {
        $sql = "INSERT INTO property
        (title,property_type,location,price,contact,image,description)
        VALUES
        ('$title','$type','$location','$price','$contact','$image','$description')";

        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Property Added Successfully');</script>";
        }
        else
        {
            echo "<script>alert('Database Error');</script>";
        }
    }
    else
    {
        echo "<script>alert('Image Upload Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add New Property</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    padding:20px;
    background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFPbdZdnoeBPTsrobZN7T2IYsC9ODj-fHe5z70Z5JH3A&s=10") no-repeat center center;
    background-size:cover;
    position:relative;
}

body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.55);
    z-index:-1;
}

.logo{
    position:absolute;
    top:20px;
    left:30px;
    color:white;
    font-size:40px;
    font-weight:bold;
}

h1{
    color:white;
    margin-bottom:20px;
    text-align:center;
    font-size:38px;
    text-shadow:2px 2px 10px rgba(0,0,0,0.5);
}

form{
    width:500px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(12px);
    padding:30px;
    border-radius:20px;
    border:1px solid rgba(255,255,255,0.3);
    box-shadow:0 8px 30px rgba(0,0,0,0.3);
}

label{
    color:white;
    font-weight:bold;
}

input,
select,
textarea{
    width:100%;
    padding:12px;
    margin-top:6px;
    margin-bottom:15px;
    border:none;
    border-radius:10px;
    background:rgba(255,255,255,0.2);
    color:white;
    font-size:15px;
}

input::placeholder,
textarea::placeholder{
    color:#f1f1f1;
}

input:focus,
select:focus,
textarea:focus{
    outline:none;
    background:rgba(255,255,255,0.3);
}

select option{
    color:black;
}

textarea{
    height:100px;
    resize:none;
}

input[type=file]{
    color:white;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#00c6ff,#0072ff);
    color:white;
    font-size:17px;
    font-weight:bold;
    cursor:pointer;
    transition:0.4s;
}

button:hover{
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(0,114,255,0.5);
}

@media(max-width:600px){

    form{
        width:100%;
    }

    h1{
        font-size:28px;
    }

    .logo{
        font-size:30px;
        left:15px;
    }
}

</style>

</head>
<body>

<div class="logo">B&S</div>

<h1>Upload Property</h1>

<form method="post" enctype="multipart/form-data">

<label>Property Id</label>
<input type="text" name="title" placeholder="Enter Property Id" required>

<label>Property Type</label>
<select name="type">
    <option>House</option>
    <option>Flat</option>
    <option>Land</option>
    <option>Shop</option>
    <option>Office</option>
</select>

<label>Location</label>
<input type="text" name="location" placeholder="Enter Location" required>

<label>Price</label>
<input type="number" name="price" placeholder="Enter Price" required>

<label>Contact Number</label>
<input type="text" name="contact" placeholder="Enter Contact Number" required>

<label>Property Image</label>
<input type="file" name="image" required>

<label>Description</label>
<textarea name="description" placeholder="Enter Property Description"></textarea>

<button type="submit" name="submit">Add Property</button>

</form>

</body>
</html>