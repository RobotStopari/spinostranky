<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css?=<?php echo time(); ?>">
    <link rel="stylesheet" href="fotogalerie.css?=<?php echo time(); ?>">
    <title>Fotogalerie</title>
    <link rel="icon" href="../images/LogoFullTr.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include '../navigation.php';?>
    <div class="page">
        <div class="page-float">
           <h1 class="page-heading">Naše fotografie</h1>
           <div class="gallery">

                <?php $title = "Příprava tábora"; $img = "PripravaTabora.JPG"; $style = "object-position: 50% 10%"; $link = "https://photos.app.goo.gl/aXEQmUPJ1YwQMyN1A"; include "gallery.php"; ?>

                <?php $title = "Květnová oddílová rada"; $img = "KvetnovaOddilovaRada.jpeg"; $style = "object-position: 50% 40%"; $link = "https://photos.app.goo.gl/vp4eDEFbgDygcES66"; include "gallery.php"; ?>

           </div>
        </div>
    </div>
</body>
</html>