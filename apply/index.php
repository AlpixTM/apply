<html lang="de">
<?php
require_once 'loader.php';
echo"<head>
<meta charset= \"utf-8 \">
<meta name= \"description \" content= \"$description \">
<meta name= \"viewport \" content= \"width=device-width, initial-scale=1.0, minimum-scale=1.0 \">
<title>$title</title>
<meta name=  \"mobile-web-app-capable \" content= \"yes \">
<link rel= \"icon \" sizes= \"192x192 \" href= \"images/$icon \">
<meta name= \"apple-mobile-web-app-capable \" content= \"yes \">
<meta name= \"apple-mobile-web-app-status-bar-style \" content= \"black \">
<meta name= \"apple-mobile-web-app-title \" content= \"$title \">
<link rel= \"apple-touch-icon-precomposed \" href= \"images/$icon \">
<meta name= \"msapplication-TileImage \" content= \"images/$icon \">
<meta name= \"msapplication-TileColor \" content= \"#3372DF \">
<link rel= \"shortcut icon \" href= \"images/$icon \">
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\">
<link rel= \"stylesheet \" href= \"https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=de \">
<link rel= \"stylesheet \" href= \"https://fonts.googleapis.com/icon?family=Material+Icons \">
<link rel= \"stylesheet \" href= \"https://code.getmdl.io/1.1.3/material.$first-$second.min.css \">
<link rel= \"stylesheet \" href= \"styles/default.css \">
<link rel= \"stylesheet \" href= \"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700 \" type= \"text/css \">
</head>";
if ($ga="true"){
    include_once "ga.php";
}
?>
<body>

				    <div class='demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded'>
      <main class='mdl-layout__content'>

        <div class='demo-blog__posts mdl-grid'>
         <div class='mdl-card__supporting-text meta mdl-color-text--grey-600'>    </div>   
          </div>
     <!-- Alpix look here lel -->
          <?php

          ?>




          <!-- footer -->
				 <footer class='mdl-mini-footer'>
          <div class='mdl-mini-footer--left-section'>
         <?php if ($twitter_on=="true") {
         	         echo"
             <a target='_blank' href='https://twitter.com/$twitter' >   <button class='mdl-mini-footer--social-btn social-btn social-btn__twitter' href='https://twitter.com/AlpixTM' >
              <span class='visuallyhidden'>Twitter</span>

            </button></a>";
         }

				?>
          </div>
          <?php
          if ($footerbutton_on=="true") {
          	echo"<a href='$footerbutton_link' target='_blank'  class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--white' data-upgraded=',MaterialButton,MaterialRipple'>$footerbutton_link_text<span class='mdl-button__ripple-container'><span class='mdl-ripple is-animating' style='width: 255.952px; height: 255.952px; transform: translate(-50%, -50%) translate(64px, 28px);'></span></span></a>
		";
          }
       ?>  
       </footer>
   
		        </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
</html>