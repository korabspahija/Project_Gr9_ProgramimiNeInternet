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
                        <h1></h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php
require "header.php";
?>
<body>
<?php
// session_start();
$cash = intval($_SESSION["cash"]);
$facebets = array ("Ace"=>0,"Two"=>0,"Three"=>0,"Four"=>0,"Five"=>0,"Six"=>0,"Seven"=>0,"Eight"=>0, "Nine"=>0,"Ten"=>0,"Jack"=>0,"Queen"=>0,"King"=>0);
$suitbets = array("Spade"=>0,"Club"=>0,"Heart"=>0,"Diamond"=>0);
$totalbet = 0;
foreach($facebets as $face=>$bet){
  $totalbet += intval($_POST[$face]);
  
}

foreach($suitbets as $suit=>$bet){
  $totalbet += intval($_POST[$suit]);
}

if($cash - $totalbet < 0){
  echo "You bet too much. Try again.<br>";
  Header("Location: ../Check.php");
}
else {
  echo "You have $" . $cash-$totalbet . " left.<br>";
  Header("Location: ../Deal.php");
}
?>
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

</body>
</html>
