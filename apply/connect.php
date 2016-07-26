<?php
$link = mysqli_connect ( MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT, MYSQL_DATENBANK, MYSQL_PORT );
if (!$link) {
	die('Connect Error: ' . mysqli_connect_error());
}
?>