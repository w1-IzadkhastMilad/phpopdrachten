<?php
/**
 * User: milad
 * Date: 27-5-2020
 * Time: 09:41
 * File: Index1.php
 */
?>

<?php
include "../Include/header.php"
?>

<?php


// Inladen functies bestand
include("function.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";
$jokes = executeQuery($query);

echo "<p> $query </p>";

// Resultaten rij voor rij ophalen
while ($row = $jokes->fetch(PDO::FETCH_ASSOC)) {
    echo "<br>" . $row["jokedate"] . $row["joketext"] . $row["jokeclou"] . "<br>";
}


?>


<?php
include "../Include/footer.php"
?>