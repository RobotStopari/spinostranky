<?php

$actual;
$findPage = false;

include "elements/pages.php";

switch($_SERVER["REQUEST_URI"]) {
    case "/":
        include "pages/homepage.php";
        break;
    case "/clenove":
        include "pages/druzina.php";
        break;
    case "/inspiruj-se":
        include "pages/inspirace.php";
        break;
    case "/nase-fotky":
        include "pages/fotografie.php";
        break;
    default:
        foreach($pages as $page) {
            if(array_search($_SERVER["REQUEST_URI"], $page)) {
                $actual = $page;
                include "elements/page.php";
                $findPage = true;
            }
        }
        if(!$findPage) {
            include "pages/error.php";
        }
        break;
}

