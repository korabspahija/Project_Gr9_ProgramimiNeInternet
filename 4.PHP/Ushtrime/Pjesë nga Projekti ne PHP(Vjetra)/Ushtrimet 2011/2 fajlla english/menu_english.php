<html><head>
<script type='text/javascript' src='menu.js'></script>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml"  href="http://localhost/PROJEKTI/rss.xml" title="Your title">
  </head>
  <body style="background: url(fotoVideo/topblue1.jpg) repeat fixed;">
      <?php
      error_reporting(0);
     session_start();

      if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == ''))
{
   echo '<form name ="frmlogin" action ="login-exec.php" method="post">
     <table align="left">
<tr>
<td><label style=" color:black" for="input"><b>User:</b></label></td>
<td><label style=" color:black" for="fjalkalimi"><b>Password:</b></label></td>
</tr>
<tr>
<td><input type="text" name="login" /></td>
<td><input type="password" name="password" /></td>
<td><input type="submit" name="btnDergo" value="Kyqu" /></td>
</tr>
     </table>
    </form>';
   echo '<table align="right"><tr><td> || <a href="login-form.php" style="text-decoration: none" target="_self"><FONT COLOR="#FF0000">Login</a></FONT></td> <td> || <a href="register-form.php" style="text-decoration: none" target="_self"><FONT COLOR="#FF0000">Register</a></FONT></td></tr></table>';


}
else
{ echo'<table align="right"><tr><td> || <a href="logout.php" style="text-decoration: none" target="_self"><FONT COLOR="#FF0000">Logout</a></FONT></td>';
  print '<h1>Welcome ' .$_SESSION['SESS_FIRST_NAME'].'</h1>';
}
?>

     <table align="right">

<tr>

<td> <a href="index.php" style="text-decoration: none" target="_self"  ><FONT COLOR="#FF0000">Shqip</a></FONT> || <a href="index_english.html" style="text-decoration: none" target="_self"> <FONT COLOR="#FF0000">English</a></FONT></td>

</tr>
    </table>


</body>
</html>



     <img alt="head" height="150" width="1320"   src="fotovideo/headerEnglish.jpg" align="top"  />
             <br/>
        <div align="center">
           <ul id="nav">
               <li> <a href="index.php">Home</a> </li>
    <li><a href="stafi.php">Staff</a></li>
    <li><a href="mesimdhenes.php">Teaching</a>
      <ul>
            <li>
              <ul>
                   <li><a href="lendet2011/Programimi ne internet.html">Programming in internet</a></li>
                            <li><a href="lendet2011/Bazat e te dhenave.html">Database</a></li>
                            <li><a href="lendet2011/Te dhenat ne internet 1.html">Internet data 1</a></li>
                            <li><a href="lendet2011/Te dhenat ne internet 2.html">Internet data 2</a></li>
                            <li><a href="lendet2011/Praktika profesionale.html">Professional practice</a></li>
              </ul>
            </li>

                           <li><a href="/temadiplomes">Bachelor subject degree</a></li>
                            <li><a href="/master">Master</a></li>
      </ul>
    </li>
       <li>
                      <a href="njoftimet.php">News</a>

               </li>
     <li>
                      <a href="/publikimet">Publications</a>
                      <ul>
                          <li> <a href="publikime2009.php">Publication 2009</a> </li>
                           <li> <a href="publikime2010.php">Publication 2010</a> </li>
                            <li> <a href="publikime2011.php">Publication 2011</a> </li>
                      </ul>

               </li>
               <li>
                      <a href="projektet.php">Projects</a>

               </li>
               <li>
                      <a href="galeria.php" >Gallery</a>

               </li>
               <li>
                      <a href="Vlersimi.php">Results</a>

               </li>
               <li>
                      <a href="forum.php">Forum</a>

               </li>
                <li>
                  <a href="kontakt.php">Contact</a>

               </li>

</ul>
             </div>
