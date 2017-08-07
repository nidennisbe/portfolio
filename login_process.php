<?php
$servername = "localhost";
$username = "root";
$password = "Benidennis9";
$dbname = "webdb";

//get data from fields
$uname=$_GET["username"];
$pass=$_GET["password"];
$email=$_GET["email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    //If failed to connect
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_user (username, email, password)
VALUES ('$uname', '$email','$pass')";
//If connect successfully
if ($conn->query($sql) === TRUE) {
     $msg = 'Sign up successfully';
     echo "<script> window.location.assign('index.php'); </script>";

    //else show error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
