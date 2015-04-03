<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script>
  function getXMLHTTP() { //function to return the xml http object
                var xmlhttp=false;
                if(window.XMLHttpRequest) {             // for Forefox, IE7+, Opera, 
Safari, ...
                  xmlhttp = new XMLHttpRequest();
                  }
                  else if(window.ActiveXObject) {       // for Internet Explorer 5 or 6
                       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                   }

                return xmlhttp;
        }

        function getEnv(strURL) {

                var req = getXMLHTTP();
                if (req) {

                        req.onreadystatechange = function() {
                                if (req.readyState == 4) {

                                        if (req.status == 200) {                                    


document.getElementById('CLASSROOM_SERVICE').innerHTML=req.responseText;    
                                        } else {
  alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                                        }
                                }
                        }
                        req.open("POST", strURL, true);
                        req.send(null);
                        exit;
                }

        }
</script>