<?php
session_start();
include "connection.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM property");
?>

<!DOCTYPE html>
<html>
<head>
<title>My Properties</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#eef2f7;
    padding:30px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

h2{
    color:#1e3a8a;
    font-size:35px;
}

.back-btn{
    background:#0f766e;
    color:white;
    text-decoration:none;
    padding:12px 20px;
    border-radius:8px;
    font-weight:bold;
}

.back-btn:hover{
    background:#115e59;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(350px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(0,0,0,0.15);
}

.card img{
    width:100%;
    height:240px;
    object-fit:cover;
}

.card-body{
    padding:20px;
}

.property-id{
    display:inline-block;
    background:#dbeafe;
    color:#1d4ed8;
    padding:6px 12px;
    border-radius:20px;
    font-size:13px;
    margin-bottom:12px;
}

.type{
    color:#1e3a8a;
    font-size:24px;
    font-weight:bold;
    margin-bottom:10px;
}

.info{
    margin:8px 0;
    color:#475569;
    font-size:15px;
}

.price{
    color:#16a34a;
    font-size:24px;
    font-weight:bold;
    margin:12px 0;
}

.description{
    color:#334155;
    line-height:1.6;
    margin-top:10px;
}

.status{
    margin-top:15px;
    display:inline-block;
    padding:8px 15px;
    border-radius:8px;
    font-weight:bold;
    background:#dcfce7;
    color:#15803d;
}

.btns{
    display:flex;
    gap:10px;
    margin-top:20px;
}

.edit,
.delete{
    flex:1;
    text-align:center;
    padding:12px;
    text-decoration:none;
    color:white;
    border-radius:8px;
    font-weight:bold;
    transition:0.3s;
}

.edit{
    background:#2563eb;
}

.edit:hover{
    background:#1d4ed8;
}

.delete{
    background:#dc2626;
}

.delete:hover{
    background:#b91c1c;
}
.location-icon{
    width:10px ;
    height:10px ;
    max-width:15px;
    max-height:15px;
    vertical-align:middle;
    margin-right:3px;
}
.call-icon{
    width:10px ;
    height:10px ;
    max-width:15px;
    max-height:15px;
    vertical-align:middle;
    margin-right:3px;
}

</style>

</head>
<body>

<div class="header">
    <h2>My Properties</h2>
    <a href="seller.php" class="back-btn">← Back</a>
</div>

<div class="container">

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

    <img src="uploads/<?php echo $row['image']; ?>">

    <div class="card-body">

        <span class="property-id">
            Property ID : <?php echo $row['id']; ?>
        </span>

        <div class="type">
            <?php echo $row['property_type']; ?>
        </div>

      <div class="location">
<img src="icons/lo.png" class="location-icon">
<?php echo $row['location']; ?>
</div>

        <div class="price">
            ₹<?php echo $row['price']; ?>
        </div>

       <div class="contact">
<img src="icons/call.png" class="call-icon">
 <?php echo $row['contact']; ?>
</div> 

        <div class="description">
            <?php echo $row['description']; ?>
        </div>

        <div class="status">
            Status : <?php echo $row['status']; ?>
        </div>

        <div class="btns">

            <a class="edit"
            href="edit_property.php?id=<?php echo $row['id']; ?>">
            Edit
            </a>

            <a class="delete"
            href="delete_property.php?id=<?php echo $row['id']; ?>"
            onclick="return confirm('Are you sure you want to delete this property?')">
            Delete
            </a>

        </div>

    </div>

</div>

<?php
}
?>

</div>

</body>
</html>