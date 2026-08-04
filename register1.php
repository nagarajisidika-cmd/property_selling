<?php
include "connection.php";

if(isset($_POST['register']))
{
    $name         = $_POST['name'];
    $mobile       = $_POST['mobile'];
    $email        = $_POST['email'];
    $address      = $_POST['address'];
    $city         = $_POST['city'];
    $state        = $_POST['state'];
    $pin_code     = $_POST['pin_code'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];

    if($password != $confirm_pass)
    {
        echo "<script>alert('Passwords do not match');</script>";
    }
    else
    {
     $otp = rand(100000,999999);

$sql = "INSERT INTO reg2
(name,mobile,email,address,city,state,pin_code,
username,password,confirm_pass,otp,verify_status,status)

VALUES

('$name','$mobile','$email','$address','$city',
'$state','$pin_code','$username','$password',
'$confirm_pass','$otp','Pending','Pending')";

        if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Registration Successful. Your OTP is: $otp');
    window.location='verify_otp.php';
    </script>";
}
        else
        {
            echo "<script>alert('Registration Failed');</script>";
        }
    }
}
?>

<html>
<head>
<title>Customer Registration</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:
    linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1600');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    min-height:100vh;

    display:flex;
    justify-content:flex-end;
    align-items:center;
    padding-right:80px;
    position:relative;
}


.left-content{
    position:absolute;
    left:40px;
    top:20%;
    transform:translateY(-50%);
    color:white;
    max-width:500px;
}

.left-content h1{
    font-size:50px;
    margin-bottom:15px;
    text-shadow:2px 2px 10px rgba(0,0,0,0.5);
	text-align:center;
}

.left-content p{
    font-size:22px;
    line-height:1.6;
    text-shadow:2px 2px 10px rgba(0,0,0,0.5);
}


form{
    width:500px;
     background:transparent;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

h2{
    text-align:center;
    color:teal;
    margin-bottom:20px;
	
}

input[type="text"],
input[type="email"],
input[type="password"]{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:15px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus{
    outline:none;
    border-color:#009688;
    box-shadow:0 0 8px rgba(0,150,136,0.3);
}

input[type="submit"]{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#009688;
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-size:16px;
    font-weight:bold;
}

input[type="submit"]:hover{
    background:#00695c;
}

p{
    text-align:center;
    margin-top:15px;
}

a{
    color:#009688;
    text-decoration:none;
    font-weight:bold;
}

a:hover{
    text-decoration:underline;
}


@media(max-width:900px)
{
    body{
        justify-content:center;
        padding:20px;
    }

    .left-content{
        display:none;
    }

    form{
        width:100%;
        max-width:500px;
    }
}

</style>
</head>

<body>

<div class="left-content">
    <h1>🏠 Property Buying & Selling Portal</h1>

    <p>
        Buy and Sell Properties Easily.<br>
        Find your dream home with our trusted property portal.
    </p>
</div>

<form method="POST">

    <h2><b>Customer Registration</b></h2>

    <input type="text" name="name" placeholder="Enter Full Name" required>

    <input type="text" name="mobile" placeholder="Enter Mobile Number" required>

    <input type="email" name="email" placeholder="Enter Email" required>

    <input type="text" name="address" placeholder="Enter Address" required>

    <input type="text" name="city" placeholder="Enter City" required>

    <input type="text" name="state" placeholder="Enter State" required>

    <input type="text" name="pin_code" placeholder="Enter Pin Code" required>

    <input type="text" name="username" placeholder="Enter Username" required>

    <input type="password" name="password" placeholder="Enter Password" required>

    <input type="password" name="confirm_pass" placeholder="Confirm Password" required>

<input type="submit" name="register" value="Register">

    <p>
        Already have an account?
        <a href="login2.php">Login</a>
    </p>

</form>

</body>
</html>