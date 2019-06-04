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
<form action="Bet.php" method="post">
<section class="section element-animate">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-4"></div>
          <div class="col-md-8 section-heading">
<?php
$cash = intval($_SESSION["cash"]);
$deck = $_SESSION["deck"];
$card = array_shift($deck);
echo "<h3>".$card['face'] . ' of ' . $card['suit'] . "s<br></h3>";
$facebets = array ("Ace"=>0,"Two"=>0,"Three"=>0,"Four"=>0,"Five"=>0,"Six"=>0,"Seven"=>0,"Eight"=>0, "Nine"=>0,"Ten"=>0,"Jack"=>0,"Queen"=>0,"King"=>0);
$suitbets = array("Spade"=>0,"Club"=>0,"Heart"=>0,"Diamond"=>0);
$totalbet = 0;
$allbetsvalid = true;
foreach($facebets as $face=>$bet){
  $facebets[$face] = intval($_POST[$face]);
  if($facebets[$face] < 0) {
  echo "<h3>You placed an invalid bet of " . $facebets[$face] . " on " . $face . ".<br></h3>";
  $allbetsvalid = false;
  break;
  }
  $totalbet += intval($_POST[$face]); 
}


foreach($suitbets as $suit=>$bet){
  $suitbets[$suit] = intval($_POST[$suit]);
 if($suitbets[$suit] < 0) {
  echo "<h3>You placed an invalid bet of " . $suitbets[$suit] . " on " . $suit . ".<br></h3>";
  $allbetsvalid = false;
  break;
  }
  $totalbet += intval($_POST[$suit]); 
}
$arrayForImplode = array("Y", "O", "U");
$strForImplode = implode(" ", $arrayForImplode);//implode

$strForExplode = "LOST";
$arrayForExplode = explode(" ", $strForExplode);//explode
$str1ForImplode = implode(" ", $arrayForExplode);

if($cash - $totalbet >= 0 && $allbetsvalid){
foreach($facebets as $face => $bet){
  if($facebets[$face]!=0){
   $bets = $facebets[$face];
   if($card['face']==$face){
      $cash+=(13*$bets);
      printf("<h3>You won $%d with your bet on %d .<br></h3>", 13*$bets, $face); //printf
   }//card match
   else{
  	$cash -=$bets; 
	echo "<h3>You lost $" . $bets . " with your bet on " . $face . ".".$strForImplode." " . $str1ForImplode."<br></h3>";
   }//card not match
}//if bet wasn't zero
}//foreach

foreach($suitbets as $suit=>$bet){
  if($suitbets[$suit]!=0){
  $bets = $suitbets[$suit];
  if($card['suit']==$suit){
	 $cash +=(4*$bets);
	echo "<h3>You won $" . 4*$bets . " with your bet on " . $suit . ".<br></h3>";	
}//card match
  else{ 
	$cash -=$bets;
	echo "<h3>You lost $" . $bets . " with your bet on " . $suit . ".<br></h3>";
}//card not match
}//if bet wasn't zero
}//foreach

echo "<h3>You have $";
echo $cash . "<br></h3>";
$_SESSION["cash"] = $cash;
if($cash==0){
  echo "<h3>You lost. Sorry.<br></h3>";
}

if(count($deck)<5){

echo "Deck is being reshuffled.<br>";
$suits = array ("Spade", "Heart", "Club", "Diamond");

$faces = array ("Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten", "Jack", "Queen", "King", "Ace");


foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}
$Joker = array("face"=>"Joker", "suit"=>"Wild");
$deck[] = $Joker;
$deck[] = $Joker;
shuffle($deck);

}
$_SESSION["deck"] = $deck;
}
else {
  echo "<h3>Your bet was invalid. Do not bet more than you have. Do not bet a negative amount.<br></h3>";
}


$replaceExample = str_replace("%korabi%", "kreshniku", "Une %korabi% e kam krijuar lojen..");//replace

$substrExample = substr($replaceExample, 0, -2);//substr

echo "<p>Substring: ".strlen($substrExample)."</p>";


?>

</form>
<form action="Bet.php" method="post">
<input class="btn btn-primary btn-sm" type="submit" value="Continue."></form><h3>
<form action="Start.php" method="link">
<input class="btn btn-primary btn-sm" type="submit" value="Play a new game."></form>
</div>
        </div>
        </div>
        </div>
        </section>
<?php
$string = 'June 05, 2019'; 
$pattern = '/(\w+) (\d+), (\d+)/i'; 
$replacement = '${1} 02, $3'; 
  
// print output of function 
echo "<p>".preg_replace($pattern, $replacement, $string."</p>"); 

/*Parameters: This function accepts five parameters as mention above and describe below.
$pattern: This parameter contains the string element which is used to search the content and it can be a string or array of string.
$replacement: It is mandatory parameter which specifies the string or an array with strings to replace.
$subject: The string or an array with strings to search and replace.
$limit: This parameter specifies the maximum possible replacements for each pattern.
$count: It is optional parameter. This variable will be filled with the number of replacements done.*/
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
