<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>About Us | Buying And Selling Property</title>


<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">



<style>


*{

margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;

}


body{

background:#f5f7fb;
color:#333;

}



.container{

width:90%;
margin:auto;
padding:70px 0;

}



.title{

text-align:center;
font-size:42px;
color:#0d47a1;
margin-bottom:45px;

}






/* ABOUT BANNER */


.banner{


height:75vh;



background:

linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),

url("https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1600&q=80");



background-size:cover;

background-position:center;



display:flex;

justify-content:center;

align-items:center;



text-align:center;

color:white;



}





.banner h1{


font-size:60px;

margin-bottom:20px;


}





.banner p{


font-size:22px;

max-width:850px;

line-height:1.7;


}







/* ABOUT COMPANY */



.about{


display:flex;

align-items:center;

gap:50px;

flex-wrap:wrap;


}




.about img{


width:45%;


border-radius:20px;


box-shadow:0 10px 30px rgba(0,0,0,.25);


}





.about-content{


flex:1;


}





.about-content h2{


font-size:35px;


color:#0d47a1;


margin-bottom:20px;


}





.about-content p{


font-size:18px;


line-height:1.9;


text-align:justify;


margin-bottom:18px;


}





.highlight{


color:#ff9800;


font-weight:bold;


}







@media(max-width:768px){


.banner h1{


font-size:40px;


}



.banner p{


font-size:18px;


}



.about img{


width:100%;


}


}


</style>


</head>


<body>






<!-- ABOUT BANNER -->


<section class="banner">


<div>


<h1>

About Buying And Selling Property

</h1>




<p>

Your trusted online platform for buying,
selling and discovering premium residential
and commercial properties.

</p>



</div>


</section>








<!-- ABOUT COMPANY -->


<section class="container">


<h1 class="title">

Who We Are

</h1>





<div class="about">



<img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=900&q=80">






<div class="about-content">



<h2>

Buying And Selling Property

</h2>






<p>


<span class="highlight">
Buying And Selling Property
</span>

is a modern online real estate platform
designed to make property buying and selling
simple, secure and transparent.


</p>






<p>


We provide detailed property information,
high-quality images, location details and
trusted listings to help customers make
better property decisions.


</p>






<p>


Our platform connects buyers and sellers
with a smooth digital experience. We provide
different property options including apartments,
villas, houses, offices and commercial spaces.


</p>






<p>


Our aim is to create a trusted marketplace
where people can easily find suitable properties
according to their needs and budget.


</p>




</div>


</div>



</section>
<!-- MISSION & VISION SECTION -->


<section class="container">


<h1 class="title">

Our Mission & Vision

</h1>




<div class="mission-container">



<div class="mission-card">


<i class="fa-solid fa-bullseye"></i>


<h2>

Our Mission

</h2>



<p>

Our mission is to provide a reliable and transparent
property platform where buyers and sellers can connect
easily.

We focus on providing accurate property details,
verified listings and a simple experience for every user.

</p>



</div>







<div class="mission-card">


<i class="fa-solid fa-eye"></i>


<h2>

Our Vision

</h2>



<p>

Our vision is to create a trusted digital real estate
platform that helps people discover their dream
properties and make smart investment decisions.

</p>



</div>




</div>


</section>









<!-- WHY CHOOSE US -->


<section class="why-section">


<div class="container">


<h1 class="title">

Why Choose Buying And Selling Property?

</h1>





<div class="why-container">






<div class="why-card">


<i class="fa-solid fa-house-circle-check"></i>


<h3>

Verified Properties

</h3>


<p>

We provide genuine property listings with
complete details, images and accurate information.

</p>


</div>








<div class="why-card">


<i class="fa-solid fa-shield-halved"></i>


<h3>

Safe & Secure

</h3>



<p>

A trusted platform that provides a secure
and transparent property searching experience.

</p>


</div>








<div class="why-card">


<i class="fa-solid fa-location-dot"></i>


<h3>

Prime Locations

</h3>



<p>

Explore properties available in popular
residential and commercial locations.

</p>


</div>








<div class="why-card">


<i class="fa-solid fa-handshake"></i>


<h3>

Trusted Connection

</h3>



<p>

Helping buyers and sellers connect easily
for better property opportunities.

</p>


</div>








<div class="why-card">


<i class="fa-solid fa-clock"></i>


<h3>

Save Time

</h3>



<p>

Find suitable properties quickly with
organized property information.

</p>


</div>








<div class="why-card">


<i class="fa-solid fa-chart-line"></i>


<h3>

Smart Investment

</h3>



<p>

Discover valuable property options for future
growth and better investment decisions.

</p>


</div>






</div>


</div>


</section>








<!-- PART 2 CSS -->


<style>



/* MISSION VISION */


.mission-container{


display:flex;

gap:40px;

justify-content:center;

flex-wrap:wrap;


}





.mission-card{


width:45%;


background:white;


padding:40px;


border-radius:20px;


text-align:center;


box-shadow:0 10px 25px rgba(0,0,0,.15);


transition:.4s;


}





.mission-card:hover{


transform:translateY(-10px);


}





.mission-card i{


font-size:50px;


color:#ff9800;


margin-bottom:20px;


}





.mission-card h2{


color:#0d47a1;


margin-bottom:15px;


}





.mission-card p{


font-size:17px;


line-height:1.8;


}







/* WHY CHOOSE */


.why-section{


background:#eaf3ff;


}





.why-container{


display:grid;


grid-template-columns:repeat(auto-fit,minmax(250px,1fr));


gap:30px;


}





.why-card{


background:white;


padding:35px;


border-radius:20px;


text-align:center;


box-shadow:0 8px 20px rgba(0,0,0,.15);


transition:.4s;


}





.why-card:hover{


background:#0d47a1;


color:white;


transform:translateY(-10px);


}





.why-card i{


font-size:45px;


color:#ff9800;


margin-bottom:20px;


}





.why-card h3{


font-size:23px;


color:#0d47a1;


margin-bottom:15px;


}





.why-card:hover h3{


color:white;


}





.why-card p{


line-height:1.7;


}






@media(max-width:768px){


.mission-card{


width:100%;


}


}


</style>
<!-- COMPANY STATISTICS -->


<section class="stats-section">


<div class="container">


<h1 class="title stats-heading">

Our Growth Statistics

</h1>




<div class="stats-container">



<div class="stats-card">

<i class="fa-solid fa-users"></i>

<h2>5000+</h2>

<p>Happy Clients</p>

</div>




<div class="stats-card">

<i class="fa-solid fa-building"></i>

<h2>2500+</h2>

<p>Properties Listed</p>

</div>




<div class="stats-card">

<i class="fa-solid fa-location-dot"></i>

<h2>150+</h2>

<p>Locations Covered</p>

</div>




<div class="stats-card">

<i class="fa-solid fa-award"></i>

<h2>10+</h2>

<p>Years Experience</p>

</div>



</div>


</div>


</section>









<!-- PROPERTY GALLERY -->


<section class="container">


<h1 class="title">

Property Gallery

</h1>




<p class="gallery-description">

Explore our premium collection of residential and commercial
properties including luxury homes, apartments, villas and
office spaces.

</p>






<div class="gallery-container">






<div class="gallery-card">


<img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=900&q=80">


<h3>

Luxury Villa

</h3>


</div>








<div class="gallery-card">


<img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80">


<h3>

Modern Apartment

</h3>


</div>








<div class="gallery-card">


<img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=900&q=80">


<h3>

Premium Interior

</h3>


</div>








<div class="gallery-card">


<img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=900&q=80">


<h3>

Beautiful House

</h3>


</div>








<div class="gallery-card">


<img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=900&q=80">


<h3>

Dream Home

</h3>


</div>








<div class="gallery-card">


<img src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?auto=format&fit=crop&w=900&q=80">


<h3>

Commercial Property

</h3>


</div>






</div>



</section>









<!-- OUR ACHIEVEMENTS -->


<section class="achievement-section">


<div class="container">


<h1 class="title achievement-heading">

Our Achievements

</h1>






<div class="achievement-container">





<div class="achievement-card">


<i class="fa-solid fa-trophy"></i>


<h3>

Trusted Property Platform

</h3>


<p>

Successfully helping people to find
suitable properties with confidence.

</p>


</div>








<div class="achievement-card">


<i class="fa-solid fa-house-circle-check"></i>


<h3>

Verified Property Listings

</h3>


<p>

Providing accurate property details and
quality information.

</p>


</div>








<div class="achievement-card">


<i class="fa-solid fa-star"></i>


<h3>

Quality Service

</h3>


<p>

Focused on providing a simple and
transparent property experience.

</p>


</div>



</div>


</div>


</section>


<style>


/* STATISTICS */


.stats-section{


background:#0d47a1;


padding:70px 0;


}



.stats-heading{


color:white;


}



.stats-container{


display:grid;


grid-template-columns:repeat(auto-fit,minmax(220px,1fr));


gap:30px;


}





.stats-card{


background:white;


padding:35px;


border-radius:20px;


text-align:center;


box-shadow:0 10px 25px rgba(0,0,0,.25);


}





.stats-card i{


font-size:45px;


color:#ff9800;


}




.stats-card h2{


font-size:42px;


color:#0d47a1;


margin:15px 0;


}








/* GALLERY */


.gallery-description{


text-align:center;


font-size:18px;


line-height:1.8;


margin-bottom:40px;


}






.gallery-container{


display:grid;


grid-template-columns:repeat(auto-fit,minmax(280px,1fr));


gap:30px;


}






.gallery-card{


background:white;


border-radius:20px;


overflow:hidden;


box-shadow:0 10px 20px rgba(0,0,0,.15);


transition:.4s;


}





.gallery-card:hover{


transform:translateY(-10px);


}





.gallery-card img{


width:100%;


height:250px;


object-fit:cover;


}





.gallery-card h3{


text-align:center;


padding:20px;


color:#0d47a1;


}









/* ACHIEVEMENTS */


.achievement-section{


background:white;


padding:70px 0;


}





.achievement-heading{


color:#0d47a1;


}





.achievement-container{


display:grid;


grid-template-columns:repeat(auto-fit,minmax(280px,1fr));


gap:30px;


}






.achievement-card{


background:white;


padding:35px;


border-radius:20px;


text-align:center;


border:2px solid #e3f2fd;


box-shadow:0 8px 20px rgba(0,0,0,.15);


transition:.4s;


}





.achievement-card:hover{


background:#e3f2fd;


transform:translateY(-10px);


}





.achievement-card i{


font-size:50px;


color:#0d47a1;


margin-bottom:20px;


}





.achievement-card h3{


font-size:23px;


color:#0d47a1;


margin-bottom:15px;


}





.achievement-card p{


color:#333;


line-height:1.7;


}



</style>
<!-- FOOTER -->


<footer>


<div class="footer-content">



<h2>

Buying And Selling <span>Property</span>

</h2>





<p>

Your trusted online platform for buying and
selling properties with a simple and secure process.

</p>






<div class="social-links">


<a href="#">

<i class="fa-brands fa-facebook"></i>

</a>




<a href="#">

<i class="fa-brands fa-instagram"></i>

</a>





<a href="#">

<i class="fa-brands fa-twitter"></i>

</a>





<a href="#">

<i class="fa-brands fa-linkedin"></i>

</a>



</div>







<p class="copyright">

© 2026 Buying And Selling Property. All Rights Reserved.

</p>





</div>


</footer>









<!-- PART 4 CSS -->


<style>


/* FOOTER */


footer{


background:#0d47a1;


color:white;


text-align:center;


padding:45px 20px;


}







.footer-content h2{


font-size:36px;


margin-bottom:15px;


}





.footer-content h2 span{


color:#ff9800;


}






.footer-content p{


font-size:17px;


line-height:1.7;


margin:15px 0;


}







.social-links{


margin:25px 0;


}






.social-links a{


display:inline-flex;


justify-content:center;


align-items:center;


width:45px;


height:45px;


background:white;


color:#0d47a1;


border-radius:50%;


margin:8px;


font-size:22px;


transition:.3s;


}






.social-links a:hover{


background:#ff9800;


color:white;


transform:translateY(-5px);


}







.copyright{


border-top:1px solid rgba(255,255,255,.4);


padding-top:20px;


font-size:15px;


}



</style>





</body>

</html>