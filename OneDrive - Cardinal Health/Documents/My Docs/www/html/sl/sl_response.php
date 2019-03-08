<?php
require("sl_globals.php");
global $g_host, $g_user, $g_pass, $g_database;
$conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

@session_start();
$params = $columns = $totalRecords = $data = array();
$params = $_REQUEST;

//define index of column
	$columns = array(
		0 =>'ROWID',
		1 =>'Category_TX',
		2 => 'Subject_TX',
		3 => 'Type_TX',
		4 => 'Name_TX',
	);

	$where = $sqlTot = $sqlRec = "";
	$sql = $_SESSION['reportstmt'];
	$sqlTot .= $sql;
	$sqlRec .= $sql;

	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));
	$totalRecords = mysqli_num_rows($queryTot);
	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch sl_object data");

	while( $row = mysqli_fetch_row($queryRecords) ) {
		$data[] = $row;
	}

	$json_data = array(
			"draw"            => 1,
			"recordsTotal"    => intval( $totalRecords ),
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data
			);

	echo json_encode($json_data);
	?>