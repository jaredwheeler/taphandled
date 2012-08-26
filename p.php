<?php
$hostname='taphandleb3.db.3620693.hostedresource.com';
$username="taphandleb3";
$password="T@pH4ndle";
$database="taphandleb3";

$duration=$_GET['d'];
$timestamp = time();

mysql_connect($hostname,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="INSERT INTO pour (time) VALUES($timestamp)";
mysql_query($query) or die( "{\"status\": \"fail\"}");
mysql_close();

echo "AOK";
?>