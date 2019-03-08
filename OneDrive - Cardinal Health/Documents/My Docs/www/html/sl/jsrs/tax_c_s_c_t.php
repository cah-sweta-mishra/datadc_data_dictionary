<?php

// tax_c_s_c_t.php
// created 23-feb-2004 (pjn)
// updated 26-jan-2009 (pjn)

require("../sl_globals.php");

require("jsrsServer.php");
jsrsDispatch( "categoryList subjectList classList typeList");

function categoryList() {
	return serializeSql( "select distinct Category_ID, Category_TX
		from SL_Type
		order by Category_DC,Category_TX");
}

function subjectList($Category_ID){
	return serializeSql("select distinct Subject_ID, Subject_TX
		from SL_Type
		where Category_ID= " . $Category_ID . "
		order by Subject_DC,Subject_TX");
}

function classList($Subject_ID){
	return serializeSql("select distinct Class_ID, Class_TX
		from SL_Type
		where Subject_ID= " . $Subject_ID . "
		order by Class_DC,Class_TX");
}

function typeList($Class_ID){
	return serializeSql("select distinct Type_ID, Type_TX 
		from SL_Type
		where Class_ID= " . $Class_ID . "
		order by Type_DC,Type_TX");
}

function serializeSql($sql){
	global $g_host, $g_user, $g_pass, $g_database;
	$link = mysql_connect("$g_host","$g_user","$g_pass");
	mysql_select_db ("$g_database");

	$result = mysql_query ($sql);
	$s = '';
	while ($row = mysql_fetch_row($result)) {
		$s .= join( $row, '~') . "|";
	}

	mysql_close($link);
	return $s;
}

?>
