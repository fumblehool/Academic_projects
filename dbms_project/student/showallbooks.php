<html>
<head>
	<title>Student Show All Books </title>
</head>
<body>
<div id="content" style="height:90%;width:50%;border:1px solid red;margin:auto;">
<center>
<h1> Show All Books from Database </h1>
<?php
	date_default_timezone_set('Asia/Kolkata');
	echo "time is " . date("h:i:s") . "<br>";
?>
<hr>
<h3>Following Books are available.</h3>
<br/>
	<?php
	 	 $conn = new mysqli('localhost','root','','dbms');
		 $query = "SELECT * FROM book";
		 $result = $conn->query($query);
		 if(!$result){
			 echo "There is some problem in the system";
			 exit();
		 }
		 $row = $result->num_rows;

		 echo "<table>";

		 for($j=0;$j<$row;++$j)
		 {
			$result->data_seek($j);
			$row = $result->fetch_array(MYSQLI_ASSOC);
			if($row['title']){
			echo "<tr><td><center><b> ".$row['title']. " By ". $row['author']. "</b></center></td></tr>";
    }
		 }
		 echo "</table>";


		 echo "<center><a href=index.php> Return to home page </a></center>";
?>
</center>
</div>
</body>
</html>
