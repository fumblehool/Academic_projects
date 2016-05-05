<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
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
                <div class="page-header">
                    <h1 class="page_h"> Contributors </h1>
                </div>
                <div class="contact-1">
                    <div class="col-md-4">
                        <div name="image" style="margin-bottom:25%">
                            <img src="data/imgs/contact2.jpg" class="img-response contact" width="190" height="200">
                        </div>
                        <div style="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="jumbotron c">
                        Damanpreet Singh <br/>
                        D2ITA1 <br/>
                        1411247</br/>
                    </p>
                    </div>
                </div>
                    


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
            ?><?php 
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
