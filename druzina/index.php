<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css?=<?php echo time(); ?>">
    <title>Družina</title>
    <link rel="icon" href="../images/LogoFullTr.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="druzina.css?=<?php echo time(); ?>">
</head>

<body>
    <?php include '../navigation.php';?>
    <div class="page">
        <main class="page-float">         
                <h1 class="page-heading">Naše Družina</h1>
                <p class="gallery-text">V naší družině je nás aktuálně dvanáct rozdílného věku, schopností i zájmů. Společně však tvoříme úžasnou partu, která se pustí do každé šílenosti.</p>
                <p class="gallery-text">Web našeho celého oddílu nalezneš <a class="gallery-link" href="http://stopari.skauting.cz/">zde</a>.</p>
                <ul class="gallery-table">

                    <?php $name = "Nik"; $img = "images/nik.jpg"; $alt = "Nik"; $color = "green"; $info = "Toto je Nik. <br> Nik je vůdce našeho oddílu. Skautem je už od roku 2005. Rád čte, leze po stromech nebo hraje na kytaru či akordeon. Byl v krajské radě Junáka. <br>Je naším družinovým knihovNikem."; include 'person.php'; ?>

                    <?php $name = "Vítek"; $img = "images/vitek.jpg"; $alt = "Vítek"; $color = "blue"; $info = "Toto je Vítek. <br>Do skauta chodí už od svých tří let a patří do velké skautské rodiny. Studuje veterinu a baví ho sport. <br>Na lidech obdivuje, když si dokáží dobře zorganizovat svůj čas. <br>Je oddílovým ministrem komunikace."; include 'person.php'; ?>

                    <?php $name = "José"; $img = "images/jose.jpg"; $alt = "José"; $color = "brown"; $info = "Toto je José. <br>Do svých 16 let bydlel v Mexiku, skautem je od roku 2016. Rád jezdí na kole, leze, čte, kreslí, hraje na jakýkoli hudební nástroj a fotí. <br>Na lidech obdivuje, když mají silnou vůli. <br>Je oddílovým ministrem byrokracie a zástupcem vůdce oddílu."; include 'person.php'; ?>

                    <?php $name = "Robot"; $img = "images/robot.jpg"; $alt = "Robot"; $color = "green"; $info = "Toto je Robot. <br>Zajímá se o focení a filmařinu. Skautem je od roku 2012 a dva roky byl družinovým rádcem. <br> Na lidech obdivuje, když mají svůj cíl za kterým si jdou. <br>Je oddílovým obřadníkem a družinovým nástěnkářem. Spravuje také Notion."; include 'person.php'; ?>
                    
                    <?php $name = "Vodík"; $img = "images/vodik.jpg"; $alt = "Vodík"; $color = "blue"; $info = "Toto je Vodík. <br>Je oddílovým správcem nářadí."; include 'person.php'; ?>

                    <?php $name = "Špína"; $img = "images/spina.jpg"; $alt = "Špína"; $color = "brown"; $info = "Toto je Špína. <br>Spinosaurus (Trnitý ještěr) je obrovský masožravý dinosaurus, který žije na území dnešní severní Ameriky a v domech členů vedení Stopařů. Je největší dravý tvor, který kdy chodil po souši. <br>ROOÁÁÁRR!!!"; include 'person.php'; ?>

                    <?php $name = "Ondra"; $img = "images/ondra.jpg"; $alt = "Ondra"; $color = "green"; $info = "Toto je Ondra."; include 'person.php'; ?>

                    <?php $name = "Douba"; $img = "images/douba.jpg"; $alt = "Douba"; $color = "green"; $info = "Toto je Douba."; include 'person.php'; ?>

                    <?php $name = "Majda"; $img = "images/majda.jpg"; $alt = "Majda"; $color = "brown"; $info = "Toto je Majda."; include 'person.php'; ?>

                    <?php $name = "Johanka"; $img = "images/johanka.jpg"; $alt = "Johanka"; $color = "blue"; $info = "Toto je Johanka."; include 'person.php'; ?>

                    <?php $name = "Jenda"; $img = "images/jenda.jpg"; $alt = "Jenda"; $color = "brown"; $info = "Toto je Jenda."; $pos = "custom-img-pos"; include 'person.php'; ?>

                    <?php $name = "Ota"; $img = "images/ota.jpg"; $alt = "Ota"; $color = "blue"; $info = "Toto je Ota."; include 'person.php'; ?>

                </ul>   
        </main>
    </div>
</body>
</html>
