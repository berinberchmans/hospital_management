<html>


<body background="bg2.png">
</html>

<?php

$inuser2 = $_POST['user2'];
$inpass2=$_POST['pass2'];
$inname = $_POST['name2'];
$insex= $_POST['sex2'];
$inphno=$_POST['phno2'];

$servername = "localhost";
$username = "id369324";
$password = "3298b";
$database="id36932";

$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="INSERT INTO users(user,password,name,sex,phone) VALUES('$inuser2','$inpass2','$inname','$insex','$inphno')";

 if($conn->query($sql)=== TRUE)
 {
	 header('Location:');
 }
 else
 {
	 header('Location:');
 }


?>