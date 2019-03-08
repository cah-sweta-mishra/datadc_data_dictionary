<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/grid.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/useran.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function loaddb()
{

form=document.form1;
if(check(form.textfield,3,'TEXT','Enter Host NAme ')== false) return(false);
if(check(form.textfield2,3,'TEXT','Enter Username ')== false) return(false);
params='hostname='+form.textfield.value+'&username='+form.textfield2.value+'&password='+form.textfield3.value;
//alert(params);
ajaxfunctionpost('loaddb.php',params,'loaddb');

}
function loadtable()
{
form=document.form1;
params='hostname='+form.textfield.value+'&username='+form.textfield2.value+'&password='+form.textfield3.value+'&database='+form.selectdb.value;
//alert(params);
ajaxfunctionpost('loadtable.php',params,'loadtable');
}
function loadtabledetail()
{
form=document.form1;
params='hostname='+form.textfield.value+'&username='+form.textfield2.value+'&password='+form.textfield3.value+'&database='+form.selectdb.value+'&tablename='+form.selecttable.value;
//alert(params);
ajaxfunctionpost('loadtabledetails.php',params,'loadtabledetails');

}
function editcontrol(abc,id)
{
x='checkbox'+id;
z=document.getElementById(x).checked=true;
x='ddd'+id;
document.getElementById(x).innerHTML='';
if(abc=='LIST')
{
msg="Enter Option List Separated By Comma<br><textarea name=\"listarea"+id+"\" id=\"listarea"+id+"\" cols=\"45\" rows=\"5\"></textarea>";
x='ddd'+id;
document.getElementById(x).innerHTML=msg;
}
if(abc=='CHECKBOX')
{
msg="Enter Text Shown Here<br><input type=\"text\" name=\"textarea"+id+"\" id=\"textarea"+id+"\" />";
x='ddd'+id;
document.getElementById(x).innerHTML=msg;
}
if(abc=='IMAGE')
{
msg="Enter Text Shown Here<br><input type=\"text\" name=\"image"+id+"\" id=\"image"+id+"\" /> <img src=\"images/photo.png\" width =\"20\" height=\"20\" />";
x='ddd'+id;
document.getElementById(x).innerHTML=msg;
}
}
</script>
</head>

<body><form id="form1" name="form1" method="post" action="write.php" onsubmit="return formsubmit();"> 
<table width="800" border="0" cellspacing="0" class="tablebdr" cellpadding="0">
 
 
  <tr>
    <th colspan="3" scope="col" class="tablehdr">Select Data Base Details</th>
  </tr>
  <tr>
    <td width="38">&nbsp;</td>
    <td width="235">host name</td>
    <td width="527"> 
        <input type="text" name="textfield" id="textfield" value="localhost" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>username</td>
    <td><input type="text" name="textfield2" id="textfield2" value="root" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>password</td>
    <td><input type="text" name="textfield3" id="textfield3" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="button" name="button" id="button" value="Load Db" onclick="loaddb();" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Select Data base</td>
    <td><span id="loaddb"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Select Table</td>
    <td><span id="loadtable">
      
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span id="loadtabledetails"></span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   
</table>  </form>
</body>
</html>
