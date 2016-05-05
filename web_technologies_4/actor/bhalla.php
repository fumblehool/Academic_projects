<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actor Profile Jaswinder Bhalla</title>
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
                        <img src="../data/imgs/bhalla.jpeg" class="img-responsive"/>
                    </div>
                    <p class="jumbotron user_description" style="padding-right: 5%">
                        <span id="actor_heading">
                            Jaswinder Bhalla
                        </span>
                    <br/><br/><br/>
                    Jaswinder Singh Bhalla (born 4 May 1960) is a Punjabi comedian and actor. He is also a faculty at Punjab Agricultural University. He started his professional career as a comedian in 1988 with Chankata 88 and became actor with film Dulla Bhatti. He is best known for his comedy series Chankatta and comedy roles in various Punjabi films. He is famous for always using taglines in his movies, and bringing a comic touch to movies through them. He also performs in stage acts and has done tours of Canada and Australia for his stage show Naughty Baba in Town.
                    As a student at Punjab Agricultural University, Jaswinder Bhalla had done comedy performances in university programmes. He started his professional career in 1988 along with co-performer Bal Mukund Sharma with audio cassette Chhankata 1988. Bal Mukund Sharma and Jasiwnder Bhalla were classmates in Punjab Agriculture University. Word Chankata originated from the college level annual show performed by Bhalla and Sharma in PAU. They were noticed by Doordarshan Kendra, Jalandhar while performing in Professor Mohan Singh Mela (cultural festival) on personal backing of Punjabi author Jagdev Singh Jassowal. He has released over 27 audio and video albums of Chankata series. Apart from Bal Mukund Sharma, Neelu Sharma has also been part of Chhankata series. Starting with Chhankata 2002, series is also realised as video cassette.
                        Jaswinder has worked in Punjabi feature films like Mahaul Theek Hai, Jeeja Ji, Jihne Mera Dil Luteya, Power cut, Kabaddi Once Again, Apan Phir Milange, Mel Kara De Rabba, Carry On Jatta, Jatt and Juliet, Jatt Airways. In some Punjabi films he always speak with different Takia Klams. Such as Mein Taa Bhannduu Bullan Naal Akhrote, Je Chandigarh Dhaijoo Pinda Warga Taa Rehjooo or Dhillon Ne Kaalaa Cot Aiven Ni Payeya. He said through his art, he highlights social evils like female foeticide, drugs and unemployment.
                         <div class="text-right">
                         <a href="https://en.wikipedia.org/wiki/Jaswinder_Bhalla" class="btn btn-lg"> Read More </a></div></p></div>
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