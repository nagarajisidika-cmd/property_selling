<?php

include "connection.php";


$sql = "INSERT INTO pro
(name, pro_name, pro_type, price, location, des, image)
VALUES

('Rahul Patil',
'Royal Green Villa',
'Independent House',
'7500000',
'Nagpur, Maharashtra',
'Beautiful independent house with 3 bedrooms, 2 bathrooms, parking area and garden space. Located near school and market.',
'house1.jpg'),


('Sneha Sharma',
'Luxury Family House',
'2 BHK House',
'4500000',
'Pune, Maharashtra',
'Spacious 2 BHK house with modern design, good ventilation and peaceful residential area.',
'house2.jpg'),


('Amit More',
'Modern Dream Home',
'3 BHK Villa',
'9500000',
'Mumbai, Maharashtra',
'Premium villa with elegant interiors, large rooms, garden area and modern facilities.',
'house3.jpg'),


('Priya Deshmukh',
'Green Valley House',
'2 BHK Independent House',
'5500000',
'Nashik, Maharashtra',
'Comfortable family home with beautiful surroundings, parking space and well designed rooms.',
'house4.jpg'),


('Vijay Patil',
'Sunrise Residency',
'1 BHK House',
'3200000',
'Aurangabad, Maharashtra',
'Affordable house with bedroom, kitchen, bathroom and nearby daily facilities.',
'house5.jpg'),


('Rohan More',
'Elegant Corner House',
'3 BHK House',
'8500000',
'Thane, Maharashtra',
'Spacious corner house with balcony, parking, modern kitchen and attractive interior design.',
'house6.jpg'),


('Kiran Joshi',
'Happy Home Villa',
'4 BHK Villa',
'12000000',
'Kolhapur, Maharashtra',
'Luxury villa with multiple bedrooms, large living area, garden and premium facilities.',
'house7.jpg'),


('Neha Patil',
'Peaceful Garden House',
'Independent House',
'6500000',
'Satara, Maharashtra',
'Beautiful house surrounded by greenery with spacious rooms and peaceful environment.',
'house8.jpg'),


('Sagar Shinde',
'Smart City Home',
'2 BHK Modern House',
'5000000',
'Solapur, Maharashtra',
'Modern home with smart facilities, attractive design and comfortable living space.',
'house9.jpg')";


if(mysqli_query($conn,$sql))
{
    echo "9 Properties Added Successfully";
}
else
{
    echo "Error : ".mysqli_error($conn);
}


?>