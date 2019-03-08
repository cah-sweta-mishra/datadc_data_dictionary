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

	// Get passed value after ? in URL to be used to access Table
	$tblname	= $_GET['TBL'];



// Format Object for printing
	echo"
	<TABLE WIDTH=600 CELLPADDING=3 CELLSPACING=0 BORDER=0>
		<TR>
			<TD align=left>
				<IMG SRC=image/cahLogo.gif>
				&nbsp;&nbsp;
				<FONT SIZE=-1>$g_version</FONT>
				<FONT FACE=Times SIZE=1><em>Powered by </em></FONT>
				<FONT FACE=Times SIZE=2>SuperLuminate</FONT>
			</TD>
		</TR>
	</TABLE>";

	$json = file_get_contents("http://161.244.7.26:50111/templeton/v1/ddl/database/default/table/$tblname?user.name=ghosub01&format=extended");



									$data = json_decode($json);

									echo "<BR><B>Table Name</B> : $tblname";
									echo "<BR><B>Location</B> : $data->location";
									echo "<BR><B>Total No. of Files</B> : $data->totalNumberFiles";
									echo "<BR><B>Owner</B> : $data->owner";
									echo "<BR><BR><B>Column Details:</B><BR>";
									echo "<TABLE WIDTH=420 CELLPADDING=1 CELLSPACING=1 BORDER=1>
									<TR bgcolor=#ced7e1>
									<TD align=center><B>Column Name</B></TD>
									<TD align=center><B>Type</B></TD></TR>";

																	foreach ( $data->columns as $column )
																	{
																	    echo "<TR><TD>{$column->name}</TD><TD>{$column->type}</TD></TR>";
																	    }
									echo "</TABLE>";

// *************************************************************************************************
// SECTION: End Of File
// *************************************************************************************************
?>