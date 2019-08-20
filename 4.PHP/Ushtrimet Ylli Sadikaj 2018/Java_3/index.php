<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>


</head>

<body>

    <form method="POST" enctype="multipart/form-data" id="forma1">      
    <!-- jo shume e sigurt ky enkriptim -->

        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="180" id="max_size"/>
            <!-- jo me shume se 180 bytes -->
            <!-- pra madhesia eshte ne BYTES -->
            <!-- por i duhet edhe pjesa e PHP per te treguar errorin -->
        </p>

        <p>
            <input type="file" name="file1" id="file1"/>
        </p>
        <p>
            <input type="submit" value="Dergo" />
        </p>
    </form>

    <!-- po e validojme madhesine e files permes javascript -->
    <!--
    <script type="text/javascript">

        document.getElementById("forma1").onsubmit = function()
        {
            var vleraMax = document.getElementById("max_size").value;
            var fajlli = document.getElementById("file1");
            if(fajlli.files[0].size > vleraMax)
            {
                alert("File eshte shume i madh!");
                e.preventDefault();
            }
            
        }

    </script>
    -->
    <?php
        // echo readfile("file.txt");          // Lexon dhe shfaq ne ekran
        /*
        $fajlli = fopen("file.txt",'r') or die("Fajlli nuk mund te hapet");
        echo fread($fajlli, filesize("file.txt"));
        fclose($fajlli);
        */
        /*
        $fajlli = fopen("file.txt",'w') or die("Fajlli nuk mund te hapet");

        $teksti1 = "Hello user!\r\n";
        $teksti2 = "Mire se vini!";

        fwrite($fajlli,$teksti1);
        fwrite($fajlli,$teksti2);
        
        fclose($fajlli);
        */
    
        /*
        $fajlli = fopen("file.txt",'a') or die("Fajlli nuk mund te hapet");
        // a ben append

        $teksti1 = "Hello user!\r\n";
        $teksti2 = "Mire se vini!\r\n";

        fwrite($fajlli,$teksti1);
        fwrite($fajlli,$teksti2);
        
        fclose($fajlli);
        */

        /*
        $fajlli = fopen("file.txt",'r') or die("Fajlli nuk mund te hapet");
        
        while(!feof($fajlli))               // ne qofte se nuk eshte fundi i file
        {                                   
                                            // funksioni fgets()
            echo fgets($fajlli);            // lexon vetem rreshtin e pare, prandaj duhet kombinuar
            echo "<br/>";                   // me feof qe ta lexoj qdo rresht
        }
        

        fclose($fajlli);
        */

        print_r($_FILES);           // ka te dhena per filen qe e uploadim
                                    // echo ose print nuk do funksionojne sepse eshte
                                    // array asociativ

        // filet ruhen perkohesisht ne folderin xampp/tmp


        /*
        echo "<br />";echo "<br />";
        foreach($_FILES as $fileKey => $fileValue)
        {
            if($fileValue['error'] != UPLOAD_ERR_OK)
            {
                echo "File nuk mund te ngarkohet!";
            }
            else
            {
                echo "File eshte ngarkuar!";
            }
        }
        */



        // KONTROLLO =================================================================
        // KONTROLLO =================================================================
        // KONTROLLO =================================================================
        // e gjeta spjegimin!
        // kur eshte ajo input hidden lart, e limiton sizen e files
        // dhe shfaqe error = 2, siq shihet nga print_r, dhe kur ka error=2
        // filesize eshte e barabarte me 0, prandaj shkruan ketu poshte
        // file nuk mund te ngarkohet, pra GABIM
        // prandaj ose duhet ta leme print_r bashk me kontrollin UPLOAD_ERR_OK
        // ose vetem kete kod poshte qe kontrollon per madhesi
        /*
        $vleraMaksimale = 180;
        echo "<br />";echo "<br />";
        foreach($_FILES as $fileKey => $fileValue)
        {
            if($fileValue['size'] > $vleraMaksimale)
            {
                echo "File nuk mund te ngarkohet!";
            }
            else
            {
                echo "File eshte ngarkuar!";
            }
        }
        */

    $extImazheve = array('jpg','png','gif');
    $tipiFajllit = array('image/jpeg','image/png','image/gif');
    echo "<br />";
    foreach($_FILES as $filekey=>$fileValue)
    {
        if(in_array($fileValue['type'],$tipiFajllit))
        {
            echo "File eshte i tipit: ".$fileValue['type']." dhe eshte ngarkuar me sukses!";
        }
        else
        {
            echo "File eshte i tipit: ".$fileValue['type']." dhe si pasoje nuk mund te ngarkohet!";;
        }
    }
    // ose kete siper mund ta arrijme edhe normalisht duke marrre brenda foreach
    // nje unaze qe shkon ne cdo anetare te $tipiFajllit, pra duke zevendesuar keshtu
    // funksionin e gatshem in_array


    ?>


</body>






</html>