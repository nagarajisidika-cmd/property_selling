<?php
include "connection.php";

if(isset($_POST['submit']))
{
    $owner    = $_POST['name'];
    $pname    = $_POST['pro_name'];
    $ptype    = $_POST['pro_type'];
    $price    = $_POST['price'];
    $location = $_POST['address'];
    $des      = $_POST['des'];

    $image = $_FILES['image']['name'];
    $tmp   = $_FILES['image']['tmp_name'];

    if(!is_dir("images"))
    {
        mkdir("images", 0777, true);
    }

    $image_name = time()."_".$image;
    $path = "images/".$image_name;

    if(move_uploaded_file($tmp, $path))
    {
        $sql = "INSERT INTO pro
                (name, pro_name, pro_type, price, location, des, image)
                VALUES
                ('$owner','$pname','$ptype','$price','$location','$des','$image_name')";

        if(mysqli_query($conn, $sql))
        {
            echo "<script>
                    alert('Property Added Successfully');
                    window.location='view.php';
                  </script>";
            exit();
        }
        else
        {
            echo "Database Error : ".mysqli_error($conn);
        }
    }
    else
    {
        echo "Image Upload Failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Property</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
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
}

input, textarea{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
}

input[type=submit]{
    background:green;
    color:white;
    border:none;
    cursor:pointer;
}
</style>

</head>
<body>

<form method="post" enctype="multipart/form-data">

<h2>Add Property</h2>

<label>Owner Name</label>
<input type="text" name="name" required>

<label>Property Name</label>
<input type="text" name="pro_name" required>

<label>Property Type</label>
<input type="text" name="pro_type" required>

<label>Price</label>
<input type="number" name="price" required>

<label>Address</label>
<input type="text" name="address" required>

<label>Description</label>
<textarea name="des" rows="5" required></textarea>

<label>Property Image</label>
<input type="file" name="image" required>

<input type="submit" name="submit" value="Add Property">

</form>

</body>
</html>