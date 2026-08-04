<html>
<head>
<title>Property Admin Panel</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    overflow:hidden;
}



.background{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnWKdRQkezZpftQ96n0ld8JrZ8fnvyrWC5QiXvimHAVA&s=10") no-repeat center center;
    background-size:cover;
    filter:blur(5px);
    transform:scale(1.1);
    z-index:-2;
}



.overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
    z-index:-1;
}



.header{
    width:100%;
    height:80px;
    background:rgba(0,0,0,0.55);

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:0 60px;
}

.logo{
    color:#fff;
    font-size:45px;
    font-weight:bold;
}

.menu{
    display:flex;
    gap:35px;
}

.menu a{
    color:white;
    text-decoration:none;
    font-size:18px;
    transition:0.4s;
}

.menu a:hover{
    color:#00ffff;
}



.hero{
    height:calc(100vh - 80px);

    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;

    text-align:center;
    color:white;
}

.hero h1{
    font-size:75px;
    margin-bottom:20px;
}

.hero p{
    font-size:25px;
    margin-bottom:35px;
}

.btn{
    text-decoration:none;
    background:#00bcd4;
    color:white;
    padding:15px 35px;
    border-radius:40px;
    font-size:20px;
    transition:.4s;
}

.btn:hover{
    background:#0097a7;
}

</style>
</head>

<body>

<div class="background"></div>
<div class="overlay"></div>

<div class="header">

    <div class="logo">
        B&S
    </div>

    <div class="menu">
        <a href="add.php">UPLOAD PROPERTY</a>
        <a href="update.php">VIEW PROPERTY</a>
        <a href="delete_property.php">DELETE PROPERTY</a>
        <a href="view_property.php">VIEW PROPERTY</a>
        <a href="view_customer_request.php">VIEW CUSTOMER REQUEST</a>
    </div>

</div>

<div class="hero">
    <h1>Buying & Selling</h1>
    <p>Welcome to our dream house </p>
    <a href="#" class="btn">Explore Properties</a>
</div>

</body>
</html>
</html>