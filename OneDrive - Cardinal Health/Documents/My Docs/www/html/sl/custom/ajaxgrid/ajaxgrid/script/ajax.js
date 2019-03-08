function ajaxfunctionpost(url,params,textid){

	var ajaxRequest;

	document.getElementById(textid).innerHTML="<img src=\"images/loading.gif\" width=\"20\" height=\"20\" border=\"0\" />";
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
						try
						{
						ajaxRequest = new XDomainRequest();
						}
						catch(e)
						{
						// Something went wrong
						alert("Your browser broke!");
						return false;
			}
		}
	}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4 &&ajaxRequest.status == 200){
		     //alert('changeing');
			document.getElementById(textid).innerHTML = ajaxRequest.responseText;

		}
		
	}
	//var params = "countryid="+uname;
    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
	ajaxRequest.setRequestHeader("Content-Length", params.length);
	ajaxRequest.setRequestHeader("Connection", "close");
	ajaxRequest.send(params); 
}
function ajaxfunctionget(url,params,textid){

	var ajaxRequest;

	document.getElementById(textid).innerHTML="<img src=\"images/loading.gif\" width=\"20\" height=\"20\" border=\"0\" />";
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
						try
						{
						ajaxRequest = new XDomainRequest();
						}
						catch(e)
						{
						// Something went wrong
						alert("Your browser broke!");
						return false;
			}
		}
	}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4 &&ajaxRequest.status == 200){
		     //alert('changeing');
			document.getElementById(textid).innerHTML = ajaxRequest.responseText;

		}
		
	}
	url=url+'?'+params;
    ajaxRequest.open("POST", url, true);
	ajaxRequest.send(params); 
}