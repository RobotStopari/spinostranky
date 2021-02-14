<?php
    $title = 'Fotogalerie'; 
    $addToHead = '<link rel="stylesheet" href="styles/fotografie.css">';
    include 'elements/head.php';
    include 'elements/navigation.php';
?>

<h1>Naše fotografie</h1>
<div class="gallery">

    <?php $title = "Příprava tábora"; $img = "../images/gallery/PripravaTabora.JPG"; $style = "object-position: 50% 10%"; $link = "https://photos.app.goo.gl/aXEQmUPJ1YwQMyN1A"; include "elements/gallery.php"; ?>

    <?php $title = "Květnová oddílová rada"; $img = "../images/gallery/KvetnovaOddilovaRada.jpeg"; $style = "object-position: 50% 40%"; $link = "https://photos.app.goo.gl/vp4eDEFbgDygcES66"; include "elements/gallery.php"; ?>

</div>

<?php include "elements/end.php"; ?>
