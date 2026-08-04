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
        $sql = "INSERT INTO reg
        (name,mobile,email,address,city,state,pin_code,
        username,password,confirm_pass,otp,verify_status,status)

        VALUES

        ('$name','$mobile','$email','$address','$city',
        '$state','$pin_code','$username','$password',
        '$confirm_pass','','Not Verified','Pending')";

        if(mysqli_query($conn,$sql))
        {
            echo "
            ('Registration Successful. Wait for Admin Approval');
            window.location='login.php';
            ";
        }
        else
        {
            echo "
            alert('Registration Failed');
            ";
        }
    }
}
?>

<!DOCTYPE html>
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
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1600');
    background-size:cover;
    background-position:center;
    padding:20px;
}

.form-container{
    width:500px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(12px);
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,0.3);
}

h2{
    text-align:center;
    color:#ffffff;
    margin-bottom:20px;
    font-size:30px;
}

input[type="text"],
input[type="email"],
input[type="password"]{
    width:100%;
    padding:12px;
    margin:8px 0;
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
    cursor:pointer;
    font-size:16px;
    font-weight:bold;
    transition:0.3s;
}

input[type="submit"]:hover{
    background:#00695c;
    transform:scale(1.02);
}

.login-link{
    text-align:center;
    margin-top:15px;
    color:white;
}

.login-link a{
    color:#ffeb3b;
    text-decoration:none;
    font-weight:bold;
}

.login-link a:hover{
    text-decoration:underline;
}

</style>
</head>

<body>

<div class="form-container">

<form method="post">

<h2>Customer Registration</h2>

<input type="text" name="name" placeholder="Enter Full Name" required>

<input type="text" name="mobile" placeholder="Enter Mobile Number" required>

<input type="email" name="email" placeholder="Enter Email Address" required>

<input type="text" name="address" placeholder="Enter Address" required>

<input type="text" name="city" placeholder="Enter City" required>

<input type="text" name="state" placeholder="Enter State" required>

<input type="text" name="pin_code" placeholder="Enter Pin Code" required>

<input type="text" name="username" placeholder="Create Username" required>

<input type="password" name="password" placeholder="Create Password" required>

<input type="password" name="confirm_pass" placeholder="Confirm Password" required>

<input type="submit" name="register" value="Register">

<div class="login-link">
    Already have an account?
    <a href="login.php">Login</a>
</div>

</form>

</div>

</body>
</html>