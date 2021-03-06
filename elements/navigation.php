<?php 
    include "elements/pages.php";
?>

<nav class="head">
    <div class="head-float">
        <a href="/"><img src="/images/main/Logo.png" alt="logo" class="logo"></a>
        <ul class="navbar">
            <li class="navbar-item"><a href="/" class="navbar-link">O nás</a></li>
            <li class="navbar-item"><a href="/clenove" class="navbar-link">Členové</a></li>
            <li class="navbar-item"><a href="/nase-fotky" class="navbar-link">Fotky</a></li>
            <li class="navbar-item navbar-item-drop"><a href="#" class="navbar-link nabar-link-drop">Inspirace</a><ul class="drop">
                <?php foreach($pages as $page) {
                    if ($page["active"]) {
                        if ($page["external"]) {
                            echo '<li class="navbar-item-in-drop"><a href="' . $page["url"] . '" class="navbar-link-in-drop" ' . $page["target"] . '>' . $page["heading"] . '<img src="../images/main/externalBlack.png" class="external-icon"></a></li>';
                        } else {
                            echo '<li class="navbar-item-in-drop"><a href="' . $page["url"] . '" class="navbar-link-in-drop" ' . $page["target"] . '>' . $page["heading"] . '</a></li>';
                        }}} ?>
            </ul></li>
        </ul>
    </div>
</nav>
<div class="page">
    <main class="page-float">
