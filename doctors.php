<html>


<body background="bg2.png">
<div align=center>
<br>
<br>
<br>
<br>
<br>
<?php


$servername = "localhost";
$username = "id369324";
$password = "32v";
$database="id3693240";

$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="SELECT * FROM doctors";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
   echo "id: " . $row['rid']. " - Name: " . $row['name']. " - Dept : " . $row['department']." - checkin time : " . $row['checkin_time']. " - checkout time : " . $row['checkout-time']."<br>";

    }

$conn->close();
?>
<br>
<br>

<form action="home.php" method="post">
<input type="submit" value="go back">
</form>
<div>
</html>









