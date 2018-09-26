<?php
include('template.php');
include('main.php');
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
            <form action="forma.php" method="post">
                <legend>Lietotāju reģistrācija</legend>
                <div class = "form-group">
                    <label for="sname">Vārds:</label>
                    <input type = "text" name = "sname" class="form-control"/>
                </div>
                <div class = "form-group">
                    <label for="sname">Uzvārds:</label>
                    <input type = "text" name = "ssurname" class="form-control"/>
                </div>
                <div class = "form-group">
                    <label for="sname">Telefona nummurs:</label>
                    <input type = "text" name = "snumber" class="form-control"/>
                </div> <div class = "form-group">
                    <label for="sname">E-pasts:</label>
                    <input type = "text" name = "semail" class="form-control"/>
                </div> <div class = "form-group">
                    <label for="sname">Vecums:</label>
                    <input type = "text" name = "sage" class="form-control"/>
                </div>

                <input type="submit" value="Reģistrēties" name="forma" class="btn btn-primary"/>
            </form>
            <?php
		if(isset($_POST['forma'])){
			showText("Vārds",$_POST['sname']);
			showText("Uzvārds",$_POST['ssurname']);
            showText("Telefona nummurs",$_POST['snumber']);
            showText("E-pasts",$_POST['semail']);
            showText("Vecums",$_POST['sage']);
		}
	?>
            <div class="main">
                <h1>Rallijs</h1>
                Aizpildot šo piteikšanās formu, jūs saņemsiet jaunākās mūsu mājaslapas ziņas, jaunumus un rallija kalendāru.
                <img width="550" height="350" src="https://i.ytimg.com/vi/41Df4HijYMc/maxresdefault.jpg">
            </div>
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