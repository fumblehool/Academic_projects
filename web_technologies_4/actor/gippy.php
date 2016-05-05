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
                        <img src="../data/imgs/gippy.jpg" class="img-responsive"/>
                        </div>
                        <p class="jumbotron user_description" style="padding-right: 5%">
                            <span id="actor_heading">
                                Gippy Grewal
                            </span><br/>
                        Gippy Grewal (born in Koom Kalan village near Ludhiana) is an Indian singer and film actor. He is known for his Punjabi songs. His single "Phulkari" broke many records in Punjab. He made his acting debut in the 2010 movie, Mel Karade Rabba, and which he followed with Carry On Jatta, Lucky Di Unlucky Story, Bhaji in Problem and Jatt James Bond. He received the "PTC Best Actor Award" in 2011 for his performance in the 2011 film Jihne Mera Dil Luteya. He received the "PIFAA best actor award" in 2012 along with Diljit Dosanjh and received "PTC Best actor Award" in 2015 for Jatt James Bond along with Diljit DosanjhGrewal made his film debut in a supporting role in 2010 Punjabi-language film Mel Karade Rabba . He followed that up with a lead role in Jihne Mera Dil Luteya which became the biggest hit in Punjabi cinema when it released.[2] In April 2012 his film Mirza - The Untold Story released with the highest opening for a Punjabi film at the time.[3]

His next movie Carry On Jatta released in July 2012 and had the second highest opening and total collections for Punjabi film.[4] In 2013, Grewal released the action film Singh vs Kaur, comedy film Lucky Di Unlucky Story and Best of Luck and the comedy movie Bhaji in Problem this film was produced by Bollywood Actor Akshay Kumar.

In 2014, he appeared in the dramatic thriller Jatt James Bond . His second film of 2014 was the comedy film Double Di Trouble.

He dubbed a voice in the Punjabi version of A Good Day to Die Hard which was the first Hollywood movie to be dubbed in Punjabi.[5]

In 2015, Grewal entered Bollywood with a guest appearance in the comedy-drama film Dharam Sankat Mein. He then made his full acting debut in Bollywood with the romantic-comedy film Second Hand Husband. Faraar was his next film of 2015 it was Hollywood style action movie and the film made to be highest budget in punjabi cinema till date. The film made on a budget of more than ₹14 crore (US$2.1 million).
                         <div class="text-right">
                         <a href="https://en.wikipedia.org/wiki/Gippy_Grewal" class="btn btn-lg"> Read More </a>
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