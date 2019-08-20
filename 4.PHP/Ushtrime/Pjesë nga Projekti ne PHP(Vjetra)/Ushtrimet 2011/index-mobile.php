<?php

include_once 'common.php';

?>
<?xml version="1.0" ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
    "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>
    <head>
        <!-- Titulli dhe validimi i login-it me javaScript -->
        <title><?php echo $lang['TITULLI_FAQ']; ?></title>
        <LINK REL = "stylesheet" TYPE = "text/css" HREF ="css/Style.css">
        <script type="text/javascript">

            function validoFushat()
            {

                try
                {
                    var useri = document.forms["frmLogini"]["useri"].value;
                    var passi = document.forms["frmLogini"]["pass"].value;

                    if(useri==null || useri=="")
                    {
                        alert("Plotesoni perdoruesin!!");
                        document.forms["frmLogini"]["useri"].style.backgroundColor="whitesmoke";
                        document.forms["frmLogini"]["useri"].focus();

                        return false;

                    }
                    else if(useri.length<4)
                    {
                        alert("Perdoruesi duhet te kete me teper se 6 karaktere")
                        document.forms["frmLogini"]["useri"].focus();
                        return false;
                    }
                    else if (passi==null || passi=="")
                    {
                        alert("Plotesoni fjalekalimin!!")
                        document.forms["frmLogini"]["pass"].style.backgroundColor="whitesmoke";
                        document.forms["frmLogini"]["pass"].focus();


                        return false;
                    }
                    
                    else if(passi.length<6)
                    {
                        alert("Fjalekalimi duhet te kete me teper se 6 karaktere")
                        document.forms["frmLogini"]["pass"].focus();
                        return false;
                    }

                    else
                    {
                        return 'index.php';
                    }
                }
                catch(err)
                {
                    alert(err.message);
                }
            }
        </script>

    </head>
    <body>



        <table width="1164" align="center">
            <tr>
                <!-- Pjesa e kodit e cila shfaqe logon e  faqes -->
                <td width="1045" height="124" ><table width="801"  align="left">
                        <tr>
                            <td width="793" height="116">
                                <img src="css/foto/logo001.png">

                            </td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <!-- Pjesa e kodit e cila shfaqe oren -->
                            <td>

                                <p style="text-align:left;">
                                 
                                    
                                    &nbsp;
                                    &nbsp;
                                    <!-- Butonat per ndryshimin e gjuhes -->
                            </td>
                            
                            <td>
                                   <?php
                                 if (isset($_SESSION['ValidUser'])) {
                                    $add=$_SESSION['useri'];
                                    $em=$_SESSION['emri'];
                                    $mb=$_SESSION['mbiemri'];
                                   echo "<b>Miresevini,</b> $add<br>";
                                   echo "<b><a href=\"LogOut.php\">Largohu nga sajti</a></b><br/><br/>";
                                   echo date("H:i, jS F");
	                            }
                                    ?>
                            </td>
                        </tr>
                    </table>

                    <!-- Pjesa e kodit per Kerkim -->

            <kerko>
                <form>
                    
                    <input name="Kerko" type="search" placeholder="Kerko...">
                    <input type="submit" value="Kerko">
                    <a href="index.php?lang=al"><img src="css/foto/al.png"></a>
                    <a href="index.php?lang=en"><img src="css/foto/en1.png"></a>
                 
                </form>
            </kerko>


        </td>
    </tr>
</table>
<table width="1191"  align="center">
    <tr>

        <!--Thirrja e skriptes per Menu -->

        <td width="1183" height="34" >

            <?php
                                    include 'include/Menu.php';
            ?>

                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <!-- Pjesa qendrore ku shfaqen lajmet dhe ngjarjet -->
                        <table width="1056" align="center" >
                            <tr>
                                <td width="1048" height="626"><table width="728" height="521" align="left">
                                        <tr>
                                            <td>


                                        <section id="posts">
                                            <article>
                                                <header>
                                                    <h2>Miresevini!</h2>

                                                </header>

                                                <aside>
                                                    <img src="css/foto/logo2.jpg" width="450" height="180">
                                                </aside>

                                                <p> Ky sajt &euml;sht&euml; i dedikuar p&euml;r m&euml;simin, menaxhimin dhe hulumtimin e t&euml; rejave t&euml; fundit lidhur
                                                    me tema t&euml; ndryshme q&euml; kan&euml; t&euml; b&euml;jn&euml; me l&euml;nd&euml;t: Programimi n&euml; Internet,
                                                    Menaxhimi me Baza t&euml; t&euml; Dh&euml;nave dhe tema t&euml; tjera t&euml; ngjashme. Gjithashtu k&euml;tu mund t&euml; gjeni
                                                    literatur&euml; lidhur me l&euml;nd&euml;t p&euml;rkat&euml;se, publikime t&euml; ndryshme dhe m&euml; t&euml; rejat lidhur
                                                    me teknologjin&euml;.
                                                <footer>
                                                    <p><a href="#"><i>me shume</i></a> ...</p>
                                                </footer>

                                            </article>
                                        </section>
                                        <section id="posts">
                                            <article>
                                                <header>
                                                    <h2>Fakulteti i Inxhinierise Elektrike dhe Kompjuterike</h2>
                                                    <h3>Historiku</h3>

                                                </header>
                                                <aside>
                                                    <img src="css/foto/elektro.jpg" width="450" height="180">
                                                </aside>

                                                <p> Fakulteti i Elektroteknik&eumls fillimisht &eumlsht&euml ngritur n&euml themelet e Shkoll&eumls s&euml Lart&euml Teknike,
                                                    e cila ka filluar t&euml punoj&euml n&euml Prishtin&euml si institucion profesional p&eumlr drejtimin e nd&eumlrtimtaris&euml,
                                                    elektroteknik&eumls dhe makineris&euml,m&euml 20 tetor 1961. M&euml 1965,
                                                    K&eumlshilli Ekzekutiv i Kosov&eumls miratoi Ligjin p&eumlr themelimin e Fakultetit Teknik me Seksionin e Nd&eumlrtimtaris&euml.
                                                    Fakulteti ia filloi pun&eumls m&euml 9 dhjetor 1965.</p>
                                                <footer>
                                                    <p><a href="http://fiek.uni-pr.edu/Historiku.aspx"><i>m&euml shum&euml</i></a> ...</p>
                                                </footer>

                                            </article>
                                        </section>


                                </td>
                            </tr>
                        </table>
                        <table width="281" height="575"  align="right">
                            <tr>
                                <td width="273" height="569" ><table align="right" >
                                        <tr>
                                            <!-- Pjesa ku shfaqet Login-i -->
                                            <td width="256">
                                                <div id="login" class="boxed">
                                                    <h2 class="title">Llogaria e klientit                                                        </h2>
                                                    <form name="frmLogini" action="Login1.php" method="post" onsubmit="return validoFushat()">
                                <?php
                                
                                   
                                    if (isset($_SESSION['ValidUser'])) {

                                    
                                    $nr=$_SESSION['nrindeksit'];
                                    $em=$_SESSION['emri'];
                                    $mb=$_SESSION['mbiemri'];
                                    $emai=$_SESSION['email'];
                                    $data_reg=$_SESSION['data_regj'];
                                   echo "<b>Nr Indeksit:</b> $nr<br>";
	                           echo "<b>Emri:</b> $em<br>";
	                           echo "<b>Mbiemri:</b> $mb<br>";
                                   echo "<b>Email:</b> $emai<br>";
                                   echo "<b>Data e regjistrimit:</b> $data_reg<br>";
                                   echo "<b><a href=\"NdryshoShfrytezuesi.php\">Edito te dhenat</a></b><br/>";
                                   echo "<b><a href=\"NdryshoShfrytezuesi.php\">Fshij te dhenat</a></b>";
                                   
	                            }
                                    else {
                                    
                                ?>

                                        <label for="_useri"> Perdoruesi:<br/>
                                        </label>
                                        <input id="_useri" type="text" name="useri" size="25" maxlength="25" placeholder="Shfrytezuesi" />
                                        <br>
                                        <label for="_pass">Fjalekalimi:<br>
                                        </label>
                                        <input id="_pass" type="password" name="pass" size="25" maxlength="25" placeholder="Fjalekalimi" />
                                        <br>
                                        <input id="inputsubmit1" type="submit" name="btnLogin" value="Logohu" />
                                        <input type="hidden" name="redirect" value="<?php echo $redirect ?>"/>
                                        <input id="inputsubmit1" type="reset" name="btnPastro" value="Pastro" /><br><br>
                                        <a href="Regjistrimi.php"><u>Regjistrohu</u></a>
                                <?php } ?>
                                       
                                </form>
                                <!-- Pjesa e kodit ku shfaqet RRS -, RRjetet Sociale etj.  -->

                                <div id="rightcol4" align="left">
                                    <div id="login2" class="boxed">
                                        <h2 class="title">RSS Feed</h2>
                                        <div class="rss">Regjistrohu ne <a href="http://localhost/Projekti-PI/RSS.php">RSS</a></div>
                                        <h2 class="title">Rrjetet Sociale<br>
                                        </h2>
                                        <div class="footersocial">
                                            <ul>
                                                <li><a href="http://www.facebook.com/"><img src="css/foto/facebook_16.png" alt="facebook" /> Facebook</a></li>
                                                <li><a href="http://www.twitter.com/"><img src="css/foto/twitter_16.png" alt="twitter" /> Twitter</a></li>
                                                <li><a href="http://www.linkedin.com/"><img src="css/foto/linkedin_16.png" alt="linkedin" /> Linkedin</a></li>
                                            </ul>
                                        </div>
                                       
                                        <h2 class="title">Vegeza<br>
                                        </h2>
                                        <div class="footersocial">
                                            <ul>
                                                <li><a href="http://uni-pr.edu/">Uni-pr.edu</a></li>
                                                <li><a href="http://php.net/"> PHP.net</a></li>
                                                <li><a href="http://fiek.uni-pr.edu/">FIEK - Page</a></li>
                                            </ul>
                                        </div>
                                         <h2 class="title">Zona Administrative<br>
                                        </h2>
                                        <?php
                                        if(isset($_SESSION['ValidUser']))
                                        {
                                           if($_SESSION['admin_l'] == 0)

                                            include 'include/adminzone.php';
                                        else
                                            echo'Nuk ju lejohet casja ne kete zone';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <p></p>

                    <video width="260" height="200" controls="controls">
                        <source src="css/foto/video.mp4" type="video/mp4"/>
                        Browser-i juaj nuk e perkrah tag-un video.
                    </video>
                    Video - Php Programming!!
            </td>
        </tr>
    </table>

    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>

    <!-- Pjesa e footer - it -->

<?php
                                    include 'include/footer.php';
?>

</body>
</html>