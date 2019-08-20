// JavaScript Document 
var xmlhttp; 
 
//Funksioni kerkoLendet() ekzekutohet cdo herë që karakteri futet në ”txtLenda”. 
function kerkoLendet(str) 
{ 
  //Thërret f-onin createRequest() të krijoj një object XMLHTTP 
   xmlhttp = createRequest(); 
   if(xmlhttp==null) 
   { 
     alert("Nuk mund te krijoni kerkesen"); 
     return; 
   } 
 
   //Definon URL (emrin e fajllit) të dërgoj në server 
   var url = "http://localhost/Ushtrimet/Java10/LendetServer.php"; 
   //Shton një parametër (q) tek URL me përmbajtje të fushës hyrëse 
       url = url+"?q="+str; 
	   //Hap objektin XMLHTTP me URL-në e dhënë 
   xmlhttp.open("GET",url,true); 
   //Dërgon një kërkesë HTTP tek server 
   xmlhttp.send(null); 
   //Sa herë që ndryshon vetia readyState, f-oni stateChange() do të ekzekutohet 
   xmlhttp.onreadystatechange = displayRes; 
} 
 
//Ky funksion ekzekutohet sa herë që gjendja e objektit XMLHTTP ndryshon. 
function displayRes() 
{ 
    //alert(xmlhttp.readyState); 
    //Kur gjendja ndryshon në 4(“komplet”) dhe status=200, 
    //përmbajtja e txtRez mbushet me tekstin përgjigje. 
    if(xmlhttp.readyState==4) 
    { 
        if(xmlhttp.status==200) 
         { 
             document.getElementById("txtRez").innerHTML = xmlhttp.responseText; 
         } 
    } 
} 
 
 
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
	