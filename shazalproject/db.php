<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
die('could not connect:'.mysql_error());
}
echo'connected successfully';
mysql_close($conn);
?>