<?php
include "connection.php";

$id = $_GET['id'];

$otp = rand(100000,999999);

mysqli_query($conn,"
UPDATE reg
SET status='Approved',
    otp='$otp',
    verify_status='Not Verified'
WHERE id='$id'
");
?>

<!DOCTYPE html>
<html>
<head>
<title>Seller Approved</title>

<style>
body{
    margin:0;
    padding:0;
    font-family:Arial, sans-serif;
    background:linear-gradient(135deg,#00c6ff,#0072ff);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.box{
    width:450px;
    background:#fff;
    padding:30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.icon{
    font-size:70px;
    color:#28a745;
}

h2{
    color:#333;
    margin-top:10px;
}

.otp{
    font-size:28px;
    font-weight:bold;
    color:#0072ff;
    margin:20px 0;
}

.btn{
    display:inline-block;
    padding:12px 25px;
    background:#0072ff;
    color:white;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
}

.btn:hover{
    background:#0056cc;
}
</style>

<meta http-equiv="refresh" content="5;url=admin.php">

</head>
<body>

<div class="box">

<div class="icon">✔</div>

<h2>Seller Approved Successfully</h2>

<p>OTP Generated Successfully</p>

<div class="otp">
    <?php echo $otp; ?>
</div>

<p>Redirecting to Admin Panel in 5 seconds...</p>

<a href="admin.php" class="btn">Go to Admin Panel</a>

</div>

</body>
</html>