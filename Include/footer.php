</div>
<div class="box">
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    $jaar = date("Y");
    $moment ='';

    if($uur >= 0 && $uur <= 5){
        $moment = 'Goedennacht';
    }
    elseif ($uur >= 5 && $uur <= 12){
        $moment = 'Goedenochtend';
    }
    elseif($uur >= 12 && $uur <= 17){
        $moment = 'Goedenmiddag';
    }
    elseif ($uur >= 17 && $uur <= 0){
        $moment = 'Goedenavond';
    }
    ?>

    <?php

    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a href='/phpopdrachten/hoofdstuk6/Opdracht_6.1.php'>Login</a>";
    }
    echo $moment . " " . $bezoeker . ', &copy; ' . $jaar;
    ?>
</div>
</body>
</html>