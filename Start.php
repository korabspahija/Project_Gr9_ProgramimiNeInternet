<!doctype html>
<html lang="en">
  <head>
    <title>Dog Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <section class="home-slider inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('img/letrat4.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Card Game</h1>
                        <p class="mb-5">This is a simple betting game involving a deck of 54 cards (2 jokers).<br>
Four cards will be dealt and you will place bets on the qualities of the fifth card (face and suit).<br>
Payouts for the bets are (roughly) proportional to the probability.</p>
<p>You start with $100.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php
require "header.php";
?>
<?php
session_start();
$suits = array ("Spade", "Heart", "Diamond", "Club");

$faces = array ("Ace", "Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten", "Jack", "Queen", "King");

$deck = array();
$imgnum = 127137;
$imgcode = "&#".$imgnum;
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit, "img"=>$imgcode);
        $imgcode = "&#".++$imgnum;
    }
}
$Joker = array("face"=>"Joker", "suit"=>"Joker");
$deck[] = $Joker;
$deck[] = $Joker;
shuffle($deck);

$_SESSION['deck'] = $deck;
$_SESSION['cash'] = 100;



?>
<form action="Bet.php" method="post">
<section class="section element-animate">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-4"></div>
          <div class="col-md-8 section-heading">
            <h2>Press the button</h2>
            <input class="btn btn-primary btn-sm" type="submit" value="Play!">
          </div>
        </div>
        </div>
        </div>
        </section>
</form>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
</body>
</html>
