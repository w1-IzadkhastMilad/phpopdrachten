<?php
/**
 * User: milad
 * Date: 6-4-2020
 * Time: 10:57
 * File: login.php
 */
?>

<?php
include "../Include/header.php"
?>
<style>
    #login{
        display: inline-block;
    }
    #Ingelogt{
        display: none;
    }
</style>
<?php
include "script.php"
?>
<h1>Bergheen</h1>
<div id="login" class="box">
<form action="login.php" method="post">
    <p>Login om onze adresgegevens + openingstijden te zien</p>
    <?php
    echo $message;
    ?>
    <br>
    <label>Username</label><input name="Username" type="text"><br>
    <label>Passowrd</label><input name="Password" type="password"><br>
    <input type="submit" name="verzenden" value="login">
</form>
</div>
<div id="Ingelogt">
    <p>Welkom!</p>
    <style>
        #openingstijden{
            display: inline-block;
            border: 1px solid black;
        }
        #adresgegevens{
            display: inline-block;
            border: 1px solid black;
        }
    </style>
    <div id="openingstijden">
        <p>Openingstijden</p>
        <p>Do: 22:00</p>
        <p>Vr: All day</p>
        <p>Za: All day</p>
        <p>Zo: 12:00</p>
    </div>
    <div id="adresgegevens">
        <p>Adresgegevens</p>
        <p>Am Wriezener Bahnhof</p>
        <p>10243 Berlin</p>
        <p>Duisland</p>
    </div>
    <p>Deze gegevens dien je ten alle tijden geheim te houden!</p>
</div>



<?php
include "../Include/footer.php"
?>