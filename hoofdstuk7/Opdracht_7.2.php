<?php
/**
 * User: milad
 * Date: 25-5-2020
 * Time: 11:47
 * File: Opdracht_7.2.php
 */
?>

<?php
include "../Include/header.php"
?>


<?php
//Wanneer je wel een result hebt en je het wil zien

try //de code in het try block is de enige code die wordt uitgevoerd
    // als deze code succesvol wordt uitgevoerd
{
    $pdo = new PDO("odbc:odbc3");
    echo "database connectie gelukt <br><br>";
} // de code in het catch blok wordt alleen uitgevoerd als er een fout
    // optreedt in de code in het try block
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
// Het resultaat van bovenstaande code is dat ik een variabele $pdo heb
// van het type object, waarmee ik een query kan uitvoeren op de database




// $sql is de sql statement die ik wil uitvoeren op de database,
// en aangezien $pdo de connectie-handler is (het object dat de connectie
// vasthoudt)moet ik de query wel op die manier uitvoeren
$sql = 'SELECT * FROM joke';
$result = $pdo->query($sql);
// Maar hoe krijg ik nu alle grappen binnen????
// Ik zie links van het = teken de variabele $result, zou hierin dan alle
// grappen zitten?




while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // omdat row een associatieve array is kan ik de waardes als associaties
    // uit de rij halen, dus:
    echo "<br>" . $row['id'] . $row['joketext'] . $row['jokeclou'] . $row['jokedate'] . "<br>";
    $test = $row['id'];
}
?>





<?php
//Query uitvoeren zonder een resultaat

try
{
    $pdo->exec("INSERT INTO joke VALUES('Waarom mogen er in Rusland niet meer dan 3 in de auto','Anders krijg je vierussen…','2020/5/17')");
    $pdo->exec("DELETE FROM joke WHERE id > 6");
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die();
}
?>
















<h2>Taak 4</h2>
<?php
// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
    $counter = $row['id'];
}
// Tonen van de inhoud van aJokes
/*
 * --------------------------
 * echo "<pre>";
 * var_dump($aJokes);
 * echo "</pre>";
 * --------------------------
*/
?>

<table>
    <tr>
        <th>ID</th>
        <th>Joketext</th>
        <th>Jokeclou</th>
        <th>Jokedate</th>
    </tr>
        <?php
        for($i=0; $i<$counter; $i++) {
            echo "<tr><td>" . $aJokes[$i]['id'] . "</td><td>" . $aJokes[$i]['joketext'] . "</td><td></td><td>" . $aJokes[$i]['jokedate'] . "</td></tr>";
        }
        ?>

</table>








<?php
include "../Include/footer.php"
?>