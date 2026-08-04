<!DOCTYPE html>
<html>
<head>
<title>Add Property</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,Helvetica,sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:flex-start;
    padding:40px 0;
    overflow-y:auto;
    position:relative;
}

/* Background */

body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:url("https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1600") center center/cover no-repeat;
    filter:blur(8px);
    transform:scale(1.1);
    z-index:-2;
}

/* Dark Overlay */

body::after{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.3);
    z-index:-1;
}

/* Form */

form{
    width:420px;
    margin:20px 0;
}

h1{
    text-align:center;
    color:white;
    margin-bottom:20px;
    text-shadow:2px 2px 5px black;
}

input,
textarea{
    width:100%;
    padding:15px;
    margin:10px 0;
    border:none;
    outline:none;
    border-radius:30px;
    background:rgba(255,255,255,.2);
    backdrop-filter:blur(12px);
    color:white;
    font-size:16px;
}

input::placeholder,
textarea::placeholder{
    color:white;
}

textarea{
    height:120px;
    resize:none;
    border-radius:20px;
}

button{
    width:100%;
    padding:15px;
    margin:20px 0;
    border:none;
    border-radius:30px;
    background:#ff5722;
    color:white;
    font-size:18px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#e64a19;
    transform:scale(1.03);
}
</style>

</head>

<body>

<form action="save.php" method="POST" enctype="multipart/form-data">

<h1>Add Property</h1>

<input type="text"
name="owner_name"
placeholder="Owner Name"
required>

<input type="text"
name="pro_name"
placeholder="Property Name"
required>

<input type="text"
name="pro_type"
placeholder="Flat / House / Plot"
required>

<input type="text"
name="price"
placeholder="Price"
required>

<input type="text"
name="location"
placeholder="Location"
required>

<textarea
name="des"
placeholder="Description"></textarea>

<input type="file" name="image" required>


<button type="submit">
Upload Property
</button>

</form>

</body> 
</html> 