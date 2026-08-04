<?php
session_start();
include "connection.php";

if(isset($_POST['like']))
{
    $property_id     = $_POST['property_id'];
    $property_name   = $_POST['property_name'];
    $seller_username = $_POST['seller_username'];
    $user_name       = $_SESSION['username'];

    $check = mysqli_query($conn,
    "SELECT * FROM property_likes
     WHERE property_id='$property_id'
     AND user_name='$user_name'");

    if(mysqli_num_rows($check)==0)
    {
        mysqli_query($conn,
        "INSERT INTO property_likes
        (
            property_id,
            property_name,
            seller_username,
            user_name
        )
        VALUES
        (
            '$property_id',
            '$property_name',
            '$seller_username',
            '$user_name'
        )");
    }
}

$type = "";

if(isset($_GET['type']))
{
    $type = $_GET['type'];
}

$sql = "SELECT * FROM property
        WHERE status='Approved'";

if($type != "" && $type != "All")
{
    $sql .= " AND property_type LIKE '%$type%'";
}

$sql .= " ORDER BY id DESC";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Property Listings</title>

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

.header{
background:#1e3c72;
color:white;
text-align:center;
padding:20px;
font-size:30px;
font-weight:bold;
}

.filter-bar{
text-align:center;
padding:20px;
background:white;
}

.filter-bar a{
text-decoration:none;
}

.filter-bar button{
padding:10px 20px;
margin:5px;
border:none;
background:#1e3c72;
color:white;
border-radius:5px;
cursor:pointer;
font-weight:bold;
}

.filter-bar button:hover{
background:#ff5722;
}

.container{
width:95%;
margin:30px auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:25px;
}

.card{
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
position:relative;
}

.card img{
width:100%;
height:250px;
object-fit:cover;
}

.like-btn{
position:absolute;
top:15px;
right:15px;
background:white;
border:none;
width:45px;
height:45px;
border-radius:50%;
font-size:22px;
cursor:pointer;
}

.details{
padding:15px;
}

.type{
font-size:24px;
font-weight:bold;
margin-bottom:10px;
}

.location{
margin-bottom:10px;
color:#555;
}

.price{
font-size:25px;
font-weight:bold;
color:green;
margin-bottom:10px;
}

.description{
margin-bottom:10px;
color:#666;
}

.contact{
font-weight:bold;
margin-bottom:15px;
}

.button-group{
display:flex;
gap:10px;
}

.interest-btn{
flex:1;
padding:12px;
background:#ff5722;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:bold;
}

.view-btn{
flex:1;
padding:12px;
background:#2196f3;
color:white;
text-decoration:none;
text-align:center;
border-radius:8px;
font-weight:bold;
}
.feedback-btn{
    flex:1;
    padding:12px;
    background:#28a745;
    color:white;
    text-decoration:none;
    text-align:center;
    border-radius:8px;
    font-weight:bold;
}

.feedback-btn:hover{
    background:#218838;
}

</style>
</head>

<body>

<div class="header">
Available Properties
</div>

<div class="filter-bar">

<a href="view.php?type=All">
<button>All</button>
</a>

<a href="land.php?type=Land">
<button>Land</button>
</a>

<a href="house.php?type=House">
<button>House</button>
</a>

<a href="flat.php?type=Flat">
<button>Flat</button>
</a>

<a href="plot.php?type=Plot">
<button>Plot</button>
</a>

</div>

<div class="container">

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

<f<form action="interest.php" method="POST">

<input type="hidden"
name="property_id"
value="<?php echo $row['id']; ?>">

<input type="hidden"
name="property_name"
value="<?php echo $row['property_type']; ?>">

<input type="hidden"
name="owner_name"
value="<?php echo $row['seller_username']; ?>">



</form>
</button>

</form>

<img src="uploads/<?php echo $row['image']; ?>">

<div class="details">

<div class="type">
<?php echo $row['property_type']; ?>
</div>

<div class="location">
 <?php echo $row['location']; ?>
</div>

<div class="price">
<?php echo $row['price']; ?>
</div>

<div class="description">
<?php echo $row['description']; ?>
</div>

<div class="contact">
<?php echo $row['contact']; ?>
</div>

<div class="button-group">

<form action="interest.php" method="post" style="flex:1;">

<input type="hidden" name="property_id"
value="<?php echo $row['id']; ?>">

<input type="hidden" name="property_name"
value="<?php echo $row['property_type']; ?>">

<input type="hidden" name="owner_name"
value="<?php echo $row['seller_username']; ?>">

<input type="submit"
name="send_request"
value="Interested"
class="interest-btn">

</form>

<a href="property_details.php?id=<?php echo $row['id']; ?>"
class="view-btn">
View Details
</a>

<a href="feedback.php?property_name=<?php echo urlencode($row['property_type']); ?>"
class="feedback-btn">
Feedback
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