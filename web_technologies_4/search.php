<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
<?php
require_once "php/imports.php";
?>
</head>
<body>

<?php
require_once "php/navbar.php";
?>

<div id="body" class="container">
    <div class="row">
		<div class="col-md-8 col-sm-8 ">
			<div class="page-header">
                    <h1 class="page_h">Search Results</h1>
                </div>
                
                <?php
                    require_once 'php/dbconnect.php';
                    $conn = new mysqli($host, $user, $password, $db);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $search_query = $_POST['search'];

                    

                    $query = "SELECT * FROM movies WHERE". " title LIKE '%$search_query%'";
                    $result = $conn->query($query);
                    $rows = $result->num_rows;
                    // echo "rows is ". $rows;
                    
                    if(empty($search_query)){
                        echo "<article><center>
                        <b>Please enter something to search</b></center></article>";
                        
                    }

                    elseif($rows>=1){
                    for ($j = 0 ; $j < $rows ; ++$j)
                    {
                        $result->data_seek($j);
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        
                        echo"<article>
                         <a href=# class='btn'><h2>" .$row['title']."</h2></a>
                    <div class='row'>
                        <div class='group1 col-md-6'><b>Releasing Date –</b>".$row['release_date']."
                        </div>
                        <div class='group2 col-md-6 text-right'>
                            <b>Star Cast –</b>". $row['starcast'].
                        "</div>
                    </div>
                    <hr/>
                    <a href='".$row['image']."'>
                    <img src=".$row['image']." class='img-responsive'/>
                    </a>
                    <br/>
                    
                    <div class='well'>".
                       $row['description'].
                    "</div>
                    <p class='text-right'><a href='UI/movies/movie1.htm'> Read more. </a></p>
                    <hr/>
                </article>";
            }
        }
        $conn->close();
        $result->close();
        if($rows=0){
                    	echo "No found";
                    	echo "<article>
                    	<b>Sorry, No results Found.</b></article>";
                    }
            ?>    

		</div>
<div class="col-md-4 col-sm-4 ">
<?php
	if(isset($_SESSION['loggedin']))
	{
		require_once "php/sidebar_loggedin.php";
	}
	else{
	require_once "php/sidebar_loggedout.php";
}
?>
<?php 
            require_once("php/actor_panel.php");
            ?>
        </div>
    </div>
</div>
</div>
<footer>
<?php
require_once "php/footer.php";
?>
</footer>
</body>
</html>