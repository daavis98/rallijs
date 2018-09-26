<?php
function getHeader(){
	echo '<!-- CSS files -->
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./css/reset.css"/>
<link rel="stylesheet" href="./css/main.css"/>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="icon" type="image/png" href="./images/favicon.ico">
<title>Rallijs ID</title>
';
}

function getMenu(){
echo '<div class="menu">
            <ul>
                <li><a href="index.php">Sākums</a></li>
                <li><a href="foto..php">Foto Galerijas</a></li>
                <li><a href="video.php">Video Galerijas</a></li>
                <li><a href="kontakti.php">Kontakti</a></li>
                <li><a href="forma.php">Forma</a></li>
            </ul>
        </div>';
}

?>