<html>
<head>

<script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myarray = JSON.parse(httpxml.responseText);
var myarray=myarray.split(",");
for(j=document.testform.subcat.options.length-1;j>=0;j--)
{
document.testform.subcat.remove(j);
}


for (i=0;i<myarray.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray[i];
optn.value = myarray[i];
document.testform.subcat.options.add(optn);

} 
      }
    }
	var url="dd.php";
var cat_id=document.getElementById('s1').value;
url=url+"?cat_id="+cat_id;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
//alert(url);
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>
</head>
<body>
<form name="testform" method='POST' action='mainck.php'>Name:<input type=text name=fname>
Select first one <select name=cat id='s1' onchange=AjaxFunction();>
<option value=''>Select One</option>
<?Php
require "config.php";// connection to database 
$sql="select * from category ";
foreach ($dbo->query($sql) as $row) {

echo "<option value=$row[cat_id]>$row[category]</option>";

}

?>
</select>

<select name=subcat id='s2'>

</select><input type=submit value=submit>
</form>
<center><a href=main-multiple.php>Demo with Multiple Selection</a><br><br><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 
</body>
</html>