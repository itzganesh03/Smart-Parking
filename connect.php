<?php

$dbname = '';
$dbuser = '';  
$dbpass = ''; 
$dbhost = ''; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$inches = $_GET["inches"];



$query = "INSERT INTO parkingdata (inches) VALUES ('$inches')";
$result = mysqli_query($connect,$query);

if($result)
{
echo "Insertion Success!<br>";
}
?>
