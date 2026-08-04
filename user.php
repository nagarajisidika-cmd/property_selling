<?php
session_start();
include "connection.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM reg");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Registered Users</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f1f5f9;
    padding:30px;
}

.container{
    max-width:1400px;
    margin:auto;
}

.header{
    text-align:center;
    margin-bottom:30px;
}

.header h1{
    color:#1e3a8a;
    font-size:38px;
}

.back-btn{
    display:inline-block;
    background:#0f766e;
    color:white;
    text-decoration:none;
    padding:12px 20px;
    border-radius:8px;
    font-weight:bold;
    margin-bottom:20px;
    transition:0.3s;
}

.back-btn:hover{
    background:#115e59;
}

.table-box{
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#1e3a8a;
    color:white;
    padding:18px;
    text-transform:uppercase;
    font-size:14px;
}

td{
    padding:15px;
    text-align:center;
    border-bottom:1px solid #e5e7eb;
}

tr:hover{
    background:#f8fafc;
}

.id{
    font-weight:bold;
    color:#2563eb;
}

.email{
    color:#2563eb;
}

.username{
    font-weight:bold;
    color:#334155;
}

.status-approved{
    background:#dcfce7;
    color:#15803d;
    padding:6px 14px;
    border-radius:20px;
    font-weight:bold;
}

.status-pending{
    background:#fef3c7;
    color:#b45309;
    padding:6px 14px;
    border-radius:20px;
    font-weight:bold;
}

.status-rejected{
    background:#fee2e2;
    color:#dc2626;
    padding:6px 14px;
    border-radius:20px;
    font-weight:bold;
}

</style>

</head>
<body>

<div class="container">

<div class="header">
    <h1>All Registered Users</h1>
</div>

<a href="admin.php" class="back-btn">
    ← Back to Dashboard
</a>

<div class="table-box">

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Username</th>
    <th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td class="id">
    <?php echo $row['id']; ?>
</td>

<td>
    <?php echo $row['name']; ?>
</td>

<td>
    <?php echo $row['mobile']; ?>
</td>

<td class="email">
    <?php echo $row['email']; ?>
</td>

<td class="username">
    <?php echo $row['username']; ?>
</td>

<td>

<?php
if($row['status']=="Approved")
{
    echo "<span class='status-approved'>Approved</span>";
}
elseif($row['status']=="Rejected")
{
    echo "<span class='status-rejected'>Rejected</span>";
}
else
{
    echo "<span class='status-pending'>Pending</span>";
}
?>

</td>

</tr>

<?php
}
?>

</table>

</div>

</div>

</body>
</html>