<?php include('config.php');
if($_POST[$fields[0]]!='')
{
echo 'ajax works';
}
$col=count($fields);
$colspan=$col+count($permission);
$sql="select * from ".$tablename." where $primarykey=".$_GET['User_id'];
//echo $sql;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<script language="javascript" type="text/javascript">
function submit_this(){

	// the fields that are to be processed
	 <?php
	 $str='';
	 for($j=0;$j<$col;$j++)
	 {

	 echo 'var '.$fields[$j].' = $("input[name='.$fields[$j].']").val();';
	 $str.='input'.($j-1).': '.$fields[$j].', ';
	 }
	 $str=rtrim($str,',');
	 ?>


	// ajax call to itself
	$.post("edit.php", {<?php echo $str;?>}, function(data){$("#edittable").html(data);});


	return false;
	}

</script>
<div id="edittable">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="90%" border="0" class="blue">
<tr><th colspan="2">View</th></tr>
 <?php for($j=0;$j<$col;$j++)
        {?>


<tr><td><?php echo $fields[$j];?></td><td><?php addfield($fields[$j], $row[$fields[$j]],$fieldtype[$j]);?></td></tr> <?php } ?>
<tr><td></td><td><input name="submit" type="button" value="Submit" onclick="submit_this;" /><input name="submit1" type="button" value="Close" onclick="self.parent.tb_remove();" /></td></tr>
</table>
</form>
</div>
<?php
function addfield($name,$val,$type)
{
if($type=='TEXT') echo'<input type="text" name="'.$name.'" id="'.$name.'" value="'.$val.'"  />';
if($type=='TEXTAREA') echo'<textarea name="'.$name.'" id="'.$name.'" cols="45" rows="5">'.$val.'</textarea>';
if($type=='DATE') echo'<input type="text" name="'.$name.'" id="'.$name.'" value="'.$val.'"  /><script language="JavaScript">
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

