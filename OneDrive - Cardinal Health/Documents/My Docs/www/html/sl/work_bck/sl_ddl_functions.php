<?php

class Sl_ddl_functions{
	
function FormLogin() {
	global $g_readonly, $g_loginmemo, $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
		<TR>

		<TR>

		<TD align=center>";

		if ($g_readonly == "Y") {
			echo "
				<TABLE align=center WIDTH=300 CELLPADDING=5 CELLSPACING=5 BORDER=5>
					<FORM METHOD=POST ACTION=$g_main>
						<TR align=center>
							<TD>
								<BR>
								<INPUT TYPE=submit NAME=auggie VALUE=\"Read Only Access\"
								style=\"color:black; width:180px;\">
								<P>
							</TD>
						</TR>
					</FORM>
				</TABLE>
				<P>
			";
		}

		echo "

		<TABLE align=center WIDTH=250 CELLPADDING=5 CELLSPACING=5 BORDER=5>
			<FORM METHOD=POST ACTION=$g_main>

				<TR>
					<TD>
						<FONT FACE=arial SIZE=2>User ID:</FONT><BR>
						<INPUT TYPE=text SIZE=30 MAXLENGTH=45 NAME=username VALUE=\"\"
							style=\"color:black; font-family:Times; font-weight:bold;
							font-size:12px; background-color:white\">
					</TD>
				</TR>
				<TR>
					<TD>
						<FONT FACE=arial SIZE=2>Password:</FONT><BR>
						<INPUT TYPE=password SIZE=30 MAXLENGTH=45 NAME=userpass VALUE=\"\"
							style=\"color:black; font-family:Times; font-weight:bold;
							font-size:12px; background-color:white\">
					</TD>
				</TR>
				<TR align=center>
					<TD>

						<INPUT TYPE=submit NAME=auggie VALUE=\"User Login\"
							style=\"color:black; width:180px; height:35px; background: url(image/login.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
					</TD>
				</TR>
				<TR align=center>

				</TR>




			</FORM>
		</TABLE>



		</FORM>

		<!--
		<P>
		<TABLE align=center WIDTH=300 CELLPADDING=1 CELLSPACING=1 BORDER=1>
			<TR align=center>
				<TD>
					<BR>
					<TEXTAREA READONLY NAME=loginmemo cols=50 rows=3
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; background-color:white\">$g_loginmemo
					</TEXTAREA>
					<P>
				</TD>
			</TR>
		</TABLE>

		<P>
		-->

		</TD>
		</TR>
		</TABLE>


	";


}	

function FormSelectUserPassword() {
	global $g_main;

	$stmt = "SELECT User_ID FROM sl_user order by User_ID";

	ProcCallDatabase($result,$stmt);

	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Modify User Password\"
				style=\"color:black; width:150px;\">
			<INPUT TYPE=reset VALUE=\"Reset\"
				style=\"color:black; width:100px;\">
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100px;\">
			<hr size=1 width=620 noshade align=left>
			<P>
			<FONT FACE=arial SIZE=2>User ID:</FONT><br>
			<select name=userid
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

			echo "
			</select>
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
				style=\"color:black; width:120px;\">
		</FORM>";
}	

function FormSelectUserProfile() {
	global $g_main;

	$stmt = "SELECT User_ID FROM sl_user order by User_ID";

	ProcCallDatabase($result,$stmt);

	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Modify User Profile\"
				style=\"color:black; width:150;\">
			<INPUT TYPE=reset VALUE=\"Reset\"
				style=\"color:black; width:100;\">
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<P>
			<FONT FACE=arial SIZE=2>User ID:</FONT><br>
			<select name=userid
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value=''>");
				for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
				{
					$myrow = mysqli_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysqli_free_result($result);

				echo "
			</select>
			<P>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Display manage user page
function FormButtonsManageUser() {
	global $g_main;

	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<FONT FACE=arial size=2>Manage User Account:</FONT><p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add User\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Profile to Modify\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Password to Modify\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Change Object Ownership:</FONT><p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Modify Object Creator\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">
		</FORM>
	";
}	
	
// Display management reporting form
function FormButtonsManagementReporting() {
	global $g_main;

	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<p>
			<FONT FACE=arial size=2>Event Reports:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Event Log Today\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Event Log One Week\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Event Log One Month\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
     		<p>
			<FONT FACE=arial size=2>Search Reports:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Search Today\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Search One Week\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>System Reports:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"System Settings\"
				style=\"color:black; width:180px;\">
			<P>
			<INPUT TYPE=submit NAME=auggie VALUE=\"DB Processes\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"DB Status\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"DB Variables\"
				style=\"color:black; width:180px;\">
			<p><hr size=1 width=600 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">
		</FORM>
	";
}	
	
// Display Flat File Adapters form
function FormButtonsFlatFileAdapters() {
	global $g_dbbinpath, $g_configpath, $g_main;

	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>
				&nbsp;
				The following file path values can be changed on the [Modify Configuration] page.
				<BR>
				&nbsp;&nbsp;&nbsp;[Main Menu] -> (Administration) -> (Modify Configuration)
				<BR>
				&nbsp;
				These file paths are used by all functions on this page
			</FONT>
			<P>&nbsp; &nbsp; &nbsp;
			<FONT FACE=arial size=2>
				Current File Path For Metadata Bulk Load And Backup Files:
			</FONT>
			<BR>&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text READONLY MAXLENGTH=100 NAME=filename VALUE=\"$g_configpath\"
				style=\"color:gray; font-family:Times; font-weight:bold;
				font-size:12px; width:400px; background-color:white\">
			<p>
			&nbsp; &nbsp; &nbsp;
			<FONT FACE=arial size=2>
				Current File Path For Database Utilities:
			</FONT>
			<BR>&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text READONLY MAXLENGTH=100 NAME=filename VALUE=\"$g_dbbinpath\"
				style=\"color:gray; font-family:Times; font-weight:bold;
				font-size:12px; width:400px; background-color:white\">
			<p>

			<p><hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Object Metadata File Loading:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Import Object\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text MAXLENGTH=100 NAME=objectloadfile
				VALUE=\"bulk_glossary_business_load.csv\"
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:300px; background-color:white\">
			<p>";

			// Create and fill drop down with userids that can be selected as import record owners
			$stmt = "SELECT User_ID FROM sl_user order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
			<select name=userid
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
				{
					$myrow = mysqli_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysqli_free_result($result);

				echo "
			</select>
			<FONT FACE=arial size=2>
				&nbsp;
				Select object Creator (default 'admin')
			</FONT>
			<P>";

			echo "
			<p><hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Object Metadata File Export:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Export Object\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text MAXLENGTH=100 NAME=objectexportfile VALUE=\"bulk_glossary_export.csv\"
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:300px; background-color:white\">

			<p><hr size=1 width=600 noshade align=left>

			<FONT FACE=arial size=2>
			&nbsp;Load SuperLuminate Metaschema: Load the default SuperLuminate Business Metaschema
			<br>
			&nbsp;that can be used as a good starting point to create and maintain data dictionary records
			</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"SuperLuminate Metaschema\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>

			<p>

			<FONT FACE=arial size=2>
			&nbsp;Load SuperLuminate Metadata: Load the SuperLuminate self defining metadata into
			<br>
			&nbsp;the data dictionary (describes the physical database structure)
			</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"SuperLuminate Metadata\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>

			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\"
				style=\"color:black; width:70px;\">
		</FORM>
	";
}	

// Display Backup Restore Adapters form
function FormButtonsBackupRestoreAdapters() {
	global $g_dbbinpath, $g_configpath, $g_main;

	$backupfile	= 'sl_db_back_' . date("Ymd") . '.sbk';

	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>
				&nbsp;
				The following file path values can be changed on the [Modify Configuration] page.
				<BR>
				&nbsp;&nbsp;&nbsp;[Main Menu] -> (Administration) -> (Modify Configuration)
				<BR>
				&nbsp;
				These file paths are used by all functions on this page.
			</FONT>
			<P>&nbsp; &nbsp; &nbsp;
			<FONT FACE=arial size=2>
				Current File Path For Metadata Bulk Load And Backup Files:
			</FONT>
			<BR>&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text READONLY MAXLENGTH=100 NAME=filename VALUE=\"$g_configpath\"
				style=\"color:gray; font-family:Times; font-weight:bold;
				font-size:12px; width:400px; background-color:white\">
			<p>
			&nbsp; &nbsp; &nbsp;
			<FONT FACE=arial size=2>
				Current File Path For Database Utilities:
			</FONT>
			<BR>&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text READONLY MAXLENGTH=100 NAME=filename VALUE=\"$g_dbbinpath\"
				style=\"color:gray; font-family:Times; font-weight:bold;
				font-size:12px; width:400px; background-color:white\">
			<p>

			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Data Dictionary Database Backup:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Backup Database\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text READONLY MAXLENGTH=45 NAME=backupfile VALUE=\"$backupfile\"
				style=\"color:gray; font-family:Times; font-weight:bold;
				font-size:12px; width:300px; background-color:white\">
			<p>
			<p><hr size=1 width=600 noshade align=left>

			<FONT FACE=arial size=2>Data Dictionary Database Restore:</FONT>
			&nbsp;
			<FONT FACE=arial size=2 color=red>( Danger, Danger, Will Robinson...)</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Restore Database\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=text MAXLENGTH=45 NAME=restorefile VALUE=\"$backupfile\"
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:300px; background-color:white\">
			<p><hr size=1 width=600 noshade align=left>

			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\"
				style=\"color:black; width:70px;\">
		</FORM>
	";
}

// Generate add category form
function FormAddCategory($category,$created,$creator,$changed,$changer,$status) {
	global $g_main;

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
		<p>
		<table border=0>
			<tr>
				<td width=500>
					<FONT FACE=arial SIZE=2 COLOR=black>Business Segment:</FONT>
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text SIZE=60 MAXLENGTH=45
						NAME=category VALUE=\"$category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Category Add\"
						style=\"color:black; width:200px;\">
				</td>
			</tr>
		</table>
		<p>
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
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate add subject form
function FormAddSubject($category,$subject,$created,$creator,$changed,$changer,$status) {
	global $g_main;

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2 COLOR=black>Business Segment:</FONT></td>
			</tr>
		</table>";

		$stmt = "SELECT DISTINCT Category_TX FROM sl_category order by Category_TX";

		ProcCallDatabase($result,$stmt);

		echo "<table class=normal width=620 border=0><tr>";

			echo "<td><select name=category
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}
			echo "</select></td>";

			echo "<td width=460></td>";
		echo "</tr></table>";

		echo "
		<hr size=1 width=620 noshade align=left>
		<p>
		<table border=0>
			<tr>
				<td width=500>
					<FONT FACE=arial SIZE=2 COLOR=black>System:</FONT>
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text SIZE=60 MAXLENGTH=45
						NAME=subject VALUE=\"$subject\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Subject Add\"
						style=\"color:black; width:200px;\">
				</td>
			</tr>
		</table>
		<p>
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
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate add class form
function FormAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status) {
	global $g_main;

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text NAME=category VALUE=\"$category\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text NAME=subject VALUE=\"$subject\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\">
				</td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<table border=0>
			<tr>
				<td width=500>
					<FONT FACE=arial SIZE=2 COLOR=black>Type:</FONT>
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text SIZE=60 MAXLENGTH=45
						NAME=class VALUE=\"$class\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Class Add\"
						style=\"color:black; width:200px;\">
				</td>
			</tr>
		</table>
		<p>
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
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate add type form
function FormAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status) {
	global $g_main;

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text NAME=category VALUE=\"$category\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text NAME=subject VALUE=\"$subject\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text NAME=class VALUE=\"$class\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\">
				</td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<table border=0>
			<tr>
				<td width=500>
					<FONT FACE=arial SIZE=2 COLOR=black>Category:</FONT>
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text SIZE=60 MAXLENGTH=45
						NAME=type VALUE=\"$type\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Type Add\"
						style=\"color:black; width:200px;\">
				</td>
			</tr>
		</table>
		<P>
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
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}
}




?>