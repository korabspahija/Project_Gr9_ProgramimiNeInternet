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
                    <?php
session_start();
$cash = intval($_SESSION['cash']);
$deck = $_SESSION['deck'];
for($i=1;$i<=4;$i++){
$card = array_shift($deck);
echo "<p>Card " . $i . " is " . $card['face'] . ' of ' . $card['suit'] . "s<br></p>";
}
echo "<p>Bet on what the fifth card will be. (Careful, there are 2 jokers!)<br></p>"; 
echo "<p>You have $";
echo $cash . "<br></p>";
$_SESSION['deck'] = $deck;
?>
<p>How would you like to place your bets?</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php
require "header.php";
?>
<section class="home-slider inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('img/letrat4.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">

<p>How would you like to place your bets?</p>
<form action="Deal.php" method="post">
<table>
<tr>
<td>Ace (13:1 odds): <input type="text" name="Ace"><br></td>
<td>Two (13:1 odds): <input type="text" name="Two"><br></td>
<td>Three (13:1 odds): <input type="text" name="Three"></td>
</tr>
<tr>
<td>Four (13:1 odds): <input type="text" name="Four"></td>
<td>Five (13:1 odds): <input type="text" name="Five"></td>
<td>Six (13:1 odds): <input type="text" name="Six"></td>
</tr>
<tr>
<td>Seven (13:1 odds): <input type="text" name="Seven">  </td>
<td>Eight (13:1 odds): <input type="text" name="Eight"></td>
<td>Nine (13:1 odds): <input type="text" name="Nine"></td>
</tr>
<tr>
<td>Ten (13:1 odds): <input type="text" name="Ten"></td>
<td>Jack (13:1 odds): <input type="text" name="Jack"></td>
<td>Queen (13:1 odds): <input type="text" name="Queen"></td>
</tr>
<tr>
<td>King (13:1 odds): <input type="text" name="King"></td>
<td>

</td>
<td>

</td>
</tr>  
<tr>
<td>Spade (4:1 odds): <input type="text" name="Spade"></td>
<td>Heart (4:1 odds): <input type="text" name="Heart"></td>
<td>Club (4:1 odds): <input type="text" name="Club"></td>
</tr>
<tr>
<td>Diamond (4:1 odds): <input type="text" name="Diamond"></td>
<td></td>
<td></td>
</tr> 
</table>
<input class="btn btn-primary btn-sm" type="submit" value="Bet!">
</div>
                </div>
            </div>

        </div>
    </section>
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
