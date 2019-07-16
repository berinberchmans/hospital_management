<html>


<body background="bg2.png">
</html>
<?php


$inuser = $_POST["user"];
$inpass=$_POST["pass"];
$servername = "localhost";
$username = "id369324";
$password = "32992";
$database="id369324";


$connect = new mysqli("localhost","user","password","database");

$query=$mysqli_query("SELECT * FROM 'users' WHERE 'user'='$inuser'");
$querypass=$mysqli_query("SELECT * FROM 'users' WHERE 'password'='$inpass'");


$result=$mysqli->query($query);
$resultpass=$mysqli->query($querypass);


$row=$result->fetch_assoc();
$rowpass=$resultpass->fetch_assoc();


$serveruser=$row['user'];
$serverpass=$row['password'];

    echo $inpass;
	echo $serverpass;
	echo htmlentities($row['serveruser']);

/*

if ($serveruser&&$serverpass)
{
	if(!$result){
		die("username or password is invalid");
	}
	echo"<br><center>Database output</b></bcenter><br><br>";
	mysqli_close();
	echo $inpass;
	echo $serverpass;
	
if($inpass==$serverpass){
	header('Location: home.php');
	
} else {

	
	//header('Location: faillogin.php');

}
}


*/


?>