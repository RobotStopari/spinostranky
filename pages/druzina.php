<?php 
    include "elements/people.php";
    $title = "Naše družina";
    $addToHead = '<link rel="stylesheet" href="styles/druzina.css">';
    include 'elements/head.php';
    include 'elements/navigation.php';
?>
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
