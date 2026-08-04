<?php
session_start();
include "connection.php";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM reg2
            WHERE username='$username'
            AND password='$password'
            AND verify_status='Verified'
            AND status='Approved'";

    $result = mysqli_query($conn,$sql);

    if($result && mysqli_num_rows($result) > 0)
    {
        $_SESSION['username'] = $username;
        header("Location: view.php");
        exit();
    }
    else
    {
        echo "<script>
              alert('OTP Verification or Admin Approval Pending');
              </script>";
    }
}
?>

<html>
<body>

<form method="post">

<h2>Buyer Login</h2>

<input type="text"
name="username"
placeholder="Username"
required><br><br>

<input type="password"
name="password"
placeholder="Password"
required><br><br>

<input type="submit"
name="login"
value="Login">

</form>

</body>
</html>