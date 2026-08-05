<?php
session_start();
include "connection.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

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

$sql = "SELECT * FROM property WHERE status='Approved'";

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
<meta charset="UTF-8">
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

.property-image{
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
    width:50px;
    height:50px;
    border-radius:50%;
    font-size:24px;
    cursor:pointer;
    box-shadow:0 3px 10px rgba(0,0,0,0.2);
    z-index:100;
    transition:0.3s;
}

.like-btn:hover{
    transform:scale(1.1);
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
	height:50px;
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
		height:50px;

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
		height:50px;

}

.feedback-btn:hover{
    background:#218838;
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
.whatsapp-btn{
    flex:1;
    padding:12px;
    background:#25D366;
    color:white;
    text-decoration:none;
    text-align:center;
    border-radius:8px;
    font-weight:bold;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:5px;
}

.whatsapp-btn:hover{
    background:#1ebe5d;
}


.heart-icon{
    width:50px ;
    height:50px ;
    max-width:40px;
    max-height:40px;
    vertical-align:middle;
    margin-right:3px;
}
.heartw-icon{
    width:50px ;
    height:50px ;
    max-width:40px;
    max-height:40px;
    vertical-align:middle;
    margin-right:3px;
}

</style>

</head>

<body>

<div class="header">
Available Properties
</div>

<div class="filter-bar">

<a href="view.php?type=All"><button>All</button></a>
<a href="house.php?type=House"><button>House</button></a>
<a href="flat.php?type=Flat"><button>Flat</button></a>
<a href="plot.php?type=Plot"><button>Plot</button></a>

</div>

<div class="container">

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

<?php
$user_name = $_SESSION['username'];

$liked = mysqli_query($conn,
"SELECT * FROM property_likes
 WHERE property_id='".$row['id']."'
 AND user_name='$user_name'");
?>

<form method="post">

<input type="hidden"
       name="property_id"
       value="<?php echo $row['id']; ?>">

<input type="hidden"
       name="property_name"
       value="<?php echo $row['property_type']; ?>">

<input type="hidden"
       name="seller_username"
       value="<?php echo $row['seller_username']; ?>">

<button type="submit"
        name="like"
        class="like-btn">

<?php
if(mysqli_num_rows($liked)>0)
{
?>
<img src="icons/heart.png" class="heart-icon">
<?php
}
else
{
?>
<img src="icons/heartw.png" class="heartw-icon">
<?php
}
?>
</button>

</form>

<img src="uploads/<?php echo $row['image']; ?>" class="property-image">
<div class="details">

<div class="type">
<?php echo $row['property_type']; ?>
</div>

<div class="location">
<img src="icons/lo.png" class="location-icon">
<?php echo $row['location']; ?>
</div>

<div class="price">
₹ <?php echo $row['price']; ?>
</div>

<div class="description">
<?php echo $row['description']; ?>
</div>

<div class="contact">
<img src="icons/call.png" class="call-icon">
 <?php echo $row['contact']; ?>
 


<?php
$mobile = preg_replace('/[^0-9]/','',$row['contact']);

$message = urlencode(
"Hello ".$row['seller_username'].
", I am interested in your ".$row['property_type'].
" property."
);
?>

<a href="https://wa.me/91<?php echo $mobile; ?>?text=<?php echo $message; ?>"
   target="_blank"
   class="whatsapp-btn">

   Contact on WhatsApp

</a>

</div>
<div class="button-group">

<form action="interest.php" method="post" style="flex:1;">

<input type="hidden"
       name="property_id"
       value="<?php echo $row['id']; ?>">

<input type="hidden"
       name="property_name"
       value="<?php echo $row['property_type']; ?>">

<input type="hidden"
       name="owner_name"
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