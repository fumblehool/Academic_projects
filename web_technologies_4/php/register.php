<?php
session_start();
require_once 'dbconnect.php';

$conn = new mysqli($host, $user, $password, $db);


if ($conn->connect_error) {

 die("Connection failed: " . $conn->connect_error);

}
/*
if (empty($_POST['password'])){
	echo "please enter password.";
}
*/
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$un = $_POST['username'];
$em = $_POST['email'];
$pw = $_POST['password'];

$q = "INSERT INTO users VALUES "."('$fn','$ln','$un','$em','$pw')";
$result = $conn->query($q);
if(!$result) echo "Insert failed: $q".$conn->error;

$q2 = "SELECT * FROM users";
$r = $conn->query($q2);
if(!$r) echo "select failed";

$rows = $r->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
	$r->data_seek($j);
	$row = $r->fetch_array(MYSQLI_ASSOC);
	echo $row['firstname'];
	echo "<br />";
	echo $row['lastname'];
	echo "<br />";
	echo $row['username'];
	echo "<br />";
	echo $row['email'];
	echo "<br />";
	echo $row['password'];	
	echo "<br/>";
} 

$r->close();
$conn->close(); 
echo "you are registered successfully";
header("Location: ../index.php");


?>

