<?php

include "connection.php";

$sql = "INSERT INTO property
(owner_name, pro_name, pro_type, price, location, des, image)
VALUES

('Rahul Patil',
'Green Valley Plot',
'Residential Land',
'2500000',
'Nagpur, Maharashtra',
'Residential plot in a prime location with road access, water and electricity facilities.',
'land1.jpg'),

('Sneha Sharma',
'Sunrise Plot',
'Residential Land',
'3200000',
'Pune, Maharashtra',
'Well-developed residential land near schools, hospitals and shopping areas.',
'land2.jpg'),

('Amit More',
'Golden Farm Land',
'Agricultural Land',
'4500000',
'Mumbai, Maharashtra',
'Fertile agricultural land suitable for farming with water supply available.',
'land3.jpg'),

('Priya Deshmukh',
'River Side Plot',
'Residential Land',
'3800000',
'Nashik, Maharashtra',
'Beautiful residential plot near the riverside with peaceful surroundings.',
'land4.jpg'),

('Vijay Patil',
'Future City Plot',
'Commercial Land',
'6000000',
'Aurangabad, Maharashtra',
'Commercial land suitable for offices, shops and business development.',
'land5.jpg'),

('Rohan More',
'Highway Side Land',
'Commercial Land',
'7200000',
'Thane, Maharashtra',
'Commercial land located beside the highway with excellent connectivity.',
'land6.jpg'),

('Kiran Joshi',
'Green Farm',
'Agricultural Land',
'5500000',
'Kolhapur, Maharashtra',
'Large agricultural land with irrigation facility and fertile soil.',
'land7.jpg'),

('Neha Patil',
'Hill View Plot',
'Residential Land',
'3400000',
'Satara, Maharashtra',
'Residential plot with beautiful hill view and peaceful environment.',
'land8.jpg'),

('Sagar Shinde',
'Smart City Plot',
'Residential Land',
'2900000',
'Solapur, Maharashtra',
'Affordable residential land near schools, hospitals and market.',
'land9.jpg')";

if(mysqli_query($conn,$sql))
{
    echo "9 Lands Added Successfully";
}
else
{
    echo "Error : ".mysqli_error($conn);
}

?>