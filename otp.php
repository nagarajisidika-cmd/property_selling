<?php
include "connection.php";

if(isset($_POST['verify']))
{
    $username = $_POST['username'];
    $otp      = $_POST['otp'];

    $sql = "SELECT * FROM reg
            WHERE username='$username'
            AND otp='$otp'
            AND status='Approved'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        mysqli_query($conn,"
        UPDATE reg
        SET verify_status='Verified'
        WHERE username='$username'
        ");

        echo "<script>
        alert('OTP Verified Successfully');
        window.location='login.php';
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
</head>
<body>

<form method="post">

<h2>OTP Verification</h2>

<input type="text"
name="username"
placeholder="Username"
required>

<br><br>

<input type="text"
name="otp"
placeholder="Enter OTP"
required>

<br><br>

<input type="submit"
name="verify"
value="Verify OTP">

</form>

</body>
</html>