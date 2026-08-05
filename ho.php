<html>
<head>
<title>Property Buying & Selling</title>



<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f4f6f9;
}


.background{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa0gh7iI_m2KBnuxY0JMBDKpNmiFrMe9UoIrFcCQte1Q&s=10") no-repeat center center;
    background-size:cover;
    z-index:-2;
}

.overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.55);
    z-index:-1;
}


.header{
    width:100%;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(0,0,0,0.5);
}

.logo{
    color:white;
    font-size:40px;
    font-weight:bold;
}

.menu{
    display:flex;
    gap:30px;
}

.menu a{
    color:white;
    text-decoration:none;
    font-size:18px;
    transition:0.3s;
}

.menu a:hover{
    color:#00ffff;
}


.hero{
    height:90vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
    padding:20px;
}

.hero h1{
    font-size:70px;
    margin-bottom:15px;
}

.hero h2{
    font-size:35px;
    margin-bottom:20px;
    color:#00ffff;
}

.hero p{
    width:70%;
    font-size:22px;
    line-height:35px;
    margin-bottom:35px;
}

.btns{
    display:flex;
    gap:20px;
}

.btn{
    padding:15px 35px;
    text-decoration:none;
    border-radius:30px;
    font-size:18px;
    color:white;
    transition:0.4s;
}

.owner{
    background:#00bcd4;
}

.customer{
    background:#ff5722;
}

.btn:hover{
    transform:translateY(-5px);
}


.section-title{
    text-align:center;
    font-size:40px;
    color:white;
    margin-top:30px;
    margin-bottom:30px;
}

.container{
    width:90%;
    margin:auto;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:25px;
    margin-bottom:50px;
}

.card{
    width:300px;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.3);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-10px);
}

.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.card-content{
    padding:20px;
    text-align:center;
}

.card-content h3{
    color:#0f766e;
    margin-bottom:10px;
}

.card-content p{
    color:#555;
    line-height:1.6;
}


footer{
    background:#111;
    color:white;
    text-align:center;
    padding:20px;
    font-size:18px;
}

</style>
</head>

<body>

<div class="background"></div>
<div class="overlay"></div>


<div class="header">

    <div class="logo">B&S</div>

    <div class="menu">
        <a href="home.php">HOME</a>
        <a href="about us.php">ABOUT</a>
        <a href="CONTACT.php">CONTACT</a>
		<a href="view_feedback.php">FEEDBACK</a>
    </div>

</div>


<div class="hero">

    <h1>BUYING & SELLING</h1>

    <h2>Find Your Dream Property</h2>

    <p>
        Discover the best homes, apartments, villas and commercial
        properties. Buy, Sell or Rent with confidence and make
        your next move easier than ever.
    </p>

    

</div>


<h2 class="section-title">Featured Properties</h2>

<div class="container">

    <div class="card">
		  <a href ="log.php">
        <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=600" alt="">
        <div class="card-content">
		<h3>Admin</h3></a>
        </div>
    </div>

    <div class="card">
	  <a href="register.php">
        <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=600" alt="">
        <div class="card-content">
		<h3>Seller</h3></a>
        </div>
    </div>

	
    <div class="card">
	    <a href="register1.php">
        <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?w=600" alt="">
        <div class="card-content">
     <h3>Buyer</h3></a>
        </div>
    </div>

    </div>

</div>


<h2 class="section-title">Our Services</h2>

<div class="container">

    <div class="card">
        <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=600" alt="">
        <div class="card-content">
            <h3>Buy Property</h3>
            <p>Find houses, flats, villas, plots and commercial spaces.</p>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1460317442991-0ec209397118?w=600" alt="">
        <div class="card-content">
            <h3>Sell Property</h3>
            <p>List your property and reach thousands of buyers.</p>
        </div>
    </div>

    

    <div class="card">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600" alt="">
        <div class="card-content">
            <h3>Direct Contact</h3>
            <p>Connect directly with owners and finalize deals easily.</p>
        </div>
    </div>

</div>


<footer>
    © 2026 Online Property Buying & Selling System | All Rights Reserved
</footer>

</body>
</html>