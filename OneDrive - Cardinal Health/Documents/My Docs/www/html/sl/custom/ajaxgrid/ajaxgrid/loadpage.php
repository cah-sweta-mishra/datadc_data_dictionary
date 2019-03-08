<?php
include('config.php');
$col=count($fields);
$colspan=$col+count($permission);
if($_REQUEST['mode']=='delete')
{
$sql="delete from ".$tablename." where $primarykey=".$_POST['key'];
$result=mysql_query($sql);
echo '<div class="round-a-ok"><div>Success fully deleted</div></div>';
}
?>
<table width="90%" border="0" class="blue">
<?php echo '<tr><th colspan="'.$colspan.'">'.$tablename.' Details </th></tr>';?>
<?php if(in_array('A',$permission)) echo '<tr><td colspan="'.($colspan-1).'"><a href="#" onclick="tb_show(\'Editing\',\'add.php?TB_iframe=true&height=300&width=450&modal=true\',false);"> Add New</a> <span id="deletetext"></span></td><td>&nbsp;</td></tr>';?>
<tr>
 <?php 
 $curpage=empty($_POST['start']) ? 0:$_POST['start'] ;
if($_POST['sortby']!='') $_SESSION['sortby']=$_POST['sortby'];
$sortby =empty($_SESSION['sortby']) ? $primarykey:$_SESSION['sortby'];

 for($j=0;$j<$col;$j++)
{?>
    <th><?php echo '<a href="#" class="current" onclick="loadsorttabble(\''.$curpage.'\',\''.$fields[$j].'\');">'.$disptext[$j].'</a>';?></th>
    <?php } // close of header?>
    <?php for($j=0;$j<count($permission);$j++)
{?>
    <th><?php if($permission[$j]=='E') echo 'Edit'; if($permission[$j]=='D') echo 'Delete'; if($permission[$j]=='V') echo 'View';?></th>
    
    <?php } ?>
  </tr>
<?php 

if($sortby!='') $sortby='order by '.$sortby;								
$sql="select * from ".$tablename." where 1 ".$sortby;
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$nopages=ceil($count/$row);
$pstr='';
for($i=0;$i<$nopages;$i++)
if ($i==$_POST['start']) $pstr.='<a href="#" class="current" onClick="loadtabble('.$i.');">'.($i+1).'</a>'; else $pstr.='<a href="#" class="old" onClick="loadtabble('.$i.');">'.($i+1).'</a>';
$start=$_POST['start']*$row;
$sql.=" limit $start,$row";
//echo $sql;
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0)
{
while($row=mysql_fetch_array($result))
{?>
 <tr <?php $count*=-1; if($count>0) echo ' bgcolor="#fef7f0"'; else echo ' bgcolor="#eef9ee"'; ?>>
  <?php for($j=0;$j<$col;$j++)
        {?>
    <td><?php echo $row[$fields[$j]];?></td>
    <?php } ?>
    <?php for($j=0;$j<count($permission);$j++)
{?>
    <td align="center"><?php  if($permission[$j]=='E') echo '<a href="#" onclick="editentry('.$row[$primarykey].')"><img src="images/edit.png" width="18" height="18" border="0"></a>'; if($permission[$j]=='D') echo '<a href="#" onclick="deleteentry('.$curpage.','.$row[$primarykey].')"><img src="images/delete.png" width="18" height="18" border="0"></a>'; if($permission[$j]=='V') echo '<a href="#" onclick="viewentry('.$row[$primarykey].')"><img src="images/view.png" width="18" height="18" border="0"></a>';?></td>
    
    <?php } ?>
  </tr>
  <?php } // close of row while
}// close of if
else
echo '<tr><td colspan="'.$colspan.'"> Data Not found </td></tr>';
  ?>
 <?php echo '<tr><td colspan="'.$colspan.'"> pages '.$pstr.' </td></tr>';?>
</table>