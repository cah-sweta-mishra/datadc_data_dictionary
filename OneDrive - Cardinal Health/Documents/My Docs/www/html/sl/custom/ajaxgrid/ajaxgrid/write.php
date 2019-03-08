<?php
$nooffields=$_POST['nooffields'];
$primarykey=$_POST['primarykey1'];
$hostname=$_POST['textfield'];
$username=$_POST['textfield2'];
$password=$_POST['textfield3'];
$database=$_POST['selectdb'];
$tablename=$_POST['selecttable'];
$j=0;$str='';$fields='';
	for($i=0;$i<$nooffields;$i++)
	{
	$var="checkbox".$i;
		if(@$_POST[$var]!='')
		{
			$val=$_POST[$var];
			$fields.='"'.$val.'",';
			$j++;
		}
	}
	for($i=0;$i<$nooffields;$i++)
	{
	$var="acheckbox".$i;
		if(@$_POST[$var]!='')
		{
			$val=$_POST[$var];
			$addfields.='"'.$val.'",';
			$var="selectfieldtype".$i;
			$field1[$j]=$_POST[$var];
			$str.='"'.$field1[$j].'",';
			$var="disptext".$i;
			$dispstr.='"'.$_POST[$var].'",';
			
			$j++;
		}
	}
	if($_POST['addcheck']!='') $permission.='"'.$_POST['addcheck'].'",';
	if($_POST['editcheck']!='') $permission.='"'.$_POST['editcheck'].'",';
	if($_POST['viewcheck']!='') $permission.='"'.$_POST['viewcheck'].'",';
	if($_POST['deletecheck']!='') $permission.='"'.$_POST['deletecheck'].'",';
//echo $nooffields.$primarykey.$hostname.$username.$password;
$fp=fopen("config.php","w") or die(" unable to create file change mod to 777");
$string='<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$hostname="'.$hostname.'";
$database="'.$database.'";
$db_username="'.$username.'";
$db_password="'.$password.'";
mysql_connect($hostname,$db_username,$db_password) or die("unable to connect db ");
mysql_select_db($database)or die("unable to select database");
$tablename="'.$tablename.'";
$fields=array('.rtrim($fields,',').');
$addfields=array('.rtrim($addfields,',').');
$disptext=array('.rtrim($dispstr,',').');
$fieldtype=array('.rtrim($str,',').');
$primarykey="'.$primarykey.'";
$permission=array('.rtrim($permission,',').');
$row=5;
?>';
fwrite($fp,$string);
fclose($fp);

?>