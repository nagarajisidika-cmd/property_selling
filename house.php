<?php
include "connection.php";

$result = mysqli_query($conn,
"SELECT * FROM property
 WHERE status='Approved'
 AND property_type LIKE '%House%'
 ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>House Properties</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f5f7fa;
    padding:30px;
}

.heading{
    text-align:center;
    color:#009688;
    font-size:40px;
    margin-bottom:30px;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:25px;
}

.card{
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,0.25);
}

.card img{
    width:100%;
    height:300px;
    object-fit:contain;
    background:#f8f8f8;
    padding:5px;
    border-bottom:1px solid #eee;
}

.card-content{
    padding:20px;
}

.card-content h2{
    color:#333;
    margin-bottom:10px;
}

.location{
    color:#666;
    font-size:16px;
    margin-bottom:10px;
}

.price{
    color:#009688;
    font-size:24px;
    font-weight:bold;
    margin-bottom:15px;
}

.btn{
    display:inline-block;
    background:#009688;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:8px;
    transition:0.3s;
}

.btn:hover{
    background:#00695c;
}

.no-data{
    text-align:center;
    color:red;
    font-size:22px;
    margin-top:50px;
}

</style>
</head>

<body>

<h1 class="heading">🏠 House Properties</h1>

<div class="container">

<?php
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>

<div class="card">

    <img src="uploads/<?php echo $row['image']; ?>" alt="House Property">

    <div class="card-content">

        <h2>
            <?php echo $row['property_type']; ?>
        </h2>

        <p class="location">
            📍 <?php echo $row['location']; ?>
        </p>

        <p class="price">
            ₹ <?php echo number_format($row['price']); ?>
        </p>

        <a class="btn"
        href="property_details.php?id=<?php echo $row['id']; ?>">
            View Details
        </a>

    </div>

</div>

<?php
    }
}
else
{
?>

<div class="no-data">
    No House Properties Available
</div>

<?php
}
?>

</div>

</body>
</html>