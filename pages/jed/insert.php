<?php
$servername = "localhost";
$username = "root";
$password = "root123456";
$dbname = "ibot";

// $servername = "localhost";
// $username = "iethaiso_gold";
// $password = "1HtIbF)5j24c-J";
// $dbname = "iethaiso_gold";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

// include("../php/config.php");

$title = $_GET["title"];
$sql = "INSERT INTO calendar(title) VALUES('$title')";
$result = mysqli_query($conn,$sql);
echo $result;

?>