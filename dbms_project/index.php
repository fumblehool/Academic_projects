<html>
<head>
	<title>Library Home Page</title>
</head>
<body>
<div id="content" style="height:90%;width:50%;border:1px solid red;margin:auto;">
<!--<IMG src="images/library.jpg" width="300" height="200">-->
<center>
<h1> Welcome To Central Library! </h1>
<?php 
	date_default_timezone_set('Asia/Kolkata');
	echo "time is " . date("h:i:s") . "<br>"; 
?>
</center>
<hr>
<center>
<h1> I am..... </h1>

<table cellspacing="20" style="">
<!--<div style="width:30%;margin:auto;">-->
	<tr>
	<td>
		<button onClick="parent.location='student/index.php'">Student</button>	
	</td>
	<td>
		<button onClick="parent.location='admin/index.php'">Admin</button>
	</td>
	</tr>
<!--</div>-->
</table>
</center>
</div>
</body>
</html>