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