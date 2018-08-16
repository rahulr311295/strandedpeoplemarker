<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rescue";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$post=$_POST['mobile'];
$sql = "INSERT INTO rescue (mobile) VALUES ('$post')";

if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Number registered')</script>";
    header("Location:index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>