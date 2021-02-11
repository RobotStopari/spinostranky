<?php 

$people = [
    [
        "name" => "Nik",
        "img" => "nik.jpg",
        "color" => "green",
        "date" => "",
        "content" => "Toto je Nik. <br> Nik je vůdce našeho oddílu. Skautem je už od roku 2005. Rád čte, leze po stromech nebo hraje na kytaru či akordeon. Byl v krajské radě Junáka. <br>Je naším družinovým knihovNikem.",
    ], [
        "name" => "Vítek",
        "img" => "vitek.jpg",
        "color" => "blue",
        "date" => "13-05",
        "content" => "Toto je Vítek. <br>Do skauta chodí už od svých tří let a patří do velké skautské rodiny. Studuje veterinu a baví ho sport. <br>Na lidech obdivuje, když si dokáží dobře zorganizovat svůj čas. <br>Je oddílovým ministrem komunikace.",
    ], [
        "name" => "José",
        "img" => "jose.jpg",
        "color" => "brown",
        "date" => "19-08",
        "content" => "Toto je José. <br>Do svých 16 let bydlel v Mexiku, skautem je od roku 2016. Rád jezdí na kole, leze, čte, kreslí, hraje na jakýkoli hudební nástroj a fotí. <br>Na lidech obdivuje, když mají silnou vůli. <br>Je oddílovým ministrem byrokracie a zástupcem vůdce oddílu.",
    ], [
        "name" => "Robot",
        "img" => "robot.jpg",
        "color" => "green",
        "date" => "11-04",
        "content" => "Toto je Robot. <br>Zajímá se o focení a filmařinu. Skautem je od roku 2012 a dva roky byl družinovým rádcem. <br> Na lidech obdivuje, když mají svůj cíl za kterým si jdou. <br>Je oddílovým obřadníkem a družinovým nástěnkářem. Spravuje také Notion.",
    ], [
        "name" => "Vodík",
        "img" => "vodik.jpg",
        "color" => "blue",
        "date" => "15-02",
        "content" => "Toto je Vodík. <br>Je oddílovým správcem nářadí.",
    ], [
        "name" => "Špína",
        "img" => "spina.jpg",
        "color" => "brown",
        "date" => "",
        "content" => "Toto je Špína. <br>Spinosaurus (Trnitý ještěr) je obrovský masožravý dinosaurus, který žije na území dnešní severní Ameriky a v domech členů vedení Stopařů. Je největší dravý tvor, který kdy chodil po souši. <br>ROOÁÁÁRR!!!",
    ], [
        "name" => "Ondra",
        "img" => "ondra.jpg",
        "color" => "green",
        "date" => "28-12",
        "content" => "Toto je Ondra.",
    ], [
        "name" => "Doubravka",
        "img" => "douba.jpg",
        "color" => "blue",
        "date" => "",
        "content" => "Toto je Doubravka. <br>Skautkou je už skoro 20 let. Studuje všeobecnou sestru. Má ráda dobré jídlo, dobré lidi, pohyb a přírodu. Pár let vedla vlčata. Teď pomáhá novým vedoucím a užívá si, že směr udává Ondra.",
    ], [
        "name" => "Majda",
        "img" => "majda.jpg",
        "color" => "brown",
        "date" => "30-07",
        "content" => "Toto je Majda.",
    ], [
        "name" => "Johanka",
        "img" => "johanka.jpg",
        "color" => "green",
        "date" => "05-10",
        "content" => "Toto je Johanka.",
    ], [
        "name" => "Jenda",
        "img" => "jenda.jpg",
        "color" => "blue",
        "date" => "11-11",
        "content" => "Toto je Jenda.",
    ], [
        "name" => "Ota",
        "img" => "ota.jpg",
        "color" => "brown",
        "date" => "",
        "content" => "Toto je Ota.",
    ],
];

function setPerson($name, $img, $color, $content) {
    echo '<li class="table-element">
            <h2 class="element-heading">' . $name . '</h2>
            <figure class="figure">
                <svg class="figure-svg" preserveAspectRatio="none" viewBox="0 0 241 154.87"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 .982h241v154.872H0V.982zm222.122 6.286c5.31.444 13.133 2.132 13.809 11.551 1.835 27.635.772 113.293.676 119.424-.097 6.042-4.539 9.152-8.788 9.507-57.748 4.177-193.428 4.443-206.078 4.177C9.09 151.57 6 145.529 6 139.487c0 0 .966-112.315 1.545-120.579.483-8.264 2.8-11.018 9.174-11.64 6.47-.533 53.596-1.777 101.301-2.222 47.609-.355 94.83 1.422 104.102 2.222z" id="a"/></defs><use xlink:href="#a" fill-rule="evenodd"/></svg>
                <img src="../images/people/' . $img . '" alt="' . $name . '" class="figure-img">
                <div class="figure-back ' . $color . '"></div>
                <p class="figure-text">' . $content . '</p>
            </figure>
        </li>';
};