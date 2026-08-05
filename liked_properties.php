<?php
session_start();
include "connection.php";

$result = mysqli_query($conn,
"SELECT * FROM property_likes
 ORDER BY like_id DESC");

$total_likes = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Liked Properties</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f6f9;
}

.header{
    background:#1e3c72;
    color:white;
    text-align:center;
    padding:20px;
    font-size:30px;
    font-weight:bold;
}

.top-bar{
    width:90%;
    margin:20px auto;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.back-btn{
    background:#2563eb;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:8px;
    font-weight:bold;
}

.back-btn:hover{
    background:#1d4ed8;
}

.total{
    font-size:20px;
    font-weight:bold;
    color:#0f766e;
}

.container{
    width:90%;
    margin:20px auto;
}

.card{
    background:white;
    border-radius:12px;
    padding:20px;
    margin-bottom:20px;
    box-shadow:0 4px 12px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card p{
    font-size:18px;
    margin:10px 0;
}

.card b{
    color:#1e3c72;
}

.like-icon{
    font-size:25px;
    color:red;
}

.date{
    color:#666;
    font-size:15px;
}

.no-data{
    text-align:center;
    font-size:22px;
    color:red;
    margin-top:50px;
}
.header-icon{
    width:35px;
    height:35px;
    vertical-align:middle;
    margin-right:8px;
}

@media(max-width:768px){

    .top-bar{
        flex-direction:column;
        gap:10px;
    }

    .header{
        font-size:24px;
    }

    .card p{
        font-size:15px;
    }
}

</style>

</head>
<body>

<div class="header">
<img src="icons/like.png" alt="" class="header-icon">
 Property Likes
</div>

<div class="top-bar">

    <a href="admin.php" class="back-btn">
	<img src="icons/back.png" alt="" width=10>
        Back
    </a>

    <div class="total">
        Total Likes : <?php echo $total_likes; ?>
    </div>

</div>

<div class="container">

<?php
if($total_likes > 0)
{
    while($row=mysqli_fetch_assoc($result))
    {
?>

<div class="card">

<p>
<span class="like-icon"><img src="icons/like.png" alt="" class="header-icon"></span>
<b>Property :</b>
<?php echo $row['property_name']; ?>
</p>

<p>
<b>Liked By :</b>
<?php echo $row['user_name']; ?>
</p>

<p>
<b>Seller :</b>
<?php echo $row['seller_username']; ?>
</p>

<p class="date">
<b>Date & Time :</b>
<?php echo $row['like_date']; ?>
</p>

</div>

<?php
    }
}
else
{
?>
<div class="no-data">
    No Likes Found
</div>
<?php
}
?>

</div>

</body>
</html>
