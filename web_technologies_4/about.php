<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
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
        <article>
                    <p class="jumbotron">
                        This is a project Made using php, Bootstrap and Html. 
                    </p>
                </article>
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