<?php
session_start();
include "connection.php";

if(!isset($_GET['id']))
{
    die("Property ID Not Found");
}

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM property WHERE id='$id'");

if(!$result)
{
    die("Query Error : ".mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);

if(!$row)
{
    die("Property Not Found");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Property Details</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
    margin:0;
    padding:30px;
}

.card{
    width:800px;
    margin:auto;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

.card img{
    width:100%;
    height:400px;
    object-fit:cover;
}

.details{
    padding:20px;
}

h1{
    color:#1e3c72;
}

.price{
    color:green;
    font-size:30px;
    font-weight:bold;
    margin-bottom:15px;
}

.info{
    margin-top:15px;
    font-size:18px;
}

.info p{
    margin:10px 0;
}

.btn{
    width:100%;
    padding:12px;
    margin-top:20px;
    background:#ff5722;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-size:18px;
    font-weight:bold;
}

.btn:hover{
    background:#e64a19;
}

</style>
</head>

<body>

<div class="card">

<img src="uploads/<?php echo $row['image']; ?>">

<div class="details">

<h1>
<?php echo $row['property_type']; ?>
</h1>

<div class="price">
₹ <?php echo $row['price']; ?>
</div>

<div class="info">

<p>
<b>Property ID :</b>
<?php echo $row['id']; ?>
</p>

<p>
<b>Location :</b>
<?php echo $row['location']; ?>
</p>

<p>
<b>Contact :</b>
<?php echo $row['contact']; ?>
</p>

<p>
<b>Description :</b>
<?php echo $row['description']; ?>
</p>

<p>
<b>Status :</b>
<?php echo $row['status']; ?>
</p>

<?php
if(isset($row['owner_name']))
{
?>
<p>
<b>Owner Name :</b>
<?php echo $row['owner_name']; ?>
</p>
<?php
}
?>

<?php
if(isset($row['seller_username']))
{
?>
<p>
<b>Seller Username :</b>
<?php echo $row['seller_username']; ?>
</p>
<?php
}
?>

</div>

<form action="interest.php" method="POST">

<input type="hidden"
name="property_id"
value="<?php echo $row['id']; ?>">

<input type="hidden"
name="property_name"
value="<?php echo $row['property_type']; ?>">

<input type="hidden"
name="owner_name"
value="<?php echo $row['seller_username']; ?>">

<input type="submit"
name="send_request"
value="I'm Interested"
class="btn">

</form>

</div>

</div>

</body>
</html>