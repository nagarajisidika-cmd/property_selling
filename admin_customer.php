
<?php
include "connection.php";

$result = mysqli_query($conn,"
SELECT * FROM reg2
WHERE status='Pending'
ORDER BY id DESC");

$total = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pending Customer Requests</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f6f9;
    padding:30px;
}

.header{
    text-align:center;
    margin-bottom:25px;
}

.header h1{
    color:#1e3c72;
    font-size:32px;
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

.total{
    width:95%;
    margin:auto;
    margin-bottom:15px;
    font-size:18px;
    font-weight:bold;
    color:#0f766e;
}

.table-container{
    width:95%;
    margin:auto;
    background:white;
    border-radius:15px;
    padding:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#1e3c72;
    color:white;
    padding:15px;
    text-align:center;
}

td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tr:nth-child(even){
    background:#f8fafc;
}

tr:hover{
    background:#e8f0ff;
    transition:0.3s;
}

.approve-btn{
    display:inline-block;
    background:#16a34a;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:8px;
    font-weight:bold;
    margin-right:5px;
}

.approve-btn:hover{
    background:#15803d;
}

.reject-btn{
    display:inline-block;
    background:red;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:8px;
    font-weight:bold;
}

.reject-btn:hover{
    background:#b91c1c;
}

.no-data{
    color:red;
    font-size:18px;
    text-align:center;
    padding:20px;
}

@media(max-width:768px){

    .header h1{
        font-size:24px;
    }

    th,td{
        padding:8px;
        font-size:14px;
    }

    .approve-btn,
    .reject-btn{
        padding:8px 12px;
        font-size:12px;
    }
}

</style>

</head>
<body>

<div class="header">
    <h1>Pending Customer Requests</h1>

    <a href="admin.php" class="back-btn">
        ← Back to Admin Panel
    </a>
</div>

<div class="total">
    Total Pending Requests : <?php echo $total; ?>
</div>

<div class="table-container">

<table>

<tr>
    <th>Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php
if($total > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>
<tr>

    <td><?php echo $row['name']; ?></td>

    <td><?php echo $row['username']; ?></td>

    <td><?php echo $row['email']; ?></td>

    <td>

        <a class="approve-btn"
        href="approve_customer.php?id=<?php echo $row['id']; ?>">
        Approve
        </a>

        <a class="reject-btn"
        href="reject_customer.php?id=<?php echo $row['id']; ?>"
        onclick="return confirm('Are you sure you want to reject this customer?')">
        Reject
        </a>

    </td>

</tr>
<?php
    }
}
else
{
?>
<tr>
    <td colspan="4" class="no-data">
        No Pending Customer Requests
    </td>
</tr>
<?php
}
?>

</table>

</div>

</body>
</html>
