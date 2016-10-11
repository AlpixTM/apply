<?php
// register
if ($dev=="true")
{
    //echo $site;
}
$need=$site;
$sql ="SELECT * FROM `route` WHERE `site` = '$site'";
$db_erg = mysqli_query ( $link, $sql );
if ($dev==true) {
    if (! $db_erg) {
        die ( 'Ungültige Abfrage: ' . mysqli_error () );
    }
}
while ($zeile = mysqli_fetch_array ( $db_erg, MYSQL_ASSOC  )) {
   $status=$zeile['status'];
    if ($status==0){
        $need="closed";
    }
    if ($status==1){
        $need="open";
    }
}
mysqli_free_result ( $db_erg );

switch ($need) {
    case "home":
        include "list.php";
        break;
    case "open":
        include "open.php";
        break;
}

?>