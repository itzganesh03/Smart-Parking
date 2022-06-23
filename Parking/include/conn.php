<?php

$dialvalue = "";

$link = mysqli_connect("localhost", "root","", "parking");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
?>