<?php
require_once 'dbconf.php';
require_once 'conf.php';
require_once 'connect.php';
require_once 'fallback-conf.php';
//variables
$ip=$_SERVER['REMOTE_ADDR'];
$date = date("d-m-y");
require_once 'db-config-read.php';

// dynamic variables & settings

// count of list entries
$sql ="SELECT MAX(id) AS value FROM `route`;";
$db_erg = mysqli_query ( $link, $sql );
if ($dev==true) {
    if (! $db_erg) {
        die ( 'Ungültige Abfrage: ' . mysqli_error () );
    }
}
while ($zeile = mysqli_fetch_array ( $db_erg, MYSQL_ASSOC  )) {
    $listcount=$zeile["value"];

}
mysqli_free_result ( $db_erg );
// sites
$site=$_GET["$urlparam"];
if ($dev==true) {
	echo $site;
}
if ($site=="") {
	$site="home";
}
if ($dev==TRUE) {
	error_reporting(E_ALL);
}

?>