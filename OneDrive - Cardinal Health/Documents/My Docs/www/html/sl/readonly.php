<?php

// sl_main.php
// created 23-Apr-2003 (pjn)
// updated 17-Feb-2012 (pjn)
// (c)Copyright 2003-2012 SuperLuminate, All Rights Reserved

// ********************************************************************
// SECTION: Function Description
// ********************************************************************

// FUNCTION:							AUGGIE:

// --- SECTION: Generic Functions

// GenerateHeader						n/a
// GenerateHeaderLite					n/a
// FormButtonsMainMenu					Cancel
// FormButtonsMainMenu					Main Menu

// --- SECTION: Main Menu

// FormSearchObject						Search
// FormAddObject						New Entry
// FormButtonsReporting					Reporting
// FormButtonsUserAccount				Your Account
// FormButtonsAdmin						Administration
// FormLogin							Logoff

// --- SECTION: Search

// FormSearchLite						n/a
// ProcSearchLite						Find Now
// FormDisplayLite						preauggie=L-
// FormSearchLite						Find Again

// ProcSearchObject						Search Now
// FormSearchObject						Search Again
// ProcBulkReport						Bulk Report
// FormDisplayObject					preauggie=O-

// --- SECTION: Display Object

// FormModifyObject						Modify
// ProcModifyObject						Confirm Object Modify

// FormCopyObject						Copy
// ProcCopyObject						Confirm Object Copy

// FormDeleteObject						Delete
// ProcDeleteObject						Confirm Delete

// FormObjectParentClass				Parent
// FormAddObjectParent					Confirm Parent Class
// ProcAddObjectParent					Confirm Add Parent

// FormObjectChildClass					Child
// FormAddObjectChild					Confirm Child Class
// ProcAddObjectChild					Confirm Add Child

// ProcVersionObject					Version

// FormDeleteRelationship				preauggie=R-
// ProcDeleteRelationship				Confirm Delete Relationship

// --- SECTION: New Entry

// FormAddObjectProperties				Confirm Object Add
// ProcAddObject						Insert New Object

// --- SECTION: Your Account

// FormModifyYourProfile				Modify Your Profile
// ProcModifyYourProfile				Confirm Profile Change

// FormModifyYourPassword				Modify Your Password
// ProcModifyYourPassword				Confirm Password Change

// --- SECTION: Administration

// FormButtonsManageUser				Manage User
// FormButtonsManagementReporting		Management Reporting
// FormButtonsFlatFileAdapters			Flat File Adapters
// FormButtonsBackupRestoreAdapters		Backup Restore Adapters
// FormButtonsDatabaseAdapters			Database Adapters
// FormButtonsManageSchema				Manage Schema
// FormModifyConfiguration				Modify Configuration

// --- SECTION: Modify Configuration

// ProcModifyConfig						Confirm Config Modify
// ProcModifyConfig						Reset To Default

// --- SECTION: Manage User

// FormAddUser							Add User
// ProcAddUser							Confirm User Add

// FormSelectUserProfile				Select Profile to Modify
// FormModifyUserProfile				Modify User Profile
// ProcModifyUserProfile				Confirm User Change

// FormSelectUserPassword				Select Password to Modify
// FormModifyUserPassword				Modify User Password
// ProcModifyUserPassword				Confirm User Password Change

// FormModifyObjectCreator				Modify Object Creator
// ProcModifyObjectCreator				Confirm Creator Modify

// --- SECTION: Manage Schema

// FormAddCategory						Add Category
// ProcAddCategory						Confirm Category Add

// ProcSelectCategory					Select Category
// FormDeleteSchemaCategory				preauggie=X-
// ProcDeleteSchemaCategory				Confirm Category Delete
// FormModifySchemaCategory				preauggie=K-
// ProcModifySchemaCategory				Confirm Category Modify

// FormAddSubject						Add Subject
// ProcAddSubject						Confirm Subject Add

// ProcSelectSubject					Select Subject
// FormDeleteSchemaSubject				preauggie=J-
// ProcDeleteSchemaSubject				Confirm Subject Delete
// FormModifySchemaSubject				preauggie=I-
// ProcModifySchemaSubject				Confirm Subject Modify

// FormSelectClassCategory				Add Class
// FormSelectClassSubject				Select Class Subject
// FormAddClass							Enter New Class
// ProcAddClass							Confirm Class Add

// ProcSelectClass						Select Class
// FormDeleteSchemaClass				preauggie=H-
// ProcDeleteSchemaClass				Confirm Class Delete
// FormModifySchemaClass				preauggie=G-
// ProcModifySchemaClass				Confirm Class Modify

// FormSelectTypeCategory				Add Type
// FormSelectTypeSubject				Select Type Subject
// FormSelectTypeClass					Select Type Class
// FormAddType							Enter New Type
// ProcAddType							Confirm Type Add

// ProcSelectType						Select Type
// FormDeleteSchemaType					preauggie=F-
// ProcDeleteSchemaType					Confirm Delete Type
// FormModifySchemaType					preauggie=E-
// ProcModifySchemaType					Confirm Modify Type

// FormSelectParentCategory				Add Association
// FormSelectParentSubject				Select Parent Subject
// FormSelectParentClass				Select Parent Class
// FormAddAssociation					Select Child Class
// ProcAddAssociation					Confirm Association Add

// ProcSelectAssociation				Select Association
// FormDeleteSchemaAssoc				preauggie=D-
// ProcDeleteSchemaAssoc				Confirm Association Delete
// FormModifySchemaAssoc				<removed>
// ProcModifySchemaAssoc				<removed>

// FormSelectPropCategory				Add Property
// FormSelectPropSubject				Select Property Subject
// FormSelectPropClass					Select Property Class
// FormAddProperty						Enter New Property
// ProcAddProperty						Confirm Property Add

// ProcSelectProperty					Select Property
// FormDeleteSchemaProp					preauggie=B-
// ProcDeleteSchemaProp					Confirm Property Delete
// FormModifySchemaProp					preauggie=A-
// ProcModifySchemaProp					Confirm Property Modify

// --- SECTION: Utility Functions

// ProcErrMsg							n/a
// ProcLogEvent							n/a
// ProcSearchDropDown					n/a
// ProcAdHocQuery						Execute Query
// ProcSystemSettings					System Settings
// ProcCallDatabase						n/a
// ProcCallDatabaseMySQL				n/a
// ProcCallDatabaseOracle				n/a



//***** WIP
// ProcCallDatabaseSQLServer			n/a




// ProcSelectBox						n/a
// ProcLoadMetadata						SuperLuminate Metadata
// ProcImportMySQLCatalog				Import MySQL Catalog
// ProcImportOracleCatalog				Import Oracle Catalog


//***** WIP
// ProcImportSQLServerCatalog			Import SQL Server Catalog




// ProcImportObject						Import Object
// ProcExportObject						Export Object
// ProcBackupDatabase					Backup Database
// ProcRestoreDatabase					Restore Database
// ProcSetupDatabase					n/a
// ProcLoadMetaschemaActive				SuperLuminate Metaschema
// ProcLoadMetaschemaQuiet				n/a

// --- SECTION: Canned Query Functions

// ProcExecCannedQuery					DB Processes
// ProcExecCannedQuery					DB Status
// ProcExecCannedQuery					DB Variables
// ProcExecCannedQuery					Event Log Today
// ProcExecCannedQuery					Event Log One Week
// ProcExecCannedQuery					Event Log One Month
// ProcExecCannedQuery					Category Count
// ProcExecCannedQuery					Subject Count
// ProcExecCannedQuery					Class Count
// ProcExecCannedQuery					Type Count
// ProcExecCannedQuery					Creator Count
// ProcExecCannedQuery					Changer Count
// ProcExecCannedQuery					Group Count
// ProcExecCannedQuery					Status Count
// ProcExecCannedQuery					Object Count
// ProcExecCannedQuery					Relationship Count
// ProcExecCannedQuery					Class Hierarchy
// ProcExecCannedQuery					Association List
// ProcExecCannedQuery					Extended Props

// --- SECTION: JavaScript Functions

// JSopenReportWindow					n/a
// JSopenAboutWindow					n/a
// JSopenHelpWindow						n/a
// JSopenLicenseWindow					n/a
// JSopenColorChartWindow				n/a

// ********************************************************************
// SECTION: Globals
// ********************************************************************

require("sl_globals.php");

// Configuration variables

// Set default time zone to eliminate time zone warning message
// Invalid function on earler versions of PHP

if (version_compare(PHP_VERSION, '5', '>')) date_default_timezone_set("America/Los_Angeles");

// Set session variables
// added @ in front of start_session to suppress garbage collection error message every 20 minutes
// Notice: session_start() [function.session-start]: ps_files_cleanup_dir: opendir
// according to PHP blogs this is a known bug that has no special fix
session_save_path("./session");
@session_start();

// Save query string (value after ? in URL) to be used to access SL Lite
	$g_query = $_SERVER['QUERY_STRING'];

// If look-and-feel configuration values not set lookup in database
if (!isset($g_colorbkg)) {
	global $g_host, $g_user, $g_pass,$g_database;

	// Check to see if the database exists -- if not create it and load defaults
	// Connect to host to see if globals are correct
	if (!($link=mysql_connect($g_host, $g_user, $g_pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT  SIZE=5 FACE=arial COLOR=#CC0000S>
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			[Error] error connecting to host: $g_host, by user: $g_user, with pass: $g_pass
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Correct errors in sl_globals.php file and continue.
			<P>
		</FONT>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:180px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		</FORM>";
		exit();
	}

	// Select the Database -- if not found create database (new installation)
	if (!($result=mysql_select_db($g_database))) {

		// Create SuperLuminate database
		mysql_query("CREATE DATABASE $g_database",$link);

		// Create database tables and default values
		ProcSetupDatabase();
		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT  SIZE=5 FACE=arial COLOR=#CC0000S>
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			The database instance {$g_database} was not found.
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			A new SuperLuminate data dictionary database<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			instance {$g_database} has been created.
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			The instance was loaded as a starting point<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			with default admin user, configuration values,<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			SuperLuminate Business Metaschema and no<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			business user metadata records (clean copy).
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			If this was done in error contact your data<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			dictionary administrator to restore backup.
			<P>
		</FONT>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:180px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		</FORM>";
		exit();
	}

	// SQL command to select the configuration record from the database
	$stmt = "
		SELECT
			Color_Bkg_HX, Color_Msg_HX, Logo_Primary_TX, Read_Only_FL,
			Max_Rows_IN, Attr_01_TX, Attr_02_TX, Attr_03_TX, Attr_04_TX,
			Attr_05_TX, Attr_06_TX, Attr_07_TX
		from SL_Config where Config_ID = 'Default'";

	ProcCallDatabase($result,$stmt);

	$row = mysql_fetch_object($result);

	$g_colorbkg		= $row->Color_Bkg_HX;
	$g_colormsg		= $row->Color_Msg_HX;
	$g_logoprim		= $row->Logo_Primary_TX;
	$g_readonly		= $row->Read_Only_FL;
	$g_maxrows		= $row->Max_Rows_IN;
	$g_loginmemo	= $row->Attr_01_TX;
	$g_adhocsql		= $row->Attr_02_TX;
	$g_configpath	= $row->Attr_03_TX;
	$g_lite			= $row->Attr_04_TX;
	$g_dbbinpath	= $row->Attr_05_TX;
	$g_oraclestr	= $row->Attr_06_TX;
	$g_timeout		= $row->Attr_07_TX;

	mysql_free_result($result);

	$g_loginmemo	= stripslashes($g_loginmemo);

	// Default time limit is 30 seconds before a procedure times out (0 = no time out)
	// Set to value defined on the [Configuration] page
	// Canbe seen in management report (System Settings) PHP Core --> max_execution_time
	set_time_limit($g_timeout);

}

// *************************************************************************************************
// SECTION: Generic Functions
// *************************************************************************************************

// Generate the main page header
function GenerateHeader($message) {
	global $g_colorbkg, $g_colormsg, $g_logoprim, $g_version, $g_main;

	echo "
	<HEAD> <TITLE>CAH Metadata Management</TITLE>
		<script language=javascript src=./jsrs/jsrsClient.js></script>
		<script language=javascript src=./jsrs/tax_c_s_c_t.js></script>
	</HEAD>
	<BODY TEXT=#00000 BGCOLOR=#$g_colorbkg LINK=#0000EE VLINK=#551A8B ALINK=#FF0000
		onload=\"body_onLoad();\" onhelp=\"jsrsDebugInfo();return false;\">
		<TABLE WIDTH=600 CELLPADDING=3 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=left>
					<IMG SRC=image/$g_logoprim>
					&nbsp;&nbsp;
					<FONT SIZE=-1>$g_version</FONT>
				</TD>
				<TD align=right>
					<FONT SIZE=1 FACE=arial COLOR=black>
						<a href=javascript:JSopenAboutWindow();><u>About</u></a>&nbsp;&nbsp;&nbsp;
						<a href=javascript:JSopenHelpWindow();><u>Help</u></a>&nbsp;&nbsp;&nbsp;

					</FONT>
				</TD>
			</TR>

			<TR>
			<TD COLSPAN=2>
												<IMG SRC=image/banner.png>

								</TD>
			</TR>

			<TR BGCOLOR=#$g_colormsg>
				<TD COLSPAN=2>
					<FONT FACE=Arial SIZE=2>
						$message
					</FONT>
				</TD>
			</TR>
			<!--
			<TR>

				<TD colspan=2 align=right>
					<FONT FACE=Times SIZE=1><em>Powered by  </em></FONT>
					<FONT FACE=Times SIZE=2><b>SuperLuminate</b></FONT>
				</TD>
			</TR>
			-->
		</TABLE>";
}

function GenerateHeader2($message) {
	global $g_colorbkg, $g_colormsg, $g_logoprim, $g_version, $g_main;

	echo "
	<HEAD> <TITLE>Pharma Data Dictionary</TITLE>
		<script language=javascript src=./jsrs/jsrsClient.js></script>
		<script language=javascript src=./jsrs/tax_c_s_c_t.js></script>
	</HEAD>
	<BODY TEXT=#00000 BGCOLOR=#$g_colorbkg LINK=#0000EE VLINK=#551A8B ALINK=#FF0000
		onload=\"body_onLoad();\" onhelp=\"jsrsDebugInfo();return false;\">
		<TABLE WIDTH=600 CELLPADDING=3 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=left>
					<IMG SRC=image/$g_logoprim>
					&nbsp;&nbsp;
					<FONT SIZE=-1>$g_version</FONT>
				</TD>
				<TD align=right>
					<FONT SIZE=1 FACE=arial COLOR=black>
						<a href=javascript:JSopenAboutWindow();><u>About</u></a>&nbsp;&nbsp;&nbsp;
						<a href=javascript:JSopenHelpWindow();><u>Help</u></a>&nbsp;&nbsp;&nbsp;
					</FONT>
				</TD>
			</TR>

			<TR>
			<TD COLSPAN=2>
												<IMG SRC=image/banner.png>

								</TD>
			</TR>

			<TR BGCOLOR=#$g_colormsg>
				<TD COLSPAN=2>
					<FONT FACE=Arial SIZE=2>
						$message
					</FONT>
				</TD>
			</TR>
			<!--
			<TR>

				<TD colspan=2 align=right>
					<FONT FACE=Times SIZE=1><em>Powered by  </em></FONT>
					<FONT FACE=Times SIZE=2><b>SuperLuminate</b></FONT>
				</TD>
			</TR>
			-->
		</TABLE>";
}


// Generate the main page header for sl lite
function GenerateHeaderLite($message) {
	global $g_colorbkg, $g_colormsg, $g_logoprim, $g_version;

	echo "
	<HEAD> <TITLE>CAH</TITLE>
	</HEAD>
	<BODY TEXT=#00000 BGCOLOR=#$g_colorbkg LINK=#0000EE VLINK=#551A8B ALINK=#FF0000>
		<TABLE WIDTH=550 CELLPADDING=3 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=left>
					<IMG SRC=image/$g_logoprim>
					&nbsp;&nbsp;
					<FONT SIZE=-1>$g_version</FONT>
				</TD>
				<TD align=right>
					<FONT SIZE=1 FACE=arial COLOR=black>
						<a href=javascript:JSopenAboutWindow();><u>About</u></a>&nbsp;&nbsp;&nbsp;
						<a href=javascript:JSopenLicenseWindow();><u>License</u></a>
					</FONT>
				</TD>
			</TR>
			<TR BGCOLOR=#$g_colormsg>
				<TD COLSPAN=2>
					<FONT FACE=Arial SIZE=2>
						$message
					</FONT>
				</TD>
			</TR>
			<!--
			<TR>
				<TD colspan=2 align=right>
					<FONT FACE=Times SIZE=1><em>Powered by </em></FONT>
					<FONT FACE=Times SIZE=2>SuperLuminate</FONT>
				</TD>
			</TR>
			-->
		</TABLE>";
}

function FormLogin() {
	global $g_readonly, $g_loginmemo, $g_main;



	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
		<TR>
								<TD align=center>
									<IMG SRC=image/metadomain.png>
								</TD>
		<TR>

		<TD align=center>";

		if ($g_readonly == "Y") {
			echo "
				<TABLE align=center WIDTH=300 CELLPADDING=5 CELLSPACING=5 BORDER=5>
					<FORM METHOD=post ACTION=$g_main>
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
			<FORM METHOD=post ACTION=$g_main>

				<TR>
					<TD>
						<FONT FACE=arial SIZE=2>User ID:</FONT><BR>
						<INPUT TYPE=text SIZE=30 MAXLENGTH=30 NAME=username VALUE=\"\"
							style=\"color:black; font-family:Times; font-weight:bold;
							font-size:12px; background-color:white\">
					</TD>
				</TR>
				<TR>
					<TD>
						<FONT FACE=arial SIZE=2>Password:</FONT><BR>
						<INPUT TYPE=password SIZE=30 MAXLENGTH=30 NAME=userpass VALUE=\"\"
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

// *************************************************************************************************
// SECTION: Navigation Button Functions
// *************************************************************************************************

// Generates the main page
function FormButtonsMainMenu() {
	global $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=center>
					<FORM METHOD=post ACTION=$g_main>
						<H1>

						<INPUT TYPE=submit NAME=auggie VALUE=\"Search\"
							style=\"color:black; width:180px; height:30px; background: url(image/search.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
						<P>";
						if ($_SESSION['s_user'] == "read") {
							echo "

								<INPUT TYPE=button NAME=auggie VALUE=\"New Entry\"
								onClick='alert(\"You have not been granted access to this function.\")'
								style=\"color:gray; width:180px; height:30px; background: url(image/add.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							";
						}
						else {
							echo "

								<INPUT TYPE=submit NAME=auggie VALUE=\"New Entry\"
									style=\"color:black; width:180px; height:30px; background: url(image/add.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							";
						}
						echo "
							<P>

							<INPUT TYPE=submit NAME=auggie VALUE=\"Reporting\"
								style=\"color:black; width:180px; height:30px; background: url(image/report.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
						<P>
						";
						if ($_SESSION['s_user'] == "read") {
							echo "
								<INPUT TYPE=button NAME=auggie VALUE=\"Your Account\"
								onClick='alert(\"You have not been granted access to this function.\")'
								style=\"color:gray; width:180px; height:30px; background: url(image/user.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							";
						}
						else {
							echo "

								<INPUT TYPE=submit NAME=auggie VALUE=\"Your Account\"
									style=\"color:black; width:180px; height:30px; background: url(image/user.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							";
						}
						echo "
							<P>
						";
						if ($_SESSION['s_user'] == "admin") {
							echo "

								<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
									style=\"color:black; width:180px; height:30px; background: url(image/admin.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							";
						}
						else {
							echo "

								<INPUT TYPE=button NAME=auggie VALUE=\"Administration\"
								onClick='alert(\"You have not been granted access to this function.\")'
								style=\"color:gray; width:180px; height:30px; background: url(image/admin.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							";
						}
						echo "
							<P>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Logoff\" style=\"color:black; width:100px; height:30px; background: url(image/log_off.png); background-repeat:no-repeat; background-color: #DCDCDC;\">

					</FORM>
				</TD>
			</TR>
			<tr>
			<IMG SRC=image/type.png align=center>
			<BR>
			<td/>
			</tr>


		</TABLE>
	";
}

// Display manage user page
function FormButtonsManageUser() {
	global $g_main;

	echo "
		<FORM METHOD=post ACTION=$g_main>
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
		<FORM METHOD=post ACTION=$g_main>
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

// Display HCatalog form
function FormButtonsHCatalog() {
	global $g_dbbinpath, $g_configpath, $g_main;

	echo "
		<FORM METHOD=post ACTION=$g_main> ";
 echo "\nMessage: hello2";
$topic         = 'sbjtest';
		$partition     = 0;
		$offset        = 0;
		$maxSize       = 1000000;
		$socketTimeout = 5;
$consumer = new Kafka_SimpleConsumer('localhost', 9092, $socketTimeout, $maxSize);
		    $fetchRequest = new Kafka_FetchRequest($topic, $partition, $offset, $maxSize);
		    $messages = $consumer->fetch($fetchRequest);
		    foreach ($messages as $msg) {
		        // echo "\nMessage: " . $msg->payload();
		        echo "\nMessage: hello";
		    }





								echo "
								<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
								style=\"color:black; width:120px;\">&nbsp;&nbsp;&nbsp;
		</FORM>";
}


// Display Flat File Adapters form
function FormButtonsFlatFileAdapters() {
	global $g_dbbinpath, $g_configpath, $g_main;

	echo "
		<FORM METHOD=post ACTION=$g_main>
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
			$stmt = "SELECT User_ID FROM SL_User order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
			<select name=userid
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysql_free_result($result);

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
		<FORM METHOD=post ACTION=$g_main>
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
			<INPUT TYPE=text READONLY MAXLENGTH=30 NAME=backupfile VALUE=\"$backupfile\"
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
			<INPUT TYPE=text MAXLENGTH=30 NAME=restorefile VALUE=\"$backupfile\"
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

// Display Database Adapters form
function FormButtonsDatabaseAdapters() {
	global $g_dbbinpath, $g_configpath, $g_oraclestr, $g_main;

	echo "
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
		&nbsp; &nbsp; &nbsp;
		<FONT FACE=arial size=2>
			Current Oracle Database Connection String:
		</FONT>
		<BR>&nbsp; &nbsp; &nbsp;
		<TEXTAREA READONLY NAME=filename cols=75 rows=3
			style=\"color:gray; font-family:Times; font-weight:bold;
			font-size:12px; background-color:white\">$g_oraclestr
		</TEXTAREA>
		<p>

		<hr size=1 width=600 noshade align=left>
		<FONT FACE=arial size=3 color=red>
			<p>&nbsp;&nbsp;&nbsp;
			Warning: Backup the database before loading a schema...
		</FONT>
		<FORM METHOD=post ACTION=$g_main>
			<hr size=1 width=600 noshade align=left>
			<p>
			<FONT FACE=arial size=3><B>MySQL 5.x Database Catalog Import:</B></FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Import MySQL Catalog\"
				style=\"color:black; width:180px;\">
			&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=reset VALUE=\"Reset\"
				style=\"color:black; width:100px;\">
			<p>
			<TABLE>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Host:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=host
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Port:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=port
						VALUE=\"3306\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Name:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=schema
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Userid:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=user
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					<TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Password:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=password MAXLENGTH=50 NAME=pass
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Table Name Prefix:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=prefix
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(to limit result set)</FONT>
					</TD>
				</TR>
			</TABLE>
			<TABLE>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Business Segment:</TD>
					<TD>&nbsp;&nbsp;&nbsp;System:</TD>
					<TD>&nbsp;&nbsp;&nbsp;Category:</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=category
						VALUE=\"MySQL\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=subject
						VALUE=\"Catalog\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=type
						VALUE=\"Import\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
				</TR>
			</TABLE>
			<P>
			";

			// Create and fill drop down with userids that can be selected as record owner
			$stmt = "SELECT User_ID FROM SL_User order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp;&nbsp;&nbsp;Assign Object Creator:&nbsp;&nbsp;&nbsp;
			<select name=creator
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysql_free_result($result);

				echo "
			</select>
			<FONT FACE=arial size=2>
				&nbsp;
				(default 'admin')
			</FONT>
		</FORM>
			<P>
			&nbsp;&nbsp;&nbsp;NOTE: Taxonomy Class has a fixed value of: Database, Table, or Column
			<BR>
			&nbsp;&nbsp;&nbsp;Do not change the Class once imported or updates will not load correctly
			<P>";

			echo "
		<FORM METHOD=post ACTION=$g_main>
			<hr size=1 width=600 noshade align=left>
			<p>
			<FONT FACE=arial size=3><B>Oracle 10g Database Catalog Import:</B></FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Import Oracle Catalog\"
				style=\"color:black; width:180px;\">
			&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=reset VALUE=\"Reset\"
				style=\"color:black; width:100px;\">
			<p>
			<p>
			<TABLE>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Host:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=host
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database SID:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=sid
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Port:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=port
						VALUE=\"1521\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Userid:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=user
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					<TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Password:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=password MAXLENGTH=50 NAME=pass
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Schema Name:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=schema
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Table Name Prefix:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=prefix
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(to limit result set)</FONT>
					</TD>
				</TR>
			</TABLE>
			<TABLE>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Business Segment:</TD>
					<TD>&nbsp;&nbsp;&nbsp;System:</TD>
					<TD>&nbsp;&nbsp;&nbsp;Category:</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=category
						VALUE=\"Oracle\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=subject
						VALUE=\"Catalog\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=type
						VALUE=\"Import\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
				</TR>
			</TABLE>
			<P>
			";

			// Create and fill drop down with userids that can be selected as record owner
			$stmt = "SELECT User_ID FROM SL_User order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp;&nbsp;&nbsp;Assign Object Creator:&nbsp;&nbsp;&nbsp;
			<select name=creator
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysql_free_result($result);

				echo "
			</select>
			<FONT FACE=arial size=2>
				&nbsp;
				(default 'admin')
			</FONT>
		</FORM>
			<P>
			&nbsp;&nbsp;&nbsp;NOTE: Taxonomy Class has a fixed value of: Database, Table, or Column
			<BR>
			&nbsp;&nbsp;&nbsp;Do not change the Class once imported or updates will not load correctly
			<P>";






//***** WIP
		echo "
		<FORM METHOD=post ACTION=$g_main>
			<hr size=1 width=600 noshade align=left>
			<p>
			<FONT FACE=arial size=3><B>SQL Server 2005 Database Catalog Import:</B></FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Import SQL Server Catalog\"
				style=\"color:black; width:180px;\">
			&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=reset VALUE=\"Reset\"
				style=\"color:black; width:100px;\">
			<p>
			<TABLE>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Server:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=host
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Name:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=schema
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Userid:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=user
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(REQUIRED)</FONT>
					<TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Database Password:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=password MAXLENGTH=50 NAME=pass
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
					</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Table Name Prefix:</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=prefix
						VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:200px; background-color:white\">
						<FONT FACE=arial size=2>&nbsp;(to limit result set)</FONT>
					</TD>
				</TR>
			</TABLE>
			<TABLE>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;Business Segment:</TD>
					<TD>&nbsp;&nbsp;&nbsp;System:</TD>
					<TD>&nbsp;&nbsp;&nbsp;Category:</TD>
				</TR>
				<TR>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=category
						VALUE=\"SQL Server\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=subject
						VALUE=\"Catalog\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
					<TD>&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=text MAXLENGTH=50 NAME=type
						VALUE=\"Import\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</TD>
				</TR>
			</TABLE>
			<P>
			";

			// Create and fill drop down with userids that can be selected as record owner
			$stmt = "SELECT User_ID FROM SL_User order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp;&nbsp;&nbsp;Assign Object Creator:&nbsp;&nbsp;&nbsp;
			<select name=creator
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysql_free_result($result);

				echo "
			</select>
			<FONT FACE=arial size=2>
				&nbsp;
				(default 'admin')
			</FONT>
		</FORM>
			<P>
			&nbsp;&nbsp;&nbsp;NOTE: Taxonomy Class has a fixed value of: Database, Table, or Column
			<BR>
			&nbsp;&nbsp;&nbsp;Do not change the Class once imported or updates will not load correctly
			<P>";










			echo "
			<hr size=1 width=600 noshade align=left>
			<p>
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">
		</FORM>
	";
}

// Display Manage Schema form
function FormButtonsManageSchema() {
	global $g_main;

	echo "
		<FORM METHOD=post ACTION=$g_main>
			<FONT FACE=arial size=2>Manage Taxonomy (Class Hierarchy):</FONT><p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Category\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add Category\"
				style=\"color:black; width:180px;\">
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Subject\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add Subject\"
				style=\"color:black; width:180px;\">
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Class\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add Class\"
				style=\"color:black; width:180px;\">
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Type\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add Type\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Manage Ontology (Associations):</FONT><p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Association\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add Association\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Manage Extended Object Properties:</FONT><p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Property\"
				style=\"color:black; width:180px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Add Property\"
				style=\"color:black; width:180px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">
		</FORM>
	";
}

// Generates the Your Account page
function FormButtonsUserAccount() {
	global $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=center>
					<FORM METHOD=post ACTION=$g_main>
						<H1>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Modify Your Profile\"
							style=\"color:black; width:180px;\">
						<P>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Modify Your Password\"
							style=\"color:black; width:180px;\">
						<P>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
							style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
					</FORM>
				</TD>
			</TR>
		</TABLE>
	";
}

// Generates the Administration page
function FormButtonsAdmin() {
	global $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=center>
					<FORM METHOD=post ACTION=$g_main>
						<H1>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Management Reporting\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Flat File Adapters\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Backup Restore Adapters\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Modify Configuration\"
							style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"View HCatalog\"
													style=\"color:black; width:180px;\">
						<p>
						<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
							style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
					</FORM>
				</TD>
			</TR>
		</TABLE>
	";
}

// Generates the Reporting page
function FormButtonsReporting() {
	global $g_adhocsql, $g_main;

	echo "
		<FORM METHOD=post ACTION=$g_main>
			<FONT FACE=arial size=2>Report on End User Metadata Records:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Bus Segment Count\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Category Count\"
							style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Subject Count\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Class Count\"
				style=\"color:black; width:130px;\">
			<P>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Creator Count\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Changer Count\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Group Count\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Status Count\"
				style=\"color:black; width:130px;\">
			<P>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Object Count\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Relationship Count\"
				style=\"color:black; width:130px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Display Existing Taxonomy and Ontology Structures:</FONT>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Class Hierarchy\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Association List\"
				style=\"color:black; width:130px;\">
			&nbsp; &nbsp; &nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Extended Props\"
				style=\"color:black; width:130px;\">
			<p>
			<hr size=1 width=600 noshade align=left>
			<FONT FACE=arial size=2>Ad Hoc Query Window:</FONT><BR>
			<p>
			<TEXTAREA NAME=query COLS=70 ROWS=5></TEXTAREA>
			<BR><BR>";

//		Disable the ability to create ad hoc queries if the user is a read only
//		user or the administrator disabled the function for all users
		if (($g_adhocsql == "Y" and $_SESSION['s_user'] != "read") or $_SESSION['s_user'] == "admin") {
				echo "
			<INPUT TYPE=submit NAME=auggie VALUE=\"Execute Query\"
				style=\"color:black; width:180px;\">";
			}
			else {
			echo "
				<INPUT TYPE=BUTTON VALUE=\"Execute Query\"
					onClick='alert(\"You have not been granted access to this function.\")'
					style=\"color:gray; width:180px;\">";
			}

			echo "
			<p>
			<hr size=1 width=600 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		</FORM>";
}

// *************************************************************************************************
// SECTION: Metadata Form Functions
// *************************************************************************************************

// Generate search form
function FormSearchObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status) {
	global $g_main;
if ($_SESSION['s_user'] == "read") {
echo "
			<FORM ACTION=$g_main METHOD=POST>
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Now\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
				&nbsp;&nbsp;
				<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:70px; background: url(image/reset.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
				&nbsp;&nbsp;
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	";

				echo "
				<table border=0>
					<tr>
						<td width=500><FONT FACE=arial SIZE=2>Name:&nbsp;<FONT color=red size=4>&#9830
							</FONT>&nbsp;</FONT>
					</tr>
					<tr>
						<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
							NAME=name VALUE=\"$name\"
							style=\"color:black; font-family:Times; font-weight:normal;
							font-size:12px; width:510px; background-color:white\">
					</tr>
				</table>

	</FORM>";

}

else {
	echo "
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Now\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
			&nbsp;&nbsp;
			<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:70px; background: url(image/reset.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
			&nbsp;&nbsp;
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
			<hr size=1 width=620 noshade align=left>
				<table class=normal width=620 border=0>
					<tr>
						<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
						<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
						<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
						<td width=150><FONT FACE=arial SIZE=2>Category:</FONT></td>
					</tr>
				</table>";

			ProcSearchDropDown();

			echo "
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Name:&nbsp;<FONT color=red size=4>&#9830
						</FONT>&nbsp;</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
						NAME=name VALUE=\"$name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\"></td>
					<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
						NAME=version VALUE=\"$version\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:100px; background-color:white\"></td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<FONT FACE=arial SIZE=2>Alias:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
				<INPUT TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
				style=\"color:black; font-family:Times; font-weight:normal;
				font-size:12px; background-color:white\"><BR>
			<FONT FACE=arial SIZE=2>Description:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
				<TEXTAREA NAME=desc cols=120 rows=6
				style=\"color:black; font-family:Times; font-weight:normal;
				font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
			<FONT FACE=arial SIZE=2>Business Rules:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
				<TEXTAREA NAME=usage cols=120 rows=3
				style=\"color:black; font-family:Times; font-weight:normal;
				font-size:12px; background-color:white\">$usage</TEXTAREA><BR>
			<FONT FACE=arial SIZE=2>Technical Rules:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
				<TEXTAREA NAME=techrules cols=120 rows=3
				style=\"color:black; font-family:Times; font-weight:normal;
				font-size:12px; background-color:white\">$techrules</TEXTAREA><BR>
			<FONT FACE=arial SIZE=2>Comment:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
				<TEXTAREA NAME=comment cols=120 rows=3
				style=\"color:black; font-family:Times; font-weight:normal;
				font-size:12px; background-color:white\">$comment</TEXTAREA><BR>
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
					<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
						NAME=created VALUE=\"$created\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; background-color:white\"></td>
					<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
					<td><INPUT TYPE=text SIZE=25 MAXLENGTH=30
						NAME=creator VALUE=\"$creator\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; background-color:white\"></td>
					<td><FONT FACE=arial SIZE=2>Group:</FONT><td>
					<td><SELECT NAME=group
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
						<option selected value=\"\">
						<option value=\"General\">General
						<option value=\"Private\">Private
						</SELECT></td>
				</tr>
				<tr>
					<td><FONT FACE=arial SIZE=2>Changed:</FONT><td>
					<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
						NAME=changed VALUE=\"$changed\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; background-color:white\"></td>
					<td><FONT FACE=arial SIZE=2>Changer:</FONT><td>
					<td><INPUT TYPE=text SIZE=25 MAXLENGTH=30
						NAME=changer VALUE=\"$changer\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; background-color:white\"></td>
					<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
					<td><SELECT NAME=status
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
						<option selected value=\"\">
						<option value=\"Active\">Active
						<option value=\"Inactive\">Inactive
						</SELECT></td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<BR>
			<FORM ACTION=$g_main METHOD=post>
				<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
					style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>";
}

}

// Generate READ Only search form
function FormSearchObject1($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status) {
	global $g_main;


echo "
			<FORM ACTION=$g_main METHOD=POST>
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Now\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
				&nbsp;&nbsp;
				<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:70px; background: url(image/reset.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
				&nbsp;&nbsp;
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	";

				echo "
				<table border=0>
					<tr>
						<td width=500><FONT FACE=arial SIZE=2>Name:&nbsp;<FONT color=red size=4>&#9830
							</FONT>&nbsp;</FONT>
					</tr>
					<tr>
						<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
							NAME=name VALUE=\"$name\"
							style=\"color:black; font-family:Times; font-weight:normal;
							font-size:12px; width:510px; background-color:white\">
					</tr>
				</table>

	</FORM>";
}




// Display Object
function FormDisplayObject($rowid) {

	$s_user = $_SESSION['s_user'];
	global $g_colorbkg, $g_main;

	$stmt = "
		SELECT ROWID,
			Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
			Alias_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD
		FROM SL_Object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
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
	$techrules  = $row->TechRules_TX;
	$comment	= $row->Comment_TX;
	$group		= $row->Group_CD;
	$created	= $row->Created_DS;
	$creator	= $row->Creator_ID;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;
	$status		= $row->Status_CD;

	mysql_free_result($result);

	$name		= stripslashes($name);
	$alias		= stripslashes($alias);
	$desc		= stripslashes($desc);
	$usage		= stripslashes($usage);
	$techrules  = stripslashes($techrules);
	$comment	= stripslashes($comment);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Again\"
			style=\"color:black; width:100px;\">";

		if ($_SESSION['s_user'] == "admin" or $_SESSION['s_user'] == $creator) {
			echo "
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Modify\" style=\"color:black; width:59px;\">
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Delete\" style=\"color:black; width:59px;\">";

			$stmt = "SELECT DISTINCT P_Class_TX from SL_Assoc
				WHERE
					C_Category_TX	= '$category' AND
					C_Subject_TX	= '$subject' AND
					C_Class_TX		= '$class'
					ORDER BY P_Class_TX;";
			ProcCallDatabase($result,$stmt);
			if (mysql_num_rows($result)) {
				echo "
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Parent\" style=\"color:black; width:59px;\">";
			}
			else {
				echo "
				<INPUT TYPE=BUTTON VALUE=\"Parent\"
					onClick='alert(\"There are no Parent Associations available for this Class.\")'
					style=\"color:gray; width:59px;\">";
			}
			mysql_free_result($result);

			$stmt = "SELECT DISTINCT C_Class_TX from SL_Assoc
				WHERE
					P_Category_TX	= '$category' AND
					P_Subject_TX	= '$subject' AND
					P_Class_TX		= '$class'
					ORDER BY C_Class_TX;";
			ProcCallDatabase($result,$stmt);
			if (mysql_num_rows($result)) {
				echo "
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Child\" style=\"color:black; width:59px;\">";
			}
			else {
				echo "
				<INPUT TYPE=BUTTON VALUE=\"Child\"
					onClick='alert(\"There are no Child Associations available for this Class.\")'
					style=\"color:gray; width:59px;\">";
			}
			mysql_free_result($result);

		}
		else {
			echo "
			<INPUT TYPE=BUTTON VALUE=\"Modify\"
				onClick='alert(\"You are not authorized to modify this record.\")'
				style=\"color:gray; width:59px;\">
			<INPUT TYPE=BUTTON VALUE=\"Delete\"
				onClick='alert(\"You are not authorized to delete this record.\")'
				style=\"color:gray; width:59px;\">
			<INPUT TYPE=BUTTON VALUE=\"Parent\"
				onClick='alert(\"You are not authorized to create a parent record.\")'
				style=\"color:gray; width:59px;\">
			<INPUT TYPE=BUTTON VALUE=\"Child\"
				onClick='alert(\"You are not authorized to create a child record.\")'
				style=\"color:gray; width:59px;\">";
		}

		if ($_SESSION['s_user'] != "read" and $status == 'Active') {
			echo "
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Version\" style=\"color:black; width:59px;\">";
		}
		else if ($_SESSION['s_user'] != "read" and $status == 'Versioned') {
			echo "
			<INPUT TYPE=BUTTON VALUE=\"Version\"
				onClick='alert(\"This object has already been versioned.\")'
				style=\"color:gray; width:59px;\">";
		}
		else if ($_SESSION['s_user'] != "read" and $status == 'Inactive') {
			echo "
			<INPUT TYPE=BUTTON VALUE=\"Version\"
				onClick='alert(\"An inactive object cannot be versioned.\")'
				style=\"color:gray; width:59px;\">";
		}
		else {
			echo "
			<INPUT TYPE=BUTTON VALUE=\"Version\"
				onClick='alert(\"You are not authorized to create a version.\")'
				style=\"color:gray; width:59px;\">";
		}

		if ($_SESSION['s_user'] != "read") {
			echo "
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Copy\" style=\"color:black; width:59px;\">
			<INPUT TYPE=HIDDEN NAME=n_name VALUE=\"$name\">
			<INPUT TYPE=HIDDEN NAME=eprow VALUE=\"\">
			<INPUT TYPE=HIDDEN NAME=epnamex VALUE=\"\">
			<INPUT TYPE=HIDDEN NAME=epvaluex VALUE=\"\">";
		}
		else {
			echo "
			<INPUT TYPE=BUTTON VALUE=\"Copy\"
				onClick='alert(\"You are not authorized to create a copy.\")'
				style=\"color:gray; width:59px;\">";
		}

		echo "
		<INPUT TYPE=BUTTON VALUE=\"Report\"
				onClick=\"javascript:JSopenReportWindow('sl_report.php?ROWID=$rowid');\"
				style=\"color:black; width:53px;\">";

		echo "
		<INPUT TYPE=BUTTON VALUE=\"R-2\"
				onClick=\"javascript:JSopenReportWindow('sl_report_2.php?ROWID=$rowid');\"
				style=\"color:black; width:30px;\">";

		echo "
		<INPUT TYPE=BUTTON VALUE=\"R-3\"
				onClick=\"javascript:JSopenReportWindow('sl_report_3.php?ROWID=$rowid');\"
				style=\"color:black; width:30px;\">";

		echo "
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>Category:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=category VALUE=\"$category\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=subject VALUE=\"$subject\"
					style=\"color:black; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=class VALUE=\"$class\"
					style=\"color:black; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=type VALUE=\"$type\"
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
				<td width=500><INPUT READONLY TYPE=text SIZE=95
					MAXLENGTH=80 NAME=name VALUE=\"$name\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:510px; background-color:white\">
				</td>
				<td width=100><INPUT READONLY TYPE=text SIZE=10
					MAXLENGTH=10 NAME=version VALUE=\"$version\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:100px; background-color:white\">
				</td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=Arial SIZE=2>Alias:</FONT><BR>
		<INPUT READONLY TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\"><BR>
		<FONT FACE=Arial SIZE=2>Description:</FONT><BR>
		<TEXTAREA READONLY NAME=desc cols=120 rows=6
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
		<FONT FACE=Arial SIZE=2>Business Rules:</FONT><BR>
		<TEXTAREA READONLY NAME=usage cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$usage</TEXTAREA><BR>
		<FONT FACE=Arial SIZE=2>Technical Rules:</FONT><BR>
		<TEXTAREA READONLY NAME=techrules cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$techrules</TEXTAREA><BR>
		<FONT FACE=Arial SIZE=2>Comment:</FONT><BR>
		<TEXTAREA READONLY NAME=comment cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$comment</TEXTAREA><BR>
<FONT FACE=Arial SIZE=2>Comment1:</FONT><BR>
		<TEXTAREA NAME=comment1 cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$comment1</TEXTAREA><BR>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Group:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=group VALUE=\"$group\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>";

		// Display Object Extended Properties

		// If power user then display extended properties - subhajit on 5/21/2014
		if ($_SESSION['s_user'] == "admin" or $_SESSION['s_user'] == $creator) {

		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=1>Extended Properties:</FONT><P>";



		// ************** Subhajit ** Mapping Specification
			if ($class == "Mapping Specification") {

			echo "
			<table class=normal width=600 BORDER=0 CELLSPACING=0
			CELLPADDING=0 VALIGN=middle>";

			echo "Source:";
			echo "<BR><TR>";
			mappingspecaddobjectSRC("'CCDB'");
			echo "</TR><BR>";
			echo "Rules:";
			echo "<BR><TR>";
			echo "<TEXTAREA name=Tranrules cols=100 rows=5
						style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"></TEXTAREA><BR></TR><br>";

			echo "Target:";
			echo "<BR><tr>";
			mappingspecaddobjectTRG("'Hadoop'");
			echo "<BR></TR>";
echo "<BR><tr>";

//echo "<input type=button value=\"submit\" onClick=\"javascript:popup1('Transrule');\">";


echo "<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Add Mapping\" style=\"color:black; width:153px;\">";


		echo "
		<INPUT TYPE=BUTTON VALUE=\"View Mapping Details\"
				onClick=\"javascript:JSopenReportWindow('sample8.php?mspec=$name');\"
				style=\"color:black; width:153px;\">";

		echo "</TR>";
		echo "</Table>";




	}

		//*****************







		$stmt = "
			SELECT Property_TX,Value_TX
			FROM SL_Attr
			WHERE
				SL_Object_FK = $rowid";

		ProcCallDatabase($result,$stmt);

		if (!($class == "Mapping Specification")) {
		printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

			printf("<TR bgcolor=#ced7e1>
				<TD WIDTH=150 align=center><B>Property Name</B></TD>
				<TD align=center><B>Property Value</B></TD>
				</TR>\n");

			$i = 1;
			$color1 = "#FFFFF0";
			$color2 = "#E0FFFF";

			while (($row = mysql_fetch_object($result))){

				if($i%2 == 1) $color = $color1;
				else $color = $color2;

				printf("
					<TR>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:bold;
							width:150px; font-size:12px; background-color:$color\">
						</TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:450px; font-size:12px; background-color:white\">
						</TD>
					</TR>\n",
				$row->Property_TX,
				$row->Value_TX);

				$i++;
			}

		printf("</TABLE>\n");
		}

			} // Loop ends -> If power user then display extended properties - subhajit on 5/21/2014
	echo "
	</FORM>";

	mysql_free_result($result);

	// Display Relationships to this Object
	// Disable delete function for all but the Administraor and the Object's Owner

	if ($_SESSION['s_user'] == "admin" or $_SESSION['s_user'] == $creator) {
		$disable = "";
	}
	else {
		$disable = "DISABLED";
	}

	// Display Parent Object Relationships

	if (!($class == "Mapping Specification")) {
	echo "
	<hr size=1 width=620 noshade align=left>";
	if ($class == "Column") {
	printf("<FONT FACE=arial SIZE=1>Assigned Assets: (SELECT Object or DELETE Relationship)</FONT><BR><BR>");
	}
	else {
	printf("<FONT FACE=arial SIZE=1>Parent Objects: (SELECT Object or DELETE Relationship)</FONT><BR><BR>");
	}

	/* Subhajit - commented this block to show multiple parents by removing C_class_tx column
	$stmt = "
			SELECT P_SL_Object_FK, C_SL_Object_FK, P_Class_TX, P_Name_TX
			FROM SL_Rel
		WHERE
	C_Category_TX = '$category' and C_Subject_TX = '$subject'
				and C_Class_TX = '$class' and C_Type_TX = '$type'
			and C_Name_TX = '$name' and C_Version_DC = $version";
	*/




	$stmt = "
			SELECT P_SL_Object_FK, C_SL_Object_FK, P_Class_TX, P_Name_TX
			FROM SL_Rel
		WHERE
		C_Category_TX = '$category' and C_Subject_TX = '$subject'
				and C_Type_TX = '$type'
			and C_Name_TX = '$name' and C_Version_DC = $version";


	ProcCallDatabase($result,$stmt);




	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>";
		printf("<TABLE WIDTH=820 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

			printf("<TR bgcolor=#ced7e1>
				<TD WIDTH=60><B>SELECT</B></TD>
				<TD WIDTH=60><B>DELETE</B></TD>");
				if ($class == "Column") {
						printf("<TD WIDTH=120><B>Assets</B></TD><TD><B>Name</B></TD>");
				}
				else {
				printf("<TD WIDTH=100 align=center><B>Parent Type</B></TD>
				<TD align=center><B>Parent Name</B></TD>");
				}
				printf("<TD><B>Description</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

					$result1 = mysql_query("SELECT Desc_TX FROM sl_object WHERE ROWID = ".$row->P_SL_Object_FK);
					$row1 = mysql_fetch_row($result1);

				if ($disable == "DISABLED") {

					printf("<TR>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=O-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie DISABLED
							VALUE=Disabled style=\"background-color:#FFFFFF; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=100>%s</TD>
						<TD>%s</TD>
						<TD><font size=1>%s</font></TD>
						</TR>\n",
					$row->P_SL_Object_FK,
					$row->P_Class_TX,
					$row->P_Name_TX,
					$row1[0]);

				}
				else {


					printf("<TR>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=O-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=R-%s-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=100>%s</TD>
						<TD>%s</TD>
						<TD><font size=1>%s</font></TD>
						</TR>\n",
					$row->P_SL_Object_FK,
					$row->P_SL_Object_FK,
					$row->C_SL_Object_FK,
					$row->P_Class_TX,
					$row->P_Name_TX,
					$row1[0]);

				}

			}

		printf("</TABLE>\n");

	echo "
	</FORM>";


	mysql_free_result($result);
} //loop end for if NOT mapping Spec
	// Display Child Object Relationships

if (!($class == "Mapping Specification")) {
if (!($class == "Column")) {
echo "
		<hr size=1 width=820 noshade align=left>
	<FONT FACE=arial SIZE=1>Child Objects: (SELECT Object or DELETE Relationship)</FONT><BR>";

	$stmt = "
		SELECT C_SL_Object_FK, P_SL_Object_FK, C_Class_TX, C_Name_TX
		FROM SL_Rel
		WHERE
			P_Category_TX = '$category' and P_Subject_TX = '$subject'
			and P_Class_TX = '$class' and P_Type_TX = '$type'
			and P_Name_TX = '$name' and P_Version_DC = $version";


	ProcCallDatabase($result,$stmt);
	if ($class == "Terms") {
	$username_array = array(); // start an array
	}

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>";
		printf("<TABLE WIDTH=820 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

			printf("<TR bgcolor=#ced7e1>
				<TD WIDTH=60><B>SELECT</B></TD>
				<TD WIDTH=60><B>DELETE</B></TD>
				<TD WIDTH=100 align=center><B>Child Type</B></TD>
				<TD align=center><B>Child Name</B></TD>
				<TD align=center><B>Description</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){
					$result2 = mysql_query("SELECT Desc_TX FROM sl_object WHERE ROWID = ".$row->C_SL_Object_FK);
					$row2 = mysql_fetch_row($result2);

				if ($disable == "DISABLED") {

					printf("<TR>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=O-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie DISABLED
							VALUE=Disabled style=\"background-color:#FFFFFF; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=100>%s</TD>
						<TD>%s</TD>
						<TD><font size=1>%s</font></TD>
						</TR>\n",
					$row->C_SL_Object_FK,
					$row->C_Class_TX,
					$row->C_Name_TX,
					$row2[0]);

				}
				else {

					printf("<TR>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=O-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=60><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=R-%s-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD WIDTH=100>%s</TD>
						<TD>%s</TD>
						<TD><font size=1>%s</font></TD>
						</TR>\n",
					$row->C_SL_Object_FK,
					$row->P_SL_Object_FK,
					$row->C_SL_Object_FK,
					$row->C_Class_TX,
					$row->C_Name_TX,
					$row2[0]);

					if ($class == "Terms") {
					$username_array[] = "\"".$row->C_Name_TX."\"";
					}
				}

			}

		printf("</TABLE>\n");


		if (!($username_array[0] == "")) {
		//if (count($username_array) > 0) {
		if ($class == "Terms") {


		echo "
				<hr size=1 width=820 noshade align=left>
			<FONT FACE=arial SIZE=2><B>Data Lineage: </B></FONT><BR>";
			printf("<TABLE WIDTH=820 CELLPADDING=0 CELLSPACING=0 BORDER=0>\n");

			if (count($username_array) == 1) {

				printf("<TR>
						<TD WIDTH=120>Source of Origin</TD>
						</TR>
						<TR>
						<TD WIDTH=60><FONT Color=blue>$username_array[0]</font></TD>
						</TR>");

			}
			else {

			printf("<TR>
											<TD WIDTH=120>Source of Origin</TD>
											<TD WIDTH=60></TD>
											<TD WIDTH=100>SAP HANA</TD>
											<TD WIDTH=60></TD>
											<TD WIDTH=100>ETL Job</TD>
											<TD WIDTH=60></TD>
											<TD>Target</TD>
			</TR>\n");
			printf("<TR>

									<TD WIDTH=60><FONT Color=blue>$username_array[2]</font></TD>
									<TD><IMG SRC=image/arrow.png></TD>
									<TD WIDTH=60><FONT Color=blue>$username_array[1]</font></TD>
									<TD><IMG SRC=image/arrow.png></TD>
									<TD WIDTH=60><FONT Color=blue>$username_array[3]</font></TD>
									<TD><IMG SRC=image/arrow.png></TD>
									<TD WIDTH=60><FONT Color=blue>$username_array[0]</font></TD>
									</TR>");
			printf("<TR>
												<TD WIDTH=60></TD>
												<TD></TD>
												<TD WIDTH=60></TD>
												<TD></TD>
												<TD WIDTH=60></TD>
												<TD></TD>
												<TD WIDTH=60><FONT Color=blue>$username_array[4]</font></TD>
									");

				}

			Printf("</TR></TABLE>\n");


			} // loop ends for Terms condition
			} // loop ends for empty array
	echo "
	</FORM>";

	mysql_free_result($result);

}
echo "	<hr size=1 width=820 noshade align=left>";

} //loop end for if NOT mapping Spec

}

// Generate search form for sl lite
function FormSearchLite($findtext) {
	global $g_main;

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=HIDDEN NAME=auggie VALUE=\"Find Now\">

		<table border=0>
			<tr>
				<td width=450><FONT FACE=arial SIZE=2>
					Enter Case Insensitive Search String: (must enter something)</td>
			</tr>
			<tr>
				<td width=450><INPUT TYPE=text SIZE=100 MAXLENGTH=100
					NAME=findtext VALUE=\"$findtext\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:400px; background-color:white\"></td>
			</tr>
		</table>";

// Glossary drop down picklist

		echo "
		<table border=0>
			<tr>
				<td width=300><FONT FACE=arial SIZE=2 COLOR=black>
					Select a Glossary to search: (leave blank for all)</FONT>
				</td>
			</tr>
		</table>";

		$stmt = "SELECT DISTINCT Type_TX FROM SL_Object
					WHERE Class_TX = 'Glossary'
					ORDER BY Type_TX";

		ProcCallDatabase($result,$stmt);

		echo "
		<table class=normal width=620 border=0>
		<tr>
		<td>
		<select name=inglossary
			style=\"color:black; font-family:Times; font-weight:bold;
			font-size:12px; width:200px; background-color:white\">";

			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

		echo "
		</select>
		</td>
		</tr>
		</table>";

// Checkbox to extend search beyond Glossary records

		echo "
		<P>
		<table border=0>
			<tr>
				<td>
					<input type=checkbox name=outglossary UNCHECKED>
						<FONT FACE=arial SIZE=2>Extend search beyond Glossary records</FONT>
				</td>
			</tr>
		</table>
		<P>

		<hr size=1 width=550 noshade align=left>

		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Find Now\" style=\"color:black; width:110px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:70px;\">

	</FORM>";

}

// Display Object for SL Lite
function FormDisplayLite($rowid) {

	$s_user = $_SESSION['s_user'];
	global $g_colorbkg, $g_main;

	$stmt = "
		SELECT ROWID,
			Type_TX,Name_TX,Desc_TX,Changed_DS,Changer_ID
		FROM SL_Object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$rowid		= $row->ROWID;
	$type		= $row->Type_TX;
	$name		= $row->Name_TX;
	$desc		= $row->Desc_TX;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;

	mysql_free_result($result);

	$name		= stripslashes($name);
	$desc		= stripslashes($desc);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Find Again\"
			style=\"color:black; width:100px;\">

		<INPUT TYPE=BUTTON VALUE=\"Report\"
				onClick=\"javascript:JSopenReportWindow('sl_report.php?ROWID=$rowid');\"
				style=\"color:black; width:60px;\">";

		echo "
		<hr size=1 width=450 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2>Glossary:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=type VALUE=\"$type\"
					style=\"color:black; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\">
				</td>
			</tr>
		</table>
		<table border=0>
			<tr>
				<td width=450><FONT FACE=arial SIZE=2>Name:</FONT></td>
			</tr>
			<tr>
				<td width=450><INPUT READONLY TYPE=text SIZE=95
					MAXLENGTH=80 NAME=name VALUE=\"$name\"
					style=\"color:black; font-family:Times; font-weight:bold;
					font-size:12px; width:400px; background-color:white\">
				</td>
			</tr>
		</table>
		<hr size=1 width=450 noshade align=left>
		<FONT FACE=Arial SIZE=2>Description:</FONT><BR>
		<TEXTAREA READONLY NAME=desc cols=80 rows=6
			style=\"color:black; font-family:Times; font-weight:bold;
			font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
		<hr size=1 width=450 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
	</FORM>";

}

// Generate add object form
function FormAddObject($name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status) {
	global $g_main;

	echo "
	<FORM name=\"QForm\" ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Object Add\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2 COLOR=black>Business Segment:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2 COLOR=black>System:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2 COLOR=black>Type:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2 COLOR=black>Category:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
			</tr>
		</table>";

		// Display Taxonomy (clear values)

		echo "
		<table class=normal width=600 BORDER=0 CELLSPACING=0
			CELLPADDING=0 VALIGN=middle>
			<tr ALIGN=center>";

				ProcSelectBox("lstCategory");
				ProcSelectBox("lstSubject");
				ProcSelectBox("lstClass");
				ProcSelectBox("lstType");

			echo "
			</tr>
		</table>";

		echo "
		<table border=0>
			<tr>
				<td width=500><FONT FACE=arial SIZE=2 COLOR=black>Name:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
				<td width=100><FONT FACE=arial SIZE=2>Version:</FONT></td>
			</tr>
			<tr>
				<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
					NAME=name VALUE=\"$name\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:510px; background-color:white\"></td>
				<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
					NAME=version VALUE=\"$version\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:100px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=2>Alias:</FONT><BR>
			<INPUT TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
		<FONT FACE=arial SIZE=2 COLOR=black>Description:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT><BR>
			<TEXTAREA NAME=desc cols=120 rows=6
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
		<hr size=1 width=620width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
				<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
				<td><INPUT TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
					NAME=changed VALUE=\"$changed\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Changer:</FONT><td>
				<td><INPUT TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<br>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
			style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>
		";

}

// Generate add object extended properties form
function FormAddObjectProperties($lstCategory,$lstSubject,$lstClass,$lstType,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status) {
	global $g_main;

	// Check if all the taxonomy variables are entered
	if ($lstCategory == -99 or $lstSubject == -99 or $lstClass == -99 or $lstType == -99) {
		GenerateHeader(
			"[Add] <font color=red><b>Complete all mandatory </font>
				<font color=red size=4>&#9830</font><font color=red> fields</b></font>");
		FormAddObject($name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
		exit();
	}

	// add slashes to avoid SQL errors
	$name		= trim(addslashes($name));
	$alias		= trim(addslashes($alias));
	$desc		= trim(addslashes($desc));
	$usage		= trim(addslashes($usage));
	$techrules  = trim(addslashes($techrules));
	$comment	= trim(addslashes($comment));

	// Check if all the variables are entered
	if (!$name || !$desc ) {
		GenerateHeader(
			"[Add] <font color=red><b>Complete all mandatory </font>
				<font color=red size=4>&#9830</font><font color=red> fields</b></font>");
		FormAddObject($name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
		exit();
	}

	// Lookup Category, Subject, Class, Type, values using IDs passed from Object Add Page
	$stmt = "SELECT Category_TX FROM SL_Category where Category_ID = $lstCategory";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$category	= $row->Category_TX;
	mysql_free_result($result);

	$stmt = "SELECT Subject_TX FROM SL_Subject where Subject_ID = $lstSubject";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$subject	= $row->Subject_TX;
	mysql_free_result($result);

	$stmt = "SELECT Class_TX FROM SL_Class where Class_ID = $lstClass";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$class	= $row->Class_TX;
	mysql_free_result($result);

	$stmt = "SELECT Type_TX FROM SL_Type where Type_ID = $lstType";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$type	= $row->Type_TX;
	mysql_free_result($result);

	// Check for preexistence of new Object Name in SL_Object table
	$stmt =
		"SELECT Name_TX FROM SL_Object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'		AND
				Name_TX			= '$name';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Object Name - $name - already exists -- the name must be unique</FONT>");
		FormAddObject($name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
		exit();
	}

	// Check if this object has extended properties
	$stmt = "
		SELECT Property_TX, Default_TX Value_TX
		FROM SL_Prop
		WHERE
			Category_TX = '$category' and
			Subject_TX = '$subject'
			and Class_TX = '$class'";

	ProcCallDatabase($result,$stmt);

	if (mysql_num_rows($result) == 0) {
		// This object has no extended properties (skip extended properties form)
		mysql_free_result($result);

		// Set extended properties to zero
		$eprow		= -1;		// reset extended property row counter
		$epname		= array();	// define extended property name array
		$epvalue	= array();	// define extended property value array
		// Implode arrays variables
		$epnamex	= implode("&",$epname);		// compress array to be passed as a string
		$epvaluex	= implode("&",$epvalue);	// compress array to be passed as a string

		ProcAddObject($category,$subject,$class,$type,$name,$version,
			$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
			$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
		exit();
	}

	GenerateHeader("[Properties] Edit extended property values
		or just click [Insert New Object]");

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Insert New Object\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
				<td width=150><FONT FACE=arial SIZE=2>Category:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=category VALUE=\"$category\"
					style=\"color:gray; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=subject VALUE=\"$subject\"
					style=\"color:gray; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=class VALUE=\"$class\"
					style=\"color:gray; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=type VALUE=\"$type\"
					style=\"color:gray; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
			</tr>
		</table>
		<table border=0>
			<tr>
				<td width=500><FONT FACE=arial SIZE=2>Name:*</FONT></td>
				<td width=100><FONT FACE=arial SIZE=2>Version:</FONT></td>
			</tr>
			<tr>
				<td width=500><INPUT READONLY TYPE=text SIZE=100 MAXLENGTH=100
					NAME=name VALUE=\"$name\"
					style=\"color:gray; font-family:Times; font-weight:normal;
					font-size:12px; width:510px; background-color:white\"></td>
				<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
					NAME=version VALUE=\"$version\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:100px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=2>Alias:</FONT><BR>
			<INPUT READONLY TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
		<FONT FACE=arial SIZE=2>Description:*</FONT><BR>
			<TEXTAREA READONLY NAME=desc cols=120 rows=6
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Business Rules:</FONT><BR>
			<TEXTAREA READONLY NAME=usage cols=120 rows=3
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$usage</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Technical Rules:</FONT><BR>
			<TEXTAREA READONLY NAME=techrules cols=120 rows=3
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$techrules</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Comment:</FONT><BR>
			<TEXTAREA READONLY NAME=comment cols=120 rows=3
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$comment</TEXTAREA><BR>
		<hr size=1 width=620width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=creator VALUE=\"$creator\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Group:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=group VALUE=\"$group\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=arial SIZE=2>Changed:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20
					NAME=changed VALUE=\"$changed\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Changer:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>";

		// Display Object Extended Properties

		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=1>Extended Properties:</FONT><P>";

		$stmt = "
			SELECT Property_TX, Default_TX Value_TX
			FROM SL_Prop
			WHERE
				Category_TX = '$category' and
				Subject_TX = '$subject'
				and Class_TX = '$class'";

		ProcCallDatabase($result,$stmt);

			printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

				printf("<TR>
					<TD WIDTH=150><B>Property Name</B></TD>
					<TD><B>Property Value</B></TD>
					</TR>\n");

				$eprow		= -1;		// reset extended property row counter
				$epname		= array();	// define extended property name array
				$epvalue	= array();	// define extended property value array

				while (($row = mysql_fetch_object($result))){
					$eprow = $eprow + 1;		// array starts at one
					printf("
						<TR>
							<TD><INPUT READONLY TYPE=text
								NAME=epname[$eprow] VALUE=\"%s\"
								style=\"color:black; font-family:Times; font-weight:bold;
								width:150px; font-size:12px;\">
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
		<hr size=1 width=620 noshade align=left>
		<br>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
			style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>";

	mysql_free_result($result);

}

// Generate modify form
function FormModifyObject($rowid) {
	global $g_colorbkg, $g_main;

	$stmt = "
		SELECT ROWID,
			Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
			Alias_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD
		FROM SL_Object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
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
	$techrules  = $row->TechRules_TX;
	$comment	= $row->Comment_TX;
	$group		= $row->Group_CD;
	$created	= $row->Created_DS;
	$creator	= $row->Creator_ID;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;
	$status		= $row->Status_CD;

	mysql_free_result($result);

	$name		= stripslashes($name);
	$alias		= stripslashes($alias);
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
					<td width=150><FONT FACE=arial SIZE=2>Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=subject VALUE=\"$subject\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=class VALUE=\"$class\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=type VALUE=\"$type\"
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
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=2>Alias:</FONT><BR>
			<INPUT TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
		<FONT FACE=arial SIZE=2>Description:</FONT><BR>
			<TEXTAREA NAME=desc cols=120 rows=6
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
			FROM SL_Attr
			WHERE
				SL_Object_FK = $rowid";

		ProcCallDatabase($result,$stmt);

			printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

				printf("<TR>
					<TD WIDTH=150><B>Property Name</B></TD>
					<TD><B>Property Value</B></TD>
					</TR>\n");

				$eprow		= -1;		// reset extended property row counter
				$epname		= array();	// define extended property name array
				$epvalue	= array();	// define extended property value array

				while (($row = mysql_fetch_object($result))){
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

	mysql_free_result($result);

}

// Generate copy form
function FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
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
					<td width=150><FONT FACE=arial SIZE=2>Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=subject VALUE=\"$subject\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=class VALUE=\"$class\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=type VALUE=\"$type\"
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
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=2>Alias:</FONT><BR>
			<INPUT TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
		<FONT FACE=arial SIZE=2>Description:</FONT><BR>
			<TEXTAREA NAME=desc cols=120 rows=6
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
			FROM SL_Attr
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

				while (($row = mysql_fetch_object($result))){
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

	mysql_free_result($result);

}

// Generate delete form
function FormDeleteObject($rowid) {
	global $g_main;

	$stmt = "
		SELECT ROWID,
			Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC
		FROM SL_Object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
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

	mysql_free_result($result);

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
					<td width=150><FONT FACE=arial SIZE=2>Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=category VALUE=\"$category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=subject VALUE=\"$subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=class VALUE=\"$class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=type VALUE=\"$type\"
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
					<td width=500><INPUT READONLY TYPE=text SIZE=100 MAXLENGTH=100
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
		<hr size=1 width=620 noshade align=left>
	</FORM>";
}

// Generate add parent relationship form for class
function FormObjectParentClass($rowid,$category, $subject,
		$class, $type, $name, $version) {
	global $g_main;

	$p_category	= $category;
	$p_subject	= $subject;
	$p_class	= "";
	$p_type		= $type;
	$p_name		= "";
	$p_version	= $version;
	$c_rowid	= $rowid;
	$c_category	= $category;
	$c_subject	= $subject;
	$c_class	= $class;
	$c_type		= $type;
	$c_name		= $name;
	$c_version	= $version;
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=HIDDEN NAME=c_rowid VALUE=$c_rowid>
		<INPUT TYPE=HIDDEN NAME=p_rowid VALUE=0>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Parent Class\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\" Reset \" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>";

					$stmt = "SELECT DISTINCT P_Class_TX from SL_Assoc
						WHERE
							C_Category_TX	= '$c_category' AND
							C_Subject_TX	= '$c_subject' AND
							C_Class_TX		= '$c_class'
							ORDER BY P_Class_TX;";

					ProcCallDatabase($result,$stmt);

					echo "<td><select name=p_class
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">";
					printf("<option selected value=''>");
					for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
					{
						$myrow = mysql_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysql_free_result($result);

					echo "
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_type VALUE=\"$p_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Parent Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Parent Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT TYPE=text SIZE=95 MAXLENGTH=80 readonly
						NAME=p_name VALUE=\"-- Select (Confirm Parent Class) to choose parent name --\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
						NAME=p_version VALUE=\"$p_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Child Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_type VALUE=\"$c_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Child Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Child Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=95 MAXLENGTH=80
						NAME=c_name VALUE=\"$c_name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=c_version VALUE=\"$c_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

}

// Generate add parent relationship form for name
function FormAddObjectParent($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status) {
	global $g_main;

	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=HIDDEN NAME=c_rowid VALUE=$c_rowid>
		<INPUT TYPE=HIDDEN NAME=p_rowid VALUE=0>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Add Parent\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\" Reset \" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_type VALUE=\"$p_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Parent Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Parent Version:</FONT></td>
				</tr>
				<tr>";

					$stmt = "SELECT DISTINCT Name_TX FROM SL_Object
						WHERE
							Category_TX		= '$p_category'	AND
							Subject_TX		= '$p_subject'	AND
							Class_TX		= '$p_class'	AND
							Type_TX			= '$p_type' 	AND
							Version_DC		= '$p_version'	AND
							Name_TX			NOT IN (
								SELECT
									P_Name_TX FROM SL_Rel
								WHERE
									P_Category_TX	= '$p_category'	AND
									P_Subject_TX	= '$p_subject'	AND
									P_Class_TX		= '$p_class'	AND
									P_Type_TX		= '$p_type' 	AND
									P_Version_DC	= '$p_version')
									ORDER BY Name_TX;";

					ProcCallDatabase($result,$stmt);

					echo "<td><select name=p_name
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:510px; background-color:white\">";
					printf("<option selected value=''>");
					for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
					{
						$myrow = mysql_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysql_free_result($result);

					echo "
					<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
						NAME=p_version VALUE=\"$p_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Child Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_type VALUE=\"$c_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Child Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Child Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=95 MAXLENGTH=80
						NAME=c_name VALUE=\"$c_name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=c_version VALUE=\"$c_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

}

// Generate add child relationship form for class
function FormObjectChildClass($rowid,$category, $subject,
		$class, $type, $name, $version) {
	global $g_main;

	$c_category	= $category;
	$c_subject	= $subject;
	$c_class	= "";
	$c_type		= $type;
	$c_name		= "";
	$c_version	= $version;
	$p_rowid	= $rowid;
	$p_category	= $category;
	$p_subject	= $subject;
	$p_class	= $class;
	$p_type		= $type;
	$p_name		= $name;
	$p_version	= $version;
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=HIDDEN NAME=p_rowid VALUE=$p_rowid>
		<INPUT TYPE=HIDDEN NAME=c_rowid VALUE=0>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Child Class\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\" Reset \" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_type VALUE=\"$p_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Parent Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Parent Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=95 MAXLENGTH=80
						NAME=p_name VALUE=\"$p_name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=p_version VALUE=\"$p_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Child Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>";

					$stmt = "SELECT DISTINCT C_Class_TX from SL_Assoc
						WHERE
							P_Category_TX	= '$p_category' AND
							P_Subject_TX	= '$p_subject' AND
							P_Class_TX		= '$p_class'
							ORDER BY C_Class_TX;";

					ProcCallDatabase($result,$stmt);

					echo "<td><select name=c_class
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">";
					printf("<option selected value=''>");
					for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
					{
						$myrow = mysql_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysql_free_result($result);

					echo "
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_type VALUE=\"$c_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Child Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Child Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT TYPE=text SIZE=95 MAXLENGTH=80 readonly
						NAME=c_name VALUE=\"-- Select (Confirm Child Class) to choose child name --\"
						style=\"color:gray; font-family:Times; font-weight:boldddedededdede;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
						NAME=c_version VALUE=\"$c_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

}

// Generate add child relationship form for name
function FormAddObjectChild($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status) {
	global $g_main;

	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=HIDDEN NAME=p_rowid VALUE=$p_rowid>
		<INPUT TYPE=HIDDEN NAME=c_rowid VALUE=0>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Add Child\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\" Reset \" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_type VALUE=\"$p_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Parent Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Parent Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=95 MAXLENGTH=80
						NAME=p_name VALUE=\"$p_name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=p_version VALUE=\"$p_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Child Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_type VALUE=\"$c_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Child Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Child Version:</FONT></td>
				</tr>
				<tr>";

					$stmt = "SELECT DISTINCT Name_TX FROM SL_Object
						WHERE
							Category_TX		= '$c_category'	AND
							Subject_TX		= '$c_subject'	AND
							Class_TX		= '$c_class'	AND
							Type_TX			= '$c_type' 	AND
							Version_DC		= '$c_version'	AND
							Name_TX			NOT IN (
								SELECT
									C_Name_TX FROM SL_Rel
								WHERE
									C_Category_TX	= '$c_category'	AND
									C_Subject_TX	= '$c_subject'	AND
									C_Class_TX		= '$c_class'	AND
									C_Type_TX		= '$c_type' 	AND
									C_Version_DC	= '$c_version')
									ORDER BY Name_TX;";

					ProcCallDatabase($result,$stmt);

					echo "<td><select name=c_name
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:510px; background-color:white\">";
					printf("<option selected value=''>");
					for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
					{
						$myrow = mysql_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysql_free_result($result);

					echo "
					<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
						NAME=c_version VALUE=\"$c_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

}

// Generate confirm delete relationship form
function FormDeleteRelationship($postauggie,$rowid) {
	global $g_main;

	$relkeys = explode("-",$postauggie);

	$stmt = "
		SELECT
			P_SL_Object_FK,P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
			C_SL_Object_FK,C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,C_Name_TX,C_Version_DC,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD
		FROM SL_Rel
		WHERE P_SL_Object_FK = $relkeys[0]
		AND C_SL_Object_FK = $relkeys[1]";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$p_rowid	= $row->P_SL_Object_FK;
	$p_category	= $row->P_Category_TX;
	$p_subject	= $row->P_Subject_TX;
	$p_class	= $row->P_Class_TX;
	$p_type		= $row->P_Type_TX;
	$p_name		= $row->P_Name_TX;
	$p_version	= $row->P_Version_DC;
	$c_rowid	= $row->C_SL_Object_FK;
	$c_category	= $row->C_Category_TX;
	$c_subject	= $row->C_Subject_TX;
	$c_class	= $row->C_Class_TX;
	$c_type		= $row->C_Type_TX;
	$c_name		= $row->C_Name_TX;
	$c_version	= $row->C_Version_DC;
	$created	= $row->Created_DS;
	$creator	= $row->Creator_ID;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;
	$status		= $row->Status_CD;

	mysql_free_result($result);

	$p_name		= stripslashes($p_name);
	$c_name		= stripslashes($c_name);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=HIDDEN NAME=p_rowid VALUE=$p_rowid>
		<INPUT TYPE=HIDDEN NAME=c_rowid VALUE=$c_rowid>
		<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Delete Relationship\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=p_type VALUE=\"$p_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Parent Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Parent Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=95 MAXLENGTH=80
						NAME=p_name VALUE=\"$p_name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=p_version VALUE=\"$p_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Child Business Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Child Category:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=c_type VALUE=\"$c_type\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2>Child Name:</FONT></td>
					<td width=100><FONT FACE=arial SIZE=2>Child Version:</FONT></td>
				</tr>
				<tr>
					<td width=500><INPUT READONLY TYPE=text SIZE=95 MAXLENGTH=80
						NAME=c_name VALUE=\"$c_name\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:510px; background-color:white\">
					</td>
					<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
						NAME=c_version VALUE=\"$c_version\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

}

// The next 4 form functions are used to add a new Property
// FormSelectPropCategory
// FormSelectPropSubject
// FormSelectPropClass
// FormAddProperty
// Generate select category form
function FormSelectPropCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM SL_Type ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				</tr>
			</table>
			<select name=category
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Property Subject\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select subject form
function FormSelectPropSubject($category,$subject) {
	global $g_main;

	$stmt = "SELECT DISTINCT Subject_TX FROM SL_Type
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
				</tr>
			</table>
			<select name=subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Property Class\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select class form
function FormSelectPropClass($category,$subject,$class) {
	global $g_main;

	$stmt = "SELECT DISTINCT Class_TX FROM SL_Type
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
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
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
				</tr>
			</table>
			<select name=class
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Enter New Property\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate add property form
function FormAddProperty($category,$subject,$class,$property,$default,
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
				<td width=500><FONT FACE=arial SIZE=2 COLOR=black>Property:&nbsp;
					<FONT color=red size=4>&#9830</FONT></FONT></td>
			</tr>
			<tr>
				<td width=500>
					<INPUT TYPE=text SIZE=60 MAXLENGTH=30
						NAME=property VALUE=\"$property\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Property Add\"
						style=\"color:black; width:200px;\">
				</td>
			</tr>
		</table>
		<table border=0>
			<tr>
				<td width=500><FONT FACE=arial SIZE=2 COLOR=black>Default:</FONT></td>
			</tr>
			<tr>
				<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
					NAME=default VALUE=\"$default\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:620px; background-color:white\"></td>
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
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

// Generate add category form
function FormAddCategory($category,
		$created,$creator,$changed,$changer,$status) {
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
					<INPUT TYPE=text SIZE=60 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
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
function FormAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status) {
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

		$stmt = "SELECT DISTINCT Category_TX FROM SL_Category order by Category_TX";

		ProcCallDatabase($result,$stmt);

		echo "<table class=normal width=620 border=0><tr>";

			echo "<td><select name=category
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
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
					<INPUT TYPE=text SIZE=60 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
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

// The next 3 form functions are used to add a new Class
// FormSelectClassCategory
// FormSelectClassSubject
// FormAddClass
// Generate select category form
function FormSelectClassCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM SL_Category ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2 COLOR=black>Business Segment:</FONT></td>
				</tr>
			</table>
			<select name=category
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Class Subject\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select subject form
function FormSelectClassSubject($category,$subject) {
	global $g_main;

	$stmt = "SELECT DISTINCT Subject_TX FROM SL_Subject
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<p>
			<FONT FACE=arial SIZE=2 COLOR=black>System:</FONT>&nbsp;
			<select name=subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Enter New Class\"
				style=\"color:black; width:150;\">
			<p>
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
					<INPUT TYPE=text SIZE=60 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
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

// The next 4 form functions are used to add a new Type
// FormSelectTypeCategory
// FormSelectTypeSubject
// FormSelectTypeClass
// FormAddType
// Generate select category form
function FormSelectTypeCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM SL_Category ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2 COLOR=black>Business Segment:</FONT></td>
				</tr>
			</table>
			<select name=category
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Type Subject\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select subject form
function FormSelectTypeSubject($category,$subject) {
	global $g_main;

	$stmt = "SELECT DISTINCT Subject_TX FROM SL_Subject
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=500><FONT FACE=arial SIZE=2 COLOR=black>Subject:</FONT></td>
				</tr>
			</table>
			<select name=subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Type Class\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select class form
function FormSelectTypeClass($category,$subject,$class) {
	global $g_main;

	$stmt = "SELECT DISTINCT Class_TX FROM SL_Class
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
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
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
				</tr>
			</table>
			<select name=class
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Enter New Type\"
				style=\"color:black; width:150;\">
			<P>
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
					<INPUT TYPE=text SIZE=60 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=status VALUE=\"$status\"
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

// The next 4 form functions are used to add a new Association
// FormSelectParentCategory
// FormSelectParentSubject
// FormSelectParentClass
// FormAddAssociation
// Generate select category form
function FormSelectParentCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM SL_Type ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
				</tr>
			</table>
			<select name=category
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Parent Subject\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select subject form
function FormSelectParentSubject($category,$subject) {
	global $g_main;

	$stmt = "SELECT DISTINCT Subject_TX FROM SL_Type
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent_Business_Segment:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text NAME=category VALUE=\"$category\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent_System:</FONT></td>
				</tr>
			</table>
			<select name=subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Parent Class\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate select class form
function FormSelectParentClass($category,$subject,$p_class) {
	global $g_main;

	$stmt = "SELECT DISTINCT Class_TX FROM SL_Type
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent_Business_Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent_System:</FONT></td>
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
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent_Type:</FONT></td>
				</tr>
			</table>
			<select name=p_class
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Select Child Class\"
				style=\"color:black; width:150;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate add association form
function FormAddAssociation($category,$subject,$p_class,$c_class) {
	global $g_main;

	$stmt = "SELECT DISTINCT Class_TX FROM SL_Type
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=post ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\"
				style=\"color:black; width:100;\">
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Parent_Business_Segment:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent_System:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Parent_Type:</FONT></td>
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
					<td><INPUT READONLY TYPE=text NAME=p_class VALUE=\"$p_class\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
			<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Child_Type:</FONT></td>
				</tr>
			</table>
			<select name=c_class
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE=submit NAME=auggie VALUE=\"Confirm Association Add\"
				style=\"color:black; width:200;\">
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

// Generate confirm delete schema category form
function FormDeleteSchemaCategory($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX
		FROM SL_Category
		WHERE Category_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Category Delete\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Warning:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Deleting this Schema Category record will cascade delete all associated
							records in the following tables: SL_Category, SL_Subject,
							SL_Class, SL_Type, SL_Assoc, SL_Prop, SL_Object, SL_Attr, SL_Rel.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm modify schema category form
function FormModifySchemaCategory($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX
			FROM SL_Category
			WHERE Category_ID = '$postauggie';";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category		= $row->Category_TX;
	$n_category		= "";
	$save_rowid		= $postauggie;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=text
							NAME=n_category VALUE=\"$n_category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=hidden NAME=save_rowid VALUE=$save_rowid>
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Category Modify\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Notice:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Modifying this Schema Category record will cascade modify all associated
							records in the following tables: SL_Category, SL_Subject,
							SL_Class, SL_Type, SL_Assoc, SL_Prop, SL_Object, SL_Attr, SL_Rel.
							This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm delete schema subject form
function FormDeleteSchemaSubject($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX
		FROM SL_Subject
		WHERE Subject_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Subject Delete\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Warning:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Deleting this Schema Subject record will cascade delete all associated
							records in the following tables: SL_Subject, SL_Class, SL_Type,
							SL_Assoc, SL_Prop, SL_Object, SL_Attr, SL_Rel.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm modify schema subject form
function FormModifySchemaSubject($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX
		FROM SL_Subject
		WHERE Subject_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$n_subject	= "";
	$save_rowid	= $postauggie;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=text
							NAME=n_subject VALUE=\"$n_subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=hidden NAME=save_rowid VALUE=$save_rowid>
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Subject Modify\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Notice:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Modifying this Schema Subject record will cascade modify all associated
							records in the following tables: SL_Subject, SL_Class, SL_Type,
							SL_Assoc, SL_Prop, SL_Object, SL_Attr, SL_Rel.
							This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm delete schema class form
function FormDeleteSchemaClass($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX
		FROM SL_Class
		WHERE Class_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=class VALUE=\"$class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Class Delete\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Warning:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Deleting this Schema Class record will cascade delete all associated
							records in the following tables: SL_Class, SL_Type, SL_Assoc,
							SL_Prop, SL_Object, SL_Attr, SL_Rel.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm modify schema class form
function FormModifySchemaClass($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX
		FROM SL_Class
		WHERE Class_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$n_class	= "";
	$save_rowid	= $postauggie;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=class VALUE=\"$class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=text
							NAME=n_class VALUE=\"$n_class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=hidden NAME=save_rowid VALUE=$save_rowid>
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Class Modify\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Notice:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Modifying this Schema Class record will cascade modify all associated
							records in the following tables: SL_Class, SL_Type, SL_Assoc,
							SL_Prop, SL_Object, SL_Attr, SL_Rel.
							This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm delete schema type form
function FormDeleteSchemaType($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Type_TX
		FROM SL_Type
		WHERE Type_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$type		= $row->Type_TX;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=class VALUE=\"$class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Category:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=type VALUE=\"$type\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Type Delete\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Warning:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Deleting this Schema Type record will cascade delete all associated
							records in the following tables: SL_Type, SL_Object, SL_Attr, SL_Rel.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm modify schema type form
function FormModifySchemaType($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Type_TX
		FROM SL_Type
		WHERE Type_ID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$type		= $row->Type_TX;
	$n_type		= "";
	$save_rowid	= $postauggie;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=class VALUE=\"$class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Category:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=type VALUE=\"$type\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New Category:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=text
							NAME=n_type VALUE=\"$n_type\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=hidden NAME=save_rowid VALUE=$save_rowid>
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Type Modify\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Notice:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Modifying this Schema Type record will cascade modify all associated
							records in the following tables: SL_Type, SL_Object, SL_Attr, SL_Rel.
							This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm delete schema association form
function FormDeleteSchemaAssoc($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			P_Category_TX, P_Subject_TX, P_Class_TX, C_Class_TX
		FROM SL_Assoc
		WHERE ROWID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$p_category		= $row->P_Category_TX;
	$p_subject		= $row->P_Subject_TX;
	$p_class		= $row->P_Class_TX;
	$c_class		= $row->C_Class_TX;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=p_category VALUE=\"$p_category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=p_subject VALUE=\"$p_subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Parent Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=p_class VALUE=\"$p_class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Child Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=c_class VALUE=\"$c_class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Association Delete\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Warning:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Deleting this Schema Association record will cascade delete all associated
							records in the following tables: SL_Assoc, SL_Rel.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm delete schema property form
function FormDeleteSchemaProp($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Property_TX
		FROM SL_Prop
		WHERE ROWID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$property	= $row->Property_TX;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=class VALUE=\"$class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Property:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=property VALUE=\"$property\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Property Delete\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Warning:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Deleting this Schema Extended Property record will cascade delete all
							associated records in the following tables: SL_Prop, SL_Attr.
							Existing Objects in the SL_Object table will not be affected other
							than they will no longer contain the deleted Extended Property.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// Generate confirm modify schema property form
function FormModifySchemaProp($postauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Property_TX, Default_TX
		FROM SL_Prop
		WHERE ROWID = $postauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$property	= $row->Property_TX;
	$default	= $row->Default_TX;
	$n_property	= "";
	$n_default	= "";
	$save_rowid	= $postauggie;

	mysql_free_result($result);

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Business Segment:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=category VALUE=\"$category\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>System:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=subject VALUE=\"$subject\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Type:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=class VALUE=\"$class\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Property:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=property VALUE=\"$property\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Default Value:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT READONLY TYPE=text
							NAME=default VALUE=\"$default\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New Property:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=text
							NAME=n_property VALUE=\"$n_property\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New Default:</FONT>
					<td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=text
							NAME=n_default VALUE=\"$n_default\"
							style=\"color:grey; font-family:Times; font-weight:normal;
							font-size:12px; width:250px; background-color:white\">
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=hidden NAME=save_rowid VALUE=$save_rowid>
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Property Modify\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Notice:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Modifying this Schema Extended Property record will cascade modify all
							associated records in the following tables: SL_Prop, SL_Attr.
							This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record. The Schema
							Property Default value in table SL_Prop can be changed but the
							Value_TX field in table SL_Attr will not be changed via this function.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// *************************************************************************************************
// SECTION: User Form Functions
// *************************************************************************************************

function FormModifyYourProfile() {
	$s_user = $_SESSION['s_user'];
	global $g_main;

	// Create the SQL command select the user record from the database
	$stmt = "
		SELECT User_ID,User_Type_CD,Password_TX,First_Name_TX,Last_Name_TX,
			Title_TX,Email_Addr_TX,Phone_TX,Company_TX,Dept_TX,
			URL_TX,Release_CD,Newsletter_CD,
			Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD
		from SL_User where User_ID = '$s_user'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$userid		= $row->User_ID;
	$usertype	= $row->User_Type_CD;
	$firstname	= $row->First_Name_TX;
	$lastname	= $row->Last_Name_TX;
	$title		= $row->Title_TX;
	$email		= $row->Email_Addr_TX;
	$phone		= $row->Phone_TX;
	$company	= $row->Company_TX;
	$dept		= $row->Dept_TX;
	$url		= $row->URL_TX;
	$rels		= $row->Release_CD;
	$news		= $row->Newsletter_CD;
	$created	= $row->Created_DS;
	$creator	= $row->Creator_ID;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;
	$status		= $row->Status_CD;

	mysql_free_result($result);

	$firstname	= stripslashes($firstname);
	$lastname	= stripslashes($lastname);
	$title		= stripslashes($title);
	$email		= stripslashes($email);
	$phone		= stripslashes($phone);
	$company	= stripslashes($company);
	$dept		= stripslashes($dept);
	$url		= stripslashes($url);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Profile Change\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User ID:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=userid VALUE=\"$userid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User Type:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=userType VALUE=\"$usertype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>First Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=firstname VALUE=\"$firstname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Last Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=lastname VALUE=\"$lastname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Title:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=title VALUE=\"$title\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Email Address:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=email VALUE=\"$email\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Phone Number:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=phone VALUE=\"$phone\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=company VALUE=\"$company\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Department Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=dept VALUE=\"$dept\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company URL:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=url VALUE=\"$url\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:400px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>New Releases:</FONT></td>
					<td><SELECT NAME=rels
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$rels\">$rels
						<option value=\"Yes\">Yes
						<option value=\"No\">No
						</SELECT>
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>News Letter:</FONT></td>
					<td><SELECT NAME=news
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$news\">$news
						<option value=\"Yes\">Yes
						<option value=\"No\">No
						</SELECT>
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30
					NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Your Account\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

function FormModifyYourPassword() {
	$s_user = $_SESSION['s_user'];
	global $g_main;

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Password Change\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>User ID:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=userid VALUE=\"$s_user\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Current Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=30 NAME=oldpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>New Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=30 NAME=newpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Confirm Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=30 NAME=confirmpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Your Account\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

// *************************************************************************************************
// SECTION: Admin Form Functions
// *************************************************************************************************

function FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news) {

	global $g_host, $g_user, $g_pass, $g_database, $g_main;
	$s_user = $_SESSION['s_user'];

	$password	= '';
	$created	= date("Y-m-d H:i:s");
	$creator	= $s_user;
	$changed	= date("Y-m-d H:i:s");
	$changer	= $s_user;
	$status		= 'Active';

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm User Add\"
			style=\"color:black; width:200px;\">
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User ID:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=userid VALUE=\"$userid\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User Type:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=usertype VALUE=\"$usertype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=30 NAME=password VALUE=\"$password\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>First Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=firstname VALUE=\"$firstname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Last Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=lastname VALUE=\"$lastname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Title:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=title VALUE=\"$title\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Email Address:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=email VALUE=\"$email\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Phone Number:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=phone VALUE=\"$phone\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=company VALUE=\"$company\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Department Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=dept VALUE=\"$dept\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company URL:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=url VALUE=\"$url\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:400px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>New Releases:</FONT></td>
					<td><SELECT NAME=rels
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$rels\">$rels
						<option value=\"Yes\">Yes
						<option value=\"No\">No
						</SELECT>
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>News Letter:</FONT></td>
					<td><SELECT NAME=news
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$news\">$news
						<option value=\"Yes\">Yes
						<option value=\"No\">No
						</SELECT>
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30
					NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

function FormSelectUserProfile() {
	global $g_main;

	$stmt = "SELECT User_ID FROM SL_User order by User_ID";

	ProcCallDatabase($result,$stmt);

	echo "
		<FORM METHOD=post ACTION=$g_main>
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
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}

				mysql_free_result($result);

				echo "
			</select>
			<P>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
				style=\"color:black; width:120px;\">
		</FORM>";
}

function FormModifyUserProfile() {
	global $g_host, $g_user, $g_pass, $g_database, $g_main, $userid;
	$s_user = $_SESSION['s_user'];

	// Check if a User ID was selected
	if ($userid == "") {
	GenerateHeader(
		"[Admin Select User] <font color=red><b>Select a USER ID or Cancel</b></font>");
	FormSelectUserProfile();
	exit();
	}

	// Create the SQL command select the user record from the database
	$stmt = "
		SELECT User_ID,User_Type_CD,First_Name_TX,Last_Name_TX,
			Title_TX,Email_Addr_TX,Phone_TX,Company_TX,Dept_TX,
			URL_TX,Release_CD,Newsletter_CD,
			Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD
		from SL_User where User_ID = '$userid'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$userid		= $row->User_ID;
	$usertype	= $row->User_Type_CD;
	$firstname	= $row->First_Name_TX;
	$lastname	= $row->Last_Name_TX;
	$title		= $row->Title_TX;
	$email		= $row->Email_Addr_TX;
	$phone		= $row->Phone_TX;
	$company	= $row->Company_TX;
	$dept		= $row->Dept_TX;
	$url		= $row->URL_TX;
	$rels		= $row->Release_CD;
	$news		= $row->Newsletter_CD;
	$created	= $row->Created_DS;
	$creator	= $row->Creator_ID;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;
	$status		= $row->Status_CD;

	mysql_free_result($result);

	$firstname	= stripslashes($firstname);
	$lastname	= stripslashes($lastname);
	$title		= stripslashes($title);
	$email		= stripslashes($email);
	$phone		= stripslashes($phone);
	$company	= stripslashes($company);
	$dept		= stripslashes($dept);
	$url		= stripslashes($url);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm User Change\"
			style=\"color:black; width:200px;\">
			<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:100px;\">
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User ID:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=userid VALUE=\"$userid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User Type:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=usertype VALUE=\"$usertype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>First Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=firstname VALUE=\"$firstname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Last Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=lastname VALUE=\"$lastname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Title:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=title VALUE=\"$title\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Email Address:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=email VALUE=\"$email\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Phone Number:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=phone VALUE=\"$phone\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=company VALUE=\"$company\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Department Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=dept VALUE=\"$dept\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company URL:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=url VALUE=\"$url\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:400px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>New Releases:</FONT></td>
					<td><SELECT NAME=rels
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$rels\">$rels
						<option value=\"Yes\">Yes
						<option value=\"No\">No
						</SELECT>
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>News Letter:</FONT></td>
					<td><SELECT NAME=news
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$news\">$news
						<option value=\"Yes\">Yes
						<option value=\"No\">No
						</SELECT>
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT><td>
					<td><SELECT NAME=status
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:100px; background-color:white\">
						<option selected value=\"$status\">$status
						<option value=\"Active\">Active
						<option value=\"Inactive\">Inactive
						</SELECT>
					</td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

function FormSelectUserPassword() {
	global $g_main;

	$stmt = "SELECT User_ID FROM SL_User order by User_ID";

	ProcCallDatabase($result,$stmt);

	echo "
		<FORM METHOD=post ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

			echo "
			</select>
			<p>
			<hr size=1 width=620 noshade align=left>
			<p>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
				style=\"color:black; width:120px;\">
		</FORM>";
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
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=userid VALUE=\"$userid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>New Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=30 NAME=newpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Confirm Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=30 NAME=confirmpass VALUE=\"\"
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

function FormModifyObjectCreator() {
	global $g_main;

	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px;\">
		<hr size=1 width=620 noshade align=left>
			<table border=0>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>Currect Owner:</FONT>
					<td>
					<td>";

						$stmt = "SELECT User_ID FROM SL_User order by User_ID";
						ProcCallDatabase($result,$stmt);

						echo "
						<select name=creator
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:200px; background-color:white\">";
							printf("<option selected value=''>");

							for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
							{
								$myrow = mysql_fetch_row($result);
								printf("<option value='$myrow[0]'>$myrow[0]");
							}

							echo "
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<FONT FACE=arial SIZE=2 color=black>New Owner:</FONT>
					<td>
					<td>";

						$stmt = "SELECT User_ID FROM SL_User order by User_ID";
						ProcCallDatabase($result,$stmt);

						echo "
						<select name=n_creator
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:200px; background-color:white\">";
							printf("<option selected value=''>");

							for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
							{
								$myrow = mysql_fetch_row($result);
								printf("<option value='$myrow[0]'>$myrow[0]");
							}

							echo "
						</select>
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;
						<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Confirm Creator Modify\"
							style=\"color:black; width:200px;\">
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
			<table border=1>
				<tr>
					<td width=600 align=left>
						<FONT FACE=arial SIZE=3 color=red>Notice:</FONT>
						<BR>
						<FONT FACE=arial SIZE=2 color=black>
							Make sure to create a backup copy
							of the data dictionary before running this function.
							Modifying the object owner (Creator_ID) will cascade modify all
							associated records in the following tables: SL_Object,
							SL_Rel, SL_Prop. This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record.
						</FONT>
					</td>
				</tr>
			</table>
		<hr size=1 width=620 noshade align=left>
		<p>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Manage User\"
			style=\"color:black; width:120px;\">
	</FORM>";
}

function FormModifyConfiguration() {
	$s_user = $_SESSION['s_user'];
	global $g_main;

	// Create the SQL command select the record from the database
	$stmt = "
		SELECT
			Config_ID,Color_Bkg_HX,Color_Msg_HX,Logo_Primary_TX,
			Read_Only_FL,Max_Rows_IN,Attr_01_TX,Attr_02_TX,Attr_03_TX,
			Attr_04_TX,Attr_05_TX,Attr_06_TX,Attr_07_TX,
			Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD
		from SL_Config where Config_ID = 'Default'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
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
	$created		= $row->Created_DS;
	$creator		= $row->Creator_ID;
	$changed		= $row->Changed_DS;
	$changer		= $row->Changer_ID;
	$status			= $row->Status_CD;

	mysql_free_result($result);

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
					<td><INPUT READONLY TYPE=text MAXLENGTH=30 NAME=configid VALUE=\"$configid\"
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
					<td><INPUT TYPE=text MAXLENGTH=30 NAME=logoprim VALUE=\"$logoprim\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=30
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=30
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

// *************************************************************************************************
// SECTION: Non Interactive Functions
// *************************************************************************************************

// Search Object
function ProcSearchObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status) {
	global $g_colorbkg, $g_maxrows, $g_main;

	$s_user = $_SESSION['s_user'];

	// Strip any single quotes so SQL call will not fail
	// Strip whitespace
		$name		= trim(str_replace("'","",$name));
		$version	= trim(str_replace("'","",$version));
		$alias		= trim(str_replace("'","",$alias));
		$desc		= trim(str_replace("'","",$desc));
		$usage		= trim(str_replace("'","",$usage));
		$techrules  = trim(str_replace("'","",$techrules));
		$comment	= trim(str_replace("'","",$comment));
		$created	= trim(str_replace("'","",$created));
		$creator	= trim(str_replace("'","",$creator));
		$changed	= trim(str_replace("'","",$changed));
		$changer	= trim(str_replace("'","",$changer));

	// Check if at least one search criteria is entered
	if (!$category && !$subject && !$class && !$type && !$name && !$version &&
		!$alias && !$desc && !$usage && !$techrules && !$comment && !$group &&
		!$created && !$creator && !$changed && !$changer && !$status) {
		GenerateHeader(
			"[Search] <font color=red><b>At least one search criteria MUST be entered</b></font>");
		FormSearchObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Generate the SQL command for doing a select from the Database
	$stmt = " from SL_Object where ";

	if ($category)
		$stmt .= "Category_TX like '$category' and ";
	if ($subject)
		$stmt .= "Subject_TX like '$subject' and ";
	if ($class)
		$stmt .= "Class_TX like '$class' and ";
	if ($type)
		$stmt .= "Type_TX like '$type' and ";
	if ($name)
		$stmt .= "Name_TX like '%$name%' and ";
	if ($version)
		$stmt .= "Version_DC like '$version' and ";
	if ($alias)
		$stmt .= "Alias_TX like '%$alias%' and ";
	if ($desc)
		$stmt .= "Desc_TX like '%$desc%' and ";
	if ($usage)
		$stmt .= "Usage_TX like '%$usage%' and ";
	if ($techrules)
		$stmt .= "TechRules_TX like '%$techrules%' and ";
	if ($comment)
		$stmt .= "Comment_TX like '%$comment%' and ";
	if ($group)
		$stmt .= "Group_CD like '$group' and ";
	if ($created)
		$stmt .= "Created_DS like '$created' and ";
	if ($creator)
		$stmt .= "Creator_ID like '$creator' and ";
	if ($changed)
		$stmt .= "Changed_DS like '$changed' and ";
	if ($changer)
		$stmt .= "Changer_ID like '$changer' and ";
	if ($status)
		$stmt .= "Status_CD like '$status' and ";

	// Add what records the user can see to the where clause.
	// User ID 'Admin' can see any records. Other User IDs can see records with
	// Group_CD 'General'. Other User IDs can also see records with and Group_CD
	// 'Private' if their User ID is set as the creator of the record.

	if ($_SESSION['s_user'] == "admin") {
		// Remove last "^and" from the end of SQL statement (Admin can see all records)
		$stmt = substr($stmt, 0, strlen($stmt)-4);
	}
	else {
		// Other User IDs can only see General or their own Private records
		$stmt .= "(Group_CD = 'General' or (Creator_ID = '$s_user' and Group_CD = 'Private'))";
	}

	$stmt .= " ORDER BY Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX";

	// save statement value for reporting options -- pass as hidden reportstmt
	$reportstmt = "select * ".$stmt;

	$stmtcount = "
		SELECT count(*) rowcount ".$stmt;

	$stmt = "
		SELECT ROWID,
			Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC ".$stmt;

	ProcCallDatabase($result,$stmtcount);

	$row = mysql_fetch_object($result);

	$rowcount	= $row->rowcount;

	mysql_free_result($result);

	if ($rowcount > $g_maxrows) {
	GenerateHeader("[Search] <font color=red>
		<b>Your result set was $rowcount records - $g_maxrows max - </b>
		Please add criteria to your search condition</font>");
	FormSearchObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status);
	exit();
	}

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Result] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

		echo "
		<input type=submit name=auggie value=\"Search Again\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		&nbsp;&nbsp;

		<input type=submit name=auggie value=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<INPUT type=submit name=auggie value=\"Bulk Report\" style=\"color:black; width:100px; background: url(image/report_check.png); background-repeat:no-repeat; background-color: #DCDCDC;\">

		<INPUT type=hidden name=reportstmt value=\"$reportstmt\">
		<hr size=1 noshade align=left>";

		//added by Subhajit
		if ($subject == "Hadoop"){
		printf("<IMG SRC=image/hadoop.png>");}
		if ($subject == "SAP HANA"){
		printf("<IMG SRC=image/saphana.png>");}
		if ($subject == "SAP Business Objects"){
		printf("<IMG SRC=image/bobj.png>");}
		if ($class == "Datameer Workbook"){
				printf("<IMG SRC=image/datameer.png>");}

			printf("<TR bgcolor=#ced7e1>
				<TD align=center><B>SELECT</B></TD>
				<TD align=center><B>Business Segment</B></TD>
				<TD align=center><B>Category</B></TD>
				<TD align=center><B>System</B></TD>
				<TD align=center><B>Type</B></TD>
				<TD align=center><B>Name</B></TD>");
				if ($class == "Column"){
							printf("<TD align=center><B>Table</B></TD>");
				}
				printf("<TD align=center><B>Version</B></TD>
				</TR>\n");

			$i = 1;
			$color1 = "#FFFFF0";
			$color2 = "#E0FFFF";

			if ($class == "Column") {
				while (($row = mysql_fetch_object($result))){

									if($i%2 == 1) $color = $color1;
									else $color = $color2;

									printf("<TR style='background-color: $color'>
										<TD><center><INPUT TYPE=SUBMIT NAME=auggie
											VALUE=O-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
											font-size:9px; font-family:Arial;\"
											</center></TD>
										<TD>%s</TD>
										<TD>%s</TD>
										<TD>%s</TD>
										<TD>%s</TD>
										<TD>%s</TD>
										<TD>%s</TD>
										<TD>%s</TD>
										</TR>\n",
									$row->ROWID,$row->Category_TX,$row->Type_TX,$row->Subject_TX,$row->Class_TX,
						substr($row->Name_TX,strpos($row->Name_TX,".")+1),
						substr($row->Name_TX,0,strpos($row->Name_TX,".")),
						$row->Version_DC);

						$i++;
						}
						printf("</TABLE>\n");
			}
			else {
				while (($row = mysql_fetch_object($result))){

					if($i%2 == 1) $color = $color1;
					else $color = $color2;

					printf("<TR style='background-color: $color'>
						<TD align=center><center><INPUT TYPE=SUBMIT NAME=auggie
							VALUE=O-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
							font-size:9px; font-family:Arial;\"
							</center></TD>
						<TD>%s</TD>
						<TD>%s</TD>
						<TD>%s</TD>
						<TD>%s</TD>
						<TD>%s</TD>
						<TD>%s</TD>
						</TR>\n",
					$row->ROWID,$row->Category_TX,$row->Type_TX,$row->Subject_TX,$row->Class_TX,
					$row->Name_TX,$row->Version_DC);

					$i++;
				}
				printf("</TABLE>\n");
			}


	echo "
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>";

	mysql_free_result($result);

}

// Search Object SL Lite
function ProcSearchLite($findtext,$inglossary,$outglossary) {
	global $g_colorbkg, $g_maxrows, $g_main;

	$s_user = $_SESSION['s_user'];

	// Strip any single quotes so SQL call will not fail
	// Strip whitespace
		$findtext	= trim(str_replace("'","",$findtext));

	// Check if at least one search criteria is entered
	if (!$findtext) {
		GenerateHeaderLite(
			"[Search Lite] <font color=red>
			<b>
			At least one search criteria MUST be entered</b></font>");
		FormSearchLite($findtext);
		exit();
	}

	// Generate the SQL command for doing a select from the Database

	if ($inglossary == "") {
		$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX
			FROM SL_Object WHERE
			(Name_TX LIKE '%$findtext%' or Desc_TX LIKE '%$findtext%')
			AND Class_TX = 'Glossary'
			AND Group_CD = 'General'
			ORDER BY Type_TX, Name_TX";
	}
	else {
		$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX
			FROM SL_Object WHERE
			(Name_TX LIKE '%$findtext%' or Desc_TX LIKE '%$findtext%')
			AND Class_TX = 'Glossary' AND Type_TX = '$inglossary'
			AND Group_CD = 'General'
			ORDER BY Type_TX, Name_TX";
	}
	if ($outglossary == "on") {
		$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX
			FROM SL_Object WHERE
			(Name_TX LIKE '%$findtext%' or Desc_TX LIKE '%$findtext%')
			AND Group_CD = 'General'
			ORDER BY Type_TX, Name_TX";
	}

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeaderLite("[Result Lite] Select function via corresponding show button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Find Again\"
			style=\"color:black; width:100px;\">";

		printf("<p><TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><B><CENTER>SHOW</CENTER></B></TD>
				<TD><B>Business Segment</B></TD>
				<TD><B>System</B></TD>
				<TD><B>Type</B></TD>
				<TD><B>Category</B></TD>
				<TD><B>Name</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=L-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					</TR>\n",
				$row->ROWID,$row->Category_TX,$row->Subject_TX,
				$row->Class_TX,$row->Type_TX,$row->Name_TX);
			}

		printf("</TABLE>\n");

	mysql_free_result($result);

}

// Add Object
function ProcAddObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex) {

	$stmt = "Insert into SL_Object
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
		Alias_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$name."', '".
			$version."', '".
			$alias."', '".
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

	$stmt = "SELECT ROWID FROM SL_Object WHERE
		Category_TX		='$category'	AND
		Subject_TX		='$subject'	AND
		Class_TX		='$class'	AND
		Type_TX			='$type'	AND
		Name_TX			='$name'	AND
		Version_DC		='$version'	AND
		Alias_TX		='$alias'	AND
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

	if (!($row = mysql_fetch_object($result))){
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
			Insert into SL_Attr (
				SL_Object_FK,
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
					$name."', '".
					$version."', '".
					$epname[$counter]."', '".
					$epvalue[$counter]."')";

		ProcCallDatabase($result,$stmt);
	}

	GenerateHeader("[Main Menu] The entry was added successfully");
	FormButtonsMainMenu();
	exit();

}

// Modify Object
function ProcModifyObject($rowid,$category,$subject,$class,$type,$name,$n_name,$alias,$desc,
	$usage,$techrules,$comment,$group,$status,$eprow,$epnamex,$epvaluex) {

	$s_user = $_SESSION['s_user'];

	// add slashes to avoid SQL errors
	$name		= trim(addslashes($name));
	$alias		= trim(addslashes($alias));
	$desc		= trim(addslashes($desc));
	$usage		= trim(addslashes($usage));
	$techrules  = trim(addslashes($techrules));
	$comment	= trim(addslashes($comment));

	// Check to see if n_name (new name) field was made NULL
	if (!$n_name) {
		GenerateHeader(
			"[Modify] <FONT FACE=arial SIZE=2 COLOR=red>
			The Name field cannot be NULL</FONT>");
		FormModifyObject($rowid);
		exit();
	}

	// Check to see if decription field was made NULL
	if (!$desc) {
		GenerateHeader(
			"[Modify] <FONT FACE=arial SIZE=2 COLOR=red>
			The Description field cannot be NULL</FONT>");
		FormModifyObject($rowid);
		exit();
	}

	// Check for preexistence of new Object Name in SL_Object table if changed
	// Uppercase both test strings to see if the same string is being changed
	if (strtoupper($name) != strtoupper($n_name)) {
		$stmt =
			"SELECT Name_TX FROM SL_Object
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$class'		AND
					Type_TX			= '$type'		AND
					Name_TX			= '$n_name';";
		ProcCallDatabase($result,$stmt);
		if (mysql_num_rows($result) > 0) {
			mysql_free_result($result);
			GenerateHeader(
				"[Modify] <FONT FACE=arial SIZE=2 COLOR=red>
				The new Object Name - $n_name - already exists -- the name must be unique</FONT>");
			FormModifyObject($rowid);
			exit();
		}
	}

	$stmt = "
		Update SL_Object set
			Name_TX='$n_name',Alias_TX='$alias',Desc_TX='$desc',
			Usage_TX='$usage',TechRules_TX='$techrules',Comment_TX='$comment',Group_CD='$group',
			Changed_DS=NOW(),Changer_ID='$s_user',Status_CD='$status'
		WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	// Expolde arrays variables

	$epname		= explode("&",$epnamex);	// expand string back into an array
	$epvalue	= explode("&",$epvaluex);	// expand string back into an array

	// Update extended properties
	for ($counter = 0; $counter < $eprow + 1; $counter++) {
		$epvalue[$counter]	= trim(addslashes($epvalue[$counter]));
		$stmt = "
			Update SL_Attr set
				Value_TX='$epvalue[$counter]'
			WHERE SL_Object_FK = $rowid AND Property_TX = '$epname[$counter]'";
		ProcCallDatabase($result,$stmt);
	}

	// If name was updated -- update all foreign references to name
	if (strtoupper($name) != strtoupper($n_name)) {

		$stmt =
			"UPDATE SL_Attr SET Name_TX = '$n_name'
				WHERE Name_TX = '$name'";
		ProcCallDatabase($result,$stmt);

		$stmt =
			"UPDATE SL_Rel SET P_Name_TX = '$n_name'
				WHERE P_Name_TX = '$name'";
		ProcCallDatabase($result,$stmt);

		$stmt =
			"UPDATE SL_Rel SET C_Name_TX = '$n_name'
				WHERE C_Name_TX = '$name'";
		ProcCallDatabase($result,$stmt);

	}

	GenerateHeader("[Main Menu] The entry was modified successfully");
	FormButtonsMainMenu();
	exit();
}

// Copy Object
function ProcCopyObject($category,$subject,$class,$type,$name,$n_name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex) {

	// Check if replacement object name value is null
	if ($n_name == "") {
		$name = $n_name;
		GenerateHeader("[Copy] <FONT FACE=arial SIZE=2 COLOR=red>
			The replacement Object Name cannot be NULL</FONT>");
		FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
		exit();
	}

	// Check for preexistence of replacement Object Name in SL_Object table
	$stmt =
		"SELECT Name_TX FROM SL_Object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'		AND
				Name_TX			= '$n_name'";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		$name = $n_name;
		GenerateHeader("[Copy] <FONT FACE=arial SIZE=2 COLOR=red>
			The replacement Object Name - $n_name - already exists -- the name must be unique</FONT>");
		FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
		exit();
	}

	$stmt = "Insert into SL_Object
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
		Alias_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$n_name."', '".
			$version."', '".
			$alias."', '".
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

	$stmt = "SELECT ROWID FROM SL_Object WHERE
		Category_TX		='$category'	AND
		Subject_TX		='$subject'	AND
		Class_TX		='$class'	AND
		Type_TX			='$type'	AND
		Name_TX			='$n_name'	AND
		Version_DC		='$version'	AND
		Alias_TX		='$alias'	AND
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

	if (!($row = mysql_fetch_object($result))){
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
			Insert into SL_Attr (
				SL_Object_FK,
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

// Delete Selected Entry
function ProcDeleteObject($rowid) {

	// Delete Object
	$stmt = "DELETE from SL_Object where ROWID=$rowid";
	ProcCallDatabase($result,$stmt);

	// Delete Attributes associated with Object
	$stmt = "DELETE from SL_Attr where SL_Object_FK=$rowid";
	ProcCallDatabase($result,$stmt);

	// Delete Object Parent Reletionships
	$stmt = "DELETE from SL_Rel where P_SL_Object_FK=$rowid";
	ProcCallDatabase($result,$stmt);

	// Delete Child Object Reletionships
	$stmt = "DELETE from SL_Rel where C_SL_Object_FK=$rowid";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Main Menu] The entry was deleted successfully");
	FormButtonsMainMenu();
	exit();
}

// Add Parent
function ProcAddObjectParent($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status) {

	$s_user = $_SESSION['s_user'];

	// Get parent rowid
	$stmt = "
		SELECT
			ROWID
		from SL_Object
		where
			Category_TX = '$p_category' and Subject_TX = '$p_subject'
			and Class_TX = '$p_class' and Type_TX = '$p_type'
			and Name_TX = '$p_name' and Version_DC = $p_version";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] The specified parent record does not exist.");
		exit();
	}

	$p_rowid = $row->ROWID;

	mysql_free_result($result);

	$stmt = "
		Insert into SL_Rel
			(P_SL_Object_FK,
			P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
			C_SL_Object_FK,
			C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,C_Name_TX,C_Version_DC,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$p_rowid."', '".
			$p_category."', '".
			$p_subject."', '".
			$p_class."', '".
			$p_type."', '".
			$p_name."', '".
			$p_version."', '".
			$c_rowid."', '".
			$c_category."', '".
			$c_subject."', '".
			$c_class."', '".
			$c_type."', '".
			$c_name."', '".
			$c_version."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader(
		"[Selection] Parent relationship created successfully.");
	FormDisplayObject($c_rowid);
	exit();

}

// Add Child
function ProcAddObjectChild($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status) {

	$s_user = $_SESSION['s_user'];

	// Get child rowid
	$stmt = "
		SELECT
			ROWID
		from SL_Object
		where
			Category_TX = '$c_category' and Subject_TX = '$c_subject'
			and Class_TX = '$c_class' and Type_TX = '$c_type'
			and Name_TX = '$c_name' and Version_DC = $c_version";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] The specified child record does not exist.");
		exit();
	}

	$c_rowid = $row->ROWID;

	mysql_free_result($result);

	$stmt = "
		Insert into SL_Rel
			(P_SL_Object_FK,
			P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
			C_SL_Object_FK,
			C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,C_Name_TX,C_Version_DC,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$p_rowid."', '".
			$p_category."', '".
			$p_subject."', '".
			$p_class."', '".
			$p_type."', '".
			$p_name."', '".
			$p_version."', '".
			$c_rowid."', '".
			$c_category."', '".
			$c_subject."', '".
			$c_class."', '".
			$c_type."', '".
			$c_name."', '".
			$c_version."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader(
		"[Selection] Child relationship created successfully.");
	FormDisplayObject($p_rowid);
	exit();

}

// Modify User Profile Record by User
function ProcModifyYourProfile($userid,$firstname,$lastname,$title,
	$email,$phone,$company,$dept,$url,$rels,$news) {

	// add slashes to avoid SQL errors
		$firstname	= trim(addslashes($firstname));
		$lastname	= trim(addslashes($lastname));
		$title		= trim(addslashes($title));
		$email		= trim(addslashes($email));
		$phone		= trim(addslashes($phone));
		$company	= trim(addslashes($company));
		$dept		= trim(addslashes($dept));
		$url		= trim(addslashes($url));

	// Check if first name is filled in
	if ($firstname == "") {
		ProcErrMsg("[Error] The First Name is used for greeting so it cannot be null");
		exit();
	}

	// If all checked out OK change the password
	$stmt = "
		Update SL_User set
			First_Name_TX='$firstname',Last_Name_TX='$lastname',
			Title_TX='$title',Email_Addr_TX='$email',
			Phone_TX='$phone',Company_TX='$company',Dept_TX='$dept',
			URL_TX='$url',Release_CD='$rels',Newsletter_CD='$news',
			Changed_DS=NOW(),Changer_ID='$userid'
		WHERE User_ID='$userid'";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Main Menu] The User Profile was modified successfully");
	FormButtonsMainMenu();
	exit();

}

// Modify User Password Record by User
function ProcModifyYourPassword($oldpass,$newpass,$confirmpass) {

	$s_user = $_SESSION['s_user'];

	// add slashes to avoid SQL errors
	$newpass		= trim(addslashes($newpass));
	$confirmpass	= trim(addslashes($confirmpass));

	// Check if the current password is valid -- if not reject the change

	$stmt = "SELECT Password_TX from SL_User where User_ID = '$s_user'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$password = $row->Password_TX;

	mysql_free_result($result);

	// Crypt old password
	$oldpass = md5($oldpass);

	// Error off if current password entered is invalid
	if ($password != $oldpass) {
		ProcErrMsg("[Error] The current password entered is invalid");
		exit();
	}

	// Check if new and confirm password are the same
	if ($newpass != $confirmpass) {
		ProcErrMsg("[Error] New Password and Confirmation Password must be the same");
		exit();
	}

	if ($newpass == "") {
		ProcErrMsg("[Error] The new password is invalid");
		exit();
	}

	// Crypt new password
	$newpass = md5($newpass);

	// If all checked out OK change the password
	$stmt = "
		Update SL_User set
			Password_TX='$newpass',Changed_DS=NOW(),Changer_ID='$s_user'
		WHERE User_ID='$s_user'";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Main Menu] The Password was modified successfully");
	FormButtonsMainMenu();
	exit();

}

// Add User
function ProcAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news,$created,
		$creator,$changed,$changer,$status) {

	$s_user = $_SESSION['s_user'];

	// add slashes to avoid SQL errors
		$userid		= trim(addslashes(strtolower($userid)));
		$firstname	= trim(addslashes($firstname));
		$lastname	= trim(addslashes($lastname));
		$title		= trim(addslashes($title));
		$email		= trim(addslashes($email));
		$phone		= trim(addslashes($phone));
		$company	= trim(addslashes($company));
		$dept		= trim(addslashes($dept));
		$url		= trim(addslashes($url));

	// Crypt new password
		$password = md5($password);

	$stmt = "
		Insert into SL_User
			(User_ID,User_Type_CD,Password_TX,
			First_Name_TX,Last_Name_TX,Title_TX,Email_Addr_TX,Phone_TX,
			Company_TX,Dept_TX,URL_TX,Release_CD,Newsletter_CD,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$userid."', '".
			$usertype."', '".
			$password."', '".
			$firstname."', '".
			$lastname."', '".
			$title."', '".
			$email."', '".
			$phone."', '".
			$company."', '".
			$dept."', '".
			$url."', '".
			$rels."', '".
			$news."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	// Check if the user id to be added is == read (reserved word)
	if ($userid == 'read') {
		GenerateHeader(
			"[Admin Create User] <font color=red>
			<b>Read is a reserved word and cannot be a User ID</b></font>");
		FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news);
		exit();
	}

	// Check if all the variables are entered
	if (!$userid || !$password || !$firstname ) {
		GenerateHeader(
			"[Admin Create User] <font color=red>
			<b>User ID, First Name and Password are required fields</b></font>");
		FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news);
		exit();
	}


	// Verify that the user id has not already been created
	ProcCallDatabase($result,"SELECT User_ID FROM SL_User WHERE User_ID = '$userid';");
	if (mysql_num_rows($result) > 0) {
		GenerateHeader(
			"[Admin Create User] <font color=red>
			<b>User ID already exists please pick another name.</b></font>");
		FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news);
		exit();
	}
	mysql_free_result($result);


	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Main Menu] The new user was added successfully");
	FormButtonsMainMenu();
	exit();

}

// Modify User Profile Record by Administrator
function ProcModifyUserProfile($userid,$firstname,$lastname,$title,
	$email,$phone,$company,$dept,$url,$rels,$news,$status) {

	$s_user = $_SESSION['s_user'];

	// add slashes to avoid SQL errors
		$firstname	= trim(addslashes($firstname));
		$lastname	= trim(addslashes($lastname));
		$title		= trim(addslashes($title));
		$email		= trim(addslashes($email));
		$phone		= trim(addslashes($phone));
		$company	= trim(addslashes($company));
		$dept		= trim(addslashes($dept));
		$url		= trim(addslashes($url));

	// Check if first name is filled in
	if ($firstname == "") {
		ProcErrMsg("[Error] The First Name is used for greating so it cannot be null");
		exit();
	}

	// If all checked out OK change the password
	$stmt = "
		Update SL_User set
			First_Name_TX='$firstname',Last_Name_TX='$lastname',
			Title_TX='$title',Email_Addr_TX='$email',
			Phone_TX='$phone',Company_TX='$company',Dept_TX='$dept',
			URL_TX='$url',Release_CD='$rels',Newsletter_CD='$news',
			Changed_DS=NOW(),Changer_ID='$s_user',Status_CD='$status'
		WHERE User_ID='$userid'";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Main Menu] The User Profile was modified successfully");
	FormButtonsMainMenu();
	exit();

}

// Modify User Password Record by Administrator
function ProcModifyUserPassword($newpass,$confirmpass,$userid) {

	$s_user = $_SESSION['s_user'];

	// Check if new and confirm password are the same
	if ($newpass != $confirmpass) {
		ProcErrMsg("[Error] New Password and Confirmation Password must be the same");
		exit();
	}

	if ($newpass == "") {
		ProcErrMsg("[Error] The new password is invalid");
		exit();
	}

	// Crypt new password
	$newpass = md5($newpass);

	// If all checked out OK change the password
	$stmt = "
		Update SL_User set
			Password_TX='$newpass',Changed_DS=NOW(),Changer_ID='$s_user'
		WHERE User_ID='$userid'";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Main Menu] The Password was modified successfully");
	FormButtonsMainMenu();
	exit();

}

// Modify Object Creator (Owner) (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifyObjectCreator($creator,$n_creator) {

	// Check if creator or new creator is null
	if ($creator == "" or $n_creator == "") {
		GenerateHeader("[Admin Modify Creator] <FONT FACE=arial SIZE=2 COLOR=red>
			Current Creator and New Creator fields cannot be NULL</FONT>");
		FormModifyObjectCreator();
		exit();
	}

	$stmt =
		"UPDATE SL_Object SET Creator_ID = '$n_creator'
			WHERE Creator_ID = '$creator'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET Creator_ID = '$n_creator'
			WHERE Creator_ID = '$creator'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Prop SET Creator_ID = '$n_creator'
			WHERE Creator_ID = '$creator'";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage User] The object creator was modified successfully");
	FormButtonsManageUser();
	exit();
}

// Modify Configuration
function ProcModifyConfig($colorbkg,$colormsg,$logoprim,$readonly,
	$lite,$adhocsql,$maxrows,$loginmemo,$configpath,$dbbinpath,$oraclestr,$timeout) {

	$s_user = $_SESSION['s_user'];

	// add slashes to avoid SQL errors
		$colorbkg		= trim(addslashes($colorbkg));
		$colormsg		= trim(addslashes($colormsg));
		$logoprim		= trim(addslashes($logoprim));
		$readonly		= trim(strtoupper($readonly));
		$lite			= trim(strtoupper($lite));
		$adhocsql		= trim(strtoupper($adhocsql));
		$maxrows		= intval($maxrows);
		$loginmemo		= trim(addslashes($loginmemo));
		$configpath		= trim(addslashes($configpath));
		$dbbinpath		= trim(addslashes($dbbinpath));
		$oraclestr		= trim(addslashes($oraclestr));
		$timeout		= intval($timeout);

	// Check if first name is filled in
	if (strlen($colorbkg) != 6 or strlen($colormsg) != 6 or $logoprim == "") {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b> All fields must be entered correctly - see manual</b></font>");
		FormModifyConfiguration();
		exit();
	}

	// Check if read only flag is Y or N
	if ($readonly != 'Y' and $readonly != 'N') {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>Read Only Flag must be Y or N</b></font>");
		FormModifyConfiguration();
		exit();
	}

	// Check if glosssary flag is Y or N
	if ($lite != 'Y' and $lite != 'N') {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>SL Lite Flag must be Y or N</b></font>");
		FormModifyConfiguration();
		exit();
	}

	// Check if Ad Hoc SQL flag is Y or N
	if ($adhocsql != 'Y' and $adhocsql != 'N') {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>Ad Hoc SQL Flag must be Y or N</b></font>");
		FormModifyConfiguration();
		exit();
	}

	// Check if max rows is in range
	if ($maxrows < 10 or $maxrows > 10000) {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>Max Rows Returned must be an integer between 10 and 10000</b></font>");
		FormModifyConfiguration();
		exit();
	}

	// If all checked out OK change the configuration values
	$stmt = "
		Update SL_Config set
			Color_Bkg_HX ='$colorbkg',
			Color_Msg_HX ='$colormsg',
			Logo_Primary_TX ='$logoprim',
			Read_Only_FL ='$readonly',
			Max_Rows_IN ='$maxrows',
			Attr_01_TX ='$loginmemo',
			Attr_02_TX ='$adhocsql',
			Attr_03_TX ='$configpath',
			Attr_04_TX ='$lite',
			Attr_05_TX ='$dbbinpath',
			Attr_06_TX ='$oraclestr',
			Attr_07_TX ='$timeout',
			Changed_DS=NOW(),Changer_ID='$s_user'
		WHERE Config_ID='Default'";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Administration] New configuration settings will show up on the next page display");
	FormButtonsAdmin();
	exit();

}

// Delete Relationship
function ProcDeleteRelationship($p_rowid,$c_rowid,$rowid) {

	$stmt =
		"DELETE from SL_Rel
		where P_SL_Object_FK = $p_rowid
		and C_SL_Object_FK = $c_rowid";

	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader(
		"[Selection] Relationship deleted successfully.");
	FormDisplayObject($rowid);
	exit();

}

// Select Category
function ProcSelectCategory() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Category_ID, Category_TX
		FROM SL_Category ORDER BY Category_TX";

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Category] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><center><B>MODIFY</B></center></TD>
				<TD><center><B>DELETE</B></center></TD>
				<TD><B>Business Segment</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=K-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=X-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					</TR>\n",
				$row->Category_ID,$row->Category_ID,$row->Category_TX);
			}

		printf("</TABLE>\n");

	echo "
	<p><hr size=1 width=600 noshade align=left>
	<p>
	<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
		style=\"color:black; width:120px;\">
	</FORM>";

	mysql_free_result($result);

}

// Select Subject
function ProcSelectSubject() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Subject_ID, Category_TX, Subject_TX
		FROM SL_Subject ORDER BY Category_TX, Subject_TX";

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Subject] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><center><B>MODIFY</B></center></TD>
				<TD><center><B>DELETE</B></center></TD>
				<TD><B>Business Segment</B></TD>
				<TD><B>System</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=I-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=J-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					<TD>%s</TD>
					</TR>\n",
				$row->Subject_ID,$row->Subject_ID,$row->Category_TX,
				$row->Subject_TX);
			}

		printf("</TABLE>\n");

	echo "
	<p><hr size=1 width=600 noshade align=left>
	<p>
	<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
		style=\"color:black; width:120px;\">
	</FORM>";

	mysql_free_result($result);

}

// Select Class
function ProcSelectClass() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Class_ID, Category_TX, Subject_TX, Class_TX
		FROM SL_Class ORDER BY Category_TX, Subject_TX, Class_TX";

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Class] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><center><B>MODIFY</B></center></TD>
				<TD><center><B>DELETE</B></center></TD>
				<TD><B>Business Segment</B></TD>
				<TD><B>System</B></TD>
				<TD><B>Type</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=G-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=H-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					</TR>\n",
				$row->Class_ID,$row->Class_ID,$row->Category_TX,
				$row->Subject_TX,$row->Class_TX);
			}

		printf("</TABLE>\n");

	echo "
	<p><hr size=1 width=600 noshade align=left>
	<p>
	<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
		style=\"color:black; width:120px;\">
	</FORM>";

	mysql_free_result($result);

}

// Select Type
function ProcSelectType() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Type_ID, Category_TX, Subject_TX, Class_TX, Type_TX
		FROM SL_Type ORDER BY Category_TX, Subject_TX, Class_TX, Type_TX";

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Type] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><center><B>MODIFY</B></center></TD>
				<TD><center><B>DELETE</B></center></TD>
				<TD><B>Business Segment</B></TD>
				<TD><B>System</B></TD>
				<TD><B>Type</B></TD>
				<TD><B>Category</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=E-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=F-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					</TR>\n",
				$row->Type_ID,$row->Type_ID,$row->Category_TX,
				$row->Subject_TX,$row->Class_TX,$row->Type_TX);
			}

		printf("</TABLE>\n");

	echo "
	<p><hr size=1 width=600 noshade align=left>
	<p>
	<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
		style=\"color:black; width:120px;\">
	</FORM>";

	mysql_free_result($result);

}

// Select Schema
function ProcSelectAssociation() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT ROWID, P_Category_TX, P_Subject_TX, P_Class_TX,
		C_Category_TX, C_Subject_TX, C_Class_TX
		FROM SL_Assoc ORDER BY P_Category_TX, P_Subject_TX, P_Class_TX";

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Association] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><center><B>DELETE</B></center></TD>
				<TD><B>P_Business_Segment</B></TD>
				<TD><B>P_System</B></TD>
				<TD><B>P_Type</B></TD>
				<TD><B>C_Business_Segment</B></TD>
				<TD><B>C_System</B></TD>
				<TD><B>C_Type</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=D-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					</TR>\n",
				$row->ROWID,$row->P_Category_TX,$row->P_Subject_TX,$row->P_Class_TX,
				$row->C_Category_TX,$row->C_Subject_TX,$row->C_Class_TX);
			}

		printf("</TABLE>\n");

	echo "
	<p><hr size=1 width=600 noshade align=left>
	<p>
	<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
		style=\"color:black; width:120px;\">
	</FORM>";

	mysql_free_result($result);

}

// Select Property
function ProcSelectProperty() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT ROWID, Category_TX, Subject_TX, Class_TX, Property_TX, Default_TX
		FROM SL_Prop ORDER BY Category_TX, Subject_TX, Class_TX, Property_TX";

	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Property] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>";
		printf("<TABLE BORDER WIDTH=\"100%%\" BGCOLOR=$g_colorbkg NOSAVE>\n");

			printf("<TR>
				<TD><center><B>MODIFY</B></center></TD>
				<TD><center><B>DELETE</B></center></TD>
				<TD><B>Business Segment</B></TD>
				<TD><B>System</B></TD>
				<TD><B>Type</B></TD>
				<TD><B>Property</B></TD>
				<TD><B>Default</B></TD>
				</TR>\n");

			while (($row = mysql_fetch_object($result))){

				printf("<TR>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=A-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD><center><INPUT TYPE=SUBMIT NAME=auggie
						VALUE=B-%s style=\"background-color:#C0C0C0; color:#C0C0C0; width:50px;
						font-size:9px; font-family:Arial;\"
						</center></TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					<TD>%s</TD>
					</TR>\n",
				$row->ROWID,$row->ROWID,$row->Category_TX,$row->Subject_TX,
				$row->Class_TX,$row->Property_TX,$row->Default_TX);
			}

		printf("</TABLE>\n");

	echo "
	<p><hr size=1 width=600 noshade align=left>
	<p>
	<INPUT TYPE=submit NAME=auggie VALUE=\"Manage Schema\"
		style=\"color:black; width:120px;\">
	</FORM>";

	mysql_free_result($result);

}

// Add Property
function ProcAddProperty($category,$subject,$class,$property,$default,
		$created,$creator,$changed,$changer,$status) {

	// Check if all the variables are entered
	$property = trim(addslashes($property));
	$default = trim(addslashes($default));
	if (!$category || !$subject || !$class || !$property) {
		GenerateHeader(
			"[Add Property] &nbsp;<font color=red size=4>
			<b>&#9830</font> fields are required.</b>");
		FormAddProperty($category,$subject,$class,$property,$default,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Property in SL_Prop table
	$stmt =
		"SELECT ROWID FROM SL_Prop
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject' and
				Class_TX		= '$class' and
				Property_TX		= '$property';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add Property] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Property Name - $property - already exists -- the name must be unique</FONT>");
		FormAddProperty($category,$subject,$class,$property,$default,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	$datatype	= "n/a";
	$length		= 0;
	$rule		= "n/a";

	$stmt = "Insert into SL_Prop
		(Category_TX,Subject_TX,Class_TX,Property_TX,
		Datatype_CD,Length_IN,Default_TX,Rule_TX,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$property."', '".
			$datatype."', '".
			$length."', '".
			$default."', '".
			$rule."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	// Add a new SL_Attr record for each existing SL_Object
	// that matches the criteria of the new SL_Prop record

	$stmt = "INSERT INTO SL_Attr (
			SL_Object_FK,
			Category_TX,
			Subject_TX,
			Class_TX,
			Type_TX,
			Name_TX,
			Version_DC,
			Property_TX,
			Value_TX
		)
			SELECT
				ROWID,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				'".$property."',
				'".$default."'
			FROM
				SL_Object
			WHERE
				Category_TX = '".$category."'
				AND
				Subject_TX = '".$subject."'
				AND
				Class_TX = '".$class."'";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Manage Schema] The Schema Extended Property was added successfully.");
	FormButtonsManageSchema();
	exit();
}

// Add Category
function ProcAddCategory($category,
		$created,$creator,$changed,$changer,$status) {

	// Check if all the variables are entered
	$category = trim(addslashes($category));
	if (!$category) {
		GenerateHeader(
			"[Add Category] <font color=red>
			<b>All fields are required.</b></font>");
		FormAddCategory($category,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Category in SL_Category table
	$stmt =
		"SELECT Category_TX FROM SL_Category
			WHERE
				Category_TX		= '$category';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add Category] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Category Name - $category - already exists -- the name must be unique</FONT>");
		FormAddCategory($category,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	$stmt = "Insert into SL_Category
		(Category_TX,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Manage Schema] The Schema Category was added successfully.");
	FormButtonsManageSchema();
	exit();
}

// Add Subject
function ProcAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status) {

	// Check if all the variables are entered
	$category = trim(addslashes($category));
	$subject = trim(addslashes($subject));
	if (!$category || !$subject) {
		GenerateHeader(
			"[Add Subject] <font color=red>
			<b>All fields are required.</b></font>");
		FormAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Subject in SL_Subject table
	$stmt =
		"SELECT Subject_TX FROM SL_Subject
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add Subject] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Subject Name - $subject - already exists -- the name must be unique</FONT>");
		FormAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// lookup Category_ID from SL_Category
	$stmt = "SELECT Category_ID
		FROM SL_Category WHERE Category_TX='$category'";
	ProcCallDatabase($result,$stmt);
	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}
	$categoryid	= $row->Category_ID;
	mysql_free_result($result);

	$stmt = "Insert into SL_Subject
		(Category_ID,Category_TX,Subject_TX,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$categoryid."', '".
			$category."', '".
			$subject."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Manage Schema] The Schema Subject was added successfully");
	FormButtonsManageSchema();
	exit();
}

// Add Class
function ProcAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status) {

	// Check if all the variables are entered
	$category = trim(addslashes($category));
	$subject = trim(addslashes($subject));
	$class = trim(addslashes($class));
	if (!$category || !$subject || !$class) {
		GenerateHeader(
			"[Add Class] <font color=red>
			<b>All fields are required.</b></font>");
		FormAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Class in SL_Class table
	$stmt =
		"SELECT Class_TX FROM SL_Class
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject' and
				Class_TX		= '$class';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add Class] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Class Name - $class - already exists -- the name must be unique</FONT>");
		FormAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// lookup Category_ID, Subject_ID from SL_Subject
	$stmt = "SELECT Category_ID,Subject_ID
		FROM SL_Subject
		WHERE Category_TX='$category' and Subject_TX='$subject'";
	ProcCallDatabase($result,$stmt);
	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}
	$categoryid	= $row->Category_ID;
	$subjectid	= $row->Subject_ID;
	mysql_free_result($result);

	$stmt = "Insert into SL_Class
		(Category_ID,Category_TX,Subject_ID,Subject_TX,Class_TX,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$categoryid."', '".
			$category."', '".
			$subjectid."', '".
			$subject."', '".
			$class."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Manage Schema] The Schema Class was added successfully");
	FormButtonsManageSchema();
	exit();
}

// Add Type
function ProcAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status) {

	// Check if all the variables are entered
	$category = trim(addslashes($category));
	$subject = trim(addslashes($subject));
	$class = trim(addslashes($class));
	$type = trim(addslashes($type));
	if (!$category || !$subject || !$class || !$type) {
		GenerateHeader(
			"[Add Type] <font color=red>
			<b>All fields are required.</b></font>");
		FormAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Type in SL_Type table
	$stmt =
		"SELECT Type_TX FROM SL_Type
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject' and
				Class_TX		= '$class' and
				Type_TX		= '$type';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add Type] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Type Name - $type - already exists -- the name must be unique</FONT>");
		FormAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// lookup Category_ID, Subject_ID, Class_ID from SL_Class
	$stmt = "SELECT Category_ID,Subject_ID,Class_ID
		FROM SL_Class
		WHERE Category_TX='$category' and Subject_TX='$subject' and Class_TX='$class'";
	ProcCallDatabase($result,$stmt);
	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}
	$categoryid	= $row->Category_ID;
	$subjectid	= $row->Subject_ID;
	$classid	= $row->Class_ID;
	mysql_free_result($result);

	// Set defaults (currently unused fields)
	$categorydc		= 0;
	$subjectdc		= 0;
	$classdc		= 0;
	$typedc			= 0;
	$unique			= "N";

	$stmt = "Insert into SL_Type
		(Category_ID,Category_TX,Category_DC,Subject_ID,Subject_TX,Subject_DC,
		Class_ID,Class_TX,Class_DC,Type_TX,Type_DC,Unique_FL,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$categoryid."', '".
			$category."', '".
			$categorydc."', '".
			$subjectid."', '".
			$subject."', '".
			$subjectdc."', '".
			$classid."', '".
			$class."', '".
			$classdc."', '".
			$type."', '".
			$typedc."', '".
			$unique."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Manage Schema] The Schema Type was added successfully");
	FormButtonsManageSchema();
	exit();
}

// Add Association
function ProcAddAssociation($category,$subject,$p_class,$c_class,
		$created,$creator,$changed,$changer,$status) {

	// Check if all the variables are entered
	if (!$category || !$subject || !$p_class || !$c_class) {
		GenerateHeader(
			"[Add Association] <font color=red>
			<b>All fields are required.</b></font>");
		FormAddAssociation($category,$subject,$p_class,$c_class,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Association in SL_Assoc table
	$stmt =
		"SELECT ROWID FROM SL_Assoc
			WHERE
				P_Category_TX	= '$category' and
				P_Subject_TX	= '$subject' and
				P_Class_TX		= '$p_class' and
				C_Class_TX		= '$c_class';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Add Association] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Association already exists -- the association must be unique</FONT>");
		FormAddAssociation($category,$subject,$p_class,$c_class,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	$rule		= "n/a";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	$stmt = "Insert into SL_Assoc
		(P_Category_TX,P_Subject_TX,P_Class_TX,
		C_Category_TX,C_Subject_TX,C_Class_TX,Assoc_Rule_TX,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$p_class."', '".
			$category."', '".
			$subject."', '".
			$c_class."', '".
			$rule."', '".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."', '".
			$status."')";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Manage Schema] The Schema Association was added successfully");
	FormButtonsManageSchema();
	exit();
}

// Version Object
function ProcVersionObject($origrowid,$category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status) {

	$version	= $version + 1;
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];

	$stmt = "Insert into SL_Object
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
		Alias_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$name."', '".
			$version."', '".
			$alias."', '".
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

	$stmt = "SELECT ROWID FROM SL_Object WHERE
		Category_TX		='$category'	AND
		Subject_TX		='$subject'	AND
		Class_TX		='$class'	AND
		Type_TX			='$type'	AND
		Name_TX			='$name'	AND
		Version_DC		='$version'	AND
		Alias_TX		='$alias'	AND
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

	if (!($row = mysql_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$rowid		= $row->ROWID;

	// Version extended properties
	// NOTE: The next SQL statement requires MySQL version 4.0.14 or greater
	// for insert and select from the same table

	$stmt = "
		Insert into SL_Attr (
			SL_Object_FK,
			Category_TX,
			Subject_TX,
			Class_TX,
			Type_TX,
			Name_TX,
			Version_DC,
			Property_TX,
			Value_TX)
			Select
				$rowid,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				$version,
				Property_TX,
				Value_TX
			From
				SL_Attr
			Where
				SL_Object_FK = $origrowid";

	ProcCallDatabase($result,$stmt);

	// Version Parent Relationships

	$stmt = "
		Insert into SL_Rel (
			P_SL_Object_FK,
			P_Category_TX,
			P_Subject_TX,
			P_Class_TX,
			P_Type_TX,
			P_Name_TX,
			P_Version_DC,
			C_SL_Object_FK,
			C_Category_TX,
			C_Subject_TX,
			C_Class_TX,
			C_Type_TX,
			C_Name_TX,
			C_Version_DC,
			Creator_ID,
			Created_DS,
			Changer_ID,
			Changed_DS,
			Status_CD)
			Select
				$rowid,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				$version,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD
			From
				SL_Rel
			Where
				P_SL_Object_FK = $origrowid";

	ProcCallDatabase($result,$stmt);

	// Version Child Relationships

	$stmt = "
		Insert into SL_Rel (
			P_SL_Object_FK,
			P_Category_TX,
			P_Subject_TX,
			P_Class_TX,
			P_Type_TX,
			P_Name_TX,
			P_Version_DC,
			C_SL_Object_FK,
			C_Category_TX,
			C_Subject_TX,
			C_Class_TX,
			C_Type_TX,
			C_Name_TX,
			C_Version_DC,
			Creator_ID,
			Created_DS,
			Changer_ID,
			Changed_DS,
			Status_CD)
			Select
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				$rowid,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				$version,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD
			From
				SL_Rel
			Where
				C_SL_Object_FK = $origrowid";

	ProcCallDatabase($result,$stmt);

	// Set Original Object to status Inactive so it cannot be changed or versioned again

	$stmt = "
		UPDATE SL_Object
			SET Status_CD = 'Versioned'
			WHERE ROWID = $origrowid";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Modify] The object, its properties and relationships were versioned successfully");
	FormModifyObject($rowid);
	exit();

}

// Manage Schema
// Delete Schema Category (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaCategory($category) {

	$stmt =
		"DELETE FROM SL_Category
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Subject
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Class
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Assoc
		WHERE P_Category_TX = '$category' OR C_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Attr
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Type
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Rel
		WHERE P_Category_TX = '$category' OR C_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Prop
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Object
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Category was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Modify Schema Category (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifySchemaCategory($category,$n_category,$save_rowid) {

	// Set postauggie value for return trip if error is detected
	$postauggie = $save_rowid;

	// Check if replacement Category value is null
	if ($n_category == "") {
		GenerateHeader("[Modify Schema Category] <FONT FACE=arial SIZE=2 COLOR=red>
			The Category replacement value cannot be NULL</FONT>");
		FormModifySchemaCategory($postauggie);
		exit();
	}

	// Check for preexistence of replacement Category value in SL_Category table
	if (strtoupper($category) != strtoupper($n_category)) {
		$stmt =
			"SELECT Category_TX FROM SL_Category
				WHERE Category_TX = '$n_category';";
		ProcCallDatabase($result,$stmt);
		if (mysql_num_rows($result) > 0) {
			mysql_free_result($result);
			GenerateHeader("[Modify Schema Category] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_category - already exists as a Category</FONT>");
			FormModifySchemaCategory($postauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE SL_Category SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Subject SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Class SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Assoc SET P_Category_TX = '$n_category', C_Category_TX = '$n_category'
			WHERE P_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Attr SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Type SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET P_Category_TX = '$n_category', C_Category_TX = '$n_category'
			WHERE P_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Prop SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Object SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage Schema] The Schema Category was modified successfully");
	FormButtonsManageSchema();
	exit();
}

// Delete Schema Subject (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaSubject($category,$subject) {
	$stmt =
		"DELETE FROM SL_Subject
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Class
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Type
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Assoc
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject')
				OR (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Prop
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Rel
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject')
				OR (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject')";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Subject was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Modify Schema Subject (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifySchemaSubject($category,$subject,$n_subject,$save_rowid) {

	// Set postauggie value for return trip if error is detected
	$postauggie = $save_rowid;

	// Check if replacement Category value is null
	if ($n_subject == "") {
		GenerateHeader("[Modify Schema Subject] <FONT FACE=arial SIZE=2 COLOR=red>
			The Subject replacement value cannot be NULL</FONT>");
		FormModifySchemaSubject($postauggie);
		exit();
	}

	// Check for preexistence of replacement Subject value in SL_Subject table
	if (strtoupper($subject) != strtoupper($n_subject)) {
		$stmt =
			"SELECT Subject_TX FROM SL_Subject
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$n_subject'";
		ProcCallDatabase($result,$stmt);
		if (mysql_num_rows($result) > 0) {
			mysql_free_result($result);
			GenerateHeader("[Modify Schema Subject] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_subject - already exists as a Subject</FONT>");
			FormModifySchemaSubject($postauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE SL_Subject SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Class SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Type SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Assoc SET P_Subject_TX = '$n_subject', C_Subject_TX = '$n_subject'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Prop SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Object SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Attr SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET P_Subject_TX = '$n_subject', C_Subject_TX = '$n_subject'
			WHERE
				P_Category_TX		= '$category'	AND
				P_Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage Schema] The Schema System was modified successfully");
	FormButtonsManageSchema();
	exit();
}

// Delete Schema Class (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaClass($category,$subject,$class) {
	$stmt =
		"DELETE FROM SL_Class
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Type
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Assoc
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class')
				OR (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Prop
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Rel
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class')
				OR (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Class was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Modify Schema Class (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifySchemaClass($category,$subject,$class,$n_class,$save_rowid) {

	// Set postauggie value for return trip if error is detected
	$postauggie = $save_rowid;

	// Check if replacement Category value is null
	if ($n_class == "") {
		GenerateHeader("[Modify Schema Class] <FONT FACE=arial SIZE=2 COLOR=red>
			The Class replacement value cannot be NULL</FONT>");
		FormModifySchemaClass($postauggie);
		exit();
	}

	// Check for preexistence of replacement Class value in SL_Class table
	if (strtoupper($class) != strtoupper($n_class)) {
		$stmt =
			"SELECT Class_TX FROM SL_Class
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$n_class'";
		ProcCallDatabase($result,$stmt);
		if (mysql_num_rows($result) > 0) {
			mysql_free_result($result);
			GenerateHeader("[Modify Schema Class] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_class - already exists as a Class</FONT>");
			FormModifySchemaClass($postauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE SL_Class SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Type SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Assoc SET P_Class_TX = '$n_class'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Assoc SET C_Class_TX = '$n_class'
			WHERE (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Prop SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Object SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Attr SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET P_Class_TX = '$n_class'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET C_Class_TX = '$n_class'
			WHERE (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage Schema] The Schema Class was modified successfully");
	FormButtonsManageSchema();
	exit();
}

// Delete Schema Type (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaType($category,$subject,$class,$type) {
	$stmt =
		"DELETE FROM SL_Type
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Rel
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class'		AND
				P_Type_TX		= '$type')
				OR (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class'		AND
				C_Type_TX		= '$type')";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Type was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Modify Schema Type (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifySchemaType($category,$subject,$type,$class,$n_type,$save_rowid) {

	// Set postauggie value for return trip if error is detected
	$postauggie = $save_rowid;

	// Check if replacement Type value is null
	if ($n_type == "") {
		GenerateHeader("[Modify Schema Type] <FONT FACE=arial SIZE=2 COLOR=red>
			The Type replacement value cannot be NULL</FONT>");
		FormModifySchemaType($postauggie);
		exit();
	}

	// Check for preexistence of replacement Type value in SL_Type table
	if (strtoupper($type) != strtoupper($n_type)) {
		$stmt =
			"SELECT Type_TX FROM SL_Type
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$class'		AND
					Type_TX			= '$n_type'";
		ProcCallDatabase($result,$stmt);
		if (mysql_num_rows($result) > 0) {
			mysql_free_result($result);
			GenerateHeader("[Modify Schema Type] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_type - already exists as a Type</FONT>");
			FormModifySchemaType($postauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE SL_Type SET Type_TX = '$n_type'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Object SET Type_TX = '$n_type'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Attr SET Type_TX = '$n_type'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET P_Type_TX = '$n_type'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class'		AND
				P_Type_TX		= '$type')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Rel SET C_Type_TX = '$n_type'
			WHERE (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class'		AND
				C_Type_TX		= '$type')";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage Schema] The Schema Type was modified successfully");
	FormButtonsManageSchema();
	exit();
}

// Delete Schema Association (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaAssoc($p_category,$p_subject,$p_class,$c_class) {
	$stmt =
		"DELETE FROM SL_Assoc
			WHERE
				P_Category_TX	= '$p_category'	AND
				P_Subject_TX	= '$p_subject'	AND
				P_Class_TX		= '$p_class'	AND
				C_Class_TX		= '$c_class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Rel
			WHERE
				P_Category_TX	= '$p_category'	AND
				P_Subject_TX	= '$p_subject'	AND
				P_Class_TX		= '$p_class'	AND
				C_Class_TX		= '$c_class'";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Association was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Delete Schema Property (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaProp($category,$subject,$class,$property) {
	$stmt =
		"DELETE FROM SL_Prop
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Property_TX		= '$property'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM SL_Attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Property_TX		= '$property'";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Extended Property was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Modify Schema Property (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifySchemaProp(
	$category,$subject,$class,$property,$n_property,$default,$n_default,$save_rowid) {

	// Set postauggie value for return trip if error is detected
	$postauggie = $save_rowid;

	// Check if replacement Property value is null
	if ($n_property == "") {
		GenerateHeader("[Modify Schema Property] <FONT FACE=arial SIZE=2 COLOR=red>
			The Property replacement value cannot be NULL</FONT>");
		FormModifySchemaProp($postauggie);
		exit();
	}

	// Check for preexistence of replacement Property value in SL_Property table
	if (strtoupper($property) != strtoupper($n_property)) {
		$stmt =
			"SELECT Property_TX FROM SL_Prop
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$class'		AND
					Property_TX		= '$n_property'";
		ProcCallDatabase($result,$stmt);
		if (mysql_num_rows($result) > 0) {
			mysql_free_result($result);
			GenerateHeader("[Modify Schema Property] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_property - already exists as a Property</FONT>");
			FormModifySchemaProp($postauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE SL_Prop SET Property_TX = '$n_property', Default_TX = '$n_default'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Property_TX		= '$property'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE SL_Attr SET Property_TX = '$n_property'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Property_TX		= '$property'";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage Schema] The Schema Property was modified successfully");
	FormButtonsManageSchema();
	exit();
}

// *************************************************************************************************
// SECTION: Utility Functions
// *************************************************************************************************

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

// Log an event to the database
function ProcLogEvent($userid,$eventcode,$eventtext){
	global $g_host, $g_user, $g_pass, $g_database;

	// Set values to be logged
		$v01 = $userid;
		$v02 = $eventcode;
		$v03 = $_SERVER['REMOTE_ADDR'];
		$v04 = $_SERVER['HTTP_USER_AGENT'];
		$v05 = $eventtext;
		$v06 = date("Y-m-d H:i:s");

	// Create log insert statement
	$stmt = "
		Insert into SL_Event (
			User_ID,
			Event_CD,
			Remote_IP_Addr_TX,
			Remote_Agent,
			Event_TX,
			Created_DS)
		values ('".
			$v01."', '".
			$v02."', '".
			$v03."', '".
			$v04."', '".
			$v05."', '".
			$v06."')";

	ProcCallDatabase($result,$stmt);
}

// Display any classifications that is in the SL_Object table
// This proc is used to displayed any part of the taxonomy for the search function
// If data exists in the object table that is not defined in the type table may be
// a logical error but it still needs to be able to be selected. The taxonomy contains
// all values that can be entered -- there still can be information in the database
// that was entered for a different reason, e.g. SuperLuminate metadata

function ProcSearchDropDown(){

	echo "
	<table class=normal width=620 border=0>
		<tr>";

			$stmt = "SELECT DISTINCT Category_TX FROM SL_Object order by Category_TX";
			$result= mysql_query($stmt);
		echo "<td><select name=category
			style=\"color:black; font-family:Times; font-weight:bold;
			font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}
		echo "</select></td>";

			$stmt = "SELECT DISTINCT Subject_TX FROM SL_Object order by Subject_TX";
			$result= mysql_query($stmt);
		echo "<td><select name=subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}
		echo "</select></td>";

			$stmt = "SELECT DISTINCT Class_TX FROM SL_Object order by Class_TX";
			$result= mysql_query($stmt);
		echo "<td><select name=class
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}
		echo "</select></td>";

			$stmt = "SELECT DISTINCT Type_TX FROM SL_Object order by Type_TX";
			$result= mysql_query($stmt);
		echo "<td><select name=type
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
			{
				$myrow = mysql_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysql_free_result($result);

		echo "
			</select></td>
		</tr>
	</table>";
}

// Execute Ad Hoc Query
function ProcAdHocQuery($query) {
	global $g_main;

	// Check that the query is not null
	if ($query == "") {
		GenerateHeader(
			"[Reporting] <font color=red>
			<b>The Query field must contain a valid SQL statement</b></font>");
		FormButtonsReporting();
		exit();
	}

	$s_user = $_SESSION['s_user'];

	// Check for invalid entry
	$stmt = trim($query);
	if ($stmt != "" and strtolower(substr($stmt,0,6))
		!= "select" and $_SESSION['s_user'] != "admin") {
		GenerateHeader(
			"[Reporting] Your access level only allows you to enter a select command.");
		echo "
		<HR><BR>
		<FORM METHOD=POST ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Reporting\"
				style=\"color:black; width:200px;\">
		</FORM>";
		exit();
	}

	$stmt = stripSlashes($stmt);

	$returnloc = "Reporting";

	ProcCallDatabase($result,"Reporting.".$stmt);

	GenerateHeader("[Query Result] Select [Reporting] to query again.");

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Reporting\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>
	Results of query:<P><B>$stmt</B>
	<p>
	<hr size=1 width=620 noshade align=left>";

	if ($result == 0):
		echo "
		<B>Error " . mysql_errno() . ": " . mysql_error() . "</B>";
	elseif (mysql_num_rows($result) == 0):
		echo "
		<B>Query executed successfully!</B>";
	else:
	?>

	<TABLE BORDER=1>
		<THEAD>
			<TR>
				<?php
					for ($i = 0; $i < mysql_num_fields($result); $i++) {
						echo"<TH>" . mysql_field_name($result,$i) . "</TH>";
					}
				?>
			</TR>
		</THEAD>
		<TBODY>
			<?php
				// Convert null to chr(160) a non space unprintable character
				// If the field is null the table cell will no show a box border
				// If the null is converted to a space chr(20) it is trimed
				// so the field is null again and does not display a cell border
				for ($i = 0; $i < mysql_num_rows($result); $i++) {
					echo"<TR>";
						$rowarray = mysql_fetch_row($result);
						for ($j = 0; $j < mysql_num_fields($result); $j++) {
							$display = $rowarray[$j];
							if ($display == ""){$display = chr(160);}
							echo"<TD>" . $display . "</TD>";
						}
					echo"</TR>";
				}
			?>
		</TBODY>
	</TABLE>

	<?php
	mysql_free_result($result);
	endif
	?>

	<?php
	echo "
	<hr size=1 width=620 noshade align=left>
	<br>
	<FORM METHOD=POST ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Reporting\"
				style=\"color:black; width:180px;\">
	</FORM>";

}

// Display PHP / MySQL setup information
function ProcSystemSettings() {
	global $g_main;

	echo "<hr size=1 width=620 noshade align=left>";
	PHPinfo();
	echo "
		<hr size=1 width=620 noshade align=left>
		<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Management Reporting\"
			style=\"color:black; width:200px;\">
		</FORM>";

}

// Call Localhost MySQL Database
function ProcCallDatabase(&$result,$stmt) {
	global $g_host, $g_user, $g_pass, $g_database, $g_main;

	$returnloc = substr($stmt,0,9);
	if ($returnloc != "Reporting") {$returnloc = "Main Menu";}
	if ($returnloc == "Reporting") {$stmt = substr($stmt,10);}

	// Connect to the Database
	if (!($link=mysql_connect($g_host, $g_user, $g_pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $g_host, by user: $g_user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"$returnloc\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Select the Database
	if (!mysql_select_db($g_database, $link)) {
		$errno = mysql_errno($link);
		$error = mysql_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in selecting database: $g_database
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"$returnloc\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement
	if (!($result= mysql_query($stmt, $link))) {
		$errno = mysql_errno($link);
		$error = mysql_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in executing statement: $stmt
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"$returnloc\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

}

// Call External MySQL Database
function ProcCallDatabaseMySQL(&$result,$stmt,$hostport,$user,$pass,$schema) {
	global $g_main;

	// Connect to the Database
	if (!($link=mysql_connect($hostport, $user, $pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $host, by user: $user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Select the Database
	if (!mysql_select_db($schema, $link)) {
		$errno = mysql_errno($link);
		$error = mysql_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in selecting database: $schema
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement
	if (!($result= mysql_query($stmt, $link))) {
		$errno = mysql_errno($link);
		$error = mysql_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in executing statement: $stmt
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

}

// Call External Oracle Database
function ProcCallDatabaseOracle(&$stid,$stmt,$host,$sid,$port,$user,$pass) {
	global $g_main,$g_oraclestr;

	// Check if Oracle String is null -- upgrade users may not have configured
	if ($g_oraclestr == "") {
		$g_oraclestr = "(DESCRIPTION= (ADDRESS= (PROTOCOL= TCP) (HOST= $host) (PORT= $port)) (CONNECT_DATA= (SID= $sid)))";
	}

	// Connect to the Database
	$conn = oci_connect($user, $pass, $g_oraclestr);
	if (!$conn) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $host, by user: $user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Prepare the statement
	$stid = oci_parse($conn, $stmt);
	if (!$stid) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error parsing SQL for host: $host, by user: $user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement
	$r = oci_execute($stid);
	if (!$r) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error executing SQL for host: $host, by user: $user
			<P> $stmt
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}
}







//***** WIP
// Call External SQL Server Database
function ProcCallDatabaseSQLServer(&$result,$stmt,$hostport,$user,$pass,$schema) {
	global $g_main;

	// Connect to the Database
	if (!($link=mysql_connect($hostport, $user, $pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $host, by user: $user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Select the Database
	if (!mysql_select_db($schema, $link)) {
		$errno = mysql_errno($link);
		$error = mysql_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in selecting database: $schema
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement
	if (!($result= mysql_query($stmt, $link))) {
		$errno = mysql_errno($link);
		$error = mysql_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in executing statement: $stmt
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=post>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

}









function ProcSelectBox($selection){
	?>
	<td align=left>
		<select name="<?php echo $selection ?>"
			style="color:black; font-family:Times; font-weight:bold;
			font-size:12px; width:150px; background-color:white">
			<option></option><option></option><option></option>
			<option>--------- Not Yet Loaded ---------</option>
		</select>&nbsp;
	</td>
	<?php
}

// Load Database with SuperLuminate Self-defining Metadata From Load File
function ProcLoadMetadata() {
	global $g_configpath, $g_main;

	// load metadata into SL_Object table
	$filename = $g_configpath."metadata_sl_object_load.csv";

	// Skip first record (header record)in load file
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE SL_Object
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	// Add housekeeping attributes to inserted records
	$source		= "Adapter";
	$group		= "General";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	$stmt = "
		UPDATE SL_Object SET
			Source_ID		='$source',
			Group_CD		='$group',
			Created_DS		='$created',
			Creator_ID		='$creator',
			Changed_DS		='$changed',
			Changer_ID		='$changer',
			Status_CD		='$status'
		WHERE Created_DS IS NULL";

	ProcCallDatabase($result,$stmt);

	// load metadata into SL_Rel table
	$filename = $g_configpath."metadata_sl_rel_load.csv";

	// Skip first record (header record)in load file
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE SL_Rel
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES
			(P_SL_Object_FK,P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
				C_SL_Object_FK,C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,C_Name_TX,C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	// Add housekeeping attributes to inserted records
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	$stmt = "
		UPDATE SL_Rel SET
			Created_DS		='$created',
			Creator_ID		='$creator',
			Changed_DS		='$changed',
			Changer_ID		='$changer',
			Status_CD		='$status'
		WHERE Created_DS IS NULL";

	ProcCallDatabase($result,$stmt);

	// load metadata into SL_Attr table
	$filename = $g_configpath."metadata_sl_attr_load.csv";

	// Skip first record (header record)in load file
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE SL_Attr
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES
			(SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,
				Name_TX,Version_DC,Property_TX,Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	// Update SL_Rel table with parent SL_Object keys
	// Update Relationship parent key
	// Update SL_Rel.P_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.P_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.P_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.P_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.P_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.P_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.P_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.P_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.P_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	// Update SL_Rel table with child SL_Object keys
	// Update Relationship child key
	// Update SL_Rel.C_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.C_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.C_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.C_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.C_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.C_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.C_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.C_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.C_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	// Update SL_Attr table with SL_Object keys
	// Update Attribute key
	// Update SL_Attr.SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Attr,SL_Object
		SET SL_Attr.SL_Object_FK	= SL_Object.ROWID
		WHERE
			SL_Attr.Category_TX		= SL_Object.Category_TX		AND
			SL_Attr.Subject_TX		= SL_Object.Subject_TX		AND
			SL_Attr.Class_TX		= SL_Object.Class_TX		AND
			SL_Attr.Type_TX			= SL_Object.Type_TX			AND
			SL_Attr.Name_TX			= SL_Object.Name_TX			AND
			SL_Attr.Version_DC		= SL_Object.Version_DC		AND
			SL_Attr.SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<B>SuperLuminate Self Defining Metadata Load Complete...</B>
			<P>";
	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Flat File Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";

}

// Load MySQL catalog data into SuperLuminate tables
function ProcImportMySQLCatalog($host,$user,$pass,$schema,$port,$prefix,$creator,$category,$subject,$type) {
	global $g_configpath, $g_main;

	// Check that the host name is not null
	if ($category == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Category name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($subject == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Subject name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($type == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Type name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($host == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Host name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the userid is not null
	if ($user == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Userid is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the schema name is not null
	if ($schema == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Schema name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the port value is not null
	if ($port == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Port value is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check if schema name is valid
	$stmt =
		"SELECT TABLE_SCHEMA FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	if (mysql_num_rows($result) == 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The schema name ($schema) does not exist in the MySQL catalog</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// All pre-tests have passed -- start load
	GenerateHeader(
		"[Import External MySQL Catalog] Import database ==> $schema");

	flush();

	if ($creator == "")		{$creator = $_SESSION['s_user'];}

	$hostport = $host.":".$port;

	// Check for existence of schema in SL_Object table
	$stmt =
		"SELECT Name_TX FROM SL_Object
			WHERE
				Category_TX	= '$category' and
				Subject_TX	= '$subject' and
				Class_TX	= 'Database' and
				Type_TX		= '$type' and
				Name_TX		= CONCAT('$host','.','$schema');";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		echo "	<P>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<B>$schema is an Existing Schema -- records will be UPDATED</B>
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Comments on existing SuperLuminate records will be updated from source catalog comments
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Existing Description and Business Rules fields will not be updated (your text stays the same)
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				New records will be inserted"; }
	else {
		echo "	<P>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<B>$schema is a New Schema -- records will be INSERTED</B>";
	}
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Creating import and transformation staging tables";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS SL_Object_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Object_Import (
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules_TX		text,
				Comment_TX			text)
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Object_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS SL_Attr_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Attr_Import (
				SL_Object_FK		int(11),
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Property_TX			varchar(30),
				Value_TX			varchar(100))
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Attr_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS  SL_Rel_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Rel_Import (
				P_SL_Object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_SL_Object_FK		int(11),
				C_Category_TX		varchar(30),
				C_Subject_TX		varchar(30),
				C_Class_TX			varchar(30),
				C_Type_TX			varchar(30),
				C_Name_TX			varchar(100),
				C_Version_DC		decimal(7,3))
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Rel_Import";
	flush();

	// Count Database records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(DISTINCT TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema';";
	ProcCallDatabaseMySQL($result,$stmt,$hostportport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Load source data to flat files
			<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Database record from $host.$schema";
	flush();

	$dbadptdatabase = $g_configpath."dbadpt_database.tmp";
	if(file_exists($dbadptdatabase))unlink($dbadptdatabase);

	$stmt = "
			SELECT DISTINCT
				'$category',
				'$subject',
				'Database',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA),
				1.00,
				TABLE_SCHEMA,
				'',
				'',
				''
			INTO OUTFILE '$dbadptdatabase'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = '$schema';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Table records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Table records from $host.$schema";
	flush();

	$dbadpttable = $g_configpath."dbadpt_table.tmp";
	if(file_exists($dbadpttable))unlink($dbadpttable);

	$stmt = "
			SELECT
				'$category',
				'$subject',
				'Table',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME),
				1.00,
				TABLE_NAME,
				'',
				'',
				TABLE_COMMENT
			INTO OUTFILE '$dbadpttable'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Column records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.COLUMNS
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Column records from $host.$schema";
	flush();

	$dbadptcolumn = $g_configpath."dbadpt_column.tmp";
	if(file_exists($dbadptcolumn))unlink($dbadptcolumn);

	$stmt = "
			SELECT
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				COLUMN_NAME,
				'',
				'',
				COLUMN_COMMENT
			INTO OUTFILE '$dbadptcolumn'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Column extended attribute records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.COLUMNS
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Column Extended Attribute records from $host.$schema";
	flush();

	// Insert Column extended attribute records -- Column Sequence

	$dbadptattr1 = $g_configpath."dbadpt_attr1.tmp";
	if(file_exists($dbadptattr1))unlink($dbadptattr1);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Sequence',
				ORDINAL_POSITION
			INTO OUTFILE '$dbadptattr1'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Datatype

	$dbadptattr2 = $g_configpath."dbadpt_attr2.tmp";
	if(file_exists($dbadptattr2))unlink($dbadptattr2);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Datatype',
				DATA_TYPE
			INTO OUTFILE '$dbadptattr2'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Size

	$dbadptattr3 = $g_configpath."dbadpt_attr3.tmp";
	if(file_exists($dbadptattr3))unlink($dbadptattr3);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Size',
				CHARACTER_MAXIMUM_LENGTH
			INTO OUTFILE '$dbadptattr3'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Can Be Null

	$dbadptattr4 = $g_configpath."dbadpt_attr4.tmp";
	if(file_exists($dbadptattr4))unlink($dbadptattr4);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Can Be Null',
				IS_NULLABLE
			INTO OUTFILE '$dbadptattr4'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Default

	$dbadptattr5 = $g_configpath."dbadpt_attr5.tmp";
	if(file_exists($dbadptattr5))unlink($dbadptattr5);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Default',
				COLUMN_DEFAULT
			INTO OUTFILE '$dbadptattr5'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Load Object relationships into SL_Rel table
	// Count Database to Table relationships
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Object Database to Table relationship records from $host.$schema";
	flush();

	// Insert Database to Table relationships

	$dbadptrel1 = $g_configpath."dbadpt_rel1.tmp";
	if(file_exists($dbadptrel1))unlink($dbadptrel1);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Database',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA),
				1.00,
				0,
				'$category',
				'$subject',
				'Table',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME),
				1.00
			INTO OUTFILE '$dbadptrel1'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Table to Column relationships
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Object Table to Column relationship records from $host.$schema";
	flush();

	// Insert Table to Column relationships

	$dbadptrel2 = $g_configpath."dbadpt_rel2.tmp";
	if(file_exists($dbadptrel2))unlink($dbadptrel2);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Table',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME),
				1.00,
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00
			INTO OUTFILE '$dbadptrel2'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Load staging data tables from flat files";
	flush();

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database record to SL_Object_Import from $dbadptdatabase";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptdatabase' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table records to SL_Object_Import from $dbadpttable";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadpttable' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column records to SL_Object_Import from $dbadptcolumn";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptcolumn' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr1' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr2' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr3";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr3' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr4";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr4' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr5";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr5' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database --< Table records to SL_Rel_Import from $dbadptrel1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel1' REPLACE INTO TABLE SL_Rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_SL_Object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_SL_Object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table --< Column records to SL_Rel_Import from $dbadptrel2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel2' REPLACE INTO TABLE SL_Rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_SL_Object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_SL_Object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Insert / Update base tables from staging data tables";
	flush();

	// Insert new SL_Object, SL_Attr, and SL_Rel records from Import tables
	// Update any existing SL_Object, SL_Attr from Import tables
	// Soft Delete any SL_Object records that are not found in the Import tables

	// Insert - Update SL_Object from SL_Object_Import
	$stmt = "INSERT INTO SL_Object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				Desc_TX,
				Usage_TX,
				TechRules_TX,
				Comment_TX,
				Group_CD,
				Source_ID,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD)
			SELECT
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				Desc_TX,
				Usage_TX,
				TechRules_TX,
				Comment_TX,
				'General',
				'Adapter',
				'".$creator."',
				now(),
				'".$creator."',
				now(),
				'Active'
			FROM SL_Object_Import
			ON DUPLICATE KEY UPDATE
				Comment_TX=SL_Object_Import.Comment_TX,
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Object from SL_Object_Import";
	flush();

	// Insert - Update SL_Attr from SL_Attr_Import
	$stmt = "INSERT INTO SL_Attr (
				SL_Object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
			SELECT
				SL_Object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX
			FROM SL_Attr_Import
			ON DUPLICATE KEY UPDATE
				Value_TX=SL_Attr_Import.Value_TX;";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Attr from SL_Attr_Import";
	flush();

	// Insert - Update SL_Rel from SL_Rel_Import
	$stmt = "INSERT INTO SL_Rel (
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD)
			SELECT
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				'".$creator."',
				now(),
				'".$creator."',
				now(),
				'Active'
			FROM SL_Rel_Import
			ON DUPLICATE KEY UPDATE
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Rel from SL_Rel_Import";
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Setup Foreign Key Relationships";
	flush();

	// Update relationship ROWID values
	// Count SL_Rel relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM SL_Rel
			WHERE P_SL_Object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);

	// Update SL_Rel table with parent SL_Object keys
	// Update Relationship parent key
	// Update SL_Rel.P_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.P_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.P_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.P_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.P_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.P_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.P_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.P_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.P_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Parent Object relationships in SL_Rel";
	flush();

	// Update SL_Rel table with child SL_Object keys
	// Update Relationship child key
	// Update SL_Rel.C_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.C_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.C_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.C_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.C_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.C_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.C_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.C_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.C_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Child Object relationships in SL_Rel";
	flush();

	// Count SL_Attr relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM SL_Attr
			WHERE SL_Object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);

	// Update SL_Attr table with SL_Object keys
	// Update Attribute key
	// Update SL_Attr.SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Attr,SL_Object
		SET SL_Attr.SL_Object_FK	= SL_Object.ROWID
		WHERE
			SL_Attr.Category_TX		= SL_Object.Category_TX		AND
			SL_Attr.Subject_TX		= SL_Object.Subject_TX		AND
			SL_Attr.Class_TX		= SL_Object.Class_TX		AND
			SL_Attr.Type_TX			= SL_Object.Type_TX			AND
			SL_Attr.Name_TX			= SL_Object.Name_TX			AND
			SL_Attr.Version_DC		= SL_Object.Version_DC		AND
			SL_Attr.SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Extended Object relationships in SL_Attr";
	flush();

// SOFT DELETE OF TABLES AND COLUMNS WILL BE LEFT UNTIL A LATER VERSION
// 1) The NOT EXIST join is taking too long on large data loads
// 2) If the user has databases with the same name on the same host using ports
//    the delete logic soft deletes the other database because the port number
//    is not currently stored as part of the table name
// 3) If the user specifies a prefix only copying out a subset of tables from the
//    database the current delete logic soft deletes all of the remaining tables
//    for that database
//
//	echo "	<P>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Check if any Table record has been deleted from the source system";
//	flush();
//
//	// Count SL_Object (Table) records to be soft deleted
//	// Column analysis takes too long for large data loads
//	$stmt = "
//		SELECT COUNT(*) rowcount FROM SL_Object T1
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM SL_Object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);
//	$row = mysql_fetch_object($result);
//	$rowcount	= $row->rowcount;
//	mysql_free_result($result);
//
//	echo "	<BR>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Soft Deleting [ $rowcount ] SL_Object records that no longer exist in $host.$schema";
//	flush();
//
//	// Soft Delete SL_Object records that were not imported
//	$stmt = "
//		UPDATE SL_Object T1 SET Comment_TX =
//		'*** SOFT DELETE *** THIS RECORD WAS FOUND TO BE DELETED FROM THE SOURCE SYSTEM DURING THE LAST IMPORT.'
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM SL_Object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<B>Loading Process Complete</B>";

	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Database Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";
}

// Load Oracle catalog data into SuperLuminate tables
function ProcImportOracleCatalog($host,$sid,$port,$prefix,$user,$pass,$schema,$creator,$category,$subject,$type) {
	global $g_configpath, $g_oraclestr, $g_main;

	// Check that the host name is not null
	if ($category == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Business Segment name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($subject == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Subject name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($type == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Type name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($host == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Host name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the SID name is not null
	if ($sid == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The SID name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the userid is not null
	if ($user == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Userid is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the schema name is not null
	if ($schema == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Schema name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check if schema name is valid
	$stmt =
		"SELECT OWNER FROM ALL_TABLES
			WHERE
				OWNER = '$schema'";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	if (oci_fetch_all($stid, $res) == 0) {
		oci_free_statement($stid);
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The schema name ($schema) does not exist in the Oracle catalog</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// All pre-tests have passed -- start load
	GenerateHeader(
		"[Import External Oracle Catalog] Import schema ==> $schema");

	flush();

	if ($creator == "")		{$creator = $_SESSION['s_user'];}

	// Check for preexistence of new schema in SL_Object table
	$stmt =
		"SELECT Name_TX FROM SL_Object
			WHERE
				Category_TX	= '$category' and
				Subject_TX	= '$subject' and
				Class_TX	= 'Database' and
				Type_TX		= '$type' and
				Name_TX		= CONCAT('$host','.','$schema');";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		echo "	<P>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<B>$schema is an Existing Schema -- records will be UPDATED</B>
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Comments on existing SuperLuminate records will be updated from source catalog comments
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Existing Description and Business Rules fields will not be updated (your text stays the same)
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				New records will be inserted"; }
	else {
		echo "	<P>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<B>$schema is a New Schema -- records will be INSERTED</B>";
	}

	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Creating import and transformation staging tables";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS SL_Object_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Object_Import (
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules_TX		text,
				Comment_TX			text)
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Object_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS SL_Attr_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Attr_Import (
				SL_Object_FK		int(11),
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Property_TX			varchar(30),
				Value_TX			varchar(100))
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Attr_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS  SL_Rel_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Rel_Import (
				P_SL_Object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_SL_Object_FK		int(11),
				C_Category_TX		varchar(30),
				C_Subject_TX		varchar(30),
				C_Class_TX			varchar(30),
				C_Type_TX			varchar(30),
				C_Name_TX			varchar(100),
				C_Version_DC		decimal(7,3))
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Rel_Import";
	flush();

	// Count Database records to be added to SuperLuminate
	$stmt = "
		SELECT COUNT(DISTINCT OWNER) ROWCOUNT
			FROM
				ALL_TABLES
			WHERE
				ALL_TABLES.OWNER = '$schema'";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);
	oci_fetch($stid);
	$rowcount = oci_result($stid, 'ROWCOUNT');
	oci_free_statement($stid);
	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Load source data to flat files
			<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Database record from $host.$schema";
	flush();

	$dbadptdatabase = $g_configpath."dbadpt_database.tmp";
	if(file_exists($dbadptdatabase))unlink($dbadptdatabase);
	$File = $dbadptdatabase;
	$Handle = fopen($dbadptdatabase, 'w') or die("cannot open ".$dbadptdatabase);

	$stmt = "
			SELECT DISTINCT
				'$category',
				'$subject',
				'Database',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER,
				1.00,
				ALL_TABLES.OWNER,
				'',
				'',
				''
			FROM ALL_TABLES
			WHERE ALL_TABLES.OWNER = '$schema'";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);

	// Count Table records to be added to SuperLuminate
	$stmt = "
		SELECT COUNT(*) ROWCOUNT
			FROM
				ALL_TABLES,
				ALL_TAB_COMMENTS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COMMENTS.OWNER(+)='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COMMENTS.TABLE_NAME(+)
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);
	oci_fetch($stid);
	$rowcount = oci_result($stid, 'ROWCOUNT');
	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Table records from $host.$schema";
	flush();

	$dbadpttable = $g_configpath."dbadpt_table.tmp";
	if(file_exists($dbadpttable))unlink($dbadpttable);
	$File = $dbadpttable;
	$Handle = fopen($dbadpttable, 'w') or die("cannot open ".$dbadpttable);

	$stmt = "
			SELECT
				'$category', '$subject', 'Table','$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME,1.0,ALL_TABLES.TABLE_NAME,'','',
				REPLACE(REPLACE(ALL_TAB_COMMENTS.COMMENTS,CHR(39),CHR(96)),CHR(34),CHR(96)) TAB_COMMENT
			FROM
				ALL_TABLES,
				ALL_TAB_COMMENTS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COMMENTS.OWNER(+)='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COMMENTS.TABLE_NAME(+)
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);


	// Count Column records to be added to SuperLuminate
	$stmt = "
		SELECT COUNT(*) ROWCOUNT
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS,
				ALL_COL_COMMENTS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_COL_COMMENTS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_COL_COMMENTS.TABLE_NAME
				AND
				ALL_TAB_COLUMNS.TABLE_NAME = ALL_COL_COMMENTS.TABLE_NAME
				AND
				ALL_TAB_COLUMNS.COLUMN_NAME = ALL_COL_COMMENTS.COLUMN_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);
	oci_fetch($stid);
	$rowcount = oci_result($stid, 'ROWCOUNT');
	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Column records from $host.$schema";
	flush();

	$dbadptcolumn = $g_configpath."dbadpt_column.tmp";
	if(file_exists($dbadptcolumn))unlink($dbadptcolumn);
	$File = $dbadptcolumn;
	$Handle = fopen($dbadptcolumn, 'w') or die("cannot open ".$dbadptcolumn);

	$stmt = "
			SELECT
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.00,
				ALL_TAB_COLUMNS.COLUMN_NAME,
				'',
				'',
				REPLACE(REPLACE(ALL_COL_COMMENTS.COMMENTS,CHR(39),CHR(96)),CHR(34),CHR(96)) COL_COMMENT
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS,
				ALL_COL_COMMENTS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_COL_COMMENTS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_COL_COMMENTS.TABLE_NAME
				AND
				ALL_TAB_COLUMNS.TABLE_NAME = ALL_COL_COMMENTS.TABLE_NAME
				AND
				ALL_TAB_COLUMNS.COLUMN_NAME = ALL_COL_COMMENTS.COLUMN_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);

	// Count Column extended attribute records to be added to SuperLuminate
	$stmt = "
		SELECT COUNT(*) ROWCOUNT
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);
	oci_fetch($stid);
	$rowcount = oci_result($stid, 'ROWCOUNT');
	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Column Extended Attribute records from $host.$schema";
	flush();

	// Insert Column extended attribute records -- Column Sequence

	$dbadptattr1 = $g_configpath."dbadpt_attr1.tmp";
	if(file_exists($dbadptattr1))unlink($dbadptattr1);
	$File = $dbadptattr1;
	$Handle = fopen($dbadptattr1, 'w') or die("cannot open ".$dbadptattr1);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.0,
				'Column Sequence',
				ALL_TAB_COLUMNS.COLUMN_ID
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Complete for $dbadptattr1";
	flush();

	// Insert Column extended attribute records -- Column Datatype

	$dbadptattr2 = $g_configpath."dbadpt_attr2.tmp";
	if(file_exists($dbadptattr2))unlink($dbadptattr2);
	$File = $dbadptattr2;
	$Handle = fopen($dbadptattr2, 'w') or die("cannot open ".$dbadptattr2);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.0,
				'Column Datatype',
				ALL_TAB_COLUMNS.DATA_TYPE
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Complete for $dbadptattr2";
	flush();

	// Insert Column extended attribute records -- Column Size

	$dbadptattr3 = $g_configpath."dbadpt_attr3.tmp";
	if(file_exists($dbadptattr3))unlink($dbadptattr3);
	$File = $dbadptattr3;
	$Handle = fopen($dbadptattr3, 'w') or die("cannot open ".$dbadptattr3);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.0,
				'Column Size',
				ALL_TAB_COLUMNS.DATA_LENGTH
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);

	// Insert Column extended attribute records -- Column Can Be Null
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Complete for $dbadptattr3";
	flush();

	$dbadptattr4 = $g_configpath."dbadpt_attr4.tmp";
	if(file_exists($dbadptattr4))unlink($dbadptattr4);
	$File = $dbadptattr4;
	$Handle = fopen($dbadptattr4, 'w') or die("cannot open ".$dbadptattr4);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.0,
				'Column Can Be Null',
				ALL_TAB_COLUMNS.NULLABLE
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Complete for $dbadptattr4";
	flush();

	// Insert Column extended attribute records -- Column Default

	$dbadptattr5 = $g_configpath."dbadpt_attr5.tmp";
	if(file_exists($dbadptattr5))unlink($dbadptattr5);
	$File = $dbadptattr5;
	$Handle = fopen($dbadptattr5, 'w') or die("cannot open ".$dbadptattr5);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.0,
				'Column Default',
				ALL_TAB_COLUMNS.DATA_DEFAULT
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Complete for $dbadptattr5";
	flush();

	// Load Object relationships into SL_Rel table
	// Count Database to Table relationships
	$stmt = "
			SELECT COUNT(*) ROWCOUNT
				FROM
					ALL_TABLES
				WHERE
					ALL_TABLES.OWNER = '$schema'
					AND
					ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);
	oci_fetch($stid);
	$rowcount = oci_result($stid, 'ROWCOUNT');
	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Object Database to Table relationship records from $host.$schema";
	flush();

	// Insert Database to Table relationships

	$dbadptrel1 = $g_configpath."dbadpt_rel1.tmp";
	if(file_exists($dbadptrel1))unlink($dbadptrel1);
	$File = $dbadptrel1;
	$Handle = fopen($dbadptrel1, 'w') or die("cannot open ".$dbadptrel1);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Database',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER,
				1.00,
				0,
				'$category',
				'$subject',
				'Table',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME,
				1.00
			FROM
				ALL_TABLES
			WHERE
				ALL_TABLES.OWNER = '$schema'
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);

	// Count Table to Column relationships
	$stmt = "
			SELECT COUNT(*) ROWCOUNT
				FROM
					ALL_TABLES,
					ALL_TAB_COLUMNS
				WHERE
					ALL_TABLES.OWNER='$schema'
					AND
					ALL_TAB_COLUMNS.OWNER='$schema'
					AND
					ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
					AND
					ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);
	oci_fetch($stid);
	$rowcount = oci_result($stid, 'ROWCOUNT');
	oci_free_statement($stid);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Object Table to Column relationship records from $host.$schema";
	flush();

	// Insert Table to Column relationships

	$dbadptrel2 = $g_configpath."dbadpt_rel2.tmp";
	if(file_exists($dbadptrel2))unlink($dbadptrel2);
	$File = $dbadptrel2;
	$Handle = fopen($dbadptrel2, 'w') or die("cannot open ".$dbadptrel2);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Table',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME,
				1.00,
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				'$host' || '.' || ALL_TABLES.OWNER || '.' || ALL_TABLES.TABLE_NAME || '.' || ALL_TAB_COLUMNS.COLUMN_NAME,
				1.00
			FROM
				ALL_TABLES,
				ALL_TAB_COLUMNS
			WHERE
				ALL_TABLES.OWNER='$schema'
				AND
				ALL_TAB_COLUMNS.OWNER='$schema'
				AND
				ALL_TABLES.TABLE_NAME = ALL_TAB_COLUMNS.TABLE_NAME
				AND
				ALL_TABLES.TABLE_NAME LIKE ('$prefix%')";

	ProcCallDatabaseOracle($stid,$stmt,$host,$sid,$port,$user,$pass);

	WHILE ($rowarray = oci_fetch_array($stid, OCI_NUM+OCI_RETURN_NULLS)) {
			for ($j = 0; $j < oci_num_fields($stid); $j++) {
				$display = $rowarray[$j];
				$display = "\"".$display."\",";
				fwrite($Handle, $display);
			}
		fwrite($Handle, "\r\n");
	}

	oci_free_statement($stid);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Load staging data tables from flat files";
	flush();

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database record to SL_Object_Import from $dbadptdatabase";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptdatabase' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table records to SL_Object_Import from $dbadpttable";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadpttable' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column records to SL_Object_Import from $dbadptcolumn";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptcolumn' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr1' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr2' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr3";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr3' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr4";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr4' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr5";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr5' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database --< Table records to SL_Rel_Import from $dbadptrel1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel1' REPLACE INTO TABLE SL_Rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(P_SL_Object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_SL_Object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table --< Column records to SL_Rel_Import from $dbadptrel2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel2' REPLACE INTO TABLE SL_Rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(P_SL_Object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_SL_Object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Insert / Update base tables from staging data tables";
	flush();

	// Insert new SL_Object, SL_Attr, and SL_Rel records from Import tables
	// Update any existing SL_Object, SL_Attr from Import tables
	// Soft Delete any SL_Object records that are not found in the Import tables

	// Insert - Update SL_Object from SL_Object_Import
	$stmt = "INSERT INTO SL_Object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				Desc_TX,
				Usage_TX,
				TechRules_TX,
				Comment_TX,
				Group_CD,
				Source_ID,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD)
			SELECT
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				Desc_TX,
				Usage_TX,
				TechRules_TX,
				Comment_TX,
				'General',
				'Adapter',
				'".$creator."',
				now(),
				'".$creator."',
				now(),
				'Active'
			FROM SL_Object_Import
			ON DUPLICATE KEY UPDATE
				Comment_TX=SL_Object_Import.Comment_TX,
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Object from SL_Object_Import";
	flush();

	// Insert - Update SL_Attr from SL_Attr_Import
	$stmt = "INSERT INTO SL_Attr (
				SL_Object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
			SELECT
				SL_Object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX
			FROM SL_Attr_Import
			ON DUPLICATE KEY UPDATE
				Value_TX=SL_Attr_Import.Value_TX;";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Attr from SL_Attr_Import";
	flush();

	// Insert - Update SL_Rel from SL_Rel_Import
	$stmt = "INSERT INTO SL_Rel (
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD)
			SELECT
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				'".$creator."',
				now(),
				'".$creator."',
				now(),
				'Active'
			FROM SL_Rel_Import
			ON DUPLICATE KEY UPDATE
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Rel from SL_Rel_Import";
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Setup Foreign Key Relationships";
	flush();

	// Update relationship ROWID values
	// Count SL_Rel relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM SL_Rel
			WHERE P_SL_Object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);

	// Update SL_Rel table with parent SL_Object keys
	// Update Relationship parent key
	// Update SL_Rel.P_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.P_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.P_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.P_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.P_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.P_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.P_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.P_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.P_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Parent Object relationships in SL_Rel";
	flush();

	// Update SL_Rel table with child SL_Object keys
	// Update Relationship child key
	// Update SL_Rel.C_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.C_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.C_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.C_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.C_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.C_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.C_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.C_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.C_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Child Object relationships in SL_Rel";
	flush();

	// Count SL_Attr relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM SL_Attr
			WHERE SL_Object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);

	// Update SL_Attr table with SL_Object keys
	// Update Attribute key
	// Update SL_Attr.SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Attr,SL_Object
		SET SL_Attr.SL_Object_FK	= SL_Object.ROWID
		WHERE
			SL_Attr.Category_TX		= SL_Object.Category_TX		AND
			SL_Attr.Subject_TX		= SL_Object.Subject_TX		AND
			SL_Attr.Class_TX		= SL_Object.Class_TX		AND
			SL_Attr.Type_TX			= SL_Object.Type_TX			AND
			SL_Attr.Name_TX			= SL_Object.Name_TX			AND
			SL_Attr.Version_DC		= SL_Object.Version_DC		AND
			SL_Attr.SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Extended Object relationships in SL_Attr";
	flush();

// SOFT DELETE OF TABLES AND COLUMNS WILL BE LEFT UNTIL A LATER VERSION
// 1) The NOT EXIST join is taking too long on large data loads
// 2) If the user has databases with the same name on the same host using ports
//    the delete logic soft deletes the other database because the port number
//    is not currently stored as part of the table name
// 3) If the user specifies a prefix only copying out a subset of tables from the
//    database the current delete logic soft deletes all of the remaining tables
//    for that database
//
//	echo "	<P>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Check if any Table record has been deleted from the source system";
//	flush();
//
//	// Count SL_Object (Table) records to be soft deleted
//	// Column analysis takes too long for large data loads
//	$stmt = "
//		SELECT COUNT(*) rowcount FROM SL_Object T1
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM SL_Object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);
//	$row = mysql_fetch_object($result);
//	$rowcount	= $row->rowcount;
//	mysql_free_result($result);
//
//	echo "	<BR>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Soft Deleting [ $rowcount ] SL_Object records that no longer exist in $host.$schema";
//	flush();
//
//	// Soft Delete SL_Object records that were not imported
//	$stmt = "
//		UPDATE SL_Object T1 SET Comment_TX =
//		'*** SOFT DELETE *** THIS RECORD WAS FOUND TO BE DELETED FROM THE SOURCE SYSTEM DURING THE LAST IMPORT.'
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM SL_Object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<B>Loading Process Complete</B>";
	flush();

	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Database Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";
}



//***** WIP
// Load SQL Server catalog data into SuperLuminate tables
function ProcImportSQLServerCatalog($host,$user,$pass,$schema,$prefix,$creator,$category,$subject,$type) {
	global $g_configpath, $g_main;

	// Check that the host name is not null
	if ($category == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Business Segment name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($subject == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Subject name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($type == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>A Type name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the host name is not null
	if ($host == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Host name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the userid is not null
	if ($user == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Userid is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check that the schema name is not null
	if ($schema == "") {
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The Schema name is REQUIRED</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// Check if schema name is valid
	$stmt =
		"SELECT TABLE_SCHEMA FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	if (mysql_num_rows($result) == 0) {
		mysql_free_result($result);
		GenerateHeader(
			"[Database Adapters] <font color=red>
			<b>The schema name ($schema) does not exist in the MySQL catalog</b></font>");
		FormButtonsDatabaseAdapters();
		exit();
	}

	// All pre-tests have passed -- start load
	GenerateHeader(
		"[Import External MySQL Catalog] Import database ==> $schema");

	flush();

	if ($creator == "")		{$creator = $_SESSION['s_user'];}

	$hostport = $host.":".$port;

	// Check for existence of schema in SL_Object table
	$stmt =
		"SELECT Name_TX FROM SL_Object
			WHERE
				Category_TX	= '$category' and
				Subject_TX	= '$subject' and
				Class_TX	= 'Database' and
				Type_TX		= '$type' and
				Name_TX		= CONCAT('$host','.','$schema');";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		echo "	<P>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<B>$schema is an Existing Schema -- records will be UPDATED</B>
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Comments on existing SuperLuminate records will be updated from source catalog comments
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Existing Description and Business Rules fields will not be updated (your text stays the same)
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				New records will be inserted"; }
	else {
		echo "	<P>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<B>$schema is a New Schema -- records will be INSERTED</B>";
	}
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Creating import and transformation staging tables";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS SL_Object_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Object_Import (
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules			text,
				Comment_TX			text)
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Object_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS SL_Attr_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Attr_Import (
				SL_Object_FK		int(11),
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Property_TX			varchar(30),
				Value_TX			varchar(100))
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Attr_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS  SL_Rel_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Rel_Import (
				P_SL_Object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_SL_Object_FK		int(11),
				C_Category_TX		varchar(30),
				C_Subject_TX		varchar(30),
				C_Class_TX			varchar(30),
				C_Type_TX			varchar(30),
				C_Name_TX			varchar(100),
				C_Version_DC		decimal(7,3))
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created SL_Rel_Import";
	flush();

	// Count Database records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(DISTINCT TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema';";
	ProcCallDatabaseMySQL($result,$stmt,$hostportport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Load source data to flat files
			<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Database record from $host.$schema";
	flush();

	$dbadptdatabase = $g_configpath."dbadpt_database.tmp";
	if(file_exists($dbadptdatabase))unlink($dbadptdatabase);

	$stmt = "
			SELECT DISTINCT
				'$category',
				'$subject',
				'Database',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA),
				1.00,
				TABLE_SCHEMA,
				'',
				'',
				''
			INTO OUTFILE '$dbadptdatabase'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = '$schema';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Table records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Table records from $host.$schema";
	flush();

	$dbadpttable = $g_configpath."dbadpt_table.tmp";
	if(file_exists($dbadpttable))unlink($dbadpttable);

	$stmt = "
			SELECT
				'$category',
				'$subject',
				'Table',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME),
				1.00,
				TABLE_NAME,
				'',
				'',
				TABLE_COMMENT
			INTO OUTFILE '$dbadpttable'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Column records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.COLUMNS
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Column records from $host.$schema";
	flush();

	$dbadptcolumn = $g_configpath."dbadpt_column.tmp";
	if(file_exists($dbadptcolumn))unlink($dbadptcolumn);

	$stmt = "
			SELECT
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				COLUMN_NAME,
				'',
				'',
				COLUMN_COMMENT
			INTO OUTFILE '$dbadptcolumn'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Column extended attribute records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.COLUMNS
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Column Extended Attribute records from $host.$schema";
	flush();

	// Insert Column extended attribute records -- Column Sequence

	$dbadptattr1 = $g_configpath."dbadpt_attr1.tmp";
	if(file_exists($dbadptattr1))unlink($dbadptattr1);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Sequence',
				ORDINAL_POSITION
			INTO OUTFILE '$dbadptattr1'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Datatype

	$dbadptattr2 = $g_configpath."dbadpt_attr2.tmp";
	if(file_exists($dbadptattr2))unlink($dbadptattr2);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Datatype',
				DATA_TYPE
			INTO OUTFILE '$dbadptattr2'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Size

	$dbadptattr3 = $g_configpath."dbadpt_attr3.tmp";
	if(file_exists($dbadptattr3))unlink($dbadptattr3);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Size',
				CHARACTER_MAXIMUM_LENGTH
			INTO OUTFILE '$dbadptattr3'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Can Be Null

	$dbadptattr4 = $g_configpath."dbadpt_attr4.tmp";
	if(file_exists($dbadptattr4))unlink($dbadptattr4);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Can Be Null',
				IS_NULLABLE
			INTO OUTFILE '$dbadptattr4'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Insert Column extended attribute records -- Column Default

	$dbadptattr5 = $g_configpath."dbadpt_attr5.tmp";
	if(file_exists($dbadptattr5))unlink($dbadptattr5);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00,
				'Column Default',
				COLUMN_DEFAULT
			INTO OUTFILE '$dbadptattr5'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Load Object relationships into SL_Rel table
	// Count Database to Table relationships
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Object Database to Table relationship records from $host.$schema";
	flush();

	// Insert Database to Table relationships

	$dbadptrel1 = $g_configpath."dbadpt_rel1.tmp";
	if(file_exists($dbadptrel1))unlink($dbadptrel1);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Database',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA),
				1.00,
				0,
				'$category',
				'$subject',
				'Table',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME),
				1.00
			INTO OUTFILE '$dbadptrel1'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	// Count Table to Column relationships
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);
	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Extracting [ $rowcount ] Object Table to Column relationship records from $host.$schema";
	flush();

	// Insert Table to Column relationships

	$dbadptrel2 = $g_configpath."dbadpt_rel2.tmp";
	if(file_exists($dbadptrel2))unlink($dbadptrel2);

	$stmt = "
			SELECT
				0,
				'$category',
				'$subject',
				'Table',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME),
				1.00,
				0,
				'$category',
				'$subject',
				'Column',
				'$type',
				CONCAT('$host','.',TABLE_SCHEMA,'.',TABLE_NAME,'.',COLUMN_NAME),
				1.00
			INTO OUTFILE '$dbadptrel2'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM INFORMATION_SCHEMA.COLUMNS
			WHERE TABLE_SCHEMA = '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";

	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Load staging data tables from flat files";
	flush();

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database record to SL_Object_Import from $dbadptdatabase";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptdatabase' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table records to SL_Object_Import from $dbadpttable";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadpttable' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column records to SL_Object_Import from $dbadptcolumn";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptcolumn' REPLACE INTO TABLE SL_Object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr1' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr2' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr3";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr3' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr4";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr4' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to SL_Attr_Import from $dbadptattr5";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr5' REPLACE INTO TABLE SL_Attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(SL_Object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database --< Table records to SL_Rel_Import from $dbadptrel1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel1' REPLACE INTO TABLE SL_Rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_SL_Object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_SL_Object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table --< Column records to SL_Rel_Import from $dbadptrel2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel2' REPLACE INTO TABLE SL_Rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_SL_Object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_SL_Object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Insert / Update base tables from staging data tables";
	flush();

	// Insert new SL_Object, SL_Attr, and SL_Rel records from Import tables
	// Update any existing SL_Object, SL_Attr from Import tables
	// Soft Delete any SL_Object records that are not found in the Import tables

	// Insert - Update SL_Object from SL_Object_Import
	$stmt = "INSERT INTO SL_Object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				Desc_TX,
				Usage_TX,
				TechRules_TX,
				Comment_TX,
				Group_CD,
				Source_ID,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD)
			SELECT
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				Desc_TX,
				Usage_TX,
				TechRules_TX,
				Comment_TX,
				'General',
				'Adapter',
				'".$creator."',
				now(),
				'".$creator."',
				now(),
				'Active'
			FROM SL_Object_Import
			ON DUPLICATE KEY UPDATE
				Comment_TX=SL_Object_Import.Comment_TX,
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Object from SL_Object_Import";
	flush();

	// Insert - Update SL_Attr from SL_Attr_Import
	$stmt = "INSERT INTO SL_Attr (
				SL_Object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
			SELECT
				SL_Object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX
			FROM SL_Attr_Import
			ON DUPLICATE KEY UPDATE
				Value_TX=SL_Attr_Import.Value_TX;";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Attr from SL_Attr_Import";
	flush();

	// Insert - Update SL_Rel from SL_Rel_Import
	$stmt = "INSERT INTO SL_Rel (
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				Creator_ID,
				Created_DS,
				Changer_ID,
				Changed_DS,
				Status_CD)
			SELECT
				P_SL_Object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_SL_Object_FK,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC,
				'".$creator."',
				now(),
				'".$creator."',
				now(),
				'Active'
			FROM SL_Rel_Import
			ON DUPLICATE KEY UPDATE
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded SL_Rel from SL_Rel_Import";
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Setup Foreign Key Relationships";
	flush();

	// Update relationship ROWID values
	// Count SL_Rel relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM SL_Rel
			WHERE P_SL_Object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);

	// Update SL_Rel table with parent SL_Object keys
	// Update Relationship parent key
	// Update SL_Rel.P_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.P_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.P_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.P_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.P_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.P_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.P_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.P_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.P_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Parent Object relationships in SL_Rel";
	flush();

	// Update SL_Rel table with child SL_Object keys
	// Update Relationship child key
	// Update SL_Rel.C_SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Rel,SL_Object
		SET SL_Rel.C_SL_Object_FK = SL_Object.ROWID
		WHERE
			SL_Rel.C_Category_TX	= SL_Object.Category_TX		AND
			SL_Rel.C_Subject_TX		= SL_Object.Subject_TX		AND
			SL_Rel.C_Class_TX		= SL_Object.Class_TX		AND
			SL_Rel.C_Type_TX		= SL_Object.Type_TX			AND
			SL_Rel.C_Name_TX		= SL_Object.Name_TX			AND
			SL_Rel.C_Version_DC		= SL_Object.Version_DC		AND
			SL_Rel.C_SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Child Object relationships in SL_Rel";
	flush();

	// Count SL_Attr relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM SL_Attr
			WHERE SL_Object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysql_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysql_free_result($result);

	// Update SL_Attr table with SL_Object keys
	// Update Attribute key
	// Update SL_Attr.SL_Object_FK to SL_Object.ROWID
	$stmt = "
		UPDATE SL_Attr,SL_Object
		SET SL_Attr.SL_Object_FK	= SL_Object.ROWID
		WHERE
			SL_Attr.Category_TX		= SL_Object.Category_TX		AND
			SL_Attr.Subject_TX		= SL_Object.Subject_TX		AND
			SL_Attr.Class_TX		= SL_Object.Class_TX		AND
			SL_Attr.Type_TX			= SL_Object.Type_TX			AND
			SL_Attr.Name_TX			= SL_Object.Name_TX			AND
			SL_Attr.Version_DC		= SL_Object.Version_DC		AND
			SL_Attr.SL_Object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Extended Object relationships in SL_Attr";
	flush();

// SOFT DELETE OF TABLES AND COLUMNS WILL BE LEFT UNTIL A LATER VERSION
// 1) The NOT EXIST join is taking too long on large data loads
// 2) If the user has databases with the same name on the same host using ports
//    the delete logic soft deletes the other database because the port number
//    is not currently stored as part of the table name
// 3) If the user specifies a prefix only copying out a subset of tables from the
//    database the current delete logic soft deletes all of the remaining tables
//    for that database
//
//	echo "	<P>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Check if any Table record has been deleted from the source system";
//	flush();
//
//	// Count SL_Object (Table) records to be soft deleted
//	// Column analysis takes too long for large data loads
//	$stmt = "
//		SELECT COUNT(*) rowcount FROM SL_Object T1
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM SL_Object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);
//	$row = mysql_fetch_object($result);
//	$rowcount	= $row->rowcount;
//	mysql_free_result($result);
//
//	echo "	<BR>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Soft Deleting [ $rowcount ] SL_Object records that no longer exist in $host.$schema";
//	flush();
//
//	// Soft Delete SL_Object records that were not imported
//	$stmt = "
//		UPDATE SL_Object T1 SET Comment_TX =
//		'*** SOFT DELETE *** THIS RECORD WAS FOUND TO BE DELETED FROM THE SOURCE SYSTEM DURING THE LAST IMPORT.'
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM SL_Object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<B>Loading Process Complete</B>";

	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Database Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";
}
















// Load Database with Object Metadata From Load File
function ProcImportObject($objectloadfile,$userid) {
	global $g_configpath, $g_main;

	$filename = $g_configpath.$objectloadfile;

	// To skip first record (header record)in load file set IGNORE 1 LINES
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE SL_Object
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM SL_Object WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	// Add housekeeping attributes to inserted records
	$source		= "Adapter";
	$group		= "General";
	$created	= date("Y-m-d H:i:s");
	$creator	= $userid;
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	$stmt = "
		UPDATE SL_Object SET
			Source_ID		='$source',
			Group_CD		='$group',
			Created_DS		='$created',
			Creator_ID		='$creator',
			Changed_DS		='$changed',
			Changer_ID		='$changer',
			Status_CD		='$status'
		WHERE Created_DS IS NULL";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			If the return code is equal to (1) the import was successful.
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Import File Name ==> $filename
			<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Return Code ==> $result
			<P>";

	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Flat File Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";

}

// Export Object Data to File
function ProcExportObject($objectexportfile) {
	global $g_configpath, $g_main;

	$filename = $g_configpath.$objectexportfile;

	// Export data command -- set to export all object data of CLASS Glossary

	$stmt = "
			SELECT
				REPLACE(Category_TX,CHAR(34),CHAR(132)),
				REPLACE(Subject_TX,CHAR(34),CHAR(132)),
				REPLACE(Class_TX,CHAR(34),CHAR(132)),
				REPLACE(Type_TX,CHAR(34),CHAR(132)),
				REPLACE(Name_TX,CHAR(34),CHAR(132)),
				Version_DC,
				REPLACE(Alias_TX,CHAR(34),CHAR(132)),
				REPLACE(Desc_TX,CHAR(34),CHAR(132)),
				REPLACE(Usage_TX,CHAR(34),CHAR(132)),
				REPLACE(TechRules_TX,CHAR(34),CHAR(132)),
				REPLACE(Comment_TX,CHAR(34),CHAR(132))
			INTO OUTFILE '$filename'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM SL_Object
			WHERE Class_TX = 'Glossary'
			ORDER BY
			Category_TX,
			Subject_TX,
			Class_TX,
			Type_TX,
			Name_TX,
			Version_DC";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			If the return code is equal to (1) the export was successful.
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Export File Name ==> $filename
			<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Return Code ==> $result
			<P>";

	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Flat File Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";

}

// Backup Database to file in config directory
function ProcBackupDatabase($backupfile) {
	global $g_configpath, $g_dbbinpath, $g_database, $g_user, $g_pass, $g_main;

	$backupfile = $g_configpath . $backupfile;

	// Use different backup command if password is null
	// Option --add-drop-database not valid before MySQL 4.1.13

	if ($g_pass == "") {
		$backupcmd = $g_dbbinpath
		 . "mysqldump --opt --databases --add-drop-database -u $g_user $g_database > "
		 . "\"$backupfile\"";
	}
	else {
		$backupcmd = $g_dbbinpath
		 . "mysqldump --opt --databases --add-drop-database -u $g_user -p$g_pass $g_database > "
		 . "\"$backupfile\"";
	}

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Backup Restore Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";

	system($backupcmd, $retval);

	echo "
	<FONT FACE=arial size=2>Backup Command String:</FONT>
	<p>
	<TEXTAREA READONLY NAME=desc cols=120 rows=3
		style=\"color:gray; font-family:Times; font-weight:normal;
		font-size:12px; background-color:white\">$backupcmd</TEXTAREA>
	<p>
	<FONT FACE=arial size=2>Backup File:</FONT>
	<p>
	<TEXTAREA READONLY NAME=desc cols=120 rows=3
		style=\"color:gray; font-family:Times; font-weight:normal;
		font-size:12px; background-color:white\">$backupfile</TEXTAREA>
	<p>
	<FONT FACE=arial size=2>Backup Success Value:</FONT>
	<FONT FACE=arial size=2 color=red>(If not zero '0' an error occurred)</FONT>
	<p>
	<TEXTAREA READONLY NAME=desc cols=120 rows=3
		style=\"color:gray; font-family:Times; font-weight:normal;
		font-size:12px; background-color:white\">$retval</TEXTAREA>
	<p>
	<hr size=1 width=620 noshade align=left>";
}

// Restore Database from file in config directory
function ProcRestoreDatabase($restorefile) {
	global $g_configpath, $g_dbbinpath, $g_database, $g_user, $g_pass, $g_main;

	$restorefile = $g_configpath . $restorefile;

	if ($g_pass == "") {
		$restorecmd = $g_dbbinpath
		 . "mysql -u $g_user $g_database < " . "\"$restorefile\"";
	}
	else {
		$restorecmd = $g_dbbinpath
		 . "mysql -u $g_user -p$g_pass $g_database < " . "\"$restorefile\"";
	}

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Backup Restore Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";

	system($restorecmd, $retval);

	echo "
	<FONT FACE=arial size=2>Restore Command String:</FONT>
	<p>
	<TEXTAREA READONLY NAME=desc cols=120 rows=3
		style=\"color:gray; font-family:Times; font-weight:normal;
		font-size:12px; background-color:white\">$restorecmd</TEXTAREA>
	<p>
	<FONT FACE=arial size=2>Backup File Used To Restore Database:</FONT>
	<p>
	<TEXTAREA READONLY NAME=desc cols=120 rows=3
		style=\"color:gray; font-family:Times; font-weight:normal;
		font-size:12px; background-color:white\">$restorefile</TEXTAREA>
	<p>
	<FONT FACE=arial size=2>Restore Success Value:</FONT>
	<FONT FACE=arial size=2 color=red>(If not zero '0' an error occurred)</FONT>
	<p>
	<TEXTAREA READONLY NAME=desc cols=120 rows=3
		style=\"color:gray; font-family:Times; font-weight:normal;
		font-size:12px; background-color:white\">$retval</TEXTAREA>
	<p>
	<hr size=1 width=620 noshade align=left>";
}

// Bulk Report all selected objects
function ProcBulkReport($reportstmt) {

	GenerateHeader(
		"[Bulk Report] This report is formatted to be copied into a spreadsheet (use BACK to return)");

	$reportstmt = stripslashes($reportstmt);

	ProcCallDatabase($result,$reportstmt);

	// Display report header
	echo "
	<TABLE BORDER=1>
		<THEAD>
			<TR>";
				for ($i = 0; $i < mysql_num_fields($result); $i++) {
					echo"<TD>" . mysql_field_name($result,$i) . "</TD>";
					}
			echo "
			</TR>
		</THEAD>";
		// Display report body
		// Convert null to chr(160) a non space unprintable character
		// If the field is null the table cell will no show a box border
		// If the null is converted to a space chr(20) it is trimed
		// so the field is null again and does not display a cell border
		echo "
		<TBODY>";
				for ($i = 0; $i < mysql_num_rows($result); $i++) {
			echo"
			<TR>";
				$rowarray = mysql_fetch_row($result);
				for ($j = 0; $j < mysql_num_fields($result); $j++) {
					$display = $rowarray[$j];
					if ($display == ""){$display = chr(160);}
					echo"<TD>" . $display . "</TD>";
				}
			echo"
			</TR>";
			}
		echo "
		</TBODY>";
	echo "
	</TABLE>";
}

// Load and setup the SuperLuminate database for first time use
function ProcSetupDatabase() {

	// Load SuperLuminate database structure

	$stmt = "
			CREATE TABLE SL_Object (
				ROWID				int(11) primary key auto_increment,
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules_TX		text,
				Comment_TX			text,
				Group_CD			varchar(10),
				Source_ID			varchar(100),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'User accessable metadata table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Object_A1 ON SL_Object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Object_I1 ON SL_Object (
				Category_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Object_I2 ON SL_Object (
				Subject_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Object_I3 ON SL_Object (
				Class_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Object_I4 ON SL_Object (
				Type_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Category (
				Category_ID			int(11) primary key auto_increment,
				Category_TX			varchar(30),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable metaschema table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Category_A1 ON SL_Category (
				Category_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Subject (
				Category_ID			int(11),
				Category_TX			varchar(30),
				Subject_ID			int(11) primary key auto_increment,
				Subject_TX			varchar(30),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable metaschema table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Subject_A1 ON SL_Subject (
				Category_TX,
				Subject_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Class (
				Category_ID			int(11),
				Category_TX			varchar(30),
				Subject_ID			int(11),
				Subject_TX			varchar(30),
				Class_ID			int(11) primary key auto_increment,
				Class_TX			varchar(30),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable metaschema table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Class_A1 ON SL_Class (
				Category_TX,
				Subject_TX,
				Class_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Type (
				Category_ID			int(11),
				Category_TX			varchar(30),
				Category_DC			decimal(10,0),
				Subject_ID			int(11),
				Subject_TX			varchar(30),
				Subject_DC			decimal(10,0),
				Class_ID			int(11),
				Class_TX			varchar(30),
				Class_DC			decimal(10,0),
				Type_ID				int(11) primary key auto_increment,
				Type_TX				varchar(30),
				Type_DC				decimal(10,0),
				Unique_FL			char(1),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable metaschema table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Type_A1 ON SL_Type (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Event (
				ROWID				int(11) primary key auto_increment,
				User_ID				varchar(30),
				Event_CD			varchar(30),
				Remote_IP_Addr_TX	varchar(255),
				Remote_Agent		varchar(255),
				Event_TX			varchar(255),
				Created_DS			datetime)
				COMMENT 'Administrator accessable control table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_User (
				User_ID				varchar(30) primary key,
				User_Type_CD		varchar(10),
				Password_TX			varchar(80),
				First_Name_TX		varchar(30),
				Last_Name_TX		varchar(30),
				Title_TX			varchar(30),
				Email_Addr_TX		varchar(80),
				Phone_TX			varchar(30),
				Company_TX			varchar(80),
				Dept_TX				varchar(80),
				URL_TX				varchar(80),
				Release_CD			varchar(10),
				Newsletter_CD		varchar(10),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable control table.';";
	ProcCallDatabase($result,$stmt);
	$stmt = "

			CREATE TABLE SL_Config (
				Config_ID			varchar(30) primary key,
				Color_Bkg_HX		varchar(6),
				Color_Msg_HX		varchar(6),
				Logo_Primary_TX		varchar(30),
				Read_Only_FL		char(1),
				Max_Rows_IN			int(5),
				Attr_01_TX			text
				COMMENT 'stores login page message',
				Attr_02_TX			text
				COMMENT '(Y/N) Ad Hoc SQL access on report page',
				Attr_03_TX			text
				COMMENT 'stores filestore path name',
				Attr_04_TX			text
				COMMENT '(Y/N) superluminate lite access',
				Attr_05_TX			text
				COMMENT 'stores mysql binaries path name',
				Attr_06_TX			text
				COMMENT 'Oracle database connection string',
				Attr_07_TX			text
				COMMENT 'System Time Out in Seconds',
				Attr_08_TX			text
				COMMENT 'for future use',
				Attr_09_TX			text
				COMMENT 'for future use',
				Attr_10_TX			text
				COMMENT 'for future use',
				Creator_ID			varchar(80),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable control table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Prop (
				ROWID				int(11) primary key auto_increment,
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Property_TX			varchar(30),
				Datatype_CD			varchar(30),
				Length_IN			int(3),
				Default_TX			varchar(100),
				Rule_TX				varchar(255),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'User accessable metadata table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Prop_A1 ON SL_Prop (
				Category_TX,
				Subject_TX,
				Class_TX,
				Property_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Attr (
				SL_Object_FK		int(11),
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Property_TX			varchar(30),
				Value_TX			varchar(100))
				COMMENT 'Administrator accessable metaschema table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Attr_A1 ON SL_Attr (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Attr_I1 ON SL_Attr (
				SL_Object_FK);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Rel (
				P_SL_Object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_SL_Object_FK		int(11),
				C_Category_TX		varchar(30),
				C_Subject_TX		varchar(30),
				C_Class_TX			varchar(30),
				C_Type_TX			varchar(30),
				C_Name_TX			varchar(100),
				C_Version_DC		decimal(7,3),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'User accessable metadata table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Rel_A1 ON SL_Rel (
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX,
				C_Type_TX,
				C_Name_TX,
				C_Version_DC);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Rel_I1 ON SL_Rel (
				P_SL_Object_FK);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX SL_Rel_I2 ON SL_Rel (
				C_SL_Object_FK);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE SL_Assoc (
				ROWID				int(11) primary key auto_increment,
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				C_Category_TX		varchar(30),
				C_Subject_TX		varchar(30),
				C_Class_TX			varchar(30),
				Assoc_Rule_TX		varchar(255),
				Creator_ID			varchar(30),
				Created_DS			datetime,
				Changer_ID			varchar(30),
				Changed_DS			datetime,
				Status_CD			varchar(10))
				COMMENT 'Administrator accessable metaschema table.';";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE UNIQUE INDEX SL_Assoc_A1 ON SL_Assoc (
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX);";
	ProcCallDatabase($result,$stmt);

	// Load default admin user account record

	$stmt = "
		INSERT INTO SL_User (User_ID,User_Type_CD,Password_TX,First_Name_TX,Last_Name_TX,Title_TX,Email_Addr_TX,Phone_TX,Company_TX,Dept_TX,URL_TX,Release_CD,Newsletter_CD,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('admin','admin','b9b57aae83585e17ede4570dcede353c','Administrator','','','','','','','','Yes','Yes','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// Load default configuration record

	$stmt = "
		INSERT INTO SL_Config (Config_ID,Color_Bkg_HX,Color_Msg_HX,Logo_Primary_TX,
		Read_Only_FL,Max_Rows_IN,Attr_01_TX,Attr_02_TX,Attr_03_TX,Attr_04_TX,
		Attr_05_TX,Attr_06_TX,Attr_07_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD)
		VALUES
		('Default','E0FFFF','FFFF66','superluminate_logo.gif','Y',2000,
		'Contact John Doe at jdoe@devnull.com for User ID and administration questions.',
		'Y','C:/apache/htdocs/sl/filestore/','Y','C:/mysql/bin/',
		'(DESCRIPTION= (ADDRESS= (PROTOCOL= TCP) (HOST= $host) (PORT= $port)) (CONNECT_DATA= (SID= $sid)))',
		50,'admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// Load SuperLuminate Business Metaschema
	ProcLoadMetaschemaQuiet();
}

// Load SuperLuminate Business Metaschema
function ProcLoadMetaschemaActive() {
	global $g_main;

	ProcLoadMetaschemaQuiet();

	echo "
	<P>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<B>SuperLuminate Business Metaschema Load Complete...</B>
	<P>
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"Flat File Adapters\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";
}

// Load SuperLuminate Business Metaschema
function ProcLoadMetaschemaQuiet() {
	global $g_main;

	// Check for preexistence of SuperLuminate Business Metaschema
	$stmt =
		"SELECT Category_TX FROM SL_Category
			WHERE
				Category_TX		= 'Enterprise';";
	ProcCallDatabase($result,$stmt);
	if (mysql_num_rows($result) > 0) {
		mysql_free_result($result);
		echo "
		<P>
		<B>
			<FONT FACE=arial SIZE=3 COLOR=red>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				SuperLuminate Business Metaschema already exists<BR>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Or the category name 'Enterprise' is already in use
			</FONT>
		</B>
		<P>
		<hr size=1 width=620 noshade align=left>
		<FORM METHOD=POST ACTION=$g_main>
			<input type=submit name=auggie value=\"Flat File Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>
		<hr size=1 width=620 noshade align=left>";
		exit();
	}

	// LOAD SL_Category
	$stmt = "
		INSERT INTO SL_Category (Category_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('Enterprise','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD SL_Subject
	$stmt = "
		INSERT INTO SL_Subject (Category_ID,Category_TX,Subject_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		(0,'Enterprise','Business','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD SL_Class
	$stmt = "
		INSERT INTO SL_Class (Category_ID,Category_TX,Subject_ID,Subject_TX,Class_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		(0,'Enterprise',0,'Business','Entity','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Business Unit','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Business Function','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Glossary','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Business Process','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Business Task','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','KPI','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','ERM','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Attribute','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Data Domain','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Subject Area','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Software','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Hardware','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Vendor','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Location','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Program','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Project','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Document','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Application Module','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Dashboard','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Report','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Column','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Field','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Record','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','File','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Application','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Database','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise',0,'Business','Table','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD SL_Type
	$stmt = "
		INSERT INTO SL_Type (Category_ID,Category_TX,Category_DC,Subject_ID,Subject_TX,Subject_DC,Class_ID,Class_TX,Class_DC,Type_TX,Type_DC,Unique_FL,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		(0,'Enterprise','0',0,'Business','0',0,'Entity','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Business Unit','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Business Function','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Glossary','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Business Process','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Business Task','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'KPI','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'ERM','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Attribute','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Data Domain','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Subject Area','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Software','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Hardware','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Vendor','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Location','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Program','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Project','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Document','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Application Module','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Dashboard','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Report','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Column','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Field','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Record','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'File','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Application','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Database','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active'),
		(0,'Enterprise','0',0,'Business','0',0,'Table','0','Opus','0','N','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD SL_Prop
	$stmt = "
		INSERT INTO SL_Prop (Category_TX,Subject_TX,Class_TX,Property_TX,Datatype_CD,Length_IN,Default_TX,Rule_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('Enterprise','Business','Column','Column Datatype','n/a',0,'Varchar','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Column','Column Size','n/a',0,'0','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Column','Can Be Null','n/a',0,'Yes','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Column','Sequence','n/a',0,'0','n/a','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD SL_Assoc
	$stmt = "
		INSERT INTO SL_Assoc (P_Category_TX,P_Subject_TX,P_Class_TX,C_Category_TX,C_Subject_TX,C_Class_TX,Assoc_Rule_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('Enterprise','Business','Business Unit','Enterprise','Business','Glossary','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Unit','Enterprise','Business','Business Function','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Unit','Enterprise','Business','KPI','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Function','Enterprise','Business','Business Process','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Process','Enterprise','Business','Business Task','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Dashboard','Enterprise','Business','KPI','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Dashboard','Enterprise','Business','Record','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Subject Area','Enterprise','Business','Report','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Attribute','Enterprise','Business','Data Domain','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Attribute','Enterprise','Business','Report','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Attribute','Enterprise','Business','Field','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Attribute','Enterprise','Business','Column','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Attribute','Enterprise','Business','Business Task','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Entity','Enterprise','Business','Attribute','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Table','Enterprise','Business','Column','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Entity','Enterprise','Business','Table','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Database','Enterprise','Business','Table','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Location','Enterprise','Business','Hardware','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Hardware','Enterprise','Business','Database','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Hardware','Enterprise','Business','File','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','File','Enterprise','Business','Record','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Record','Enterprise','Business','Field','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','File','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Vendor','Enterprise','Business','Hardware','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Vendor','Enterprise','Business','Software','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Hardware','Enterprise','Business','Software','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','Hardware','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','Software','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','Project','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Unit','Enterprise','Business','Application','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Unit','Enterprise','Business','Project','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Program','Enterprise','Business','Project','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Project','Enterprise','Business','Document','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Project','Enterprise','Business','Application Module','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','ERM','Enterprise','Business','Entity','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application Module','Enterprise','Business','Business Process','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Unit','Enterprise','Business','Business Unit','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','ERM','Enterprise','Business','ERM','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','Application Module','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','Database','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Business Process','Enterprise','Business','Business Process','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Entity','Enterprise','Business','Entity','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Table','Enterprise','Business','Table','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Application','Enterprise','Business','Application','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Location','Enterprise','Business','Location','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Database','Enterprise','Business','Database','n/a','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// Update Category_ID

	// Update SL_Subject.Category_ID to SL_Category.ROWID
	$stmt = "
		UPDATE SL_Subject,SL_Category
		SET SL_Subject.Category_ID	= SL_Category.Category_ID
		WHERE
			SL_Subject.Category_TX	= SL_Category.Category_TX	AND
			SL_Subject.Category_ID	= 0";

	ProcCallDatabase($result,$stmt);

	// Update SL_Class.Category_ID to SL_Category.ROWID
	$stmt = "
		UPDATE SL_Class,SL_Category
		SET SL_Class.Category_ID	= SL_Category.Category_ID
		WHERE
			SL_Class.Category_TX	= SL_Category.Category_TX	AND
			SL_Class.Category_ID	= 0";

	ProcCallDatabase($result,$stmt);

	// Update SL_Type.Category_ID to SL_Category.ROWID
	$stmt = "
		UPDATE SL_Type,SL_Category
		SET SL_Type.Category_ID		= SL_Category.Category_ID
		WHERE
			SL_Type.Category_TX		= SL_Category.Category_TX	AND
			SL_Type.Category_ID		= 0";

	ProcCallDatabase($result,$stmt);

	// Update Subject_ID

	// Update SL_Class.Subject_ID to SL_Subject.ROWID
	$stmt = "
		UPDATE SL_Class,SL_Subject
		SET SL_Class.Subject_ID		= SL_Subject.Subject_ID
		WHERE
			SL_Class.Category_TX	= SL_Subject.Category_TX	AND
			SL_Class.Subject_TX		= SL_Subject.Subject_TX		AND
			SL_Class.Subject_ID		= 0";

	ProcCallDatabase($result,$stmt);

	// Update SL_Type.Subject_ID to SL_Subject.ROWID
	$stmt = "
		UPDATE SL_Type,SL_Subject
		SET SL_Type.Subject_ID		= SL_Subject.Subject_ID
		WHERE
			SL_Type.Category_TX		= SL_Subject.Category_TX	AND
			SL_Type.Subject_TX		= SL_Subject.Subject_TX		AND
			SL_Type.Subject_ID		= 0";

	ProcCallDatabase($result,$stmt);

	// Update Class_ID

	// Update SL_Type.Class_ID to SL_Class.ROWID
	$stmt = "
		UPDATE SL_Type,SL_Class
		SET SL_Type.Class_ID		= SL_Class.Class_ID
		WHERE
			SL_Type.Category_TX		= SL_Class.Category_TX		AND
			SL_Type.Subject_TX		= SL_Class.Subject_TX		AND
			SL_Type.Class_TX		= SL_Class.Class_TX			AND
			SL_Type.Class_ID		= 0";

	ProcCallDatabase($result,$stmt);
}

// *************************************************************************************************
// SECTION: Canned Query Functions
// *************************************************************************************************

// Execute and Display Database Query
function ProcExecCannedQuery($stmt,$returnloc) {
	global $g_main;

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"$returnloc\"
			style=\"color:black; width:180px;\">
	</FORM>
	<hr size=1 width=620 noshade align=left>";

	ProcCallDatabase($result,$stmt);

	// Display report results
	// Test for errors or zero records returned
	if ($result == 0):
		echo("<B>Error " . mysql_errno() . ": " . mysql_error() . "</B>");
	elseif (mysql_num_rows($result) == 0):
		echo("<B>Query executed successfully -- zero rows returned!</B>");
	else:
		// Display report header
		echo "
		<TABLE BORDER=1>
			<THEAD>
				<TR>";
					for ($i = 0; $i < mysql_num_fields($result); $i++) {
						echo"<TH>" . mysql_field_name($result,$i) . "</TH>";
						}
				echo "
				</TR>
			</THEAD>";
			// Display report body
			// Convert null to chr(160) a non space unprintable character
			// If the field is null the table cell will no show a box border
			// If the null is converted to a space chr(20) it is trimed
			// so the field is null again and does not display a cell border
			echo "
			<TBODY>";
					for ($i = 0; $i < mysql_num_rows($result); $i++) {
				echo"
				<TR>";
					$rowarray = mysql_fetch_row($result);
					for ($j = 0; $j < mysql_num_fields($result); $j++) {
						$display = $rowarray[$j];
						if ($display == ""){$display = chr(160);}
						echo"<TD>" . $display . "</TD>";
					}
				echo"
				</TR>";
				}
			echo "
			</TBODY>";
		echo "
		</TABLE>";
	endif;

	echo "
	<hr size=1 width=620 noshade align=left>
	<FORM METHOD=POST ACTION=$g_main>
		<input type=submit name=auggie value=\"$returnloc\"
			style=\"color:black; width:180px;\">
	</FORM>";
}

// *************************************************************************************************
// SECTION: JavaScript Functions (Non-PHP)
// *************************************************************************************************

?>

<script language="JavaScript">

	function JSopenReportWindow(URL) {
		popupWin = window.open(URL, 'Report',
		'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=1,resizable=1,width=675,height=600');
		popupWin.focus(); // bring window to front
	}

	function popup1(name){
	    var text = document.getElementsByName(name)[0].value;
	    alert(text);
	}

	function JSopenAboutWindow() {
		popupWin = window.open('sl_about.html', 'About',
		'scrollbars,dependent,width=500,height=300,left=100,top=100');
		popupWin.focus(); // bring window to front
	}

	function JSopenHelpWindow() {
		popupWin = window.open('sl_help.html', 'Help',
		'scrollbars,dependent,width=500,height=300,left=100,top=100');
		popupWin.focus(); // bring window to front
	}
	function JSopenHcatWindow(URL) {
		popupWin = window.open(URL, 'Table Details',
		'scrollbars,dependent,width=500,height=500,left=100,top=100');
		popupWin.focus(); // bring window to front
	}
	function JSopenLicenseWindow() {
		popupWin = window.open('sl_license.html', 'License',
		'scrollbars,dependent,width=500,height=300,left=100,top=100');
		popupWin.focus(); // bring window to front
	}

	function JSopenColorChartWindow() {
		popupWin = window.open('sl_colorchart.html', 'ColorChart',
		'scrollbars,dependent,width=500,height=300,left=100,top=100');
		popupWin.focus(); // bring window to front
	}



</script>

<?php

// *************************************************************************************************
// SECTION: (MAIN) Process Auggie Value and Vector to Function
// *************************************************************************************************

// Define variables on the first pass through
// to get rid of (not defined) error message
if (!isset($auggie)) {$auggie = "";}

if (!isset($_SESSION['s_key'])) {
	$_SESSION['s_date'] = "";
	$_SESSION['s_user'] = "";
	$_SESSION['s_key']  = "";
}


$_SESSION['s_user'] = "read";
$preauggie = substr($auggie,0,2);
$postauggie = substr($auggie,2);
if ($username != "") {
	$_SESSION['s_date'] = date("Ymd");
	$_SESSION['s_user'] = $username;
	$_SESSION['s_key']  = md5($username.date("myd"));

	ProcLogEvent($username,"LOGIN","");
	FormButtonsMainMenu();
	}

if ($_SESSION['s_user'] == "read") {
GenerateHeader("");
	echo " <FORM ACTION=$g_main METHOD=POST> ";

					echo "
					<table border=0>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=100
								NAME=name VALUE=\"$name\"
								style=\"color:black; font-family:Times; font-weight:normal;
								font-size:12px; width:510px; background-color:white\">
						</tr>
					</table>

					<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Now\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
										&nbsp;&nbsp;
										<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">


		</FORM>";

	}





// ---------------------------------------------------------- SECTION: Main Vector Table

if ($auggie == "Logoff"){
	ProcLogEvent($s_user,"LOGOFF","");
	SESSION_DESTROY();
	GenerateHeader("[Login] You have successfully logged off -- Please Login");
	FormLogin();
	exit();
}

else if ($auggie == "Main Menu"){
	GenerateHeader("[Main Menu] Select an option");
	FormButtonsMainMenu();
	exit();
}

else if ($auggie == "Cancel"){
	GenerateHeader("[Main Menu] Action Canceled -- Select an option");
	FormButtonsMainMenu();
	exit();
}

else if ($auggie == "Search" or $auggie == "Search Again"){
	GenerateHeader("[Search] Enter search criteria - &nbsp;
		<FONT color=red size=3>&#9830</FONT>&nbsp; fields are case insensitive wildcards");
	$category	= "";
	$subject	= "";
	$class		= "";
	$type		= "";
	$name		= "";
	$version	= "";
	$alias		= "";
	$desc		= "";
	$usage		= "";
	$techrules  = "";
	$comment	= "";
	$group		= "";
	$created	= "";
	$creator	= "";
	$changed	= "";
	$changer	= "";
	$status		= "";
	FormSearchObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Find Again"){
	GenerateHeaderLite("[Search Lite] Enter wildcard search text then press (Find Now)");
	$findtext	= "";
	FormSearchLite($findtext);
	exit();
}

else if ($auggie == "New Entry"){
	GenerateHeader("[Add] Please fill in fields - &nbsp;<FONT color=red size=4>&#9830</FONT>
		&nbsp;fields are required.");
	$name		= "";
	$version	= "1.000";
	$alias		= "";
	$desc		= "";
	$usage		= "";
	$techrules  = "";
	$comment	= "";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$group		= "General";
	$status		= "Active";
	FormAddObject($name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
	exit();
}

else if ($auggie == "Add Property"){
	GenerateHeader("[Select Property Category]
		Select a Category from the dropdown and continue.");
	$category	= "";
	FormSelectPropCategory($category);
	exit();
}

else if ($auggie == "Select Property Subject"){
	GenerateHeader("[Select Property Subject]
		Select a Subject from the dropdown and continue.");
	$subject	= "";
	FormSelectPropSubject($category,$subject);
	exit();
}

else if ($auggie == "Select Property Class"){
	GenerateHeader("[Select Property Class]
		Select a Class from the dropdown and continue.");
	$class		= "";
	FormSelectPropClass($category,$subject,$class);
	exit();
}

else if ($auggie == "Enter New Property"){
	GenerateHeader("[Add Property]
		Enter the new Property name and confirm --
		&nbsp;<FONT color=red size=4>&#9830</FONT> fields are required.");
	$property		= "";
	$default		= "";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";
	FormAddProperty($category,$subject,$class,$property,$default,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Add Category"){
	GenerateHeader("[Add Category] All fields are required.");
	$category	= "";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";
	FormAddCategory($category,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Add Subject"){
	GenerateHeader("[Add Subject] All fields are required.");
	$category	= "";
	$subject	= "";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";
	FormAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Add Class"){
	GenerateHeader("[Select Class Category]");
	$category	= "";
	FormSelectClassCategory($category);
	exit();
}

else if ($auggie == "Select Class Subject"){
	GenerateHeader("[Select Class Subject]");
	$subject	= "";
	FormSelectClassSubject($category,$subject);
	exit();
}

else if ($auggie == "Enter New Class"){
	GenerateHeader("[Add Class] All fields are required.");
	$class		= "";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";
	FormAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Add Type"){
	GenerateHeader("[Select Type Category]");
	$category	= "";
	FormSelectTypeCategory($category);
	exit();
}

else if ($auggie == "Select Type Subject"){
	GenerateHeader("[Select Type Subject]");
	$subject	= "";
	FormSelectTypeSubject($category,$subject);
	exit();
}

else if ($auggie == "Select Type Class"){
	GenerateHeader("[Select Type Class] All fields are required.");
	$class		= "";
	FormSelectTypeClass($category,$subject,$class);
	exit();
}

else if ($auggie == "Enter New Type"){
	GenerateHeader("[Add Type] All fields are required.");
	$type		= "";
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";
	FormAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Add Association"){
	GenerateHeader("[Select Parent Category]");
	$category	= "";
	FormSelectParentCategory($category);
	exit();
}

else if ($auggie == "Select Parent Subject"){
	GenerateHeader("[Select Parent Subject]");
	$subject	= "";
	FormSelectParentSubject($category,$subject);
	exit();
}

else if ($auggie == "Select Parent Class"){
	GenerateHeader("[Select Parent Class]");
	$p_class	= "";
	FormSelectParentClass($category,$subject,$p_class);
	exit();
}

else if ($auggie == "Select Child Class"){
	GenerateHeader("[Select Child Class]");
	FormAddAssociation($category,$subject,$p_class,$c_class);
	exit();
}

else if ($auggie == "Confirm Object Add"){

	// Set variables if not assigned by user to avoid NOTICE: message
	if (!ISSET($lstCategory))	$lstCategory =-99;
	if (!ISSET($lstSubject))	$lstSubject =-99;
	if (!ISSET($lstClass))		$lstClass =-99;
	if (!ISSET($lstType))		$lstType =-99;

	FormAddObjectProperties($lstCategory,$lstSubject,$lstClass,$lstType,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
	exit();
}

else if ($auggie == "Parent"){
	GenerateHeader("[Parent Class] Select available Parent Class");
	FormObjectParentClass($rowid,$category, $subject, $class, $type, $name, $version);
	exit();
}

else if ($auggie == "Confirm Parent Class"){
	// Check if class variables is null
	if (!$p_class) {
		GenerateHeader("[Parent Class] <font color=red><b>Parent Class cannot be null</b></font>");
		FormObjectParentClass($c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version);
		exit();
	}
	GenerateHeader("[Parent Name] Select available Parent Name");
	FormAddObjectParent($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status);
	exit();
}

else if ($auggie == "Child"){
	GenerateHeader("[Child Class] Select available Child Class");
	FormObjectChildClass($rowid,$category, $subject, $class, $type, $name, $version);
	exit();
}

else if ($auggie == "Confirm Child Class"){
	// Check if class variables is null
	if (!$c_class) {
		GenerateHeader("[Child Class] <font color=red><b>Child Class cannot be null</b></font>");
		FormObjectChildClass($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version);
		exit();
	}
	GenerateHeader("[Child Name] Select available Child Name");
	FormAddObjectChild($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status);
	exit();
}

else if ($preauggie == "R-"){
	GenerateHeader("[Delete Relationship] Confirm the deletion of this relationship");
	FormDeleteRelationship($postauggie,$rowid);
	exit();
}

else if ($auggie == "Reporting"){
	GenerateHeader("[Reporting] Enter a SELECT statement or select a canned report");
	FormButtonsReporting();
	exit();
}

else if ($auggie == "Administration"){
	GenerateHeader("[Administration] Access privileges are determined by your account role");
	FormButtonsAdmin();
	exit();
}

else if ($auggie == "Your Account"){
	GenerateHeader("[Your Account] Manage your Your Account and password.");
	FormButtonsUserAccount();
	exit();
}

else if ($auggie == "Manage User"){
	GenerateHeader("[Manage User] Remember to email user after changing account privileges.");
	FormButtonsManageUser();
	exit();
}
else if ($auggie == "View HCatalog"){
	GenerateHeader("[View HCatalog] via REST API");
	FormButtonsHCatalog();
	exit();
}
else if ($auggie == "Management Reporting"){
	GenerateHeader("[Management Reporting]");
	FormButtonsManagementReporting();
	exit();
}

else if ($auggie == "Manage Schema"){
	GenerateHeader("[Manage Schema] Use Caution -- Feature misuse can be dangerous to data.");
	FormButtonsManageSchema();
	exit();
}

else if ($auggie == "Modify Configuration"){
	GenerateHeader("[Modify Configuration]");
	FormModifyConfiguration();
	exit();
}

else if ($auggie == "Flat File Adapters"){
	GenerateHeader("[Flat File Adapters]");
	FormButtonsFlatFileAdapters();
	exit();
}

else if ($auggie == "Backup Restore Adapters"){
	GenerateHeader("[Backup Restore Adapters]");
	FormButtonsBackupRestoreAdapters();
	exit();
}

else if ($auggie == "Database Adapters"){
	GenerateHeader("[Database Adapters]");
	FormButtonsDatabaseAdapters();
	exit();
}

else if ($auggie == "Modify"){
	GenerateHeader("[Modify] Edit entry and select Confirm Modify");
	FormModifyObject($rowid);
	exit();
}

else if ($auggie == "Copy"){
	GenerateHeader("[Copy] Edit entry and select Confirm Object Copy");
	FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
	exit();
}

else if ($auggie == "Delete"){
	GenerateHeader("[Delete] Confirm delete of the following entry");
	FormDeleteObject($rowid);
	exit();
}

else if ($auggie == "Confirm Delete"){
	ProcDeleteObject($rowid);
	exit();
}

else if ($auggie == "Confirm Profile Change"){
	ProcModifyYourProfile($userid,$firstname,$lastname,$title,
		$email,$phone,$company,$dept,$url,$rels,$news);
	exit();
}

else if ($auggie == "Confirm User Change"){
	ProcModifyUserProfile($userid,$firstname,$lastname,$title,
		$email,$phone,$company,$dept,$url,$rels,$news,$status);
	exit();
}

else if ($auggie == "Confirm User Password Change"){
	ProcModifyUserPassword($newpass,$confirmpass,$userid);
	exit();
}

else if ($auggie == "Confirm Password Change"){
	ProcModifyYourPassword($oldpass,$newpass,$confirmpass);
	exit();
}

else if ($auggie == "Confirm Object Modify"){

	// Implode arrays variables -- if there are extended properties
	if ($eprow > -1) {
		$epnamex	= implode("&",$epname);		// compress array to be passed as a string
		$epvaluex	= implode("&",$epvalue);	// compress array to be passed as a string
	}
	else {
		$epnamex	= "";
		$epvaluex	= "";
	}

	ProcModifyObject($rowid,$category,$subject,$class,$type,$name,$n_name,$alias,$desc,
	$usage,$techrules,$comment,$group,$status,$eprow,$epnamex,$epvaluex);
	exit();
}

else if ($auggie == "Confirm Object Copy"){

	// Implode arrays variables -- if there are extended properties
	if ($eprow > -1) {
		$epnamex	= implode("&",$epname);		// compress array to be passed as a string
		$epvaluex	= implode("&",$epvalue);	// compress array to be passed as a string
	}
	else {
		$epnamex	= "";
		$epvaluex	= "";
	}

	ProcCopyObject($category,$subject,$class,$type,$name,$n_name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
	exit();
}

else if ($auggie == "Confirm Config Modify"){
	ProcModifyConfig($colorbkg,$colormsg,$logoprim,$readonly,$lite,
		$adhocsql,$maxrows,$loginmemo,$configpath,$dbbinpath,$oraclestr,$timeout);
	exit();
}

else if ($auggie == "Reset to Default"){
	$colorbkg		= "E0FFFF";
	$colormsg		= "FFFF66";
	$logoprim		= "superluminate_logo.gif";
	$readonly		= "Y";
	$lite			= "Y";
	$adhocsql		= "Y";
	$maxrows		= 2000;
	$loginmemo		= "Contact John Doe at jdoe@devnull.com for User ID and administration questions.";
	$configpath		= "C:/apache/htdocs/sl/filestore/";
	$dbbinpath		= "C:/mysql/bin/";
	$oraclestr		= "(DESCRIPTION= (ADDRESS= (PROTOCOL= TCP) (HOST= $host) (PORT= $port)) (CONNECT_DATA= (SID= $sid)))";
	$timeout		= 50;
	ProcModifyConfig($colorbkg,$colormsg,$logoprim,$readonly,$lite,
		$adhocsql,$maxrows,$loginmemo,$configpath,$dbbinpath,$oraclestr,$timeout);
	exit();
}

else if ($auggie == "Confirm Delete Relationship"){
	ProcDeleteRelationship($p_rowid,$c_rowid,$rowid);
	exit();
}

else if ($auggie == "Select Category"){
	ProcSelectCategory();
	exit();
}

else if ($auggie == "Select Subject"){
	ProcSelectSubject();
	exit();
}

else if ($auggie == "Select Class"){
	ProcSelectClass();
	exit();
}

else if ($auggie == "Select Type"){
	ProcSelectType();
	exit();
}

else if ($auggie == "Select Association"){
	ProcSelectAssociation();
	exit();
}

else if ($auggie == "Select Property"){
	ProcSelectProperty();
	exit();
}

else if ($auggie == "Confirm User Add"){
	ProcAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Add Parent"){
	// Check if name variables is null
	if (!$p_name) {
		GenerateHeader("[Parent Name] <font color=red><b>Parent Name cannot be null</b></font>");
		FormAddObjectParent($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status);
		exit();
	}
	ProcAddObjectParent($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Add Child"){
	// Check if name variables is null
	if (!$c_name) {
		GenerateHeader("[Child Name] <font color=red><b>Child Name cannot be null</b></font>");
		FormAddObjectChild($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status);
		exit();
	}
	ProcAddObjectChild($p_rowid,$p_category,$p_subject,$p_class,
		$p_type,$p_name,$p_version,$c_rowid,$c_category,$c_subject,
		$c_class,$c_type,$c_name,$c_version,$created,$creator,
		$changed,$changer,$status);
	exit();
}

else if ($auggie == "Insert New Object"){

	// Implode arrays variables
	$epnamex	= implode("&",$epname);		// compress array to be passed as a string
	$epvaluex	= implode("&",$epvalue);	// compress array to be passed as a string

	ProcAddObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
	exit();
}

else if ($auggie == "Confirm Property Add"){
	ProcAddProperty($category,$subject,$class,$property,$default,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Category Add"){
	ProcAddCategory($category,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Subject Add"){
	ProcAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Class Add"){
	ProcAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Type Add"){
	ProcAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Confirm Association Add"){
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";
	ProcAddAssociation($category,$subject,$p_class,$c_class,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Search Now"){
	ProcSearchObject($category,$subject,$class,$type,$name,$version,
		$alias,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status);
	exit();
}

else if ($auggie == "Find Now"){
	ProcSearchLite($findtext,$inglossary,$outglossary);
	exit();
}

else if ($preauggie == "O-"){
	GenerateHeader(
		"[Selection] Select (SEARCH AGAIN) for new search.");
	FormDisplayObject($postauggie);
	exit();
}

else if ($preauggie == "L-"){
	GenerateHeaderLite(
		"[Display Lite] Select (FIND AGAIN) for new search.");
	FormDisplayLite($postauggie);
	exit();
}

else if ($auggie == "Bulk Report"){
	ProcBulkReport($reportstmt);
	exit();
}

else if ($auggie == "Execute Query"){
	ProcAdHocQuery($query);
	exit();
}

else if ($auggie == "System Settings"){
	GenerateHeader(
		"[System Settings] Below are the current Apache, MySQL, and PHP system settings");
	ProcSystemSettings();
	exit();
}

else if ($auggie == "Modify Your Profile"){
	GenerateHeader(
		"[Modify Your Profile] Modify User Profile Record (First name field must contain a value)");
	FormModifyYourProfile();
	exit();
}

else if ($auggie == "Modify Your Password"){
	GenerateHeader("[Modify Your Password] Enter New User Password and Confirmation");
	FormModifyYourPassword();
	exit();
}

else if ($auggie == "Add User"){
	GenerateHeader(
		"[Admin Add User] Add User Profile Record (First name and password are required)");
	if (isset($userid)) {
		FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news,$created,
		$creator,$changed,$changer,$status);
	}
	else {
		$userid		= '';
		$usertype	= 'User';
		$password	= '';
		$firstname	= '';
		$lastname	= '';
		$title		= '';
		$email		= '';
		$phone		= '';
		$company	= '';
		$dept		= '';
		$url		= '';
		$rels		= 'Yes';
		$news		= 'Yes';
		FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news);
	}
	exit();
}

else if ($auggie == "Select Profile to Modify"){
	GenerateHeader("[Admin Select User] Enter the User ID to be updated");
	FormSelectUserProfile();
	exit();
}

else if ($auggie == "Modify User Profile"){
	GenerateHeader("[Admin Modify Profile] Modify Profile (First Name is a required field)");
	FormModifyUserProfile();
	exit();
}

else if ($auggie == "Select Password to Modify"){
	GenerateHeader("[Admin Select Password] Enter the User ID to be updated");
	FormSelectUserPassword();
	exit();
}

else if ($auggie == "Modify Object Creator"){
	GenerateHeader("[Admin Modify Owner] Select current and new object owners");
	FormModifyObjectCreator();
	exit();
}

else if ($auggie == "Confirm Creator Modify"){
	ProcModifyObjectCreator($creator, $n_creator);
	exit();
}

else if ($auggie == "Modify User Password"){
	GenerateHeader("[Admin Modify Password] Modify Password (New and Confirm must match)");
	FormModifyUserPassword();
	exit();
}

else if ($auggie == "Version"){
	ProcVersionObject($rowid,$category,$subject,$class,$type,$name,$version,
			$alias,$desc,$usage,$techrules,$comment,$group,$created,$creator,
			$changed,$changer,$status);
	exit();
}

// Manage Schema Category

else if ($preauggie == "X-"){
	GenerateHeader("[Delete Schema Category] Confirm the deletion of this Schema Category");
	FormDeleteSchemaCategory($postauggie);
	exit();
}

else if ($auggie == "Confirm Category Delete"){
	ProcDeleteSchemaCategory($category);
	exit();
}

else if ($preauggie == "K-"){
	GenerateHeader("[Modify Schema Category] Confirm modification of this Schema Bsuiness Segment");
	FormModifySchemaCategory($postauggie);
	exit();
}

else if ($auggie == "Confirm Category Modify"){
	ProcModifySchemaCategory($category,$n_category,$save_rowid);
	exit();
}

// Manage Schema Subject

else if ($preauggie == "J-"){
	GenerateHeader("[Delete Schema Subject] Confirm the deletion of this Schema Subject");
	FormDeleteSchemaSubject($postauggie);
	exit();
}

else if ($auggie == "Confirm Subject Delete"){
	ProcDeleteSchemaSubject($category,$subject);
	exit();
}

else if ($preauggie == "I-"){
	GenerateHeader("[Modify Schema Subject] Confirm the modification of this Schema Subject");
	FormModifySchemaSubject($postauggie);
	exit();
}

else if ($auggie == "Confirm Subject Modify"){
	ProcModifySchemaSubject($category,$subject,$n_subject,$save_rowid);
	exit();
}

// Manage Schema Class

else if ($preauggie == "H-"){
	GenerateHeader("[Delete Schema Class] Confirm the deletion of this Schema Class");
	FormDeleteSchemaClass($postauggie);
	exit();
}

else if ($auggie == "Confirm Class Delete"){
	ProcDeleteSchemaClass($category,$subject,$class);
	exit();
}

else if ($preauggie == "G-"){
	GenerateHeader("[Modify Schema Class] Confirm the modification of this Schema Class");
	FormModifySchemaClass($postauggie);
	exit();
}

else if ($auggie == "Confirm Class Modify"){
	ProcModifySchemaClass($category,$subject,$class,$n_class,$save_rowid);
	exit();
}

// Manage Schema Type

else if ($preauggie == "F-"){
	GenerateHeader("[Delete Schema Type] Confirm the deletion of this Schema Type");
	FormDeleteSchemaType($postauggie);
	exit();
}

else if ($auggie == "Confirm Type Delete"){
	ProcDeleteSchemaType($category,$subject,$class,$type);
	exit();
}

else if ($preauggie == "E-"){
	GenerateHeader("[Modify Schema Type] Confirm the modification of this Schema Type");
	FormModifySchemaType($postauggie);
	exit();
}

else if ($auggie == "Confirm Type Modify"){
	ProcModifySchemaType($category,$subject,$type,$class,$n_type,$save_rowid);
	exit();
}

// Manage Schema Property

else if ($preauggie == "B-"){
	GenerateHeader("[Delete Schema Property] Confirm the deletion of this Schema Property");
	FormDeleteSchemaProp($postauggie);
	exit();
}

else if ($auggie == "Confirm Property Delete"){
	ProcDeleteSchemaProp($category,$subject,$class,$property);
	exit();
}

else if ($preauggie == "A-"){
	GenerateHeader("[Modify Schema Property] Confirm modification of this Schema Property");
	FormModifySchemaProp($postauggie);
	exit();
}

else if ($auggie == "Confirm Property Modify"){
	ProcModifySchemaProp(
		$category,$subject,$class,$property,$n_property,$default,$n_default,$save_rowid);
	exit();
}

// Manage Schema Association

else if ($preauggie == "D-"){
	GenerateHeader("[Delete Schema Association] Confirm the deletion of this Schema Association");
	FormDeleteSchemaAssoc($postauggie);
	exit();
}

else if ($auggie == "Confirm Association Delete"){
	ProcDeleteSchemaAssoc($p_category,$p_subject,$p_class,$c_class);
	exit();
}

// ---------------------------------------------------------- SECTION: Vectors for Canned Queries

else if ($auggie == "DB Processes"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SHOW PROCESSLIST";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "DB Status"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SHOW STATUS";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "DB Variables"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SHOW VARIABLES";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Event Log Today"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT ROWID, User_ID, Event_CD, Remote_IP_Addr_TX,
			Remote_Agent, Event_TX, Created_DS FROM SL_Event
			where date_format(Created_DS,'%Y-%m-%d') = current_date()";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Event Log One Week"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT ROWID, User_ID, Event_CD, Remote_IP_Addr_TX,
			Remote_Agent, Event_TX, Created_DS FROM SL_Event
			where date_format(Created_DS,'%Y-%m-%d') >
			date_sub(current_date(), interval 7 day)";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Event Log One Month"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT ROWID, User_ID, Event_CD, Remote_IP_Addr_TX,
			Remote_Agent, Event_TX, Created_DS FROM SL_Event
			where date_format(Created_DS,'%Y-%m-%d') >
			date_sub(current_date(), interval 30 day)";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "SuperLuminate Metadata"){
	GenerateHeader(
		"[SuperLuminate Metadata] Load SuperLuminate Self Defining Metadata");
	ProcLoadMetadata();
	exit();
}

else if ($auggie == "SuperLuminate Metaschema"){
	GenerateHeader(
		"[SuperLuminate Metaschema] Load SuperLuminate Business Metaschema");
	ProcLoadMetaschemaActive();
	exit();
}

else if ($auggie == "Import MySQL Catalog"){
	ProcImportMySQLCatalog($host,$user,$pass,$schema,$port,$prefix,$creator,$category,$subject,$type);
	exit();
}

else if ($auggie == "Import Oracle Catalog"){
	ProcImportOracleCatalog($host,$sid,$port,$prefix,$user,$pass,$schema,$creator,$category,$subject,$type);
	exit();
}





//***** WIP
else if ($auggie == "Import SQL Server Catalog"){
	ProcImportSQLServerCatalog($host,$user,$pass,$schema,$prefix,$creator,$category,$subject,$type);
	exit();
}






else if ($auggie == "Import Object"){
	GenerateHeader(
		"[Import Object] Import file --> $objectloadfile");
	ProcImportObject($objectloadfile,$userid);
	exit();
}

else if ($auggie == "Export Object"){
	GenerateHeader(
		"[Export Object] Export to file --> $objectexportfile");
	ProcExportObject($objectexportfile);
	exit();
}

else if ($auggie == "Backup Database"){
	GenerateHeader(
		"[Backup Database] Select (Backup Restore Adapters) to return to previous page");
	flush();
	ProcBackupDatabase($backupfile);
	exit();
}

else if ($auggie == "Restore Database"){
	GenerateHeader(
		"[Restore Database] Database restored from file $restorefile");
	flush();
	ProcRestoreDatabase($restorefile);
	exit();
}

else if ($auggie == "Bus Segment Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Category_TX BusinessSegments, COUNT(*) Records
				FROM SL_Object GROUP BY Category_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Subject Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Subject_TX Subjects, COUNT(*) Records
				FROM SL_Object GROUP BY Subject_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Class Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Class_TX Classes, COUNT(*) Records
				FROM SL_Object GROUP BY Class_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Category Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Type_TX Category, COUNT(*) Records
				FROM SL_Object GROUP BY Type_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Creator Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Creator_ID Creators, COUNT(*) Records
				FROM SL_Object GROUP BY Creator_ID";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Changer Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Changer_ID Changers, COUNT(*) Records
				FROM SL_Object GROUP BY Changer_ID";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Group Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Group_CD Groups, COUNT(*) Records
				FROM SL_Object GROUP BY Group_CD";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Status Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Status_CD Status, COUNT(*) Records
				FROM SL_Object GROUP BY Status_CD";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Object Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Category_TX Category,Subject_TX Subject,Class_TX Class,
		Type_TX Type,count(*) Records FROM SL_Object GROUP BY Category_TX,
		Subject_TX,Class_TX,Type_TX ORDER BY Category_TX,Subject_TX,Class_TX,Type_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Relationship Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT
		P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,
		C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,count(*) Records
		FROM SL_Rel GROUP BY
		P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,
		C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Class Hierarchy"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT DISTINCT
		Category_TX 'Category', Subject_TX 'Subject', Class_TX 'Class', Type_TX 'Type'
		FROM SL_Type
		ORDER BY Category_TX,Subject_TX,Class_TX,Type_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Association List"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT DISTINCT
		P_Category_TX 'parent Category', P_Subject_TX 'parent Subject', P_Class_TX 'parent Class',
		C_Category_TX 'child Category', C_Subject_TX 'child Subject', C_Class_TX 'child Class'
		FROM SL_Assoc
		ORDER BY P_Category_TX, P_Subject_TX, P_Class_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Add Mapping"){

	$TranRules 		= $_POST['Tranrules'];
	$Src_category 	= $_POST['Src_category'];
	$Src_subject 	= $_POST['Src_subject'];
	$Src_table 		= $_POST['Src_table'];
	$Src_name 		= $_POST['Src_name'];
	$Trg_category 	= $_POST['Trg_category'];
	$Trg_subject 	= $_POST['Trg_subject'];
	$Trg_table 		= $_POST['Trg_table'];
	$Trg_name 		= $_POST['Trg_name'];

	$stmt = "

		Insert into mappingspec (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,
		Src_category_TX,Src_subject_TX,Src_class_TX,Src_type_TX,Src_name_TX,Src_table,Src_Field,Src_location,
		Trg_category_TX,Trg_subject_TX,Trg_class_TX,Trg_type_TX,Trg_name_TX,Trg_table,Trg_Field,Trg_location,
		Tran_rules,Created_DS,Creator_ID)
		VALUES ('".$category."',
				'".$subject."',
				'".$class."',
				'".$type."',
				'".$name."',
				'".$Src_category."',
				'".$Src_subject."',
				'Column',
				'Customer',
				'".$Src_name."',
				'".$Src_table."',
				'".$Src_name."',
				'Dublin3',
				'".$Trg_category."',
				'".$Trg_subject."',
				'Column',
				'Customer',
				'".$Trg_name."',
				'".$Trg_table."',
				'".$Trg_name."',
				'Hadoop Bus Layer',
				'".$TranRules."',
				'".$created."',
			'".$creator."')";


	//ProcExecCannedQuery($stmt,"");
	ProcCallDatabase($result,$stmt);

		GenerateHeader(
			"[Selection] Mapping created successfully.");

	exit();

}

else if ($auggie == "Extended Props"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT DISTINCT
		T.Category_TX 'Category', T.Subject_TX 'Subject', T.Class_TX 'Class',
		P.Property_TX 'Property', P.Default_TX 'Default'
		FROM SL_Type T, SL_Prop P
		WHERE
		T.Category_TX = P.Category_TX AND
		T.Subject_TX = P.Subject_TX AND
		T.Class_TX = P.Class_TX
		ORDER BY T.Category_TX, T.Subject_TX, T.Class_TX, P.Property_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

// ---------------------------------------------------------- SECTION: Vector Error

// If auggie value is not in the vector table generate an error condition
else if ($auggie !== ""){
	$message = "[$auggie/$preauggie/$postauggie]
		<br>An application error has occured... (sl_err_001)";
	ProcErrMsg($message);
	exit();
}














function MappingSpecDisplay() {



	include ("phpmydatagrid.class.php");

	$objGrid = new datagrid;

	$objGrid -> friendlyHTML();

	$objGrid -> pathtoimages("./image/");

	$objGrid -> closeTags(true);

	$objGrid -> form('employee', true);

	$objGrid -> methodForm("post");

	$objGrid -> searchby("User_id,first_name_tx,last_name_tx,Title_TX");

	$objGrid -> linkparam("sess=".$_REQUEST["sess"]."&username=".$_REQUEST["username"]);

	$objGrid -> decimalDigits(2);

	$objGrid -> decimalPoint(",");

	$objGrid -> conectadb("localhost", "root", "sbj1234", "sl_prod");

	$objGrid -> tabla ("sl_user");

	/* Allow Add, edit, delete or view records */
	$objGrid -> buttons(true,true,true,true);

	/* Keyfield must be defined to indentify each row */
	$objGrid -> keyfield("User_id");

	/* A code is related with some transactions. so is very dificult to someone to try to do unauthorized process */
	/* There are a internal code but you can made it strong by setting this function" */
	$objGrid -> salt("Some Code4Stronger(Protection)");

	$objGrid -> TituloGrid("phpMyDataGrid Sample page");

	$objGrid -> FooterGrid("<div style='float:left'>&copy; 2007 Gurusistemas.com</div>");

	$objGrid -> datarows(5);

	$objGrid -> paginationmode('links');

	$objGrid -> orderby("Last_name_TX", "DESC");

	$objGrid -> noorderarrows();

	$objGrid -> FormatColumn("User_id", "User ", 5, 5, 1, "50", "center");
		$objGrid -> FormatColumn("First_name_tx", "Name", 30, 30, 0, "150", "left");
		$objGrid -> FormatColumn("last_name_tx", "Last name", 30, 30, 0, "150", "left");
		$objGrid -> FormatColumn("Title_TX", "Title", 5, 5, 0, "50", "right");
		//$objGrid -> FormatColumn("Phone_tx", "Phone", 10, 10, 0, "100", "center", "date:dmy:/");
		$objGrid -> FormatColumn("status_cd", "Status", 5, 5, 0, "60", "left");

	$objGrid -> where ("Status_CD = 'Active'");

	$objGrid -> setHeader();


	$objGrid -> grid();

	$objGrid -> desconectar();

}

function ProcAddMapping($category,$subject,$class,$type,$name,$Src_category,$Src_subject,$Src_class,$Src_type,
$Src_name,$Src_table,$Src_name,$Src_location,$Trg_category,$Trg_subject,$Trg_class,$Trg_type,$Trg_name,
$Trg_table,$Trg_name,$Trg_location,$Trg_location,$Tran_rules,$created,$creator,$changed,$changer) {

$stmt = "Insert into mappingspec
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Src_category_TX,
		 Src_subject_TX,Src_class_TX,Src_type_TX,Src_name_TX,Src_table,
		 Src_Field,Src_location,Trg_category_TX,Trg_subject_TX,Trg_class_TX,
		 Trg_type_TX,Trg_name_TX,Trg_table,Trg_Field,Trg_location,Tran_rules,
		 Created_DS,Creator_ID,Changed_DS,Changer_ID)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$name."', '".
			$Src_category."', '".
			$Src_subject."', '".
			$Src_class."', '".
			$Src_type."', '".
			$Src_name."', '".
			$Src_table."', '".
			$Src_name."', '".
			$Src_location."','".
			$Trg_category."', '".
			$Trg_subject."', '".
			$Trg_class."', '".
			$Trg_type."', '".
			$Trg_name."', '".
			$Trg_table."', '".
			$Trg_name."', '".
			$Trg_location."','".
			$Trg_location."','".
			$Tran_rules."','".
			$created."', '".
			$creator."', '".
			$changed."', '".
			$changer."')";

	ProcCallDatabase($result,$stmt);
	}

function mappingspecaddobjectSRC($subject){



		$stmt = "SELECT Category_TX FROM SL_Category where Category_ID <> '-99' ";

			ProcCallDatabase($result,$stmt);

			echo "
					<select name=Src_category id=sc style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
								{
									$myrow = mysql_fetch_row($result);

									printf("<option value='$myrow[0]'>$myrow[0]");
								}

				mysql_free_result($result);
echo " </select>";


$stmt = "SELECT Subject_TX FROM SL_Subject where Category_TX = 'Pharmaceutical-PD' ";
//$stmt = "SELECT Subject_TX FROM SL_Subject where Category_TX = document.getElementById('sc').value";



			ProcCallDatabase($result,$stmt);

			echo "
			 &nbsp;&nbsp;
			<select name=Src_subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysql_free_result($result);

echo " </select>";
$stmt = "SELECT Name_TX FROM SL_Object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Table'";

			ProcCallDatabase($result,$stmt);

			echo "
			 &nbsp;&nbsp;
			<select name=Src_table
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysql_free_result($result);

echo " </select>";
$stmt = "SELECT Name_TX FROM SL_Object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Column'";

							ProcCallDatabase($result,$stmt);

							echo "
							 &nbsp;&nbsp;
							<select name=Src_name
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:150px; background-color:white\">";
								printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
								{
									$myrow = mysql_fetch_row($result);
									printf("<option value='$myrow[0]'>$myrow[0]");
								}
				mysql_free_result($result);

}

function mappingspecaddobjectTRG($subject){



		$stmt = "SELECT Category_TX FROM SL_Category where Category_ID <> '-99' ";

			ProcCallDatabase($result,$stmt);

			echo "
					<select name=Trg_category style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
								{
									$myrow = mysql_fetch_row($result);

									printf("<option value='$myrow[0]'>$myrow[0]");
								}

				mysql_free_result($result);
echo " </select>";


$stmt = "SELECT Subject_TX FROM SL_Subject where Category_TX = 'Pharmaceutical-PD' ";

			ProcCallDatabase($result,$stmt);

			echo "
			 &nbsp;&nbsp;
			<select name=Trg_subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysql_free_result($result);

echo " </select>";
$stmt = "SELECT Name_TX FROM SL_Object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Table'";

			ProcCallDatabase($result,$stmt);

			echo "
				<select name=Trg_table	style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
				{
					$myrow = mysql_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysql_free_result($result);

echo " </select>$subject1";
$stmt = "SELECT Name_TX FROM SL_Object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Column'";

							ProcCallDatabase($result,$stmt);

							echo "
							 &nbsp;&nbsp;
							<select name=Trg_name
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:150px; background-color:white\">";
								printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysql_num_rows($result);$recordcount++)
								{
									$myrow = mysql_fetch_row($result);
									printf("<option value='$myrow[0]'>$myrow[0]");
								}
				mysql_free_result($result);

}


function AddMapping(){

$stmt = "
			Insert into SL_User (User_ID)
				VALUES (document.getElementById('Tranrules').value)";

}



// *************************************************************************************************
// SECTION: End Of File
// *************************************************************************************************
?>