<?php
$hostname=$_POST['hostname'];
$db_username=$_POST['username'];
$db_password=$_POST['password'];
$database=$_POST['database'];
/*$hostname='localhost';
$db_username='root';
$db_password='';
$database='autoclassified';*/
mysql_connect($hostname,$db_username,$db_password) or die('unable to connect db');
mysql_select_db($database)or die('unable to select database');
$sql = "SHOW TABLES FROM $database";
$result = mysql_query($sql);
echo '<select id="selecttable" name="selecttable" onchange="loadtabledetail();">';
while ($row = mysql_fetch_row($result)) {
     echo '<option value="'.$row[0].'">'.$row[0].'</option>';
	 }
echo '</select>';	
?>
