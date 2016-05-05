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

                <div class="register-form well">

                    <h1 class="page_h"> FILL THE FORM</h1><br/> <br/>

                    <form name="register_form" role="register" class="form-horizontal" method="post" action="php/register.php">
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <label for="firstname" class="col-md-2">First Name:</label>
                        <div class="col-md-6">
                        <input type="text" name="firstname" class="form-control" placeholder="firstname" />
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <label for="lastname" class="col-md-2">Last Name:</label>
                        <div class="col-md-6">
                        <input type="text" name="lastname" class="form-control" placeholder="lastname" />
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <label for="username" class="col-md-2">Username:</label>
                        <div class="col-md-6">
                        <input type="text" name="username" class="form-control" placeholder="username" />
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <label for="e-mail" class="col-md-2">E-mail:</label>
                        <div class="col-md-6">
                        <input type="email" name="email" id="mail" class="form-control" placeholder="email" />
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <label for="password" class="col-md-2">Password:</label>
                        <div class="col-md-6">
                        <input type="password" name="password" class="form-control" placeholder="password" />
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 text-right">
                        <button type="reset" class="btn btn-lg btn-success">Reset</button>

                        <!--<div class="col-md-5 text-right">-->
                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    </form>
                </div>
       

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
</div>
</div>
<footer>
<?php
require_once "php/footer.php";
?>
</footer>
</body>
</html>           
            
                

              
    
