<?php
/**
 * User: milad
 * Date: 24-4-2020
 * Time: 12:40
 * File: checklogin.php
 */
?>

<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes",
    "lilSloffy" => "Bot3000",
    "Lena" => "LenaOnIphone"
);
?>

<?php
foreach($authUsers as $user => $password) {

    if ($_POST['username'] == $user && $_POST['password'] == $password) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
    } else {
        $message = "Ongeldige username/wachtwoord, probeer het nog eens.";
    }
}
include "Opdracht_6.1.php";

?>