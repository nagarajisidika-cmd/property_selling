```php
<?php
include "connection.php";

if(isset($_POST['update']))
{
    $id          = $_POST['property_id'];
    $type        = $_POST['property_type'];
    $location    = $_POST['location'];
    $price       = $_POST['price'];
    $contact     = $_POST['contact'];
    $description = $_POST['description'];

    $folder = "uploads/";

    if(!file_exists($folder))
    {
        mkdir($folder,0777,true);
    }

    $image = $_FILES['image']['name'];
    $temp  = $_FILES['image']['tmp_name'];

    if($image != "")
    {
        move_uploaded_file($temp,$folder.$image);

        $sql = "UPDATE property SET
                property_type='$type',
                location='$location',
                price='$price',
                contact='$contact',
                image='$image',
                description='$description'
                WHERE pro_id='$id'";
    }
    else
    {
        $sql = "UPDATE property SET
                property_type='$type',
                location='$location',
                price='$price',
                contact='$contact',
                description='$description'
                WHERE pro_id='$id'";
    }

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Property Updated Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Database Error');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Property</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
    position:relative;
    overflow-y:auto;
}

body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:url('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200_webp/9e0b8430767291.5631d128aa375.jpg')
    no-repeat center center/cover;
    filter:blur(8px);
    transform:scale(1.1);
    z-index:-2;
}

body::after{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
    z-index:-1;
}

.container{
    width:500px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

h2{
    text-align:center;
    color:white;
    margin-bottom:20px;
}

label{
    display:block;
    color:white;
    font-weight:bold;
    margin-top:12px;
}

input,
select,
textarea{
    width:100%;
    padding:12px;
    margin-top:5px;
    border:none;
    border-radius:10px;
    background:rgba(255,255,255,0.95);
    font-size:15px;
}

textarea{
    height:100px;
    resize:none;
}

button{
    width:100%;
    padding:14px;
    margin-top:20px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#0d6efd,#00b4d8);
    color:white;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:linear-gradient(135deg,#084298,#0096c7);
}

@media(max-width:600px){
    .container{
        width:95%;
    }
}

</style>
</head>

<body>

<div class="container">

<h2>Update Property</h2>

<form method="POST" enctype="multipart/form-data">

<label>Property ID</label>
<input type="number" name="property_id" placeholder="Enter Property ID" required>

<label>Property Type</label>
<select name="property_type" required>
    <option value="">Select Property Type</option>
    <option value="House">House</option>
    <option value="Apartment">Apartment</option>
    <option value="Villa">Villa</option>
    <option value="Plot">Plot</option>
</select>

<label>Location</label>
<input type="text" name="location" placeholder="Enter Location" required>

<label>Price</label>
<input type="number" name="price" placeholder="Enter Price" required>

<label>Contact Number</label>
<input type="text" name="contact" placeholder="Enter Contact Number" required>

<label>Property Image</label>
<input type="file" name="image">

<label>Description</label>
<textarea name="description" placeholder="Property Description"></textarea>

<button type="submit" name="update">Update Property</button>

</form>

</div>

</body>
</html>
```
