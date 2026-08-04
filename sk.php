<?php
include "connection.php";
?>

<html>
<head>
<title>Online Property Buying & Selling</title>

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


header{
    background:linear-gradient(135deg,#0f766e,#14b8a6);
    color:white;
    padding:15px 30px;
    display:flex;
    align-items:center;
    justify-content:center;
    position:relative;
}

.logo{
    width:80px;
    height:80px;
    border-radius:50%;
    border:3px solid white;
    position:absolute;
    left:30px;
}

header h1{
    font-size:38px;
    text-align:center;
    width:100%;
}


nav{
    background:#222;
    display:flex;
    justify-content:center;
}

nav a{
    color:white;
    text-decoration:none;
    padding:15px 25px;
    transition:0.3s;
}

nav a:hover{
    background:#14b8a6;
}


.hero{
    height:500px;
    background:url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1600')
    no-repeat center center/cover;

    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero-content{
    background:rgba(0,0,0,0.6);
    padding:40px;
    border-radius:15px;
    color:white;
}

.hero-content h2{
    font-size:45px;
    margin-bottom:15px;
}

.hero-content p{
    font-size:20px;
    margin-bottom:20px;
}


.btn{
    display:inline-block;
    padding:12px 25px;
    background:#14b8a6;
    color:white;
    text-decoration:none;
    border-radius:30px;
    margin:10px;
    transition:0.3s;
}

.btn:hover{
    background:#0f766e;
}


.container{
    width:90%;
    margin:50px auto;
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
}

.card{
    width:300px;
    background:white;
    padding:25px;
    text-align:center;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card h3{
    color:#0f766e;
    margin-bottom:15px;
}

.card p{
    color:#555;
    line-height:1.6;
}


footer{
    background:#222;
    color:white;
    padding:15px;
    margin-top:40px;
    font-size:18px;
    font-weight:bold;
}


@media(max-width:768px){

    header{
        flex-direction:column;
        text-align:center;
    }

    .logo{
        position:static;
        margin-bottom:10px;
    }

    header h1{
        font-size:28px;
    }

    nav{
        flex-wrap:wrap;
    }

    .hero-content h2{
        font-size:32px;
    }
}

</style>
</head>

<body>

<header>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7w45arW3e49npcLkQ3Dy6nxf4pftKOvgxWzVAkTi4-w&s=10"
         class="logo">

    <h1>🏠 Online Property Buying & Selling</h1>

</header>

<nav>
    <a href="index.php">Home</a>
    <a href="register.php">Sign Up</a>
    <a href="login.php">Login</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
</nav>

<section class="hero">

    <div class="hero-content">

        <h2>Find Your Dream Property</h2>

        <p>Buy, Sell & Rent Properties Easily</p>

        <a href="register.php" class="btn">Get Started</a>

        <a href="login.php" class="btn">Login</a>

    </div>

</section>

<div class="container">

    <div class="card">
        <h3>🏡 Buy Property</h3>
        <p>Search and buy houses, flats, plots and commercial properties.</p>
    </div>

    <div class="card">
        <h3>💰 Sell Property</h3>
        <p>List your property and connect with genuine buyers quickly.</p>
    </div>

    <div class="card">
        <h3>🔍 Property Search</h3>
        <p>Filter properties by city, location, price and property type.</p>
    </div>

    <div class="card">
        <h3>📞 Direct Contact</h3>
        <p>Contact property owners directly without any hassle.</p>
    </div>

</div>

<footer>
    <marquee scrollamount="8">
        🏠 © 2026 Online Property Buying & Selling System |
        Welcome to Our Property Portal 🏠
    </marquee>
</footer>

</body>
</html>