<html>
<head>
	<title> Add new Book </title>
</head>
<body>
<div id="content" style="height:90%;width:50%;border:1px solid red;margin:auto;">
<?php 
	if(isset($_POST['title'])){
		// This is the postback so add the book to the database

		# Get data from form
		$newbooktitle = $_POST['title'];
		$newbookauthor = $_POST['author'];

		if(!$newbooktitle || !$newbookauthor){
			echo "<center><h3>You must specify both a title and an author</h3></center>";
			echo "<center><br><a href=index.php> Return to home page </a></center>";
			exit();
		}
		//Connect a database 
		$conn = new mysqli("localhost","root","","dbms");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error. "<br/>". "Contact System Admin");
		}
		
		$test = "SELECT * FROM book WHERE "." title='$newbooktitle'";
		$test_result = $conn->query($test);
		
		if($test_result->num_rows>=1)
		{
			echo "<center><h3><br>Book Already Added.<br></h3><a href=index.php> Return to home page </a></center>";
			exit();
		}
		
		$query = "INSERT INTO book VALUES " . "('$newbooktitle','$newbookauthor')";
		$result = $conn->query($query);
		if(!$result){
			echo "Insert failed: $result".$conn->error;
		}
		else{
			echo "<center><h3><br>Book Added!<br></h3><a href=index.php> Return to home page </a></center>";
		}
		exit;
	}

	// Not a postback, so present the book entry form
?>

<center><h1> Add a new book </h1>
<hr>
<h3>You must enter both a title and an author</h3>
<FORM action="addbook.php" method ="POST">
	<table bgcolor="bdc0ff" cellpadding="6">
	<tbody>
		<tr>
			<td>Title: </td>
			<td><INPUT type="text" name="title"></td>
		</tr>
		<tr>
			<td>Author: </td>
			<td><INPUT type="text" name="author"></td>
		</tr>
		<tr>
			<td></td>
			<td><INPUT type="submit" name="submit" value="Add Book"></td>
		</tr>
	</tbody>
	</table>

	</tbody>
</FORM>
</center>
</div>
</body>
</html>