<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

 <script type="text/javascript" src="jfile.js"></script>
</head>
<body>


<button>Get External Content</button>
<select id="drp" name="drp" class="drp">
    <option value="Anu">Anu</option>
        <option value="POOJA">POOJA</option>
    <option value="Sohini">Sohini</option>

</select>
<select id="div1" name="drp" class="drp">
   <?php
if(isset($_GET['id']))
{?>
    <option value="Anu" <?php if("Anu"==$_GET['id']){echo "selected";} ?> >Anu</option>
        <option value="POOJA" <?php if("POOJA"==$_GET['id']){echo "selected";} ?>>POOJA</option>
    <option value="Sohini" <?php if("Sohini"==$_GET['id']){echo "selected";} ?>>Sohini</option>
<?php }
echo $str;
?>

</select>

</body>
</html>
