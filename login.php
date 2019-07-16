<html>


<body background="bg2.png">
</html>
<?php

$inuser = $_POST['user'];
$inpass=$_POST['pass'];

$servername = "localhost";
$username = "id3693240";
$password = "--enter the pass--";
$database="id36g";

$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql ="SELECT * FROM users WHERE user='$inuser'";
$result = $conn->query($sql);

$row=$result->fetch_assoc();

$serveruser=$row['user'];
$serverpass=$row['password'];

 echo $inpass;
 echo $serverpass;
 echo $inuser;
 echo $serveruser;
 
 if ($serveruser==$inuser&&$serverpass==$inpass)
 {
	 header('Location:wrgjerg');
 }
 else
 {
	 header('Location:qwcgerhg');
 }


?>