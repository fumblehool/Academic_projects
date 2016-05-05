<div class="row">
    <div class="well col-md-12">
        <form role="login" class="clearfix" method="POST" action="php/login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" />
            </div>

            <div class="form-group">
                <div class="col-md-3"></div>
            
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-block"> Login</button>
            </div>
            
            <div class="col-md-3"></div>
            </div>
        </form>

            <div class="bottom text-center">
                Don't have id?
                <a href="register.php"> <b>Register</b></a>
            </div>  
                    
    </div>
    <br/>

    <?php
        require_once("subscribe.php");
        ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <p class="text-center">
                <b>
                Actors Profiles
                </b>
            </p>
        </div>

        
                    <!--<div class="panel-footer"></div>-->
