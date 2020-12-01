<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css?=<?php echo time(); ?>">
    <link rel="stylesheet" href="inspirace.css?=<?php echo time(); ?>">
    <title>Akce</title>
    <link rel="icon" href="../images/LogoFullTr.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include '../navigation.php';?>
    <div class="page">
        <div class="page-float">
            <ul class="gallery-table">
                <?php $link="kronika/"; $src="kronika.jpeg"; $name="Kronika"; $color="green"; include "window.php" ?>
                <?php $link="#"; $src="mapa.jfif"; $name="Mapa"; $color="blue"; include "window.php" ?>
                <?php $link="ritualnik/"; $src="ritualnik.jpg"; $name="Rituálník"; $color="green"; include "window.php" ?>
                <?php $link="rozvoj/"; $src="rozvoj.jpg"; $name="Osobní rozvoj"; $color="brown"; include "window.php" ?>
                <?php $link="videoteka/"; $src="videoteka.png"; $name="Videotéka"; $color="blue"; include "window.php" ?>
                <?php $link="odborky/"; $src="odborky.png"; $name="Naše odborky"; $color="brown"; include "window.php" ?>
                <?php $link="kucharka/"; $src="kucharka.jpg"; $name="Kuchařka"; $color="green"; include "window.php" ?>
                <?php $link="vyzvy/"; $src="vyzva.jpg"; $name="Výzvy!"; $color="brown"; include "window.php" ?>
                <?php $link="kurzy/"; $src="kurzy.png"; $name="Kurzy"; $color="blue"; include "window.php" ?>
            </ul>
        </div>
    </div>
</body>
</html>