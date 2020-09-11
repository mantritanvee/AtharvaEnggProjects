<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) 
{
    die("Connection failed: " .mysql_error());
} 

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$userid = $_POST['UserId'];
$password = $_POST['Password'];
$bank = $_POST['Bank'];
$email = $_POST['email'];
$gender = $_POST['sex'];
$city = $_POST['City'];


$sql = "INSERT INTO register (first,lastname,userid,password,bank,emailid,gender,city) VALUES ('$fname','$lname','$userid','$password','$bank','$email','$gender','$city')";
$result = mysqli_query($conn,$sql);

if ($result){
	include('signin.html');
} else {
	echo 'Error in Registering';
}

mysqli_close($conn);

?>