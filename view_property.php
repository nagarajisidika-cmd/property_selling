<?php
include "connection.php";

if(isset($_GET['property_id']))
{
    $property_id = $_GET['property_id'];

    $sql = "SELECT * FROM property
            WHERE property_id='$property_id'";

    $result = mysqli_query($conn, $sql);

    if(!$result)
    {
        die("Query Error : " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);

    if(!$row)
    {
        die("Property Not Found");
    }
}
else
{
    die("Property ID Not Found");
}
?>


<html>
<head>
<meta charset="UTF-8">
<title>View Property</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:#f3f3f3;
    font-family:Arial;
    margin:0;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.container{
    width:100%;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.card{
    width:450px;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.header{
    display:flex;
    align-items:center;
    padding:12px;
}

.circle{
    width:45px;
    height:45px;
    border-radius:50%;
    background:#ddd;
    margin-right:10px;
}

.name{
    font-size:18px;
    font-weight:bold;
}

.image img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.details{
    padding:15px;
}

.price{
    font-size:22px;
    color:red;
    font-weight:bold;
}

.location{
    color:gray;
    margin-top:5px;
}

button{
    width:100%;
    padding:12px;
    background:#ff5722;
    border:none;
    color:white;
    font-size:17px;
    cursor:pointer;
    border-radius:10px;
    margin-top:15px;
}

button:hover{
    background:#e64a19;
}

.actions{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:15px;
    margin-top:15px;
    border-top:1px solid #ddd;
    padding-top:15px;
}

.actions form{
    display:inline;
    margin:0;
}

.icon-btn{
    width:auto !important;
    margin-top:0;
    background:#fff;
    color:#555;
    border:1px solid #ddd;
    padding:10px 15px;
    border-radius:8px;
    font-size:15px;
    cursor:pointer;
}

.icon-btn:hover{
    background:#ff5722;
    color:white;
}

@media(max-width:600px){
    .card{
        width:95%;
    }
}

</style>
</head>

<html>
<head>
<title>View Property</title>
</head>

<body>

<h2>Property Details</h2>

<img src="uploads/<?php echo $row['image']; ?>"
     width="300">

<p>
<b>Property Type :</b>
<?php echo $row['property_type']; ?>
</p>

<p>
<b>Location :</b>
<?php echo $row['location']; ?>
</p>

<p>
<b>Price :</b>
₹<?php echo $row['price']; ?>
</p>

<p>
<b>Contact :</b>
<?php echo $row['contact']; ?>
</p>

<p>
<b>Description :</b>
<?php echo $row['description']; ?>
</p>

</body>
</html>