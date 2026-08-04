<?php
session_start();
include "connection.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$p = mysqli_query($conn,"SELECT * FROM property");
$total_property = mysqli_num_rows($p);

$u = mysqli_query($conn,"SELECT * FROM reg");
$total_users = mysqli_num_rows($u);

$a = mysqli_query($conn,"SELECT * FROM property WHERE status='Approved'");
$total_approved = mysqli_num_rows($a);

$pd = mysqli_query($conn,"SELECT * FROM property WHERE status='Pending'");
$total_pending = mysqli_num_rows($pd);

$rj = mysqli_query($conn,"SELECT * FROM property WHERE status='Rejected'");
$total_rejected = mysqli_num_rows($rj);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f7fc;
}

.header{
    background:#1e3a8a;
    color:white;
    text-align:center;
    padding:20px;
    font-size:22px;
    font-weight:bold;
    position:fixed;
    width:100%;
    top:0;
    z-index:1000;
}

.sidebar{
    width:250px;
    height:100vh;
    background:#0f172a;
    position:fixed;
    top:70px;
    left:0;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 20px;
    transition:0.3s;
    border-bottom:1px solid rgba(255,255,255,0.1);
}

.sidebar a:hover{
    background:#0f766e;
}

.content{
    margin-left:270px;
    margin-top:90px;
    padding:20px;
}

.dashboard{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card h3{
    color:#555;
    margin-bottom:15px;
}

.card h1{
    color:#009688;
    font-size:42px;
}

.welcome{
    background:white;
    padding:20px;
    border-radius:15px;
    margin-bottom:25px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.welcome h2{
    color:#1e3a8a;
}

</style>

</head>
<body>

<div class="header">
    Property Portal Admin Panel
</div>

<div class="sidebar">

    <a href="admin.php">🏠 Dashboard</a>
    <a href="vi.php">🏡 View Property</a>
    <a href="pendding.php">⏳ Pending Property</a>
    <a href="allapprove.php">✅ Approved Property</a>
    <a href="allreject.php">❌ Rejected Property</a>
    <a href="user.php">👥 Users</a>
    <a href="admin_customer.php">🛒 Buyer Request</a>
    <a href="dash.php">📋 Seller Request</a>
    <a href="view_feedback.php">💬 Feedback</a>
    <a href="logout.php">🚪 Logout</a>

</div>

<div class="content">

<div class="welcome">
    <h2>Welcome Admin</h2>
    <p>Manage properties, users, approvals and requests from this dashboard.</p>
</div>

<div class="dashboard">

    <div class="card">
        <h3>Total Properties</h3>
        <h1><?php echo $total_property; ?></h1>
    </div>

    <div class="card">
        <h3>Total Users</h3>
        <h1><?php echo $total_users; ?></h1>
    </div>

    <div class="card">
        <h3>Approved Properties</h3>
        <h1><?php echo $total_approved; ?></h1>
    </div>

    <div class="card">
        <h3>Pending Properties</h3>
        <h1><?php echo $total_pending; ?></h1>
    </div>

    <div class="card">
        <h3>Rejected Properties</h3>
        <h1><?php echo $total_rejected; ?></h1>
    </div>

</div>

</div>

</body>
</html>