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

</head>
<body>
<h2>Uitwerking van <a href="../Index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <?php
    $elf = "Elfstedentocht";
    $alve = "Alvestêdetocht";
    $km = "200";
    $schaats = "schaatstocht";
    $natuur = "natuurijs";
    $kvdfes = "Koninklijke Vereniging De Friesche Elf Steden";
    $leeuw = "Leeuwarden";
    $fries = "Friesland";
    $num = "15";
    $jaar = "1909";
    $verhaal = "De $elf (Fries: $alve) is een $km
                kilometer lange $schaats over $natuur die wordt
                georganiseerd door de $kvdfes. $leeuw, de hoofdstad van $fries, is start- en
                aankomstplaats. De $elf is inmiddels $num maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("$verhaal");
    ?>
</div>
</body>
</html>