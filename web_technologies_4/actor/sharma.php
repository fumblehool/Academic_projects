 <?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actor Profile Gippy Grewal</title>
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
                        <img src="../data/imgs/sharma.jpg" class="img-responsive"/>
                        </div>
                        <p class="jumbotron user_description" style="padding-right: 5%">
                            <span id="actor_heading">
                                B.N.Sharma
                            </span><br/><br/><br/>
                        B.N. Sharma is a Punjabi actor.He began his career in a Punjabi soap, Jeb Katre on Jalandhar Doordarshan and has played various roles in many films. He is known for his roles in such films as Mahaul Theek Hai, Jatt and Juliet and Carry On Jatta.Sharma won the Best Actor in a Comic Role award at the PTC Punjabi Film Awards.

After becoming known for playing comedic characters Shampy Da Daddy and Inspector Sikander Singh Tiwana from blockbusters Jatt and Juliet and Carry on Jatta respectively, Sharma prepared for his role in Dil Sada Luteya Gaya, traveling to Jalandhar for the shoot. He has been acclaimed by directors "for the perfection he puts in his work".

"I was so fascinated by acting that I wanted to become a part of it at any cost," Sharma told Punjabi Mania. "I remember when I was a kid (even before I started going school), I used to buy a flute from a 'balloon wala' and play it. Now I realize that it was an art. As my father was quite rigid I had to take the extreme step[, a]nd now with the hard work and love of all I am doing well."

During an interview with Punjabi Mania, Sharma also stated: "I just [think that the] Punjab government must do something fruitful for Punjabi cinema too like they are doing in promotion of sports[,] which is a good [thing] too. Punjabi cinema is doing wonders now and our government must contribute something to make it internationally renowned."Sharma's upcoming starrer includes Bhaji in Problem directed by Smeep Kang, the director of Carry On Jatta and Lucky Di Unlucky Story. Bhaji in Problem was released on 15 November 2013.
                         <div class="text-right">
                         <a href="https://en.wikipedia.org/wiki/Jaswinder_Bhalla" class="btn btn-lg"> Read More </a>
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