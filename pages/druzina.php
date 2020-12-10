<?php include "elements/people.php" ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Družina</title>
    <link rel="icon" href="images/main/LogoFullTr.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/druzina.css">
</head>

<body>
    <?php include 'elements/navigation.php';?>
    <div class="page">
        <main class="page-float">         
                <h1 class="page-heading">Naše Družina</h1>
                <p class="gallery-text">V naší družině je nás aktuálně dvanáct rozdílného věku, schopností i zájmů. Společně však tvoříme úžasnou partu, která se pustí do každé šílenosti.</p>
                <p class="gallery-text">Web našeho celého oddílu nalezneš <a class="gallery-link" href="http://stopari.skauting.cz/">zde</a>.</p>
                <ul class="gallery-table">
                    <?php foreach($people as $person) {
                        setPerson ($person["name"], $person["img"], $person["color"], $person["content"]);
                    } ?>
                </ul>   
        </main>
    </div>
</body>
</html>
