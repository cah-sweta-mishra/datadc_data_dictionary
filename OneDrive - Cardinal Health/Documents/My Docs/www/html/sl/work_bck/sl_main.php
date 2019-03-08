<?php
// sl_main.php
// created 23-Apr-2003 (pjn)
// updated 17-Feb-2012 (pjn)
// (c)Copyright 2003-2012 SuperLuminate, All Rights Reserved

error_reporting(0);

  
/* ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL); */
 


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
// FormButtonsBulkUploadMappings		Bulk Upload Mappings
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
include("appFunctions/sl_ddl_functions.php");
include("appFunctions/sl_dml_functions.php");
include("appFunctions/sl_business_functions.php");


$ddl = new Sl_ddl_functions();
$dml = new Sl_dml_functions();
$business = new Sl_business_functions();


// Configuration variables

// Set default time zone to eliminate time zone warning message
// Invalid function on earler versions of PHP

if (version_compare(PHP_VERSION, '5', '>')) date_default_timezone_set("America/Los_Angeles");

// Set session variables
// added @ in front of start_session to suppress garbage collection error message every 20 minutes
// Notice: session_start() [function.session-start]: ps_files_cleanup_dir: opendir
// according to PHP blogs this is a known bug that has no special fix
if (!isset($_SESSION))
  {
    @session_start();
    @session_start();
  }
ini_set('session_save_path', './session');
session_save_path("./session");
//@session_start();

// Save query string (value after ? in URL) to be used to access SL Lite
	echo $g_query = $_SERVER['QUERY_STRING'];

// If look-and-feel configuration values not set lookup in database
if (!isset($g_colorbkg)) {

	global $g_host, $g_user, $g_pass,$g_database;
	//$conn = mysqli_connect($g_host, $g_user, $g_pass);
	$result= mysqli_connect($g_host, $g_user, $g_pass, $g_database);
	// Check to see if the database exists -- if not create it and load defaults
	// Connect to host to see if globals are correct
	if (!($link=mysqli_connect($g_host, $g_user, $g_pass, $g_database))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<FONT  SIZE=5 FACE=arial COLOR=#CC0000S>
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			[Error] error connecting to database
			<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Correct errors in sl_globals.php file and continue.
			<P>
		</FONT>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:180px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		</FORM>";
		exit();
	}

	// Select the Database -- if not found create database (new installation)
	if (!($result=mysqli_select_db($link, $g_database))) {

		// Create SuperLuminate database
		mysqli_query("CREATE DATABASE $g_database",$link);

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
		<FORM ACTION=$g_main METHOD=POST>
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
		from sl_config where Config_ID = 'Default'";

	ProcCallDatabase($result,$stmt);

	$row = mysqli_fetch_object($result);

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

	mysqli_free_result($result);

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

	</HEAD>
	<BODY TEXT=#00000 BGCOLOR=#$g_colorbkg LINK=#0000EE VLINK=#551A8B ALINK=#FF0000\">
		<TABLE WIDTH=600 CELLPADDING=3 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=left>
					<IMG SRC=image/$g_logoprim>
					&nbsp;&nbsp;
					<FONT SIZE=-1>1.062018</FONT>
				</TD>
				<TD align=right>
					<FONT SIZE=1 FACE=arial COLOR=black>
						<a href=$g_main><u>Main Menu</u></a>&nbsp;&nbsp;&nbsp;
						<a href=javascript:JSopenAboutWindow();><u>About</u></a>&nbsp;&nbsp;&nbsp;
						<a href=javascript:JSopenSearchTips();><u>Search Tips</u></a>&nbsp;&nbsp;&nbsp;
						<a href='mailto:GMB-PMOD2-DataLeads@cardinalhealth.com?subject=New Incident&body=Please tell us how we can help' ><u>Help</u></a>

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
					<FONT SIZE=-1>1.062018</FONT>
				</TD>
				<TD align=right>
					<FONT SIZE=1 FACE=arial COLOR=black>
						<a href=javascript:JSopenAboutWindow();><u>About</u></a>&nbsp;&nbsp;&nbsp;

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



// *************************************************************************************************
// SECTION: Navigation Button Functions
// *************************************************************************************************

function FormButtonsReadOnlyMenu() {
	global $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=center>
					<FORM METHOD=POST ACTION=$g_main>
						<H1>

						<INPUT TYPE=submit NAME=auggie VALUE=\"Search\"
							style=\"color:black; width:180px; height:30px; background: url(image/search.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
						<P>";
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


// Generates the main page
function FormButtonsMainMenu() {
	global $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=center>
					<FORM METHOD=POST ACTION=$g_main>
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
							<p>	<INPUT TYPE=submit NAME=auggie VALUE=\"Bulk Upload Mappings\"	style=\"color:black; width:180px; height:30px; background: url(image/upload.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
							<P> <INPUT TYPE=submit NAME=auggie VALUE=\"Reporting\"	style=\"color:black; width:180px; height:30px; background: url(image/report.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
						<P>";
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
		<FORM METHOD=POST ACTION=$g_main>
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
			$stmt = "SELECT User_ID FROM sl_user order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp;&nbsp;&nbsp;Assign Object Creator:&nbsp;&nbsp;&nbsp;
			<select name=creator
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
				(default 'admin')
			</FONT>
		</FORM>
			<P>
			&nbsp;&nbsp;&nbsp;NOTE: Taxonomy Class has a fixed value of: Database, Table, or Column
			<BR>
			&nbsp;&nbsp;&nbsp;Do not change the Class once imported or updates will not load correctly
			<P>";

			echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			$stmt = "SELECT User_ID FROM sl_user order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp;&nbsp;&nbsp;Assign Object Creator:&nbsp;&nbsp;&nbsp;
			<select name=creator
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
		<FORM METHOD=POST ACTION=$g_main>
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
			$stmt = "SELECT User_ID FROM sl_user order by User_ID";

			ProcCallDatabase($result,$stmt);

			echo "
			&nbsp;&nbsp;&nbsp;Assign Object Creator:&nbsp;&nbsp;&nbsp;
			<select name=creator
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
		<FORM METHOD=POST ACTION=$g_main>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
				style=\"color:black; width:120px;\">
		</FORM>
	";
}

// Display HCatalog form
function FormButtonsHCatalog() {
	global $g_dbbinpath, $g_configpath, $g_main;



	echo "
		<FORM METHOD=POST ACTION=$g_main> ";

 $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);


echo $output;





								echo "
								<INPUT TYPE=submit NAME=auggie VALUE=\"Administration\"
								style=\"color:black; width:120px;\">&nbsp;&nbsp;&nbsp;
		</FORM>";
}











// Generates the Your Account page
function FormButtonsUserAccount() {
	global $g_main;

	echo "
		<TABLE WIDTH=600 CELLPADDING=0 CELLSPACING=0 BORDER=0>
			<TR>
				<TD align=center>
					<FORM METHOD=POST ACTION=$g_main>
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
					<FORM METHOD=POST ACTION=$g_main>
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
		<FORM METHOD=POST ACTION=$g_main>
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

// Display Manage Schema form
function FormButtonsManageSchema() {
	global $g_main;
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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

// *************************************************************************************************
// SECTION: Metadata Form Functions
// *************************************************************************************************


// Display Object
function FormDisplayObject($rowid) {

	$s_user = $_SESSION['s_user'];
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
	$tower		= $row->Tower_TX;
	$assettype	= $row->AssetType_TX;
	$version	= $row->Version_DC;
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
	$alias		= stripslashes($alias);
	$tower		= stripslashes($tower);
	$assettype	= stripslashes($assettype);
	$wricef		= stripslashes($wricef);
	$alm		= stripslashes($alm);
	$desc		= stripslashes($desc);
	$usage		= stripslashes($usage);
	$techrules  = stripslashes($techrules);
	$comment	= stripslashes($comment);
	$back_generated = $_REQUEST["back_generated"] ;
	$report_generated = $_REQUEST["report_generated"] ;
	$pagelimit = $_REQUEST["pagelimit"] ;

	echo "
	<FORM METHOD=POST ACTION=$g_main>
	<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
    <INPUT TYPE=HIDDEN NAME=back_generated VALUE=\"$back_generated\">
    <INPUT TYPE=HIDDEN NAME=report_generated VALUE=\"$report_generated\">
    <INPUT TYPE=HIDDEN NAME=pagelimit VALUE=\"$pagelimit\">
	<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Back\"	style=\"color:black; width:100px;\">
    <INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Again\"	style=\"color:black; width:100px;\">";

		if ($_SESSION['s_user'] == "admin" or $_SESSION['s_user'] == $creator) {
			echo "
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Modify\" style=\"color:black; width:59px;\">
			<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Delete\" style=\"color:black; width:59px;\">";

			$stmt = "SELECT DISTINCT P_Class_TX from sl_assoc
				WHERE
					C_Category_TX	= '$category' AND
					C_Subject_TX	= '$subject' AND
					C_Class_TX		= '$class'
					ORDER BY P_Class_TX;";
			ProcCallDatabase($result,$stmt);
			if (mysqli_num_rows($result)) {
				echo "
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Parent\" style=\"color:black; width:59px;\">";
			}
			else {
				echo "
				<INPUT TYPE=BUTTON VALUE=\"Parent\"
					onClick='alert(\"There are no Parent Associations available for this Class.\")'
					style=\"color:gray; width:59px;\">";
			}
			mysqli_free_result($result);

			$stmt = "SELECT DISTINCT C_Class_TX from sl_assoc
				WHERE
					P_Category_TX	= '$category' AND
					P_Subject_TX	= '$subject' AND
					P_Class_TX		= '$class'
					ORDER BY C_Class_TX;";
			ProcCallDatabase($result,$stmt);
			if (mysqli_num_rows($result)) {
				echo "
				<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Child\" style=\"color:black; width:59px;\">";
			}
			else {
				echo "
				<INPUT TYPE=BUTTON VALUE=\"Child\"
					onClick='alert(\"There are no Child Associations available for this Class.\")'
					style=\"color:gray; width:59px;\">";
			}
			mysqli_free_result($result);

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
				style=\"color:black;\">";

		echo "
		<INPUT TYPE=BUTTON VALUE=\"R-2\"
				onClick=\"javascript:JSopenReportWindow('sl_report_2.php?ROWID=$rowid');\"
				style=\"color:black;\">";

		echo "
		<INPUT TYPE=BUTTON VALUE=\"R-3\"
				onClick=\"javascript:JSopenReportWindow('sl_report_3.php?ROWID=$rowid');\"
				style=\"color:black;\">";
		// rj Edit record
		
		if ($_SESSION['s_user'] == "read") {
			echo "
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td width=300><FONT FACE=arial SIZE=2>Type:</FONT></td>
				<td width=300><FONT FACE=arial SIZE=2>Subject Area:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=class VALUE=\"$class\"
					style=\"color:black; font-family:Times; font-weight:noraml;
					font-size:12px; width:300px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=type VALUE=\"$type\"
					style=\"color:black; font-family:Times; font-weight:noraml;
					font-size:12px; width:300px; background-color:white\">
				</td>
			</tr>
		</table>
		";
	   }else{
	   	
	   echo "
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
		</table>";	
	   	
	   }
		
		echo "
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
					font-size:12px; width:95px; background-color:white\">
				</td>
			</tr>
		</table>
		
		<table class=normal width=620 border=0>
				<tr>
					<td width=300><FONT FACE=arial SIZE=2>Tower:</FONT></td>
					<td width=300><FONT FACE=arial SIZE=2>Asset Type:</FONT></td>
				</tr>
				
				<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=tower VALUE=\"$tower\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:300px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=assettype VALUE=\"$assettype\"
					style=\"color:black; font-family:Times; font-weight:noraml;
					font-size:12px; width:300px; background-color:white\">
				</td>
				</tr>
			</table>
		
		
		<FONT FACE=Arial SIZE=2>Keywords:</FONT><BR>
		<INPUT READONLY TYPE=text SIZE=123 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\"><BR>
    	<FONT FACE=Arial SIZE=2>WRICEF#:</FONT><BR>
    	<TEXTAREA NAME=wricef cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$wricef</TEXTAREA><BR>
		<FONT FACE=Arial SIZE=2>ALM Req ID:</FONT><BR>
		<TEXTAREA NAME=alm cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:noraml;
			font-size:12px; background-color:white\">$alm</TEXTAREA><BR>
		<FONT FACE=Arial SIZE=2>Description:</FONT><BR>
		<TEXTAREA READONLY NAME=desc cols=120 rows=5
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
		
		
		</FORM>";

		

	// Display Relationships to this Object
	// Disable delete function for all but the Administraor and the Object's Owner
	global $g_main, $g_host, $g_user, $g_pass,$g_database;
	$conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
	
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
	elseif ($class == "SourceField") {
		printf("<FONT FACE=arial SIZE=1>Conversion Object: (SELECT Object or DELETE Relationship)</FONT><BR><BR>");
	}
	else {
	printf("<FONT FACE=arial SIZE=1>Parent Objects: (SELECT Object or DELETE Relationship)</FONT><BR><BR>");
	}

	/* Subhajit - commented this block to show multiple parents by removing C_class_tx column
	$stmt = "
			SELECT P_sl_object_FK, C_sl_object_FK, P_Class_TX, P_Name_TX
			FROM sl_rel
		WHERE
	C_Category_TX = '$category' and C_Subject_TX = '$subject'
				and C_Class_TX = '$class' and C_Type_TX = '$type'
			and C_Name_TX = '$name' and C_Version_DC = $version";
	*/




	$stmt = "
			SELECT P_sl_object_FK, C_sl_object_FK, P_Class_TX, P_Name_TX
			FROM sl_rel
		WHERE
		C_Category_TX = '$category' and C_Subject_TX = '$subject'
				and C_Type_TX = '$type'
			and C_Name_TX = '$name' and C_Version_DC = $version";


	ProcCallDatabase($result,$stmt);



	$back_generated = $_REQUEST["back_generated"] ;
	$report_generated = $_REQUEST["report_generated"] ;
	$pagelimit = $_REQUEST["pagelimit"] ;
	echo "
	<FORM METHOD=POST ACTION=$g_main>
	<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
	<INPUT TYPE=HIDDEN NAME=back_generated VALUE=\"$back_generated\">
    <INPUT TYPE=HIDDEN NAME=report_generated VALUE=\"$report_generated\">
    <INPUT TYPE=HIDDEN NAME=pagelimit VALUE=\"$pagelimit\">";
		printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

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
				printf("<TD align=center><B>Description</B></TD>
				</TR>\n");

			while (($row = mysqli_fetch_object($result))){

					$result1 = mysqli_query($conn,"SELECT Desc_TX FROM sl_object WHERE ROWID = ".$row->P_sl_object_FK);
					$row1 = mysqli_fetch_row($result1);

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
						<TD WIDTH=100><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:100px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:250px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:150px; font-size:12px; background-color:white\"></TD>
						</TR>\n",
					$row->P_sl_object_FK,
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
						<TD WIDTH=100><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:100px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:250px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:150px; font-size:12px; background-color:white\"></TD>
						</TR>\n",
					$row->P_sl_object_FK,
					$row->P_sl_object_FK,
					$row->C_sl_object_FK,
					$row->P_Class_TX,
					$row->P_Name_TX,
					$row1[0]);

				}

			}

		printf("</TABLE>\n");

	echo "
	</FORM>";


	mysqli_free_result($result);
} //loop end for if NOT mapping Spec
	// Display Child Object Relationships

if (!($class == "Mapping Specification")) {
if (!($class == "Column")) {


if ($class == "SourceField") {
echo "
<hr size=1 width=820 noshade align=left>
	<FONT FACE=arial SIZE=1>Target Mapping Field: (SELECT Object or DELETE Relationship)</FONT><BR>";
}
else
{


echo "
		<hr size=1 width=620 noshade align=left>
	<FONT FACE=arial SIZE=1>Child Objects: (SELECT Object or DELETE Relationship)</FONT><BR>";
}
	$stmt = "
		SELECT C_sl_object_FK, P_sl_object_FK, C_Class_TX, C_Name_TX
		FROM sl_rel
		WHERE
			P_Category_TX = '$category' and P_Subject_TX = '$subject'
			and P_Class_TX = '$class' and P_Type_TX = '$type'
			and P_Name_TX = '$name' and P_Version_DC = $version";


	ProcCallDatabase($result,$stmt);
	if ($class == "Terms") {
	$username_array = array(); // start an array
	}

	$back_generated = $_REQUEST["back_generated"] ;
	$report_generated = $_REQUEST["report_generated"] ;
	$pagelimit = $_REQUEST["pagelimit"] ;
	echo "
	<FORM METHOD=POST ACTION=$g_main>
	<INPUT TYPE=HIDDEN NAME=rowid VALUE=$rowid>
	<INPUT TYPE=HIDDEN NAME=back_generated VALUE=\"$back_generated\">
    <INPUT TYPE=HIDDEN NAME=report_generated VALUE=\"$report_generated\">
    <INPUT TYPE=HIDDEN NAME=pagelimit VALUE=\"$pagelimit\">";
		printf("<TABLE WIDTH=620 CELLPADDING=1 CELLSPACING=1 BORDER=1>\n");

			printf("<TR bgcolor=#ced7e1>
				<TD WIDTH=60><B>SELECT</B></TD>
				<TD WIDTH=60><B>DELETE</B></TD>
				<TD WIDTH=100 align=center><B>Child Type</B></TD>
				<TD align=center><B>Child Name</B></TD>
				<TD align=center><B>Description</B></TD>
				</TR>\n");
			while (($row = mysqli_fetch_object($result))){
					$result2 = mysqli_query($conn,"SELECT Desc_TX FROM sl_object WHERE ROWID = ".$row->C_sl_object_FK);
					$row2 = mysqli_fetch_row($result2);
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
						<TD WIDTH=100><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:100px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:250px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:150px; font-size:12px; background-color:white\"></TD>
						</TR>\n",
					$row->C_sl_object_FK,
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
						<TD WIDTH=100><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:100px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:250px; font-size:12px; background-color:white\"></TD>
						<TD><INPUT READONLY TYPE=text VALUE=\"%s\"
							style=\"color:black; font-family:Times; font-weight:normal;
							width:150px; font-size:12px; background-color:white\"></TD>
						</TR>\n",
					$row->C_sl_object_FK,
					$row->P_sl_object_FK,
					$row->C_sl_object_FK,
					$row->C_Class_TX,
					$row->C_Name_TX,
					$row2[0]);

					if ($class == "Terms") {
					$username_array[] = "\"".$row->C_Name_TX."\"";
					}
				}

			}


		
		printf("</TABLE>\n <BR>");
		
		// Display Object Extended Properties

		// If power user then display extended properties - subhajit on 5/21/2014 // RJ added
		//if ($_SESSION['s_user'] == "admin" or $_SESSION['s_user'] == "read" or $_SESSION['s_user'] == $creator) {

			// ************** Subhajit ** Mapping Specification
			if ($class == "Mapping Specification") {

//echo "<input type=button value=\"submit\" onClick=\"javascript:popup1('Transrule');\">";


//echo "<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Add Mapping\" style=\"color:black; width:153px;\">";
//<FORM METHOD=POST ACTION=$g_main?auggie=ViewMappingDetails>";
echo "
<FORM METHOD=POST ACTION='sl_mappings.php'>";
echo "<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"View Mapping Details\" style=\"color:black; width:153px;\">"; ?>
    <input type="hidden" name="category" value="<?php echo $category;?>" />
    <input type="hidden" name="subject" value="<?php echo $subject;?>" />
    <input type="hidden" name="class" value="<?php echo $class;?>" />
    <input type="hidden" name="type" value="<?php echo $type;?>" />
    <input type="hidden" name="name" value="<?php echo $name;?>" />
    <input type="hidden" name="creator" value="<?php echo $_SESSION['s_user'];?>" />
    <input type="hidden" name="changer" value="<?php echo $_SESSION['s_user'];?>" />


    <?php

    // echo "
		// <INPUT TYPE=BUTTON VALUE=\"View Mapping Details\"
		// 		onClick=\"javascript:JSopenReportWindow('sample8.php?mspec=$name');\"
		// 		style=\"color:black; width:153px;\">";


}

		//*****************







		$stmt = "
			SELECT Property_TX,Value_TX
			FROM sl_attr
			WHERE
				sl_object_FK = $rowid  order by Property_TX";

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

			while (($row = mysqli_fetch_object($result))){

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
							width:490px; font-size:12px; background-color:white\">
						</TD>
					</TR>\n",
				$row->Property_TX,
				$row->Value_TX);

				$i++;
			}

		printf("</TABLE>\n");
		}

		//} // Loop ends -> If power user then display extended properties - subhajit on 5/21/2014
	echo "
	</FORM>";

	mysqli_free_result($result);
		printf("<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Created:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Creator:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Group:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=group VALUE=\"$group\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>");


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

	mysqli_free_result($result);

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

		$stmt = "SELECT DISTINCT Type_TX FROM sl_object
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
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
		FROM sl_object WHERE ROWID=$rowid";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$rowid		= $row->ROWID;
	$type		= $row->Type_TX;
	$name		= $row->Name_TX;
	$desc		= $row->Desc_TX;
	$changed	= $row->Changed_DS;
	$changer	= $row->Changer_ID;

	mysqli_free_result($result);

	$name		= stripslashes($name);
	$desc		= stripslashes($desc);

	echo "
	<FORM METHOD=POST ACTION=$g_main>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Find Again\"
			style=\"color:black; width:100px;\">

		<INPUT TYPE=BUTTON VALUE=\"Report\"
				onClick=\"javascript:JSopenReportWindow('sl_report.php?ROWID=$rowid');\"
				style=\"color:black;\">";

		echo "
		<hr size=1 width=450 noshade align=left>
		<table border=0>
			<tr>
				<td width=150><FONT FACE=arial SIZE=2>Glossary:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=type VALUE=\"$type\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
	</FORM>";

}

// Generate add object form
function FormAddObject($name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
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
				<td width=150><FONT FACE=arial SIZE=2 COLOR=black>Subject Area:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
			</tr>
		</table>";

		// Display Taxonomy (clear values)


		echo "
		<table class=normal width=600 BORDER=0 CELLSPACING=0
			CELLPADDING=0 VALIGN=middle>
			<tr ALIGN=center>";
			$stmt = "select distinct Category_ID, Category_TX from sl_type order by Category_ID, Category_TX";
			global $g_host, $g_user, $g_pass,$g_database;
			$conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
			$result= mysqli_query($conn,$stmt);

		echo "<select id='selectbox1' name='lstCategory' style='color:black; font-family:Times; font-weight:bold;
			font-size:12px; width:150px; background-color:white'>
			<option value=''>Select Category</option>";
			while ($row = mysqli_fetch_array($result)) {
			echo "<option value='" . $row['Category_ID'] . "'>" . $row['Category_TX'] . "</option>";
			}
			echo "</select>";


	echo "<select id='selectbox2' name='lstSubject' style='color:black; font-family:Times; font-weight:bold;
	font-size:12px; width:150px; background-color:white'>
	<option value=''>Select Subject</option></select>";

	echo "<select id='selectbox3' name='lstClass' style='color:black; font-family:Times; font-weight:bold;
		font-size:12px; width:150px; background-color:white'>
		<option value=''>Select Class</option></select>";

	echo "<select id='selectbox4' name='lstType' style='color:black; font-family:Times; font-weight:bold;
			font-size:12px; width:150px; background-color:white'>
			<option value=''>Select Type</option></select>";

				// ProcSelectBox("lstCategory");
				// ProcSelectBox("lstSubject");
				// ProcSelectBox("lstClass");
				// ProcSelectBox("lstType");

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
				<td width=500><INPUT TYPE=text SIZE=100 MAXLENGTH=150
					NAME=name VALUE=\"$name\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:510px; background-color:white\"></td>
				<td width=100><INPUT TYPE=text SIZE=10 MAXLENGTH=10
					NAME=version VALUE=\"$version\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:100px; background-color:white\"></td>
			</tr>
		</table>
		<table class=normal width=620 border=0>
				<tr>
					<td width=300><FONT FACE=arial SIZE=2>Tower:</FONT></td>
					<td width=300><FONT FACE=arial SIZE=2>Asset Type:</FONT></td>
				</tr>
				
				<tr>
					<td>
					<select NAME=tower style=\"color:black; font-family:Times; font-weight:bold; font-size:12px; width:318px; background-color:white\">
						<option selected value=''>
						<option value='BIA'>BIA</option>
						<option value='MD'>MD</option>
						<option value='OTC'>OTC</option>
						<option value='PRI'>PRI</option>
						<option value='PTC'>PTC</option>
						<option value='PTP'>PTP</option>
						<option value='RNI'>RNI</option>
						<option value='RTR'>RTR</option>
						<option value='SCE'>SCE</option>
					</select>
					</td>
					
					<td>
					<select NAME=assettype style=\"color:black; font-family:Times; font-weight:bold; font-size:12px; width:318px; background-color:white\">
						<option selected value=''>
						<option value='Data View'>Data View</option>
						<option value='Derived'>Derived</option>
						<option value='Master Data'>Master Data</option>
						<option value='Model'>Model</option>
						<option value='Process Master Data'>Process Master Data</option>
						<option value='System'>System</option>
						<option value='Term'>Term</option>
						<option value='Transactional'>Transactional</option>
					</select>
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
		<FONT FACE=arial SIZE=2 COLOR=black>Description:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT><BR>
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
		<hr size=1 width=620width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
				<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
				<td><INPUT TYPE=text SIZE=25 MAXLENGTH=45
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
				<td><INPUT TYPE=text SIZE=25 MAXLENGTH=45
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT TYPE=text MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:150px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<br>
		<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
			style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>"; ?>

<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script language="JavaScript">
$( document ).ready(function() {
	$('#selectbox1').change(function() {
	var val = this.value;
	$.ajax({
		url: "sl_server_ajaxcall.php",
		type: "post",
		data: {'cbFillCategory':'categoryList','val_id':val},
		success: function(d) {
			 $('#selectbox2').html(d);
			}
			});

		});

	$('#selectbox2').change(function() {
	var val = this.value;
	$.ajax({
		url: "sl_server_ajaxcall.php",
		type: "post",
		data: {'cbFillCategory':'subjectList','val_id':val},
		success: function(d) {
			 $('#selectbox3').html(d);
			}
			});

	});

		$('#selectbox3').change(function() {
		var val = this.value;
		$.ajax({
			url: "sl_server_ajaxcall.php",
			type: "post",
			data: {'cbFillCategory':'classList','val_id':val},
			success: function(d) {
				 $('#selectbox4').html(d);
				}
				});

		});

	});
	</script>


<?php }

// Generate add object extended properties form
function FormAddObjectProperties($lstCategory,$lstSubject,$lstClass,$lstType,$name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status) {
	global $g_main;
	// Check if all the taxonomy variables are entered
	if ($lstCategory == -99 or $lstSubject == -99 or $lstClass == -99 or $lstType == -99) {
		GenerateHeader(
			"[Add] <font color=red><b>Complete all mandatory </font>
				<font color=red size=4>&#9830</font><font color=red> fields</b></font>");
		FormAddObject($name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
		exit();
	}

	// add slashes to avoid SQL errors
	$name		= trim(addslashes($name));
	$tower		= trim(addslashes($tower));
	$assettype	= trim(addslashes($assettype));
	$alias		= trim(addslashes($alias));
	$wricef		= trim(addslashes($wricef));
	$alm		= trim(addslashes($alm));
	$desc		= trim(addslashes($desc));
	$usage		= trim(addslashes($usage));
	$techrules  = trim(addslashes($techrules));
	$comment	= trim(addslashes($comment));

	// Check if all the variables are entered
	if (!$name || !$desc ) {
		GenerateHeader(
			"[Add] <font color=red><b>Complete all mandatory </font>
				<font color=red size=4>&#9830</font><font color=red> fields</b></font>");
		FormAddObject($name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
		exit();
	}

	// Lookup Category, Subject, Class, Type, values using IDs passed from Object Add Page
	$stmt = "SELECT Category_TX FROM sl_category where Category_ID = $lstCategory";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$category	= $row->Category_TX;
	mysqli_free_result($result);

	$stmt = "SELECT Subject_TX FROM sl_subject where Subject_ID = $lstSubject";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$subject	= $row->Subject_TX;
	mysqli_free_result($result);

	$stmt = "SELECT Class_TX FROM sl_class where Class_ID = $lstClass";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$class	= $row->Class_TX;
	mysqli_free_result($result);

	$stmt = "SELECT Type_TX FROM sl_type where Type_ID = $lstType";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$type	= $row->Type_TX;
	mysqli_free_result($result);

	// Check for preexistence of new Object Name in sl_object table
	$stmt =
		"SELECT Name_TX FROM sl_object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'		AND
				Name_TX			= '$name';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
		GenerateHeader(
			"[Add] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Object Name - $name - already exists -- the name must be unique</FONT>");
		FormAddObject($name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status);
		exit();
	}

	// Check if this object has extended properties
	$stmt = "
		SELECT Property_TX, Default_TX Value_TX
		FROM sl_prop
		WHERE
			Category_TX = '$category' and
			Subject_TX = '$subject'
			and Class_TX = '$class'";

	ProcCallDatabase($result,$stmt);

	if (mysqli_num_rows($result) == 0) {
		// This object has no extended properties (skip extended properties form)
		mysqli_free_result($result);

		// Set extended properties to zero
		$eprow		= -1;		// reset extended property row counter
		$epname		= array();	// define extended property name array
		$epvalue	= array();	// define extended property value array
		// Implode arrays variables
		$epnamex	= implode("&",$epname);		// compress array to be passed as a string
		$epvaluex	= implode("&",$epvalue);	// compress array to be passed as a string

		ProcAddObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,$alm,
			$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
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
				<td width=150><FONT FACE=arial SIZE=2>Subject Area:</FONT></td>
			</tr>
			<tr>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=category VALUE=\"$category\"
					style=\"color:gray; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=subject VALUE=\"$subject\"
					style=\"color:gray; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=class VALUE=\"$class\"
					style=\"color:gray; font-family:Times; font-weight:noraml;
					font-size:12px; width:150px; background-color:white\">
				</td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=type VALUE=\"$type\"
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
				<td width=500><INPUT READONLY TYPE=text SIZE=100 MAXLENGTH=150
					NAME=name VALUE=\"$name\"
					style=\"color:gray; font-family:Times; font-weight:normal;
					font-size:12px; width:510px; background-color:white\"></td>
				<td width=100><INPUT READONLY TYPE=text SIZE=10 MAXLENGTH=10
					NAME=version VALUE=\"$version\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:100px; background-color:white\"></td>
			</tr>
		</table>
		
		<table border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Tower:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Asset Type:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=tower VALUE=\"$tower\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:300px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=assettype VALUE=\"$assettype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
			</table>
		
		<hr size=1 width=620 noshade align=left>
		<FONT FACE=arial SIZE=2>Keywords:</FONT><BR>
			<INPUT READONLY TYPE=text SIZE=117 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
      <FONT FACE=arial SIZE=2>WRICEF#:</FONT><BR>
      		<TEXTAREA READONLY NAME=wricef cols=120 rows=5
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$wricef</TEXTAREA><BR>
  	<FONT FACE=arial SIZE=2>ALM Req ID:</FONT><BR>
			<TEXTAREA READONLY NAME=alm cols=120 rows=5
			style=\"color:gray; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$alm</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Description:*</FONT><BR>
			<TEXTAREA READONLY NAME=desc cols=120 rows=5
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=creator VALUE=\"$creator\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Group:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=group VALUE=\"$group\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45
					NAME=changer VALUE=\"$changer\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=status VALUE=\"$status\"
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
			FROM sl_prop
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

				while (($row = mysqli_fetch_object($result))){
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

	mysqli_free_result($result);

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
					<td width=150><FONT FACE=arial SIZE=2>Parent Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>";

					$stmt = "SELECT DISTINCT P_Class_TX from sl_assoc
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
					for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
					{
						$myrow = mysqli_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysqli_free_result($result);

					echo "
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_type VALUE=\"$p_type\"
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
					<td width=150><FONT FACE=arial SIZE=2>Child Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_type VALUE=\"$c_type\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=status VALUE=\"$status\"
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
					<td width=150><FONT FACE=arial SIZE=2>Parent Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_type VALUE=\"$p_type\"
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

					$stmt = "SELECT DISTINCT Name_TX FROM sl_object
						WHERE
							Category_TX		= '$p_category'	AND
							Subject_TX		= '$p_subject'	AND
							Class_TX		= '$p_class'	AND
							Type_TX			= '$p_type' 	AND
							Version_DC		= '$p_version'	AND
							Name_TX			NOT IN (
								SELECT
									P_Name_TX FROM sl_rel
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
					for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
					{
						$myrow = mysqli_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysqli_free_result($result);

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
					<td width=150><FONT FACE=arial SIZE=2>Child Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_type VALUE=\"$c_type\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=status VALUE=\"$status\"
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
					<td width=150><FONT FACE=arial SIZE=2>Parent Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_type VALUE=\"$p_type\"
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
					<td width=150><FONT FACE=arial SIZE=2>Child Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>";

					$stmt = "SELECT DISTINCT C_Class_TX from sl_assoc
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
					for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
					{
						$myrow = mysqli_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysqli_free_result($result);

					echo "
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_type VALUE=\"$c_type\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=status VALUE=\"$status\"
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
					<td width=150><FONT FACE=arial SIZE=2>Parent Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_type VALUE=\"$p_type\"
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
					<td width=150><FONT FACE=arial SIZE=2>Child Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_type VALUE=\"$c_type\"
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

					if ($c_class == 'SourceField') {
							$stmt = "SELECT DISTINCT Name_TX FROM sl_object
						WHERE
							Category_TX		= '$c_category'	AND
							Subject_TX		= '$c_subject'	AND
							Class_TX		= '$c_class'	AND
							Type_TX			= '$c_type' 	AND
							Version_DC		= '$c_version'	ORDER BY Name_TX;";
									}
					elseif ($c_class == 'TargetField') {
							$stmt = "SELECT DISTINCT Name_TX FROM sl_object
						WHERE
							Category_TX		= '$c_category'	AND
							Subject_TX		= '$c_subject'	AND
							Class_TX		= '$c_class'	AND
							Type_TX			= '$c_type' 	AND
							Version_DC		= '$c_version'	ORDER BY Name_TX;";
									}
									else {
									$stmt = "SELECT DISTINCT Name_TX FROM sl_object
															WHERE
																Category_TX		= '$c_category'	AND
																Subject_TX		= '$c_subject'	AND
																Class_TX		= '$c_class'	AND
																Type_TX			= '$c_type' 	AND
																Version_DC		= '$c_version'	AND
																Name_TX			NOT IN (
																	SELECT
																		C_Name_TX FROM sl_rel
																	WHERE
																		C_Category_TX	= '$c_category'	AND
																		C_Subject_TX	= '$c_subject'	AND
																		C_Class_TX		= '$c_class'	AND
																		C_Type_TX		= '$c_type' 	AND
																		C_Version_DC	= '$c_version')
									ORDER BY Name_TX;";
									}

					ProcCallDatabase($result,$stmt);

					echo "<td><select name=c_name
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:510px; background-color:white\">";
					printf("<option selected value=''>");
					for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
					{
						$myrow = mysqli_fetch_row($result);
						printf("<option value='$myrow[0]'>$myrow[0]");
					}
					echo "</select></td>";

					mysqli_free_result($result);

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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=status VALUE=\"$status\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
	</FORM>";

}

// Generate confirm delete relationship form
function FormDeleteRelationship($POSTauggie,$rowid) {
	global $g_main;

	$relkeys = explode("-",$POSTauggie);

	$stmt = "
		SELECT
			P_sl_object_FK,P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
			C_sl_object_FK,C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,C_Name_TX,C_Version_DC,
			Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD
		FROM sl_rel
		WHERE P_sl_object_FK = $relkeys[0]
		AND C_sl_object_FK = $relkeys[1]";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$p_rowid	= $row->P_sl_object_FK;
	$p_category	= $row->P_Category_TX;
	$p_subject	= $row->P_Subject_TX;
	$p_class	= $row->P_Class_TX;
	$p_type		= $row->P_Type_TX;
	$p_name		= $row->P_Name_TX;
	$p_version	= $row->P_Version_DC;
	$c_rowid	= $row->C_sl_object_FK;
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

	mysqli_free_result($result);

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
					<td width=150><FONT FACE=arial SIZE=2>Parent Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_category VALUE=\"$p_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=p_subject VALUE=\"$p_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_class VALUE=\"$p_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=p_type VALUE=\"$p_type\"
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
					<td width=150><FONT FACE=arial SIZE=2>Child Subject Area:</FONT></td>
				</tr>
				<tr>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45
						NAME=c_category VALUE=\"$c_category\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_subject VALUE=\"$c_subject\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_class VALUE=\"$c_class\"
						style=\"color:black; font-family:Times; font-weight:noraml;
						font-size:12px; width:150px; background-color:white\">
					</td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=c_type VALUE=\"$c_type\"
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
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
			</tr>
			<tr>
				<td><FONT FACE=Arial SIZE=2>Changed:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=20 NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Changer:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=25 MAXLENGTH=45 NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=Arial SIZE=2>Status:</FONT></td>
				<td><INPUT READONLY TYPE=text SIZE=20 MAXLENGTH=45 NAME=status VALUE=\"$status\"
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

	$stmt = "SELECT DISTINCT Category_TX FROM sl_type ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Subject_TX FROM sl_type
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Class_TX FROM sl_type
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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
					<INPUT TYPE=text SIZE=60 MAXLENGTH=45
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





// The next 3 form functions are used to add a new Class
// FormSelectClassCategory
// FormSelectClassSubject
// FormAddClass
// Generate select category form
function FormSelectClassCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM sl_category ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Subject_TX FROM sl_subject
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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



// The next 4 form functions are used to add a new Type
// FormSelectTypeCategory
// FormSelectTypeSubject
// FormSelectTypeClass
// FormAddType
// Generate select category form
function FormSelectTypeCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM sl_category ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Subject_TX FROM sl_subject
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Class_TX FROM sl_class
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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



// The next 4 form functions are used to add a new Association
// FormSelectParentCategory
// FormSelectParentSubject
// FormSelectParentClass
// FormAddAssociation
// Generate select category form
function FormSelectParentCategory($category) {
	global $g_main;

	$stmt = "SELECT DISTINCT Category_TX FROM sl_type ORDER BY Category_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Subject_TX FROM sl_type
		WHERE Category_TX = '$category' ORDER BY Subject_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Class_TX FROM sl_type
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

	$stmt = "SELECT DISTINCT Class_TX FROM sl_type
		WHERE Category_TX = '$category' AND Subject_TX = '$subject'
		ORDER BY Class_TX";
	ProcCallDatabase($result,$stmt);
	echo "
		<FORM METHOD=POST ACTION=$g_main>
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
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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
function FormDeleteSchemaCategory($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX
		FROM sl_category
		WHERE Category_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;

	mysqli_free_result($result);

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
							records in the following tables: sl_category, sl_subject,
							sl_class, sl_type, sl_assoc, sl_prop, sl_object, sl_attr, sl_rel.
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
function FormModifySchemaCategory($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX
			FROM sl_category
			WHERE Category_ID = '$POSTauggie';";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category		= $row->Category_TX;
	$n_category		= "";
	$save_rowid		= $POSTauggie;

	mysqli_free_result($result);

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
							records in the following tables: sl_category, sl_subject,
							sl_class, sl_type, sl_assoc, sl_prop, sl_object, sl_attr, sl_rel.
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
function FormDeleteSchemaSubject($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX
		FROM sl_subject
		WHERE Subject_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;

	mysqli_free_result($result);

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
							records in the following tables: sl_subject, sl_class, sl_type,
							sl_assoc, sl_prop, sl_object, sl_attr, sl_rel.
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
function FormModifySchemaSubject($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX
		FROM sl_subject
		WHERE Subject_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$n_subject	= "";
	$save_rowid	= $POSTauggie;

	mysqli_free_result($result);

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
							records in the following tables: sl_subject, sl_class, sl_type,
							sl_assoc, sl_prop, sl_object, sl_attr, sl_rel.
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
function FormDeleteSchemaClass($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX
		FROM sl_class
		WHERE Class_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;

	mysqli_free_result($result);

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
							records in the following tables: sl_class, sl_type, sl_assoc,
							sl_prop, sl_object, sl_attr, sl_rel.
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
function FormModifySchemaClass($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX
		FROM sl_class
		WHERE Class_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$n_class	= "";
	$save_rowid	= $POSTauggie;

	mysqli_free_result($result);

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
							records in the following tables: sl_class, sl_type, sl_assoc,
							sl_prop, sl_object, sl_attr, sl_rel.
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
function FormDeleteSchemaType($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Type_TX
		FROM sl_type
		WHERE Type_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$type		= $row->Type_TX;

	mysqli_free_result($result);

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
							records in the following tables: sl_type, sl_object, sl_attr, sl_rel.
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
function FormModifySchemaType($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Type_TX
		FROM sl_type
		WHERE Type_ID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$type		= $row->Type_TX;
	$n_type		= "";
	$save_rowid	= $POSTauggie;

	mysqli_free_result($result);

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
							records in the following tables: sl_type, sl_object, sl_attr, sl_rel.
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
function FormDeleteSchemaAssoc($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			P_Category_TX, P_Subject_TX, P_Class_TX, C_Class_TX
		FROM sl_assoc
		WHERE ROWID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$p_category		= $row->P_Category_TX;
	$p_subject		= $row->P_Subject_TX;
	$p_class		= $row->P_Class_TX;
	$c_class		= $row->C_Class_TX;

	mysqli_free_result($result);

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
							records in the following tables: sl_assoc, sl_rel.
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
function FormDeleteSchemaProp($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Property_TX
		FROM sl_prop
		WHERE ROWID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$category	= $row->Category_TX;
	$subject	= $row->Subject_TX;
	$class		= $row->Class_TX;
	$property	= $row->Property_TX;

	mysqli_free_result($result);

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
							associated records in the following tables: sl_prop, sl_attr.
							Existing Objects in the sl_object table will not be affected other
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
function FormModifySchemaProp($POSTauggie) {
	global $g_main;

	$stmt = "
		SELECT
			Category_TX, Subject_TX, Class_TX, Property_TX, Default_TX
		FROM sl_prop
		WHERE ROWID = $POSTauggie";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
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
	$save_rowid	= $POSTauggie;

	mysqli_free_result($result);

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
							associated records in the following tables: sl_prop, sl_attr.
							This function does not change the Created_DS
							(date), Changer_ID, or Changed_DS (date) on any record. The Schema
							Property Default value in table sl_prop can be changed but the
							Value_TX field in table sl_attr will not be changed via this function.
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
		from sl_user where User_ID = '$s_user'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
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

	mysqli_free_result($result);

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
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=userid VALUE=\"$userid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User Type:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=userType VALUE=\"$usertype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>First Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=firstname VALUE=\"$firstname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Last Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=lastname VALUE=\"$lastname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Title:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=title VALUE=\"$title\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Email Address:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=email VALUE=\"$email\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Phone Number:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=phone VALUE=\"$phone\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=company VALUE=\"$company\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Department Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=dept VALUE=\"$dept\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company URL:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=url VALUE=\"$url\"
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
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=userid VALUE=\"$s_user\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Current Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=45 NAME=oldpass VALUE=\"\"
						style=\"color:black; font-family:Times; font-weight:normal;
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
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=userid VALUE=\"$userid\"
						style=\"color:black; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User Type:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=usertype VALUE=\"$usertype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Password:</FONT></td>
					<td><INPUT TYPE=password MAXLENGTH=45 NAME=password VALUE=\"$password\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>First Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=firstname VALUE=\"$firstname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Last Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=lastname VALUE=\"$lastname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Title:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=title VALUE=\"$title\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Email Address:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=email VALUE=\"$email\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Phone Number:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=phone VALUE=\"$phone\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=company VALUE=\"$company\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Department Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=dept VALUE=\"$dept\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company URL:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=url VALUE=\"$url\"
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
	$ddl->FormSelectUserProfile();
	exit();
	}

	// Create the SQL command select the user record from the database
	$stmt = "
		SELECT User_ID,User_Type_CD,First_Name_TX,Last_Name_TX,
			Title_TX,Email_Addr_TX,Phone_TX,Company_TX,Dept_TX,
			URL_TX,Release_CD,Newsletter_CD,
			Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD
		from sl_user where User_ID = '$userid'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
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

	mysqli_free_result($result);

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
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=userid VALUE=\"$userid\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>User Type:</FONT></td>
					<td><INPUT READONLY TYPE=text MAXLENGTH=45 NAME=usertype VALUE=\"$usertype\"
						style=\"color:gray; font-family:Times; font-weight:bold;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>First Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=firstname VALUE=\"$firstname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Last Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=lastname VALUE=\"$lastname\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Title:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=title VALUE=\"$title\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Email Address:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=email VALUE=\"$email\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Phone Number:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=phone VALUE=\"$phone\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:150px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=company VALUE=\"$company\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Department Name:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=dept VALUE=\"$dept\"
						style=\"color:black; font-family:Times; font-weight:normal;
						font-size:12px; width:300px; background-color:white\">
					</td>
				</tr>
				<tr>
					<td width=110><FONT FACE=arial SIZE=2>Company URL:</FONT></td>
					<td><INPUT TYPE=text MAXLENGTH=45 NAME=url VALUE=\"$url\"
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

						$stmt = "SELECT User_ID FROM sl_user order by User_ID";
						ProcCallDatabase($result,$stmt);

						echo "
						<select name=creator
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:200px; background-color:white\">";
							printf("<option selected value=''>");

							for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
							{
								$myrow = mysqli_fetch_row($result);
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

						$stmt = "SELECT User_ID FROM sl_user order by User_ID";
						ProcCallDatabase($result,$stmt);

						echo "
						<select name=n_creator
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:200px; background-color:white\">";
							printf("<option selected value=''>");

							for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
							{
								$myrow = mysqli_fetch_row($result);
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
							associated records in the following tables: sl_object,
							sl_rel, sl_prop. This function does not change the Created_DS
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



// *************************************************************************************************
// SECTION: Non Interactive Functions
// *************************************************************************************************

// Search Object
function ProcSearchObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,
		$alias,$wricef,$alm,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status) {
	global $g_colorbkg, $g_maxrows, $g_main;
	$s_user = $_SESSION['s_user'];
	// Strip any single quotes so SQL call will not fail
	// Strip whitespace
		$name		= trim(str_replace("'","",$name));
		$version	= trim(str_replace("'","",$version));
		$alias		= trim(str_replace("'","",$alias));
		$wricef		= trim(str_replace("'","",$wricef));
		$alm		= trim(str_replace("'","",$alm));
		$desc		= trim(str_replace("'","",$desc));
		$usage		= trim(str_replace("'","",$usage));
		$techrules  = trim(str_replace("'","",$techrules));
		$comment	= trim(str_replace("'","",$comment));
		$created	= trim(str_replace("'","",$created));
		$creator	= trim(str_replace("'","",$creator));
		$changed	= trim(str_replace("'","",$changed));
		$changer	= trim(str_replace("'","",$changer));

	// Check if at least one search criteria is entered
	if (!$category && !$subject && !$class && !$type && !$name && !$version && !$tower && !$assettype &&
		!$alias && !$wricef && !$alm && !$desc && !$usage && !$techrules && !$comment && !$group &&
		!$created && !$creator && !$changed && !$changer && !$status) {
		GenerateHeader(
			"[<a href=javascript:JSopenSearchTips();>Search Tips</a>] <font color=red><b>At least one search criteria MUST be entered</b></font>");
		$business->FormSearchObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,
		$alias,$wricef,$alm,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Generate the SQL command for doing a select from the Database
	$stmt = " from sl_object where ";
	$stmtRpt = " from sl_object,sl_attr where sl_object.ROWID = sl_attr.SL_Object_FK and ";

	if ($category){
		$stmt .= "Category_TX like '$category' and ";
		$stmtRpt .= "sl_object.Category_TX like '$category' and ";}
	if ($subject){
		$stmt .= "Subject_TX like '$subject' and ";
		$stmtRpt .= "sl_object.Subject_TX like '$subject' and ";}
	if ($class){
		$stmt .= "Class_TX like '$class' and ";
		$stmtRpt .= "sl_object.Class_TX like '$class' and ";}
	if ($type){
		$stmt .= "Type_TX like '$type' and ";
		$stmtRpt .= "sl_object.Type_TX like '$type' and ";}
	if ($name){
		$stmt .= "Name_TX like '%$name%' and ";
		$stmtRpt .= "sl_object.Name_TX like '%$name%' and ";}
	if ($version){
		$stmt .= "Version_DC like '$version' and ";
		$stmtRead .= "Version_DC like '$version' and ";
		$stmtRpt .= "sl_object.Version_DC like '$version' and ";}
	if ($tower){
		$stmt .= "Tower_TX like '$tower' and ";
		$stmtRpt .= "sl_object.Tower_TX like '$tower' and ";}
	if ($assettype){
		$stmt .= "AssetType_TX like '$assettype' and ";
		$stmtRpt .= "sl_object.AssetType_TX like '$assettype' and ";}
	if ($alias){
		$stmt .= "Alias_TX like '%$alias%' and ";
		$stmtRpt .= "sl_object.Alias_TX like '%$alias%' and ";}
	if ($wricef){
		$stmt .= "WRICEF_TX like '%$wricef%' and ";
		$stmtRpt .= "sl_object.WRICEF_TX like '%$wricef%' and ";}
	if ($alm){
		$stmt .= "ALM_TX like '%$alm%' and ";
		$stmtRpt .= "sl_object.ALM_TX like '%$alm%' and ";}
	if ($desc){
		$stmt .= "Desc_TX like '%$desc%' and ";
		$stmtRpt .= "sl_object.Desc_TX like '%$desc%' and ";}
	if ($usage){
		$stmt .= "Usage_TX like '%$usage%' and ";
		$stmtRpt .= "sl_object.Usage_TX like '%$usage%' and ";}
	if ($techrules){
		$stmt .= "TechRules_TX like '%$techrules%' and ";
		$stmtRpt .= "sl_object.TechRules_TX like '%$techrules%' and ";}
	if ($comment){
		$stmt .= "Comment_TX like '%$comment%' and ";
		$stmtRpt .= "sl_object.Comment_TX like '%$comment%' and ";}
	if ($group){
		$stmt .= "Group_CD like '$group' and ";
		$stmtRpt .= "sl_object.Group_CD like '$group' and ";}
	if ($created){
		$stmt .= "Created_DS like '$created' and ";
		$stmtRpt .= "sl_object.Created_DS like '$created' and ";}
	if ($creator){
		$stmt .= "Creator_ID like '$creator' and ";
		$stmtRpt .= "sl_object.Creator_ID like '$creator' and ";}
	if ($changed){
		$stmt .= "Changed_DS like '$changed' and ";
		$stmtRpt .= "sl_object.Changed_DS like '$changed' and ";}
	if ($changer){
		$stmt .= "Changer_ID like '$changer' and ";
		$stmtRpt .= "sl_object.Changer_ID like '$changer' and ";}
		
	if ($_SESSION['s_user'] == "read") {
		$stmt .= "Status_CD like 'Active' and ";
		$stmtRpt .= "sl_object.Status_CD like 'Active' and ";
	}else{
		if ($status){
		$stmt .= "Status_CD like '$status' and ";
		$stmtRpt .= "sl_object.Status_CD like '$status' and ";}
	}	
		
	


	// Add what records the user can see to the where clause.
	// User ID 'Admin' can see any records. Other User IDs can see records with
	// Group_CD 'General'. Other User IDs can also see records with and Group_CD
	// 'Private' if their User ID is set as the creator of the record.

	if ($_SESSION['s_user'] == "admin") {
		// Remove last "^and" from the end of SQL statement (Admin can see all records)
		$stmt = substr($stmt, 0, strlen($stmt)-4);
		$stmtRpt = substr($stmtRpt, 0, strlen($stmtRpt)-4);
	}
	else {
		// Other User IDs can only see General or their own Private records
		if($_SESSION['s_user'] == "read"){
		$stmt .= "(Group_CD = 'General' or (Group_CD = ''))";
		$stmtRpt .= "(Group_CD = 'General' or (Group_CD = ''))";	
			
		}else{
		$stmt .= "(Group_CD = 'General' or (Creator_ID = '$s_user' and Group_CD = 'Private'))";
		$stmtRpt .= "(Group_CD = 'General' or (Creator_ID = '$s_user' and Group_CD = 'Private'))";
		}
	}
	
	
    // RJ Changes
  if ($_SESSION['s_user'] == "read") {
		$stmt .= " ORDER BY Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC DESC";
		$stmtRpt .= " GROUP BY sl_object.RowID";
	}
	else {
	$stmt .= " ORDER BY Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC DESC";
  	$stmtRpt .= " GROUP BY sl_object.RowID";
	}

	// save statement value for reporting options -- pass as hidden reportstmt
	$reportstmt = "select * ".$stmt;
	$stmtcount = "SELECT count(*) rowcount ".$stmt;
	
	
  // RJ Changes
if ($_SESSION['s_user'] == "read") {
  $stmt = "select * ".$stmt;
  }else{
	$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Desc_TX,WRICEF_TX,Version_DC,Group_CD,Creator_ID,Created_DS,Status_CD ".$stmt;
  }
	//$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX, MAX(Version_DC) as Version_DC,Group_CD,Creator_ID,Created_DS,Status_CD ".$stmt;
	$stmtRpt = "SELECT sl_object.ROWID,sl_object.Category_TX,sl_object.Subject_TX,sl_object.Class_TX,sl_object.Type_TX,sl_object.Name_TX,sl_object.Desc_TX,sl_object.Version_DC,sl_object.Creator_ID,GROUP_CONCAT(CONCAT(sl_attr.Property_TX, '=', sl_attr.Value_TX)) AS 'System and Properties'".$stmtRpt;
	//$stmtRpt = "SELECT sl_object.ROWID,sl_object.Category_TX,sl_object.Subject_TX,sl_object.Class_TX,sl_object.Type_TX,sl_object.Name_TX,sl_object.Version_DC,sl_object.Creator_ID,GROUP_CONCAT(CONCAT(sl_attr.Property_TX, '=', sl_attr.Value_TX)) AS 'System and Properties' from sl_object, sl_attr   where sl_object.ROWID = sl_attr.SL_Object_FK and sl_object.Name_TX like '%Master Data%' group by sl_object.RowID".$stmtRpt;
	$back_generated = $stmt;
	$report_generated = $stmtRpt;
	ProcCallDatabase($result,$stmtcount);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	// pagination limit get
	$stmt_page = "SELECT Attr_10_TX from sl_config where Config_ID = 'Default'";
	ProcCallDatabase($respage,$stmt_page);
	$row2 = mysqli_fetch_object($respage);
	$g_perpage = $row2->Attr_10_TX;

	$limit = $g_perpage;
	$total_records = $rowcount;
	$total_pages = ceil($total_records / $limit);
	$stmt = $stmt." LIMIT ".$limit;

	mysqli_free_result($result);

	if ($rowcount > $g_maxrows) {
	GenerateHeader("[Search] <font color=red>
		<b>Your result set was $rowcount records - $g_maxrows max - </b>
		Please add criteria to your search condition</font>");
	    $business->FormSearchObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,
		$alias,$wricef,$alm,$desc,$usage,$techrules,$comment,$group,
		$created,$creator,$changed,$changer,$status);
	exit();
	}
  // RJ Change Name search record store
  if($name){
    $s_user = $_SESSION['s_user'];
    $created	= date("Y-m-d H:i:s");
    $stmtSearch = "Insert into sl_search (User_ID,Name_TX,Created_DS)
		values ('".
			$s_user."', '".
			$name."', '".
			$created."')";
	ProcCallDatabase($result,$stmtSearch);
  }
	ProcCallDatabase($result,$stmt);

	// Display the results of the search
	GenerateHeader("[Search Result] Select function via corresponding button");

	echo "
	<FORM METHOD=POST ACTION=$g_main>
	<INPUT type=hidden name=reportstmt id=report_sql value=\"$reportstmt\">
	<INPUT type=hidden name=report_generated value=\"$report_generated\">
	<INPUT type=hidden name=back_generated value=\"$back_generated\">
	<INPUT type=hidden name=pagelimit id=pagelimit value=\"$limit\">";
		printf("<TABLE BORDER WIDTH=\"100%%\" ID=\"res_table\" BGCOLOR=$g_colorbkg NOSAVE>\n");

		echo "
		<input type=submit name=auggie value=\"Search Again\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		&nbsp;&nbsp;

		<input type=submit name=auggie value=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<INPUT type=submit name=auggie value=\"Bulk Report\" style=\"color:black; width:100px; background: url(image/report_check.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
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
				<TD align=center><B>Type</B></TD>
				<TD align=center><B>Subject Area</B></TD>
				<TD align=center><B>Name</B></TD>
				<TD align=center><B>Description</B></TD>
				<TD align=center><B>WRICEF</B></TD>
				");
				if ($class == "Column"){
							printf("<TD align=center><B>Table</B></TD>");
				}
				if ($_SESSION['s_user'] == "read") {
				}else{
				printf("<TD align=center><B>Version</B></TD></TR>\n");
				}

			$i = 1;
			$color1 = "#FFFFF0";
			$color2 = "#E0FFFF";

			if ($class == "Column") {
				while (($row = mysqli_fetch_object($result))){
					
					

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
									$row->ROWID,$row->Category_TX,$row->Subject_TX,$row->Class_TX,$row->Type_TX,
						substr($row->Name_TX,strpos($row->Name_TX,".")+1),
						substr($row->Name_TX,0,strpos($row->Name_TX,".")),
						$row->Version_DC);

						$i++;
						}
						printf("</TABLE>\n");
			}
			else {
				 ProcCallDatabase($result,$stmt);
				while (($row = mysqli_fetch_object($result))){
					if($i%2 == 1) $color = $color1;
					else $color = $color2;
					if ($_SESSION['s_user'] == "read") {
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
						</TR>\n",
					$row->ROWID,$row->Class_TX,$row->Type_TX,$row->Name_TX,substr($row->Desc_TX,0,50),substr($row->WRICEF_TX,0,30));
					$i++;
					}else{
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
					$row->ROWID,$row->Class_TX,$row->Type_TX,$row->Name_TX,substr($row->Desc_TX,0,50),substr($row->WRICEF_TX,0,30),$row->Version_DC);
					$i++;
					}
				}
				printf("</TABLE>\n");?>
				<style>
						li.active {
						  background: #0069cb none repeat scroll 0 0;
						  border: 1px solid #0069cb !important;
						}
						li:hover {
						  background: #ccc;
						  border: 1px solid #ccc;
						}
						#pagination .active > a {
						  color: #fff;
						}
						#pagination a {
						  color: #000;
						}
						.loadingDiv{
							background: rgba(0, 0, 0, 0) radial-gradient(ellipse farthest-corner at center center , rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
							left: 0;
							position: fixed;
							padding: 100px 0;
							width: 100%;
							z-index: 9999;
						}
						.dt-button.buttons-collection {
						  background: #dcdcdc none repeat scroll 0 0;
						  margin: 4px 10px;
						  padding: 1px 20px;
						  position: relative;
						  top: -5px;
						}
				</style>
        <?php
        echo "<div align='center'>
			<ul class='pagination text-center' id='pagination'>";
			if($total_pages == 1){}else{
			  if(!empty($total_pages)):
				for($i=1; $i<=$total_pages; $i++):
				  if($i == 1):
					echo "<li class='active'  id='$i' style='border: 1px solid #000; display: inline; margin: 0px 5px; padding: 2px 5px;'><a style='text-decoration: none;' href='sl_server_ajaxcall.php?page=$i>'>$i</a></li>";
				  else:
					echo "<li id='$i' style='border: 1px solid #000; display: inline; margin: 0px 5px; padding: 2px 5px;'><a style='text-decoration: none;' href='sl_server_ajaxcall.php?page=$i'>$i</a></li>";
				endif;
				endfor;
			 endif;
			}
		echo "</div>";

			}


	echo "
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>";

	mysqli_free_result($result);?>
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#pagination li").live('click',function(e){
     e.preventDefault();
     $("#pagination li").removeClass('active');
     $(this).addClass('active');
    var pageNum = this.id;
    var pagesql = $('input[name=reportstmt]').val();
    var pageLimit = $('input[name=pagelimit]').val();
    $.ajax({
      url: "sl_server_ajaxcall.php",
      type: "post",
      data: {'cbFillCategory':'Pagination','page':parseInt(pageNum),'pageLimit':parseInt(pageLimit), 'pagesql':pagesql},
      cache: false,
      beforeSend: function() { $("#res_table").html("<div class='loadingDiv' align='center'><img src='image/ajax.gif' /></div>"); },
      success: function(d) { $('#res_table').html(d);	}
        });
    });
  });
  </script>

<?php }

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
			FROM sl_object WHERE
			(Name_TX LIKE '%$findtext%' or Desc_TX LIKE '%$findtext%')
			AND Class_TX = 'Glossary'
			AND Group_CD = 'General'
			ORDER BY Type_TX, Name_TX";
	}
	else {
		$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX
			FROM sl_object WHERE
			(Name_TX LIKE '%$findtext%' or Desc_TX LIKE '%$findtext%')
			AND Class_TX = 'Glossary' AND Type_TX = '$inglossary'
			AND Group_CD = 'General'
			ORDER BY Type_TX, Name_TX";
	}
	if ($outglossary == "on") {
		$stmt = "SELECT ROWID,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX
			FROM sl_object WHERE
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
				<TD><B>Subject Area</B></TD>
				<TD><B>Name</B></TD>
				</TR>\n");

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

}

// Add Object
function ProcAddObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex) {

	$stmt = "Insert into sl_object
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,
		Alias_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$name."', '".
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
		Name_TX			='$name'	AND
		Version_DC		='$version'	AND
		Alias_TX		='$alias'	AND
		WRICEF_TX		='$wricef'	AND
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
function ProcModifyObject($rowid,$category,$subject,$class,$type,$name,$n_name,$alias,$wricef,$desc,$tower,$assettype,$alm,
	$usage,$techrules,$comment,$group,$status,$eprow,$epnamex,$epvaluex) {

	$s_user = $_SESSION['s_user'];

	// add slashes to avoid SQL errors
	$name		= trim(addslashes($name));
	$alias		= trim(addslashes($alias));
	$tower		= trim(addslashes($tower));
	$assettype	= trim(addslashes($assettype));
	$wricef		= trim(addslashes($wricef));
	$alm		= trim(addslashes($alm));
	$desc		= trim(addslashes($desc));
	$usage		= trim(addslashes($usage));
	$techrules  = trim(addslashes($techrules));
	$comment	= trim(addslashes($comment));

	// Check to see if n_name (new name) field was made NULL
	if (!$n_name) {
		GenerateHeader(
			"[Modify] <FONT FACE=arial SIZE=2 COLOR=red>
			The Name field cannot be NULL</FONT>");
		$dml->FormModifyObject($rowid);
		exit();
	}

	// Check to see if decription field was made NULL
	if (!$desc) {
		GenerateHeader(
			"[Modify] <FONT FACE=arial SIZE=2 COLOR=red>
			The Description field cannot be NULL</FONT>");
		$dml->FormModifyObject($rowid);
		exit();
	}

	// Check for preexistence of new Object Name in sl_object table if changed
	// Uppercase both test strings to see if the same string is being changed
	if (strtoupper($name) != strtoupper($n_name)) {
		$stmt =
			"SELECT Name_TX FROM sl_object
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$class'		AND
					Type_TX			= '$type'		AND
					Name_TX			= '$n_name';";
		ProcCallDatabase($result,$stmt);
		if (mysqli_num_rows($result) > 0) {
			mysqli_free_result($result);
			GenerateHeader(
				"[Modify] <FONT FACE=arial SIZE=2 COLOR=red>
				The new Object Name - $n_name - already exists -- the name must be unique</FONT>");
			$dml->FormModifyObject($rowid);
			exit();
		}
	}

	$stmt = "
		Update sl_object set
			Name_TX='$n_name',Alias_TX='$alias',Tower_TX='$tower',AssetType_TX='$assettype',WRICEF_TX='$wricef',ALM_TX='$alm',Desc_TX='$desc',
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
			Update sl_attr set
				Value_TX='$epvalue[$counter]'
			WHERE sl_object_FK = $rowid AND Property_TX = '$epname[$counter]'";
		ProcCallDatabase($result,$stmt);
	}

	// If name was updated -- update all foreign references to name
	if (strtoupper($name) != strtoupper($n_name)) {

		$stmt =
			"UPDATE sl_attr SET Name_TX = '$n_name'
				WHERE Name_TX = '$name'";
		ProcCallDatabase($result,$stmt);

		$stmt =
			"UPDATE sl_rel SET P_Name_TX = '$n_name'
				WHERE P_Name_TX = '$name'";
		ProcCallDatabase($result,$stmt);

		$stmt =
			"UPDATE sl_rel SET C_Name_TX = '$n_name'
				WHERE C_Name_TX = '$name'";
		ProcCallDatabase($result,$stmt);

	}

	GenerateHeader("[Main Menu] The entry was modified successfully");
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
		from sl_object
		where
			Category_TX = '$p_category' and Subject_TX = '$p_subject'
			and Class_TX = '$p_class' and Type_TX = '$p_type'
			and Name_TX = '$p_name' and Version_DC = $p_version";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] The specified parent record does not exist.");
		exit();
	}

	$p_rowid = $row->ROWID;

	mysqli_free_result($result);

	$stmt = "
		Insert into sl_rel
			(P_sl_object_FK,
			P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
			C_sl_object_FK,
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
		from sl_object
		where
			Category_TX = '$c_category' and Subject_TX = '$c_subject'
			and Class_TX = '$c_class' and Type_TX = '$c_type'
			and Name_TX = '$c_name' and Version_DC = $c_version";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] The specified child record does not exist.");
		exit();
	}

	$c_rowid = $row->ROWID;

	mysqli_free_result($result);

	$stmt = "
		Insert into sl_rel
			(P_sl_object_FK,
			P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
			C_sl_object_FK,
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
		Update sl_user set
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

	$stmt = "SELECT Password_TX from sl_user where User_ID = '$s_user'";

	ProcCallDatabase($result,$stmt);

	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}

	$password = $row->Password_TX;

	mysqli_free_result($result);

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
		Update sl_user set
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
		Insert into sl_user
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
	ProcCallDatabase($result,"SELECT User_ID FROM sl_user WHERE User_ID = '$userid';");
	if (mysqli_num_rows($result) > 0) {
		GenerateHeader(
			"[Admin Create User] <font color=red>
			<b>User ID already exists please pick another name.</b></font>");
		FormAddUser($userid,$usertype,$password,$firstname,$lastname,
		$title,$email,$phone,$company,$dept,$url,$rels,$news);
		exit();
	}
	mysqli_free_result($result);


	ProcCallDatabase($result,$stmt);
 $stmt;
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
		Update sl_user set
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
		Update sl_user set
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
		"UPDATE sl_object SET Creator_ID = '$n_creator'
			WHERE Creator_ID = '$creator'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET Creator_ID = '$n_creator'
			WHERE Creator_ID = '$creator'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_prop SET Creator_ID = '$n_creator'
			WHERE Creator_ID = '$creator'";
	ProcCallDatabase($result,$stmt);

	// Entry modified
	GenerateHeader("[Manage User] The object creator was modified successfully");
	$ddl->FormButtonsManageUser();
	exit();
}

// Modify Configuration
function ProcModifyConfig($colorbkg,$colormsg,$logoprim,$readonly,
	$lite,$adhocsql,$maxrows,$loginmemo,$configpath,$dbbinpath,$oraclestr,$timeout,$perpage) {

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
		$perpage		= trim(addslashes($perpage));

	// Check if first name is filled in
	if (strlen($colorbkg) != 6 or strlen($colormsg) != 6 or $logoprim == "") {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b> All fields must be entered correctly - see manual</b></font>");
		$dml->FormModifyConfiguration();
		exit();
	}

	// Check if read only flag is Y or N
	if ($readonly != 'Y' and $readonly != 'N') {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>Read Only Flag must be Y or N</b></font>");
		$dml->FormModifyConfiguration();
		exit();
	}

	// Check if glosssary flag is Y or N
	if ($lite != 'Y' and $lite != 'N') {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>SL Lite Flag must be Y or N</b></font>");
		$dml->FormModifyConfiguration();
		exit();
	}

	// Check if Ad Hoc SQL flag is Y or N
	if ($adhocsql != 'Y' and $adhocsql != 'N') {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>Ad Hoc SQL Flag must be Y or N</b></font>");
		$dml->FormModifyConfiguration();
		exit();
	}

	// Check if max rows is in range
	if ($maxrows < 10 or $maxrows > 10000) {
		GenerateHeader(
			"[Modify Configuration] &nbsp;<font color=red>
			<b>Max Rows Returned must be an integer between 10 and 10000</b></font>");
		$dml->FormModifyConfiguration();
		exit();
	}

	// If all checked out OK change the configuration values
	$stmt = "
		Update sl_config set
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
			Attr_10_TX ='$perpage',
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
		"DELETE from sl_rel
		where P_sl_object_FK = $p_rowid
		and C_sl_object_FK = $c_rowid";

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
		FROM sl_category ORDER BY Category_TX";

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

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

}

// Select Subject
function ProcSelectSubject() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Subject_ID, Category_TX, Subject_TX
		FROM sl_subject ORDER BY Category_TX, Subject_TX";

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

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

}

// Select Class
function ProcSelectClass() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Class_ID, Category_TX, Subject_TX, Class_TX
		FROM sl_class ORDER BY Category_TX, Subject_TX, Class_TX";

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

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

}

// Select Type
function ProcSelectType() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT Type_ID, Category_TX, Subject_TX, Class_TX, Type_TX
		FROM sl_type ORDER BY Category_TX, Subject_TX, Class_TX, Type_TX";

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

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

}

// Select Schema
function ProcSelectAssociation() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT ROWID, P_Category_TX, P_Subject_TX, P_Class_TX,
		C_Category_TX, C_Subject_TX, C_Class_TX
		FROM sl_assoc ORDER BY P_Category_TX, P_Subject_TX, P_Class_TX";

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

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

}

// Select Property
function ProcSelectProperty() {
	global $g_colorbkg, $g_main;

	$stmt = "SELECT ROWID, Category_TX, Subject_TX, Class_TX, Property_TX, Default_TX
		FROM sl_prop ORDER BY Category_TX, Subject_TX, Class_TX, Property_TX";

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

			while (($row = mysqli_fetch_object($result))){

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

	mysqli_free_result($result);

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

	// Check for preexistence of new Property in sl_prop table
	$stmt =
		"SELECT ROWID FROM sl_prop
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject' and
				Class_TX		= '$class' and
				Property_TX		= '$property';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
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

	$stmt = "Insert into sl_prop
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

	// Add a new sl_attr record for each existing sl_object
	// that matches the criteria of the new sl_prop record

	$stmt = "INSERT INTO sl_attr (
			sl_object_FK,
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
				sl_object
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
		$ddl->FormAddCategory($category,$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Category in sl_category table
	$stmt =
		"SELECT Category_TX FROM sl_category
			WHERE
				Category_TX		= '$category';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
		GenerateHeader(
			"[Add Category] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Category Name - $category - already exists -- the name must be unique</FONT>");
		$ddl->FormAddCategory($category,$created,$creator,$changed,$changer,$status);
		exit();
	}

	$stmt = "Insert into sl_category
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
		$ddl->FormAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Subject in sl_subject table
	$stmt =
		"SELECT Subject_TX FROM sl_subject
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
		GenerateHeader(
			"[Add Subject] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Subject Name - $subject - already exists -- the name must be unique</FONT>");
		$ddl->FormAddSubject($category,$subject,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// lookup Category_ID from sl_category
	$stmt = "SELECT Category_ID
		FROM sl_category WHERE Category_TX='$category'";
	ProcCallDatabase($result,$stmt);
	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}
	$categoryid	= $row->Category_ID;
	mysqli_free_result($result);

	$stmt = "Insert into sl_subject
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
		$ddl->FormAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Class in sl_class table
	$stmt =
		"SELECT Class_TX FROM sl_class
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject' and
				Class_TX		= '$class';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
		GenerateHeader(
			"[Add Class] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Class Name - $class - already exists -- the name must be unique</FONT>");
		$ddl->FormAddClass($category,$subject,$class,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// lookup Category_ID, Subject_ID from sl_subject
	$stmt = "SELECT Category_ID,Subject_ID
		FROM sl_subject
		WHERE Category_TX='$category' and Subject_TX='$subject'";
	ProcCallDatabase($result,$stmt);
	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}
	$categoryid	= $row->Category_ID;
	$subjectid	= $row->Subject_ID;
	mysqli_free_result($result);

	$stmt = "Insert into sl_class
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
		$ddl->FormAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// Check for preexistence of new Type in sl_type table
	$stmt =
		"SELECT Type_TX FROM sl_type
			WHERE
				Category_TX		= '$category' and
				Subject_TX		= '$subject' and
				Class_TX		= '$class' and
				Type_TX		= '$type';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
		GenerateHeader(
			"[Add Type] <FONT FACE=arial SIZE=2 COLOR=red>
			The new Type Name - $type - already exists -- the name must be unique</FONT>");
		$ddl->FormAddType($category,$subject,$class,$type,
		$created,$creator,$changed,$changer,$status);
		exit();
	}

	// lookup Category_ID, Subject_ID, Class_ID from sl_class
	$stmt = "SELECT Category_ID,Subject_ID,Class_ID
		FROM sl_class
		WHERE Category_TX='$category' and Subject_TX='$subject' and Class_TX='$class'";
	ProcCallDatabase($result,$stmt);
	if (!($row = mysqli_fetch_object($result))){
		ProcErrMsg("[Error] Internal error: the entry does not exist");
		exit();
	}
	$categoryid	= $row->Category_ID;
	$subjectid	= $row->Subject_ID;
	$classid	= $row->Class_ID;
	mysqli_free_result($result);

	// Set defaults (currently unused fields)
	$categorydc		= 0;
	$subjectdc		= 0;
	$classdc		= 0;
	$typedc			= 0;
	$unique			= "N";

	$stmt = "Insert into sl_type
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

	// Check for preexistence of new Association in sl_assoc table
	$stmt =
		"SELECT ROWID FROM sl_assoc
			WHERE
				P_Category_TX	= '$category' and
				P_Subject_TX	= '$subject' and
				P_Class_TX		= '$p_class' and
				C_Class_TX		= '$c_class';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
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

	$stmt = "Insert into sl_assoc
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
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status) {

	$version	= $version + 1;
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];

	$stmt = "Insert into sl_object
		(Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,
		Alias_TX,WRICEF_TX,Desc_TX,Usage_TX,TechRules_TX,Comment_TX,Group_CD,
		Created_DS,Creator_ID,Changed_DS,Changer_ID,Status_CD)
		values ('".
			$category."', '".
			$subject."', '".
			$class."', '".
			$type."', '".
			$name."', '".
			$version."', '".
			$alias."', '".
			$wricef."', '".
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
		Name_TX			='$name'	AND
		Version_DC		='$version'	AND
		Alias_TX		='$alias'	AND
		WRICEF_TX		='$wricef'	AND
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

	// Version extended properties
	// NOTE: The next SQL statement requires MySQL version 4.0.14 or greater
	// for insert and select from the same table

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
				sl_attr
			Where
				sl_object_FK = $origrowid";

	ProcCallDatabase($result,$stmt);

	// Version Parent Relationships

	$stmt = "
		Insert into sl_rel (
			P_sl_object_FK,
			P_Category_TX,
			P_Subject_TX,
			P_Class_TX,
			P_Type_TX,
			P_Name_TX,
			P_Version_DC,
			C_sl_object_FK,
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
				C_sl_object_FK,
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
				sl_rel
			Where
				P_sl_object_FK = $origrowid";

	ProcCallDatabase($result,$stmt);

	// Version Child Relationships

	$stmt = "
		Insert into sl_rel (
			P_sl_object_FK,
			P_Category_TX,
			P_Subject_TX,
			P_Class_TX,
			P_Type_TX,
			P_Name_TX,
			P_Version_DC,
			C_sl_object_FK,
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
				P_sl_object_FK,
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
				sl_rel
			Where
				C_sl_object_FK = $origrowid";

	ProcCallDatabase($result,$stmt);

	// Set Original Object to status Inactive so it cannot be changed or versioned again

	$stmt = "
		UPDATE sl_object
			SET Status_CD = 'Versioned'
			WHERE ROWID = $origrowid";

	ProcCallDatabase($result,$stmt);

	GenerateHeader("[Modify] The object, its properties and relationships were versioned successfully");
	$dml->FormModifyObject($rowid);
	exit();

}

// Manage Schema
// Delete Schema Category (CASCADE DELETE OF ALL RELATED RECORDS IN DATABASE)
function ProcDeleteSchemaCategory($category) {

	$stmt =
		"DELETE FROM sl_category
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_subject
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_class
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_assoc
		WHERE P_Category_TX = '$category' OR C_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_attr
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_type
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_rel
		WHERE P_Category_TX = '$category' OR C_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_prop
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_object
		WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	// Entry deleted
	GenerateHeader("[Manage Schema] The Schema Category was deleted successfully");
	FormButtonsManageSchema();
	exit();
}

// Modify Schema Category (CASCADE MODIFY OF ALL RELATED RECORDS IN DATABASE)
function ProcModifySchemaCategory($category,$n_category,$save_rowid) {

	// Set POSTauggie value for return trip if error is detected
	$POSTauggie = $save_rowid;

	// Check if replacement Category value is null
	if ($n_category == "") {
		GenerateHeader("[Modify Schema Category] <FONT FACE=arial SIZE=2 COLOR=red>
			The Category replacement value cannot be NULL</FONT>");
		FormModifySchemaCategory($POSTauggie);
		exit();
	}

	// Check for preexistence of replacement Category value in sl_category table
	if (strtoupper($category) != strtoupper($n_category)) {
		$stmt =
			"SELECT Category_TX FROM sl_category
				WHERE Category_TX = '$n_category';";
		ProcCallDatabase($result,$stmt);
		if (mysqli_num_rows($result) > 0) {
			mysqli_free_result($result);
			GenerateHeader("[Modify Schema Category] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_category - already exists as a Category</FONT>");
			FormModifySchemaCategory($POSTauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE sl_category SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_subject SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_class SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_assoc SET P_Category_TX = '$n_category', C_Category_TX = '$n_category'
			WHERE P_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_attr SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_type SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET P_Category_TX = '$n_category', C_Category_TX = '$n_category'
			WHERE P_Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_prop SET Category_TX = '$n_category'
			WHERE Category_TX = '$category'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_object SET Category_TX = '$n_category'
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
		"DELETE FROM sl_subject
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_class
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_type
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_assoc
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject')
				OR (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_prop
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_rel
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

	// Set POSTauggie value for return trip if error is detected
	$POSTauggie = $save_rowid;

	// Check if replacement Category value is null
	if ($n_subject == "") {
		GenerateHeader("[Modify Schema Subject] <FONT FACE=arial SIZE=2 COLOR=red>
			The Subject replacement value cannot be NULL</FONT>");
		FormModifySchemaSubject($POSTauggie);
		exit();
	}

	// Check for preexistence of replacement Subject value in sl_subject table
	if (strtoupper($subject) != strtoupper($n_subject)) {
		$stmt =
			"SELECT Subject_TX FROM sl_subject
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$n_subject'";
		ProcCallDatabase($result,$stmt);
		if (mysqli_num_rows($result) > 0) {
			mysqli_free_result($result);
			GenerateHeader("[Modify Schema Subject] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_subject - already exists as a Subject</FONT>");
			FormModifySchemaSubject($POSTauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE sl_subject SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_class SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_type SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_assoc SET P_Subject_TX = '$n_subject', C_Subject_TX = '$n_subject'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_prop SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_object SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_attr SET Subject_TX = '$n_subject'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET P_Subject_TX = '$n_subject', C_Subject_TX = '$n_subject'
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
		"DELETE FROM sl_class
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_type
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_assoc
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
		"DELETE FROM sl_prop
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_rel
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

	// Set POSTauggie value for return trip if error is detected
	$POSTauggie = $save_rowid;

	// Check if replacement Category value is null
	if ($n_class == "") {
		GenerateHeader("[Modify Schema Class] <FONT FACE=arial SIZE=2 COLOR=red>
			The Class replacement value cannot be NULL</FONT>");
		FormModifySchemaClass($POSTauggie);
		exit();
	}

	// Check for preexistence of replacement Class value in sl_class table
	if (strtoupper($class) != strtoupper($n_class)) {
		$stmt =
			"SELECT Class_TX FROM sl_class
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$n_class'";
		ProcCallDatabase($result,$stmt);
		if (mysqli_num_rows($result) > 0) {
			mysqli_free_result($result);
			GenerateHeader("[Modify Schema Class] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_class - already exists as a Class</FONT>");
			FormModifySchemaClass($POSTauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE sl_class SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_type SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_assoc SET P_Class_TX = '$n_class'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_assoc SET C_Class_TX = '$n_class'
			WHERE (
				C_Category_TX	= '$category'	AND
				C_Subject_TX	= '$subject'	AND
				C_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_prop SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_object SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_attr SET Class_TX = '$n_class'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET P_Class_TX = '$n_class'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET C_Class_TX = '$n_class'
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
		"DELETE FROM sl_type
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_object
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_attr
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_rel
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

	// Set POSTauggie value for return trip if error is detected
	$POSTauggie = $save_rowid;

	// Check if replacement Type value is null
	if ($n_type == "") {
		GenerateHeader("[Modify Schema Type] <FONT FACE=arial SIZE=2 COLOR=red>
			The Type replacement value cannot be NULL</FONT>");
		FormModifySchemaType($POSTauggie);
		exit();
	}

	// Check for preexistence of replacement Type value in sl_type table
	if (strtoupper($type) != strtoupper($n_type)) {
		$stmt =
			"SELECT Type_TX FROM sl_type
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$class'		AND
					Type_TX			= '$n_type'";
		ProcCallDatabase($result,$stmt);
		if (mysqli_num_rows($result) > 0) {
			mysqli_free_result($result);
			GenerateHeader("[Modify Schema Type] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_type - already exists as a Type</FONT>");
			FormModifySchemaType($POSTauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE sl_type SET Type_TX = '$n_type'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_object SET Type_TX = '$n_type'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_attr SET Type_TX = '$n_type'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Type_TX			= '$type'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET P_Type_TX = '$n_type'
			WHERE (
				P_Category_TX	= '$category'	AND
				P_Subject_TX	= '$subject'	AND
				P_Class_TX		= '$class'		AND
				P_Type_TX		= '$type')";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_rel SET C_Type_TX = '$n_type'
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
		"DELETE FROM sl_assoc
			WHERE
				P_Category_TX	= '$p_category'	AND
				P_Subject_TX	= '$p_subject'	AND
				P_Class_TX		= '$p_class'	AND
				C_Class_TX		= '$c_class'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_rel
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
		"DELETE FROM sl_prop
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Property_TX		= '$property'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"DELETE FROM sl_attr
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

	// Set POSTauggie value for return trip if error is detected
	$POSTauggie = $save_rowid;

	// Check if replacement Property value is null
	if ($n_property == "") {
		GenerateHeader("[Modify Schema Property] <FONT FACE=arial SIZE=2 COLOR=red>
			The Property replacement value cannot be NULL</FONT>");
		FormModifySchemaProp($POSTauggie);
		exit();
	}

	// Check for preexistence of replacement Property value in sl_property table
	if (strtoupper($property) != strtoupper($n_property)) {
		$stmt =
			"SELECT Property_TX FROM sl_prop
				WHERE
					Category_TX		= '$category'	AND
					Subject_TX		= '$subject'	AND
					Class_TX		= '$class'		AND
					Property_TX		= '$n_property'";
		ProcCallDatabase($result,$stmt);
		if (mysqli_num_rows($result) > 0) {
			mysqli_free_result($result);
			GenerateHeader("[Modify Schema Property] <FONT FACE=arial SIZE=2 COLOR=red>
				The replacement value - $n_property - already exists as a Property</FONT>");
			FormModifySchemaProp($POSTauggie);
			exit();
		}
	}

	$stmt =
		"UPDATE sl_prop SET Property_TX = '$n_property', Default_TX = '$n_default'
			WHERE
				Category_TX		= '$category'	AND
				Subject_TX		= '$subject'	AND
				Class_TX		= '$class'		AND
				Property_TX		= '$property'";
	ProcCallDatabase($result,$stmt);

	$stmt =
		"UPDATE sl_attr SET Property_TX = '$n_property'
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
	<FORM ACTION=$g_main METHOD=POST>
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
		Insert into sl_event (
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

// Display any classifications that is in the sl_object table
// This proc is used to displayed any part of the taxonomy for the search function
// If data exists in the object table that is not defined in the type table may be
// a logical error but it still needs to be able to be selected. The taxonomy contains
// all values that can be entered -- there still can be information in the database
// that was entered for a different reason, e.g. SuperLuminate metadata

function ProcSearchDropDown(){

	echo "
	<table class=normal width=620 border=0>
		<tr>";
			global $g_host, $g_user, $g_pass,$g_database;
			$conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
			/*$stmt = "SELECT DISTINCT Category_TX FROM sl_object order by Category_TX";
			$result= mysqli_query($conn,$stmt);

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

			$stmt = "SELECT DISTINCT Subject_TX FROM sl_object order by Subject_TX";
			$result= mysqli_query($conn,$stmt);
		echo "<td><select name=subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}
		echo "</select></td>";*/

			$stmt = "SELECT DISTINCT Class_TX FROM sl_object order by Class_TX";
			$result= mysqli_query($conn,$stmt);
		echo "<td><select name=class
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:318px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}
		echo "</select></td>";

			$stmt = "SELECT DISTINCT Type_TX FROM sl_object order by Type_TX";
			$result= mysqli_query($conn,$stmt);
		echo "<td><select name=type
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:318px; background-color:white\">";
			printf("<option selected value=''>");
			for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
			{
				$myrow = mysqli_fetch_row($result);
				printf("<option value='$myrow[0]'>$myrow[0]");
			}

			mysqli_free_result($result);

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

 	if (mysqli_num_rows($result) == 0):
		echo "<B>Query executed successfully! -- zero rows returned!</B>";
	else:
    echo "<TABLE BORDER=1><THEAD><TR>";
				$all_property = array();
				while ($property = mysqli_fetch_field($result)) {
    echo '<TD>' . $property->name . '</TD>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
				}
		echo "</TR></THEAD>";
    echo "<TBODY>";
			while ($row = mysqli_fetch_array($result)) {
		echo "<TR>";
			foreach ($all_property as $item) {
    echo '<TD>' . $row[$item] . '</TD>'; //get items using property value
      }
		echo"</TR>";
			}
		echo "</TBODY>";
		echo "</TABLE>";
	  mysqli_free_result($result);
	  endif	?>

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
	$link = mysqli_connect($g_host, $g_user, $g_pass);
	if (!($link=mysqli_connect($g_host, $g_user, $g_pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $g_host, by user: $g_user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"$returnloc\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Select the Database
	if (!mysqli_select_db($link, $g_database)) {
		$errno = mysqli_errno($link);
		$error = mysqli_error($link);
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
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"$returnloc\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement

	if (!($result= mysqli_query($link, $stmt))) {
    $errno = mysqli_errno($link);
		$error = mysqli_error($link);
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] Error in executing statement : $stmt
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			error: $errno, $error
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
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
	if (!($link=mysqli_connect($hostport, $user, $pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $host, by user: $user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Select the Database
	if (!mysqli_select_db($schema, $link)) {
		$errno = mysqli_errno($link);
		$error = mysqli_error($link);
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
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement
	if (!($result= mysqli_query($link, $stmt))) {
		$errno = mysqli_errno($link);
		$error = mysqli_error($link);
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
		<FORM ACTION=$g_main METHOD=POST>
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
		<FORM ACTION=$g_main METHOD=POST>
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
		<FORM ACTION=$g_main METHOD=POST>
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
		<FORM ACTION=$g_main METHOD=POST>
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
	if (!($link=mysqli_connect($hostport, $user, $pass))) {
		echo "
		<hr size=1 width=620 noshade align=left>
		<BLOCKQUOTE><H3><FONT COLOR=#CC0000S>
			[Error] error connecting to host: $host, by user: $user
		</FONT></H3></BLOCKQUOTE>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Select the Database
	if (!mysqli_select_db($schema, $link)) {
		$errno = mysqli_errno($link);
		$error = mysqli_error($link);
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
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

	// Execute the Statement
	if (!($result= mysqli_query($link, $stmt))) {
		$errno = mysqli_errno($link);
		$error = mysqli_error($link);
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
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Database Adapters\"
				style=\"color:black; width:180px;\">
		</FORM>";
		exit();
	}

}









function ProcSelectBox($selection){ ?>
	<td align=left>
		<select name="<?php echo $selection ?>"
			style="color:black; font-family:Times; font-weight:bold;
			font-size:12px; width:150px; background-color:white">
			<option></option><option></option><option></option>
			<option>--------- Not Yet Loaded ---------</option>
		</select>&nbsp;
	</td>

<?php }

// Load Database with SuperLuminate Self-defining Metadata From Load File
function ProcLoadMetadata() {
	global $g_configpath, $g_main;

	// load metadata into sl_object table
	$filename = $g_configpath."metadata_sl_object_load.csv";

	// Skip first record (header record)in load file
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE sl_object
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object WHERE Category_TX = ''";

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
		UPDATE sl_object SET
			Source_ID		='$source',
			Group_CD		='$group',
			Created_DS		='$created',
			Creator_ID		='$creator',
			Changed_DS		='$changed',
			Changer_ID		='$changer',
			Status_CD		='$status'
		WHERE Created_DS IS NULL";

	ProcCallDatabase($result,$stmt);

	// load metadata into sl_rel table
	$filename = $g_configpath."metadata_sl_rel_load.csv";

	// Skip first record (header record)in load file
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE sl_rel
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES
			(P_sl_object_FK,P_Category_TX,P_Subject_TX,P_Class_TX,P_Type_TX,P_Name_TX,P_Version_DC,
				C_sl_object_FK,C_Category_TX,C_Subject_TX,C_Class_TX,C_Type_TX,C_Name_TX,C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	// Add housekeeping attributes to inserted records
	$created	= date("Y-m-d H:i:s");
	$creator	= $_SESSION['s_user'];
	$changed	= date("Y-m-d H:i:s");
	$changer	= $_SESSION['s_user'];
	$status		= "Active";

	$stmt = "
		UPDATE sl_rel SET
			Created_DS		='$created',
			Creator_ID		='$creator',
			Changed_DS		='$changed',
			Changer_ID		='$changer',
			Status_CD		='$status'
		WHERE Created_DS IS NULL";

	ProcCallDatabase($result,$stmt);

	// load metadata into sl_attr table
	$filename = $g_configpath."metadata_sl_attr_load.csv";

	// Skip first record (header record)in load file
	// Expecting $result=1 from ProcCallDatabase function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE sl_attr
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES
			(sl_object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,
				Name_TX,Version_DC,Property_TX,Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	// Update sl_rel table with parent sl_object keys
	// Update Relationship parent key
	// Update sl_rel.P_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.P_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.P_Category_TX	= sl_object.Category_TX		AND
			sl_rel.P_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.P_Class_TX		= sl_object.Class_TX		AND
			sl_rel.P_Type_TX		= sl_object.Type_TX			AND
			sl_rel.P_Name_TX		= sl_object.Name_TX			AND
			sl_rel.P_Version_DC		= sl_object.Version_DC		AND
			sl_rel.P_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	// Update sl_rel table with child sl_object keys
	// Update Relationship child key
	// Update sl_rel.C_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.C_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.C_Category_TX	= sl_object.Category_TX		AND
			sl_rel.C_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.C_Class_TX		= sl_object.Class_TX		AND
			sl_rel.C_Type_TX		= sl_object.Type_TX			AND
			sl_rel.C_Name_TX		= sl_object.Name_TX			AND
			sl_rel.C_Version_DC		= sl_object.Version_DC		AND
			sl_rel.C_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	// Update sl_attr table with sl_object keys
	// Update Attribute key
	// Update sl_attr.sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_attr,sl_object
		SET sl_attr.sl_object_FK	= sl_object.ROWID
		WHERE
			sl_attr.Category_TX		= sl_object.Category_TX		AND
			sl_attr.Subject_TX		= sl_object.Subject_TX		AND
			sl_attr.Class_TX		= sl_object.Class_TX		AND
			sl_attr.Type_TX			= sl_object.Type_TX			AND
			sl_attr.Name_TX			= sl_object.Name_TX			AND
			sl_attr.Version_DC		= sl_object.Version_DC		AND
			sl_attr.sl_object_FK	= 0";

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
	if (mysqli_num_rows($result) == 0) {
		mysqli_free_result($result);
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

	// Check for existence of schema in sl_object table
	$stmt =
		"SELECT Name_TX FROM sl_object
			WHERE
				Category_TX	= '$category' and
				Subject_TX	= '$subject' and
				Class_TX	= 'Database' and
				Type_TX		= '$type' and
				Name_TX		= CONCAT('$host','.','$schema');";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
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
			DROP TABLE IF EXISTS sl_object_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_object_Import (
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				WRICEF_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules_TX		text,
				Comment_TX			text)
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created sl_object_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS sl_attr_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_attr_Import (
				sl_object_FK		int(11),
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
			=> Created sl_attr_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS  sl_rel_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_rel_Import (
				P_sl_object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_sl_object_FK		int(11),
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
			=> Created sl_rel_Import";
	flush();

	// Count Database records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(DISTINCT TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema';";
	ProcCallDatabaseMySQL($result,$stmt,$hostportport,$user,$pass,$schema);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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

	// Load Object relationships into sl_rel table
	// Count Database to Table relationships
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
			=> Loading Database record to sl_object_Import from $dbadptdatabase";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptdatabase' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table records to sl_object_Import from $dbadpttable";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadpttable' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column records to sl_object_Import from $dbadptcolumn";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptcolumn' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr1' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr2' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr3";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr3' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr4";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr4' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr5";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr5' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database --< Table records to sl_rel_Import from $dbadptrel1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel1' REPLACE INTO TABLE sl_rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_sl_object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_sl_object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table --< Column records to sl_rel_Import from $dbadptrel2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel2' REPLACE INTO TABLE sl_rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_sl_object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_sl_object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Insert / Update base tables from staging data tables";
	flush();

	// Insert new sl_object, sl_attr, and sl_rel records from Import tables
	// Update any existing sl_object, sl_attr from Import tables
	// Soft Delete any sl_object records that are not found in the Import tables

	// Insert - Update sl_object from sl_object_Import
	$stmt = "INSERT INTO sl_object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				WRICEF_TX,
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
				WRICEF_TX,
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
			FROM sl_object_Import
			ON DUPLICATE KEY UPDATE
				Comment_TX=sl_object_Import.Comment_TX,
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_object from sl_object_Import";
	flush();

	// Insert - Update sl_attr from sl_attr_Import
	$stmt = "INSERT INTO sl_attr (
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
			SELECT
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX
			FROM sl_attr_Import
			ON DUPLICATE KEY UPDATE
				Value_TX=sl_attr_Import.Value_TX;";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_attr from sl_attr_Import";
	flush();

	// Insert - Update sl_rel from sl_rel_Import
	$stmt = "INSERT INTO sl_rel (
				P_sl_object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_sl_object_FK,
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
				P_sl_object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_sl_object_FK,
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
			FROM sl_rel_Import
			ON DUPLICATE KEY UPDATE
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_rel from sl_rel_Import";
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Setup Foreign Key Relationships";
	flush();

	// Update relationship ROWID values
	// Count sl_rel relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM sl_rel
			WHERE P_sl_object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);

	// Update sl_rel table with parent sl_object keys
	// Update Relationship parent key
	// Update sl_rel.P_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.P_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.P_Category_TX	= sl_object.Category_TX		AND
			sl_rel.P_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.P_Class_TX		= sl_object.Class_TX		AND
			sl_rel.P_Type_TX		= sl_object.Type_TX			AND
			sl_rel.P_Name_TX		= sl_object.Name_TX			AND
			sl_rel.P_Version_DC		= sl_object.Version_DC		AND
			sl_rel.P_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Parent Object relationships in sl_rel";
	flush();

	// Update sl_rel table with child sl_object keys
	// Update Relationship child key
	// Update sl_rel.C_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.C_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.C_Category_TX	= sl_object.Category_TX		AND
			sl_rel.C_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.C_Class_TX		= sl_object.Class_TX		AND
			sl_rel.C_Type_TX		= sl_object.Type_TX			AND
			sl_rel.C_Name_TX		= sl_object.Name_TX			AND
			sl_rel.C_Version_DC		= sl_object.Version_DC		AND
			sl_rel.C_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Child Object relationships in sl_rel";
	flush();

	// Count sl_attr relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM sl_attr
			WHERE sl_object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);

	// Update sl_attr table with sl_object keys
	// Update Attribute key
	// Update sl_attr.sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_attr,sl_object
		SET sl_attr.sl_object_FK	= sl_object.ROWID
		WHERE
			sl_attr.Category_TX		= sl_object.Category_TX		AND
			sl_attr.Subject_TX		= sl_object.Subject_TX		AND
			sl_attr.Class_TX		= sl_object.Class_TX		AND
			sl_attr.Type_TX			= sl_object.Type_TX			AND
			sl_attr.Name_TX			= sl_object.Name_TX			AND
			sl_attr.Version_DC		= sl_object.Version_DC		AND
			sl_attr.sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Extended Object relationships in sl_attr";
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
//	// Count sl_object (Table) records to be soft deleted
//	// Column analysis takes too long for large data loads
//	$stmt = "
//		SELECT COUNT(*) rowcount FROM sl_object T1
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM sl_object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);
//	$row = mysqli_fetch_object($result);
//	$rowcount	= $row->rowcount;
//	mysqli_free_result($result);
//
//	echo "	<BR>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Soft Deleting [ $rowcount ] sl_object records that no longer exist in $host.$schema";
//	flush();
//
//	// Soft Delete sl_object records that were not imported
//	$stmt = "
//		UPDATE sl_object T1 SET Comment_TX =
//		'*** SOFT DELETE *** THIS RECORD WAS FOUND TO BE DELETED FROM THE SOURCE SYSTEM DURING THE LAST IMPORT.'
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM sl_object_Import T2
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

	// Check for preexistence of new schema in sl_object table
	$stmt =
		"SELECT Name_TX FROM sl_object
			WHERE
				Category_TX	= '$category' and
				Subject_TX	= '$subject' and
				Class_TX	= 'Database' and
				Type_TX		= '$type' and
				Name_TX		= CONCAT('$host','.','$schema');";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
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
			DROP TABLE IF EXISTS sl_object_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_object_Import (
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				WRICEF_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules_TX		text,
				Comment_TX			text)
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created sl_object_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS sl_attr_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_attr_Import (
				sl_object_FK		int(11),
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
			=> Created sl_attr_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS  sl_rel_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_rel_Import (
				P_sl_object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_sl_object_FK		int(11),
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
			=> Created sl_rel_Import";
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

	// Load Object relationships into sl_rel table
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
			=> Loading Database record to sl_object_Import from $dbadptdatabase";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptdatabase' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table records to sl_object_Import from $dbadpttable";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadpttable' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column records to sl_object_Import from $dbadptcolumn";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptcolumn' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr1' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr2' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr3";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr3' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr4";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr4' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr5";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr5' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database --< Table records to sl_rel_Import from $dbadptrel1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel1' REPLACE INTO TABLE sl_rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(P_sl_object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_sl_object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table --< Column records to sl_rel_Import from $dbadptrel2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel2' REPLACE INTO TABLE sl_rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY ',\r\n'
			IGNORE 0 LINES
			(P_sl_object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_sl_object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Insert / Update base tables from staging data tables";
	flush();

	// Insert new sl_object, sl_attr, and sl_rel records from Import tables
	// Update any existing sl_object, sl_attr from Import tables
	// Soft Delete any sl_object records that are not found in the Import tables

	// Insert - Update sl_object from sl_object_Import
	$stmt = "INSERT INTO sl_object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				WRICEF_TX,
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
				WRICEF_TX,
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
			FROM sl_object_Import
			ON DUPLICATE KEY UPDATE
				Comment_TX=sl_object_Import.Comment_TX,
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_object from sl_object_Import";
	flush();

	// Insert - Update sl_attr from sl_attr_Import
	$stmt = "INSERT INTO sl_attr (
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
			SELECT
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX
			FROM sl_attr_Import
			ON DUPLICATE KEY UPDATE
				Value_TX=sl_attr_Import.Value_TX;";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_attr from sl_attr_Import";
	flush();

	// Insert - Update sl_rel from sl_rel_Import
	$stmt = "INSERT INTO sl_rel (
				P_sl_object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_sl_object_FK,
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
				P_sl_object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_sl_object_FK,
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
			FROM sl_rel_Import
			ON DUPLICATE KEY UPDATE
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_rel from sl_rel_Import";
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Setup Foreign Key Relationships";
	flush();

	// Update relationship ROWID values
	// Count sl_rel relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM sl_rel
			WHERE P_sl_object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);

	// Update sl_rel table with parent sl_object keys
	// Update Relationship parent key
	// Update sl_rel.P_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.P_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.P_Category_TX	= sl_object.Category_TX		AND
			sl_rel.P_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.P_Class_TX		= sl_object.Class_TX		AND
			sl_rel.P_Type_TX		= sl_object.Type_TX			AND
			sl_rel.P_Name_TX		= sl_object.Name_TX			AND
			sl_rel.P_Version_DC		= sl_object.Version_DC		AND
			sl_rel.P_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Parent Object relationships in sl_rel";
	flush();

	// Update sl_rel table with child sl_object keys
	// Update Relationship child key
	// Update sl_rel.C_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.C_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.C_Category_TX	= sl_object.Category_TX		AND
			sl_rel.C_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.C_Class_TX		= sl_object.Class_TX		AND
			sl_rel.C_Type_TX		= sl_object.Type_TX			AND
			sl_rel.C_Name_TX		= sl_object.Name_TX			AND
			sl_rel.C_Version_DC		= sl_object.Version_DC		AND
			sl_rel.C_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Child Object relationships in sl_rel";
	flush();

	// Count sl_attr relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM sl_attr
			WHERE sl_object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);

	// Update sl_attr table with sl_object keys
	// Update Attribute key
	// Update sl_attr.sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_attr,sl_object
		SET sl_attr.sl_object_FK	= sl_object.ROWID
		WHERE
			sl_attr.Category_TX		= sl_object.Category_TX		AND
			sl_attr.Subject_TX		= sl_object.Subject_TX		AND
			sl_attr.Class_TX		= sl_object.Class_TX		AND
			sl_attr.Type_TX			= sl_object.Type_TX			AND
			sl_attr.Name_TX			= sl_object.Name_TX			AND
			sl_attr.Version_DC		= sl_object.Version_DC		AND
			sl_attr.sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Extended Object relationships in sl_attr";
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
//	// Count sl_object (Table) records to be soft deleted
//	// Column analysis takes too long for large data loads
//	$stmt = "
//		SELECT COUNT(*) rowcount FROM sl_object T1
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM sl_object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);
//	$row = mysqli_fetch_object($result);
//	$rowcount	= $row->rowcount;
//	mysqli_free_result($result);
//
//	echo "	<BR>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Soft Deleting [ $rowcount ] sl_object records that no longer exist in $host.$schema";
//	flush();
//
//	// Soft Delete sl_object records that were not imported
//	$stmt = "
//		UPDATE sl_object T1 SET Comment_TX =
//		'*** SOFT DELETE *** THIS RECORD WAS FOUND TO BE DELETED FROM THE SOURCE SYSTEM DURING THE LAST IMPORT.'
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM sl_object_Import T2
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
	if (mysqli_num_rows($result) == 0) {
		mysqli_free_result($result);
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

	// Check for existence of schema in sl_object table
	$stmt =
		"SELECT Name_TX FROM sl_object
			WHERE
				Category_TX	= '$category' and
				Subject_TX	= '$subject' and
				Class_TX	= 'Database' and
				Type_TX		= '$type' and
				Name_TX		= CONCAT('$host','.','$schema');";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
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
			DROP TABLE IF EXISTS sl_object_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_object_Import (
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				WRICEF_TX			varchar(100),
				Desc_TX				text,
				Usage_TX			text,
				TechRules			text,
				Comment_TX			text)
				COMMENT 'Temporary table used for database catalog import function.';";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Created sl_object_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS sl_attr_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_attr_Import (
				sl_object_FK		int(11),
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
			=> Created sl_attr_Import";
	flush();

	$stmt = "
			DROP TABLE IF EXISTS  sl_rel_Import;";

	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_rel_Import (
				P_sl_object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_sl_object_FK		int(11),
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
			=> Created sl_rel_Import";
	flush();

	// Count Database records to be added to SuperLuminate
	$stmt =
		"SELECT COUNT(DISTINCT TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema';";
	ProcCallDatabaseMySQL($result,$stmt,$hostportport,$user,$pass,$schema);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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

	// Load Object relationships into sl_rel table
	// Count Database to Table relationships
	$stmt =
		"SELECT COUNT(TABLE_SCHEMA) rowcount FROM INFORMATION_SCHEMA.TABLES
			WHERE
				TABLE_SCHEMA	= '$schema' AND
				TABLE_NAME	LIKE '$prefix%';";
	ProcCallDatabaseMySQL($result,$stmt,$hostport,$user,$pass,$schema);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);
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
			=> Loading Database record to sl_object_Import from $dbadptdatabase";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptdatabase' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table records to sl_object_Import from $dbadpttable";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadpttable' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column records to sl_object_Import from $dbadptcolumn";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptcolumn' REPLACE INTO TABLE sl_object_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr1' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr2' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr3";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr3' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr4";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr4' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Column Extended Attribute records to sl_attr_Import from $dbadptattr5";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptattr5' REPLACE INTO TABLE sl_attr_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(sl_object_FK, Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Property_TX, Value_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_attr_Import WHERE Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Database --< Table records to sl_rel_Import from $dbadptrel1";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel1' REPLACE INTO TABLE sl_rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_sl_object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_sl_object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loading Table --< Column records to sl_rel_Import from $dbadptrel2";
	flush();

	// No header record = IGNORE 0 LINES
	// Expecting $result=1 from ProcCallDatabaseMySQL function
	// REPLACE statement will insert else update records determined by index

	$stmt = "
		LOAD DATA INFILE '$dbadptrel2' REPLACE INTO TABLE sl_rel_Import
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(P_sl_object_FK, P_Category_TX, P_Subject_TX, P_Class_TX, P_Type_TX, P_Name_TX, P_Version_DC,
			C_sl_object_FK, C_Category_TX, C_Subject_TX, C_Class_TX, C_Type_TX, C_Name_TX, C_Version_DC)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL record caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_rel_Import WHERE P_Category_TX = ''";

	ProcCallDatabase($result,$stmt);

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Insert / Update base tables from staging data tables";
	flush();

	// Insert new sl_object, sl_attr, and sl_rel records from Import tables
	// Update any existing sl_object, sl_attr from Import tables
	// Soft Delete any sl_object records that are not found in the Import tables

	// Insert - Update sl_object from sl_object_Import
	$stmt = "INSERT INTO sl_object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Alias_TX,
				WRICEF_TX,
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
				WRICEF_TX,
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
			FROM sl_object_Import
			ON DUPLICATE KEY UPDATE
				Comment_TX=sl_object_Import.Comment_TX,
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_object from sl_object_Import";
	flush();

	// Insert - Update sl_attr from sl_attr_Import
	$stmt = "INSERT INTO sl_attr (
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX)
			SELECT
				sl_object_FK,
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX,
				Value_TX
			FROM sl_attr_Import
			ON DUPLICATE KEY UPDATE
				Value_TX=sl_attr_Import.Value_TX;";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_attr from sl_attr_Import";
	flush();

	// Insert - Update sl_rel from sl_rel_Import
	$stmt = "INSERT INTO sl_rel (
				P_sl_object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_sl_object_FK,
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
				P_sl_object_FK,
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				P_Type_TX,
				P_Name_TX,
				P_Version_DC,
				C_sl_object_FK,
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
			FROM sl_rel_Import
			ON DUPLICATE KEY UPDATE
				Changer_ID='".$creator."',
				Changed_DS=now();";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Loaded sl_rel from sl_rel_Import";
	flush();

	echo "	<P>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Setup Foreign Key Relationships";
	flush();

	// Update relationship ROWID values
	// Count sl_rel relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM sl_rel
			WHERE P_sl_object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);

	// Update sl_rel table with parent sl_object keys
	// Update Relationship parent key
	// Update sl_rel.P_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.P_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.P_Category_TX	= sl_object.Category_TX		AND
			sl_rel.P_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.P_Class_TX		= sl_object.Class_TX		AND
			sl_rel.P_Type_TX		= sl_object.Type_TX			AND
			sl_rel.P_Name_TX		= sl_object.Name_TX			AND
			sl_rel.P_Version_DC		= sl_object.Version_DC		AND
			sl_rel.P_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Parent Object relationships in sl_rel";
	flush();

	// Update sl_rel table with child sl_object keys
	// Update Relationship child key
	// Update sl_rel.C_sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_rel,sl_object
		SET sl_rel.C_sl_object_FK = sl_object.ROWID
		WHERE
			sl_rel.C_Category_TX	= sl_object.Category_TX		AND
			sl_rel.C_Subject_TX		= sl_object.Subject_TX		AND
			sl_rel.C_Class_TX		= sl_object.Class_TX		AND
			sl_rel.C_Type_TX		= sl_object.Type_TX			AND
			sl_rel.C_Name_TX		= sl_object.Name_TX			AND
			sl_rel.C_Version_DC		= sl_object.Version_DC		AND
			sl_rel.C_sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Child Object relationships in sl_rel";
	flush();

	// Count sl_attr relationship records to be updated
	$stmt = "SELECT COUNT(*) rowcount FROM sl_attr
			WHERE sl_object_FK = 0;";
	ProcCallDatabase($result,$stmt);
	$row = mysqli_fetch_object($result);
	$rowcount	= $row->rowcount;
	mysqli_free_result($result);

	// Update sl_attr table with sl_object keys
	// Update Attribute key
	// Update sl_attr.sl_object_FK to sl_object.ROWID
	$stmt = "
		UPDATE sl_attr,sl_object
		SET sl_attr.sl_object_FK	= sl_object.ROWID
		WHERE
			sl_attr.Category_TX		= sl_object.Category_TX		AND
			sl_attr.Subject_TX		= sl_object.Subject_TX		AND
			sl_attr.Class_TX		= sl_object.Class_TX		AND
			sl_attr.Type_TX			= sl_object.Type_TX			AND
			sl_attr.Name_TX			= sl_object.Name_TX			AND
			sl_attr.Version_DC		= sl_object.Version_DC		AND
			sl_attr.sl_object_FK	= 0";

	ProcCallDatabase($result,$stmt);

	echo "	<BR>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			=> Linked [ $rowcount ] Extended Object relationships in sl_attr";
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
//	// Count sl_object (Table) records to be soft deleted
//	// Column analysis takes too long for large data loads
//	$stmt = "
//		SELECT COUNT(*) rowcount FROM sl_object T1
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM sl_object_Import T2
//					WHERE
//						T2.Category_TX	= T1.Category_TX	AND
//						T2.Subject_TX	= T1.Subject_TX		AND
//						T2.Class_TX		= T1.Class_TX		AND
//						T2.Type_TX		= T1.Type_TX		AND
//						T2.Name_TX		= T1.Name_TX		AND
//						T2.Version_DC	= T1.Version_DC);";
//
//	ProcCallDatabase($result,$stmt);
//	$row = mysqli_fetch_object($result);
//	$rowcount	= $row->rowcount;
//	mysqli_free_result($result);
//
//	echo "	<BR>
//			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
//			=> Soft Deleting [ $rowcount ] sl_object records that no longer exist in $host.$schema";
//	flush();
//
//	// Soft Delete sl_object records that were not imported
//	$stmt = "
//		UPDATE sl_object T1 SET Comment_TX =
//		'*** SOFT DELETE *** THIS RECORD WAS FOUND TO BE DELETED FROM THE SOURCE SYSTEM DURING THE LAST IMPORT.'
//			WHERE
//				Category_TX	= '$category'	AND
//				Subject_TX	= '$subject'	AND
//				Class_TX	= 'Table'		AND
//				Type_TX		= '$type'		AND
//				Version_DC	= 1.000			AND
//				NOT EXISTS (
//					SELECT Name_TX FROM sl_object_Import T2
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
		LOAD DATA INFILE '$filename' REPLACE INTO TABLE sl_object
			FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 0 LINES
			(Category_TX, Subject_TX, Class_TX, Type_TX, Name_TX,
				Version_DC, Alias_TX, WRICEF_TX, Desc_TX, Usage_TX, TechRules_TX, Comment_TX)";

	ProcCallDatabase($result,$stmt);

	// Remove trailing NULL records caused by extra CRLF lines in import file
	$stmt = "
		DELETE FROM sl_object WHERE Category_TX = ''";

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
		UPDATE sl_object SET
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
				REPLACE(WRICEF_TX,CHAR(34),CHAR(132)),
				REPLACE(Desc_TX,CHAR(34),CHAR(132)),
				REPLACE(Usage_TX,CHAR(34),CHAR(132)),
				REPLACE(TechRules_TX,CHAR(34),CHAR(132)),
				REPLACE(Comment_TX,CHAR(34),CHAR(132))
			INTO OUTFILE '$filename'
			FIELDS TERMINATED BY ','
			OPTIONALLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			FROM sl_object
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
	global $g_main;
	GenerateHeader(
		"[Bulk Report] This report is formatted to be copied into a spreadsheet (use BACK to return)");
	echo "
		<FORM ACTION=$g_main METHOD=POST>
		<input name='auggie' value='Search Again' style='color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;' type='submit'>
  		<input name='auggie' value='Cancel' style='color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;' type='submit'>
		</FORM>";

	$reportstmt = stripslashes($reportstmt);
	$report_generated = stripslashes($_REQUEST['report_generated']);
	$back_generated = stripslashes($_REQUEST['back_generated']);
	$_SESSION['reportstmt'] = $report_generated;
	$_SESSION['back_stmt'] = $back_generated;
	  echo "<div class=''>
      <table id='res_table2' class='display' width='100%' cellspacing='0'>
           <thead>
              <tr bgcolor='#5f5f5f'>
                  <th>ROWID</th>
                  <th>Business Segment</th>
                  <th>Category</th>
                  <th>System</th>
                  <th>Type</th>
                  <th>Name</th>
                  <th>Version</th>
                  <th>Creator</th>
                  <th>System and Properties</th>
                </tr>
          </thead>

      </table>
      </div>"; ?>
	 <style>
	 .dt-button.buttons-collection {
		  background: #dcdcdc url("image/report_check.png") no-repeat scroll 0 0;
		  margin: 4px 10px;
		  padding: 0 20px;
		  position: relative;
		  top: -5px;
		}

	.sorting{
		color: #f1f1f1 !important;
		padding: 5px 15px !important;
	}
	.sorting_asc {
		color: #f1f1f1 !important;
		padding: 5px 15px !important;
	}
	.sorting_desc {
		color: #f1f1f1 !important;
		padding: 5px 15px !important;
	}
	.odd{
		background: #FFFFF0 none repeat scroll 0 0 !important;
	}
	.even{
		background: #E0FFFF none repeat scroll 0 0 !important;
	}
	.paginate_button.current {
	  background: #0069cb none repeat scroll 0 0 !important;
	  color: #fff !important;
	  padding: 2px 15px !important;
	}
	.paginate_button.current:hover {
	  background: #0069cb none repeat scroll 0 0 !important;
	  color: #fff !important;
	  padding: 2px 15px !important;
	}
	.paginate_button.current:hover {
	  background: #0069cb none repeat scroll 0 0 !important;
	  color: #fff !important;
	  padding: 2px 15px !important;
	}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
  color: #fff !important;
}
	.paginate_button.current:hover {
	color: #fff !important;
	}
	.paginate_button:hover {
	  background: #ccc none repeat scroll 0 0 !important;
	  border: 1px solid #111;
	  padding: 2px 15px !important;
	  color: white;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
		$('#res_table2').DataTable({
  		 "processing": true,
         "sAjaxSource": "sl_response.php",
  		 "dom": 'lBfrtip',
  		 "buttons": [
              {
                  extend: 'collection',
                  text: 'Export',
                  buttons: [
                      'excel',
                      'csv',
                      'pdf',
                      'print'
                  ]
              }
          ]
         });
	});
  </script>
  <?php


}

// Load and setup the SuperLuminate database for first time use
function ProcSetupDatabase() {

	// Load SuperLuminate database structure

	$stmt = "
			CREATE TABLE sl_object (
				ROWID				int(11) primary key auto_increment,
				Category_TX			varchar(30),
				Subject_TX			varchar(30),
				Class_TX			varchar(30),
				Type_TX				varchar(30),
				Name_TX				varchar(100),
				Version_DC			decimal(7,3),
				Alias_TX			varchar(100),
				WRICEF_TX			varchar(100),
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
			CREATE UNIQUE INDEX sl_object_A1 ON sl_object (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX sl_object_I1 ON sl_object (
				Category_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX sl_object_I2 ON sl_object (
				Subject_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX sl_object_I3 ON sl_object (
				Class_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX sl_object_I4 ON sl_object (
				Type_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_category (
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
			CREATE UNIQUE INDEX sl_category_A1 ON sl_category (
				Category_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_subject (
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
			CREATE UNIQUE INDEX sl_subject_A1 ON sl_subject (
				Category_TX,
				Subject_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_class (
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
			CREATE UNIQUE INDEX sl_class_A1 ON sl_class (
				Category_TX,
				Subject_TX,
				Class_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_type (
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
			CREATE UNIQUE INDEX sl_type_A1 ON sl_type (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_event (
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
			CREATE TABLE sl_user (
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

			CREATE TABLE sl_config (
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
			CREATE TABLE sl_prop (
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
			CREATE UNIQUE INDEX sl_prop_A1 ON sl_prop (
				Category_TX,
				Subject_TX,
				Class_TX,
				Property_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_attr (
				sl_object_FK		int(11),
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
			CREATE UNIQUE INDEX sl_attr_A1 ON sl_attr (
				Category_TX,
				Subject_TX,
				Class_TX,
				Type_TX,
				Name_TX,
				Version_DC,
				Property_TX);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX sl_attr_I1 ON sl_attr (
				sl_object_FK);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_rel (
				P_sl_object_FK		int(11),
				P_Category_TX		varchar(30),
				P_Subject_TX		varchar(30),
				P_Class_TX			varchar(30),
				P_Type_TX			varchar(30),
				P_Name_TX			varchar(100),
				P_Version_DC		decimal(7,3),
				C_sl_object_FK		int(11),
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
			CREATE UNIQUE INDEX sl_rel_A1 ON sl_rel (
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
			CREATE INDEX sl_rel_I1 ON sl_rel (
				P_sl_object_FK);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE INDEX sl_rel_I2 ON sl_rel (
				C_sl_object_FK);";
	ProcCallDatabase($result,$stmt);

	$stmt = "
			CREATE TABLE sl_assoc (
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
			CREATE UNIQUE INDEX sl_assoc_A1 ON sl_assoc (
				P_Category_TX,
				P_Subject_TX,
				P_Class_TX,
				C_Category_TX,
				C_Subject_TX,
				C_Class_TX);";
	ProcCallDatabase($result,$stmt);

	// Load default admin user account record

	$stmt = "
		INSERT INTO sl_user (User_ID,User_Type_CD,Password_TX,First_Name_TX,Last_Name_TX,Title_TX,Email_Addr_TX,Phone_TX,Company_TX,Dept_TX,URL_TX,Release_CD,Newsletter_CD,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('admin','admin','b9b57aae83585e17ede4570dcede353c','Administrator','','','','','','','','Yes','Yes','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// Load default configuration record

	$stmt = "
		INSERT INTO sl_config (Config_ID,Color_Bkg_HX,Color_Msg_HX,Logo_Primary_TX,
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
		"SELECT Category_TX FROM sl_category
			WHERE
				Category_TX		= 'Enterprise';";
	ProcCallDatabase($result,$stmt);
	if (mysqli_num_rows($result) > 0) {
		mysqli_free_result($result);
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

	// LOAD sl_category
	$stmt = "
		INSERT INTO sl_category (Category_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('Enterprise','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD sl_subject
	$stmt = "
		INSERT INTO sl_subject (Category_ID,Category_TX,Subject_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		(0,'Enterprise','Business','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD sl_class
	$stmt = "
		INSERT INTO sl_class (Category_ID,Category_TX,Subject_ID,Subject_TX,Class_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
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

	// LOAD sl_type
	$stmt = "
		INSERT INTO sl_type (Category_ID,Category_TX,Category_DC,Subject_ID,Subject_TX,Subject_DC,Class_ID,Class_TX,Class_DC,Type_TX,Type_DC,Unique_FL,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
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

	// LOAD sl_prop
	$stmt = "
		INSERT INTO sl_prop (Category_TX,Subject_TX,Class_TX,Property_TX,Datatype_CD,Length_IN,Default_TX,Rule_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
		('Enterprise','Business','Column','Column Datatype','n/a',0,'Varchar','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Column','Column Size','n/a',0,'0','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Column','Can Be Null','n/a',0,'Yes','n/a','admin',NOW(),'admin',NOW(),'Active'),
		('Enterprise','Business','Column','Sequence','n/a',0,'0','n/a','admin',NOW(),'admin',NOW(),'Active');";

	ProcCallDatabase($result,$stmt);

	// LOAD sl_assoc
	$stmt = "
		INSERT INTO sl_assoc (P_Category_TX,P_Subject_TX,P_Class_TX,C_Category_TX,C_Subject_TX,C_Class_TX,Assoc_Rule_TX,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES
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

	// Update sl_subject.Category_ID to sl_category.ROWID
	$stmt = "
		UPDATE sl_subject,sl_category
		SET sl_subject.Category_ID	= sl_category.Category_ID
		WHERE
			sl_subject.Category_TX	= sl_category.Category_TX	AND
			sl_subject.Category_ID	= 0";

	ProcCallDatabase($result,$stmt);

	// Update sl_class.Category_ID to sl_category.ROWID
	$stmt = "
		UPDATE sl_class,sl_category
		SET sl_class.Category_ID	= sl_category.Category_ID
		WHERE
			sl_class.Category_TX	= sl_category.Category_TX	AND
			sl_class.Category_ID	= 0";

	ProcCallDatabase($result,$stmt);

	// Update sl_type.Category_ID to sl_category.ROWID
	$stmt = "
		UPDATE sl_type,sl_category
		SET sl_type.Category_ID		= sl_category.Category_ID
		WHERE
			sl_type.Category_TX		= sl_category.Category_TX	AND
			sl_type.Category_ID		= 0";

	ProcCallDatabase($result,$stmt);

	// Update Subject_ID

	// Update sl_class.Subject_ID to sl_subject.ROWID
	$stmt = "
		UPDATE sl_class,sl_subject
		SET sl_class.Subject_ID		= sl_subject.Subject_ID
		WHERE
			sl_class.Category_TX	= sl_subject.Category_TX	AND
			sl_class.Subject_TX		= sl_subject.Subject_TX		AND
			sl_class.Subject_ID		= 0";

	ProcCallDatabase($result,$stmt);

	// Update sl_type.Subject_ID to sl_subject.ROWID
	$stmt = "
		UPDATE sl_type,sl_subject
		SET sl_type.Subject_ID		= sl_subject.Subject_ID
		WHERE
			sl_type.Category_TX		= sl_subject.Category_TX	AND
			sl_type.Subject_TX		= sl_subject.Subject_TX		AND
			sl_type.Subject_ID		= 0";

	ProcCallDatabase($result,$stmt);

	// Update Class_ID

	// Update sl_type.Class_ID to sl_class.ROWID
	$stmt = "
		UPDATE sl_type,sl_class
		SET sl_type.Class_ID		= sl_class.Class_ID
		WHERE
			sl_type.Category_TX		= sl_class.Category_TX		AND
			sl_type.Subject_TX		= sl_class.Subject_TX		AND
			sl_type.Class_TX		= sl_class.Class_TX			AND
			sl_type.Class_ID		= 0";

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
	// Tfor errors or zero records returned

	if (mysqli_num_rows($result) == 0):
		echo("<B>Query executed successfully -- zero rows returned!</B>");
	else:
		// Display report header


			echo "
		<TABLE BORDER=1>
			<THEAD>
				<TR>";
				$all_property = array();
				while ($property = mysqli_fetch_field($result)) {
    echo '<TD>' . $property->name . '</TD>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
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

					while ($row = mysqli_fetch_array($result)) {
				echo"
				<TR>";
					// $rowarray = mysqli_fetch_row($result);
					// for ($j = 0; $j < mysqli_fetch_object($result); $j++) {
					// 	$display = $rowarray[$j];
					// 	if ($display == ""){$display = chr(160);}
					// 	echo"<TD>" . $display . "</TD>";
					// }

					foreach ($all_property as $item) {
        echo '<TD>' . $row[$item] . '</TD>'; //get items using property value
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
	
	function JSopenSearchTips() {
		popupWin = window.open('sl_searchTips.html', 'About',
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
if(isset($_POST['auggie'])){
	$auggie=$_POST['auggie'];
	foreach($_POST as $key => $value){
	 $$key = $value; //create variable
	}
}
if (!isset($auggie)) {$auggie = "";}

if (!isset($_SESSION['s_key'])) {
	$_SESSION['s_date'] = "";
	$_SESSION['s_user'] = "";
	$_SESSION['s_key']  = "";

}
$preauggie = substr($auggie,0,2);
$POSTauggie = substr($auggie,2);
debug_to_console( "This is ." );
// SL Lite (Read only access to one select and display set of pages)
// Query string passed in via URL after ? (set by $QUERY_STRING)
if ($g_query == "Glossary"){

	// Fail SL Lite is not activated (N) in SL Config
	if ($g_lite != "Y"){
	GenerateHeaderLite("[Search Lite]
		<FONT color=red>SL Lite not activated -- Contact SuperLuminate Administrator</FONT>");
	ProcLogEvent($username,"FAILURE","sl_lite:Glossary");
	exit();
	}

	$username	= "read";
	if ($username != "") {
	$_SESSION['s_date'] = date("Ymd");
	$_SESSION['s_user'] = $username;
	$_SESSION['s_key']  = md5($username.date("myd"));

	GenerateHeaderLite("[Search Lite] Enter wildcard search text then press (Find Now)");
	ProcLogEvent($username,"LOGIN","sl_lite:Glossary");
	$findtext = "";
	FormSearchLite($findtext);
	}
}

// Check if the page is called for the first time
// If auggie is null and session is null generate login
// Else display main selection menu
else if (!$auggie){

	if ($_SESSION['s_key'] == md5($_SESSION['s_user'].date("myd"))) {
	GenerateHeader("[Main Menu] Select an option");
	if ($_SESSION['s_user'] == "read")
		{FormButtonsReadOnlyMenu();}
	else {FormButtonsMainMenu();};
	exit();
	}
	else {
		GenerateHeader("[Login] Please Login");
		SESSION_DESTROY();
		$ddl->FormLogin();
		exit();
	}
}

// On first login, check user id and password against database. If ok,
// set session variable s_user to user name. Set session variable
// s_key to encrytpted string of user id and month year day.
// To see if the user is logged in, test against the encrypted string.
// The user session key is good for the current day only.
// The key expires at midnight (server time).
//$auggie = "Read Only Access";
else if ($auggie == "Read Only Access"){
debug_to_console( "Test -." );
	$username	= "read";
	$firstname	= "Read Only User";

	if ($username != "") {
	$_SESSION['s_date'] = date("Ymd");
	$_SESSION['s_user'] = $username;
	$_SESSION['s_key']  = md5($username.date("myd"));
	GenerateHeader("[Main Menu] Welcome <b>$firstname</b> -- Select an option");
	ProcLogEvent($username,"LOGIN","");
	// FormButtonsMainMenu();
	FormButtonsReadOnlyMenu();
	//FormButtonsMainMenu();
	}
}

else if ($auggie == "User Login"){
	if ($username == "") {
		GenerateHeader("[Login] <FONT color=red>A User ID was not specified.</FONT>");
		ProcLogEvent("","FAILURE","[".NULL."][".NULL."]");
		SESSION_DESTROY();
		$ddl->FormLogin();
		exit();
	}

	$badname = addslashes($username);
	$badpass = addslashes($userpass);
	$username = strtolower(trim(addslashes($username)));
	$userpass = md5($userpass);
	$stmt = "
		SELECT User_ID,First_Name_TX
		FROM sl_user
		WHERE User_ID = '$username' AND Password_TX = '$userpass'";
	$username = "";
	$userpass = "";

	ProcCallDatabase($result,$stmt);

	$row = mysqli_fetch_object($result);

	if (mysqli_num_rows($result) > 0) {
		$username	= $row->User_ID;
		$firstname	= $row->First_Name_TX;
	}

	mysqli_free_result($result);

	if ($username != "") {
	$_SESSION['s_date'] = date("Ymd");
	$_SESSION['s_user'] = $username;
	$_SESSION['s_key']  = md5($username.date("myd"));
	GenerateHeader("[Main Menu] Welcome <b>$firstname</b> -- Select an option");
	ProcLogEvent($username,"LOGIN","");
	FormButtonsMainMenu();
	}
	else {
		GenerateHeader("[Login] <FONT color=red>
			The User ID and or Password entered were incorrect.</FONT>");
		ProcLogEvent("","FAILURE","[".$badname."][".$badpass."]");
		SESSION_DESTROY();
		$ddl->FormLogin();
		exit();
	}
}

// Trap sessions that have used the back button to re-enter
// the process after already logging off.
// If the user id is still null at this point kick them out.
else if ($_SESSION['s_user'] == ""){
	GenerateHeader("[Login] Please Login");
	SESSION_DESTROY();
	$ddl->FormLogin();
	exit();
}

// ---------------------------------------------------------- SECTION: Main Vector Table

else if ($auggie == "Logoff"){
	$s_user = $_SESSION['s_user'];
	ProcLogEvent($s_user,"LOGOFF","");
	SESSION_DESTROY();
	GenerateHeader("[Login] You have successfully logged off -- Please Login");
	$ddl->FormLogin();
	exit();
}

else if ($auggie == "Main Menu"){
	GenerateHeader("[Main Menu] Select an option");
	if ($_SESSION['s_user'] == "read")
	{FormButtonsReadOnlyMenu();}
	else {FormButtonsMainMenu();};
	exit();
}

else if ($auggie == "Cancel"){
	GenerateHeader("[Main Menu] Action Canceled -- Select an option");
	if ($_SESSION['s_user'] == "read")
	{FormButtonsReadOnlyMenu();}
	else {FormButtonsMainMenu();};
	exit();
}
// RJ Changes
else if ($auggie == "Back"){
	GenerateHeader("[Main Menu] Action Back -- Select an option");
  if(isset($_POST['back_generated'])){
    $reportstmt = $_POST['report_generated'];
    $stmt = $_POST['back_generated'];
    $report_generated = $_POST['report_generated'];
    $limit = $_POST['pagelimit'];
    $sqlChunks = explode("from", $stmt);
    $stmtcount = "SELECT count(*) rowcount from ".$sqlChunks[1];
  	ProcCallDatabase($result,$stmtcount);
  	$row = mysqli_fetch_object($result);
  	$rowcount	= $row->rowcount;

  	$total_records = $rowcount;
  	$total_pages = ceil($total_records / $limit);
  	//$stmt = $stmt." LIMIT ".$limit;
    echo "
  	<FORM METHOD=POST ACTION=$g_main>
  	<INPUT type=hidden name=reportstmt id=report_sql value=\"$reportstmt\">
  	<INPUT type=hidden name=back_generated id=back_sql value=\"$stmt\">
  	<INPUT type=hidden name=report_generated value=\"$report_generated\">
  	<INPUT type=hidden name=pagelimit id=pagelimit value=\"$limit\">";
  		printf("<TABLE BORDER WIDTH=\"100%%\" ID=\"res_table\" BGCOLOR=$g_colorbkg NOSAVE>\n");

  		echo "
  		<input type=submit name=auggie value=\"Search Again\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
  		&nbsp;&nbsp;

  		<input type=submit name=auggie value=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
  		&nbsp;&nbsp;&nbsp;&nbsp;
  		<INPUT type=submit name=auggie value=\"Bulk Report\" style=\"color:black; width:100px; background: url(image/report_check.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
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
		  <TD align=center><B>Type</B></TD>
		  <TD align=center><B>Category</B></TD>
		  <TD align=center><B>Name</B></TD>
		  <TD align=center><B>Description</B></TD>
		  <TD align=center><B>WRICEF</B></TD>
		  ");
		  if ($class == "Column"){
				printf("<TD align=center><B>Table</B></TD>");
		  }
		  if ($_SESSION['s_user'] == "read") {}else{
			 printf("<TD align=center><B>Version</B></TD>
		  </TR>\n");
		  }

        $i = 1;
        $color1 = "#FFFFF0";
        $color2 = "#E0FFFF";
    ProcCallDatabase($result,$stmt);
   while (($row = mysqli_fetch_object($result))){

     if($i%2 == 1) $color = $color1;
     else $color = $color2;

     if ($_SESSION['s_user'] == "read") {
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
		</TR>\n",
			$row->ROWID,$row->Class_TX,$row->Type_TX,$row->Name_TX,substr($row->Desc_TX,0,50),substr($row->WRICEF_TX,0,30));
			$i++;
			}else{
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
		$row->ROWID,$row->Class_TX,$row->Type_TX,$row->Name_TX,substr($row->Desc_TX,0,50),substr($row->WRICEF_TX,0,30),$row->Version_DC);
		$i++;
			}
   }
   printf("</TABLE>\n");?>
   <style>
       li.active {
         background: #0069cb none repeat scroll 0 0;
         border: 1px solid #0069cb !important;
       }
       li:hover {
         background: #ccc;
         border: 1px solid #ccc;
       }
       #pagination .active > a {
         color: #fff;
       }
       #pagination a {
         color: #000;
       }
       .loadingDiv{
         background: rgba(0, 0, 0, 0) radial-gradient(ellipse farthest-corner at center center , rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
         left: 0;
         position: fixed;
         padding: 100px 0;
         width: 100%;
         z-index: 9999;
       }
       .dt-button.buttons-collection {
         background: #dcdcdc none repeat scroll 0 0;
         margin: 4px 10px;
         padding: 1px 20px;
         position: relative;
         top: -5px;
       }
   </style>
   <?php
   echo "<div align='center'>
  <ul class='pagination text-center' id='pagination'>";
  if($total_pages == 1){}else{
   if(!empty($total_pages)):
   for($i=1; $i<=$total_pages; $i++):
     if($i == 1):
     echo "<li class='active'  id='$i' style='border: 1px solid #000; display: inline; margin: 0px 5px; padding: 2px 5px;'><a style='text-decoration: none;' href='sl_server_ajaxcall.php?page=$i>'>$i</a></li>";
     else:
     echo "<li id='$i' style='border: 1px solid #000; display: inline; margin: 0px 5px; padding: 2px 5px;'><a style='text-decoration: none;' href='sl_server_ajaxcall.php?page=$i'>$i</a></li>";
   endif;
   endfor;
  endif;
  }
  echo "</div>";
  }?>
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#pagination li").live('click',function(e){
     e.preventDefault();
     $("#pagination li").removeClass('active');
     $(this).addClass('active');
    var pageNum = this.id;
    var pagesql = $('input[name=reportstmt]').val();
    var pageLimit = $('input[name=pagelimit]').val();
    $.ajax({
      url: "sl_server_ajaxcall.php",
      type: "post",
      data: {'cbFillCategory':'Pagination','page':parseInt(pageNum),'pageLimit':parseInt(pageLimit), 'pagesql':pagesql},
      cache: false,
      beforeSend: function() { $("#res_table").html("<div class='loadingDiv' align='center'><img src='image/ajax.gif' /></div>"); },
      success: function(d) { $('#res_table').html(d);	}
        });
    });
  });
  </script>
	<?php exit();
}

else if ($auggie == "Search" or $auggie == "Search Again"){

	if ($_SESSION['s_user'] != "read"){
	GenerateHeader("[<a href=javascript:JSopenSearchTips();>Search Tips</a>] Enter search criteria - &nbsp;
		<FONT color=red size=3>&#9830</FONT>&nbsp; fields are case insensitive wildcards");
		}
		else {
		GenerateHeader("");
		}
	$category	= "";
	$subject	= "";
	$class		= "";
	$type		= "";
	$name		= "";
	$version	= "";
	$alias		= "";
	$tower		= "";
	$assettype	= "";
	$wricef 	= "";
	$alm 	    = "";
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
	$business->FormSearchObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,
		$alias,$wricef,$alm,$desc,$usage,$techrules,$comment,$group,
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
	$tower		= "";
	$assettype	= "";
	$alias		= "";
	$wricef		= "";
	$alm		= "";
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
	FormAddObject($name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
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
	$ddl->FormAddCategory($category,$created,$creator,$changed,$changer,$status);
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
	$ddl->FormAddSubject($category,$subject,
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
	$ddl->FormAddClass($category,$subject,$class,
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
	$ddl->FormAddType($category,$subject,$class,$type,
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

	FormAddObjectProperties($lstCategory,$lstSubject,$lstClass,$lstType,$name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
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
	FormDeleteRelationship($POSTauggie,$rowid);
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
	$ddl->FormButtonsManageUser();
	exit();
}
else if ($auggie == "View HCatalog"){
	GenerateHeader("[View HCatalog] via REST API");
	FormButtonsHCatalog();
	exit();
}
else if ($auggie == "Management Reporting"){
	GenerateHeader("[Management Reporting]");
	$ddl->FormButtonsManagementReporting();
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
	$ddl->FormButtonsFlatFileAdapters();
	exit();
}

else if ($auggie == "Backup Restore Adapters"){
	GenerateHeader("[Backup Restore Adapters]");
	$ddl->FormButtonsBackupRestoreAdapters();
	exit();
}

else if ($auggie == "Bulk Upload Mappings"){
	GenerateHeader("[Bulk Upload Mappings]");
	$business->FormButtonsBulkUploadMappings();
	exit();
}

else if ($auggie == "ImportExcelBulkData"){
	GenerateHeader("[Bulk Upload Mappings] Imported Bulk Excel Data");
	$business->FormButtonsImportExcelBulkData();
	exit();
}

else if ($auggie == "Database Adapters"){
	GenerateHeader("[Database Adapters]");
	FormButtonsDatabaseAdapters();
	exit();
}

else if ($auggie == "Modify"){
	GenerateHeader("[Modify] Edit entry and select Confirm Modify");
	$dml->FormModifyObject($rowid);
	exit();
}

else if ($auggie == "Copy"){
	GenerateHeader("[Copy] Edit entry and select Confirm Object Copy");
	$dml->FormCopyObject($category,$subject,$class,$type,$name,$n_name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
	exit();
}

else if ($auggie == "Delete"){
	GenerateHeader("[Delete] Confirm delete of the following entry");
	$dml->FormDeleteObject($rowid);
	exit();
}

else if ($auggie == "Confirm Delete"){
	$dml->ProcDeleteObject($rowid);
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

	ProcModifyObject($rowid,$category,$subject,$class,$type,$name,$n_name,$alias,$wricef,$desc,$tower,$assettype,$alm,
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

	$dml->ProcCopyObject($category,$subject,$class,$type,$name,$n_name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
		$changed,$changer,$status,$eprow,$epnamex,$epvaluex);
	exit();
}

else if ($auggie == "Confirm Config Modify"){
	ProcModifyConfig($colorbkg,$colormsg,$logoprim,$readonly,$lite,
		$adhocsql,$maxrows,$loginmemo,$configpath,$dbbinpath,$oraclestr,$timeout,$perpage);
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
	$perpage    =10;
	ProcModifyConfig($colorbkg,$colormsg,$logoprim,$readonly,$lite,
		$adhocsql,$maxrows,$loginmemo,$configpath,$dbbinpath,$oraclestr,$timeout,$perpage);
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

	ProcAddObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,$alm,
		$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
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
	ProcSearchObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,
		$alias,$wricef,$alm,$desc,$usage,$techrules,$comment,$group,
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
	FormDisplayObject($POSTauggie);
	exit();
}

else if ($preauggie == "L-"){
	GenerateHeaderLite(
		"[Display Lite] Select (FIND AGAIN) for new search.");
	FormDisplayLite($POSTauggie);
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
	$ddl->FormSelectUserProfile();
	exit();
}

else if ($auggie == "Modify User Profile"){
	GenerateHeader("[Admin Modify Profile] Modify Profile (First Name is a required field)");
	FormModifyUserProfile();
	exit();
}

else if ($auggie == "Select Password to Modify"){
	GenerateHeader("[Admin Select Password] Enter the User ID to be updated");
	$ddl->FormSelectUserPassword();
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
	$dml->FormModifyUserPassword();
	exit();
}

else if ($auggie == "Version"){
	ProcVersionObject($rowid,$category,$subject,$class,$type,$name,$version,
			$alias,$wricef,$desc,$usage,$techrules,$comment,$group,$created,$creator,
			$changed,$changer,$status);
	exit();
}

// Manage Schema Category

else if ($preauggie == "X-"){
	GenerateHeader("[Delete Schema Category] Confirm the deletion of this Schema Category");
	FormDeleteSchemaCategory($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Category Delete"){
	ProcDeleteSchemaCategory($category);
	exit();
}

else if ($preauggie == "K-"){
	GenerateHeader("[Modify Schema Category] Confirm modification of this Schema Bsuiness Segment");
	FormModifySchemaCategory($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Category Modify"){
	ProcModifySchemaCategory($category,$n_category,$save_rowid);
	exit();
}

// Manage Schema Subject

else if ($preauggie == "J-"){
	GenerateHeader("[Delete Schema Subject] Confirm the deletion of this Schema Subject");
	FormDeleteSchemaSubject($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Subject Delete"){
	ProcDeleteSchemaSubject($category,$subject);
	exit();
}

else if ($preauggie == "I-"){
	GenerateHeader("[Modify Schema Subject] Confirm the modification of this Schema Subject");
	FormModifySchemaSubject($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Subject Modify"){
	ProcModifySchemaSubject($category,$subject,$n_subject,$save_rowid);
	exit();
}

// Manage Schema Class

else if ($preauggie == "H-"){
	GenerateHeader("[Delete Schema Class] Confirm the deletion of this Schema Class");
	FormDeleteSchemaClass($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Class Delete"){
	ProcDeleteSchemaClass($category,$subject,$class);
	exit();
}

else if ($preauggie == "G-"){
	GenerateHeader("[Modify Schema Class] Confirm the modification of this Schema Class");
	FormModifySchemaClass($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Class Modify"){
	ProcModifySchemaClass($category,$subject,$class,$n_class,$save_rowid);
	exit();
}

// Manage Schema Type

else if ($preauggie == "F-"){
	GenerateHeader("[Delete Schema Type] Confirm the deletion of this Schema Type");
	FormDeleteSchemaType($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Type Delete"){
	ProcDeleteSchemaType($category,$subject,$class,$type);
	exit();
}

else if ($preauggie == "E-"){
	GenerateHeader("[Modify Schema Type] Confirm the modification of this Schema Type");
	FormModifySchemaType($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Type Modify"){
	ProcModifySchemaType($category,$subject,$type,$class,$n_type,$save_rowid);
	exit();
}

// Manage Schema Property

else if ($preauggie == "B-"){
	GenerateHeader("[Delete Schema Property] Confirm the deletion of this Schema Property");
	FormDeleteSchemaProp($POSTauggie);
	exit();
}

else if ($auggie == "Confirm Property Delete"){
	ProcDeleteSchemaProp($category,$subject,$class,$property);
	exit();
}

else if ($preauggie == "A-"){
	GenerateHeader("[Modify Schema Property] Confirm modification of this Schema Property");
	FormModifySchemaProp($POSTauggie);
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
	FormDeleteSchemaAssoc($POSTauggie);
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
			Remote_Agent, Event_TX, Created_DS FROM sl_event
			where date_format(Created_DS,'%Y-%m-%d') = current_date()";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Event Log One Week"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT ROWID, User_ID, Event_CD, Remote_IP_Addr_TX,
			Remote_Agent, Event_TX, Created_DS FROM sl_event
			where date_format(Created_DS,'%Y-%m-%d') >
			date_sub(current_date(), interval 7 day)";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Event Log One Month"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT ROWID, User_ID, Event_CD, Remote_IP_Addr_TX,
			Remote_Agent, Event_TX, Created_DS FROM sl_event
			where date_format(Created_DS,'%Y-%m-%d') >
			date_sub(current_date(), interval 30 day)";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Search Today"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT RowID, User_ID, Name_TX,Created_DS FROM sl_search
			where date_format(Created_DS,'%Y-%m-%d') = current_date()";
	ProcExecCannedQuery($stmt,"Management Reporting");
	exit();
}

else if ($auggie == "Search One Week"){
	GenerateHeader(
		"[Manage Subject Report] $auggie");
	$stmt = "SELECT RowID, User_ID, Name_TX,Created_DS FROM sl_search
			where date_format(Created_DS,'%Y-%m-%d') >
			date_sub(current_date(), interval 7 day) ORDER BY RowID DESC";
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
				FROM sl_object GROUP BY Category_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Subject Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Subject_TX Subjects, COUNT(*) Records
				FROM sl_object GROUP BY Subject_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Class Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Class_TX Classes, COUNT(*) Records
				FROM sl_object GROUP BY Class_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Category Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Type_TX Category, COUNT(*) Records
				FROM sl_object GROUP BY Type_TX";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Creator Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Creator_ID Creators, COUNT(*) Records
				FROM sl_object GROUP BY Creator_ID";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Changer Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Changer_ID Changers, COUNT(*) Records
				FROM sl_object GROUP BY Changer_ID";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Group Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Group_CD Groups, COUNT(*) Records
				FROM sl_object GROUP BY Group_CD";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Status Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Status_CD Status, COUNT(*) Records
				FROM sl_object GROUP BY Status_CD";
	ProcExecCannedQuery($stmt,"Reporting");
	exit();
}

else if ($auggie == "Object Count"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT Category_TX Category,Subject_TX Subject,Class_TX Class,
		Type_TX Type,count(*) Records FROM sl_object GROUP BY Category_TX,
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
		FROM sl_rel GROUP BY
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
		FROM sl_type
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
		FROM sl_assoc
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

else if ($auggie == "View Mapping Details"){
  $category	= @$_REQUEST['category'];
  $subject	= @$_REQUEST['subject'];
  $class	= @$_REQUEST['class'];
  $type	= @$_REQUEST['type'];
  $mspec	= @$_REQUEST['name'];
  $mspec1 = "'".$mspec."'";
  include ("phpmydatagrid.class.php");
  require("sl_globals.php");
  global $g_host, $g_user, $g_pass,$g_database;
  $objGrid = new datagrid;
  $objGrid -> friendlyHTML();
  $objGrid -> pathtoimages("./image/");
  $objGrid -> closeTags(true);
  $objGrid -> form('mapping', true);
  $objGrid -> methodForm("post");
  $objGrid -> searchby("Src_Location,Src_Table,Src_Field,Trg_Location,Trg_Table,Trg_Field");
  //$objGrid -> linkparam("sess=".$_REQUEST["sess"]."&username=".$_SESSION['s_user']);
  $objGrid -> decimalDigits(2);
  $objGrid -> decimalPoint(",");

  //$objGrid -> conectadb("localhost", "root", "sbj1234", "sl_prod");
  $objGrid -> conectadb($g_host, $g_user, $g_pass, $g_database);

  $objGrid -> tabla ("mappingspec");

  /* Allow Add, edit, delete or view records */
  $objGrid -> buttons(true,true,true,true);

  /* Keyfield must be defined to indentify each row */
  //$objGrid -> keyfield("Name_TX");
  $objGrid -> keyfield("id");

  // pagination limit get
  $stmt_page = "SELECT Attr_10_TX from sl_config where Config_ID = 'Default'";
  $conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
  $respage = mysqli_query($conn, $stmt_page);
  $row2 = mysqli_fetch_object($respage);
  $g_perpage = $row2->Attr_10_TX;

  /* A code is related with some transactions. so is very dificult to someone to try to do unauthorized process */
  /* There are a internal code but you can made it strong by setting this function" */
  $objGrid -> salt("Some Code4Stronger(Protection)");
  $objGrid -> TituloGrid($mspec);
  $objGrid -> datarows($g_perpage);
  $objGrid -> paginationmode('links');
  $objGrid -> orderby("id", "DESC");
  $objGrid -> noorderarrows();
  $objGrid -> FormatColumn("Src_Location", "Source Location", 30, 35, 0, "30", "left");
  $objGrid -> FormatColumn("Src_Table", "Source Table", 35, 35, 0, "10", "left");
  $objGrid -> FormatColumn("Src_Field", "Source Field", 35, 35, 0, "10", "left");
  $objGrid -> FormatColumn("Tran_rules", "Tran Rules", 35, 35, 0, "10", "left");
  $objGrid -> FormatColumn("Trg_Location", "Target Location", 20, 20, 0, "10", "left");
  $objGrid -> FormatColumn("Trg_Table", "Target Table", 35, 35, 0, "10", "left");
  $objGrid -> FormatColumn("Trg_Field", "Target Field", 35, 35, 0, "10", "left");
  //$objGrid -> FormatColumn("Name_TX", "Name TX", 35, 35, 2, "10", "left");

  $objGrid -> FormatColumn("Category_TX", "Category TX", 35, 65, 2, "10", "left",$category);
  $objGrid -> FormatColumn("Subject_TX", "Subject TX", 35, 85, 2, "10", "left",$subject);
  $objGrid -> FormatColumn("Class_TX", "Class TX", 35, 65, 2, "10", "left",$class);
  $objGrid -> FormatColumn("Type_TX", "Type TX", 35, 95, 2, "10", "left",$type);
  $objGrid -> FormatColumn("Name_TX", "Name TX", 35, 95, 2, "10", "left",$mspec);
  //$objGrid -> where ("Name_TX = $mspec1");
  $objGrid -> setHeader();


    GenerateHeader(
      "[Selection] View Mapping Details successfully.");

      echo "<div class='data_grid' align='center'>";
      $objGrid -> grid();
    	$objGrid -> desconectar();
      echo "</div>";
  exit();
}

else if ($auggie == "Extended Props"){
	GenerateHeader(
		"[Report Result] $auggie");
	$stmt = "SELECT DISTINCT
		T.Category_TX 'Category', T.Subject_TX 'Subject', T.Class_TX 'Class',
		P.Property_TX 'Property', P.Default_TX 'Default'
		FROM sl_type T, sl_prop P
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
	$message = "[$auggie/$preauggie/$POSTauggie]
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
	$objGrid -> methodForm("POST");
	$objGrid -> searchby("User_id,first_name_tx,last_name_tx,Title_TX");
	$objGrid -> linkparam("sess=".$_REQUEST["sess"]."&username=".$_REQUEST["username"]);
	$objGrid -> decimalDigits(2);
	$objGrid -> decimalPoint(",");
	$config = parse_ini_file('./ddict.ini');
	$objGrid -> conectadb($config['host'], $config['username'],$config['password'],$config['db']);

	/*
	$objGrid -> conectadb("localhost", "root", "sbj1234", "sl_prod");
	$objGrid -> conectadb("35.227.79.254", "root", "bHd0L1EmmN39mzrd", "sl_prod"); */
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

/*
function ProcAddMapping($category,$subject,$class,$type,$name,$Src_category,$Src_subject,$Src_class,$Src_type,
$Src_name,$Src_table,$Src_field,$Src_location,$Trg_category,$Trg_subject,$Trg_class,$Trg_type,$Trg_name,
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
			$Src_field."', '".
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
*/
function mappingspecaddobjectSRC($subject){



		$stmt = "SELECT Category_TX FROM sl_category where Category_ID <> '-99' ";

			ProcCallDatabase($result,$stmt);

			echo "
					<select name=Src_category id=sc style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
								{
									$myrow = mysqli_fetch_row($result);

									printf("<option value='$myrow[0]'>$myrow[0]");
								}

				mysqli_free_result($result);
echo " </select>";


$stmt = "SELECT Subject_TX FROM sl_subject where Category_TX = 'Pharmaceutical-PD' ";
//$stmt = "SELECT Subject_TX FROM sl_subject where Category_TX = document.getElementById('sc').value";



			ProcCallDatabase($result,$stmt);

			echo "
			 &nbsp;&nbsp;
			<select name=Src_subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
				{
					$myrow = mysqli_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysqli_free_result($result);

echo " </select>";
$stmt = "SELECT Name_TX FROM sl_object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Table'";

			ProcCallDatabase($result,$stmt);

			echo "
			 &nbsp;&nbsp;
			<select name=Src_table
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
				{
					$myrow = mysqli_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysqli_free_result($result);

echo " </select>";
$stmt = "SELECT Name_TX FROM sl_object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Column'";

							ProcCallDatabase($result,$stmt);

							echo "
							 &nbsp;&nbsp;
							<select name=Src_name
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:150px; background-color:white\">";
								printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
								{
									$myrow = mysqli_fetch_row($result);
									printf("<option value='$myrow[0]'>$myrow[0]");
								}
				mysqli_free_result($result);

}

function mappingspecaddobjectTRG($subject){



		$stmt = "SELECT Category_TX FROM sl_category where Category_ID <> '-99' ";

			ProcCallDatabase($result,$stmt);

			echo "
					<select name=Trg_category style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
								{
									$myrow = mysqli_fetch_row($result);

									printf("<option value='$myrow[0]'>$myrow[0]");
								}

				mysqli_free_result($result);
echo " </select>";


$stmt = "SELECT Subject_TX FROM sl_subject where Category_TX = 'Pharmaceutical-PD' ";

			ProcCallDatabase($result,$stmt);

			echo "
			 &nbsp;&nbsp;
			<select name=Trg_subject
				style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
				{
					$myrow = mysqli_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysqli_free_result($result);

echo " </select>";
$stmt = "SELECT Name_TX FROM sl_object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Table'";

			ProcCallDatabase($result,$stmt);

			echo "
				<select name=Trg_table	style=\"color:black; font-family:Times; font-weight:bold;
				font-size:12px; width:150px; background-color:white\">";
				printf("<option selected value='admin'>");
				for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
				{
					$myrow = mysqli_fetch_row($result);
					printf("<option value='$myrow[0]'>$myrow[0]");
				}
				mysqli_free_result($result);

echo " </select>$subject1";
$stmt = "SELECT Name_TX FROM sl_object where Category_TX = 'Pharmaceutical-PD' and Subject_TX = $subject and Class_TX='Column'";

							ProcCallDatabase($result,$stmt);

							echo "
							 &nbsp;&nbsp;
							<select name=Trg_name
								style=\"color:black; font-family:Times; font-weight:bold;
								font-size:12px; width:150px; background-color:white\">";
								printf("<option selected value='admin'>");
								for($recordcount=0;$recordcount<mysqli_num_rows($result);$recordcount++)
								{
									$myrow = mysqli_fetch_row($result);
									printf("<option value='$myrow[0]'>$myrow[0]");
								}
				mysqli_free_result($result);

}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function AddMapping(){

$stmt = "
			Insert into sl_user (User_ID)
				VALUES (document.getElementById('Tranrules').value)";

}



// *************************************************************************************************
// SECTION: End Of File
// *************************************************************************************************
?>
