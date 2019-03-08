	<?php

	// sl_report.php
	// created 11-Aug-2009 (pjn)
	// updated 16-Nov-2009 (pjn)
	// (c)Copyright 2003-2012 SuperLuminate, All Rights Reserved

	// *************************************************************************************************
	// SECTION: Globals
	// *************************************************************************************************

	require("sl_globals.php");

	// Configuration variables

		// Get passed value after ? in URL to be used to access ROWID
		$rowid	= $_GET['ROWID'];

		// Create the SQL command select the record from the database
		$stmt = "
			SELECT
				Logo_Primary_TX
			from sl_config where Config_ID = 'Default'";

		ProcCallDatabase($result,$stmt);

		$row = mysqli_fetch_object($result);

		$g_logoprim		= $row->Logo_Primary_TX;

		mysqli_free_result($result);

	// Format Object for printing
		echo"
		<TABLE WIDTH=600 CELLPADDING=3 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=left>
					<IMG SRC=image/$g_logoprim>
					&nbsp;&nbsp;
					<FONT SIZE=-1>$g_version</FONT>
					<FONT FACE=Times SIZE=1><em>Powered by </em></FONT>
					<FONT FACE=Times SIZE=2>SuperLuminate</FONT>
				</TD>
			</TR>
		</TABLE>";

		$stmt = "
			SELECT ROWID,
				Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
				Alias_TX,Desc_TX,Usage_TX,Comment_TX,Group_CD,
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
		$alias		= $row->Alias_TX;
		$desc		= $row->Desc_TX;
		$usage		= $row->Usage_TX;
		$comment	= $row->Comment_TX;
		$group		= $row->Group_CD;
		$created	= $row->Created_DS;
		$creator	= $row->Creator_ID;
		$changed	= $row->Changed_DS;
		$changer	= $row->Changer_ID;
		$status		= $row->Status_CD;

		mysqli_free_result($result);

		$name		= stripslashes($name);
		$alias		= stripslashes($alias);
		$desc		= stripslashes($desc);
		$usage		= stripslashes($usage);
		$comment	= stripslashes($comment);

	//  Convert < > to HEX so embedded HTML commands do not execute
		$desc		= str_replace('<','&#60',$desc);
		$usage		= str_replace('<','&#60',$usage);
		$comment	= str_replace('<','&#60',$comment);
		$desc		= str_replace('>','&#62',$desc);
		$usage		= str_replace('>','&#62',$usage);
		$comment	= str_replace('>','&#62',$comment);

	//  Convert CRLF to <BR> and CR to <BR> if no LF
		$desc		= str_replace(chr(13).chr(10),'<BR>',$desc);
		$desc		= str_replace(chr(10),'<BR>',$desc);
		$usage		= str_replace(chr(13).chr(10),'<BR>',$usage);
		$usage		= str_replace(chr(10),'<BR>',$usage);
		$comment	= str_replace(chr(13).chr(10),'<BR>',$comment);
		$comment	= str_replace(chr(10),'<BR>',$comment);

	//  Convert TAB to 4 spaces
		$desc		= str_replace(chr(9),'&nbsp&nbsp&nbsp&nbsp',$desc);
		$usage		= str_replace(chr(9),'&nbsp&nbsp&nbsp&nbsp',$usage);
		$comment	= str_replace(chr(9),'&nbsp&nbsp&nbsp&nbsp',$comment);

		echo "
		<FORM METHOD=POST ACTION=$g_main>
			<hr size=1 width=620 noshade align=left>
			<table width=600 border=0>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Category:</FONT></td>
					<td width=500><font FACE=times SIZE=3><b>$category</b></font></td>
				</tr>
				<tr>
					<td width=100><FONT FACE=arial SIZE=2>Subject:</FONT></td>
					<td width=500><font FACE=times SIZE=3><b>$subject</b></font></td>
				</tr>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Class:</FONT></td>
					<td width=500><font FACE=times SIZE=3><b>$class</b></font></td>
				</tr>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Type:</FONT></td>
					<td width=500><font FACE=times SIZE=3><b>$type</b></font></td>
				</tr>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Name:</FONT></td>
					<td width=500><font FACE=times SIZE=3><b>$name</b></font></td>
				</tr>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Version:</FONT></td>
					<td width=500><font FACE=times SIZE=3><b>$version</b></font></td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table width=600 border=0>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Alias:</FONT></td>
					<td width=500><font FACE=times SIZE=3>$alias</font></td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table width=620 border=0>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Description:</FONT></td>
				</tr>
				<tr>
					<td width=620><font FACE=times SIZE=3>$desc</font></td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table width=620 border=0>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Usage:</FONT></td>
				</tr>
				<tr>
					<td width=620><font FACE=times SIZE=3>$usage</font></td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table width=620 border=0>
				<tr>
					<td width=80><FONT FACE=arial SIZE=2>Comment:</FONT></td>
				</tr>
				<tr>
					<td width=620><font FACE=times SIZE=3>$comment</font></td>
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

			printf("<TABLE WIDTH=620 CELLPADDING=0 CELLSPACING=0 BORDER=0>\n");

				while (($row = mysqli_fetch_object($result))){

					printf("
						<TR>
							<td width=150><FONT FACE=arial SIZE=2>%s:</FONT></td>
							<td width=400><font FACE=times SIZE=3>%s</font></td>
						</TR>\n",
					$row->Property_TX,
					$row->Value_TX);
				}

			printf("</TABLE>\n");

		echo "
		</FORM>";

		mysqli_free_result($result);

		// Display Parent Object Relationships

		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=1>Parent Objects: (class / name)</FONT><BR><BR>";

		$stmt = "
			SELECT P_Class_TX, P_Name_TX
			FROM sl_rel
			WHERE
				C_Category_TX = '$category' and C_Subject_TX = '$subject'
				and C_Class_TX = '$class' and C_Type_TX = '$type'
				and C_Name_TX = '$name' and C_Version_DC = $version";

		ProcCallDatabase($result,$stmt);

		echo "
		<FORM METHOD=POST ACTION=$g_main>";
			printf("<TABLE WIDTH=620 CELLPADDING=0 CELLSPACING=0 BORDER=0>\n");

				while (($row = mysqli_fetch_object($result))){

					printf("<TR>
						<TD WIDTH=150>%s:</TD>
						<TD WIDTH=400>%s</TD>
						</TR>\n",
					$row->P_Class_TX,
					$row->P_Name_TX);
				}

			printf("</TABLE>\n");

		echo "
		</FORM>";

		mysqli_free_result($result);

		// Display Child Object Relationships

		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=1>Child Objects: (class / name)</FONT><BR>";

		$stmt = "
			SELECT C_Class_TX, C_Name_TX
			FROM sl_rel
			WHERE
				P_Category_TX = '$category' and P_Subject_TX = '$subject'
				and P_Class_TX = '$class' and P_Type_TX = '$type'
				and P_Name_TX = '$name' and P_Version_DC = $version";

		ProcCallDatabase($result,$stmt);

		echo "
		<FORM METHOD=POST ACTION=$g_main>";
			printf("<TABLE WIDTH=620 CELLPADDING=0 CELLSPACING=0 BORDER=0>\n");

				while (($row = mysqli_fetch_object($result))){

					printf("<TR>
						<TD WIDTH=150>%s:</TD>
						<TD WIDTH=400>%s</TD>
						</TR>\n",
					$row->C_Class_TX,
					$row->C_Name_TX);
				}

			printf("</TABLE>\n");

		echo "
		</FORM>";

		mysqli_free_result($result);

		echo "
		<hr size=1 width=620 noshade align=left>
		<table width=600 border=0>
			<tr>
				<td width=80><FONT FACE=arial SIZE=2>Created:</FONT></td>
				<td width=500><font FACE=times SIZE=3>$created</font></td>
				<td width=80><FONT FACE=arial SIZE=2>Creator:</FONT></td>
				<td width=500><font FACE=times SIZE=3>$creator</font></td>
			</tr>
			<tr>
				<td width=80><FONT FACE=arial SIZE=2>Changed:</FONT></td>
				<td width=500><font FACE=times SIZE=3>$changed</font></td>
				<td width=80><FONT FACE=arial SIZE=2>Changer:</FONT></td>
				<td width=500><font FACE=times SIZE=3>$changer</font></td>
			</tr>
			<tr>
				<td width=80><FONT FACE=arial SIZE=2>Group:</FONT></td>
				<td width=500><font FACE=times SIZE=3>$group</font></td>
				<td width=80><FONT FACE=arial SIZE=2>Status:</FONT></td>
				<td width=500><font FACE=times SIZE=3>$status</font></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>";



	// Call Database
	function ProcCallDatabase(&$result,$stmt) {
		global $g_host, $g_user, $g_pass, $g_database;

		// Connect to the Database
		if (!($link=mysqli_connect($g_host, $g_user, $g_pass))) {
			ProcErrMsg(sprintf("[Error] error connecting to host %s, by user %s",$g_host, $g_user));
			exit();
		}

		// Select the Database
		if (!mysqli_select_db($link,$g_database)) {
			ProcErrMsg(sprintf("[Error] Error in selecting %s database", $g_database));
			ProcErrMsg(sprintf("error:%d %s", mysqli_errno($link), mysqli_error($link)));
			exit();
		}

		// Execute the Statement
		if (!($result= mysqli_query($link,$stmt))) {
			ProcErrMsg(sprintf("[Error] Error in executing %s stmt", $stmt));
			ProcErrMsg(sprintf("error:%d %s", mysqli_errno($link), mysqli_error($link)));
			exit();
		}

	}

	// Display error message and reset selection
	function ProcErrMsg($message) {
		global $g_main;

		$auggie = "";
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>$message</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:180px;\">
		</FORM>";
	}

	// *************************************************************************************************
	// SECTION: End Of File
	// *************************************************************************************************
	?>
