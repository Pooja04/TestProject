<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script>
$(document).on("pageload",function(){
  alert("pageload event fired - the external page has been successfully loaded and inserted into the DOM!");
});
</script>
</head>
<body>

<div data-role="page">
  <div data-role="header">
    <h1>Header Text</h1>
  </div>

  <div data-role="main" class="ui-content">
    <a href="link1.html">External page</a>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

</body>
</html>
