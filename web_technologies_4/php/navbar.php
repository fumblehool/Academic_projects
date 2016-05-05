 
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Pun\m/Movies</a>
            </div> 
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Comedy</a></li>
                  <li><a href="#">Classics</a></li>
                  <li><a href="#">Drama</a></li>
                  <li><a href="#">Horror</a></li>
                </ul>
              </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <form method="post" action="search.php"class="navbar-form navbar-right" role="search">
                    <input type="text" name="search" class="form-control" placeholder="Search"/>
                    <button type="submit" class="btn btn-success"> Submit </button>
                </form>
            </nav>   

                
                
        </div>
    </header>
