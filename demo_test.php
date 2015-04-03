HI... ANU..
<?php
if(isset($_GET['id']))
{?>
    <option value="Anu" <?php if("Anu"==$_GET['id']){echo "selected";} ?> >Anu</option>
        <option value="POOJA" <?php if("POOJA"==$_GET['id']){echo "selected";} ?>>POOJA</option>
    <option value="Sohini" <?php if("Sohini"==$_GET['id']){echo "selected";} ?>>Sohini</option>
<?php }
echo $str;
?>