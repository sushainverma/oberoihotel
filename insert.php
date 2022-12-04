-+<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("colleges", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$aadhar = $_POST['aadhar'];
$email = $_POST['email'];
if($firstname !=''||$aadhar !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(firstname,lastname,aadhar,email) values ('$firstname', '$lastname', '$aadhar','$email')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>