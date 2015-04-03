<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
        <script>
            var tmp;
            /*$(document).on("pagecreate", function() {
               loadPage('link1.php');
            });*/

            function loadPage(link) {
                $.ajax({url: link, success: function(result) {
                        $("#div1").html(result);
                    }});
            }
            
            function checkHash() {
                //console.log(tmp);
                var newhash = window.location.hash;
                console.log(newhash);
                if(newhash != tmp) {
                    var newlink = newhash.split("#")[1];
                    
                    if(newlink==undefined)
                        newlink='link1.php';
                    loadPage(newlink);
                    tmp = newhash;
                }
            }

            $(document).ready(function() {
                
                var t = window.setInterval(function(){checkHash();}, 500);
                //checkHash();
                $("#Link1").click(function() {
                    loadPage('link1.php');
                    var tmpval = 'link1.php';
                    window.location.hash = tmpval;
                    tmp = window.location.hash;
                    
                    //checkHash();
                });
                $("#Link2").click(function() {
                    loadPage('link2.php');
                    var tmpval = 'link2.php';
                    window.location.hash = tmpval;
                    tmp = window.location.hash;
                });
            });




        </script>
        <style>
            #div1{
                position:  absolute;
                top: 30px;
                left: 200px;
                color: red;
            }
        </style>
    </head>
    <body>


        <div id="div1"><h2></h2></div>
        <div data-role="main" class="ui-content">

            <a id="Link1" href="#" value="Link1" >Link1</a><br>
            <a id="Link2" href="#" value="Link2">Link2</a></div>





    </body>
</html>
