<?php
include "connection.php";

$result = mysqli_query($conn,"SELECT * FROM property");
?>

<html>
<head>
<title>Property Approval</title>
</head>
<body>

<h2 align="center">Property Requests</h2>

<table border="1" align="center" cellpadding="10">

<tr>
<th>ID</th>
<th>Type</th>
<th>Location</th>
<th>Price</th>
<th>Image</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['property_type']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['price']; ?></td>

<td>
<img src="uploads/<?php echo $row['image']; ?>" width="100">
</td>

<td><?php echo $row['status']; ?></td>

<td>

<?php
if($row['status']=="Pending")
{
?>
<a href="ap.php?id=<?php echo $row['id']; ?>">Approve</a>
|
<a href="re.php?id=<?php echo $row['id']; ?>">Reject</a>
<?php
}
elseif($row['status']=="Approved")
{
    echo "Approved";
}
elseif($row['status']=="Rejected")
{
    echo "Rejected";
}
?>

</td>

</tr>
<?php
}
?>

</table>

</body>
</html>