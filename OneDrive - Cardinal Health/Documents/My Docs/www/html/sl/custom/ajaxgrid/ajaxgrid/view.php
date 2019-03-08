<?php include('config.php');
$col=count($addfields);
$colspan=$col+count($permission);
$sql="select * from ".$tablename." where $primarykey=".$_GET['id'];
//echo $sql;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<table width="90%" border="0" class="blue">
<tr><th colspan="2">View</th></tr>
 <?php for($j=0;$j<$col;$j++)
        {?>
    
   
<tr><td><?php echo $disptext[$j];?></td><td><?php echo $row[$addfields[$j]];?></td></tr> <?php } ?>
</table>