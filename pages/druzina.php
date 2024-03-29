<?php 
    include "elements/people.php";
    $title = "Naše družina";
    $addToHead = '<link rel="stylesheet" href="styles/druzina.css">';
    include 'elements/head.php';
    include 'elements/navigation.php';
?>     

<h1>Naše Družina</h1>
<p class="clenove-text">V naší družině je nás aktuálně dvanáct rozdílného věku, schopností i&nbsp;zájmů. Společně však tvoříme úžasnou partu, která se pustí do každé šílenosti.</p>
<p class="clenove-text">Web našeho celého oddílu nalezneš <a href="http://stopari.skauting.cz/">zde</a>.</p>
<ul class="gallery-table">
    <?php foreach($people as $person) {
        setPerson ($person["name"], $person["img"], $person["color"], $person["content"]);
    } ?>
</ul>   

<?php include "elements/end.php"; ?>
