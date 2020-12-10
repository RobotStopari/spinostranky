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
            <ul class="list">
                <?php foreach($pages as $page) {
                    echo '
                        <li class="window"><a class="link ' . $page["color"] . '" href="' . $page["url"] . '" ' . $page["target"] . '><svg class="figure-svg" preserveAspectRatio="none" viewBox="0 0 241 154.87"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 .982h241v154.872H0V.982zm222.122 6.286c5.31.444 13.133 2.132 13.809 11.551 1.835 27.635.772 113.293.676 119.424-.097 6.042-4.539 9.152-8.788 9.507-57.748 4.177-193.428 4.443-206.078 4.177C9.09 151.57 6 145.529 6 139.487c0 0 .966-112.315 1.545-120.579.483-8.264 2.8-11.018 9.174-11.64 6.47-.533 53.596-1.777 101.301-2.222 47.609-.355 94.83 1.422 104.102 2.222z" id="a"/></defs><use xlink:href="#a" fill-rule="evenodd"/></svg>' . $page["heading"] . '</a></li>
                        
                    ';
                } ?>
            </ul>
        </div>
    </div>
</body>
</html>