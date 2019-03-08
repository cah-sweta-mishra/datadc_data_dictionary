<?php
  require("sl_globals.php");
  @session_start();
  global $g_host, $g_user, $g_pass, $g_database;
  $conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
  mysqli_set_charset($conn,"utf8");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
if($_REQUEST['cbFillCategory'] == 'categoryList'){
  $Category_ID = $_REQUEST['val_id'];
  $query = "select distinct Subject_ID, Subject_TX  from sl_type where Category_ID= " . $Category_ID . "";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

  echo "<select id='selectbox1' style='color:black; font-family:Times; font-weight:bold;
  	font-size:12px; width:150px; background-color:white'>
  	<option value=''>Select Subject</option>";
    while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['Subject_ID'] . "'>" . $row['Subject_TX'] . "</option>";
        }
    echo "</select>";


}else if($_REQUEST['cbFillCategory'] == 'subjectList'){
  $Subject_ID = $_REQUEST['val_id'];
  $query = "select distinct Class_ID, Class_TX from sl_type	where Subject_ID= " . $Subject_ID . "	order by Class_DC,Class_TX";
  $result = mysqli_query($conn, $query);

  echo "<select id='selectbox2' style='color:black; font-family:Times; font-weight:bold;
    font-size:12px; width:150px; background-color:white'>
    <option value=''>Select Class</option>";
    while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['Class_ID'] . "'>" . $row['Class_TX'] . "</option>";
        }
    echo "</select>";
}else if($_REQUEST['cbFillCategory'] == 'classList'){
  $Class_ID = $_REQUEST['val_id'];
  $query = "select distinct Type_ID, Type_TX from sl_type	where Class_ID= " . $Class_ID . "	order by Type_DC,Type_TX";
  $result = mysqli_query($conn, $query);

  echo "<select id='selectbox3' style='color:black; font-family:Times; font-weight:bold;
    font-size:12px; width:150px; background-color:white'>
    <option value=''>Select Type</option>";
    while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['Type_ID'] . "'>" . $row['Type_TX'] . "</option>";
        }
    echo "</select>";
}else if($_REQUEST['cbFillCategory'] == 'Pagination'){
  $limit = $_REQUEST['pageLimit'];
  if (isset($_REQUEST["page"])) { $page  = $_REQUEST["page"];  } else { $page=1; }
  $pageSql= $_REQUEST['pagesql'];
  $start_from = ($page-1) * $limit;
  $sql = $pageSql. " LIMIT ". $start_from ." , ". $limit;
  $rs_result = mysqli_query ($conn, $sql);
  $i = 1;
  $color1 = "#FFFFF0";
  $color2 = "#E0FFFF";

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
    if ($_SESSION['s_user'] == "read") {
	}else{
	printf("<TD align=center><B>Version</B></TD></TR>\n");
	}
  while ($row = mysqli_fetch_object($rs_result)) {
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

}else{
  echo "No data available";
}
?>
