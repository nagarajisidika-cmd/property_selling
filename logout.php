<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<title>Logout</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#1e3a8a,#009688);
}

.logout-box{
    background:white;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    width:400px;
}

.logout-box h1{
    color:#009688;
    margin-bottom:15px;
}

.logout-box p{
    color:#555;
    margin-bottom:20px;
    font-size:18px;
}

.btn{
    display:inline-block;
    background:#009688;
    color:white;
    text-decoration:none;
    padding:12px 25px;
    border-radius:8px;
    transition:0.3s;
}

.btn:hover{
    background:#00695c;
}

</style>

<meta http-equiv="refresh" content="3;url=login.php">

</head>

<body>

<div class="logout-box">

    <h1>✅ Logout Successful</h1>

    <p>You have been logged out successfully.</p>

    <p>Redirecting to Login Page...</p>

    <a href="login.php" class="btn">Login Again</a>

</div>

</body>
</html>