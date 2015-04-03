<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      $(document).on("pagecreate", function() {
        alert("pagecreate event fired - the page has been initialized, the DOM has been loaded and jQuery Mobile has finished enhancing the page.")
      });
      $(document).ready(function() {
        $("#Link1").click(function() {
          $.ajax({url: "link1.html", success: function(result) {
              $("#div1").html(result);
            }});
        });
      });
      $(document).ready(function() {
        $("#Link2").click(function() {
          $.ajax({url: "link2.html", success: function(result) {
              $("#div1").html(result);
            }});
        });
      });
    </script>
  </head>
  <body>
    <div data-role="page" id="pageone">
      <div data-role="main" class="ui-content">
        <div id="div1"><h2></h2></div>

        <a id="Link1" href="#" value="Link1" >Link1</a>
        <a id="Link2" href="#" value="Link2">Link2</a></div></div>
  </body>
</html>
Asava sundar chocolate cha bangla
<div> Pooja yedi ahe re......</div>
