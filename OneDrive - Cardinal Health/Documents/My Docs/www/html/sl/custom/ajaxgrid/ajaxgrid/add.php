<?php include('config.php');
if($_POST[$addfields[0]]!='')
{  
    $col=count($addfields);
	for($j=0;$j<$col;$j++)
	{
		$var.=$addfields[$j].",";
	$str.="'".$_POST[$addfields[$j]]."',";
    }
   $str=rtrim($str,',');
   $var=rtrim($var,',');
	$sql="insert into $tablename ($var) values ($str)";
	mysql_query($sql);
	echo'<div class="round-a-ok"><div>Added Successfully</div></div><br><br>';
    die('<input name="submit1" type="button" value="Close" onclick="self.parent.tb_remove();" />');
}
$col=count($addfields);
$colspan=$col+count($permission);

?>
<script language="javascript" src="script/ajax.js" type="text/javascript"></script>
<script language="JavaScript" src="Calender/calendar_db.js"></script>
<script language="javascript" type="text/javascript">
function submit_add()
{
a=document.form1; 
params='';
<?php

	for($j=0;$j<$col;$j++)
	echo "params=params+'&$addfields[$j]='+encodeURIComponent(a.$addfields[$j].value);";
	echo "params=params+'&$primarykey='+encodeURIComponent(a.$primarykey.value);";
?> 
	alert(params);
	ajaxfunctionpost('add.php',params,'edittable');
	}
</script>

<link rel="stylesheet" href="Calender/calendar.css">
<div id="edittable">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="90%" border="0" class="blue">
<tr><th colspan="2">Adding New Record</th></tr>
 <?php for($j=0;$j<$col;$j++)
        {?>
    
   
<tr><td><?php echo $disptext[$j];?></td><td><?php addfield($addfields[$j], '',$fieldtype[$j]);?></td></tr> <?php } ?>
<tr><td></td><td><input name="<?php echo $primarykey; ?>" type="hidden" value="<?php echo $_GET['id']; ?>" /><input name="submit" type="button" value="Submit" onclick="submit_add();" /><input name="submit1" type="button" value="Close" onclick="self.parent.tb_remove();" /></td></tr>
</table>
</form>
</div>
<?php
function addfield($name,$val,$type)
{
if($type=='TEXT') echo'<input type="text" name="'.$name.'" id="'.$name.'" value="'.$val.'"  />';
if($type=='TEXTAREA') echo'<textarea name="'.$name.'" id="'.$name.'" cols="45" rows="5">'.$val.'</textarea>';
if($type=='DATE') echo'<input type="text" name="'.$name.'" id="'.$name.'" value="'.$val.'"  /><span id="cal'.$name.'"></span><script language="JavaScript">
new tcal ({
		// form name
		"formname": "form1",
		// input name
		"controlname": "'.$name.'"
	});
</script>';
if($type=='NUMBER') echo'<input type="text" name="'.$name.'" id="'.$name.'" value="'.$val.'"  />';
if($type=='IMAGE') echo'';
if($type=='CHECKBOX') echo'';
if($type=='LIST') echo'';
} 
?>

