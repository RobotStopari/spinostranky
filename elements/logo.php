<?php 
include "people.php";

$birthday = false;

foreach($people as $person) {
    if(date("d-m") == $person["date"]) {
        echo '<div class="birthday">
                    <img src="/images/people/' . $person["img"] . '" alt="' . $person["name"] . '" width="25%" class="birthday-img">
                    <p class="birthday-text" >' . $person["name"] . ' má dnes narozeniny!</p>
                </div>'; 
        $birthday = true;
    }
}

if($birthday == false) {
    echo '<img src="/images/main/LogoFull.png" alt="naše logo" width="25%" class="page-img">';
}
