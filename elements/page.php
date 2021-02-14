<?php 
    include "elements/pages.php";
    $title = 'Inspiruj se';
    $addToHead = '<link rel="stylesheet" href="/styles/inspirace.css">';
    include 'elements/head.php';
    include 'elements/navigation.php';
?>
            <?php if ($page) { ?>
                <h1><?php echo $page["heading"] ?></h1>
                <?php echo $page["content"]; ?>
            <?php } ?> 
<?php include "elements/end.php"; ?>
