var xmlhttp;

function kerkoLenden(str)
{
    try
    {
        xmlhttp = new XMLHttpRequest();

    }
    catch(ex)
    {
        try
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");   // per disa browser me te vjeter
        }
        catch(ex)
        {
            xmlhttp = null;
        }
    }
    if(xmlhttp==null)
    {
        alert("Kerkesa nuk mund te realizohet!");
        return;
    }

    url = "http://localhost:1998/Java_12/index2.php";
    url = url + "?q=" + str;

    xmlhttp.open("GET",url,true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = DisplayRez;   
}

function DisplayRez()
{
    if(xmlhttp.status==200 && xmlhttp.readyState == 4)
    {
        document.getElementById("rezultati").innerHTML = xmlhttp.responseText;
    }
}
