
<?php
include "connection.php";

if(isset($_POST['verify']))
{
    $username = trim($_POST['username']);
    $otp      = trim($_POST['otp']);

    $sql = "SELECT * FROM reg2
            WHERE username='$username'
            AND otp='$otp'";

    $result = mysqli_query($conn,$sql);

    if($result && mysqli_num_rows($result) > 0)
    {
        mysqli_query($conn,
        "UPDATE reg2
         SET verify_status='Verified'
         WHERE username='$username'");

        echo "<script>
        alert('OTP Verified Successfully');
        window.location='login2.php';
        </script>";
        exit();
    }
    else
    {
        echo "<script>alert('Invalid OTP');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Customer OTP Verification</title>

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
    background:linear-gradient(135deg,#1e3c72,#2a5298);
}

.container{
    width:420px;
    background:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.25);
}

.logo{
    text-align:center;
    font-size:60px;
    margin-bottom:10px;
}

h2{
    text-align:center;
    color:#1e3c72;
    margin-bottom:25px;
}

.input-box{
    margin-bottom:18px;
}

.input-box input{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

.input-box input:focus{
    outline:none;
    border-color:#2563eb;
    box-shadow:0 0 8px rgba(37,99,235,0.3);
}

.btn{
    width:100%;
    padding:13px;
    border:none;
    border-radius:8px;
    background:#16a34a;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background:#15803d;
}

.footer{
    text-align:center;
    margin-top:15px;
    color:#64748b;
    font-size:14px;
}

</style>

</head>

<body>

<div class="container">

<div class="logo">🔐</div>

<h2>OTP Verification</h2>

<form method="post">

<div class="input-box">
<input type="text"
name="username"
placeholder="Enter Username"
required>
</div>

<div class="input-box">
<input type="text"
name="otp"
placeholder="Enter OTP"
required>
</div>

<input type="submit"
name="verify"
value="Verify OTP"
class="btn">

</form>

<div class="footer">
Property Buying & Selling Portal
</div>

</div>

</body>
</html>

