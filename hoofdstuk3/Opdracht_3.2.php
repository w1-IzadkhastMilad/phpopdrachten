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
    <?php
    $trafficLightColor = "oranje";
    $ambulanceComing = false;
    $driveOn = true;

    if($trafficLightColor == "groen" && $ambulanceComing == false){
        $driveOn = true;
        echo("<span style=\"color:lawngreen;text-align:center;\">U mag doorrijden</span>");
    }
    else if($trafficLightColor == "oranje" || $ambulanceComing == true || $trafficLightColor == "rood"){
        $driveOn = false;
    }
    else if($driveOn == false){
        echo ("<span style=\"color:red;text-align:center;\">U moet stoppen</span>");
    }
    ?>
</div>
</body>
</html>