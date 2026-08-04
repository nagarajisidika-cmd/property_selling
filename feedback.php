<html>
<head>

<meta charset="UTF-8">
<title>Buyer Feedback</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,Helvetica,sans-serif;
}

body{
background:#f5f5f5;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
width:450px;
background:#fff;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

h2{
text-align:center;
margin-bottom:20px;
color:#ff5722;
}

label{
font-weight:bold;
display:block;
margin-top:15px;
}

input,
textarea,
select{
width:100%;
padding:10px;
margin-top:5px;
border:1px solid #ccc;
border-radius:8px;
font-size:16px;
}

textarea{
resize:none;
height:120px;
}

button{
width:100%;
padding:12px;
margin-top:20px;
background:#ff5722;
color:white;
border:none;
border-radius:8px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#e64a19;
}

</style>

</head>

<body>

<div class="container">

<h2>Buyer Feedback</h2>

<form action="insert_feedback.php" method="POST">

<label>Buyer Name</label>
<input type="text" name="buyer_name" required>

<label>Property Name</label>
<input type="text" name="property_name" required>

<label>Rating</label>

<select name="rating" required>
<option value="">Select Rating</option>
<option value="1">⭐</option>
<option value="2">⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="5">⭐⭐⭐⭐⭐</option>
</select>

<label>Your Feedback</label>
<textarea name="feedback" placeholder="Write your feedback here..." required></textarea>

<button type="submit" name="submit">
    Submit Feedback
</button>
</form>

</div>

</body>
</html> 