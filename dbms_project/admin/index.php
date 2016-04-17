<html>
<head>
	<title>Library Admin Home Page</title>
</head>
<body>
<div id="content" style="height:90%;width:50%;border:1px solid red;margin:auto;">
<!--<IMG src="images/library.jpg" width="300" height="200">-->
<center>
<h1> Welcome To Admin Panel! </h1>
<?php 
	date_default_timezone_set('Asia/Kolkata');
	echo "time is " . date("h:i:s") . "<br>"; 
?>
</center>
<hr>

<center>
<h1> I want to.... </h1>

<table>
	<td>
		<button onClick="parent.location='addbook.php'">Add Book</button>	
	</td>
	<td>
		<button onClick="parent.location='deletebook.php'">Delete Book</button>
	</td>
	<td>
		<button onClick="parent.location='adminbooksearch.php'">Book Search</button>
	</td>
	</tr>
</center>
</div>
</body>
</html>