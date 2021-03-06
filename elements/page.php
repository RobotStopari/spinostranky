<?php 
    include "elements/pages.php";
    $title = 'Inspiruj se';
    $addToHead = '<link rel="stylesheet" href="/styles/inspirace.css">';
    include 'elements/head.php';
    include 'elements/navigation.php';
?>
    <?php if ($actual) { ?>
        <h1><?php echo $actual["heading"] ?></h1>
        <?php echo $actual["content"]; ?>
    <?php } ?> 
<?php include "elements/end.php"; ?>
