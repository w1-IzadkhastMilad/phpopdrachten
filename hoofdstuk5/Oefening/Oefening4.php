<?php
/**
 * User: milad
 * Date: 30-3-2020
 * Time: 11:14
 * File: Oefening4.php
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
    <link href="../../CSS/style.css" type="text/css" rel="stylesheet">

</head>
<body>
    <h2>Uitwerking van <a href="../Index.php"> PHP-opdrachten</a></h2>
<div class="box">

<?php
include "../../Include/oefening4/Oefening4_funcions.php";
helloWorld();

$returnWaarde = getGoodbye();
echo $returnWaarde;

?>


<?php
include "../../Include/footer.php"
?>