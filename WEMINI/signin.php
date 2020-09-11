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
$user = $_POST['userid'];
$password = $_POST['psw'];
$sql = "SELECT * FROM register WHERE userid='$user' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
        include('welcome.HTML');
    }
 else {
    echo 'No such user found';
}



mysqli_close($conn);

?>