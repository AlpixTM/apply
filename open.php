<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 11.10.16
 * Time: 07:08
 */
$baselinksend=$baselink."send";
echo"
<div class=\"demo-back\">
    <a class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\" href=\"$simpleURL\" title=\"go back\" role=\"button\" data-upgraded=\",MaterialButton,MaterialRipple\">
        <i class=\"material-icons\" role=\"presentation\">arrow_back</i>
        <span class=\"mdl-button__ripple-container\"><span class=\"mdl-ripple\"></span></span></a>
</div>
";
$sql = "SELECT * FROM `route` WHERE `site` = '$site'";
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
echo "<div class=\"demo-blog__posts mdl-grid\">
    <div class=\"mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col\">
        <div class=\"mdl-card__media mdl-color-text--grey-50\" style=\"
    background-image: url(images/$image);
\">
            <h3>
                $title
            </h3>
        </div>
        <div class=\"mdl-color-text--grey-700 mdl-card__supporting-text meta\">
        </div>
        <div class=\"mdl-color-text--grey-700 mdl-card__supporting-text\">
            <p>
                    $description
            </p>
        </div>
        <div class=\"mdl-color-text--primary-contrast mdl-card__supporting-text comments\">
            <div class=\"comment mdl-color-text--grey-700\">
                <form action=\"$baselinksend\" method=\"POST\" style=\"text-align: center;\">
                ";

echo"  <input type=\"hidden\" name=\"type\" value=\"$topic\" id=\"type\"><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--colored\" data-upgraded=\",MaterialButton\">
                        Absenden
                    </button></form>
            </div>
        </div>
    </div>
</div>";
?>






