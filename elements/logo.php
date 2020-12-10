<?php 
    $people = [
        [
            "img" => "vitek.jpg",
            "name" => "Vitek",
            "date" => "13-05",
        ],
        [
            "img" => "nik.jpg",
            "name" => "Nik",
            "date" => "",
        ],
        [
            "img" => "jose.jpg",
            "name" => "José",
            "date" => "19-08",
        ],
        [
            "img" => "robot.jpg",
            "name" => "Robot",
            "date" => "11-04",
        ],
        [
            "img" => "vodik.jpg",
            "name" => "Vodík",
            "date" => "15-02",
        ],
        [
            "img" => "spina.jpg",
            "name" => "Špína",
            "date" => "",
        ],
        [
            "img" => "ondra.jpg",
            "name" => "Ondra",
            "date" => "28-12",
        ],
        [
            "img" => "douba.jpg",
            "name" => "Douba",
            "date" => "",
        ],
        [
            "img" => "majda.jpg",
            "name" => "Majda",
            "date" => "30-07",
        ],
        [
            "img" => "johanka.jpg",
            "name" => "Johanka",
            "date" => "05-10",
        ],
        [
            "img" => "jenda.jpg",
            "name" => "Jenda",
            "date" => "11-11",
        ],
        [
            "img" => "ota.jpg",
            "name" => "Ota",
            "date" => "",
        ],
    ];

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