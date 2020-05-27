<?php
/**
 * User: milad
 * Date: 25-5-2020
 * Time: 11:48
 * File: Opdracht_7.3.php
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
$query = "SELECT * FROM joke WHERE joketext LIKE ";
$jokes = executeQuery($query);


$aJokes = array();

// Resultaten rij voor rij ophalen
while ($row = $jokes->fetch(PDO::FETCH_ASSOC)) {
    $aJokes[] = $row;
    $counter = $row['id'];
}

?>


<p><?php echo $query?>'%blondje%'</p>
<form action="Opdracht_7.3.php" method="GET">
    <label>Zoekterm:</label>
    <input name="inputText" type="text">
    <input type="submit" value="Zoeken">
</form>
<hr>
<table>
    <tr>
        <th>Jokeid</th>
        <th>Joketext</th>
        <th>Jokecleu</th>
        <th>Jokedate</th>
    </tr>
    <?php
    $tester = $_GET["inputText"];
    $test = $query . $tester;

    for($i=0; $i<$counter; $i++) {
        echo "<tr><td>" . $aJokes[$i]['id'] . "</td><td>" . $aJokes[$i]['joketext'] . "</td><td>". $aJokes[$i]['jokeclou'] . "</td><td>" . $aJokes[$i]['jokedate'] . "</td></tr>";
    ?>

</table>
<?php
?>

<?php
include "../Include/footer.php"
?>