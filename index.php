
<!DOCTYPE html>
<html>
<head>
<title>ROOM BOOKING</title>
<style>
table,th,td
{
border:1px white;
border-collapse:collapse;
padding:12px;
}
th
{
text-align:center;
}
input[type=text], select {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color:Red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: yellow;
}

div {
width: 40%;
    border-radius: 0.5px;
    background-color: brown;
    padding: 2px;
}
</style>
<table>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"><a href="Overview.html">Overview</a></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>

<th style="background-color:white"><a href="HMS.html">Home</a></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>

<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"><a href="Menu.html">Food Menu</a></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>

<th style="background-color:white"><a href="Rooms.html">Room Tariffs</a></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>

<th style="background-color:white"><a href="Contact.html">Contact Us</a></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>

<th style="background-color:white"><a href="Review.html">Review</a></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>
<th style="background-color:white"></th>

</table>

<body style="background-color:orange">
<br/>
<center>
<h1>REGISTRATION</h1>
</center>
<center>
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">

<h1>FORM</h1>

</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->

<label>FIRST NAME:</label>
<input class="input" name="firstname" type="text" value="">
<label>LAST NAME:</label>
<input class="input" name="lastname" type="text" value="">
<label>AADHAR NUMBER:</label>
<input class="input" name="aadhar" type="text" value="">
<label>EMAIL:</label>
<input class="input" name="email" type="text" value="">

<input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>