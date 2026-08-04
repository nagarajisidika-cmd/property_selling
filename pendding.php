<?php
session_start();
include "connection.php";

$result = mysqli_query($conn,"SELECT * FROM property WHERE status='Pending'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Pending Properties</title>

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
    color:#f59e0b;
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

.approve-btn{
    background:#16a34a;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:5px;
}

.reject-btn{
    background:#dc2626;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:5px;
}

img{
    width:120px;
    height:80px;
    border-radius:8px;
}

</style>

</head>
<body>

<div class="container">

<a href="admin.php" class="back-btn">← Back to Dashboard</a>

<h2>Pending Properties</h2>

<table>

<tr>
    <th>ID</th>
    <th>Property Type</th>
    <th>Location</th>
    <th>Price</th>
    <th>Image</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['property_type']; ?></td>

    <td><?php echo $row['location']; ?></td>

    <td class="price">₹<?php echo $row['price']; ?></td>

    <td>
        <?php
        if(!empty($row['image']) && file_exists("uploads/".$row['image']))
        {
        ?>
            <img src="uploads/<?php echo $row['image']; ?>">
        <?php
        }
        else
        {
            echo "<span class='no-image'>Image Not Found</span>";
        }
        ?>
    </td>

    <td>
        <a class="approve-btn" href="ap.php?id=<?php echo $row['id']; ?>">Approve</a>

        <a class="reject-btn" href="re.php?id=<?php echo $row['id']; ?>">Reject</a>
    </td>

</tr>
<?php
}
?>

</table>

</div>

</body>
</html>