	<?php
		require("sl_globals.php");
		global $g_host, $g_user, $g_pass,$g_database, $g_main;
		$conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
		$stmt = "SELECT Color_Bkg_HX, Color_Msg_HX, Logo_Primary_TX, Read_Only_FL,Max_Rows_IN, Attr_01_TX, Attr_02_TX, Attr_03_TX, Attr_04_TX,Attr_05_TX, Attr_06_TX, Attr_07_TX from sl_config where Config_ID = 'Default'";
		$result=mysqli_query($conn, $stmt);
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
		set_time_limit($g_timeout);
		$created	= date("Y-m-d H:i:s");
		?>


		<!DOCTYPE html>
		 <html lang="en">
		 <head>
		 <TITLE>CAH Metadata Management</TITLE>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		 <?php
		 include ("phpmydatagrid.class.php");
		 $objGrid = new datagrid;
		 $objGrid -> friendlyHTML();
		 $objGrid -> pathtoimages("./image/");
		 $objGrid -> closeTags(true);
		 $objGrid -> form('mapping', true);
		 $objGrid -> methodForm("post");
		 $objGrid -> searchby("Src_Location,Src_Table,Src_Field,Trg_Location,Trg_Table,Trg_Field");
		 $objGrid -> decimalDigits(2);
		 $objGrid -> decimalPoint(",");
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
		 $mspec1 = "'".$_REQUEST['name']."'";

		 $objGrid -> salt("Some Code4Stronger(Protection)");
		 $objGrid -> TituloGrid($_REQUEST['name']);
		 $objGrid -> where ("Name_TX = $mspec1");
		 $objGrid -> datarows($g_perpage);
		 $objGrid -> paginationmode('links');
		 $objGrid -> orderby("id", "DESC");
		 $objGrid -> noorderarrows();
		 $objGrid -> linkparam("name=".$_REQUEST['name']."&creator=".$_REQUEST['creator']."&category=".$_REQUEST['category']."&subject=".$_REQUEST['subject']."&class=".$_REQUEST['class']."&type=".$_REQUEST['type']."&changer=".$_REQUEST['changer']);
		 $objGrid -> FormatColumn("Src_Location", "Source Location", 30, 35, 0, "130", "left");
		 $objGrid -> FormatColumn("Src_Table", "Source Table", 35, 35, 0, "100", "left");
		 $objGrid -> FormatColumn("Src_Field", "Source Field", 35, 35, 0, "100", "left");
		 $objGrid -> FormatColumn("Tran_rules", "Tran Rules", 35, 35, 0, "150", "left");
		 $objGrid -> FormatColumn("Trg_Location", "Target Location", 20, 20, 0, "130", "left");
		 $objGrid -> FormatColumn("Trg_Table", "Target Table", 35, 35, 0, "100", "left");
		 $objGrid -> FormatColumn("Trg_Field", "Target Field", 35, 35, 0, "100", "left");

		 $objGrid -> FormatColumn("Category_TX", "Category TX", 35, 65, 2, "10", "left","",$_REQUEST['category'],"");
		 $objGrid -> FormatColumn("Subject_TX", "Subject TX", 35, 85, 2, "10", "left","",$_REQUEST['subject'],"");
		 $objGrid -> FormatColumn("Class_TX", "Class TX", 35, 65, 2, "10", "left","",$_REQUEST['class'],"");
		 $objGrid -> FormatColumn("Type_TX", "Type TX", 35, 95, 2, "10", "left",'',$_REQUEST['type'],'');
		 $objGrid -> FormatColumn("Name_TX", "Name TX", 35, 95, 2, "10", "left", "", $_REQUEST['name'], "");
		 $objGrid -> FormatColumn("Created_DS", "Created DS", 35, 95, 2, "10", "left", "", $created, "");
		 $objGrid -> FormatColumn("Creator_ID", "Creator ID", 35, 95, 2, "10", "left", "", $_REQUEST['changer'], "");
		 $objGrid -> setHeader();
		 ?>
		 </head>
		 <BODY TEXT=#00000 BGCOLOR=#<?=$g_colorbkg;?> LINK=#0000EE VLINK=#551A8B ALINK=#FF0000\">
			<div class="header" id="head_list">
				<div class="row">
					<div class="col-md-6"><IMG SRC=image/<?=$g_logoprim;?> /></div>
					<div class="col-md-6">
						<FONT SIZE=1 FACE=arial COLOR=black>
							<a href=<?=$g_main;?>><u>Main Menu</u></a>&nbsp;&nbsp;&nbsp;
							<a href=javascript:JSopenAboutWindow();><u>About</u></a>&nbsp;&nbsp;&nbsp;
							<a href=javascript:JSopenHelpWindow();><u>Help</u></a>&nbsp;&nbsp;&nbsp;
						</FONT>
					</div>

					<div class="col-md-12"><IMG SRC=image/banner.png></div>
					<div class="col-md-12">
						<div class="msg_info" style="background: rgb(255, 255, 102) none repeat scroll 0% 0%; padding: 5px 0px; margin-bottom: 5px;">
							<font face="Arial" size="2">[Selection] Select Add Edit View Mapping Details.</font></div>
							<FORM METHOD=POST ACTION=<?= $g_main;?> >
								<INPUT TYPE=SUBMIT NAME=auggie VALUE="Search Again" style="color:black; width:100px;">
								<INPUT TYPE=SUBMIT NAME=auggie VALUE="Cancel" style="color:black; width:100px;">
							</FORM>
				</div>
			</div>
			</div>

			<?php $objGrid -> grid();?>
			<?php $objGrid -> desconectar(); ?>


			<script language="JavaScript">
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

		 </script>
			<style>
		  body {
			 display: block;
			 margin-bottom: 8px !important;
			 margin-left: 8px !important;
			 margin-right:8px !important;
			 margin-top: 8px !important;
		 }
		 .col-md-6 {
		   float: left;
		   width: 50%;
		 }
		 .col-md-12 {
		   float: left;
		   width: 100%;
		 }
		  .container {
			float: left;
			margin: 0;
			padding: 0;
			width: 100%;
		  }
			#dgDiv #head_list{
			 display: none;
		  }
		  </style>

	</BODY>
	</html>
