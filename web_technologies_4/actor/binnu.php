<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actor Profile Binnu Dhillon</title>
<?php
require_once "imports.php";
?>
</head>
<body>


<?php
require_once ("navbar.php");
?>

<div id="body" class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8 ">
                <article>
                    <div class="row" style="margin-right: 3%">
                        <div class="img">
                        <img src="../data/imgs/binnu.jpg" class="img-responsive"/>
                        </div>
                        <p class="jumbotron user_description" style="padding-right: 5%">
                            <span id="actor_heading">
                                Binnu Dhillon
                            </span><br/><br/><br/>
                        Binnu Dhillon is an Indian actor from Patiala, Punjab, known for comic roles in Punjabi films.Dhillon has appeared in television serials such as Sarhad, Lori, Gaoundi Dharti, Sirnaave, Man Jeetey Jag Jeet, Channo Chan Vargi, Professor Money Plant, Jugnu Hazir Hai, Jugnu Mast Mast, Padam Paria, Kankaal, Aaste and Pagdandian.Filmography

[2]

    2015 Dildariyaan
    2015 Munde Kamaal De
    2015 Angrej
    2014 Goreyan Nu Daffa Karo
    2014 Aa Gaye Munde U.K. De
    2014 Jatt Pardesi
    2014 Oh My Pyo
    2014 Mr & Mrs 420
    2013 Ishq Brandy
    2013 Jatt Airways
    2013 Punjab Bolda
    2013 Best of Luck (2013 film)
    2013 Naughty Jatts
    2013 Jatts In Golmaal
    2013 Rangeelay
    2013 Lucky Di Unlucky Story
    2013 Singh vs Kaur
    2013 Tu Mera 22 Main Tera 22
    2012 YAAR Pardesi
    2012 Raula Pai Gaya
    2012 Sirphire
    2012 Carry On Jatta
    2012 Kabaddi Once Again
    2012 Taur Mittran Di
    2012 Mirza The Untold Story
    2011 Dharti (2011 film)
    2011 Jihne Mera Dil Luteya
    2010 Ekam – Son of Soil
    2009 Munde U.K. De
    2009 Lagda Ishq Hogaya
    2009 Tera Mera Ki Rishta
    2008 Dev D
    2007 Mitti Wajaan Maardi
    2002 Shaheed-E-Azam

                         <div class="text-right">
                         <a href="https://en.wikipedia.org/wiki/Binnu_Dhillon" class="btn btn-lg"> Read More </a>
                         </div>
                    </p>
                    
                    </div>
                
                </article>
    </div>
<div class="col-md-4 col-sm-4 ">
<?php
    if(isset($_SESSION['loggedin']))
    {
        require_once "sidebar_loggedin.php";
    }
    else{
    require_once "sidebar_loggedout.php";
}
?>
<?php 
            require_once("actor_panel.php");
            ?>
        </div>
    </div>
</div>
</div>
<footer>
<?php
require_once "../php/footer.php";
?>
</footer>
</body>
</html>