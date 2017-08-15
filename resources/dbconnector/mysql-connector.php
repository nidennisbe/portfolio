<?php
$server = "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "t8mvn41zc3dvlxhu";
$password = "fhzr9pbe4y18yxlz";
$db = "k6zc9jmzecfdzsgk";
$conn = mysqli_connect($server, $username, $password, $db);

if ($conn->connect_error) {
    //If failed to connect
    die("Connection failed: " . $conn->connect_error);
}
?>
