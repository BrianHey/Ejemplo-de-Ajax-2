<?php 



$link= mysql_connect('localhost','root','12345678') or die("no conecto");
mysql_selectdb('sesiones',$link) or die ("base mala");


$sql = " SELECT * FROM admin"; 
$consulta =mysql_query($sql);
$row = mysql_fetch_array($consulta);

echo $row['1']; 
 ?>