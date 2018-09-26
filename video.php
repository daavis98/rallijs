<?php
include('template.php');
?>
<!doctype html>
<html lang="en">
<header>
    <?php getHeader(); ?>
</header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <title>Rallijs ID</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo"></div>
        <?php getMenu(); ?>
        <div class="col-wrapper">
            <div class="main">
                <h1>Mani rallija video</h1>
                <p>Esmu samontējis savus rallija video no vairākiem posmiem.</p>
                <iframe width="550" height="350" src="https://www.youtube.com/embed/xwILtWvPZtk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <iframe width="550" height="350" src="https://www.youtube.com/embed/SAevOgHkmps" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="right">
                <h1>Partneri</h1>
                <ul>
                    <li><img src="https://i1.wp.com/www.eveautosports.lv/wp-content/uploads/Saldus_Rallijs_logo_kr_2018.png"></li>
                    <li><img src="http://rallytalsi.lv/content/themes/rallytalsi/img/rallytalsi-logo-2018.png"></li>
                    <li><img src="https://www.cvmarket.lv/gfx/lat/cvmarket_lv/ALDARIS_logo.png"></li>
                    <li><img src="http://roadattackrally.com/wp-content/uploads/2017/01/cropped-RAR_logo_square.png"></li>
                </ul>
            </div>
        </div>
        <footer>
            <p> rallijs.id.lv </p>
        </footer>
    </div>
</body>
</html>