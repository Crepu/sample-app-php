<?php
include '../config/db.php';
echo "$hostname_DB<br>";
echo "$username_DB<br>";
echo "$database_DB<br>";
echo "--";

$directorio = "/usr/local/www/sites/"
$ficheros1  = scandir($directorio);
print_r($ficheros1);
echo "--";
$directorio = $directorio."../config/";
$ficheros1  = scandir($directorio);
print_r($ficheros1);
echo "--";

echo "$directorio<br>";

mysql_connect($hostname_DB,$username_DB,$password_DB);
@mysql_select_db($database_DB) or die( "Unable to select database");
$query="SELECT * FROM app_test";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();
echo "<b><center> Database($database_DB) Output From Host($hostname_DB)</center></b><br><br>";
$i=0;
while ($i < $num) {
$name=mysql_result($result,$i,"name");
$value=mysql_result($result,$i,"value");
echo "<b>$name:$value</b><br><hr><br>";
$i++;
}



?>