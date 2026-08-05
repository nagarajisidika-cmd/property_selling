<?php
include "connection.php";

$sql = "select * from feedback ORDER BY feedback_id DESC";

$result = mysqli_query($conn, $sql);

if(!$result)
{
    die("Query Error : " . mysqli_error($conn));
}

$total_feedback = mysqli_num_rows($result);
?>

<html>
<head>
<meta charset="UTF-8">
<title>View Feedback</title>

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
    margin-bottom:20px;
}

.header h2{
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
    font-size:20px;
    font-weight:bold;
    color:#0f766e;
}

.table-container{
    width:95%;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:15px;
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

.rating{
    color:#f59e0b;
    font-size:18px;
    font-weight:bold;
}

.feedback-box{
    text-align:left;
    max-width:300px;
    word-wrap:break-word;
}

.no-data{
    text-align:center;
    color:red;
    font-size:20px;
    padding:20px;
}

@media(max-width:768px)
{
    .header h2{
        font-size:24px;
    }

    th,td{
        padding:8px;
        font-size:14px;
    }

    .back-btn{
        padding:8px 15px;
        font-size:14px;
    }
}

</style>

</head>
<body>

<div class="header">

    <h2>Buyer Feedback List</h2>

    <a href="admin.php" class="back-btn">
	<img src="icons/back.png" alt=""width=10>
        Back to Admin Panel
    </a>

</div>

<div class="total">
    Total Feedback : <?php echo $total_feedback; ?>
</div>

<div class="table-container">

<table>

<tr>
    <th>ID</th>
    <th>Buyer Name</th>
    <th>Property Name</th>
    <th>Rating</th>
    <th>Feedback</th>
</tr>

<?php

if($total_feedback > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>

<tr>

    <td><?php echo $row['feedback_id']; ?></td>

    <td><?php echo $row['buyer_name']; ?></td>

    <td><?php echo $row['property_name']; ?></td>

    <td class="rating">
	 
        <img src="icons/star.png" alt="" width=100 >
        <?php echo $row['rating']; ?>
    </td>
	 

    <td class="feedback-box">
        <?php echo $row['feedback']; ?>
    </td>

</tr>

<?php
    }
}
else
{
?>

<tr>
    <td colspan="5" class="no-data">
        No Feedback Available
    </td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>

