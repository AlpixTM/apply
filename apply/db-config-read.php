<?php
$sql = "SELECT * FROM `config` WHERE LENGTH(`value`) > 0";
$db_erg = mysqli_query ( $link, $sql );
if ($dev==true) {
	if (! $db_erg) {
		die ( 'Ungültige Abfrage: ' . mysqli_error () );
	}
}
while ($zeile = mysqli_fetch_array ( $db_erg, MYSQL_BOTH  )) {
	$temp=$zeile["name"];
	$$temp=$zeile["value"];
}
mysqli_free_result ( $db_erg );
?>