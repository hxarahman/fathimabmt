<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fathimabmt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*$conn = mysqli_connect//("localhost:8080","root","","logindb") or die//("Unable to connect");
mysqli_select_db($conn,"logindb");*/
?>