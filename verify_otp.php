<?php
include "connection.php";

if(isset($_POST['verify']))
{
    $username = $_POST['username'];
    $otp      = $_POST['otp'];

    $sql = "SELECT * FROM reg2
            WHERE username='$username'
            AND otp='$otp'
            AND status='Approved'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        mysqli_query($conn,"
        UPDATE reg2
        SET verify_status='Verified'
        WHERE username='$username'
        ");

        echo "<script>
        alert('OTP Verified Successfully');
        window.location='login2.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Invalid OTP');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>OTP Verification</title>

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
    linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1600');
    background-size:cover;
    background-position:center;
}

.verify-box{
    width:420px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(12px);
    padding:35px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.3);
}

.verify-box h2{
    text-align:center;
    color:white;
    margin-bottom:25px;
    font-size:30px;
}

input[type="text"]{
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
    cursor:pointer;
    font-size:16px;
    font-weight:bold;
    transition:0.3s;
}

input[type="submit"]:hover{
    background:#00695c;
    transform:scale(1.03);
}

.info{
    text-align:center;
    color:white;
    margin-top:15px;
    font-size:14px;
}

</style>

</head>
<body>

<div class="verify-box">

<form method="post">

<h2>OTP Verification</h2>

<input
type="text"
name="username"
placeholder="Enter Username"
required>

<input
type="text"
name="otp"
placeholder="Enter OTP"
required>

<input
type="submit"
name="verify"
value="Verify OTP">

<div class="info">
Enter the OTP generated after admin approval
</div>

</form>

</div>

</body>
</html>