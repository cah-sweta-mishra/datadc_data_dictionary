<?php /*
Copyright (c) 2007, Gur� Sistemas and/or Gustavo Adolfo Arcila Trujillo
All rights reserved.
www.gurusistemas.com

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer
	  in the documentation and/or other materials provided with the distribution.
    * Neither the name of the Gur� Sistemas Intl nor Gustavo Adolfo Arcila Trujillo nor the names of its contributors may be used to
	  endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS  "AS IS"  AND ANY EXPRESS  OR  IMPLIED WARRANTIES, INCLUDING, 
BUT NOT LIMITED TO,  THE IMPLIED WARRANTIES  OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO EVENT
SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,  INDIRECT,  INCIDENTAL, SPECIAL, EXEMPLARY,  OR CONSEQUENTIAL 
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF  USE, DATA, OR PROFITS;  OR BUSINESS 
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE 
OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. 


Please remember donating is one way to show your support, copy and paste in your internet browser the following link to make your donation
https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=tavoarcila%40gmail%2ecom&item_name=phpMyDataGrid%202007&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8

For more info, samples, tips, screenshots, help, contact, forum, please visit phpMyDataGrid site  
http://www.gurusistemas.com/indexdatagrid.php

For contact author: tavoarcila at gmail dot com or info at gurusistemas dot com
*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>phpMyDatagrid - Sample file</title>

<?php
	include ("phpmydatagrid.class.php");

	$objGrid = new datagrid;
	
	/* HTML Output will have Line Breaks on each line generated */
	$objGrid -> friendlyHTML();

	/* Define path for images */
	$objGrid -> pathtoimages("./images/");

	/* For compatibility with XHTML pages, some tags like IMG and INPUT
	   must be closed with a Slash "/" by using this function you can 
	   define if tags will be or not closed. (If the function is not 
	   invoked, by default the script will close tags) */

	$objGrid -> closeTags(true);  
	$objGrid -> form('employee', true);
	
	$objGrid -> conectadb("127.0.0.1", "phpclasses", "test", "guru");
	
	$objGrid -> tabla ("employees");

	/* Define fields to show, defining the MASK parameter */
	/* id = Integer, no decimals */
	$objGrid -> FormatColumn("id", "ID Employee", 5, 5, 1, "50", "center", "integer");
	/* name = String, is the mask by default, then no masking required */
	$objGrid -> FormatColumn("name", "Name", 30, 30, 0, "150", "left");
	/* lastname = String, is the mask by default, then no masking required */
	$objGrid -> FormatColumn("lastname", "Last name", 30, 30, 0, "150", "left");
	/* age = Integer, no decimals */
	$objGrid -> FormatColumn("age", "Age", 5, 5, 0, "50", "right");
	/* afiliation = Date, display data in day-month-year format spaced by slashes "/" */
	$objGrid -> FormatColumn("afiliation", "Afiliation Date", 10, 10, 0, "100", "center", "date:dmy:/");
	/* Status, select option from menu
		1 = Single
		2 = Married
		3 = Divorced */
	$objGrid -> FormatColumn("status", "Status", 5, 5, 0, "60", "left", "select:1_Single:2_Married:3_Divorced");
	/* active, checkbox (Yes/No) */
	$objGrid -> FormatColumn("active", "Active", 2, 2, 0,"50", "center", "check:No:Yes");
	/* salary, Money format */
	$objGrid -> FormatColumn("salary", "Salary", 10, 10, 0, "90", "right", "money:&euro;");
	/* workeddays, integer */
	$objGrid -> FormatColumn("workeddays", "Work days", 5, 2, 0, "50", "right", "integer");

	$objGrid -> setHeader();
?>
</head>

<body>
<?php 
	$objGrid -> grid();
	$objGrid -> desconectar();
?>
</body>
</html>
