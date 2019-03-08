<?Php
@$cat_id=$_GET['cat_id'];
//@$cat_id="2,3"; // For testing this page only. 
///////////// checking for injection attack //////
$mn=split(",",$cat_id); // creating array 
while (list ($key, $val) = each ($mn)) { 
//echo "$key -> $val <br>"; // display elements if you want
if(!is_numeric($val)){  // checking each element 
echo "Data Error ";
exit;
}
}
/////////// end of checking for injection attack // 

require "config.php";
$sql="select * from subcategory where cat_id IN ($cat_id)";

//echo $sql;
//echo mysql_error();
$myarray=array();
$str="";
foreach ($dbo->query($sql) as $row) {
$str=$str . "$row[subcategory]".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
//echo $str;
//echo "new Array($str)";

$main = array($str);
echo json_encode($main); 
?>
