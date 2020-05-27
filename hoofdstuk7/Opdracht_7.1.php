<?php
/**
 * User: milad
 * Date: 18-5-2020
 * Time: 12:25
 * File: Opdracht_7.1.php
 */
?>

<?php
include "../Include/header.php"
?>

<?php
// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc3");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";

?>


<?php
include "../Include/footer.php"
?>