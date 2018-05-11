<?php
$server = "u6zjjcqbi307lip.cbetxkdyhwsb.us-east-1.rds.amazonaws.com 	";
$username = "g3g62yd181781yfz";
$password = "pa6v5wp3ywq2dzgt";
$db = "ya6jf98wo9erqzbd";
$conn = mysqli_connect($server, $username, $password, $db);

if ($conn->connect_error) {
    //If failed to connect
    die("Connection failed: " . $conn->connect_error);
}
?>
