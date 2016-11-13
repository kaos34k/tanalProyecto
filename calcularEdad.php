<TR>
	<td>Fecha de Nacimiento:</td>
    <td><input type="text" size=10 maxlength=10 name="fechanaci">
 
<?php
$fecha = $_POST['fechanaci'];
$date2 = date('Y-m-d');//la fecha del computador
$diff = abs(strtotime($date2) - $fecha);
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
 
?>
</td>
</TR>
 
<TR>
    <td><input type="text" size=10 maxlength=10 name="edad" value="<?php echo $days?>">
</tr>