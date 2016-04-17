<html>
<head>
	<title>Delete a Book </title>
</head>
<body>
<div id="content" style="height:90%;width:50%;border:1px solid red;margin:auto;">
<center>
<h1> Delete a Book from Database </h1>
<?php
	date_default_timezone_set('Asia/Kolkata');
	echo "time is " . date("h:i:s") . "<br>";
?>
<hr>
<h3>Enter Title and Author name to delete the book </h3>
<FORM action="deletebook.php" method ="POST">
	<table bgcolor="bdc0ff" cellpadding="6">
		<tr>
			<td>Title: </td>
			<td><INPUT type="text" name="searchtitle"></td>
		</tr>
		<tr>
			<td>Author: </td>
			<td><INPUT type="text" name="searchauthor"></td>
		</tr>
		<tr>
			<td></td>
			<td><INPUT type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</FORM>
<br/>
	<?php
	 if(isset($_POST['searchtitle']) && isset($_POST['searchauthor'])){
		 $title = $_POST['searchtitle'];
		 $author = $_POST['searchauthor'];
		 $conn = new mysqli('localhost','root','','dbms');
		 $query = "SELECT * FROM book WHERE "."title='$title' AND author='$author'";
		 $result = $conn->query($query);
		 if(!$result){
			 echo "There is some problem in the system";
			 exit();
		 }
		 $row = $result->num_rows;

		 if($row>=1){
		 $q = "DELETE FROM book WHERE "."title='$title' AND author='$author'";
		 $r = $conn->query($q);
		 echo "<ul>";

		 for($j=0;$j<$row;++$j)
		 {
			$result->data_seek($j);
			$row = $result->fetch_array(MYSQLI_ASSOC);
			if($row['title']){
				echo "<li> ".$row['title']. " By ". $row['author']. " is deleted from the database.". "</li>";
				}
		 }
		 echo "</ul>";
		 }
		 else {
			 echo "<center><h3>Sorry, The Book does not exist in Database	</h3></center>";
		 }
		 echo "<center><a href=index.php> Return to home page </a></center>";
	}
?>
</center>
</div>
</body>
</html>
