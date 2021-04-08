<?php 
    $title = "Spinostránky";
    include 'elements/head.php';
    include 'elements/navigation.php';
?>

<h1>Jsme Spinosauři!</h1>
<?php include "elements/logo.php" ?>
<article>
    <p class="info">Jsme družina Spinosaurů&nbsp;–&nbsp;šílenců, frajerů a&nbsp;mimo jiné i&nbsp;skautských vedoucích.</p>
    <p class="info">Společně tvoříme vedoucí oddílu Stopařů v&nbsp;Kralupech nad Vltavou. Jedna část vede vlčata a&nbsp;druhá zase skauty.</p>
    <p class="info">Každý z&nbsp;nás umí něco jiného a&nbsp;navzájem se učíme spoustu zajímavých dovedností. Podnikáme společně ty nejkrutější a&nbsp;nejzajímavější akce.</p>
</article>
<div class="quote">
    <h2 class="quote-heading the">Pokřik:</h2>
    <?php
    if(date('H:i') == "17:00") {
        echo '<p class="quote-text the">Nik je tajný agent!!!</p>';
    } else {
        echo '<p class="quote-text the">ROOOAAARRR!!!</p>';
    }?>
</div>

<?php include "elements/end.php"; ?>
