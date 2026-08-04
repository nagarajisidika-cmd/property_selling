<?php
session_start();
include "connection.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$username=$_SESSION['username'];

$sql="SELECT * FROM reg WHERE username='$username'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>

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
    display:flex;
    justify-content:center;
    align-items:center;
}

.profile-card{
    width:500px;
    background:#fff;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.profile-header{
    text-align:center;
    margin-bottom:25px;
}

.profile-img{
    width:120px;
    height:120px;
    border-radius:50%;
    border:5px solid #667eea;
}

.profile-header h2{
    margin-top:15px;
    color:#333;
}

.profile-header p{
    color:#777;
}

.info{
    margin-top:20px;
}

.info-row{
    display:flex;
    justify-content:space-between;
    padding:12px;
    border-bottom:1px solid #eee;
}

.info-row span:first-child{
    font-weight:bold;
    color:#444;
}

.info-row span:last-child{
    color:#666;
}

.buttons{
    margin-top:25px;
    text-align:center;
}

.btn{
    display:inline-block;
    padding:12px 25px;
    margin:5px;
    text-decoration:none;
    border-radius:8px;
    color:white;
    font-weight:bold;
}

.edit{
    background:#28a745;
}

.login{
    background:skyblue;
}
.logout{
    background:pink;
}

.btn:hover{
    opacity:0.9;
    transform:scale(1.03);
}

</style>

</head>
<body>

<div class="profile-card">

<div class="profile-header">

<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile-img">

<h2><?php echo $row['name']; ?></h2>

<p>Property Buyer & Seller</p>

</div>

<div class="info">

<div class="info-row">
<span>Mobile</span>
<span><?php echo $row['mobile']; ?></span>
</div>

<div class="info-row">
<span>Email</span>
<span><?php echo $row['email']; ?></span>
</div>

<div class="info-row">
<span>Address</span>
<span><?php echo $row['address']; ?></span>
</div>

<div class="info-row">
<span>City</span>
<span><?php echo $row['city']; ?></span>
</div>

<div class="info-row">
<span>State</span>
<span><?php echo $row['state']; ?></span>
</div>

<div class="info-row">
<span>Pin Code</span>
<span><?php echo $row['pin_code']; ?></span>
</div>

<div class="info-row">
<span>Username</span>
<span><?php echo $row['username']; ?></span>
</div>

</div>

<div class="buttons">

<a href="edit_profile1.php" class="btn edit">Edit Profile</a>
<a href="login1.php" class="btn login">Login</a>
<a href="logout.php" class="btn logout">Logout</a>


</div>

</div>

</body>
</html>