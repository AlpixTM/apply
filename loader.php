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
// pageurl

    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on")
    {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    $simpleURL=parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $pageURL .= $_SERVER["SERVER_NAME"].$simpleURL;


// dyn redirect link
$url=$pageURL . "test";
$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($handle);
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 404) {
 $baselink="?".$urlparam."=";
}
else{
    $baselink="";
}
curl_close($handle);


?>