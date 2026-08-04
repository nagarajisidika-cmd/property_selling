<?php
include "connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM property WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $type        = $_POST['property_type'];
    $location    = $_POST['location'];
    $price       = $_POST['price'];
    $contact     = $_POST['contact'];
    $description = $_POST['description'];

    $sql = "UPDATE property SET
            property_type='$type',
            location='$location',
            price='$price',
            contact='$contact',
            description='$description'
            WHERE id='$id'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Property Updated Successfully');
        window.location='my_property.php';
        </script>";
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
<title>Edit Property</title>

<style>

body{
    font-family:Arial;
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
}

input,textarea,select{
    width:100%;
    padding:10px;
    margin-top:10px;
}

input[type="submit"]{
    background:#0f766e;
    color:white;
    border:none;
    cursor:pointer;
}

</style>

</head>
<body>

<form method="post">

<h2>Edit Property</h2>

<select name="property_type" required>
    <option><?php echo $row['property_type']; ?></option>
    <option>House</option>
    <option>Flat</option>
    <option>Plot</option>
    <option>Shop</option>
    <option>Land</option>
</select>

<input type="text"
name="location"
value="<?php echo $row['location']; ?>"
required>

<input type="text"
name="price"
value="<?php echo $row['price']; ?>"
required>

<input type="text"
name="contact"
value="<?php echo $row['contact']; ?>"
required>

<textarea name="description"><?php echo $row['description']; ?></textarea>

<input type="submit"
name="update"
value="Update Property">

</form>

</body>
</html>