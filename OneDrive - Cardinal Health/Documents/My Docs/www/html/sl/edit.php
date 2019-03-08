<?php
mysql_connect('localhost', 'root', 'sbj1234') or die(mysql_error());
mysql_select_db("sl_prod") or die(mysql_error());

$query = mysql_query("SELECT * FROM sl_user") or             die(mysql_error());

if(mysql_num_rows($query)>=1){
while($row = mysql_fetch_array($query)) {
    $id = $row['User_id'];
    $value1= $row['First_Name_TX'];
    $value2= $row['Last_Name_TX'];
}
?>
<form action="update.php" method="post">
<input type="hidden" name="ID" value="<?php echo $id;?>">

Value1: <input type="text" name="value1" value="<?php echo $value1;?>">
<br>
Value2: <input type="text" name="value2" value="<?php echo $value2?>">
<input type="Submit" value="Change">
</form>
<?php
}else{
    echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
}
?>