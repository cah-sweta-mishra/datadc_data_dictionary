function check(fieldname,size,type,message)
{
	if(typeof fieldname=='undefined')
	{
	alert('The field name is not in the specified form'+fieldname);
	return false;
	}
var a,b,c;
//alert(fieldname.value);
if(type=='PASSWORD')
{
	//alert(arguments[4].value);
	var x=arguments[4].value;
	a=fieldname.value;
	//alert(x+a.value);
	if(a!=x)
	{
	alert(message);
	  fieldname.focus();
	  return(false);
	}
}

if(type=='TEXT')
{
	a=fieldname.value;
	if(a.length<size)
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
}
if(type=='EMAIL')
{
	a=fieldname.value;
	if(a.length<size || a.indexOf('@')<0 || a.indexOf('.')<0)
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
}
if(type=='NUMBER')
{
	a=fieldname.value;
	if(a.length<size )
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
	 for(i=0;i<(a.length-1);i++)
	  if(a.charAt(i)<'0' || a.charAt(i)>'9')
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
	 
}
if(type=='SELECT')
{
	a=fieldname.value;
	if(a=='Choose')
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
}
if(type=='RADIO')
{
	a=fieldname;
	txtGenderLength = a.length;
			 var i=0;
			if(txtGenderLength > 1){
				for(GenIndex = 0; GenIndex < txtGenderLength; GenIndex++ ){
					if(a[GenIndex].checked == false){
						i=i+1;
					}
				}
			}
			if(i==txtGenderLength)
			{
				alert(message);
				return false;
			}	
}
if(type=='IMAGE')
{
	a=fieldname.value;
	if(a.length<size)
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
	b=a.lastIndexOf('.')+1;
	c=a.substring(b);
	if(c=='jpg'||c=='jpeg'||c=='png'||c=='gif')
	return true;
	else
	{
	alert('Select a Valid Image File');
	return false;
	}

}
if(type=='SQL')
{
	a=fieldname.value;
	if(a.length<size)
	  {
	  alert(message);
	  fieldname.focus();
	  return(false);
	  }
	b=a.lastIndexOf('.')+1;
	c=a.substring(b);
	if(c=='sql')
	return true;
	else
	{
	alert('Selected file is not an valid SQL file');
	return false;
	}

}
}

function textlimiter(count,textid,remainingcharid) //count integr,id of text box, id of remaining char
{
var tex = document.getElementById(textid).value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.getElementById(textid).value =tex;
        return false;
}
document.getElementById(remainingcharid).innerHTML = count-len;
}