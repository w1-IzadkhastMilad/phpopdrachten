<?php
/**
 * User: milad
 * Date: 25-5-2020
 * Time: 11:48
 * File: Opdracht_7.4.php
 */
?>

<?php
include "../Include/header.php";
?>

<?php
// Inladen functies bestand
include("function.php");

// Starten van een database connectie
startConnection();

// Get the date
date_default_timezone_set("Europe/Amsterdam");
$date = date("Y-m-j");


// Executeren van een SQL query
if (isset($_POST['joketext']) == true) {

    $text = $_POST['joketext'];
    $clou = $_POST['jokeclou'];

    $query = "INSERT INTO joke VALUES('$text','$clou','$date')";
    $jokes = executeQueryViaExec($query);

    echo "<h1>Grap toegevoegd!</h1>";
    echo "<br>";
    echo "<p>Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:</p>";
    echo "<br>";
    echo "<i>joketext: </i>" . $text;
    echo "<i>jokeclou: </i>" . $clou;
    echo "<br>";
    echo "<a href=\"Opdracht_7.3.php\">Bekijk grappen (opdracht 7.3)</a>";
}
?>



    <h1>Nieuwe grap toevoegen</h1>
    <form action="Opdracht_7.4.php" method="POST">
        <label>Joketext</label>
        <input name="joketext" type="text" placeholder="Joketext komt hier">
        <br>
        <br>
        <label>Jokeclou</label>
        <input name="jokeclou" type="text" placeholder="Jokeclou komt hier">
        <br>
        <input type="submit" value="versturen">
    </form>
















<?php
include "../Include/footer.php"
?>