<?php 
include('config.php');
$col=count($fields);
$colspan=$col+count($permission);
?>
<script type="text/javascript" src="script/lightbox/jquery.js"></script>
<script type="text/javascript" src="script/lightbox/thickbox.js"></script>
<link rel="stylesheet" href="script/lightbox/thickbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/grid.css" type="text/css">

<script language="javascript" src="script/ajax.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function loadtabble(i)
{
params='start='+i;
ajaxfunctionpost('loadpage.php',params,'maintable');
}
function loadsorttabble(i,a)
{
params='start='+i+'&sortby='+a;
ajaxfunctionpost('loadpage.php',params,'maintable');
}

function deleteentry(start,key)
{
params='mode=delete&key='+key +'&start='+start;
ajaxfunctionpost('loadpage.php',params,'maintable');
}
function viewentry(i)
{
tb_show('Welcome','view.php?&id='+i,false);	
}

function editentry(i)
{
tb_show('Editing','edit.php?id='+i+'&TB_iframe=true&height=300&width=450&modal=true',false);	
}



 
</script>
<style type="text/css">
table.blue
{
   border:1px dotted #222245;
   font-family:Verdana, Geneva, sans-serif;
   font-size:10px;
   }
table.blue tr th
{
    font-size:12px;
    background-color: #bdcdfb;
	color:#000000;
   
}
table.blue tr td{padding: 4px 8px 8px;}
table.blue tr td a.old{text-decoration:none; text-align:center; display:block; float:left; width:25px; line-height:25px; border:#900 1px dotted;}
table.blue tr td a.current{text-decoration:none; display:block; text-align:center; float:left; width:25px; line-height:25px; border: none;}
</style>
<div id="maintable">
<table width="90%" border="0" class="blue">
<?php echo '<tr><th colspan="'.$colspan.'">'.$tablename.' Details </th></tr>';?>
<?php if(in_array('A',$permission)) echo '<tr><td colspan="'.($colspan-1).'"> <a href="#" onclick="tb_show(\'Editing\',\'add.php?TB_iframe=true&height=300&width=450&modal=true\',false);">Add New</a> <span id="deletetext"></span></td><td>&nbsp;</td></tr>';?>
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
if ($i==$_POST['start']) $pstr.='<a href="#" class="current" onclick="loadtabble('.$i.');">'.($i+1).'</a>'; else $pstr.='<a href="#" class="old" onClick="loadtabble('.$i.');">'.($i+1).'</a>';
$start=$_POST['start']*$row;
$sql.=" limit $start,$row";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0)
{
while($row=mysql_fetch_array($result))
{?>
 <tr <?php $count*=-1; if($count>0) echo ' bgcolor="#fef7f0"'; else echo ' bgcolor="#eef9ee"'; ?> >
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
</div>
