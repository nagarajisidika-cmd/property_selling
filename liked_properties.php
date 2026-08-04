<?php
session_start();
include "connection.php";

$result = mysqli_query($conn,
"SELECT * FROM property_likes
ORDER BY like_id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Property Likes</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
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

.container{
    width:90%;
    margin:30px auto;
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

</style>

</head>
<body>

<div class="header">
❤️ Property Likes
</div>

<div class="container">

<?php
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
?>

<div class="card">

<p>
<span class="like-icon">❤️</span>
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
    echo "<div class='no-data'>No Likes Found</div>";
}
?>

</div>

</body>
</html>