<form id ="classroom_service_haproxy" name="classroom_service_haproxy"  
action="h.php" method="post" onsubmit="return validate_form ( 
);">
        <table width="750" align="center" border="1" cellspacing="1" cellpadding="2">
        <tr>
                <th>Property Name</th>
                <th>Select Options</th>
        </tr>

        <tr align="left">
<tr>
<td><font color="blue">
<B>VERSION:<B>
</font></td>
<td><select name="VERSION_ID" id="VERSION_ID" onchange="show_value(this.value);"">
<option value="R1">-----R1----</option></option></select>
</tr>
<tr>
<td><font color="blue">
<B>ENV:<B>
</font></td>
<td><select name="ENV_TYPE" id="ENV_TYPE"   onchange="getEnv('classroom_get_app_status.php?ENV_TYPE='+this.value)">
<option value="">----SELECT-ENV---</option>
<option value="uop">UOP</option>
<option value="aes">AES</option></select></td>
</tr>
<tr>
<td><font color="blue">
<B>PHYSICAL ENV:<B>
</font></td>
<td><select name="PHYSICAL_ENV_TYPE" id="PHYSICAL_ENV_TYPE">
<option value="">----SELECT-PHYSICAL-ENV---</option>
<option value="systest">SYSTEST</option></select></td>
</tr>
<tr>
<td><font color="blue">
<B>CLASSROOM_SERVICE:<B>
</font></td>
<td><select name="CLASSROOM_SERVICE" id="CLASSROOM_SERVICE"><option><?php   $ENV_TYPE=$_REQUEST['ENV_TYPE'];
echo '<option value="hello">'.$ENV_TYPE.'</option>';
$file_name="classroom_services_{$ENV_TYPE}.txt";
$lines=file($file_name);
for($i=0;$i<count($lines);$i++)
echo '<option value="'.$i.'">'.$lines[$i].'</option>';?>
</option></select>

</td>
</tr>
<tr>
<tr>
<td><font color="blue">
<B>INSTANCE TYPE:<B>
</font></td>
<td><select name="INSTANCE_TYPE" id="INSTANCE_TYPE">
<option value="">----SELECT-INSTANCE-TYPE---</option>
<option value="live">LIVE</option>
<option value="rollback">ROLLBACK</option>
<option value="staged">STAGED</option></select></td>
</tr>
</tr>
        <tr>
                <td>
                </td>
                <td>
                <input type="SUBMIT" name="SUBMIT" value="Submit Request"></font><B>
<center>
                </td>
        </tr>
        </table>
</form>
</BODY>
</html>
