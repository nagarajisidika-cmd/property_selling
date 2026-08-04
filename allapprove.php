<?php
include "connection.php";

$result = mysqli_query($conn,"SELECT * FROM property WHERE status='Approved'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Approved Properties</title>

<style>

body{
    background:#f8fafc;
    font-family:'Segoe UI',sans-serif;
    padding:30px;
}

.container{
    width:95%;
    margin:auto;
}

h2{
    text-align:center;
    color:#16a34a;
    margin-bottom:20px;
}

.back-btn{
    background:#0f766e;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:8px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

th{
    background:#1e3a8a;
    color:white;
    padding:15px;
}

td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

.price{
    color:#16a34a;
    font-weight:bold;
}

img{
    width:120px;
    height:80px;
    border-radius:8px;
}

.back-btn:hover{
    background:#00695c;
}

</style>

</head>
<body>

<div class="container">

<a href="admin.php" class="back-btn">← Back to Dashboard</a>

<h2>Approved Properties</h2>

<table>

<tr>
    <th>ID</th>
    <th>Property Type</th>
    <th>Location</th>
    <th>Price</th>
    <th>Image</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['property_type']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td class="price">₹<?php echo $row['price']; ?></td>

    <td>
        <?php
        if(!empty($row['image']))
        {
        ?>
            <img src="uploads/<?php echo $row['image']; ?>">
        <?php
        }
        else
        {
            echo "<span class='no-image'>No Image</span>";
        }
        ?>
    </td>
</tr>
<?php
}
?>

</table>

</div>

</body>
</html>