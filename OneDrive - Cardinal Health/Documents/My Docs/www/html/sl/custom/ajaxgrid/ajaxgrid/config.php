<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$hostname="localhost";
$database="sl_prod";
$db_username="root";
$db_password="sbj1234";
mysql_connect($hostname,$db_username,$db_password) or die("unable to connect db ");
mysql_select_db($database)or die("unable to select database");
$tablename="sl_user";
$fields=array("User_ID","First_name_tx","last_name_tx");
$addfields=array("User_ID","First_name_tx","last_name_tx");
$disptext=array("User_ID","First_name_tx","last_name_tx");
$fieldtype=array("TEXT","TEXT","TEXT","TEXT","TEXT","TEXT","TEXT","TEXT","TEXT");
$primarykey="User_id";
$permission=array("A","E","V","D");
$row=5;
?>