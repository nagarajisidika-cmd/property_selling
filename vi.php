<?php
include "connection.php";

$result = mysqli_query($conn,"SELECT * FROM property");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Properties</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f1f5f9;
    padding:30px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.page-title{
    color:#1e3a8a;
    font-size:32px;
}

.back-btn{
    background:#0f766e;
    color:white;
    padding:12px 20px;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
}

.back-btn:hover{
    background:#115e59;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-body{
    padding:20px;
}

.card-body h3{
    color:#1e3a8a;
    margin-bottom:10px;
}

.info{
    margin:8px 0;
    color:#334155;
}

.price{
    color:#16a34a;
    font-size:22px;
    font-weight:bold;
    margin:12px 0;
}

.desc{
    color:#475569;
    line-height:1.5;
    margin-top:10px;
}

.id{
    display:inline-block;
    background:#e0e7ff;
    color:#1e3a8a;
    padding:5px 10px;
    border-radius:20px;
    font-size:13px;
    margin-bottom:10px;
}

</style>

</head>
<body>

<div class="header">
    <h2 class="page-title">All Properties</h2>
    <a href="admin.php" class="back-btn">← Back</a>
</div>

<div class="container">

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

    <img src="uploads/<?php echo $row['image']; ?>">

    <div class="card-body">

        <span class="id">
            Property ID : <?php echo $row['id']; ?>
        </span>

        <h3><?php echo $row['property_type']; ?></h3>

        <p class="info">
            📍 <?php echo $row['location']; ?>
        </p>

        <p class="price">
            ₹<?php echo $row['price']; ?>
        </p>

        <p class="info">
            📞 <?php echo $row['contact']; ?>
        </p>

        <p class="desc">
            <?php echo $row['description']; ?>
        </p>

    </div>

</div>

<?php
}
?>

</div>

</body>
</html>