<?php
/**
 * User: milad
 * Date: 7-3-2020
 * Time: 12:24
 * File: Opdracht_4.4.php
 */
?>

<?php
include "../Include/header.php"
?>

<?php
// Vandaag
$nu = strtotime("now");
$datumVandaag = date('d-m-y', $nu);

// Dag van de week 0-7
$datumDag = date('w', $nu);
echo "Vandaag is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo "<br>";
$dagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
echo "Vandaag is het ".$dagenWeek[$datumDag] . " en datum is ". $datumVandaag;

// Morgen
$nu = strtotime('+1 days');
$datumVandaag = date('d-m-y', $nu);
$datumDag = date('w',$nu);

echo "<br>Morgen is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo"<br>";
echo "Morgen is het ".$dagenWeek[$datumDag]. " en de datum is ". $datumVandaag;




?>


<?php
include "../Include/footer.php"
?>