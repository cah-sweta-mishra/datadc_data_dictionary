<?php
 mysql_connect('ip', 'username', 'password') or die(mysql_error());
 mysql_select_db("db_name") or die(mysql_error());

 $id = mysql_real_escape_string($_POST["ID"]);
 $value1 = mysql_real_escape_string($_POST["value1"]);
 $value2 = mysql_real_escape_string($_POST["value2"]);

 $query="UPDATE table1 SET value1 = '.$value1.', value2 = '.$value2.' WHERE id='$id'";


 mysql_query($query)or die(mysql_error());
 if(mysql_affected_rows()>=1){
echo "<p>($id) Record Updated<p>";
 }else{
echo "<p>($id) Not Updated<p>";
 }
 ?>
 <a href="edit.php">Next</a>