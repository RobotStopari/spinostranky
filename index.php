<?php

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
    case "/inspiruj-se/nase-kronika":
        include "elements/page.php";
        break;
    default:
        include "pages/error.php";
        break;
}