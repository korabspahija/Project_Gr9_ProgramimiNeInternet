<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>


</head>

<body>
    <h1> Bob's Auto Parts </h1>
    <h2> Order Results </h2>
<?php
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $address = $_POST['address'];

    $data = date('H:i, jS F Y');
    echo "<p>Order processed at ".$data."</p>";
    echo "<p>Your order is as follows:</p>";

    $totalqty = $tireqty + $oilqty + $sparkqty;
    define("TIREPRICE",40);
    define("OILPRICE",7.2);
    define("SPARKPRICE",3.19);
    $totalprice = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
    $totalpriceWithTax = 0;
    define("TAX",0.18);
    echo "<p>";
    echo "Items ordered: ".$totalqty."<br />";
    echo $tireqty." tires.<br />";
    echo $oilqty." bottles of oil.<br />";
    echo $sparkqty." spark plugs.<br />";
    echo "Subtotal: ".$totalprice." &euro;<br />";
    $totalpriceWithTax = $totalprice * (1 + TAX);
    echo "Total including tax: ".$totalpriceWithTax." &euro;";

    echo "<br /><br />";
    echo "Address to ship to: ".$address;

    echo "<br /><br />Order written.";

    $fajlli = fopen("orderAuto.txt",'a+') or die("Fajlli nuk mund te hapet!");
    if(filesize("orderAuto.txt")==0)
        $permbajtja = $data." ".$tireqty." tires ".$oilqty." oil ".$sparkqty." spark plugs ".$totalpriceWithTax."$ ".$address;
    else
        $permbajtja = "\r\n".$data." ".$tireqty." tires ".$oilqty." oil ".$sparkqty." spark plugs ".$totalpriceWithTax."$ ".$address;
    fwrite($fajlli,$permbajtja);
    fclose($fajlli);


?>
    <br /><br />
    <a href="index2.php" target="_blank"> Porosite e kryera </a>

</body>




</html>