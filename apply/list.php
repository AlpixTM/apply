<?php
// list generator
//values $site, $topic, $description,$title,$image
echo "
<div class=\"demo-blog__posts mdl-grid\">";
$curlistcount=0;
while ($curlistcount < $listcount){
$curlistcount++;
    listentry($curlistcount);
}

function listentry ($listid){
    include "global.php";
echo "$listid";


    echo" <div class=\"mdl-card on-the-road-again mdl-cell mdl-cell--12-col\">
        <div class=\"mdl-card__media mdl-color-text--grey-50\" style=\"
    background-image: url(images/$image);
\">
            <h3><a href=\"$site\" style=\"

\">$title</a></h3>
        </div>
        <div class=\"mdl-color-text--grey-600 mdl-card__supporting-text\">
$description
        </div>
        <div class=\"mdl-card__supporting-text meta mdl-color-text--grey-600\">
            <div class=\"minilogo2\">
                <a href=\"dev\"> <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\" data-upgraded=\",MaterialButton,MaterialRipple\">
                    <i class=\"material-icons\" role=\"presentation\">arrow_forward</i>
                    <span class=\"mdl-button__ripple-container\"><span class=\"mdl-ripple\"></span></span></button> </a>
            </div>
        </div>
    </div>
   
    <div class=\"mdl-card__supporting-text meta mdl-color-text--grey-600\"> </div> </div>";
}
?>