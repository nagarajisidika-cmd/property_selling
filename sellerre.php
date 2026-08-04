<?php
include "connection.php";

$result = mysqli_query($conn,
"SELECT * FROM interest_request ORDER BY request_id DESC");

if(!$result)
{
    die("Query Error : ".mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($result))
{
?>

<!DOCTYPE html>
<html>
<head>
<title>Seller Requests</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
}

.card{
    width:80%;
    margin:20px auto;
    padding:15px;
    background:white;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

h3{
    color:#ff5722;
}
</style>

</head>
<body>

<div class="card">

<h3>Interested Buyer Details</h3>

<p><b>Buyer Name :</b>
<?php echo $row['buyer_name']; ?>
</p>

<p><b>Mobile :</b>
<?php echo $row['buyer_mobile']; ?>
</p>

<p><b>Email :</b>
<?php echo $row['buyer_email']; ?>
</p>

<p><b>Property ID :</b>
<?php echo $row['property_id']; ?>
</p>

<p><b>Property Name :</b>
<?php echo $row['property_name']; ?>
</p>

<p><b>Owner Name :</b>
<?php echo $row['owner_name']; ?>
</p>

<p><b>Date & Time :</b>
<?php echo $row['request_date']; ?>
</p>

<p><b>Status :</b>
<?php echo $row['status']; ?>
</p>

</div>

</body>
</html>

<?php
}
?>