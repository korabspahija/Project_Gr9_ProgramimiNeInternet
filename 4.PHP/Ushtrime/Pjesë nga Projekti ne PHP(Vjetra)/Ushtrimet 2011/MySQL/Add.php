<html>
    <head>
        <title>
            Regjistrimi i studenteve
        </title>
    </head>
    <body>
        <?php
        include 'Menu.php';
        ?>
        <b>Te dhenat e studentet:</b>
        <form name="frmStd" action="Insert.php" method="get">
            <table>
                <tr>
                    <td>
                        NrIndeksit:
                    </td>
                    <td>
                        <input type="text" name="nrIndeksit"/>
                    </td>
                </tr>
                     <tr>
                    <td>
                        Emri:
                    </td>
                    <td>
                        <input type="text" name="emri"/>
                    </td>
                </tr>
                     <tr>
                    <td>
                        Mbiemri:
                    </td>
                    <td>
                        <input type="text" name="mbiemri"/>
                    </td>
                </tr>
                     <tr>
                    <td>
                        Adresa:
                    </td>
                    <td>
                        <input type="text" name="adresa"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name="btnSave" value="Ruaj"/>
        </form>
    </body>
</html>