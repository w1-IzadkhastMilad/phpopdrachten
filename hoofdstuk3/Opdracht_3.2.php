<?php
/**
 * User: milad
 * Date: 7-2-2020
 * Time: 13:55
 * File: opdracht_2.1.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
    <link href="CSS_3.2/Opdracht_3.2CSS.css" type="text/css" rel="stylesheet">
</head>
<body>
<h2>Uitwerking van <a href="../Index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <h1>Taak 1 & 2</h1>
    <?php
    $trafficLightColor = "groen"; // colors: groen / oranje / rood
    $ambulanceComing = false; //options: true / false
    $driveOn = true;

    if($trafficLightColor == "groen" && $ambulanceComing == false){
        echo("<p><span style=\"color:lawngreen;text-align:center;\">U mag doorrijden</span></p>");
    }
    else if($trafficLightColor = "oranje" || $trafficLightColor = "rood" || $ambulanceComing = true){

        $driveOn = false;
    }
    else if($driveOn == false){
        echo ("<p><span style=\"color:red;text-align:center;\">U moet stoppen</span></p>");
    }
    ?>

    <h1>Taak 3</h1>
    <?php
    $countryName = ""; // country: België / Bulgarije / Cyprus / Nederland / Zweden
    $currentAge = 16; // own age

    if($countryName == "België"){
        if($currentAge >= 16 && $currentAge <=17){
            echo ("alleen zwakke");
        }
        else if($currentAge >= 18){
            echo("alle drank");
        }
    }
    else if(($countryName == "Bulgarije" || $countryName == "Nederland") && $currentAge == 18){
        echo("alle drank");
    }

    else if ($countryName == "Zweden"){
        if($currentAge >= 18 && $currentAge <=19){
            echo ("alleen zwakke");
        }
        else if($currentAge >= 20){
            echo("alle drank");
        }
    }
    else if($currentAge <= 15){
        echo("niets");
    }


    ?>
</div>
</body>
</html>