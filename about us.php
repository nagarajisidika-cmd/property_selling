<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f4f7fc;
}

.header{
    background:#1e3a8a;
    color:white;
    text-align:center;
    padding:40px;
}

.header h1{
    font-size:40px;
}

.header p{
    margin-top:10px;
    font-size:18px;
}

.container{
    width:90%;
    max-width:1200px;
    margin:40px auto;
}

.about-box{
    background:white;
    padding:35px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.about-box h2{
    color:#1e3a8a;
    margin-bottom:20px;
}

.about-box p{
    font-size:18px;
    line-height:30px;
    color:#444;
    text-align:justify;
}

.section{
    display:flex;
    justify-content:space-between;
    gap:20px;
    margin-top:35px;
    flex-wrap:wrap;
}

.card{
    flex:1;
    min-width:250px;
    background:white;
    padding:25px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card h3{
    color:#1e3a8a;
    margin-bottom:15px;
}

.card p{
    color:#555;
    line-height:25px;
}

.footer{
    margin-top:50px;
    background:#1e3a8a;
    color:white;
    text-align:center;
    padding:20px;
}
.icon{
    width:20px;
    height:20px;
    vertical-align:middle;
    margin-right:8px;
}
.back-btn{
    position:absolute;
    top:20px;
    left:20px;
    background:white;
    color:#0d6efd;
    border:none;
    padding:10px 18px;
    border-radius:8px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    box-shadow:0 3px 10px rgba(0,0,0,0.2);
}

.back-btn:hover{
    background:#e9ecef;
}
.header{
    position:relative;
}


@media(max-width:768px){

.section{
    flex-direction:column;
}

}

</style>

</head>

<body>

<div class="header">
<a href="ho.php" class="back-btn">← Back</a><h1>Contact Us</h1>

    <h1>About Us</h1>
    <p>BUYING & SELLING</p>
</div>

<div class="container">

<div class="about-box">

<h2>Who We Are</h2>

<p>
The <b> Buying and Selling </b> is a web-based platform
designed to simplify the process of buying and selling properties.
Our website connects property owners and buyers on a single platform.
Sellers can upload property details with images, price, and location,
while buyers can easily browse available properties, view complete details,
and send interest requests directly to the seller.
This system provides a simple, secure, and user-friendly experience,
saving both time and effort for buyers and sellers.
</p>

</div>

<div class="section">

<div class="card">
    <h3>
        <img src="icons/home.png" alt="Home Icon" class="icon">
        Our Mission
    </h3>
 
<p>
To provide a trusted and easy platform where people can buy and sell
properties quickly without unnecessary complications.
</p>
</div>

<div class="card">
<h3>
        <img src="icons/vision.png" alt="vision" class="icon">
 Our Vision</h3>
<p>
To become a reliable online property marketplace that helps users
find their dream home or sell their property with confidence.
</p>
</div>

<div class="card">
<h3>        <img src="icons/star.png" alt="star" class="icon">

 Our Services</h3>
<p>
• Property Listing<br>
• Property Search<br>
• Buyer Request System<br>
• Seller Approval<br>
• Secure Communication
</p>
</div>

</div>

</div>

<div class="footer">
<h3>BUYING & SELLING </h3>
<p>Find Your Dream Property with Ease.</p>
<p><img src="icons/copyright.png" alt="copyright"class="icon">2026 All Rights Reserved.</p>
</div>

</body>
</html> 