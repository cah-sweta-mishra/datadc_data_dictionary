<?php

$conn = @mysql_connect('127.0.0.1','root','sbj1234');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('sl_prod', $conn);

?>