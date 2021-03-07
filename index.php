<?php

$actual;

include "elements/pages.php";

switch($_SERVER["REQUEST_URI"]) {
    case "/":
        include "pages/homepage.php";
        break;
    case "/clenove":
        include "pages/druzina.php";
        break;
    case "/nase-fotky":
        include "pages/fotografie.php";
        break;
    case "/madarsky-gulas":
        include "pages/gulas.php";
        break;
    default:
        if(is_int(array_search($_SERVER["REQUEST_URI"], array_column($pages, 'url')))) {
            $actual = $pages[array_search($_SERVER["REQUEST_URI"], array_column($pages, 'url'))];
            include "elements/page.php";
        } else {
            include "pages/error.php";
        }
        break;
}
