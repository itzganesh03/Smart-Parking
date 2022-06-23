<?php

$dbname = 'epiz_27664234_parking';
$dbuser = 'epiz_27664234';  
$dbpass = 'M7FYKx0e0uWk64P'; 
$dbhost = 'sql207.epizy.com'; 

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