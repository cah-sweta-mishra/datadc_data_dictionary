<?php include('config.php');
$sql="delete from ".$tablename." where $primarykey=".$_POST['start'];
$result=mysql_query($sql);
echo '<div class="round-a-ok"><div>Success fully deleted</div></div>';
include('loadpage.php');
?>
