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
    $soorttocht = "<u>Elfstedentocht</u>";
    $tocht_fr = "<u>Alvestêdetocht</u>";
    $km = "<u>200</u>";
    $tocht = "<u>schaatstocht</u>";
    $type = "<u>natuurijs</u>";
    $vereniging = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $plaats = "<u>Leeuwarden</u>";
    $provincie = "<u>Friesland</u>";
    $hoevaak = "<u>15</u>";
    $jaar = "<u>1909</u>";

    $verhaal = "De $soorttocht (Fries: $tocht_fr) is een $km
                kilometer lange $hoevaak over $type die wordt
                georganiseerd door de $vereniging. $plaats, de hoofdstad van $provincie, is start- en
                aankomstplaats. De $soorttocht is inmiddels $hoevaak maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 1</h1>");
    echo ("<p>$verhaal</p>");

    $verhaal2 = "De " . $soorttocht .  " (Fries: " . $tocht_fr . ") is een " . $km . " kilometer lange " . $hoevaak . " over " . $type . " die wordt
                georganiseerd door de " . $vereniging .". " . $plaats . ",  de hoofdstad van " . $provincie . ",  is start- en
                aankomstplaats. De " . $soorttocht . " is inmiddels " . $hoevaak . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 2</h1>");
    echo ("<p>$verhaal2</p>");
    ?>
</div>
</body>
</html>