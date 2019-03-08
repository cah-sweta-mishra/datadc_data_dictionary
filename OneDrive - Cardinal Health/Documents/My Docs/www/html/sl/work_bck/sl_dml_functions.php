<?php
class Sl_dml_functions{

// Generate modify form
function FormModifyObject($rowid) {
	global $g_colorbkg, $g_main;

	$stmt = "
		SELECT ROWID,
			Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,
			Alias_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD
		FROM sl_object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$rowid		= $row->ROWID;
	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$type		= $row->Type_TX;
	$name		= $row->Name_TX;
	$version	= $row->Version_DC;
	$tower		= $row->Tower_TX;
	$assettype	= $row->AssetType_TX;
	$alias		= $row->Alias_TX;
	$wricef		= $row->WRICEF_TX;
	$alm		= $row->ALM_TX;
	$desc		= $row->Desc_TX;
	$usage		= $row->Usage_TX;
	$techrules  = $row->TechRules_TX;
	$comment	= $row->Comment_TX;
	$group		= $row->Group_CD;
	$created	= $row->Created_DS;
	$creator	= $row->Creator_ID;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;
	$status		= $row->Status_CD;

	mysqli_free_result($result);

	$name		= stripslashes($name);
	$tower		= stripslashes($tower);
	$assettype	= stripslashes($assettype);
	$alias		= stripslashes($alias);
	$wricef		= stripslashes($wricef);
	$alm		= stripslashes($alm);
	$desc		= stripslashes($desc);
	$usage		= stripslashes($usage);
	$techrules  = stripslashes($techrules);
	$comment	= stripslashes($comment);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Object Modify\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<INPUT TYPE=HIDDEN NAME=name VALUE=\"$name\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=subject VALUE=\"$subject\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=class VALUE=\"$class\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=type VALUE=\"$type\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT TYPE=text SIZE=150 MAXLENGTH=150
						NAME=n_name VALUE=\"$name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=version VALUE=\"$version\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>

			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Tower:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Asset Type:</FONT></td>
				</tr>
				<tr>
					<td><INPUT  TYPE=text MAXLENGTH=45 NAME=tower VALUE=\"$tower\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:300px; background-color:white\">
					</td>
					<td><INPUT  TYPE=text MAXLENGTH=45 NAME=assettype VALUE=\"$assettype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
			</table>
		<FONT FACE=arial SIZE=2>Keywords:</FONT><BR>
			<INPUT TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
      <FONT FACE=arial SIZE=2>WRICEF#:</FONT><BR>
  			<TEXTAREA NAME=wricef cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$wricef</TEXTAREA><BR>
  		<FONT FACE=arial SIZE=2>ALM Req ID:</FONT><BR>
			<TEXTAREA NAME=alm cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$alm</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Description:</FONT><BR>
			<TEXTAREA NAME=desc cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Business Rules:</FONT><BR>
			<TEXTAREA NAME=usage cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$usage</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Technical Rules:</FONT><BR>
			<TEXTAREA NAME=techrules cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$techrules</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Comment:</FONT><BR>
			<TEXTAREA NAME=comment cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$comment</TEXTAREA><BR>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=creator VALUE=\"$creator\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Group:</FONT><td>
				<td><SELECT NAME=group
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
					<option selected value=\"$group\">$group
					<option value=\"General\">General
					<option value=\"Private\">Private
					</SELECT></td>
			</tr>
			<tr>
				<td><FONT FACE=arial SIZE=2>Changed:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=changed VALUE=\"$changed\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Changer:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><SELECT NAME=status
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
					<option selected value=\"$status\">$status
					<option value=\"Active\">Active
					<option value=\"Inactive\">Inactive
					</SELECT></td>
			</tr>
		</table>";

		// Display Object Extended Properties

		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=1>Extended Properties:</FONT><P>";

		$stmt = "
			SELECT Property_TX,Value_TX
			FROM sl_attr
			WHERE
				sl_object_FK = $rowid";

		ProcCallDatabase($result,$stmt);

			printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

				printf("<TR>
					<TD WIDTH=150><B>Property Name</B></TD>
					<TD><B>Property Value</B></TD>
					</TR>\n");

				$eprow		= -1;		// reset extended property row counter
				$epname		= array();	// define extended property name array
				$epvalue	= array();	// define extended property value array

				while (($row = mysqli_fetch_object($result))){
					$eprow = $eprow + 1;		// array starts at one
					printf("
						<TR>
							<TD><INPUT READONLY TYPE=text
								NAME=epname[$eprow] VALUE=\"%s\"
								style=\"color:black; font-family:Times; font-weight:bold;
								width:150px; font-size:12px; background-color:$g_colorbkg\">
							</TD>
							<TD><INPUT TYPE=text MAXLENGTH=100
								NAME=epvalue[$eprow] VALUE=\"%s\"
								style=\"color:black; font-family:Times; font-weight:normal;
								width:450px; font-size:12px; background-color:white\">
							</TD>
						</TR>\n",
					$row->Property_TX,
					$row->Value_TX);
				}

			printf("</TABLE>\n");

		echo "
		<INPUT TYPE=HIDDEN NAME=eprow VALUE=$eprow>
		<BR>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

	mysqli_free_result($result);

}


// Generate copy form
function FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex) {
	global $g_colorbkg, $g_main;

	$s_user = $_SESSION['s_user'];

	$version	= "1.000";
	$created	= date("Y-m-d H:i:s");
	$creator	= $s_user;
	$changed	= date("Y-m-d H:i:s");
	$changer	= $s_user;
	$status		= 'Active';

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Object Copy\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<INPUT TYPE=HIDDEN NAME=name VALUE=\"$n_name\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=subject VALUE=\"$subject\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=class VALUE=\"$class\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=type VALUE=\"$type\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
						NAME=n_name VALUE=\"$name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=version VALUE=\"$version\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
			
		<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Tower:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Asset Type:</FONT></td>
				</tr>
				<tr>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=tower VALUE=\"$tower\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:300px; background-color:white\">
					</td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=assettype VALUE=\"$assettype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
			</table>	
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=2>Keywords:</FONT><BR>
			<INPUT TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
      <FONT FACE=arial SIZE=2>WRICEF#:</FONT><BR>
      <TEXTAREA NAME=wricef cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$wricef</TEXTAREA><BR>
  	<FONT FACE=arial SIZE=2>ALM Req ID:</FONT><BR>
			<TEXTAREA NAME=alm cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$alm</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Description:</FONT><BR>
			<TEXTAREA NAME=desc cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Business Rules:</FONT><BR>
			<TEXTAREA NAME=usage cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$usage</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Technical Rules:</FONT><BR>
			<TEXTAREA NAME=techrules cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$techrules</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Comment:</FONT><BR>
			<TEXTAREA NAME=comment cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$comment</TEXTAREA><BR>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=creator VALUE=\"$creator\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Group:</FONT><td>
				<td><SELECT NAME=group
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
					<option selected value=\"$group\">$group
					<option value=\"General\">General
					<option value=\"Private\">Private
					</SELECT></td>
			</tr>
			<tr>
				<td><FONT FACE=arial SIZE=2>Changed:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=changed VALUE=\"$changed\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Changer:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><SELECT NAME=status
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
					<option selected value=\"$status\">$status
					<option value=\"Active\">Active
					<option value=\"Inactive\">Inactive
					</SELECT></td>
			</tr>
		</table>";

		// Display Object Extended Properties

		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=1>Extended Properties:</FONT><P>";

		$stmt = "
			SELECT Property_TX,Value_TX
			FROM sl_attr
			WHERE
				Category_TX		= '$category' AND
				Subject_TX		= '$subject' AND
				Class_TX		= '$class' AND
				Type_TX			= '$type' AND
				Name_TX			= '$name' AND
				Version_DC		= '$version';";

		ProcCallDatabase($result,$stmt);

			printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

				printf("<TR>
					<TD WIDTH=150><B>Property Name</B></TD>
					<TD><B>Property Value</B></TD>
					</TR>\n");

				$eprow		= -1;		// reset extended property row counter
				$epname		= array();	// define extended property name array
				$epvalue	= array();	// define extended property value array

				while (($row = mysqli_fetch_object($result))){
					$eprow = $eprow + 1;		// array starts at one
					printf("
						<TR>
							<TD><INPUT READONLY TYPE=text
								NAME=epname[$eprow] VALUE=\"%s\"
								style=\"color:black; font-family:Times; font-weight:bold;
								width:150px; font-size:12px; background-color:$g_colorbkg\">
							</TD>
							<TD><INPUT TYPE=text MAXLENGTH=100
								NAME=epvalue[$eprow] VALUE=\"%s\"
								style=\"color:black; font-family:Times; font-weight:normal;
								width:450px; font-size:12px; background-color:white\">
							</TD>
						</TR>\n",
					$row->Property_TX,
					$row->Value_TX);
				}

			printf("</TABLE>\n");

		echo "
		<INPUT TYPE=HIDDEN NAME=eprow VALUE=$eprow>
		<BR>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

	mysqli_free_result($result);

}	


// Copy Object
function ProcCopyObject($category,$subject,$class,$type,$name,$n_name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex) {

	// Check if replacement object name value is null
	if ($n_name == "") {
		$name = $n_name;
		GenerateHeader("[Copy] <FONT FACE=arial SIZE=2 COLOR=red>
			The replacement Object Name cannot be NULL</FONT>");
		$dml->FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
		exit();
	}

	// Check for preexistence of replacement Object Name in sl_object table
	$stmt =
		"SELECT Name_TX FROM sl_object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'		AND
				Name_TX			= '$n_name'";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
		$name = $n_name;
		GenerateHeader("[Copy] <FONT FACE=arial SIZE=2 COLOR=red>
			The replacement Object Name - $n_name - already exists -- the name must be unique</FONT>");
		$dml->FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
		exit();
	}

	$stmt = "Insert into sl_object
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,
		Alias_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$n_name."', '".
			$version."', '".
			$tower."', '".
			$assettype."', '".
			$alias."', '".
			$wricef."', '".
			$alm."', '".
			$desc."', '".
			$usage."', '".
			$techrules."', '".
			$comment."', '".
			$group."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	// Find ROWID of record just inserted

	$stmt = "SELECT ROWID FROM sl_object WHERE
		Category_TX		='$category'	AND
		Subject_TX		='$subject'	AND
		Class_TX		='$class'	AND
		Type_TX			='$type'	AND
		Name_TX			='$n_name'	AND
		Version_DC		='$version'	AND
		Tower_TX		='$tower'	AND
		AssetType_TX    ='$assettype' AND
		Alias_TX		='$alias'	AND
		WRICEF_TX		='$wricef'	AND
		ALM_TX		    ='$alm'	AND
		Desc_TX			='$desc'	AND
		Usage_TX		='$usage'	AND
		TechRules_TX	='$techrules' AND
		Comment_TX		='$comment'	AND
		Group_CD		='$group'	AND
		Created_DS		='$created'	AND
		Creator_ID		='$creator'	AND
		Changed_DS		='$changed'	AND
		Changer_ID		='$changer'	AND
		Status_CD		='$status'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$rowid		= $row->ROWID;

	// Expolde arrays variables

	$epname		= explode("&",$epnamex);	// expand string back into an array
	$epvalue	= explode("&",$epvaluex);	// expand string back into an array

	// Update extended properties
	for ($counter = 0; $counter < $eprow + 1; $counter++) {
		$epvalue[$counter]	= trim(addslashes($epvalue[$counter]));

		$stmt = "
			Insert into sl_attr (
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
				VALUES ('".
					$rowid."', '".
					$category."', '".
					$subject."', '".
					$class."', '".
					$type."', '".
					$n_name."', '".
					$version."', '".
					$epname[$counter]."', '".
					$epvalue[$counter]."')";

		ProcCallDatabase($result,$stmt);
	}

	GenerateHeader("[Main Menu] The object was copied successfully");
	FormButtonsMainMenu();
	exit();

}

function FormModifyConfiguration() {
	$s_user = $_SESSION['s_user'];
	global $g_main;

	// Create the SQL command select the record from the database
	$stmt = "
		SELECT
			Config_ID,Color_Bkg_HX,Color_Msg_HX,Logo_Primary_TX,
			Read_Only_FL,Max_Rows_IN,Attr_01_TX,Attr_02_TX,Attr_03_TX,
			Attr_04_TX,Attr_05_TX,Attr_06_TX,Attr_07_TX,Attr_10_TX,
			Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD
		from sl_config where Config_ID = 'Default'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$configid		= $row->Config_ID;
	$colorbkg		= $row->Color_Bkg_HX;
	$colormsg		= $row->Color_Msg_HX;
	$logoprim		= $row->Logo_Primary_TX;
	$readonly		= $row->Read_Only_FL;
	$maxrows		= $row->Max_Rows_IN;
	$loginmemo		= $row->Attr_01_TX;
	$adhocsql		= $row->Attr_02_TX;
	$configpath		= $row->Attr_03_TX;
	$lite			= $row->Attr_04_TX;
	$dbbinpath		= $row->Attr_05_TX;
	$oraclestr		= $row->Attr_06_TX;
	$timeout		= $row->Attr_07_TX;
	$perpage		= $row->Attr_10_TX;
	$created		= $row->Created_DS;
	$creator		= $row->Creator_ID;
	$changed		= $row->Changed_DS;
	$changer		= $row->Changer_ID;
	$status			= $row->Status_CD;

	mysqli_free_result($result);

	$configid	= stripslashes($configid);
	$colorbkg	= stripslashes($colorbkg);
	$colormsg	= stripslashes($colormsg);
	$loginmemo	= stripslashes($loginmemo);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Config Modify\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:120px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:120px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Reset to Default\"
			style=\"color:black; width:120px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Configuration ID:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=configid VALUE=\"$configid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Background Color:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=6 NAME=colorbkg VALUE=\"$colorbkg\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
						<FONT FACE=arial SIZE=2 color=blue>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<a href=javascript:JSopenColorChartWindow();>Hex Color Chart</a>
						</FONT>
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Message Color:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=6 NAME=colormsg VALUE=\"$colormsg\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Primary Logo:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=logoprim VALUE=\"$logoprim\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Read Only Enabled:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=1 NAME=readonly VALUE=\"$readonly\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>SL Lite URL Enabled:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=1 NAME=lite VALUE=\"$lite\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Ad Hoc SQL Enabled:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=1 NAME=adhocsql VALUE=\"$adhocsql\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Max Rows Returned:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=5 NAME=maxrows VALUE=\"$maxrows\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Time Out in Seconds:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=5 NAME=timeout VALUE=\"$timeout\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Pagination per page:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=2 NAME=perpage VALUE=\"$perpage\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150 valign=top><FONT FACE=arial SIZE=2>Login Memo:</FONT></td>
					<td>
						<TEXTAREA NAME=loginmemo cols=50 rows=3
							style=\"color:black; font-family:Times; font-weight:bold;
							font-size:12px; background-color:white\">$loginmemo
						</TEXTAREA>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=500>
						<FONT FACE=arial SIZE=2>
							File paths must use forward slashes (/) not back slashes (\)
							<BR>
							The file path name must end with a foward slash (C:/mysql/bin/)
						</FONT>
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>External File Path:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=80 NAME=configpath VALUE=\"$configpath\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:450px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Database Binaries Path:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=80 NAME=dbbinpath VALUE=\"$dbbinpath\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:450px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150 valign=top><FONT FACE=arial SIZE=2>
						Oracle Database Connection String:</FONT></td>
					<td>
						<TEXTAREA NAME=oraclestr cols=75 rows=3
							style=\"color:black; font-family:Times; font-weight:bold;
							font-size:12px; background-color:white\">$oraclestr
						</TEXTAREA>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:125px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=creator VALUE=\"$creator\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=changed VALUE=\"$changed\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:125px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45
					NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
			style=\"color:black; width:120px;\">
	</FORM>";
}


// Generate delete form
function FormDeleteObject($rowid) {
	global $g_main;

	$stmt = "
		SELECT ROWID,
			Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC
		FROM sl_object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$rowid		= $row->ROWID;
	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$type		= $row->Type_TX;
	$name		= $row->Name_TX;
	$version	= $row->Version_DC;

	mysqli_free_result($result);

	$name		= stripslashes($name);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Delete\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=category VALUE=\"$category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=subject VALUE=\"$subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=class VALUE=\"$class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=type VALUE=\"$type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=150 MAXLENGTH=100
						NAME=name VALUE=\"$name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=version VALUE=\"$version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=le[ft>
	</FORM>";
}

// Delete Selected Entry
function ProcDeleteObject($rowid) {

	// Delete Object
	$stmt = "DELETE from sl_object where ROWID=$rowid";
	ProcCallDatabase($result,$stmt);

	// Delete Attributes associated with Object
	$stmt = "DELETE from sl_attr where sl_object_FK=$rowid";
	ProcCallDatabase($result,$stmt);

	// Delete Object Parent Reletionships
	$stmt = "DELETE from sl_rel where P_sl_object_FK=$rowid";
	ProcCallDatabase($result,$stmt);

	// Delete Child Object Reletionships
	$stmt = "DELETE from sl_rel where C_sl_object_FK=$rowid";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Main Menu] The entry was deleted successfully");
	FormButtonsMainMenu();
	exit();
}

function FormModifyUserPassword() {
	global $userid, $g_main;

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm User Password Change\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>User ID:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=userid VALUE=\"$userid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>New Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=45 NAME=newpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Confirm Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=45 NAME=confirmpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
			style=\"color:black; width:120px;\">
	</FORM>";
}
}
?>