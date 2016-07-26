<?php
require_once 'dbconf.php';
require_once 'conf.php';
require_once 'connect.php';

//variables
$ip=$_SERVER['REMOTE_ADDR'];
$date = date("d-m-y");
$site=$_GET["site_app"];


// dynamic variables & settings
if ($dev==true) {
	echo $site;
}
if ($site=="") {
	$site="main";
}
if ($dev==TRUE) {
	error_reporting(E_ALL);
}



?>