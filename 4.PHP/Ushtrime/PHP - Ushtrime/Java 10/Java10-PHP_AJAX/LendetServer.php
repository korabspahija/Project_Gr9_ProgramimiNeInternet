<?php 
//Mbush vargun me emra 
$a[]="Gjuhe Programuese"; 
$a[]="Bazat e te Dhenave"; 
$a[]="Programimi ne Internet"; 
$a[]="Programimi i Orientuar ne Objekte"; 
$a[]="Programimi i avancuar"; 
$a[]="Matematika 1"; 
$a[]="Matematika 2"; 
$a[]="Matematika 3"; 
//merr parametrin q nga URL-ja 
$q=$_GET["q"]; 
 
//shiko per te gjitha informatat nga vargu nese gjatesi e 'q>0' 
if (strlen($q) > 0) 
  { 
  $informata=""; 
  for($i=0; $i<count($a); $i++) 
    { 
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))) 
      { 
      if ($informata=="") 
        { 
           $informata=$a[$i]; 
        } 
      else 
        { 
           $informata=$informata.", ".$a[$i]; 
        } 
      } 
    } 
  } 
 
if ($informata == "") 
  { 
  $rezultati=" ska propozime..."; 
  } 
else 
  { 
  $rezultati=$informata; 
  } 
//paraqit rezultatin 
echo $rezultati; 
?>