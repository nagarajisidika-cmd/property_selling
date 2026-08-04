<?php
session_start();
include "connection.php";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM reg WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['username'];

        header("Location: admin.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Property Portal - User Login</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;

    background:
    linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa0gh7iI_m2KBnuxY0JMBDKpNmiFrMe9UoIrFcCQte1Q&s=10');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.login-box{
    width:400px;
    background:rgba(255,255,255,0.95);
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

.login-box h1{
    text-align:center;
    color:#009688;
    margin-bottom:10px;
}

.login-box p{
    text-align:center;
    color:#666;
    margin-bottom:25px;
}

input[type=text],
input[type=password]{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:15px;
}

input[type=text]:focus,
input[type=password]:focus{
    outline:none;
    border-color:#009688;
    box-shadow:0 0 8px rgba(0,150,136,0.3);
}

input[type=submit]{
    width:100%;
    padding:12px;
    background:#009688;
    color:white;
    border:none;
    border-radius:10px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    margin-top:15px;
}

input[type=submit]:hover{
    background:#00695c;
}

.register-link{
    text-align:center;
    margin-top:20px;
}

.register-link a{
    color:#009688;
    text-decoration:none;
    font-weight:bold;
}

.register-link a:hover{
    text-decoration:underline;
}

@media(max-width:500px)
{
    .login-box{
        width:90%;
    }
}

</style>

</head>
<body>

<div class="login-box">

<h1>Property Portal</h1>

<p>User Login</p>

<form method="POST">

<input type="text" name="username" placeholder="Enter Username" required>

<input type="password" name="password" placeholder="Enter Password" required>

<input type="submit" name="login" value="Login">

</form>

<div class="register-link">
    <a href="register.php">New User? Register Here</a>
</div>

</div>

</body>
</html>