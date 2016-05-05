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

$un = $_POST['username'];
$pw = $_POST['password'];

$q = "SELECT * FROM users WHERE "."username='$un'"." AND password='$pw'";
$result = $conn->query($q);
if(!$result) echo "Insert failed: $q".$conn->error;

if(empty($un) || empty($pw))
{
	echo "Please don't leave fields blank";
	exit();
}
$rows = $result->num_rows;

if($rows=1){
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $un;
}


for ($j = 0 ; $j < $rows ; ++$j)
{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	echo "<br />";
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

$result->close();
$conn->close(); 
header("Location: ../index.php");



?>

