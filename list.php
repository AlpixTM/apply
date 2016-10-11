<?php
// list generator
//values $site, $topic, $description,$title,$image
$curlistcount=0;
while ($curlistcount < $listcount){
$curlistcount++;
    listentry($curlistcount);
}

function listentry ($listid){
    include "global.php";
    $sql ="SELECT * FROM `route` WHERE `id` = $listid";
    $db_erg = mysqli_query ( $link, $sql );
    if ($dev==true) {
        if (! $db_erg) {
            die ( 'Ungültige Abfrage: ' . mysqli_error () );
        }
    }
    while ($zeile = mysqli_fetch_array ( $db_erg, MYSQL_ASSOC  )) {
        foreach ($zeile as $key => $value) {
            $$key=$value;
        }
    }

    mysqli_free_result ( $db_erg );
if ($showinlist==1){

        echo"
  <div class=\"mdl-card on-the-road-again mdl-cell mdl-cell--12-col\">
        <div class=\"mdl-card__media mdl-color-text--grey-50\" style=\"
    background-image: url(images/$image);
\">

            <h3><a href=\"$baselink$site\" style=\"\">$title</a></h3>

        </div>
        <div class=\"mdl-color-text--grey-600 mdl-card__supporting-text\">
$description
        </div>
        <div class=\"mdl-card__supporting-text meta mdl-color-text--grey-600\">
            <div class=\"minilogo2\">
                <a href=\"$baselink$site\"> <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\" data-upgraded=\",MaterialButton,MaterialRipple\">
                    <i class=\"material-icons\" role=\"presentation\">arrow_forward</i>
                    <span class=\"mdl-button__ripple-container\"><span class=\"mdl-ripple\"></span></span></button> </a>
            </div>
        </div>
    </div>
   
    <div class=\"mdl-card__supporting-text meta mdl-color-text--grey-600\"> </div> ";
}

}

?>