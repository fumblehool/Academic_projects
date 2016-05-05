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
                        <img src="../data/imgs/diljit.jpg" class="img-responsive"/>
                        </div>
                        <p class="jumbotron user_description" style="padding-right: 5%">
                            <span id="actor_heading">
                                Diljit Dosanjh
                            </span><br/><br/><br/>
                        Diljit Dosanjh is an Indian Punjabi singer, actor and television presenter. Born in a small village in Jalandhar, Punjab, India, Dosanjh is today recognised as one of the leading artists in the Punjabi music industry. He also acts in Punjabi movies, with many of them being noticeable hits, including 2012 film Jatt & Juliet, 2013 film Jatt & Juliet 2 and 2015 film Sardaar Ji – which are counted among the most successful Punjabi movies in history. His first recorded mainstream performance was his solo track and music video Ishq Da Uda Ada from his 2000 album produced by Finetone Cassettes.[1]Dosanjh continued his collaboration with Honey Singh in 2012 and released a single titled "Goliyan" that formed a part of the album International Villager He next sang for the soundtrack of Bollywood film Tere Naal Love Ho Gaya, released in January 2012, in a single called "Pee Pa Pee Pa" that also featured Priya Panchal. He also acted in that music video in the movie. His subsequent single, "Bodyguard", glorified the fall of Libyan revolutionary and politician, Muammar Gaddafi, where Dosanjh sang about his lifestyle, capture and death. His subsequent single, "Miss Lonely", was composed by JSL Singh. In March 2012, he released his first religious album titled Sikh. The album featured eight singles and talked about the principles and philosophy of Sikh religion. Dosanjh played a lead role in June 2012 movie Jatt & Juliet, which became one of the biggest hits in the Punjabi film industry. The award-winning film, directed by Anurag Singh, also featured actress Neeru Bajwa and was shot in Punjab & Mumbai in India and Vancouver, Canada.[7] Dosanjh Diljit won the PTC Punjabi Film Award for Best Actor for the movie. He gave vocals to five of the seven songs in the soundtrack of the movie. The same year in November, he released his eighth album, called Back 2 Basics, with nine tracks and the music composed by Tru-Skool. In January 2013, Dosanjh's third Punjabi film, Saadi Love Story hit the big screens. The film, that also starred Amrinder Gill and Surveen Chawla, flopped at the box office. Dosanjh sang for two songs in the movie's soundtrack, which was composed by Jaidev Kumar.
                         <div class="text-right">
                         <a href="https://en.wikipedia.org/wiki/Diljit_Dosanjh" class="btn btn-lg"> Read More </a>
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