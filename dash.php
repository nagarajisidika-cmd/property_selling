<?php
include "connection.php";

$sql = "SELECT * FROM reg";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#667eea,#764ba2);
    min-height:100vh;
    padding:30px;
}

.header{
    text-align:center;
    margin-bottom:25px;
}

.header h2{
    color:white;
    font-size:35px;
    margin-bottom:15px;
}

.back-btn{
    display:inline-block;
    background:#2563eb;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:8px;
    font-weight:bold;
    transition:0.3s;
}

.back-btn:hover{
    background:#1d4ed8;
}

.table-container{
    width:95%;
    margin:auto;
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

th{
    background:#0f766e;
    color:white;
    padding:15px;
}

td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tr:nth-child(even){
    background:#f8f9fa;
}

tr:hover{
    background:#eaf4ff;
}

.approve{
    display:inline-block;
    background:green;
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:5px;
    margin-right:5px;
}

.reject{
    display:inline-block;
    background:red;
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:5px;
}

.approve:hover{
    background:darkgreen;
}

.reject:hover{
    background:darkred;
}

.approved{
    color:green;
    font-weight:bold;
}

.rejected{
    color:red;
    font-weight:bold;
}

.pending{
    color:orange;
    font-weight:bold;
}

@media(max-width:768px){

    .header h2{
        font-size:26px;
    }

    th,td{
        font-size:13px;
        padding:8px;
    }

    .approve,
    .reject{
        padding:6px 10px;
        font-size:12px;
    }
}

</style>

</head>
<body>

<div class="header">

    <h2>User Approval Dashboard</h2>

    <a href="admin.php" class="back-btn">
        ← Back to Admin Panel
    </a>

</div>

<div class="table-container">

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Username</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['username']; ?></td>

    <td>

    <?php

    $status = trim($row['status']);

    if($status=="Approved")
    {
        echo "<span class='approved'>Approved</span>";
    }
    elseif($status=="Rejected")
    {
        echo "<span class='rejected'>Rejected</span>";
    }
    else
    {
        echo "<span class='pending'>Pending</span>";
    }

    ?>

    </td>

    <td>

    <?php
    if($status=="Pending")
    {
    ?>

    <a class="approve"
    href="approve.php?id=<?php echo $row['id']; ?>">
    Approve
    </a>

    <a class="reject"
    href="reject.php?id=<?php echo $row['id']; ?>"
    onclick="return confirm('Are you sure you want to reject this user?');">
    Reject
    </a>

    <?php
    }
    else
    {
        echo "-";
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
