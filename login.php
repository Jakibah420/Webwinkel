

<?php
		$servername = "localhost";
		$username = "Iakovos";
		$password = "Welkom01";
		$db = "logindatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$user = $_GET['uname'];
$userpass = $_GET['psw'];

//$conn->query("INSERT INTO login (Username,Password) 
  //			  VALUES('$user', '$userpass')") or die($conn->error);

$sql = "SELECT Password FROM login WHERE Username = '$user'";
$result = $conn->query($sql)or die($conn->error);
$rows = $result->fetch_assoc();
if($rows['Password']===$userpass){
echo "<p style='color:red'> Succes</p>";
}else{
	echo "<p style='color:red'> Failed</p>";
}


	
?>