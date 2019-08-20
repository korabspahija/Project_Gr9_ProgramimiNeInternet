var xmlHttp; 
// krjo nje instance XMLHttpRequest 
//ky funksion krijon objekte të ndryshme XMLHTTP për brouser të ndryshëm 
function createRequest() 
{ 
    try 
    { 
      // kodi per IE7+, Firefox, Chrome, Opera, Safari 
      xmlhttp = new XMLHttpRequest(); 
    } 
    catch(ex) 
    { 
        try 
        { 
            // kodi per IE6, IE5 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } 
        catch(ex) 
        { 
            xmlhttp = null; 
        } 
    } 
    return xmlhttp; 
} 
 
// lexo fajllin nga serveri 
function lexoXML() 
{ 
        xmlHttp = createRequest(); 
  // vazhdo vetem nese xmlHttp nuk eshte i zbrazet 
  if (xmlHttp) 
  { 
  // provo konektimin me server 
  try 
  { 
   // fillo leximin e fajllit nga server‐i 
   xmlHttp.open("GET", "http://localhost/ushtrimet/java10/librat.xml", true); 
   xmlHttp.onreadystatechange = shfaqLibrat; 
   xmlHttp.send(null); 
  } 
  // paraqit error‐in ne rast te deshtimit 
  catch (e) 
  { 
   alert("Nuk mund te lidheni me server:\n" + e.toString()); 
  } 
  } 
        else 
        { 
             alert("Nuk mund te krijoni kerkesen"); 
        } 
} 
 
// funksioni thirret kur gjendja e kerkeses HTTP nderrohet 
function shfaqLibrat() 
{ 
  // kur readyState eshte 4, jemi gati te lexojme pergjigjen nga serveri 
  if (xmlHttp.readyState == 4) 
  { 
  // vazhdo vetem nese HTTP statusi eshte "OK" 
  if (xmlHttp.status == 200) 
  { 
   try 
   { 
    // thirr funksioni handleServerResponse per pergjigje nga server‐i 
    Server_Response(); 
   } 
   catch(e) 
   { 
    // paraqit error mersazhin 
    alert("Gabim gjate leximit te pergjigjes: " + e.toString()); 
   } 
  } 
  else 
  { 
  // parait statusin 
   alert("Eshte shfaqur nje problem gjate nxjerrjes se te dhenave:\n" + 
   xmlHttp.statusText); 
  } 
  } 
} 
// merr pergjigjen e pranuar nga server‐i 
function Server_Response() 
{ 
  // lexo mesazhin nga server‐i 
  var xmlResponse = xmlHttp.responseXML; 
 
  // merr elementet e XML dokumentit 
  xmlRoot = xmlResponse.documentElement; 
 
        //alert(xmlResponse.documentElement.getElementsByTagName("libri")[1].attributes["isbn"].nodeValue); 
        //alert(xmlResponse.documentElement.getElementsByTagName("titulli").item(0).firstChild.data); 
        //  
  // merr vargjet me titujt dhe isbn e libres 
  titleArray = xmlRoot.getElementsByTagName("titulli"); 
  isbnArray = xmlRoot.getElementsByTagName("libri"); 
 
  //gjeneron daljen HTML 
  var html = ""; 
          
  // perseritet pergjat vargjeve dhe krjon nje strukture HTML 
  for (var i=0; i<titleArray.length; i++) 
         html += titleArray.item(i).firstChild.data + 
         ", " + isbnArray[i].attributes["isbn"].nodeValue + "<br/>"; 
 
  // merr permbajtjen e elementit <div> ne faqe 
  myDiv = document.getElementById("myDivElement"); 
 
  //paraqit daljen HTML 
  myDiv.innerHTML = "Pergjigja e Server‐it: <br />" + html; 
} 
 