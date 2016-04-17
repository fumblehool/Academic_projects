<html>
<head>
	<title>Library Student Home Page</title>
</head>
<body>
<div id="content" style="height:90%;width:50%;border:1px solid red;margin:auto;">
<!--<IMG src="images/library.jpg" width="300" height="200">-->
<center>
<h1> Welcome To Student Panel! </h1>
<?php
	date_default_timezone_set('Asia/Kolkata');
	echo "time is " . date("h:i:s") . "<br>";
?>
</center>
<hr>
<center>
<h1> I want to.... </h1>

<table>
	<tr>
	<td>
		<button onClick="parent.location='booksearch.html'">Browse Books</button>
	</td>
	<td>
		<button onClick="parent.location='showreservedbooks.php'">Reserved Books</button>
	</td>
	<td>
		<button onClick="parent.location='colour-chooser.php'">Colour Preference</button>
	</td>
	<td>
		<button onClick="parent.location='contactus.html'">Contact Us</button>
	</td>
	</tr>
</table>
</center>
</div>
</body>
</html>
