<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Seller Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f6f9;
}

header{
    background:#0f766e;
    color:white;
    padding:15px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

header a{
    background:red;
    color:white;
    text-decoration:none;
    padding:8px 15px;
    border-radius:5px;
}

.container{
    width:90%;
    margin:30px auto;
}

.card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.menu{
    margin-top:20px;
}

.menu a{
    display:inline-block;
    text-decoration:none;
    color:white;
    padding:12px 20px;
    margin:10px;
    border-radius:5px;
}

.add{
    background:#2563eb;
}

.my{
    background:#16a34a;
}

.view{
    background:#f59e0b;
}

.interested{
    background:#dc2626;
}
.likes{
    background:#e91e63;
}
</style>
</head>

<body>

<header>

<h2>Seller Dashboard</h2>

<div>
Welcome :
<?php echo $_SESSION['username']; ?>

<a href="logout.php">Logout</a>
</div>

</header>

<div class="container">

<div class="card">

<h2>Property Management</h2>

<p>Welcome to Property Buying & Selling Portal</p>

<div class="menu">

<a class="add" href="add_property.php">Add Property</a>

<a class="my" href="my_property.php">My Properties</a>

<a class="view" href="vi.php">View Properties</a>

<a class="interested" href="sellerre.php">Interested Buyers</a>

<a class="likes" href="liked_properties.php">Property Likes</a>

</div>
</div>

</div>

</div>

</body>
</html>