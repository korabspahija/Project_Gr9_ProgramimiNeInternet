<!DOCTYPE>
<html>
    <head lang="en">
        <title> Title </title>
        <script type="text/javascript" src="studenti.js"></script>
    </head>
    <body>
        <form action="" method="get">
            <label> Kerko studentin: </label>
            <input type="text" name="kerkimi" id="user" onkeyup="kerkoStudentin(this.value)" />
            <br />
            <label>Rezultati: </label> 
            <div style="border: 1px solid black; width:500px; height: 500px;" id="rezultati">                
            </div>
        </form>        
    </body>
</html>