<?php include "elements/pages.php" ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/inspirace.css">
    <title>Akce</title>
    <link rel="icon" href="images/main/LogoFullTr.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'elements/navigation.php';?>
    <div class="page">
        <div class="page-float">
            <ul>
                <?php foreach($pages as $page) {
                    echo '
                        <li><a href="' . $page["url"] . '">' . $page["heading"] . '</a></li>
                    ';
                } ?>
            </ul>
        </div>
    </div>
</body>
</html>