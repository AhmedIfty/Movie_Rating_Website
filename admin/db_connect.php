<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_db";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_erron);
}
//echo "connection successful";
?>