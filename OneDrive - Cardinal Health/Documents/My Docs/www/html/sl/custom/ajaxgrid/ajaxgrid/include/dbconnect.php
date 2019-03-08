<?php
$hostname='localhost';
 $database='sl_prod';
$db_username='root';
$db_password='sbj1234';
/*aksid.net configration */
$database='sl_prod';
/*$db_username='aksidco_demo';
$db_password='demo';*/

mysql_connect($hostname,$db_username,$db_password) or die('unable to connect db ');
mysql_select_db($database)or die('unable to select database');

$mysqlencryt='aksidsoftprivatelimited';

?>