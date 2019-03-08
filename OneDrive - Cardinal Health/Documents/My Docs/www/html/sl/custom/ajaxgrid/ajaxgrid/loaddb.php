<?php
$hostname=$_POST['hostname'];
$db_username=$_POST['username'];
$db_password=$_POST['password'];
/*$hostname='localhost';
$db_username='root';
$db_password='';*/
mysql_connect($hostname,$db_username,$db_password) or die('unable to connect db');
$db_list = mysql_list_dbs();
echo '<select id="selectdb" name="selectdb" onchange="loadtable();">';
while ($row = mysql_fetch_object($db_list)) {
     echo '<option value="'.$row->Database.'">'.$row->Database.'</option>';
	 }
echo '</select>';	
?>
