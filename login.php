<?php
session_start();
include "connection.php";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM reg
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);

        if($row['status']!='Approved')
        {
            echo "<script>
            alert('Admin Approval Pending');
            </script>";
        }
        elseif($row['verify_status']!='Verified')
        {
            echo "<script>
            alert('Please Verify OTP First');
            window.location='otp.php';
            </script>";
        }
        else
        {
            $_SESSION['username']=$username;

            echo "<script>
            alert('Login Successful');
            window.location='seller.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Invalid Username or Password');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Seller Login</title>

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
    background:
    linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
    url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1600');
    background-size:cover;
    background-position:center;
}

.login-box{
    width:400px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(12px);
    padding:35px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.3);
}

.login-box h2{
    text-align:center;
    color:white;
    margin-bottom:25px;
    font-size:30px;
}

input[type="text"],
input[type="password"]{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:10px;
    outline:none;
    font-size:15px;
}

input[type="submit"]{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#009688;
    color:white;
    border:none;
    border-radius:10px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

input[type="submit"]:hover{
    background:#00695c;
    transform:scale(1.03);
}

.register-link{
    text-align:center;
    margin-top:15px;
    color:white;
}

.register-link a{
    color:#ffeb3b;
    text-decoration:none;
    font-weight:bold;
}

.register-link a:hover{
    text-decoration:underline;
}

</style>

</head>
<body>

<div class="login-box">

<form method="post">

<h2>Seller Login</h2>

<input type="text"
name="username"
placeholder="Enter Username"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<input type="submit"
name="login"
value="Login">

<div class="register-link">
    Don't have an account?
    <a href="register.php">Register</a>
</div>

</form>

</div>

</body>
</html>