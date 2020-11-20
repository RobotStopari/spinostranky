<?php 
    switch (date("d-m")) {
        case '':
            echo '<div class="birthday">
                    <img src="/druzina/images/nik.jpg" alt="Nik" width="25%" class="birthday-img">
                    <p class="birthday-text" >Nik má dnes narozeniny!</p>
                </div>';
            break;
        case '13-05':
            echo '<div class="birthday">
                    <img src="/druzina/images/vitek.jpg" alt="Vítek" width="25%" class="birthday-img">
                    <p class="birthday-text" >Vítek má dnes narozeniny!</p>
                </div>';
            break;
        case '19-08':
            echo '<div class="birthday">
                    <img src="/druzina/images/jose.jpg" alt="José" width="25%" class="birthday-img">
                    <p class="birthday-text" >José má dnes narozeniny!</p>
                </div>';
            break;
        case '11-04':
            echo '<div class="birthday">
                    <img src="/druzina/images/robot.jpg" alt="Robot" width="25%" class="birthday-img">
                    <p class="birthday-text" >Robot má dnes narozeniny!</p>
                </div>';
            break;
        case '':
            echo '<div class="birthday">
                    <img src="/druzina/images/spina.jpg" alt="Špína" width="25%" class="birthday-img">
                    <p class="birthday-text" >Špína má dnes narozeniny!</p>
                </div>';
            break;
        case '15-02':
            echo '<div class="birthday">
                    <img src="/druzina/images/vodik.jpg" alt="Vodík" width="25%" class="birthday-img">
                    <p class="birthday-text" >Vodík má dnes narozeniny!</p>
                </div>';
            break;
        case '28-12':
            echo '<div class="birthday">
                    <img src="/druzina/images/ondra.jpg" alt="Ondra" width="25%" class="birthday-img">
                    <p class="birthday-text" >Ondra má dnes narozeniny!</p>
                </div>';
            break;
        case '':
            echo '<div class="birthday">
                    <img src="/druzina/images/douba.jpg" alt="Douba" width="25%" class="birthday-img">
                    <p class="birthday-text" >Douba má dnes narozeniny!</p>
                </div>';
            break;
        case '30-07':
            echo '<div class="birthday">
                    <img src="/druzina/images/majda.jpg" alt="Majda" width="25%" class="birthday-img">
                    <p class="birthday-text" >Majda má dnes narozeniny!</p>
                </div>';
            break;
        case '05-10':
            echo '<div class="birthday">
                    <img src="/druzina/images/johanka.jpg" alt="Johanka" width="25%" class="birthday-img">
                    <p class="birthday-text" >Johanka má dnes narozeniny!</p>
                </div>';
            break;
        case '11-11':
            echo '<div class="birthday">
                    <img src="/druzina/images/jenda.jpg" alt="Jenda" width="25%" class="birthday-img">
                    <p class="birthday-text" >Jenda má dnes narozeniny!</p>
                </div>';
            break;
        case '':
            echo '<div class="birthday">
                    <img src="/druzina/images/ota.jpg" alt="Ota" width="25%" class="birthday-img">
                    <p class="birthday-text" >Ota má dnes narozeniny!</p>
                </div>';
            break;
        default:
            echo '<img src="/images/LogoFull.png" alt="naše logo" width="25%" class="page-img">';
    }
