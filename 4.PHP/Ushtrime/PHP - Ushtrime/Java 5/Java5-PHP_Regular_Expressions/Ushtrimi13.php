<htm>
<head>
<title>Shprehjet e Rregullta</title>
</head>
<body>
<?php
$str = "Sot eshte dite me diell.";

print( "Test stringu eshte: '$str'<br /><br />" );
// thirrja e funksionit preg_match te kerkimi pEr modelin ’Sot’ nE variablEn str
if (preg_match( "/Sot/", $str ) )
print( "Stringu 'Sot' eshte gjetur.<br />" );

// kerkimi pEr shprehjen ’Sot’ nE fillim tE stringut
if ( preg_match( "/^Sot/", $str ) )
print( "Stringu 'Sot' eshte gjetur nE fillim te rreshtit.<br />" );

// kerkimi pEr modelin ’Sot’ tek fundi i stringut
if (preg_match( "/Sot$/", $str ) )
print( "Stringu 'Sot' eshte ne fund te rreshtit.<br />" );

// marrim emrin e hostit prej URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];

// marrim 2 segmentet e fundit te host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "Emri i domain-it eshte: {$matches[0]}\n";
?>

</body>