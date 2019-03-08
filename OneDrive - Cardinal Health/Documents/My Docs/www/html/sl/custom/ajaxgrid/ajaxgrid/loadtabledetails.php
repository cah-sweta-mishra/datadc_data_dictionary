<?php
$hostname=$_POST['hostname'];
$db_username=$_POST['username'];
$db_password=$_POST['password'];
$database=$_POST['database'];
$tablename=$_POST['tablename'];
/*$hostname='localhost';
$db_username='root';
$db_password='';
$database='autoclassified';
$tablename='tbl_auto_autoclub';*/
mysql_connect($hostname,$db_username,$db_password) or die('unable to connect db');
mysql_select_db($database)or die('unable to select database');
$sql = "select * FROM $tablename where 1 limit 0,1";
$result = mysql_query($sql);
$nooffields=mysql_num_fields($result);
$primarykey=array();
for($i=0;$i<$nooffields;$i++)
{
$field=mysql_fetch_field($result);
//print_r($field);
if($field->primary_key) array_push($primarykey,$field->name);
}

if( count($primarykey)>0)
{
?>

<table width="800" border="0" cellspacing="0" cellpadding="0" id="tbldetails">
  <tr>
    <th width="38">Table Dispaly</th>
     <th width="38">Add/Edit display</th>
    <th width="200">Field Name</th>
    <th width="200">Display Name</th>
    <th width="200" >Type to be display</th>
    <th width="200" >&nbsp;</th>
  </tr>
  <?php for($i=0;$i<$nooffields;$i++)
{
$field=mysql_fetch_field($result,$i);
if($field->primary_key) $field=mysql_fetch_field($result,++$i);
?>
  <tr>
    <td align="center"><input type="checkbox"  name="checkbox<?php echo $i; ?>" id="checkbox<?php echo $i; ?>" value="<?php echo $field->name; ?>" /></td>
    <td align="center"><input type="checkbox"  name="acheckbox<?php echo $i; ?>" id="checkbox<?php echo $i; ?>" value="<?php echo $field->name; ?>" /></td>
    <td><?php echo $field->name;?></td>
     <td><input type="text" name="disptext<?php echo $i; ?>" id="disptext<?php echo $i; ?>" value="<?php echo $field->name;?>" /></td>
    <td><select name="selectfieldtype<?php echo $i; ?>" id="selectfieldtype<?php echo $i; ?>" onchange="editcontrol(this.value,<?php echo $i; ?>);">
      <option value="TEXT">Text</option>
      <option value="TEXTAREA">Text Area</option>
      <option value="DATE">DATE</option>
      <option value="NUMBER">NUMBER</option>
      <option value="IMAGE">IMAGE</option>
      <option value="CHECKBOX">True/False</option>
      <option value="LIST">List</option>
    </select>
    </td>
    <td id="ddd<?php echo $i; ?>">&nbsp;</td>
  </tr>
  
  <?php } //close of for?>
</table>


<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="42" scope="col">Select</th>
    <th width="358" scope="col">Primary Key</th>
    <th width="200" scope="col">&nbsp;</th>
    <th width="200" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td align="center"><input type="checkbox" checked="checked" readonly="readonly" name="primarykeycheck" id="primarykeycheck" value="<?php echo $primarykey[0];?>" /></td>
    <td><?php echo $primarykey[0];?></td>
    <td>&nbsp;<input type="hidden" name="nooffields" id="nooffields" value="<?php echo $nooffields;?>" /><input type="hidden" name="primarykey1" id="primarykey1" value="<?php echo $primarykey[0];?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>Allow Add
      <input name="addcheck" type="checkbox" id="addcheck" value="A" checked="checked" />
Edit 
<input name="editcheck" type="checkbox" id="editcheck" value="E" checked="checked" />
View
<input name="viewcheck" type="checkbox" id="viewcheck" value="V" checked="checked" />
Delete
<input name="deletecheck" type="checkbox" id="deletecheck" value="D" checked="checked" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Configure" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<?php
} // end of if
else
echo 'no primary key in your table';
?>